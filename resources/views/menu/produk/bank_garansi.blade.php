
@extends('layouts.main')

@section('title', 'Penjaminan Bank Garansi')

@section('content')

<style>
/* =====================================================
   BANK GARANSI — JAMKRIDA NTB SYARIAH
===================================================== */
.bg-page {
    --bg-green: #087a4b;
    --bg-dark: #063d2a;
    --bg-deep: #03281d;
    --bg-gold: #d5a83a;
    --bg-gold-light: #f2d47c;
    --bg-text: #263b31;
    --bg-muted: #68776f;
    --bg-border: #e1ebe5;

    min-height: 100vh;
    padding: 55px 20px 90px;
    background:
        radial-gradient(circle at 8% 8%, rgba(8,122,75,.08), transparent 28%),
        radial-gradient(circle at 92% 15%, rgba(213,168,58,.10), transparent 28%),
        #f7faf8;
}

.bg-page *,
.bg-page *::before,
.bg-page *::after {
    box-sizing: border-box;
}

.bg-container {
    width: min(1250px, 100%);
    margin: auto;
}

.bg-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 285px;
    gap: 28px;
    align-items: start;
}

.bg-main {
    min-width: 0;
}

/* HERO */
.bg-hero {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 48px 45px;
    margin-bottom: 30px;
    color: #fff;
    background: linear-gradient(135deg, var(--bg-dark), var(--bg-green) 65%, #0a8b57);
    border-radius: 18px;
    box-shadow: 0 18px 45px rgba(3,40,29,.15);
    animation: bgFadeIn .7s ease both;
}

.bg-hero::before,
.bg-hero::after {
    content: "";
    position: absolute;
    z-index: -1;
    border: 1px solid rgba(255,255,255,.14);
    border-radius: 50%;
    pointer-events: none;
}

.bg-hero::before {
    width: 280px;
    height: 280px;
    top: -145px;
    right: -90px;
}

.bg-hero::after {
    width: 180px;
    height: 180px;
    right: 65px;
    bottom: -125px;
    border-color: rgba(213,168,58,.4);
}

.bg-hero-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    color: var(--bg-gold-light);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.bg-hero-label span {
    width: 30px;
    height: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(242,212,124,.75);
    border-radius: 50%;
    font-size: 11px;
}

.bg-hero h1 {
    max-width: 800px;
    margin: 0;
    color: #fff;
    font-size: clamp(30px, 5vw, 44px);
    line-height: 1.2;
    letter-spacing: -.6px;
}

.bg-hero-line {
    width: 75px;
    height: 3px;
    margin-top: 23px;
    background: var(--bg-gold);
    border-radius: 4px;
}

.bg-hero p {
    max-width: 740px;
    margin: 17px 0 0;
    color: rgba(255,255,255,.88);
    font-size: 14px;
    line-height: 1.9;
}

/* INTRODUCTION */
.bg-intro {
    display: flex;
    align-items: flex-start;
    gap: 18px;
    padding: 28px;
    margin-bottom: 32px;
    background: #fff;
    border: 1px solid rgba(8,122,75,.09);
    border-radius: 14px;
    box-shadow: 0 10px 30px rgba(0,0,0,.045);
    animation: bgRise .7s ease both;
}

.bg-intro-icon {
    flex: 0 0 48px;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--bg-green);
    background: #edf8f3;
    border: 1px solid #dceee4;
    border-radius: 12px;
    font-size: 20px;
}

.bg-intro-content h2 {
    margin: 0 0 9px;
    color: var(--bg-dark);
    font-size: 21px;
}

.bg-intro-content p {
    margin: 0;
    color: #596960;
    font-size: 13px;
    line-height: 1.9;
}

/* SECTION HEADING */
.bg-section-heading {
    margin: 42px 0 21px;
}

.bg-section-heading small {
    display: block;
    margin-bottom: 7px;
    color: #b48816;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.4px;
    text-transform: uppercase;
}

.bg-section-heading h2 {
    margin: 0;
    color: #17221e;
    font-size: 27px;
    line-height: 1.4;
}

.bg-section-heading p {
    margin: 8px 0 0;
    color: var(--bg-muted);
    font-size: 13px;
    line-height: 1.8;
}

