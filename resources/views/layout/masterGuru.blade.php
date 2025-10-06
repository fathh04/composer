<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/guru.css">
</head>
<body class="bg-light">
    <div class="sidebar" id="sidebar">
        <div class="text-center py-3">
            <span class="fw-bold fs-4">HTMLExplore</span>
        </div>
        <div class="menu-item text-white" onclick="location.href='{{ route('guru.index') }}'">
            <i class="bi bi-house-door"></i> <span class="menu-text">Dashboard</span>
        </div>
        <div class="menu-item text-white" onclick="location.href='{{ route('kelasGuru') }}'">
            <i class="bi bi-collection"></i> <span class="menu-text">Tambah Kelas</span>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <button class="btn btn-light me-3" id="toggleSidebar">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand">
                <img src="{{ asset('img/logoakadia.png') }}" alt="Logo" style="height: 30px; margin-right: 10px;">
                HTMLExplore
            </a>
            <div class="dropdown ms-auto">
                <button class="btn btn-white d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2">{{ session('user_name') }}</span>
                    <img src="{{ asset('img/guru.jpg') }}" alt="Profile" class="profile-img">
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="/login">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content" id="mainContent">
            @yield('content')
    </div>
    <script>
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('minimized');
            mainContent.classList.toggle('minimized');
        });

        function navigateTo(page) {
            alert(`Navigating to ${page}`);
        }
    </script>
</body>
</html>
