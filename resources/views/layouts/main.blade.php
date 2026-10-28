<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PT. JAMKRIDA NTB SYARIAH (PERSERODA)')</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

<!-- =====================================================
     CSS
====================================================== -->

     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>


<body>


<!-- =====================================================
     TOPBAR
===================================================== -->

<div class="topbar">

    <div class="container topbar-content">

        <div></div>

        <div class="top-links"></div>

    </div>

</div>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="navbar" id="navbar">

    <div class="container nav-container">

        <!-- LOGO -->
        <a href="#beranda" class="brand">

            <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="LOGO JAMKRIDA">
            </div>

            <div class="brand-name">

                <strong>PT. JAMKRIDA</strong>

                <span style="font-size: 15PX;">NTB SYARIAH</span>

                <small style="font-size: 10PX;">(PERSERODA)</small>

            </div>

        </a>


        <!-- MOBILE BUTTON -->

        <button class="menu-toggle" id="menuToggle">

            <i class="fa-solid fa-bars"></i>

        </button>


        <!-- NAVIGATION -->

        <nav class="nav-menu" id="navMenu">

            <a href="{{ url('/') }}" class="nav-link active">
                Beranda
            </a>


            <!-- PROFIL -->

            <div class="dropdown">

                <button class="nav-link dropdown-button">

                    Profil

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="dropdown-menu">

                    <a href="{{ url('/menu/profil/tentang') }}">
                        <i class="fa-regular fa-building"></i>
                        Latar Belakang
                    </a>

                    <a href="{{ url('/menu/profil/kepemilikan') }}">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        Kepemilikan
                    </a>

                    <a href="{{ url('/menu/profil/visi_misi') }}">
                        <i class="fa-solid fa-bullseye"></i>
                        Visi & Misi
                    </a>

                    <a href="{{ url('/menu/profil/struktur') }}">
                        <i class="fa-solid fa-sitemap"></i>
                        Struktur Organisasi
                    </a>

                    <!-- <a href="#profil">
                        <i class="fa-solid fa-scale-balanced"></i>
                        Tata Kelola
                    </a> -->

                </div>

            </div>


            <!-- PRODUK -->

            <div class="dropdown">

                <button class="nav-link dropdown-button">

                    Produk

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="dropdown-menu">

                    <a href="{{ url('/menu/produk/penjaminan') }}">
                        <i class="fa-solid fa-handshake"></i>
                        Mekanismen Pinjaman
                    </a>

                    <a href="{{ url('/menu/produk/pembiayaan_syariah') }}">
                        <i class="fa-solid fa-file-signature"></i>
                        Penjaminan Pembiayaan Syariah
                    </a>

                    <a href="{{ url('/menu/produk/surety_bond') }}">
                        <i class="fa-solid fa-building-columns"></i>
                        Penjaminan Kredit Surety Bond
                    </a>

                    <a href="{{ url('/menu/produk/bank_garansi') }}">
                        <i class="fa-solid fa-shield"></i>
                        Penjaminan Bank Garansi
                    </a>

                    <!-- <a href="#produk">
                        <i class="fa-solid fa-layer-group"></i>
                        Produk Lainnya
                    </a> -->

                </div>

            </div>


            <!-- MANAJEMEN -->

            <!-- <div class="dropdown">

                <button class="nav-link dropdown-button">

                    Manajemen

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="dropdown-menu">

                    <a href="#manajemen">
                        <i class="fa-solid fa-user-tie"></i>
                        Dewan Komisaris
                    </a>

                    <a href="#manajemen">
                        <i class="fa-solid fa-users"></i>
                        Direksi
                    </a>

                    <a href="#manajemen">
                        <i class="fa-solid fa-sitemap"></i>
                        Struktur Organisasi
                    </a>

                    <a href="#manajemen">
                        <i class="fa-solid fa-scale-balanced"></i>
                        Tata Kelola Perusahaan
                    </a>

                    <a href="#manajemen">
                        <i class="fa-solid fa-id-card"></i>
                        Profil Manajemen
                    </a>

                </div>

            </div> -->


            <!-- LAPORAN -->

            <div class="dropdown">

                <button class="nav-link dropdown-button">

                    Laporan

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="dropdown-menu">

                    <a href="{{ url('/menu/laporan/annual-report') }}">
                        <i class="fa-regular fa-file-lines"></i>
                        Annual Report
                    </a>

                    <a href="{{ route('gcg') }}">
                        <i class="fa-solid fa-chart-line"></i>
                        Laporan GCG
                    </a>

                    <a href="{{ url('/menu/laporan/auditor') }}">
                        <i class="fa-solid fa-list-check"></i>
                        Auditor
                    </a>

                    <a href="{{ url('/menu/laporan/rencana_bisnis') }}">
                        <i class="fa-solid fa-leaf"></i>
                        Rencana Bisnis
                    </a>

                    <a href="{{ url('/menu/laporan/keuangan_berkelanjutan') }}">
                        <i class="fa-solid fa-folder-open"></i>
                        Keuangan Berkelanjutan
                    </a>

                    <a href="{{ url('/menu/laporan/daftar_agen') }}">
                        <i class="fa-solid fa-users"></i>
                        Daftar Agen
                    </a>

                </div>

            </div>


            <!-- PEDOMAN -->

            <!-- <div class="dropdown">

                <button class="nav-link dropdown-button">

                    Pedoman

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="dropdown-menu">

                    <a href="#pedoman">
                        <i class="fa-solid fa-book"></i>
                        Pedoman Perusahaan
                    </a>

                    <a href="#pedoman">
                        <i class="fa-solid fa-file-shield"></i>
                        Kebijakan
                    </a>

                    <a href="#pedoman">
                        <i class="fa-solid fa-list-check"></i>
                        SOP
                    </a>

                    <a href="#pedoman">
                        <i class="fa-solid fa-award"></i>
                        Standar Pelayanan
                    </a>

                    <a href="#pedoman">
                        <i class="fa-solid fa-scale-balanced"></i>
                        Ketentuan Umum
                    </a>

                </div>

            </div> -->


            <!-- PPID -->

            <div class="dropdown">

                <button class="nav-link dropdown-button">

                    PPID

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="dropdown-menu">

                    <a href="{{ url('/menu/ppid/tentang_ppid') }}">
                        <i class="fa-solid fa-circle-info"></i>
                        Tentang PPID
                    </a>

                    <a href="{{ url('/menu/ppid/kelengkapan_ppid') }}">
                        <i class="fa-solid fa-file-lines"></i>
                        Kelengkapan PPID
                    </a>

                    <a href="{{ url('/menu/ppid/standar_pelayanan') }}">
                        <i class="fa-solid fa-paper-plane"></i>
                        Standar Pelayanan
                    </a>

                    <a href="{{ url('/menu/ppid/ebulletin') }}">
                        <i class="fa-solid fa-list"></i>
                        eBulletin
                    </a>

                    <a href="{{ url('/menu/ppid/layanan') }}">
                        <i class="fa-solid fa-headset"></i>
                        Layanan Pusat Informasi
                    </a>

                    <a href="{{ url('/menu/ppid/rancangan_peraturan') }}">
                        <i class="fa-solid fa-file-contract"></i>
                        Rancangan Peraturan
                    </a>

                    <a href="{{ url('/menu/ppid/pos_pelayanan') }}">
                        <i class="fa-solid fa-location-dot"></i>
                        Pos Pelayanan Informasi Publik
                    </a>

                </div>

            </div>


            <!-- PENGADUAN -->

            <div class="dropdown">

                <button class="nav-link dropdown-button">

                    Pengaduan

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="dropdown-menu">

                    <a href="{{ url('/menu/pengaduan/whistle_blowing') }}">
                        <i class="fa-solid fa-headset"></i>
                        Whistle-Blowing
                    </a>

                </div>

            </div>

            <!-- Digitalisasi -->

            <div class="dropdown">
                <button type="button" class="nav-link dropdown-button">
                    Digitalisasi
                    <i class="fa-solid fa-chevron-down"></i>
                </button>

                <div class="dropdown-menu">
                    <a href="{{ route('digitalisasi') }}">
                        <i class="fa-solid fa-laptop-code"></i>
                        Roadmap Transformasi Digital
                    </a>
                </div>
            </div>


        <!-- KARIR -->
        <div class="dropdown">
            <button type="button" class="nav-link dropdown-button">
                Karier
                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="dropdown-menu">
                <a href="{{ route('karir') }}">
                    <i class="fa-solid fa-briefcase"></i>
                    Lowongan Karier
                </a>
            </div>
        </div>



            <!-- SOCIAL MEDIA -->

            <div class="dropdown">

                <button class="nav-link dropdown-button">

                    Sosial Media

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="dropdown-menu">

                    <a href="https://www.instagram.com/jamkridantbsyariah">
                        <i class="fa-brands fa-instagram"></i>
                        Instagram
                    </a>

                    <a href="https://www.facebook.com/jamkridantb">
                        <i class="fa-brands fa-facebook-f"></i>
                        Facebook
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=6281997770594&text=Saya%20ingin%20bertanya%20sesuatu?">
                        <i class="fa-brands fa-whatsapp"></i>
                        WhatsApp
                    </a>

                    <a href="https://youtube.com/@jamkridantb8771?si=UjZOpOLolL0S5BgJ">
                        <i class="fa-brands fa-youtube"></i>
                        Youtube
                    </a>

                    <!-- <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                        LinkedIn
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-tiktok"></i>
                        TikTok
                    </a> -->

                </div>

            </div>


            <!-- LOGIN -->

            <a href="{{ url('/login') }}" class="login-button">

                <i class="fa-regular fa-user"></i>

                Login

            </a>

        </nav>

    </div>

