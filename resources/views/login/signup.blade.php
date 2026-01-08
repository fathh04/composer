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

        .survey-step {
            display: block;
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

            <input type="hidden" name="answers[]" id="q1">
            <input type="hidden" name="answers[]" id="q2">
            <input type="hidden" name="answers[]" id="q3">
            <input type="hidden" name="answers[]" id="q4">
            <input type="hidden" name="answers[]" id="q5">
            <input type="hidden" name="answers[]" id="q6">
            <input type="hidden" name="answers[]" id="q7">
            <input type="hidden" name="answers[]" id="q8">
            <input type="hidden" name="answers[]" id="q9">
            <input type="hidden" name="answers[]" id="q10">
            <input type="hidden" name="answers[]" id="q11">
            <input type="hidden" name="answers[]" id="q12">
            <input type="hidden" name="answers[]" id="q13">
            <input type="hidden" name="answers[]" id="q14">

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
                <div class="survey-step" data-step="1">
                    <h5>Saya sangat suka...</h5>
                    <button class="child-btn answer-btn" data-q="1" data-value="Saya sangat suka mencatat">Mencatat</button>
                    <button class="child-btn answer-btn" data-q="1" data-value="Saya sangat suka bercerita">Bercerita</button>
                    <button class="child-btn answer-btn" data-q="1" data-value="Sangat sangat suka copy paste jawaban langsung">Menjiplak</button>
                </div>

                <!-- STEP 2 -->
                <div class="survey-step d-none" data-step="2">
                    <h5>Saya suka membaca dengan...</h5>
                    <button class="child-btn answer-btn" data-q="2" data-value="Saya suka membaca dengan cepat">Cepat</button>
                    <button class="child-btn answer-btn" data-q="2" data-value="Saya suka membaca dengan suara keras">Suara Keras</button>
                    <button class="child-btn answer-btn" data-q="2" data-value="Saya suka membaca dengan jari sebagai penunjuk">Jari Sebagai Penunjuk</button>
                </div>

                <!-- STEP 3 -->
                <div class="survey-step d-none" data-step="3">
                    <h5>Saya paling suka belajar dengan...</h5>
                    <button class="child-btn answer-btn" data-q="3" data-value="Saya paling suka belajar dengan cara membaca">Membaca</button>
                    <button class="child-btn answer-btn" data-q="3" data-value="Saya paling suka belajar dengan cara mendengarkan">Mendengarkan</button>
                    <button class="child-btn answer-btn" data-q="3" data-value="Saya paling suka belajar dengan cara gerakan">Bergerak</button>
                </div>

                <!-- STEP 4 -->
                <div class="survey-step d-none" data-step="4">
                    <h5>Saya mudah mengingat dengan apa yang...</h5>
                    <button class="child-btn answer-btn" data-q="4" data-value="saya mudah mengingat dengan apa yang saya lihat">Saya Lihat</button>
                    <button class="child-btn answer-btn" data-q="4" data-value="saya mudah mengingat dengan apa yang saya dengar">Saya Dengar</button>
                    <button class="child-btn answer-btn" data-q="4" data-value="saya mudah mengingat dengan apa yang saya tulis">Saya Tulis</button>
                </div>

                <!-- STEP 5 -->
                <div class="survey-step d-none" data-step="5">
                    <h5>Apabila mencatat, saya...</h5>
                    <button class="child-btn answer-btn" data-q="5" data-value="Apabila mencatat, saya banyak catatan yang disertai gambar">Banyak catatan disertai gambar</button>
                    <button class="child-btn answer-btn" data-q="5" data-value="Apabila mencatat, saya sedikit mencatat karena lebih suka mendengarkan">Sedikit mencatat karena lebih suka mendengarkan</button>
                    <button class="child-btn answer-btn" data-q="5" data-value="Apabila mencatat, saya banyak catatan namun tidak disertai gambar">Banyak catatan namun tidak disertai gambar</button>
                </div>

                <!-- STEP 6 -->
                <div class="survey-step d-none" data-step="6">
                    <h5>Saya menjawab pertanyaan dengan jawaban...</h5>
                    <button class="child-btn answer-btn" data-q="6" data-value="Saya menjawab pertanyaan dengan jawaban ya atau tidak">Ya atau Tidak</button>
                    <button class="child-btn answer-btn" data-q="6" data-value="Saya menjawab pertanyaan dengan jawaban panjang lebar karena saya suka bercerita">Panjang lebar (suka bercerita)</button>
                    <button class="child-btn answer-btn" data-q="6" data-value="Saya menjawab pertanyaan dengan jawaban yang diikuti dengan gerakan anggota tubuh">Diikuti dengan gerakan anggota tubuh</button>
                </div>

                <!-- STEP 7 -->
                <div class="survey-step d-none" data-step="7">
                    <h5>Saat belajar saya...</h5>
                    <button class="child-btn answer-btn" data-q="7" data-value="Saat belajar saya tidak mudah terganggu dengan keributan">Tidak mudah terganggu dengan keributan</button>
                    <button class="child-btn answer-btn" data-q="7" data-value="Saat belajar saya mudah terganggu dengan keributan">Mudah terganggu dengan keributan</button>
                    <button class="child-btn answer-btn" data-q="7" data-value="Saat belajar saya tidak dapat duduk diam dalam waktu lama">Tidak dapat duduk diam dalam waktu lama</button>
                </div>

                <!-- STEP 8 -->
                <div class="survey-step d-none" data-step="8">
                    <h5>Saya mengingat dengan cara...</h5>
                    <button class="child-btn answer-btn" data-q="8" data-value="Saya mengingat dengan cara membayangkan">Membayangkan</button>
                    <button class="child-btn answer-btn" data-q="8" data-value="Saya mengingat dengan cara mengucapkan">Mengucapkan</button>
                    <button class="child-btn answer-btn" data-q="8" data-value="Saya mengingat dengan cara sambil berjalan dan melihat">Sambil berjalan dan melihat</button>
                </div>

                <!-- STEP 9 -->
                <div class="survey-step d-none" data-step="9">
                    <h5>Saya berbicara lebih suka...</h5>
                    <button class="child-btn answer-btn" data-q="9" data-value="Saya berbicara lebih suka melihat wajah langsung">Melihat wajah langsung</button>
                    <button class="child-btn answer-btn" data-q="9" data-value="Saya berbicara lebih suka lewat telepon">Lewat telepon</button>
                    <button class="child-btn answer-btn" data-q="9" data-value="Saya berbicara lebih suka memperhatikan gerakan tubuh">Memperhatikan gerakan tubuh</button>
                </div>

                <!-- STEP 10 -->
                <div class="survey-step d-none" data-step="10">
                    <h5>Ketika berbicara saya...</h5>
                    <button class="child-btn answer-btn" data-q="10" data-value="Ketika berbicara saya cepat">Cepat</button>
                    <button class="child-btn answer-btn" data-q="10" data-value="Ketika berbicara saya intonasi/berirama">Intonasi/berirama</button>
                    <button class="child-btn answer-btn" data-q="10" data-value="Ketika berbicara saya lambat">Lambat</button>
                </div>

                <!-- STEP 11 -->
                <div class="survey-step d-none" data-step="11">
                    <h5>Cara saya belajar bisanya suka...</h5>
                    <button class="child-btn answer-btn" data-q="11" data-value="Cara saya belajar bisanya suka mengikuti petunjuk gambar">Mengikuti petunjuk gambar</button>
                    <button class="child-btn answer-btn" data-q="11" data-value="Cara saya belajar bisanya suka sambil berbicara">Sambil berbicara</button>
                    <button class="child-btn answer-btn" data-q="11" data-value="Cara saya belajar bisanya suka berbicara sambil menulis">Berbicara sambil menulis</button>
                </div>

                <!-- STEP 12 -->
                <div class="survey-step d-none" data-step="12">
                    <h5>Saya sering mengisi waktu luang dengan...</h5>
                    <button class="child-btn answer-btn" data-q="12" data-value="Saya sering mengisi waktu luang dengan menonton">Menonton</button>
                    <button class="child-btn answer-btn" data-q="12" data-value="Saya sering mengisi waktu luang dengan mendengarkan musik">Mendengarkan musik</button>
                    <button class="child-btn answer-btn" data-q="12" data-value="Saya sering mengisi waktu luang dengan bermain game">Bermain game</button>
                </div>

                <!-- STEP 13 -->
                <div class="survey-step d-none" data-step="13">
                    <h5>Saya lebih mudah memahami pelajaran dengan...</h5>
                    <button class="child-btn answer-btn" data-q="13" data-value="Saya lebih mudah memahami pelajaran dengan melihat peraga">Melihat peraga</button>
                    <button class="child-btn answer-btn" data-q="13" data-value="Saya lebih mudah memahami pelajaran dengan berdiskusi">Berdiskusi</button>
                    <button class="child-btn answer-btn" data-q="13" data-value="Saya lebih mudah memahami pelajaran dengan praktik">Praktik</button>
                </div>

                <!-- STEP 14 -->
                <div class="survey-step d-none" data-step="14">
                    <h5>Saya lebih menyukai...</h5>
                    <button class="child-btn answer-btn" data-q="14" data-value="Saya lebih menyukai gambar">Gambar</button>
                    <button class="child-btn answer-btn" data-q="14" data-value="Saya lebih menyukai musik">Musik</button>
                    <button class="child-btn answer-btn" data-q="14" data-value="Saya lebih menyukai permainan">Permainan</button>
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
        const modal = new bootstrap.Modal(
            document.getElementById('surveyModal'),
            {
                backdrop: 'static',
                keyboard: false
            }
        );
        modal.show();
    @endif

    let currentStep = 1;
    const totalStep = 14;

    document.querySelectorAll(".answer-btn").forEach(btn => {
        btn.addEventListener("click", function () {

            const q = this.dataset.q;
            const value = this.dataset.value;

            document.getElementById(`q${q}`).value = value;

            document
                .querySelector(`[data-step="${currentStep}"]`)
                .classList.add("d-none");

            currentStep++;

            if (currentStep <= totalStep) {
                document
                    .querySelector(`[data-step="${currentStep}"]`)
                    .classList.remove("d-none");
            } else {

                document.getElementById('signupForm').action =
                    "{{ route('gayaBelajar.prediksi') }}";

                const emailInput = document.querySelector("input[name='email']");
                const hiddenEmail = document.createElement("input");
                hiddenEmail.type = "hidden";
                hiddenEmail.name = "user_email";
                hiddenEmail.value = emailInput.value;
                document.getElementById('signupForm').appendChild(hiddenEmail);

                document.getElementById('signupForm').submit();
            }
        });
    });

    // Loader khusus siswa
    document.getElementById('signupForm').addEventListener('submit', function () {

        const role = document.querySelector("select[name='role']").value;

        if (role === "guru") return;

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
