<div class="container-fluid py-4">
  <div class="row g-4">

    <!-- Kolom kiri -->
    <div class="col-md-3">
      <div class="card glass-card h-100 instructions-card">
        <div class="card-body">
          <h4 class="fw-bold mb-3 text-primary">📘 Petunjuk Pemakaian</h4>
          <ul class="modern-list">
            <li>Tulis <b>HTML</b> di editor.</li>
            <li>Klik <b>▶ Run</b> untuk jalankan.</li>
            <li>Klik <b>🗑 Clear</b> untuk reset editor.</li>
            <li>Klik <b>📤 Kirim</b> untuk kumpulkan tugas.</li>
          </ul>

          <hr>

          <!-- ====== BADGE STATUS SUBMISSION (NEW) ====== -->
          <div id="submissionBadge" class="mb-3">
            <span class="badge-status badge-wait">⏳ Mengecek status...</span>
          </div>
          <!-- =========================================== -->

          <!-- =============== TUGAS BARU =============== -->
            <h6 class="fw-bold text-primary">🎯 Tugas:</h6>

            <p class="text-muted small mb-2">
            Buat halaman HTML sesuai dengan kreativitas Kamu. Ikuti detail tugas dibawah ini!
            </p>

            <button class="btn btn-outline-primary btn-sm w-100"
                    data-bs-toggle="modal"
                    data-bs-target="#tugasModal">
            📖 Lihat selengkapnya
            </button>
        </div>
      </div>
    </div>
    <!-- ================= MODAL TUGAS ================= -->
    <div class="modal fade" id="tugasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content glass-card">

        <div class="modal-header border-0">
            <h5 class="modal-title fw-bold text-primary">
            🎯 Detail Tugas
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <hr>
        <div class="modal-body">
            <ol class="modern-list">

            <li>
                <b>Studi Kasus</b><br>
                Buat satu halaman website sederhana bertema
                <b style="color:#ff9800;">Profil Produk / Profil Sekolah / Profil Diri</b>.
                Seluruh isi dibuat <u>dalam satu file HTML</u> dan saling terhubung dalam satu halaman.
            </li>

            <li>
                <b>Struktur Dasar HTML</b><br>
                Lanjutkan kode pada editor untuk membuat struktur HTML sederhana
                menggunakan:
                <code>&lt;h1&gt;</code>, <code>&lt;p&gt;</code>, dan elemen HTML lainnya.
                Pastikan penulisan tag benar dan rapi.
            </li>

            <li>
                <b>Konten Utama Halaman</b><br>
                Pada halaman yang sama, buat konten berikut:
                <ul>
                <li>Judul halaman menggunakan <code>&lt;h1&gt;</code></li>
                <li>Minimal 2 paragraf penjelasan menggunakan <code>&lt;p&gt;</code></li>
                <li>1 list (bebas <code>&lt;ul&gt;</code> atau <code>&lt;ol&gt;</code>) berisi minimal 3 item</li>
                <li>1 gambar menggunakan <code>&lt;img&gt;</code> (boleh dari URL internet)</li>
                </ul>
            </li>

            <li>
                <b>Tabel Informasi</b><br>
                Tambahkan sebuah tabel sederhana namun terstruktur dengan ketentuan:
                <ul>
                <li>Minimal 2 kolom dan 3 baris</li>
                <li>Menggunakan <code>&lt;th&gt;</code> dan <code>&lt;td&gt;</code></li>
                <li>Minimal 1 sel menggunakan <code>colspan</code> <u>atau</u> <code>rowspan</code></li>
                </ul>
            </li>

            <li>
                <b>Navigasi dalam Halaman</b><br>
                Buat navigasi sederhana menggunakan tag <code>&lt;a&gt;</code> dengan ketentuan:
                <ul>
                <li>Link menuju bagian tertentu dalam halaman (anchor link)</li>
                <li>Gunakan atribut <code>id</code> pada bagian tujuan</li>
                <li>Link dapat diklik dan berpindah ke bagian yang dituju</li>
                </ul>
            </li>

            <li>
                <b>Formulir Sederhana</b><br>
                Pada bagian akhir halaman, buat sebuah form HTML dengan ketentuan:
                <ul>
                <li>Menggunakan tag <code>&lt;form&gt;</code></li>
                <li>Minimal 3 input (contoh: nama, email, pilihan)</li>
                <li>Setiap input memiliki <code>&lt;label&gt;</code></li>
                <li>Terdapat tombol submit</li>
                </ul>
            </li>

            </ol>
        </div>

        <div class="modal-footer border-0">
            <button class="btn btn-primary" data-bs-dismiss="modal">
            ✔ Saya Mengerti
            </button>
        </div>

        </div>
    </div>
    </div>
    <!-- ================================================= -->

    <!-- Kolom kanan -->
    <div class="col-md-9">
      <div class="card glass-card h-100">
        <div class="card-body p-0 d-flex">

          <!-- Sidebar File -->
          <div class="file-sidebar">
            <div class="file-tab active" data-file="index.html">🌐 index.html</div>
          </div>

          <!-- Editor + Output -->
          <div class="flex-grow-1 d-flex flex-column">

            <!-- Toolbar -->
            <div class="toolbar px-2">
                <span class="toolbar-title fw-bold text-primary">💻 HTML Editor</span>

                <div class="toolbar-actions ms-auto">
                    <button id="runBtn" type="button" class="btn-run">▶</button>
                    <button id="clearBtn" type="button" class="btn-clear">🗑</button>
                    <button id="submitBtn" type="button" class="btn-submit">📤</button>
                </div>
            </div>

            <!-- FEEDBACK OTOMATIS -->
            <div id="feedbackBox" class="feedback-box" style="display:none;"></div>

            <!-- Workspace -->
            <div class="workspace flex-grow-1 d-flex flex-column">
              <div id="editor"></div>

              <div id="output" style="display:none; flex-direction: column; height: 40vh;">
                <div class="cmd-header d-flex align-items-center px-3">
                  <span>🖥 Preview</span>

                  <div class="ms-auto d-flex gap-2">
                    <button class="zoom-btn" id="zoomInBtn" title="Zoom In">＋</button>
                    <button class="zoom-btn" id="zoomOutBtn" title="Zoom Out">－</button>
                    <button class="zoom-btn" id="fitBtn" title="Reset Zoom">⤢</button>
                    <button class="zoom-btn" id="fsBtn" title="Fullscreen Preview">⛶</button>
                  </div>
                </div>

                <div class="preview-wrap" style="position:relative; flex:1; overflow:auto;">
                  <iframe id="preview" style="transform-origin: top left; width:100%; height:100%;"></iframe>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Load Monaco Editor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs/loader.min.js"></script>

