@extends('layout.master')
@section('title', 'Masuk Kelas - HTML5VIRTUAL')
@section('menuKelas', 'active')

@section('content')

<style>
    /* ==============================
       GLOBAL PRIMARY THEME
    ===============================*/

    :root {
        --primary-start: var(--bs-primary);
        --primary-end: #004cba; /* versi yang lebih gelap */
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

    /* ==============================
       FIX TAB 1 BARIS RESPONSIVE
    ===============================*/

    /* Wrapper tab utama */
    .tab-wrapper {
        background: #ffffff;
        padding: 10px;
        border-radius: 50px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        max-width: 900px;
        margin: 30px auto;
    }

    /* Pastikan hanya satu baris */
    .tab-wrapper .nav {
        flex-wrap: nowrap !important;
        width: 100%;
        justify-content: space-between;
    }

    /* Setiap tab selalu menyesuaikan ruang */
    .tab-wrapper .nav-item {
        flex: 1;
        text-align: center;
        min-width: 0; /* supaya bisa mengecil */
    }

    /* Tombol tab */
    .tab-wrapper .nav-link {
        border-radius: 40px !important;
        transition: .2s;
        font-weight: 600;
        color: var(--bs-primary);
        border: 1px solid transparent;
        font-size: 0.9rem;
        padding: 8px 5px;
        white-space: normal;
    }

    /* Tab aktif */
    .tab-wrapper .nav-link.active {
        background: var(--bs-primary);
        color: white !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    /* RESPONSIVE — Kecilkan ukuran pada HP */
    @media(max-width: 768px) {
        .tab-wrapper .nav-link {
            font-size: 0.75rem;
            padding: 6px 3px;
        }

        .tab-wrapper .nav-link i {
            font-size: 0.9rem;
            margin-right: 2px;
        }
    }

    @media(max-width: 480px) {
        .tab-wrapper .nav-link {
            font-size: 0.65rem;
            padding: 5px 2px;
        }

        .tab-wrapper .nav-link i {
            font-size: 0.8rem;
        }
    }

    /* Animasi tab */
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
         HEADER / HERO KELAS
    ===============================-->
    <div class="kelas-hero mb-4">
        <h1>Kelas: {{ $kelas->pelajaran }}</h1>
        <p>ID Kelas: {{ $kelas->idkelas }}</p>
    </div>


    <!-- ==============================
         NAVIGATION TAB
    ===============================-->
    <div class="tab-wrapper">
        <ul class="nav nav-pills justify-content-between flex-wrap" id="kelasTab" role="tablist">

            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link active w-100"
                        id="jelajah-tab" data-bs-toggle="tab" data-bs-target="#jelajah"
                        type="button" role="tab">
                    <i class="bi bi-search me-1"></i> Jelajah
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100"
                        id="kuis-tab" data-bs-toggle="tab" data-bs-target="#kuis"
                        type="button" role="tab">
                    <i class="bi bi-question-circle me-1"></i> Kuis
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100"
                        id="livecode-tab" data-bs-toggle="tab" data-bs-target="#livecode"
                        type="button" role="tab">
                    <i class="bi bi-terminal me-1"></i> Live Code
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100"
                        id="virtual-tab" data-bs-toggle="tab" data-bs-target="#virtual"
                        type="button" role="tab">
                    <i class="bi bi-cpu me-1"></i> Virtual Praktikum
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100"
                        id="leaderboard-tab" data-bs-toggle="tab" data-bs-target="#leaderboard"
                        type="button" role="tab">
                    <i class="bi bi-trophy me-1"></i> Leaderboard
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100"
                        id="feed-tab" data-bs-toggle="tab" data-bs-target="#feed"
                        type="button" role="tab">
                    <i class="bi bi-journal-text me-1"></i> Feed Pembelajaran
                </button>
            </li>

        </ul>
    </div>


    <!-- ==============================
         TAB CONTENT
    ===============================-->
    <div class="tab-content mt-4" id="kelasTabContent">

        <div class="tab-pane fade show active" id="jelajah" role="tabpanel">
            @include('siswa.tabsKelas.jelajah')
        </div>

        <div class="tab-pane fade" id="kuis" role="tabpanel">
            @include('siswa.tabsKelas.kuis')
        </div>

        <div class="tab-pane fade" id="leaderboard" role="tabpanel">
            @include('siswa.tabsKelas.leaderboard')
        </div>

        <div class="tab-pane fade" id="livecode" role="tabpanel">
            @include('siswa.tabsKelas.livecode')
        </div>

        <div class="tab-pane fade" id="feed" role="tabpanel">
            @include('siswa.tabsKelas.feed')
        </div>

        <div class="tab-pane fade" id="virtual" role="tabpanel">
            @include('siswa.tabsKelas.virtual')
        </div>

    </div>
</div>

@endsection
