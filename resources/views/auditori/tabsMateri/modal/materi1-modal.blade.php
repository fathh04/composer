@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri1" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Pemformatan Teks
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
                                        data-bs-target="#materi1-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi1-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi1-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi1-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Pemformatan Teks HTML</small>
                                        </div>
                                    </div>

                                    <audio controls class="w-100 mb-3">
                                        <source src="{{ url('audio/Performatan Teks.wav') }}" type="audio/mpeg">
                                    </audio>

                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                            <strong>Speaker 1:</strong> Halo semuanya! Selamat datang di podcast belajar web development. Aku Raka... <br>
                                            <strong>Speaker 2:</strong> …dan aku Dina. Di episode kali ini, kita bakal ngobrol santai tapi tetap berbobot tentang HTML, khususnya pemformatan teks. Raka, sebelum masuk ke teknis, sebenarnya HTML itu apa sih?<br>
                                            <strong>Speaker 1:</strong> Pertanyaan bagus. HTML itu singkatan dari HyperText Markup Language. HTML bukan bahasa pemrograman, tapi bahasa markup yang dipakai untuk menyusun struktur dan isi halaman web.<br>
                                            <strong>Speaker 2:</strong> Jadi HTML itu bukan buat logika seperti perhitungan ya?<br>
                                            <strong>Speaker 1:</strong> Betul. HTML itu lebih ke memberi tahu browser, bagian mana yang judul, paragraf, atau teks penting. Dan salah satu bagian paling sering dipakai adalah pemformatan teks.<br>
                                            <strong>Speaker 2:</strong> Nah, kalau bicara pemformatan teks, tag apa yang biasanya pertama kali dipelajari?<br>
                                            <strong>Speaker 1:</strong> Biasanya tag paragraf, yaitu &lt;p&gt;. Tag ini dipakai untuk menulis teks dalam bentuk paragraf dan otomatis punya jarak antar paragraf.<br>
                                            <strong>Speaker 2:</strong> Selain paragraf, aku sering lihat ada judul dengan ukuran berbeda-beda. Itu pakai apa?<br>
                                            <strong>Speaker 1:</strong> Itu pakai heading, dari &lt;h1&gt; sampai &lt;h6&gt;. &lt;h1&gt; untuk judul utama, paling besar dan paling penting, sedangkan &lt;h6&gt; paling kecil. Ini penting untuk struktur dokumen dan juga SEO.<br>
                                            <strong>Speaker 2:</strong> Kalau mau bikin teks jadi tebal atau miring, pakai tag apa?<br>
                                            <strong>Speaker 1:</strong> Bisa pakai &lt;b&gt; untuk teks tebal dan &lt;i&gt; untuk teks miring. Tapi di HTML modern, lebih disarankan pakai &lt;strong&gt; dan &lt;em&gt;.<br>
                                            <strong>Speaker 2:</strong> Kenapa lebih disarankan &lt;strong&gt; dan &lt;em&gt;?<br>
                                            <strong>Speaker 1:</strong> Karena &lt;strong&gt; dan &lt;em&gt; punya makna semantik. &lt;strong&gt; menandakan teks itu penting, dan &lt;em&gt; menandakan penekanan. Screen reader bisa membaca makna ini, bukan cuma tampilannya.<br>
                                            <strong>Speaker 2:</strong> Oh, jadi bukan cuma soal tampilan ya. Selain itu, ada tag pemformatan teks apa lagi?<br>
                                            <strong>Speaker 1:</strong> Ada &lt;u&gt; untuk garis bawah, &lt;mark&gt; untuk menandai teks seperti stabilo, dan &lt;small&gt; untuk teks kecil seperti catatan kaki.<br>
                                            <strong>Speaker 2:</strong> Aku juga pernah lihat tag &lt;center&gt;. Itu masih boleh dipakai?<br>
                                            <strong>Speaker 1:</strong> Sebenarnya sudah deprecated, artinya tidak disarankan lagi. Sekarang pengaturan posisi teks sebaiknya pakai CSS.<br>
                                            <strong>Speaker 2:</strong> Oke, lanjut. Kalau mau menampilkan teks yang berhubungan dengan kode program, tag apa yang dipakai?<br>
                                            <strong>Speaker 1:</strong> Nah, itu masuk ke computer output tags. Yang paling umum &lt;code&gt;, dipakai untuk menampilkan potongan kode seperti console.log() atau print().<br>
                                            <strong>Speaker 2:</strong> Kalau kodenya panjang dan lebih dari satu baris gimana?<br>
                                            <strong>Speaker 1:</strong> Biasanya digabung dengan &lt;pre&gt;. Tag &lt;pre&gt; menjaga spasi dan baris baru tetap seperti aslinya.<br>
                                            <strong>Speaker 2:</strong> Selain itu ada apa lagi?<br>
                                            <strong>Speaker 1:</strong> Ada &lt;kbd&gt; untuk input keyboard seperti Ctrl + C atau Enter, &lt;samp&gt; untuk output dari komputer, dan &lt;var&gt; untuk menuliskan variabel.<br>
                                            <strong>Speaker 2:</strong> Menarik. Sekarang kita ke kutipan dan referensi. Di HTML ada tag khusus untuk itu kan?<br>
                                            <strong>Speaker 1:</strong> Iya. Untuk kutipan panjang ada &lt;blockquote&gt;. Biasanya dipakai untuk mengutip teks dari sumber lain.<br>
                                            <strong>Speaker 2:</strong> Kalau kutipannya pendek di tengah kalimat?<br>
                                            <strong>Speaker 1:</strong> Itu pakai &lt;q&gt;. Browser biasanya otomatis menambahkan tanda petik.<br>
                                            <strong>Speaker 2:</strong> Terus kalau mau menuliskan sumber atau judul karya?<br>
                                            <strong>Speaker 1:</strong> Pakai &lt;cite&gt;. Tag ini cocok untuk judul buku, artikel, jurnal, film, atau karya seni.<br>
                                            <strong>Speaker 2:</strong> Aku juga sering lihat singkatan seperti HTML atau CSS yang bisa di-hover. Itu pakai apa?<br>
                                            <strong>Speaker 1:</strong> Itu pakai &lt;abbr&gt;, biasanya dikombinasikan dengan atribut title supaya kepanjangannya muncul saat diarahkan kursor.<br>
                                            <strong>Speaker 2:</strong> Terakhir, ada tag khusus untuk definisi istilah ya?<br>
                                            <strong>Speaker 1:</strong> Betul. Namanya &lt;dfn&gt;. Tag ini dipakai untuk menandai definisi pertama dari sebuah istilah dalam dokumen.<br>
                                            <strong>Speaker 2:</strong> Jadi misalnya pertama kali menjelaskan HTML, kata HTML-nya bisa dibungkus &lt;dfn&gt;?<br>
                                            <strong>Speaker 1:</strong> Tepat sekali. Ini membantu pembaca dan juga mesin pencari memahami istilah penting.<br>
                                            <strong>Speaker 2:</strong> Kalau dirangkum, pemformatan teks di HTML itu bukan cuma soal gaya tulisan ya?<br>
                                            <strong>Speaker 1:</strong> Iya. Lebih dari itu, pemformatan teks menyangkut makna, struktur, dan aksesibilitas.<br>
                                            <strong>Speaker 2:</strong> Pesan terakhir buat pendengar yang lagi belajar HTML?<br>
                                            <strong>Speaker 1:</strong> Jangan cuma menghafal tag. Pahami kapan dan kenapa tag itu dipakai.<br>
                                            <strong>Speaker 2:</strong> Dan jangan lupa sering praktik langsung. Coba gabungkan &lt;p&gt;, &lt;strong&gt;, &lt;code&gt;, &lt;blockquote&gt;, sampai &lt;dfn&gt; dalam satu halaman HTML.<br>
                                            <strong>Speaker 1:</strong> Oke, itu pembahasan kita tentang pemformatan teks HTML. Semoga membantu.<br>
                                            <strong>Speaker 2:</strong> Terima kasih sudah mendengarkan. Sampai ketemu di episode berikutnya. Happy coding.<br>
                                        </p>
                                    </details>

                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi1-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio1').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio id="walkthroughAudio1" preload="none">
                                                    <source src="/audio/Performatan Teks-materi2.wav" type="audio/mpeg">
                                                </audio>
                                            </div>

