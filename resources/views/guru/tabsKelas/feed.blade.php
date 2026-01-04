<style>
.glass-card {
  background: rgba(255,255,255,0.97);
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0,0,0,.12);
  border: 1px solid rgba(255,255,255,.6);
  backdrop-filter: blur(8px);
}

pre {
  white-space: pre-wrap;
  word-wrap: break-word;
}
/* ===== Section Card ===== */
.section-card {
  background: #ffffff;
  border-radius: 14px;
  border: 1px solid #e6e9f5;
  box-shadow: 0 6px 18px rgba(0,0,0,0.06);
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

/* ===== Section Header ===== */
.section-header {
  background: #f4f7ff;
  padding: 12px 16px;
  font-weight: 700;
  color: #1e40af;
  border-bottom: 1px solid #e6e9f5;
  display: flex;
  align-items: center;
}

.code-box {
  background: #0f172a;
  color: #e5e7eb;
  font-size: 14px;
  padding: 16px;
  margin: 0;
  height: 100%;
  max-height: 420px;

  /* ⬇️ INI KUNCINYA */
  white-space: pre;          /* JANGAN wrap ke bawah */
  overflow-x: auto;          /* scroll ke kanan */
  overflow-y: auto;          /* scroll ke bawah jika panjang */

  font-family: "Fira Code", monospace;
  border-radius: 0;
}

/* ===== Preview ===== */
.preview-box {
  background: #ffffff;
  border-top: 1px solid #e6e9f5;
}

.preview-iframe {
  width: 100%;
  height: 100%;
  border: none;
  background: #ffffff;
}

/* ===== Mobile Friendly ===== */
@media (max-width: 768px) {
  .code-box {
    max-height: 260px;
  }
}
</style>

<div class="container py-5">

    <h2 class="text-center mb-4 fw-bold text-primary">📊 Pembelajaran Siswa</h2>

    <div class="row text-center mb-4">

        <!-- VISUAL -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white fw-bold">🎨 Visual</div>
                <div class="card-body">
                    <label class="form-label fw-semibold text-primary">Pilih Siswa:</label>
                    <select class="form-select border-primary" id="visualSelect"
                        onchange="selectStudent(this)">
                        <option selected disabled>-- Pilih Siswa --</option>

                        @foreach ($visual as $v)
                            <option value="{{ $v->id }}"
                                    data-nama="{{ $v->nama }}"
                                    data-style="{{ $v->gaya_belajar }}">
                                {{ $v->nama }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>

        <!-- AUDITORI -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white fw-bold">🔊 Auditori</div>
                <div class="card-body">
                    <label class="form-label fw-semibold text-primary">Pilih Siswa:</label>
                    <select class="form-select border-primary" id="auditoriSelect"
                        onchange="selectStudent(this)">
                        <option selected disabled>-- Pilih Siswa --</option>

                        @foreach ($auditori as $a)
                            <option value="{{ $a->id }}"
                                    data-nama="{{ $a->nama }}"
                                    data-style="{{ $a->gaya_belajar }}">
                                {{ $a->nama }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>

        <!-- KINESTETIK -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white fw-bold">🏃‍♂️ Kinestetik</div>
                <div class="card-body">
                    <label class="form-label fw-semibold text-primary">Pilih Siswa:</label>
                    <select class="form-select border-primary" id="kinestetikSelect"
                        onchange="selectStudent(this)">
                        <option selected disabled>-- Pilih Siswa --</option>

                        @foreach ($kinestetik as $k)
                            <option value="{{ $k->id }}"
                                    data-nama="{{ $k->nama }}"
                                    data-style="{{ $k->gaya_belajar }}">
                                {{ $k->nama }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>

    </div>

    <!-- HASIL -->
    <div id="resultPanel" class="card shadow-sm d-none border-primary">
        <div class="card-header bg-primary text-white fw-bold">
            📌 Detail Pembelajaran Siswa
        </div>

        <div class="card-body">

            <div class="mb-3 p-3 bg-light rounded border border-primary">
                <h5 class="fw-bold text-primary">🧍 Identitas Siswa</h5>
                <p class="mb-1"><strong>Nama:</strong> <span id="studentName">-</span></p>
                <p class="mb-1"><strong>Gaya Belajar:</strong> <span id="studentStyle">-</span></p>
                <p class="mb-1"><strong>Kelas:</strong> <span id="studentClass">-</span></p>
            </div>

            <h5 class="fw-bold text-primary">🧪 Hasil Live Coding</h5>
            <button id="lihatHasilBtn"
                    class="btn btn-outline-primary btn-sm ms-2"
                    data-bs-toggle="modal"
                    data-bs-target="#hasilModal">
                    Lihat Hasil
            </button>

            <h6 class="fw-bold mt-3 text-primary">📘 Hasil Kuis</h6>
            <div id="resultQuiz" class="border rounded p-3 bg-light border-primary">
                <p class="mb-1">📘 Posttest 1: <strong id="pt1">-</strong></p>
                <p class="mb-1">📘 Posttest 2: <strong id="pt2">-</strong></p>
                <p class="mb-1">📘 Posttest 3: <strong id="pt3">-</strong></p>
                <hr>
                <p class="mb-0 fw-bold text-primary">
                    🎯 Rata-rata Kuis: <span id="quizAvg">-</span>
                </p>
            </div>

            <h6 class="fw-bold mt-3 text-primary">✏️ Feedback Guru Hasil Live Code</h6>
            <textarea class="form-control border-primary mb-2" rows="3" id="resultFeedback"
                placeholder="Tulis feedback..."></textarea>
            <button class="btn btn-primary btn-sm" id="sendFeedbackBtn">Kirim Feedback</button>

        </div>
    </div>

</div>

<!-- Modal Sukses -->
<div class="modal fade" id="feedbackSuccessModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-success text-white p-3 text-center">
      <h5 class="mb-0">Feedback Berhasil Dikirim!</h5>
    </div>
  </div>
</div>

<!-- ================= MODAL HASIL LIVE CODING ================= -->
<div class="modal fade" id="hasilModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content glass-card">

      <!-- HEADER -->
      <div class="modal-header border-0 pb-0">
        <div>
           <h5 class="fw-bold text-primary mb-0">
                🧪 Hasil Live Coding
                <span class="text-dark fw-semibold" id="liveCodingStudentName"></span>
            </h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body pt-4">

        <div class="row g-4">

          <!-- ===== KODE HTML ===== -->
          <div class="col-lg-5">
            <div class="section-card h-100">
              <div class="section-header">
                📄 Kode HTML
              </div>

              <pre id="resultCode" class="code-box">
              </pre>
            </div>
          </div>

          <!-- ===== PREVIEW ===== -->
          <div class="col-lg-7">
            <div class="section-card h-100 d-flex flex-column">

              <div class="section-header d-flex align-items-center">
                🖥 Preview
                <button id="runFromResult"
                        class="btn btn-primary btn-sm rounded-pill ms-auto">
                  ▶ Jalankan Kode
                </button>
              </div>

              <div class="preview-box flex-grow-1">
                <iframe id="resultPreview"
                        sandbox="allow-scripts allow-same-origin"
                        class="preview-iframe"></iframe>
              </div>

            </div>
          </div>

        </div>

      </div>

      <!-- FOOTER -->
      <div class="modal-footer border-0 pt-0">
        <button class="btn btn-outline-secondary rounded-pill px-4"
                data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>
<!-- =========================================================== -->



<script>
let selectedStudentId = null;

function selectStudent(select) {

    // === RESET PREVIEW & MODAL STATE (PENTING) ===
    document.getElementById("resultCode").textContent = "";
    document.getElementById("resultPreview").srcdoc = `
      <html>
        <body style="font-family:system-ui; padding:16px; color:#666;">
          <i>Preview akan muncul setelah klik "Jalankan Kode"</i>
        </body>
      </html>
    `;

    // SIMPAN ID SISWA YANG DIPILIH
    selectedStudentId = select.value;

    // RESET dropdown lain
    document.getElementById("visualSelect").selectedIndex =
        (select.id === "visualSelect") ? select.selectedIndex : 0;

    document.getElementById("auditoriSelect").selectedIndex =
        (select.id === "auditoriSelect") ? select.selectedIndex : 0;

    document.getElementById("kinestetikSelect").selectedIndex =
        (select.id === "kinestetikSelect") ? select.selectedIndex : 0;

    // Ambil data identitas
    const studentId = select.value;
    const nama = select.options[select.selectedIndex].dataset.nama;
    const style = select.options[select.selectedIndex].dataset.style;

    document.getElementById("resultPanel").classList.remove("d-none");

    document.getElementById("studentName").innerText = nama;
    document.getElementById("liveCodingStudentName").innerText = `(${nama})`;
    document.getElementById("studentStyle").innerText = style;

    // Ambil data submission
    fetch(`/guru/submission/${studentId}`)
        .then(res => res.json())
        .then(data => {

            // KELAS
            document.getElementById("studentClass").innerText = data.kelas;

            // SUBMISSION
            if (!data.exists) {
                document.getElementById("resultCode").innerText = "Belum ada submission.";
            } else {
                document.getElementById("resultCode").innerText = data.html_code;
            }

            // ===== HASIL KUIS =====
            const quiz = data.quiz;

            document.getElementById("pt1").innerText =
                quiz.posttest_1 !== null ? quiz.posttest_1 + "/100" : "Belum dikerjakan";

            document.getElementById("pt2").innerText =
                quiz.posttest_2 !== null ? quiz.posttest_2 + "/100" : "Belum dikerjakan";

            document.getElementById("pt3").innerText =
                quiz.posttest_3 !== null ? quiz.posttest_3 + "/100" : "Belum dikerjakan";

            document.getElementById("quizAvg").innerText =
                quiz.rata_rata !== null ? quiz.rata_rata + "/100" : "-";

            // === FEEDBACK DARI DATABASE (INILAH YANG DITAMBAHKAN) ===
            document.getElementById("resultFeedback").value = data.feedback ?? "";
        });
}
</script>


<script>
// === KIRIM FEEDBACK ===
document.getElementById("sendFeedbackBtn").addEventListener("click", function () {

    const studentId = selectedStudentId;
    const feedback = document.getElementById("resultFeedback").value;

    if (!studentId) {
        alert("Pilih siswa terlebih dahulu!");
        return;
    }

    let formData = new FormData();
    formData.append("pengguna_id", studentId);
    formData.append("feedback", feedback);
    formData.append("_token", "{{ csrf_token() }}");

    fetch("/guru/feedback", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {

        let modal = new bootstrap.Modal(document.getElementById("feedbackSuccessModal"));
        modal.show();

        setTimeout(() => {
            modal.hide();
        }, 1500);

        // Jangan reset textarea — biarkan tetap menampilkan feedback terbaru
        // document.getElementById("resultFeedback").value = "";
    });
});
</script>

<script>
document.querySelectorAll(".lihatHasilBtn").forEach(btn => {
  btn.addEventListener("click", function () {

    const html = this.dataset.html || "";

    // tampilkan kode mentah
    document.getElementById("resultCode").textContent =
      html || "Tidak ada kode yang tersimpan.";

    // jalankan preview
    const iframe = document.getElementById("resultPreview");

    iframe.srcdoc = `
      <!doctype html>
      <html>
        <head>
          <meta charset="utf-8">
          <style>
            body {
              font-family: system-ui, sans-serif;
              padding: 16px;
              background: #fff;
            }
          </style>
        </head>
        <body>
          ${html}
        </body>
      </html>
    `;
  });
});
</script>

<script>
document.getElementById("runFromResult").addEventListener("click", () => {

  const codeEl = document.getElementById("resultCode");
  const iframe  = document.getElementById("resultPreview");

  if (!codeEl || !iframe) return;

  // Ambil HTML langsung dari <pre>
  const html = codeEl.textContent.trim();

  if (!html) {
    iframe.srcdoc = `
      <html>
        <body style="font-family:system-ui; padding:16px;">
          <b>Tidak ada kode untuk dijalankan.</b>
        </body>
      </html>
    `;
    return;
  }

  // Render ke iframe
  iframe.srcdoc = `
    <!doctype html>
    <html>
      <head>
        <meta charset="utf-8">
        <style>
          body {
            font-family: system-ui, sans-serif;
            padding: 16px;
            background: #fff;
          }
        </style>
      </head>
      <body>
        ${html}
      </body>
    </html>
  `;
});
</script>

<script>
document.getElementById("hasilModal")
  .addEventListener("hidden.bs.modal", () => {
    document.getElementById("resultPreview").srcdoc = "";
});
</script>
