@extends('layouts.main')

@section('title', 'Karir | PT Jamkrida NTB Syariah')

@section('content')

<style>
    .career-premium {
        --cp-green: #087a4b;
        --cp-dark: #042f22;
        --cp-deep: #021e16;
        --cp-gold: #d5a83a;
        --cp-gold-light: #f2d47c;
        --cp-cream: #f7f8f4;
        --cp-text: #263b30;
        --cp-muted: #718078;

        color: var(--cp-text);
        background: #fff;
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
    }

    .career-premium *,
    .career-premium *::before,
    .career-premium *::after {
        box-sizing: border-box;
    }

    .cp-container {
        width: min(1180px, 90%);
        margin: 0 auto;
    }

    /* HERO */
    .cp-hero {
        position: relative;
        isolation: isolate;
        overflow: hidden;
        padding: 92px 0 85px;
        color: #fff;
        background:
            radial-gradient(ellipse at 90% 10%, rgba(213, 168, 58, .18), transparent 35%),
            radial-gradient(ellipse at 5% 100%, rgba(8, 122, 75, .65), transparent 45%),
            linear-gradient(125deg, #021e16 0%, #063d2a 52%, #087a4b 100%);
    }

    .cp-hero::before {
        content: "";
        position: absolute;
        z-index: -1;
        width: 500px;
        height: 500px;
        right: -150px;
        top: -210px;
        border: 1px solid rgba(242, 212, 124, .28);
        border-radius: 50%;
        box-shadow:
            0 0 0 35px rgba(242, 212, 124, .035),
            0 0 0 75px rgba(242, 212, 124, .025),
            0 0 0 120px rgba(242, 212, 124, .018);
        pointer-events: none;
    }

    .cp-hero::after {
        content: "";
        position: absolute;
        z-index: -1;
        width: 240px;
        height: 240px;
        right: 13%;
        bottom: -175px;
        border: 1px solid rgba(242, 212, 124, .35);
        border-radius: 50%;
        box-shadow: 0 0 0 25px rgba(242, 212, 124, .035);
        pointer-events: none;
    }

    .cp-hero-content {
        position: relative;
        max-width: 790px;
    }

    .cp-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 24px;
        color: var(--cp-gold-light);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 2.3px;
        text-transform: uppercase;
    }

    .cp-eyebrow::before {
        content: "";
        width: 35px;
        height: 2px;
        background: var(--cp-gold);
    }

    .cp-hero h1 {
        max-width: 750px;
        margin: 0;
        color: #fff;
        font-family: Georgia, 'Times New Roman', serif;
        font-size: clamp(40px, 5.5vw, 70px);
        font-weight: 500;
        letter-spacing: -1.8px;
        line-height: 1.12;
    }

    .cp-hero h1 span {
        color: var(--cp-gold-light);
        font-style: italic;
    }

    .cp-hero-description {
        max-width: 570px;
        margin: 23px 0 30px;
        color: rgba(255, 255, 255, .78);
        font-size: 14px;
        line-height: 1.95;
    }

    .cp-hero-actions {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 13px;
    }

    .cp-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        min-height: 45px;
        padding: 12px 20px;
        border: 1px solid transparent;
        font-family: inherit;
        font-size: 12px;
        font-weight: 700;
        text-decoration: none !important;
        transition: all .25s ease;
        cursor: pointer;
    }

    .cp-button-primary {
        color: var(--cp-deep) !important;
        background: var(--cp-gold-light);
        border-color: var(--cp-gold-light);
    }

    .cp-button-primary:hover {
        color: var(--cp-deep) !important;
        background: #fff;
        border-color: #fff;
        transform: translateY(-2px);
    }

    .cp-button-outline {
        color: #fff !important;
        background: rgba(255, 255, 255, .035);
        border-color: rgba(242, 212, 124, .55);
    }

    .cp-button-outline:hover {
        color: var(--cp-gold-light) !important;
        background: rgba(255, 255, 255, .08);
        border-color: var(--cp-gold-light);
    }

    .cp-hero-note {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 38px;
        color: rgba(255, 255, 255, .68);
        font-size: 11px;
    }

    .cp-hero-note i {
        color: var(--cp-gold-light);
    }

    .cp-hero-note strong {
        color: #fff;
        font-weight: 600;
    }

    /* OVERVIEW */
    .cp-overview {
        position: relative;
        z-index: 2;
        margin-top: -1px;
        background: var(--cp-cream);
        border-bottom: 1px solid #e9ede7;
    }

    .cp-overview-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        border-left: 1px solid #e3e9e2;
    }

    .cp-overview-item {
        display: flex;
        align-items: center;
        gap: 16px;
        min-height: 105px;
        padding: 20px 28px;
        border-right: 1px solid #e3e9e2;
    }

    .cp-overview-icon {
        display: flex;
        flex: 0 0 45px;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        color: var(--cp-green);
        background: #e7f0e8;
        font-size: 17px;
    }

    .cp-overview-item strong {
        display: block;
        margin-bottom: 5px;
        color: var(--cp-dark);
        font-size: 13px;
    }

    .cp-overview-item span {
        display: block;
        color: var(--cp-muted);
        font-size: 11px;
        line-height: 1.7;
    }

    /* JOB SECTION */
    .cp-jobs-section {
        padding: 78px 0 85px;
        background: #fff;
    }

    .cp-section-heading {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 25px;
        margin-bottom: 32px;
    }

    .cp-section-kicker {
        display: block;
        margin-bottom: 12px;
        color: var(--cp-green);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .cp-section-heading h2 {
        margin: 0;
        color: var(--cp-dark);
        font-family: Georgia, 'Times New Roman', serif;
        font-size: clamp(30px, 4vw, 43px);
        font-weight: 500;
        letter-spacing: -.8px;
        line-height: 1.2;
    }

    .cp-section-heading h2 span {
        color: var(--cp-green);
        font-style: italic;
    }

    .cp-section-subtitle {
        max-width: 500px;
        margin: 12px 0 0;
        color: var(--cp-muted);
        font-size: 12px;
        line-height: 1.9;
    }

    .cp-heading-right {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
    }

    .cp-job-count {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 12px 15px;
        color: var(--cp-green);
        background: #eff6f0;
        border: 1px solid #dceade;
        font-size: 11px;
        font-weight: 700;
        white-space: nowrap;
    }

    .cp-archive-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        min-height: 43px;
        padding: 11px 16px;
        color: var(--cp-dark) !important;
        background: #fff;
        border: 1px solid #dce5dd;
        font-size: 11px;
        font-weight: 700;
        text-decoration: none !important;
        transition: all .25s ease;
    }

    .cp-archive-link:hover {
        color: #fff !important;
        background: var(--cp-dark);
        border-color: var(--cp-dark);
    }

    /* SEARCH */
    .cp-search-bar {
        display: flex;
        align-items: center;
        gap: 13px;
        width: 100%;
        margin-bottom: 28px;
        padding: 0 18px;
        background: #fafbf9;
        border: 1px solid #e5eae5;
        transition: border-color .2s ease;
    }

    .cp-search-bar:focus-within {
        border-color: var(--cp-green);
    }

    .cp-search-bar i {
        color: var(--cp-green);
        font-size: 14px;
    }

    .cp-search-bar input {
        width: 100%;
        height: 53px;
        padding: 0;
        color: var(--cp-text);
        background: transparent;
        border: none;
        outline: none;
        font-family: inherit;
        font-size: 12px;
    }

    .cp-search-bar input::placeholder {
        color: #97a199;
    }

    /* JOB CARDS - MENYERUPAI HALAMAN ARSIP */
    .cp-job-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        align-items: stretch;
        gap: 24px;
    }

    .cp-job-card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        overflow: hidden;
        background: #fff;
        border: 1px solid #e3c77c;
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .cp-job-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 32px rgba(4, 47, 34, .10);
    }

    /* Banner gambar memenuhi bagian atas kartu */
    .cp-job-banner {
        position: relative;
        width: 100%;
        height: 230px;
        min-height: 180px;
        overflow: hidden;
        background: #edf2ed;
        border-bottom: 1px solid #e9eee9;
    }

    .cp-job-banner img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform .4s ease;
    }

    .cp-job-card:hover .cp-job-banner img {
        transform: scale(1.025);
    }

    /* Tampilan cadangan jika lowongan tidak memiliki banner */
    .cp-job-banner-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 230px;
        color: var(--cp-green);
        background:
            radial-gradient(circle at 80% 20%, rgba(213, 168, 58, .15), transparent 35%),
            linear-gradient(135deg, #f2f6f1, #e4eee5);
        border-bottom: 1px solid #e9eee9;
    }

    .cp-job-banner-placeholder i {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 72px;
        height: 72px;
        color: var(--cp-green);
        background: rgba(255, 255, 255, .75);
        border: 1px solid #d8e5d9;
        font-size: 27px;
    }

    .cp-job-content {
        display: flex;
        flex: 1;
        flex-direction: column;
        padding: 23px 20px 19px;
    }

    /* Departemen di atas judul, seperti screenshot arsip */
    .cp-job-department {
        margin: 0 0 10px;
        color: var(--cp-green);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.1px;
        text-transform: uppercase;
        overflow-wrap: anywhere;
    }

    .cp-job-card h3 {
        margin: 0 0 13px;
        color: var(--cp-dark);
        font-family: 'Poppins', sans-serif;
        font-size: 23px;
        font-weight: 700;
        line-height: 1.4;
        overflow-wrap: anywhere;
    }

    .cp-job-description {
        margin: 0 0 18px;
        color: #69776e;
        font-size: 12px;
        line-height: 1.9;
        white-space: pre-line;
        overflow-wrap: anywhere;
    }

    /* Informasi ringkas seperti kartu arsip */
    .cp-job-meta {
        display: flex;
        flex-direction: column;
        gap: 9px;
        margin-top: auto;
        margin-bottom: 17px;
        padding: 15px 0;
        border-top: 1px solid #e9eee9;
        border-bottom: 1px solid #e9eee9;
    }

    .cp-meta-item {
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 0;
    }

    .cp-meta-icon {
        display: flex;
        flex: 0 0 27px;
        align-items: center;
        justify-content: center;
        width: 27px;
        height: 27px;
        color: var(--cp-green);
        background: #eef5ef;
        font-size: 10px;
    }

    .cp-meta-text {
        min-width: 0;
        color: #405046;
        font-size: 11px;
        line-height: 1.7;
        overflow-wrap: anywhere;
    }

    .cp-meta-text small {
        display: none;
    }

    .cp-meta-text strong {
        color: #405046;
        font-size: 11px;
        font-weight: 500;
        line-height: 1.7;
        overflow-wrap: anywhere;
    }

    /* Detail pendaftaran */
    .cp-application-info {
        margin: 0 0 17px;
        padding: 14px;
        background: #f8faf7;
        border-left: 3px solid var(--cp-gold);
    }

    .cp-application-info h4 {
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 0 0 9px;
        color: var(--cp-dark);
        font-size: 11px;
        font-weight: 700;
    }

    .cp-application-info h4 i {
        color: var(--cp-green);
    }

    .cp-application-info p {
        margin: 7px 0 0;
        color: #6d7a71;
        font-size: 11px;
        line-height: 1.8;
        white-space: pre-line;
        overflow-wrap: anywhere;
    }

    .cp-email-button {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-top: 11px;
        color: var(--cp-green) !important;
        font-size: 11px;
        font-weight: 700;
        text-decoration: none !important;
        overflow-wrap: anywhere;
    }

    .cp-email-button:hover {
        color: var(--cp-dark) !important;
    }

    /* Footer kartu */
    .cp-job-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: auto;
        padding-top: 16px;
    }

    .cp-deadline {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        min-width: 0;
        color: #a16d18;
    }

    .cp-deadline > i {
        margin-top: 3px;
    }

    .cp-deadline span {
        display: block;
        color: #89948c;
        font-size: 9px;
    }

    .cp-deadline strong {
        display: block;
        margin-top: 4px;
        color: #3e4c42;
        font-size: 11px;
        font-weight: 600;
        line-height: 1.7;
    }

    .cp-apply-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 41px;
        padding: 11px 13px;
        color: #fff !important;
        background: var(--cp-green);
        border: 1px solid var(--cp-green);
        font-size: 10px;
        font-weight: 700;
        text-align: center;
        text-decoration: none !important;
        transition: all .2s ease;
    }

    .cp-apply-button:hover {
        color: #fff !important;
        background: var(--cp-dark);
        border-color: var(--cp-dark);
    }

    .cp-apply-button-disabled {
        color: #6e7a71 !important;
        background: #eef1ed;
        border-color: #eef1ed;
        cursor: default;
    }

    .cp-apply-button-disabled:hover {
        color: #6e7a71 !important;
        background: #eef1ed;
        border-color: #eef1ed;
    }

    /* EMPTY STATE */
    .cp-empty {
        padding: 55px 25px;
        text-align: center;
        background: #fafbf9;
        border: 1px solid #e5eae5;
    }

    .cp-empty-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 68px;
        height: 68px;
        margin: 0 auto 20px;
        color: var(--cp-green);
        background: #eaf3eb;
        font-size: 25px;
    }

    .cp-empty h3 {
        margin: 0 0 10px;
        color: var(--cp-dark);
        font-family: Georgia, 'Times New Roman', serif;
        font-size: 25px;
        font-weight: 500;
    }

    .cp-empty p {
        max-width: 460px;
        margin: 0 auto;
        color: var(--cp-muted);
        font-size: 12px;
        line-height: 1.9;
    }

    .cp-empty .cp-button {
        margin-top: 22px;
    }

    .cp-no-match {
        display: none;
        padding: 35px 20px;
        color: var(--cp-muted);
        background: #fafbf9;
        border: 1px solid #e5eae5;
        text-align: center;
        font-size: 12px;
    }

    .cp-no-match i {
        display: block;
        margin-bottom: 12px;
        color: var(--cp-green);
        font-size: 25px;
    }

    /* BOTTOM BANNER */
    .cp-bottom-banner {
        position: relative;
        overflow: hidden;
        padding: 40px;
        color: #fff;
        background:
            radial-gradient(ellipse at 100% 0%, rgba(213, 168, 58, .15), transparent 45%),
            linear-gradient(115deg, var(--cp-dark), var(--cp-green));
    }

    .cp-bottom-banner::after {
        content: "";
        position: absolute;
        top: -100px;
        right: -50px;
        width: 260px;
        height: 260px;
        border: 1px solid rgba(242, 212, 124, .2);
        border-radius: 50%;
        box-shadow: 0 0 0 30px rgba(242, 212, 124, .025);
        pointer-events: none;
    }

    .cp-bottom-inner {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;
    }

    .cp-bottom-banner h3 {
        margin: 0 0 9px;
        color: #fff;
        font-family: Georgia, 'Times New Roman', serif;
        font-size: 27px;
        font-weight: 500;
    }

    .cp-bottom-banner p {
        max-width: 590px;
        margin: 0;
        color: rgba(255, 255, 255, .72);
        font-size: 12px;
        line-height: 1.9;
    }

    .cp-bottom-banner .cp-button {
        flex-shrink: 0;
    }

    .cp-bottom-note {
        margin-top: 20px;
        color: #89948c;
        font-size: 10px;
        line-height: 1.8;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .cp-hero {
            padding: 70px 0;
        }

        .cp-overview-item {
            padding: 18px;
        }

        .cp-job-list {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 17px;
        }

        .cp-job-banner,
        .cp-job-banner-placeholder {
            height: 200px;
        }

        .cp-job-content {
            padding: 18px;
        }

        .cp-job-card h3 {
            font-size: 20px;
        }

        .cp-job-footer {
            align-items: stretch;
            flex-direction: column;
        }

        .cp-apply-button {
            width: 100%;
        }

        .cp-bottom-inner {
            align-items: flex-start;
            flex-direction: column;
        }
    }

    @media (max-width: 600px) {
        .cp-container {
            width: 90%;
        }

        .cp-hero {
            padding: 56px 0 52px;
        }

        .cp-hero h1 {
            font-size: clamp(37px, 10vw, 48px);
            letter-spacing: -1px;
        }

        .cp-eyebrow {
            font-size: 9px;
            letter-spacing: 1.5px;
        }

        .cp-hero-description {
            font-size: 12px;
        }

        .cp-hero-actions {
            align-items: stretch;
            flex-direction: column;
        }

        .cp-button {
            width: 100%;
        }

        .cp-hero-note {
            align-items: flex-start;
            line-height: 1.8;
        }

        .cp-overview-grid {
            grid-template-columns: 1fr;
        }

        .cp-overview-item {
            min-height: 82px;
            border-bottom: 1px solid #e3e9e2;
        }

        .cp-jobs-section {
            padding: 53px 0;
        }

        .cp-section-heading {
            align-items: flex-start;
            flex-direction: column;
            gap: 18px;
        }

        .cp-section-heading h2 {
            font-size: 34px;
        }

        .cp-heading-right {
            width: 100%;
            align-items: stretch;
            flex-direction: column;
        }

        .cp-job-count,
        .cp-archive-link {
            justify-content: center;
            width: 100%;
        }

        .cp-job-list {
            grid-template-columns: 1fr;
            gap: 22px;
        }

        .cp-job-banner,
        .cp-job-banner-placeholder {
            height: 225px;
        }

        .cp-job-content {
            padding: 19px;
        }

        .cp-job-card h3 {
            font-size: 21px;
        }

        .cp-job-footer {
            align-items: stretch;
            flex-direction: column;
        }

        .cp-apply-button {
            width: 100%;
            min-height: 43px;
            padding: 12px;
        }

        .cp-bottom-banner {
            padding: 28px 22px;
        }

        .cp-bottom-banner h3 {
            font-size: 24px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .career-premium *,
        .career-premium *::before,
        .career-premium *::after {
            scroll-behavior: auto !important;
            transition: none !important;
        }
    }
</style>

<div class="career-premium">

    {{-- HERO --}}
    <section class="cp-hero">
        <div class="cp-container">
            <div class="cp-hero-content">

                <div class="cp-eyebrow">
                    PT Jamkrida NTB Syariah (Perseroda)
                </div>

                <h1>
                    Bangun Karir.<br>
                    <span>Berikan Dampak.</span>
                </h1>

                <p class="cp-hero-description">
                    Jadilah bagian dari perjalanan kami dalam memperkuat
                    perekonomian daerah. Temukan kesempatan untuk berkembang,
                    berkarya, dan memberikan kontribusi nyata bersama
                    PT Jamkrida NTB Syariah.
                </p>

                <!-- <div class="cp-hero-actions">
                    <a href="#lowongan-tersedia" class="cp-button cp-button-primary">
                        Jelajahi Lowongan
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>

                    <a href="{{ url('/menu/karir/arsip') }}" class="cp-button cp-button-outline">
                        <i class="fa-solid fa-box-archive"></i>
                        Arsip Lowongan
                    </a>
                </div> -->

                <div class="cp-hero-note">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>
                        Informasi rekrutmen resmi dari
                        <strong>PT Jamkrida NTB Syariah</strong>
                    </span>
                </div>

            </div>
        </div>
    </section>

    {{-- OVERVIEW --}}
    <section class="cp-overview">
        <div class="cp-container">
            <div class="cp-overview-grid">

                <div class="cp-overview-item">
                    <div class="cp-overview-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <div>
                        <strong>Kesempatan Karir</strong>
                        <span>Temukan posisi yang sesuai dengan kemampuanmu.</span>
                    </div>
                </div>

                <div class="cp-overview-item">
                    <div class="cp-overview-icon">
                        <i class="fa-solid fa-file-circle-check"></i>
                    </div>
                    <div>
                        <strong>Informasi Transparan</strong>
                        <span>Pelajari persyaratan dan proses pendaftaran.</span>
                    </div>
                </div>

                <div class="cp-overview-item">
                    <div class="cp-overview-icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <div>
                        <strong>Kontribusi Daerah</strong>
                        <span>Tumbuh bersama perusahaan penjaminan daerah.</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- LOWONGAN --}}
    <section class="cp-jobs-section" id="lowongan-tersedia">
        <div class="cp-container">

            <div class="cp-section-heading">
                <div>
                    <span class="cp-section-kicker">Kesempatan Bergabung</span>
                    <h2>Lowongan <span>Tersedia</span></h2>
                    <p class="cp-section-subtitle">
                        Jelajahi informasi posisi yang sedang dibuka dan
                        pelajari detail persyaratannya sebelum mendaftar.
                    </p>
                </div>

                <div class="cp-heading-right">
                    <div class="cp-job-count">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ $lowonganAktif->count() }} Lowongan Aktif
                    </div>

                    <a href="{{ url('/menu/karir/arsip') }}" class="cp-archive-link">
                        <i class="fa-solid fa-box-archive"></i>
                        Lihat Arsip
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            @if($lowonganAktif->isNotEmpty())

                <div class="cp-search-bar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input
                        type="search"
                        id="cpCareerSearch"
                        placeholder="Cari posisi, departemen, atau lokasi..."
                        autocomplete="off"
                        aria-label="Cari lowongan pekerjaan"
                    >
                </div>

                <div class="cp-job-list" id="cpCareerGrid">

                    @foreach($lowonganAktif as $item)

                        <article class="cp-job-card">

                            {{-- GAMBAR KARTU --}}
                            @if($item->banner)
                                <div class="cp-job-banner">
                                    <img
                                        src="{{ asset('storage/' . $item->banner) }}"
                                        alt="Banner lowongan {{ $item->title }}"
                                        loading="lazy"
                                    >
                                </div>
                            @else
                                <div class="cp-job-banner-placeholder">
                                    <i class="fa-solid fa-briefcase"></i>
                                </div>
                            @endif

                            <div class="cp-job-content">

                                {{-- DEPARTEMEN --}}
                                <div class="cp-job-department">
                                    {{ $item->department ?: 'PT Jamkrida NTB Syariah' }}
                                </div>

                                {{-- JUDUL POSISI --}}
                                <h3>{{ $item->title }}</h3>

                                {{-- DESKRIPSI --}}
                                @if($item->description)
                                    <p class="cp-job-description">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($item->description), 180) }}
                                    </p>
                                @else
                                    <p class="cp-job-description">
                                        Informasi rekrutmen untuk posisi {{ $item->title }}
                                        di PT Jamkrida NTB Syariah (Perseroda).
                                        Silakan lihat pengumuman resmi untuk informasi lengkap.
                                    </p>
                                @endif

                                {{-- INFORMASI LOWONGAN --}}
                                <div class="cp-job-meta">

                                    <!-- <div class="cp-meta-item">
                                        <div class="cp-meta-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="cp-meta-text">
                                            <strong>{{ $item->location ?: 'Sesuai pengumuman' }}</strong>
                                        </div>
                                    </div> -->

                                    <div class="cp-meta-item">
                                        <div class="cp-meta-icon">
                                            <i class="fa-solid fa-list"></i>
                                        </div>
                                        <div class="cp-meta-text">
                                            <strong>{{ $item->employment_type ?: 'Sesuai ketentuan' }}</strong>
                                        </div>
                                    </div>

                                    <div class="cp-meta-item">
                                        <div class="cp-meta-icon">
                                            <i class="fa-solid fa-user-tie"></i>
                                        </div>
                                        <div class="cp-meta-text">
                                            <strong>Kebutuhan: {{ $item->vacancy_count }} orang</strong>
                                        </div>
                                    </div>

                                </div>

                                {{-- INFORMASI PENDAFTARAN --}}
                                @if($item->application_email || $item->application_instructions || $item->required_documents)
                                    <div class="cp-application-info">
                                        <h4>
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                            Persyaratan Calon {{ $item->title }}
                                        </h4>

                                        @if($item->application_instructions)
                                            <p>{{ $item->application_instructions }}</p>
                                        @endif

                                        @if($item->required_documents)
                                            <p>
                                                <strong>Dokumen persyaratan:</strong><br>
                                                {{ $item->required_documents }}
                                            </p>
                                        @endif

                                        @if($item->application_email)
                                            <a
                                                class="cp-email-button"
                                                href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to={{ urlencode(trim($item->application_email)) }}&amp;su={{ urlencode('Lamaran Kerja - ' . $item->title) }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                            >
                                                <i class="fa-solid fa-paper-plane"></i>
                                                Kirim Lamaran via Email
                                            </a>
                                        @endif
                                    </div>
                                @endif

                                {{-- BATAS PENDAFTARAN DAN TOMBOL --}}
                                <div class="cp-job-footer">

                                    <div class="cp-deadline">
                                        <i class="fa-regular fa-calendar"></i>
                                        <div>
                                            <span>Batas pendaftaran</span>
                                            <strong>
                                                @if($item->deadline)
                                                    {{ \Illuminate\Support\Carbon::parse($item->deadline)->translatedFormat('d/m/Y') }}
                                                @else
                                                    Lihat pengumuman
                                                @endif
                                            </strong>
                                        </div>
                                    </div>

                                    @if($item->announcement_pdf)
                                        <a
                                            href="{{ asset('storage/' . $item->announcement_pdf) }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="cp-apply-button"
                                        >
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            Lihat Pengumuman
                                        </a>
                                    @elseif($item->application_url)
                                        <a
                                            href="{{ $item->application_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="cp-apply-button"
                                        >
                                            <i class="fa-solid fa-arrow-right"></i>
                                            Daftar Sekarang
                                        </a>
                                    @else
                                        <span class="cp-apply-button cp-apply-button-disabled">
                                            Informasi Pendaftaran
                                        </span>
                                    @endif

                                </div>

                            </div>
                        </article>

                    @endforeach

                </div>

                <div class="cp-no-match" id="cpCareerNoMatch">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Tidak ada lowongan yang cocok dengan pencarianmu.
                </div>

            @else

                <div class="cp-empty">
                    <div class="cp-empty-icon">
                        <i class="fa-regular fa-folder-open"></i>
                    </div>

                    <h3>Belum Ada Lowongan Aktif</h3>

                    <p>
                        Saat ini belum ada posisi yang dibuka.
                        Silakan kunjungi halaman arsip untuk melihat informasi
                        lowongan sebelumnya.
                    </p>

                    <a
                        href="{{ url('/menu/karir/arsip') }}"
                        class="cp-button cp-button-primary"
                    >
                        <i class="fa-solid fa-box-archive"></i>
                        Jelajahi Arsip Lowongan
                    </a>
                </div>

            @endif

            {{-- BOTTOM CTA --}}
            <div class="cp-bottom-banner" style="margin-top: 45px;">
                <div class="cp-bottom-inner">
                    <div>
                        <h3>Langkah Berikutnya Dimulai di Sini.</h3>
                        <p>
                            Periksa kembali informasi lowongan dan siapkan
                            dokumen persyaratan sebelum mengajukan lamaran.
                            Pastikan kamu mengikuti ketentuan pada pengumuman resmi.
                        </p>
                    </div>

                    <!-- <a
                        href="{{ url('/menu/karir/arsip') }}"
                        class="cp-button cp-button-primary"
                    >
                        <i class="fa-solid fa-box-archive"></i>
                        Buka Arsip
                    </a> -->
                </div>
            </div>

            <div class="cp-bottom-note">
                Informasi lowongan mengikuti pengumuman resmi
                PT Jamkrida NTB Syariah (Perseroda).
            </div>

        </div>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('cpCareerSearch');
    const grid = document.getElementById('cpCareerGrid');
    const noMatch = document.getElementById('cpCareerNoMatch');

    if (!searchInput || !grid) {
        return;
    }

    const cards = Array.from(grid.querySelectorAll('.cp-job-card'));

    searchInput.addEventListener('input', function () {
        const keyword = this.value.trim().toLocaleLowerCase();
        let visible = 0;

        cards.forEach(function (card) {
            const text = card.textContent.toLocaleLowerCase();
            const matched = text.includes(keyword);

            card.style.display = matched ? '' : 'none';

            if (matched) {
                visible++;
            }
        });

        if (noMatch) {
            noMatch.style.display =
                keyword !== '' && visible === 0 ? 'block' : 'none';
        }

        grid.style.display =
            keyword !== '' && visible === 0 ? 'none' : '';
    });
});
</script>

@endsection