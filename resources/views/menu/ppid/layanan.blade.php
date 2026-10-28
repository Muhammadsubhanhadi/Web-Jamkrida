
@extends('layouts.main')

@section('title', 'Layanan Pusat Informasi')

@section('content')

<style>
    .ppid-service-page {
        --ps-green: #087a4b;
        --ps-dark: #063d2a;
        --ps-deep: #03281d;
        --ps-gold: #d5a83a;
        --ps-gold-light: #f2d47c;
        --ps-text: #26352e;
        --ps-muted: #6c7b72;
        --ps-border: #e1e9e4;
        --ps-bg: #f6f9f6;

        position: relative;
        overflow: hidden;
        padding: 65px 0 85px;
        background:
            radial-gradient(circle at 5% 5%, rgba(8,122,75,.055), transparent 25%),
            radial-gradient(circle at 95% 80%, rgba(213,168,58,.07), transparent 25%),
            #fff;
        color: var(--ps-text);
        font-family: 'Poppins', sans-serif;
    }

    .ppid-service-page *,
    .ppid-service-page *::before,
    .ppid-service-page *::after {
        box-sizing: border-box;
    }

    .ppid-service-container {
        width: 85%;
        max-width: 1320px;
        margin: 0 auto;
    }

    /* HERO */
    .ps-hero {
        position: relative;
        overflow: hidden;
        isolation: isolate;
        padding: 45px 42px;
        margin-bottom: 38px;
        border-radius: 8px;
        background: linear-gradient(120deg, var(--ps-deep), var(--ps-green));
        box-shadow: 0 16px 38px rgba(3,40,29,.13);
    }

    .ps-hero::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        right: -90px;
        top: -170px;
        border: 1px solid rgba(242,212,124,.27);
        border-radius: 50%;
        box-shadow:
            0 0 0 25px rgba(242,212,124,.035),
            0 0 0 55px rgba(242,212,124,.025);
        z-index: -1;
        pointer-events: none;
    }

    .ps-hero::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        right: 120px;
        bottom: -145px;
        border: 1px solid rgba(255,255,255,.12);
        border-radius: 50%;
        z-index: -1;
        pointer-events: none;
    }

    .ps-hero-label {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 13px;
        margin-bottom: 17px;
        border: 1px solid rgba(242,212,124,.38);
        background: rgba(255,255,255,.07);
        color: var(--ps-gold-light);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .ps-hero-label i {
        font-size: 13px;
    }

    .ps-hero h1 {
        max-width: 800px;
        margin: 0 0 14px;
        color: #fff;
        font-size: clamp(27px, 3.3vw, 42px);
        font-weight: 750;
        line-height: 1.3;
        letter-spacing: -.7px;
    }

    .ps-hero h1 span {
        color: var(--ps-gold-light);
    }

    .ps-hero p {
        max-width: 720px;
        margin: 0;
        color: rgba(255,255,255,.82);
        font-size: 14px;
        line-height: 1.9;
    }

    .ps-breadcrumb {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 24px;
        color: rgba(255,255,255,.65);
        font-size: 12px;
    }

    .ps-breadcrumb a {
        color: var(--ps-gold-light);
        text-decoration: none;
        transition: color .25s;
    }

    .ps-breadcrumb a:hover {
        color: #fff;
    }

    .ps-breadcrumb i {
        font-size: 9px;
    }

    /* MAIN LAYOUT */
    .ps-layout {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 310px;
        align-items: start;
        gap: 28px;
    }

    .ps-main-card {
        min-width: 0;
        padding: 35px;
        border: 1px solid var(--ps-border);
        background: #fff;
        box-shadow: 0 10px 32px rgba(13,49,31,.045);
    }

    .ps-section-label {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
        color: var(--ps-green);
        font-size: 11px;
        font-weight: 750;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .ps-section-label::before {
        content: "";
        display: block;
        width: 27px;
        height: 3px;
        flex-shrink: 0;
        background: var(--ps-gold);
    }

    .ps-main-card h2 {
        margin: 0 0 18px;
        color: var(--ps-dark);
        font-size: clamp(23px, 2.5vw, 30px);
        font-weight: 750;
        line-height: 1.4;
    }

    .ps-main-card h3 {
        margin: 0 0 13px;
        color: var(--ps-dark);
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
    }

    .ps-main-card p {
        color: var(--ps-muted);
        font-size: 13.5px;
        line-height: 1.95;
    }

    .ps-intro {
        margin: 0 0 27px;
    }

    .ps-intro strong {
        color: var(--ps-dark);
    }

    /* PROCESS FLOW */
    .ps-process {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 13px;
        margin: 28px 0 35px;
    }

    .ps-process-item {
        position: relative;
        display: grid;
        grid-template-columns: 42px minmax(0, 1fr);
        align-items: start;
        gap: 13px;
        min-width: 0;
        padding: 23px 16px 20px;
        border: 1px solid var(--ps-border);
        background: linear-gradient(145deg, #fff, #f8fbf8);
        transition: transform .25s, border-color .25s, box-shadow .25s;
    }

    .ps-process-item:hover {
        transform: translateY(-4px);
        border-color: rgba(8,122,75,.3);
        box-shadow: 0 12px 25px rgba(8,122,75,.08);
    }

    .ps-process-number {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        background: var(--ps-dark);
        color: var(--ps-gold-light);
        font-size: 16px;
        font-weight: 750;
    }

    .ps-process-item:nth-child(2) .ps-process-number {
        background: var(--ps-green);
    }

    .ps-process-item:nth-child(3) .ps-process-number {
        background: #a57c1c;
        color: #fff;
    }

    .ps-process-item h4 {
        margin: 0 0 8px;
        color: var(--ps-dark);
        font-size: 14px;
        font-weight: 750;
    }

    .ps-process-item p {
        margin: 0;
        font-size: 12px;
        line-height: 1.8;
    }

    /* STEPS */
    .ps-steps {
        display: flex;
        flex-direction: column;
        gap: 19px;
        margin: 22px 0 34px;
    }

    .ps-step {
        display: grid;
        grid-template-columns: 48px minmax(0, 1fr);
        gap: 16px;
        align-items: start;
    }

    .ps-step-number {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 46px;
        height: 46px;
        border: 1px solid rgba(213,168,58,.45);
        background: #fffaf0;
        color: #9b751d;
        font-size: 14px;
        font-weight: 800;
    }

    .ps-step-content {
        padding: 2px 0 15px;
        border-bottom: 1px solid #edf1ed;
    }

    .ps-step:last-child .ps-step-content {
        border-bottom: none;
    }

    .ps-step-content h4 {
        margin: 0 0 7px;
        color: var(--ps-dark);
        font-size: 14px;
        font-weight: 750;
    }

    .ps-step-content p {
        margin: 0;
        font-size: 13px;
    }

    /* REQUIREMENTS */
    .ps-requirements {
        padding: 25px;
        margin: 23px 0 28px;
        border-left: 3px solid var(--ps-gold);
        background: #f7faf7;
    }

    .ps-requirements h3 {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 16px;
    }

    .ps-requirements h3 i {
        color: var(--ps-green);
    }

    .ps-requirements ul {
        display: flex;
        flex-direction: column;
        gap: 13px;
        padding: 0;
        margin: 17px 0 0;
        list-style: none;
    }

    .ps-requirements li {
        display: flex;
        align-items: flex-start;
        gap: 11px;
        color: var(--ps-muted);
        font-size: 13px;
        line-height: 1.8;
    }

    .ps-requirements li i {
        flex-shrink: 0;
        margin-top: 5px;
        color: var(--ps-green);
        font-size: 13px;
    }

    /* NOTICE */
    .ps-notice {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 22px;
        margin-top: 25px;
        border: 1px solid #f0e1b8;
        background: #fffbef;
    }

    .ps-notice-icon {
        display: flex;
        flex-shrink: 0;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        background: #f8edcd;
        color: #98721a;
        font-size: 18px;
    }

    .ps-notice h3 {
        margin: 0 0 7px;
        color: #745715;
        font-size: 15px;
    }

    .ps-notice p {
        margin: 0;
        color: #776c4f;
        font-size: 12.5px;
    }

    /* DEADLINE */
    .ps-deadline {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
        margin-top: 22px;
    }

    .ps-deadline-item {
        padding: 22px 20px;
        border: 1px solid var(--ps-border);
        background: #fff;
    }

    .ps-deadline-item span {
        display: block;
        margin-bottom: 8px;
        color: var(--ps-muted);
        font-size: 11px;
        font-weight: 650;
        letter-spacing: .5px;
        text-transform: uppercase;
    }

    .ps-deadline-item strong {
        display: block;
        color: var(--ps-green);
        font-size: 25px;
        font-weight: 800;
    }

    .ps-deadline-item p {
        margin: 7px 0 0;
        font-size: 12px;
    }

    .ps-closing {
        padding-top: 22px;
        margin-top: 27px;
        border-top: 1px solid var(--ps-border);
    }

    .ps-closing p {
        margin: 0;
    }

    /* RELATED SIDEBAR - STANDAR PPID */
    .ppid-service-related {
        position: sticky;
        top: 100px;
        min-width: 0;
        overflow: hidden;
        isolation: isolate;
        border: 1px solid #e1e9e4;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 8px 24px rgba(3,40,29,.07);
    }

    .ps-related-header {
        position: relative;
        overflow: hidden;
        padding: 22px 20px 19px;
        border-bottom: 3px solid var(--ps-gold);
        background: linear-gradient(125deg, #03281d 0%, #063d2a 55%, #087a4b 100%);
    }

    .ps-related-header::before {
        content: "";
        position: absolute;
        top: -45px;
        right: -32px;
        width: 120px;
        height: 120px;
        border: 1px solid rgba(242,212,124,.23);
        border-radius: 50%;
        box-shadow:
            0 0 0 15px rgba(242,212,124,.035),
            0 0 0 30px rgba(242,212,124,.025);
        pointer-events: none;
    }

    .ps-related-header::after {
        content: "\f0c1";
        position: absolute;
        right: 19px;
        top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border: 1px solid rgba(242,212,124,.32);
        border-radius: 5px;
        background: rgba(255,255,255,.06);
        color: var(--ps-gold-light);
        font-family: "Font Awesome 6 Free";
        font-size: 12px;
        font-weight: 900;
    }

    .ps-related-eyebrow {
        position: relative;
        z-index: 1;
        display: block;
        margin-bottom: 8px;
        color: var(--ps-gold-light);
        font-size: 10px;
        font-weight: 750;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .ps-related-header h3 {
        position: relative;
        z-index: 1;
        margin: 0 0 7px;
        color: #fff;
        font-size: 19px;
        font-weight: 750;
    }

    .ps-related-header p {
        position: relative;
        z-index: 1;
        max-width: 210px;
        padding-left: 0;
        margin: 0;
        color: rgba(255,255,255,.76);
        font-size: 11px;
        line-height: 1.8;
    }

    .ps-related-list {
        display: flex;
        flex-direction: column;
        gap: 3px;
        padding: 8px;
    }

    .ps-related-link {
        position: relative;
        display: flex;
        align-items: center;
        gap: 11px;
        min-height: 55px;
        padding: 9px 10px;
        margin-bottom: 0;
        border: 1px solid transparent;
        border-radius: 5px;
        background: transparent;
        color: #35483d;
        text-decoration: none;
        transition: background .22s ease, border-color .22s ease, color .22s ease;
    }

    .ps-related-link::before {
        content: "";
        position: absolute;
        top: 9px;
        bottom: 9px;
        left: -1px;
        width: 3px;
        border-radius: 0 2px 2px 0;
        background: transparent;
    }

    .ps-related-icon {
        display: flex;
        flex-shrink: 0;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border: 1px solid #e7eee8;
        border-radius: 5px;
        background: #f2f7f3;
        color: var(--ps-green);
        font-size: 13px;
        transition: background .22s ease, color .22s ease, border-color .22s ease;
    }

    .ps-related-text {
        flex: 1;
        min-width: 0;
    }

    .ps-related-text strong {
        display: block;
        color: inherit;
        font-size: 12px;
        font-weight: 600;
        line-height: 1.6;
        overflow-wrap: anywhere;
    }

    .ps-related-text small {
        display: block;
        margin-top: 2px;
        color: #89958c;
        font-size: 10px;
        line-height: 1.5;
    }

    .ps-related-arrow {
        flex-shrink: 0;
        color: #a6b4aa;
        font-size: 10px;
        transition: transform .22s ease, color .22s ease;
    }

    .ps-related-link:hover {
        border-color: #e3ede5;
        background: #f7faf7;
        color: var(--ps-green);
    }

    .ps-related-link:hover .ps-related-icon {
        border-color: #d4e6d8;
        background: #e9f3eb;
        color: var(--ps-dark);
    }

    .ps-related-link:hover .ps-related-arrow {
        transform: translateX(3px);
        color: #a57c1c;
    }

    .ps-related-link.active {
        border-color: #dcebe1;
        background: #f0f7f2;
        color: var(--ps-dark);
    }

    .ps-related-link.active::before {
        background: var(--ps-gold);
    }

    .ps-related-link.active .ps-related-icon {
        border-color: #f0dfaa;
        background: #fff7df;
        color: #946d12;
    }

    .ps-related-link.active .ps-related-arrow {
        color: #a57c1c;
    }

    .ps-related-footer {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 15px 17px;
        border-top: 1px solid #e8eee9;
        background: #fafcfa;
    }

    .ps-related-footer i {
        flex-shrink: 0;
        margin-top: 3px;
        color: #a57c1c;
        font-size: 14px;
    }

    .ps-related-footer p {
        margin: 0;
        color: var(--ps-muted);
        font-size: 10.5px;
        line-height: 1.8;
    }

    .ps-related-footer strong {
        color: var(--ps-dark);
    }

    /* ANIMATION */
    .ppid-service-page .ps-reveal {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity .65s ease, transform .65s ease;
    }

    .ppid-service-page .ps-reveal.ps-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* RESPONSIVE */
    @media (max-width: 1100px) {
        .ppid-service-container {
            width: 90%;
        }

        .ps-layout {
            grid-template-columns: minmax(0, 1fr) 285px;
            gap: 20px;
        }

        .ps-main-card {
            padding: 28px;
        }

        .ps-process {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 850px) {
        .ps-layout {
            grid-template-columns: minmax(0, 1fr);
        }

        .ppid-service-related {
            position: static;
            order: 2;
        }

        .ps-related-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 3px;
        }

        .ps-related-link {
            height: 100%;
        }

        .ps-related-link:nth-last-child(2) {
            border-bottom: 1px solid transparent;
        }

        .ps-related-link:last-child {
            border-bottom: 1px solid transparent;
        }
    }

    @media (max-width: 650px) {
        .ppid-service-page {
            padding: 35px 0 55px;
        }

        .ppid-service-container {
            width: 92%;
        }

        .ps-hero {
            padding: 30px 23px;
            margin-bottom: 24px;
        }

        .ps-hero h1 {
            font-size: 27px;
        }

        .ps-hero p {
            font-size: 12.5px;
        }

        .ps-hero-label {
            align-items: flex-start;
            font-size: 9px;
            letter-spacing: 1px;
            line-height: 1.7;
        }

        .ps-main-card {
            padding: 23px 19px;
        }

        .ps-main-card h2 {
            font-size: 23px;
        }

        .ps-main-card p {
            font-size: 12.5px;
        }

        .ps-process {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .ps-process-item {
            grid-template-columns: 40px minmax(0, 1fr);
            gap: 13px;
            padding: 15px;
        }

        .ps-process-number {
            width: 40px;
            height: 40px;
            margin: 0;
        }

        .ps-process-item h4 {
            margin-bottom: 4px;
        }

        .ps-step {
            grid-template-columns: 39px minmax(0, 1fr);
            gap: 12px;
        }

        .ps-step-number {
            width: 38px;
            height: 38px;
            font-size: 12px;
        }

        .ps-requirements {
            padding: 19px 16px;
        }

        .ps-notice {
            gap: 11px;
            padding: 17px 14px;
        }

        .ps-notice-icon {
            width: 35px;
            height: 35px;
        }

        .ps-deadline {
            grid-template-columns: 1fr;
        }

        .ps-related-header {
            padding: 19px 17px 16px;
        }

        .ps-related-header h3 {
            font-size: 18px;
        }

        .ps-related-list {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            padding: 7px;
        }

        .ps-related-link {
            align-items: flex-start;
            gap: 8px;
            padding: 9px 7px;
        }

        .ps-related-icon {
            width: 30px;
            height: 30px;
            font-size: 12px;
        }

        .ps-related-text strong {
            font-size: 11px;
        }

        .ps-related-text small {
            font-size: 9px;
        }

        .ps-related-arrow {
            display: none;
        }
    }

    @media (max-width: 430px) {
        .ps-related-list {
            grid-template-columns: 1fr;
        }

        .ps-related-link {
            align-items: center;
            padding: 9px 10px;
        }

        .ps-related-arrow {
            display: block;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .ppid-service-page *,
        .ppid-service-page *::before,
        .ppid-service-page *::after {
            scroll-behavior: auto !important;
            transition-duration: .01ms !important;
            animation-duration: .01ms !important;
        }
    }
</style>

<div class="ppid-service-page">
    <div class="ppid-service-container">

        {{-- HERO --}}
        <section class="ps-hero ps-reveal">
            <div class="ps-hero-label">
                <i class="fa-solid fa-building-shield"></i>
                <span>Pejabat Pengelola Informasi dan Dokumentasi</span>
            </div>

            <h1>Layanan <span>Pusat Informasi</span></h1>

            <p>
                Informasi mengenai tata cara pengajuan permohonan informasi,
                kelengkapan dokumen, serta proses pelayanan informasi publik
                yang transparan dan bertanggung jawab.
            </p>

            <div class="ps-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Pedoman PPID</span>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Layanan Pusat Informasi</span>
            </div>
        </section>

        <div class="ps-layout">

            {{-- MAIN CONTENT --}}
            <main class="ps-main-card ps-reveal">

                <div class="ps-section-label">
                    Informasi Pelayanan
                </div>

                <h2>Cara Pengajuan Ke Komisi Informasi Pusat</h2>

                <p class="ps-intro">
                    Pemohon informasi dapat mengikuti tahapan pengajuan sesuai
                    dengan prosedur pelayanan informasi yang berlaku. Setiap
                    tahapan perlu dilakukan dengan memperhatikan kelengkapan
                    dokumen dan ketentuan yang ditetapkan oleh instansi terkait.
                </p>

                {{-- FLOW --}}
                <div class="ps-process">
                    <div class="ps-process-item">
                        <div class="ps-process-number">
                            <i class="fa-solid fa-file-circle-plus"></i>
                        </div>
                        <div>
                            <h4>Ajukan</h4>
                            <p>Sampaikan permohonan informasi sesuai prosedur.</p>
                        </div>
                    </div>

                    <div class="ps-process-item">
                        <div class="ps-process-number">
                            <i class="fa-solid fa-folder-open"></i>
                        </div>
                        <div>
                            <h4>Lengkapi</h4>
                            <p>Siapkan dokumen yang dibutuhkan dalam pengajuan.</p>
                        </div>
                    </div>

                    <div class="ps-process-item">
                        <div class="ps-process-number">
                            <i class="fa-solid fa-receipt"></i>
                        </div>
                        <div>
                            <h4>Terima Bukti</h4>
                            <p>Simpan bukti pengajuan sebagai dokumentasi.</p>
                        </div>
                    </div>
                </div>

                {{-- STEPS --}}
                <div class="ps-section-label">
                    Tahapan Pengajuan
                </div>

                <h3>Prosedur yang Perlu Diperhatikan</h3>

                <div class="ps-steps">

                    <div class="ps-step">
                        <div class="ps-step-number">01</div>
                        <div class="ps-step-content">
                            <h4>Menyampaikan Permohonan Informasi</h4>
                            <p>
                                Pemohon menyampaikan permohonan informasi publik
                                melalui mekanisme pelayanan yang tersedia dan
                                menjelaskan informasi yang dibutuhkan secara jelas.
                            </p>
                        </div>
                    </div>

                    <div class="ps-step">
                        <div class="ps-step-number">02</div>
                        <div class="ps-step-content">
                            <h4>Melengkapi Persyaratan</h4>
                            <p>
                                Pemohon melengkapi persyaratan administrasi
                                sesuai ketentuan yang berlaku agar permohonan
                                dapat diproses.
                            </p>
                        </div>
                    </div>

                    <div class="ps-step">
                        <div class="ps-step-number">03</div>
                        <div class="ps-step-content">
                            <h4>Verifikasi Permohonan</h4>
                            <p>
                                Permohonan dan dokumen pendukung diperiksa
                                untuk memastikan kelengkapan informasi
                                administrasi yang diperlukan.
                            </p>
                        </div>
                    </div>

                    <div class="ps-step">
                        <div class="ps-step-number">04</div>
                        <div class="ps-step-content">
                            <h4>Pemberitahuan Tertulis</h4>
                            <p>
                                Pemohon memperoleh pemberitahuan mengenai
                                tindak lanjut permohonan berdasarkan prosedur
                                dan ketentuan pelayanan yang berlaku.
                            </p>
                        </div>
                    </div>

                    <div class="ps-step">
                        <div class="ps-step-number">05</div>
                        <div class="ps-step-content">
                            <h4>Tindak Lanjut Permohonan</h4>
                            <p>
                                Apabila terdapat keberatan atau sengketa
                                informasi, pemohon dapat menempuh mekanisme
                                penyelesaian sesuai ketentuan peraturan
                                perundang-undangan yang berlaku.
                            </p>
                        </div>
                    </div>

                </div>

                {{-- REQUIREMENTS --}}
                <div class="ps-requirements">
                    <h3>
                        <i class="fa-solid fa-clipboard-check"></i>
                        Kelengkapan Permohonan
                    </h3>

                    <p>
                        Sebelum mengajukan permohonan, pastikan informasi
                        yang diperlukan telah disiapkan.
                    </p>

                    <ul>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Identitas pemohon sesuai ketentuan pelayanan.</span>
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Rincian informasi publik yang diminta secara jelas.</span>
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Dokumen pendukung apabila dipersyaratkan.</span>
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Kontak yang dapat digunakan untuk komunikasi dan tindak lanjut.</span>
                        </li>
                    </ul>
                </div>

                {{-- NOTICE --}}
                <div class="ps-notice">
                    <div class="ps-notice-icon">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>

                    <div>
                        <h3>Perhatikan Pemberitahuan Tertulis</h3>
                        <p>
                            Pemberitahuan tertulis merupakan bagian dari
                            proses pelayanan informasi. Pemohon sebaiknya
                            menyimpan bukti permohonan dan memperhatikan
                            pemberitahuan dari badan publik terkait.
                        </p>
                    </div>
                </div>

                {{-- DEADLINE --}}
                <div style="margin-top: 34px;">
                    <div class="ps-section-label">
                        Jangka Waktu Pelayanan
                    </div>

                    <h3>Waktu Penyelesaian Permohonan</h3>

                    <p>
                        Informasi jangka waktu berikut perlu disesuaikan
                        dengan peraturan yang berlaku serta ketentuan
                        pelayanan badan publik yang bersangkutan.
                    </p>

                    <div class="ps-deadline">
                        <div class="ps-deadline-item">
                            <span>Jangka Waktu Awal</span>
                            <strong>10 Hari</strong>
                            <p>Hari kerja sesuai ketentuan yang berlaku.</p>
                        </div>

                        <div class="ps-deadline-item">
                            <span>Perpanjangan</span>
                            <strong>+7 Hari</strong>
                            <p>Hari kerja apabila perpanjangan diperbolehkan dan diberitahukan sesuai ketentuan.</p>
                        </div>
                    </div>
                </div>

                <div class="ps-closing">
                    <p>
                        <strong>Catatan:</strong> Uraian prosedur dan jangka
                        waktu di halaman ini perlu dicocokkan dengan standar
                        pelayanan resmi Komisi Informasi Pusat atau badan
                        publik yang dituju sebelum dipublikasikan.
                    </p>
                </div>

            </main>

            {{-- SIDEBAR LINK TERKAIT --}}
            <aside class="ppid-service-related ps-reveal">

                <div class="ps-related-header">
                    <span class="ps-related-eyebrow">Pusat Informasi</span>

                    <h3>Link Terkait</h3>

                    <p>
                        Jelajahi informasi dan layanan PPID lainnya.
                    </p>
                </div>

                <nav class="ps-related-list" aria-label="Navigasi halaman PPID">

                    <a href="{{ url('/menu/ppid/tentang_ppid') }}"
                       class="ps-related-link">
                        <span class="ps-related-icon">
                            <i class="fa-solid fa-building"></i>
                        </span>
                        <span class="ps-related-text">
                            <strong>Tentang PPID</strong>
                            <small>Profil dan informasi PPID</small>
                        </span>
                        <i class="fa-solid fa-chevron-right ps-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/kelengkapan_ppid') }}"
                       class="ps-related-link">
                        <span class="ps-related-icon">
                            <i class="fa-solid fa-file-circle-check"></i>
                        </span>
                        <span class="ps-related-text">
                            <strong>Kelengkapan PPID</strong>
                            <small>Dokumen dan persyaratan</small>
                        </span>
                        <i class="fa-solid fa-chevron-right ps-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/standar_pelayanan') }}"
                       class="ps-related-link">
                        <span class="ps-related-icon">
                            <i class="fa-solid fa-list-check"></i>
                        </span>
                        <span class="ps-related-text">
                            <strong>Standar Pelayanan</strong>
                            <small>Prosedur pelayanan informasi</small>
                        </span>
                        <i class="fa-solid fa-chevron-right ps-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/ebulletin') }}"
                       class="ps-related-link">
                        <span class="ps-related-icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="ps-related-text">
                            <strong>eBulletin</strong>
                            <small>Publikasi dan buletin</small>
                        </span>
                        <i class="fa-solid fa-chevron-right ps-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/layanan') }}"
                       class="ps-related-link active"
                       aria-current="page">
                        <span class="ps-related-icon">
                            <i class="fa-solid fa-headset"></i>
                        </span>
                        <span class="ps-related-text">
                            <strong>Layanan Pusat Informasi</strong>
                            <small>Prosedur permohonan informasi</small>
                        </span>
                        <i class="fa-solid fa-chevron-right ps-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/rancangan_peraturan') }}"
                       class="ps-related-link">
                        <span class="ps-related-icon">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </span>
                        <span class="ps-related-text">
                            <strong>Rancangan Peraturan</strong>
                            <small>Informasi rancangan peraturan</small>
                        </span>
                        <i class="fa-solid fa-chevron-right ps-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/pos_pelayanan') }}"
                       class="ps-related-link">
                        <span class="ps-related-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="ps-related-text">
                            <strong>Pos Pelayanan Informasi Publik</strong>
                            <small>Lokasi dan layanan informasi</small>
                        </span>
                        <i class="fa-solid fa-chevron-right ps-related-arrow"></i>
                    </a>

                </nav>

                <div class="ps-related-footer">
                    <i class="fa-solid fa-shield-halved"></i>
                    <p>
                        <strong>Informasi Publik</strong><br>
                        Gunakan informasi dan dokumen resmi yang diterbitkan
                        oleh badan publik terkait.
                    </p>
                </div>

            </aside>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll(
        '.ppid-service-page .ps-reveal'
    );

    if (!('IntersectionObserver' in window)) {
        elements.forEach(function (element) {
            element.classList.add('ps-visible');
        });
        return;
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('ps-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -30px 0px'
    });

    elements.forEach(function (element) {
        observer.observe(element);
    });
});
</script>

@endsection