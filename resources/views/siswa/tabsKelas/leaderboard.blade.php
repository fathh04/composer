<h3 class="mb-4 text-center text-gradient fw-bold" data-aos="zoom-in">
  🏆 Peringkat Siswa Terbaik Minggu Ini
</h3>

<div class="card leaderboard-card shadow-lg border-0 rounded-4 overflow-hidden" data-aos="fade-up">
  <div class="card-body p-0">
    <ul class="list-group list-group-flush">

      <!-- Juara 1 -->
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 bg-rank-gold position-relative animate__animated animate__zoomIn">
        <div class="d-flex align-items-center gap-3">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583344.png" width="45" alt="Juara 1">
          <div>
            <span class="fw-bold fs-5 text-dark">Kelompok 4</span>
            <p class="text-muted small mb-0">🔥 Aktif dan Kreatif</p>
          </div>
        </div>
        <span class="badge rank-badge-gold fs-6 px-4 py-2 rounded-pill shadow-sm">95 Poin</span>
      </li>

      <!-- Juara 2 -->
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 bg-rank-silver animate__animated animate__zoomIn animate__delay-1s">
        <div class="d-flex align-items-center gap-3">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583317.png" width="40" alt="Juara 2">
          <div>
            <span class="fw-bold fs-5 text-dark">Kelompok 2</span>
            <p class="text-muted small mb-0">💡 Konsisten Berlatih</p>
          </div>
        </div>
        <span class="badge rank-badge-silver fs-6 px-4 py-2 rounded-pill shadow-sm">90 Poin</span>
      </li>

      <!-- Juara 3 -->
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 bg-rank-bronze animate__animated animate__zoomIn animate__delay-2s">
        <div class="d-flex align-items-center gap-3">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583338.png" width="40" alt="Juara 3">
          <div>
            <span class="fw-bold fs-5 text-dark">Kelompok 1</span>
            <p class="text-muted small mb-0">🎯 Rajin Mengumpulkan Tugas</p>
          </div>
        </div>
        <span class="badge rank-badge-bronze fs-6 px-4 py-2 rounded-pill shadow-sm">85 Poin</span>
      </li>

      <!-- Peringkat lainnya -->
      <li class="list-group-item d-flex justify-content-between align-items-center py-3 border-0 animate__animated animate__fadeInUp animate__delay-3s">
        <div class="d-flex align-items-center gap-2">
          <span class="fs-5">⭐</span>
          <span class="fw-semibold text-primary">Kelompok 3</span>
        </div>
        <span class="badge bg-primary fs-6 px-4 py-2 rounded-pill shadow-sm">80 Poin</span>
      </li>
    </ul>
  </div>
</div>

<!-- CSS Visual Interaktif -->
<style>
  .text-gradient {
    background: linear-gradient(45deg, #42a5f5, #ab47bc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* Background warna juara */
  .bg-rank-gold {
    background: linear-gradient(90deg, #fff8e1, #ffecb3);
  }
  .bg-rank-silver {
    background: linear-gradient(90deg, #f5f5f5, #e0e0e0);
  }
  .bg-rank-bronze {
    background: linear-gradient(90deg, #fbe9e7, #ffccbc);
  }

  /* Badge poin */
  .rank-badge-gold {
    background: linear-gradient(45deg, #ffb300, #ff9800);
    color: #fff;
  }
  .rank-badge-silver {
    background: linear-gradient(45deg, #bdbdbd, #9e9e9e);
    color: #fff;
  }
  .rank-badge-bronze {
    background: linear-gradient(45deg, #d2691e, #bf360c);
    color: #fff;
  }

  .list-group-item {
    transition: all 0.3s ease;
  }

  .list-group-item:hover {
    transform: scale(1.03);
    background-color: #fdfdfd !important;
  }

  .leaderboard-card {
    background: #ffffffb3;
    backdrop-filter: blur(12px);
  }
</style>

<!-- Animate.css + AOS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Confetti -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
  AOS.init();

  // Efek konfeti + sorotan
  window.onload = () => {
    setTimeout(() => {
      confetti({
        particleCount: 200,
        spread: 80,
        origin: { y: 0.6 }
      });
    }, 700);
  };
</script>
