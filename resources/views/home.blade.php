@extends('layouts.main')

@section('title', 'PT. JAMKRIDA NTB SYARIAH (PERSERODA)')

@section('content')

<!-- ISLAMIC LUXURY LOADER -->
<!-- <div id="islamic-loader"> -->

    <!-- Background -->
    <!-- <div class="loader-bg"></div> -->

    <!-- Islamic Pattern -->
    <!-- <div class="islamic-pattern pattern-1"></div>
    <div class="islamic-pattern pattern-2"></div> -->

    <!-- Ornamen bintang -->
    <!-- <span class="star star-1">✦</span>
    <span class="star star-2">✧</span>
    <span class="star star-3">✦</span>
    <span class="star star-4">✧</span>
    <span class="star star-5">✦</span>
    <span class="star star-6">✧</span> -->

    <!-- Cahaya -->
    <!-- <div class="loader-light"></div> -->

    <!-- Konten utama -->
    <!-- <div class="loader-content"> -->

        <!-- Ornamen atas -->
        <!-- <div class="ornament-top">
            <span></span>
            <b>◇</b>
            <span></span>
        </div> -->

        <!-- Bismillah -->
        <!-- <div class="bismillah">
            بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
        </div>

        <div class="bismillah-latin">
            Bismillāhirraḥmānirraḥīm
        </div> -->

        <!-- Garis -->
        <!-- <div class="gold-divider">
            <i></i>
            <span></span>
            <i></i>
        </div> -->

        <!-- Identitas -->
        <!-- <div class="loader-brand">
            PT. JAMKRIDA NTB SYARIAH
        </div>

        <div class="loader-subtitle"> -->
            <!-- AMANAH • PROFESIONAL • BERKAH -->
        <!-- </div> -->

        <!-- Loading -->
        <!-- <div class="loader-progress">
            <div id="loader-progress-bar"></div>
        </div>

        <div class="loader-info">
            <span>MEMUAT HALAMAN</span>
            <strong id="loader-percent">0%</strong>
        </div> -->

        <!-- Ornamen bawah -->
        <!-- <div class="ornament-bottom">
            <span></span>
            <b>✦</b>
            <span></span>
        </div>

    </div>

</div> -->


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero" id="beranda">

    <div class="hero-grid"></div>

    <div class="hero-circle circle-one"></div>
    <div class="hero-circle circle-two"></div>


    <div class="container hero-container">


        <!-- HERO TEXT -->

        <div class="hero-text reveal">

            <div class="eyebrow">

                <span></span>

                JAMINAN SYARIAH • KEPERCAYAAN • PERTUMBUHAN

            </div>


            <h1>

                Membangun Kepercayaan,

                <br>

                <span>Menjamin Pertumbuhan.</span>

            </h1>


            <p>

                PT. Jamkrida NTB Syariah (Perseroda) hadir sebagai
                mitra penjaminan syariah yang mendukung pelaku usaha
                dan perekonomian daerah secara profesional,
                amanah, dan berkelanjutan.

            </p>


            <div class="hero-buttons">

                <a href="#produk" class="btn btn-gold">

                    Jelajahi Produk

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

                <a href="{{ url('/menu/profil/tentang') }}" class="btn btn-outline">
                    <i class="fa-regular fa-building"></i>
                    Tentang Kami
                </a>

            </div>


            <div class="trust-items">

                <div>
                    <i class="fa-solid fa-shield"></i>
                    Terpercaya
                </div>

                <div>
                    <i class="fa-solid fa-mosque"></i>
                    Berbasis Syariah
                </div>

                <div>
                    <i class="fa-solid fa-chart-line"></i>
                    Berkelanjutan
                </div>

            </div>

        </div>



        <!-- HERO CARD -->

        <!-- <div class="hero-visual reveal delay-1">

            <div class="hero-card">

                <div class="card-top">

                    <span>JAMKRIDA NTB SYARIAH</span>

                    <i class="fa-solid fa-ellipsis"></i>

                </div>


                <div class="shield-icon">

                    <i class="fa-solid fa-shield-halved"></i>

                </div>


                <div class="card-title">

                    Partner for

                    <strong>Growing Business</strong>

                </div>


                <div class="mini-stat">

                    <div>
                        <small>Kepercayaan</small>
                        <strong>100%</strong>
                    </div>

                    <div>
                        <small>Syariah</small>
                        <strong>✓</strong>
                    </div>

                    <div>
                        <small>NTB</small>
                        <strong>+</strong>
                    </div>

                </div>


                <div class="chart">

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                </div>

            </div>


            <div class="floating-card floating-one">

                <i class="fa-solid fa-shield-heart"></i>

                <div>
                    <strong>Syariah</strong>
                    <small>Berbasis prinsip syariah</small>
                </div>

            </div>


            <div class="floating-card floating-two">

                <i class="fa-solid fa-arrow-trend-up"></i>

                <div>
                    <strong>Growth</strong>
                    <small>Mendorong ekonomi daerah</small>
                </div>

            </div>

        </div> -->

    </div>

