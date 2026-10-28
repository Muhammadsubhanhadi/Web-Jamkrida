<!DOCTYPE html>
<html lang="id">

<head>

    <!-- =====================================================
         META
    ====================================================== -->

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">


    <!-- =====================================================
         TITLE
    ====================================================== -->

    <title>Login | PT. Jamkrida NTB Syariah</title>


    <!-- =====================================================
         GOOGLE FONT
    ====================================================== -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">


    <!-- =====================================================
         FONT AWESOME
    ====================================================== -->

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <style>

        /* =====================================================
           RESET
        ====================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        html {
            width: 100%;
            min-height: 100%;
        }


        body {
            font-family: "Inter", sans-serif;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 30px 20px;

            position: relative;
            overflow-x: hidden;

            background: #06291d;
        }



        /* =====================================================
           BACKGROUND IMAGE
        ====================================================== */

        .background {
            position: fixed;
            inset: 0;

            z-index: -3;

            background-image: url("../images/2.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            transform: scale(1.03);

            animation:
                backgroundZoom
                18s
                ease-in-out
                infinite
                alternate;
        }


        @keyframes backgroundZoom {

            from {
                transform: scale(1.03);
            }

            to {
                transform: scale(1.08);
            }

        }



        /* =====================================================
           DARK OVERLAY
           Membuat background lebih gelap agar login jelas
        ====================================================== */

        .background::before {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    135deg,
                    rgba(0, 45, 29, 0.83),
                    rgba(0, 0, 0, 0.72)
                );
        }



        /* =====================================================
           LIGHT EFFECT
        ====================================================== */

        .light {
            position: fixed;

            width: 500px;
            height: 500px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(212, 175, 55, 0.16),
                    transparent 68%
                );

            top: -200px;
            right: -180px;

            z-index: -2;

            animation:
                moveLight
                8s
                ease-in-out
                infinite
                alternate;
        }


        .light-two {
            position: fixed;

            width: 450px;
            height: 450px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(0, 170, 105, 0.18),
                    transparent 68%
                );

            bottom: -220px;
            left: -180px;

            z-index: -2;

            animation:
                moveLight
                10s
                ease-in-out
                infinite
                alternate-reverse;
        }


        @keyframes moveLight {

            from {
                transform: translate(0, 0);
            }

            to {
                transform: translate(-40px, 30px);
            }

        }



        /* =====================================================
           BACK BUTTON
        ====================================================== */

        .back-button {
            position: fixed;

            top: 25px;
            left: 30px;

            z-index: 10;

            display: flex;
            align-items: center;

            gap: 10px;

            padding: 11px 18px;

            border-radius: 12px;

            text-decoration: none;

            color: white;

            font-size: 12px;
            font-weight: 600;

            background: rgba(255, 255, 255, 0.12);

            border:
                1px solid
                rgba(255, 255, 255, 0.22);

            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            transition: 0.3s;

            box-shadow:
                0 8px 25px
                rgba(0, 0, 0, 0.18);
        }


        .back-button i {
            color: #d4af37;

            transition: 0.3s;
        }


        .back-button:hover {
            background:
                rgba(255, 255, 255, 0.20);

            transform: translateX(-4px);
        }


        .back-button:hover i {
            transform: translateX(-3px);
        }



        /* =====================================================
           LOGIN CARD
        ====================================================== */

        .login-card {
            width: 100%;
            max-width: 450px;

            padding: 42px;

            border-radius: 26px;

            position: relative;

            background:
                linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.20),
                    rgba(255, 255, 255, 0.07)
                );

            border:
                1px solid
                rgba(255, 255, 255, 0.30);

            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);

            box-shadow:
                0 25px 70px
                rgba(0, 0, 0, 0.40),

                inset 0 1px 1px
                rgba(255, 255, 255, 0.20);

            animation:
                cardShow
                0.8s
                ease;
        }


        @keyframes cardShow {

            from {
                opacity: 0;
                transform:
                    translateY(30px)
                    scale(0.96);
            }

            to {
                opacity: 1;
                transform:
                    translateY(0)
                    scale(1);
            }

        }



        /* =====================================================
           GOLD LINE
        ====================================================== */

        .login-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 15%;

            width: 70%;
            height: 2px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    #d4af37,
                    transparent
                );

            box-shadow:
                0 0 18px
                rgba(212, 175, 55, 0.7);
        }



        /* =====================================================
           LOGO
        ====================================================== */

        .logo-area {
            display: flex;
            justify-content: center;

            margin-bottom: 20px;
        }


        .logo {
            width: 66px;
            height: 66px;

            border-radius: 15px;

            display: flex;
            justify-content: center;
            align-items: center;

            background:
                linear-gradient(
                    145deg,
                    #ffffff,
                    #eaf4ef
                );

            color: #08764f;

            font-size: 25px;

            box-shadow:
                0 12px 28px
                rgba(121, 115, 115, 0.22);

            animation:
                logoFloat
                4s
                ease-in-out
                infinite;

            overflow: hidden;
        }


        .logo img {
            width: 120%;
            height: 120%;

            object-fit: contain;

            display: block;
        }


        @keyframes logoFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }

        }



        /* =====================================================
           HEADER
        ====================================================== */

        .header {
            text-align: center;

            margin-bottom: 28px;
        }


        .company-name {
            color: #e1c45e;

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 1.3px;

            text-transform: uppercase;

            margin-bottom: 10px;

            line-height: 1.6;
        }


        .header h1 {
            color: white;

            font-size: 28px;

            margin-bottom: 9px;
        }


        .header p {
            color:
                rgba(255, 255, 255, 0.68);

            font-size: 12px;

            line-height: 1.7;
        }



        /* =====================================================
           FORM
        ====================================================== */

        .input-group {
            margin-bottom: 18px;
        }


        .input-group label {
            display: block;

            color:
                rgba(255, 255, 255, 0.88);

            font-size: 11px;
            font-weight: 600;

            margin-bottom: 8px;
        }


        .input-box {
            position: relative;
        }


        /* ICON KIRI */

        .left-icon {
            position: absolute;

            left: 16px;
            top: 50%;

            transform:
                translateY(-50%);

            color:
                rgba(255, 255, 255, 0.58);

            font-size: 14px;

            pointer-events: none;

            transition: 0.3s;
        }


        /* INPUT */

        .input-box input {
            width: 100%;
            height: 54px;

            border-radius: 12px;

            border:
                1px solid
                rgba(255, 255, 255, 0.20);

            outline: none;

            background:
                rgba(0, 0, 0, 0.16);

            color: white;

            padding:
                0 48px;

            font-family: inherit;

            font-size: 12px;

            transition: 0.3s;
        }


        .input-box input::placeholder {
            color:
                rgba(255, 255, 255, 0.42);
        }


        .input-box input:focus {
            border-color:
                rgba(212, 175, 55, 0.8);

            background:
                rgba(0, 0, 0, 0.25);

            box-shadow:
                0 0 0 4px
                rgba(212, 175, 55, 0.08);
        }


        .input-box:focus-within .left-icon {
            color: #d4af37;
        }



        /* =====================================================
           PASSWORD TOGGLE
           Tombol mata untuk menampilkan password
        ====================================================== */

        .toggle-password {
            position: absolute;

            right: 16px;
            top: 50%;

            transform:
                translateY(-50%);

            width: 30px;
            height: 30px;

            display: flex;
            justify-content: center;
            align-items: center;

            border: none;

            background: transparent;

            color:
                rgba(255, 255, 255, 0.55);

            cursor: pointer;

            transition: 0.3s;
        }


        .toggle-password:hover {
            color: #d4af37;

            transform:
                translateY(-50%)
                scale(1.08);
        }


        .toggle-password:focus {
            outline: none;
        }



        /* =====================================================
           OPTIONS
        ====================================================== */

        .options {
            display: flex;

            justify-content: space-between;
            align-items: center;

            gap: 10px;

            margin: 4px 0 24px;
        }


        .remember {
            display: flex;
            align-items: center;

            gap: 7px;

            color:
                rgba(255, 255, 255, 0.65);

            font-size: 11px;

            cursor: pointer;

            white-space: nowrap;
        }


        .remember input {
            accent-color: #d4af37;
        }


        .forgot {
            text-decoration: none;

            color: #e1c45e;

            font-size: 11px;
            font-weight: 600;

            transition: 0.3s;

            white-space: nowrap;
        }


        .forgot:hover {
            color: white;
        }



        /* =====================================================
           LOGIN BUTTON
        ====================================================== */

        .login-btn {
            width: 100%;
            height: 54px;

            border: none;

            border-radius: 12px;

            color: white;

            font-family: inherit;

            font-size: 12px;
            font-weight: 700;

            cursor: pointer;

            position: relative;

            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    #08764f,
                    #0a9867
                );

            box-shadow:
                0 12px 28px
                rgba(0, 0, 0, 0.22);

            transition: 0.3s;
        }


        .login-btn::before {
            content: "";

            position: absolute;

            top: 0;
            left: -100%;

            width: 100%;
            height: 100%;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(255, 255, 255, 0.25),
                    transparent
                );

            transition: 0.6s;
        }


        .login-btn:hover::before {
            left: 100%;
        }


        .login-btn:hover {
            transform:
                translateY(-2px);

            box-shadow:
                0 16px 35px
                rgba(0, 0, 0, 0.30);
        }


        .button-content {
            position: relative;

            z-index: 2;

            display: flex;

            justify-content: center;
            align-items: center;

            gap: 10px;
        }



        /* =====================================================
           SECURITY
        ====================================================== */

        .security {
            margin-top: 20px;

            padding: 12px 14px;

            border-radius: 11px;

            display: flex;
            align-items: center;

            gap: 10px;

            background:
                rgba(255, 255, 255, 0.07);

            border:
                1px solid
                rgba(255, 255, 255, 0.10);

            color:
                rgba(255, 255, 255, 0.58);

            font-size: 9px;

            line-height: 1.6;
        }


        .security i {
            color: #d4af37;

            font-size: 15px;
        }



        /* =====================================================
           FOOTER
        ====================================================== */

        .footer {
            margin-top: 22px;

            text-align: center;

            color:
                rgba(255, 255, 255, 0.42);

            font-size: 9px;

            line-height: 1.8;
        }


        .footer strong {
            color:
                rgba(255, 255, 255, 0.72);
        }



        /* =====================================================
           ERROR MESSAGE
        ====================================================== */

        .error-message {
            display: none;

            padding: 11px 13px;

            margin-bottom: 17px;

            border-radius: 10px;

            color: #ffb7b7;

            background:
                rgba(180, 20, 20, 0.18);

            border:
                1px solid
                rgba(255, 120, 120, 0.28);

            font-size: 10px;

            animation:
                shake
                0.3s
                ease;
        }


        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(5px);
            }

        }



        /* =====================================================
           LOADING
        ====================================================== */

        .loading {
            width: 16px;
            height: 16px;

            border-radius: 50%;

            border:
                2px solid
                rgba(255, 255, 255, 0.35);

            border-top-color: white;

            animation:
                spin
                0.7s
                linear
                infinite;
        }


        @keyframes spin {

            to {
                transform: rotate(360deg);
            }

        }



        /* =====================================================
           RESPONSIVE TABLET
        ====================================================== */

        @media (max-width: 768px) {

            body {
                padding:
                    85px 20px 30px;
            }


            .back-button {
                top: 18px;
                left: 20px;
            }


            .login-card {
                max-width: 440px;

                padding:
                    38px 32px;
            }

        }



        /* =====================================================
           RESPONSIVE MOBILE
        ====================================================== */

        @media (max-width: 480px) {

            body {
                padding:
                    80px 14px 20px;

                align-items: flex-start;
            }


            .back-button {
                top: 15px;
                left: 14px;

                padding:
                    10px 14px;

                font-size: 11px;
            }


            .login-card {
                width: 100%;

                padding:
                    32px 22px;

                border-radius: 20px;
            }


            .logo {
                width: 58px;
                height: 58px;

                font-size: 22px;

                border-radius: 16px;
            }


            .header {
                margin-bottom: 24px;
            }


            .header h1 {
                font-size: 24px;
            }


            .header p {
                font-size: 11px;
            }


            .company-name {
                font-size: 9px;

                letter-spacing: 1px;
            }


            .input-box input {
                height: 51px;
            }


            .login-btn {
                height: 51px;
            }


            .security {
                font-size: 8.5px;
            }

        }



        /* =====================================================
           VERY SMALL SCREEN
        ====================================================== */

        @media (max-width: 350px) {

            body {
                padding:
                    75px 10px 15px;
            }


            .back-button {
                left: 10px;

                padding:
                    9px 12px;
            }


            .login-card {
                padding:
                    27px 16px;
            }


            .header h1 {
                font-size: 21px;
            }


            .company-name {
                font-size: 8px;
            }


            .options {
                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }


            .footer {
                font-size: 8px;
            }

        }

    </style>

