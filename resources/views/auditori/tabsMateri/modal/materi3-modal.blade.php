@push('styles')
<link rel="stylesheet" href="{{ url('css/materi-modal-siswa.css') }}">
@endpush
<div class="modal fade" id="modalMateri3" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-4 shadow-lg d-flex flex-column">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h5 class="modal-title fw-bold mb-0">
                    📚 Pembuatan List Terstruktur
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
                                        data-bs-target="#materi3-audio">
                                    🎧 Audio Materi
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi3-code">
                                    🎙️ Walkthrough
                                </button>

                                <button class="nav-link"
                                        data-bs-toggle="pill"
                                        data-bs-target="#materi3-live">
                                    ⚡ Live Output
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- AUDIO -->
                            <div class="tab-pane fade show active" id="materi3-audio">

                                <div class="audio-card p-4 rounded-4 shadow-sm">

                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="audio-icon">🎧</div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Audio Materi</h6>
                                            <small class="text-secondary">Pembuatan List Terstruktur HTML</small>
                                        </div>
                                    </div>

                                    <audio
                                        id="materiAudio3"
                                        controls
                                        class="w-100 mb-3"
                                        preload="metadata"
                                        playsinline
                                    >
                                        <source src="{{ url('audio/pembuatan list.mp3') }}" type="audio/mpeg">
                                        <source src="{{ url('audio/pembuatan list.ogg') }}" type="audio/ogg">
                                        <source src="{{ url('audio/pembuatan list.wav') }}" type="audio/wav">
                                        Browser Anda tidak mendukung audio HTML5.
                                    </audio>

                                    <details class="transcript">
                                        <summary>📝 Lihat transkrip audio</summary>
                                        <p class="small text-secondary mt-2">
                                            <strong>Speaker 1:</strong> Halo semuanya, selamat datang kembali di podcast belajar web development. Aku Raka. <br>
                                            <strong>Speaker 2:</strong> Dan aku Dina. Kali ini kita bakal bahas salah satu materi HTML yang sering dipakai sehari-hari, yaitu pembuatan list atau daftar terstruktur.<br>
                                            <strong>Speaker 1:</strong> Betul. List ini sering banget dipakai buat menu, daftar fitur, langkah-langkah, sampai outline materi.<br>
                                            <strong>Speaker 2:</strong> Oke, langsung ke dasar dulu. Di HTML, ada berapa jenis list sih raka?<br>
                                            <strong>Speaker 1:</strong> Secara umum ada dua jenis utama. Pertama, unordered list yang dibuat dengan tag &lt;ul&gt;, dan kedua ordered list yang dibuat dengan tag &lt;ol&gt;.<br>
                                            <strong>Speaker 2:</strong> Apa bedanya &lt;ul&gt; sama &lt;ol&gt;?<br>
                                            <strong>Speaker 1:</strong> &lt;ul&gt; digunakan untuk membuat list yang tidak berurutan, biasanya ditampilkan dengan bullet. Sedangkan &lt;ol&gt; digunakan untuk list berurutan, biasanya berupa angka atau huruf.<br>
                                            <strong>Speaker 2:</strong> Jadi kalau aku bikin daftar langkah memasak, lebih cocok pakai yang mana?<br>
                                            <strong>Speaker 1:</strong> Itu lebih cocok pakai &lt;ol&gt;, karena urutannya penting.<br>
                                            <strong>Speaker 2:</strong> Kalau cuma daftar barang belanja?<br>
                                            <strong>Speaker 1:</strong> Pakai &lt;ul&gt;, karena urutannya nggak terlalu berpengaruh.<br>
                                            <strong>Speaker 2:</strong> Nah, di dalam &lt;ul&gt; atau &lt;ol&gt;, kita nulis isinya pakai apa?<br>
                                            <strong>Speaker 1:</strong> Isinya ditulis menggunakan tag &lt;li&gt;. Setiap &lt;li&gt; merepresentasikan satu item dalam list.<br>
                                            <strong>Speaker 2:</strong> Jadi &lt;li&gt; itu nggak bisa berdiri sendiri ya?<br>
                                            <strong>Speaker 1:</strong> Betul. &lt;li&gt; harus berada di dalam &lt;ul&gt; atau &lt;ol&gt;.<br>
                                            <strong>Speaker 2:</strong> Aku pernah lihat list yang di dalamnya ada list lagi. Itu namanya apa?<br>
                                            <strong>Speaker 1:</strong> Itu disebut nested list, atau list bertingkat. Artinya, di dalam satu &lt;li&gt;, kita bisa menaruh &lt;ul&gt; atau &lt;ol&gt; lagi.<br>
                                            <strong>Speaker 2:</strong> Biasanya dipakai buat apa sih nested list?<br>
                                            <strong>Speaker 1:</strong> Biasanya untuk menampilkan struktur hierarki, seperti menu dropdown, daftar bab dan subbab, atau kategori dan subkategori.<br>
                                            <strong>Speaker 2:</strong> Kalau dilihat dari fungsinya, berarti pemilihan jenis list itu penting ya?<br>
                                            <strong>Speaker 1:</strong> Iya, penting banget. Kita harus menyesuaikan jenis list dengan konteksnya.<br>
                                            <strong>Speaker 2:</strong> Jadi kesimpulannya gimana?<br>
                                            <strong>Speaker 1:</strong> Gunakan ordered list atau &lt;ol&gt; untuk langkah kerja atau proses yang berurutan, dan gunakan unordered list atau &lt;ul&gt; untuk daftar tanpa urutan tertentu.<br>
                                            <strong>Speaker 2:</strong> Oke, jelas banget. Dengan list yang tepat, tampilan konten juga jadi lebih rapi dan mudah dipahami.<br>
                                            <strong>Speaker 1:</strong> Betul. Dan ini juga membantu struktur HTML jadi lebih semantik.<br>
                                            <strong>Speaker 2:</strong> Semoga pembahasan tentang pembuatan list terstruktur ini bisa membantu teman-teman yang lagi belajar HTML. Terima kasih sudah mendengarkan. Sampai ketemu di episode berikutnya. Happy coding.
                                        </p>
                                    </details>

                                </div>
                            </div>

                            <!-- CODE -->
                            <div class="tab-pane fade" id="materi3-code">

                                <div class="row g-3">

                                    <!-- ===== KODE ===== -->
                                    <div class="col-lg-6">
                                        <div class="code-wrapper h-100">

                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="fw-bold text-primary mb-0">
                                                    💻 Kode HTML
                                                </h6>

                                                <button class="btn btn-primary btn-sm"
                                                        onclick="document.getElementById('walkthroughAudio3').play()">
                                                    🎧 Walkthrough Kode
                                                </button>

                                                <audio id="walkthroughAudio3" preload="metadata" playsinline>
                                                    <source src="/audio/materi 3-kode.mp3" type="audio/mpeg">
                                                    <source src="/audio/materi 3-kode.ogg" type="audio/ogg">
                                                    <source src="/audio/materi 3-kode.wav" type="audio/wav">
                                                    Browser Anda tidak mendukung audio.
                                                </audio>
                                            </div>
