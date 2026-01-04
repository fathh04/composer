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

    // Kelas Siswa
    public function KelasSiswa()
    {
        $kelas = Kelas::where('user_id', auth()->id())->get();
        return view('siswa.kelas', compact('kelas'));
    }
    public function KelasKinestetik()
    {
        $kelas = Kelas::where('user_id', auth()->id())->get();
        return view('kinestetik.kelas', compact('kelas'));
    }
    public function KelasAuditori()
    {
        $kelas = Kelas::where('user_id', auth()->id())->get();
        return view('auditori.kelasAuditori', compact('kelas'));
    }

    // Peringkat siswa
    public function PeringkatSiswa()
    {
        return view('siswa.peringkat');
    }
    public function PeringkatKinestetik()
    {
        return view('kinestetik.peringkat');
    }
    public function PeringkatAuditori()
    {
        return view('auditori.peringkatAuditori');
    }

    public function kelasGuru()
    {
        return view('guru.kelasGuru');
    }
    public function profileGuru()
    {
        return view('guru.profile');
    }

    // Petunjuk
    public function petunjukSiswa()
    {
        return view('siswa.petunjuk');
    }
    public function petunjukKinestetik()
    {
        return view('kinestetik.petunjuk');
    }
    public function petunjukAuditori()
    {
        return view('auditori.petunjukAuditori');
    }

    // CPdanTP
    public function CPdanTPSiswa()
    {
        return view('siswa.CPdanTP');
    }
    public function CPdanTPKinestetik()
    {
        return view('kinestetik.CPdanTP');
    }
    public function CPdanTPAuditori()
    {
        return view('auditori.CPdanTPAuditori');
    }

    // Beranda
    public function Beranda()
    {
        return view('siswa.beranda');
    }
    public function BerandaKinestetik()
    {
        return view('kinestetik.berandaKinestetik');
    }
    public function BerandaAuditori()
    {
        return view('auditori.berandaAuditori');
    }


    // Profile
    public function ProfileSiswa(){
        return view('siswa.profile');
    }
    public function ProfileKinestetik(){
        return view('kinestetik.profile');
    }
    public function ProfileAuditori(){
        return view('auditori.profileAuditori');
    }
    public function Klasifikasi()
    {
        return view('siswa.klasifikasi');
    }
}
