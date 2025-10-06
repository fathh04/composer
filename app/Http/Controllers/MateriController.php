<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class MateriController extends Controller
{
    public function index($idkelas)
{
    // Mengambil materi berdasarkan idkelas
    $materi = Materi::where('idkelas', $idkelas)->get();
    return view('guru.isiKelasGuru', compact('materi'));
}



     // Method untuk menyimpan data materi
     public function store(Request $request)
     {
         // Validasi input dari form
         $request->validate([
             'judul' => 'required|string|max:255',
             'deskripsi' => 'required|string',
             'file_materi' => 'required|mimes:pdf|max:10000',
         ]);

         // Simpan file ke folder 'materi_pdfs' di storage public
         $filePath = $request->file('file_materi')->store('materi_pdfs', 'public');

         // Buat record baru di database untuk materi
         Materi::create([
             'judul' => $request->judul,
             'deskripsi' => $request->deskripsi,
             'file_materi' => $filePath, // Path file yang baru saja di-upload
             'idkelas' => $request->kelas_id, // Pastikan 'kelas_id' dikirim dari form
         ]);

         // Redirect kembali ke halaman materi dengan pesan sukses
         return redirect()->route('materi.index', ['idkelas' => $request->kelas_id])->with('success', 'Materi berhasil ditambahkan!');
     }

     public function showMateri($id)
{
    // Ambil semua materi yang berhubungan dengan kelas berdasarkan $id
    $materi = Materi::where('idkelas', $id)->get();
    $kelas = Kelas::findOrFail($id); // Ambil kelas berdasarkan ID

    // Kembalikan view dengan data materi dan kelas
    return view('guru.isiKelasGuru', compact('materi', 'kelas'));
}

public function destroy($idkelas, $id)
{
    // Mencari materi berdasarkan ID
    $materi = Materi::findOrFail($id);

    // Menghapus file materi jika ada
    if ($materi->file_materi) {
        Storage::delete('public/' . $materi->file_materi);
    }

    // Menghapus materi dari database
    $materi->delete();

    // Redirect kembali ke halaman materi kelas setelah penghapusan
    return redirect()->route('materi.index', ['idkelas' => $idkelas])->with('success', 'Materi berhasil dihapus');
}

public function indexSiswa($idkelas)
{
    // Mengambil materi berdasarkan idkelas
    $materi = Materi::where('idkelas', $idkelas)->get();
    return view('guru.isiKelasGuru', compact('materi'));
}

public function showForSiswa($id)
{
    // Ambil semua materi yang berhubungan dengan kelas berdasarkan $id
    $materi = Materi::where('idkelas', $id)->get();
    $kelas = Kelas::findOrFail($id); // Ambil kelas berdasarkan ID

    // Kembalikan view dengan data materi dan kelas
    return view('siswa.isiKelas', compact('materi', 'kelas'));
}




}

