<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live Coding Editor - Modern</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1f1c2c, #928dab);
      color: white;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    /* Toolbar */
    .toolbar {
      background: rgba(37, 37, 38, 0.8);
      backdrop-filter: blur(10px);
      padding: 12px 20px;
      display: flex;
      gap: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      z-index: 2;
    }

    button {
      background: linear-gradient(135deg, #007acc, #00c6ff);
      border: none;
      padding: 10px 18px;
      border-radius: 6px;
      color: white;
      cursor: pointer;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #005a9e, #0088cc);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    /* Workspace: editor + output */
    .workspace {
      flex: 1;
      display: flex;
      flex-direction: column;
      transition: all 0.4s ease;
    }

    #editor {
      flex: 1;
      border-radius: 12px 12px 0 0;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
      transition: flex 0.4s ease;
    }

    /* Saat preview muncul → editor & output berbagi layar */
    .with-preview #editor {
      flex: 1;
      height: 50%;
    }
    .with-preview #output {
      flex: 1;
      display: block;
    }

    /* Output Preview */
    #output {
      display: none;
      background: #ffffff;
      color: black;
      position: relative;
      border-radius: 0 0 12px 12px;
      overflow: hidden;
      box-shadow: 0 -4px 20px rgba(0,0,0,0.25);
      transition: all 0.4s ease;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
      border-radius: inherit;
    }

    /* Fullscreen mode */
    .fullscreen {
      position: fixed !important;
      top: 0;
      left: 0;
      width: 100vw !important;
      height: 100vh !important;
      z-index: 9999;
      border-radius: 0 !important;
      transition: all 0.5s ease-in-out;
    }

    /* Fullscreen button */
    .toggle-size {
      position: absolute;
      top: 12px;
      right: 12px;
      background: rgba(0, 122, 204, 0.9);
      padding: 6px 12px;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      color: white;
      transition: background 0.3s ease;
      z-index: 3;
    }

    .toggle-size:hover {
      background: rgba(0, 90, 158, 0.9);
    }
  </style>
</head>
<body>
  <div class="toolbar">
    <button id="runBtn">▶️ Jalankan</button>
    <button id="clearBtn">🧹 Bersihkan</button>
  </div>

  <div class="workspace" id="workspace">
    <div id="editor"></div>
    <div id="output">
      <iframe id="preview"></iframe>
      <div id="toggleBtn" class="toggle-size" style="display:none;">🔳 Fullscreen</div>
    </div>
  </div>

  <!-- Load Monaco Editor -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs/loader.min.js"></script>
  <script>
    let editor;
    let isFullscreen = false;

    require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs' }});
    require(["vs/editor/editor.main"], function () {
      editor = monaco.editor.create(document.getElementById('editor'), {
        value: "<!DOCTYPE html>\n<html>\n<head>\n  <style>\n    body { background:#282c34; color:white; font-family:sans-serif; }\n    h1 { color:#61dafb; }\n  </style>\n</head>\n<body>\n  <h1>Hello World!</h1>\n  <script>\n    console.log('Halo dari JavaScript!');\n  <\/script>\n</body>\n</html>",
        language: "html",
        theme: "vs-dark"
      });
    });

    // Jalankan kode
    document.getElementById("runBtn").onclick = function() {
      const code = editor.getValue();
      const iframe = document.getElementById("preview");
      document.getElementById("workspace").classList.add("with-preview");
      iframe.srcdoc = code;
      document.getElementById("toggleBtn").style.display = "block";
    };

    // Bersihkan editor
    document.getElementById("clearBtn").onclick = function() {
      editor.setValue("");
      document.getElementById("preview").srcdoc = "";
      document.getElementById("workspace").classList.remove("with-preview");
      document.getElementById("toggleBtn").style.display = "none";
    };

    // Toggle fullscreen
    document.getElementById("toggleBtn").onclick = function() {
      const output = document.getElementById("output");
      if (!isFullscreen) {
        output.classList.add("fullscreen");
        this.textContent = "🔲 Kecilkan";
        isFullscreen = true;
      } else {
        output.classList.remove("fullscreen");
        this.textContent = "🔳 Fullscreen";
        isFullscreen = false;
      }
    };
  </script>
</body>
</html>
