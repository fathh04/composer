<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasSubmission;
use App\Models\KuisResult;
use App\Models\TugasGuru;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TugasSubmissionController extends Controller
{
    // ============================================================
    // SIMPAN HTML (LOCK 1x SUBMIT)
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
    // UPLOAD SCREENSHOT
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
    // UPLOAD TUGAS PDF (TOMBOL UPLOAD TUGAS)
    // ============================================================
    public function uploadPdf(Request $request, $materi_id)
    {
        // Deteksi otomatis field mana yg dipakai
        $field = $request->hasFile('file_tugas') ? 'file_tugas' : 'pdf_file';

        $request->validate([
            $field => 'required|mimes:pdf|max:2048'
        ]);

        $userId = auth()->id();

        // Ambil record tugas milik siswa + materi
        $tugas = TugasGuru::where('pengguna_id', $userId)
            ->where('materi_id', $materi_id)
            ->first();

        // Hapus file lama (jika ada)
        if ($tugas && $tugas->pdf_file && Storage::disk('public')->exists($tugas->pdf_file)) {
            Storage::disk('public')->delete($tugas->pdf_file);
        }

        // Upload file baru → ke storage/app/public/tugas_pdf
        $path = $request->file($field)->store('tugas_pdf', 'public');

        // Update jika sudah ada, atau buat baru jika belum
        if ($tugas) {
            $tugas->update([
                'pdf_file' => $path
            ]);
        } else {
            TugasGuru::create([
                'pengguna_id' => $userId,
                'materi_id' => $materi_id,
                'pdf_file' => $path
            ]);
        }

        return back()->with('success', 'Tugas berhasil diupload.');
    }

    // ============================================================
    // LIST TUGAS SISWA
    // ============================================================
    public function listTugasSiswa($materi_id)
    {
        $tugas = TugasGuru::with('pengguna')
            ->where('materi_id', $materi_id)
            ->get();

        return view('guru.tabsKelas.tugas', compact('tugas'));
    }

    // ============================================================
    // NILAI SISWA
    // ============================================================
    public function beriNilai(Request $request, $id)
    {
        $request->validate([
            'nilai' => 'required|integer|min:0|max:100'
        ]);

        $tugas = TugasGuru::findOrFail($id);

        $tugas->update([
            'nilai' => $request->nilai
        ]);

        return back()->with('success', 'Nilai berhasil disimpan.');
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
            'submitted' => $submission ? true : false,
            'exists' => $submission ? true : false,

            'html_code' => $submission ? $submission->html_code : 'Belum ada submission.',

            'screenshot' => $submission
                ? asset('uploads/screenshots/' . $submission->screenshot)
                : null,

            'pdf_file' => $submission && $submission->pdf_file
                ? asset('storage/' . $submission->pdf_file)
                : null,

            'quiz_score' => $kuis ? $kuis->score : '-',
            'kelas' => $kelas ? $kelas->namaKelas : '-',

            'feedback' => $feedback->feedback ?? ""
        ]);
    }
}