</section>



<!-- =====================================================
     QUICK ACCESS
===================================================== -->

<section class="quick-section">

    <div class="container quick-grid">

        <a href="#produk" class="quick-card">

            <div class="quick-icon">
                <i class="fa-solid fa-handshake"></i>
            </div>

            <div>
                <small style="font-size: 15px;">Layanan Utama</small>
                <strong style="font-size: 18px;">Penjaminan Syariah</strong>
            </div>

            <i class="fa-solid fa-arrow-right arrow"></i>

        </a>


        <a href="#laporan" class="quick-card">

            <div class="quick-icon">
                <i class="fa-solid fa-file-shield"></i>
            </div>

            <div>
                <small style="font-size: 15px;">Informasi</small>
                <strong style="font-size: 18px;">Dokumen & Laporan</strong>
            </div>

            <i class="fa-solid fa-arrow-right arrow"></i>

        </a>


        <a href="mailto:admin@jamkridantbsyariah.co.id" class="quick-card">

            <div class="quick-icon">
                <i class="fa-solid fa-headset"></i>
            </div>

            <div>
                <small style="font-size: 15px;">Bantuan</small>
                <strong style="font-size: 18px;">Hubungi Kami</strong>
            </div>

            <i class="fa-solid fa-arrow-right arrow"></i>

        </a>

    </div>

</section>


<!-- =====================================================
     PROFIL
===================================================== -->

<section class="section" id="profil">

    <div class="container about-grid">

        <div class="section-label">

            <span>01</span>

            TENTANG KAMI

        </div>


        <div class="about-content">

            <div class="small-title">
                PT. JAMKRIDA NTB SYARIAH (PERSERODA)
            </div>


            <h2>

                Menjadi bagian dari

                <span>pertumbuhan ekonomi</span>

                Nusa Tenggara Barat.

            </h2>


            <p>

            Merupakan Badan Usaha Milik Daerah (BUMD) yang bergerak dalam bidang usaha Pembiayaan Syariah, didirikan berdasarkan Peraturan Daerah Provinsi Nusa Tenggara Barat Nomor 2 Tahun 2012.

            </p>


            <p>

              <b style="color: orange;"> "Syariah Bisnisnya, Berkah Tujuannya"</b>

            </p>


            <a href="{{ url('/menu/profil/tentang') }}" class="text-link">

                Selengkapnya tentang perusahaan

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>


    <div class="container values-grid">


        <article class="value-card">

            <span class="value-number">01</span>

            <i class="fa-solid fa-shield-heart"></i>

            <h3>Amanah</h3>

            <p>
                Menjaga kepercayaan melalui integritas
                dan tanggung jawab.
            </p>

        </article>


        <article class="value-card">

            <span class="value-number">02</span>

            <i class="fa-solid fa-scale-balanced"></i>

            <h3>Profesional</h3>

            <p>
                Memberikan layanan dengan standar
                dan tata kelola terbaik.
            </p>

        </article>


        <article class="value-card">

            <span class="value-number">03</span>

            <i class="fa-solid fa-leaf"></i>

            <h3>Berkelanjutan</h3>

            <p>
                Menciptakan nilai jangka panjang
                untuk daerah dan masyarakat.
            </p>

        </article>

    </div>

</section>

<!-- =====================================================
     PRODUK
===================================================== -->

