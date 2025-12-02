<h3 class="mb-4 text-center text-primary fw-bold">
  🏆 Peringkat Siswa Terbaik
</h3>

<div class="d-flex justify-content-center mb-3">
  <select id="gayaBelajarSelect" class="form-select w-auto fw-bold text-primary border-primary"
          onchange="updateLeaderboard()">
    <option value="visual">🎬 Visual</option>
    <option value="auditori">🎧 Auditori</option>
    <option value="kinestetik">🤸‍♂️ Kinestetik</option>
  </select>
</div>

<div id="leaderboardContainer"></div>

<script>
const leaderboardData = @json($leaderboard);

function updateLeaderboard() {
  const type = document.getElementById("gayaBelajarSelect").value;
  const data = leaderboardData[type];

  let html = `
  <div class="card leaderboard-card shadow-lg border-0 rounded-4 overflow-hidden">
    <div class="card-body p-0">
      <ul class="list-group list-group-flush">
  `;

  data.forEach((item, index) => {
    const rank = index + 1;

    if (rank <= 3) {
      html += `
      <li class="list-group-item d-flex justify-content-between align-items-center py-4 bg-rank-${rank}">
        <div class="d-flex align-items-center gap-3">
          <img src="https://cdn-icons-png.flaticon.com/512/2583/25833${40 + rank}.png" width="50">
          <div>
            <span class="fw-bold fs-5 text-dark">${item.name}</span>
          </div>
        </div>
        <span class="badge rank-badge-${rank} fs-6 px-4 py-2 rounded-pill shadow-sm">${item.score} Poin</span>
      </li>
      `;
    } else {
      html += `
      <li class="list-group-item d-flex justify-content-between align-items-center py-3">
        <div class="d-flex align-items-center gap-2">
          <span class="fs-5 text-warning">⭐</span>
          <span class="fw-semibold text-primary">${item.name}</span>
        </div>
        <span class="badge bg-primary fs-6 px-4 py-2 rounded-pill shadow-sm">${item.score} Poin</span>
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

updateLeaderboard();
</script>

<style>
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
