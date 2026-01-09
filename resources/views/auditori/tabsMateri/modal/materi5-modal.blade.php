@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri5" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Integrasi Video
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
                                        data-bs-target="#materi5-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi5-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi5-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi5-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Integrasi Video dalam HTML</small>
                                        </div>
                                    </div>

                                    <audio
                                        id="materiAudio5"
                                        controls
                                        class="w-100 mb-3"
                                        preload="metadata"
                                        playsinline
                                    >
                                        <!-- FORMAT UTAMA -->
                                        <source src="{{ url('audio/video.mp3') }}" type="audio/mpeg">

                                        <!-- FALLBACK -->
                                        <source src="{{ url('audio/video.ogg') }}" type="audio/ogg">

                                        <!-- OPSI TERAKHIR -->
                                        <source src="{{ url('audio/video.wav') }}" type="audio/wav">

                                        Browser Anda tidak mendukung pemutaran audio.
                                    </audio>
                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                            <strong>Speaker 1:</strong> Halo semuanya! Selamat datang kembali di HTML5Virtual, tempat ngobrolin web development tanpa bikin kepala ngebul. Aku Dina, dan hari ini kita bakal bahas topik yang sering bikin website jadi lebih hidup… yup, integrasi video di HTML. <br>
                                            <strong>Speaker 2:</strong> Halo Dina, halo juga pendengar semua. Aku Raka, dan bener banget, video itu ibarat “vitamin visual” buat website. Kalau dipakai dengan tepat, bisa bikin user betah lama-lama.<br>
                                            <strong>Speaker 1:</strong> Oke Rak, kita mulai dari yang paling dasar dulu. Kalau mau nampilin video di HTML, senjatanya apa sih?<br>
                                            <strong>Speaker 2:</strong> Tag utamanya adalah &lt;video&gt;. Tag ini khusus dipakai buat menampilkan video langsung di halaman web tanpa plugin tambahan.<br>
                                            <strong>Speaker 1:</strong> Nah, tapi kalau cuma pakai tag &lt;video&gt; doang, videonya bisa dikontrol nggak sih?<br>
                                            <strong>Speaker 2:</strong> Bisa banget, asal kita tambahin atribut controls. Atribut ini bakal nampilin tombol play, pause, volume, sampai fullscreen. Tanpa controls, user nggak bisa ngapa-ngapain ke videonya.<br>
                                            <strong>Speaker 1:</strong> Menarik. Terus aku sering lihat video yang langsung jalan sendiri pas halaman dibuka. Itu pakai apa?<br>
                                            <strong>Speaker 2:</strong> Itu pakai atribut autoplay. Jadi begitu halaman kebuka, videonya langsung diputar otomatis. Tapi biasanya autoplay dikombinasikan sama muted, karena browser modern sering ngeblok video autoplay yang bersuara.<br>
                                            <strong>Speaker 1:</strong> Oh jadi makanya banyak video autoplay tapi tanpa suara ya?<br>
                                            <strong>Speaker 2:</strong> Iya, betul banget. Atribut muted bikin suara video mati, tapi justru bikin autoplay lebih aman dan konsisten di berbagai browser.<br>
                                            <strong>Speaker 1:</strong> Kalau misalnya mau videonya muter terus tanpa henti, itu pakai apa?<br>
                                            <strong>Speaker 2:</strong> Pakai atribut loop. Begitu video selesai, dia bakal muter lagi dari awal. Cocok buat video background atau animasi pendek.<br>
                                            <strong>Speaker 1:</strong> Aku juga pernah dengar atribut preload. Itu fungsinya apa sih?<br>
                                            <strong>Speaker 2:</strong> preload ngatur apakah video dimuat sejak awal halaman dibuka atau tidak. Ada beberapa nilai, tapi intinya kita bisa ngatur apakah browser perlu langsung memuat video atau nunggu user nge-play dulu.<br>
                                            <strong>Speaker 1:</strong> Wah, lengkap juga ya ternyata. Jadi intinya, dengan tag &lt;video&gt; dan atribut-atribut ini, kita bisa bikin video yang interaktif dan user-friendly di website.<br>
                                            <strong>Speaker 2:</strong> Betul banget. Kuncinya bukan cuma bisa pasang video, tapi juga ngerti kapan pakai autoplay, kapan pakai controls, dan gimana biar performa website tetap aman.<br>
                                            <strong>Speaker 1:</strong> Siap! Makasih banyak Raka buat penjelasannya. Dan buat kalian yang lagi belajar HTML, jangan cuma dengerin—langsung cobain di kode kalian ya!<br>
                                            <strong>Speaker 2:</strong> Setuju. Karena ngoding itu paling nempel kalau langsung praktik.<br>
                                            <strong>Speaker 1:</strong> Oke, segitu dulu episode kali ini. Sampai ketemu di podcast berikutnya. Happy Coding.<br>
                                        </p>
                                    </details>

                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi5-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio5').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio
                                                        id="walkthroughAudio5"
                                                        preload="metadata"
                                                        playsinline
                                                    >
                                                        <!-- FORMAT UTAMA -->
                                                        <source src="/audio/video-kode.mp3" type="audio/mpeg">

                                                        <!-- FALLBACK -->
                                                        <source src="/audio/video-kode.ogg" type="audio/ogg">

                                                        <!-- OPSI TERAKHIR -->
                                                        <source src="/audio/video-kode.wav" type="audio/wav">

                                                        Browser Anda tidak mendukung audio HTML5.
                                                    </audio>
                                            </div>
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
                                    <!-- ===== PENJELASAN TAG ===== -->
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

    const modal = document.getElementById('modalMateri5');
    if (!modal) return;

    const editor = document.getElementById('editorMateri5');
    const output = document.getElementById('outputMateri5');

    /* ==============================
       LIVE PREVIEW
    ============================== */
    function updatePreview() {
        output.srcdoc = editor.value;
    }

    editor?.addEventListener('input', updatePreview);
    updatePreview();

    /* ==============================
       STOP SEMUA MEDIA
    ============================== */
    function stopAllMedia() {

        // audio + video di modal
        modal.querySelectorAll('audio, video').forEach(media => {
            media.pause();
            media.currentTime = 0;
        });

        // audio + video di iframe (LIVE)
        try {
            const iframeDoc = output?.contentDocument || output?.contentWindow?.document;
            iframeDoc?.querySelectorAll('audio, video').forEach(media => {
                media.pause();
                media.currentTime = 0;
            });
        } catch (e) {}
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

    // pindah tab (Audio / Code / Live)
    modal.querySelectorAll('[data-bs-toggle="pill"]').forEach(tab => {
        tab.addEventListener('shown.bs.tab', stopAllMedia);
    });

    // modal ditutup
    modal.addEventListener('hidden.bs.modal', () => {
        stopAllMedia();

        if (document.fullscreenElement) {
            document.exitFullscreen();
        }

        modal.querySelectorAll('iframe').forEach(i => i.src = i.src);
    });

    // pindah tab browser
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAllMedia();
        }
    });

});
</script>
@endpush
