@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-kinestetik.css') }}">
@endpush

<div class="modal fade" id="modalMateri3" tabindex="-1" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold mb-0">📚 Pembuatan List Terstruktur</h5>
                <div class="d-flex gap-2">
                    <button class="btn btn-sm btn-light btn-fullscreen">⛶</button>
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
            </div>

            <!-- BODY -->
            <div class="modal-body">
                <div class="row g-4">

                    <!-- SIDEBAR -->
                    <div class="col-md-3">
                        <div class="sidebar-sticky">
                            <div class="nav flex-column nav-pills sidebar-tab">
                                <button class="nav-link active" data-bs-toggle="pill"
                                        data-bs-target="#materi3-praktik">
                                    🧩 Materi & Praktik
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi3-live">
                                    🧪 Laboratorium Virtual
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi3-project">
                                    🚀 Mini Project
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- =========================
                            1. MATERI & PRAKTIK (DRAG DROP)
                            ========================== -->
                           <div class="tab-pane fade show active" id="materi3-praktik">
                            <p class="text-secondary small">
                                Pelajari fungsi setiap tag, lalu susun kode HTML dengan benar.
                            </p>

                            <div class="row g-4">
        <!-- ================= CODE BOX ================= -->
<div class="col-md-7">
<pre class="code-box"><code>
<h3><b>Praktik langsung menyusun List HTML!</b></h3>

<span class="tag">&lt;h1&gt;</span>List Terstruktur HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;h3&gt;</span>Unordered List<span class="tag">&lt;/h3&gt;</span>
<span class="drop-slot" data-answer="&lt;ul&gt;"></span>
    <span class="drop-slot" data-answer="&lt;li&gt;"></span>HTML<span class="drop-slot" data-answer="&lt;/li&gt;"></span>
    <span class="drop-slot" data-answer="&lt;li&gt;"></span>CSS<span class="drop-slot" data-answer="&lt;/li&gt;"></span>
    <span class="drop-slot" data-answer="&lt;li&gt;"></span>JavaScript<span class="drop-slot" data-answer="&lt;/li&gt;"></span>
<span class="drop-slot" data-answer="&lt;/ul&gt;"></span>

<span class="tag">&lt;h3&gt;</span>Ordered List<span class="tag">&lt;/h3&gt;</span>
<span class="drop-slot" data-answer="&lt;ol&gt;"></span>
    <span class="drop-slot" data-answer="&lt;li&gt;"></span>Analisis<span class="drop-slot" data-answer="&lt;/li&gt;"></span>
    <span class="drop-slot" data-answer="&lt;li&gt;"></span>Desain<span class="drop-slot" data-answer="&lt;/li&gt;"></span>
    <span class="drop-slot" data-answer="&lt;li&gt;"></span>Implementasi<span class="drop-slot" data-answer="&lt;/li&gt;"></span>
<span class="drop-slot" data-answer="&lt;/ol&gt;"></span>

<span class="tag">&lt;h3&gt;</span>Nested List<span class="tag">&lt;/h3&gt;</span>
<span class="drop-slot" data-answer="&lt;ul&gt;"></span>
    <span class="drop-slot" data-answer="&lt;li&gt;"></span>Frontend
        <span class="drop-slot" data-answer="&lt;ul&gt;"></span>
            <span class="drop-slot" data-answer="&lt;li&gt;"></span>HTML<span class="drop-slot" data-answer="&lt;/li&gt;"></span>
            <span class="drop-slot" data-answer="&lt;li&gt;"></span>CSS<span class="drop-slot" data-answer="&lt;/li&gt;"></span>
        <span class="drop-slot" data-answer="&lt;/ul&gt;"></span>
    <span class="drop-slot" data-answer="&lt;/li&gt;"></span>
<span class="drop-slot" data-answer="&lt;/ul&gt;"></span>
    </code></pre>
