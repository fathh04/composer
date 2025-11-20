@extends('layout.master')
@section('title', 'Masuk Kelas - HTML5VIRTUAL')
@section('menuKelas', 'active')

@section('content')
<div class="container py-5">
    <div class="card bg-light shadow-sm rounded p-4 mb-4">
        <h1 class="h4 fw-bold text-center text-primary mb-2">Kelas: {{ $kelas->pelajaran }}</h1>
        <p class="text-center text-muted mb-0">ID Kelas: {{ $kelas->idkelas }}</p>
    </div>

    <!-- Navigasi Tab -->
    <ul class="nav nav-pills justify-content-center mb-4 gap-2 flex-wrap text-center" id="kelasTab" role="tablist">
        <li class="nav-item flex-grow-1 flex-md-grow-0" role="presentation">
            <button class="nav-link active px-2 px-md-4 py-2 rounded-pill shadow-sm fw-semibold w-100"
                    id="jelajah-tab" data-bs-toggle="tab" data-bs-target="#jelajah" type="button"
                    role="tab"> <i class="bi bi-search me-1 me-md-2"></i><span class="d-none d-sm-inline">Jelajah</span>
            </button>
        </li>
        <li class="nav-item flex-grow-1 flex-md-grow-0" role="presentation">
            <button class="nav-link px-2 px-md-4 py-2 rounded-pill shadow-sm fw-semibold w-100"
                    id="kuis-tab" data-bs-toggle="tab" data-bs-target="#kuis" type="button"
                    role="tab"> <i class="bi bi-question-circle me-1 me-md-2"></i><span class="d-none d-sm-inline">Kuis</span>
            </button>
        </li>
        <li class="nav-item flex-grow-1 flex-md-grow-0" role="presentation">
            <button class="nav-link px-2 px-md-4 py-2 rounded-pill shadow-sm fw-semibold w-100"
                    id="leaderboard-tab" data-bs-toggle="tab" data-bs-target="#leaderboard" type="button"
                    role="tab"> <i class="bi bi-trophy me-1 me-md-2"></i><span class="d-none d-sm-inline">Leaderboard</span>
            </button>
        </li>
        <li class="nav-item flex-grow-1 flex-md-grow-0" role="presentation">
            <button class="nav-link px-2 px-md-4 py-2 rounded-pill shadow-sm fw-semibold w-100"
                    id="livecode-tab" data-bs-toggle="tab" data-bs-target="#livecode" type="button"
                    role="tab"> <i class="bi bi-terminal me-1 me-md-2"></i><span class="d-none d-sm-inline">Live Code</span>
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="kelasTabContent">
        <div class="tab-pane fade show active" id="jelajah" role="tabpanel">@include('siswa.tabsKelas.jelajah')</div>
        <div class="tab-pane fade" id="kuis" role="tabpanel">@include('siswa.tabsKelas.kuis')</div>
        <div class="tab-pane fade" id="leaderboard" role="tabpanel">@include('siswa.tabsKelas.leaderboard')</div>
        {{-- <div class="tab-pane fade" id="informasi" role="tabpanel">@include('siswa.tabsKelas.feed')</div> --}}
        {{-- <div class="tab-pane fade" id="buatfeed" role="tabpanel">@include('siswa.tabsKelas.buatfeed')</div> --}}
        <div class="tab-pane fade" id="livecode" role="tabpanel">@include('siswa.tabsKelas.livecode')</div>
    </div>
</div>
@endsection
