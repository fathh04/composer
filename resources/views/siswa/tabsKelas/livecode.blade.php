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
          <ol class="modern-list">
            <li>Buat Judul: <b style="color:#ff9800;">Tabel Sederhana</b></li>
            <li>Buat paragraf penjelasan singkat</li>
            <li>Buat tabel sederhana minimal 2 kolom dan 2 baris</li>
          </ol>
        </div>
      </div>
    </div>

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
            <div class="toolbar d-flex align-items-center px-3">
              <span class="fw-bold text-primary">💻 HTML Editor</span>
              <div class="ms-auto">
                <button id="runBtn" type="button" class="btn-run">▶ Run</button>
                <button id="clearBtn" type="button" class="btn-clear">🗑</button>
                <button id="submitBtn" type="button" class="btn-submit">📤 Kirim</button>
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

              <!-- UPLOAD GAMBAR SETELAH SUBMIT HTML -->
              <div id="uploadBox" style="display:none;" class="mt-3 p-3 bg-light border rounded">
                <h5 class="fw-bold">📤 Upload Hasil Preview</h5>

                <form action="{{ route('submission.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="submission_id" id="submissionIdInput">

                    <input type="file" name="image" accept="image/*" class="form-control mb-2" required>

                    <button class="btn btn-primary w-100">Kirim Gambar</button>
                </form>
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
`<!-- Mulai koding tabel sederhana di sini -->
<h1>Tabel Sederhana</h1>
<p>Ini adalah contoh tabel sederhana buatan saya.</p>

<table border="1">
  <tr>
    <th>Kolom 1</th>
    <th>Kolom 2</th>
  </tr>
  <tr>
    <td>Data 1</td>
    <td>Data 2</td>
  </tr>
</table>`
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

/* =====================================================
   === BADGE STATUS SUBMISSION (AUTO LOCK) — NEW =======
   ===================================================== */
fetch("/submission/check/{{ Auth::id() }}")
  .then(res => res.json())
  .then(data => {
      const badge = document.getElementById("submissionBadge");

      if (data.exists) {
          badge.innerHTML =
            `<span class="badge-status badge-success">🟢 Anda sudah mengumpulkan tugas</span>`;

          // Lock editor
          editorLocked = true;
          editor.updateOptions({ readOnly: true });

          runBtn.disabled = true;
          clearBtn.disabled = true;
          submitBtn.disabled = true;

      } else {
          badge.innerHTML =
            `<span class="badge-status badge-fail">🔴 Anda belum mengumpulkan tugas</span>`;
      }
  })
  .catch(() => {
      document.getElementById("submissionBadge").innerHTML =
        `<span class="badge-status badge-wait">⚠ Tidak bisa mengecek status</span>`;
  });

/* ---------- Feedback Logic ---------- */
function checkStudentAnswer(code) {
    const feedback = [];
    const c = code.toLowerCase();

    if (/<h1[^>]*>.*tabel sederhana.*<\/h1>/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Judul <b>Tabel Sederhana</b> sudah benar!" });
    } else {
        feedback.push({ ok: false, msg: "❌ Judul belum benar. Gunakan: <code>&lt;h1&gt;Tabel Sederhana&lt;/h1&gt;</code>" });
    }

    if (/<p\b[^>]*>.*?<\/p>/is.test(code)) {
        feedback.push({ ok: true, msg: "✔ Paragraf sudah dibuat!" });
    } else {
        feedback.push({ ok: false, msg: "❌ Paragraf belum ada. Tambahkan paragraf penjelasan." });
    }

    if (/<table\b[^>]*>[\s\S]*<\/table>/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Tabel sederhana ditemukan!" });
    } else {
        feedback.push({ ok: false, msg: "❌ Tabel belum ada. Tambahkan: <code>&lt;table&gt;...&lt;/table&gt;</code>" });
    }

    if (/<tr>[\s\S]*?<td>.*?<\/td>[\s\S]*?<\/tr>/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Tabel memiliki baris & kolom, sudah benar!" });
    } else {
        feedback.push({ ok: false, msg: "❌ Tabel belum berisi baris dan kolom." });
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
          window.submissionId = data.submission_id;
          document.getElementById("uploadBox").style.display = "block";
      }
  });
});

/* ---------- Auto-inject submission ID ---------- */
setInterval(() => {
    if (window.submissionId) {
        document.getElementById("submissionIdInput").value = window.submissionId;
    }
}, 300);

/* ---------- Run Preview ---------- */
document.getElementById("runBtn").addEventListener('click', function() {
  if (editorLocked) return;
  files["index.html"] = editor.getValue();
  const output = `<!doctype html><html><body>${files["index.html"]}</body></html>`;
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

/* Toolbar */
.toolbar {
  height: 46px;
  background: #fafafa;
  border-bottom: 1px solid #e6e6e6;
  display:flex;
  align-items:center;
}
.btn-run, .btn-clear, .btn-submit {
  border: none;
  color: #fff;
  padding: 6px 12px;
  border-radius: 6px;
  cursor: pointer;
  font-weight:600;
}
.btn-run { background:#4CAF50; }
.btn-clear { background:#f44336; margin-left:8px; }
.btn-submit { background:#2196F3; margin-left:8px; }

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
</style>
