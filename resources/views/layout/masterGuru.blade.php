<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HTMLExplore</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Icons & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS (SAMA DENGAN LAYOUT SISWA) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title">Konfirmasi Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">Apakah Anda yakin ingin logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <form action="{{ route('logout') }}" method="POST">@csrf
                        <button class="btn btn-danger">Ya, Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Guru (MENU KHUSUS GURU) -->
    <div class="sidebar" id="sidebar">
        <div class="menu-item @yield('menuDashboard')" onclick="location.href='{{ route('guru.index') }}'">
            <i class="bi bi-speedometer2"></i><span>Dashboard</span>
        </div>

        <div class="menu-item @yield('menuKelas')" onclick="location.href='{{ route('kelasGuru') }}'">
            <i class="bi bi-collection"></i><span>Tambah Kelas</span>
        </div>
    </div>

    <!-- NAVBAR (100% SAMA DENGAN LAYOUT SISWA) -->
    <nav class="navbar custom-nav shadow-sm sticky-top px-3">
        <button class="btn btn-light me-2 rounded-circle shadow-sm" id="toggleSidebar">
            <i class="bi bi-list fs-5"></i>
        </button>

        <a class="navbar-brand fw-bold text-gradient">HTMLExplore</a>

        <div class="ms-auto d-flex align-items-center gap-2">
            <button id="toggleTheme" class="btn btn-light rounded-circle shadow-sm">
                <i class="bi bi-moon-stars fs-5"></i>
            </button>

            <div class="dropdown">
                <button class="btn btn-light rounded-pill d-flex align-items-center px-2 py-1 shadow-sm"
                        type="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('img/guru.jpg') }}"
                         class="rounded-circle me-2 border border-2 border-primary-subtle"
                         style="width:32px; height:32px; object-fit:cover;">
                    <span class="fw-semibold text-dark d-none d-sm-inline">
                        {{ session('user_name') }}
                    </span>
                    <i class="bi bi-caret-down-fill ms-1 text-muted small d-none d-sm-inline"></i>
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-2 rounded-3">
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                            <i class="bi bi-person-circle text-primary"></i> Profile
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item text-danger d-flex align-items-center gap-2"
                           href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT (SAMA DENGAN SISWA) -->
    <div class="main-content" id="mainContent">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleSidebar = document.getElementById('toggleSidebar');
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
