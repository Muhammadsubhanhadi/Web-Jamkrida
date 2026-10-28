
@extends('layouts.main')

@section('title', 'Pos Pelayanan Informasi Publik')

@section('content')

<style>
.ppid-service-page {
    --service-green: #087a4b;
    --service-dark: #063d2a;
    --service-deep: #03281d;
    --service-gold: #d5a83a;
    --service-gold-light: #f2d47c;
    --service-text: #26382f;
    --service-muted: #748078;
    --service-border: #e1e9e4;

    padding: 48px 0 75px;
    background:
        radial-gradient(circle at 5% 10%, rgba(8,122,75,.04), transparent 27%),
        #f7f9f8;
    color: var(--service-text);
    font-family: 'Poppins', sans-serif;
}

.ppid-service-page *,
.ppid-service-page *::before,
.ppid-service-page *::after {
    box-sizing: border-box;
}

.ppid-service-container {
    width: min(1180px, 92%);
    margin: 0 auto;
}

/* HEADER */

.ppid-service-header {
    margin-bottom: 27px;
    padding-bottom: 22px;
    border-bottom: 1px solid var(--service-border);
}

.ppid-service-breadcrumb {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 9px;
    margin-bottom: 12px;
    color: var(--service-green);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.ppid-service-breadcrumb i {
    font-size: 9px;
}

.ppid-service-breadcrumb a {
    color: var(--service-green);
    text-decoration: none;
}

.ppid-service-breadcrumb a:hover {
    color: var(--service-dark);
}

.ppid-service-header h1 {
    margin: 0 0 9px;
    color: var(--service-dark);
    font-size: clamp(27px, 3.4vw, 36px);
    font-weight: 800;
    line-height: 1.3;
}

.ppid-service-header p {
    max-width: 760px;
    margin: 0;
    color: var(--service-muted);
    font-size: 12.5px;
    line-height: 1.9;
}

/* LAYOUT */

.ppid-service-grid {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 310px;
    gap: 28px;
    align-items: start;
}

.ppid-service-main {
    min-width: 0;
}

/* CONTENT CARD */

.ppid-service-card {
    overflow: hidden;
    min-width: 0;
    background: #fff;
    border: 1px solid var(--service-border);
    border-radius: 7px;
    box-shadow: 0 5px 20px rgba(3,40,29,.045);
}

.ppid-service-card-header {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 23px 25px;
    border-bottom: 1px solid #e9efeb;
}

.ppid-service-card-icon {
    display: flex;
    flex: 0 0 44px;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    background: var(--service-green);
    color: var(--service-gold-light);
    font-size: 16px;
}

.ppid-service-card-heading {
    min-width: 0;
}

.ppid-service-card-header h2 {
    margin: 0 0 4px;
    color: var(--service-dark);
    font-size: 17px;
    font-weight: 800;
    line-height: 1.5;
}

.ppid-service-card-header p {
    margin: 0;
    color: #89938d;
    font-size: 10.5px;
    line-height: 1.7;
}

/* INTRODUCTION */

.ppid-service-intro {
    padding: 23px 25px 5px;
}

.ppid-service-intro p {
    margin: 0 0 13px;
    color: #5e6c63;
    font-size: 12px;
    line-height: 1.95;
    text-align: justify;
}

.ppid-service-intro strong {
    color: var(--service-dark);
    font-weight: 750;
}

/* SECTION */

.ppid-service-section {
    padding: 18px 25px 5px;
}

.ppid-service-section-title {
    display: flex;
    align-items: center;
    gap: 11px;
    margin: 0 0 17px;
    color: var(--service-dark);
    font-size: 15px;
    font-weight: 800;
    line-height: 1.6;
}

.ppid-service-section-title::before {
    content: "";
    flex: 0 0 4px;
    width: 4px;
    height: 22px;
    background: var(--service-gold);
}

/* SERVICE STEPS */

.ppid-service-steps {
    display: grid;
    gap: 13px;
}

.ppid-service-step {
    display: grid;
    grid-template-columns: 39px minmax(0, 1fr);
    gap: 13px;
    padding: 16px;
    background: #fff;
    border: 1px solid #e8eee9;
    border-left: 3px solid var(--service-green);
    transition: background .2s ease, border-color .2s ease;
}

.ppid-service-step:hover {
    background: #f8fbf9;
    border-left-color: var(--service-gold);
}

.ppid-service-step-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 37px;
    background: #edf6f0;
    color: var(--service-green);
    font-size: 12px;
    font-weight: 800;
}

