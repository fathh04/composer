<h3 class="mb-4 text-center fw-bold text-primary" data-aos="zoom-in">
  🏆 Peringkat Siswa Terbaik
</h3>

<!-- AUDIO PENGUMUMAN LEADERBOARD -->
<div class="text-center mb-3">
    <audio controls class="w-100">
        <source src="/audio/pengumuman-leaderboard.mp3" type="audio/mpeg">
    </audio>
    <p class="text-muted small mt-1">🎧 Dengarkan pengumuman peringkat</p>
</div>

<div class="card leaderboard-card shadow-lg border-0 rounded-4 overflow-hidden" data-aos="fade-up">
  <div class="card-body p-0">
    <ul class="list-group list-group-flush">

      <!-- Juara 1 -->
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 bg-primary-light position-relative animate__animated animate__zoomIn">
        <div class="d-flex align-items-center gap-3">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583344.png" width="45" alt="Juara 1">
          <div>
            <span class="fw-bold fs-5 text-dark">Siswa-1</span>
            <p class="text-muted small mb-0">🔥 Aktif dan Kreatif</p>
          </div>
        </div>
        <span class="badge rank-badge-primary fs-6 px-4 py-2 rounded-pill shadow-sm">95 Poin</span>
      </li>

      <!-- Juara 2 -->
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 bg-primary-light2 animate__animated animate__zoomIn animate__delay-1s">
        <div class="d-flex align-items-center gap-3">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583317.png" width="40" alt="Juara 2">
          <div>
            <span class="fw-bold fs-5 text-dark">Siswa-2</span>
            <p class="text-muted small mb-0">💡 Konsisten Berlatih</p>
          </div>
        </div>
        <span class="badge rank-badge-primary2 fs-6 px-4 py-2 rounded-pill shadow-sm">90 Poin</span>
      </li>

      <!-- Juara 3 -->
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 bg-primary-light3 animate__animated animate__zoomIn animate__delay-2s">
        <div class="d-flex align-items-center gap-3">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583338.png" width="40" alt="Juara 3">
          <div>
            <span class="fw-bold fs-5 text-dark">Siswa-3</span>
            <p class="text-muted small mb-0">🎯 Rajin Mengerjakan Latihan</p>
          </div>
        </div>
        <span class="badge rank-badge-primary3 fs-6 px-4 py-2 rounded-pill shadow-sm">85 Poin</span>
      </li>

      <!-- Peringkat lainnya -->
      <li class="list-group-item d-flex justify-content-between align-items-center py-3 border-0 animate__animated animate__fadeInUp animate__delay-3s">
        <div class="d-flex align-items-center gap-2">
          <span class="fs-5 text-primary">⭐</span>
          <span class="fw-semibold text-primary">Anda</span>
        </div>
        <span class="badge bg-primary fs-6 px-4 py-2 rounded-pill shadow-sm">80 Poin</span>
      </li>

    </ul>
  </div>
</div>


<!-- ===================================================== -->
<!-- UMPAN BALIK BELAJAR (Auditori Enhancement)            -->
<!-- ===================================================== -->

<div class="card shadow-lg border-0 rounded-4 mt-4 feedback-card" data-aos="fade-up" data-aos-delay="300">
  <div class="card-body p-4">

    <div class="d-flex justify-content-between align-items-center">
      <h4 class="fw-bold mb-3 text-primary" data-aos="zoom-in">📘 Umpan Balik Belajar</h4>

      <!-- Audio Feedback -->
      <audio controls style="width:220px;">
          <source src="/audio/feedback-belajar.mp3" type="audio/mpeg">
      </audio>
    </div>

    <p class="text-muted">
      Dengarkan ringkasan performa Anda berdasarkan analisis sistem.
    </p>

    <div class="row g-4 mt-3">

      <!-- Rata-rata Nilai -->
      <div class="col-md-4" data-aos="fade-right" data-aos-delay="500">
        <div class="p-3 rounded-4 feedback-box text-center">
          <h6 class="fw-semibold text-primary">Rata-rata Nilai</h6>
          <p class="fs-2 fw-bold text-dark mb-0">88</p>
        </div>
      </div>

      <!-- Progress -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
        <div class="p-3 rounded-4 feedback-box">
          <h6 class="fw-semibold text-primary text-center mb-3">Progres Selesai</h6>
          <div class="progress" style="height: 15px;">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 68%;">
              68%
            </div>
          </div>
        </div>
      </div>

      <!-- Rekomendasi AI -->
      <div class="col-md-4" data-aos="fade-left" data-aos-delay="700">
        <div class="p-3 rounded-4 feedback-box">
          <h6 class="fw-semibold text-primary text-center">Rekomendasi AI</h6>
          <p class="small text-muted mb-0">
            Tingkatkan latihan mendengarkan *penjelasan konsep* dan ulangi materi melalui audio.
          </p>
        </div>
      </div>

    </div>

  </div>
</div>



<!-- ===================================================== -->
<!-- CSS – Tema Primary + Auditori Friendly                -->
<!-- ===================================================== -->
<style>
  .bg-primary-light { background: #e3f2fd; }
  .bg-primary-light2 { background: #e8f0ff; }
  .bg-primary-light3 { background: #edf5ff; }

  .rank-badge-primary { background: #0d6efd; color:#fff; }
  .rank-badge-primary2 { background: #4c8ffb; color:#fff; }
  .rank-badge-primary3 { background: #6fa8ff; color:#fff; }

  .leaderboard-card,
  .feedback-card {
    background: #ffffffee;
    backdrop-filter: blur(12px);
  }

  .feedback-box {
    background: #f7fbff;
    border: 1px solid #d9e7ff;
    transition: 0.3s;
  }
  .feedback-box:hover {
    transform: scale(1.04);
    background: white;
  }

  .list-group-item { transition: 0.3s; }
  .list-group-item:hover {
    transform: scale(1.02);
    background: #f8fbff !important;
  }
</style>


<!-- JS Assets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
  AOS.init({ duration: 900, once: true });

  // Efek konfeti saat halaman dibuka
  window.onload = () => {
    setTimeout(() => {
      confetti({
        particleCount: 180,
        spread: 70,
        origin: { y: 0.7 }
      });
    }, 600);
  };
</script>
