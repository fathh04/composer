@extends('layout.masterGuru')
@section('title', 'Kelola Kelas - HTMLExplore')
@section('menuKelas', 'active')

@section('content')

<style>
    /* ==============================
       GLOBAL PRIMARY THEME
    ===============================*/
    :root {
        --primary-start: var(--bs-primary);
        --primary-end: #004cba;
    }

    .kelas-hero {
        background: linear-gradient(135deg, var(--primary-start), var(--primary-end));
        border-radius: 20px;
        padding: 40px;
        color: white;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        text-align: center;
    }

    .kelas-hero h1 {
        font-weight: 700;
        font-size: 1.8rem;
    }

    .kelas-hero p {
        opacity: .95;
        margin: 0;
    }

    /* Segmented Tabs */
    .tab-wrapper {
        background: #ffffff;
        padding: 10px;
        border-radius: 50px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        max-width: 900px;
        margin: 30px auto;
    }

    .tab-wrapper .nav-link {
        border-radius: 40px !important;
        transition: .2s;
        font-weight: 600;
        color: var(--bs-primary);
        border: 1px solid transparent;
    }

    .tab-wrapper .nav-link:hover {
        background: rgba(0, 123, 255, 0.1);
    }

    .tab-wrapper .nav-link.active {
        background: var(--bs-primary);
        color: white !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .tab-pane {
        animation: fadeIn .3s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to   { opacity: 1; transform: translateY(0); }
    }
</style>


<div class="container py-4">

    <!-- ==============================
         HEADER / HERO
    ===============================-->
    <div class="kelas-hero mb-4">
        <h1>Kelas: {{ $kelas->pelajaran }}</h1>
        <p>ID Kelas: {{ $kelas->idkelas }}</p>
    </div>

    <!-- ==============================
         NAVIGATION TABS (GURU VERSION)
    ===============================-->
    <div class="tab-wrapper">
        <ul class="nav nav-pills justify-content-between flex-wrap" id="kelasTab" role="tablist">

            <li class="nav-item flex-fill text-center">
                <button class="nav-link active w-100"
                        id="materi-tab" data-bs-toggle="tab" data-bs-target="#materi"
                        type="button">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Materi
                </button>
            </li>

            <li class="nav-item flex-fill text-center">
                <button class="nav-link w-100"
                        id="leaderboard-tab" data-bs-toggle="tab" data-bs-target="#leaderboard"
                        type="button">
                    <i class="bi bi-trophy me-1"></i> Leaderboard
                </button>
            </li>

            <li class="nav-item flex-fill text-center">
                <button class="nav-link w-100"
                        id="feed-tab" data-bs-toggle="tab" data-bs-target="#feed"
                        type="button">
                    <i class="bi bi-journal-text me-1"></i> Feed Pembelajaran
                </button>
            </li>

        </ul>
    </div>

    <!-- ==============================
         TAB CONTENT
    ===============================-->
    <div class="tab-content mt-4" id="kelasTabContent">

        <div class="tab-pane fade show active" id="materi">
            @include('guru.tabsKelas.materi')
        </div>

        <div class="tab-pane fade" id="leaderboard">
            @include('guru.tabsKelas.leaderboard')
        </div>

        <div class="tab-pane fade" id="feed">
            @include('guru.tabsKelas.feed')
        </div>

    </div>

</div>

@endsection
