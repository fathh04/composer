@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri9" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Penggunaan Form
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
                                        data-bs-target="#materi9-video">
                                    🎥 Video
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi9-code">
                                    💻 Sintaks
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi9-live">
                                    ⚡ Live Output
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi9-info">
                                    🧠 Infografis
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- VIDEO -->
                            <div class="tab-pane fade show active" id="materi9-video">
                                <div class="ratio ratio-16x9 mb-3">
                                    <iframe
                                        src="https://www.youtube.com/embed/CBuFc2nGEDo?si=MEopqdBuXRvNFgUp
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
                                    Video penjelasan mengenai penggunaan form dengan HTML
                                </p>
                            </div>

                            <!-- =========================
                            MATERI 9 - FORM HTML
                            ========================= -->
                            <div class="tab-pane fade" id="materi9-code">
                                <div class="row g-3">
        <!-- ===== KODE ===== -->
        <div class="col-lg-6">
            <div class="code-wrapper h-100">
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Contoh Form HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;form</span>
    <span class="attr">action</span>=<span class="value">"proses.php"</span>
    <span class="attr">method</span>=<span class="value">"post"</span>
<span class="tag">&gt;</span>

<span class="comment">&lt;!-- Input Text --&gt;</span>
<span class="tag">&lt;label&gt;</span>Nama:<span class="tag">&lt;/label&gt;</span><br>
<span class="tag">&lt;input</span>
    <span class="attr">type</span>=<span class="value">"text"</span>
    <span class="attr">name</span>=<span class="value">"nama"</span>
    <span class="attr">size</span>=<span class="value">"30"</span>
<span class="tag">&gt;</span><br><br>

<span class="comment">&lt;!-- Input Radio --&gt;</span>
<span class="tag">&lt;label&gt;</span>Jenis Kelamin:<span class="tag">&lt;/label&gt;</span><br>
<span class="tag">&lt;input</span>
    <span class="attr">type</span>=<span class="value">"radio"</span>
    <span class="attr">name</span>=<span class="value">"jk"</span>
    <span class="attr">value</span>=<span class="value">"L"</span>
    <span class="attr">checked</span>
<span class="tag">&gt;</span> Laki-laki
<span class="tag">&lt;input</span>
    <span class="attr">type</span>=<span class="value">"radio"</span>
    <span class="attr">name</span>=<span class="value">"jk"</span>
    <span class="attr">value</span>=<span class="value">"P"</span>
<span class="tag">&gt;</span> Perempuan<br><br>

<span class="comment">&lt;!-- Select --&gt;</span>
<span class="tag">&lt;label&gt;</span>Hobi:<span class="tag">&lt;/label&gt;</span><br>
<span class="tag">&lt;select</span>
    <span class="attr">name</span>=<span class="value">"hobi"</span>
    <span class="attr">size</span>=<span class="value">"3"</span>
    <span class="attr">multiple</span>
<span class="tag">&gt;</span>
    <span class="tag">&lt;option&gt;</span>Membaca<span class="tag">&lt;/option&gt;</span>
    <span class="tag">&lt;option&gt;</span>Olahraga<span class="tag">&lt;/option&gt;</span>
    <span class="tag">&lt;option&gt;</span>Musik<span class="tag">&lt;/option&gt;</span>
<span class="tag">&lt;/select&gt;</span><br><br>

<span class="comment">&lt;!-- Textarea --&gt;</span>
<span class="tag">&lt;label&gt;</span>Alamat:<span class="tag">&lt;/label&gt;</span><br>
<span class="tag">&lt;textarea</span>
    <span class="attr">name</span>=<span class="value">"alamat"</span>
    <span class="attr">cols</span>=<span class="value">"30"</span>
    <span class="attr">rows</span>=<span class="value">"4"</span>
<span class="tag">&gt;&lt;/textarea&gt;</span><br><br>

<span class="comment">&lt;!-- Submit --&gt;</span>
<span class="tag">&lt;input</span>
    <span class="attr">type</span>=<span class="value">"submit"</span>
    <span class="attr">value</span>=<span class="value">"Kirim"</span>
<span class="tag">&gt;</span>

<span class="tag">&lt;/form&gt;</span>
</code></pre>
            </div>
        </div>
                                    <!-- ===== PENJELASAN ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut Form HTML
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;form&gt;</span> Wadah utama untuk elemen input</li>
                                                <li><span>action</span> Menentukan tujuan pengiriman data form</li>
                                                <li><span>method</span> Metode pengiriman data <b>GET</b> / <b>POST</b></li>

                                                <li><span>&lt;input&gt;</span> Elemen input data pengguna</li>
                                                <li><span>type</span> Jenis input (text, radio, submit, dll)</li>
                                                <li><span>name</span> Nama data yang dikirim ke server</li>
                                                <li><span>size</span> Panjang tampilan input</li>
                                                <li><span>value</span> Nilai input yang dikirim</li>
                                                <li><span>checked</span> Menandai pilihan default</li>

                                                <li><span>&lt;select&gt;</span> Membuat daftar pilihan</li>
                                                <li><span>multiple</span> Memungkinkan memilih lebih dari satu</li>

                                                <li><span>&lt;textarea&gt;</span> Input teks panjang</li>
                                                <li><span>cols</span> Lebar textarea</li>
                                                <li><span>rows</span> Tinggi textarea</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                - Gunakan <b>POST</b> untuk data sensitif<br>
                                                - Atribut <b>name</b> wajib agar data bisa diproses server<br>
                                                - <b>checked</b> hanya berlaku untuk radio & checkbox
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi9-live">

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

    Jenis Kelamin:<br>
    <input type="radio" name="jk" value="L"> Laki-laki
    <input type="radio" name="jk" value="P"> Perempuan
    <br><br>

    Pesan:<br>
    &lt;textarea name="pesan" rows="4" cols="30"&gt;&lt;/textarea&gt;
    <br><br>

    <input type="submit" value="Kirim">
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

                            <!-- INFO -->
                            <div class="tab-pane fade text-center" id="materi9-info">
                                <div class="image-scroll-wrapper">
                                    <img src="{{ url('img/info-form.png') }}"
                                        class="image-scroll"
                                        alt="form">
                                </div>
                                <p class="text-secondary mt-3 small">
                                    penggunaan Form dengan HTML
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
    const editor = document.getElementById('editorMateri9');
    const output = document.getElementById('outputMateri9');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri9');
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