<section class="section product-section" id="produk">

    <div class="container">

        <div class="section-heading">

            <div>

                <div class="section-label">

                    <span>02</span>

                    PRODUK & LAYANAN

                </div>

                <h2>

                    Solusi penjaminan untuk

                    <span>setiap langkah.</span>

                </h2>

            </div>


            <p>

                Jelajahi layanan penjaminan yang dirancang
                untuk membantu usaha tumbuh lebih percaya diri.

            </p>

        </div>

        <div class="product-grid">


            <article class="product-card featured">

                <span class="product-number" style="color: white;">01</span>

                <div class="product-icon">

                    <i class="fa-solid fa-handshake"></i>

                </div>

                <h3>
                    Mekanisme Pinjaman
                </h3>

                <p>
                    Solusi penjaminan bagi pembiayaan syariah
                    untuk mendukung kebutuhan usaha.
                </p>

                <a href="{{ url('/menu/produk/penjaminan') }}">
                    Pelajari layanan
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>


            <article class="product-card">

                <span class="product-number">02</span>

                <div class="product-icon">

                    <i class="fa-solid fa-file-signature"></i>

                </div>

                <h3>Pembiayaan Syariah</h3>

                <p>
                    Memberikan jaminan pelaksanaan dan
                    kepercayaan dalam hubungan bisnis.
                </p>

                <a href="{{ url('/menu/produk/pembiayaan_syariah') }}">
                    Pelajari layanan
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>


            <article class="product-card">

                <span class="product-number">03</span>

                <div class="product-icon">

                    <i class="fa-solid fa-building-columns"></i>

                </div>

                <h3>Surety Bond</h3>

                <p>
                    Solusi penjaminan untuk mendukung
                    transaksi dan aktivitas usaha.
                </p>

                <a href="{{ url('/menu/produk/surety_bond') }}">
                    Pelajari layanan
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>


            <article class="product-card">

                <span class="product-number">04</span>

                <div class="product-icon">

                    <i class="fa-solid fa-shield"></i>

                </div>

                <h3>Bank Garansi</h3>

                <p>
                    Perlindungan dan dukungan penjaminan
                    untuk kebutuhan mitra bisnis.
                </p>

                <a href="{{ url('/menu/produk/bank_garansi') }}">
                    Pelajari layanan
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>

        </div>

    </div>

</section>


<!-- =====================================================
     JUMBOTRON
===================================================== -->

<section class="home-jumbotron" id="jumbotron">

    <div class="jumbotron-slider">

        <!-- GAMBAR 1 -->
        <div class="jumbotron-slide active">
            <img
                src="{{ asset('images/jumbotron1.png') }}"
                alt="Layanan PT. Jamkrida NTB Syariah"
                loading="eager"
            >
        </div>

        <!-- GAMBAR 2 -->
        <div class="jumbotron-slide">
            <img
                src="{{ asset('images/jumbotron2.png') }}"
                alt="Kemitraan PT. Jamkrida NTB Syariah"
                loading="lazy"
            >
        </div>

        <!-- LAPISAN GRADASI -->
        <div class="jumbotron-overlay"></div>

        <!-- TOMBOL SEBELUMNYA -->
        <button
            type="button"
            class="jumbotron-arrow jumbotron-prev"
            aria-label="Gambar sebelumnya"
        >
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <!-- TOMBOL BERIKUTNYA -->
        <button
            type="button"
            class="jumbotron-arrow jumbotron-next"
            aria-label="Gambar berikutnya"
        >
            <i class="fa-solid fa-chevron-right"></i>
        </button>

        <!-- INDIKATOR SLIDE -->
        <div class="jumbotron-indicators">
            <button
                type="button"
                class="jumbotron-dot active"
                aria-label="Tampilkan gambar 1"
            ></button>

            <button
                type="button"
                class="jumbotron-dot"
                aria-label="Tampilkan gambar 2"
            ></button>
        </div>

        <!-- NOMOR SLIDE -->
        <div class="jumbotron-counter">
            <span class="jumbotron-current">01</span>
            <span class="jumbotron-counter-line"></span>
            <span>02</span>
        </div>

    </div>

</section>


<!-- =====================================================
     STATISTICS
===================================================== -->

