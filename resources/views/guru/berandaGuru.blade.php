@extends('layout.masterGuru')
@section('title', 'Dashboard Guru - HTMLVirtual')
@section('menuBeranda', 'active')

@section('content')
<div class="container py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-primary mb-1">Selamat Datang, {{ session('user_name') }} </h1>
            <p class="text-muted">Kelola kelas dan pantau aktivitas pembelajaran Anda.</p>
        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="stat-card shadow-sm border-0 rounded-4 p-4 bg-primary text-white">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-white text-primary me-3">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold">{{ $jumlahKelasGuru }}</h2>
                        <p class="m-0">Jumlah Kelas Aktif</p>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($kelas as $k)
        <div class="col-md-4">
            <div class="stat-card shadow-sm rounded-4 p-4 bg-light">
                <div class="d-flex align-items-center">
                    <div class="icon-box bg-primary text-white me-3">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold">{{ $k->pengguna->count() }}</h2>
                        <p class="m-0">Siswa Terdaftar</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- LIST KELAS -->
    <div class="mt-5">
        <h3 class="fw-bold text-primary mb-3">Daftar Kelas Anda</h3>

        <div class="row g-4">
            @foreach ($kelas as $item)
            <div class="col-md-4">
                <div class="kelas-card shadow-sm rounded-4 p-4 bg-white">
                    <h5 class="fw-bold text-dark">{{ $item->pelajaran }}</h5>
                    <p class="text-muted small m-0">Kode Kelas: {{ $item->idkelas }}</p>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="badge bg-primary px-3 py-2 rounded-pill">
                            {{ $item->pengguna->count() }} siswa
                        </span>

                        <a href="{{ route('kelas.masuk', $item->id) }}"
                           class="btn btn-primary rounded-pill px-4 shadow-sm">
                            Masuk
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</div>

<!-- CUSTOM CSS -->
@section('styles')
<style>
    .stat-card {
        transition: transform 0.3s ease;
        border-radius: 1rem;
    }

    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }

    .icon-box {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
    }

    .kelas-card {
        transition: 0.3s ease;
        border-radius: 1rem;
    }

    .kelas-card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12) !important;
    }
</style>
@endsection
@endsection
