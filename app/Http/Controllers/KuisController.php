<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KuisResult;
use Illuminate\Support\Facades\Auth;

class KuisController extends Controller
{
    public function submit(Request $request)
    {
        $penggunaId = Auth::id();
        $score = $request->score; // score mentah dari 0-5

        // Cek apakah user sudah pernah mengerjakan
        $cek = KuisResult::where('pengguna_id', $penggunaId)->first();

        if ($cek) {
            return response()->json([
                'status' => 'locked',
                'message' => 'Kuis sudah pernah dikerjakan'
            ]);
        }

        // Convert nilai 0-5 menjadi 0-100
        $nilaiAkhir = $score;

        // Simpan hasil
        KuisResult::create([
            'pengguna_id' => $penggunaId,
            'score'       => $nilaiAkhir
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Nilai berhasil disimpan',
            'score'   => $nilaiAkhir
        ]);
    }
    public function halamanKuis()
    {
        $cek = KuisResult::where('pengguna_id', Auth::id())->first();
        $score = $cek->score ?? null;

        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        return match ($style) {
            'kinestetik' => view('kinestetik.tabsKelas.kuis', compact('score')),
            'auditori'   => view('auditori.tabsKelas.kuis', compact('score')),
            'visual'     => view('siswa.tabsKelas.kuis', compact('score')),
            default      => view('siswa.tabsKelas.kuis', compact('score')),
        };
    }
}
