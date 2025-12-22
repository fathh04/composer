@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri3" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Pembuatan List Terstruktur
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
                                        data-bs-target="#materi3-video">
                                    🎥 Video
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi3-code">
                                    💻 Sintaks
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi3-live">
                                    ⚡ Live Output
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi3-info">
                                    🧠 Infografis
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- VIDEO -->
                            <div class="tab-pane fade show active" id="materi3-video">
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe
                                        src="https://www.youtube.com/embed/yqD0nd-uoJE?si=JxXubjA9wSCvpHKY
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
                                    Video penjelasan mengenai list dalam HTML
                                </p>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi3-code">
                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>List Terstruktur HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;h3&gt;</span>Unordered List (Tidak Berurutan)<span class="tag">&lt;/h3&gt;</span>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li&gt;</span>HTML<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>CSS<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>JavaScript<span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>

<span class="tag">&lt;h3&gt;</span>Ordered List (Berurutan)<span class="tag">&lt;/h3&gt;</span>
<span class="tag">&lt;ol&gt;</span>
    <span class="tag">&lt;li&gt;</span>Analisis Kebutuhan<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>Desain Website<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>Implementasi<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>Pengujian<span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ol&gt;</span>

<span class="tag">&lt;h3&gt;</span>Nested List (List Bertingkat)<span class="tag">&lt;/h3&gt;</span>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li&gt;</span>Frontend
        <span class="tag">&lt;ul&gt;</span>
            <span class="tag">&lt;li&gt;</span>HTML<span class="tag">&lt;/li&gt;</span>
            <span class="tag">&lt;li&gt;</span>CSS<span class="tag">&lt;/li&gt;</span>
        <span class="tag">&lt;/ul&gt;</span>
    <span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>Backend<span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>
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
                                                <li><span>&lt;ul&gt;</span> Membuat list tidak berurutan (bullet)</li>
                                                <li><span>&lt;ol&gt;</span> Membuat list berurutan (angka)</li>
                                                <li><span>&lt;li&gt;</span> Item atau isi dari list</li>
                                                <li><span>Nested List</span> List di dalam list (bertingkat)</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong>
                                                Gunakan <b>Ordered List</b> untuk langkah kerja,
                                                dan <b>Unordered List</b> untuk daftar tanpa urutan.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi3-live">

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri3" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Daftar Mata Pelajaran</h3>
<ul>
    <li>Pemrograman Web</li>
    <li>Basis Data</li>
    <li>Jaringan Komputer</li>
</ul>

<h3>Langkah Membuat Website</h3>
<ol>
    <li>Menentukan tujuan</li>
    <li>Membuat desain</li>
    <li>Menulis kode HTML</li>
</ol>
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
                                        <iframe id="outputMateri3" class="live-output"></iframe>
                                    </div>
                                </div>
                            </div>

                            <!-- INFO -->
                            <div class="tab-pane fade text-center" id="materi3-info">
                                <div class="image-scroll-wrapper">
                                    <img src="{{ url('img/list.png') }}"
                                        class="image-scroll"
                                        alt="Pembuatan List Terstruktur">
                                </div>
                                <p class="text-secondary mt-3 small">
                                    Pembuatan List Terstruktur
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
    const editor = document.getElementById('editorMateri3');
    const output = document.getElementById('outputMateri3');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri3');
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
