<style>
    .quiz-container {
        background: #fff;
        border-radius: 18px;
        padding: 25px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 6px 20px rgba(0,0,0,0.06);
    }

    .quiz-title {
        color: #0d6efd;
    }

    .quiz-question {
        margin-bottom: 28px;
        padding: 18px;
        border-left: 6px solid #0d6efd;
        background: #f0f6ff;
        border-radius: 10px;
    }

    .quiz-question pre {
        background: #e9f1ff;
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #d0e2ff;
        font-size: 14px;
        white-space: pre-wrap;
    }

    .choice {
        margin: 8px 0;
        padding: 12px 15px;
        background: #ffffff;
        border: 2px solid #d9e6ff;
        border-radius: 12px;
        cursor: pointer;
        transition: 0.25s;
        display: flex;
        align-items: center;
    }

    .choice:hover {
        background: #e8f1ff;
        border-color: #0d6efd;
    }

    .choice input {
        margin-right: 10px;
        transform: scale(1.3);
        accent-color: #0d6efd;
    }

    .choice.selected {
        background: #d7e8ff;
        border-color: #0d6efd;
    }

    .option-text {
        font-size: 15px;
        font-weight: 500;
    }

    #result {
        margin-top: 20px;
        padding: 18px;
        font-weight: bold;
        border-radius: 10px;
        display: none;
    }
</style>

<!-- 🔒 INFO LOCKED -->
<div id="lockedInfo" class="alert alert-warning text-center" style="display:none;">
    ⚠️ Kamu sudah mengerjakan kuis ini. Nilai akhir telah tersimpan.
</div>

<!-- 🚀 START CARD -->
<div id="startCard" class="card shadow-lg border-0 mb-4" style="border-radius: 18px;">
    <img src="{{ url('img/syntax.png')}}"
         class="card-img-top p-4"
         style="height: 200px; object-fit: contain;" alt="Kuis">

    <div class="card-body text-center">
        <h4 class="fw-bold text-primary">Kuis Tabel</h4>
        <p class="text-muted">
            Jawablah 5 soal dan raihlah peringkat pertama!
        </p>

        <button id="startBtn" class="btn btn-primary px-4 py-2 mt-2" style="border-radius: 12px;">
            🚀 Mulai Kuis
        </button>
    </div>
</div>

<!-- BOX KUIS -->
<div id="quizBox" style="display:none;">

<div class="quiz-container">
    <h3 class="text-center fw-bold mb-4 quiz-title">📘 Kuis</h3>

    <!-- ======================== SOAL 1 ======================= -->
    <div class="quiz-question">
        <p><b>1. Perhatikan struktur tabel berikut:</b></p>
        <pre>
&lt;table&gt;
    &lt;tr&gt;
        &lt;td&gt;Nama&lt;/td&gt;
        &lt;td&gt;Umur&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
        </pre>
        Elemen yang berfungsi sebagai <b>baris tabel</b> adalah…

        <label class="choice"><input type="radio" name="q1" value="A"> <span class="option-text">&lt;td&gt;</span></label>
        <label class="choice"><input type="radio" name="q1" value="B"> <span class="option-text">&lt;tr&gt;</span></label>
        <label class="choice"><input type="radio" name="q1" value="C"> <span class="option-text">&lt;table&gt;</span></label>
        <label class="choice"><input type="radio" name="q1" value="D"> <span class="option-text">&lt;th&gt;</span></label>
    </div>

    <!-- ======================== SOAL 2 ======================= -->
    <div class="quiz-question">
        <p><b>2. Tag yang digunakan untuk membuat header tabel adalah…</b></p>

        <label class="choice"><input type="radio" name="q2" value="A"> &lt;td&gt;</label>
        <label class="choice"><input type="radio" name="q2" value="B"> &lt;header&gt;</label>
        <label class="choice"><input type="radio" name="q2" value="C"> &lt;th&gt;</label>
        <label class="choice"><input type="radio" name="q2" value="D"> &lt;thead&gt;</label>
    </div>

    <!-- ======================== SOAL 3 ======================= -->
    <div class="quiz-question">
        <p><b>3. Agar tabel memiliki garis, atribut apa yang digunakan?</b></p>

        <label class="choice"><input type="radio" name="q3" value="A"> table-style="border"</label>
        <label class="choice"><input type="radio" name="q3" value="B"> style="outline:1px"</label>
        <label class="choice"><input type="radio" name="q3" value="C"> border="1"</label>
        <label class="choice"><input type="radio" name="q3" value="D"> line="1"</label>
    </div>

    <!-- ======================== SOAL 4 ======================= -->
    <div class="quiz-question">
        <p><b>4. Agar sel melebar menjadi 2 kolom, kode yang benar adalah…</b></p>

        <label class="choice"><input type="radio" name="q4" value="A"> &lt;td span="2"&gt;</label>
        <label class="choice"><input type="radio" name="q4" value="B"> &lt;td column="2"&gt;</label>
        <label class="choice"><input type="radio" name="q4" value="C"> &lt;td colspan="2"&gt;</label>
        <label class="choice"><input type="radio" name="q4" value="D"> &lt;td width="2"&gt;</label>
    </div>

    <!-- ======================== SOAL 5 ======================= -->
    <div class="quiz-question">
        <p><b>5. Bagian yang berisi data (bukan header) berada di…</b></p>

        <label class="choice"><input type="radio" name="q5" value="A"> &lt;thead&gt;</label>
        <label class="choice"><input type="radio" name="q5" value="B"> &lt;tbody&gt;</label>
        <label class="choice"><input type="radio" name="q5" value="C"> &lt;tfoot&gt;</label>
        <label class="choice"><input type="radio" name="q5" value="D"> &lt;header&gt;</label>
    </div>

    <button class="btn btn-primary w-100 mt-2" onclick="checkQuiz()">Selesaikan Kuis</button>

    <div id="result"></div>
