@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri5" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Integrasi Elemen Video
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
                                        data-bs-target="#materi5-video">
                                    🎥 Video
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi5-code">
                                    💻 Sintaks
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi5-live">
                                    ⚡ Live Output
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi5-info">
                                    🧠 Infografis
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- VIDEO -->
                            <div class="tab-pane fade show active" id="materi5-video">
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe
                                        src="https://www.youtube.com/embed/UbXUnaQ9hpc?si=3RUt97ffdD82qpQi
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
                                    Video penjelasan mengenai Integrasi Elemen Video dalam HTML
                                </p>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi5-code">
                                <div class="row g-3">

        <!-- ===== KODE ===== -->
        <div class="col-lg-6">
            <div class="code-wrapper h-100">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Tag Video HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;video</span>
    <span class="attr">src</span>=<span class="value">"bola.mp4"</span>
    <span class="attr">controls</span>
    <span class="attr">width</span>=<span class="value">"320"</span>
    <span class="attr">height</span>=<span class="value">"240"</span>
    <span class="attr">autoplay</span>
    <span class="attr">loop</span>
    <span class="attr">muted</span>
    <span class="attr">poster</span>=<span class="value">"poster.jpg"</span>
    <span class="attr">preload</span>=<span class="value">"auto"</span>
<span class="tag">&gt;</span>

    <span class="tag">&lt;source</span>
        <span class="attr">src</span>=<span class="value">"bola.mp4"</span>
        <span class="attr">type</span>=<span class="value">"video/mp4"</span>
    <span class="tag">/&gt;</span>

    Browser Anda tidak mendukung video HTML5.
<span class="tag">&lt;/video&gt;</span>
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
                                                <li><span>&lt;video&gt;</span> Tag untuk menampilkan video di HTML</li>
                                                <li><span>controls</span> Menampilkan tombol kontrol video</li>
                                                <li><span>autoplay</span> Video diputar otomatis saat halaman dibuka</li>
                                                <li><span>loop</span> Video diputar berulang-ulang</li>
                                                <li><span>muted</span> Mematikan suara video</li>
                                                <li><span>width</span> Mengatur lebar video</li>
                                                <li><span>height</span> Mengatur tinggi video</li>
                                                <li><span>poster</span> Gambar thumbnail sebelum video diputar</li>
                                                <li><span>preload</span> Mengatur pemuatan awal video</li>
                                                <li><span>&lt;source&gt;</span> Menentukan sumber file video</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong> <br>
                                                Untuk <b>autoplay</b>, browser modern biasanya
                                                <u>mewajibkan atribut muted</u>.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi5-live">

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
<video controls autoplay muted loop width="400" poster="poster.jpg">
    <source src="/video/animasi.mp4" type="video/mp4">
</video>
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

                            <!-- INFO -->
                            <div class="tab-pane fade text-center" id="materi5-info">
                                <div class="image-scroll-wrapper">
                                    <img src="{{ url('img/video.png') }}"
                                        class="image-scroll"
                                        alt="Integrasi Video">
                                </div>
                                <p class="text-secondary mt-3 small">
                                    Integrasi Video dalam HTML
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

});
</script>