<!-- <section class="statistics">

    <div class="container statistics-grid">


        <div class="stat">

            <i class="fa-solid fa-users"></i>

            <div>
                <strong class="counter" data-target="100">
                    0
                </strong>

                <span>+ Mitra</span>
            </div>

        </div>


        <div class="stat">

            <i class="fa-solid fa-handshake"></i>

            <div>
                <strong class="counter" data-target="25">
                    0
                </strong>

                <span>+ Tahun Pengalaman</span>
            </div>

        </div>


        <div class="stat">

            <i class="fa-solid fa-building"></i>

            <div>
                <strong class="counter" data-target="10">
                    0
                </strong>

                <span>+ Produk & Layanan</span>
            </div>

        </div>


        <div class="stat">

            <i class="fa-solid fa-chart-line"></i>

            <div>
                <strong class="counter" data-target="100">
                    0
                </strong>

                <span>% Komitmen</span>
            </div>

        </div>

    </div>

</section> -->

<!-- =====================================================
     KEGIATAN KAMI
===================================================== -->

<section class="activities-section" id="kegiatan-kami">

    <!-- BACKGROUND EFFECT -->
    <div class="activities-glow activities-glow-left"></div>
    <div class="activities-glow activities-glow-right"></div>

    <div class="container">

        <!-- =========================
             HEADING
        ========================== -->

        <div class="activities-heading activity-reveal">

            <div class="activities-heading-left">

                <div class="activities-label">
                    <span>03</span>
                    KEGIATAN KAMI
                </div>

                <h2>
                    Aktivitas Kami,
                    <span>Jejak Nyata</span>
                    untuk NTB.
                </h2>

                <p>
                    Ikuti berbagai kegiatan dan aktivitas PT. Jamkrida NTB Syariah
                    dalam membangun sinergi, memperkuat kemitraan, dan memberikan
                    manfaat bagi masyarakat.
                </p>

            </div>


            <!-- INSTAGRAM PROFILE BUTTON -->

            <a href="https://www.instagram.com/USERNAME_INSTAGRAM/"
               target="_blank"
               rel="noopener noreferrer"
               class="activities-instagram-button">

                <span class="activities-instagram-icon">
                    <i class="fa-brands fa-instagram"></i>
                </span>

                <span class="activities-instagram-text">
                    <small>IKUTI AKTIVITAS KAMI</small>

                    <strong>@jamkridantbsyariah</strong>
                </span>

                <i class="fa-solid fa-arrow-up-right-from-square"></i>

            </a>

        </div>


        <!-- =========================
             KEGIATAN GRID
        ========================== -->

        <div class="activities-grid">


            <!-- =================================
                 KEGIATAN 01
            ================================== -->

            <article class="activity-card activity-card-featured activity-reveal">

                <!-- FOTO + LINK INSTAGRAM -->

                <a href="https://www.instagram.com/p/LINK_POSTINGAN_1/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="activity-image-link">

                    <div class="activity-image">

                        <img src="{{ asset('images/kegiatan1.jpeg') }}"
                             alt="Kegiatan PT. Jamkrida NTB Syariah"
                             loading="lazy">


                        <!-- DARK OVERLAY -->

                        <div class="activity-image-shade"></div>


                        <!-- INSTAGRAM HEADER -->

                        <div class="activity-top">

                            <div class="activity-profile">

                                <div class="activity-avatar">

                                    <img src="{{ asset('images/logo.png') }}"
                                         alt="Logo Jamkrida NTB Syariah">

                                </div>

                                <div>

                                    <strong>jamkridantbsyariah</strong>

                                    <span>
                                        PT. Jamkrida NTB Syariah
                                    </span>

                                </div>

                            </div>


                            <span class="activity-ig">

                                <i class="fa-brands fa-instagram"></i>

                            </span>

                        </div>


                        <!-- HOVER BUTTON -->

                        <div class="activity-open">

                            <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            <span>
                                Lihat Postingan
                            </span>

                        </div>


                        <!-- DATE -->

                        <div class="activity-date">

                            <i class="fa-regular fa-calendar"></i>

                            24 APRIL 2026

                        </div>

                    </div>

                </a>


                <!-- CONTENT -->

                <div class="activity-content">

                    <div class="activity-meta">

                        <span>
                            <i class="fa-regular fa-clock"></i>
                            24 April 2026
                        </span>

                        <span class="activity-status">

                            <i class="fa-solid fa-circle-check"></i>

                            Official

                        </span>

                    </div>


                    <h3>
                        Sinergi dan Kolaborasi dalam Mendukung
                        Pertumbuhan Ekonomi Daerah
                    </h3>


                    <p>
                        Dokumentasi kegiatan PT. Jamkrida NTB Syariah bersama
                        mitra dan stakeholder dalam memperkuat sinergi
                        penjaminan syariah.
                    </p>


                    <!-- BOTTOM -->

                    <div class="activity-bottom">

                        <div class="activity-stats">

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                1.245 views
                            </span>

                            <span>
                                <i class="fa-regular fa-heart"></i>
                                87 likes
                            </span>

                        </div>


                        <a href="https://www.instagram.com/p/LINK_POSTINGAN_1/"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="activity-link">

                            Instagram

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </article>



            <!-- =================================
                 KEGIATAN 02
            ================================== -->

            <article class="activity-card activity-reveal activity-delay-1">

                <a href="https://www.instagram.com/p/LINK_POSTINGAN_2/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="activity-image-link">

                    <div class="activity-image">

                        <img src="{{ asset('images/kegiatan2.jpeg') }}"
                             alt="Kegiatan PT. Jamkrida NTB Syariah"
                             loading="lazy">


                        <div class="activity-image-shade"></div>


                        <div class="activity-top">

                            <div class="activity-profile">

                                <div class="activity-avatar">

                                    <img src="{{ asset('images/logo.png') }}"
                                         alt="Logo Jamkrida NTB Syariah">

                                </div>

                                <div>

                                    <strong>jamkridantbsyariah</strong>

                                    <span>
                                        PT. Jamkrida NTB Syariah
                                    </span>

                                </div>

                            </div>


                            <span class="activity-ig">

                                <i class="fa-brands fa-instagram"></i>

                            </span>

                        </div>


                        <div class="activity-open">

                            <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            <span>
                                Lihat Postingan
                            </span>

                        </div>


                        <div class="activity-date">

                            <i class="fa-regular fa-calendar"></i>

                            18 APRIL 2026

                        </div>

                    </div>

                </a>


                <div class="activity-content">

                    <div class="activity-meta">

                        <span>
                            <i class="fa-regular fa-clock"></i>
                            18 April 2026
                        </span>

                        <span class="activity-status">

                            <i class="fa-solid fa-circle-check"></i>

                            Official

                        </span>

                    </div>


                    <h3>
                        Forum Komunikasi dan Silaturahmi
                        Bersama Mitra
                    </h3>


                    <p>
                        Kegiatan silaturahmi dan komunikasi sebagai bagian
                        dari penguatan hubungan bersama mitra
                        Jamkrida NTB Syariah.
                    </p>


                    <div class="activity-bottom">

                        <div class="activity-stats">

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                986 views
                            </span>

                            <span>
                                <i class="fa-regular fa-heart"></i>
                                64 likes
                            </span>

                        </div>


                        <a href="https://www.instagram.com/p/LINK_POSTINGAN_2/"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="activity-link">

                            Instagram

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </article>



            <!-- =================================
                 KEGIATAN 03
            ================================== -->

            <article class="activity-card activity-reveal activity-delay-2">

                <a href="https://www.instagram.com/p/LINK_POSTINGAN_3/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="activity-image-link">

                    <div class="activity-image">

                        <img src="{{ asset('images/kegiatan3.jpeg') }}"
                             alt="Kegiatan PT. Jamkrida NTB Syariah"
                             loading="lazy">


                        <div class="activity-image-shade"></div>


                        <div class="activity-top">

                            <div class="activity-profile">

                                <div class="activity-avatar">

                                    <img src="{{ asset('images/logo.png') }}"
                                         alt="Logo Jamkrida NTB Syariah">

                                </div>

                                <div>

                                    <strong>jamkridantbsyariah</strong>

                                    <span>
                                        PT. Jamkrida NTB Syariah
                                    </span>

                                </div>

                            </div>


                            <span class="activity-ig">

                                <i class="fa-brands fa-instagram"></i>

                            </span>

                        </div>


                        <div class="activity-open">

                            <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            <span>
                                Lihat Postingan
                            </span>

                        </div>


                        <div class="activity-date">

                            <i class="fa-regular fa-calendar"></i>

                            10 APRIL 2026

                        </div>

                    </div>

                </a>


                <div class="activity-content">

                    <div class="activity-meta">

                        <span>
                            <i class="fa-regular fa-clock"></i>
                            10 April 2026
                        </span>

                        <span class="activity-status">

                            <i class="fa-solid fa-circle-check"></i>

                            Official

                        </span>

                    </div>


                    <h3>
                        Penandatanganan Perjanjian Kerja Sama
                        dengan Mitra Strategis
                    </h3>


                    <p>
                        Momentum kolaborasi untuk memperluas manfaat layanan
                        penjaminan dan memperkuat ekosistem usaha di NTB.
                    </p>


                    <div class="activity-bottom">

                        <div class="activity-stats">

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                1.532 views
                            </span>

                            <span>
                                <i class="fa-regular fa-heart"></i>
                                102 likes
                            </span>

                        </div>


                        <a href="https://www.instagram.com/p/LINK_POSTINGAN_3/"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="activity-link">

                            Instagram

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </article>

        </div>


        <!-- =========================
             FOOTER SECTION
        ========================== -->

        <div class="activities-footer activity-reveal">

            <div class="activities-footer-line"></div>


            <a href="https://www.instagram.com/USERNAME_INSTAGRAM/"
               target="_blank"
               rel="noopener noreferrer"
               class="activities-all-button">

                <span class="activities-all-icon">

                    <i class="fa-brands fa-instagram"></i>

                </span>

                <span>

                    <small>
                        LEBIH BANYAK KEGIATAN
                    </small>

                    <strong>
                        Lihat Instagram Kami
                    </strong>

                </span>

                <i class="fa-solid fa-arrow-right"></i>

            </a>


            <div class="activities-footer-line"></div>

        </div>

    </div>

