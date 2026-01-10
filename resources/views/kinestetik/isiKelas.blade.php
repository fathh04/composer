@extends('layout.masterKinestetik')
@section('title', 'Masuk Kelas - HTML5VIRTUAL')
@section('menuKelas', 'active')

@push('styles')
<link rel="stylesheet" href="{{ url('css/isiKelas.css') }}">
@endpush

@section('content')

<div class="container py-4">

    @php
        $user = Auth::user();
        $userStyle = strtolower(trim($user->gaya_belajar));
        $isKinestetik = $userStyle === 'kinestetik';

        $bolehEksplore = ($kuisSelesai ?? false) && ($livecodeSelesai ?? false);

        $canEksplore = $isKinestetik && $bolehEksplore;
    @endphp

    @if(!$bolehEksplore)
    <div id="eksploreAlert" class="eksplore-alert">
        <div class="eksplore-alert-icon">
            <i class="bi bi-lock-fill"></i>
        </div>

        <div class="eksplore-alert-content">
            <h6>Eksplore Terkunci</h6>
            <p>
                Selesaikan <b>Kuis</b> dan <b>Live Code</b>
                untuk membuka halaman gaya belajar lainnya.
            </p>

            <button class="btn btn-warning btn-sm rounded-pill px-3 mt-2"
                    id="eksploreAlertOk">
                Mengerti
            </button>
        </div>
    </div>
    @endif

    <!-- ==============================
         HEADER / HERO KELAS
    ===============================-->
    <div class="kelas-hero mb-4">
        <h1>Kelas: {{ $kelas->pelajaran }}</h1>
        <p>ID Kelas: {{ $kelas->idkelas }}</p>
    </div>

    {{-- ===== DETEKSI KUNJUNGAN GAYA BELAJAR ===== --}}
    @php
        $userStyle = strtolower(Auth::user()->gaya_belajar);
        $path = request()->path();

        if (str_contains($path, 'visual')) {
            $visitedStyle = 'visual';
        } elseif (str_contains($path, 'auditori')) {
            $visitedStyle = 'auditori';
        } elseif (str_contains($path, 'kinestetik')) {
            $visitedStyle = 'kinestetik';
        } else {
            $visitedStyle = null;
        }

        // Route kembali ke gaya belajar asli user
        $backRoute = route('isiKelas.byStyle', [
            'style' => $userStyle,
            'id'    => $kelas->id
        ]);
    @endphp

    @if ($visitedStyle && $visitedStyle !== $userStyle)
    <div class="floating-style-alert">

        <div class="d-flex align-items-center gap-3 mb-2">
            <div class="icon-lock">
                <i class="bi bi-lock-fill"></i>
            </div>

            <div>
                <span class="badge badge-warning mb-1">Warning</span>
                <h6 class="mt-1">Akses Terbatas</h6>
            </div>
        </div>

        <p class="mb-2">
            Anda sedang berkunjung di halaman
            <strong>gaya belajar {{ ucfirst($visitedStyle) }}</strong>.
        </p>

        <a href="{{ $backRoute }}"
        class="btn btn-warning btn-sm rounded-pill fw-semibold px-3">
            <i class="bi bi-arrow-left-circle me-1"></i> Kembali ke gaya belajar Anda
        </a>
    </div>
    @endif

    <!-- ==============================
         NAVIGATION TAB
    ===============================-->

    <div class="tab-wrapper">
        <ul class="nav nav-pills justify-content-between flex-wrap" id="kelasTab" role="tablist">

            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link active w-100"
                        id="jelajah-tab" data-bs-toggle="tab" data-bs-target="#jelajah"
                        type="button" role="tab">
                    <i class="bi bi-search me-1"></i>
                    <span class="tab-text">Jelajah</span>
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button
                    class="nav-link w-100 {{ $isKinestetik ? '' : 'locked' }}"
                    {{ $isKinestetik ? 'data-bs-toggle=tab data-bs-target=#kuis' : '' }}
                    type="button" role="tab"
                    title="{{ $isKinestetik ? '' : 'Hanya untuk gaya belajar kinestetik' }}"
                >
                    <i class="bi {{ $isKinestetik ? 'bi-question-circle' : 'bi-lock-fill' }} me-1"></i>
                    <span class="tab-text">Kuis</span>
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button
                    class="nav-link w-100 {{ $isKinestetik ? '' : 'locked' }}"
                    {{ $isKinestetik ? 'data-bs-toggle=tab data-bs-target=#livecode' : '' }}
                    type="button" role="tab"
                    title="{{ $isKinestetik ? '' : 'Hanya untuk gaya belajar kinestetik' }}"
                >
                    <i class="bi {{ $isKinestetik ? 'bi-terminal' : 'bi-lock-fill' }} me-1"></i>
                    <span class="tab-text">Live Code</span>
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button
                    class="nav-link w-100 {{ $isKinestetik ? '' : 'locked' }}"
                    {{ $isKinestetik ? 'data-bs-toggle=tab data-bs-target=#virtual' : '' }}
                    type="button" role="tab"
                    title="{{ $isKinestetik ? '' : 'Hanya untuk gaya belajar kinestetik' }}"
                >
                    <i class="bi {{ $isKinestetik ? 'bi-cpu' : 'bi-lock-fill' }} me-1"></i>
                    <span class="tab-text">Virtual Praktikum</span>
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100"
                        id="leaderboard-tab" data-bs-toggle="tab" data-bs-target="#leaderboard"
                        type="button" role="tab">
                    <i class="bi bi-trophy me-1"></i>
                    <span class="tab-text">Leaderboard</span>
                </button>
            </li>

            <li class="nav-item flex-fill text-center" role="presentation">
                <button
                    class="nav-link w-100 {{ $isKinestetik ? '' : 'locked' }}"
                    {{ $isKinestetik ? 'data-bs-toggle=tab data-bs-target=#feed' : '' }}
                    type="button" role="tab"
                    title="{{ $isKinestetik ? '' : 'Hanya untuk gaya belajar kinestetik' }}"
                >
                    <i class="bi {{ $isKinestetik ? 'bi-journal-text' : 'bi-lock-fill' }} me-1"></i>
                    <span class="tab-text">Feed Pembelajaran</span>
                </button>
            </li>

            <li class="nav-item dropdown flex-fill text-center">
                <a
                    href="#"
                    class="nav-link w-100 dropdown-toggle {{ !$isKinestetik ? 'locked' : '' }}"
                    id="eksploreBtn"
                    data-boleh="{{ $bolehEksplore ? '1' : '0' }}"
                    data-style="{{ $isKinestetik ? '1' : '0' }}"
                    data-bs-toggle="dropdown"
                    title="{{ $isKinestetik ? '' : 'Hanya untuk gaya belajar kinestetik' }}"
                >
                    <i class="bi {{ $isKinestetik ? 'bi-globe' : 'bi-lock-fill' }} me-1"></i>
                    <span class="tab-text">Eksplore</span>
                </a>

                <ul class="dropdown-menu eksplore-dropdown">
                    @if($bolehEksplore)
                        {{-- NORMAL --}}
                        <li>
                            <a class="dropdown-item"
                            href="{{ route('isiKelas.byStyle', ['style' => 'visual', 'id' => $kelas->id]) }}">
                               <i class="bi bi-palette-fill dd-icon"></i>
                                <span class="dd-text">Gaya Belajar Visual</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                            href="{{ route('isiKelas.byStyle', ['style' => 'auditori', 'id' => $kelas->id]) }}">
                                <i class="bi bi-headphones dd-icon"></i>
                                <span class="dd-text">Gaya Belajar Auditori</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                            href="{{ route('isiKelas.byStyle', ['style' => 'kinestetik', 'id' => $kelas->id]) }}">
                                <i class="bi bi-person-walking dd-icon"></i>
                                <span class="dd-text">Gaya Belajar Kinestetik</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>
        </ul>
    </div>

    <!-- ==============================
         TAB CONTENT
    ===============================-->
    <div class="tab-content mt-4" id="kelasTabContent">

        <div class="tab-pane fade show active" id="jelajah" role="tabpanel">
            @include('kinestetik.tabsKelas.jelajah')
        </div>

        <div class="tab-pane fade" id="kuis" role="tabpanel">
            @include('kinestetik.tabsKelas.kuis')
        </div>

        <div class="tab-pane fade" id="leaderboard" role="tabpanel">
            @include('kinestetik.tabsKelas.leaderboard')
        </div>

        <div class="tab-pane fade" id="livecode" role="tabpanel">
            @include('kinestetik.tabsKelas.livecode')
        </div>

        <div class="tab-pane fade" id="feed" role="tabpanel">
            @include('kinestetik.tabsKelas.feed')
        </div>

        <div class="tab-pane fade" id="virtual" role="tabpanel">
            @include('kinestetik.tabsKelas.virtual')
        </div>

    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    const alertBox = document.getElementById('eksploreAlert');
    const okBtn = document.getElementById('eksploreAlertOk');

    // klik Eksplore
    document.addEventListener('mousedown', function (e) {
        const btn = e.target.closest('#eksploreBtn');
        if (!btn) return;

        const boleh = btn.dataset.boleh === '1';

        if (!boleh) {
            e.preventDefault();
            e.stopImmediatePropagation();

            if (alertBox) {
                alertBox.classList.add('show');
            }
        }
    }, true);

    // klik tombol Mengerti
    if (okBtn) {
        okBtn.addEventListener('click', function () {
            alertBox.classList.remove('show');
        });
    }
});
</script>
@endpush

@endsection
