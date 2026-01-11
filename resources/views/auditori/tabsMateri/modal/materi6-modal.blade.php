@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri6" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Integrasi Audio
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
                                        data-bs-target="#materi6-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi6-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi6-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi6-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Integrasi Audio dalam HTML</small>
                                        </div>
                                    </div>

                                    <audio
                                        id="materiAudio6"
                                        class="w-100 mb-3"
                                        controls
                                        preload="auto"
                                        playsinline
                                    >
                                        <!-- FORMAT UTAMA -->
                                        <source src="{{ url('audio/materi6.mp3') }}" type="audio/mpeg">

                                        <!-- FALLBACK -->
                                        <source src="{{ url('audio/materi6.ogg') }}" type="audio/ogg">

                                        <!-- OPSI TERAKHIR -->
                                        <source src="{{ url('audio/materi6.wav') }}" type="audio/wav">

                                        Browser Anda tidak mendukung pemutaran audio HTML5.
                                    </audio>

                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                            <strong>Speaker 1:</strong> Halo semuanya! Selamat datang lagi di HTML5Virtual. Aku Dina, dan hari ini kita bakal bahas sesuatu yang sering kita dengar tapi jarang kita sadari di website… yup, audio di HTML. Bersama aku sudah ada narasumber andalan kita. Halo Raka! <br>
                                            <strong>Speaker 2:</strong> Halo Dina, halo juga teman-teman pendengar. Aku Raka. Wah, audio ini topik menarik sih, karena dulu ribet banget, sekarang malah jauh lebih simpel.<br>
                                            <strong>Speaker 1:</strong> Nah itu dia. Dulu aku ingat banget, kalau mau pasang suara di website tuh harus pakai Flash atau plugin aneh-aneh. Sekarang gimana ceritanya?<br>
                                            <strong>Speaker 2:</strong> Betul. Sebelum HTML5, audio biasanya diputar lewat plugin seperti Flash. Masalahnya, tiap browser punya plugin berbeda, belum lagi isu keamanan. Nah, HTML5 datang dengan solusi lewat elemen &lt;audio&gt;.<br>
                                            <strong>Speaker 1:</strong> Jadi &lt;audio&gt; ini semacam standar baru ya?<br>
                                            <strong>Speaker 2:</strong> Iya, &lt;audio&gt; adalah elemen HTML5 yang menyediakan cara standar untuk menanamkan file audio langsung di halaman web, tanpa plugin tambahan.<br>
                                            <strong>Speaker 1:</strong> Kalau aku mau pasang audio, format file apa aja yang bisa dipakai?<br>
                                            <strong>Speaker 2:</strong> Secara umum, HTML5 mendukung MP3, WAV, dan OGG. Tapi penting diingat, tidak semua browser mendukung semua format.<br>
                                            <strong>Speaker 1:</strong> Nah ini nih yang sering bikin bingung. Bisa dijelasin satu-satu?<br>
                                            <strong>Speaker 2:</strong> Format OGG didukung oleh Mozilla Firefox, Opera, dan Google Chrome.Format MP3 didukung oleh Google Chrome dan Safari. Sedangkan WAV didukung oleh Mozilla Firefox dan Opera. Makanya, kadang kita perlu nyediain lebih dari satu format audio.<br>
                                            <strong>Speaker 1:</strong> Dan itu perannya tag &lt;source&gt; ya?<br>
                                            <strong>Speaker 2:</strong> Tepat sekali. Di dalam tag &lt;audio&gt;, kita bisa pakai beberapa tag &lt;source&gt; untuk menyertakan audio dengan format berbeda, supaya lebih kompatibel di berbagai browser.<br>
                                            <strong>Speaker 1:</strong> Oke, sekarang ke atribut. Kalau mau ada tombol play dan pause, atribut apa yang wajib?<br>
                                            <strong>Speaker 2:</strong> Itu wajib pakai controls. Atribut ini menampilkan kontrol audio seperti play, pause, dan volume. Tanpa controls, user nggak bisa ngontrol audionya.<br>
                                            <strong>Speaker 1:</strong> Kalau audionya mau langsung muter pas halaman dibuka?<br>
                                            <strong>Speaker 2:</strong> Pakai atribut autoplay. Tapi sama seperti video, autoplay sering dikombinasikan dengan muted, supaya browser nggak ngeblok pemutaran otomatis.<br>
                                            <strong>Speaker 1:</strong> Terus kalau audionya mau diputar berulang-ulang, cocok buat backsound misalnya?<br>
                                            <strong>Speaker 2:</strong> Itu tinggal tambahin loop. Jadi setelah audio selesai, dia langsung muter lagi dari awal.<br>
                                            <strong>Speaker 1:</strong> Aku lihat juga ada atribut preload. Itu ngaruh ke performa ya?<br>
                                            <strong>Speaker 2:</strong> Iya. preload ngatur apakah audio dimuat sejak awal halaman dibuka atau nunggu user interaksi dulu. Ini penting buat optimasi kecepatan website.<br>
                                            <strong>Speaker 1:</strong> Kalau atribut src sendiri fungsinya apa?<br>
                                            <strong>Speaker 2:</strong> src digunakan untuk menentukan lokasi file audio. Bisa langsung di tag &lt;audio&gt; atau lewat &lt;source&gt;.<br>
                                            <strong>Speaker 1:</strong> Jadi kalau dirangkum, dengan &lt;audio&gt; kita bisa pasang suara tanpa plugin, tapi tetap harus mikirin format dan browser ya?<br>
                                            <strong>Speaker 2:</strong> Betul banget. Intinya bukan cuma “bisa bunyi”, tapi kompatibel, ramah user, dan efisien.<br>
                                            <strong>Speaker 1:</strong> Wah, jelas banget. Buat teman-teman yang lagi belajar HTML, jangan takut coba-coba ya. Pasang audio, ganti format, lihat bedanya di browser.<br>
                                            <strong>Speaker 2:</strong> Setuju. Karena dari praktik langsung, baru kerasa bedanya teori sama realita.<br>
                                            <strong>Speaker 1:</strong> Oke, segitu dulu pembahasan kita tentang audio di HTML. Sampai ketemu di episode berikutnya. Tetap semangat. happy coding!<br>
                                        </p>
                                    </details>
                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi6-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio6').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio
                                                    id="walkthroughAudio6"
                                                    preload="auto"
                                                    playsinline
                                                >
                                                    <!-- FORMAT UTAMA -->
                                                    <source src="/audio/materi6-kode.mp3" type="audio/mpeg">

                                                    <!-- FALLBACK -->
                                                    <source src="/audio/materi6-kode.ogg" type="audio/ogg">

                                                    <!-- OPSI TERAKHIR -->
                                                    <source src="/audio/materi6-kode.wav" type="audio/wav">

                                                    Browser Anda tidak mendukung pemutaran audio HTML5.
                                                </audio>
                                            </div>
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
                                    <!-- ===== PENJELASAN TAG ===== -->
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

    const modal = document.getElementById('modalMateri6');
    if (!modal) return;

    const editor = document.getElementById('editorMateri6');
    const output = document.getElementById('outputMateri6');

    /* ==============================
       LIVE PREVIEW (IFRAME)
    ============================== */
    function updatePreview() {
        output.srcdoc = editor.value;
    }

    editor?.addEventListener('input', updatePreview);
    updatePreview();

    /* ==============================
       STOP AUDIO (MODAL + IFRAME)
    ============================== */
    function stopAllAudio() {

        // audio biasa di modal
        modal.querySelectorAll('audio').forEach(audio => {
            audio.pause();
            audio.currentTime = 0;
        });

        // audio di iframe (LIVE PREVIEW)
        try {
            const iframeDoc = output.contentDocument || output.contentWindow.document;
            iframeDoc?.querySelectorAll('audio').forEach(audio => {
                audio.pause();
                audio.currentTime = 0;
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

    // pindah tab (Code / Audio / Live)
    modal.querySelectorAll('[data-bs-toggle="pill"]').forEach(tab => {
        tab.addEventListener('shown.bs.tab', stopAllAudio);
    });

    // modal ditutup
    modal.addEventListener('hidden.bs.modal', () => {
        stopAllAudio();

        if (document.fullscreenElement) {
            document.exitFullscreen();
        }

        modal.querySelectorAll('iframe').forEach(i => i.src = i.src);
    });

    // pindah tab browser
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAllAudio();
        }
    });

});
</script>
@endpush
