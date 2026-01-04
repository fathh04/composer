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

    /* ===== ACTIVE 3D HALUS ===== */
    .learning-active {
        background: linear-gradient(135deg, #dbe7ff, #eef4ff); /* WARNA ASLI */
        border-color: #bcd4ff;

        transform: translateY(-4px);

        /* Shadow ringan & bersih */
        box-shadow:
            0 8px 18px rgba(0,0,0,0.12),
            inset 0 1px 0 rgba(255,255,255,0.8);

        position: relative;
        z-index: 2;
    }

    /* Bayangan bawah tipis */
    .learning-active::after {
        content: "";
        position: absolute;
        left: 16px;
        right: 16px;
        bottom: -6px;
        height: 8px;
        background: rgba(0,0,0,0.18);
        filter: blur(8px);
        border-radius: 50%;
        z-index: -1;
    }

    /* Hover tetap natural */
    .learning-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.12);
    }

    .learning-locked {
        opacity: 0.6;
    }

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
    /* ================= HERO HEADER ================= */
    .hero-header{
        background: linear-gradient(135deg,#e8f0ff,#f8faff);
        border-radius: 20px;
        padding: 28px 30px;
        box-shadow: 0 10px 26px rgba(0,0,0,.08);
        position: relative;
        overflow: hidden;
    }

    /* decorative blur */
    .hero-header::after{
        content:"";
        position:absolute;
        width:220px;
        height:220px;
        background: radial-gradient(circle,#4f46e5 0%,transparent 70%);
        top:-80px;
        right:-80px;
        opacity:.18;
    }

    .hero-title{
        font-size: 1.35rem;
        font-weight: 800;
        color:#1e3a8a;
    }

    .hero-title span{
        background: linear-gradient(90deg,#2563eb,#4f46e5);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtitle{
        color:#64748b;
        font-size:.95rem;
    }

    .hero-divider{
        height:3px;
        width:50px;
        background:linear-gradient(90deg,#2563eb,#4f46e5);
        border-radius:10px;
        margin-top:12px;
    }

    /* ================= LEARNING PANEL ================= */
    .learning-panel-header{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:14px;
    }

    .learning-title{
        font-size:1.1rem;
        font-weight:800;
        color:#1e3a8a;
    }

    .ai-badge{
        background: linear-gradient(135deg,#6366f1,#2563eb);
        color:#fff;
        padding:6px 14px;
        border-radius:20px;
        font-size:12px;
        font-weight:600;
        box-shadow:0 6px 14px rgba(99,102,241,.35);
        display:flex;
        align-items:center;
        gap:6px;
    }

    .ai-badge::before{
        content:"🤖";
    }

    /* subtitle */
    .learning-desc{
        background:#f1f5ff;
        border-left:4px solid #2563eb;
        padding:10px 14px;
        border-radius:10px;
        font-size:.9rem;
        color:#475569;
        margin-bottom:22px;
    }

    /* ================= LEARNING BOX ENHANCEMENT ================= */
    .learning-box .icon{
        font-size:1.8rem;
        margin-bottom:6px;
    }

    .learning-active .icon{
        animation:pulse 1.8s infinite;
    }

    @keyframes pulse{
        0%{transform:scale(1)}
        50%{transform:scale(1.08)}
        100%{transform:scale(1)}
    }

    .learning-locked{
        position: relative;
    }

    .learning-locked::after{
        content: "\F47A"; /* bi-lock-fill */
        font-family: "Bootstrap-icons";
        position: absolute;
        top: 6px;
        right: 8px;

        font-size: 15px;
        color: #1e3a8a; /* biru tua elegan */
        opacity: 0.9;

        background: #e8f0ff;
        padding: 4px 6px;
        border-radius: 8px;

        box-shadow: 0 4px 10px rgba(30,58,138,.25);
    }

</style>

<div class="container py-4">

    <div class="hero-header mb-4">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>
                <div class="hero-title mb-1">
                    👋 Selamat Datang, <span>{{ session('user_name') }}</span>
                </div>

                <div class="hero-subtitle">
                    Dashboard utama Anda
                </div>

                <div class="hero-divider"></div>
            </div>
        </div>

    </div>

    <div class="card-panel mb-4">
        <div class="card-body p-4">

            <!-- HEADER -->
            <div class="learning-panel-header">
                <div class="learning-title">
                    🎯 Gaya Belajar Anda
                </div>

                <div class="ai-badge">
                    AI Prediction
                </div>
            </div>

            <!-- DESC -->
            <div class="learning-desc">
                Sistem telah memprediksi gaya belajar Anda, Selamat Belajar...
            </div>

            <!-- BOX -->
            <div class="d-flex flex-wrap justify-content-center gap-3">

                <div class="learning-box learning-active">
                    <div class="icon">🎨</div>
                    <div class="fw-bold text-primary">Visual</div>
                    <small class="text-muted">Aktif</small>
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