</div>
                                    <!-- ================= PENJELASAN TAG ================= -->
                                    <div class="col-md-5">
                                        <div class="bg-light rounded-4 p-3 h-100 d-flex flex-column">

                                            <h6 class="fw-bold text-primary mb-3">
                                                📘 Penjelasan Tag HTML
                                            </h6>

                                            <ul class="small mb-3">
                                                <li>&lt;ul&gt; List tidak berurutan (bullet)</li>
                                                <li>&lt;ol&gt; List berurutan (angka)</li>
                                                <li>&lt;li&gt; Item di dalam list</li>
                                                <li>Nested List: List di dalam list</li>
                                            </ul>

                                            <h6 class="fw-bold text-primary mt-2 mb-2">
                                                🧲 Pilihan Tag
                                            </h6>

                                            <div class="drag-box mt-3" id="dragSource3">
                                                <div class="drag-item" draggable="true" data-code="&lt;ul&gt;">&lt;ul&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/ul&gt;">&lt;/ul&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;ul&gt;">&lt;ul&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/ul&gt;">&lt;/ul&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;ul&gt;">&lt;ul&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/ul&gt;">&lt;/ul&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;ol&gt;">&lt;ol&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/ol&gt;">&lt;/ol&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;li&gt;">&lt;li&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/li&gt;">&lt;/li&gt;</div>
                                            </div>

                                            <div class="alert alert-info small mt-3" id="dragFeedback">
                                                Lengkapi semua slot agar struktur list menjadi benar.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- =========================
                            2. LABORATORIUM VIRTUAL
                            ========================== -->
                            <div class="tab-pane fade" id="materi3-live">

                                <p class="text-secondary small">
                                    Ubah kode, lakukan eksperimen, dan lihat hasilnya secara langsung.
                                </p>

                                <ul class="small">
                                    <li>Gunakan minimal satu <code>&lt;ul&gt;</code> (Unordered List)</li>
                                    <li>Gunakan minimal satu <code>&lt;ol&gt;</code> (Ordered List)</li>
                                    <li>Setiap list harus memiliki minimal 3 <code>&lt;li&gt;</code></li>
                                    <li>Coba buat <b>nested list</b> (list di dalam list)</li>
                                </ul>

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri3" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Daftar Mata Pelajaran</h3>
<ul>
    <li>Pemrograman Web</li>
    <li>Basis Data</li>
    <li>Jaringan Komputer</li>
</ul>

<h3>Langkah Membuat Website</h3>
<ol>
    <li>Menentukan tujuan</li>
    <li>Membuat desain</li>
    <li>Menulis kode HTML</li>
