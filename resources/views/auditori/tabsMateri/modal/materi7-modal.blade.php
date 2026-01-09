@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri7" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Integrasi Gambar
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
                                        data-bs-target="#materi7-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi7-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi7-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi7-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Integrasi Gambar dalam HTML</small>
                                        </div>
                                    </div>

                                    <audio
                                        id="materiAudio7"
                                        controls
                                        class="w-100 mb-3"
                                        preload="metadata"
                                        playsinline
                                    >
                                        <!-- FORMAT UTAMA -->
                                        <source src="{{ url('audio/materi7.mp3') }}" type="audio/mpeg">

                                        <!-- FALLBACK -->
                                        <source src="{{ url('audio/materi7.ogg') }}" type="audio/ogg">

                                        <!-- OPSI TERAKHIR -->
                                        <source src="{{ url('audio/materi7.wav') }}" type="audio/wav">

                                        Browser Anda tidak mendukung pemutaran audio HTML5.
                                    </audio>

                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                            <strong>Speaker 1:</strong> Halo semuanya! Selamat datang kembali di HTML5Virtual. Aku Dina, dan hari ini kita bakal bahas sesuatu yang bikin website jadi jauh lebih hidup. Bersama aku sudah ada narasumber kita, Raka. Halo Raka! <br>
                                            <strong>Speaker 2:</strong> Halo Dina, halo juga teman-teman pendengar. Senang banget bisa ngobrol lagi, apalagi topiknya soal gambar di HTML. Ini salah satu elemen penting di web.<br>
                                            <strong>Speaker 1:</strong> Setuju banget. Kalau ngomongin website tanpa gambar, rasanya kayak baca buku tanpa ilustrasi ya. Kenapa sih gambar itu penting dalam halaman web?<br>
                                            <strong>Speaker 2:</strong> Karena tanpa gambar, halaman web kelihatan kaku dan monoton. Gambar bisa menarik perhatian, membantu menyampaikan informasi, dan bikin pengunjung betah. Hampir semua website modern pasti memanfaatkan gambar, bahkan dikombinasikan dengan video dan audio.<br>
                                            <strong>Speaker 1:</strong> Nah, kalau di HTML sendiri, sebenarnya gimana sih cara menampilkan gambar?<br>
                                            <strong>Speaker 2:</strong> Di HTML itu simpel banget. Kita pakai tag khusus namanya &lt;img&gt;. Uniknya, tag ini termasuk tag tunggal, jadi tidak punya tag penutup.<br>
                                            <strong>Speaker 1:</strong> Oh jadi beda ya dengan &lt;p&gt; atau &lt;div&gt; yang harus ditutup. Terus atribut paling penting dari &lt;img&gt; apa?<br>
                                            <strong>Speaker 2:</strong> Yang paling penting adalah atribut src. Ini kependekan dari source, fungsinya buat menentukan lokasi dan nama file gambar yang mau ditampilkan di halaman web.<br>
                                            <strong>Speaker 1:</strong> Kalau misalnya gambarnya nggak muncul, entah karena file-nya hilang atau koneksi lambat, ada solusi di HTML?<br>
                                            <strong>Speaker 2:</strong> ada. Kita bisa pakai atribut alt. Atribut ini menampilkan teks alternatif kalau gambar gagal dimuat. Selain itu, alt juga penting untuk aksesibilitas dan SEO.<br>
                                            <strong>Speaker 1:</strong> Menarik. Terus kalau ukuran gambar terlalu besar atau terlalu kecil, bisa diatur nggak langsung dari HTML?<br>
                                            <strong>Speaker 2:</strong> Bisa banget. Kita tinggal pakai atribut width dan height untuk mengatur lebar dan tinggi gambar. Tapi tetap disarankan proporsional biar gambarnya nggak kelihatan gepeng atau melar.<br>
                                            <strong>Speaker 1:</strong> Aku pernah lihat gambar di website ada garis pinggirnya. Itu pakai apa?<br>
                                            <strong>Speaker 2:</strong> Itu biasanya pakai atribut border. Dengan atribut ini, kita bisa menambahkan garis tepi pada gambar, meskipun sekarang lebih sering diatur lewat CSS.<br>
                                            <strong>Speaker 1:</strong> Kalau soal posisi gambar, misalnya mau di kiri atau kanan teks, bisa juga ya?<br>
                                            <strong>Speaker 2:</strong> Bisa. Ada atribut align yang bisa mengatur posisi gambar seperti left atau right. Selain itu, ada juga hspace dan vspace untuk memberi jarak horizontal dan vertikal di sekitar gambar supaya tidak terlalu mepet dengan teks.<br>
                                            <strong>Speaker 1:</strong> Wah lengkap juga ya ternyata. Jadi sebenarnya HTML sudah nyiapin semuanya, tinggal kita tahu cara pakainya.<br>
                                            <strong>Speaker 2:</strong> Betul. Tinggal dipraktikkan aja. Misalnya bikin galeri foto, halaman portofolio, atau menampilkan gambar produk. Kalau pemakaian &lt;img&gt; nya rapi, tampilan web juga jadi lebih bagus.<br>
                                            <strong>Speaker 1:</strong> Oke, jadi kesimpulannya, elemen gambar itu bukan cuma hiasan, tapi bagian penting dari pengalaman di website.<br>
                                            <strong>Speaker 2:</strong> Tepat sekali. Dengan pemilihan gambar yang tepat dan penggunaan atribut &lt;img&gt; yang benar, halaman web bisa jadi jauh lebih menarik dan informatif.<br>
                                            <strong>Speaker 1:</strong> Siap! Terima kasih banyak Raka atas penjelasannya. Buat pendengar, jangan lupa langsung praktik pakai tag &lt;img&gt; di HTML kalian ya. Happy Coding.<br>
                                        </p>
                                    </details>
                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi7-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio7').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio
                                                    id="walkthroughAudio7"
                                                    preload="metadata"
                                                    playsinline
                                                >
                                                    <!-- FORMAT UTAMA -->
                                                    <source src="/audio/materi7-kode.mp3" type="audio/mpeg">

                                                    <!-- FALLBACK -->
                                                    <source src="/audio/materi7-kode.ogg" type="audio/ogg">

                                                    <!-- OPSI TERAKHIR -->
                                                    <source src="/audio/materi7-kode.wav" type="audio/wav">

                                                    Browser Anda tidak mendukung pemutaran audio HTML5.
                                                </audio>
                                            </div>
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Tag Gambar HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;img</span>
    <span class="attr">src</span>=<span class="value">"/img/contoh-gambar.jpg"</span>
    <span class="attr">alt</span>=<span class="value">"Contoh Gambar HTML"</span>
    <span class="attr">width</span>=<span class="value">"300"</span>
    <span class="attr">height</span>=<span class="value">"200"</span>
    <span class="attr">border</span>=<span class="value">"2"</span>
    <span class="attr">align</span>=<span class="value">"left"</span>
    <span class="attr">hspace</span>=<span class="value">"10"</span>
    <span class="attr">vspace</span>=<span class="value">"10"</span>
