<div class="container py-4">
    <!-- Accordion Materi Visual -->
    <div class="accordion" id="materiAccordion">
        {{-- Materi visual statis (Konsep HTML, Kegunaan HTML) --}}

        <!-- Materi 1 -->
        <div class="accordion-item shadow-lg mb-3 rounded-4 border-0" data-aos="fade-up">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed fw-bold text-primary" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                    aria-controls="collapseOne">
                    📘 Konsep HTML
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#materiAccordion">
                <div class="accordion-body">
                    <!-- Carousel Materi 1 -->
                    <div id="carouselKonsep" class="carousel slide mb-3">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselKonsep" data-bs-slide-to="0" class="active"
                                aria-current="true"></button>
                            <button type="button" data-bs-target="#carouselKonsep" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselKonsep" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner rounded-4 overflow-hidden">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/konsep1.png') }}" class="d-block w-100" alt="Konsep HTML 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/konsep2.png') }}" class="d-block w-100" alt="Konsep HTML 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/konsep3.png') }}" class="d-block w-100" alt="Konsep HTML 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselKonsep"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselKonsep"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    <!-- Progress -->
                    <label for="progressKonsep" class="form-label">Progres Materi</label>
                    <div class="progress rounded-pill" style="height: 15px;">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                            id="progressKonsep" role="progressbar" style="width: 50%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            50% - Hebat! 🎉
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Materi 2 -->
        <div class="accordion-item shadow-lg mb-3 rounded-4 border-0" data-aos="fade-up">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-bold text-primary" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    💡 Kegunaan HTML
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#materiAccordion">
                <div class="accordion-body">
                    <!-- Carousel Materi 2 -->
                    <div id="carouselKegunaan" class="carousel slide mb-3">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselKegunaan" data-bs-slide-to="0"
                                class="active" aria-current="true"></button>
                            <button type="button" data-bs-target="#carouselKegunaan" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselKegunaan" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner rounded-4 overflow-hidden">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/kegunaan1.png') }}" class="d-block w-100" alt="Kegunaan HTML 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/kegunaan2.png') }}" class="d-block w-100" alt="Kegunaan HTML 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/kegunaan3.png') }}" class="d-block w-100" alt="Kegunaan HTML 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselKegunaan"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselKegunaan"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    <!-- Progress -->
                    <label for="progressKegunaan" class="form-label">Progres Materi</label>
                    <div class="progress rounded-pill" style="height: 15px;">
                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                            id="progressKegunaan" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">
                            75% - Keren! 🚀
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Materi Pengajar -->
    <hr class="my-4">
    <h5 class="fw-bold mb-3 text-secondary">📂 Materi Pengajar</h5>
    <div class="accordion" id="materiPengajarAccordion">
        @if ($materi->isEmpty())
            <div class="alert alert-warning text-center rounded-3 shadow-sm p-3">
                😢 Belum ada materi yang diupload oleh pengajar.
            </div>
        @else
            @foreach ($materi as $m)
                <div class="accordion-item shadow-lg mb-3 rounded-4 border-0 overflow-hidden"
                     style="background: linear-gradient(135deg, #fdfbfb, #ebedee);" data-aos="fade-up">
                    <h2 class="accordion-header" id="heading{{ $m->id }}">
                        <button class="accordion-button collapsed fw-bold text-dark" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $m->id }}">
                            📖 {{ $m->judul }}
                        </button>
                    </h2>
                    <div id="collapse{{ $m->id }}" class="accordion-collapse collapse"
                        data-bs-parent="#materiPengajarAccordion">
                        <div class="accordion-body">
                            <p class="mb-3 text-secondary">{{ $m->deskripsi }}</p>

                            <!-- Toolbar -->
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-warning text-dark p-2">
                                    📄 File PDF
                                </span>
                                <a href="{{ asset('storage/' . $m->file_materi) }}" target="_blank"
                                    class="btn btn-sm btn-gradient">
                                    ⬇️ Unduh
                                </a>
                            </div>

                            <!-- PDF Preview -->
                            <div class="ratio ratio-16x9 border rounded-4 shadow-sm bg-white">
                                <iframe src="{{ asset('storage/' . $m->file_materi) }}" width="100%" height="500"
                                    style="border:none; border-radius:12px;" allowfullscreen></iframe>
                            </div>

                            <!-- Progress -->
                            <div class="mt-3">
                                <label class="fw-semibold">Progres Membaca 📊</label>
                                <div class="progress rounded-pill" style="height: 15px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        role="progressbar" style="width: 40%">
                                        40% - Bagus! 🌟
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<!-- Custom CSS -->
<style>
    .btn-gradient {
        background: linear-gradient(45deg, #42a5f5, #ab47bc);
        color: white;
        border: none;
        border-radius: 30px;
        padding: 5px 15px;
        transition: 0.3s;
    }
    .btn-gradient:hover {
        opacity: 0.9;
        transform: scale(1.05);
    }
</style>

<!-- AOS Animations -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
