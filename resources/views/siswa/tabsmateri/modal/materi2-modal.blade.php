@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush

<div class="modal fade" id="modalMateri2" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Pemformatan Paragraph
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
                                        data-bs-target="#materi2-video">
                                    🎥 Video
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi2-code">
                                    💻 Sintaks
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi2-live">
                                    ⚡ Live Output
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi2-info">
                                    🧠 Infografis
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- VIDEO -->
                            <div class="tab-pane fade show active" id="materi2-video">
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe
                                        src="https://www.youtube.com/embed/hsB0yw_fj2g?si=4pFSwpIBJL06ZpJ6
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
                                    Video pemformatan paragraph
                                </p>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi2-code">
                            <div class="row g-3">
                            <!-- ===== KODE ===== -->
                            <div class="col-lg-6">
                            <div class="code-wrapper h-100">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Pemformatan Paragraph HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;p&gt;</span>
Ini adalah paragraf pertama.
Paragraf digunakan untuk menampilkan
teks dalam satu kesatuan.
<span class="tag">&lt;/p&gt;</span>

<span class="tag">&lt;p&gt;</span>
Ini paragraf kedua dengan<br>
pindah baris menggunakan tag <span class="tag">&lt;br&gt;</span>.
<span class="tag">&lt;/p&gt;</span>

<span class="tag">&lt;hr&gt;</span>

<span class="tag">&lt;p style="text-align:center;"&gt;</span>
Paragraf dengan teks rata tengah
<span class="tag">&lt;/p&gt;</span>

<span class="tag">&lt;blockquote&gt;</span>
Belajar HTML akan lebih mudah
jika langsung dipraktikkan.
<span class="tag">&lt;/blockquote&gt;</span>

<span class="tag">&lt;pre&gt;</span>
Teks di dalam pre
akan mempertahankan
spasi   dan   baris
<span class="tag">&lt;/pre&gt;</span>
</code></pre>

            </div>
        </div>

                            <!-- ===== PENJELASAN ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag Paragraf
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;p&gt;</span> Membuat paragraf teks</li>
                                                <li><span>&lt;br&gt;</span> Pindah baris tanpa paragraf baru</li>
                                                <li><span>&lt;hr&gt;</span> Garis pemisah antar paragraf</li>
                                                <li><span>text-align</span> Mengatur perataan teks paragraf</li>
                                                <li><span>&lt;blockquote&gt;</span> Menampilkan kutipan</li>
                                                <li><span>&lt;pre&gt;</span> Menampilkan teks dengan format asli</li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi2-live">

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri2" class="live-editor">
<h1>Pemformatan Paragraph HTML</h1>

<p>
Ini adalah paragraf pertama.
Paragraf digunakan untuk menampilkan teks
dalam satu kesatuan yang rapi.
</p>

<p>
Ini paragraf kedua.<br>
Baris ini menggunakan tag &lt;br&gt;
untuk pindah baris tanpa paragraf baru.
</p>

<hr>

<p style="text-align: center;">
Paragraf ini diratakan ke tengah
</p>

<p style="text-align: justify;">
Paragraf ini menggunakan perataan justify
agar teks terlihat rata di kiri dan kanan.
</p>

<blockquote>
"Belajar HTML akan lebih mudah
jika langsung dipraktikkan."
</blockquote>

<pre>
Teks di dalam tag pre
akan mempertahankan
spasi   dan   baris
seperti aslinya.
</pre>
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

                                        <iframe id="outputMateri2" class="live-output"></iframe>

                                    </div>

                                </div>

                            </div>

                            <!-- INFO -->
                            <div class="tab-pane fade text-center" id="materi2-info">
                                <div class="image-scroll-wrapper">
                                    <img src="{{ url('img/pemformatan paragraf.png') }}"
                                        class="image-scroll"
                                        alt="Struktur Pemformatan Paragraf">
                                </div>
                                <p class="text-secondary mt-3 small">
                                    Struktur Pemformatan Paragraph
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
    const editor = document.getElementById('editorMateri2');
    const output = document.getElementById('outputMateri2');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri2');
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