<pre class="code-box"><code>
<span class="tag">&lt;h1&gt;</span>List Terstruktur HTML<span class="tag">&lt;/h1&gt;</span>

<span class="tag">&lt;h3&gt;</span>Unordered List (Tidak Berurutan)<span class="tag">&lt;/h3&gt;</span>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li&gt;</span>HTML<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>CSS<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>JavaScript<span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>

<span class="tag">&lt;h3&gt;</span>Ordered List (Berurutan)<span class="tag">&lt;/h3&gt;</span>
<span class="tag">&lt;ol&gt;</span>
    <span class="tag">&lt;li&gt;</span>Analisis Kebutuhan<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>Desain Website<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>Implementasi<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>Pengujian<span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ol&gt;</span>

<span class="tag">&lt;h3&gt;</span>Nested List (List Bertingkat)<span class="tag">&lt;/h3&gt;</span>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li&gt;</span>Frontend
        <span class="tag">&lt;ul&gt;</span>
            <span class="tag">&lt;li&gt;</span>HTML<span class="tag">&lt;/li&gt;</span>
            <span class="tag">&lt;li&gt;</span>CSS<span class="tag">&lt;/li&gt;</span>
        <span class="tag">&lt;/ul&gt;</span>
    <span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li&gt;</span>Backend<span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>
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
                                                <li><span>&lt;ul&gt;</span> Membuat list tidak berurutan (bullet)</li>
                                                <li><span>&lt;ol&gt;</span> Membuat list berurutan (angka)</li>
                                                <li><span>&lt;li&gt;</span> Item atau isi dari list</li>
                                                <li><span>Nested List</span> List di dalam list (bertingkat)</li>
                                            </ul>
                                            <div class="alert alert-info mt-3 small">
                                                💡 <strong>Catatan:</strong>
                                                Gunakan <b>Ordered List</b> untuk langkah kerja,
                                                dan <b>Unordered List</b> untuk daftar tanpa urutan.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LIVE -->
                            <div class="tab-pane fade" id="materi3-live">

                                <div class="live-panel">

                                    <!-- HEADER -->
                                    <div class="live-header">
                                        💻 Editor HTML
                                        <span class="badge bg-primary">Real-time</span>
                                    </div>
                                    <!-- EDITOR -->
                                    <textarea id="editorMateri3" class="live-editor">
<h1>Belajar HTML</h1>

<h3>Daftar Mata Pelajaran</h3>
<ul>
    <li>Pemrograman Web</li>
    <li>Basis Data</li>
    <li>Jaringan Komputer</li>
</ul>

<h3>Langkah Membuat Website</h3>
<ol>
    <li>Menentukan tujuan</li>
    <li>Membuat desain</li>
    <li>Menulis kode HTML</li>
</ol>
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

                                        <iframe id="outputMateri3" class="live-output"></iframe>

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

    const modal = document.getElementById('modalMateri3');
    if (!modal) return;

    /* ==============================
       LIVE OUTPUT
    ============================== */
    const editor = document.getElementById('editorMateri3');
    const output = document.getElementById('outputMateri3');

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
