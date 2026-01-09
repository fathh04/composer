@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri4" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Tabel dalam HTML
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
                                        data-bs-target="#materi4-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi4-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi4-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi4-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Tabel dalam HTML</small>
                                        </div>
                                    </div>

                                    <audio
                                        id="materiAudio4"
                                        controls
                                        class="w-100 mb-3"
                                        preload="metadata"
                                        playsinline
                                    >
                                        <!-- FORMAT UTAMA -->
                                        <source src="{{ url('audio/tabel.mp3') }}" type="audio/mpeg">

                                        <!-- FALLBACK -->
                                        <source src="{{ url('audio/tabel.ogg') }}" type="audio/ogg">

                                        <!-- OPSI TERAKHIR -->
                                        <source src="{{ url('audio/tabel.wav') }}" type="audio/wav">

                                        Browser Anda tidak mendukung pemutaran audio HTML5.
                                    </audio>

                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                                <strong>Speaker 1:</strong> Halo semuanya! Balik lagi di podcast HTML5Virtual. Aku Dina, dan hari ini kita bakal bahas materi yang sering banget muncul di tugas HTML, yaitu tabel. Tapi tenang, biar nggak kaku, aku sudah ditemani narasumber keren kita. Halo, Raka! <br>
                                                <strong>Speaker 2:</strong> Halo Dina, halo juga teman-teman pendengar. Siap ngobrol santai soal tabel HTML yang sering bikin pusing tapi sebenarnya seru.<br>
                                                <strong>Speaker 1:</strong> Nah, ini menarik. Banyak yang bilang tabel itu ribet. Padahal kalau paham dasarnya, sebenarnya simpel ya?<br>
                                                <strong>Speaker 2:</strong> Betul banget. Kuncinya paham struktur dasarnya dulu. Semua tabel di HTML selalu diawali dengan tag &lt;table&gt;. Tanpa tag ini, elemen tabel lainnya nggak akan jalan.<br>
                                                <strong>Speaker 1:</strong> Oke, jadi &lt;table&gt; itu ibarat wadah besarnya ya. Terus di dalamnya apa dulu yang kita buat?<br>
                                                <strong>Speaker 2:</strong> Di dalam &lt;table&gt;, kita buat baris menggunakan tag &lt;tr&gt;. Setiap &lt;tr&gt; itu satu baris tabel.<br>
                                                <strong>Speaker 1:</strong> Berarti kalau aku mau tabel dengan tiga baris, aku tinggal bikin tiga &lt;tr&gt;?<br>
                                                <strong>Speaker 2:</strong> Iya, tepat sekali. Nah, di dalam &lt;tr&gt; itulah kita isi kolomnya, pakai &lt;th&gt; atau &lt;td&gt;.<br>
                                                <strong>Speaker 1:</strong> Nah ini yang sering bikin bingung. Bedanya &lt;th&gt; sama &lt;td&gt; apa sih?<br>
                                                <strong>Speaker 2:</strong> &lt;th&gt; itu untuk header kolom. Teksnya biasanya otomatis tebal dan rata tengah. Sedangkan &lt;td&gt; dipakai untuk data atau isi tabel yang biasa.<br>
                                                <strong>Speaker 1:</strong> Oh pantesan kalau bikin tabel nilai, bagian judul kolomnya beda tampilannya. Sekarang soal tampilan tabel, aku sering lihat ada tabel yang ada garisnya, ada yang nggak. Itu diatur di mana?<br>
                                                <strong>Speaker 2:</strong> Itu pakai atribut di tag &lt;table&gt;. Misalnya atribut border untuk mengatur ketebalan garis tabel. Kalau border-nya 1, garisnya tipis, makin besar nilainya makin tebal.<br>
                                                <strong>Speaker 1:</strong> Kalau ukuran tabel gimana?<br>
                                                <strong>Speaker 2:</strong> Bisa pakai width dan height untuk mengatur lebar dan tinggi tabel. Selain itu ada cellspacing, yang ngatur jarak antar sel, dan cellpadding, yang ngatur jarak antara isi sel dengan garisnya.<br>
                                                <strong>Speaker 1:</strong> Wah, jadi cellpadding itu kayak padding ya?<br>
                                                <strong>Speaker 2:</strong> Iya, konsepnya mirip padding di CSS. Terus ada juga align untuk mengatur posisi tabel, dan bgcolor untuk memberi warna latar tabel.<br>
                                                <strong>Speaker 1:</strong> Menarik. Terus kalau aku cuma mau ngatur satu baris tertentu, misalnya mau dibikin beda warna, bisa?<br>
                                                <strong>Speaker 2:</strong> Bisa banget. Kita bisa pakai atribut di tag &lt;tr&gt;. Misalnya bgcolor untuk memberi warna pada satu baris saja.<br>
                                                <strong>Speaker 1:</strong> Kalau posisi teks di dalam baris itu bisa diatur juga?<br>
                                                <strong>Speaker 2:</strong> Bisa. Pakai align untuk posisi horizontal, misalnya kiri, tengah, atau kanan. Terus ada valign untuk posisi vertikal, misalnya atas, tengah, atau bawah.<br>
                                                <strong>Speaker 1:</strong> Oke, sekarang masuk ke sel tabel. Di &lt;td&gt; atau &lt;th&gt; sendiri, apa aja yang bisa diatur?<br>
                                                <strong>Speaker 2:</strong> Di &lt;td&gt; dan &lt;th&gt;, kita bisa atur align untuk perataan teks, width dan height untuk ukuran kolom atau sel, dan juga bgcolor untuk warna latar sel tertentu.<br>
                                                <strong>Speaker 1:</strong> Berarti kalau aku mau satu sel aja yang warnanya beda, cukup kasih bgcolor di &lt;td&gt;-nya ya?<br>
                                                <strong>Speaker 2:</strong> Betul. Itu sering dipakai buat highlight data penting.<br>
                                                <strong>Speaker 1:</strong> Kalau dirangkum, tabel HTML itu sebenarnya cuma kombinasi &lt;table&gt;, &lt;tr&gt;, &lt;th&gt;, dan &lt;td&gt;, plus atribut-atribut pendukung ya?<br>
                                                <strong>Speaker 2:</strong> Iya. Kalau empat itu sudah paham, bikin tabel apa pun jadi lebih gampang.<br>
                                                <strong>Speaker 1:</strong> Pesan terakhir buat pendengar yang masih takut sama tabel HTML?<br>
                                                <strong>Speaker 2:</strong> Jangan takut duluan. Coba bikin tabel sederhana dulu, satu baris header dan satu baris data. Setelah itu baru mainin atributnya pelan-pelan.<br>
                                                <strong>Speaker 1:</strong> Wah, daging banget obrolannya. Terima kasih banyak Raka sudah berbagi ilmunya.<br>
                                                <strong>Speaker 2:</strong> Sama-sama Dina. Semoga teman-teman makin pede bikin tabel di HTML ya.<br>
                                                <strong>Speaker 1:</strong> Oke teman-teman, itu tadi obrolan seru kita tentang tabel HTML. Sampai ketemu di episode berikutnya. Happy coding!
                                        </p>
                                    </details>

                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi4-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio4').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio
                                                    id="walkthroughAudio4"
                                                    preload="metadata"
                                                    playsinline
                                                >
                                                    <!-- FORMAT UTAMA (PALING AMAN) -->
                                                    <source src="/audio/materi4-kode.mp3" type="audio/mpeg">

                                                    <!-- FALLBACK -->
                                                    <source src="/audio/materi4-kode.ogg" type="audio/ogg">

                                                    <!-- OPSI TERAKHIR -->
                                                    <source src="/audio/materi4-kode.wav" type="audio/wav">

                                                    Browser Anda tidak mendukung pemutaran audio.
                                                </audio>
                                            </div>