</ol>
                                    </textarea>
                                    <!-- OUTPUT -->
                                    <div class="output-wrapper">

                                        <div class="output-header">
                                            🌐 Live Preview
                                        </div>

                                        <!-- Fake browser -->
                                        <div class="browser-bar">
                                            <span class="dot red"></span>
                                            <span class="dot yellow"></span>
                                            <span class="dot green"></span>
                                        </div>

                                        <iframe id="outputMateri3" class="live-output"></iframe>

                                    </div>

                                </div>
                            </div>

                            <!-- =========================
                            3. MINI PROJECT
                            ========================== -->
                            <div class="tab-pane fade" id="materi3-project">

                                <div class="alert alert-success small">
                                    Buat halaman HTML sederhana dengan ketentuan:
                                    <ul class="mb-0">
                                        <li>1 judul (&lt;h1&gt;)</li>
                                        <li>2 Menggunakan minimal 2 dari tag List HTML</li>
                                    </ul>
                                </div>

                                <textarea class="project-editor"
                                          placeholder="Tulis kode HTML project kamu di sini..."></textarea>

                                <button class="btn btn-primary mt-3" id="submitProject3">
                                    Cek Project
                                </button>

                                <div class="mt-3" id="projectResult3"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ===== LIVE OUTPUT ===== */
    const editor = document.getElementById('editorMateri3');
    const output = document.getElementById('outputMateri3');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri3');
    const fullscreenBtn = modal.querySelector('.btn-fullscreen');
    const fullscreenTarget = modal.querySelector('.modal-dialog');

    fullscreenBtn.addEventListener('click', () => {
        if (!document.fullscreenElement) {
            fullscreenTarget.requestFullscreen();
        } else {
            document.exitFullscreen();
        }
    });

    document.addEventListener('fullscreenchange', () => {
        fullscreenBtn.textContent =
            document.fullscreenElement ? '⤫' : '⛶';
    });

    /* ===== STOP VIDEO + EXIT FULLSCREEN ===== */
    modal.addEventListener('hidden.bs.modal', () => {
        if (document.fullscreenElement) {
            document.exitFullscreen();
        }
        modal.querySelectorAll('iframe').forEach(i => i.src = i.src);
    });

    /* ===== DRAG & DROP ===== */

    let draggedItem = null;

    document.addEventListener('dragstart', e => {
        if (e.target.classList.contains('drag-item')) {
            draggedItem = e.target;
        }
    });

    /* SLOT */
    document.querySelectorAll('.drop-slot').forEach(slot => {

        slot.addEventListener('dragover', e => e.preventDefault());

        slot.addEventListener('drop', e => {
            e.preventDefault();

            if (slot.children.length > 0) return;

            slot.appendChild(draggedItem);
            slot.classList.add('filled');

            // ⬇️ bikin slot menyesuaikan ukuran item
            slot.style.width = draggedItem.offsetWidth + 12 + 'px';
            slot.style.height = draggedItem.offsetHeight + 6 + 'px';

            if (draggedItem.dataset.code === slot.dataset.answer) {
                slot.classList.add('correct');
                slot.classList.remove('wrong');
            } else {
                slot.classList.add('wrong');
                slot.classList.remove('correct');
            }

            checkResult();
        });
    });

    /* KEMBALIKAN KE DAFTAR */
    const source = document.getElementById('dragSource3');

    source.addEventListener('dragover', e => e.preventDefault());

    source.addEventListener('drop', e => {
        e.preventDefault();
        source.appendChild(draggedItem);

        document.querySelectorAll('.drop-slot').forEach(slot => {
            if (slot.contains(draggedItem)) {
                slot.classList.remove('filled', 'correct', 'wrong');
                slot.style.width = '';
                slot.style.height = '';
            }
        });

        checkResult();
    });

    function checkResult() {
        const slots = document.querySelectorAll('.drop-slot');
        const filled = [...slots].every(s => s.children.length > 0);
        const correct = [...slots].every(s => s.classList.contains('correct'));

        const feedback = document.getElementById('dragFeedback');

        if (filled && correct) {
            feedback.className = 'alert alert-success small mt-3';
            feedback.textContent = '✅ Semua kode benar!';
        } else if (filled) {
            feedback.className = 'alert alert-danger small mt-3';
            feedback.textContent = '❌ Masih ada yang salah, periksa kembali.';
        } else {
            feedback.className = 'alert alert-info small mt-3';
            feedback.textContent = 'Lengkapi semua kotak dengan benar.';
        }
    }
    const container = document.getElementById('dragSource3');
        const items = Array.from(container.children);

        // Fisher-Yates Shuffle
        for (let i = items.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [items[i], items[j]] = [items[j], items[i]];
        }

        // masukkan kembali ke container
        items.forEach(item => container.appendChild(item));
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const submitBtn = document.getElementById('submitProject3');
    const projectEditor = document.querySelector('#materi3-project .project-editor');
    const resultBox = document.getElementById('projectResult3');

    if (!submitBtn) return;

    submitBtn.addEventListener('click', () => {

        const code = projectEditor.value.toLowerCase();

        const hasH1 = /<h1>.*<\/h1>/.test(code);
        const hasUL = /<ul>/.test(code);
        const hasOL = /<ol>/.test(code);
        const hasLI = /<li>/.test(code);

        const listTypesUsed = [hasUL, hasOL, hasLI].filter(Boolean).length;

        const checks = [
            {
                label: 'Judul (<h1>)',
                valid: hasH1,
                desc: 'Wajib terdapat satu judul utama menggunakan <h1>.'
            },
            {
                label: 'Minimal 2 Tag List HTML',
                valid: listTypesUsed >= 2,
                desc: 'Gunakan minimal dua dari tag <ul>, <ol>, dan <li>.'
            }
        ];

        const allCorrect = checks.every(c => c.valid);

        resultBox.innerHTML = `
            <div class="project-result">
                <div class="project-result-header ${allCorrect ? 'success' : 'warning'}">
                    ${allCorrect ? '🎉 Project Berhasil!' : '⚠️ Masih Perlu Perbaikan'}
                </div>
                <ul class="project-result-list" id="resultList"></ul>
            </div>
        `;

        const list = document.getElementById('resultList');

        checks.forEach(item => {
            const li = document.createElement('li');
            li.className = `project-result-item ${item.valid ? 'success' : 'error'}`;

            const title = document.createElement('div');
            title.className = 'title';
            title.textContent = `${item.valid ? '✅' : '❌'} ${item.label}`;

            const desc = document.createElement('div');
            desc.className = 'desc';
            desc.textContent = item.desc;

            li.appendChild(title);
            li.appendChild(desc);
            list.appendChild(li);
        });

    });

});
</script>

