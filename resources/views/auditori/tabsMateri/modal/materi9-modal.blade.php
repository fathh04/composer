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
                                        data-bs-target="#materi9-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi9-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi9-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi9-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Penggunaan FORM dengan HTML</small>
                                        </div>
                                    </div>

                                    <audio
                                        id="materiAudio9"
                                        controls
                                        class="w-100 mb-3"
                                        preload="auto"
                                        playsinline
                                    >
                                        <!-- FORMAT UTAMA (PALING AMAN) -->
                                        <source src="{{ url('audio/form.mp3') }}" type="audio/mpeg">

                                        <!-- FALLBACK -->
                                        <source src="{{ url('audio/form.ogg') }}" type="audio/ogg">

                                        <!-- OPSI TERAKHIR -->
                                        <source src="{{ url('audio/form.wav') }}" type="audio/wav">

                                        Browser Anda tidak mendukung pemutaran audio HTML5.
                                    </audio>

                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                            <strong>Speaker 1:</strong> Halo semuanya! Selamat datang di HTML5Virtual. Aku Dina sebagai host dalam podcast kali ini, dan seperti biasa sudah ada narasumber andalan kita, Raka. Halo Raka! <br>
                                            <strong>Speaker 2:</strong> Halo Dina, halo juga teman-teman pendengar. Senang banget bisa ngobrol lagi, apalagi topiknya soal form HTML, yang hampir selalu ada di website.<br>
                                            <strong>Speaker 1:</strong> Nah itu dia. Kalau kita buka website, hampir pasti ketemu form ya. Sebenarnya, apa sih fungsi utama form dalam HTML?<br>
                                            <strong>Speaker 2:</strong> Form itu digunakan untuk menerima masukan dari pengguna. Misalnya data login, data pendaftaran, komentar, sampai transaksi online. Semua input dari pengguna itu dikumpulkan lewat form.<br>
                                            <strong>Speaker 1:</strong> Berarti form itu semacam jembatan antara pengguna dan server ya?<br>
                                            <strong>Speaker 2:</strong> Tepat sekali. Di arsitektur web, browser bertindak sebagai klien. Ketika pengguna mengisi form dan mengirimkannya, data itu dikirim ke server menggunakan protokol HTTP, lalu diproses oleh bahasa pemrograman seperti PHP, JSP, atau JavaScript.<br>
                                            <strong>Speaker 1:</strong> Oke, sekarang kita fokus ke HTML-nya. Elemen utama yang wajib ada untuk membuat form itu apa?<br>
                                            <strong>Speaker 2:</strong> Elemen utamanya adalah tag &lt;form&gt;. Semua elemen input, seperti text field atau tombol submit, harus berada di dalam tag &lt;form&gt; ini.<br>
                                            <strong>Speaker 1:</strong> Di dalam tag &lt;form&gt; ada beberapa atribut. Tapi biar nggak kebanyakan, hari ini kita fokus ke satu saja. Menurut Raka, atribut apa yang paling penting?<br>
                                            <strong>Speaker 2:</strong> Salah satu yang paling penting adalah atribut method. Atribut ini menentukan cara pengiriman data form ke server.<br>
                                            <strong>Speaker 1:</strong> Method itu maksudnya GET dan POST ya?<br>
                                            <strong>Speaker 2:</strong> Betul. Ada dua method utama, GET dan POST. Tapi untuk form modern, terutama yang mengirim data penting, biasanya kita pakai POST.<br>
                                            <strong>Speaker 1:</strong> Kenapa POST lebih sering dipakai?<br>
                                            <strong>Speaker 2:</strong> Karena POST lebih aman untuk data sensitif. Data yang dikirim tidak ditampilkan di URL, berbeda dengan GET yang datanya bisa terlihat langsung di address bar browser.<br>
                                            <strong>Speaker 1:</strong> Jadi kalau misalnya form login atau pendaftaran, sebaiknya pakai POST?<br>
                                            <strong>Speaker 2:</strong> Iya, wajib. Username, password, atau data pribadi sebaiknya selalu dikirim menggunakan method POST.<br>
                                            <strong>Speaker 1:</strong> Berarti kalau dirangkum, &lt;form&gt; itu wadahnya, dan method menentukan jalur pengiriman datanya?<br>
                                            <strong>Speaker 2:</strong> Betul sekali. Tanpa method yang tepat, data bisa bocor atau tidak diproses dengan benar oleh server.<br>
                                            <strong>Speaker 1:</strong> Menarik banget. Jadi meskipun kelihatannya cuma satu atribut, dampaknya besar ya.<br>
                                            <strong>Speaker 2:</strong> Betul. Di HTML, hal kecil seperti atribut method bisa sangat berpengaruh ke keamanan dan fungsi aplikasi web.<br>
                                            <strong>Speaker 1:</strong> Siap! Terima kasih banyak Raka atas penjelasannya. Semoga pendengar makin paham cara kerja form di HTML ya. Happy Coding.
                                        </p>
                                    </details>
                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi9-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio9').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio
                                                    id="walkthroughAudio9"
                                                    preload="auto"
                                                    playsinline
                                                >
                                                    <!-- FORMAT UTAMA -->
                                                    <source src="/audio/form-kode.mp3" type="audio/mpeg">

                                                    <!-- FALLBACK -->
                                                    <source src="/audio/form-kode.ogg" type="audio/ogg">

                                                    <!-- OPSI TERAKHIR -->
                                                    <source src="/audio/form-kode.wav" type="audio/wav">

                                                    Browser Anda tidak mendukung pemutaran audio HTML5.
                                                </audio>
                                            </div>
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
                                    <!-- ===== PENJELASAN TAG ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">
                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut Form HTML
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;form&gt;</span> Wadah utama untuk elemen input</li>
                                                <li><span>action</span> Menentukan tujuan pengiriman data form</li>
                                                <li><span>method</span> Metode pengiriman data GET / POST</li>

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

    const modal = document.getElementById('modalMateri9');
    if (!modal) return;

    /* ==============================
       LIVE OUTPUT
    ============================== */
    const editor = document.getElementById('editorMateri9');
    const output = document.getElementById('outputMateri9');

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
