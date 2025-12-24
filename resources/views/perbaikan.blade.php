<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Maintenance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .maintenance-wrapper {
            width: 90vw;
            height: 90vh;
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(14px);
            border-radius: 28px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px;
            box-shadow: 0 30px 60px rgba(0,0,0,.25);
            position: relative;
        }

        /* ===== ICON ===== */
        .maintenance-icon {
            font-size: 90px;
            margin-bottom: 20px;
            animation: spin 4s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }

        h1 {
            font-size: 48px;
            margin-bottom: 16px;
            font-weight: 700;
        }

        /* ===== H1 3D ALERT ===== */
        .maintenance-title {
            font-size: 48px;
            font-weight: 800;
            padding: 18px 36px;
            border-radius: 18px;

            background: rgba(255,255,255,0.18);
            backdrop-filter: blur(10px);

            color: #ffffff;
            letter-spacing: 1px;

            /* 3D TEXT EFFECT */
            text-shadow:
                0 1px 0 #c7d2fe,
                0 2px 0 #a5b4fc,
                0 3px 0 #818cf8,
                0 6px 16px rgba(0,0,0,.35);

            box-shadow:
                0 10px 30px rgba(0,0,0,.25),
                inset 0 0 0 1px rgba(255,255,255,.25);

            animation: glowPulse 3s ease-in-out infinite;
        }

        /* Glow animation */
        @keyframes glowPulse {
            0%, 100% {
                box-shadow:
                    0 10px 30px rgba(0,0,0,.25),
                    0 0 20px rgba(255,255,255,.25),
                    inset 0 0 0 1px rgba(255,255,255,.25);
            }
            50% {
                box-shadow:
                    0 10px 30px rgba(0,0,0,.25),
                    0 0 40px rgba(255,255,255,.45),
                    inset 0 0 0 1px rgba(255,255,255,.35);
            }
        }
        p {
            font-size: 20px;
            max-width: 620px;
            opacity: .95;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        /* ===== LOADER ===== */
        .loader {
            display: flex;
            gap: 14px;
            margin-bottom: 40px;
        }

        .loader span {
            width: 18px;
            height: 18px;
            background: #fff;
            border-radius: 50%;
            animation: bounce 1.3s infinite ease-in-out;
        }

        .loader span:nth-child(2) { animation-delay: .15s; }
        .loader span:nth-child(3) { animation-delay: .3s; }

        @keyframes bounce {
            0%, 80%, 100% {
                transform: scale(0);
                opacity: .3;
            }
            40% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .footer-text {
            position: absolute;
            bottom: 30px;
            font-size: 14px;
            opacity: .8;
        }

        @media (max-width: 768px) {
            h1 { font-size: 34px; }
            p  { font-size: 16px; }
            .maintenance-icon { font-size: 64px; }
        }
    </style>
</head>
<body>

    <div class="maintenance-wrapper">

        <!-- ICON BI -->
        <i class="bi bi-gear-fill maintenance-icon"></i>

        <h1 class="maintenance-title">
            Sistem Dalam Perbaikan
        </h1>

        <p>
            Sistem sedang dalam perbaikan untuk meningkatkan performa dan kenyamanan pengguna.
            <br>
            Mohon tunggu beberapa saat...
        </p>

        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="footer-text">
            © 2025 • Terima kasih atas kesabaran Anda
        </div>

    </div>

</body>
</html>
