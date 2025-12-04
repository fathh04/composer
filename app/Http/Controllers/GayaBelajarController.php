<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Services\GeminiService;

class GayaBelajarController extends Controller
{
    /* =========================================================
     *   PREDIKSI UTAMA
     * ========================================================= */
    public function prediksi(Request $request)
    {
        $request->validate([
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
            'user_email' => 'required|email'
        ]);

        /* ------------------------------------------------------
         * Ambil user
         * ------------------------------------------------------ */
        $user = pengguna::where('email', $request->user_email)->first();
        if (!$user) {
            return back()->with('error', 'Akun tidak ditemukan.');
        }

        /* ------------------------------------------------------
         * Menggabungkan jawaban user
         * ------------------------------------------------------ */
        $answers = strtolower(trim($request->q1 . ' ' . $request->q2 . ' ' . $request->q3));

        /* ------------------------------------------------------
         * 1) Embedding user
         * ------------------------------------------------------ */
        $userEmbedding = GeminiService::embedding($answers);

        if (!$userEmbedding) {
            // Fallback hard rule
            $label = ucfirst($this->hardRule($answers));
            $detail = $this->getDetail($label);
            return $this->finalize($user, $label, $detail['alasan'], $detail['rekom']);
        }

        /* ------------------------------------------------------
         * 2) Load dataset + embedding dataset
         * ------------------------------------------------------ */
        $datasetRows = $this->loadDataset();
        $datasetEmbedding = $this->loadOrCreateDatasetEmbedding($datasetRows);

        /* ------------------------------------------------------
         * 3) Prediksi similarity
         * ------------------------------------------------------ */
        $datasetPrediction = $this->predictFromSimilarity($userEmbedding, $datasetEmbedding);

        /* ------------------------------------------------------
         * 4) Hard-rule
         * ------------------------------------------------------ */
        $rulePrediction = $this->hardRule($answers);

        /* ------------------------------------------------------
         * 5) Validasi LLM
         * ------------------------------------------------------ */
        $llm = $this->llmValidation($datasetPrediction, $rulePrediction, $answers);

        if ($llm) {
            $label = ucfirst(strtolower($llm['label']));
            if (in_array($label, ['Visual','Auditori','Kinestetik'])) {
                return $this->finalize($user, $label, $llm['alasan'], $llm['rekomendasi']);
            }
        }

        /* ------------------------------------------------------
         * 6) Fallback Akhir
         * ------------------------------------------------------ */
        if ($datasetPrediction === $rulePrediction) {
            $label = ucfirst($datasetPrediction);
        } else {
            $label = ucfirst($datasetPrediction);
        }

        $detail = $this->getDetail($label);

        return $this->finalize($user, $label, $detail['alasan'], $detail['rekom']);
    }

    /* =========================================================
     *   DATASET LOADER
     * ========================================================= */
    private function loadDataset()
    {
        $path = storage_path('app/dataset_gaya_belajar.csv');
        $rows = [];

        if (!file_exists($path)) return $rows;

        $lines = array_map('trim', file($path));

        foreach ($lines as $i => $line) {
            if ($i === 0 && str_contains($line, 'learning_style')) continue;
            if ($line === '') continue;

            $p = str_getcsv($line);
            if (count($p) < 4) continue;

            $rows[] = [
                "label" => strtolower($p[0]),
                "text"  => strtolower($p[1] . " " . $p[2] . " " . $p[3])
            ];
        }

        return $rows;
    }

    /* =========================================================
     *   LOAD / BUILD EMBEDDING DATASET
     * ========================================================= */
    private function loadOrCreateDatasetEmbedding($datasetRows)
    {
        $cachePath = storage_path('app/dataset_gaya_belajar_embed.json');

        if (file_exists($cachePath)) {
            $json = json_decode(file_get_contents($cachePath), true);
            if (is_array($json) && count($json) > 0) {
                return $json;
            }
        }

        $result = [];
        foreach ($datasetRows as $row) {
            $vec = GeminiService::embedding($row['text']);
            if ($vec) {
                $result[] = [
                    "label" => $row['label'],
                    "text"  => $row['text'],
                    "vec"   => $vec
                ];
            }
        }

        file_put_contents($cachePath, json_encode($result));
        return $result;
    }