.ppid-service-step-content {
    min-width: 0;
}

.ppid-service-step h3 {
    margin: 0 0 6px;
    color: #263a30;
    font-size: 12.5px;
    font-weight: 750;
    line-height: 1.7;
}

.ppid-service-step p {
    margin: 0;
    color: var(--service-muted);
    font-size: 11px;
    line-height: 1.9;
}

/* INFORMATION LIST */

.ppid-service-list {
    display: grid;
    gap: 10px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.ppid-service-list li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    color: #5e6c63;
    font-size: 11.5px;
    line-height: 1.9;
}

.ppid-service-list li i {
    flex: 0 0 15px;
    margin-top: 5px;
    color: var(--service-green);
    font-size: 12px;
}

.ppid-service-list li strong {
    color: var(--service-dark);
}

/* LOCATION INFORMATION */

.ppid-service-location {
    display: grid;
    grid-template-columns: 45px minmax(0, 1fr);
    gap: 14px;
    align-items: start;
    padding: 18px;
    margin-bottom: 13px;
    background: #f7faf7;
    border: 1px solid var(--service-border);
    border-left: 3px solid var(--service-green);
}

.ppid-service-location-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 43px;
    height: 43px;
    background: var(--service-dark);
    color: var(--service-gold-light);
    font-size: 16px;
}

.ppid-service-location-content {
    min-width: 0;
}

.ppid-service-location-content h3 {
    margin: 0 0 6px;
    color: var(--service-dark);
    font-size: 13px;
    font-weight: 800;
    line-height: 1.7;
}

.ppid-service-location-content p {
    margin: 0;
    color: var(--service-muted);
    font-size: 11px;
    line-height: 1.9;
}

/* NOTE */

.ppid-service-note {
    display: flex;
    align-items: flex-start;
    gap: 11px;
    padding: 15px 17px;
    margin: 22px 25px 25px;
    background: #faf8ef;
    border-left: 3px solid var(--service-gold);
}

.ppid-service-note > i {
    flex: 0 0 14px;
    margin-top: 3px;
    color: #a88324;
    font-size: 13px;
}

.ppid-service-note p {
    margin: 0;
    color: #756c53;
    font-size: 10.5px;
    line-height: 1.9;
}

/* =========================================================
   SIDEBAR LINK TERKAIT — STANDAR PPID
========================================================= */

.ppid-service-related {
    position: sticky;
    top: 100px;
    min-width: 0;
    overflow: hidden;
    background: #fff;
    border: 1px solid #e1e9e4;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(3,40,29,.07);
}

.ppid-service-related-header {
    position: relative;
    overflow: hidden;
    padding: 22px 20px 19px;
    border-bottom: 3px solid var(--service-gold);
    background: linear-gradient(
        125deg,
        #03281d 0%,
        #063d2a 55%,
        #087a4b 100%
    );
}

