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

        if ($kelas->user_id == auth()->id()) {
            return redirect()->back()->with('error', 'Kelas sudah ditambahkan.');
        }

        $kelas->user_id = auth()->id();
        $kelas->save();

        return redirect()->route('beranda')->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function keluarKelasSiswa($id)
    {
        $kelas = Kelas::findOrFail($id);

        if ($kelas->user_id != auth()->id()) {
            return redirect()->back()->with('error', 'Anda tidak dapat keluar dari kelas ini.');
        }

        $kelas->user_id = null;
        $kelas->save();

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
        $kelas = Kelas::findOrFail($id); // Ambil data kelas berdasarkan ID
    $materi = Materi::where('idkelas', $id)->get();

        // Kembalikan view isiKelas dengan data kelas dan materi
        return view('siswa.isiKelas', compact('kelas', 'materi'));
    }

}
