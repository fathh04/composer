@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-kinestetik.css') }}">
@endpush

<div class="modal fade" id="modalMateri4" tabindex="-1" aria-hidden="true"
     data-bs-backdrop="static" data-bs-keyboard="false">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold mb-0">📚 Tabel dalam HTML</h5>
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
                                        data-bs-target="#materi4-praktik">
                                    🧩 Materi & Praktik
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi4-live">
                                    🧪 Laboratorium Virtual
                                </button>
                                <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#materi4-project">
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
                           <div class="tab-pane fade show active" id="materi4-praktik">
                            <p class="text-secondary small">
                                Pelajari fungsi setiap tag, lalu susun kode HTML dengan benar.
                            </p>

                            <div class="row g-4">
<!-- ================= LEFT : CODE BOX ================= -->
<div class="col-md-7">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Tabel Data Mahasiswa<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;table</span>
     <span class="attr">border</span>=<span class="value">"1"</span>
    <span class="attr">width</span>=<span class="drop-slot" data-answer="&quot;80%&quot;"></span>
    <span class="attr">cellspacing</span>=<span class="value">"0"</span>
    <span class="attr">cellpadding</span>=<span class="value">"8"</span>
    <span class="attr">align</span>=<span class="drop-slot" data-answer="&quot;center&quot;"></span>
    <span class="attr">bgcolor</span>=<span class="drop-slot" data-answer="&quot;#0d6efd&quot;"></span>
<span class="tag">&gt;</span>

    <span class="tag">&lt;tr</span>
        <span class="attr">bgcolor</span>=<span class="value">"#0d6efd"</span>
        <span class="attr">align</span>=<span class="drop-slot" data-answer="&quot;center&quot;"></span>
    <span class="tag">&gt;</span>
        <span class="drop-slot" data-answer="&lt;th&gt;"></span>NIM<span class="drop-slot" data-answer="&lt;/th&gt;"></span>
        <span class="drop-slot" data-answer="&lt;th&gt;"></span>Nama<span class="drop-slot" data-answer="&lt;/th&gt;"></span>
        <span class="drop-slot" data-answer="&lt;th&gt;"></span>Jurusan<span class="drop-slot" data-answer="&lt;/th&gt;"></span>
    <span class="tag">&lt;/tr&gt;</span>

    <span class="tag">&lt;tr</span>
        <span class="attr">align</span>=<span class="drop-slot" data-answer="&quot;center&quot;"></span>
        <span class="attr">valign</span>=<span class="drop-slot" data-answer="&quot;middle&quot;"></span>
    <span class="tag">&gt;</span>
        <span class="drop-slot" data-answer="&lt;td&gt;"></span>22001<span class="drop-slot" data-answer="&lt;/td&gt;"></span>
        <span class="drop-slot" data-answer="&lt;td&gt;"></span>Fitri<span class="drop-slot" data-answer="&lt;/td&gt;"></span>
        <span class="drop-slot" data-answer="&lt;td&gt;"></span>Informatika<span class="drop-slot" data-answer="&lt;/td&gt;"></span>
    <span class="tag">&lt;/tr&gt;</span>

     <span class="tag">&lt;tr</span>
        <span class="attr">align</span>=<span class="value">"center"</span>
        <span class="attr">bgcolor</span>=<span class="value">"#e9ecef"</span>
    <span class="tag">&gt;</span>
        <span class="drop-slot" data-answer="&lt;td&gt;"></span>22002<span class="drop-slot" data-answer="&lt;/td&gt;"></span>
        <span class="drop-slot" data-answer="&lt;td&gt;"></span>Budi<span class="drop-slot" data-answer="&lt;/td&gt;"></span>
        <span class="drop-slot" data-answer="&lt;td&gt;"></span>Sistem Informasi<span class="drop-slot" data-answer="&lt;/td&gt;"></span>
    <span class="tag">&lt;/tr&gt;</span>
