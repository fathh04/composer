<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - HTML5VIRTUAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to right, #4a60ff, #9fa7d4, #777777);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 15px;
        }
        .signup-wrapper {
            display: flex;
            width: 100%;
            max-width: 950px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 28px rgba(0,0,0,0.2);
        }
        .signup-form {
            flex: 1;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .signup-form h3 {
            font-weight: 700;
            color: #0d1b7e;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control, .form-select {
            border: none;
            border-bottom: 1px solid #555;
            border-radius: 0;
            background: transparent;
            color: #111;
            padding-left: 0;
        }
        .form-control:focus, .form-select:focus {
            box-shadow: none;
            border-bottom: 2px solid #0d1b7e;
        }
        .btn-signup {
            background: linear-gradient(to right, #001aff, #0055ff);
            color: #fff;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            padding: 10px;
            margin-top: 15px;
            transition: transform 0.2s ease;
        }
        .signup-logo {
            flex: 1;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 40px;
        }

        /* Modal Style */
        .modal-content {
            border-radius: 25px !important;
            background: rgba(255, 255, 255, 0.25) !important;
            backdrop-filter: blur(12px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: popUp 0.25s ease;
        }

        @keyframes popUp {
            from { transform: scale(0.9); opacity: 0; }
            to   { transform: scale(1); opacity: 1; }
        }

        .survey-step h5 {
            color: #ffffff;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 25px;
        }

        .child-btn {
            background: linear-gradient(135deg, #6f9bff, #8b5bff);
            border: none;
            padding: 14px 20px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 20px;
            margin: 8px 0;
            width: 90%;
            max-width: 260px;
            transition: transform 0.15s ease, opacity 0.15s ease;
        }

        .child-btn:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .child-btn:active {
            transform: scale(0.97);
        }
    </style>
</head>

<body>
<div class="signup-wrapper">

    <!-- LEFT FORM -->
    <div class="signup-form">
        <h3>Daftar Akun Baru</h3>

        <form id="signupForm" method="POST" action="{{ route('prosesdaftar') }}">
            @csrf

            <input type="hidden" name="q1" id="q1">
            <input type="hidden" name="q2" id="q2">
            <input type="hidden" name="q3" id="q3">

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-control"
                    value="{{ session('email') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Daftar Sebagai</label>
                <select name="role" class="form-select" required>
                    <option value="">-- Pilih Peran --</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>

            <button id="submitBtn" type="submit" class="btn btn-signup w-100">Sign Up</button>
        </form>

        <div id="loader" class="text-center mt-4" style="display:none;">
            <div class="spinner-border text-primary" role="status" style="width:3rem;height:3rem;"></div>
            <p class="mt-3 fw-bold">AI menganalisis gaya belajar…</p>
        </div>

        <div class="login-link text-center mt-3">
            Sudah punya akun?
            <a href="{{ route('login') }}">Login di sini</a>
        </div>
    </div>

    <!-- RIGHT LOGO -->
    <div class="signup-logo">
        <img src="{{ url('img/logoakadia.png') }}" width="150">
        <h2>EDUCATION</h2>
        <p>FREEDOM LEARNING</p>
    </div>

</div>

<!-- MODAL -->
<div class="modal fade" id="surveyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body text-center p-4">

                <!-- STEP 1 -->
                <div id="step-1" class="survey-step">
                    <h5>Aku lebih suka...</h5>

                    <button class="child-btn answer-q1"
                        data-value="Saya suka melihat gambar atau diagram">
                        📘 Melihat gambar / diagram
                    </button>

                    <button class="child-btn answer-q1"
                        data-value="Saya suka mendengarkan penjelasan">
                        🎧 Mendengarkan penjelasan
                    </button>

                    <button class="child-btn answer-q1"
                        data-value="Saya suka mempraktikkan langsung">
                        🤸 Praktik langsung
                    </button>
                </div>

                <!-- STEP 2 -->
                <div id="step-2" class="survey-step d-none">
                    <h5>Aku lebih mudah memahami dari...</h5>

                    <button class="child-btn answer-q2"
                        data-value="Saya lebih mudah memahami materi berupa video">
                        🎬 Video / Visual
                    </button>

                    <button class="child-btn answer-q2"
                        data-value="Saya memahami lebih cepat saat mendengar audio">
                        🔊 Audio
                    </button>

                    <button class="child-btn answer-q2"
                        data-value="Saya mudah belajar saat melakukan aktivitas fisik">
                        🏃 Aktivitas Fisik
                    </button>
                </div>

                <!-- STEP 3 -->
                <div id="step-3" class="survey-step d-none">
                    <h5>Saat belajar aku biasanya...</h5>

                    <button class="child-btn answer-q3"
                        data-value="Saya sering membuat catatan visual">
                        📝 Membuat catatan visual
                    </button>

                    <button class="child-btn answer-q3"
                        data-value="Saya sering berbicara sendiri saat belajar">
                        🗣️ Berbicara sendiri
                    </button>

                    <button class="child-btn answer-q3"
                        data-value="Saya sulit duduk diam lama">
                        😣 Sulit duduk diam
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    @if(session('showModal'))
        // 🚀 Modal wajib diisi (tidak bisa ditutup)
        const modal = new bootstrap.Modal(document.getElementById('surveyModal'), {
            backdrop: 'static',
            keyboard: false
        });
        modal.show();
    @endif

    // STEP 1
    document.querySelectorAll(".answer-q1").forEach(btn => {
        btn.addEventListener("click", function () {
            document.getElementById("q1").value = this.dataset.value;
            document.getElementById("step-1").classList.add("d-none");
            document.getElementById("step-2").classList.remove("d-none");
        });
    });

    // STEP 2
    document.querySelectorAll(".answer-q2").forEach(btn => {
        btn.addEventListener("click", function () {
            document.getElementById("q2").value = this.dataset.value;
            document.getElementById("step-2").classList.add("d-none");
            document.getElementById("step-3").classList.remove("d-none");
        });
    });

    // STEP 3
    document.querySelectorAll(".answer-q3").forEach(btn => {
        btn.addEventListener("click", function () {
            document.getElementById("q3").value = this.dataset.value;

            document.getElementById('signupForm').action = "{{ route('gayaBelajar.prediksi') }}";

            const emailInput = document.querySelector("input[name='email']");
            const hiddenEmail = document.createElement("input");
            hiddenEmail.type = "hidden";
            hiddenEmail.name = "user_email";
            hiddenEmail.value = emailInput.value;
            signupForm.appendChild(hiddenEmail);

            const modalElement = document.getElementById('surveyModal');
            const modalInstance = bootstrap.Modal.getInstance(modalElement);
            modalInstance.hide();

            document.getElementById("signupForm").submit();
        });
    });

    // Loader khusus siswa
    document.getElementById('signupForm').addEventListener('submit', function (e) {

        const role = document.querySelector("select[name='role']").value;

        // Jika guru ➜ tidak pakai loader
        if (role === "guru") {
            return; // langsung submit
        }

        // Jika siswa ➜ tampilkan loader
        document.getElementById('loader').style.display = 'block';
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerText = "Memproses...";
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.modal-backdrop').forEach(e => e.remove());
    document.body.classList.remove('modal-open');
    document.body.style.overflow = 'auto';
});
</script>

</body>
</html>
