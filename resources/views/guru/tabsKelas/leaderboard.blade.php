<h3 class="mb-4 text-center text-primary fw-bold" data-aos="zoom-in">
  🏆 Peringkat Siswa Terbaik
</h3>

<!-- DROPDOWN PILIH GAYA BELAJAR -->
<div class="d-flex justify-content-center mb-3">
  <select id="gayaBelajarSelect" class="form-select w-auto fw-bold text-primary border-primary"
          onchange="updateLeaderboard()">
    <option value="visual">🎬 Visual</option>
    <option value="auditori">🎧 Auditori</option>
    <option value="kinestetik">🤸‍♂️ Kinestetik</option>
  </select>
</div>

<!-- LEADERBOARD CONTAINER -->
<div id="leaderboardContainer"></div>

<script>
// ======================
// DATA LEADERBOARD
// ======================
const leaderboardData = {
  visual: [
    { rank: 1, name: "Kelompok 3", info: "🎨 Observasi tajam", point: 96, img: "https://cdn-icons-png.flaticon.com/512/2583/2583344.png" },
    { rank: 2, name: "Kelompok 1", info: "📊 Teliti dan rapi", point: 93, img: "https://cdn-icons-png.flaticon.com/512/2583/2583317.png" },
    { rank: 3, name: "Kelompok 7", info: "🖼️ Kreatif membuat diagram", point: 90, img: "https://cdn-icons-png.flaticon.com/512/2583/2583338.png" },
    { rank: 4, name: "Kelompok 4", point: 82 }
  ],
  auditori: [
    { rank: 1, name: "Kelompok 5", info: "🎤 Cepat memahami penjelasan", point: 97, img: "https://cdn-icons-png.flaticon.com/512/2583/2583344.png" },
    { rank: 2, name: "Kelompok 2", info: "🎧 Diskusi aktif", point: 94, img: "https://cdn-icons-png.flaticon.com/512/2583/2583317.png" },
    { rank: 3, name: "Kelompok 8", info: "🗣️ Menyimak dengan baik", point: 89, img: "https://cdn-icons-png.flaticon.com/512/2583/2583338.png" },
    { rank: 4, name: "Kelompok 6", point: 81 }
  ],
  kinestetik: [
    { rank: 1, name: "Kelompok 4", info: "🤸 Aktif & cepat praktik", point: 95, img: "https://cdn-icons-png.flaticon.com/512/2583/2583344.png" },
    { rank: 2, name: "Kelompok 5", info: "🏃 Sering mencoba ulang", point: 92, img: "https://cdn-icons-png.flaticon.com/512/2583/2583317.png" },
    { rank: 3, name: "Kelompok 1", info: "🛠️ Rajin praktik tugas", point: 90, img: "https://cdn-icons-png/flaticon.com/512/2583/2583338.png" },
    { rank: 4, name: "Kelompok 7", point: 80 }
  ]
};

// ======================
// RENDER LEADERBOARD
// ======================
function updateLeaderboard() {
  const type = document.getElementById("gayaBelajarSelect").value;
  const data = leaderboardData[type];

  let html = `
  <div class="card leaderboard-card shadow-lg border-0 rounded-4 overflow-hidden" data-aos="fade-up">
    <div class="card-body p-0">
      <ul class="list-group list-group-flush">
  `;

  data.forEach(item => {
    if (item.rank <= 3) {
      // TOP 3
      html += `
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 border-0 bg-rank-${item.rank}">
        <div class="d-flex align-items-center gap-3">
          <img src="${item.img}" width="50">
          <div>
            <span class="fw-bold fs-5 text-dark">${item.name}</span>
            <p class="text-light small mb-0">${item.info || ""}</p>
          </div>
        </div>
        <span class="badge rank-badge-${item.rank} fs-6 px-4 py-2 rounded-pill shadow-sm">${item.point} Poin</span>
      </li>
      `;
    } else {
      html += `
      <li class="list-group-item d-flex justify-content-between align-items-center py-3 border-0">
        <div class="d-flex align-items-center gap-2">
          <span class="fs-5 text-warning">⭐</span>
          <span class="fw-semibold text-primary">${item.name}</span>
        </div>
        <span class="badge bg-primary fs-6 px-4 py-2 rounded-pill shadow-sm">${item.point} Poin</span>
      </li>
      `;
    }
  });

  html += `
      </ul>
    </div>
  </div>`;

  document.getElementById("leaderboardContainer").innerHTML = html;
}

// FIRST RENDER
updateLeaderboard();
</script>

<!-- ======================= -->
<!--   CSS TEMA PRIMARY      -->
<!-- ======================= -->
<style>
  /* Gradient background untuk 3 besar */
  .bg-rank-1 {
    background: linear-gradient(90deg, #0d6efd20, #0d6efd40);
  }
  .bg-rank-2 {
    background: linear-gradient(90deg, #0d6efd15, #0d6efd30);
  }
  .bg-rank-3 {
    background: linear-gradient(90deg, #0d6efd10, #0d6efd25);
  }

  /* Badge warna primary */
  .rank-badge-1 {
    background: linear-gradient(45deg, #0d6efd, #0b5ed7);
    color: white;
  }
  .rank-badge-2 {
    background: linear-gradient(45deg, #3c79f5, #335ed7);
    color: white;
  }
  .rank-badge-3 {
    background: linear-gradient(45deg, #6c8cd5, #4a64b0);
    color: white;
  }

  /* Kartu dengan efek blur */
  .leaderboard-card {
    background: #ffffffdd;
    backdrop-filter: blur(12px);
  }

  .list-group-item {
    transition: 0.3s ease;
  }
  .list-group-item:hover {
    transform: scale(1.02);
    background-color: #f0f6ff !important;
  }
</style>