/* PROCEDURE CARDS */
.bg-procedure-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
}

.bg-procedure-card {
    position: relative;
    overflow: hidden;
    padding: 25px 22px;
    background: #fff;
    border: 1px solid var(--bg-border);
    border-radius: 13px;
    box-shadow: 0 8px 24px rgba(0,0,0,.035);
    transition: transform .25s ease, box-shadow .25s ease;
}

.bg-procedure-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 28px rgba(3,40,29,.08);
}

.bg-procedure-card::after {
    content: "";
    position: absolute;
    right: -30px;
    bottom: -40px;
    width: 105px;
    height: 105px;
    border: 1px solid rgba(213,168,58,.18);
    border-radius: 50%;
    pointer-events: none;
}

.bg-procedure-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 37px;
    margin-bottom: 15px;
    color: var(--bg-green);
    background: #edf8f3;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 800;
}

.bg-procedure-card h3 {
    margin: 0 0 9px;
    color: var(--bg-dark);
    font-size: 16px;
}

.bg-procedure-card p {
    margin: 0;
    color: #6a776f;
    font-size: 12px;
    line-height: 1.85;
}

/* BANK GUARANTEE TYPES */
.bg-accordion-list {
    display: flex;
    flex-direction: column;
    gap: 13px;
}

.bg-accordion {
    overflow: hidden;
    background: #fff;
    border: 1px solid var(--bg-border);
    border-radius: 12px;
    box-shadow: 0 7px 22px rgba(0,0,0,.035);
    transition: border-color .25s ease, box-shadow .25s ease;
}

.bg-accordion.open {
    border-color: rgba(8,122,75,.35);
    box-shadow: 0 12px 28px rgba(3,40,29,.07);
}

.bg-accordion-button {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 20px 22px;
    color: var(--bg-text);
    background: #fff;
    border: none;
    text-align: left;
    cursor: pointer;
    font: inherit;
}

.bg-accordion-button:hover {
    background: #fbfdfb;
}

.bg-accordion-left {
    display: flex;
    align-items: center;
    gap: 14px;
    min-width: 0;
}

.bg-accordion-icon {
    flex: 0 0 43px;
    width: 43px;
    height: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--bg-green);
    background: #edf8f3;
    border: 1px solid #e0eee5;
    border-radius: 11px;
    font-size: 17px;
}

.bg-accordion-title {
    display: block;
    margin-bottom: 4px;
    color: var(--bg-dark);
    font-size: 14px;
    font-weight: 750;
    line-height: 1.5;
}

.bg-accordion-subtitle {
    display: block;
    color: #87928c;
    font-size: 11px;
    line-height: 1.6;
}

.bg-accordion-arrow {
    flex-shrink: 0;
    color: #9aa79f;
    font-size: 12px;
    transition: transform .25s ease, color .25s ease;
}

.bg-accordion.open .bg-accordion-arrow {
    color: var(--bg-gold);
    transform: rotate(180deg);
}

.bg-accordion-panel {
    display: grid;
    grid-template-rows: 0fr;
    transition: grid-template-rows .3s ease;
}

.bg-accordion.open .bg-accordion-panel {
    grid-template-rows: 1fr;
}

.bg-accordion-panel-inner {
    overflow: hidden;
    min-height: 0;
}

.bg-accordion-content {
    padding: 0 22px 23px 79px;
    color: #65736b;
    font-size: 12px;
    line-height: 1.85;
}

.bg-accordion-content p {
    margin: 0 0 12px;
}

.bg-accordion-content h4 {
    margin: 16px 0 9px;
    color: var(--bg-dark);
    font-size: 12px;
}

