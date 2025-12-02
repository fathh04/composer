<div class="container py-4">
  <h3 class="fw-bold text-center mb-4 text-primary">🤸‍♂️ Materi Pembelajaran Adaptif</h3>

  <div class="row g-4 justify-content-center">

    <!-- Card 1 - LATIHAN LANGSUNG -->
    <div class="col-md-4" data-aos="fade-up">
      <div class="card shadow-lg border-0 rounded-4 h-100">
        <img src="{{ asset('img/kinestetik.png') }}"
             class="card-img-top rounded-top-4" alt="Latihan HTML">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">💻 Latihan Praktik HTML</h5>
          <p class="card-text text-secondary">
            Ikuti contoh kode dan praktik HTML.
          </p>

          <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalLatihanHtml">
            🚀 Mulai Praktik
          </button>
        </div>
      </div>
    </div>

    <!-- Card 2 - SUSUN STRUKTUR TABEL -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card shadow-lg border-0 rounded-4 h-100">
        <img src="{{ asset('img/puzzle.png')}}"
             class="card-img-top rounded-top-4" alt="Drag HTML">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">🧩 Susun Struktur Tabel HTML</h5>
          <p class="card-text text-secondary">
            Susun elemen HTML untuk membentuk tabel.
          </p>

          <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalDragDrop">
            🎯 Mulai Tantangan
          </button>
        </div>
      </div>
    </div>

    {{-- === MATERI DARI PENGAJAR === --}}
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h4 class="fw-bold text-primary d-flex align-items-center gap-2">
            <i class="bi bi-journal-text"></i> 
            Materi Pengajar
        </h4>

        <span class="badge bg-primary rounded-pill px-3 py-2 shadow-sm">
            Kinestetik
        </span>
    </div>

    <hr style="height:3px; border:none; background:linear-gradient(to right, #0d6efd, #6ea8fe); border-radius:10px; margin-top:-5px; margin-bottom:20px;">
    <div class="row g-4 mt-3">

    @foreach($materi->where('gaya_belajar', 'kinestetik') as $m)
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

<!-- Modal 1 - LATIHAN -->
<div class="modal fade" id="modalLatihanHtml" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-primary">💻 Latihan Membuat Tabel HTML</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p class="fw-bold">Contoh tabel yang harus Anda tiru:</p>

<pre id="htmlSample" class="bg-light p-3 rounded border">
<span class="tag" data-info="Tag utama untuk membuat tabel."> &lt;table border="1"&gt; </span>
  <span class="tag" data-info="Tag baris dalam tabel."> &lt;tr&gt; </span>
    <span class="tag" data-info="Tag sel dalam tabel."> &lt;td&gt;Nama&lt;/td&gt; </span>
    <span class="tag" data-info="Tag sel dalam tabel."> &lt;td&gt;Kelas&lt;/td&gt; </span>
  <span class="tag" data-info="Penutup baris tabel."> &lt;/tr&gt; </span>
  <span class="tag" data-info="Tag baris dalam tabel."> &lt;tr&gt; </span>
    <span class="tag" data-info="Tag sel berisi data siswa."> &lt;td&gt;Budi&lt;/td&gt; </span>
    <span class="tag" data-info="Tag sel berisi kelas siswa."> &lt;td&gt;X IPA&lt;/td&gt; </span>
  <span class="tag" data-info="Penutup baris tabel."> &lt;/tr&gt; </span>
