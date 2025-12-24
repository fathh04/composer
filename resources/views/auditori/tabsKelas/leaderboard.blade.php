@php
    $leaderboard = $leaderboard ?? [
        'visual' => [],
        'auditori' => [],
        'kinestetik' => []
    ];
@endphp

<div id="leaderboardSection">

<h3 class="mb-4 text-center text-primary fw-bold" data-aos="zoom-in">
  🏆 Peringkat Siswa Terbaik Kategori Auditori
</h3>

<div id="leaderboardContainer"></div>

<script>
const leaderboardData = @json($leaderboard);
const type = "auditori";

function renderLeaderboard() {
  const data = leaderboardData[type];

  let html = "";

  /* =====================
        PODIUM TOP 3
  ====================== */
  if (data.length >= 3) {
    html += `
    <div class="podium-container mb-4" data-aos="zoom-in">
      <div class="d-flex justify-content-center align-items-end">

        <!-- Rank 2 -->
        <div class="podium-box podium-2 text-center">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583339.png" class="podium-avatar">
          <div class="fw-semibold mt-2">${data[1].name}</div>
          <div class="podium-stand bg-rank-2">2</div>
          <div class="mt-1 text-secondary">${data[1].score} poin</div>
        </div>

        <!-- Rank 1 -->
        <div class="podium-box podium-1 text-center mx-4">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583341.png" class="podium-avatar podium-main">
          <div class="fw-bold mt-2 fs-5">${data[0].name}</div>
          <div class="podium-stand bg-rank-1">1</div>
          <div class="mt-1 text-primary fw-bold">${data[0].score} poin</div>
        </div>

        <!-- Rank 3 -->
        <div class="podium-box podium-3 text-center">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583342.png" class="podium-avatar">
          <div class="fw-semibold mt-2">${data[2].name}</div>
          <div class="podium-stand bg-rank-3">3</div>
          <div class="mt-1 text-secondary">${data[2].score} poin</div>
        </div>

      </div>
    </div>`;
  }

  /* =====================
      LIST RANKING LAMA
  ====================== */
  html += `
  <div class="card leaderboard-card shadow-lg border-0 rounded-4 overflow-hidden" data-aos="fade-up">
    <div class="card-body p-0">
      <ul class="list-group list-group-flush">`;

  data.forEach((item, index) => {
    const rank = index + 1;

    if (rank <= 3) return; // top 3 sudah tampil di podium

    html += `
      <li class="list-group-item d-flex justify-content-between align-items-center py-3 border-0">
        <div class="d-flex align-items-center gap-2">
          <span class="fs-5 text-warning">⭐</span>
          <span class="fw-semibold text-primary">${item.name}</span>
        </div>
        <span class="badge bg-primary fs-6 px-4 py-2 rounded-pill shadow-sm">${item.score} poin</span>
      </li>`;
  });

  html += `
      </ul>
    </div>
  </div>`;

  document.getElementById("leaderboardContainer").innerHTML = html;
}

renderLeaderboard();
</script>

<style>
/* =====================
      PODIUM STYLE
===================== */

.podium-container {
  display: flex;
  justify-content: center;
}

.podium-box {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.podium-avatar {
  width: 70px;
  height: 70px;
  border-radius: 50%;
}

.podium-main {
  width: 90px;
  height: 90px;
}

.podium-stand {
  width: 70px;
  height: 60px;
  margin-top: 6px;
  border-radius: 12px;
  color: white;
  font-size: 1.4rem;
  display: flex;
  justify-content: center;
  align-items: center;
}

.podium-1 .podium-stand { height: 90px !important; }
.podium-2 .podium-stand { height: 70px !important; }
.podium-3 .podium-stand { height: 60px !important; }

/* =====================
      WARNA PODIUM
===================== */
.bg-rank-1 { background: #0d6efd; }
.bg-rank-2 { background: #3c79f5; }
.bg-rank-3 { background: #6c8cd5; }

/* =====================
     STYLE LAMA
===================== */
.bg-rank-1 { background: linear-gradient(90deg, #0d6efd20, #0d6efd40); }
.bg-rank-2 { background: linear-gradient(90deg, #0d6efd15, #0d6efd30); }
.bg-rank-3 { background: linear-gradient(90deg, #0d6efd10, #0d6efd25); }

.rank-badge-1 { background: #0d6efd; color: white; }
.rank-badge-2 { background: #3c79f5; color: white; }
.rank-badge-3 { background: #6c8cd5; color: white; }

.leaderboard-card {
  background: #ffffffdd;
  backdrop-filter: blur(12px);
}
</style>

</div>
