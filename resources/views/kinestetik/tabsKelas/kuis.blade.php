{{-- =========================================
|  KUIS POSTTEST KINESTETIK (FINAL + PAGINATION)
|========================================= --}}

<style>
:root{
    --primary:#0d6efd;
    --soft:#f0f6ff;
}

/* ========== CARD POSTTEST ========== */
.posttest-card{
    border-radius:20px;
    background:#ffffff;
    border:1px solid #e5e7eb;

    /* SHADOW HALUS AGAR TERPISAH DARI LATAR */
    box-shadow:
        0 4px 12px rgba(0,0,0,.06),
        0 1px 3px rgba(0,0,0,.05);

    transition:all .25s ease;
}

/* HOVER: NAIK SEDIKIT, TAPI TETAP SOFT */
.posttest-card:hover{
    transform:translateY(-6px);
    box-shadow:
        0 12px 28px rgba(0,0,0,.10),
        0 4px 10px rgba(0,0,0,.06);
}

/* ========== BADGE SELESAI ========== */
.badge-done{
    background:#eafaf1;
    color:#198754;
    font-weight:600;
    padding:6px 12px;
    border-radius:999px;
    font-size:.75rem;
}

/* ========== SCORE BOX ========== */
.score-box{
    width:88px;
    height:88px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:18px;
    background:#f0f6ff;
    border:1px solid #dbe7ff;
    font-size:2.2rem;
    font-weight:700;
    color:#0d6efd;
}

/* BUTTON */
.posttest-card .btn{
    border-radius:12px;
    font-weight:600;
}

/* ========== CHECK ANIMATION ========== */
.status-done{
    width:42px;
    height:42px;
    border-radius:50%;
    border:2px solid #198754;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 auto;
    position:relative;
}

.status-done::after{
    content:"";
    width:10px;
    height:18px;
    border-right:3px solid #198754;
    border-bottom:3px solid #198754;
    transform:rotate(45deg) scale(0);
    animation:checkDraw .5s ease-out forwards;
}

@keyframes checkDraw{
    0%{
        transform:rotate(45deg) scale(0);
        opacity:0;
    }
    100%{
        transform:rotate(45deg) scale(1);
        opacity:1;
    }
}

/* QUIZ BOX */
.quiz-container{
    background:#fff;
    border-radius:18px;
    padding:28px;
    border:1px solid #e5e7eb;
    box-shadow:0 6px 20px rgba(0,0,0,.06);
}

/* QUESTION */
.quiz-question{
    margin-bottom:24px;
    padding:18px 20px;
    border-left:5px solid var(--primary);
    background:var(--soft);
    border-radius:12px;
}

/* ================= SLOT KOSONG (INLINE) ================= */
.zone{
 display:inline-flex;
 align-items:center;
 justify-content:center;

 min-width:120px;
 max-width:180px;        /* BATAS MAKSIMAL */
 min-height:28px;

 padding:2px 6px;
 margin:0 4px;

 border:2px dashed #0d6efd;
 border-radius:6px;

 background:#1f2937;     /* GELAP */
 color:#f9fafb;          /* TEKS TERANG */

 font-family:monospace;
 font-size:14px;

 overflow:hidden;
 white-space:nowrap;
 text-overflow:ellipsis;
 vertical-align:middle;
}

/* ================= ITEM DRAG ================= */
.item{
 cursor:grab;
 padding:6px 10px;
 background:#111827;     /* GELAP */
 color:#f9fafb;          /* TERANG */
 border:1px solid #374151;
 border-radius:6px;
 margin-bottom:6px;
 font-family:monospace;
 font-size:14px;
}

.item.dragging{
 opacity:.4;
}
.zone:hover{
 border-color:#22c55e;
 background:#064e3b;
}

.choice{
 display:flex;
 align-items:center;
 gap:10px;
 margin:8px 0;
 padding:12px 15px;
 background:#fff;
 border:2px solid #d9e6ff;
 border-radius:12px;
 cursor:pointer;
 transition:.2s;
}
.choice:hover{
 background:#eef4ff;
}
.choice input{
 transform:scale(1.2);
}
.choice.selected{
 background:#d7e8ff;
 border-color:var(--primary);
}

/* ================= LOCKED POSTTEST ================= */
.locked-card {
    opacity: 0.6;
    pointer-events: none;
}

.lock-icon {
    font-size: 3rem;
    color: #0d6efd;
    animation: lockPulse 1.8s infinite;
}

/* SHAKE EFFECT */
.animate-lock {
    animation: shake 0.4s ease-in-out;
}

/* PULSE ICON */
@keyframes lockPulse {
    0% { transform: scale(1); opacity: .7; }
    50% { transform: scale(1.15); opacity: 1; }
    100% { transform: scale(1); opacity: .7; }
}

/* SHAKE CARD */
@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-4px); }
    50% { transform: translateX(4px); }
    75% { transform: translateX(-4px); }
    100% { transform: translateX(0); }
}

/* OPTIONAL GLOW */
.posttest-card:has(.locked-card):hover {
    box-shadow: 0 0 25px rgba(13,110,253,.25);
    transform: scale(1.02);
}

</style>

<div class="container py-4">

<!-- ================= PILIH POSTTEST ================= -->
<div id="pilihPosttest" class="row g-4">

@for ($i = 1; $i <= 3; $i++)
@php
    $nilai = $hasilPosttest[$i] ?? null;
    $bolehBuka = $i === 1 || isset($hasilPosttest[$i - 1]);
