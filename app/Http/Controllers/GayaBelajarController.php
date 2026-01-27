<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\LmsLog;
use App\Services\GeminiService;

class GayaBelajarController extends Controller
{
    /* =========================================================
     *   PREDIKSI UTAMA
     * ========================================================= */
    public function prediksi(Request $request)
    {
        $request->validate([
            'answers' => 'required|array|min:14',
            'answers.*' => 'required|string',
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
        * Ambil LOG LMS (synthetic / real)
        * ------------------------------------------------------ */
        // $lms = LmsLog::where('user_id', $user->id)->first(); //Aktifkan jika pakai data persiswa
        $lms = LmsLog::selectRaw('
            AVG(login_count) as login_count,
            AVG(avg_session_time) as avg_session_time,
            AVG(material_access) as material_access,
            AVG(forum_activity) as forum_activity,
            AVG(assignment_submit) as assignment_submit,
            AVG(quiz_score) as quiz_score
        ')->first();

        /* Fallback jika belum ada log (synthetic default) */
        if (!$lms) {
            $lms = (object)[
                'login_count' => rand(5,15),
                'avg_session_time' => rand(10,40),
                'material_access' => rand(5,20),
                'forum_activity' => rand(0,10),
                'assignment_submit' => rand(1,5),
                'quiz_score' => rand(60,90)
            ];
        }

        /* ================================
        * BUILD FEATURE LMS  <<< TAMBAHKAN DI SINI
        * ================================ */
        $lmsFeature = $this->buildLmsFeature($lms);

        /* ------------------------------------------------------
         * Menggabungkan jawaban user
         * ------------------------------------------------------ */
        $answers = strtolower(implode(' ', $request->answers));

        /* ------------------------------------------------------
         * 1) Embedding user
         * ------------------------------------------------------ */
        $userEmbedding = GeminiService::embedding($answers);

        if (!$userEmbedding) {
            $label = ucfirst($this->hardRule($answers));
            $detail = $this->getDetailWithLms($label, $lmsFeature);
            return $this->finalize($user, $label, $detail['alasan'], $detail['rekom']);
        }

        /* ------------------------------------------------------
         * 2) Load dataset + embedding dataset (AKTIFKAN KEMBALI APABILA DATASET SUDAH ADA)
         * ------------------------------------------------------ */
        // $datasetRows = $this->loadDataset();
        // $datasetEmbedding = $this->loadOrCreateDatasetEmbedding($datasetRows);

        /* ------------------------------------------------------
         * 3) Prediksi similarity (AKTIKAN KEMBALI APABILA DATASET SUDAH ADA)
         * ------------------------------------------------------ */
        // $datasetPrediction = $this->predictFromSimilarity($userEmbedding, $datasetEmbedding);

        /* ------------------------------------------------------
         * Kode Sementara ketika dataset nonAktif (NonAktifkan KEMBALI APABILA DATASET SUDAH ADA)
         * ------------------------------------------------------ */
        $datasetPrediction = count($this->loadDataset()) >= 20
            ? $this->predictFromSimilarity($userEmbedding, $this->loadOrCreateDatasetEmbedding($this->loadDataset()))
            : null;

        /* ------------------------------------------------------
         * 4) Hard-rule
         * ------------------------------------------------------ */
        $rulePrediction = $this->hardRule($answers);

        /* ------------------------------------------------------
         * 5) Validasi LLM
         * ------------------------------------------------------ */
        $llm = $this->llmValidation(
            $datasetPrediction,
            $rulePrediction,
            $answers,
            $lmsFeature
        );

        // AKTIFKAN KEMBALI APABILA DATASET SUDAH ADA
        // if ($llm) {
        //     $label = ucfirst(strtolower($llm['label']));
        //     if (in_array($label, ['Visual','Auditori','Kinestetik'])) {
        //         return $this->finalize($user, $label, $llm['alasan'], $llm['rekomendasi']);
        //     }
        // }

        // nonAktifkan ketika dataset sudah ada
        if ($llm && isset($llm['label'])) {
            return $this->finalize(
                $user,
                ucfirst($llm['label']),
                $llm['alasan'] ?? 'Analisis berbasis LMS menunjukkan pola keterlibatan tertentu.',
                $llm['rekomendasi'] ?? 'Gunakan strategi pembelajaran sesuai gaya belajar.'
            );
        }

        /* ------------------------------------------------------
         * 6) Fallback Akhir
         * ------------------------------------------------------ */
        // AKTIFKAN KEMBALI KETIKA DATASET SUDAH ADA
        // if ($datasetPrediction === $rulePrediction) {
        //     $label = ucfirst($datasetPrediction);
        // } else {
        //     $label = ucfirst($datasetPrediction);
        // }

        // $detail = $this->getDetail($label);

        // return $this->finalize($user, $label, $detail['alasan'], $detail['rekom']);

        //Nonaktifkan ketika dataset sudah ada
        $label = ucfirst($datasetPrediction ?? $rulePrediction);
        $detail = $this->getDetailWithLms($label, $lmsFeature);

        return $this->finalize(
            $user,
            $label,
            "[Fallback Sistem] ".$detail['alasan'],
            $detail['rekom']
        );
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
            if ($i === 0) continue;
            if ($line === '') continue;

            $p = str_getcsv($line);
            if (count($p) < 2) continue;

            $rows[] = [
                "label" => strtolower($p[0]),
                "text"  => strtolower($p[1])
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
        $k = [
                'gerak','gerakan','bergerak',
                'praktik','praktek',
                'aktivitas','aktif',
                'fisik','tubuh','anggota tubuh',
                'menyentuh','sentuh','jari',
                'berjalan','duduk','diam',
                'simulasi','eksperimen',
                'bermain','game','permainan'
            ];

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
    *   LLM VALIDATION (ANGKET + LMS)
    * ========================================================= */
    private function llmValidation($datasetPrediction, $rulePrediction, $answers, $lmsFeature)
    {
        $prompt = "
Anda adalah AI Decision Support System pembelajaran.

DATA ANGKET (preferensi belajar siswa):
$answers

RINGKASAN PERILAKU LMS (data dinamis):
- Login: {$lmsFeature['login_frequency']}
- Engagement: {$lmsFeature['engagement']}
- Konsistensi Tugas: {$lmsFeature['assignment']}
- Tren Kuis: {$lmsFeature['quiz_trend']}

TUGAS ANDA:
1. Tentukan gaya belajar utama siswa (Visual/Auditori/Kinestetik)
2. BUAT REKOMENDASI BELAJAR berdasarkan GAYA BELAJAR (ANGKET)
3. BUAT ALASAN berdasarkan DATA LMS (bukan angket)

ATURAN PENTING:
- Rekomendasi HARUS berasal dari gaya belajar
- Alasan HARUS menyebut kondisi LMS secara eksplisit
- Jangan gunakan kalimat template

Balas JSON MURNI:
{
  \"label\": \"...\",
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
    private function getDetailWithLms($label, $lmsFeature)
    {
        $alasan = "Berdasarkan hasil angket, siswa menunjukkan kecenderungan gaya belajar $label. Analisis data aktivitas LMS secara umum menunjukkan pola perilaku belajar yang relevan dengan kecenderungan tersebut. ";

        if ($lmsFeature['engagement'] === 'Passive') {
            $alasan .= "Namun, tingkat keterlibatan belajar pada LMS masih rendah. ";
        }

        if ($lmsFeature['quiz_trend'] === 'Needs Improvement') {
            $alasan .= "Hasil evaluasi menunjukkan perlunya penguatan konsep dasar. ";
        }

        $rekom = match ($label) {
            'Visual' =>
                "Gunakan video pembelajaran, diagram, dan infografis. ",
            'Auditori' =>
                "Gunakan diskusi, penjelasan verbal, dan audio pembelajaran. ",
            'Kinestetik' =>
                "Gunakan praktik langsung, simulasi, dan aktivitas hands-on. "
        };

        if ($lmsFeature['engagement'] === 'Passive') {
            $rekom .= "Mulai dengan aktivitas singkat dan interaktif untuk meningkatkan keterlibatan. ";
        }

        if ($lmsFeature['quiz_trend'] === 'Needs Improvement') {
            $rekom .= "Tambahkan latihan bertahap dan evaluasi formatif sebelum ujian. ";
        }

        return [
            'alasan' => trim($alasan),
            'rekom'  => trim($rekom)
        ];
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

    private function buildLmsFeature($lms)
    {
        // Ambil pola global seluruh siswa
        $avg = LmsLog::selectRaw('
            AVG(login_count) as avg_login,
            AVG(material_access) as avg_material,
            AVG(assignment_submit) as avg_assignment,
            AVG(quiz_score) as avg_quiz
        ')->first();

        return [
            'login_frequency' =>
                $lms->login_count >= $avg->avg_login ? 'High' : 'Low',

            'engagement' =>
                $lms->material_access >= $avg->avg_material ? 'Active' : 'Passive',

            'assignment' =>
                $lms->assignment_submit >= $avg->avg_assignment ? 'Consistent' : 'Inconsistent',

            'quiz_trend' =>
                $lms->quiz_score >= $avg->avg_quiz ? 'Good' : 'Needs Improvement'
        ];
    }
}
