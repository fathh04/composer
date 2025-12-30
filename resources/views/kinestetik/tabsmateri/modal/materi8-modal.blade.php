@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-kinestetik.css') }}">
@endpush

<div class="modal fade" id="modalMateri8" tabindex="-1" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold mb-0">📚 Implementasi Hyperlink</h5>
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
                                        data-bs-target="#materi8-praktik">
                                    🧩 Materi & Praktik
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi8-live">
                                    🧪 Laboratorium Virtual
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi8-project">
                                    🚀 Mini Project
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- =========================
                            1. MATERI & PRAKTIK (DRAG DROP - HYPERLINK)
                            ========================== -->
                            <div class="tab-pane fade show active" id="materi8-praktik">

                                <p class="text-secondary small">
                                    Pelajari fungsi setiap tag dan atribut Hyperlink, lalu lengkapi kode HTML agar
                                    hyperlink dapat berfungsi dengan benar.
                                </p>

                                <div class="row g-4">

        <!-- ================= LEFT : CODE BOX ================= -->
        <div class="col-md-7">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Implementasi Hyperlink HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="drop-slot" data-answer="&quot;https://www.google.com&quot;"></span>
    <span class="attr">target</span>=<span class="drop-slot" data-answer="&quot;_blank&quot;"></span>
<span class="tag">&gt;</span>
    Kunjungi Google
<span class="tag">&lt;/a&gt;</span>

<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="drop-slot" data-answer="&quot;mailto:admin@email.com&quot;"></span>
<span class="tag">&gt;</span>
    Kirim Email
<span class="tag">&lt;/a&gt;</span>

<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="drop-slot" data-answer="&quot;tel:+628123456789&quot;"></span>
<span class="tag">&gt;</span>
    Hubungi Kami