@endphp

<div class="col-md-4">
    <div class="card posttest-card border-0 text-center h-100">
        <div class="card-body d-flex flex-column justify-content-between py-4 px-3">

        {{-- ================= SUDAH DIKERJAKAN ================= --}}
        @if ($nilai !== null)

            <div class="status-done mb-3"></div>

            <h5 class="fw-bold text-success mb-1">
                Posttest {{ $i }}
            </h5>

            <span class="badge badge-done mx-auto mb-3">
                Posttest selesai dikerjakan
            </span>

            <div class="score-box mx-auto mb-1">
                {{ $nilai }}
            </div>
            <small class="text-muted">Nilai Anda</small>

        {{-- ================= BELUM DIKERJAKAN & TERBUKA ================= --}}
        @elseif ($bolehBuka)

            <div class="fs-1 mb-2">🧩</div>

            <h5 class="fw-bold text-primary mb-1">
                Posttest {{ $i }}
            </h5>

            <p class="text-muted small mb-3">
                Kerjakan kuis posttest ke-{{ $i }}
            </p>

            <button class="btn btn-primary px-4 py-2"
                    onclick="mulaiKuis({{ $i }})">
                🚀 Mulai Posttest
            </button>

        {{-- ================= TERKUNCI ================= --}}
        @else

            <div class="locked-card animate-lock">

                <i class="bi bi-lock-fill lock-icon mb-2"></i>

                <h5 class="fw-bold text-muted mb-1">
                    Posttest {{ $i }}
                </h5>

                <p class="text-muted small mb-3">
                    Selesaikan Posttest ke-{{ $i - 1 }} terlebih dahulu
                </p>

                <button class="btn btn-outline-primary px-4 py-2" disabled>
                    <i class="bi bi-lock-fill me-1"></i> Terkunci
                </button>

            </div>

        @endif

        </div>
    </div>
</div>

@endfor
</div>

<!-- ================= QUIZ BOX ================= -->
<div id="quizBox" style="display:none;" class="mt-5">
    <div class="quiz-container">

        <h4 class="fw-bold text-center mb-1">
            🧩 <span id="judulPosttest"></span>
        </h4>
        <p class="text-center text-muted mb-4">
            Halaman <span id="infoHalaman"></span>
        </p>

        <div id="soalContainer"></div>

        <div id="navigasiKuis" class="d-flex justify-content-between mt-4"></div>

    </div>
</div>

<!-- MODAL SOAL BELUM DIJAWAB -->
<div class="modal fade" id="modalSoalKosong" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">⚠️ Soal Belum Dijawab</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p class="mb-2">
          Silakan kerjakan soal berikut terlebih dahulu:
        </p>

        <div id="listSoalKosong"
             class="d-flex flex-wrap gap-2">
        </div>
      </div>

    </div>
  </div>
</div>

</div>

<script>
let posttestAktif = null;
let halamanAktif = 1;
const soalPerHalaman = 5;
let skorSoal = {};
let jawabanUser = {};
let jawabanPraktik = {};
let statusSoal = {};
let jawabanDrag = {};

function semuaSoalTerjawab(){
  const total = bankSoal[posttestAktif].soal.length;

  for(let i=0;i<total;i++){
    if(statusSoal[i] !== true){
      return false;
    }
  }
  return true;
}

function getSoalBelumDijawab(){
  let kosong = [];
  const total = bankSoal[posttestAktif].soal.length;

  for(let i=0;i<total;i++){
    if(statusSoal[i] !== true){
      kosong.push(i);
    }
  }
  return kosong;
}

