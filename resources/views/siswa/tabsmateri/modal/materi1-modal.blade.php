@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri1" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Pemformatan Teks
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
                                        data-bs-target="#materi1-video">
                                    🎥 Video
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi1-code">
                                    💻 Sintaks
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi1-live">
                                    ⚡ Live Output
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi1-info">
                                    🧠 Infografis
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- VIDEO -->
                            <div class="tab-pane fade show active" id="materi1-video">
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe
                                        class="w-100 rounded-4 yt-video"
                                        src="https://www.youtube.com/embed/D15VWtvOFYE?rel=0&modestbranding=1&controls=1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <p class="text-secondary small">
                                    Video pemformatan teks
                                </p>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi1-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Pemformatan Teks HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;p&gt;</span>
Ini teks <span class="tag">&lt;b&gt;</span>tebal<span class="tag">&lt;/b&gt;</span>,
<span class="tag">&lt;strong&gt;</span>penting<span class="tag">&lt;/strong&gt;</span>,
<span class="tag">&lt;i&gt;</span>miring<span class="tag">&lt;/i&gt;</span>,
dan <span class="tag">&lt;em&gt;</span>ditekankan<span class="tag">&lt;/em&gt;</span>.
<span class="tag">&lt;/p&gt;</span>

<span class="tag">&lt;p&gt;</span>
Teks <span class="tag">&lt;small&gt;</span>kecil<span class="tag">&lt;/small&gt;</span>,
H<span class="tag">&lt;sub&gt;</span>2<span class="tag">&lt;/sub&gt;</span>O,
X<span class="tag">&lt;sup&gt;</span>2<span class="tag">&lt;/sup&gt;</span>,
<span class="tag">&lt;del&gt;</span>salah<span class="tag">&lt;/del&gt;</span>,
dan <span class="tag">&lt;mark&gt;</span>ditandai<span class="tag">&lt;/mark&gt;</span>.
<span class="tag">&lt;/p&gt;</span>
</code></pre>
                                        </div>
                                    </div>

                                    <!-- ===== PENJELASAN ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;b&gt;</span> Menebalkan teks (visual)</li>
                                                <li><span>&lt;strong&gt;</span> Teks penting (semantic)</li>
                                                <li><span>&lt;i&gt;</span> Teks miring (visual)</li>
                                                <li><span>&lt;em&gt;</span> Penekanan teks</li>
                                                <li><span>&lt;small&gt;</span> Ukuran teks kecil</li>
                                                <li><span>&lt;sub&gt;</span> Subscript (H₂O)</li>
                                                <li><span>&lt;sup&gt;</span> Superscript (X²)</li>
                                                <li><span>&lt;del&gt;</span> Teks dicoret</li>
                                                <li><span>&lt;mark&gt;</span> Teks disorot</li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi1-live">

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

                            <!-- INFO -->
                            <div class="tab-pane fade text-center" id="materi1-info">
                                <div class="image-scroll-wrapper">
                                    <img src="{{ url('img/pemformatan teks.png') }}"
                                        class="image-scroll"
                                        alt="Struktur Pemformatan Teks">
                                </div>
                                <p class="text-secondary mt-3 small">
                                    Struktur Pemformatan Teks
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

    const modal = document.getElementById('modalMateri1');
    if (!modal) return;

    const editor = document.getElementById('editorMateri1');
    const output = document.getElementById('outputMateri1');

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

    /* ==============================
       STOP YOUTUBE (RESET IFRAME)
    ============================== */
    function stopYouTubeVideos() {
        document.querySelectorAll('iframe[src*="youtube.com"]').forEach(iframe => {
            iframe.src = iframe.src; // reset = STOP video
        });
    }

    /* ==============================
       PINDAH TAB BOOTSTRAP
    ============================== */
    document.querySelectorAll('[data-bs-toggle="pill"], [data-bs-toggle="tab"]').forEach(tab => {
        tab.addEventListener('shown.bs.tab', stopYouTubeVideos);
    });

    /* ==============================
       MODAL DITUTUP
    ============================== */
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', stopYouTubeVideos);
    });

    /* ==============================
       TAB BROWSER TIDAK AKTIF
    ============================== */
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopYouTubeVideos();
        }
    });

});
</script>

@endpush

