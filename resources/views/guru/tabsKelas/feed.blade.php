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
            <pre class="bg-dark text-white p-3 rounded" id="resultCode"></pre>

            <h6 class="fw-bold mt-3 text-primary">🔍 Output Program</h6>
            <div class="border p-3 bg-white rounded border-primary" id="resultOutput"></div>

            <h6 class="fw-bold mt-3 text-primary">📘 Hasil Kuis</h6>
            <div class="alert alert-primary" id="resultQuiz"></div>

            <h6 class="fw-bold mt-3 text-primary">✏️ Feedback Guru</h6>
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


<script>
let selectedStudentId = null;

function selectStudent(select) {

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
                document.getElementById("resultOutput").innerHTML = "<i>Belum ada screenshot.</i>";
            } else {
                document.getElementById("resultCode").innerText = data.html_code;
                document.getElementById("resultOutput").innerHTML =
                    `<img src="${data.screenshot}" class="img-fluid border rounded">`;
            }

            // NILAI KUIS
            document.getElementById("resultQuiz").innerText =
                data.quiz_score !== "-" ? `Nilai Kuis: ${data.quiz_score}/100` : "-";

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