/* ================= BANK SOAL ================= */
const bankSoal = {

/* ================= POSTTEST 1 ================= */
1:{soal:[

/* =====================================================
   BAGIAN A — PILIHAN GANDA (STRUKTUR HTML)
===================================================== */

{
 q:"Sebuah halaman HTML tidak menampilkan judul di tab browser. Analisis penyebab paling tepat adalah …",
 o:[
  "Tag &lt;title&gt; diletakkan di dalam &lt;body&gt;",
  "Tag &lt;title&gt; tidak diberi atribut",
  "Tag &lt;title&gt; berada di luar &lt;html&gt;",
  "Tag &lt;title&gt; tidak memiliki teks"
 ],
 k:0
},

{
 q:"Perhatikan struktur berikut:<pre>&lt;html&gt;\n  &lt;body&gt;\n    &lt;head&gt;&lt;/head&gt;\n  &lt;/body&gt;\n&lt;/html&gt;</pre>Kesalahan utama dari struktur tersebut adalah …",
 o:[
  "&lt;head&gt; harus berada sebelum &lt;html&gt;",
  "&lt;head&gt; tidak boleh kosong",
  "&lt;head&gt; harus berada di dalam &lt;body&gt;",
  "&lt;head&gt; harus berada di dalam &lt;html&gt; dan sebelum &lt;body&gt;"
 ],
 k:3
},

{
 q:"Manakah fungsi utama tag &lt;body&gt; dalam dokumen HTML?",
 o:[
  "Menyimpan metadata halaman",
  "Menampilkan konten yang terlihat oleh pengguna",
  "Menghubungkan file CSS",
  "Menentukan judul halaman"
 ],
 k:1
},

{
 q:"Struktur HTML yang benar dan sesuai standar adalah …",
 o:[
  "&lt;body&gt;&lt;html&gt;&lt;/html&gt;&lt;/body&gt;",
 "&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;&lt;/body&gt;&lt;/html&gt;",
 "&lt;head&gt;&lt;html&gt;&lt;body&gt;",
 "&lt;body&gt;&lt;head&gt;&lt;/head&gt;&lt;/body&gt;"
 ],
 k:1
},

{
 q:"Tag &lt;html&gt; dalam sebuah dokumen HTML berfungsi untuk …",
 o:[
  "Menyimpan metadata",
  "Menampilkan isi halaman",
  "Membungkus seluruh elemen HTML",
  "Menghubungkan halaman lain"
 ],
 k:2
},

{
 q:"Jika suatu dokumen HTML tidak memiliki tag &lt;head&gt;, dampak yang paling mungkin adalah …",
 o:[
  "Halaman tidak dapat ditampilkan",
  "Metadata dan judul halaman tidak terdefinisi",
  "Seluruh teks menjadi tidak terbaca",
  "Browser tidak dapat memuat halaman"
 ],
 k:1
},

{
 q:"Evaluasi struktur berikut:<pre>&lt;head&gt;\n  &lt;title&gt;Judul&lt;/title&gt;\n&lt;/head&gt;\n&lt;body&gt;\n  Konten\n&lt;/body&gt;</pre>Kesimpulan paling tepat adalah …",
 o:[
  "Struktur sudah benar",
  "&lt;head&gt; seharusnya berada di dalam &lt;body&gt;",
  "Struktur harus dibungkus oleh tag &lt;html&gt;",
  "&lt;title&gt; harus berada di &lt;body&gt;"
 ],
 k:2
},

{
 q:"Manakah urutan penulisan struktur dasar HTML yang paling tepat?",
 o:[
  "&lt;html&gt; – &lt;body&gt; – &lt;head&gt;",
  "&lt;head&gt; – &lt;body&gt;",
  "&lt;html&gt; – &lt;head&gt; – &lt;body&gt;",
  "&lt;body&gt; – &lt;html&gt;"
 ],
 k:2
},

/* =====================================================
   BAGIAN B — PRAKTIK (PEMFORMATAN TEKS)
===================================================== */

{
 judul:"Praktik pemformatan teks HTML",
 render:(index)=>`
 <div class="row g-4">
  <div class="col-md-5">
   <div class="alert alert-info small">
    <b>Tugas:</b><br>
    Buat contoh pemformatan teks menggunakan:
    <ul class="mb-0">
     <li>&lt;h1&gt; – &lt;h3&gt;</li>
     <li>&lt;p&gt;</li>
     <li>Teks tebal, miring, dan garis bawah</li>
     <li>&lt;br&gt; atau &lt;hr&gt;</li>
    </ul>
   </div>
  </div>
  <div class="col-md-7">
   <textarea
    class="form-control font-monospace"
    rows="12"
    placeholder="Tulis kode HTML di sini..."
    oninput="isiPraktik(${index}, this.value)"
    >${jawabanPraktik[index] || ''}</textarea>
  </div>
 </div>
 `,
 cek:(index)=>{
    const kode = jawabanPraktik[index] || "";

    if(!kode.match(/<h[1-3]/i)) return false;
    if(!kode.includes("<p")) return false;

    let f=0;
    if(/<(b|strong)>/i.test(kode)) f++;
    if(/<(i|em)>/i.test(kode)) f++;
    if(/<u>/i.test(kode)) f++;
    if(f<2) return false;

    if(!/<(br|hr)/i.test(kode)) return false;
    return true;
    }
},

/* =====================================================
   BAGIAN C — PRAKTIK (LIST HTML)
===================================================== */

{
 judul:"Praktik membuat list terstruktur HTML",
 render:(index)=>`
 <div class="row g-4">
  <div class="col-md-5">
   <div class="alert alert-info small">
    <b>Tugas:</b><br>
    Buat daftar menggunakan:
    <ul class="mb-0">
     <li>&lt;ul&gt;</li>
     <li>&lt;ol&gt;</li>
     <li>&lt;li&gt;</li>
     <li>Minimal 1 nested list</li>
    </ul>
   </div>
  </div>
  <div class="col-md-7">
   <textarea
    class="form-control font-monospace"
    rows="12"
    placeholder="Tulis kode HTML di sini..."
    oninput="isiPraktik(${index}, this.value)"
    >${jawabanPraktik[index] || ''}</textarea>
  </div>
 </div>
 `,
 cek:(index)=>{
 const kode = jawabanPraktik[index] || "";

 if(!/<ul/i.test(kode)) return false;
 if(!/<ol/i.test(kode)) return false;
 if((kode.match(/<li/gi)||[]).length < 3) return false;
 if(!/<ul>[\s\S]*<(ul|ol)/i.test(kode)) return false;

 return true;
}

}

]},

/* ================= POSTTEST 2 ================= */
2:{soal:[

/* ================= A. TABEL & SPANNING ================= */

{
 q:"Seorang siswa ingin membuat tabel dengan judul kolom yang membentang ke 3 kolom. Atribut yang paling tepat digunakan adalah …",
 o:[
  "rowspan=\"3\"",
  "span=\"3\"",
  "colspan=\"3\"",
  "width=\"3\""
 ],
 k:2
},
{
 q:"Perhatikan potongan kode berikut:<pre>&lt;td rowspan=\"2\"&gt;A&lt;/td&gt;</pre>Analisis fungsi dari atribut tersebut adalah …",
 o:[
  "Menggabungkan dua kolom secara horizontal",
  "Menggabungkan dua baris secara vertikal",
  "Mengatur lebar sel",
  "Membuat dua tabel"
 ],
 k:1
},

/* ================= B. MULTIMEDIA ================= */

{
 q:"Tag HTML yang paling tepat untuk menampilkan gambar adalah …",
 o:[
  "&lt;media&gt;",
  "&lt;picture&gt;",
  "&lt;img&gt;",
  "&lt;src&gt;"
 ],
 k:2
},
{
 q:"Atribut wajib pada tag &lt;img&gt; agar gambar dapat ditampilkan adalah …",
 o:["alt","title","src","width"],
 k:2
},
{
 q:"Fungsi utama atribut alt pada gambar adalah …",
 o:[
  "Mengatur ukuran gambar",
  "Memberi judul gambar",
  "Memberikan teks alternatif jika gambar gagal dimuat",
  "Mempercepat loading halaman"
 ],
 k:2
},
{
 q:"Jika ingin menampilkan audio dengan kontrol play dan pause, tag dan atribut yang tepat adalah …",
 o:[
  "&lt;audio autoplay&gt;",
  "&lt;audio controls&gt;",
  "&lt;sound controls&gt;",
  "&lt;media audio&gt;"
 ],
 k:1
},
{
 q:"Manakah kondisi yang paling tepat menggunakan video dibandingkan gambar?",
 o:[
  "Menampilkan logo",
  "Menampilkan ikon",
  "Menampilkan tutorial langkah-langkah",
  "Menampilkan latar belakang"
 ],
 k:2
},
{
 q:"Tag HTML yang digunakan untuk menampilkan video adalah …",
 o:[
  "&lt;movie&gt;",
  "&lt;media&gt;",
  "&lt;video&gt;",
  "&lt;iframe&gt;"
 ],
 k:2
},
{
 q:"Jika video tidak dapat diputar karena format tidak didukung browser, solusi terbaik adalah …",
 o:[
  "Menghapus video",
  "Menambahkan beberapa &lt;source&gt; dengan format berbeda",
  "Mengganti video menjadi gambar",
  "Menambahkan &lt;br&gt;"
 ],
 k:1
},
{
 q:"Manakah praktik terbaik dalam penggunaan multimedia pada halaman web?",
 o:[
  "Menggunakan sebanyak mungkin video",
  "Menghilangkan atribut alt",
  "Menggunakan media sesuai kebutuhan informasi",
  "Menghindari penggunaan audio"
 ],
 k:2
},
{
 q:"Peran utama tag &lt;source&gt; dalam elemen &lt;video&gt; adalah …",
 o:[
  "Mengatur ukuran video",
  "Menyediakan beberapa format media",
  "Menampilkan teks",
  "Menghubungkan hyperlink"
 ],
 k:1
},
{
 q:"Evaluasi penggunaan gambar berikut:<pre>&lt;img src=\"foto.jpg\"&gt;</pre>Perbaikan terbaik agar sesuai standar aksesibilitas adalah …",
 o:[
  "Menambahkan &lt;br&gt;",
  "Menambahkan atribut alt",
  "Mengganti &lt;img&gt; dengan &lt;picture&gt;",
  "Menambahkan &lt;title&gt;"
 ],
 k:1
},
{
 q:"Jika sebuah audio diputar otomatis tanpa kontrol, dampak yang paling mungkin adalah …",
 o:[
  "Halaman lebih cepat",
  "Pengalaman pengguna terganggu",
  "Audio tidak bisa diputar",
  "Browser error"
 ],
 k:1
},
{
 q:"Tag multimedia yang secara default membutuhkan atribut controls agar interaktif adalah …",
 o:[
  "&lt;img&gt;",
  "&lt;video&gt;",
  "&lt;audio&gt;",
  "&lt;media&gt;"
 ],
 k:2
},
{
 q:"Manakah kombinasi tag yang tepat untuk menampilkan video dengan beberapa format?",
 o:[
  "&lt;video&gt;&lt;file&gt;&lt;/video&gt;",
  "&lt;video&gt;&lt;source&gt;&lt;/video&gt;",
  "&lt;img&gt;&lt;video&gt;",
  "&lt;media&gt;&lt;source&gt;"
 ],
 k:1
},
{
 q:"Dalam konteks desain web, penggunaan multimedia sebaiknya bertujuan untuk …",
 o:[
  "Memperbanyak animasi",
  "Mempercantik tanpa fungsi",
  "Mendukung penyampaian informasi",
  "Menggantikan seluruh teks"
 ],
 k:2
},

/* ================= C. HYPERLINK ================= */

{
 q:"Perhatikan kode berikut:<pre>&lt;a href=\"profil.html\"&gt;Profil&lt;/a&gt;</pre>Analisis fungsi dari kode tersebut adalah …",
 o:[
  "Menampilkan teks tebal",
  "Membuka halaman profil.html",
  "Mengunduh file profil",
  "Menampilkan gambar"
 ],
 k:1
},
{
 q:"Jika ingin membuat navigasi ke bagian tertentu dalam satu halaman, teknik yang tepat adalah …",
 o:[
  "Menggunakan tabel",
  "Menggunakan &lt;br&gt;",
  "Menggunakan anchor link dengan id",
  "Menggunakan &lt;iframe&gt;"
 ],
 k:2
},

/* ================= SOAL KINESTETIK ================= */

/* ================= SOAL : NAVIGASI ANCHOR ================= */
{
 judul:"Lengkapi Navigasi Anchor HTML",
 render:()=>`
 <div class="row g-4">

  <!-- KODE -->
  <div class="col-md-7">
   <pre class="code-box"><code>
&lt;!-- MENU NAVIGASI --&gt;
&lt;nav&gt;
  &lt;a href="<span class="zone" data-answer="#tabel"></span>"&gt;Tabel&lt;/a&gt; |
  &lt;a href="<span class="zone" data-answer="#form"></span>"&gt;Form&lt;/a&gt;
&lt;/nav&gt;

&lt;hr&gt;

&lt;!-- BAGIAN TABEL --&gt;
&lt;h2 <span class="zone" data-answer='id="tabel"'></span>&gt;Data Tabel&lt;/h2&gt;
&lt;p&gt;Isi tabel ada di sini&lt;/p&gt;

&lt;!-- BAGIAN FORM --&gt;
&lt;h2 <span class="zone" data-answer='id="form"'></span>&gt;Form Pendaftaran&lt;/h2&gt;
&lt;p&gt;Isi form ada di sini&lt;/p&gt;
   </code></pre>
  </div>

  <!-- ITEM DRAG -->
    <div class="col-md-5">
    <div class="item" draggable="true"
        data-code="#form">
        #form
    </div>

    <div class="item" draggable="true"
        data-code='id="tabel"'>
        id="tabel"
    </div>

    <div class="item" draggable="true"
        data-code="#tabel">
        #tabel
    </div>

    <div class="item" draggable="true"
        data-code='id="form"'>
        id="form"
    </div>
    </div>

 </div>
 `,
    cek:(index)=>{
        const data = jawabanDrag[index];
        if(!data) return false;

        const soalBox =
            document.querySelectorAll('.quiz-question')
            [index % soalPerHalaman];

        const zones = soalBox.querySelectorAll('.zone');

        return [...zones].every((z, zi)=>{
            return data[zi] === z.dataset.answer;
        });
    }
},

/* ================= SOAL 2 : TABEL (DRAG SLOT) ================= */
{
 judul:"Lengkapi struktur tabel HTML",
 render:()=>`
 <div class="row g-4">

  <div class="col-md-7">
   <pre class="code-box"><code>
&lt;table border="1"&gt;
  &lt;tr&gt;
    <span class="zone" data-answer="&lt;th&gt;Nama&lt;/th&gt;"></span>
    &lt;th&gt;Umur&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td colspan="2"&gt;Ani&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
   </code></pre>
  </div>

  <div class="col-md-5">
    <!-- PENGECOH 1 -->
    <div class="item" draggable="true"
        data-code="&lt;td&gt;Nama&lt;/td&gt;">
        &lt;td&gt;Nama&lt;/td&gt;
    </div>

    <div class="item" draggable="true"
        data-code="&lt;th&gt;Nama&lt;/th&gt;">
        &lt;th&gt;Nama&lt;/th&gt;
    </div>

    <!-- PENGECOH 2 -->
    <div class="item" draggable="true"
        data-code="&lt;th&gt;Umur&lt;/th&gt;">
        &lt;th&gt;Umur&lt;/th&gt;
    </div>
  </div>

 </div>
 `,
    cek:()=>{
        const z=document.querySelector('.zone');
        return z && z.textContent.trim()===z.dataset.answer;
    }
}

]},

/* ================= POSTTEST 3 ================= */
3:{soal:[
{q:"Fungsi utama tag &lt;form&gt; dalam HTML adalah …",
    o:[
        "Menampilkan data tabel",
        "Mengelompokkan elemen input untuk dikirim ke server",
        "Mengatur tata letak halaman",
        "Menyimpan data sementara di browser"
    ],
    k:1
    },

    {q:"Perhatikan kode berikut:<pre>&lt;form action=&quot;proses.php&quot; method=&quot;post&quot;&gt;</pre>Fungsi atribut action adalah …",
    o:[
        "Menentukan metode pengiriman data",
        "Menentukan jenis input",
        "Menentukan tujuan pengiriman data",
        "Menentukan validasi form"
    ],
    k:2
    },

    {q:"Jika data formulir mengandung informasi sensitif, metode pengiriman yang paling tepat adalah …",
    o:["get","post","put","send"],
    k:1
    },

    {q:"Tag HTML yang paling tepat untuk menerima input teks satu baris adalah …",
    o:[
        "&lt;textarea&gt;",
        "&lt;input type=&quot;text&quot;&gt;",
        "&lt;input type=&quot;email&quot;&gt;",
        "&lt;label&gt;"
    ],
    k:1
    },

    {q:"Perbedaan utama antara &lt;input type=&quot;text&quot;&gt; dan &lt;textarea&gt; adalah …",
    o:[
        "&lt;textarea&gt; tidak bisa diisi teks",
        "&lt;input&gt; hanya untuk angka",
        "&lt;textarea&gt; digunakan untuk teks multi-baris",
        "&lt;textarea&gt; tidak bisa dikirim ke server"
    ],
    k:2
    },

    {q:"Perhatikan kode berikut:<pre>&lt;label for=&quot;nama&quot;&gt;Nama:&lt;/label&gt;\n&lt;input type=&quot;text&quot; id=&quot;nama&quot;&gt;</pre>Fungsi atribut for pada &lt;label&gt; adalah …",
    o:[
        "Mengatur style label",
        "Menghubungkan label dengan input tertentu",
        "Mengirim data ke server",
        "Mengatur validasi input"
    ],
    k:1
    },

    {q:"Manakah dampak positif penggunaan &lt;label&gt; yang benar pada formulir?",
    o:[
        "Form menjadi lebih berwarna",
        "Data lebih cepat terkirim",
        "Meningkatkan aksesibilitas dan kemudahan klik",
        "Mengurangi ukuran file HTML"
    ],
    k:2
    },

    {q:"Jika ingin menyediakan pilihan dengan satu jawaban saja, elemen yang tepat adalah …",
    o:[
        "&lt;input type=&quot;checkbox&quot;&gt;",
        "&lt;input type=&quot;radio&quot;&gt;",
        "&lt;select multiple&gt;",
        "&lt;textarea&gt;"
    ],
    k:1
    },

    {q:"Perhatikan kode berikut:<pre>&lt;select&gt;\n  &lt;option&gt;HTML&lt;/option&gt;\n  &lt;option&gt;CSS&lt;/option&gt;\n&lt;/select&gt;</pre>Fungsi struktur tersebut adalah …",
    o:[
        "Menampilkan daftar pilihan dropdown",
        "Menampilkan checkbox",
        "Menampilkan radio button",
        "Menampilkan tabel"
    ],
    k:0
    },

    {q:"Jika pengguna harus memilih lebih dari satu pilihan, solusi terbaik adalah …",
    o:[
        "Radio button",
        "Dropdown tanpa atribut tambahan",
        "Checkbox",
        "Text input"
    ],
    k:2
    },

    {q:"Atribut HTML yang digunakan untuk memastikan input wajib diisi adalah …",
    o:["readonly","disabled","required","checked"],
    k:2
    },

    {q:"Evaluasi kode berikut:<pre>&lt;input type=&quot;text&quot; disabled&gt;</pre>Dampak atribut disabled adalah …",
    o:[
        "Input wajib diisi",
        "Input tidak bisa diedit dan tidak dikirim ke server",
        "Input hanya bisa dibaca",
        "Input otomatis terisi"
    ],
    k:1
    },

    {q:"Jenis input yang paling tepat untuk validasi email otomatis oleh browser adalah …",
    o:[
        "&lt;input type=&quot;text&quot;&gt;",
        "&lt;input type=&quot;mail&quot;&gt;",
        "&lt;input type=&quot;email&quot;&gt;",
        "&lt;textarea&gt;"
    ],
    k:2
    },

    {q:"Untuk membuat form pendaftaran yang mudah digunakan semua pengguna, keputusan terbaik adalah …",
    o:[
        "Menghilangkan &lt;label&gt;",
        "Menggunakan placeholder saja",
        "Menggunakan &lt;label&gt; yang terhubung dengan input",
        "Menggunakan tabel untuk form"
    ],
    k:2
    },

    {q:"Tag HTML yang digunakan untuk membuat tombol kirim form adalah …",
    o:[
        "&lt;input type=&quot;reset&quot;&gt;",
        "&lt;button type=&quot;submit&quot;&gt;",
        "&lt;input type=&quot;button&quot;&gt;",
        "&lt;label&gt;"
    ],
    k:1
    },

    {q:"Evaluasi kode berikut:<pre>&lt;input type=&quot;submit&quot; value=&quot;Kirim&quot;&gt;</pre>Kesimpulan yang tepat adalah …",
    o:[
        "Salah karena tidak menggunakan &lt;button&gt;",
        "Benar dan berfungsi mengirim form",
        "Tidak bisa mengirim data",
        "Hanya untuk tampilan"
    ],
    k:1
    },

    {q:"Jika ingin merancang form yang terstruktur dan mudah dipahami, pendekatan terbaik adalah …",
    o:[
        "Menempatkan input secara acak",
        "Mengelompokkan input tanpa label",
        "Mengelompokkan input secara logis dengan label jelas",
        "Menggunakan &lt;br&gt; sebanyak mungkin"
    ],
    k:2
    },

    {q:"Praktik terbaik dalam pembuatan formulir HTML adalah …",
    o:[
        "Meminimalkan input tanpa label",
        "Mengutamakan tampilan dibanding fungsi",
        "Mengutamakan aksesibilitas, struktur, dan validasi",
        "Menghindari atribut HTML bawaan"
    ],
    k:2
    },
    {
    judul:"Praktik langsung membuat Form HTML",
    render:(index)=>`
    <div class="row g-4">

    <!-- INSTRUKSI -->
    <div class="col-md-5">
    <div class="alert alert-info small">
        <b>Tugas:</b><br>
        Buat sebuah <code>&lt;form&gt;</code> dengan ketentuan:
        <ul class="mb-0">
        <li>Minimal <b>3 input berbeda</b></li>
        <li>Contoh: text, email, radio / checkbox / select</li>
        <li>Setiap input harus memiliki <code>&lt;label&gt;</code></li>
        <li>Tambahkan tombol <b>Submit</b></li>
        </ul>
    </div>
    </div>

    <!-- CODE EDITOR -->
    <div class="col-md-7">
    <textarea
        class="form-control font-monospace"
        rows="12"
        placeholder="Tulis kode HTML di sini..."
        oninput="isiPraktik(${index}, this.value)"
        >${jawabanPraktik[index] || ''}</textarea>
    </div>

    </div>
    `,
        cek:(index)=>{
            const kode = jawabanPraktik[index] || "";

            if(!kode.includes("<form")) return false;

            if((kode.match(/<label/gi)||[]).length < 3) return false;

            let jenis=0;
            if(/type="text"/i.test(kode)) jenis++;
            if(/type="email"/i.test(kode)) jenis++;
            if(/radio|checkbox|<select/i.test(kode)) jenis++;
            if(jenis < 3) return false;

            if(!/submit/i.test(kode)) return false;

            return true;
        }
    },
    /* ================= SOAL : INTEGRASI KONSEP HTML (DRAG SLOT) ================= */
    {
    judul:"Lengkapi integrasi navigasi, tabel, dan form HTML",
    render:()=>`
    <div class="row g-4">

    <!-- KODE -->
    <div class="col-md-7">
    <pre class="code-box"><code>
    &lt;!-- NAVIGASI --&gt;
    &lt;nav&gt;
    &lt;a href="<span class="zone" data-answer="#data"></span>"&gt;Data&lt;/a&gt; |
    &lt;a href="<span class="zone" data-answer="#daftar"></span>"&gt;Form&lt;/a&gt;
    &lt;/nav&gt;

    &lt;hr&gt;

    &lt;!-- BAGIAN TABEL --&gt;
    &lt;h2 <span class="zone" data-answer='id="data"'></span>&gt;Data Siswa&lt;/h2&gt;
    &lt;table border="1"&gt;
    &lt;tr&gt;
        &lt;th&gt;Nama&lt;/th&gt;
        &lt;th&gt;Kelas&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Ani&lt;/td&gt;
        &lt;td&gt;X RPL&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/table&gt;

    &lt;!-- BAGIAN FORM --&gt;
    &lt;h2 <span class="zone" data-answer='id="daftar"'></span>&gt;Form Pendaftaran&lt;/h2&gt;
    &lt;form&gt;
    &lt;label&gt;Nama:&lt;/label&gt;
    &lt;input type="text"&gt;

    &lt;label&gt;Email:&lt;/label&gt;
    &lt;input type="email"&gt;

    &lt;button type="submit"&gt;Kirim&lt;/button&gt;
    &lt;/form&gt;
    </code></pre>
    </div>

    <!-- ITEM DRAG -->
    <div class="col-md-5">

        <div class="item" draggable="true" data-code='id="daftar"'>
            id="daftar"
        </div>

        <div class="item" draggable="true" data-code="#data">
            #data
        </div>

        <div class="item" draggable="true" data-code="#daftar">
            #daftar
        </div>

        <div class="item" draggable="true" data-code='id="data"'>
            id="data"
        </div>
    </div>

    </div>
    `,
    cek:()=>{
    let ok = true;
    document.querySelectorAll('.zone').forEach(z=>{
        if(z.textContent.trim() !== z.dataset.answer) ok = false;
    });
    return ok;
    }
    }
    ]}
};

