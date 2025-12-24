@php
    $score = $score ?? null;
@endphp

<style>
/* ================== GLOBAL CARD ================== */
.quiz-card {
    border-radius: 18px;
    background: #ffffff;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    padding: 25px;
    border: 1px solid #e5e7eb;
}

/* START + HASIL CARD */
.start-card, .hasil-card {
    border-radius: 20px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    padding: 25px;
    background: #fff;
    text-align: center;
}

/* ================== DROP ZONE ================== */
.zone, .drop-zone {
    border: 2px dashed #0d6efd;
    padding: 12px;
    border-radius: 10px;
    min-height: 90px;
    background: #f1f6ff;
    margin-bottom: 15px;
}

/* ================== DRAG ITEMS ================== */
.code-piece, .tag-item {
    background: #e8f0ff;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #0d6efd;
    margin-bottom: 8px;
    cursor: grab;
    transition: 0.2s;
}

.code-piece:hover, .tag-item:hover {
    background: #dbe8ff;
}

.code-piece.dragging, .tag-item.dragging {
    opacity: .4;
}

/* ================== BUTTON ================== */
.btn-main {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    border-radius: 10px;
}

.result-box {
    margin-top: 10px;
    font-size: 16px;
    font-weight: bold;
}
</style>

<div class="container py-4">

    <!-- ==================== START CARD ==================== -->
    <div id="startCard"
        class="card shadow-lg border-0 mb-4 text-center"
        style="border-radius: 18px; {{ $score !== null ? 'display:none;' : '' }}">

        <img src="{{ url('img/puzzle.png') }}"
            class="card-img-top p-4"
            style="height: 180px; object-fit: contain;">

        <div class="card-body">
            <h4 class="fw-bold text-primary">🧩 Kuis Tabel Drag & Drop</h4>
            <p class="text-muted mt-2">
                Selesaikan dua tantangan HTML tabel dan raih score terbaik!
            </p>
            <button id="startBtn" class="btn btn-primary px-4 py-2 mt-2" style="border-radius: 12px;">
                🚀 Mulai Kuis
            </button>
        </div>
    </div>

    <!-- ==================== CARD HASIL ==================== -->
    <div id="hasilCard"
        class="card shadow-lg border-0 mb-4 text-center"
        style="border-radius: 18px; {{ $score !== null ? '' : 'display:none;' }}">

        <div class="card-body p-4">
            <h3 class="fw-bold text-success">🎉 Hasil Kuis Kamu</h3>

            <h4 id="hasilText" class="mt-3">
                {{ $score !== null ? "Nilai Kamu: $score" : '' }}
            </h4>

            <button onclick="location.reload()" class="btn btn-secondary mt-3">
                🔄 Kembali
            </button>
        </div>
    </div>

    <!-- ==================== KUIS CARD ==================== -->
    <div id="quizBox" style="display:none;">
        <div class="quiz-card">

            <h3 class="fw-bold text-center text-primary mb-4">🧩 Kuis Tabel HTML</h3>

            <!-- ================= SOAL 1 ================= -->
            <h5 class="fw-bold mb-2 text-primary">Soal 1 — Susun Struktur Tabel</h5>

            <div class="row mb-4">
                <div class="col-md-6">
                    <h6 class="fw-bold">📌 Potongan Kode</h6>
                    <div id="codeList">
                        <div class="code-piece" draggable="true" data-order="3">&nbsp;&nbsp;&lt;tr&gt;</div>
                        <div class="code-piece" draggable="true" data-order="6">&nbsp;&nbsp;&lt;/tr&gt;</div>
                        <div class="code-piece" draggable="true" data-order="1">&lt;table border="1"&gt;</div>
                        <div class="code-piece" draggable="true" data-order="4">&nbsp;&nbsp;&lt;td&gt;Nama&lt;/td&gt;</div>
                        <div class="code-piece" draggable="true" data-order="2">&lt;thead&gt;</div>
                        <div class="code-piece" draggable="true" data-order="5">&lt;/thead&gt;</div>
                        <div class="code-piece" draggable="true" data-order="7">&lt;/table&gt;</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h6 class="fw-bold">👇 Susun Kode di Sini</h6>
                    <div id="dropZone" class="drop-zone"></div>
                </div>
            </div>

            <div id="result1" class="result-box"></div>

            <hr class="my-4">

            <!-- ================= SOAL 2 ================= -->
            <h5 class="fw-bold mb-2 text-primary">Soal 2 — Pilah Tag Tabel</h5>

            <div class="row">
                <div class="col-md-6">
                    <h6 class="fw-bold text-center">📌 Tag yang Harus Dipilah</h6>
                    <div id="tagList" class="zone" style="min-height:250px;">
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
                            <h6 class="fw-bold text-center">Tag Table</h6>
                            <div id="zoneTable" class="zone"></div>
                        </div>

                        <div class="col-md-12">
                            <h6 class="fw-bold text-center">Tag Row</h6>
                            <div id="zoneRow" class="zone"></div>
                        </div>

                        <div class="col-md-12">
                            <h6 class="fw-bold text-center">Tag Cell</h6>
                            <div id="zoneCell" class="zone"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="result2" class="result-box"></div>

            <button id="btnFinal" class="btn btn-primary btn-main mt-3">✔ Submit</button>

            <div id="finalScore" class="result-box text-center"></div>
        </div>
    </div>

