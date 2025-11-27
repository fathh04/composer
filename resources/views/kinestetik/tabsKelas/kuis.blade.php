<style>
.quiz-container {
    background: #fff;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    position: relative !important;
    overflow: visible !important;
    z-index: 10;
}

.btn-check {
    background: #198754;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    font-weight: bold;
}

.drop-zone, .zone {
    border: 2px dashed #0d6efd;
    padding: 20px;
    border-radius: 10px;
    min-height: 150px;
    margin-bottom: 20px;
}

.code-piece, .tag-item {
    background: #e8f1ff;
    padding: 10px 14px;
    border-radius: 8px;
    margin-bottom: 10px;
    cursor: grab;
    border: 1px solid #0d6efd;
}

.tag-item.dragging, .code-piece.dragging {
    opacity: .5;
}

.result-box {
    margin-top: 15px;
    font-size: 18px;
    font-weight: bold;
}
</style>

<!-- ========== KUIS 1 ========== -->
<div class="quiz-container">

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

    <button class="btn-check" onclick="
        document.getElementById('result').innerHTML =
        checkKuis1() ? '✅ Kuis 1 Benar!' : '❌ Kuis 1 Salah';
    ">
        ✔ Cek Jawaban Kuis 1
    </button>

    <div id="result" class="result-box"></div>
</div>

<br><br>

<!-- ========== KUIS 2 (2 KOLOM) ========== -->
<div class="quiz-container">

    <h4 class="text-center fw-bold text-primary mb-3">
        🧩 Soal 2 — Pilah Tag Tabel berdasarkan Kategori
    </h4>

    <div class="row">
        
        <!-- KOLOM KIRI -->
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

        <!-- KOLOM KANAN -->
        <div class="col-md-6">

            <div class="row g-3">
                <div class="col-md-12">
                    <h5 class="fw-bold text-primary text-center">Tag Table</h5>
                    <div class="zone" id="zoneTable" style="min-height:80px;"></div>
                </div>

                <div class="col-md-12">
                    <h5 class="fw-bold text-primary text-center">Tag Row</h5>
                    <div class="zone" id="zoneRow" style="min-height:80px;"></div>
                </div>

                <div class="col-md-12">
                    <h5 class="fw-bold text-primary text-center">Tag Cell</h5>
                    <div class="zone" id="zoneCell" style="min-height:80px;"></div>
                </div>
            </div>

        </div>
    </div>

    <button class="btn-check" onclick="
        document.getElementById('result2').innerHTML =
        checkKuis2() ? '✅ Kuis 2 Benar!' : '❌ Kuis 2 Salah';
    ">
        ✔ Cek Jawaban Kuis 2
    </button>

    <div id="result2" class="result-box"></div>
</div>

<!-- 🔵 TOMBOL CEK AKHIR -->
<div class="text-center">
    <button class="btn-check" onclick="checkAll()">✔ Cek Nilai Semua Kuis</button>
</div>

<div id="finalScore" class="result-box text-center"></div>


<script>
/* ========= DRAG & DROP KUIS 1 ========= */
const pieces = document.querySelectorAll('.code-piece');
const dropZone = document.getElementById('dropZone');
const codeList = document.getElementById('codeList');

pieces.forEach(piece => {
    piece.addEventListener('dragstart', () => piece.classList.add('dragging'));
    piece.addEventListener('dragend', () => piece.classList.remove('dragging'));
});

function handleDragOver(e, container) {
    e.preventDefault();
    const dragging = document.querySelector('.dragging');
    const afterElement = getDragAfterElement(container, e.clientY);
    if (!afterElement) container.appendChild(dragging);
    else container.insertBefore(dragging, afterElement);
}

function getDragAfterElement(container, y) {
    const elements = [...container.querySelectorAll(':not(.dragging)')];
    return elements.reduce((closest, child) => {
        const box = child.getBoundingClientRect();
        const offset = y - box.top - box.height/2;
        if (offset < 0 && offset > closest.offset) return { offset, element: child };
        return closest;
    }, { offset: -Infinity }).element;
}

dropZone.addEventListener('dragover', e => handleDragOver(e, dropZone));
codeList.addEventListener('dragover', e => handleDragOver(e, codeList));

function checkKuis1() {
    const items = dropZone.querySelectorAll('.code-piece');
    if (items.length < 7) return 0;

    let correct = true;
    items.forEach((item, i) => {
        if (Number(item.dataset.order) !== (i+1)) correct = false;
    });

    return correct ? 1 : 0;
}


/* ========= DRAG & DROP KUIS 2 ========= */
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


/* ========= TOMBOL AKHIR ========= */
function checkAll() {
    const score1 = checkKuis1();
    const score2 = checkKuis2();

    document.getElementById('result').innerHTML =
        score1 ? "✅ Kuis 1 Benar!" : "❌ Kuis 1 Salah";

    document.getElementById('result2').innerHTML =
        score2 ? "✅ Kuis 2 Benar!" : "❌ Kuis 2 Salah";

    const total = score1 + score2;
    const nilaiAkhir = (total / 2) * 100;

    document.getElementById('finalScore').innerHTML =
        `🎉 Nilai Akhir: <span class="text-primary">${nilaiAkhir}</span>`;
}
</script>
