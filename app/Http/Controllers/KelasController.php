<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
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
    //            **SISWA JOIN KELAS (attach)**
    // ======================================================
    public function tambahKelasSiswa(Request $request)
    {
        $request->validate([
            'idkelas' => 'required|exists:kelas,idkelas',
        ]);

        $kelas = Kelas::where('idkelas', $request->idkelas)->firstOrFail();

        // Cek apakah user sudah join (pivot)
        if ($kelas->pengguna()->where('pengguna_id', auth()->id())->exists()) {
            return back()->with('error', 'Anda sudah bergabung di kelas ini.');
        }

        // Tambahkan ke pivot table
        $kelas->pengguna()->attach(auth()->id());

        // Redirect sesuai gaya belajar
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

        // Hapus hanya user ini, tidak mengganggu siswa lain
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

        return view('guru.isiKelasGuru', compact('kelas', 'materi'));
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        $materi = Materi::where('idkelas', $id)->get();

        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        return match ($style) {
            'visual'    => view('siswa.isiKelas', compact('kelas', 'materi')),
            'auditori'  => view('auditori.isiKelasAuditori', compact('kelas', 'materi')),
            'kinestetik'=> view('kinestetik.isiKelas', compact('kelas', 'materi')),
            default     => view('siswa.isiKelas', compact('kelas', 'materi')),
        };
    }
    public function kelas()
    {
        // Ambil semua kelas yang diikuti siswa lewat pivot
        $kelas = Auth::user()->kelas;

        return view('siswa.kelas', compact('kelas'));
    }
    public function kelasAuditori()
    {
        // Ambil semua kelas yang diikuti siswa lewat pivot
        $kelas = Auth::user()->kelas;

        return view('auditori.kelasAuditori', compact('kelas'));
    }
    public function kelasKinestetik()
    {
        // Ambil semua kelas yang diikuti siswa lewat pivot
        $kelas = Auth::user()->kelas;

        return view('kinestetik.kelas', compact('kelas'));
    }
}
