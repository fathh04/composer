@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-kinestetik.css') }}">
@endpush

<div class="modal fade" id="modalMateri9" tabindex="-1" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold mb-0">📚 Penggunaan Form</h5>
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
                                        data-bs-target="#materi9-praktik">
                                    🧩 Materi & Praktik
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi9-live">
                                    🧪 Laboratorium Virtual
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi9-project">
                                    🚀 Mini Project
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- =========================
                            2. MATERI & PRAKTIK (DRAG DROP - FORM HTML)
                            ========================= -->
                            <div class="tab-pane fade show active" id="materi9-praktik">

                                <p class="text-secondary small">
                                    Pelajari fungsi setiap tag dan atribut Form HTML, lalu lengkapi kode berikut
                                    agar form dapat mengirim data dengan benar.
                                </p>
                                <div class="row g-4">

        <!-- ================= LEFT : CODE BOX ================= -->
        <div class="col-md-7">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Form Pendaftaran<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;form</span>
    <span class="attr">action</span>=<span class="drop-slot" data-answer="&quot;proses.php&quot;"></span>
    <span class="attr">method</span>=<span class="drop-slot" data-answer="&quot;post&quot;"></span>
<span class="tag">&gt;</span>

Nama:
<span class="tag">&lt;input</span>
    <span class="attr">type</span>=<span class="drop-slot" data-answer="&quot;text&quot;"></span>
    <span class="attr">name</span>=<span class="drop-slot" data-answer="&quot;nama&quot;"></span>
<span class="tag">&gt;</span>

Jenis Kelamin:
<span class="tag">&lt;input</span>
    <span class="attr">type</span>=<span class="value">"radio"</span>
    <span class="attr">name</span>=<span class="value">"jk"</span>
    <span class="attr">value</span>=<span class="value">"L"</span>
<span class="tag">&gt;</span> Laki-laki

<span class="tag">&lt;input</span>
    <span class="attr">type</span>=<span class="value">"radio"</span>
    <span class="attr">name</span>=<span class="drop-slot" data-answer="&quot;jk&quot;"></span>
    <span class="attr">value</span>=<span class="drop-slot" data-answer="&quot;P&quot;"></span>
<span class="tag">&gt;</span> Perempuan

Pesan:
<span class="tag">&lt;textarea</span>
    <span class="attr">name</span>=<span class="drop-slot" data-answer="&quot;pesan&quot;"></span>
    <span class="attr">cols</span>=<span class="value">"30"</span>
    <span class="attr">rows</span>=<span class="value">"4"</span>
<span class="tag">&gt;&lt;/textarea&gt;</span>

<span class="tag">&lt;input</span>
    <span class="attr">type</span>=<span class="drop-slot" data-answer="&quot;submit&quot;"></span>
    <span class="attr">value</span>=<span class="drop-slot" data-answer="&quot;Kirim&quot;"></span>
<span class="tag">&gt;</span>

<span class="tag">&lt;/form&gt;</span>
</code></pre>
        </div>
                                    <!-- ================= RIGHT : PENJELASAN ================= -->
                                    <div class="col-md-5">
                                        <div class="bg-light rounded-4 p-3 h-100 d-flex flex-column">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut Form
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;form&gt;</span> Wadah utama pengiriman data</li>
                                                <li><span>action</span> Tujuan pengiriman data</li>
                                                <li><span>method</span> Metode kirim data (GET / POST)</li>
                                                <li><span>&lt;input&gt;</span> Input data pengguna</li>
                                                <li><span>type</span> Menentukan jenis input</li>
                                                <li><span>name</span> Nama data yang dikirim</li>
                                                <li><span>&lt;textarea&gt;</span> Input teks panjang</li>
                                                <li><span>rows / cols</span> Ukuran textarea</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                Semua input harus memiliki atribut <b>name</b> agar datanya terkirim.
                                            </div>

                                            <!-- ================= DRAG SOURCE ================= -->
                                            <h6 class="fw-bold text-primary mt-3 mb-2">
                                                🧲 Pilihan Kode
                                            </h6>

                                            <div class="drag-box" id="dragSource9">
                                                <div class="drag-item" draggable="true" data-code="&quot;proses.php&quot;">"proses.php"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;post&quot;">"post"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;text&quot;">"text"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;nama&quot;">"nama"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;jk&quot;">"jk"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;P&quot;">"P"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;pesan&quot;">"pesan"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;submit&quot;">"submit"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;Kirim&quot;">"Kirim"</div>
                                            </div>

                                            <div class="alert alert-info small mt-3" id="dragFeedback9">
                                                Lengkapi semua slot agar form dapat dikirim dengan benar.
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- =========================
                            2. LABORATORIUM VIRTUAL
                            ========================== -->
                            <div class="tab-pane fade" id="materi9-live">

                                <p class="text-secondary small">
                                    Ubah kode, lakukan eksperimen, dan lihat hasilnya secara langsung.
                                </p>

                                <ul class="small">
                                    <li>Tambahkan form untuk menginputkan jenis kelamin</li>
                                    <li>Tambahkan tombol submit pada form</li>
                                </ul>

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri9" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Contoh Form Dasar</h3>

