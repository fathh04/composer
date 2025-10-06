@extends('layout.master')
@section('title', 'Beranda Siswa - HTML5VIRTUAL')
@section('menuBeranda', 'active')

@section('content')
<div class="container py-4">
    <h1 class="h4 fw-bold mb-3">Selamat Datang, {{ session('user_name') }}</h1>
    <p class="text-muted mb-4">Ini adalah beranda siswa.</p>

    <div class="row text-center">
        <!-- Kelas Diikuti -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-box bg-primary text-white rounded shadow-lg p-4">
                <i class="bi bi-person-lines-fill fs-2 mb-2"></i>
                <h2 class="fw-bold">{{ 1 }}</h2>
                <p class="mb-0">Kelas Diikuti</p>
            </div>
        </div>

        <!-- Materi Diselesaikan -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-box bg-success text-white rounded shadow-lg p-4">
                <i class="bi bi-check-circle fs-2 mb-2"></i>
                <h2 class="fw-bold">{{ 1 }}</h2>
                <p class="mb-0">Materi Diselesaikan</p>
            </div>
        </div>

        <!-- Tugas Selesai -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-box bg-warning text-white rounded shadow-lg p-4">
                <i class="bi bi-journal-check fs-2 mb-2"></i>
                <h2 class="fw-bold">{{ 0 }}</h2>
                <p class="mb-0">Tugas Selesai</p>
            </div>
        </div>
    </div>
</div>
@endsection