.bg-document-list {
    display: flex;
    flex-direction: column;
    gap: 9px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.bg-document-list li {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    color: #5d6b63;
    font-size: 12px;
    line-height: 1.75;
}

.bg-document-list li i {
    flex-shrink: 0;
    margin-top: 5px;
    color: var(--bg-green);
    font-size: 11px;
}

/* NOTE */
.bg-note {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 22px;
    margin-top: 30px;
    background: linear-gradient(120deg, rgba(8,122,75,.07), rgba(213,168,58,.09));
    border: 1px solid rgba(8,122,75,.12);
    border-radius: 13px;
}

.bg-note-icon {
    flex: 0 0 35px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #9b7615;
    background: #fff;
    border: 1px solid #f0e6c9;
    border-radius: 10px;
}

.bg-note h3 {
    margin: 0 0 5px;
    color: var(--bg-dark);
    font-size: 13px;
}

.bg-note p {
    margin: 0;
    color: #69766f;
    font-size: 11px;
    line-height: 1.85;
}

/* =====================================================
   SIDEBAR PRODUK
===================================================== */
.bg-sidebar {
    position: sticky;
    top: 95px;
    min-width: 0;
    overflow: hidden;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 16px;
    box-shadow: 0 18px 45px rgba(3,40,29,.08);
    animation: bgSidebarReveal .8s ease .15s both;
}

.bg-sidebar-header {
    position: relative;
    overflow: hidden;
    padding: 22px;
    color: #fff;
    background: linear-gradient(135deg, var(--bg-dark), var(--bg-green));
}

.bg-sidebar-header::before {
    content: "";
    position: absolute;
    top: -60px;
    right: -45px;
    width: 130px;
    height: 130px;
    border: 1px solid rgba(242,212,124,.35);
    border-radius: 50%;
}

.bg-sidebar-header::after {
    content: "";
    position: absolute;
    right: 28px;
    bottom: -48px;
    width: 75px;
    height: 75px;
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 50%;
}

.bg-sidebar-header h3 {
    position: relative;
    z-index: 1;
    margin: 0;
    color: #fff;
    font-size: 17px;
    font-weight: 800;
}

.bg-sidebar-header p {
    position: relative;
    z-index: 1;
    margin: 5px 0 0;
    color: #c4ddd1;
    font-size: 10px;
    line-height: 1.7;
}

.bg-sidebar-list {
    padding: 8px 18px;
}

.bg-sidebar-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    min-height: 64px;
    padding: 12px 5px;
    color: #3d5048;
    text-decoration: none;
    border-bottom: 1px solid #edf2ef;
    transition: color .25s ease, padding .25s ease, background .25s ease;
}

.bg-sidebar-link:last-child {
    border-bottom: none;
}

.bg-sidebar-link:hover {
    padding-left: 10px;
    color: var(--bg-green);
}

.bg-sidebar-link.active {
    margin: 0 -5px;
    padding-left: 10px;
    padding-right: 10px;
    color: var(--bg-green);
    background: #edf8f3;
    border-radius: 9px;
}

.bg-sidebar-left {
    display: flex;
    align-items: center;
    gap: 11px;
    min-width: 0;
}

.bg-sidebar-icon {
    flex-shrink: 0;
    width: 27px;
    color: var(--bg-green);
    text-align: center;
    font-size: 14px;
}

.bg-sidebar-text {
    font-size: 10.5px;
    font-weight: 650;
    line-height: 1.6;
}

.bg-sidebar-arrow {
    flex-shrink: 0;
    color: #aab7b0;
    font-size: 9px;
    transition: transform .25s ease, color .25s ease;
}

.bg-sidebar-link:hover .bg-sidebar-arrow {
    color: var(--bg-gold);
    transform: translateX(3px);
}

.bg-sidebar-link.active .bg-sidebar-arrow {
    color: var(--bg-gold);
}

.bg-sidebar-footer {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    margin: 4px 18px 17px;
    padding: 11px 12px;
    color: #7c8983;
    background: linear-gradient(100deg, rgba(8,122,75,.055), rgba(213,168,58,.055));
    border: 1px solid rgba(8,122,75,.08);
    border-radius: 9px;
    font-size: 9px;
    line-height: 1.7;
}

.bg-sidebar-footer i {
    flex-shrink: 0;
    margin-top: 2px;
    color: var(--bg-gold);
    font-size: 12px;
}

