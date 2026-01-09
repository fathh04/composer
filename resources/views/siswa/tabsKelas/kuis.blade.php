{{-- =========================================
|  KUIS POSTTEST
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

/* ========== QUIZ BOX ========== */
.quiz-container{
    background:#fff;
    border-radius:18px;
    padding:28px;
    border:1px solid #e5e7eb;
    box-shadow:0 6px 20px rgba(0,0,0,.06);
}

/* ========== QUESTION ========== */
.quiz-question{
    margin-bottom:24px;
    padding:18px 20px;
    border-left:5px solid var(--primary);
    background:var(--soft);
    border-radius:12px;
}

/* ========== CHOICE ========== */
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

/* ========== RESULT ========== */
.result-score{
    font-size:3rem;
    font-weight:700;
    color:var(--primary);
}

/* ================= LOCKED POSTTEST ================= */
.locked-card {
    opacity: 0.6;
    pointer-events: none;
}

.lock-icon {
    font-size: 3rem;
    color: #0d6efd; /* Bootstrap primary (biru) */
    animation: lockPulse 1.8s infinite;
}

/* DENY / SHAKE EFFECT */
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
    $posttestSebelumnyaSelesai = $i === 1 || isset($hasilPosttest[$i - 1]);
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

        {{-- ================= BELUM DIKERJAKAN TAPI TERBUKA ================= --}}
        @elseif ($posttestSebelumnyaSelesai)

            <div class="fs-1 mb-2">📝</div>

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
            📘 <span id="judulPosttest"></span>
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
let jawabanUser = {};

function semuaSoalTerjawab(){
    const totalSoal = bankSoal[posttestAktif].soal.length;
    return Object.keys(jawabanUser).length === totalSoal;
}

function getSoalBelumDijawab(){
    const total = bankSoal[posttestAktif].soal.length;
    let kosong = [];

    for(let i = 0; i < total; i++){
        if(jawabanUser[i] === undefined){
            kosong.push(i);
        }
    }
    return kosong;
}

/* ================= BANK SOAL ================= */
const bankSoal = {
    1:{soal:[
    {
      q:"Sebuah halaman HTML tidak menampilkan judul di tab browser. Analisis penyebab paling tepat.",
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
      q:"Jika ingin menampilkan teks paragraf dengan jarak antar paragraf otomatis, tag yang paling tepat adalah …",
      o:[
        "&lt;br&gt;",
        "&lt;span&gt;",
        "&lt;p&gt;",
        "&lt;strong&gt;"
      ],
      k:2
    },
    {
      q:"Seorang siswa menggunakan &lt;br&gt; berkali-kali untuk memisahkan paragraf. Evaluasi tindakan tersebut.",
      o:[
        "Tepat karena &lt;br&gt; memang untuk paragraf",
        "Kurang tepat, seharusnya menggunakan &lt;p&gt;",
        "Tepat jika ingin jarak lebih besar",
        "Tidak berpengaruh pada struktur HTML"
      ],
      k:1
    },
    {
      q:"Manakah penggunaan &lt;strong&gt; yang paling tepat?",
      o:[
        "Memberi jarak antar teks",
        "Menebalkan teks tanpa makna",
        "Memberi penekanan makna penting pada teks",
        "Mengganti fungsi &lt;b&gt;"
      ],
      k:2
    },
    {
      q:"Jika teks ingin ditampilkan tebal dan memiliki makna penting secara semantik, tag yang tepat adalah …",
      o:[
        "&lt;b&gt;",
        "&lt;i&gt;",
        "&lt;strong&gt;",
        "&lt;span&gt;"
      ],
      k:2
    },
    {
      q:"Untuk membuat daftar langkah-langkah yang harus berurutan, struktur HTML yang tepat adalah …",
      o:[
        "&lt;ul&gt; dan &lt;li&gt;",
        "&lt;ol&gt; dan &lt;li&gt;",
        "&lt;li&gt; dan &lt;ul&gt;",
        "&lt;dl&gt; dan &lt;dt&gt;"
      ],
      k:1
    },
    {
      q:"Manakah perbedaan utama antara &lt;ul&gt; dan &lt;ol&gt;?",
      o:[
        "&lt;ul&gt; lebih modern",
        "&lt;ol&gt; tidak memerlukan &lt;li&gt;",
        "&lt;ol&gt; menampilkan urutan bernomor",
        "&lt;ul&gt; hanya untuk teks pendek"
      ],
      k:2
    },
    {
      q:"Perhatikan kode berikut:<pre>&lt;ol&gt;\n  &lt;p&gt;Item 1&lt;/p&gt;\n&lt;/ol&gt;</pre>Analisis kesalahannya adalah …",
      o:[
        "&lt;ol&gt; harus berisi &lt;li&gt;",
        "&lt;p&gt; tidak boleh di dalam &lt;ol&gt;",
        "&lt;ol&gt; tidak boleh memiliki isi",
        "&lt;p&gt; harus diganti &lt;ul&gt;"
      ],
      k:0
    },
    {
      q:"Jika ingin membuat daftar tanpa urutan angka untuk menu navigasi, tag yang paling tepat adalah …",
      o:[
        "&lt;ol&gt;",
        "&lt;ul&gt;",
        "&lt;li&gt;",
        "&lt;menu&gt;"
      ],
      k:1
    },
    {
      q:"Kesalahan logika dari kode berikut:<pre>&lt;li&gt;Beranda&lt;/li&gt;\n&lt;li&gt;Profil&lt;/li&gt;</pre>",
      o:[
        "&lt;li&gt; harus berada di dalam &lt;ul&gt; atau &lt;ol&gt;",
        "&lt;li&gt; harus memiliki atribut",
        "&lt;li&gt; hanya boleh satu",
        "&lt;li&gt; tidak boleh berisi teks"
      ],
      k:0
    },
    {
      q:"Jika ingin menampilkan teks baris baru tanpa membuat paragraf baru, tag yang tepat adalah …",
      o:[
        "&lt;p&gt;",
        "&lt;br&gt;",
        "&lt;hr&gt;",
        "&lt;div&gt;"
      ],
      k:1
    },
    {
      q:"Manakah skenario penggunaan &lt;br&gt; yang paling tepat?",
      o:[
        "Memisahkan dua artikel",
        "Membuat paragraf baru",
        "Membuat baris baru dalam alamat",
        "Mengelompokkan konten"
      ],
      k:2
    },
    {
      q:"Struktur HTML yang benar adalah …",
      o:[
        "&lt;body&gt;&lt;html&gt;&lt;/html&gt;&lt;/body&gt;",
        "&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;&lt;/body&gt;&lt;/html&gt;",
        "&lt;head&gt;&lt;html&gt;&lt;body&gt;",
        "&lt;body&gt;&lt;head&gt;&lt;/head&gt;&lt;/body&gt;"
      ],
      k:1
    },
    {
      q:"Evaluasi penggunaan &lt;strong&gt; berikut:<pre>&lt;strong&gt;Judul Artikel&lt;/strong&gt;</pre>Jika digunakan sebagai judul utama, perbaikan terbaik adalah …",
      o:[
        "Tetap menggunakan &lt;strong&gt;",
        "Mengganti dengan &lt;p&gt;",
        "Mengganti dengan &lt;h1&gt;",
        "Menambahkan &lt;br&gt;"
      ],
      k:2
    },
    {
      q:"Tag &lt;html&gt; berfungsi untuk …",
      o:[
        "Menyimpan metadata",
        "Menampilkan isi halaman",
        "Membungkus seluruh elemen HTML",
        "Menghubungkan halaman lain"
      ],
      k:2
    },
    {
      q:"Jika suatu dokumen HTML tidak memiliki &lt;head&gt;, dampak yang paling mungkin adalah …",
      o:[
        "Halaman tidak bisa ditampilkan",
        "Metadata dan judul halaman tidak terdefinisi",
        "Teks tidak terbaca",
        "CSS tidak bisa digunakan sama sekali"
      ],
      k:1
    },
    {
      q:"Manakah kombinasi tag yang paling tepat untuk struktur dasar HTML?",
      o:[
        "&lt;html&gt; – &lt;body&gt; – &lt;head&gt;",
        "&lt;head&gt; – &lt;body&gt;",
        "&lt;html&gt; – &lt;head&gt; – &lt;body&gt;",
        "&lt;body&gt; – &lt;html&gt;"
      ],
      k:2
    }
    ]},
    2:{soal:[
    {
        q:"Seorang siswa ingin membuat tabel dengan judul kolom yang membentang ke 3 kolom. Atribut yang paling tepat digunakan adalah …",
        o:[
            "rowspan=&quot;3&quot;",
            "span=&quot;3&quot;",
            "colspan=&quot;3&quot;",
            "width=&quot;3&quot;"
        ],
        k:2
    },
    {
        q:"Perhatikan potongan kode berikut:<pre>&lt;td rowspan=&quot;2&quot;&gt;A&lt;/td&gt;</pre>Analisis fungsi dari atribut tersebut adalah …",
        o:[
            "Menggabungkan dua kolom secara horizontal",
            "Menggabungkan dua baris secara vertikal",
            "Membuat dua tabel",
            "Mengatur tinggi sel"
        ],
        k:1
    },
    {
        q:"Jika sebuah tabel memiliki 4 kolom, lalu satu sel menggunakan <code>colspan=&quot;2&quot;</code>, maka …",
        o:[
            "Jumlah baris bertambah",
            "Jumlah kolom berkurang menjadi 2",
            "Sel tersebut mengisi dua kolom",
            "Tabel menjadi tidak valid"
        ],
        k:2
    },
    {
        q:"Manakah skenario penggunaan <code>rowspan</code> yang paling tepat?",
        o:[
            "Judul tabel memanjang ke samping",
            "Sel “Total” mencakup beberapa baris",
            "Mengatur lebar kolom",
            "Membuat tabel responsif"
        ],
        k:1
    },
    {
        q:"Perhatikan struktur tabel berikut:<pre>&lt;table&gt;\n  &lt;tr&gt;\n    &lt;td colspan=&quot;2&quot;&gt;Data&lt;/td&gt;\n    &lt;td&gt;Nilai&lt;/td&gt;\n  &lt;/tr&gt;\n&lt;/table&gt;</pre>Analisis struktur di atas menunjukkan bahwa …",
        o:[
            "Tabel memiliki 2 kolom",
            "Baris tersebut memiliki total 3 kolom",
            "&lt;td&gt; tidak boleh menggunakan colspan",
            "Struktur tabel salah"
        ],
        k:1
    },
    {
        q:"Kesalahan yang sering terjadi saat menggunakan <code>rowspan</code> dan <code>colspan</code> adalah …",
        o:[
            "Menggunakan &lt;td&gt;",
            "Tidak menyesuaikan jumlah kolom atau baris lainnya",
            "Tidak menambahkan &lt;table&gt;",
            "Menggunakan &lt;tr&gt;"
        ],
        k:1
    },
    {
        q:"Jika sebuah tabel terlihat tidak sejajar setelah menggunakan <code>colspan</code>, langkah analisis yang tepat adalah …",
        o:[
            "Menghapus &lt;table&gt;",
            "Mengecek jumlah &lt;tr&gt;",
            "Mengevaluasi keseimbangan kolom pada setiap baris",
            "Menambahkan &lt;br&gt;"
        ],
        k:2
    },
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
        o:[
            "alt",
            "title",
            "src",
            "width"
        ],
        k:2
    },
    {
        q:"Fungsi utama atribut <code>alt</code> pada gambar adalah …",
        o:[
            "Mengatur ukuran gambar",
            "Menampilkan judul gambar",
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
            "Menampilkan foto profil",
            "Menampilkan tutorial langkah-langkah",
            "Menampilkan ikon"
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
            "Mengganti &lt;video&gt; menjadi &lt;img&gt;",
            "Menambahkan &lt;br&gt;"
        ],
        k:1
    },
    {
        q:"Perhatikan kode berikut:<pre>&lt;a href=&quot;profil.html&quot;&gt;Profil&lt;/a&gt;</pre>Analisis fungsi dari kode tersebut adalah …",
        o:[
            "Menampilkan teks tebal",
            "Membuka halaman profil.html",
            "Mengunduh file profil",
            "Menampilkan gambar"
        ],
        k:1
    },
    {
        q:"Jika nilai <code>href</code> berisi URL lengkap (https://...), maka hyperlink tersebut termasuk …",
        o:[
            "Internal link",
            "Anchor link",
            "External link",
            "Local link"
        ],
        k:2
    },
    {
        q:"Tujuan penggunaan hyperlink internal adalah …",
        o:[
            "Menghubungkan ke website lain",
            "Menghubungkan antar halaman dalam satu website",
            "Menghubungkan ke email",
            "Menghubungkan ke file video"
        ],
        k:1
    },
    {
        q:"Atribut <code>target=&quot;_blank&quot;</code> pada tag &lt;a&gt; berfungsi untuk …",
        o:[
            "Membuka link di halaman yang sama",
            "Menutup halaman lama",
            "Membuka link di tab atau jendela baru",
            "Menyembunyikan link"
        ],
        k:2
    },
    {
        q:"Evaluasi penggunaan hyperlink berikut:<pre>&lt;a&gt;Beranda&lt;/a&gt;</pre>Kesalahan utama dari kode tersebut adalah …",
        o:[
            "Tidak menggunakan &lt;li&gt;",
            "Tidak memiliki atribut href",
            "Tidak berada di dalam &lt;p&gt;",
            "Tidak menggunakan target"
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
    }
    ]},
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

    {q:"Jika ingin mengirim data formulir ke email atau aplikasi backend, maka diperlukan …",
    o:[
        "CSS",
        "JavaScript saja",
        "Server-side script (PHP, dll)",
        "&lt;br&gt;"
    ],
    k:2
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

    {q:"Jika tombol submit ditekan, proses yang terjadi adalah …",
    o:[
        "Form direset",
        "Data dikirim sesuai action dan method",
        "Browser ditutup",
        "CSS dijalankan"
    ],
    k:1
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
    }
    ]}
};

/* ================= MULAI ================= */
function mulaiKuis(pt){
    posttestAktif = pt;
    halamanAktif = 1;
    jawabanUser = {};

    pilihPosttest.style.display = 'none';
    quizBox.style.display = 'block';
    judulPosttest.innerText = "Posttest " + pt;

    renderSoal();
}

/* ================= RENDER ================= */
function renderSoal(){
    soalContainer.innerHTML = '';

    const soal = bankSoal[posttestAktif].soal;
    const totalHalaman = Math.ceil(soal.length / soalPerHalaman);

    infoHalaman.innerText = halamanAktif + " dari " + totalHalaman;

    const start = (halamanAktif - 1) * soalPerHalaman;
    const end   = start + soalPerHalaman;

    soal.slice(start,end).forEach((s,i)=>{
        const indexAsli = start + i;

        let html = `
        <div class="quiz-question">
            <h5 class="fw-bold text-primary">
                Soal ${indexAsli + 1}
            </h5>
            <p class="fw-semibold">${s.q}</p>
        `;

        s.o.forEach((opt,idx)=>{
            const checked = jawabanUser[indexAsli] === idx ? 'checked' : '';
            html += `
            <label class="choice ${checked ? 'selected':''}">
                <input type="radio" name="q${indexAsli}" value="${idx}" ${checked}>
                ${opt}
            </label>`;
        });

        html += `</div>`;
        soalContainer.innerHTML += html;
    });

    document.querySelectorAll('.choice input').forEach(r=>{
        r.addEventListener('change',function(){
            jawabanUser[this.name.replace('q','')] = parseInt(this.value);
            document.querySelectorAll(`input[name="${this.name}"]`)
                .forEach(x=>x.parentElement.classList.remove('selected'));
            this.parentElement.classList.add('selected');
        });
    });

    renderNavigasi(totalHalaman);
}

/* ================= NAVIGASI ================= */
function renderNavigasi(totalHalaman){
    let html = '';

    if(halamanAktif > 1){
        html += `<button class="btn btn-outline-secondary"
                onclick="halamanAktif--; renderSoal()">
                ⬅️ Sebelumnya
            </button>`;
    }else{
        html += `<div></div>`;
    }

    if(halamanAktif < totalHalaman){
        html += `<button class="btn btn-primary"
                onclick="halamanAktif++; renderSoal()">
                ➡️ Next
            </button>`;
    }else{
        html += `<button class="btn btn-success"
                onclick="handleSubmitKuis()">
                ✅ Selesaikan Kuis
            </button>`;
    }

    navigasiKuis.innerHTML = html;
}

/* ================= SUBMIT ================= */
function submitKuis(){
    let benar = 0;
    const total = bankSoal[posttestAktif].soal.length;

    bankSoal[posttestAktif].soal.forEach((s,i)=>{
        if(jawabanUser[i] === s.k) benar++;
    });

    let nilai = Math.round((benar / total) * 100);

    fetch("{{ route('kuis.submit') }}",{
        method:"POST",
        headers:{
            "Content-Type":"application/json",
            "X-CSRF-TOKEN":"{{ csrf_token() }}"
        },
        body:JSON.stringify({score:nilai,posttest:posttestAktif})
    })
    .then(res=>{
        if(!res.ok) throw "locked";
        return res.json();
    })
    .then(()=>{
        alert("Kuis berhasil disubmit!");
        location.reload();
    })
    .catch(()=>{
        alert("Posttest sudah dikerjakan!");
        location.reload();
    });
}

/* ================= MODAL ================= */
function tampilkanSoalKosong(){
    const list = getSoalBelumDijawab();
    const container = document.getElementById('listSoalKosong');
    container.innerHTML = '';

    list.forEach(i => {
        const nomor = i + 1;
        const halaman = Math.ceil(nomor / soalPerHalaman);

        const btn = document.createElement('button');
        btn.className = 'btn btn-outline-danger btn-sm';
        btn.textContent = `Soal ${nomor}`;
        btn.onclick = () => {
            halamanAktif = halaman;
            renderSoal();

            bootstrap.Modal.getInstance(
                document.getElementById('modalSoalKosong')
            ).hide();

            setTimeout(() => {
                document
                  .querySelector(`input[name="q${i}"]`)
                  ?.closest('.quiz-question')
                  ?.scrollIntoView({ behavior:'smooth', block:'center' });
            }, 200);
        };

        container.appendChild(btn);
    });

    new bootstrap.Modal(
        document.getElementById('modalSoalKosong')
    ).show();
}

function handleSubmitKuis(){
    if(!semuaSoalTerjawab()){
        tampilkanSoalKosong();
        return;
    }
    submitKuis();
}
</script>
