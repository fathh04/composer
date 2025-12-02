<h3 class="mb-4 text-center fw-bold text-primary title-glow" data-aos="zoom-in">
  🏆 Peringkat Siswa Terbaik Kategori Auditori
</h3>

<div id="leaderboardContainer"></div>

<script>
const leaderboardData = @json($leaderboard);
const type = "Auditori";

function renderLeaderboard() {
  const data = leaderboardData[type];
  let html = "";

  /* ===================== PODIUM TOP 3 ===================== */
  if (data.length >= 3) {
    html += `
    <div class="podium-wrapper" data-aos="zoom-in">
      <div class="podium-row">

        <!-- Rank 2 -->
        <div class="podium-box podium-2">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583339.png" class="podium-avatar">
          <div class="podium-name">${data[1].name}</div>
          <div class="podium-stand stand-2">2</div>
          <div class="podium-score">${data[1].score} poin</div>
        </div>

        <!-- Rank 1 -->
        <div class="podium-box podium-1">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583341.png" class="podium-avatar podium-main">
          <div class="podium-name podium-name-main">${data[0].name}</div>
          <div class="podium-stand stand-1">1</div>
          <div class="podium-score podium-score-main">${data[0].score} poin</div>
        </div>

        <!-- Rank 3 -->
        <div class="podium-box podium-3">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/2583342.png" class="podium-avatar">
          <div class="podium-name">${data[2].name}</div>
          <div class="podium-stand stand-3">3</div>
          <div class="podium-score">${data[2].score} poin</div>
        </div>

      </div>
    </div>`;
  }

  /* ===================== LIST RANKING ===================== */
  html += `
  <div class="card leaderboard-card shadow-lg border-0 rounded-4 overflow-hidden" data-aos="fade-up">
    <div class="card-body p-0">
      <ul class="list-group list-group-flush">`;

  data.forEach((item, index) => {
    const rank = index + 1;
    if (rank <= 3) return;

    html += `
      <li class="list-group-item list-item d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
          <span class="rank-number">${rank}</span>
          <span class="list-name">${item.name}</span>
        </div>
        <span class="list-score">${item.score} poin</span>
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
      TITLE
===================== */
.title-glow {
  color: #0d6efd;
  text-shadow: 0 0 6px #80c4ff;
}

/* =====================
      PODIUM AREA
===================== */

.podium-wrapper {
  display: flex;
  justify-content: center;
  margin-bottom: 25px;
}

.podium-row {
  display: flex;
  align-items: flex-end;
  gap: 35px;
}

.podium-box {
  text-align: center;
}

/* Avatar */
.podium-avatar {
  width: 78px;
  height: 78px;
  border-radius: 50%;
  border: 3px solid #0d6efd;
  box-shadow: 0 0 10px #8ac8ff;
}

.podium-main {
  width: 95px;
  height: 95px;
  border-color: #0aa1ff;
  box-shadow: 0 0 14px #4cc2ff;
}

/* Name text */
.podium-name {
  font-weight: 600;
  color: #003e7c;
  margin-top: 6px;
}

.podium-name-main {
  font-size: 1.2rem;
  font-weight: 700;
  color: #003067;
  letter-spacing: 0.3px;
}

/* Stand / block */
.podium-stand {
  width: 80px;
  border-radius: 12px;
  margin: 8px auto 5px;
  color: white;
  font-size: 1.4rem;
  font-weight: 700;
  display: flex;
  justify-content: center;
  align-items: center;
}

.stand-1 { height: 105px; background: linear-gradient(180deg, #0aa1ff, #006edc); box-shadow: 0 0 15px #009dff; }
.stand-2 { height: 85px; background: linear-gradient(180deg, #6bb6ff, #2d83e0); box-shadow: 0 0 12px #4ca3ff; }
.stand-3 { height: 70px; background: linear-gradient(180deg, #94c3ff, #5e89e6); box-shadow: 0 0 12px #7aaeff; }

/* Score text */
.podium-score {
  font-weight: 600;
  color: #56769a;
}

.podium-score-main {
  color: #0059d8;
  font-weight: 700;
  text-shadow: 0 0 4px #9dd4ff;
}

/* =====================
      LIST STYLE
===================== */
.leaderboard-card {
  background: #ffffffee;
  border: 1px solid #cde5ff;
  backdrop-filter: blur(10px);
}

.list-item {
  padding: 14px 18px;
  border-bottom: 1px solid #e3f1ff;
}

.list-item:hover {
  background: #f5faff;
}

.rank-number {
  font-size: 1.2rem;
  font-weight: 700;
  color: #0d6efd;
}

.list-name {
  font-weight: 600;
  color: #003b77;
}

.list-score {
  font-weight: 700;
  color: #0d6efd;
}
</style>
