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

        /* ================================
        * 1. Ambil user
        * ================================ */
        $user = pengguna::where('email', $request->user_email)->first();
        if (!$user) {
            return back()->with('error', 'Akun tidak ditemukan.');
        }

        /* ================================
        * 2. SKORING ANGKET (MODEL UTAMA)
        * ================================ */
        $score = ['visual'=>0,'auditori'=>0,'kinestetik'=>0];

        foreach ($request->answers as $ans) {
            $a = strtolower($ans);

            if (str_contains($a, 'gambar') || str_contains($a, 'melihat') || str_contains($a, 'catatan')) {
                $score['visual']++;
            }
            elseif (str_contains($a, 'mendengar') || str_contains($a, 'diskusi') || str_contains($a, 'penjelasan')) {
                $score['auditori']++;
            }
            elseif (
                str_contains($a, 'gerak') ||
                str_contains($a, 'praktik') ||
                str_contains($a, 'game') ||
                str_contains($a, 'simulasi')
            ) {
                $score['kinestetik']++;
            }
        }

        arsort($score);
        $label = ucfirst(array_key_first($score));

        /* ================================
        * 3. Ambil & olah LMS
        * ================================ */
        $lms = LmsLog::selectRaw('
            AVG(login_count) as login_count,
            AVG(avg_session_time) as avg_session_time,
            AVG(material_access) as material_access,
            AVG(forum_activity) as forum_activity,
            AVG(assignment_submit) as assignment_submit,
            AVG(quiz_score) as quiz_score
        ')->first();

        if (!$lms) {
            $lms = (object)[
                'login_count'=>10,
                'material_access'=>10,
                'assignment_submit'=>3,
                'quiz_score'=>75
            ];
        }

        $lmsFeature = $this->buildLmsFeature($lms);

        /* ================================
        * 4. LLM = VALIDASI & NARASI
        * ================================ */
        $llm = $this->llmValidation(
            $label,
            $request->answers,
            $lmsFeature
        );

        if ($llm && isset($llm['alasan'])) {
            return $this->finalize(
                $user,
                $label,
                $llm['alasan'],
                $llm['rekomendasi']
            );
        }

        /* ================================
        * 5. FALLBACK AMAN
        * ================================ */
        $detail = $this->getDetailWithLms($label, $lmsFeature);

        return $this->finalize(
            $user,
            $label,
            $detail['alasan'],
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
    private function llmValidation($label, $answers, $lmsFeature)
    {
        $answerText = implode(' | ', $answers);

        $prompt = "
    Anda adalah AI pendukung keputusan pembelajaran.

    GAYA BELAJAR (SUDAH DITENTUKAN DARI ANGKET):
    $label

    DATA ANGKET:
    $answerText

    DATA PERILAKU LMS:
    - Login: {$lmsFeature['login_frequency']}
    - Engagement: {$lmsFeature['engagement']}
    - Tugas: {$lmsFeature['assignment']}
    - Durasi Belajar: {$lmsFeature['session_duration']}
    - Aktivitas Forum: {$lmsFeature['forum_participation']}
    - Kuis: {$lmsFeature['quiz_trend']}

    TUGAS:
    1. Jelaskan ALASAN berbasis LMS (bukan angket)
    2. Buat REKOMENDASI belajar sesuai gaya $label

    Balas JSON:
    {
    \"alasan\": \"...\",
    \"rekomendasi\": \"...\"
    }";

        $raw = GeminiService::predict($prompt);
        if (!$raw) return null;

        return json_decode($this->extractJson($raw), true);
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
        $alasan = "Hasil angket menunjukkan kecenderungan gaya belajar $label. ";

        $alasan .= "Berdasarkan data LMS, frekuensi login tergolong {$lmsFeature['login_frequency']}, ";
        $alasan .= "tingkat keterlibatan belajar {$lmsFeature['engagement']}, ";
        $alasan .= "dan performa kuis {$lmsFeature['quiz_trend']}. ";

        if ($lmsFeature['engagement'] === 'Passive') {
            $alasan .= "Namun, tingkat keterlibatan belajar pada LMS masih rendah. ";
        }

        if ($lmsFeature['quiz_trend'] === 'Needs Improvement') {
            $alasan .= "Hasil evaluasi menunjukkan perlunya penguatan konsep dasar. ";
        }

        $rekom = '';

        if ($label === 'Visual') {
            if ($lmsFeature['quiz_trend'] === 'Needs Improvement') {
                $rekom = "Gunakan video pendek dan infografis ringkas disertai latihan visual bertahap. ";
            } else {
                $rekom = "Gunakan video pembelajaran, diagram, dan infografis. ";
            }
        }
        elseif ($label === 'Auditori') {
            if ($lmsFeature['engagement'] === 'Passive') {
                $rekom = "Gunakan diskusi singkat dan penjelasan audio berdurasi pendek. ";
            } else {
                $rekom = "Gunakan diskusi, penjelasan verbal, dan audio pembelajaran. ";
            }
        }
        elseif ($label === 'Kinestetik') {
            if ($lmsFeature['assignment'] === 'Inconsistent') {
                $rekom = "Gunakan praktik langsung dengan tugas kecil dan terstruktur. ";
            } else {
                $rekom = "Gunakan praktik langsung, simulasi, dan aktivitas hands-on. ";
            }
        }

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
            AVG(avg_session_time) as avg_session_time,
            AVG(material_access) as avg_material,
            AVG(forum_activity) as avg_forum,
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

            'session_duration' =>
                $lms->avg_session_time >= $avg->avg_session_time ? 'Long' : 'Short',

            'forum_participation' =>
                $lms->forum_activity >= $avg->avg_forum ? 'Active' : 'Passive',

            'quiz_trend' =>
                $lms->quiz_score >= $avg->avg_quiz ? 'Good' : 'Needs Improvement'
        ];
    }
}
