@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri8" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Implementasi Hyperlink
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
                                        data-bs-target="#materi8-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi8-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi8-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi8-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Implementasi Hyperlink dalam HTML</small>
                                        </div>
                                    </div>

                                    <audio
                                        id="materiAudio8"
                                        controls
                                        class="w-100 mb-3"
                                        preload="metadata"
                                        playsinline
                                    >
                                        <!-- FORMAT UTAMA -->
                                        <source src="{{ url('audio/hyperlink.mp3') }}" type="audio/mpeg">

                                        <!-- FALLBACK -->
                                        <source src="{{ url('audio/hyperlink.ogg') }}" type="audio/ogg">

                                        <!-- OPSI TERAKHIR -->
                                        <source src="{{ url('audio/hyperlink.wav') }}" type="audio/wav">

                                        Browser Anda tidak mendukung pemutaran audio HTML5.
                                    </audio>

                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                            <strong>Speaker 1:</strong> Halo semuanya! Selamat datang HTML5Virtual. Aku Dina, dan hari ini kita bakal ngobrolin salah satu fitur paling penting di HTML, yaitu hyperlink. Bersama aku sudah ada narasumber andalan kita, Raka. Halo Raka! <br>
                                            <strong>Speaker 2:</strong> Halo Dina, halo juga buat pendengar semua. Topik hyperlink ini menarik banget, karena tanpa link, web itu nggak akan jadi “web”.<br>
                                            <strong>Speaker 1:</strong> Nah itu dia. Sebelum masuk ke teknis, sebenarnya apa sih hyperlink itu?<br>
                                            <strong>Speaker 2:</strong> Hyperlink, atau sering disebut link, adalah cara di HTML untuk menghubungkan satu halaman dengan halaman lain. Bisa antar halaman dalam satu website, ke website lain, bahkan ke email atau nomor telepon.<br>
                                            <strong>Speaker 1:</strong> Jadi bisa dibilang, link itu yang bikin kita bisa klik sana-sini di internet ya?<br>
                                            <strong>Speaker 2:</strong> Betul banget. Fungsi utamanya untuk memudahkan pengunjung menelusuri informasi dalam sebuah situs atau antar situs.<br>
                                            <strong>Speaker 1:</strong> Kalau di HTML, tag utama untuk membuat hyperlink itu apa?<br>
                                            <strong>Speaker 2:</strong> Tag utamanya adalah &lt;a&gt;, yang sering disebut anchor tag. Semua hyperlink di HTML dibuat menggunakan tag ini.<br>
                                            <strong>Speaker 1:</strong> Di dalam tag &lt;a&gt; pasti ada atribut yang wajib ya?<br>
                                            <strong>Speaker 2:</strong> Iya. Atribut paling penting adalah href. href ini berisi alamat tujuan link, bisa berupa URL, file HTML lain, atau bahkan penanda tertentu di halaman yang sama.<br>
                                            <strong>Speaker 1:</strong> Nah ngomongin alamat tujuan, di HTML itu ada beberapa jenis link ya?<br>
                                            <strong>Speaker 2:</strong> Benar. Secara umum ada tiga jenis utama. Pertama, link absolut, yaitu link yang menuliskan alamat lengkap, misalnya menuju website lain di internet.<br>
                                            <strong>Speaker 1:</strong> Berarti kalau link ke Google itu termasuk link absolut?<br>
                                            <strong>Speaker 2:</strong> Iya, tepat. Yang kedua adalah link relatif, yaitu link yang mengarah ke file atau halaman lain dalam satu website, biasanya tanpa menuliskan domain lengkap, dan Yang ketiga adalah link ke bagian tertentu dalam dokumen. Ini biasanya dipakai untuk navigasi internal, seperti daftar isi. Kita menggunakan atribut id atau name sebagai penanda tujuan link.<br>
                                            <strong>Speaker 1:</strong> Jadi misalnya klik “ke atas” atau “ke bagian kontak”, itu pakai konsep ini ya?<br>
                                            <strong>Speaker 2:</strong> Betul. Link-nya menggunakan tanda pagar di href, lalu diarahkan ke id atau name tertentu di halaman.<br>
                                            <strong>Speaker 1:</strong> Sekarang soal cara membuka link. Aku sering lihat link yang kebuka di tab baru. Itu diatur dari mana?<br>
                                            <strong>Speaker 2:</strong> Itu diatur dengan atribut target. Kalau pakai target="_blank", link akan terbuka di tab baru. Sedangkan target="_self" akan membuka link di tab yang sama, dan itu adalah perilaku default.<br>
                                            <strong>Speaker 1:</strong> Wah praktis banget ya. Jadi hyperlink itu nggak cuma buat pindah halaman. Kalau dirangkum, berarti hyperlink itu salah satu elemen paling krusial di HTML?<br>
                                            <strong>Speaker 2:</strong> Benar. Tanpa hyperlink, halaman web akan berdiri sendiri dan sulit dijelajahi. Link adalah jembatan antar informasi di internet.<br>
                                            <strong>Speaker 1:</strong> Siap! Terima kasih banyak Raka atas penjelasannya. Semoga setelah ini pendengar makin paham dan jago bikin hyperlink di HTML ya. Happy Coding.
                                        </p>
                                    </details>
                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi8-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio8').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio
                                                    id="walkthroughAudio8"
                                                    preload="metadata"
                                                    playsinline
                                                >
                                                    <!-- FORMAT UTAMA -->
                                                    <source src="/audio/hyperlink-kode.mp3" type="audio/mpeg">

                                                    <!-- FALLBACK -->
                                                    <source src="/audio/hyperlink-kode.ogg" type="audio/ogg">

                                                    <!-- OPSI TERAKHIR -->
                                                    <source src="/audio/hyperlink-kode.wav" type="audio/wav">

                                                    Browser Anda tidak mendukung pemutaran audio HTML5.
                                                </audio>
                                            </div>
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Contoh Hyperlink HTML<span class="tag">&lt;/h1&gt;</span>