</div>

<script>

/* ================== MULAI KUIS ================== */
document.getElementById("startBtn")?.addEventListener("click", () => {
    document.getElementById("quizBox").style.display = "block";
    document.getElementById("startCard").style.display = "none";
});

/* ================== DRAG KODE ================== */
const pieces = document.querySelectorAll('.code-piece');
const dropZone = document.getElementById('dropZone');
const codeList = document.getElementById('codeList');

pieces.forEach(p => {
    p.addEventListener('dragstart', () => p.classList.add('dragging'));
    p.addEventListener('dragend', () => p.classList.remove('dragging'));
});

dropZone.addEventListener('dragover', e => {
    e.preventDefault();
    dropZone.appendChild(document.querySelector('.dragging'));
});

codeList.addEventListener('dragover', e => {
    e.preventDefault();
    codeList.appendChild(document.querySelector('.dragging'));
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

/* ================== DRAG TAG ================== */
const tagItems = document.querySelectorAll('.tag-item');
const zones = document.querySelectorAll('.zone');

tagItems.forEach(t => {
    t.addEventListener('dragstart', () => t.classList.add('dragging'));
    t.addEventListener('dragend', () => t.classList.remove('dragging'));
});

zones.forEach(z => {
    z.addEventListener('dragover', e => {
        e.preventDefault();
        z.appendChild(document.querySelector('.dragging'));
    });
});

function checkKuis2() {
    let ok = true;

    document.querySelectorAll('#zoneTable .tag-item').forEach(i => {
        if (i.dataset.type !== 'table') ok = false;
    });

    document.querySelectorAll('#zoneRow .tag-item').forEach(i => {
        if (i.dataset.type !== 'row') ok = false;
    });

    document.querySelectorAll('#zoneCell .tag-item').forEach(i => {
        if (i.dataset.type !== 'cell') ok = false;
    });

    return ok ? 1 : 0;
}

/* ================== SUBMIT ================== */
document.getElementById("btnFinal").addEventListener("click", () => {

    const score1 = checkKuis1();
    const score2 = checkKuis2();
    const total = score1 + score2;
    const nilaiAkhir = (total / 2) * 100;

    document.getElementById("result1").innerHTML = score1 ? "✅ Kuis 1 Benar!" : "❌ Kuis 1 Salah";
    document.getElementById("result2").innerHTML = score2 ? "✅ Kuis 2 Benar!" : "❌ Kuis 2 Salah";

    fetch("{{ route('kuis.submit') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ score: nilaiAkhir })
    })
    .then(() => {

        // tampilkan card hasil
        document.getElementById("quizBox").style.display = "none";
        document.getElementById("hasilCard").style.display = "block";
        document.getElementById("hasilText").innerHTML =
            "Nilai Kamu: <b>" + nilaiAkhir + "</b>";

        // reload untuk mengunci kuis
        setTimeout(() => {
            location.reload();
        }, 600);
    });
});
</script>
