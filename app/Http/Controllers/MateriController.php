<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Kelas;
use App\Models\pengguna;
use App\Models\KuisResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    // ============================================================
    //  HELPER: AMBIL LEADERBOARD
    // ============================================================
    private function getLeaderboardByStyle(string $style)
    {
        $users = pengguna::where('gaya_belajar', $style)->get();

        $rows = $users->map(function ($user) {
            $kuis = KuisResult::where('pengguna_id', $user->id)->latest()->first();

            return [
                'id'     => $user->id,
                'name'   => $user->nama,
                'score'  => $kuis ? (int) $kuis->score : 0,
                'avatar' => $user->avatar ?? null,
            ];
        })->sortByDesc('score')->values();

        return $rows;
    }

    private function getFullLeaderboard()
    {
        return [
            'visual'     => $this->getLeaderboardByStyle('Visual'),
            'auditori'   => $this->getLeaderboardByStyle('Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle('Kinestetik'),
        ];
    }

    // ============================================================
    //  INDEX (GURU MELIHAT MATERI DALAM KELAS)
    // ============================================================
    public function index($idkelas)
    {
        $materi = Materi::where('idkelas', $idkelas)->get();
        $kelas  = Kelas::findOrFail($idkelas);

        // agar view guru.isiKelasGuru tidak error, kirim juga data gaya belajar + leaderboard
        $visual     = pengguna::where('gaya_belajar', 'Visual')->get();
        $auditori   = pengguna::where('gaya_belajar', 'Auditori')->get();
        $kinestetik = pengguna::where('gaya_belajar', 'Kinestetik')->get();
        $leaderboard = $this->getFullLeaderboard();

        return view('guru.isiKelasGuru', compact(
            'materi',
            'kelas',
            'visual',
            'auditori',
            'kinestetik',
            'leaderboard'
        ));
    }

    // ============================================================
    //  STORE MATERI
    // ============================================================
    public function store(Request $request)
    {
        $request->validate([
            'judul'        => 'required|string|max:255',
            'deskripsi'    => 'required|string',
            'gaya_belajar' => 'required|string|in:visual,auditori,kinestetik',
            'file_materi'  => 'nullable|file|max:20000',
            'kelas_id'     => 'required|integer|exists:kelas,id',
        ]);

        $filePath = null;

        // Jika bukan kinestetik maka wajib upload file
        if ($request->gaya_belajar !== 'kinestetik') {
            $request->validate([
                'file_materi' => 'required|file|mimes:pdf,mp4,jpg,jpeg,png,mp3,wav'
            ]);

            $filePath = $request->file('file_materi')->store('materi', 'public');
        }

        Materi::create([
            'judul'        => $request->judul,
            'deskripsi'    => $request->deskripsi,
            'gaya_belajar' => $request->gaya_belajar,
            'file_materi'  => $filePath ?? '',
            'idkelas'      => $request->kelas_id,
        ]);

        // redirect ke halaman masuk kelas (supaya semua variabel yang diperlukan dikirim)
        return redirect()->route('guru.masukKelas', ['id' => $request->kelas_id])
            ->with('success', 'Materi berhasil ditambahkan!');
    }

    // ============================================================
    //  SHOW MATERI UNTUK GURU (alias halaman isi kelas guru)
    // ============================================================
    public function showMateri($id)
    {
        $materi = Materi::where('idkelas', $id)->get();
        $kelas  = Kelas::findOrFail($id);

        $visual     = pengguna::where('gaya_belajar', 'Visual')->get();
        $auditori   = pengguna::where('gaya_belajar', 'Auditori')->get();
        $kinestetik = pengguna::where('gaya_belajar', 'Kinestetik')->get();
        $leaderboard = $this->getFullLeaderboard();

        return view('guru.isiKelasGuru', compact(
            'materi',
            'kelas',
            'visual',
            'auditori',
            'kinestetik',
            'leaderboard'
        ));
    }

    // ============================================================
    //  DELETE MATERI
    // ============================================================
    public function destroy($idkelas, $id)
    {
        $materi = Materi::findOrFail($id);

        if ($materi->file_materi) {
            // file stored in storage/app/public/materi/...
            Storage::disk('public')->delete($materi->file_materi);
        }

        $materi->delete();

        return redirect()->route('materi.index', ['idkelas' => $idkelas])
            ->with('success', 'Materi berhasil dihapus');
    }

    // ============================================================
    // INDEX SISWA – tampilkan sesuai gaya belajar
    // ============================================================
    public function indexSiswa($idkelas)
    {
        $materi = Materi::where('idkelas', $idkelas)->get();
        $kelas  = Kelas::findOrFail($idkelas);

        $gaya = strtolower(Auth::user()->gaya_belajar);

        // mapping view sesuai gaya belajar
        $views = [
            'visual'     => 'siswa.isiKelas',
            'auditori'   => 'auditori.isiKelasAuditori',
            'kinestetik' => 'kinestetik.isiKelas'
        ];

        // default fallback = visual
        $view = $views[$gaya] ?? 'siswa.isiKelas';

        return view($view, compact('materi', 'kelas'));
    }


    // ============================================================
    // SHOW SISWA – sama seperti indexSiswa
    // ============================================================
    public function showForSiswa($idkelas)
    {
        $materi = Materi::where('idkelas', $idkelas)->get();
        $kelas  = Kelas::findOrFail($idkelas);

        $gaya = strtolower(Auth::user()->gaya_belajar);

        $views = [
            'visual'     => 'siswa.isiKelas',
            'auditori'   => 'auditori.isiKelasAuditori',
            'kinestetik' => 'kinestetik.isiKelas'
        ];

        $view = $views[$gaya] ?? 'siswa.isiKelas';

        return view($view, compact('materi', 'kelas'));
    }
}
