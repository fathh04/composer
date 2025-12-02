<div class="container py-4">
  <h3 class="fw-bold text-center mb-4 text-primary">
    🎧 Materi Pembelajaran Adaptif
  </h3>

  <div class="row g-4 justify-content-center">

    <!-- CARD 1 -->
    <div class="col-md-4" data-aos="fade-up">
      <div class="podcast-card shadow-lg rounded-4 h-100 p-4">
        <div class="icon-wrapper mb-3">
          <i class="bi bi-soundwave text-primary"></i>
        </div>

        <h5 class="fw-bold text-primary">Konsep Dasar HTML</h5>
        <p class="text-secondary mt-2">
          Penjelasan audio tentang apa itu HTML dan mengapa HTML adalah pondasi dari sebuah website.
        </p>

        <button class="btn btn-primary bg-gradient-primary w-100 mt-auto rounded-pill py-2"
                data-bs-toggle="modal" data-bs-target="#audioHTML">
          ▶️ Putar Podcast
        </button>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="podcast-card shadow-lg rounded-4 h-100 p-4">
        <div class="icon-wrapper mb-3">
          <i class="bi bi-diagram-3 text-primary"></i>
        </div>

        <h5 class="fw-bold text-primary">Struktur Tag HTML</h5>
        <p class="text-secondary mt-2">
          Penjelasan audio mengenai struktur tag HTML, tag pembuka–penutup, dan atribut.
        </p>

        <button class="btn btn-primary bg-gradient-primary w-100 mt-auto rounded-pill py-2"
                data-bs-toggle="modal" data-bs-target="#audioStruktur">
          ▶️ Putar Podcast
        </button>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
      <div class="podcast-card shadow-lg rounded-4 h-100 p-4">
        <div class="icon-wrapper mb-3">
          <i class="bi bi-diagram-2 text-primary"></i>
        </div>

        <h5 class="fw-bold text-primary">Tabel HTML</h5>
        <p class="text-secondary mt-2">
          Audio panduan lengkap tentang elemen dan atribut dalam pembuatan tabel
        </p>

        <button class="btn btn-primary bg-gradient-primary w-100 mt-auto rounded-pill py-2"
                data-bs-toggle="modal" data-bs-target="#audioPeta">
          ▶️ Putar Podcast
        </button>
      </div>
    </div>

    <!-- CARD 4 : CODE WALKTHROUGH TTS -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
      <div class="podcast-card shadow-lg rounded-4 h-100 p-4">
        <div class="icon-wrapper mb-3">
          <i class="bi bi-filetype-html text-primary"></i>
        </div>

        <h5 class="fw-bold text-primary">Code Walkthrough:  Tabel HTML</h5>
        <p class="text-secondary mt-2">
          Dengarkan penjelasan otomatis baris demi baris tentang Tabel HTML.
        </p>

        <button class="btn btn-primary bg-gradient-primary w-100 mt-auto rounded-pill py-2"
                data-bs-toggle="modal" data-bs-target="#audioCodeWalkthrough">
          🎧 Dengarkan Penjelasan
        </button>
      </div>
    </div>

    {{-- === MATERI DARI PENGAJAR === --}}
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h4 class="fw-bold text-primary d-flex align-items-center gap-2">
            <i class="bi bi-journal-text"></i> 
            Materi Pengajar
        </h4>

        <span class="badge bg-primary rounded-pill px-3 py-2 shadow-sm">
            Auditori
        </span>
    </div>

    <hr style="height:3px; border:none; background:linear-gradient(to right, #0d6efd, #6ea8fe); border-radius:10px; margin-top:-5px; margin-bottom:20px;">

    <div class="row g-4 mt-3">

    @foreach($materi->where('gaya_belajar', 'auditori') as $m)
    <div class="col-md-4">
        <div class="card shadow-sm border-0 rounded-4 h-100">
            
            {{-- Thumbnail file (otomatis berdasarkan tipe) --}}
            @php
                $ext = strtolower(pathinfo($m->file_materi, PATHINFO_EXTENSION));
                $isImage = in_array($ext, ['jpg','jpeg','png']);
                $isVideo = in_array($ext, ['mp4']);
                $isPdf   = ($ext === 'pdf');
                $isAudio = in_array($ext, ['mp3','wav']);
            @endphp

            <div class="card-img-top text-center p-3" style="height:160px; background:#f8f9fa;">
                @if($isImage)
                    <img src="{{ asset('storage/'.$m->file_materi) }}" 
                        class="img-fluid rounded" style="max-height:140px;">
                @elseif($isVideo)
                    <i class="bi bi-play-circle-fill text-primary fs-1"></i>
                @elseif($isPdf)
                    <i class="bi bi-file-earmark-pdf-fill text-danger fs-1"></i>
                @elseif($isAudio)
                    <i class="bi bi-music-note-beamed text-primary fs-1"></i>
                @else
                    <i class="bi bi-file-earmark-fill text-secondary fs-1"></i>
                @endif
            </div>

            <div class="card-body">
                <h5 class="fw-bold text-primary">{{ $m->judul }}</h5>
                <p class="text-muted small">{{ $m->deskripsi }}</p>
            </div>

            <div class="card-footer bg-white border-0 text-center pb-3">
                @if($m->file_materi)
                    <a href="{{ asset('storage/'.$m->file_materi) }}" target="_blank"
                    class="btn btn-primary rounded-pill px-4">
                        Lihat Materi
                    </a>
                @else
                    <span class="text-muted fst-italic">Tidak ada file</span>
                @endif
            </div>
        </div>
    </div>
    @endforeach

    </div>

  </div>
