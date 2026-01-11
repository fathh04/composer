@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-kinestetik.css') }}">
@endpush

<div class="modal fade" id="modalMateri2" tabindex="-1" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold mb-0">📚 Pemformatan Paragraph</h5>
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
                                        data-bs-target="#materi2-praktik">
                                    🧩 Materi & Praktik
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi2-live">
                                    🧪 Laboratorium Virtual
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi2-project">
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
                           <div class="tab-pane fade show active" id="materi2-praktik">
                            <p class="text-secondary small">
                                Pelajari fungsi setiap tag, lalu susun kode HTML dengan benar.
                            </p>

                            <div class="row g-4">
                                <!-- ================= LEFT : CODE BOX ================= -->
                                <div class="col-md-7">
<pre class="code-box"><code>
<h3><b>Lengkapi kode HTML pemformatan paragraf berikut!</b></h3>

<span class="tag">&lt;h1&gt;</span>Pemformatan Paragraph HTML<span class="tag">&lt;/h1&gt;</span>
<span class="drop-slot" data-answer="&lt;p&gt;"></span>
Ini adalah paragraf pertama.
Paragraf digunakan untuk menampilkan
teks dalam satu kesatuan.
<span class="drop-slot" data-answer="&lt;/p&gt;"></span>

<span class="drop-slot" data-answer="&lt;p&gt;"></span>
Ini paragraf kedua dengan
<span class="drop-slot" data-answer="&lt;br&gt;"></span>
 beskripkan pindah baris menggunakan tag br.
<span class="drop-slot" data-answer="&lt;/p&gt;"></span>

<span class="drop-slot" data-answer="&lt;hr&gt;"></span>

<span class="drop-slot" data-answer="&lt;p style=&quot;text-align:center;&quot;&gt;"></span>
Paragraf dengan teks rata tengah
<span class="drop-slot" data-answer="&lt;/p&gt;"></span>

<span class="drop-slot" data-answer="&lt;blockquote&gt;"></span>
Belajar HTML akan lebih mudah
jika langsung dipraktikkan.
<span class="drop-slot" data-answer="&lt;/blockquote&gt;"></span>

<span class="drop-slot" data-answer="&lt;pre&gt;"></span>
Teks di dalam pre
akan mempertahankan
spasi   dan   baris
<span class="drop-slot" data-answer="&lt;/pre&gt;"></span>
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
                                            <li><span>&lt;p&gt;</span> Membuat paragraf teks</li>
                                                <li><span>&lt;br&gt;</span> Pindah baris tanpa paragraf baru</li>
                                                <li><span>&lt;hr&gt;</span> Garis pemisah antar paragraf</li>
                                                <li><span>text-align</span> Mengatur perataan teks paragraf</li>
                                                <li><span>&lt;blockquote&gt;</span> Menampilkan kutipan</li>
                                                <li><span>&lt;pre&gt;</span> Menampilkan teks dengan format asli</li>
                                        </ul>

                                        <!-- PILIHAN TAG -->
                                        <h6 class="fw-bold text-primary mt-2 mb-2">
                                            🧲 Pilihan Tag
                                        </h6>
                                        <div class="drag-box mt-3" id="dragSource2">
                                            <div class="drag-item" draggable="true" data-code="&lt;p&gt;">&lt;p&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/p&gt;">&lt;/p&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;p&gt;">&lt;p&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;p&gt;">&lt;p&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/p&gt;">&lt;/p&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/p&gt;">&lt;/p&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;br&gt;">&lt;br&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;hr&gt;">&lt;hr&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;p style=&quot;text-align:center;&quot;&gt;">
                                                &lt;p style="text-align:center;"&gt;
                                            </div>
                                            <div class="drag-item" draggable="true" data-code="&lt;blockquote&gt;">&lt;blockquote&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/blockquote&gt;">&lt;/blockquote&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;pre&gt;">&lt;pre&gt;</div>
                                            <div class="drag-item" draggable="true" data-code="&lt;/pre&gt;">&lt;/pre&gt;</div>
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
                            <div class="tab-pane fade" id="materi2-live">

                                <p class="text-secondary small">
                                    Ubah kode, lakukan eksperimen, dan lihat hasilnya secara langsung.
                                </p>

                                <ul class="small">
                                    <li>Gunakan minimal <b>3 jenis tag paragraf</b></li>
                                    <li>Gunakan <code>&lt;br&gt;</code> atau <code>&lt;hr&gt;</code></li>
                                    <li>Tambahkan paragraf dengan perataan teks</li>
                                </ul>

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri2" class="live-editor">
<h1>Pemformatan Paragraf HTML</h1>