<span class="tag" data-info="Penutup tabel."> &lt;/table&gt; </span>
</pre>

        <p class="mt-3">Silakan ketik ulang kode tabel Anda di bawah ini:</p>
        <textarea id="htmlInput" class="form-control" rows="8" placeholder="Ketik kode Anda disini..."></textarea>
        <button class="btn btn-primary mt-3" onclick="renderHTML()">▶️ Jalankan</button>

        <div class="border rounded p-3 mt-3" id="htmlOutput"
             style="min-height:120px; background:#fafafa;">
          Hasil akan tampil di sini...
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Modal 2 - SUSUN STRUKTUR TABEL -->
<div class="modal fade" id="modalDragDrop" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-primary">🧩 Susun Struktur Tabel HTML</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p>Seret dan lepaskan untuk menyusun struktur tabel HTML yang benar.</p>

        <div class="d-flex gap-3">

          <!-- Elemen -->
          <div class="border p-3 rounded" style="width:45%">
            <p class="fw-bold mb-2">🔧 Elemen:</p>
            <div draggable="true" class="drag-item"> &lt;table&gt; </div>
            <div draggable="true" class="drag-item"> &lt;tr&gt; </div>
            <div draggable="true" class="drag-item"> &lt;td&gt;Nama&lt;/td&gt; </div>
            <div draggable="true" class="drag-item"> &lt;td&gt;Kelas&lt;/td&gt; </div>
            <div draggable="true" class="drag-item"> &lt;/tr&gt; </div>
            <div draggable="true" class="drag-item"> &lt;/table&gt; </div>
          </div>

          <!-- Dropzone -->
          <div class="border p-3 rounded" style="width:55%">
            <p class="fw-bold mb-2">📌 Susunan:</p>
            <div id="dropzone" class="dropzone"></div>
          </div>

        </div>

        <button class="btn btn-primary mt-3" onclick="checkOrder()">✔️ Cek Jawaban</button>

        <p id="resultDrag" class="mt-2 fw-bold"></p>
      </div>
    </div>
  </div>
</div>

<style>
.drag-item {
  padding: 8px 12px;
  background: #dbeafe;
  border-radius: 8px;
  margin-bottom: 8px;
  cursor: grab;
  color: #0d6efd;
  font-weight: 500;
}
.dropzone {
  min-height: 150px;
  border: 2px dashed #0d6efd;
  border-radius: 10px;
  padding: 10px;
}
.tag {
  background: #e7f1ff;
  padding: 2px 4px;
  border-radius: 4px;
  cursor: pointer;
}
</style>

<script>
// RENDER HTML
function renderHTML() {
  const input = document.getElementById("htmlInput").value;
  document.getElementById("htmlOutput").innerHTML = input;
}

// DRAG & DROP
const dropzone = document.getElementById("dropzone");

document.querySelectorAll(".drag-item").forEach(item => {
  item.addEventListener("dragstart", e => {
    e.dataTransfer.setData("text", e.target.innerText);
  });
});

dropzone.addEventListener("dragover", e => e.preventDefault());

dropzone.addEventListener("drop", e => {
  e.preventDefault();
  const text = e.dataTransfer.getData("text");
  const div = document.createElement("div");
  div.className = "drag-item";
  div.innerText = text;
  dropzone.appendChild(div);
});

function checkOrder() {
  const correct = [
    "<table>",
    "<tr>",
    "<td>Nama</td>",
    "<td>Kelas</td>",
    "</tr>",
    "</table>"
  ];

  const user = Array.from(dropzone.children).map(div => div.innerText.trim());

  if (JSON.stringify(correct) === JSON.stringify(user)) {
    resultDrag.innerHTML = "✅ Benar! Struktur tabel HTML sudah tepat!";
    resultDrag.style.color = "#0d6efd";
  } else {
    resultDrag.innerHTML = "❌ Masih salah, coba susun kembali!";
    resultDrag.style.color = "red";
  }
}

// TOOLTIP AKTIF SAAT DIKLIK (BUKAN MOUSEENTER)
document.querySelectorAll(".tag").forEach(tag => {
  let tooltip = null;

  tag.addEventListener("click", function () {
    if (tooltip) {
      tooltip.dispose();
      tooltip = null;
      return;
    }

    tooltip = new bootstrap.Tooltip(tag, {
      title: tag.getAttribute("data-info"),
      trigger: "manual",
      placement: "top"
    });

    tooltip.show();
  });
});
</script>
