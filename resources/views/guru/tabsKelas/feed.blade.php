<div class="container py-5">

    <h2 class="text-center mb-4 fw-bold text-primary">📊 Pembelajaran Siswa</h2>

    <!-- ================= GRID 3 KOLOM ================= -->
    <div class="row text-center mb-4">

        <!-- Visual -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white fw-bold">
                    🎨 Visual
                </div>
                <div class="card-body">
                    <label class="form-label fw-semibold text-primary">Pilih Siswa:</label>
                    <select class="form-select border-primary" id="visualSelect" onchange="selectStudent('Visual','visual')">
                        <option selected disabled>-- Pilih Siswa --</option>
                        <option>Siswa 1</option>
                        <option>Siswa 2</option>
                        <option>Siswa 3</option>
                        <option>Siswa 4</option>
                        <option>Siswa 5</option>
                        <option>Siswa 6</option>
                        <option>Siswa 7</option>
                        <option>Siswa 8</option>
                        <option>Siswa 9</option>
                        <option>Siswa 10</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Auditori -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white fw-bold">
                    🔊 Auditori
                </div>
                <div class="card-body">
                    <label class="form-label fw-semibold text-primary">Pilih Siswa:</label>
                    <select class="form-select border-primary" id="auditoriSelect" onchange="selectStudent('Auditori','auditori')">
                        <option selected disabled>-- Pilih Siswa --</option>
                        <option>Siswa 1</option>
                        <option>Siswa 2</option>
                        <option>Siswa 3</option>
                        <option>Siswa 4</option>
                        <option>Siswa 5</option>
                        <option>Siswa 6</option>
                        <option>Siswa 7</option>
                        <option>Siswa 8</option>
                        <option>Siswa 9</option>
                        <option>Siswa 10</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Kinestetik -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white fw-bold">
                    🏃‍♂️ Kinestetik
                </div>
                <div class="card-body">
                    <label class="form-label fw-semibold text-primary">Pilih Siswa:</label>
                    <select class="form-select border-primary" id="kinestetikSelect" onchange="selectStudent('Kinestetik','kinestetik')">
                        <option selected disabled>-- Pilih Siswa --</option>
                        <option>Siswa 1</option>
                        <option>Siswa 2</option>
                        <option>Siswa 3</option>
                        <option>Siswa 4</option>
                        <option>Siswa 5</option>
                        <option>Siswa 6</option>
                        <option>Siswa 7</option>
                        <option>Siswa 8</option>
                        <option>Siswa 9</option>
                        <option>Siswa 10</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

    <!-- ================= HASIL PANEL ================= -->
    <div id="resultPanel" class="card shadow-sm d-none border-primary">
        <div class="card-header bg-primary text-white fw-bold">
            📌 Detail Pembelajaran Siswa
        </div>

        <div class="card-body">

            <!-- IDENTITAS -->
            <div class="mb-3 p-3 bg-light rounded border border-primary">
                <h5 class="fw-bold text-primary">🧍 Identitas Siswa</h5>
                <p class="mb-1"><strong>Nama:</strong> <span id="studentName">-</span></p>
                <p class="mb-1"><strong>Gaya Belajar:</strong> <span id="studentStyle">-</span></p>
                <p class="mb-1"><strong>Kelas:</strong> XI RPL</p>
            </div>

            <h5 class="fw-bold text-primary">🧪 Hasil Live Coding</h5>
            <pre class="bg-dark text-white p-3 rounded" id="resultCode"></pre>

            <h6 class="fw-bold mt-3 text-primary">🔍 Output Program</h6>
            <div class="border p-3 bg-white rounded border-primary" id="resultOutput"></div>

            <h6 class="fw-bold mt-3 text-primary">📘 Hasil Kuis</h6>
            <div class="alert alert-primary" id="resultQuiz"></div>

            <h6 class="fw-bold mt-3 text-primary">✏️ Feedback Guru</h6>
            <textarea class="form-control border-primary mb-2" rows="3" placeholder="Tulis feedback..." id="resultFeedback"></textarea>
            <button class="btn btn-primary btn-sm">Kirim Feedback</button>

        </div>
    </div>

</div>


<script>

    // FAKE DATA (dummy)
    const sampleCode = `
<table border="1">
    <tr><th>Nama</th><th>Kelas</th></tr>
    <tr><td>Rina</td><td>XI RPL</td></tr>
</table>`.trim();

    const sampleOutput = `
Nama | Kelas
Rina | XI RPL`.trim();

    const sampleQuiz = "Nilai Kuis: 90 / 100 (Sangat Baik)";

    // =============== Fungsi utama =================
    function selectStudent(styleName, type) {

        const selectedStudent = document.getElementById(type + "Select").value;

        // Reset dropdown lain
        const maps = ["visual", "auditori", "kinestetik"];
        maps.forEach(m => {
            if (m !== type) {
                document.getElementById(m + "Select").selectedIndex = 0;
            }
        });

        document.getElementById("resultPanel").classList.remove("d-none");

        document.getElementById("studentName").innerText = selectedStudent;
        document.getElementById("studentStyle").innerText = styleName;

        document.getElementById("resultCode").innerText = sampleCode;
        document.getElementById("resultOutput").innerText = sampleOutput;
        document.getElementById("resultQuiz").innerText = sampleQuiz;
    }

</script>
