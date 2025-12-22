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

    /* Button Audio */
    .btn-play-audio {
        border-radius: 14px;
        font-weight: 600;
        transition: all .25s ease;
    }

    .btn-play-audio:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(13,110,253,.35);
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
                Sistem telah memprediksi gaya belajar Anda, Selamat Belajar...
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
                    🎧 AUDITORI
                </span>
            </div>

            <!-- Body -->
            <div class="card-body d-flex flex-column p-4">
                <h5 class="card-title fw-bold text-primary mb-2">
                    Tips Gaya Belajar Auditori
                </h5>

                <p class="card-text text-secondary small flex-grow-1">
                    Dengarkan penjelasan mengenai cara belajar HTML, aktivitas yang disarankan, urutan belajar yang disarankan, dan tips untuk kamu dengan gaya belajar Auditori!
                </p>

                <!-- AUDIO -->
                <audio id="audioPemformatan" src="{{ asset('audio/direkomendasikan.wav') }}"></audio>

                <!-- BUTTON -->
                <button
                    class="btn btn-primary btn-play-audio mt-2"
                    data-audio="audioPemformatan"
                >
                    ▶️ Dengarkan Materi
                </button>
            </div>

        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {

    const buttons = document.querySelectorAll('.btn-play-audio');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {

            const audioId = btn.dataset.audio;
            const audio = document.getElementById(audioId);

            // pause audio lain
            document.querySelectorAll('audio').forEach(a => {
                if (a !== audio) {
                    a.pause();
                    a.currentTime = 0;
                }
            });

            // toggle play
            if (audio.paused) {
                audio.play();
                btn.innerHTML = '⏸️ Hentikan Audio';
            } else {
                audio.pause();
                btn.innerHTML = '▶️ Dengarkan Materi';
            }

            // reset teks saat audio selesai
            audio.onended = () => {
                btn.innerHTML = '▶️ Dengarkan Materi';
            };
        });
    });

});
</script>
@endsection
