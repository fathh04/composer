@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-kinestetik.css') }}">
@endpush

<div class="modal fade" id="modalMateri7" tabindex="-1" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold mb-0">📚 Integrasi Elemen Gambar</h5>
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
                                        data-bs-target="#materi7-praktik">
                                    🧩 Materi & Praktik
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi7-live">
                                    🧪 Laboratorium Virtual
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi7-project">
                                    🚀 Mini Project
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- =========================
                            1. MATERI & PRAKTIK (DRAG DROP - GAMBAR)
                            ========================== -->
                            <div class="tab-pane fade show active" id="materi7-praktik">

                                <p class="text-secondary small">
                                    Pelajari fungsi setiap atribut gambar, lalu lengkapi kode HTML agar gambar dapat ditampilkan dengan benar.
                                </p>

                                <div class="row g-4">

        <!-- ================= LEFT : CODE BOX ================= -->
        <div class="col-md-7">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Integrasi Elemen Gambar HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;img</span>
    <span class="attr">src</span>=<span class="drop-slot" data-answer="&quot;/img/contoh-gambar.jpg&quot;"></span>
    <span class="attr">alt</span>=<span class="drop-slot" data-answer="&quot;Contoh Gambar HTML&quot;"></span>
    <span class="attr">width</span>=<span class="value">"300"</span>
    <span class="attr">height</span>=<span class="value">"200"</span>
    <span class="attr">border</span>=<span class="drop-slot" data-answer="&quot;2&quot;"></span>
    <span class="attr">align</span>=<span class="drop-slot" data-answer="&quot;left&quot;"></span>
    <span class="attr">hspace</span>=<span class="value">"10"</span>
    <span class="attr">vspace</span>=<span class="value">"10"</span>
    <span class="tag">/&gt;</span>
</code></pre>
        </div>

                                    <!-- ================= RIGHT : PENJELASAN ================= -->
                                    <div class="col-md-5">
                                        <div class="bg-light rounded-4 p-3 h-100 d-flex flex-column">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut Gambar
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;img&gt;</span> Menampilkan gambar di halaman web</li>
                                                <li><span>src</span> Menentukan lokasi file gambar</li>
                                                <li><span>alt</span> Teks alternatif jika gambar gagal dimuat</li>
                                                <li><span>width</span> Mengatur lebar gambar</li>
                                                <li><span>height</span> Mengatur tinggi gambar</li>
                                                <li><span>border</span> Memberi garis tepi pada gambar</li>
                                                <li><span>align</span> Mengatur posisi gambar</li>
                                                <li><span>hspace</span> Jarak horizontal di sekitar gambar</li>
                                                <li><span>vspace</span> Jarak vertikal di sekitar gambar</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                Tag <b>&lt;img&gt;</b> adalah <b>void element</b> (tidak memiliki tag penutup).
                                            </div>

                                            <!-- ================= DRAG SOURCE ================= -->
                                            <h6 class="fw-bold text-primary mt-3 mb-2">
                                                🧲 Pilihan Kode
                                            </h6>

                                            <div class="drag-box" id="dragSource7">
                                                <div class="drag-item" draggable="true" data-code="&quot;/img/contoh-gambar.jpg&quot;">"/img/contoh-gambar.jpg"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;Contoh Gambar HTML&quot;">"Contoh Gambar HTML"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;2&quot;">"2"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;left&quot;">"left"</div>
                                            </div>

                                            <div class="alert alert-info small mt-3" id="dragFeedback7">
                                                Lengkapi semua atribut agar gambar tampil sesuai ketentuan.
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- =========================
                            2. LABORATORIUM VIRTUAL
                            ========================== -->
                            <div class="tab-pane fade" id="materi7-live">

                                <p class="text-secondary small">
                                    Ubah kode, lakukan eksperimen, dan lihat hasilnya secara langsung.
                                </p>

                                <ul class="small">
                                    <li>Tambahkan kembali 1 gambar dengan penamaan file gambar "gambar2.png"</li>
                                    <li>Tambahkan minimal 2 atribut dalam tag &lt;img&gt;</li>
                                </ul>

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri7" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Menampilkan Gambar di HTML</h3>
<img src="/img/syntax.png" alt="Contoh gambar HTML">