</section>


<!-- =====================================================
     MITRA
===================================================== -->

<section class="partner-section">

    <div class="container">

        <div class="partner-heading">

            <span class="partner-eyebrow">
                MITRA KAMI
            </span>

            <h2>
                Bersama Membangun Kepercayaan
            </h2>

            <p>
                Bersinergi bersama mitra terpercaya untuk memperkuat
                layanan penjaminan dan membangun pertumbuhan yang berkelanjutan.
            </p>

        </div>

    </div>


<div class="partner-marquee">

    <div class="partner-fade partner-fade-left"></div>
    <div class="partner-fade partner-fade-right"></div>

    <div class="partner-track">

        @forelse($mitras as $mitra)

            @if($mitra->status === 'aktif')

                <div class="partner-item">

                    <div class="partner-logo">

                        <img
                            src="{{ asset('storage/' . $mitra->logo) }}"
                            alt="{{ $mitra->nama_mitra }}"
                        >

                    </div>

                </div>

            @endif

        @empty

            {{-- Tidak ada mitra aktif --}}

        @endforelse

    </div>

</div>

</section>

<!-- =====================================================
     LAPORAN
===================================================== -->

<!-- <section class="section" id="laporan">

    <div class="container">

        <div class="section-heading">

            <div>

                <div class="section-label">

                    <span>03</span>

                    TRANSPARANSI

                </div>

                <h2>

                    Informasi dan

                    <span>laporan perusahaan.</span>

                </h2>

            </div>


            <a href="#" class="outline-button">

                Lihat Semua

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>


        <div class="report-grid">


            <article class="report-card">

                <div class="document-icon">

                    <i class="fa-regular fa-file-pdf"></i>

                </div>

                <div>

                    <small>Dokumen</small>

                    <h3>Laporan Tahunan</h3>

                    <span>Informasi kinerja perusahaan</span>

                </div>

                <a href="#">
                    <i class="fa-solid fa-download"></i>
                </a>

            </article>


            <article class="report-card">

                <div class="document-icon">

                    <i class="fa-regular fa-file-lines"></i>

                </div>

                <div>

                    <small>Dokumen</small>

                    <h3>Laporan Keuangan</h3>

                    <span>Informasi keuangan perusahaan</span>

                </div>

                <a href="#">
                    <i class="fa-solid fa-download"></i>
                </a>

            </article>


            <article class="report-card">

                <div class="document-icon">

                    <i class="fa-solid fa-scale-balanced"></i>

                </div>

                <div>

                    <small>Dokumen</small>

                    <h3>Laporan GCG</h3>

                    <span>Tata kelola perusahaan</span>

                </div>

                <a href="#">
                    <i class="fa-solid fa-download"></i>
                </a>

            </article>

        </div>

    </div>

