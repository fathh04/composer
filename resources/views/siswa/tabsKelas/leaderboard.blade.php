<h3 class="mb-4 text-center text-gradient fw-bold" data-aos="zoom-in">
  🏆 Peringkat Siswa Terbaik
</h3>

<div class="card shadow-lg border-0 rounded-4 overflow-hidden" data-aos="fade-up">
  <div class="card-body p-0">
    <ul class="list-group list-group-flush">

      {{-- Juara 1 --}}
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 bg-light position-relative animate__animated animate__fadeInDown">
        <span class="fw-bold text-warning fs-5">🥇 Kelompok 4</span>
        <span class="badge bg-gradient-gold fs-6 px-3 py-2 rounded-pill shadow-sm">95 Poin</span>
      </li>

      {{-- Juara 2 --}}
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 animate__animated animate__fadeInDown animate__delay-1s">
        <span class="fw-bold text-secondary fs-5">🥈 Kelompok 2</span>
        <span class="badge bg-gradient-silver fs-6 px-3 py-2 rounded-pill shadow-sm">90 Poin</span>
      </li>

      {{-- Juara 3 --}}
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 animate__animated animate__fadeInDown animate__delay-2s">
        <span class="fw-bold text-brown fs-5">🥉 Kelompok 1</span>
        <span class="badge bg-gradient-bronze fs-6 px-3 py-2 rounded-pill shadow-sm">85 Poin</span>
      </li>

      {{-- Peringkat lainnya --}}
      <li class="list-group-item d-flex justify-content-between align-items-center py-3 border-0 animate__animated animate__fadeInUp animate__delay-3s">
        <span class="fw-semibold text-primary">⭐ Kelompok 3</span>
        <span class="badge bg-primary fs-6 px-3 py-2 rounded-pill shadow-sm">80 Poin</span>
      </li>
    </ul>
  </div>
</div>

<!-- CSS Kustom -->
<style>
  .text-gradient {
    background: linear-gradient(45deg, #ff6f61, #6a11cb);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .bg-gradient-gold {
    background: linear-gradient(45deg, #ffd700, #ffcc33);
    color: #fff;
  }
  .bg-gradient-silver {
    background: linear-gradient(45deg, #c0c0c0, #e0e0e0);
    color: #333;
  }
  .bg-gradient-bronze {
    background: linear-gradient(45deg, #cd7f32, #b87333);
    color: #fff;
  }
  .list-group-item:hover {
    transform: scale(1.05);
    transition: 0.3s ease;
    background: #fdfdfd;
  }
  .text-brown {
    color: #8B4513;
  }
</style>

<!-- AOS & Animate.css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Canvas Confetti -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
  AOS.init();

  // Confetti saat halaman dibuka
  window.onload = function () {
    setTimeout(() => {
      confetti({
        particleCount: 200,
        spread: 90,
        origin: { y: 0.6 }
      });
    }, 500);
  };
</script>
