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

        /* Bagian kiri (form signup) */
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
        .btn-signup:hover {
            transform: translateY(-2px);
        }

        /* Teks login link */
        .login-link {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }
        .login-link a {
            color: #001aff;
            font-weight: 600;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }

        /* Bagian kanan (logo) */
        .signup-logo {
            flex: 1;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 40px;
        }
        .signup-logo img {
            width: 160px;
            margin-bottom: 20px;
            max-width: 100%;
            height: auto;
        }
        .signup-logo h2 {
            font-weight: 700;
            color: #2196f3;
            text-align: center;
        }
        .signup-logo p {
            color: #555;
            letter-spacing: 2px;
            font-size: 14px;
            text-align: center;
        }

        /* ===== Responsive ===== */
        @media (max-width: 992px) {
            .signup-wrapper {
                max-width: 750px;
            }
        }

        @media (max-width: 768px) {
            .signup-wrapper {
                flex-direction: column-reverse; /* Logo di bawah */
            }
            .signup-form,
            .signup-logo {
                padding: 25px;
            }
        }

        @media (max-width: 576px) {
            .signup-form h3 {
                font-size: 1.3rem;
                margin-bottom: 20px;
            }
            .btn-signup {
                padding: 8px;
                font-size: 0.9rem;
            }
            .signup-logo img {
                width: 120px;
            }
            .signup-logo h2 {
                font-size: 1.2rem;
            }
            .signup-logo p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="signup-wrapper">
        <!-- Bagian kiri -->
        <div class="signup-form">
            <h3>Daftar Akun Baru</h3>
            <form method="POST" action="{{ route('prosesdaftar') }}">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                           id="nama" placeholder="Masukkan nama lengkap" value="{{ old('nama') }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           id="email" placeholder="example@mail.com" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           id="password" placeholder="Masukkan kata sandi" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                           id="password_confirmation" placeholder="Ulangi kata sandi" required>
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="role" class="form-label">Daftar Sebagai</label>
                    <select name="role" id="role" class="form-select @error('role') is-invalid @enderror" required>
                        <option value="">-- Pilih Peran --</option>
                        <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                        <option value="siswa" {{ old('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-signup w-100">Sign Up</button>
            </form>

            <!-- Link login -->
            <div class="login-link">
                Sudah punya akun?
                <a href="{{ route('login') }}">Login di sini</a>
            </div>
        </div>

        <!-- Bagian kanan -->
        <div class="signup-logo">
            <img src="{{ asset('img/logoakadia.png') }}" alt="Logo">
            <h2>EDUCATION</h2>
            <p>FREEDOM LEARNING</p>
        </div>
    </div>

    <!-- Modal Kuesioner -->
    <div class="modal fade" id="surveyModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background:rgba(255,255,255,0.15);backdrop-filter:blur(12px);border-radius:20px;">
        <div class="modal-body text-center p-4">
            <!-- Step Container -->
            <div id="step-1" class="survey-step">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_touohxv0.json" background="transparent" speed="1" style="width:200px;height:200px;margin:0 auto;" loop autoplay></lottie-player>
                <h5 class="text-white my-3">Saya lebih suka belajar menggunakan....</h5>
                <button class="btn btn-primary mx-2 next-step">📖 Teks</button>
                <button class="btn btn-primary mx-2 next-step">🎥 Video</button>
            </div>

            <div id="step-2" class="survey-step d-none">
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_jcikwtux.json" background="transparent" speed="1" style="width:200px;height:200px;margin:0 auto;" loop autoplay></lottie-player>

                <h5 class="text-white my-3">Saya dapat fokus belajar lebih dari 20 menit....</h5>
                <button class="btn btn-primary mx-2 next-step">🙅‍♂️ Tidak</button>
                <button class="btn btn-primary mx-2 next-step">😐 Kadang</button>
                <button class="btn btn-primary mx-2 next-step">💪 Bisa</button>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function(){
        @if(session('showModal'))
            var modalEl = document.getElementById('surveyModal');
            var modal = new bootstrap.Modal(modalEl, {
                backdrop: 'static',
                keyboard: false
            });
            modal.show();

            let step = 1;
            document.querySelectorAll(".next-step").forEach(btn => {
                btn.addEventListener("click", function(){
                    document.getElementById("step-" + step).classList.add("d-none");
                    step++;
                    if(document.getElementById("step-" + step)){
                        document.getElementById("step-" + step).classList.remove("d-none");
                    } else {
                        // semua pertanyaan selesai → redirect login
                        window.location.href = "{{ route('login') }}";
                    }
                });
            });
        @endif
    });
    </script>
</body>
</html>
