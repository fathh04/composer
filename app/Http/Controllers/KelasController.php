<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\pengguna;
use App\Models\KuisResult;
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
        $kelas = Kelas::all();
        return view('guru.kelasGuru', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idkelas' => 'required|unique:kelas,idkelas',
            'namakelas' => 'required',
            'pelajaran' => 'required',
            'pengampu' => 'required',
        ]);

        Kelas::create([
            'idkelas' => $request->idkelas,
            'namaKelas' => $request->namakelas,
            'pelajaran' => $request->pelajaran,
            'pengampu' => $request->pengampu,
            'pengguna_id' => Auth::id(),
        ]);

        return redirect()->route('kelasGuru')->with('success', 'Kelas berhasil dibuat');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namakelas' => 'required',
            'pelajaran' => 'required',
            'pengampu' => 'required',
        ]);

        $kelas = Kelas::findOrFail($id);

        $kelas->update([
            'namaKelas' => $request->namakelas,
            'pelajaran' => $request->pelajaran,
            'pengampu' => $request->pengampu,
        ]);

        return redirect()->route('kelasGuru')->with('success', 'Kelas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelasGuru')->with('success', 'Kelas berhasil dihapus');
    }

    // ======================================================
    //          PEMBELAJARAN SISWA UNTUK GURU
    // ======================================================
    public function pembelajaranSiswa()
    {
        $visual     = pengguna::where('gaya_belajar', 'Visual')->get();
        $auditori   = pengguna::where('gaya_belajar', 'Auditori')->get();
        $kinestetik = pengguna::where('gaya_belajar', 'Kinestetik')->get();

        return view('guru.tabsKelas.feed', compact('visual', 'auditori', 'kinestetik'));
    }

    // ======================================================
    //            **SISWA JOIN KELAS (attach)**
    // ======================================================
    public function tambahKelasSiswa(Request $request)
    {
        $request->validate([
            'idkelas' => 'required|exists:kelas,idkelas',
        ]);

        $kelas = Kelas::where('idkelas', $request->idkelas)->firstOrFail();

        if ($kelas->pengguna()->where('pengguna_id', auth()->id())->exists()) {
            return back()->with('error', 'Anda sudah bergabung di kelas ini.');
        }

        $kelas->pengguna()->attach(auth()->id());

        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        return match ($style) {
            'visual'    => redirect()->route('beranda')->with('success', 'Kelas berhasil ditambahkan.'),
            'auditori'  => redirect()->route('berandaAuditori')->with('success', 'Kelas berhasil ditambahkan.'),
            'kinestetik'=> redirect()->route('berandaKinestetik')->with('success', 'Kelas berhasil ditambahkan.'),
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
        $kelas = Kelas::findOrFail($id);
        $materi = Materi::where('idkelas', $id)->get();

        $visual     = pengguna::where('gaya_belajar', 'Visual')->get();
        $auditori   = pengguna::where('gaya_belajar', 'Auditori')->get();
        $kinestetik = pengguna::where('gaya_belajar', 'Kinestetik')->get();

        $leaderboard = [
            'visual'     => $this->getLeaderboardByStyle('Visual'),
            'auditori'   => $this->getLeaderboardByStyle('Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle('Kinestetik'),
        ];

        return view('guru.isiKelasGuru', compact(
            'kelas',
            'materi',
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

        $leaderboard = [
            'visual'     => $this->getLeaderboardByStyle('Visual'),
            'auditori'   => $this->getLeaderboardByStyle('Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle('Kinestetik'),
        ];

        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        return match ($style) {
            'visual'    => view('siswa.isiKelas', compact('kelas', 'materi', 'leaderboard')),
            'auditori'  => view('auditori.isiKelasAuditori', compact('kelas', 'materi', 'leaderboard')),
            'kinestetik'=> view('kinestetik.isiKelas', compact('kelas', 'materi', 'leaderboard')),
            default     => view('siswa.isiKelas', compact('kelas', 'materi', 'leaderboard')),
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
    public function leaderboard()
    {
        $leaderboard = [
            'visual' => $this->getLeaderboardByStyle('Visual'),
            'auditori' => $this->getLeaderboardByStyle('Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle('Kinestetik')
        ];

        return view('guru.tabsKelas.leaderboard', compact('leaderboard'));
    }

    public function leaderboardVisual()
    {
        $leaderboard = [
            'visual'     => $this->getLeaderboardByStyle('Visual'),
        ];

        return view('siswa.tabsKelas.leaderboard', compact('leaderboard'));
    }

    public function leaderboardKinestetik()
    {
        $leaderboard = [
            'kinestetik'     => $this->getLeaderboardByStyle('Kinestetik'),
        ];

        return view('kinestetik.tabsKelas.leaderboard', compact('leaderboard'));
    }

    public function leaderboardAuditori()
    {
        $leaderboard = [
            'auditori'     => $this->getLeaderboardByStyle('Auditori'),
        ];

        return view('auditori.tabsKelas.leaderboard', compact('leaderboard'));
    }

    /**
     * Helper: dapatkan leaderboard untuk satu gaya
     */
    private function getLeaderboardByStyle(string $style)
    {
        $users = pengguna::where('gaya_belajar', $style)->get();

        $rows = $users->map(function($user) {
            $kuis = KuisResult::where('pengguna_id', $user->id)->latest()->first();
            return [
                'id'    => $user->id,
                'name'  => $user->nama,
                'score' => $kuis ? (int)$kuis->score : 0,
                'avatar'=> $user->avatar ?? null,
            ];
        })->sortByDesc('score')->values();

        return $rows;
    }

    /**
     * Helper: getLeaderboard dipakai di method dashboard()
     * Kembalikan array gabungan (visual, auditori, kinestetik)
     */
    private function getLeaderboard()
    {
        return [
            'visual'     => $this->getLeaderboardByStyle('Visual'),
            'auditori'   => $this->getLeaderboardByStyle('Auditori'),
            'kinestetik' => $this->getLeaderboardByStyle('Kinestetik'),
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
}
