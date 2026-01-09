@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri8" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Implementasi Hyperlink
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
                                        data-bs-target="#materi8-video">
                                    🎥 Video
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi8-code">
                                    💻 Sintaks
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi8-live">
                                    ⚡ Live Output
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi8-info">
                                    🧠 Infografis
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- VIDEO -->
                            <div class="tab-pane fade show active" id="materi8-video">
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe
                                        class="w-100 rounded-4 yt-video"
                                        src="https://www.youtube.com/embed/fOGbw_mFovA?rel=0&modestbranding=1&controls=1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <p class="text-secondary small">
                                    Video penjelasan mengenai Implementasi Hyperlink dalam HTML
                                </p>
                            </div>

                            <!-- =========================
                            MATERI 8 - HYPERLINK HTML
                            ========================= -->
                            <div class="tab-pane fade" id="materi8-code">
                                <div class="row g-3">

        <!-- ===== KODE ===== -->
        <div class="col-lg-6">
            <div class="code-wrapper h-100">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Contoh Hyperlink HTML<span class="tag">&lt;/h1&gt;</span>

<span class="comment">&lt;!-- Link Absolut --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"https://www.google.com"</span>
    <span class="attr">target</span>=<span class="value">"_blank"</span>
<span class="tag">&gt;</span>
    Kunjungi Google
<span class="tag">&lt;/a&gt;</span>

<span class="comment">&lt;!-- Link Relatif --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"profil.html"</span>
<span class="tag">&gt;</span>
    Halaman Profil
<span class="tag">&lt;/a&gt;</span>

<span class="comment">&lt;!-- Link ke Bagian Dokumen --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"#kontak"</span>
<span class="tag">&gt;</span>
    Ke Bagian Kontak
<span class="tag">&lt;/a&gt;</span>

<span class="comment">&lt;!-- Target Tujuan --&gt;</span>
<span class="tag">&lt;h2</span> <span class="attr">id</span>=<span class="value">"kontak"</span><span class="tag">&gt;</span>
    Kontak Kami
<span class="tag">&lt;/h2&gt;</span>

<span class="comment">&lt;!-- Link Email --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"mailto:admin@email.com"</span>
<span class="tag">&gt;</span>
    Kirim Email
<span class="tag">&lt;/a&gt;</span>

<span class="comment">&lt;!-- Link Telepon --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"tel:+628123456789"</span>
<span class="tag">&gt;</span>
    Hubungi Kami
<span class="tag">&lt;/a&gt;</span>
</code></pre>
            </div>
        </div>
                                    <!-- ===== PENJELASAN ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut Hyperlink
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;a&gt;</span> Tag utama untuk membuat hyperlink</li>
                                                <li><span>href</span> Menentukan alamat tujuan link</li>
                                                <li><span>target</span> Mengatur cara membuka link</li>
                                                <li><span>_blank</span> Membuka link di tab baru</li>
                                                <li><span>_self</span> Membuka link di tab yang sama (default)</li>
                                                <li><span>id / name</span> Penanda tujuan link ke bagian tertentu</li>
                                                <li><span>mailto:</span> Digunakan untuk membuat link email</li>
                                                <li><span>tel:</span> Digunakan untuk membuat link nomor telepon</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                - Link absolut menggunakan alamat URL lengkap<br>
                                                - Link relatif digunakan untuk file dalam satu website<br>
                                                - Atribut <b>name</b> masih didukung, namun <b>id</b> lebih disarankan di HTML5
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi8-live">

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

                            <!-- INFO -->
                            <div class="tab-pane fade text-center" id="materi8-info">
                                <div class="image-scroll-wrapper">
                                    <img src="{{ url('img/info-hyperlink.png') }}"
                                        class="image-scroll"
                                        alt="Hyperlink">
                                </div>
                                <p class="text-secondary mt-3 small">
                                    Implementasi Hyperlink dalam HTML
                                </p>
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

    const modal = document.getElementById('modalMateri8');
    if (!modal) return;

    const editor = document.getElementById('editorMateri8');
    const output = document.getElementById('outputMateri8');

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