.ppid-service-related-header::before {
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

.ppid-service-related-header::after {
    content: "\f0c1";
    position: absolute;
    top: 20px;
    right: 19px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border: 1px solid rgba(242,212,124,.32);
    border-radius: 5px;
    background: rgba(255,255,255,.06);
    color: var(--service-gold-light);
    font-family: "Font Awesome 6 Free";
    font-size: 12px;
    font-weight: 900;
    pointer-events: none;
}

.ppid-service-related-eyebrow {
    position: relative;
    z-index: 1;
    display: block;
    margin-bottom: 8px;
    color: var(--service-gold-light);
    font-size: 10px;
    font-weight: 750;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.ppid-service-related-header h3 {
    position: relative;
    z-index: 1;
    margin: 0 0 7px;
    color: #fff;
    font-size: 19px;
    font-weight: 750;
}

.ppid-service-related-header p {
    position: relative;
    z-index: 1;
    max-width: 210px;
    margin: 0;
    color: rgba(255,255,255,.76);
    font-size: 11px;
    line-height: 1.8;
}

.ppid-service-related-links {
    display: flex;
    flex-direction: column;
    gap: 3px;
    padding: 8px;
}

.ppid-service-related-link {
    position: relative;
    display: flex;
    align-items: center;
    gap: 11px;
    min-height: 55px;
    padding: 9px 10px;
    border: 1px solid transparent;
    border-radius: 5px;
    background: transparent;
    color: #35483d;
    text-decoration: none !important;
    transition:
        background .22s ease,
        border-color .22s ease,
        color .22s ease;
}

.ppid-service-related-link::before {
    content: "";
    position: absolute;
    top: 9px;
    bottom: 9px;
    left: -1px;
    width: 3px;
    border-radius: 0 2px 2px 0;
    background: transparent;
}

.ppid-service-related-icon {
    display: flex;
    flex: 0 0 34px;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    border: 1px solid #e7eee8;
    border-radius: 5px;
    background: #f2f7f3;
    color: var(--service-green);
    font-size: 13px;
    transition:
        background .22s ease,
        color .22s ease,
        border-color .22s ease;
}

.ppid-service-related-text {
    flex: 1;
    min-width: 0;
    color: inherit;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.6;
    overflow-wrap: anywhere;
}

.ppid-service-related-arrow {
    flex-shrink: 0;
    color: #a6b4aa;
    font-size: 10px;
    transition: transform .22s ease, color .22s ease;
}

.ppid-service-related-link:hover {
    border-color: #e3ede5;
    background: #f7faf7;
    color: var(--service-green);
}

.ppid-service-related-link:hover .ppid-service-related-icon {
    border-color: #d4e6d8;
    background: #e9f3eb;
    color: var(--service-dark);
}

.ppid-service-related-link:hover .ppid-service-related-arrow {
    transform: translateX(3px);
    color: #a57c1c;
}

.ppid-service-related-link.active {
    border-color: #dcebe1;
    background: #f0f7f2;
    color: var(--service-dark);
}

.ppid-service-related-link.active::before {
    background: var(--service-gold);
}

.ppid-service-related-link.active .ppid-service-related-icon {
    border-color: #f0dfaa;
    background: #fff7df;
    color: #946d12;
}

.ppid-service-related-link.active .ppid-service-related-arrow {
    color: #a57c1c;
}

/* ANIMATION */

.ppid-service-page .service-reveal {
    opacity: 1;
    transform: none;
}

.ppid-service-page.service-motion .service-reveal {
    opacity: 0;
    transform: translateY(12px);
    transition: opacity .45s ease, transform .45s ease;
}

.ppid-service-page.service-motion .service-reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
}

/* RESPONSIVE */

@media (max-width: 1000px) {
    .ppid-service-grid {
        grid-template-columns: minmax(0, 1fr) 285px;
        gap: 20px;
    }

    .ppid-service-card-header {
        padding: 21px;
    }

    .ppid-service-intro,
    .ppid-service-section {
        padding-right: 21px;
        padding-left: 21px;
    }

    .ppid-service-note {
        margin-right: 21px;
        margin-left: 21px;
    }
}

@media (max-width: 850px) {
    .ppid-service-page {
        padding: 40px 0 65px;
    }

    .ppid-service-grid {
        grid-template-columns: minmax(0, 1fr);
    }

    .ppid-service-main {
        order: 1;
    }

    .ppid-service-related {
        position: static;
        order: 2;
    }

    .ppid-service-related-links {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 3px;
    }
}

@media (max-width: 650px) {
    .ppid-service-page {
        padding: 32px 0 55px;
    }

    .ppid-service-container {
        width: 92%;
    }

    .ppid-service-header {
        margin-bottom: 21px;
        padding-bottom: 18px;
    }

    .ppid-service-header h1 {
        font-size: 25px;
    }

    .ppid-service-header p {
        font-size: 11.5px;
    }

    .ppid-service-card-header {
        align-items: flex-start;
        gap: 12px;
        padding: 18px;
    }

    .ppid-service-card-icon {
        flex-basis: 39px;
        width: 39px;
        height: 39px;
        font-size: 14px;
    }

    .ppid-service-card-header h2 {
        font-size: 14px;
    }

    .ppid-service-card-header p {
        font-size: 10px;
    }

    .ppid-service-intro {
        padding: 19px 18px 3px;
    }

    .ppid-service-intro p {
        font-size: 11px;
    }

    .ppid-service-section {
        padding: 17px 18px 5px;
    }

    .ppid-service-section-title {
        font-size: 13px;
    }

    .ppid-service-step {
        grid-template-columns: 33px minmax(0, 1fr);
        gap: 10px;
        padding: 13px 11px;
    }

    .ppid-service-step-number {
        width: 32px;
        height: 32px;
        font-size: 10px;
    }

    .ppid-service-step h3 {
        font-size: 11.5px;
    }

    .ppid-service-step p,
    .ppid-service-list li {
        font-size: 10.5px;
    }

    .ppid-service-location {
        grid-template-columns: 38px minmax(0, 1fr);
        gap: 11px;
        padding: 13px;
    }

    .ppid-service-location-icon {
        width: 37px;
        height: 37px;
        font-size: 14px;
    }

    .ppid-service-location-content h3 {
        font-size: 12px;
    }

    .ppid-service-note {
        margin: 18px 18px 19px;
        padding: 13px;
    }

    .ppid-service-related-header {
        padding: 19px 17px 16px;
    }

    .ppid-service-related-header h3 {
        font-size: 18px;
    }

    .ppid-service-related-links {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        padding: 7px;
    }

    .ppid-service-related-link {
        align-items: flex-start;
        gap: 8px;
        padding: 9px 7px;
    }

    .ppid-service-related-icon {
        flex-basis: 30px;
        width: 30px;
        height: 30px;
    }

    .ppid-service-related-text {
        font-size: 11px;
    }

    .ppid-service-related-arrow {
        display: none;
    }
}

@media (max-width: 430px) {
    .ppid-service-related-links {
        grid-template-columns: 1fr;
    }

    .ppid-service-related-link {
        align-items: center;
        padding: 9px 10px;
    }

    .ppid-service-related-arrow {
        display: block;
    }
}

@media (prefers-reduced-motion: reduce) {
    .ppid-service-page.service-motion .service-reveal {
        opacity: 1;
        transform: none;
        transition: none;
    }

    .ppid-service-step,
    .ppid-service-related-link,
    .ppid-service-related-icon {
        transition: none;
    }
}
</style>

<section class="ppid-service-page">
    <div class="ppid-service-container">

        {{-- HEADER --}}
        <header class="ppid-service-header service-reveal">
            <div class="ppid-service-breadcrumb">
                <i class="fa-solid fa-folder-open"></i>
                <a href="{{ url('/') }}">Beranda</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>PPID</span>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Pos Pelayanan Informasi Publik</span>
            </div>

            <h1>Pos Pelayanan Informasi Publik</h1>

            <p>
                Informasi mengenai pos pelayanan yang menjadi sarana bagi
                masyarakat untuk memperoleh informasi publik dan mendapatkan
                panduan terkait layanan PPID PT. Jamkrida NTB Syariah.
            </p>
        </header>

        <div class="ppid-service-grid">

            {{-- KONTEN UTAMA --}}
            <main class="ppid-service-main">
                <article class="ppid-service-card service-reveal">

                    <div class="ppid-service-card-header">
                        <div class="ppid-service-card-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div class="ppid-service-card-heading">
                            <h2>Pos Pelayanan Informasi Publik</h2>
                            <p>Sarana pelayanan dan akses informasi bagi masyarakat</p>
                        </div>
                    </div>

                    <div class="ppid-service-intro">
                        <p>
                            <strong>Pos Pelayanan Informasi Publik</strong>
                            merupakan sarana yang dapat digunakan masyarakat
                            untuk mendapatkan informasi mengenai prosedur
                            permohonan informasi publik di PT. Jamkrida NTB
                            Syariah.
                        </p>

                        <p>
                            Melalui pelayanan ini, masyarakat dapat memperoleh
                            penjelasan mengenai tata cara mengajukan permohonan,
                            persyaratan yang diperlukan, serta proses pelayanan
                            informasi sesuai ketentuan yang berlaku.
                        </p>
                    </div>

                    {{-- INFORMASI PELAYANAN --}}
                    <div class="ppid-service-section">
                        <h3 class="ppid-service-section-title">
                            Informasi Pelayanan
                        </h3>

                        <div class="ppid-service-location">
                            <div class="ppid-service-location-icon">
                                <i class="fa-solid fa-circle-info"></i>
                            </div>

                            <div class="ppid-service-location-content">
                                <h3>Pusat Informasi Publik</h3>
                                <p>
                                    Masyarakat dapat menghubungi atau mengunjungi
                                    saluran pelayanan resmi perusahaan untuk
                                    memperoleh informasi mengenai prosedur dan
                                    persyaratan permohonan informasi publik.
                                </p>
                            </div>
                        </div>

                        <div class="ppid-service-location">
                            <div class="ppid-service-location-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </div>

                            <div class="ppid-service-location-content">
                                <h3>Permohonan Informasi</h3>
                                <p>
                                    Pemohon menyampaikan informasi yang
                                    dibutuhkan dan melengkapi persyaratan
                                    permohonan sesuai prosedur pelayanan yang
                                    berlaku.
                                </p>
                            </div>
                        </div>

                        <div class="ppid-service-location">
                            <div class="ppid-service-location-icon">
                                <i class="fa-solid fa-user-check"></i>
                            </div>

                            <div class="ppid-service-location-content">
                                <h3>Bantuan Petugas</h3>
                                <p>
                                    Petugas memberikan panduan mengenai
                                    mekanisme permohonan dan tindak lanjut
                                    permintaan informasi sesuai kewenangan
                                    serta ketentuan yang berlaku.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- TATA CARA --}}
                    <div class="ppid-service-section">
                        <h3 class="ppid-service-section-title">
                            Tata Cara Mendapatkan Informasi
                        </h3>

                        <div class="ppid-service-steps">
                            <div class="ppid-service-step">
                                <div class="ppid-service-step-number">01</div>
                                <div class="ppid-service-step-content">
                                    <h3>Menghubungi Petugas</h3>
                                    <p>
                                        Pemohon menghubungi atau mendatangi
                                        saluran pelayanan resmi untuk memperoleh
                                        informasi mengenai layanan PPID.
                                    </p>
                                </div>
                            </div>

                            <div class="ppid-service-step">
                                <div class="ppid-service-step-number">02</div>
                                <div class="ppid-service-step-content">
                                    <h3>Menyampaikan Kebutuhan Informasi</h3>
                                    <p>
                                        Pemohon menjelaskan informasi yang
                                        dibutuhkan agar petugas dapat memberikan
                                        arahan mengenai prosedur yang sesuai.
                                    </p>
                                </div>
                            </div>

                            <div class="ppid-service-step">
                                <div class="ppid-service-step-number">03</div>
                                <div class="ppid-service-step-content">
                                    <h3>Melengkapi Persyaratan</h3>
                                    <p>
                                        Pemohon melengkapi formulir dan dokumen
                                        pendukung apabila diperlukan sesuai
                                        ketentuan pelayanan informasi publik.
                                    </p>
                                </div>
                            </div>

                            <div class="ppid-service-step">
                                <div class="ppid-service-step-number">04</div>
                                <div class="ppid-service-step-content">
                                    <h3>Menunggu Proses Pelayanan</h3>
                                    <p>
                                        Permohonan diproses oleh petugas sesuai
                                        prosedur dan jangka waktu pelayanan
                                        yang berlaku.
                                    </p>
                                </div>
                            </div>

                            <div class="ppid-service-step">
                                <div class="ppid-service-step-number">05</div>
                                <div class="ppid-service-step-content">
                                    <h3>Menerima Tindak Lanjut</h3>
                                    <p>
                                        Pemohon menerima pemberitahuan mengenai
                                        hasil permohonan sesuai ketentuan
                                        keterbukaan informasi publik.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- KETENTUAN --}}
                    <div class="ppid-service-section">
                        <h3 class="ppid-service-section-title">
                            Hal yang Perlu Diperhatikan
                        </h3>

                        <ul class="ppid-service-list">
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>
                                    <strong>Kelengkapan data:</strong>
                                    pastikan data dan dokumen persyaratan
                                    permohonan telah dilengkapi sesuai
                                    ketentuan.
                                </span>
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>
                                    <strong>Kejelasan informasi:</strong>
                                    sampaikan informasi yang dibutuhkan secara
                                    jelas agar permohonan dapat ditindaklanjuti.
                                </span>
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>
                                    <strong>Ketentuan pelayanan:</strong>
                                    proses permohonan mengikuti prosedur dan
                                    jangka waktu pelayanan yang berlaku.
                                </span>
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span>
                                    <strong>Informasi yang dikecualikan:</strong>
                                    pemberian informasi tetap memperhatikan
                                    ketentuan mengenai informasi publik yang
                                    dapat diakses dan informasi yang
                                    dikecualikan.
                                </span>
                            </li>
                        </ul>
                    </div>

                    {{-- CATATAN --}}
                    <div class="ppid-service-note">
                        <i class="fa-solid fa-circle-info"></i>
                        <p>
                            Informasi alamat pos pelayanan, jam operasional,
                            nomor kontak, dan petugas PPID perlu disesuaikan
                            dengan informasi resmi PT. Jamkrida NTB Syariah.
                            Pastikan informasi tersebut telah diverifikasi
                            sebelum ditampilkan kepada masyarakat.
                        </p>
                    </div>

                </article>
            </main>

            {{-- SIDEBAR LINK TERKAIT --}}
            <aside class="ppid-service-related service-reveal">

                <div class="ppid-service-related-header">
                    <span class="ppid-service-related-eyebrow">
                        Pusat Informasi
                    </span>

                    <h3>Link Terkait</h3>

                    <p>
                        Jelajahi informasi dan layanan PPID lainnya.
                    </p>
                </div>

                <nav class="ppid-service-related-links"
                     aria-label="Navigasi informasi PPID">

                    <a href="{{ url('/menu/ppid/tentang_ppid') }}"
                       class="ppid-service-related-link">
                        <span class="ppid-service-related-icon">
                            <i class="fa-solid fa-building"></i>
                        </span>
                        <span class="ppid-service-related-text">
                            Tentang PPID
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-service-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/kelengkapan_ppid') }}"
                       class="ppid-service-related-link">
                        <span class="ppid-service-related-icon">
                            <i class="fa-solid fa-file-circle-check"></i>
                        </span>
                        <span class="ppid-service-related-text">
                            Kelengkapan PPID
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-service-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/standar_pelayanan') }}"
                       class="ppid-service-related-link">
                        <span class="ppid-service-related-icon">
                            <i class="fa-solid fa-list-check"></i>
                        </span>
                        <span class="ppid-service-related-text">
                            Standar Pelayanan
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-service-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/ebulletin') }}"
                       class="ppid-service-related-link">
                        <span class="ppid-service-related-icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="ppid-service-related-text">
                            eBulletin
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-service-related-arrow"></i>
                    </a>

                    {{-- LAYANAN PUSAT INFORMASI TIDAK AKTIF --}}
                    <a href="{{ url('/menu/ppid/layanan') }}"
                       class="ppid-service-related-link">
                        <span class="ppid-service-related-icon">
                            <i class="fa-solid fa-headset"></i>
                        </span>
                        <span class="ppid-service-related-text">
                            Layanan Pusat Informasi
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-service-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/rancangan_peraturan') }}"
                       class="ppid-service-related-link">
                        <span class="ppid-service-related-icon">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </span>
                        <span class="ppid-service-related-text">
                            Rancangan Peraturan
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-service-related-arrow"></i>
                    </a>

                    {{-- POS PELAYANAN AKTIF --}}
                    <a href="{{ url('/menu/ppid/pos_pelayanan') }}"
                       class="ppid-service-related-link active"
                       aria-current="page">
                        <span class="ppid-service-related-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="ppid-service-related-text">
                            Pos Pelayanan Informasi Publik
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-service-related-arrow"></i>
                    </a>

                </nav>
            </aside>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const page = document.querySelector('.ppid-service-page');

    if (!page) return;

    const elements = page.querySelectorAll('.service-reveal');

    if (
        window.matchMedia('(prefers-reduced-motion: reduce)').matches ||
        !('IntersectionObserver' in window)
    ) {
        elements.forEach(function (element) {
            element.classList.add('is-visible');
        });

        return;
    }

    page.classList.add('service-motion');

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.05
    });

    elements.forEach(function (element) {
        observer.observe(element);
    });
});
</script>

@endsection