</head>


<body>


    <!-- =====================================================
         BACKGROUND
    ====================================================== -->

    <div class="background"></div>

    <div class="light"></div>

    <div class="light-two"></div>



    <!-- =====================================================
         TOMBOL KEMBALI KE WEBSITE
    ====================================================== -->

    <a href="{{ url('/') }}"
       class="back-button">

        <i class="fa-solid fa-arrow-left"></i>

        <span>Kembali</span>

    </a>



    <!-- =====================================================
         LOGIN CARD
    ====================================================== -->

    <main class="login-card">


        <!-- =================================================
             LOGO
        ================================================== -->

        <div class="logo-area">

            <div class="logo">

                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo Jamkrida"
                >

            </div>

        </div>



        <!-- =================================================
             HEADER LOGIN
        ================================================== -->

        <div class="header">

            <div class="company-name">
                PT. Jamkrida NTB Syariah (Perseroda)
            </div>


            <h1>
                Selamat Datang
            </h1>


            <p>
                Silakan masuk untuk mengakses
                sistem informasi perusahaan.
            </p>

        </div>



        <!-- =================================================
             PESAN ERROR
        ================================================== -->

        <div class="error-message"
             id="errorMessage">

            <i class="fa-solid fa-circle-exclamation"></i>

            Email atau password salah.

        </div>



        <!-- =================================================
             FORM LOGIN
        ================================================== -->

        <form
            action="{{ route('login.process') }}"
            method="POST"
            id="loginForm"
        >

            @csrf


            <!-- =============================================
                 EMAIL
            ============================================== -->

            <div class="input-group">

                <label for="email">
                    Email
                </label>


                <div class="input-box">

                    <!-- ICON EMAIL -->

                    <i class="fa-regular fa-envelope left-icon"></i>


                    <!-- INPUT EMAIL -->

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan Email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        required
                    >

                </div>

            </div>



            <!-- =============================================
                 PASSWORD
            ============================================== -->

            <div class="input-group">

                <label for="password">
                    Password
                </label>


                <div class="input-box">

                    <!-- ICON LOCK -->

                    <i class="fa-solid fa-lock left-icon"></i>


                    <!-- INPUT PASSWORD -->

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan Password"
                        autocomplete="current-password"
                        required
                    >


                    <!-- =====================================
                         TOMBOL TAMPILKAN PASSWORD
                    ====================================== -->

                    <button
                        type="button"
                        class="toggle-password"
                        id="togglePassword"
                        aria-label="Tampilkan password"
                    >

                        <i class="fa-regular fa-eye"></i>

                    </button>

                </div>

            </div>



            <!-- =================================================
                 ERROR DARI LARAVEL
            ================================================== -->

            @if ($errors->any())

                <div
                    class="error-message"
                    style="display: block;"
                >

                    <i class="fa-solid fa-circle-exclamation"></i>

                    {{ $errors->first() }}

                </div>

            @endif



            <!-- =================================================
                 OPTIONS
            ================================================== -->

            <div class="options">

                <label class="remember">

                    <input
                        type="checkbox"
                        name="remember"
                    >

                    Ingat saya

                </label>


                <a
                    href="#"
                    class="forgot"
                >
                    Lupa password?
                </a>

            </div>



            <!-- =================================================
                 TOMBOL LOGIN
            ================================================== -->

            <button
                type="submit"
                class="login-btn"
                id="loginButton"
            >

                <span
                    class="button-content"
                    id="buttonContent"
                >

                    <span>
                        Masuk ke Sistem
                    </span>

                    <i class="fa-solid fa-arrow-right"></i>

                </span>

            </button>


        </form>



        <!-- =================================================
             SECURITY INFORMATION
        ================================================== -->

        <div class="security">

            <i class="fa-solid fa-shield-halved"></i>

            <span>
                Akses sistem dilindungi untuk menjaga keamanan
                informasi dan data perusahaan.
            </span>

        </div>



        <!-- =================================================
             FOOTER
        ================================================== -->

        <div class="footer">

            © 2026

            <strong>
                PT. Jamkrida NTB Syariah (Perseroda)
            </strong>

            <br>

            Lembaga Penjaminan Syariah

        </div>


    </main>



    <!-- =====================================================
         JAVASCRIPT LOGIN
    ====================================================== -->

    <script>

    /* ==================================================
       AMBIL ELEMENT HTML
    =================================================== */

    const loginForm =
        document.getElementById("loginForm");

    const email =
        document.getElementById("email");

    const password =
        document.getElementById("password");

    const togglePassword =
        document.getElementById("togglePassword");

    const errorMessage =
        document.getElementById("errorMessage");

    const loginButton =
        document.getElementById("loginButton");

    const buttonContent =
        document.getElementById("buttonContent");


    /* ==================================================
       SHOW / HIDE PASSWORD
    =================================================== */

    togglePassword.addEventListener(
        "click",
        function () {

            if (password.type === "password") {

                password.type = "text";

                this.innerHTML =
                    '<i class="fa-regular fa-eye-slash"></i>';

                this.setAttribute(
                    "aria-label",
                    "Sembunyikan password"
                );

            } else {

                password.type = "password";

                this.innerHTML =
                    '<i class="fa-regular fa-eye"></i>';

                this.setAttribute(
                    "aria-label",
                    "Tampilkan password"
                );

            }

        }
    );


    /* ==================================================
       HILANGKAN PESAN ERROR SAAT EMAIL DIUBAH
    =================================================== */

    email.addEventListener(
        "input",
        function () {

            errorMessage.style.display = "none";

        }
    );


    /* ==================================================
       HILANGKAN PESAN ERROR SAAT PASSWORD DIUBAH
    =================================================== */

    password.addEventListener(
        "input",
        function () {

            errorMessage.style.display = "none";

        }
    );


    /* ==================================================
       LOGIN FORM
       FORM DIKIRIM KE LARAVEL
    =================================================== */

    loginForm.addEventListener(
        "submit",
        function () {

            /*
             * Jangan gunakan event.preventDefault().
             * Form harus diteruskan ke Laravel.
             */

            loginButton.disabled = true;

            buttonContent.innerHTML =
                '<span class="loading"></span>' +
                '<span>Memverifikasi...</span>';

        }
    );

</script>

</body>
</html>