<span class="tag">/&gt;</span>
</code></pre>
            </div>
        </div>
                                    <!-- ===== PENJELASAN TAG ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">
                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;img&gt;</span> Tag untuk menampilkan gambar di HTML (tidak memiliki tag penutup)</li>
                                                <li><span>src</span> Menentukan lokasi dan nama file gambar</li>
                                                <li><span>alt</span> Teks alternatif jika gambar tidak dapat ditampilkan</li>
                                                <li><span>width</span> Mengatur lebar gambar</li>
                                                <li><span>height</span> Mengatur tinggi gambar</li>
                                                <li><span>border</span> Memberi garis tepi pada gambar</li>
                                                <li><span>align</span> Mengatur posisi gambar (left, right, top, middle, bottom)</li>
                                                <li><span>hspace</span> Memberi jarak horizontal di sekitar gambar</li>
                                                <li><span>vspace</span> Memberi jarak vertikal di sekitar gambar</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                Element <b>img</b> tidak mempunyai tag penutup, namun mempunyai attribute.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi7-live">

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri7" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Menampilkan Gambar di HTML</h3>
<img src="/img/syntax.png" alt="Contoh gambar HTML">

<h3>Contoh Gambar dengan Beberapa Atribut</h3>
<img src="/img/syntax.png"
     alt="Contoh gambar dengan atribut"
     width="300"
     height="200"
     border="2">
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

                                        <iframe id="outputMateri7" class="live-output"></iframe>
                                    </div>
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

    const modal = document.getElementById('modalMateri7');
    if (!modal) return;

    /* ==============================
       LIVE OUTPUT
    ============================== */
    const editor = document.getElementById('editorMateri7');
    const output = document.getElementById('outputMateri7');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
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
        fullscreenBtn.textContent =
            document.fullscreenElement ? '⤫' : '⛶';
    });

    /* ==============================
       AUDIO CONTROL
    ============================== */
    const audios = modal.querySelectorAll('audio');

    function stopAllAudio() {
        audios.forEach(audio => {
            audio.pause();
            audio.currentTime = 0;
        });
    }

    // stop audio saat tab pindah
    modal.querySelectorAll('[data-bs-toggle="pill"]').forEach(tab => {
        tab.addEventListener('shown.bs.tab', stopAllAudio);
    });

    // stop audio saat modal ditutup
    modal.addEventListener('hidden.bs.modal', () => {
        stopAllAudio();

        if (document.fullscreenElement) {
            document.exitFullscreen();
        }

        modal.querySelectorAll('iframe').forEach(i => i.src = i.src);
    });

    // stop audio saat pindah tab browser
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAllAudio();
        }
    });

});
</script>
@endpush