<span class="comment">&lt;!-- Link Absolut --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"https://www.google.com"</span>
    <span class="attr">target</span>=<span class="value">"_blank"</span>
<span class="tag">&gt;</span>
    Kunjungi Google
<span class="tag">&lt;/a&gt;</span>

<span class="comment">&lt;!-- Link Relatif --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"profil.html"</span>
<span class="tag">&gt;</span>
    Halaman Profil
<span class="tag">&lt;/a&gt;</span>

<span class="comment">&lt;!-- Link ke Bagian Dokumen --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"#kontak"</span>
<span class="tag">&gt;</span>
    Ke Bagian Kontak
<span class="tag">&lt;/a&gt;</span>

<span class="comment">&lt;!-- Target Tujuan --&gt;</span>
<span class="tag">&lt;h2</span> <span class="attr">id</span>=<span class="value">"kontak"</span><span class="tag">&gt;</span>
    Kontak Kami
<span class="tag">&lt;/h2&gt;</span>

<span class="comment">&lt;!-- Link Email --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"mailto:admin@email.com"</span>
<span class="tag">&gt;</span>
    Kirim Email
<span class="tag">&lt;/a&gt;</span>

<span class="comment">&lt;!-- Link Telepon --&gt;</span>
<span class="tag">&lt;a</span>
    <span class="attr">href</span>=<span class="value">"tel:+628123456789"</span>
<span class="tag">&gt;</span>
    Hubungi Kami
<span class="tag">&lt;/a&gt;</span>
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
                                                <li><span>&lt;a&gt;</span> Tag utama untuk membuat hyperlink</li>
                                                <li><span>href</span> Menentukan alamat tujuan link</li>
                                                <li><span>target</span> Mengatur cara membuka link</li>
                                                <li><span>_blank</span> Membuka link di tab baru</li>
                                                <li><span>_self</span> Membuka link di tab yang sama (default)</li>
                                                <li><span>id / name</span> Penanda tujuan link ke bagian tertentu</li>
                                                <li><span>mailto:</span> Digunakan untuk membuat link email</li>
                                                <li><span>tel:</span> Digunakan untuk membuat link nomor telepon</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                - Link absolut menggunakan alamat URL lengkap<br>
                                                - Link relatif digunakan untuk file dalam satu website<br>
                                                - Atribut <b>name</b> masih didukung, namun <b>id</b> lebih disarankan di HTML5
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi8-live">

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri8" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Contoh Hyperlink Dasar</h3>
<a href="https://www.google.com">Kunjungi Google</a>
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

                                        <iframe id="outputMateri8" class="live-output"></iframe>
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

    const modal = document.getElementById('modalMateri8');
    if (!modal) return;

    /* ==============================
       LIVE OUTPUT
    ============================== */
    const editor = document.getElementById('editorMateri8');
    const output = document.getElementById('outputMateri8');

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
