<div class="container-fluid py-4">
  <div class="row g-4">

    <!-- Kolom kiri: Instruksi -->
    <div class="col-md-3">
      <div class="card glass-card h-100 instructions-card">
        <div class="card-body">
          <h4 class="fw-bold mb-3 text-primary">📘 Petunjuk Pemakaian</h4>
          <ul class="modern-list">
            <li><b>HTML, CSS, JS</b> tulis di editor.</li>
            <li>Klik <b>▶ Run</b> untuk jalankan.</li>
            <li>Klik <b>🗑 Clear</b> untuk reset editor.</li>
            <li>Klik <b>⛶ Fullscreen</b> untuk mode penuh.</li>
          </ul>
          <hr>
          <h6 class="fw-bold text-primary">🎯 Tugas:</h6>
          <ol class="modern-list">
            <li>Judul: <b style="color:#ff9800;">Hello Word!</b></li>
            <li>Paragraf singkat yang menggambarkan tentang dirimu!</li>
            <li>Tombol alert: <code>"Selamat, kode kamu berhasil!"</code></li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Kolom kanan: Editor + Output -->
    <div class="col-md-9">
      <div class="card glass-card h-100">
        <div class="card-body p-0 d-flex">

          <!-- Sidebar File Tabs -->
          <div class="file-sidebar">
            <div class="file-tab active" data-file="index.html">🌐 index.html</div>
            <div class="file-tab" data-file="style.css">🎨 style.css</div>
            <div class="file-tab" data-file="script.js">⚡ script.js</div>
          </div>

          <!-- Editor + Output -->
          <div class="flex-grow-1 d-flex flex-column">
            <!-- Toolbar -->
            <div class="toolbar d-flex align-items-center px-3">
              <span class="fw-bold text-primary">💻 Code Editor</span>
              <div class="ms-auto">
                <button id="runBtn" class="btn-run">▶ Run</button>
                <button id="clearBtn" class="btn-clear">🗑</button>
              </div>
            </div>

            <!-- Workspace -->
            <div class="workspace flex-grow-1">
              <div id="editor"></div>

              <!-- Output -->
              <div id="output" style="display:none;">
                <div class="cmd-header d-flex align-items-center px-3">
                  <span>🖥 Preview</span>
                  <span id="toggleBtn" class="ms-auto btn-icon small">⛶</span>
                </div>
                <iframe id="preview"></iframe>
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
let editor;
let isFullscreen = false;
let currentFile = "index.html";
let originalParent;

let files = {
  "index.html": "<!-- Tulis kode HTML Anda disini! -->\n<h1>Hello Word!</h1>\n",
  "style.css": "/* Tulis kode CSS Anda disini! */\nbody { font-family: Comic Sans MS, Arial; background:#fdf6e3; }",
  "script.js": "// Tulis kode javascript Anda disini!\nalert('Selamat, kode kamu berhasil!');"
};

require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs' }});
require(["vs/editor/editor.main"], function () {
  editor = monaco.editor.create(document.getElementById('editor'), {
    value: files[currentFile],
    language: "html",
    theme: "vs-light",
    fontSize: 15,
    fontFamily: "JetBrains Mono, Fira Code, monospace",
    automaticLayout: true
  });
});

// Ganti file
document.querySelectorAll(".file-tab").forEach(tab => {
  tab.addEventListener("click", function() {
    files[currentFile] = editor.getValue();
    document.querySelectorAll(".file-tab").forEach(t => t.classList.remove("active"));
    this.classList.add("active");
    currentFile = this.dataset.file;

    let lang = "html";
    if (currentFile.endsWith(".css")) lang = "css";
    if (currentFile.endsWith(".js")) lang = "javascript";

    monaco.editor.setModelLanguage(editor.getModel(), lang);
    editor.setValue(files[currentFile]);
  });
});

// Run
document.getElementById("runBtn").onclick = function() {
  files[currentFile] = editor.getValue();
  const output = `
  <!DOCTYPE html>
  <html>
  <head>
  <style>${files["style.css"]}</style>
  </head>
  <body>
  ${files["index.html"]}
  <script>${files["script.js"]}<\/script>
  </body>
  </html>
  `;
  document.getElementById("preview").srcdoc = output;
  document.getElementById("output").style.display = "block";
};

