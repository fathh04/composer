@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<style>
    /* ===== VISUAL TABLE ===== */
    .visual-table {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 6px;
        max-width: 420px;
    }

    .visual-table.rows-3 {
        grid-template-rows: repeat(3, 60px);
    }

    .cell {
        background: #f8f9fa;
        border: 2px solid #dee2e6;
        padding: 14px 10px;
        text-align: center;
        font-weight: 600;
        border-radius: 8px;
    }

    .cell.header {
        background: #0d6efd;
        color: #fff;
    }

    .colspan-3 {
        grid-column: span 3;
    }

    .rowspan-2 {
        grid-row: span 2;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<div class="modal fade" id="modalMateri4" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Tabel dalam HTML
                </h5>

                <div class="d-flex align-items-center gap-2">

                    <!-- FULLSCREEN BUTTON -->
                    <button type="button"
                            class="btn btn-sm btn-light btn-fullscreen"
                            title="Fullscreen">
                        ⛶
                    </button>

                    <button type="button"
                            class="btn-close btn-close-white"
                            data-bs-dismiss="modal"></button>
                </div>
            </div>

            <!-- BODY -->
            <div class="modal-body">

                <div class="row g-4">

                    <!-- SIDEBAR -->
                    <div class="col-md-3">
                        <div class="sidebar-sticky">
                            <div class="nav flex-column nav-pills sidebar-tab">

                                <button class="nav-link active"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi4-video">
                                    🎥 Video
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi4-code">
                                    💻 Sintaks
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi4-live">
                                    ⚡ Live Output
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi4-info">
                                    🧠 Infografis
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi4-spaning">
                                    📊 Representasi Tabel Spaning
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- VIDEO -->
                            <div class="tab-pane fade show active" id="materi4-video">
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe
                                        class="w-100 rounded-4 yt-video"
                                        src="https://www.youtube.com/embed/MGGmU8_nTjw?rel=0&modestbranding=1&controls=1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <p class="text-secondary small">
                                    Video penjelasan mengenai Tabel dalam HTML
                                </p>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi4-code">
                                <div class="row g-3">
            <!-- ===== KODE ===== -->
            <div class="col-lg-6">
                <div class="code-wrapper h-100">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Tabel Data Mahasiswa<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;table</span>
    <span class="attr">border</span>=<span class="value">"1"</span>
    <span class="attr">width</span>=<span class="value">"80%"</span>
    <span class="attr">cellspacing</span>=<span class="value">"0"</span>
    <span class="attr">cellpadding</span>=<span class="value">"8"</span>
    <span class="attr">align</span>=<span class="value">"center"</span>
    <span class="attr">bgcolor</span>=<span class="value">"#f8f9fa"</span>
<span class="tag">&gt;</span>

    <span class="tag">&lt;tr</span>
        <span class="attr">align</span>=<span class="value">"center"</span>
        <span class="attr">bgcolor</span>=<span class="value">"#0d6efd"</span>
    <span class="tag">&gt;</span>
        <span class="tag">&lt;th&gt;</span>NIM<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Nama<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Jurusan<span class="tag">&lt;/th&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>

    <span class="tag">&lt;tr</span>
        <span class="attr">align</span>=<span class="value">"center"</span>
        <span class="attr">valign</span>=<span class="value">"middle"</span>
    <span class="tag">&gt;</span>
        <span class="tag">&lt;td&gt;</span>22001<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;td&gt;</span>Fitri<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;td&gt;</span>Informatika<span class="tag">&lt;/td&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>

    <span class="tag">&lt;tr</span>
        <span class="attr">align</span>=<span class="value">"center"</span>
        <span class="attr">bgcolor</span>=<span class="value">"#e9ecef"</span>
    <span class="tag">&gt;</span>
        <span class="tag">&lt;td&gt;</span>22002<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;td&gt;</span>Budi<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;td&gt;</span>Sistem Informasi<span class="tag">&lt;/td&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>

<span class="tag">&lt;/table&gt;</span>
</code></pre>
            </div>
        </div>
                                    <!-- ===== PENJELASAN ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">

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

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi4-live">

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

                            <!-- INFO -->
                            <div class="tab-pane fade text-center" id="materi4-info">
                                <div class="image-scroll-wrapper">
                                    <img src="{{ url('img/tabel.png') }}"
                                        class="image-scroll"
                                        alt="Tabel">
                                </div>
                                <p class="text-secondary mt-3 small">
                                    Pelajari dengan seksama infografis Tabel dalam HTML
                                </p>
                            </div>

                            <!-- REPRESENTASI TABEL SPANING -->
                            <div class="tab-pane fade" id="materi4-spaning">

                                <div class="alert alert-primary d-flex align-items-center gap-2 mb-4">
                                    <i class="bi bi-info-circle-fill fs-5"></i>
                                    <div class="small">
                                        Pelajari bagaimana <b>sel</b>, <b>baris</b>,
                                        serta konsep <b>colspan</b> dan <b>rowspan</b> bekerja dalam tabel HTML.
                                    </div>
                                </div>

                                <!-- ===== TABEL DASAR ===== -->
                                <h6 class="fw-bold mb-2">1️⃣ Struktur Dasar Tabel</h6>
                                <div class="visual-table mb-4">
                                    <div class="cell header">TH</div>
                                    <div class="cell header">TH</div>
                                    <div class="cell header">TH</div>

                                    <div class="cell">TD</div>
                                    <div class="cell">TD</div>
                                    <div class="cell">TD</div>

                                    <div class="cell">TD</div>
                                    <div class="cell">TD</div>
                                    <div class="cell">TD</div>
                                </div>

                                <p class="small text-secondary">
                                    🔹 <b>TH</b> = header kolom &nbsp;&nbsp;|&nbsp;&nbsp;
                                    🔹 <b>TD</b> = data / isi tabel &nbsp;&nbsp;|&nbsp;&nbsp;
                                    🔹 Baris dibentuk oleh <code>&lt;tr&gt;</code>
                                </p>

                                <hr class="my-4">

                                <!-- ===== COLSPAN ===== -->
                                <h6 class="fw-bold mb-2">2️⃣ Colspan (Kolom yang Digabungkan)</h6>

                                <div class="visual-table mb-3">
                                    <div class="cell header colspan-3">Header colspan="3"</div>

                                    <div class="cell">TD</div>
                                    <div class="cell">TD</div>
                                    <div class="cell">TD</div>
                                </div>

                                <p class="small text-secondary">
                                    🔹 <b>colspan</b> menggabungkan <b>beberapa kolom secara horizontal</b><br>
                                    🔹 Digunakan saat satu data mencakup beberapa kolom
                                </p>
<pre class="bg-light p-2 rounded small"><code>
&lt;th colspan="3"&gt;Header&lt;/th&gt;
</code></pre>
    <hr class="my-4">

    <!-- ===== ROWSPAN ===== -->
    <h6 class="fw-bold mb-2">3️⃣ Rowspan (Baris yang Digabungkan)</h6>

    <div class="visual-table rows-3 mb-3">
        <div class="cell header rowspan-2">rowspan="2"</div>
        <div class="cell">TD</div>
        <div class="cell">TD</div>

        <div class="cell">TD</div>
        <div class="cell">TD</div>

        <div class="cell header">TH</div>
        <div class="cell">TD</div>
        <div class="cell">TD</div>
    </div>

    <p class="small text-secondary">
        🔹 <b>rowspan</b> menggabungkan <b>beberapa baris secara vertikal</b><br>
        🔹 <b>rowspan</b> dapat digunakan untuk kategori atau label data
    </p>
<pre class="bg-light p-2 rounded small"><code>
&lt;td rowspan="2"&gt;Data&lt;/td&gt;
</code></pre>
                                <div class="alert alert-info mt-4 small">
                                    💡 <b>Ringkasan:</b><br>
                                    • <b>colspan</b> : melebar ke samping (kolom) <br>
                                    • <b>rowspan</b> : memanjang ke bawah (baris)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('modalMateri4');
    if (!modal) return;

    const editor = document.getElementById('editorMateri4');
    const output = document.getElementById('outputMateri4');

    /* ==============================
       LIVE PREVIEW
    ============================== */
    function updatePreview() {
        if (editor && output) {
            output.srcdoc = editor.value;
        }
    }

    editor?.addEventListener('input', updatePreview);
    updatePreview();

    /* ==============================
       STOP YOUTUBE
    ============================== */
    function stopYouTubeVideos() {
        modal.querySelectorAll('iframe[src*="youtube.com"]').forEach(iframe => {
            iframe.contentWindow?.postMessage(
                JSON.stringify({
                    event: 'command',
                    func: 'pauseVideo',
                    args: []
                }),
                '*'
            );
        });
    }

    /* ==============================
       STOP SEMUA MEDIA
    ============================== */
    function stopAllMedia() {

        // audio & video HTML biasa
        modal.querySelectorAll('audio, video').forEach(media => {
            media.pause();
            media.currentTime = 0;
        });

        // audio & video di iframe live preview
        try {
            const iframeDoc =
                output?.contentDocument ||
                output?.contentWindow?.document;

            iframeDoc?.querySelectorAll('audio, video').forEach(media => {
                media.pause();
                media.currentTime = 0;
            });
        } catch (e) {}

        // YouTube
        stopYouTubeVideos();
    }

    /* ==============================
       FULLSCREEN
    ============================== */
    const fullscreenBtn = modal.querySelector('.btn-fullscreen');
    const fullscreenTarget = modal.querySelector('.modal-dialog');

    fullscreenBtn?.addEventListener('click', () => {
        if (!document.fullscreenElement) {
            fullscreenTarget.requestFullscreen();
        } else {
            document.exitFullscreen();
        }
    });

    document.addEventListener('fullscreenchange', () => {
        if (fullscreenBtn) {
            fullscreenBtn.textContent =
                document.fullscreenElement ? '⤫' : '⛶';
        }
    });

    /* ==============================
       EVENT KONTROL
    ============================== */

    // pindah tab (pill)
    modal.querySelectorAll('[data-bs-toggle="pill"]').forEach(tab => {
        tab.addEventListener('shown.bs.tab', stopAllMedia);
    });

    // modal ditutup
    modal.addEventListener('hidden.bs.modal', () => {
        stopAllMedia();

        if (document.fullscreenElement) {
            document.exitFullscreen();
        }
    });

    // tab browser tidak aktif
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAllMedia();
        }
    });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    function stopYouTubeVideos() {
        document.querySelectorAll('iframe[src*="youtube.com"]').forEach(iframe => {
            iframe.src = iframe.src; // reset = stop video
        });
    }

    // pindah tab bootstrap
    document.querySelectorAll('[data-bs-toggle="pill"], [data-bs-toggle="tab"]').forEach(tab => {
        tab.addEventListener('shown.bs.tab', stopYouTubeVideos);
    });

    // modal ditutup
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', stopYouTubeVideos);
    });

    // tab browser tidak aktif
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopYouTubeVideos();
        }
    });

});
</script>

@endpush
