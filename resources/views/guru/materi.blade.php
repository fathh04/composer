@extends('layout.masterGuru')
@section('title', 'Materi Guru - Akadia')
@section('menuBeranda', 'active')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="h4 fw-bold">Materi</h1>
        <p class="text-muted">Unggah materi baru untuk pengajaran Anda.</p>
    </div>

    <div class="upload-btn">
        <i class="bi bi-plus-circle"></i>
        <div class="mt-2">Klik untuk mengunggah materi</div>
    </div><br>

    <div>
        <h1 class="h4 fw-bold">Daftar Materi</h1>
        <div class="accordion" id="materiAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Materi 1: Pengantar Pemrograman
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#materiAccordion">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button class="btn btn-primary mt-3">Kerjakan Kuis</button>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Materi 2: Struktur Data Dasar
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#materiAccordion">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button class="btn btn-primary mt-3">Kerjakan Kuis</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
