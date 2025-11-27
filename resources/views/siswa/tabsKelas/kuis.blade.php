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

    /* --- PILIHAN JAWABAN MODERN --- */
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

    /* Jika dipilih → warna biru */
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

<div class="quiz-container">
    <h3 class="text-center fw-bold mb-4 quiz-title">📘 Kuis</h3>

    <!-- Soal 1 -->
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
        
        <label class="choice">
            <input type="radio" name="q1" value="A">
            <span class="option-text">&lt;td&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q1" value="B">
            <span class="option-text">&lt;tr&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q1" value="C">
            <span class="option-text">&lt;table&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q1" value="D">
            <span class="option-text">&lt;th&gt;</span>
        </label>
    </div>

    <!-- Soal 2 -->
    <div class="quiz-question">
        <p><b>2. Tag yang digunakan untuk membuat header tabel adalah…</b></p>
        <pre>
| Nama | Umur |
----------------
Disebut sebagai header tabel.
        </pre>

        <label class="choice">
            <input type="radio" name="q2" value="A">
            <span class="option-text">&lt;td&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q2" value="B">
            <span class="option-text">&lt;header&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q2" value="C">
            <span class="option-text">&lt;th&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q2" value="D">
            <span class="option-text">&lt;thead&gt;</span>
        </label>
    </div>

    <!-- Soal 3 -->
    <div class="quiz-question">
        <p><b>3. Agar tabel memiliki garis, atribut apa yang digunakan?</b></p>
        <pre>
&lt;table border="1"&gt;
    ...
&lt;/table&gt;
        </pre>

        <label class="choice">
            <input type="radio" name="q3" value="A">
            <span class="option-text">table-style="border"</span>
        </label>

        <label class="choice">
            <input type="radio" name="q3" value="B">
            <span class="option-text">style="outline:1px"</span>
        </label>

        <label class="choice">
            <input type="radio" name="q3" value="C">
            <span class="option-text">border="1"</span>
        </label>

        <label class="choice">
            <input type="radio" name="q3" value="D">
            <span class="option-text">line="1"</span>
        </label>
    </div>

    <!-- Soal 4 -->
    <div class="quiz-question">
        <p><b>4. Agar sel melebar menjadi 2 kolom, kode yang benar adalah…</b></p>
        <pre>
&lt;td colspan="2"&gt;Judul Tabel&lt;/td&gt;
        </pre>

        <label class="choice">
            <input type="radio" name="q4" value="A">
            <span class="option-text">&lt;td span="2"&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q4" value="B">
            <span class="option-text">&lt;td column="2"&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q4" value="C">
            <span class="option-text">&lt;td colspan="2"&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q4" value="D">
            <span class="option-text">&lt;td width="2"&gt;</span>
        </label>
    </div>

    <!-- Soal 5 -->
    <div class="quiz-question">
        <p><b>5. Bagian yang berisi data (bukan header) berada di…</b></p>
        <pre>
&lt;thead&gt;   --> Header
&lt;tbody&gt;   --> Isi data
&lt;tfoot&gt;   --> Bagian bawah
        </pre>

        <label class="choice">
            <input type="radio" name="q5" value="A">
            <span class="option-text">&lt;thead&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q5" value="B">
            <span class="option-text">&lt;tbody&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q5" value="C">
            <span class="option-text">&lt;tfoot&gt;</span>
        </label>

        <label class="choice">
            <input type="radio" name="q5" value="D">
            <span class="option-text">&lt;header&gt;</span>
        </label>
    </div>

    <button class="btn btn-primary w-100 mt-2" onclick="checkQuiz()">Selesaikan Kuis</button>

    <div id="result"></div>
</div>


<script>
    // Tambahkan efek selected pada card pilihan
    document.querySelectorAll('.choice input').forEach(radio => {
        radio.addEventListener('change', function() {
            let group = document.querySelectorAll('input[name="'+this.name+'"]');
            
            group.forEach(r => r.parentElement.classList.remove('selected'));
            this.parentElement.classList.add('selected');
        });
    });

    function checkQuiz() {
        let answers = {
            q1: "B",
            q2: "C",
            q3: "C",
            q4: "C",
            q5: "B"
        };

        let score = 0;
        let total = 5;

        for (let q in answers) {
            let selected = document.querySelector('input[name="'+q+'"]:checked');
            if (selected && selected.value === answers[q]) {
                score++;
            }
        }

        let result = document.getElementById("result");

        result.style.display = "block";
        if (score === total) {
            result.style.background = "#d1e7dd";
            result.style.color = "#0f5132";
            result.innerHTML = "🎉 Sempurna! Nilai kamu: " + score + "/" + total;
        } else {
            result.style.background = "#f8d7da";
            result.style.color = "#842029";
            result.innerHTML = "❗ Nilai kamu: " + score + "/" + total + "<br>Yuk coba lagi!";
        }
    }
</script>