<span class="tag">&lt;/a&gt;</span>
</code></pre>
        </div>

                                    <!-- ================= RIGHT : PENJELASAN ================= -->
                                    <div class="col-md-5">
                                        <div class="bg-light rounded-4 p-3 h-100 d-flex flex-column">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut Hyperlink
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;a&gt;</span> Tag untuk membuat hyperlink</li>
                                                <li><span>href</span> Menentukan tujuan link</li>
                                                <li><span>target</span> Mengatur cara membuka link</li>
                                                <li><span>_blank</span> Membuka link di tab baru</li>
                                                <li><span>mailto:</span> Membuat link email</li>
                                                <li><span>tel:</span> Membuat link telepon</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                Atribut <b>href</b> wajib ada agar hyperlink dapat diklik.
                                            </div>

                                            <!-- ================= DRAG SOURCE ================= -->
                                            <h6 class="fw-bold text-primary mt-3 mb-2">
                                                🧲 Pilihan Kode
                                            </h6>

                                            <div class="drag-box" id="dragSource8">
                                                <div class="drag-item" draggable="true" data-code="&quot;https://www.google.com&quot;">
                                                    "https://www.google.com"
                                                </div>
                                                <div class="drag-item" draggable="true" data-code="&quot;_blank&quot;">
                                                    "_blank"
                                                </div>
                                                <div class="drag-item" draggable="true" data-code="&quot;mailto:admin@email.com&quot;">
                                                    "mailto:admin@email.com"
                                                </div>
                                                <div class="drag-item" draggable="true" data-code="&quot;tel:+628123456789&quot;">
                                                    "tel:+62812345678"
                                                </div>
                                            </div>

                                            <div class="alert alert-info small mt-3" id="dragFeedback8">
                                                Lengkapi semua slot agar hyperlink berfungsi dengan benar.
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- =========================
                            2. LABORATORIUM VIRTUAL
                            ========================== -->
                            <div class="tab-pane fade" id="materi8-live">

                                <p class="text-secondary small">
                                    Ubah kode, lakukan eksperimen, dan lihat hasilnya secara langsung.
                                </p>

                                <ul class="small">
                                    <li>Tambahkan untuk link E-mail dan telepon"</li>
                                    <li>Tambahkan link agar dapat membuka di tab baru</li>
                                </ul>

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri8" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Contoh Hyperlink Dasar</h3>
<a href="https://www.google.com">Kunjungi Google</a>
{{-- Tulis kode disini --}}
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

                                        <iframe id="outputMateri8" class="live-output"></iframe>

                                    </div>

                                </div>
                            </div>

                            <!-- =========================
                            3. MINI PROJECT (HYPERLINK)
                            ========================== -->
                            <div class="tab-pane fade" id="materi8-project">

                                <div class="alert alert-success small">
                                    Buat halaman HTML sederhana dengan ketentuan:
                                    <ul class="mb-0">
                                        <li>1 judul (&lt;h1&gt;)</li>
                                        <li>Minimal 2 hyperlink (&lt;a&gt;)</li>
                                        <li>Menggunakan atribut <b>href</b></li>
                                        <li>Menggunakan atribut <b>target</b> (minimal 1 link)</li>
                                        <li>Terdapat salah satu:
                                            <ul>
                                                <li>Link email (<b>mailto:</b>) atau</li>
                                                <li>Link telepon (<b>tel:</b>)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <textarea class="project-editor"
                                    placeholder="Tulis kode HTML hyperlink kamu di sini..."></textarea>

                                <button class="btn btn-primary mt-3" id="submitProject8">
                                    Cek Project
                                </button>

                                <div class="mt-3" id="projectResult8"></div>
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
    const editor = document.getElementById('editorMateri8');
    const output = document.getElementById('outputMateri8');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri8');
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
    const source = document.getElementById('dragSource8');

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

        const feedback = document.getElementById('dragFeedback8');

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
    const container = document.getElementById('dragSource8');
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

    const submitBtn = document.getElementById('submitProject8');
    const projectEditor = document.querySelector('.project-editor');
    const resultBox = document.getElementById('projectResult8');

    if (!submitBtn) return;

    submitBtn.addEventListener('click', () => {

        const code = projectEditor.value.toLowerCase();

        const checks = [
            {
                label: 'Judul (<h1>)',
                valid: /<h1>.*<\/h1>/.test(code),
                descOk: 'Judul utama sudah menggunakan tag <h1>.',
                descFail: 'Tambahkan judul menggunakan tag <h1>...</h1>.'
            },
            {
                label: 'Hyperlink (<a>)',
                valid: /<a[\s\S]*?>[\s\S]*?<\/a>/.test(code),
                descOk: 'Tag <a> sudah digunakan.',
                descFail: 'Tambahkan hyperlink menggunakan tag <a>...</a>.'
            },
            {
                label: 'Atribut href',
                valid: /href=/.test(code),
                descOk: 'Atribut href sudah digunakan.',
                descFail: 'Tambahkan atribut href pada tag <a>.'
            },
            {
                label: 'Atribut target',
                valid: /target=/.test(code),
                descOk: 'Atribut target sudah digunakan.',
                descFail: 'Gunakan atribut target (contoh: target="_blank").'
            },
            {
                label: 'Link Email atau Telepon',
                valid: /(mailto:|tel:)/.test(code),
                descOk: 'Link email atau telepon sudah digunakan.',
                descFail: 'Tambahkan link email (mailto:) atau telepon (tel:).'
            }
        ];

        const allCorrect = checks.every(item => item.valid);

        /* ===== KERANGKA HASIL ===== */
        resultBox.innerHTML = `
            <div class="project-result">
                <div class="project-result-header ${allCorrect ? 'success' : 'warning'}">
                    ${allCorrect ? '🎉 Project Berhasil!' : '⚠️ Project Perlu Perbaikan'}
                </div>

                <ul class="project-result-list" id="resultList8"></ul>

                <div class="project-result-footer ${allCorrect ? 'success' : 'warning'}">
                    ${
                        allCorrect
                            ? 'Keren! Hyperlink HTML berhasil diimplementasikan 🔗'
                            : 'Periksa kembali poin yang bertanda ❌ dan perbaiki kodenya ya 💡'
                    }
                </div>
            </div>
        `;

        const list = document.getElementById('resultList8');

        /* ===== DETAIL HASIL ===== */
        checks.forEach(item => {

            const li = document.createElement('li');
            li.className = `project-result-item ${item.valid ? 'success' : 'error'}`;

            const title = document.createElement('div');
            title.className = 'title';
            title.textContent = `${item.valid ? '✅' : '❌'} ${item.label}`;

            const desc = document.createElement('div');
            desc.className = 'desc';
            desc.textContent = item.valid ? item.descOk : item.descFail;

            li.appendChild(title);
            li.appendChild(desc);
            list.appendChild(li);
        });

    });

});
</script>