</div>

<!-- ===================== MODAL AUDIO ===================== -->

<!-- Modal 1 -->
<div class="modal fade" id="audioHTML" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3 rounded-4">

      <div class="modal-header border-0">
        <h5 class="fw-bold">🎧 Konsep Dasar HTML</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p>Narasi audio akan menjelaskan apa itu HTML dan contoh penggunaannya.</p>
        <audio controls class="w-100">
          <source src="audio/html-basic.mp3" type="audio/mpeg">
        </audio>
      </div>

    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="audioStruktur" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3 rounded-4">

      <div class="modal-header border-0">
        <h5 class="fw-bold">🎧 Struktur Tag HTML</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p>Penjelasan audio tentang tag, atribut, dan hubungan antar elemen HTML.</p>
        <audio controls class="w-100">
          <source src="audio/html-structure.mp3" type="audio/mpeg">
        </audio>
      </div>

    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="audioPeta" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3 rounded-4">

      <div class="modal-header border-0">
        <h5 class="fw-bold">🎧 Tabel HTML</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p>Narasi audio mengenai tabel HTML dan cara menyusunnya.</p>
        <audio controls class="w-100">
          <source src="audio/html-concept-map.mp3" type="audio/mpeg">
        </audio>
      </div>

    </div>
  </div>
</div>

<!-- Modal 4: CODE WALKTHROUGH (TTS) -->
<div class="modal fade" id="audioCodeWalkthrough" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4 rounded-4">

      <div class="modal-header border-0">
        <h5 class="fw-bold">🎧 Code Walkthrough Tabel HTML</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="stopTTS()"></button>
      </div>

      <div class="modal-body">

        <p class="text-secondary">Klik tombol untuk mendengarkan penjelasan kode HTML berikut:</p>

<pre class="bg-dark text-light p-3 rounded-3">
&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th&gt;Nama&lt;/th&gt;
    &lt;th&gt;Kelas&lt;/th&gt;
  &lt;/tr&gt;

  &lt;tr&gt;
    &lt;td&gt;Sinta&lt;/td&gt;
    &lt;td&gt;10 RPL&lt;/td&gt;
  &lt;/tr&gt;

  &lt;tr&gt;
    &lt;td&gt;Budi&lt;/td&gt;
    &lt;td&gt;11 TKJ&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</pre>

        <!-- Waveform -->
        <div id="waveform" class="waveform my-3 d-none">
          <div></div><div></div><div></div><div></div><div></div>
        </div>

        <button class="btn btn-primary w-100 rounded-pill py-2" onclick="playCodeWalkthrough()">
          ▶️ Putar Penjelasan Kode
        </button>

      </div>

    </div>
  </div>
</div>

<!-- ===================== STYLE ===================== -->
<style>
.bg-gradient-primary {
  background: linear-gradient(135deg, #0d6efd, #3a8ffd);
  border: none;
}

.podcast-card {
  background: #fff;
  border-radius: 18px;
  transition: all 0.25s ease-in-out;
  display: flex;
  flex-direction: column;
}

.podcast-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 25px rgba(0, 97, 255, 0.25);
}

