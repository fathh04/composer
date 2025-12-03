<div class="container py-4">
  <h3 class="fw-bold text-center mb-4 text-primary">🎓 Materi Pembelajaran Adaptif</h3>

  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-4" data-aos="fade-up">
      <div class="card shadow-lg border-0 rounded-4 h-100">
        <img src="{{ url('img/visual.jpg')}}" class="card-img-top rounded-top-4 img-landscape" alt="Video HTML">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">🎬 Konsep Dasar HTML</h5>
          <p class="card-text text-secondary">Pelajari struktur dasar HTML dengan video animasi.</p>
          <button class="btn btn-gradient w-100" data-bs-toggle="modal" data-bs-target="#modalVideo">▶️ Lihat Materi</button>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card shadow-lg border-0 rounded-4 h-100">
        <img src="{{ url('img/struktur.jpg')}}" class="card-img-top rounded-top-4 img-landscape" alt="Diagram HTML">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">🔍 Struktur Tag HTML</h5>
          <p class="card-text text-secondary">Jelajahi hubungan antar tag HTML melalui diagram.</p>
          <button class="btn btn-gradient w-100" data-bs-toggle="modal" data-bs-target="#modalDiagram">🔎 Lihat Diagram</button>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card shadow-lg border-0 rounded-4 h-100">
        <img src="{{ url('img/peta konsep.jpg')}}" class="card-img-top rounded-top-4 img-landscape" alt="Peta Konsep">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">🧠 Peta Konsep</h5>
          <p class="card-text text-secondary">Lihat materi dalam bentuk peta konsep visual.</p>
          <button class="btn btn-gradient w-100" data-bs-toggle="modal" data-bs-target="#modalMindmap">🌐 Buka Peta</button>
        </div>
      </div>
    </div>

    <!-- Card 4 (Syntax Highlighting) -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
      <div class="card shadow-lg border-0 rounded-4 h-100">
        <img src="{{ url('img/syntax.png')}}" class="card-img-top rounded-top-4 img-landscape" alt="Syntax">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">🎨 Syntax Highlighting</h5>
          <p class="card-text text-secondary">Pelajari struktur HTML dengan mudah</p>
          <button class="btn btn-gradient w-100" data-bs-toggle="modal" data-bs-target="#modalSyntax">🎨 Pelajari</button>
        </div>
      </div>
    </div>

    <!-- Card 5 (Anatomi Tag) -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
      <div class="card shadow-lg border-0 rounded-4 h-100">
        <img src="{{ url('img/anatomi.png')}}" class="card-img-top rounded-top-4 img-landscape" alt="Anatomi Tag HTML">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">🏗️ Anatomi Tag HTML</h5>
          <p class="card-text text-secondary">Pelajari apa itu tag pembuka, isi, dan penutup.</p>
          <button class="btn btn-gradient w-100" data-bs-toggle="modal" data-bs-target="#modalAnatomi">🧱 Lihat Anatomi</button>
        </div>
      </div>
    </div>

    <!-- Card 6 (Tabel HTML) -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
      <div class="card shadow-lg border-0 rounded-4 h-100">
        <img src="{{ url('img/table.png')}}" class="card-img-top rounded-top-4 img-landscape" alt="HTML Table">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">📊 Tabel HTML</h5>
          <p class="card-text text-secondary">Visualisasi sel, baris, colspan, dan rowspan.</p>
          <button class="btn btn-gradient w-100" data-bs-toggle="modal" data-bs-target="#modalTable">📊 Lihat Materi</button>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- ======================================= -->
<!--                 MODALS                  -->
<!-- ======================================= -->

<!-- Video -->
<div class="modal fade" id="modalVideo" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">🎬 HTML TABLE</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9 mb-3">
          <iframe src="https://youtu.be/e62D-aayveY?si=l8mSTh5NYEfCVLeU" allowfullscreen></iframe>
        </div>
        <p class="text-secondary">Video tersebut menjelaskan konsep dasar dari table di HTML.</p>
      </div>
    </div>
  </div>
</div>

<!-- Diagram -->
<div class="modal fade" id="modalDiagram" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">🔍 Struktur Tag HTML</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
          <iframe src="https://mermaid.live/view#pako:eNqNkEEOgyAMRa9CUVoUIlwh6UqV0g0m2BFSUdDQ5uy_b4RyNDs3W8ycgZy4DBgYjaSKZx4kkbkvvFjxyqDaGx0k0BlY6yN8tHn1bBt-QnQKM3snoDdB2K2QEQv-WpqBIqOZ2h4yVmMsoylOZTUtAfufpP9cC4VR"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Mindmap -->
<div class="modal fade" id="modalMindmap" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">🧠 Peta Konsep Table HTML</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9 mb-3">
          <iframe src="https://embed.kumu.io/af689ed7b9f23b04a4d6a57f155a1342" allowfullscreen></iframe>
        </div>
        <p class="text-secondary">Peta konsep ini membantu kamu memahami tag dalam table HTML.</p>
      </div>
    </div>
  </div>