<script>
/* ---------- Setup Editor ---------- */
let editor;
let editorLocked = false;
let files = {
  "index.html":
`<!-- Tuliskan kode HTML di sini -->`
};

require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs' }});
require(["vs/editor/editor.main"], function () {
  editor = monaco.editor.create(document.getElementById('editor'), {
    value: files["index.html"],
    language: "html",
    theme: "vs-light",
    fontSize: 15,
    automaticLayout: true,
    minimap: { enabled: false }
  });
});

/* =======================================================
   === FUNGSI BARU: RELOAD STATUS SUBMISSION ============
   ======================================================= */
function reloadSubmissionStatus() {
    fetch("{{ route('submission.check', Auth::id()) }}?t=" + Date.now(), {
        headers: {
            "Accept": "application/json"
        }
    })
    .then(res => {
        if (!res.ok) throw new Error("HTTP error");
        return res.json();
    })
    .then(data => {
        const badge = document.getElementById("submissionBadge");

        if (data.exists === true) {
            badge.innerHTML =
              `<span class="badge-status badge-success">🟢 Anda sudah mengumpulkan tugas</span>`;

            editorLocked = true;

            if (editor) {
                editor.updateOptions({ readOnly: true });
            }

            runBtn.disabled = true;
            clearBtn.disabled = true;
            submitBtn.disabled = true;
        } else {
            badge.innerHTML =
              `<span class="badge-status badge-fail">🔴 Anda belum mengumpulkan tugas</span>`;
        }
    })
    .catch(err => {
        console.warn("Status check failed:", err);
        document.getElementById("submissionBadge").innerHTML =
          `<span class="badge-status badge-wait">⚠ Status belum siap, refresh halaman</span>`;
    });
}

