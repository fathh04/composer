@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri6" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Integrasi Elemen Audio
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
                                        data-bs-target="#materi6-video">
                                    🎥 Video
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi6-code">
                                    💻 Sintaks
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi6-live">
                                    ⚡ Live Output
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi6-info">
                                    🧠 Infografis
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- VIDEO -->
                            <div class="tab-pane fade show active" id="materi6-video">
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe
                                        src="https://www.youtube.com/embed/AYfI3EVsrSc?si=rdAh4orG3FUkY-rU
                                            ?rel=0
                                            &modestbranding=1
                                            &controls=1
                                            &fs=1"
                                        class="w-100 rounded-4"
                                        style="aspect-ratio:16/9"
                                        loading="lazy"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <p class="text-secondary small">
                                    Video penjelasan mengenai Integrasi Elemen Audio dalam HTML
                                </p>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi6-code">
                                <div class="row g-3">

        <!-- ===== KODE ===== -->
        <div class="col-lg-6">
            <div class="code-wrapper h-100">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Tag Audio HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;audio</span>
    <span class="attr">src</span>=<span class="value">"audio-belajar.mp3"</span>
    <span class="attr">controls</span>
    <span class="attr">autoplay</span>
    <span class="attr">loop</span>
    <span class="attr">muted</span>
    <span class="attr">preload</span>=<span class="value">"auto"</span>
<span class="tag">&gt;</span>

    <span class="tag">&lt;source</span>
        <span class="attr">src</span>=<span class="value">"audio-belajar.mp3"</span>
        <span class="attr">type</span>=<span class="value">"audio/mpeg"</span>
    <span class="tag">/&gt;</span>

    Browser Anda tidak mendukung audio HTML5.
<span class="tag">&lt;/audio&gt;</span>
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
                                                <li><span>&lt;audio&gt;</span> Tag untuk menampilkan audio di HTML</li>
                                                <li><span>controls</span> Menampilkan kontrol audio (play, pause, volume)</li>
                                                <li><span>autoplay</span> Memutar audio secara otomatis saat halaman dibuka</li>
                                                <li><span>loop</span> Mengulang audio setelah selesai diputar</li>
                                                <li><span>muted</span> Mematikan suara audio</li>
                                                <li><span>preload</span> Mengatur pemuatan awal audio</li>
                                                <li><span>src</span> Menentukan lokasi file audio</li>
                                                <li><span>&lt;source&gt;</span> Menentukan sumber audio dan tipe filenya</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                Atribut <b>autoplay</b> pada audio biasanya
                                                <u>harus disertai muted</u> agar dapat berjalan di browser modern.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi6-live">

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri6" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Menampilkan Audio di HTML</h3>
<audio controls>
    <source src="/audio/musik.mp3" type="audio/mpeg">
    Browser Anda tidak mendukung pemutaran audio.
</audio>

<h3>Contoh Audio dengan Beberapa Atribut</h3>
<audio controls autoplay muted loop>
    <source src="/audio/musik.mp3" type="audio/mpeg">
</audio>
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
                                        <iframe id="outputMateri6" class="live-output"></iframe>
                                    </div>
                                </div>
                            </div>

                            <!-- INFO -->
                            <div class="tab-pane fade text-center" id="materi6-info">
                                <div class="image-scroll-wrapper">
                                    <img src="{{ url('img/audio.png') }}"
                                        class="image-scroll"
                                        alt="Integrasi Audio">
                                </div>
                                <p class="text-secondary mt-3 small">
                                    Integrasi Audio dalam HTML
                                </p>
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
    const editor = document.getElementById('editorMateri6');
    const output = document.getElementById('outputMateri6');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri6');
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

});
</script>
