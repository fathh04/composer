@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-kinestetik.css') }}">
@endpush

<div class="modal fade" id="modalMateri5" tabindex="-1" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold mb-0">📚 Integrasi Elemen Video</h5>
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
                                        data-bs-target="#materi5-praktik">
                                    🧩 Materi & Praktik
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi5-live">
                                    🧪 Laboratorium Virtual
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi5-project">
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
                           <div class="tab-pane fade show active" id="materi5-praktik">
                                <p class="text-secondary small">
                                    Pelajari fungsi setiap atribut video, lalu lengkapi kode HTML agar video dapat diputar dengan benar.
                                </p>
                                <div class="row g-4">

        <!-- ================= LEFT : CODE BOX ================= -->
        <div class="col-md-7">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Integrasi Elemen Video HTML5<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;video</span>
    <span class="attr">width</span>=<span class="value">"320"</span>
    <span class="attr">height</span>=<span class="value">"240"</span>
    <span class="attr">controls</span>
    <span class="drop-slot" data-answer="autoplay"></span>
    <span class="drop-slot" data-answer="loop"></span>
    <span class="drop-slot" data-answer="muted"></span>
    <span class="attr">poster</span>=<span class="drop-slot" data-answer="&quot;poster.jpg&quot;"></span>
    <span class="attr">preload</span>=<span class="drop-slot" data-answer="&quot;auto&quot;"></span>
<span class="tag">&gt;</span>

    <span class="tag">&lt;source</span>
        <span class="attr">src</span>=<span class="drop-slot" data-answer="&quot;video.mp4&quot;"></span>
        <span class="attr">type</span>=<span class="drop-slot" data-answer="&quot;video/mp4&quot;"></span>
    <span class="tag">/&gt;</span>

    Browser Anda tidak mendukung video HTML5.
<span class="tag">&lt;/video&gt;</span>
</code></pre>
        </div>

                                    <!-- ================= RIGHT : PENJELASAN ================= -->
                                    <div class="col-md-5">
                                        <div class="bg-light rounded-4 p-3 h-100 d-flex flex-column">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut Video
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;video&gt;</span> Menampilkan video di halaman web</li>
                                                <li><span>controls</span> Menampilkan tombol play, pause, volume</li>
                                                <li><span>autoplay</span> Video diputar otomatis saat halaman dibuka</li>
                                                <li><span>loop</span> Video diputar berulang</li>
                                                <li><span>muted</span> Mematikan suara video</li>
                                                <li><span>width</span> Mengatur lebar video</li>
                                                <li><span>height</span> Mengatur tinggi video</li>
                                                <li><span>poster</span> Gambar thumbnail sebelum video diputar</li>
                                                <li><span>preload</span> Mengatur pemuatan awal video</li>
                                                <li><span>&lt;source&gt;</span> Menentukan sumber file video</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                Browser modern <b>mengharuskan atribut muted</b> agar <b>autoplay</b> dapat berjalan.
                                            </div>

                                            <!-- ================= DRAG SOURCE ================= -->
                                            <h6 class="fw-bold text-primary mt-3 mb-2">
                                                🧲 Pilihan Kode
                                            </h6>

                                            <div class="drag-box" id="dragSource5">
                                                <div class="drag-item" draggable="true" data-code="autoplay">autoplay</div>
                                                <div class="drag-item" draggable="true" data-code="loop">loop</div>
                                                <div class="drag-item" draggable="true" data-code="muted">muted</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;poster.jpg&quot;">"poster.jpg"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;auto&quot;">"auto"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;video.mp4&quot;">"video.mp4"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;video/mp4&quot;">"video/mp4"</div>
                                            </div>

                                            <div class="alert alert-info small mt-3" id="dragFeedback5">
                                                Lengkapi semua slot agar video dapat ditampilkan dan diputar dengan benar.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- =========================
                            2. LABORATORIUM VIRTUAL
                            ========================== -->
                            <div class="tab-pane fade" id="materi5-live">

                                <p class="text-secondary small">
                                    Ubah kode, lakukan eksperimen, dan lihat hasilnya secara langsung.
                                </p>

                                <ul class="small">
                                    <li>Tambahkan kembali 1 video dengan penamaan file video "animasi.mp4"</li>
                                    <li>Tambahkan minimal 2 atribut dalam tag &lt;video&gt;</li>
                                </ul>

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri5" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Menampilkan Video di HTML</h3>
<video controls width="400">
    <source src="/video/animasi.mp4" type="video/mp4">
    Browser Anda tidak mendukung pemutaran video.