</div>
</div>

<!-- 🎉 CARD HASIL KUIS -->
<div id="hasilCard" class="card shadow-lg border-0 mt-4" style="display:none; border-radius: 18px;">
    <div class="card-body text-center p-4">
        <h3 class="fw-bold text-success">🎉 Kuis Selesai!</h3>
        <h4 id="hasilNilai" class="mt-3 mb-3"></h4>
        <p class="text-muted">Anda sudah mengerjakan kuis ini.</p>

        <button class="btn btn-secondary mt-2" onclick="location.reload()">
            🔄 Kembali
        </button>
    </div>
</div>

<script>
    let sudahMengerjakan = false;

    // 🔍 CEK STATUS KUIS SAAT PAGE LOAD
    fetch("{{ url('/api/kuis/status') }}?user={{ Auth::id() }}")
        .then(res => res.json())
        .then(data => {
            if (data.status === "locked") {
                sudahMengerjakan = true;
                document.getElementById("lockedInfo").style.display = "block";
                document.getElementById("startCard").style.display = "none";
            }
        });

    // 🚀 TOMBOL MULAI
    document.getElementById("startBtn").addEventListener("click", () => {
        if (sudahMengerjakan) return;
        document.getElementById("quizBox").style.display = "block";
        document.getElementById("startCard").style.display = "none";
    });

    // 🎨 Efek selected
    document.querySelectorAll('.choice input').forEach(radio => {
        radio.addEventListener('change', function() {
            let group = document.querySelectorAll('input[name="'+this.name+'"]');
            group.forEach(r => r.parentElement.classList.remove('selected'));
            this.parentElement.classList.add('selected');
        });
    });

    // 📝 SUBMIT KUIS
    function checkQuiz() {
        if (sudahMengerjakan) return;

        let answers = {
            q1: "B",
            q2: "C",
            q3: "C",
            q4: "C",
            q5: "B"
        };

        let score = 0;
        for (let q in answers) {
            let selected = document.querySelector('input[name="'+q+'"]:checked');
            if (selected && selected.value === answers[q]) {
                score++;
            }
        }

        // ➤ KONVERSI SCORE KE NILAI /100
        let nilaiAkhir = score * 20;

        // Kirim nilai ke server
        fetch("{{ route('kuis.submit') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ score: nilaiAkhir })
        })
        .then(res => res.json())
        .then(data => {

            if (data.status === "locked") {
                alert("Kuis sudah pernah dikerjakan.");
                return;
            }

            sudahMengerjakan = true;

            document.getElementById("quizBox").style.display = "none";

            document.getElementById("hasilNilai").innerHTML =
                "Nilai Anda: <b>" + nilaiAkhir + "</b>";

            document.getElementById("hasilCard").style.display = "block";

            setTimeout(() => {
                location.reload();
            }, 600);
        });
    }
</script>
