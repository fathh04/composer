<style>
/* ================== CARD UTAMA ================== */
.quiz-container {
    background: #ffffff;
    padding: 20px 25px;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.08);
    margin-bottom: 40px !important;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

/* ================== ZONE KOTAK ================== */
.drop-zone, .zone {
    border: 2px dashed #0d6efd;
    padding: 12px;
    border-radius: 8px;
    min-height: 90px;
    margin-bottom: 12px;
    background: #f8faff;
}

/* ================== ITEM DRAG ================== */
.code-piece, .tag-item {
    background: #eef5ff;
    padding: 8px 12px;
    border-radius: 6px;
    margin-bottom: 8px;
    font-size: 14px;
    cursor: grab;
    border: 1px solid #0d6efd;
}

.code-piece.dragging, .tag-item.dragging {
    opacity: .5;
}

/* ================== RESULT ================== */
.result-box {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 600;
}

/* ================== TOMBOL ================== */
#btnFinal, #startBtn {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    border: none;
    background: #0d6efd;
    color: #fff;
    border-radius: 8px;
    margin-top: 25px;
    transition: .2s;
}

#btnFinal:hover, #startBtn:hover {
    background: #0b5ed7;
}

/* START CARD */
.start-card, .hasil-card {
    border-radius: 20px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    padding: 25px;
    background: #fff;
    margin-bottom: 25px;
    text-align: center;
}

</style>

<div class="container py-4">

    <h3 class="fw-bold text-center mb-4 text-primary">🧩 Kuis Tabel HTML</h3>

    <!-- ================= START CARD ================= -->
    <div id="startCard" class="start-card">
        <img src="{{ asset('img/puzzle.png') }}" class="img-fluid mb-3" style="max-height:180px;">
        <p class="text-muted">Susun kode tabel dan jadilah peringkat pertama.</p>
        <button id="startBtn">Mulai Kuis</button>
    </div>

    <!-- ================= HASIL JIKA SUDAH PERNAH ================= -->
    <div id="hasilCard" class="hasil-card" style="display:none;">
        <h4 class="fw-bold text-success">📊 Hasil Kuis Kamu</h4>
        <p id="hasilText" class="mt-3 fs-5"></p>
    </div>

    <!-- ================= BOX QUIZ (DISEMBUNYIKAN DULU) ================= -->
    <div id="quizBox" style="display:none;">
        <div class="quiz-container">

            <!-- ================= SOAL 1 ================= -->
            <h4 class="text-center fw-bold text-primary mb-3">
                🧩 Soal 1 — Susun Kode HTML Tabel
            </h4>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold text-primary">📌 Potongan Kode</h5>
                    <div id="codeList">
                        <div class="code-piece" draggable="true" data-order="3">&nbsp;&nbsp;&nbsp;&lt;tr&gt;</div>
                        <div class="code-piece" draggable="true" data-order="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;</div>
                        <div class="code-piece" draggable="true" data-order="1">&lt;table border="1"&gt;</div>
                        <div class="code-piece" draggable="true" data-order="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Nama&lt;/td&gt;</div>
                        <div class="code-piece" draggable="true" data-order="2">&nbsp;&nbsp;&nbsp;&lt;thead&gt;</div>
                        <div class="code-piece" draggable="true" data-order="5">&nbsp;&nbsp;&nbsp;&lt;/thead&gt;</div>
                        <div class="code-piece" draggable="true" data-order="7">&lt;/table&gt;</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h5 class="fw-bold text-primary">👇 Susun Kode di Sini</h5>
                    <div id="dropZone" class="drop-zone"></div>
                </div>
            </div>

            <div id="result1" class="result-box"></div>

            <hr class="my-4">

            <!-- ================= SOAL 2 ================= -->
            <h4 class="text-center fw-bold text-primary mb-3">
                🧩 Soal 2 — Pilah Tag Tabel berdasarkan Kategori
            </h4>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold text-primary text-center">📌 Tag yang Harus Dipilah</h5>

                    <div class="zone" id="tagList" style="min-height:250px;">
                        <div class="tag-item" draggable="true" data-type="table">&lt;table&gt;</div>
                        <div class="tag-item" draggable="true" data-type="table">&lt;/table&gt;</div>
                        <div class="tag-item" draggable="true" data-type="row">&lt;tr&gt;</div>
                        <div class="tag-item" draggable="true" data-type="row">&lt;/tr&gt;</div>
                        <div class="tag-item" draggable="true" data-type="cell">&lt;td&gt;</div>
                        <div class="tag-item" draggable="true" data-type="cell">&lt;/td&gt;</div>
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="row g-3">
                        <div class="col-md-12">
                            <h5 class="fw-bold text-primary text-center">Tag Table</h5>
                            <div class="zone" id="zoneTable"></div>
                        </div>

                        <div class="col-md-12">
                            <h5 class="fw-bold text-primary text-center">Tag Row</h5>
                            <div class="zone" id="zoneRow"></div>
                        </div>

                        <div class="col-md-12">
                            <h5 class="fw-bold text-primary text-center">Tag Cell</h5>
                            <div class="zone" id="zoneCell"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="result2" class="result-box"></div>

            <!-- ================= SUBMIT ================= -->
            <button type="submit" id="btnFinal">✔ Submit</button>

            <div id="finalScore" class="result-box text-center"></div>
        </div>
    </div>

