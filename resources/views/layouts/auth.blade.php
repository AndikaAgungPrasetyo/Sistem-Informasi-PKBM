<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi PKBM - @yield('title')</title>

    <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">

    <style>
        /* ======== UMUM ======== */
        body {
            background: linear-gradient(135deg, #0d47a1, #1565c0);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        .auth-wrapper {
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 25px rgba(0,0,0,0.2);
            display: flex;
            overflow: hidden;
            width: 900px;
            max-width: 95%;
            min-height: 520px;
        }

        /* ======== BAGIAN KIRI ======== */
        .auth-left {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .auth-card {
            width: 100%;
            max-width: 360px;
        }

        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 25px;
        }

        .logo-container img {
            width: 90px;
            height: 90px;
            margin-bottom: 10px;
        }

        .logo-text {
            color: #0d47a1;
            font-weight: 700;
            font-size: 1.6rem;
            text-align: center;
        }

        /* ======== FORM ======== */
        h5 {
            color: #424242;
            font-weight: 600;
            margin-bottom: 25px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: 500;
            color: #0d47a1;
            margin-bottom: 4px;
            font-size: 0.9rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: 0.95rem;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #1976d2;
        }

        button {
            background-color: #0d47a1;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 5px;
        }

        button:hover {
            background-color: #1565c0;
        }

        .small-text {
            text-align: center;
            font-size: 0.9rem;
            margin-top: 15px;
        }

        .small-text a {
            color: #0d47a1;
            text-decoration: none;
            font-weight: 500;
        }

        .small-text a:hover {
            text-decoration: underline;
        }

        /* ======== BAGIAN KANAN ======== */
        .auth-right {
            flex: 1;
            background: #e3f2fd;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-right img {
            max-width: 85%;
            height: auto;
        }

        /* ======== RESPONSIVE ======== */
        @media (max-width: 768px) {
            .auth-wrapper {
                flex-direction: column;
                width: 90%;
            }

            .auth-right {
                display: none;
            }

            .auth-left {
                padding: 35px 25px;
            }

            .logo-text {
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>
    <div class="auth-wrapper">

        <!-- BAGIAN KIRI -->
        <div class="auth-left">
            <div class="logo-container">
                <img src="{{ asset('images/logo-pkbm.png') }}" alt="Logo PKBM">
                <div class="logo-text">Sistem Informasi PKBM</div>
            </div>

            <div class="auth-card">
                <h5>@yield('title')</h5>
                @yield('content')
            </div>
        </div>

        <!-- BAGIAN KANAN -->
        <div class="auth-right">
            <img src="{{ asset('images/auth-illustration.png') }}" alt="PKBM Illustration">
        </div>

    </div>
</body>
</html>
