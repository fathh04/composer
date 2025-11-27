@extends('layout.masterGuru')
@section('title', 'Kelola Kelas - HTMLExplore')
@section('menuKelas', 'active')

@section('content')
<div class="container py-5">

    <!-- Header Kelas -->
    <div class="card bg-light shadow-sm rounded p-4 mb-4">
        <h1 class="h4 fw-bold text-center text-primary mb-2">Kelas: {{ $kelas->pelajaran }}</h1>
        <p class="text-center text-muted mb-0">ID Kelas: {{ $kelas->idkelas }}</p>
    </div>

    <!-- Navigasi Tab versi baru -->
    <ul class="nav nav-pills justify-content-center mb-4 gap-2 flex-wrap text-center" id="kelasTab" role="tablist">

        <li class="nav-item flex-grow-1 flex-md-grow-0" role="presentation">
            <button class="nav-link active px-2 px-md-4 py-2 rounded-pill shadow-sm fw-semibold w-100"
                    id="tambah-materi-tab" data-bs-toggle="tab" data-bs-target="#materi" type="button"
                    role="tab">
                <i class="bi bi-plus-circle me-1 me-md-2"></i>
                <span class="d-none d-sm-inline">Tambah Materi</span>
            </button>
        </li>

        <li class="nav-item flex-grow-1 flex-md-grow-0" role="presentation">
            <button class="nav-link px-2 px-md-4 py-2 rounded-pill shadow-sm fw-semibold w-100"
                    id="leaderboard-tab" data-bs-toggle="tab" data-bs-target="#leaderboard" type="button"
                    role="tab">
                <i class="bi bi-trophy me-1 me-md-2"></i>
                <span class="d-none d-sm-inline">Leaderboard</span>
            </button>
        </li>

        <li class="nav-item flex-grow-1 flex-md-grow-0" role="presentation">
            <button class="nav-link px-2 px-md-4 py-2 rounded-pill shadow-sm fw-semibold w-100"
                    id="informasi-tab" data-bs-toggle="tab" data-bs-target="#feed" type="button"
                    role="tab">
                <i class="bi bi-collection me-1 me-md-2"></i>
                <span class="d-none d-sm-inline">Feed Pembelajaran</span>
            </button>
        </li>

    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="kelasTabContent">
        <div class="tab-pane fade show active" id="materi" role="tabpanel">
            @include('guru.tabsKelas.materi')
        </div>

        <div class="tab-pane fade" id="leaderboard" role="tabpanel">
            @include('guru.tabsKelas.leaderboard')
        </div>

        <div class="tab-pane fade" id="feed" role="tabpanel">
            @include('guru.tabsKelas.feed')
        </div>
    </div>

</div>

<style>
    /* Basic styling seperti versi siswa */
    .nav-pills .nav-link {
        background: #ffffff;
        transition: 0.3s;
        border: 1px solid #e6e6e6;
    }
    .nav-pills .nav-link.active {
        background: #0d6efd !important;
        color: #fff !important;
    }
    .nav-pills .nav-link:hover {
        transform: scale(1.03);
    }
    .nav-link i {
        font-size: 16px;
    }
</style>
@endsection
