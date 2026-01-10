@extends('layout.master')
@section('title', 'Petunjuk Pemakaian')
@section('menuPetunjuk', 'active')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                <i class="bi bi-info-circle-fill me-2"></i> Petunjuk Pemakaian
            </h4>
        </div>
        <div class="card-body">
            <div class="accordion" id="accordionPetunjuk">

                <!-- Step 1 -->
                <div class="accordion-item border border-primary rounded mb-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="bi bi-person-plus-fill me-2 text-success"></i> 1. Daftarkan akun anda
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionPetunjuk">
                        <div class="accordion-body">
                            Lengkapi data-data anda pada form pendaftaran yang telah disediakan.
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="accordion-item border border-primary rounded mb-3">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="bi bi-box-arrow-in-right me-2 text-warning"></i> 2. Login akun anda
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionPetunjuk">
                        <div class="accordion-body">
                            Masukkan email dan password yang telah terdaftar untuk mengakses media pembelajaran ini.
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="accordion-item border border-primary rounded mb-3">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="bi bi-plus-circle-fill me-2 text-info"></i> 3. Tambah kelas
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionPetunjuk">
                        <div class="accordion-body">
                            -> Tambahkan kelas Anda dengan masuk ke menu Kelas <br>
                            -> Mintalah id kelas ke guru mata pelajaran Anda <br>
                            -> Masuklah ke dalam kelas berdasarkan id yang telah diberikan guru Anda
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="accordion-item border border-primary rounded mb-3">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="bi bi-play-circle-fill me-2 text-danger"></i> 4. Mulai belajar
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionPetunjuk">
                        <div class="accordion-body">
                            Setelah kelas berhasil ditambahkan, Mulailah pembelajaran melalui fitur yang telah disediakan.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
