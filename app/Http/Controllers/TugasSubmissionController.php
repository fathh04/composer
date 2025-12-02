<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasSubmission;
use App\Models\KuisResult;
use Illuminate\Support\Facades\Auth;

class TugasSubmissionController extends Controller
{
    // ============================================================
    // SIMPAN HTML (DENGAN LOCK AGAR TIDAK BISA KIRIM 2x)
    // ============================================================
    public function saveHtml(Request $request)
    {
        $request->validate([
            'html' => 'required'
        ]);

        $userId = Auth::id();

        // 🔒 CEK APAKAH SUDAH PERNAH SUBMIT
        $existing = TugasSubmission::where('pengguna_id', $userId)->first();

        if ($existing) {
            return response()->json([
                'success' => false,
                'locked'  => true,
                'message' => 'Tugas sudah pernah dikirim. Anda tidak bisa mengirim lagi.'
            ]);
        }

        // ➤ BELUM PERNAH SUBMIT → SIMPAN
        $submission = TugasSubmission::create([
            'pengguna_id' => $userId,
            'html_code'   => $request->html
        ]);

        return response()->json([
            'success' => true,
            'submission_id' => $submission->id
        ]);
    }

    // ============================================================
    // SIMPAN SCREENSHOT
    // ============================================================
    public function uploadScreenshot(Request $request)
    {
        $request->validate([
            'submission_id' => 'required|exists:tugas_submissions,id',
            'image' => 'required|image|max:2048'
        ]);

        $submission = TugasSubmission::findOrFail($request->submission_id);

        $path = public_path('uploads/screenshots');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('image');
        $filename = time() . "-" . $file->getClientOriginalName();
        $file->move($path, $filename);

        $submission->update([
            'screenshot' => $filename
        ]);

        return back()->with('success', 'Tugas berhasil dikumpulkan!');
    }

    // ============================================================
    // AMBIL DATA SUBMISSION
    // ============================================================
    public function getSubmission($id)
    {
        $submission = TugasSubmission::where('pengguna_id', $id)
            ->latest()
            ->first();

        $kuis = KuisResult::where('pengguna_id', $id)
            ->latest()
            ->first();

        $kelas = \App\Models\pengguna::find($id)->kelas()->first();

        $feedback = \App\Models\FeedbackGuru::where('pengguna_id', $id)
            ->where('guru_id', Auth::id())
            ->first();

        return response()->json([
            // 👇 status apakah sudah pernah submit
            'submitted' => $submission ? true : false,

            'exists' => $submission ? true : false,
            'html_code' => $submission ? $submission->html_code : 'Belum ada submission.',

            'screenshot' => $submission
                ? asset('uploads/screenshots/' . $submission->screenshot)
                : null,

            'quiz_score' => $kuis ? $kuis->score : '-',
            'kelas' => $kelas ? $kelas->namaKelas : '-',

            'feedback' => $feedback->feedback ?? ""
        ]);
    }
}