    /* =========================================================
     *   SIMILARITY
     * ========================================================= */
    private function predictFromSimilarity($userVec, $dataset)
    {
        $score = ['visual'=>0,'auditori'=>0,'kinestetik'=>0];

        foreach ($dataset as $row) {
            $sim = $this->cosineSimilarity($userVec, $row['vec']);
            $score[$row['label']] += $sim;
        }

        arsort($score);
        return array_key_first($score);
    }

    /* =========================================================
     *   HARD RULE
     * ========================================================= */
    private function hardRule($answers)
    {
        $v = ['melihat','gambar','diagram','video','warna','catatan','mind map'];
        $a = ['mendengar','audio','diskusi','berbicara','lisan','penjelasan'];
        $k = ['praktik','gerak','aktivitas','fisik','menyentuh','simulasi','eksperimen'];

        $score = ['visual'=>0,'auditori'=>0,'kinestetik'=>0];

        foreach ($v as $w) if (str_contains($answers, $w)) $score['visual']++;
        foreach ($a as $w) if (str_contains($answers, $w)) $score['auditori']++;
        foreach ($k as $w) if (str_contains($answers, $w)) $score['kinestetik']++;

        arsort($score);
        return array_key_first($score);
    }

    /* =========================================================
     *   COSINE SIMILARITY
     * ========================================================= */
    private function cosineSimilarity($a, $b)
    {
        $dot = 0; $magA = 0; $magB = 0;
        $len = min(count($a), count($b));

        for ($i=0; $i<$len; $i++) {
            $dot += $a[$i] * $b[$i];
            $magA += $a[$i] ** 2;
            $magB += $b[$i] ** 2;
        }

        if ($magA == 0 || $magB == 0) return 0;
        return $dot / (sqrt($magA) * sqrt($magB));
    }

    /* =========================================================
     *   LLM VALIDATION
     * ========================================================= */
    private function llmValidation($datasetPrediction, $rulePrediction, $answers)
    {
        $prompt = "
            Anda adalah model klasifikasi gaya belajar.
            Konteks:
            - Prediksi dataset: $datasetPrediction
            - Prediksi rule: $rulePrediction

            Jawaban user:
            $answers

            Tolong balas HANYA JSON murni.

            Format:
            {
            \"label\": \"Visual/Auditori/Kinestetik\",
            \"alasan\": \"...\",
            \"rekomendasi\": \"...\"
            }";
        $raw = GeminiService::predict($prompt);
        if (!$raw) return null;

        $clean = $this->extractJson($raw);
        $json = json_decode($clean, true);

        return $json ?: null;
    }

    /* =========================================================
     *   EXTRACT JSON
     * ========================================================= */
    private function extractJson($text)
    {
        if (preg_match('/\{(?:[^{}]|(?R))*\}/s', $text, $m)) {
            return $m[0];
        }
        return "{}";
    }

    /* =========================================================
     *   DETAIL ALASAN DAN REKOMENDASI
     * ========================================================= */
    private function getDetail($label)
    {
        $data = [
            "Visual" => [
                "alasan" => "Pengguna memahami informasi lebih baik melalui gambar, warna, diagram, dan visualisasi.",
                "rekom"  => "Gunakan mind map, catatan berwarna, diagram alur, gambar, dan infografis."
            ],
            "Auditori" => [
                "alasan" => "Pengguna memahami informasi lebih baik melalui pendengaran, penjelasan verbal, dan diskusi.",
                "rekom"  => "Gunakan audio, diskusi, tanya jawab, podcast, dan penjelasan langsung."
            ],
            "Kinestetik" => [
                "alasan" => "Pengguna belajar melalui aktivitas langsung, praktik fisik, dan pengalaman nyata.",
                "rekom"  => "Gunakan simulasi, eksperimen, roleplay, demonstrasi, dan aktivitas fisik."
            ]
        ];

        return $data[$label] ?? ["alasan" => "-", "rekom" => "-"];
    }

    /* =========================================================
     *   FINAL SAVE
     * ========================================================= */
    private function finalize($user, $label, $alasan, $rekom)
    {
        $user->gaya_belajar = $label;
        $user->alasan = $alasan;
        $user->rekomendasi = $rekom;
        $user->save();

        session([
            'gaya_belajar' => strtolower($label),
            'alasan' => $alasan,
            'rekomendasi' => $rekom
        ]);

        return redirect()->route('login')
            ->with('success', 'Gaya belajar berhasil ditentukan.');
    }
}
