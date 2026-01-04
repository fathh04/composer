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
        $score = $request->score;
        $posttest = $request->posttest;

        // ✅ Cek per posttest
        $cek = KuisResult::where('pengguna_id', $penggunaId)
                ->where('posttest', $posttest)
                ->first();

        if ($cek) {
            return response()->json([
                'status' => 'locked',
                'message' => 'Posttest ini sudah dikerjakan'
            ], 403);
        }

        KuisResult::create([
            'pengguna_id' => $penggunaId,
            'posttest' => $posttest,
            'score'       => $score
        ]);

        return response()->json([
            'status' => 'success',
            'score'  => $score
        ]);
    }

    public function halamanKuis()
    {
        $userId = Auth::id();

        // Ambil semua hasil posttest user
        $hasilPosttest = KuisResult::where('pengguna_id', $userId)
            ->get()
            ->pluck('score', 'posttest');
            // contoh hasil:
            // [1 => 80, 2 => 100]

        $style = strtolower(Auth::user()->gaya_belajar ?? '');

        return match ($style) {
            'kinestetik' => view('kinestetik.tabsKelas.kuis', compact('hasilPosttest')),
            'auditori'   => view('auditori.tabsKelas.kuis', compact('hasilPosttest')),
            'visual'     => view('siswa.tabsKelas.kuis', compact('hasilPosttest')),
            default      => view('siswa.tabsKelas.kuis', compact('hasilPosttest')),
        };
    }
}
