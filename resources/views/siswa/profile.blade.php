@extends('layout.master')
@section('title', 'Profile - HTML5VIRTUAL')
@section('menuProfile', 'active')

@section('content')
<div class="container py-5">
    <h1 class="h4 fw-bold text-center text-primary mb-5">Profil Tim Pengembang HTML5VIRTUAL</h1>

    @php
        $developers = [
            [
                'nama' => 'Mch. Andi Mai Fatah',
                'role' => 'Backend Developer',
                'foto' => 'profile.jpg'
            ],
            [
                'nama' => 'Mohammad Zainul Abidin',
                'role' => 'Backend Developer',
                'foto' => 'profile.jpg'
            ],
            [
                'nama' => "M. Jahfal Mar'ie",
                'role' => 'Frontend Developer',
                'foto' => 'profile.jpg'
            ],
            [
                'nama' => 'Mochammad Luthfi Aldiansyah',
                'role' => 'Frontend Developer',
                'foto' => 'profile.jpg'
            ],
        ];
    @endphp

    <div class="row g-4 justify-content-center">
        @foreach ($developers as $dev)
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card shadow-lg rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 bg-primary text-white d-flex justify-content-center align-items-center p-3">
                        <img src="{{ asset('img/' . $dev['foto']) }}" alt="Profile" class="img-fluid rounded-circle border border-white" style="width: 120px; height: 120px;">
                    </div>
                    <div class="col-md-8 p-4">
                        <h4 class="fw-bold text-primary">{{ $dev['nama'] }}</h4>
                        <p class="text-muted">{{ $dev['role'] }}</p>
                        <hr>
                        <h6 class="text-secondary">Informasi Pribadi</h6>
                        <ul class="list-unstyled small">
                            <li><strong>Nama:</strong> {{ $dev['nama'] }}</li>
                            <li><strong>Program Studi:</strong> S1 Pendidikan Teknik Informatika</li>
                            <li><strong>Instansi:</strong> Universitas Negeri Malang</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