</div>

<script>

let sudahMengerjakan = false;

/* ================= CEK STATUS ================= */
fetch("{{ url('/api/kuis/status') }}?user={{ Auth::id() }}&jenis=tabel_html_dragdrop")
    .then(res => res.json())
    .then(data => {
        if (data.status === "locked") {
            sudahMengerjakan = true;

            document.getElementById("startCard").style.display = "none";
            document.getElementById("hasilCard").style.display = "block";
            document.getElementById("hasilText").innerHTML =
                "Nilai Kamu: <strong>" + data.score + "</strong>";
        }
    });

/* ================= START BUTTON ================= */
document.getElementById("startBtn").addEventListener("click", () => {
    if (sudahMengerjakan) return;

    document.getElementById("quizBox").style.display = "block";
    document.getElementById("startCard").style.display = "none";
});

/* ================= DRAG & DROP KUIS 1 ================= */
const pieces = document.querySelectorAll('.code-piece');
const dropZone = document.getElementById('dropZone');
const codeList = document.getElementById('codeList');

pieces.forEach(piece => {
    piece.addEventListener('dragstart', () => piece.classList.add('dragging'));
    piece.addEventListener('dragend', () => piece.classList.remove('dragging'));
});

dropZone.addEventListener('dragover', e => {
    e.preventDefault();
    const dragging = document.querySelector('.dragging');
    dropZone.appendChild(dragging);
});

codeList.addEventListener('dragover', e => {
    e.preventDefault();
    const dragging = document.querySelector('.dragging');
    codeList.appendChild(dragging);
});

function checkKuis1() {
    const items = dropZone.querySelectorAll('.code-piece');
    if (items.length < 7) return 0;

    let correct = true;
    items.forEach((item, i) => {
        if (Number(item.dataset.order) !== i + 1) correct = false;
    });
    return correct ? 1 : 0;
}

/* ================= DRAG & DROP KUIS 2 ================= */
const tagItems = document.querySelectorAll('.tag-item');
const zones = document.querySelectorAll('.zone');

tagItems.forEach(tag => {
    tag.addEventListener('dragstart', () => tag.classList.add('dragging'));
    tag.addEventListener('dragend', () => tag.classList.remove('dragging'));
});

zones.forEach(zone => {
    zone.addEventListener('dragover', e => {
        e.preventDefault();
        const dragging = document.querySelector('.dragging');
        if (dragging) zone.appendChild(dragging);
    });
});

function checkKuis2() {
    let correct = true;

    document.querySelectorAll('#zoneTable .tag-item').forEach(i => {
        if (i.dataset.type !== 'table') correct = false;
    });

    document.querySelectorAll('#zoneRow .tag-item').forEach(i => {
        if (i.dataset.type !== 'row') correct = false;
    });

    document.querySelectorAll('#zoneCell .tag-item').forEach(i => {
        if (i.dataset.type !== 'cell') correct = false;
    });

    return correct ? 1 : 0;
}

/* ================= SUBMIT KE SERVER ================= */
document.getElementById("btnFinal").addEventListener("click", () => {

    const score1 = checkKuis1();
    const score2 = checkKuis2();
    const total = score1 + score2;
    const nilaiAkhir = (total / 2) * 100;

    document.getElementById("result1").innerHTML = score1 ? "✅ Kuis 1 Benar!" : "❌ Kuis 1 Salah";
    document.getElementById("result2").innerHTML = score2 ? "✅ Kuis 2 Benar!" : "❌ Kuis 2 Salah";

    document.getElementById("finalScore").innerHTML =
        "🎉 Nilai Akhir: " + nilaiAkhir;

    fetch("{{ route('kuis.submit') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ score: nilaiAkhir })
    });
});

</script>