</header>


<!-- =====================================================
     ISI HALAMAN
===================================================== -->

<main>

    @yield('content')

</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="footer" id="login">

    <div class="container footer-grid">


        <div class="footer-company">

            <a href="#beranda" class="brand">

                <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="LOGO JAMKRIDA">
            </div>

                <div class="brand-name">

                   <strong>PT. JAMKRIDA</strong>

                    <span style="font-size: 15PX;">NTB SYARIAH</span>

                    <small style="font-size: 10PX;">(PERSERODA)</small>

                </div>

            </a>


            <p>

                Lembaga penjaminan syariah yang amanah,
                profesional, dan berkelanjutan untuk
                mendukung pertumbuhan ekonomi daerah.

            </p>


            <div class="social-icons">

                <a href="https://www.instagram.com/jamkridantbsyariah">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://www.facebook.com/jamkridantbsyariah">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="https://youtube.com/@jamkridantb8771?si=UjZOpOLolL0S5BgJ">
                    <i class="fa-brands fa-youtube"></i>
                </a>

                <a href="https://api.whatsapp.com/send?phone=6281997770594&text=Saya%20ingin%20bertanya%20sesuatu?">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

            </div>

        </div>



        <div class="footer-column">

            <h4>Perusahaan</h4>

            <a href="{{ url('/menu/profil/tentang') }}">Tentang Kami</a>

            <a href="#">Manajemen</a>

            <a href="#">Laporan</a>

            <a href="{{ url('/menu/profil/pedoman') }}">Pedoman</a>

        </div>



        <div class="footer-column">

            <h4>Layanan</h4>

            <a href="#produk">Produk & Layanan</a>

            <a href="{{ url('/menu/ppid/tentang_ppid') }}">PPID</a>

            <a href="#">Pengaduan</a>

            <a href="#">FAQ</a>

        </div>



        <div class="footer-column">

            <h4>Kontak</h4>

            <p>
                <i class="fa-solid fa-location-dot"></i>
                    Kota Mataram, Nusa Tenggara Barat. 83125
            </p>

            <p>
                <i class="fa-solid fa-phone"></i>
                (0370)-639304, 639305
            </p>

            <p>
                <i class="fa-solid fa-envelope"></i>
                admin@jamkridantbsyariah.co.id
            </p>

        </div>

    </div>


    <div class="container footer-bottom">

        <span>
            © 2026 PT. Jamkrida NTB Syariah (Perseroda).
            All Rights Reserved.
        </span>

        <div>

            <a href="#">Privacy Policy</a>

            <a href="#">Terms</a>

        </div>

    </div>

</footer>

<!-- =====================================================
     WHATSAPP FLOATING
===================================================== -->

<a href="#" class="whatsapp">

    <span class="pulse"></span>

    <i class="fa-brands fa-whatsapp"></i>

    <strong>Hubungi Kami</strong>

</a>

<!-- =====================================================
     BACK TO TOP
===================================================== -->

 <button class="back-top" id="backTop">

    <i class="fa-solid fa-arrow-up"></i>

</button>

<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>