</section> -->



<!-- =====================================================
     MANAJEMEN
===================================================== -->

<!-- <section class="section governance-section" id="manajemen">

    <div class="container governance">

        <div>

            <div class="section-label">

                <span>04</span>

                TATA KELOLA

            </div>


            <h2>

                Dikelola dengan

                <span>integritas.</span>

            </h2>


            <p>

                Komitmen terhadap tata kelola perusahaan
                yang baik menjadi fondasi dalam setiap
                keputusan dan layanan Jamkrida NTB Syariah.

            </p>


            <a href="#" class="btn btn-dark">

                Lihat Manajemen

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>


        <div class="governance-visual">

            <div class="orbit"></div>

            <div class="orbit-center">

                <i class="fa-solid fa-shield-halved"></i>

                <strong>GCG</strong>

            </div>


            <div class="orbit-item item-one">

                <i class="fa-solid fa-scale-balanced"></i>

                <span>Integrity</span>

            </div>


            <div class="orbit-item item-two">

                <i class="fa-solid fa-eye"></i>

                <span>Transparency</span>

            </div>


            <div class="orbit-item item-three">

                <i class="fa-solid fa-people-group"></i>

                <span>Responsibility</span>

            </div>

        </div>

    </div>

</section> -->



<!-- =====================================================
     PPID + PENGADUAN
