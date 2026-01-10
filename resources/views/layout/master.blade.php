<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HTML5VIRTUAL</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Icons & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    @stack('styles')
    @yield('styles')
    <style>
    /* ===== LOCKED STYLE (TANPA content) ===== */
    .locked {
        opacity: .45 !important;
        cursor: not-allowed !important;
        pointer-events: none !important;
    }

    /* ikon tetap terlihat rapi */
    .locked i {
        opacity: .9;
    }
    </style>
</head>

<body>
@php
    $user = Auth::user();
    $userStyle = strtolower(trim($user->gaya_belajar ?? ''));
    $isVisual = $userStyle === 'visual';
@endphp

<!-- ================= MODAL LOGOUT ================= -->
<div class="modal fade" id="logoutModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title">Konfirmasi Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ================= SIDEBAR ================= -->
<div class="sidebar" id="sidebar">

    <div class="menu-item {{ $isVisual ? '' : 'locked' }}"
         @if($isVisual) onclick="location.href='{{ route('beranda') }}'" @endif>
        <i class="bi bi-house-door"></i><span>Beranda</span>
    </div>

    <div class="menu-item {{ $isVisual ? '' : 'locked' }}"
         @if($isVisual) onclick="location.href='{{ route('petunjuk') }}'" @endif>
        <i class="bi bi-journal-text"></i><span>Petunjuk</span>
    </div>

    <div class="menu-item {{ $isVisual ? '' : 'locked' }}"
         @if($isVisual) onclick="location.href='{{ route('CPdanTP') }}'" @endif>
        <i class="bi bi-check2-circle"></i><span>CP & TP</span>
    </div>

    <div class="menu-item {{ $isVisual ? '' : 'locked' }}"
         @if($isVisual) onclick="location.href='{{ route('kelas') }}'" @endif>
        <i class="bi bi-grid"></i><span>Kelas</span>
    </div>
</div>

<!-- ================= NAVBAR ================= -->
<nav class="navbar custom-nav shadow-sm sticky-top px-3">
    <button class="btn btn-light me-2 rounded-circle shadow-sm {{ $isVisual ? '' : 'locked' }}"
            id="toggleSidebar">
        <i class="bi bi-list fs-5"></i>
    </button>

    <a class="navbar-brand fw-bold text-gradient">HTML5VIRTUAL</a>

    <div class="ms-auto d-flex align-items-center gap-2">

        {{-- <button id="toggleTheme"
                class="btn btn-light rounded-circle shadow-sm {{ $isVisual ? '' : 'locked' }}">
            <i class="bi bi-moon-stars fs-5"></i>
        </button> --}}

        <div class="dropdown">
            <button class="btn btn-light rounded-pill d-flex align-items-center px-2 py-1 shadow-sm
                           {{ $isVisual ? '' : 'locked' }}"
                    type="button"
                    {{ $isVisual ? 'data-bs-toggle=dropdown' : '' }}>
                <img src="{{ url('https://cdn-icons-png.flaticon.com/512/817/817757.png') }}"
                     class="rounded-circle me-2"
                     style="width:32px;height:32px">
                <span class="fw-semibold d-none d-sm-inline">
                    {{ session('user_name') }}
                </span>
            </button>

            @if($isVisual)
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li>
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="bi bi-person-circle"></i> Profile
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item text-danger"
                       href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>

<!-- ================= MAIN CONTENT ================= -->
<div class="main-content" id="mainContent">
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>

<!-- ================= SCRIPT ================= -->
<script>
    const toggleSidebar = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const toggleTheme = document.getElementById('toggleTheme');
    const body = document.body;

    if (toggleSidebar) {
        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    }

    // if (toggleTheme) {
    //     toggleTheme.addEventListener('click', () => {
    //         body.classList.toggle('dark-mode');
    //         toggleTheme.innerHTML = body.classList.contains('dark-mode')
    //             ? '<i class="bi bi-sun fs-5"></i>'
    //             : '<i class="bi bi-moon-stars fs-5"></i>';
    //     });
    // }
</script>

@stack('scripts')
</body>
</html>