/* ================= MULAI ================= */
function mulaiKuis(pt){
 posttestAktif = pt;
 halamanAktif = 1;
 skorSoal = {};
 pilihPosttest.style.display='none';
 quizBox.style.display='block';
 judulPosttest.innerText="Posttest "+pt;
 renderSoal();
}

/* ================= RENDER ================= */
function renderSoal(){
 soalContainer.innerHTML='';
 const soal = bankSoal[posttestAktif].soal;
 const totalHal = Math.ceil(soal.length / soalPerHalaman);
 infoHalaman.innerText = halamanAktif+" dari "+totalHal;

 const start=(halamanAktif-1)*soalPerHalaman;

 soal.slice(start,start+soalPerHalaman).forEach((s,i)=>{

  // ================= PILIHAN GANDA =================
  if(s.q){
   soalContainer.innerHTML+=`
   <div class="quiz-question">
    <h5 class="fw-bold text-primary">
     Soal ${start+i+1}
    </h5>

    <p class="fw-semibold">${s.q}</p>
    ${s.o.map((opsi,idx)=>`
    <label class="choice ${jawabanUser[start+i]===idx ? 'selected' : ''}">
        <input type="radio"
        name="pg_${start+i}"
        value="${idx}"
        ${jawabanUser[start+i]===idx ? 'checked' : ''}
        onchange="pilihJawaban(${start+i}, ${idx})">
        ${opsi}
    </label>
    `).join('')}
   </div>`;
  }

  // ================= PRAKTIK =================
 else if(s.render){
    const index = start + i;

    soalContainer.innerHTML+=`
    <div class="quiz-question">
    <h5 class="fw-bold text-primary">
    Soal ${index + 1} — ${s.judul}
    </h5>
    ${s.render(index)}
    </div>`;
        setTimeout(()=>{
            if(jawabanDrag[index]){
            const zones = document
                .querySelectorAll('.quiz-question')[i]
                .querySelectorAll('.zone');

            zones.forEach((z,zi)=>{
                if(jawabanDrag[index][zi]){
                z.textContent = jawabanDrag[index][zi];
                }
            });
            }
        },0);
    }

 });

 aktifkanDrag();
 renderNav(totalHal);
}