</div>

<!-- Syntax Modal -->
<div class="modal fade" id="modalSyntax" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">🎨 Syntax Highlighting</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <pre style="background:#1e1e1e; color:#fff; padding:20px; border-radius:12px; font-size:14px; overflow-x:auto;">
<span style="color:#569cd6;">&lt;!DOCTYPE</span> <span style="color:#dcdcaa;">html</span><span style="color:#569cd6;">&gt;</span>
<span style="color:#569cd6;">&lt;html</span> <span style="color:#4ec9b0;">lang</span>=<span style="color:#dcdcaa;">"en"</span><span style="color:#569cd6;">&gt;</span>
&nbsp;&nbsp;<span style="color:#569cd6;">&lt;head&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#569cd6;">&lt;title&gt;</span><span style="color:#fff;">Contoh HTML</span><span style="color:#569cd6;">&lt;/title&gt;</span>
&nbsp;&nbsp;<span style="color:#569cd6;">&lt;/head&gt;</span>
&nbsp;&nbsp;<span style="color:#569cd6;">&lt;body&gt;</span>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#569cd6;">&lt;h1</span> <span style="color:#4ec9b0;">style</span>=<span style="color:#dcdcaa;">"color: red;"</span><span style="color:#569cd6;">&gt;</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#fff;">Hello World!</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#569cd6;">&lt;/h1&gt;</span>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#569cd6;">&lt;p&gt;</span><span style="color:#fff;">Ini adalah contoh paragraf HTML.</span><span style="color:#569cd6;">&lt;/p&gt;</span>

&nbsp;&nbsp;<span style="color:#569cd6;">&lt;/body&gt;</span>
<span style="color:#569cd6;">&lt;/html&gt;</span>
        </pre>

        <p class="text-secondary mt-3">
            Syntax highlighting membantu kamu dalam memahami kode HTML dengan mudah<br>
            <strong>Penjelasan warna:</strong><br>
            🔵 <b>Tag HTML</b> = biru<br>
            🟢 <b>Atribut</b> = hijau<br>
            🟡 <b>Nilai Atribut</b> = kuning<br>
            ⚪ <b>Konten</b> = putih<br>
        </p>

      </div>
    </div>
  </div>
</div>

<!-- Anatomi Modal -->
<div class="modal fade" id="modalAnatomi" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">🏗️ Anatomi Tag HTML</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="{{ url('img/anatomi.jpg') }}" class="img-fluid rounded mb-3">
        <p class="text-secondary">
          Tag HTML memiliki anatomi:<br>
          🔹 Tag Pembuka: &lt;p&gt;<br>
          🔹 Isi Konten: "Hello World"<br>
          🔹 Tag Penutup: &lt;/p&gt;
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Table Modal -->
<div class="modal fade" id="modalTable" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">📊 Tabel HTML – Visualisasi</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img src="{{ url('img/table.jpg') }}" class="img-fluid rounded mb-3">
        <p class="text-secondary">
          Materi mencakup:<br>
          ✔ Struktur table (table, tr, td)<br>
          ✔ Header vs Data<br>
          ✔ Visualisasi colspan & rowspan<br>
        </p>
      </div>
    </div>
  </div>
</div>


<!-- ========================== -->
<!--           CSS              -->
<!-- ========================== -->

<style>
/* Gambar Landscape */
.img-landscape {
    aspect-ratio: 16/9;
    width: 100%;
    object-fit: cover;
}

/* Tombol bertema PRIMARY */
.btn-gradient {
    background: linear-gradient(90deg, #0b5ed7, #0d6efd); /* full primary */
    color: #fff !important;
    border: none;
    border-radius: 30px;
    padding: 8px 14px;
    transition: 0.3s;
}
.btn-gradient:hover {
    opacity: .9;
    transform: translateY(-1px);
}

/* Card Hover Primary */
.card {
    transition: .3s ease;
}
.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 25px rgba(13, 110, 253, 0.25); /* biru */
}

/* Modal Header Primary */
.modal-header.bg-primary,
.bg-gradient {
    background: linear-gradient(90deg, #0b5ed7, #0d6efd) !important;
    color: #fff;
}

/* iframe style */
iframe {
    border: none;
    border-radius: 12px;
}

/* Progress bar primary */
.progress-bar {
    background-color: #0d6efd !important;
}

/* Backdrop */
.modal-backdrop.show {
    opacity: .5;
    background: #000;
}

/* Hover untuk kartu pengajar */
.hover-zoom:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 25px rgba(13, 110, 253, 0.3);
}
</style>



<!-- ========================== -->
<!--      SCRIPT AOS + FIX     -->
<!-- ========================== -->

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();

document.querySelectorAll('.modal').forEach(modal => {
  modal.addEventListener('hidden.bs.modal', function() {
    const iframe = modal.querySelector('iframe');
    if (iframe) {
      const src = iframe.src;
      iframe.src = '';
      iframe.src = src;
    }
  });
});
</script>
