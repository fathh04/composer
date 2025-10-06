@extends('layout.masterGuru')
@section('title', 'Dashboard Guru - HTMLExplore')
@section('menuBeranda', 'active')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="h4 fw-bold text-primary">Hi, {{ session('user_name') }}</h1>
        <p class="text-muted">Atur kelas Anda dengan mudah dan cek statistik penting di bawah</p>
    </div>

    <!-- Statistik -->
    <div class="row text-center g-4">
        <div class="col-md-3">
            <div class="stat-box bg-warning text-dark shadow-sm rounded p-4">
                <h2 class="fw-bold">{{ 2 }}</h2>
                <p>Jumlah Kelas Aktif</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-box bg-primary text-white shadow-sm rounded p-4">
                <h2 class="fw-bold">{{ 90 }}</h2>
                <p>Siswa Terdaftar</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-box bg-danger text-white shadow-sm rounded p-4">
                <h2 class="fw-bold">{{ 92 }}</h2>
                <p>Jumlah Tugas yang Dikirim</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-box bg-secondary text-white shadow-sm rounded p-4">
                <h2 class="fw-bold">{{ 126 }}</h2>
                <p>Jumlah Siswa Aktif</p>
            </div>
        </div>
    </div>

    <!-- Daftar Kelas -->
    <div class="mt-5">
        <h3 class="fw-bold">Daftar Kelas</h3>
        <div class="card p-4 mt-3 shadow-sm rounded">
            @foreach ($kelas as $item)
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="fw-bold text-dark">{{ $item->pelajaran }}</h5>
                    <p class="text-muted mb-0">{{ $item->idkelas }}</p>
                </div>
                <a href="{{ route('kelas.masuk', $item->id) }}" class="btn btn-warning text-white rounded-pill px-4 py-2 shadow-sm transition-all">
                    Lihat
                </a>
            </div>
            <hr class="my-3">
            @endforeach
        </div>
    </div>
</div>

<!-- Custom Styles -->
@section('styles')
<style>
    .stat-box h2 {
        font-size: 2.5rem;
    }

    .stat-box p {
        font-size: 1.1rem;
        margin-top: 10px;
    }

    .stat-box {
        border-radius: 10px;
        padding: 30px 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stat-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .btn-warning {
        border-radius: 30px;
        font-size: 1rem;
        padding: 8px 20px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-warning:hover {
        background-color: #f39c12;
        transform: scale(1.05);
    }

    .card {
        border-radius: 10px;
    }

    .hr {
        border: 0;
        border-top: 1px solid #ddd;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .transition-all {
        transition: all 0.3s ease;
    }
</style>
@endsection
@endsection
