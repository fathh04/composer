<style>
    .quiz-card {
        border-left: 6px solid #0d6efd;
        border-radius: 14px;
        padding: 20px;
        transition: 0.25s;
    }
    .quiz-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    }

    .option-box {
        padding: 12px 15px;
        border: 2px solid #dcdcdc;
        border-radius: 10px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: 0.2s;
        background: white;
    }
    .option-box:hover {
        border-color: #0d6efd;
        background: #eff6ff;
    }

    .option-box input {
        margin-right: 8px;
        transform: scale(1.2);
    }

    .submit-btn {
        background: #0d6efd;
        color: white;
        padding: 12px 22px;
        border-radius: 10px;
        border: none;
        margin-top: 20px;
        width: 100%;
        font-size: 18px;
        transition: 0.2s;
    }
    .submit-btn:hover {
        background: #084ec1;
    }

    .result-box {
        padding: 20px;
        background: #f0f8ff;
        border: 2px solid #0d6efd;
        border-radius: 12px;
        display: none;
        margin-top: 20px;
    }
</style>

<div class="container py-4">
    <h3 class="fw-bold text-center mb-4 text-primary">🎧 Kuis Auditori – Tabel HTML</h3>

    <!-- Instruksi Audio -->
    <div class="quiz-card shadow-sm mb-4">
        <h5 class="fw-bold">📢 Instruksi</h5>
        <p>Dengarkan audio penjelasan sebelum menjawab soal.</p>
        <audio controls class="w-100">
            <source src="/audio/intro-tabel-html.mp3" type="audio/mpeg">
        </audio>
    </div>

    <!-- ======================================================= -->
    <!-- SOAL 1 -->
    <div class="quiz-card shadow-sm mb-4">
        <h5 class="fw-bold">Soal 1</h5>
        <audio controls class="w-100 mb-3">
            <source src="/audio/soal1-tabel-html.mp3" type="audio/mpeg">
        </audio>

        <p><strong>Pertanyaan:</strong> Tag apakah yang digunakan untuk membuat baris dalam tabel HTML?</p>

        <div class="option-box"><input type="radio" name="s1" value="td"> &lt;td&gt;</div>
        <div class="option-box"><input type="radio" name="s1" value="th"> &lt;th&gt;</div>
        <div class="option-box"><input type="radio" name="s1" value="tr"> &lt;tr&gt;</div>
        <div class="option-box"><input type="radio" name="s1" value="table"> &lt;table&gt;</div>
    </div>

    <!-- SOAL 2 -->
    <div class="quiz-card shadow-sm mb-4">
        <h5 class="fw-bold">Soal 2</h5>
        <audio controls class="w-100 mb-3">
            <source src="/audio/soal2-tabel-html.mp3" type="audio/mpeg">
        </audio>

        <p><strong>Pertanyaan:</strong> Tag apakah yang digunakan untuk membuat header kolom pada tabel?</p>

        <div class="option-box"><input type="radio" name="s2" value="td"> &lt;td&gt;</div>
        <div class="option-box"><input type="radio" name="s2" value="th"> &lt;th&gt;</div>
        <div class="option-box"><input type="radio" name="s2" value="hr"> &lt;hr&gt;</div>
        <div class="option-box"><input type="radio" name="s2" value="tr"> &lt;tr&gt;</div>
    </div>

    <!-- SOAL 3 -->
    <div class="quiz-card shadow-sm mb-4">
        <h5 class="fw-bold">Soal 3</h5>

        <audio controls class="w-100 mb-3">
            <source src="/audio/soal3-tabel-html.mp3" type="audio/mpeg">
        </audio>

        <p><strong>Pertanyaan:</strong> Tag manakah yang digunakan untuk membuat isi sel dalam tabel?</p>

        <div class="option-box"><input type="radio" name="s3" value="td"> &lt;td&gt;</div>
        <div class="option-box"><input type="radio" name="s3" value="th"> &lt;th&gt;</div>
        <div class="option-box"><input type="radio" name="s3" value="tr"> &lt;tr&gt;</div>
        <div class="option-box"><input type="radio" name="s3" value="body"> &lt;body&gt;</div>
    </div>

    <!-- SOAL 4 -->
    <div class="quiz-card shadow-sm mb-4">
        <h5 class="fw-bold">Soal 4</h5>

        <audio controls class="w-100 mb-3">
            <source src="/audio/soal4-tabel-html.mp3" type="audio/mpeg">
        </audio>

        <p><strong>Pertanyaan:</strong> Apa fungsi atribut <code>border="1"</code>?</p>

        <div class="option-box"><input type="radio" name="s4" value="warna"> Mengubah warna teks</div>
        <div class="option-box"><input type="radio" name="s4" value="font"> Menambah ukuran font</div>
        <div class="option-box"><input type="radio" name="s4" value="garis"> Memberi garis pada tabel</div>
        <div class="option-box"><input type="radio" name="s4" value="bg"> Menambahkan background</div>
    </div>

    <!-- SOAL 5 -->
    <div class="quiz-card shadow-sm mb-4">
        <h5 class="fw-bold">Soal 5</h5>

        <audio controls class="w-100 mb-3">
            <source src="/audio/soal5-tabel-html.mp3" type="audio/mpeg">
        </audio>

        <p><strong>Pertanyaan:</strong> Struktur tabel yang benar adalah?</p>

        <div class="option-box"><input type="radio" name="s5" value="salah1"> table - th - tr - td</div>
        <div class="option-box"><input type="radio" name="s5" value="benar"> table - tr - th/td</div>
        <div class="option-box"><input type="radio" name="s5" value="salah2"> tr - table - td</div>
        <div class="option-box"><input type="radio" name="s5" value="salah3"> td - tr - table</div>
    </div>

    <!-- BUTTON CEK SEMUA JAWABAN -->
    <button class="submit-btn" onclick="checkAll()">✔ Cek Semua Jawaban</button>

    <!-- HASIL -->
    <div id="result-box" class="result-box"></div>

</div>

<script>
function checkAll() {
    const correctAnswers = {
        s1: "tr",
        s2: "th",
        s3: "td",
        s4: "garis",
        s5: "benar"
    };

    let score = 0;
    let total = 5;
    let resultHTML = "<h4><strong>Hasil Kuis:</strong></h4><hr>";

    for (let key in correctAnswers) {
        const selected = document.querySelector(`input[name="${key}"]:checked`);

        if (!selected) {
            resultHTML += `<p><strong>Soal ${key.slice(1)}:</strong> ❌ Belum dijawab.</p>`;
            continue;
        }

        if (selected.value === correctAnswers[key]) {
            score++;
            resultHTML += `<p><strong>Soal ${key.slice(1)}:</strong> ✔ Benar</p>`;
        } else {
            resultHTML += `<p><strong>Soal ${key.slice(1)}:</strong> ❌ Salah (jawaban benar: <b>${correctAnswers[key]}</b>)</p>`;
        }
    }

    resultHTML += `<hr><h4>🎯 Skor Akhir: <strong>${score}/${total}</strong></h4>`;

    const resultBox = document.getElementById("result-box");
    resultBox.innerHTML = resultHTML;
    resultBox.style.display = "block";
}
</script>