/* ANIMATIONS */
@keyframes bgFadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes bgRise {
    from { opacity: 0; transform: translateY(18px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes bgSidebarReveal {
    from { opacity: 0; transform: translateX(20px); }
    to { opacity: 1; transform: translateX(0); }
}

/* TABLET */
@media (max-width: 950px) {
    .bg-layout {
        grid-template-columns: minmax(0, 1fr);
    }

    .bg-sidebar {
        position: relative;
        top: auto;
        order: 2;
    }
}

/* MOBILE */
@media (max-width: 768px) {
    .bg-page {
        padding: 30px 15px 60px;
    }

    .bg-hero {
        padding: 35px 25px;
        border-radius: 14px;
    }

    .bg-hero h1 {
        font-size: 31px;
    }

    .bg-hero p {
        font-size: 13px;
    }

    .bg-intro {
        padding: 22px;
    }

    .bg-procedure-grid {
        grid-template-columns: 1fr;
    }

    .bg-section-heading h2 {
        font-size: 24px;
    }

    .bg-accordion-button {
        padding: 17px;
    }

    .bg-accordion-content {
        padding: 0 17px 20px;
    }
}

@media (max-width: 480px) {
    .bg-page {
        padding: 20px 12px 45px;
    }

    .bg-hero {
        padding: 30px 20px;
    }

    .bg-hero h1 {
        font-size: 27px;
    }

    .bg-hero p {
        font-size: 12px;
    }

    .bg-intro {
        gap: 13px;
        padding: 18px;
    }

    .bg-intro-icon {
        flex-basis: 39px;
        width: 39px;
        height: 39px;
        font-size: 16px;
    }

    .bg-intro-content h2 {
        font-size: 18px;
    }

    .bg-intro-content p {
        font-size: 12px;
    }

    .bg-section-heading h2 {
        font-size: 22px;
    }

    .bg-accordion-left {
        gap: 10px;
    }

    .bg-accordion-icon {
        flex-basis: 37px;
        width: 37px;
        height: 37px;
        font-size: 14px;
    }

    .bg-accordion-title {
        font-size: 12px;
    }

    .bg-accordion-subtitle {
        font-size: 10px;
    }

    .bg-accordion-content {
        font-size: 11px;
    }

    .bg-sidebar-header {
        padding: 19px 20px;
    }

    .bg-sidebar-list {
        padding: 7px 16px;
    }

    .bg-sidebar-link {
        min-height: 59px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .bg-hero,
    .bg-intro,
    .bg-sidebar,
    .bg-procedure-card,
    .bg-accordion-panel,
    .bg-accordion-arrow {
        animation: none !important;
        transition: none !important;
    }
}
</style>

<section class="bg-page">
    <div class="bg-container">
        <div class="bg-layout">

            {{-- KONTEN UTAMA --}}
            <main class="bg-main">

                <header class="bg-hero">
                    <div class="bg-hero-label">
                        <span>04</span>
                        PRODUK
                    </div>

                    <h1>Penjaminan Bank Garansi</h1>

                    <div class="bg-hero-line"></div>

                    <p>
                        Layanan penjaminan untuk mendukung pemenuhan
                        kewajiban dalam pelaksanaan pekerjaan atau
                        kontrak sesuai dengan ketentuan dan persyaratan
                        yang berlaku.
                    </p>
                </header>

                {{-- PENGENALAN --}}
                <section class="bg-intro">
                    <div class="bg-intro-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div class="bg-intro-content">
                        <h2>Mengenal Penjaminan Bank Garansi</h2>
                        <p>
                            Penjaminan Bank Garansi berkaitan dengan
                            pemberian jaminan atas kewajiban pihak yang
                            dijamin kepada penerima jaminan sesuai
                            ketentuan dalam kontrak. Jenis jaminan dan
                            persyaratannya mengikuti kebutuhan pekerjaan
                            serta ketentuan perusahaan.
                        </p>
                    </div>
                </section>

                {{-- PROSEDUR --}}
                <div class="bg-section-heading">
                    <small>Alur Layanan</small>
                    <h2>Prosedur Penjaminan</h2>
                    <p>
                        Gambaran umum tahapan pengajuan hingga
                        penyelesaian administrasi penjaminan.
                    </p>
                </div>

                <div class="bg-procedure-grid">
                    <article class="bg-procedure-card">
                        <div class="bg-procedure-number">01</div>
                        <h3>Pengajuan Permohonan</h3>
                        <p>
                            Pemohon menyampaikan permohonan penjaminan
                            beserta informasi pekerjaan, nilai kontrak,
                            jangka waktu, dan dokumen pendukung.
                        </p>
                    </article>

                    <article class="bg-procedure-card">
                        <div class="bg-procedure-number">02</div>
                        <h3>Verifikasi dan Analisis</h3>
                        <p>
                            Dokumen diperiksa dan permohonan dianalisis
                            berdasarkan persyaratan serta ketentuan
                            penjaminan yang berlaku.
                        </p>
                    </article>

                    <article class="bg-procedure-card">
                        <div class="bg-procedure-number">03</div>
                        <h3>Persetujuan Penjaminan</h3>
                        <p>
                            Permohonan yang memenuhi persyaratan diproses
                            untuk memperoleh keputusan sesuai kewenangan
                            dan prosedur perusahaan.
                        </p>
                    </article>

                    <article class="bg-procedure-card">
                        <div class="bg-procedure-number">04</div>
                        <h3>Penerbitan dan Administrasi</h3>
                        <p>
                            Setelah persyaratan dan administrasi dipenuhi,
                            proses penerbitan dokumen jaminan dilakukan
                            sesuai ketentuan yang berlaku.
                        </p>
                    </article>
                </div>

                {{-- JENIS JAMINAN --}}
                <div class="bg-section-heading">
                    <small>Jenis Penjaminan</small>
                    <h2>Jenis-Jenis Bank Garansi</h2>
                    <p>
                        Pilih salah satu jenis jaminan di bawah untuk
                        melihat penjelasan dan gambaran dokumen terkait.
                    </p>
                </div>

                <div class="bg-accordion-list">

                    {{-- JAMINAN PENAWARAN --}}
                    <article class="bg-accordion">
                        <button
                            type="button"
                            class="bg-accordion-button"
                            id="bg-button-penawaran"
                            aria-expanded="false"
                            aria-controls="bg-panel-penawaran"
                        >
                            <span class="bg-accordion-left">
                                <span class="bg-accordion-icon">
                                    <i class="fa-solid fa-file-signature"></i>
                                </span>
                                <span>
                                    <span class="bg-accordion-title">
                                        Jaminan Penawaran (Bid Bond)
                                    </span>
                                    <span class="bg-accordion-subtitle">
                                        Jaminan dalam proses tender atau pemilihan
                                    </span>
                                </span>
                            </span>
                            <i class="fa-solid fa-chevron-down bg-accordion-arrow"></i>
                        </button>

                        <div
                            class="bg-accordion-panel"
                            id="bg-panel-penawaran"
                            role="region"
                            aria-labelledby="bg-button-penawaran"
                            aria-hidden="true"
                        >
                            <div class="bg-accordion-panel-inner">
                                <div class="bg-accordion-content">
                                    <p>
                                        Jaminan Penawaran digunakan untuk
                                        menjamin komitmen peserta tender
                                        sesuai persyaratan dokumen pemilihan
                                        dan ketentuan yang berlaku.
                                    </p>

                                    <h4>Dokumen yang dapat dipersiapkan</h4>
                                    <ul class="bg-document-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Dokumen identitas dan legalitas pemohon.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Dokumen tender atau dokumen pemilihan pekerjaan.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Informasi nilai dan masa berlaku jaminan yang diminta.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Dokumen pendukung lain sesuai ketentuan perusahaan.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- JAMINAN PELAKSANAAN --}}
                    <article class="bg-accordion">
                        <button
                            type="button"
                            class="bg-accordion-button"
                            id="bg-button-pelaksanaan"
                            aria-expanded="false"
                            aria-controls="bg-panel-pelaksanaan"
                        >
                            <span class="bg-accordion-left">
                                <span class="bg-accordion-icon">
                                    <i class="fa-solid fa-helmet-safety"></i>
                                </span>
                                <span>
                                    <span class="bg-accordion-title">
                                        Jaminan Pelaksanaan (Performance Bond)
                                    </span>
                                    <span class="bg-accordion-subtitle">
                                        Jaminan atas pelaksanaan pekerjaan
                                    </span>
                                </span>
                            </span>
                            <i class="fa-solid fa-chevron-down bg-accordion-arrow"></i>
                        </button>

                        <div
                            class="bg-accordion-panel"
                            id="bg-panel-pelaksanaan"
                            role="region"
                            aria-labelledby="bg-button-pelaksanaan"
                            aria-hidden="true"
                        >
                            <div class="bg-accordion-panel-inner">
                                <div class="bg-accordion-content">
                                    <p>
                                        Jaminan Pelaksanaan berkaitan dengan
                                        pemenuhan kewajiban pelaksana dalam
                                        melaksanakan pekerjaan sesuai
                                        ketentuan kontrak.
                                    </p>

                                    <h4>Dokumen yang dapat dipersiapkan</h4>
                                    <ul class="bg-document-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Dokumen identitas dan legalitas pemohon.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Surat penetapan pemenang atau dokumen terkait pekerjaan.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Surat Perintah Kerja (SPK) atau kontrak pekerjaan jika tersedia.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Nilai kontrak dan jangka waktu pelaksanaan.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- JAMINAN UANG MUKA --}}
                    <article class="bg-accordion">
                        <button
                            type="button"
                            class="bg-accordion-button"
                            id="bg-button-uang-muka"
                            aria-expanded="false"
                            aria-controls="bg-panel-uang-muka"
                        >
                            <span class="bg-accordion-left">
                                <span class="bg-accordion-icon">
                                    <i class="fa-solid fa-money-bill-transfer"></i>
                                </span>
                                <span>
                                    <span class="bg-accordion-title">
                                        Jaminan Uang Muka (Advance Payment Bond)
                                    </span>
                                    <span class="bg-accordion-subtitle">
                                        Jaminan atas uang muka pekerjaan
                                    </span>
                                </span>
                            </span>
                            <i class="fa-solid fa-chevron-down bg-accordion-arrow"></i>
                        </button>

                        <div
                            class="bg-accordion-panel"
                            id="bg-panel-uang-muka"
                            role="region"
                            aria-labelledby="bg-button-uang-muka"
                            aria-hidden="true"
                        >
                            <div class="bg-accordion-panel-inner">
                                <div class="bg-accordion-content">
                                    <p>
                                        Jaminan Uang Muka digunakan untuk
                                        menjamin kewajiban terkait uang muka
                                        yang diterima pelaksana pekerjaan
                                        sesuai dengan kontrak dan ketentuan
                                        yang berlaku.
                                    </p>

                                    <h4>Dokumen yang dapat dipersiapkan</h4>
                                    <ul class="bg-document-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Dokumen identitas dan legalitas pemohon.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Kontrak atau dokumen perjanjian pekerjaan.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Informasi nilai uang muka yang diminta.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Ketentuan pengembalian uang muka dan dokumen pendukung terkait.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- JAMINAN PEMELIHARAAN --}}
                    <article class="bg-accordion">
                        <button
                            type="button"
                            class="bg-accordion-button"
                            id="bg-button-pemeliharaan"
                            aria-expanded="false"
                            aria-controls="bg-panel-pemeliharaan"
                        >
                            <span class="bg-accordion-left">
                                <span class="bg-accordion-icon">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                </span>
                                <span>
                                    <span class="bg-accordion-title">
                                        Jaminan Pemeliharaan (Maintenance Bond)
                                    </span>
                                    <span class="bg-accordion-subtitle">
                                        Jaminan atas kewajiban pemeliharaan pekerjaan
                                    </span>
                                </span>
                            </span>
                            <i class="fa-solid fa-chevron-down bg-accordion-arrow"></i>
                        </button>

                        <div
                            class="bg-accordion-panel"
                            id="bg-panel-pemeliharaan"
                            role="region"
                            aria-labelledby="bg-button-pemeliharaan"
                            aria-hidden="true"
                        >
                            <div class="bg-accordion-panel-inner">
                                <div class="bg-accordion-content">
                                    <p>
                                        Jaminan Pemeliharaan berkaitan dengan
                                        kewajiban pelaksana untuk memenuhi
                                        ketentuan pemeliharaan pekerjaan
                                        selama masa pemeliharaan sebagaimana
                                        ditetapkan dalam kontrak.
                                    </p>

                                    <h4>Dokumen yang dapat dipersiapkan</h4>
                                    <ul class="bg-document-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Dokumen identitas dan legalitas pemohon.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Kontrak pekerjaan dan informasi nilai pekerjaan.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Dokumen serah terima pekerjaan jika dipersyaratkan.</span>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            <span>Informasi masa pemeliharaan dan nilai jaminan.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>

                {{-- CATATAN --}}
                <section class="bg-note">
                    <div class="bg-note-icon">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>

                    <div>
                        <h3>Informasi Penting</h3>
                        <p>
                            Daftar dokumen di atas merupakan gambaran umum,
                            bukan daftar persyaratan final. Persyaratan,
                            nilai jaminan, masa berlaku, biaya, dan proses
                            persetujuan dapat berbeda menurut jenis
                            penjaminan dan ketentuan perusahaan. Silakan
                            konfirmasi kepada PT. Jamkrida NTB Syariah
                            untuk memperoleh informasi resmi terbaru.
                        </p>
                    </div>
                </section>

            </main>

            {{-- SIDEBAR PRODUK --}}
            <aside class="bg-sidebar">
                <div class="bg-sidebar-header">
                    <h3>Produk &amp; Layanan</h3>
                    <p>
                        Pilihan produk penjaminan PT. Jamkrida NTB Syariah
                    </p>
                </div>

                <nav class="bg-sidebar-list" aria-label="Menu Produk">
                    <a
                        href="{{ url('/menu/produk/penjaminan') }}"
                        class="bg-sidebar-link"
                    >
                        <span class="bg-sidebar-left">
                            <i class="fa-solid fa-handshake bg-sidebar-icon"></i>
                            <span class="bg-sidebar-text">Mekanisme Penjaminan</span>
                        </span>
                        <i class="fa-solid fa-chevron-right bg-sidebar-arrow"></i>
                    </a>

                    <a
                        href="{{ url('/menu/produk/pembiayaan_syariah') }}"
                        class="bg-sidebar-link"
                    >
                        <span class="bg-sidebar-left">
                            <i class="fa-solid fa-file-invoice-dollar bg-sidebar-icon"></i>
                            <span class="bg-sidebar-text">Penjaminan Pembiayaan Syariah</span>
                        </span>
                        <i class="fa-solid fa-chevron-right bg-sidebar-arrow"></i>
                    </a>

                    <a
                        href="{{ url('/menu/produk/surety_bond') }}"
                        class="bg-sidebar-link"
                    >
                        <span class="bg-sidebar-left">
                            <i class="fa-solid fa-building-columns bg-sidebar-icon"></i>
                            <span class="bg-sidebar-text">Penjaminan Kredit Surety Bond</span>
                        </span>
                        <i class="fa-solid fa-chevron-right bg-sidebar-arrow"></i>
                    </a>

                    <a
                        href="{{ url('/menu/produk/bank_garansi') }}"
                        class="bg-sidebar-link active"
                        aria-current="page"
                    >
                        <span class="bg-sidebar-left">
                            <i class="fa-solid fa-shield-halved bg-sidebar-icon"></i>
                            <span class="bg-sidebar-text">Penjaminan Bank Garansi</span>
                        </span>
                        <i class="fa-solid fa-chevron-right bg-sidebar-arrow"></i>
                    </a>
                </nav>

                <div class="bg-sidebar-footer">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Pilih salah satu produk untuk melihat informasi
                        selengkapnya.
                    </span>
                </div>
            </aside>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.bg-accordion');

    accordionItems.forEach(function (item) {
        const button = item.querySelector('.bg-accordion-button');
        const panel = item.querySelector('.bg-accordion-panel');

        button.addEventListener('click', function () {
            const willOpen = !item.classList.contains('open');

            // Tutup accordion lain agar halaman tetap rapi.
            accordionItems.forEach(function (otherItem) {
                otherItem.classList.remove('open');

                const otherButton = otherItem.querySelector('.bg-accordion-button');
                const otherPanel = otherItem.querySelector('.bg-accordion-panel');

                otherButton.setAttribute('aria-expanded', 'false');
                otherPanel.setAttribute('aria-hidden', 'true');
            });

            // Buka accordion yang dipilih.
            if (willOpen) {
                item.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
                panel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>

@endsection