/* ================= DRAG ================= */
function aktifkanDrag(){
 document.querySelectorAll('.item').forEach(i=>{
  i.addEventListener('dragstart',()=>i.classList.add('dragging'));
  i.addEventListener('dragend',()=>i.classList.remove('dragging'));
 });

 document.querySelectorAll('.zone').forEach((z,zoneIndex)=>{
  z.addEventListener('dragover',e=>e.preventDefault());

  z.addEventListener('drop',()=>{
    const dragged = document.querySelector('.dragging');
    if(!dragged) return;

    const soalBox = z.closest('.quiz-question');
    const soalIndex = [...document.querySelectorAll('.quiz-question')]
      .indexOf(soalBox)
      + (halamanAktif-1)*soalPerHalaman;

    z.textContent = dragged.dataset.code;

    // ✅ SIMPAN KE STATE
    if(!jawabanDrag[soalIndex]) jawabanDrag[soalIndex] = {};
    jawabanDrag[soalIndex][zoneIndex] = dragged.dataset.code;

  });
 });
}

function getIndexSoalAktif(){
  const all = document.querySelectorAll('.quiz-question');
  const aktif = [...all].findIndex(q=>q.contains(document.activeElement));
  return (halamanAktif-1)*soalPerHalaman + (aktif >=0 ? aktif : 0);
}

