<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function(){
    return view('layout.master');
});

Route::get('/masterGuru', function(){
    return view('layout.masterGuru');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('proseslogin');
Route::get('/signup', [AuthController::class, 'showSignUpForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('prosesdaftar');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/berandaGuru', [DashboardController::class, 'guru'])->name('guru.index');
Route::post('/materi/store', [MateriController::class, 'store'])->name('materi.store');
Route::post('/kuis/store', [KuisController::class, 'store'])->name('kuis.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/kelas', [DashboardController::class, 'KelasSiswa'])->name('kelas');
    Route::get('/beranda', [DashboardController::class, 'Beranda'])->name('beranda');
    Route::get('/peringkat', [DashboardController::class, 'PeringkatSiswa'])->name('peringkat');
    Route::get('/petunjuk', [DashboardController::class, 'petunjukSiswa'])->name('petunjuk');
    Route::get('/CPdanTP', [DashboardController::class, 'CPdanTPSiswa'])->name('CPdanTP');
});
Route::get('/klasifikasi', [DashboardController::class, 'Klasifikasi'])->name('klasifikasi');

Route::get('/isiKelas', function () {
    return view('siswa.isiKelas');
});

Route::get('/kelasGuru', [KelasController::class, 'index'])->name('kelasGuru');
Route::post('/kelasGuru/store', [KelasController::class, 'store'])->name('kelas.store');
Route::put('kelasGuru/{id}/update', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('kelasGuru/{id}/destroy', [KelasController::class, 'destroy'])->name('kelas.destroy');
Route::get('/kelasGuru/{id}', [KelasController::class, 'masukKelas'])->name('kelas.masuk');
Route::get('/isiKelasGuru', function () {
    return view('guru.isiKelasGuru');
});

Route::post('/siswa/kelas/tambah', [KelasController::class, 'tambahKelasSiswa'])->name('siswa.kelas.tambah');
Route::delete('/siswa/kelas/{id}/keluar', [KelasController::class, 'keluarKelasSiswa'])->name('siswa.kelas.keluar');

Route::resource('materi', MateriController::class);
Route::get('/kelasGuru/{id}/materi', [MateriController::class, 'showMateri'])->name('materi.show');
Route::get('/kelasGuru/{idkelas}/materi', [MateriController::class, 'index'])->name('materi.index');
Route::post('/materi', [MateriController::class, 'store'])->name('materi.store');
Route::delete('/kelasGuru/{idkelas}/materi/{id}', [MateriController::class, 'destroy'])->name('materi.destroy');

Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('siswa.kelas.masuk');
Route::get('/kelas/{id}/materi', [MateriController::class, 'showForSiswa'])->name('kelas.showForSiswa');
Route::get('/kelas/{idkelas}/materi', [MateriController::class, 'indexSiswa'])->name('materi.indexSiswa');
Route::get('/profile', function () {
    return view('siswa.profile');
});

Route::get('/coba', function () {
    return view('coba');
});

//Isi Kelas
Route::get('/jelajah', [KontenController::class, 'jelajah'])->name('jelajah');

//Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/feed', [FeedController::class, 'store'])->name('feed.store');
