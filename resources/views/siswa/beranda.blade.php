@extends('layout.master')
@section('title', 'Beranda Siswa - HTML5VIRTUAL')
@section('menuBeranda', 'active')

@section('content')

<style>
    body { background: #f5f7fc; }

    .card-panel {
        border: 0;
        border-radius: 18px;
        background: linear-gradient(145deg, #ffffff, #f1f5ff);
        box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    }

    .learning-box {
        width: 135px;
        padding: 16px 12px;
        border-radius: 14px;
        border: 1px solid #e5e7eb;
        background: #ffffff;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.05);
        transition: all 0.25s ease;
    }

    .learning-active {
        background: linear-gradient(135deg, #dbe7ff, #eef4ff);
        border-color: #bcd4ff;
    }

    .learning-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 18px rgba(0,0,0,0.12);
    }

    .learning-locked { opacity: 0.6; }

    .recommended-card {
        transition: 0.25s ease;
        background: #ffffff;
    }

    .recommended-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 22px rgba(0,0,0,0.12);
    }
    /* Card Materi */
    .card-materi {
        transition: all 0.3s ease;
    }

    .card-materi:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 32px rgba(13,110,253,.25);
    }

    /* Thumbnail Landscape */
    .img-landscape {
        aspect-ratio: 16 / 9;
        object-fit: cover;
    }

    /* Badge */
    .badge-materi {
        background: linear-gradient(90deg, #0b5ed7, #0d6efd);
        color: #fff;
        font-size: 12px;
        padding: 6px 12px;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(13,110,253,.3);
    }
</style>

<div class="container py-4">

    <h1 class="h4 fw-bold mb-1">Selamat Datang, {{ session('user_name') }}</h1>
    <p class="text-muted mb-4">Dashboard utama Anda</p>

    <div class="card-panel mb-4">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0">Gaya Belajar Anda</h5>

                <span class="badge px-3 py-2"
                    style="background: linear-gradient(135deg,#2563eb,#4f46e5); color:white; border-radius:12px;">
                    Artificial Intelligence
                </span>
            </div>

            <p class="text-muted mb-4">
                Sistem telah memprediksi gaya belajar Anda, Selamat Belajar...
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3">

                <div class="learning-box learning-active">
                    <div class="icon">🎨</div>
                    <div class="fw-bold text-primary">Visual</div>
                    <small class="text-muted">(Aktif)</small>
                </div>

                <div class="learning-box learning-locked">
                    <div class="icon">🎧</div>
                    <div class="fw-bold text-secondary">Auditori</div>
                    <small class="text-muted">Terkunci</small>
                </div>

                <div class="learning-box learning-locked">
                    <div class="icon">🏃‍♂️</div>
                    <div class="fw-bold text-success">Kinestetik</div>
                    <small class="text-muted">Terkunci</small>
                </div>

            </div>

        </div>
    </div>

    <!-- ======= MATERI YANG DIREKOMENDASIKAN ======= -->
    <h5 class="fw-bold mb-3">Materi yang Direkomendasikan</h5>
    <div class="col-md-4 col-sm-6" data-aos="fade-up">
        <div class="card h-100 border-0 rounded-4 shadow-sm card-materi">

            <!-- Thumbnail -->
            <div class="position-relative">
                <img
                    src="{{ url('img/visual.jpg') }}"
                    class="card-img-top img-landscape rounded-top-4"
                    alt="Materi Auditori HTML"
                >

                <span class="badge badge-materi position-absolute top-0 start-0 m-3">
                    🎨 Visual
                </span>
            </div>

            <!-- Body -->
            <div class="card-body d-flex flex-column p-4">
                <h5 class="card-title fw-bold text-primary mb-2">
                    Tips Gaya Belajar Visual
                </h5>

                <p class="card-text text-secondary small flex-grow-1">
                    Tonton video penjelasan mengenai cara belajar HTML, aktivitas yang disarankan, urutan belajar yang disarankan, dan tips untuk kamu dengan gaya belajar Visual!
                </p>

                <!-- BUTTON -->
                <button
                    class="btn btn-primary mt-2"
                    data-bs-toggle="modal"
                    data-bs-target="#modalVideoAuditori"
                >
                    ▶️ Tonton Materi
                </button>
            </div>

        </div>
    </div>
    <div class="modal fade" id="modalVideoAuditori" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-4 shadow-lg overflow-hidden">

                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-primary">
                        Tips Gaya Belajar Visual
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- BODY -->
                <div class="modal-body p-0">

                    <div class="ratio ratio-16x9">
                        <video
                            id="videoAuditori"
                            controls
                            preload="metadata"
                        >
                            <source src="{{ url('video/visual.mp4') }}" type="video/mp4">
                            Browser Anda tidak mendukung video.
                        </video>
                    </div>

                    <div class="p-3 small text-muted">
                        Video ini berisi penjelasan cara belajar HTML untuk gaya belajar Visual, termasuk urutan belajar dan tips penting.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
