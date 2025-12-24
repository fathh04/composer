@php
    $score = $score ?? null;
@endphp
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
</style>

<div class="container py-4">

    <!-- ================= START CARD ================= -->
    <div id="startCard"
        class="card shadow-lg border-0 mb-4"
        style="border-radius: 18px; {{ $score !== null ? 'display:none;' : '' }}">

        <img src="{{ url('img/syntax.png')}}" class="card-img-top p-4"
             style="height: 200px; object-fit: contain;">

        <div class="card-body text-center">
            <h4 class="fw-bold text-primary">Kuis Tabel</h4>
            <p class="text-muted">Jawablah 5 soal dan raihlah nilai terbaik!</p>

            <button id="startBtn" class="btn btn-primary px-4 py-2 mt-2" style="border-radius: 12px;">
                🚀 Mulai Kuis
            </button>
        </div>
    </div>

    <!-- ================= HASIL CARD ================= -->
    <div id="hasilCard"
         class="card shadow-lg border-0 mt-4"
         style="{{ $score !== null ? '' : 'display:none;' }}; border-radius: 18px;">

        <div class="card-body text-center p-4">
            <h3 class="fw-bold text-success">🎉 Kuis Selesai!</h3>
            <h4 id="hasilNilai" class="mt-3 mb-3">
                {{ $score !== null ? "Nilai Anda: $score" : '' }}
            </h4>
            <button class="btn btn-secondary mt-2" onclick="location.reload()">
                🔄 Kembali
            </button>
        </div>
    </div>

    <!-- ================= KUIS BOX ================= -->
    <div id="quizBox" style="display:none;">
        <div class="quiz-container">
            <h3 class="text-center fw-bold mb-4 quiz-title">📘 Kuis</h3>

            <!-- SOAL 1 -->
            <div class="quiz-question">
                <p><b>1. Elemen baris tabel adalah…</b></p>

                <label class="choice"><input type="radio" name="q1" value="A"> &lt;td&gt;</label>
                <label class="choice"><input type="radio" name="q1" value="B"> &lt;tr&gt;</label>
                <label class="choice"><input type="radio" name="q1" value="C"> &lt;table&gt;</label>
                <label class="choice"><input type="radio" name="q1" value="D"> &lt;th&gt;</label>
            </div>

            <!-- SOAL 2 -->
            <div class="quiz-question">
                <p><b>2. Tag header tabel adalah…</b></p>

                <label class="choice"><input type="radio" name="q2" value="A"> &lt;td&gt;</label>
                <label class="choice"><input type="radio" name="q2" value="B"> &lt;header&gt;</label>
                <label class="choice"><input type="radio" name="q2" value="C"> &lt;th&gt;</label>
                <label class="choice"><input type="radio" name="q2" value="D"> &lt;thead&gt;</label>
            </div>

            <!-- SOAL 3 -->
            <div class="quiz-question">
                <p><b>3. Agar tabel memiliki garis, atribut…</b></p>

                <label class="choice"><input type="radio" name="q3" value="C"> border="1"</label>
                <label class="choice"><input type="radio" name="q3" value="A"> table-style="border"</label>
                <label class="choice"><input type="radio" name="q3" value="B"> style="outline:1px"</label>
                <label class="choice"><input type="radio" name="q3" value="D"> line="1"</label>
            </div>

            <!-- SOAL 4 -->
            <div class="quiz-question">
                <p><b>4. Sel melebar 2 kolom menggunakan…</b></p>

                <label class="choice"><input type="radio" name="q4" value="C"> &lt;td colspan="2"&gt;</label>
                <label class="choice"><input type="radio" name="q4" value="A"> &lt;td span="2"&gt;</label>
                <label class="choice"><input type="radio" name="q4" value="B"> &lt;td column="2"&gt;</label>
                <label class="choice"><input type="radio" name="q4" value="D"> &lt;td width="2"&gt;</label>
            </div>

            <!-- SOAL 5 -->
            <div class="quiz-question">
                <p><b>5. Isi tabel berada di…</b></p>

                <label class="choice"><input type="radio" name="q5" value="B"> &lt;tbody&gt;</label>
                <label class="choice"><input type="radio" name="q5" value="A"> &lt;thead&gt;</label>
                <label class="choice"><input type="radio" name="q5" value="C"> &lt;tfoot&gt;</label>
                <label class="choice"><input type="radio" name="q5" value="D"> &lt;header&gt;</label>
            </div>

            <button class="btn btn-primary w-100 mt-2" onclick="checkQuiz()">Selesaikan Kuis</button>
        </div>
    </div>
</div>

<script>
/* ============== MULAI KUIS ============== */
document.getElementById("startBtn")?.addEventListener("click", () => {
    document.getElementById("startCard").style.display = "none";
    document.getElementById("quizBox").style.display = "block";
});

/* ============== PILIHAN SELECTED ============== */
document.querySelectorAll('.choice input').forEach(r => {
    r.addEventListener('change', function() {
        let group = document.querySelectorAll('input[name="'+this.name+'"]');
        group.forEach(x => x.parentElement.classList.remove('selected'));
        this.parentElement.classList.add('selected');
    });
});

/* ============== SUBMIT KUIS ============== */
function checkQuiz() {

    let kunci = {
        q1: "B",
        q2: "C",
        q3: "C",
        q4: "C",
        q5: "B"
    };

    let score = 0;

    for (let q in kunci) {
        let pilih = document.querySelector('input[name="'+q+'"]:checked');
        if (pilih && pilih.value === kunci[q]) score++;
    }

    let nilaiAkhir = score * 20;

    fetch("{{ route('kuis.submit') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ score: nilaiAkhir })
    })
    .then(() => {
        document.getElementById("quizBox").style.display = "none";
        document.getElementById("hasilCard").style.display = "block";
        document.getElementById("hasilNilai").innerHTML =
            "Nilai Anda: <b>" + nilaiAkhir + "</b>";

        setTimeout(() => { location.reload(); }, 600);
    });
}
</script>