===================================================== -->

<!-- <section class="section">

    <div class="container information-grid">


        <div class="information-card ppid" id="ppid">

            <div class="info-icon">

                <i class="fa-solid fa-circle-info"></i>

            </div>


            <div class="section-label">

                <span>05</span>

                PPID

            </div>


            <h2>

                Akses informasi publik dengan

                <span>mudah.</span>

            </h2>


            <p>

                Temukan informasi publik, prosedur
                permohonan informasi, dan layanan PPID
                Jamkrida NTB Syariah.

            </p>


            <a href="#" class="text-link">

                Kunjungi PPID

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>



        <div class="information-card complaint" id="pengaduan">

            <div class="info-icon">

                <i class="fa-solid fa-headset"></i>

            </div>


            <div class="section-label">

                <span>06</span>

                PENGADUAN

            </div>


            <h2>

                Suara Anda

                <span>berarti.</span>

            </h2>


            <p>

                Sampaikan pertanyaan, masukan,
                atau pengaduan melalui kanal
                layanan kami.

            </p>


            <a href="#" class="btn btn-gold">

                Sampaikan Pengaduan

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section> -->



<!-- =====================================================
     CTA
===================================================== -->

<!-- <section class="cta" id="kontak">

    <div class="container cta-content">

        <div>

            <small>HUBUNGI KAMI</small>

            <h2>

                Siap tumbuh bersama

                <span>Jamkrida NTB Syariah?</span>

            </h2>

        </div>


        <a href="#" class="btn btn-white">

            Hubungi Kami

            <i class="fa-solid fa-arrow-right"></i>

        </a>

    </div>

</section> -->


<!-- =====================================================
     MAPS
===================================================== -->