<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Tabel Data Mahasiswa<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;table</span>
    <span class="attr">border</span>=<span class="value">"1"</span>
    <span class="attr">width</span>=<span class="value">"80%"</span>
    <span class="attr">cellspacing</span>=<span class="value">"0"</span>
    <span class="attr">cellpadding</span>=<span class="value">"8"</span>
    <span class="attr">align</span>=<span class="value">"center"</span>
    <span class="attr">bgcolor</span>=<span class="value">"#f8f9fa"</span>
<span class="tag">&gt;</span>

    <span class="tag">&lt;tr</span>
        <span class="attr">align</span>=<span class="value">"center"</span>
        <span class="attr">bgcolor</span>=<span class="value">"#0d6efd"</span>
    <span class="tag">&gt;</span>
        <span class="tag">&lt;th&gt;</span>NIM<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Nama<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;th&gt;</span>Jurusan<span class="tag">&lt;/th&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>

    <span class="tag">&lt;tr</span>
        <span class="attr">align</span>=<span class="value">"center"</span>
        <span class="attr">valign</span>=<span class="value">"middle"</span>
    <span class="tag">&gt;</span>
        <span class="tag">&lt;td&gt;</span>22001<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;td&gt;</span>Fitri<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;td&gt;</span>Informatika<span class="tag">&lt;/td&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>

    <span class="tag">&lt;tr</span>
        <span class="attr">align</span>=<span class="value">"center"</span>
        <span class="attr">bgcolor</span>=<span class="value">"#e9ecef"</span>
    <span class="tag">&gt;</span>
        <span class="tag">&lt;td&gt;</span>22002<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;td&gt;</span>Budi<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;td&gt;</span>Sistem Informasi<span class="tag">&lt;/td&gt;</span>
    <span class="tag">&lt;/tr&gt;</span>