<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>Pemformatan Teks HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;p&gt;</span>
Ini teks <span class="tag">&lt;b&gt;</span>tebal<span class="tag">&lt;/b&gt;</span>,
<span class="tag">&lt;strong&gt;</span>penting<span class="tag">&lt;/strong&gt;</span>,
<span class="tag">&lt;i&gt;</span>miring<span class="tag">&lt;/i&gt;</span>,
dan <span class="tag">&lt;em&gt;</span>ditekankan<span class="tag">&lt;/em&gt;</span>.
<span class="tag">&lt;/p&gt;</span>

<span class="tag">&lt;p&gt;</span>
Teks <span class="tag">&lt;small&gt;</span>kecil<span class="tag">&lt;/small&gt;</span>,
H<span class="tag">&lt;sub&gt;</span>2<span class="tag">&lt;/sub&gt;</span>O,
X<span class="tag">&lt;sup&gt;</span>2<span class="tag">&lt;/sup&gt;</span>,
<span class="tag">&lt;del&gt;</span>salah<span class="tag">&lt;/del&gt;</span>,
dan <span class="tag">&lt;mark&gt;</span>ditandai<span class="tag">&lt;/mark&gt;</span>.
<span class="tag">&lt;/p&gt;</span>
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
                                                <li><span>&lt;b&gt;</span> Menebalkan teks (visual)</li>
                                                <li><span>&lt;strong&gt;</span> Teks penting (semantic)</li>
                                                <li><span>&lt;i&gt;</span> Teks miring</li>
                                                <li><span>&lt;em&gt;</span> Penekanan teks</li>
                                                <li><span>&lt;small&gt;</span> Ukuran teks kecil</li>
                                                <li><span>&lt;sub&gt;</span> Subscript</li>
                                                <li><span>&lt;sup&gt;</span> Superscript</li>
                                                <li><span>&lt;del&gt;</span> Teks dicoret</li>
                                                <li><span>&lt;mark&gt;</span> Teks disorot</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi1-live">

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri1" class="live-editor">
<h1>Belajar HTML</h1>
<p><b>Teks tebal</b>, <em>miring</em>, <mark>highlight</mark></p>
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

                                        <iframe id="outputMateri1" class="live-output"></iframe>

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

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ===== LIVE OUTPUT ===== */
    const editor = document.getElementById('editorMateri1');
    const output = document.getElementById('outputMateri1');

    if (editor && output) {
        const updatePreview = () => output.srcdoc = editor.value;
        editor.addEventListener('input', updatePreview);
        updatePreview();
    }

    /* ===== FULLSCREEN (PER MODAL) ===== */
    const modal = document.getElementById('modalMateri1');
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