/* ================= NAVIGASI ================= */
function renderNav(total){
 let html='';
 if(halamanAktif>1){
  html+=`<button class="btn btn-outline-secondary"
          onclick="halamanAktif--; renderSoal()">⬅️ Sebelumnya</button>`;
 }else html+=`<div></div>`;

 if(halamanAktif<total){
  html+=`<button class="btn btn-primary"
          onclick="simpan(); halamanAktif++; renderSoal()">➡️ Next</button>`;
 }else{
  html+=`<button class="btn btn-success"
          onclick="handleSubmitKuis()">✅ Selesaikan Kuis</button>`;
 }
 navigasiKuis.innerHTML=html;
}

/* ================= SIMPAN ================= */
function simpan(){
 const start = (halamanAktif - 1) * soalPerHalaman;
 const soalAktif = bankSoal[posttestAktif].soal
                    .slice(start, start + soalPerHalaman);

 soalAktif.forEach((s, i)=>{
  const index = start + i;

  /* ================= PILIHAN GANDA ================= */
  if(s.q){
    const terjawab = jawabanUser[index] !== undefined;
    statusSoal[index] = terjawab;
    skorSoal[index] = jawabanUser[index] === s.k ? 1 : 0;
  }

  /* ================= PRAKTIK ================= */
    else if(s.cek){
        // ===== PRAKTIK TEXTAREA =====
        if(s.render && s.render.toString().includes('textarea')){
            const isi = (jawabanPraktik[index] || '').trim();
            statusSoal[index] = isi !== '';
            skorSoal[index] = isi !== '' && s.cek(index) ? 1 : 0;
        }

        // ===== PRAKTIK DRAG =====
        else{
            const data = jawabanDrag[index];
            if(!data){
            statusSoal[index] = false;
            skorSoal[index] = 0;
            return;
            }

            const soalBox =
            document.querySelectorAll('.quiz-question')[i];
            const totalZone = soalBox.querySelectorAll('.zone').length;

            const lengkap = Object.keys(data).length === totalZone;

            statusSoal[index] = lengkap;
            skorSoal[index] = lengkap && s.cek(index) ? 1 : 0;
        }
    }
 });
}