<span class="tag">&lt;/table&gt;</span>
</code></pre>
            </div>
        </div>

                                    <!-- ===== PENJELASAN TAG (TANPA AUDIO) ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-explain h-100">
                                            <h6 class="fw-bold text-primary mb-3">
                                                🧠 Penjelasan Tag & Atribut
                                            </h6>

                                            <ul class="list-explain">
                                                <li><span>&lt;table&gt;</span> Membuat tabel</li>
                                                <li><span>&lt;tr&gt;</span> Membuat baris tabel</li>
                                                <li><span>&lt;th&gt;</span> Header kolom (teks tebal & tengah)</li>
                                                <li><span>&lt;td&gt;</span> Data/isi tabel</li>
                                            </ul>

                                            <h6 class="fw-bold mt-3">📊 Atribut Elemen Tabel</h6>
                                            <ul class="list-explain">
                                                <li><span>border</span> ketebalan garis tabel</li>
                                                <li><span>width / height</span> ukuran tabel</li>
                                                <li><span>cellspacing</span> jarak antar sel</li>
                                                <li><span>cellpadding</span> jarak isi ke border</li>
                                                <li><span>align</span> posisi tabel</li>
                                                <li><span>bgcolor</span> warna latar tabel</li>
                                            </ul>

                                            <h6 class="fw-bold mt-3">📑 Atribut Table Row (&lt;tr&gt;)</h6>
                                            <ul class="list-explain">
                                                <li><span>align</span> posisi teks horizontal</li>
                                                <li><span>valign</span> posisi teks vertikal</li>
                                                <li><span>bgcolor</span> warna baris</li>
                                            </ul>

                                            <h6 class="fw-bold mt-3">📄 Atribut Data (&lt;td&gt; / &lt;th&gt;)</h6>
                                            <ul class="list-explain">
                                                <li><span>align</span> perataan teks</li>
                                                <li><span>width / height</span> ukuran kolom</li>
                                                <li><span>bgcolor</span> warna sel</li>
                                            </ul>

                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong><br>
                                                Untuk mengatur teks ataupun gambar dalam baris dan kolom, digunakanlah <b>pemformatan Tabel</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi4-live">

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri4" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Daftar Mata Pelajaran</h3>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
    </tr>
    <tr>
        <td align="center">1</td>
        <td>Pemrograman Web</td>
    </tr>
    <tr>
        <td align="center">2</td>
        <td>Basis Data</td>
    </tr>
    <tr>
        <td align="center">3</td>
        <td>Jaringan Komputer</td>
    </tr>
</table>

<h3>Langkah Membuat Website</h3>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Langkah</th>
        <th>Deskripsi</th>
    </tr>
    <tr>
        <td align="center">1</td>
        <td>Menentukan tujuan</td>
    </tr>
    <tr>
        <td align="center">2</td>
        <td>Membuat desain</td>
    </tr>
    <tr>
        <td align="center">3</td>
        <td>Menulis kode HTML</td>
    </tr>
</table>
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

                                        <iframe id="outputMateri4" class="live-output"></iframe>

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

    const modal = document.getElementById('modalMateri4');
    if (!modal) return;

    /* ==============================
       LIVE OUTPUT
    ============================== */
    const editor = document.getElementById('editorMateri4');
    const output = document.getElementById('outputMateri4');

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
