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
                                        data-bs-target="#materi2-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi2-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi2-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi2-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Pemformatan Paragraph HTML</small>
                                        </div>
                                    </div>

                                    <audio
                                        id="materiAudio2"
                                        class="w-100 mb-3"
                                        controls
                                        preload="auto"
                                        playsinline
                                    >
                                        <!-- FORMAT UTAMA (PALING AMAN) -->
                                        <source src="{{ url('audio/pemformatan-paragraf.mp3') }}" type="audio/mpeg">

                                        <!-- FALLBACK -->
                                        <source src="{{ url('audio/pemformatan-paragraf.ogg') }}" type="audio/ogg">

                                        <!-- OPSI TERAKHIR -->
                                        <source src="{{ url('audio/pemformatan-paragraf.wav') }}" type="audio/wav">

                                        Browser Anda tidak mendukung pemutaran audio.
                                    </audio>

                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                            <strong>Speaker 1:</strong> Halo semuanya, selamat datang kembali di podcast belajar web development. Aku Raka. <br>
                                            <strong>Speaker 2:</strong> Dan aku Dina. Di episode ini kita bakal bahas materi yang kelihatannya sederhana, tapi penting banget di HTML, yaitu pemformatan paragraf.<br>
                                            <strong>Speaker 1:</strong> Betul. Banyak yang mikir paragraf itu cuma soal nulis teks doang, padahal di HTML ada beberapa tag dan properti yang ngatur bagaimana paragraf ditampilkan.<br>
                                            <strong>Speaker 2:</strong> Oke, kita mulai dari yang paling dasar dulu. Tag apa sih yang paling sering dipakai buat paragraf?<br>
                                            <strong>Speaker 1:</strong> Yang paling dasar adalah tag &lt;p&gt;. Tag ini digunakan untuk membuat paragraf teks. Browser otomatis memberi jarak antar paragraf, jadi teks lebih rapi dan mudah dibaca.<br>
                                            <strong>Speaker 2:</strong> Jadi kalau aku nulis teks panjang tanpa &lt;p&gt;, tampilannya bakal berantakan ya?<br>
                                            <strong>Speaker 1:</strong> Iya, bisa jadi teksnya nyambung terus. Dengan &lt;p&gt;, struktur teks jadi jelas.<br>
                                            <strong>Speaker 2:</strong> Nah, kalau aku cuma mau pindah baris tapi masih dalam satu paragraf, pakai apa?<br>
                                            <strong>Speaker 1:</strong> Itu pakai tag &lt;br&gt;. Tag ini berfungsi untuk pindah baris tanpa membuat paragraf baru. Biasanya dipakai untuk alamat, puisi, atau baris teks pendek.<br>
                                            <strong>Speaker 2:</strong> Berarti &lt;br&gt; beda ya dengan &lt;p&gt;?<br>
                                            <strong>Speaker 1:</strong> Beda. &lt;p&gt; bikin paragraf baru lengkap dengan jaraknya, sedangkan &lt;br&gt; cuma memindahkan baris saja.<br>
                                            <strong>Speaker 2:</strong> Aku juga sering lihat ada garis lurus di antara paragraf. Itu pakai apa?<br>
                                            <strong>Speaker 1:</strong> Itu menggunakan tag &lt;hr&gt;. Fungsinya untuk membuat garis horizontal sebagai pemisah antar paragraf atau antar bagian konten.<br>
                                            <strong>Speaker 2:</strong> Selain pakai tag, ada juga pengaturan perataan teks kan?<br>
                                            <strong>Speaker 1:</strong> Betul. Kita bisa pakai properti CSS text-align. Properti ini digunakan untuk mengatur perataan teks paragraf, misalnya rata kiri, rata kanan, tengah, atau rata kiri-kanan.<br>
                                            <strong>Speaker 2:</strong> Jadi text-align ini bukan tag HTML ya?<br>
                                            <strong>Speaker 1:</strong> Iya, ini properti CSS, tapi sering dipakai barengan dengan paragraf HTML.<br>
                                            <strong>Speaker 2:</strong> Kalau untuk menampilkan kutipan panjang dalam paragraf, apa yang paling tepat?<br>
                                            <strong>Speaker 1:</strong> Kita pakai tag &lt;blockquote&gt;. Tag ini digunakan untuk menampilkan kutipan dari sumber lain, biasanya ditampilkan menjorok ke dalam supaya terlihat jelas sebagai kutipan.<br>
                                            <strong>Speaker 2:</strong> Terus ada juga tag &lt;pre&gt;. Itu biasanya dipakai kapan?<br>
                                            <strong>Speaker 1:</strong> Tag &lt;pre&gt; digunakan untuk menampilkan teks dengan format asli, termasuk spasi dan baris baru. Cocok untuk menampilkan puisi, kode program, atau teks yang formatnya tidak boleh berubah.<br>
                                            <strong>Speaker 2:</strong> Jadi intinya, pemformatan paragraf di HTML itu nggak cuma soal teks panjang, tapi juga soal cara menampilkannya ya?<br>
                                            <strong>Speaker 1:</strong> Tepat banget. Dengan kombinasi &lt;p&gt;, &lt;br&gt;, &lt;hr&gt;, text-align, &lt;blockquote&gt;, dan &lt;pre&gt;, kita bisa menyusun teks yang rapi, jelas, dan nyaman dibaca.<br>
                                            <strong>Speaker 2:</strong> Wah, ternyata banyak juga yang bisa diatur dari paragraf.<br>
                                            <strong>Speaker 1:</strong> Iya, dan ini dasar banget sebelum lanjut ke layout yang lebih kompleks.<br>
                                            <strong>Speaker 2:</strong> Oke, semoga penjelasan tentang pemformatan paragraf ini bisa membantu teman-teman yang lagi belajar HTML. Terima kasih sudah mendengarkan. Sampai ketemu di episode berikutnya. Happy coding.<br>
                                        </p>
                                    </details>

                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi2-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio2').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio
                                                    id="walkthroughAudio2"
                                                    preload="auto"
                                                    playsinline
                                                >
                                                    <!-- FORMAT UTAMA -->
                                                    <source src="/audio/materi2-kode.mp3" type="audio/mpeg">

                                                    <!-- FALLBACK -->
                                                    <source src="/audio/materi2-kode.ogg" type="audio/ogg">

                                                    <!-- OPSI TERAKHIR -->
                                                    <source src="/audio/materi2-kode.wav" type="audio/wav">

                                                    Browser Anda tidak mendukung pemutaran audio.
                                                </audio>
                                            </div>
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

                                    <!-- ===== PENJELASAN TAG (TANPA AUDIO) ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">

                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag
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

    const modal = document.getElementById('modalMateri2');
    if (!modal) return;

    /* ==============================
       LIVE OUTPUT
    ============================== */
    const editor = document.getElementById('editorMateri2');
    const output = document.getElementById('outputMateri2');

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

    // pause semua audio (TANPA reset time)
    function pauseAllAudio() {
        audios.forEach(audio => {
            audio.pause();
        });
    }

    // paksa load audio saat tab Audio dibuka
    const audioTabBtn = modal.querySelector(
        '[data-bs-target="#materi2-audio"]'
    );

    audioTabBtn?.addEventListener('shown.bs.tab', () => {
        const audio = document.getElementById('materiAudio2');
        audio?.load();
    });

    // stop audio saat tab pindah
    modal.querySelectorAll('[data-bs-toggle="pill"]').forEach(tab => {
        tab.addEventListener('shown.bs.tab', pauseAllAudio);
    });

    // stop audio saat modal ditutup
    modal.addEventListener('hidden.bs.modal', () => {
        audios.forEach(audio => {
            audio.pause();
            audio.currentTime = 0; // reset cuma saat modal ditutup
        });

        if (document.fullscreenElement) {
            document.exitFullscreen();
        }

        modal.querySelectorAll('iframe').forEach(i => i.src = i.src);
    });

    // stop audio saat pindah tab browser
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            pauseAllAudio();
        }
    });

});
</script>
@endpush