function pilihJawaban(noSoal, idx){
 jawabanUser[noSoal]=idx;
 statusSoal[noSoal]=true;
}

/* ================= SUBMIT ================= */
function submitKuis(){
 simpan();
 const total=bankSoal[posttestAktif].soal.length;
 let benar=Object.values(skorSoal).reduce((a,b)=>a+b,0);
 let nilai=Math.round((benar/total)*100);

 fetch("{{ route('kuis.submit') }}",{
  method:"POST",
  headers:{
   "Content-Type":"application/json",
   "X-CSRF-TOKEN":"{{ csrf_token() }}"
  },
  body:JSON.stringify({score:nilai,posttest:posttestAktif})
 })
 .then(r=>{if(!r.ok)throw'locked';return r.json();})
 .then(()=>{alert("Kuis berhasil disubmit!");location.reload();})
 .catch(()=>{alert("Posttest sudah dikerjakan!");location.reload();});
}

function tampilkanSoalKosong(){
  const list = getSoalBelumDijawab();
  const container = document.getElementById('listSoalKosong');
  container.innerHTML = '';

  list.forEach(i=>{
    const nomor = i + 1;
    const halaman = Math.ceil(nomor / soalPerHalaman);

    const btn = document.createElement('button');
    btn.className = 'btn btn-outline-danger btn-sm';
    btn.textContent = `Soal ${nomor}`;
    btn.onclick = ()=>{
      halamanAktif = halaman;
      renderSoal();

      bootstrap.Modal
        .getInstance(document.getElementById('modalSoalKosong'))
        .hide();

      setTimeout(()=>{
        document
          .querySelectorAll('.quiz-question')[i % soalPerHalaman]
          ?.scrollIntoView({behavior:'smooth', block:'center'});
      },200);
    };

    container.appendChild(btn);
  });

  new bootstrap.Modal(
    document.getElementById('modalSoalKosong')
  ).show();
}

function handleSubmitKuis(){
  simpan(); // ← WAJIB

  if(!semuaSoalTerjawab()){
    tampilkanSoalKosong();
    return;
  }

  submitKuis();
}

function isiPraktik(index, value){
  jawabanPraktik[index] = value;
}
</script>