<form action="proses.php" method="post">

    Nama:<br>
    <input type="text" name="nama"><br><br>

    Email:<br>
    <input type="email" name="email"><br><br>

    Pesan:<br>
    &lt;textarea name="pesan" rows="4" cols="30"&gt;&lt;/textarea&gt;
    <br><br>
    &lt;!-- Tulis kode disini... --&gt;
</form>
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

                                        <iframe id="outputMateri9" class="live-output"></iframe>

                                    </div>

                                </div>
                            </div>

                            <!-- =========================
                            3. MINI PROJECT (FORM HTML)
                            ========================== -->
                            <div class="tab-pane fade" id="materi9-project">

                                <div class="alert alert-success small">
                                    Buat halaman HTML Form sederhana dengan ketentuan:
                                    <ul class="mb-0">
                                        <li>1 judul menggunakan <b>&lt;h1&gt;</b></li>
                                        <li>Menggunakan tag <b>&lt;form&gt;</b></li>
                                        <li>Form memiliki atribut <b>action</b></li>
                                        <li>Form memiliki atribut <b>method</b></li>
                                        <li>Minimal 2 elemen <b>&lt;input&gt;</b></li>
                                        <li>Minimal 1 <b>&lt;textarea&gt;</b></li>
                                        <li>Minimal 1 tombol <b>submit</b></li>
                                    </ul>
                                </div>

                                <textarea class="project-editor"
                                    placeholder="Tulis kode HTML form kamu di sini..."></textarea>

                                <button class="btn btn-primary mt-3" id="submitProject9">
                                    Cek Project
                                </button>

                                <div class="mt-3" id="projectResult9"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /* =========================
    DRAG & DROP MATERI 9
    ========================= */

    /* 🔧 INIT DRAG & DROP (DIPANGGIL SAAT TAB AKTIF) */
    function initDragDropMateri9() {

        const praktikTab = document.getElementById('materi9-praktik');
        if (!praktikTab) return;

        let draggedItem = null;

        /* DRAG ITEM */
        praktikTab.querySelectorAll('.drag-item').forEach(item => {
            item.addEventListener('dragstart', () => {
                draggedItem = item;
            });
        });

        /* DROP SLOT */
        praktikTab.querySelectorAll('.drop-slot').forEach(slot => {

            slot.addEventListener('dragover', e => e.preventDefault());

            slot.addEventListener('drop', e => {
                e.preventDefault();
                if (!draggedItem || slot.children.length > 0) return;

                slot.appendChild(draggedItem);
                slot.classList.add('filled');

                if (draggedItem.dataset.code === slot.dataset.answer) {
                    slot.classList.add('correct');
                    slot.classList.remove('wrong');
                } else {
                    slot.classList.add('wrong');
                    slot.classList.remove('correct');
                }

                checkResultMateri9();
            });
        });

        /* KEMBALIKAN KE DAFTAR */
        const source = document.getElementById('dragSource9');

        source.addEventListener('dragover', e => e.preventDefault());

        source.addEventListener('drop', e => {
            e.preventDefault();
            if (!draggedItem) return;

            source.appendChild(draggedItem);

            praktikTab.querySelectorAll('.drop-slot').forEach(slot => {
                if (slot.contains(draggedItem)) {
                    slot.classList.remove('filled', 'correct', 'wrong');
                }
            });

            checkResultMateri9();
        });

        /* SHUFFLE ITEM */
        const items = Array.from(source.children);
        for (let i = items.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [items[i], items[j]] = [items[j], items[i]];
        }
        items.forEach(i => source.appendChild(i));
    }

    /* 🔎 CEK HASIL */
    function checkResultMateri9() {

        const slots = document.querySelectorAll('#materi9-praktik .drop-slot');
        const filled = [...slots].every(s => s.children.length > 0);
        const correct = [...slots].every(s => s.classList.contains('correct'));

        const feedback = document.getElementById('dragFeedback9');
        if (!feedback) return;

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

    /* =========================
    DOM READY
    ========================= */
    document.addEventListener('DOMContentLoaded', function () {

        /* LIVE PREVIEW */
        const editor = document.getElementById('editorMateri9');
        const output = document.getElementById('outputMateri9');

        if (editor && output) {
            const updatePreview = () => output.srcdoc = editor.value;
            editor.addEventListener('input', updatePreview);
            updatePreview();
        }

        /* FULLSCREEN */
        const modal = document.getElementById('modalMateri9');
        const fullscreenBtn = modal.querySelector('.btn-fullscreen');
        const fullscreenTarget = modal.querySelector('.modal-dialog');

        fullscreenBtn.addEventListener('click', () => {
            document.fullscreenElement
                ? document.exitFullscreen()
                : fullscreenTarget.requestFullscreen();
        });

        document.addEventListener('fullscreenchange', () => {
            fullscreenBtn.textContent =
                document.fullscreenElement ? '⤫' : '⛶';
        });

        modal.addEventListener('hidden.bs.modal', () => {
            if (document.fullscreenElement) document.exitFullscreen();
        });

        /* 🔥 INIT SAAT TAB AKTIF */
        document
            .querySelector('[data-bs-target="#materi9-praktik"]')
            .addEventListener('shown.bs.tab', () => {
                initDragDropMateri9();
            });

        /* 🔥 INIT JUGA SAAT MODAL DIBUKA */
        modal.addEventListener('shown.bs.modal', () => {
            initDragDropMateri9();
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const submitBtn = document.getElementById('submitProject9');
    const projectEditor = document.querySelector('.project-editor');
    const resultBox = document.getElementById('projectResult9');

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
                label: 'Form (<form>)',
                valid: /<form[\s\S]*?>[\s\S]*?<\/form>/.test(code),
                descOk: 'Tag <form> sudah digunakan.',
                descFail: 'Tambahkan tag <form>...</form>.'
            },
            {
                label: 'Atribut action',
                valid: /action=/.test(code),
                descOk: 'Atribut action sudah digunakan.',
                descFail: 'Tambahkan atribut action pada tag <form>.'
            },
            {
                label: 'Atribut method',
                valid: /method=/.test(code),
                descOk: 'Atribut method sudah digunakan.',
                descFail: 'Tambahkan atribut method (get / post).'
            },
            {
                label: 'Input (<input>)',
                valid: /<input[\s\S]*?>/.test(code),
                descOk: 'Elemen <input> sudah digunakan.',
                descFail: 'Tambahkan minimal satu elemen <input>.'
            },
            {
                label: 'Textarea (<textarea>)',
                valid: /<textarea[\s\S]*?>[\s\S]*?<\/textarea>/.test(code),
                descOk: 'Textarea sudah digunakan.',
                descFail: 'Tambahkan elemen <textarea>.'
            },
            {
                label: 'Submit Button',
                valid: /type\s*=\s*["']submit["']/.test(code),
                descOk: 'Tombol submit sudah tersedia.',
                descFail: 'Tambahkan tombol submit (type="submit").'
            }
        ];

        const allCorrect = checks.every(item => item.valid);

        /* ===== TAMPILAN HASIL ===== */
        resultBox.innerHTML = `
            <div class="project-result">
                <div class="project-result-header ${allCorrect ? 'success' : 'warning'}">
                    ${allCorrect ? '🎉 Project Berhasil!' : '⚠️ Project Perlu Perbaikan'}
                </div>

                <ul class="project-result-list" id="resultList9"></ul>

                <div class="project-result-footer ${allCorrect ? 'success' : 'warning'}">
                    ${
                        allCorrect
                            ? 'Mantap! Form HTML kamu sudah sesuai ketentuan 📝'
                            : 'Periksa kembali poin yang bertanda ❌ lalu perbaiki kodenya 💡'
                    }
                </div>
            </div>
        `;

        const list = document.getElementById('resultList9');

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