// Clear
document.getElementById("clearBtn").onclick = function() {
  for (let f in files) files[f] = "";
  editor.setValue("");
  document.getElementById("preview").srcdoc = "";
  document.getElementById("output").style.display = "none";
};

// Toggle fullscreen
document.getElementById("toggleBtn").onclick = function() {
  const output = document.getElementById("output");
  if (!isFullscreen) {
    originalParent = output.parentNode;
    document.body.appendChild(output);
    output.classList.add("fullscreen");
    this.textContent = "❐";
    isFullscreen = true;
  } else {
    originalParent.appendChild(output);
    output.classList.remove("fullscreen");
    this.textContent = "⛶";
    isFullscreen = false;
  }
};
</script>

<style>
/* Glassmorphism */
.glass-card {
  background: rgba(255, 255, 255, 0.95);
  border-radius: 16px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.1);
  border: 1px solid rgba(255,255,255,0.4);
  backdrop-filter: blur(10px);
}

/* Instructions */
.instructions-card h4 {
  font-size: 1.1rem;
}
.instructions-card ul,
.instructions-card ol {
  font-size: 0.9rem;
  padding-left: 18px;
}
.instructions-card li {
  margin-bottom: 4px;
  line-height: 1.4;
}

/* Sidebar Files */
.file-sidebar {
  width: 150px;
  background: #f0f4ff;
  border-right: 2px solid #ddd;
  display: flex;
  flex-direction: column;
  padding: 10px 0;
}
.file-tab {
  padding: 10px 14px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  color: #444;
  border-radius: 6px;
  margin: 3px 8px;
  transition: 0.2s;
}
.file-tab:hover {
  background: #e3eaff;
}
.file-tab.active {
  background: #4f8ef7;
  color: #fff;
  font-weight: bold;
}

/* Toolbar */
.toolbar {
  height: 46px;
  background: #fafafa;
  color: #333;
  font-family: 'JetBrains Mono', monospace;
  border-bottom: 1px solid #e0e0e0;
}
.btn-run {
  background: #4CAF50;
  border: none;
  color: white;
  padding: 4px 12px;
  border-radius: 6px;
  cursor: pointer;
}
.btn-clear {
  background: #f44336;
  border: none;
  color: white;
  padding: 4px 10px;
  border-radius: 6px;
  cursor: pointer;
  margin-left: 6px;
}

/* Editor + Preview */
#editor {
  width: 100%;
  height: 50vh;
}
#output {
  height: 40vh;
  border-top: 2px solid #ddd;
}
.cmd-header {
  height: 34px;
  background: #f3f4f6;
  font-size: 13px;
  font-family: 'JetBrains Mono', monospace;
  border-bottom: 1px solid #ddd;
  display: flex;
  align-items: center;
}
iframe {
  width: 100%;
  height: calc(100% - 34px);
  border: none;
  background: #fff;
}

/* Fullscreen */
.fullscreen {
  position: fixed !important;
  top: 0;
  left: 0;
  width: 100vw !important;
  height: 100vh !important;
  z-index: 9999;
  border-radius: 0 !important;
  display: flex;
  flex-direction: column;
  background: #fff;
}
.fullscreen .cmd-header {
  flex: 0 0 34px;
  background: #f3f4f6;
}
.fullscreen iframe {
  flex: 1 1 auto;
  width: 100%;
  height: 100% !important;
  border: none;
}

/* List */
.modern-list li {
  margin-bottom: 6px;
  line-height: 1.5;
}

/* Responsive */
@media (max-width: 992px) {
  .col-md-3 {
    order: 2;
    margin-top: 1rem;
  }
  .col-md-9 {
    order: 1;
  }
}
@media (max-width: 768px) {
  .file-sidebar {
    width: 100%;
    flex-direction: row;
    border-right: none;
    border-bottom: 2px solid #ddd;
    overflow-x: auto;
  }
  .file-tab {
    flex: 1 1 auto;
    margin: 0;
    text-align: center;
    border-radius: 0;
  }
  #editor {
    height: 40vh;
  }
  #output {
    height: 50vh;
  }
  .toolbar {
    flex-wrap: wrap;
    gap: 8px;
    height: auto;
    padding: 6px 10px;
  }
}
@media (max-width: 576px) {
  #editor {
    height: 35vh;
  }
  #output {
    height: 55vh;
  }
  .btn-run, .btn-clear {
    padding: 3px 8px;
    font-size: 13px;
  }
}
</style>
