<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - HTML5VIRTUAL</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(to right,#4a60ff,#9fa7d4,#777777);
    font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
    padding:15px;
}

.login-wrapper{
    display:flex;
    width:100%;
    max-width:900px;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 8px 28px rgba(0,0,0,0.2);
}

.login-form{
    flex:1;
    background:rgba(255,255,255,0.2);
    backdrop-filter:blur(10px);
    padding:40px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.login-form h4{
    font-weight:700;
    color:#0d1b7e;
    margin-bottom:20px;
    text-align:center;
}

.form-control{
    border:none;
    border-bottom:1px solid #555;
    border-radius:0;
    background:transparent;
    color:#111;
    padding-left:0;
}

.form-control:focus{
    box-shadow:none;
    border-bottom:2px solid #0d1b7e;
}

.btn-login{
    background:linear-gradient(to right,#001aff,#0055ff);
    color:#fff;
    border:none;
    border-radius:25px;
    font-weight:600;
    padding:10px;
    margin-top:15px;
}

.signup-link{
    margin-top:20px;
    text-align:center;
    font-size:0.9rem;
}

.signup-link a{
    color:#001aff;
    font-weight:600;
    text-decoration:none;
}

.login-logo{
    flex:1;
    background:#e0e0e0;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    padding:40px;
}

.login-logo img{
    width:160px;
    margin-bottom:20px;
}

.login-logo h2{
    font-weight:700;
    color:#2196f3;
}

.login-logo p{
    color:#555;
    letter-spacing:2px;
    font-size:14px;
}

@media (max-width:768px){
    .login-wrapper{
        flex-direction:column-reverse;
    }
}

/* MODAL RESET PASSWORD */

.modal-content{
    border:none;
    border-radius:18px;
    background:rgba(255,255,255,0.9);
    backdrop-filter:blur(8px);
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
    padding:10px;
}

.modal-header{
    border-bottom:none;
    text-align:center;
    justify-content:center;
}

.modal-title{
    font-weight:700;
    color:#0d1b7e;
}

.reset-icon{
    font-size:40px;
    color:#0d1b7e;
    margin-bottom:10px;
}

.modal-body label{
    font-weight:500;
    font-size:14px;
    color:#333;
}

.modal-body .form-control{
    border:none;
    border-bottom:1px solid #888;
    border-radius:0;
    background:transparent;
}

.modal-body .form-control:focus{
    border-bottom:2px solid #0d1b7e;
    box-shadow:none;
}

.btn-reset{
    background:linear-gradient(to right,#001aff,#0055ff);
    color: #fff;
    border:none;
    border-radius:25px;
    font-weight:600;
    padding:10px;
}
</style>
</head>

<body>

<div class="login-wrapper">

<!-- KIRI -->
<div class="login-form">

<h4>Login ke <b>HTML5VIRTUAL</b></h4>

@if(session('success'))
<div class="alert alert-success auto-alert">
{{ session('success') }}
</div>
@endif

<form action="{{ route('proseslogin') }}" method="POST">
@csrf

<div class="mb-3">
<label>Email</label>
<input type="email"
class="form-control @error('email') is-invalid @enderror"
name="email"
placeholder="example@mail.com"
value="{{ old('email') }}">

@error('email')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
<label>Password</label>
<input type="password"
class="form-control @error('password') is-invalid @enderror"
name="password"
placeholder="Masukkan password">

@error('password')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>

<!-- LUPA PASSWORD -->
<div class="text-end mb-2">
<a href="#" data-bs-toggle="modal" data-bs-target="#forgotModal">
Lupa Password?
</a>
</div>

<button type="submit" class="btn btn-login w-100">
Masuk
</button>

</form>

<div class="signup-link">
Belum punya akun?
<a href="{{ route('signup') }}">Daftar sekarang</a>
</div>

</div>

<!-- KANAN -->
<div class="login-logo">
<img src="{{ url('img/logoakadia.png') }}">
<h2>EDUCATION</h2>
<p>FREEDOM LEARNING</p>
</div>

</div>

<!-- MODAL RESET PASSWORD -->

<div class="modal fade"
id="forgotModal"
data-bs-backdrop="static"
data-bs-keyboard="false"
tabindex="-1">

<div class="modal-dialog modal-dialog-centered">

<div class="modal-content">

<div class="modal-header flex-column">

<div class="reset-icon">
🔑
</div>

<h5 class="modal-title">
Reset Password
</h5>

<button type="button"
class="btn-close position-absolute end-0 me-3 mt-3"
data-bs-dismiss="modal">
</button>

</div>

<form action="{{ route('reset.password') }}" method="POST">
@csrf

<div class="modal-body">

<p class="text-center text-muted mb-4">
Masukkan email terdaftar dan password baru
</p>

<div class="mb-3">
<label>Email</label>
<input type="email"
name="email"
class="form-control @error('email_reset') is-invalid @enderror"
placeholder="Masukkan email terdaftar"
value="{{ old('email') }}"
required>

@error('email_reset')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
<label>Password Baru</label>
<input type="password"
name="new_password"
class="form-control @error('new_password') is-invalid @enderror"
placeholder="Minimal 8 karakter"
required>

@error('new_password')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
<label>Konfirmasi Password</label>
<input type="password"
name="new_password_confirmation"
class="form-control"
placeholder="Konfirmasi password baru"
required>

@error('new_password')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>

</div>

<div class="modal-footer border-0">
<button type="submit" class="btn btn-reset w-100">
Ganti Password
</button>
</div>

</form>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@if($errors->has('email_reset') || $errors->has('new_password'))
<script>
document.addEventListener("DOMContentLoaded",function(){

var modal = new bootstrap.Modal(document.getElementById('forgotModal'));

modal.show();

});
</script>
@endif

</body>
</html>
