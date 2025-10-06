<?php
namespace App\Http\Controllers;

use App\Models\Kuis;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'judul_kuis' => 'required|string|max:255',
            'deskripsi_kuis' => 'required|string',
        ]);

        Kuis::create([
            'judul_kuis' => $request->judul_kuis,
            'deskripsi_kuis' => $request->deskripsi_kuis,
            'idkelas' => $request->kelas_id,
        ]);

        return redirect()->route('kelasGuru')->with('success', 'Kuis berhasil dibuat!');
    }
}
