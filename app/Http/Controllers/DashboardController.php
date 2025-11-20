<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kelas;

class DashboardController extends Controller
{
    public function guru()
    {
        $kelas = Kelas::all();
        return view('guru.berandaGuru', compact('kelas'));
    }
    public function KelasSiswa()
    {
        $kelas = Kelas::where('user_id', auth()->id())->get();
        return view('siswa.kelas', compact('kelas'));
    }

    public function PeringkatSiswa()
    {
        return view('siswa.peringkat');
    }

    public function kelasGuru()
    {
        return view('guru.kelasGuru');
    }

    public function petunjukSiswa()
    {
        return view('siswa.petunjuk');
    }
    public function CPdanTPSiswa()
    {
        return view('siswa.CPdanTP');
    }
    public function Beranda()
    {
        return view('siswa.beranda');
    }
    public function Klasifikasi()
    {
        return view('siswa.klasifikasi');
    }
    public function Beranda_Auditori()
    {
        return view('auditori.beranda');
    }
}
