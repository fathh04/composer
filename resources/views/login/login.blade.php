<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HTML5VIRTUAL</title>
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

        .login-wrapper {
            display: flex;
            width: 100%;
            max-width: 900px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 28px rgba(0,0,0,0.2);
        }

        /* Bagian kiri (form login) */
        .login-form {
            flex: 1;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .login-form h4 {
            font-weight: 700;
            color: #0d1b7e;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control {
            border: none;
            border-bottom: 1px solid #555;
            border-radius: 0;
            background: transparent;
            color: #111;
            padding-left: 0;
        }
        .form-control:focus {
            box-shadow: none;
            border-bottom: 2px solid #0d1b7e;
        }
        .btn-login {
            background: linear-gradient(to right, #001aff, #0055ff);
            color: #fff;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            padding: 10px;
            margin-top: 15px;
            transition: transform 0.2s ease;
        }
        .btn-login:hover {
            transform: translateY(-2px);
        }

        /* Teks signup */
        .signup-link {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }
        .signup-link a {
            color: #001aff;
            font-weight: 600;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }

        /* Bagian kanan (logo) */
        .login-logo {
            flex: 1;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 40px;
        }
        .login-logo img {
            width: 160px;
            margin-bottom: 20px;
            max-width: 100%;
            height: auto;
        }
        .login-logo h2 {
            font-weight: 700;
            color: #2196f3;
            text-align: center;
        }
        .login-logo p {
            color: #555;
            letter-spacing: 2px;
            font-size: 14px;
            text-align: center;
        }

        /* ===== Responsive ===== */
        @media (max-width: 992px) {
            .login-wrapper {
                max-width: 700px;
            }
        }

        @media (max-width: 768px) {
            .login-wrapper {
                flex-direction: column-reverse; /* Logo di bawah */
            }
            .login-form,
            .login-logo {
                padding: 25px;
            }
        }

        @media (max-width: 576px) {
            .login-form h4 {
                font-size: 1.2rem;
                margin-bottom: 20px;
            }
            .btn-login {
                padding: 8px;
                font-size: 0.9rem;
            }
            .login-logo img {
                width: 120px;
            }
            .login-logo h2 {
                font-size: 1.1rem;
            }
            .login-logo p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <!-- Bagian kiri -->
        <div class="login-form">
            <div class="login-container">
                <h4 class="text-center mb-4">Login ke <b>HTML5VIRTUAL</b></h4>
                <form action="{{ route('proseslogin') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="example@mail.com" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Masukkan password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-login w-100">Masuk</button>
                </form>
                <!-- Link signup -->
                <div class="signup-link">
                    Belum punya akun?
                    <a href="{{ route('signup') }}">Daftar sekarang</a>
                </div>
            </div>
        </div>

        <!-- Bagian kanan -->
        <div class="login-logo">
            <img src="{{ asset('img/logoakadia.png') }}" alt="Logo">
            <h2>EDUCATION</h2>
            <p>FREEDOM LEARNING</p>
        </div>
    </div>
</body>
</html>