/* === GANTI FETCH AWAL MENJADI PANGGILAN FUNGSI === */
function safeReloadStatus() {
    if (typeof editor === "undefined") {
        setTimeout(safeReloadStatus, 300);
        return;
    }
    reloadSubmissionStatus();
}

safeReloadStatus();

/* ---------- Feedback Logic (Project Live Coding) ---------- */
function checkStudentAnswer(code) {
    const feedback = [];
    const c = code.toLowerCase();

    /* =========================
       1. JUDUL HALAMAN <h1>
       ========================= */
    if (/<h1\b[^>]*>.*<\/h1>/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Judul halaman (<code>&lt;h1&gt;</code>) ditemukan." });
    } else {
        feedback.push({ ok: false, msg: "❌ Judul halaman belum ada. Gunakan <code>&lt;h1&gt;</code>." });
    }

    /* =========================
       2. PARAGRAF (MINIMAL 2)
       ========================= */
    const paragrafCount = (code.match(/<p\b[^>]*>[\s\S]*?<\/p>/gi) || []).length;
    if (paragrafCount >= 2) {
        feedback.push({ ok: true, msg: `✔ Paragraf ditemukan (${paragrafCount} paragraf).` });
    } else {
        feedback.push({ ok: false, msg: "❌ Paragraf kurang. Minimal <b>2 paragraf</b> menggunakan <code>&lt;p&gt;</code>." });
    }

    /* =========================
       3. LIST (ul / ol) MIN 3 ITEM
       ========================= */
    const listMatch = code.match(/<(ul|ol)\b[^>]*>[\s\S]*?<\/\1>/i);
    if (listMatch) {
        const liCount = (listMatch[0].match(/<li\b[^>]*>/gi) || []).length;
        if (liCount >= 3) {
            feedback.push({ ok: true, msg: `✔ List ditemukan dengan ${liCount} item.` });
        } else {
            feedback.push({ ok: false, msg: "❌ List harus berisi minimal <b>3 item</b> (<code>&lt;li&gt;</code>)." });
        }
    } else {
        feedback.push({ ok: false, msg: "❌ List belum ada. Gunakan <code>&lt;ul&gt;</code> atau <code>&lt;ol&gt;</code>." });
    }

    /* =========================
       4. GAMBAR <img>
       ========================= */
    if (/<img\b[^>]*src\s*=\s*["'][^"']+["']/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Gambar (<code>&lt;img&gt;</code>) ditemukan." });
    } else {
        feedback.push({ ok: false, msg: "❌ Gambar belum ada. Tambahkan <code>&lt;img src=\"...\"&gt;</code>." });
    }

    /* =========================
       5. TABEL
       ========================= */
    if (/<table\b[^>]*>[\s\S]*<\/table>/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Tabel ditemukan." });

        const trCount = (code.match(/<tr\b[^>]*>/gi) || []).length;
        const thCount = (code.match(/<th\b[^>]*>/gi) || []).length;
        const tdCount = (code.match(/<td\b[^>]*>/gi) || []).length;

        if (trCount >= 3 && thCount >= 1 && tdCount >= 2) {
            feedback.push({ ok: true, msg: "✔ Struktur tabel sesuai (baris & kolom terpenuhi)." });
        } else {
            feedback.push({ ok: false, msg: "❌ Tabel harus memiliki minimal <b>2 kolom</b> dan <b>3 baris</b>." });
        }

        if (/colspan\s*=\s*["']?\d+["']?|rowspan\s*=\s*["']?\d+["']?/i.test(code)) {
            feedback.push({ ok: true, msg: "✔ Tabel menggunakan <code>colspan</code> atau <code>rowspan</code>." });
        } else {
            feedback.push({ ok: false, msg: "❌ Tabel belum menggunakan <code>colspan</code> atau <code>rowspan</code>." });
        }

    } else {
        feedback.push({ ok: false, msg: "❌ Tabel belum ada. Tambahkan <code>&lt;table&gt;</code>." });
    }

    /* =========================
       6. NAVIGASI ANCHOR LINK
       ========================= */
    const anchorLink = code.match(/<a\b[^>]*href\s*=\s*["']#.+?["'][^>]*>/i);
    const anchorTarget = code.match(/id\s*=\s*["'][^"']+["']/i);

    if (anchorLink && anchorTarget) {
        feedback.push({ ok: true, msg: "✔ Navigasi anchor link (<code>&lt;a href=\"#...\"&gt;</code>) ditemukan." });
    } else {
        feedback.push({ ok: false, msg: "❌ Navigasi belum lengkap. Gunakan <code>&lt;a href=\"#id\"&gt;</code> dan elemen dengan <code>id</code>." });
    }

    /* =========================
       7. FORMULIR
       ========================= */
    if (/<form\b[^>]*>[\s\S]*<\/form>/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Formulir (<code>&lt;form&gt;</code>) ditemukan." });

        const inputCount = (code.match(/<input\b[^>]*>/gi) || []).length;
        const labelCount = (code.match(/<label\b[^>]*>/gi) || []).length;

        if (inputCount >= 3) {
            feedback.push({ ok: true, msg: `✔ Input form cukup (${inputCount} input).` });
        } else {
            feedback.push({ ok: false, msg: "❌ Form harus memiliki minimal <b>3 input</b>." });
        }

        if (labelCount >= inputCount) {
            feedback.push({ ok: true, msg: "✔ Setiap input memiliki <code>&lt;label&gt;</code>." });
        } else {
            feedback.push({ ok: false, msg: "❌ Setiap input harus memiliki <code>&lt;label&gt;</code>." });
        }

        if (/<button\b[^>]*type\s*=\s*["']?submit["']?|<input\b[^>]*type\s*=\s*["']?submit["']?/i.test(code)) {
            feedback.push({ ok: true, msg: "✔ Tombol submit ditemukan." });
        } else {
            feedback.push({ ok: false, msg: "❌ Form belum memiliki tombol submit." });
        }

    } else {
        feedback.push({ ok: false, msg: "❌ Formulir belum ada. Tambahkan <code>&lt;form&gt;</code>." });
    }

    return feedback;
}

function showFeedback(items) {
    const box = document.getElementById("feedbackBox");
    box.style.display = "block";
    box.innerHTML = items.map(it => {
      const color = it.ok ? 'feedback-ok' : 'feedback-fail';
      return `<div class="${color}">${it.msg}</div>`;
    }).join("");
}

/* ---------- Submit + AJAX ---------- */
document.getElementById("submitBtn").addEventListener('click', function(e){
  e.preventDefault();
  if (editorLocked) return;

  files["index.html"] = editor.getValue();

  const fb = checkStudentAnswer(files["index.html"]);
  showFeedback(fb);

  editor.updateOptions({ readOnly: true });
  editorLocked = true;

  runBtn.disabled = true;
  clearBtn.disabled = true;
  submitBtn.disabled = true;

  fetch("{{ route('submission.save') }}", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": "{{ csrf_token() }}"
      },
      body: JSON.stringify({ html: files["index.html"] })
  })
  .then(res => res.json())
  .then(data => {
      if (data.success) {
          // Setelah submit HTML → cek lagi status
          setTimeout(() => reloadSubmissionStatus(), 600);
      }
  });
});

/* ---------- Run Preview ---------- */
document.getElementById("runBtn").addEventListener('click', function() {
  if (editorLocked) return;

  files["index.html"] = editor.getValue();

  const output = `
    <!doctype html>
    <html>
    <head>
        <base href="about:srcdoc">
        <style>
        body {
            background: #ffffff;
            margin: 16px;
            font-family: system-ui, sans-serif;
        }
        </style>
    </head>
    <body>
        ${files["index.html"]}
    </body>
    </html>`;

  document.getElementById("preview").srcdoc = output;
  document.getElementById("output").style.display = "flex";
});

/* ---------- Clear ---------- */
document.getElementById("clearBtn").addEventListener('click', function() {
  if (editorLocked) return;
  editor.setValue("");
  document.getElementById("preview").srcdoc = "";
  document.getElementById("output").style.display = "none";
});

/* ===== PREVIEW ZOOM & FULLSCREEN ===== */
let scale = 1;
const preview = document.getElementById("preview");

/* Zoom In */
document.getElementById("zoomInBtn").addEventListener("click", () => {
  scale += 0.1;
  preview.style.transform = `scale(${scale})`;
});

/* Zoom Out */
document.getElementById("zoomOutBtn").addEventListener("click", () => {
  scale = Math.max(0.3, scale - 0.1);
  preview.style.transform = `scale(${scale})`;
});

/* Reset Zoom */
document.getElementById("fitBtn").addEventListener("click", () => {
  scale = 1;
  preview.style.transform = "scale(1)";
});

/* Fullscreen Preview */
document.getElementById("fsBtn").addEventListener("click", () => {
  if (preview.requestFullscreen) {
    preview.requestFullscreen();
  } else if (preview.webkitRequestFullscreen) {
    preview.webkitRequestFullscreen();
  } else if (preview.msRequestFullscreen) {
    preview.msRequestFullscreen();
  }
});
</script>

<style>
    /* ===== BADGE STATUS ===== */
    .badge-status {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 700;
    }
    .badge-success {
    background: #e8f5e9;
    color: #2e7d32;
    border: 1px solid #a5d6a7;
    }
    .badge-fail {
    background: #ffebee;
    color: #c62828;
    border: 1px solid #ef9a9a;
    }
    .badge-wait {
    background: #fff3cd;
    color: #775700;
    border: 1px solid #ffe49c;
    }

    /* ======= Layout & Visuals ======= */
    .glass-card {
    background: rgba(255,255,255,0.96);
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    border: 1px solid rgba(255,255,255,0.6);
    backdrop-filter: blur(8px);
    }

    /* ================= TOOLBAR RESPONSIVE ================= */
.toolbar{
    height:46px;
    background:#fafafa;
    border-bottom:1px solid #e6e6e6;
    display:flex;
    align-items:center;
    padding:0 8px;
    overflow:hidden;
}

.toolbar-title{
    white-space:nowrap;
}

.toolbar-actions{
    display:flex;
    gap:6px;
    flex-shrink:0;
}

.btn-run,
.btn-clear,
.btn-submit{
    border:none;
    color:#fff;
    width:36px;
    height:32px;
    padding:0;
    border-radius:6px;
    cursor:pointer;
    font-weight:600;
    font-size:14px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.btn-run{background:#4CAF50;}
.btn-clear{background:#f44336;}
.btn-submit{background:#2196F3;}

    /* File sidebar */
    .file-sidebar {
    width: 150px;
    background: #f0f4ff;
    border-right: 1px solid #e6e9f8;
    display:flex;
    flex-direction:column;
    padding:10px 8px;
    }
    .file-tab {
    padding:10px;
    margin:6px 4px;
    background:#4f8ef7;
    color:#fff;
    border-radius:8px;
    text-align:left;
    font-weight:700;
    }

    /* Editor + preview */
    #editor { width:100%; height:50vh; }
    #output { display:flex; flex-direction:column; height:40vh; border-top:1px solid #e6e6e6; }
    .cmd-header { height:44px; display:flex; align-items:center; padding:0 12px; background:#fff; border-bottom:1px solid #eee; }
    .preview-wrap { flex:1; overflow:auto; background:#fff; }

    #preview { width:100%; height:100%; border: none; transform-origin: top left; transition: transform .12s ease-in-out; }

    .zoom-btn {
    background:#f1f5f9;
    border:1px solid #d1d9e6;
    padding:4px 8px;
    margin-left:6px;
    border-radius:6px;
    cursor:pointer;
    font-weight:700;
    }
    .zoom-btn:hover { background:#e6eef9; }

    /* Feedback box */
    .feedback-box {
    display:none;
    background: #fff7e6;
    border-left: 5px solid #ff9800;
    padding: 12px 16px;
    margin: 10px;
    border-radius: 10px;
    font-size: 14px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    }
    .feedback-ok { color: #0f5132; background: rgba(16,185,129,0.04); padding:6px; border-radius:6px; margin-bottom:6px; }
    .feedback-fail { color: #7a1f1f; background: rgba(244,63,94,0.04); padding:6px; border-radius:6px; margin-bottom:6px; }

    @media (max-width: 768px) {
        .file-sidebar { display:none; }
        #editor { height:40vh; }
        #output { height:50vh; }
        }

        @media (max-width: 768px){

        /* Toolbar selalu 1 baris */
        .toolbar{
            flex-wrap:nowrap;
        }

        /* Sembunyikan judul */
        .toolbar-title{
            display:none;
        }

        /* Tombol lebih kecil */
        .btn-run,
        .btn-clear,
        .btn-submit{
            width:32px;
            height:30px;
            font-size:13px;
        }
    }
</style>