.icon-wrapper {
  width: 70px;
  height: 70px;
  background: rgba(13, 110, 253, 0.1);
  border-radius: 16px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.icon-wrapper i {
  font-size: 2rem;
}

/* Modal Rounded */
.modal-content {
  border-radius: 20px !important;
}

/* Waveform */
.waveform {
  display: flex;
  justify-content: center;
  gap: 6px;
  height: 40px;
}

.waveform div {
  width: 6px;
  height: 100%;
  background: #0d6efd;
  border-radius: 10px;
  animation: sound 0.8s infinite ease-in-out;
}

.waveform div:nth-child(1) { animation-delay: 0s; }
.waveform div:nth-child(2) { animation-delay: 0.1s; }
.waveform div:nth-child(3) { animation-delay: 0.2s; }
.waveform div:nth-child(4) { animation-delay: 0.3s; }
.waveform div:nth-child(5) { animation-delay: 0.4s; }

@keyframes sound {
  0% { height: 10%; }
  50% { height: 100%; }
  100% { height: 10%; }
}
</style>

<!-- ===================== SCRIPT TTS ===================== -->
<script>
const codeNarration = `
Kita mulai dari baris pertama.
Tag table digunakan untuk membuat sebuah tabel di HTML.
Atribut border bernilai satu membuat garis pada tabel agar terlihat jelas.

Berikutnya, kita masuk ke baris tr pertama.
Tag tr berarti table row, atau baris pada tabel.

Di dalamnya ada tag th.
Tag th digunakan untuk membuat header tabel,
yaitu judul kolom. Pada contoh ini, ada dua header:
Nama dan Kelas.

Selanjutnya adalah baris kedua.
Tag tr kembali digunakan untuk membuat baris baru.
Di dalamnya terdapat tag td.
Tag td berarti table data, yaitu isi dari tabel.

Baris ini berisi data Sinta pada kolom pertama,
dan kelas sepuluh RPL pada kolom kedua.

Terakhir, baris berikutnya berisi data Budi
dan kelas sebelas TKJ.

Itulah struktur dasar tabel HTML:
table untuk tabel, tr untuk baris, th untuk header kolom,
dan td untuk isi setiap sel.
`;

let utterance;

// =============================
//   👶 CARI SUARA ANAK JIKA ADA
// =============================
let voices = [];
window.speechSynthesis.onvoiceschanged = () => {
    voices = speechSynthesis.getVoices();

    // Cari suara anak berdasarkan nama voice yang tersedia
    const childVoice = voices.find(v =>
        v.name.toLowerCase().includes("child") ||
        v.name.toLowerCase().includes("kids") ||
        v.name.toLowerCase().includes("boy") ||
        v.name.toLowerCase().includes("girl")
    );

    // Jika suara anak ditemukan → set sebagai default
    if (childVoice) {
        console.log("Suara anak ditemukan:", childVoice.name);
        utterance.voice = childVoice;
    } else {
        console.log("Tidak ada suara anak, memakai default.");
    }
};

// =============================
//   ▶️ PLAY TTS
// =============================
function playCodeWalkthrough() {
    stopTTS();
    document.getElementById("waveform").classList.remove("d-none");

    utterance = new SpeechSynthesisUtterance(codeNarration);
    utterance.lang = "id-ID";
    utterance.rate = 1;
    utterance.pitch = 1;

    // Coba pasang suara anak jika sudah ditemukan sebelumnya
    if (voices.length > 0) {
        const childVoice = voices.find(v =>
            v.name.toLowerCase().includes("child") ||
            v.name.toLowerCase().includes("kids") ||
            v.name.toLowerCase().includes("boy") ||
            v.name.toLowerCase().includes("girl")
        );
        if (childVoice) utterance.voice = childVoice;
    }

    utterance.onend = () => {
        document.getElementById("waveform").classList.add("d-none");
    };

    speechSynthesis.speak(utterance);
}

// =============================
//   ⏹ STOP TTS
// =============================
function stopTTS() {
    if (speechSynthesis.speaking) {
        speechSynthesis.cancel();
    }
    document.getElementById("waveform").classList.add("d-none");
}
</script>

