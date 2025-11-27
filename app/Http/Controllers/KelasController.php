<?php

namespace App\Http\Controllers;

use App\Models\Kelas; // Model Kelas
use App\Models\Materi; // Import model Materi

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

    public function tambahKelasSiswa(Request $request)
    {
        $request->validate([
            'idkelas' => 'required|exists:kelas,idkelas',
        ]);

        $kelas = Kelas::where('idkelas', $request->idkelas)->first();

        // Cek apakah siswa sudah pernah join kelas ini
        if ($kelas->user_id == auth()->id()) {
            return redirect()->back()->with('error', 'Kelas sudah ditambahkan.');
        }

        // Assign kelas ke siswa
        $kelas->user_id = auth()->id();
        $kelas->save();

        // Ambil gaya belajar dari user
        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        // Tentukan redirect sesuai gaya belajar
        if ($style === 'visual') {
            return redirect()->route('beranda')->with('success', 'Kelas berhasil ditambahkan.');
        }
        elseif ($style === 'auditori') {
            return redirect()->route('berandaAuditori')->with('success', 'Kelas berhasil ditambahkan.');
        }
        elseif ($style === 'kinestetik') {
            return redirect()->route('berandaKinestetik')->with('success', 'Kelas berhasil ditambahkan.');
        }

        // Jika tidak punya gaya belajar (harusnya tidak terjadi)
        return redirect()->route('kelas')->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function keluarKelasSiswa($id)
    {
        $kelas = Kelas::findOrFail($id);

        // Cek apakah kelas milik siswa yg login
        if ($kelas->user_id != auth()->id()) {
            return redirect()->back()->with('error', 'Anda tidak dapat keluar dari kelas ini.');
        }

        // Hapus relasi kelas → user
        $kelas->user_id = null;
        $kelas->save();

        // Ambil gaya belajar user
        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        // Tentukan redirect sesuai gaya belajar
        if ($style === 'visual') {
            return redirect()->route('kelas')->with('success', 'Anda berhasil keluar dari kelas.');
        }
        elseif ($style === 'auditori') {
            return redirect()->route('kelasAuditori')->with('success', 'Anda berhasil keluar dari kelas.');
        }
        elseif ($style === 'kinestetik') {
            return redirect()->route('kelasKinestetik')->with('success', 'Anda berhasil keluar dari kelas.');
        }

        // Default fallback
        return redirect()->route('kelas')->with('success', 'Anda berhasil keluar dari kelas.');
    }

    public function masukKelas($id)
    {
        $kelas = Kelas::findOrFail($id); // Ambil data kelas berdasarkan ID
    $materi = Materi::where('idkelas', $id)->get(); // Ambil semua materi yang berkaitan dengan kelas tersebut
    return view('guru.isiKelasGuru', compact('kelas', 'materi'));
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        $materi = Materi::where('idkelas', $id)->get();

        // Ambil gaya belajar user
        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        // Pilih tampilan sesuai gaya belajar
        if ($style === 'visual') {
            return view('siswa.isiKelas', compact('kelas', 'materi'));
        }
        elseif ($style === 'auditori') {
            return view('auditori.isiKelasAuditori', compact('kelas', 'materi'));
        }
        elseif ($style === 'kinestetik') {
            return view('kinestetik.isiKelas', compact('kelas', 'materi'));
        }

        // Default jika gaya_belajar kosong
        return view('siswa.isiKelas', compact('kelas', 'materi'));
    }

}