<section class="location-page">

    <!-- HERO -->
    <div class="location-hero">

        <div class="location-hero-pattern"></div>

        <div class="container">

            <div class="location-hero-content">

                <div class="location-badge">
                    <span>✦</span>
                    LOKASI KAMI
                    <span>✦</span>
                </div>

                <h1>
                    Visit Our
                    <span>Office</span>
                </h1>

                <p>
                    Hadir lebih dekat untuk membangun kepercayaan,
                    memberikan solusi penjaminan, dan tumbuh bersama
                    masyarakat NTB.
                </p>

                <div class="location-islamic">

                    <span class="location-islamic-line"></span>

                    <span>
                        Amanah • Profesional • Berkah
                    </span>

                    <span class="location-islamic-line"></span>

                </div>

            </div>

        </div>

        <div class="location-hero-bottom"></div>

    </div>


    <!-- OFFICE EXPERIENCE -->
    <section class="office-experience">

        <div class="container">

            <div class="office-grid">


                <!-- FOTO / VISUAL KANTOR -->
                <div class="office-visual">
                   

                    <div class="office-frame">

                        <div class="office-image-placeholder">
                            <img src="{{ asset('images/1.png') }}" 
                            alt="Kantor PT. Jamkrida NTB Syariah">

                            <!-- <div class="office-image-content">

                                <span class="office-icon">
                                    <i class="fa-solid fa-building"></i>
                                </span>

                                <strong>
                                    PT. Jamkrida NTB Syariah
                                </strong>

                                <small>
                                    Kantor Utama
                                </small>

                            </div> -->

                        </div>

                        <div class="office-gold-frame"></div>

                    </div>

                    <div class="office-stamp">
                        <span>NTB</span>
                        <small>INDONESIA</small>
                    </div>

                </div>


                <!-- INFORMASI -->
                <div class="office-info">

                    <span class="section-mini-title">
                        OUR OFFICE
                    </span>

                    <h2>
                        Tempat Kami
                        <span>Melayani Anda</span>
                    </h2>

                    <p class="office-description">
                        Kunjungi kantor PT. Jamkrida NTB Syariah
                        untuk mendapatkan informasi dan layanan
                        penjaminan yang kami sediakan.
                    </p>


                    <!-- ALAMAT -->
                    <div class="office-detail">

                        <div class="office-detail-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <strong>Alamat Kantor</strong>

                            <p>
                                Jl. Catur Warga No.5, Mataram Tim., Kec. Mataram, Kota Mataram, Nusa Tenggara Barat. 83125
                            </p>
                        </div>

                    </div>


                    <!-- TELEPON -->
                    <div class="office-detail">

                        <div class="office-detail-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div>
                            <strong>Telepon</strong>

                            <p>
                                (0370)-639304, 639305
                            </p>
                        </div>

                    </div>


                    <!-- EMAIL -->
                    <div class="office-detail">

                        <div class="office-detail-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <strong>Email</strong>

                            <p>
                                admin@jamkridantbsyariah.co.id
                            </p>
                        </div>

                    </div>


                    <!-- TOMBOL -->
                    <a
                        href="https://maps.app.goo.gl/qc7pywmo1KZ43Jia6"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="location-map-button"
                    >

                        <span>
                            <i class="fa-solid fa-diamond-turn-right"></i>
                        </span>

                        <div>
                            <strong>Buka Google Maps</strong>
                            <small>Lihat rute menuju kantor</small>
                        </div>

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- MAP -->
    <section class="location-map-section">

        <div class="container">

            <div class="location-map-heading">

                <div>

                    <span class="section-mini-title">
                        FIND US
                    </span>

                    <h2>
                        Temukan Lokasi
                        <span>Kami</span>
                    </h2>

                </div>

                <p>
                    Klik peta untuk membuka lokasi kantor
                    secara langsung di Google Maps.
                </p>

            </div>


            <div
                class="location-map-card"
                onclick="openGoogleMaps()"
                role="button"
                tabindex="0"
                aria-label="Buka lokasi kantor di Google Maps"
            >

                <!--
                    GANTI URL GOOGLE MAPS DI JAVASCRIPT
                    DENGAN LINK LOKASI KANTOR SEBENARNYA
                -->

                <div class="map-overlay">

                    <div class="map-pin">

                        <div class="map-pin-pulse"></div>

                        <div class="map-pin-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                    </div>

                    <div class="map-location-label">

                        <span>
                            LOKASI KANTOR
                        </span>

                        <strong>
                            PT. Jamkrida NTB Syariah
                        </strong>

                        <small>
                            Klik untuk membuka Google Maps
                        </small>

                    </div>

                </div>


                <div class="map-decoration map-decoration-1"></div>
                <div class="map-decoration map-decoration-2"></div>
                <div class="map-decoration map-decoration-3"></div>


                <div class="map-click">

                    <i class="fa-solid fa-arrow-up-right-from-square"></i>

                    <span>
                        Buka di Google Maps
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- SYARIAH MESSAGE -->
    <!-- <section class="location-values">

        <div class="container">

            <div class="location-values-inner">

                <div class="values-symbol">
                    ✦
                </div>

                <div class="values-content">

                    <span>
                        NILAI KAMI
                    </span>

                    <h2>
                        Amanah dalam Setiap
                        <span>Langkah</span>
                    </h2>

                    <p>
                        Dengan menjunjung prinsip syariah,
                        kami berkomitmen memberikan pelayanan
                        yang transparan, profesional, dan
                        berorientasi pada kemaslahatan.
                    </p>

                </div>

                <div class="values-arabic">
                    اَلْأَمَانَة
                    <small>
                        Al-Amanah
                    </small>
                </div>

            </div>

        </div>

    </section> -->

</section>

@endsection