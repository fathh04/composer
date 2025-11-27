@extends('layout.masterAuditori')
@section('title', 'Profile - HTML5VIRTUAL')
@section('menuProfile', 'active')

@section('content')
<div class="container py-5">
    <h1 class="h4 fw-bold text-center text-primary mb-5">Profil Pengguna</h1>

    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-6">
            <div class="card shadow-lg rounded-4 overflow-hidden">

                <div class="row g-0">
                    <div class="col-md-4 bg-primary text-white d-flex justify-content-center align-items-center p-3">
                        <img src="{{ asset('img/profile.jpg') }}"
                             alt="Profile"
                             class="img-fluid rounded-circle border border-white"
                             style="width: 130px; height: 130px; object-fit: cover;">
                    </div>

                    <div class="col-md-8 p-4">
                        <h4 class="fw-bold text-primary">{{ session('user_name') }}</h4>
                        <p class="text-muted">{{ ucfirst($user->role) }}</p>

                        <hr>

                        <h6 class="text-secondary">Informasi Akun</h6>
                        <ul class="list-unstyled small">
                            <li><strong>Nama pengguna:</strong> {{ session('user_name') }}</li>
                            <li><strong>Alamat email:</strong> {{ $user->email }}</li>
                            <li><strong>Daftar sebagai:</strong> {{ $user->role }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection

@section('styles')
<style>
    .card:hover {
        transform: translateY(-6px);
        transition: all 0.3s ease;
    }
    .rounded-circle {
        object-fit: cover;
    }
    h4, h6 {
        margin-bottom: 0.4rem;
    }
    hr {
        margin: 0.5rem 0;
        border-top: 1px solid #ddd;
    }
</style>
@endsection
