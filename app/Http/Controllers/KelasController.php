<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\pengguna;
use App\Models\KuisResult;
use App\Models\TugasSubmission;
use App\Models\TugasGuru;
use App\Models\FeedbackGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            if (Auth::check()) {

                $user = Auth::user();

                /* ============================================
                *  HASIL POSTTEST SISWA (PER POSTTEST)
                * ============================================ */
                $hasilPosttest = KuisResult::where('pengguna_id', $user->id)
                    ->pluck('score', 'posttest'); // [1 => 80, 2 => 100]

                view()->share('hasilPosttest', $hasilPosttest);

                /* ============================================
                *  STATUS PROGRES BELAJAR SISWA
                * ============================================ */
                // ✅ CEK KUIS SELESAI
                $totalPosttest = 3;

                $jumlahPosttestSelesai = KuisResult::where('pengguna_id', Auth::id())
                    ->distinct('posttest')
                    ->count('posttest');

                $kuisSelesai = $jumlahPosttestSelesai >= $totalPosttest;

                // ✅ CEK LIVE CODE SELESAI
                $livecodeSelesai = TugasSubmission::where('pengguna_id', Auth::id())
                    ->exists();

                $bolehEksplore = $kuisSelesai && $livecodeSelesai;

                view()->share([
                    'kuisSelesai'     => $kuisSelesai,
                    'livecodeSelesai' => $livecodeSelesai,
                    'bolehEksplore'   => $bolehEksplore,
                ]);

                /* ============================================
                *  SCORE KUIS SISWA (GLOBAL)
                * ============================================ */
                $score = 0;
                $cek = KuisResult::where('pengguna_id', $user->id)
                    ->latest()
                    ->first();
                $score = $cek ? (int) $cek->score : 0;
                view()->share('score', $score);

                /* ============================================
                *  FEEDBACK GURU
                * ============================================ */
                $feedbackGuru = FeedbackGuru::where('pengguna_id', $user->id)
                    ->with('guru')
                    ->get();
                view()->share('feedbackGuru', $feedbackGuru);

                /* ============================================
                *  RATA-RATA NILAI
                * ============================================ */
                $rataRataNilai = KuisResult::where('pengguna_id', $user->id)->avg('score');
                $rataRataNilai = $rataRataNilai ? round($rataRataNilai) : 0;
                view()->share('rataRataNilai', $rataRataNilai);

                /* ============================================
                *  REKOMENDASI AI
                * ============================================ */
                $rekomendasiAI = $user->rekomendasi ?? 'Belum ada rekomendasi';
                view()->share('rekomendasiAI', $rekomendasiAI);

                /* ============================================
                *  JUMLAH KELAS DIMILIKI GURU
                * ============================================ */
                $jumlahKelasGuru = 0;

                // hitung jika user role = guru
                if (isset($user->role) && strtolower($user->role) === 'guru') {
                    $jumlahKelasGuru = Kelas::where('pengguna_id', $user->id)->count();
                }

                view()->share('jumlahKelasGuru', $jumlahKelasGuru);
                /* ============================================
                *  TOTAL SISWA DARI SEMUA KELAS GURU
                * ============================================ */
                $totalSiswa = 0;

                if (isset($user->role) && strtolower($user->role) === 'guru') {
                    $totalSiswa = Kelas::where('pengguna_id', $user->id)
                        ->withCount('pengguna')
                        ->get()
                        ->sum('pengguna_count');
                }

                view()->share('totalSiswa', $totalSiswa);
            }
            else {
                // jika belum login
                view()->share('feedbackGuru', collect());
                view()->share('rataRataNilai', 0);
                view()->share('rekomendasiAI', 'Belum ada rekomendasi');
                view()->share('jumlahKelasGuru', 0);
            }

            return $next($request);
        });
    }

    public function index()
    {
        $kelas = Kelas::where('pengguna_id', Auth::id())
            ->with(['pengguna'])
            ->withCount('pengguna')
            ->get();

        $jumlahKelasGuru = $kelas->count();

        // ✅ TOTAL SISWA DARI SEMUA KELAS
        $totalSiswa = $kelas->sum('pengguna_count');

        return view('guru.kelasGuru', compact(
            'kelas',
            'jumlahKelasGuru',
            'totalSiswa'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idkelas'   => 'required|unique:kelas,idkelas',
            'namakelas' => 'required',
            'pelajaran' => 'required',
            'pengampu'  => 'required',
        ], [
            'idkelas.required' => 'ID Kelas wajib diisi.',
            'idkelas.unique'   => 'ID Kelas sudah digunakan, silakan gunakan ID lain.',
            'namakelas.required' => 'Nama kelas wajib diisi.',
            'pelajaran.required' => 'Pelajaran wajib diisi.',
            'pengampu.required' => 'Pengampu wajib diisi.',
        ]);

        Kelas::create([
            'idkelas' => $request->idkelas,
            'namaKelas' => $request->namakelas,
            'pelajaran' => $request->pelajaran,
            'pengampu' => $request->pengampu,
            'pengguna_id' => Auth::id(),
        ]);

        return redirect()->route('kelasGuru')->with([
            'success' => 'Kelas berhasil dibuat',
            'success_type' => 'create'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namakelas' => 'required',
            'pelajaran' => 'required',
            'pengampu' => 'required',
        ]);

        $kelas = Kelas::where('id', $id)
            ->where('pengguna_id', Auth::id())
            ->firstOrFail();

        $kelas->update([
            'namaKelas' => $request->namakelas,
            'pelajaran' => $request->pelajaran,
            'pengampu' => $request->pengampu,
        ]);

        return redirect()->route('kelasGuru')->with([
            'success' => 'Kelas berhasil diperbarui',
            'success_type' => 'update'
        ]);
    }

    public function destroy($id)
    {
        $kelas = Kelas::where('id', $id)
            ->where('pengguna_id', Auth::id())
            ->firstOrFail();
        $kelas->delete();

        return redirect()->route('kelasGuru')->with([
            'success' => 'Kelas berhasil dihapus',
            'success_type' => 'delete'
        ]);
    }

    // ======================================================
    //          PEMBELAJARAN SISWA UNTUK GURU
    // ======================================================
    public function pembelajaranSiswa($id)
    {
        // 🔒 pastikan kelas milik guru
        $kelas = Kelas::where('id', $id)
            ->where('pengguna_id', Auth::id())
            ->firstOrFail();

        // ✅ AMBIL SISWA YANG TERDAFTAR DI KELAS INI SAJA
        $visual = $kelas->pengguna()
            ->where('gaya_belajar', 'Visual')
            ->get();

        $auditori = $kelas->pengguna()
            ->where('gaya_belajar', 'Auditori')
            ->get();

        $kinestetik = $kelas->pengguna()
            ->where('gaya_belajar', 'Kinestetik')
            ->get();

        return view('guru.tabsKelas.feed', compact(
            'kelas',
            'visual',
            'auditori',
            'kinestetik'
        ));
    }

    // ======================================================
    //            **SISWA JOIN KELAS (attach)**
    // ======================================================
    public function tambahKelasSiswa(Request $request)
    {
        $request->validate([
            'idkelas' => 'required|exists:kelas,idkelas',
        ], [
            'idkelas.required' => 'ID Kelas wajib diisi.',
            'idkelas.exists'   => 'ID Kelas tidak ditemukan.',
        ]);

        $kelas = Kelas::where('idkelas', $request->idkelas)->firstOrFail();

        if ($kelas->pengguna()->where('pengguna_id', auth()->id())->exists()) {
            return back()->with('error', 'Anda sudah bergabung di kelas ini.');
        }

        $kelas->pengguna()->attach(auth()->id());

        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        return match ($style) {
            'visual'    => redirect()->route('kelas')->with('success', 'Kelas berhasil ditambahkan.'),
            'auditori'  => redirect()->route('kelasAuditori')->with('success', 'Kelas berhasil ditambahkan.'),
            'kinestetik'=> redirect()->route('kelasKinestetik')->with('success', 'Kelas berhasil ditambahkan.'),
            default     => redirect()->route('kelas')->with('success', 'Kelas berhasil ditambahkan.'),
        };
    }

    // ======================================================
    //            **SISWA KELUAR KELAS (detach)**
    // ======================================================
    public function keluarKelasSiswa($id)
    {
        $kelas = Kelas::findOrFail($id);

        $kelas->pengguna()->detach(auth()->id());

        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        return match ($style) {
            'visual'    => redirect()->route('kelas')->with('success', 'Anda berhasil keluar dari kelas.'),
            'auditori'  => redirect()->route('kelasAuditori')->with('success', 'Anda berhasil keluar dari kelas.'),
            'kinestetik'=> redirect()->route('kelasKinestetik')->with('success', 'Anda berhasil keluar dari kelas.'),
            default     => redirect()->route('kelas')->with('success', 'Anda berhasil keluar dari kelas.'),
        };
    }

    public function masukKelas($id)
    {
        $kelas = Kelas::where('id', $id)
            ->where('pengguna_id', Auth::id())
            ->firstOrFail();

        $materi = Materi::where('idkelas', $id)->get();

        $tugas = TugasGuru::whereHas('materi', function($q) use ($id) {
            $q->where('idkelas', $id);
        })->with('pengguna', 'materi')->get();

        // ✅ AMBIL SISWA YANG TERDAFTAR DI KELAS INI SAJA
        $visual = $kelas->pengguna()
            ->where('gaya_belajar', 'Visual')
            ->get();

        $auditori = $kelas->pengguna()
            ->where('gaya_belajar', 'Auditori')
            ->get();

        $kinestetik = $kelas->pengguna()
            ->where('gaya_belajar', 'Kinestetik')
            ->get();

        $leaderboard = [
            'visual'     => $this->getLeaderboardByStyle($kelas, 'Visual'),
            'auditori'   => $this->getLeaderboardByStyle($kelas, 'Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle($kelas, 'Kinestetik'),
        ];

        return view('guru.isiKelasGuru', compact(
            'kelas',
            'materi',
            'tugas',
            'visual',
            'auditori',
            'kinestetik',
            'leaderboard'
        ));
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        $materi = Materi::where('idkelas', $id)->get();

        // 🔥 Ambil score kuis siswa
        $cek = KuisResult::where('pengguna_id', Auth::id())->first();
        $score = $cek->score ?? null;

        $leaderboard = [
            'visual'     => $this->getLeaderboardByStyle($kelas, 'Visual'),
            'auditori'   => $this->getLeaderboardByStyle($kelas, 'Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle($kelas, 'Kinestetik'),
        ];

        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        return match ($style) {
            'visual'    => view('siswa.isiKelas', compact('kelas', 'materi', 'leaderboard', 'score')),
            'auditori'  => view('auditori.isiKelasAuditori', compact('kelas', 'materi', 'leaderboard', 'score')),
            'kinestetik'=> view('kinestetik.isiKelas', compact('kelas', 'materi', 'leaderboard', 'score')),
            default     => view('siswa.isiKelas', compact('kelas', 'materi', 'leaderboard', 'score')),
        };
    }

    public function kelas()
    {
        $kelas = Auth::user()->kelas;
        return view('siswa.kelas', compact('kelas'));
    }
    public function kelasAuditori()
    {
        $kelas = Auth::user()->kelas;
        return view('auditori.kelasAuditori', compact('kelas'));
    }
    public function kelasKinestetik()
    {
        $kelas = Auth::user()->kelas;
        return view('kinestetik.kelas', compact('kelas'));
    }

    // === LEADERBOARD ===
    public function leaderboard($id)
    {
        $kelas = Kelas::findOrFail($id);

        $leaderboard = [
            'visual'     => $this->getLeaderboardByStyle($kelas, 'Visual'),
            'auditori'   => $this->getLeaderboardByStyle($kelas, 'Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle($kelas, 'Kinestetik'),
        ];

        return view('guru.tabsKelas.leaderboard', compact('leaderboard', 'kelas'));
    }

    public function leaderboardVisual()
    {
        $leaderboard = [
            'visual'     => $this->getLeaderboardByStyle($kelas, 'Visual'),
        ];

        return view('siswa.tabsKelas.leaderboard', compact('leaderboard'));
    }

    public function leaderboardKinestetik()
    {
        $leaderboard = [
            'kinestetik'     => $this->getLeaderboardByStyle($kelas, 'Kinestetik'),
        ];

        return view('kinestetik.tabsKelas.leaderboard', compact('leaderboard'));
    }

    public function leaderboardAuditori()
    {
        $leaderboard = [
            'auditori'     => $this->getLeaderboardByStyle($kelas, 'Auditori'),
        ];

        return view('auditori.tabsKelas.leaderboard', compact('leaderboard'));
    }

    /**
     * Helper: dapatkan leaderboard untuk satu gaya
     */
    private function getLeaderboardByStyle(Kelas $kelas, string $style)
    {
        $users = $kelas->pengguna()
            ->where('gaya_belajar', $style)
            ->get();

        $rows = $users->map(function ($user) {

            $avgScore = KuisResult::where('pengguna_id', $user->id)->avg('score');
            $avgScore = $avgScore ? round($avgScore) : 0;

            return [
                'id'    => $user->id,
                'name'  => $user->nama,
                'score' => $avgScore,
                'avatar'=> $user->avatar ?? null,
            ];
        })
        ->sortByDesc('score')
        ->values();

        return $rows;
    }

    /**
     * Helper: getLeaderboard dipakai di method dashboard()
     * Kembalikan array gabungan (visual, auditori, kinestetik)
     */
    private function getLeaderboard()
    {
        return [
            'visual'     => $this->getLeaderboardByStyle($kelas, 'Visual'),
            'auditori'   => $this->getLeaderboardByStyle($kelas, 'Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle($kelas, 'Kinestetik'),
        ];
    }

    public function dashboard()
    {
        $user = Auth::user();

        // Leaderboard
        $leaderboard = $this->getLeaderboard();

        // Hitung rata-rata nilai kuis siswa
        $rataRataNilai = KuisResult::where('pengguna_id', $user->id)->avg('score');
        $rataRataNilai = $rataRataNilai ? round($rataRataNilai) : 0;

        // Ambil rekomendasi dari AI (disimpan di database pengguna)
        $rekomendasiAI = $user->rekomendasi ?? 'Belum ada rekomendasi';

        return view('dashboard.index', [
            'leaderboard'     => $leaderboard,
            'rataRataNilai'   => $rataRataNilai,
            'rekomendasiAI'   => $rekomendasiAI,
        ]);
    }

    public function isiKelasByStyle($style, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $materi = Materi::where('idkelas', $id)->get();

        $cek = KuisResult::where('pengguna_id', Auth::id())->first();
        $score = $cek->score ?? null;

        $leaderboard = [
            'visual'     => $this->getLeaderboardByStyle($kelas, 'Visual'),
            'auditori'   => $this->getLeaderboardByStyle($kelas, 'Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle($kelas, 'Kinestetik'),
        ];

        return match ($style) {
            'visual' =>
                view('siswa.isiKelas', compact('kelas','materi','leaderboard','score')),

            'auditori' =>
                view('auditori.isiKelasAuditori', compact('kelas','materi','leaderboard','score')),

            'kinestetik' =>
                view('kinestetik.isiKelas', compact('kelas','materi','leaderboard','score')),

            default => abort(404)
        };
    }

    public function keluarkanSiswa($kelasId, $siswaId)
    {
        // 🔒 Pastikan kelas milik guru yang login
        $kelas = Kelas::where('id', $kelasId)
            ->where('pengguna_id', Auth::id())
            ->firstOrFail();

        // 🔥 Detach siswa dari kelas
        $kelas->pengguna()->detach($siswaId);

        return back()->with('success', 'Siswa berhasil dikeluarkan dari kelas.');
    }
}