<span class="tag">&lt;/table&gt;</span>
</code></pre>
</div>
                                    <!-- ================= RIGHT : PENJELASAN ================= -->
                                    <div class="col-md-5">
                                        <div class="bg-light rounded-4 p-3 h-100 d-flex flex-column">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;table&gt;</span> Membuat tabel</li>
                                                <li><span>&lt;tr&gt;</span> Membuat baris tabel</li>
                                                <li><span>&lt;th&gt;</span> Header kolom (teks tebal & tengah)</li>
                                                <li><span>&lt;td&gt;</span> Data/isi tabel</li>
                                            </ul>

                                            <h6 class="fw-bold mt-3">📊 Atribut Elemen Tabel</h6>
                                            <ul class="list-explain">
                                                <li><span>border</span> ketebalan garis tabel</li>
                                                <li><span>width / height</span> ukuran tabel</li>
                                                <li><span>cellspacing</span> jarak antar sel</li>
                                                <li><span>cellpadding</span> jarak isi ke border</li>
                                                <li><span>align</span> posisi tabel</li>
                                                <li><span>bgcolor</span> warna latar tabel</li>
                                            </ul>

                                            <h6 class="fw-bold mt-3">📑 Atribut Table Row (&lt;tr&gt;)</h6>
                                            <ul class="list-explain">
                                                <li><span>align</span> posisi teks horizontal</li>
                                                <li><span>valign</span> posisi teks vertikal</li>
                                                <li><span>bgcolor</span> warna baris</li>
                                            </ul>

                                            <h6 class="fw-bold mt-3">📄 Atribut Data (&lt;td&gt; / &lt;th&gt;)</h6>
                                            <ul class="list-explain">
                                                <li><span>align</span> perataan teks</li>
                                                <li><span>width / height</span> ukuran kolom</li>
                                                <li><span>bgcolor</span> warna sel</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                Untuk mengatur teks ataupun gambar dalam baris dan kolom, digunakanlah <b>pemformatan Tabel</b>
                                            </div>

                                            <!-- ================= DRAG SOURCE ================= -->
                                            <h6 class="fw-bold text-primary mt-3 mb-2">
                                                🧲 Pilihan Kode
                                            </h6>

                                            <div class="drag-box" id="dragSource4">
                                                <div class="drag-item" draggable="true" data-code="&lt;th&gt;">&lt;th&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/th&gt;">&lt;/th&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;th&gt;">&lt;th&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/th&gt;">&lt;/th&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;th&gt;">&lt;th&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/th&gt;">&lt;/th&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;td&gt;">&lt;td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/td&gt;">&lt;/td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;td&gt;">&lt;td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/td&gt;">&lt;/td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;td&gt;">&lt;td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/td&gt;">&lt;/td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;td&gt;">&lt;td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/td&gt;">&lt;/td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;td&gt;">&lt;td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/td&gt;">&lt;/td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;td&gt;">&lt;td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&lt;/td&gt;">&lt;/td&gt;</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;#0d6efd&quot;">"#0d6efd"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;80%&quot;">"80%"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;center&quot;">"center"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;center&quot;">"center"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;middle&quot;">"middle"</div>
                                                <div class="drag-item" draggable="true" data-code="&quot;center&quot;">"center"</div>
                                            </div>

                                            <div class="alert alert-info small mt-3" id="dragFeedback">
                                                Lengkapi semua slot agar tabel terbentuk dengan benar.
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- =========================
                            2. LABORATORIUM VIRTUAL
                            ========================== -->
                            <div class="tab-pane fade" id="materi4-live">

                                <p class="text-secondary small">
                                    Ubah kode, lakukan eksperimen, dan lihat hasilnya secara langsung.
                                </p>

                                <ul class="small">
                                    <li>Tambahkan 1 tabel lagi untuk menghasilkan 3 tabel</li>
                                    <li>Tambahkan atribut &lt;bg-color&gt; pada header kolom</li>
                                </ul>

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri4" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Daftar Mata Pelajaran</h3>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
    </tr>
    <tr>
        <td align="center">1</td>
        <td>Pemrograman Web</td>
    </tr>
    <tr>
        <td align="center">2</td>
        <td>Basis Data</td>
    </tr>
    <tr>
        <td align="center">3</td>
        <td>Jaringan Komputer</td>
    </tr>
</table>

<h3>Langkah Membuat Website</h3>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Langkah</th>
        <th>Deskripsi</th>
    </tr>
    <tr>
        <td align="center">1</td>
        <td>Menentukan tujuan</td>
    </tr>
    <tr>
        <td align="center">2</td>
        <td>Membuat desain</td>
    </tr>
    <tr>
        <td align="center">3</td>
        <td>Menulis kode HTML</td>
    </tr>
