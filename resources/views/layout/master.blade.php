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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header bg-warning text-dark rounded-top-4">
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
                        <button type="submit" class="btn btn-danger">Ya, Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="menu-item @yield('menuBeranda')" onclick="location.href='{{ route('beranda') }}'">
            <i class="bi bi-house-door"></i><span>Beranda</span>
        </div>
        <div class="menu-item @yield('menuPetunjuk')" onclick="location.href='{{ route('petunjuk') }}'">
            <i class="bi bi-journal-text"></i><span>Petunjuk</span>
        </div>
        <div class="menu-item @yield('menuKelas')" onclick="location.href='{{ route('kelas') }}'">
            <i class="bi bi-grid"></i><span>Kelas</span>
        </div>
        <div class="menu-item @yield('menuCPdanTP')" onclick="location.href='{{ route('CPdanTP') }}'">
            <i class="bi bi-check2-circle"></i><span>CP & TP</span>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar custom-nav shadow-sm sticky-top px-3">
        <button class="btn btn-light me-2 rounded-circle shadow-sm" id="toggleSidebar">
            <i class="bi bi-list fs-5"></i>
        </button>
        <a class="navbar-brand fw-bold text-gradient">HTML5VIRTUAL</a>
        <div class="ms-auto d-flex align-items-center gap-2">
            <button id="toggleTheme" class="btn btn-light rounded-circle shadow-sm">
                <i class="bi bi-moon-stars fs-5"></i>
            </button>
            <div class="dropdown">
                <button class="btn btn-light rounded-pill d-flex align-items-center px-2 py-1 shadow-sm"
                        type="button" data-bs-toggle="dropdown">
                    <img src="{{ url('img/profile.jpg') }}" alt="Profile"
                         class="rounded-circle me-2 border border-2 border-primary-subtle"
                         style="width: 32px; height: 32px; object-fit: cover;">
                    <span class="fw-semibold text-dark d-none d-sm-inline">
                        {{ session('user_name') }}
                    </span>
                    <i class="bi bi-caret-down-fill ms-1 text-muted small d-none d-sm-inline"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-2 rounded-3">
                    <li><a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('profile') }}">
                        <i class="bi bi-person-circle text-primary"></i> Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                           href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="bi bi-box-arrow-right"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <div class="main-content" id="mainContent">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <script>
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const toggleTheme = document.getElementById('toggleTheme');
        const body = document.body;

        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        toggleTheme.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            toggleTheme.innerHTML = body.classList.contains('dark-mode')
                ? '<i class="bi bi-sun fs-5"></i>'
                : '<i class="bi bi-moon-stars fs-5"></i>';
        });
    </script>
</body>
</html>