<h3>Contoh Gambar dengan Beberapa Atribut</h3>
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

                                        <iframe id="outputMateri7" class="live-output"></iframe>

                                    </div>

                                </div>
                            </div>

                            <!-- =========================
                            3. MINI PROJECT (GAMBAR)
                            ========================== -->
                            <div class="tab-pane fade" id="materi7-project">

                                <div class="alert alert-success small">
                                    Buat halaman HTML sederhana dengan ketentuan:
                                    <ul class="mb-0">
                                        <li>1 judul (&lt;h1&gt;)</li>
                                        <li>1 elemen gambar (&lt;img&gt;)</li>
                                        <li>Menggunakan atribut <b>src</b> dan <b>alt</b></li>
                                        <li>Minimal 3 atribut gambar</li>
                                        <li>Format dan penamaan file gambar HTML (gambar2.png)</li>
                                    </ul>
                                </div>

                                <textarea class="project-editor"
                                    placeholder="Tulis kode HTML gambar kamu di sini..."></textarea>

                                <button class="btn btn-primary mt-3" id="submitProject7">
                                    Cek Project
                                </button>

                                <div class="mt-3" id="projectResult7"></div>
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
    const editor = document.getElementById('editorMateri7');
    const output = document.getElementById('outputMateri7');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri7');
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
    const source = document.getElementById('dragSource7');

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

        const feedback = document.getElementById('dragFeedback7');

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
    const container = document.getElementById('dragSource7');
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

    const submitBtn = document.getElementById('submitProject7');
    const projectEditor = document.querySelector('.project-editor');
    const resultBox = document.getElementById('projectResult7');

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
                label: 'Elemen Gambar (<img>)',
                valid: /<img[\s\S]*?>/.test(code),
                descOk: 'Elemen <img> sudah digunakan.',
                descFail: 'Tambahkan elemen <img /> untuk menampilkan gambar.'
            },
            {
                label: 'Atribut src',
                valid: /src=/.test(code),
                descOk: 'Atribut src sudah digunakan.',
                descFail: 'Tambahkan atribut src untuk menentukan file gambar.'
            },
            {
                label: 'Atribut alt',
                valid: /alt=/.test(code),
                descOk: 'Atribut alt sudah digunakan.',
                descFail: 'Tambahkan atribut alt sebagai teks alternatif gambar.'
            },
            {
                label: 'Minimal 3 atribut gambar',
                valid: (
                    code.match(/(src|alt|width|height|border|align|hspace|vspace)=/g) || []
                ).length >= 3,
                descOk: 'Atribut gambar sudah digunakan dengan baik.',
                descFail: 'Gunakan minimal 3 atribut gambar (contoh: src, alt, width).'
            },
            {
                label: 'Format Gambar (jpg/png)',
                valid: /\.(jpg|jpeg|png)/.test(code),
                descOk: 'Format gambar sudah sesuai.',
                descFail: 'Gunakan format gambar jpg atau png.'
            }
        ];

        const allCorrect = checks.every(item => item.valid);

        /* ===== KERANGKA HASIL ===== */
        resultBox.innerHTML = `
            <div class="project-result">
                <div class="project-result-header ${allCorrect ? 'success' : 'warning'}">
                    ${allCorrect ? '🎉 Project Berhasil!' : '⚠️ Project Perlu Perbaikan'}
                </div>

                <ul class="project-result-list" id="resultList7"></ul>

                <div class="project-result-footer ${allCorrect ? 'success' : 'warning'}">
                    ${
                        allCorrect
                            ? 'Mantap! Gambar HTML berhasil diintegrasikan 🖼️'
                            : 'Perhatikan poin yang bertanda ❌ dan perbaiki kodenya ya 💡'
                    }
                </div>
            </div>
        `;

        const list = document.getElementById('resultList7');

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
