@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-kinestetik.css') }}">
@endpush

<div class="modal fade" id="modalMateri1" tabindex="-1" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold mb-0">📚 Pemformatan Teks</h5>
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
                                        data-bs-target="#materi1-praktik">
                                    🧩 Materi & Praktik
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi1-live">
                                    🧪 Laboratorium Virtual
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi1-project">
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
                           <div class="tab-pane fade show active" id="materi1-praktik">
                            <p class="text-secondary small">
                                Pelajari fungsi setiap tag, lalu susun kode HTML dengan benar.
                            </p>

    <div class="row g-4">
        <!-- ================= LEFT : CODE BOX ================= -->
        <div class="col-md-7">
            <pre class="code-box"><code>
<h3><b>Praktik langsung dengan melengkapi kode yang hilang!</b></h3>
<span class="tag">&lt;h1&gt;</span>Pemformatan Teks HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;p&gt;</span>
Ini teks<span class="drop-slot" data-answer="&lt;b&gt;"></span>tebal<span class="drop-slot" data-answer="&lt;/b&gt;"></span>,<span class="drop-slot" data-answer="&lt;strong&gt;"></span>penting<span class="drop-slot" data-answer="&lt;/strong&gt;"></span>,

<span class="drop-slot" data-answer="&lt;i&gt;"></span>miring<span class="drop-slot" data-answer="&lt;/i&gt;"></span>,dan <span class="drop-slot" data-answer="&lt;em&gt;"></span>ditekankan<span class="drop-slot" data-answer="&lt;/em&gt;"></span>.
<span class="tag">&lt;/p&gt;</span>

<span class="tag">&lt;p&gt;</span>
Teks <span class="drop-slot" data-answer="&lt;small&gt;"></span>kecil<span class="drop-slot" data-answer="&lt;/small&gt;"></span>, H<span class="drop-slot" data-answer="&lt;sub&gt;"></span>2<span class="drop-slot" data-answer="&lt;/sub&gt;"></span>O,

X<span class="drop-slot" data-answer="&lt;sup&gt;"></span>2<span class="drop-slot" data-answer="&lt;/sup&gt;"></span>,<span class="drop-slot" data-answer="&lt;del&gt;"></span>salah<span class="drop-slot" data-answer="&lt;/del&gt;"></span>,