</video>

<h3>Contoh Video dengan Beberapa Atribut</h3>
{{-- Buat Disini... --}}
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

                                        <iframe id="outputMateri5" class="live-output"></iframe>

                                    </div>

                                </div>
                            </div>

                            <!-- =========================
                            3. MINI PROJECT (VIDEO)
                            ========================== -->
                            <div class="tab-pane fade" id="materi5-project">

                                <div class="alert alert-success small">
                                    Buat halaman HTML sederhana dengan ketentuan:
                                    <ul class="mb-0">
                                        <li>1 judul (&lt;h1&gt;)</li>
                                        <li>1 elemen video (&lt;video&gt;)</li>
                                        <li>Menggunakan tag &lt;source&gt;</li>
                                        <li>Minimal 3 atribut video</li>
                                        <li>Format dan penamaan file video HTML5 (animasi.mp4)</li>
                                    </ul>
                                </div>

                                <textarea class="project-editor"
                                        placeholder="Tulis kode HTML video kamu di sini..."></textarea>

                                <button class="btn btn-primary mt-3" id="submitProject5">
                                    Cek Project
                                </button>

                                <div class="mt-3" id="projectResult5"></div>
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
    const editor = document.getElementById('editorMateri5');
    const output = document.getElementById('outputMateri5');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri5');
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
    const source = document.getElementById('dragSource5');

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

        const feedback = document.getElementById('dragFeedback5');

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
    const container = document.getElementById('dragSource5');
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

    const submitBtn = document.getElementById('submitProject5');
    const projectEditor = document.querySelector('.project-editor');
    const resultBox = document.getElementById('projectResult5');

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
                label: 'Elemen Video (<video>)',
                valid: /<video[\s\S]*?>[\s\S]*?<\/video>/.test(code),
                descOk: 'Elemen <video> sudah digunakan.',
                descFail: 'Tambahkan elemen <video>...</video>.'
            },
            {
                label: 'Tag Source (<source>)',
                valid: /<source/.test(code),
                descOk: 'Tag <source> sudah digunakan sebagai sumber video.',
                descFail: 'Tambahkan tag <source> di dalam <video>.'
            },
            {
                label: 'Minimal 3 atribut video',
                valid: (
                    code.match(/(controls|autoplay|loop|muted|poster|preload|width|height)/g) || []
                ).length >= 3,
                descOk: 'Atribut video sudah digunakan dengan baik.',
                descFail: 'Gunakan minimal 3 atribut video (contoh: controls, autoplay, muted).'
            },
            {
                label: 'Format Video HTML5 (mp4)',
                valid: /video\/mp4/.test(code) || /\.mp4/.test(code),
                descOk: 'Format video sudah menggunakan mp4.',
                descFail: 'Gunakan format video HTML5 (.mp4).'
            }
        ];

        const allCorrect = checks.every(item => item.valid);

        /* ===== KERANGKA HASIL ===== */
        resultBox.innerHTML = `
            <div class="project-result">
                <div class="project-result-header ${allCorrect ? 'success' : 'warning'}">
                    ${allCorrect ? '🎉 Project Berhasil!' : '⚠️ Project Perlu Perbaikan'}
                </div>

                <ul class="project-result-list" id="resultList5"></ul>

                <div class="project-result-footer ${allCorrect ? 'success' : 'warning'}">
                    ${
                        allCorrect
                            ? 'Keren! Video HTML5 berhasil diintegrasikan 👏'
                            : 'Perhatikan poin yang bertanda ❌ dan perbaiki kodenya ya 💡'
                    }
                </div>
            </div>
        `;

        const list = document.getElementById('resultList5');

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