<p>
Ini adalah paragraf pertama.
Paragraf digunakan untuk menampilkan
teks dalam satu kesatuan.
</p>

<p>
Ini paragraf kedua dengan<br>
pindah baris menggunakan tag br.
</p>

<hr>

<p style="text-align:center;">
Paragraf dengan teks rata tengah
</p>

<blockquote>
Belajar HTML akan lebih mudah
jika langsung dipraktikkan.
</blockquote>

<pre>
Teks di dalam pre
akan mempertahankan
spasi   dan   baris
</pre>
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

                                        <iframe id="outputMateri2" class="live-output"></iframe>

                                    </div>

                                </div>
                            </div>

                            <!-- =========================
                            3. MINI PROJECT
                            ========================== -->
                            <div class="tab-pane fade" id="materi2-project">

                                <div class="alert alert-success small">
                                    Buat halaman HTML sederhana dengan ketentuan:
                                    <ul class="mb-0">
                                        <li>1 judul (<code>&lt;h1&gt;</code>)</li>
                                        <li>Minimal 2 paragraf (<code>&lt;p&gt;</code>)</li>
                                        <li>Menggunakan <code>&lt;br&gt;</code> atau <code>&lt;hr&gt;</code></li>
                                        <li>Menggunakan salah satu: <code>text-align</code>, <code>&lt;blockquote&gt;</code>, atau <code>&lt;pre&gt;</code></li>
                                    </ul>
                                </div>

                                <textarea class="project-editor"
                                          placeholder="Tulis kode HTML project kamu di sini..."></textarea>

                                <button class="btn btn-primary mt-3" id="submitProject2">
                                    Cek Project
                                </button>

                                <div class="mt-3" id="projectResult2"></div>
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
    const editor = document.getElementById('editorMateri2');
    const output = document.getElementById('outputMateri2');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri2');
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
    const source = document.getElementById('dragSource2');

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
    const container = document.getElementById('dragSource2');
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

    const projectTabBtn = document.querySelector(
        '[data-bs-target="#materi2-project"]'
    );

    projectTabBtn.addEventListener('shown.bs.tab', () => {

        const submitBtn = document.getElementById('submitProject2');
        const projectEditor = document.querySelector('.project-editor');
        const resultBox = document.getElementById('projectResult2');

        if (!submitBtn) return;

        submitBtn.onclick = () => {

            const code = projectEditor.value.toLowerCase();

            const checks = [
                {
                    label: 'Judul (<h1>)',
                    valid: /<h1\b[^>]*>[\s\S]*?<\/h1>/.test(code),
                    desc: 'Tag <h1> digunakan sebagai judul halaman.'
                },
                {
                    label: 'Minimal 2 paragraf (<p>)',
                    valid: (code.match(/<p\b[^>]*>/g) || []).length >= 2,
                    desc: 'Gunakan minimal dua paragraf.'
                },
                {
                    label: 'Pindah baris / pemisah (<br> / <hr>)',
                    valid: /<br\b[^>]*>|<hr\b[^>]*>/.test(code),
                    desc: 'Gunakan tag pindah baris atau pemisah.'
                },
                {
                    label: 'Pemformatan lanjutan',
                    valid: /text-align\s*:|<blockquote\b|<pre\b/.test(code),
                    desc: 'Gunakan text-align, blockquote, atau pre.'
                }
            ];

            const allCorrect = checks.every(c => c.valid);

            // === RESET + HEADER ===
            resultBox.innerHTML = `
                <div class="project-result">
                    <div class="project-result-header ${allCorrect ? 'success' : 'warning'}">
                        ${allCorrect ? '🎉 Project Berhasil!' : '⚠️ Masih Perlu Perbaikan'}
                    </div>
                    <ul class="project-result-list" id="resultList"></ul>
                </div>
            `;

            const list = document.getElementById('resultList');

            // === LIST ITEM ===
            checks.forEach(item => {

                const li = document.createElement('li');
                li.className = `project-result-item ${item.valid ? 'success' : 'error'}`;

                const title = document.createElement('strong');
                title.textContent = `${item.valid ? '✅' : '❌'} ${item.label}`;

                const desc = document.createElement('div');
                desc.className = 'desc';
                desc.textContent = item.desc;

                li.appendChild(title);
                li.appendChild(desc);
                list.appendChild(li);
            });
        };
    });

});
</script>
