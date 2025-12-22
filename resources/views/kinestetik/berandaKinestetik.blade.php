@extends('layout.masterKinestetik')
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
                <div class="learning-box learning-locked"
                     style="background:linear-gradient(135deg,#f3eaff,#ebe2ff); border-color:#d9caff;">
                    <div class="icon">🎧</div>
                    <div class="fw-bold" style="color:#6f42c1;">Auditori</div>
                    <small class="text-muted">Terkunci</small>
                </div>

                <!-- KINESTETIK -->
                <div class="learning-box learning-active"
                     style="background:linear-gradient(135deg,#e7fff7,#dffcf4); border-color:#b5f0e3;">
                    <div class="icon">🏃‍♂️</div>
                    <div class="fw-bold" style="color:#0f766e;">Kinestetik</div>
                    <small class="text-muted">(Aktif)</small>
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
                    alt="Materi Kinestetik HTML"
                >

                <span class="badge badge-materi position-absolute top-0 start-0 m-3">
                    ✋ KINESTETIK
                </span>
            </div>

            <!-- Body -->
            <div class="card-body d-flex flex-column p-4">
                <h5 class="card-title fw-bold text-primary mb-2">
                    Tips Gaya Belajar Kinestetik
                </h5>

                <p class="card-text text-secondary small flex-grow-1">
                    Materi khusus untuk kamu yang belajar dengan cara mencoba
                    langsung dan melihat hasilnya.
                </p>

                <button
                    class="btn btn-primary mt-2"
                    data-bs-toggle="modal"
                    data-bs-target="#modalKinestetikHTML"
                >
                    📖 Baca Materi
                </button>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modalKinestetikHTML" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-4 shadow-lg">

                <!-- Header -->
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-primary">
                        ✋ Belajar HTML untuk Gaya Belajar Kinestetik
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Body -->
                <div class="modal-body small text-secondary lh-lg">

                    <p><strong>Halo teman-teman!</strong></p>

                    <p>
                        Sekarang, sebelum lanjut membaca, siapkan satu hal <br>
                        👉 buka laptop atau komputer kamu.
                        Kalau sudah, tarik kursi, duduk nyaman, dan pastikan kamu siap langsung praktik.
                    </p>

                    <p>
                        Belajar HTML untuk gaya kinestetik tidak bisa hanya dibaca atau didengar.
                        Kamu harus mengetik, mencoba, salah, lalu memperbaiki.
                        Itulah cara belajar terbaikmu.
                    </p>

                    <hr>

                    <h6 class="fw-bold text-dark">📌 Cara Belajar yang Direkomendasikan</h6>

                    <p>
                        Saat belajar HTML, jangan hanya melihat contoh kode.
                        Ketik ulang semua contoh yang kamu temui.
                    </p>

                    <p>
                        Misalnya kamu membaca tentang <code>&lt;h1&gt;</code>.
                        Jangan lanjut dulu.
                        Berhenti sejenak, ketik <code>&lt;h1&gt;</code> di editor,
                        simpan, lalu buka di browser.
                    </p>

                    <p>
                        HTML itu bukan untuk dihafal, tapi untuk dicoba langsung.
                    </p>

                    <hr>

                    <h6 class="fw-bold text-dark">🛠 Aktivitas yang Disarankan</h6>

                    <ol>
                        <li>Buat file baru bernama <code>index.html</code></li>
                        <li>Ketik struktur HTML dasar</li>
                        <li>Tambahkan satu paragraf</li>
                        <li>Simpan file dan refresh browser</li>
                        <li>Ubah isinya dan lihat perbedaannya</li>
                    </ol>

                    <blockquote class="border-start ps-3 fst-italic text-muted">
                        “Saya paham karena saya mencoba.”
                    </blockquote>

                    <hr>

                    <h6 class="fw-bold text-dark">⚠️ Tips & Kesalahan Umum</h6>

                    <ul>
                        <li>Jangan menyalin kode tanpa mengubahnya</li>
                        <li>Ubah satu bagian kecil setiap kali</li>
                        <li>Selalu simpan file sebelum refresh</li>
                    </ul>

                    <p class="fw-semibold">
                        Setiap error adalah sentuhan belajar.
                    </p>

                    <hr>

                    <p class="fw-bold text-primary">
                        HTML itu dibangun dengan tangan.
                    </p>

                    <p>
                        Sekarang, kembali ke editor kodenya.
                        Coba satu hal baru.
                        <br>
                        <strong>Happy coding! 💻👐</strong>
                    </p>

                </div>

                <!-- Footer -->
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
