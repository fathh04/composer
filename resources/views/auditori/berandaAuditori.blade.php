@extends('layout.masterAuditori')
@section('title', 'Beranda Siswa - HTML5VIRTUAL')
@section('menuBeranda', 'active')

@section('content')

<style>
    /* ======= GLOBAL THEME ======= */
    body {
        background: #f5f7fc;
    }

    .card-panel {
        border: 0;
        border-radius: 18px;
        background: linear-gradient(145deg, #ffffff, #f1f5ff);
        box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    }

    /* ======= GAYA BELAJAR (COMPACT) ======= */
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

    .learning-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 18px rgba(0,0,0,0.12);
    }

    .learning-box .icon {
        font-size: 1.8rem;
        margin-bottom: 6px;
    }

    /* Aktif */
    .learning-active {
        background: linear-gradient(135deg, #dbe7ff, #eef4ff);
        border-color: #bcd4ff;
    }

    /* Terkunci */
    .learning-locked {
        opacity: 0.6;
    }

    /* ======= RECOMMENDED MATERIAL CARD ======= */
.recommended-card {
    transition: 0.25s ease;
    background: #ffffff;
}

.recommended-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 22px rgba(0,0,0,0.12);
}

.icon-box {
    width: 48px;
    height: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
}

    /* ======= RESPONSIVE ======= */
    @media (max-width: 576px) {
        .learning-box {
            width: 95px;
            padding: 12px;
        }

        .learning-box .icon {
            font-size: 1.5rem;
        }
    }

    /* ======= STAT BOX ======= */
    .stat-box {
        border-radius: 18px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        transition: 0.3s ease;
    }

    .stat-box:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
</style>

<div class="container py-4">

    <h1 class="h4 fw-bold mb-1">Selamat Datang, {{ session('user_name') }}</h1>
    <p class="text-muted mb-4">Ini adalah dashboard utama media pembelajaran Anda.</p>

    <!-- ======= PANEL GAYA BELAJAR ======= -->
    <div class="card-panel mb-4">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0">Gaya Belajar Anda</h5>

                <span class="badge px-3 py-2"
                    style="background: linear-gradient(135deg,#2563eb,#4f46e5); color:white; box-shadow:0 3px 8px rgba(37,99,235,0.3); border-radius:12px;">
                    Artificial Intelligence
                </span>
            </div>

            <p class="text-muted mb-4">
                Sistem telah memprediksi gaya belajar Anda. Hasil prediksi ini membantu penyajian materi lebih sesuai.
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3">

                <!-- VISUAL -->
                <div class="learning-box learning-locked">
                    <div class="icon">🎨</div>
                    <div class="fw-bold text-primary">Visual</div>
                    <small class="text-muted">Terkunci</small>
                </div>

                <!-- AUDITORI -->
                <div class="learning-box learning-active"
                     style="background:linear-gradient(135deg,#f3eaff,#ebe2ff); border-color:#d9caff;">
                    <div class="icon">🎧</div>
                    <div class="fw-bold" style="color:#6f42c1;">Auditori</div>
                    <small class="text-muted">(Aktif)</small>
                </div>

                <!-- KINESTETIK -->
                <div class="learning-box learning-locked"
                     style="background:linear-gradient(135deg,#e7fff7,#dffcf4); border-color:#b5f0e3;">
                    <div class="icon">🏃‍♂️</div>
                    <div class="fw-bold" style="color:#0f766e;">Kinestetik</div>
                    <small class="text-muted">Terkunci</small>
                </div>

            </div>

        </div>
    </div>

    <!-- ======= MATERI YANG DIREKOMENDASIKAN ======= -->
    <div class="mt-4 mb-4">
        <h5 class="fw-bold mb-3">Materi yang Direkomendasikan</h5>

        <div class="row">

            <!-- Materi 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card recommended-card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-3 mb-3 d-inline-flex p-3">
                            <i class="bi bi-play-circle fs-4"></i>
                        </div>
                        <h6 class="fw-bold">Pengenalan Table dalam HTML</h6>
                        <p class="text-muted small mb-3">
                            Materi dasar untuk memahami struktur table dalam HTML5
                        </p>
                        <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Lihat Materi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
