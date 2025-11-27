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
          <h6 class="fw-bold text-primary">🎯 Tugas:</h6>
          <ol class="modern-list">
            <li>Judul: <b style="color:#ff9800;">Hello Word!</b></li>
            <li>Paragraf singkat tentang dirimu</li>
            <li>Buatlah tombol <code>Click Me</code></li>
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
  "index.html": "<!-- Tulis kode HTML Anda disini! -->\n<h1>Hello Word!</h1>\n<p>Perkenalkan nama saya ...</p>\n<button>Click Me</button>\n"
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

/* ---------- Feedback Logic ---------- */
function checkStudentAnswer(code) {
    const feedback = [];
    // normalize whitespace for checks
    const codeNorm = code.replace(/\s+/g, ' ').toLowerCase();

    // Check heading exact phrase "hello word!" inside h1 (case-insensitive)
    if (/<h1[^>]*>.*hello word!.*<\/h1>/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Judul <b>Hello Word!</b> sudah benar!" });
    } else {
        feedback.push({ ok: false, msg: "❌ Judul belum benar. Gunakan: <code>&lt;h1&gt;Hello Word!&lt;/h1&gt;</code>" });
    }

    // Check paragraph presence
    if (/<p\b[^>]*>.*?<\/p>/is.test(code)) {
        feedback.push({ ok: true, msg: "✔ Paragraf sudah ada, bagus!" });
    } else {
        feedback.push({ ok: false, msg: "❌ Paragraf belum dibuat. Tambahkan: <code>&lt;p&gt;Tuliskan tentang dirimu&lt;/p&gt;</code>" });
    }

    // Check button content "Click Me" (case-insensitive)
    if (/<button\b[^>]*>\s*click me\s*<\/button>/i.test(code)) {
        feedback.push({ ok: true, msg: "✔ Tombol <b>Click Me</b> sudah benar!" });
    } else {
        feedback.push({ ok: false, msg: "❌ Tombol belum dibuat atau teksnya berbeda. Gunakan: <code>&lt;button&gt;Click Me&lt;/button&gt;</code>" });
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
    // scroll to feedback
    box.scrollIntoView({behavior: 'smooth', block: 'center'});
}

/* ---------- Preview / Run / Clear ---------- */
document.getElementById("runBtn").addEventListener('click', function() {
  if (editorLocked) return;
  files["index.html"] = editor.getValue();
  const output = `<!doctype html><html><head><meta charset="utf-8"></head><body>${files["index.html"]}</body></html>`;
  document.getElementById("preview").srcdoc = output;
  document.getElementById("output").style.display = "flex";
});

document.getElementById("clearBtn").addEventListener('click', function() {
  if (editorLocked) return;
  files["index.html"] = "";
  editor.setValue("");
  document.getElementById("preview").srcdoc = "";
  document.getElementById("output").style.display = "none";
});

/* ---------- Submit with feedback (prevent reload) ---------- */
document.getElementById("submitBtn").addEventListener('click', function(e){
  e && e.preventDefault();

  if (editorLocked) return;

  files["index.html"] = editor.getValue();

  // run feedback
  const fb = checkStudentAnswer(files["index.html"]);
  showFeedback(fb);

  // lock editor and buttons
  editor.updateOptions({ readOnly: true });
  editorLocked = true;
  document.getElementById("runBtn").disabled = true;
  document.getElementById("clearBtn").disabled = true;
  document.getElementById("submitBtn").disabled = true;

  // send via fetch (AJAX) without reload
  fetch("{{ url('/submission/save') }}", {
    method: "POST",
    credentials: "same-origin",
    headers: {
      "Content-Type": "application/json",
      "X-CSRF-TOKEN": '{{ csrf_token() }}'
    },
    body: JSON.stringify({ html: files["index.html"] })
  }).then(res => {
    // optional success handling
    if (res.ok) {
      // show small success indicator
      const okNote = document.createElement('div');
      okNote.className = 'submit-ok';
      okNote.innerHTML = '✔ Kode berhasil dikirim';
      document.getElementById('feedbackBox').appendChild(okNote);
    }
  }).catch(err => {
    const failNote = document.createElement('div');
    failNote.className = 'submit-fail';
    failNote.innerHTML = '⚠ Gagal mengirim, coba lagi.';
    document.getElementById('feedbackBox').appendChild(failNote);
  });
});

/* ---------- Zoom & Fullscreen Controls for preview ---------- */
let zoomLevel = 1;
const zoomStep = 0.1;
const minZoom = 0.3;
const maxZoom = 2.5;
const preview = () => document.getElementById('preview');

function applyZoom() {
  const frame = preview();
  frame.style.transform = `scale(${zoomLevel})`;
  // adjust container scroll/height so scaled content fits
  // using transform scale keeps iframe width fixed; adjust wrapper height to avoid overflow
  const wrapper = frame.parentElement;
  if (zoomLevel > 1) {
    wrapper.style.overflow = 'auto';
  } else {
    wrapper.style.overflow = 'auto';
  }
}

document.getElementById('zoomInBtn').addEventListener('click', () => {
  zoomLevel = Math.min(maxZoom, +(zoomLevel + zoomStep).toFixed(2));
  applyZoom();
});
document.getElementById('zoomOutBtn').addEventListener('click', () => {
  zoomLevel = Math.max(minZoom, +(zoomLevel - zoomStep).toFixed(2));
  applyZoom();
});
document.getElementById('fitBtn').addEventListener('click', () => {
  zoomLevel = 1;
  applyZoom();
});
document.getElementById('fsBtn').addEventListener('click', () => {
  const frame = preview();
  // request fullscreen on wrapper (safer)
  const wrapper = frame.parentElement;
  if (wrapper.requestFullscreen) wrapper.requestFullscreen();
  else if (wrapper.webkitRequestFullscreen) wrapper.webkitRequestFullscreen();
});

/* ensure zoom resets when new preview loaded */
window.addEventListener('message', (e) => {
  // no-op, placeholder if you want to send messages from preview
});
</script>

<style>
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

/* iframe scaling (transform origin top-left) */
#preview { width:100%; height:100%; border: none; transform-origin: top left; transition: transform .12s ease-in-out; }

/* Zoom buttons */
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
.submit-ok { margin-top:8px; color:#0f5132; font-weight:700; }
.submit-fail { margin-top:8px; color:#7a1f1f; font-weight:700; }

/* Responsive adjustments */
@media (max-width: 768px) {
  .file-sidebar { display:none; }
  #editor { height:40vh; }
  #output { height:50vh; }
}
</style>