</table>
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

                                        <iframe id="outputMateri4" class="live-output"></iframe>

                                    </div>

                                </div>
                            </div>

                            <!-- =========================
                            3. MINI PROJECT (TABEL)
                            ========================== -->
                            <div class="tab-pane fade" id="materi4-project">

                                <div class="alert alert-success small">
                                    Buat halaman HTML sederhana dengan ketentuan:
                                    <ul class="mb-0">
                                        <li>1 judul (&lt;h1&gt;)</li>
                                        <li>1 tabel (&lt;table&gt;)</li>
                                        <li>Minimal 2 baris (&lt;tr&gt;)</li>
                                        <li>Minimal 3 kolom (&lt;td&gt; atau &lt;th&gt;)</li>
                                        <li>Menggunakan minimal 3 atribut tabel</li>
                                    </ul>
                                </div>

                                <textarea class="project-editor"
                                        placeholder="Tulis kode HTML tabel kamu di sini..."></textarea>

                                <button class="btn btn-primary mt-3" id="submitProject4">
                                    Cek Project
                                </button>

                                <div class="mt-3" id="projectResult4"></div>
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
    const editor = document.getElementById('editorMateri4');
    const output = document.getElementById('outputMateri4');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri4');
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
    const source = document.getElementById('dragSource4');

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
    const container = document.getElementById('dragSource4');
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
        '[data-bs-target="#materi4-project"]'
    );

    projectTabBtn.addEventListener('shown.bs.tab', () => {

        const projectTab = document.getElementById('materi4-project');
        const submitBtn = document.getElementById('submitProject4');
        const projectEditor = projectTab.querySelector('.project-editor');
        const resultBox = document.getElementById('projectResult4');

        if (!submitBtn) return;

        submitBtn.onclick = () => {

            const code = projectEditor.value.toLowerCase();

            const checks = [
                {
                    label: 'Judul (&lt;h1&gt;)',
                    valid: /<h1\b[^>]*>[\s\S]*?<\/h1>/.test(code),
                    ok: 'Judul utama sudah menggunakan &lt;h1&gt;.',
                    fail: 'Tambahkan judul menggunakan tag &lt;h1&gt;.'
                },
                {
                    label: 'Tabel (&lt;table&gt;)',
                    valid: /<table[\s\S]*?>[\s\S]*?<\/table>/.test(code),
                    ok: 'Tag &lt;table&gt; sudah digunakan.',
                    fail: 'Tambahkan struktur tabel dengan &lt;table&gt;.'
                },
                {
                    label: 'Minimal 2 baris (&lt;tr&gt;)',
                    valid: (code.match(/<tr/g) || []).length >= 2,
                    ok: 'Jumlah baris tabel sudah cukup.',
                    fail: 'Tambahkan minimal 2 baris menggunakan &lt;tr&gt;.'
                },
                {
                    label: 'Minimal 3 kolom (&lt;td&gt; / &lt;th&gt;)',
                    valid: (code.match(/<(td|th)>/g) || []).length >= 3,
                    ok: 'Jumlah kolom tabel sudah memenuhi.',
                    fail: 'Tambahkan minimal 3 kolom tabel.'
                },
                {
                    label: 'Minimal 3 atribut tabel',
                    valid: (code.match(/(border|width|cellpadding|cellspacing|align|bgcolor)=/g) || []).length >= 3,
                    ok: 'Atribut tabel sudah lengkap.',
                    fail: 'Gunakan minimal 3 atribut tabel.'
                }
            ];

            const allCorrect = checks.every(c => c.valid);

            resultBox.innerHTML = `
                <div class="project-result">
                    <div class="project-result-header ${allCorrect ? 'success' : 'warning'}">
                        ${allCorrect ? '🎉 Project Berhasil!' : '⚠️ Project Perlu Perbaikan'}
                    </div>

                    <ul class="project-result-list" id="resultList"></ul>

                    <div class="project-result-footer ${allCorrect ? 'success' : 'warning'}">
                        ${allCorrect
                            ? 'Mantap! Semua kriteria terpenuhi 👏'
                            : 'Ikuti arahan perbaikan di atas ya 💡'}
                    </div>
                </div>
            `;

            const list = document.getElementById('resultList');

            checks.forEach(item => {
                const li = document.createElement('li');
                li.className = `project-result-item ${item.valid ? 'success' : 'error'}`;

                li.innerHTML = `
                    <div class="title">${item.valid ? '✅' : '❌'} ${item.label}</div>
                    <div class="desc">${item.valid ? item.ok : item.fail}</div>
                `;

                list.appendChild(li);
            });
        };
    });
});
</script>