dan<span class="drop-slot" data-answer="&lt;mark&gt;"></span>ditandai<span class="drop-slot" data-answer="&lt;/mark&gt;"></span>.
<span class="tag">&lt;/p&gt;</span>
            </code></pre>
        </div>

                                    <!-- ================= RIGHT : PENJELASAN TAG ================= -->
                                    <div class="col-md-5">
                                    <div class="bg-light rounded-4 p-3 h-100 d-flex flex-column">

                                        <!-- PENJELASAN -->
                                        <h6 class="fw-bold text-primary mb-3">
                                            📘 Penjelasan Tag HTML
                                        </h6>
                                        <ul class="small mb-3">
                                            <li>&lt;b&gt; Menebalkan teks (visual)</li>
                                            <li>&lt;strong&gt; Teks penting (semantic)</li>
                                            <li>&lt;i&gt; Teks miring</li>
                                            <li>&lt;em&gt; Penekanan</li>
                                            <li>&lt;small&gt; Teks kecil</li>
                                            <li>&lt;sub&gt; Subscript</li>
                                            <li>&lt;sup&gt; Superscript</li>
                                            <li>&lt;del&gt; Dicoret</li>
                                            <li>&lt;mark&gt; Disorot</li>
                                        </ul>

                                        <!-- PILIHAN TAG -->
                                        <h6 class="fw-bold text-primary mt-2 mb-2">
                                            🧲 Pilihan Tag
                                        </h6>
                                        <div class="drag-box mt-3" id="dragSource">
                                            <div class="drag-item" draggable="true" data-code="&lt;b&gt;">&lt;b&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;strong&gt;">&lt;strong&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/strong&gt;">&lt;/strong&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;i&gt;">&lt;i&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/del&gt;">&lt;/del&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/b&gt;">&lt;/b&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;em&gt;">&lt;em&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/em&gt;">&lt;/em&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;small&gt;">&lt;small&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/small&gt;">&lt;/small&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;sub&gt;">&lt;sub&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/sub&gt;">&lt;/sub&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;sup&gt;">&lt;sup&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/sup&gt;">&lt;/sup&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;del&gt;">&lt;del&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/i&gt;">&lt;/i&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;mark&gt;">&lt;mark&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/mark&gt;">&lt;/mark&gt;</div>
                                        </div>

                                        <div class="alert alert-info small mt-3" id="dragFeedback">
                                            Lengkapi semua slot dengan tag yang tepat.
                                        </div>

                                    </div>
                                </div>

                                </div>
                            </div>

                            <!-- =========================
                            2. LABORATORIUM VIRTUAL
                            ========================== -->
                            <div class="tab-pane fade" id="materi1-live">

                                <p class="text-secondary small">
                                    Ubah kode, lakukan eksperimen, dan lihat hasilnya secara langsung.
                                </p>

                                <ul class="small">
                                    <li>Gunakan minimal 3 tag pemformatan</li>
                                    <li>Tambahkan teks dengan <code>&lt;mark&gt;</code></li>
                                </ul>

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri1" class="live-editor">
<h1>Belajar HTML</h1>
<p><b>Teks tebal</b>, <em>miring</em>, <mark>highlight</mark></p>
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

                                        <iframe id="outputMateri1" class="live-output"></iframe>

                                    </div>

                                </div>
                            </div>

                            <!-- =========================
                            3. MINI PROJECT
                            ========================== -->
                            <div class="tab-pane fade" id="materi1-project">

                                <div class="alert alert-success small">
                                    Buat halaman HTML sederhana dengan ketentuan:
                                    <ul class="mb-0">
                                        <li>1 judul (&lt;h1&gt;)</li>
                                        <li>2 paragraf (&lt;p&gt;)</li>
                                        <li>Minimal 4 tag pemformatan teks</li>
                                    </ul>
                                </div>

                                <textarea class="project-editor"
                                          placeholder="Tulis kode HTML project kamu di sini..."></textarea>

                                <button class="btn btn-primary mt-3" id="submitProject">
                                    Cek Project
                                </button>

                                <div class="mt-3" id="projectResult"></div>
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
    const editor = document.getElementById('editorMateri1');
    const output = document.getElementById('outputMateri1');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri1');
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
    const source = document.getElementById('dragSource');

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
    const container = document.getElementById('dragSource');
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

    /* ===== MINI PROJECT RESULT ===== */

    const submitBtn = document.getElementById('submitProject');
    const projectEditor = document.querySelector('.project-editor');
    const resultBox = document.getElementById('projectResult');

    if (!submitBtn) return;

    submitBtn.addEventListener('click', () => {

        const code = projectEditor.value.toLowerCase();

        const checks = [
            {
                label: 'Judul (<h1>)',
                valid: /<h1>.*<\/h1>/.test(code),
                desc: 'Tag <h1> digunakan untuk judul utama halaman.'
            },
            {
                label: 'Paragraf minimal 2 (<p>)',
                valid: (code.match(/<p>/g) || []).length >= 2,
                desc: 'Paragraf digunakan untuk menampilkan teks isi.'
            },
            {
                label: 'Minimal 4 tag pemformatan',
                valid: (
                    code.match(/<(b|strong|i|em|mark|small|sub|sup|del)>/g) || []
                ).length >= 4,
                desc: 'Tag pemformatan berfungsi mengatur tampilan dan makna teks.'
            }
        ];

        const allCorrect = checks.every(item => item.valid);

        /* ===== KERANGKA HASIL (HANYA SEKALI) ===== */
        resultBox.innerHTML = `
            <div class="project-result">
                <div class="project-result-header ${allCorrect ? 'success' : 'warning'}">
                    ${allCorrect ? '🎉 Project Berhasil!' : '⚠️ Project Perlu Perbaikan'}
                </div>

                <ul class="project-result-list" id="resultList"></ul>

                <div class="project-result-footer ${allCorrect ? 'success' : 'warning'}">
                    ${
                        allCorrect
                            ? 'Keren! Semua ketentuan sudah terpenuhi. Kamu siap lanjut materi berikutnya 🚀'
                            : 'Masih ada bagian yang belum sesuai. Perbaiki kode lalu kirim ulang ya 💪'
                    }
                </div>
            </div>
        `;

        const list = document.getElementById('resultList');

        /* ===== ISI DETAIL CEK ===== */
        checks.forEach(item => {

            const li = document.createElement('li');
            li.className = `project-result-item ${item.valid ? 'success' : 'error'}`;

            const title = document.createElement('div');
            title.className = 'title';
            title.textContent = `${item.valid ? '✅' : '❌'} ${item.label}`;

            const desc = document.createElement('div');
            desc.className = 'desc';
            desc.textContent = item.desc; // AMAN, tidak jadi HTML

            li.appendChild(title);
            li.appendChild(desc);
            list.appendChild(li);
        });

    });

});
</script>
