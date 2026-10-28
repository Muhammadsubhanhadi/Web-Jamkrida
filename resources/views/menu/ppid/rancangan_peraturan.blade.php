
@extends('layouts.main')

@section('title', 'Rancangan Peraturan')

@section('content')

<style>
/* =========================================================
   PPID RANCANGAN PERATURAN
   PT. JAMKRIDA NTB SYARIAH
========================================================= */

.ppid-regulation-page {
    --reg-green: #087a4b;
    --reg-dark: #063d2a;
    --reg-deep: #03281d;
    --reg-gold: #d5a83a;
    --reg-gold-light: #f2d47c;
    --reg-text: #26382f;
    --reg-muted: #718078;
    --reg-border: #e1e9e4;

    position: relative;
    overflow: hidden;
    padding: 60px 0 90px;
    background:
        radial-gradient(circle at 5% 10%, rgba(8,122,75,.055), transparent 27%),
        radial-gradient(circle at 96% 45%, rgba(213,168,58,.065), transparent 28%),
        #f7faf8;
    color: var(--reg-text);
    font-family: 'Poppins', sans-serif;
}

.ppid-regulation-page *,
.ppid-regulation-page *::before,
.ppid-regulation-page *::after {
    box-sizing: border-box;
}

.ppid-regulation-page::before,
.ppid-regulation-page::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}

.ppid-regulation-page::before {
    width: 430px;
    height: 430px;
    left: -290px;
    top: 300px;
    border: 1px solid rgba(8,122,75,.05);
}

.ppid-regulation-page::after {
    width: 360px;
    height: 360px;
    right: -240px;
    bottom: 100px;
    border: 1px solid rgba(213,168,58,.07);
}

.ppid-regulation-container {
    position: relative;
    z-index: 1;
    width: min(1180px, 90%);
    margin: 0 auto;
}

/* HERO */
.ppid-regulation-hero {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 48px 45px;
    margin-bottom: 32px;
    background: linear-gradient(120deg, var(--reg-deep), var(--reg-dark) 55%, var(--reg-green));
    border-radius: 8px;
    box-shadow: 0 18px 40px rgba(3,40,29,.14);
}

.ppid-regulation-hero::before {
    content: "";
    position: absolute;
    z-index: -1;
    width: 360px;
    height: 360px;
    top: -190px;
    right: -115px;
    border: 1px solid rgba(242,212,124,.2);
    border-radius: 50%;
    box-shadow:
        0 0 0 25px rgba(242,212,124,.025),
        0 0 0 55px rgba(242,212,124,.02);
    pointer-events: none;
}

.ppid-regulation-hero::after {
    content: "";
    position: absolute;
    z-index: -1;
    width: 200px;
    height: 200px;
    right: 125px;
    bottom: -155px;
    border: 1px solid rgba(255,255,255,.13);
    border-radius: 50%;
    pointer-events: none;
}

.ppid-regulation-hero-content {
    max-width: 800px;
}

.ppid-regulation-badge {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 8px 13px;
    margin-bottom: 19px;
    color: var(--reg-gold-light);
    background: rgba(213,168,58,.1);
    border: 1px solid rgba(242,212,124,.3);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
}

.ppid-regulation-badge i {
    font-size: 13px;
}

.ppid-regulation-hero h1 {
    margin: 0 0 15px;
    color: #fff;
    font-size: clamp(28px, 3.6vw, 42px);
    font-weight: 750;
    line-height: 1.25;
    letter-spacing: -.5px;
}

.ppid-regulation-hero h1 span {
    display: block;
    margin-top: 5px;
    color: var(--reg-gold-light);
}

.ppid-regulation-hero p {
    max-width: 700px;
    margin: 0;
    color: rgba(255,255,255,.8);
    font-size: 13px;
    line-height: 1.9;
}

.ppid-regulation-breadcrumb {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 10px;
    margin-top: 22px;
    color: rgba(255,255,255,.65);
    font-size: 11px;
}

.ppid-regulation-breadcrumb a {
    color: var(--reg-gold-light);
    text-decoration: none;
}

.ppid-regulation-breadcrumb a:hover {
    color: #fff;
}

.ppid-regulation-breadcrumb i {
    font-size: 9px;
}

/* GRID */
.ppid-regulation-grid {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 310px;
    gap: 28px;
    align-items: start;
}

.ppid-regulation-main {
    min-width: 0;
}

.ppid-regulation-card {
    min-width: 0;
    padding: 31px;
    background: #fff;
    border: 1px solid rgba(3,40,29,.07);
    box-shadow: 0 10px 32px rgba(3,40,29,.055);
}

/* INTRO */
.ppid-regulation-intro {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 21px;
    margin-bottom: 27px;
    background: linear-gradient(135deg, rgba(8,122,75,.055), rgba(213,168,58,.055));
    border-left: 3px solid var(--reg-gold);
}

.ppid-regulation-intro-icon {
    display: flex;
    flex: 0 0 43px;
    align-items: center;
    justify-content: center;
    width: 43px;
    height: 43px;
    background: linear-gradient(135deg, var(--reg-green), var(--reg-dark));
    color: var(--reg-gold-light);
    font-size: 16px;
}

.ppid-regulation-intro h2 {
    margin: 0 0 7px;
    color: var(--reg-dark);
    font-size: 18px;
    font-weight: 750;
    line-height: 1.5;
}

.ppid-regulation-intro p {
    margin: 0;
    color: var(--reg-muted);
    font-size: 12px;
    line-height: 1.9;
}

/* SECTION HEADING */
.ppid-regulation-section-heading {
    display: flex;
    align-items: center;
    gap: 13px;
    padding-bottom: 15px;
    margin-bottom: 22px;
    border-bottom: 1px solid var(--reg-border);
}

.ppid-regulation-section-icon {
    display: flex;
    flex: 0 0 42px;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    background: linear-gradient(135deg, var(--reg-green), var(--reg-dark));
    color: var(--reg-gold-light);
    font-size: 15px;
}

.ppid-regulation-section-heading h2 {
    margin: 0;
    color: var(--reg-dark);
    font-size: 21px;
    font-weight: 750;
    line-height: 1.4;
}

.ppid-regulation-section-heading span {
    display: block;
    margin-top: 4px;
    color: #89958e;
    font-size: 10.5px;
    line-height: 1.6;
}

/* STATISTICS */
.ppid-regulation-stats {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 13px;
    margin-bottom: 32px;
}

.ppid-regulation-stat {
    position: relative;
    display: flex;
    align-items: center;
    gap: 13px;
    min-width: 0;
    overflow: hidden;
    padding: 17px;
    background: #f8faf9;
    border: 1px solid var(--reg-border);
}

.ppid-regulation-stat::after {
    content: "";
    position: absolute;
    right: -38px;
    bottom: -43px;
    width: 90px;
    height: 90px;
    border: 1px solid rgba(8,122,75,.07);
    border-radius: 50%;
    pointer-events: none;
}

.ppid-regulation-stat-icon {
    display: flex;
    flex: 0 0 42px;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    background: var(--reg-dark);
    color: var(--reg-gold-light);
    font-size: 15px;
}

.ppid-regulation-stat strong {
    display: block;
    color: var(--reg-dark);
    font-size: 20px;
    font-weight: 800;
    line-height: 1.3;
}

.ppid-regulation-stat span {
    display: block;
    margin-top: 3px;
    color: var(--reg-muted);
    font-size: 10px;
    line-height: 1.6;
}

/* REGULATIONS TABLE */
.ppid-regulation-table-wrapper {
    width: 100%;
    overflow: hidden;
    border: 1px solid #dfe7e2;
    background: #fff;
}

.ppid-regulation-table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
}

.ppid-regulation-table thead th {
    padding: 16px 17px;
    background: linear-gradient(120deg, var(--reg-dark), var(--reg-green));
    color: #fff;
    text-align: left;
    font-size: 11px;
    font-weight: 700;
}

.ppid-regulation-table thead th:first-child {
    width: 68px;
    text-align: center;
}

.ppid-regulation-table tbody tr {
    transition: background .25s ease;
}

.ppid-regulation-table tbody tr:hover {
    background: #f7faf8;
}

.ppid-regulation-table tbody td {
    padding: 17px;
    border-bottom: 1px solid #e8eeeb;
    color: #637168;
    font-size: 12px;
    line-height: 1.85;
    vertical-align: top;
    overflow-wrap: anywhere;
}

.ppid-regulation-table tbody tr:last-child td {
    border-bottom: 0;
}

.ppid-regulation-number {
    text-align: center;
}

.ppid-regulation-number span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 31px;
    height: 31px;
    background: rgba(8,122,75,.08);
    color: var(--reg-green);
    font-size: 11px;
    font-weight: 800;
}

.ppid-regulation-name {
    color: #293e33 !important;
    font-weight: 550;
}

/* NOTE */
.ppid-regulation-note {
    display: flex;
    align-items: flex-start;
    gap: 13px;
    padding: 19px;
    margin-top: 24px;
    background: linear-gradient(135deg, rgba(213,168,58,.1), rgba(213,168,58,.035));
    border: 1px solid rgba(213,168,58,.25);
}

.ppid-regulation-note-icon {
    display: flex;
    flex: 0 0 38px;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    background: var(--reg-gold);
    color: var(--reg-dark);
    font-size: 14px;
}

.ppid-regulation-note h3 {
    margin: 0 0 6px;
    color: #604c1b;
    font-size: 13px;
    font-weight: 750;
}

.ppid-regulation-note p {
    margin: 0;
    color: #766c50;
    font-size: 11.5px;
    line-height: 1.85;
}

/* RELATED SIDEBAR - STANDAR PPID */
.ppid-regulation-related {
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

.ppid-regulation-related-header {
    position: relative;
    overflow: hidden;
    padding: 22px 20px 19px;
    border-bottom: 3px solid var(--reg-gold);
    background: linear-gradient(125deg, #03281d 0%, #063d2a 55%, #087a4b 100%);
}

.ppid-regulation-related-header::before {
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

.ppid-regulation-related-header::after {
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
    color: var(--reg-gold-light);
    font-family: "Font Awesome 6 Free";
    font-size: 12px;
    font-weight: 900;
    pointer-events: none;
}

.ppid-regulation-related-eyebrow {
    position: relative;
    z-index: 1;
    display: block;
    margin-bottom: 8px;
    color: var(--reg-gold-light);
    font-size: 10px;
    font-weight: 750;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.ppid-regulation-related-header h3 {
    position: relative;
    z-index: 1;
    margin: 0 0 7px;
    color: #fff;
    font-size: 19px;
    font-weight: 750;
}

.ppid-regulation-related-header p {
    position: relative;
    z-index: 1;
    max-width: 210px;
    margin: 0;
    color: rgba(255,255,255,.76);
    font-size: 11px;
    line-height: 1.8;
}

.ppid-regulation-related-list {
    display: flex;
    flex-direction: column;
    gap: 3px;
    padding: 8px;
}

.ppid-regulation-related-link {
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
    text-decoration: none;
    transition: background .22s ease, border-color .22s ease, color .22s ease;
}

.ppid-regulation-related-link::before {
    content: "";
    position: absolute;
    top: 9px;
    bottom: 9px;
    left: -1px;
    width: 3px;
    border-radius: 0 2px 2px 0;
    background: transparent;
}

.ppid-regulation-related-icon {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    border: 1px solid #e7eee8;
    border-radius: 5px;
    background: #f2f7f3;
    color: var(--reg-green);
    font-size: 13px;
    transition: background .22s ease, color .22s ease, border-color .22s ease;
}

.ppid-regulation-related-text {
    flex: 1;
    min-width: 0;
    color: inherit;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.6;
    overflow-wrap: anywhere;
}

.ppid-regulation-related-arrow {
    flex-shrink: 0;
    color: #a6b4aa;
    font-size: 10px;
    transition: transform .22s ease, color .22s ease;
}

.ppid-regulation-related-link:hover {
    border-color: #e3ede5;
    background: #f7faf7;
    color: var(--reg-green);
}

.ppid-regulation-related-link:hover .ppid-regulation-related-icon {
    border-color: #d4e6d8;
    background: #e9f3eb;
    color: var(--reg-dark);
}

.ppid-regulation-related-link:hover .ppid-regulation-related-arrow {
    transform: translateX(3px);
    color: #a57c1c;
}

.ppid-regulation-related-link.active {
    border-color: #dcebe1;
    background: #f0f7f2;
    color: var(--reg-dark);
}

.ppid-regulation-related-link.active::before {
    background: var(--reg-gold);
}

.ppid-regulation-related-link.active .ppid-regulation-related-icon {
    border-color: #f0dfaa;
    background: #fff7df;
    color: #946d12;
}

.ppid-regulation-related-link.active .ppid-regulation-related-arrow {
    color: #a57c1c;
}

.ppid-regulation-related-footer {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 15px 17px;
    border-top: 1px solid #e8eee9;
    background: #fafcfa;
}

.ppid-regulation-related-footer i {
    flex-shrink: 0;
    margin-top: 3px;
    color: #a57c1c;
    font-size: 14px;
}

.ppid-regulation-related-footer p {
    margin: 0;
    color: var(--reg-muted);
    font-size: 10.5px;
    line-height: 1.8;
}

.ppid-regulation-related-footer strong {
    color: var(--reg-dark);
}

/* SCROLL REVEAL */
.ppid-regulation-page .ppid-regulation-reveal {
    opacity: 0;
    transform: translateY(18px);
    transition: opacity .6s ease, transform .6s ease;
}

.ppid-regulation-page .ppid-regulation-reveal.show {
    opacity: 1;
    transform: translateY(0);
}

/* TABLET */
@media (max-width: 1050px) {
    .ppid-regulation-container {
        width: 92%;
    }

    .ppid-regulation-grid {
        grid-template-columns: minmax(0, 1fr) 285px;
        gap: 20px;
    }

    .ppid-regulation-card {
        padding: 25px;
    }

    .ppid-regulation-hero {
        padding: 42px 35px;
    }
}

@media (max-width: 850px) {
    .ppid-regulation-page {
        padding: 45px 0 70px;
    }

    .ppid-regulation-grid {
        grid-template-columns: minmax(0, 1fr);
    }

    .ppid-regulation-main {
        order: 1;
    }

    .ppid-regulation-related {
        position: static;
        order: 2;
    }

    .ppid-regulation-related-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 3px;
    }
}

/* MOBILE */
@media (max-width: 650px) {
    .ppid-regulation-page {
        padding: 32px 0 55px;
    }

    .ppid-regulation-container {
        width: 92%;
    }

    .ppid-regulation-hero {
        padding: 30px 23px;
        margin-bottom: 23px;
    }

    .ppid-regulation-hero h1 {
        font-size: 27px;
    }

    .ppid-regulation-hero p {
        font-size: 12px;
    }

    .ppid-regulation-badge {
        font-size: 9px;
        letter-spacing: .7px;
    }

    .ppid-regulation-card {
        padding: 20px 17px;
    }

    .ppid-regulation-intro {
        gap: 12px;
        padding: 15px;
    }

    .ppid-regulation-intro-icon {
        flex-basis: 37px;
        width: 37px;
        height: 37px;
    }

    .ppid-regulation-intro h2 {
        font-size: 16px;
    }

    .ppid-regulation-intro p {
        font-size: 11.5px;
    }

    .ppid-regulation-stats {
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .ppid-regulation-section-heading h2 {
        font-size: 19px;
    }

    .ppid-regulation-section-heading span {
        font-size: 10px;
    }

    /* Table cards on mobile */
    .ppid-regulation-table-wrapper {
        overflow: visible;
        border: 0;
        background: transparent;
    }

    .ppid-regulation-table,
    .ppid-regulation-table tbody {
        display: block;
        width: 100%;
    }

    .ppid-regulation-table thead {
        display: none;
    }

    .ppid-regulation-table tbody tr {
        display: block;
        margin-bottom: 13px;
        border: 1px solid #e1e9e4;
        background: #fff;
        box-shadow: 0 5px 17px rgba(3,40,29,.04);
    }

    .ppid-regulation-table tbody tr:last-child {
        margin-bottom: 0;
    }

    .ppid-regulation-table tbody td {
        display: block;
        width: 100%;
        padding: 12px 14px;
        border: 0;
        font-size: 12px;
    }

    .ppid-regulation-table tbody td:first-child {
        padding-bottom: 3px;
        text-align: left;
    }

    .ppid-regulation-table tbody td:first-child::before {
        content: "NOMOR REGULASI";
        display: block;
        margin-bottom: 6px;
        color: #89958e;
        font-size: 9px;
        font-weight: 750;
        letter-spacing: 1px;
    }

    .ppid-regulation-table tbody td:last-child {
        padding-top: 4px;
        padding-bottom: 15px;
    }

    .ppid-regulation-related-header {
        padding: 19px 17px 16px;
    }

    .ppid-regulation-related-header h3 {
        font-size: 18px;
    }

    .ppid-regulation-related-list {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        padding: 7px;
    }

    .ppid-regulation-related-link {
        align-items: flex-start;
        gap: 8px;
        padding: 9px 7px;
    }

    .ppid-regulation-related-icon {
        width: 30px;
        height: 30px;
    }

    .ppid-regulation-related-text {
        font-size: 11px;
    }

    .ppid-regulation-related-arrow {
        display: none;
    }

    .ppid-regulation-note {
        padding: 15px;
    }
}

@media (max-width: 430px) {
    .ppid-regulation-related-list {
        grid-template-columns: 1fr;
    }

    .ppid-regulation-related-link {
        align-items: center;
        padding: 9px 10px;
    }

    .ppid-regulation-related-arrow {
        display: block;
    }
}

@media (max-width: 380px) {
    .ppid-regulation-container {
        width: 94%;
    }

    .ppid-regulation-hero {
        padding: 25px 18px;
    }

    .ppid-regulation-hero h1 {
        font-size: 24px;
    }

    .ppid-regulation-card {
        padding: 15px;
    }

    .ppid-regulation-section-heading h2 {
        font-size: 17px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .ppid-regulation-page .ppid-regulation-reveal,
    .ppid-regulation-page .ppid-regulation-reveal.show,
    .ppid-regulation-page * {
        transition-duration: .01ms !important;
        animation-duration: .01ms !important;
    }
}
</style>

@php
    $regulations = [
        [
            'name' => 'Undang-undang Republik Indonesia nomor 14 tahun 2008 tentang keterbukaan informasi publik',
        ],
        [
            'name' => 'Peraturan pemerintah republik indonesia nomor 61 tahun 2010 tentang pelaksanaan undang-undang nomor 14 tahun 2008 tentang keterbukaan informasi publik',
        ],
        [
            'name' => 'Peraturan komisi informasi nomor 1 tahun 2010 tentang standar layanan informasi publik',
        ],
        [
            'name' => 'Peraturan Daerah Provinsi Nusa Tenggara Barat Nomor 10 tahun 2015 Tentang pelayanan informasi publik di lingkungan Pemerintahan Daerah',
        ],
    ];
@endphp

<div class="ppid-regulation-page">
    <div class="ppid-regulation-container">

        {{-- HERO --}}
        <section class="ppid-regulation-hero ppid-regulation-reveal">
            <div class="ppid-regulation-hero-content">

                <div class="ppid-regulation-badge">
                    <i class="fa-solid fa-scale-balanced"></i>
                    <span>Regulasi & Informasi Publik</span>
                </div>

                <h1>
                    Peraturan Perundang-Undangan
                    <span>Tentang Keterbukaan Informasi Publik</span>
                </h1>

                <p>
                    Kumpulan peraturan perundang-undangan yang menjadi
                    dasar dan rujukan dalam penyelenggaraan keterbukaan
                    informasi publik.
                </p>

                <div class="ppid-regulation-breadcrumb">
                    <a href="{{ url('/') }}">Beranda</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span>Pedoman PPID</span>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span>Rancangan Peraturan</span>
                </div>

            </div>
        </section>

        <div class="ppid-regulation-grid">

            {{-- MAIN CONTENT --}}
            <main class="ppid-regulation-main">
                <div class="ppid-regulation-card ppid-regulation-reveal">

                    {{-- INTRO --}}
                    <div class="ppid-regulation-intro">
                        <div class="ppid-regulation-intro-icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>

                        <div>
                            <h2>Peraturan Perundang-Undangan</h2>
                            <p>
                                Berikut undang-undang dan peraturan yang
                                berkaitan dengan keterbukaan informasi publik
                                sebagaimana tercantum dalam materi PPID.
                            </p>
                        </div>
                    </div>

                    {{-- STATISTICS --}}
                    <div class="ppid-regulation-stats ppid-regulation-reveal">

                        <div class="ppid-regulation-stat">
                            <div class="ppid-regulation-stat-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </div>

                            <div>
                                <strong>{{ str_pad(count($regulations), 2, '0', STR_PAD_LEFT) }}</strong>
                                <span>Regulasi tercantum</span>
                            </div>
                        </div>

                        <div class="ppid-regulation-stat">
                            <div class="ppid-regulation-stat-icon">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>

                            <div>
                                <strong>PPID</strong>
                                <span>Dasar keterbukaan informasi publik</span>
                            </div>
                        </div>

                    </div>

                    {{-- SECTION HEADER --}}
                    <div class="ppid-regulation-section-heading ppid-regulation-reveal">
                        <div class="ppid-regulation-section-icon">
                            <i class="fa-solid fa-gavel"></i>
                        </div>

                        <div>
                            <h2>Daftar Peraturan</h2>
                            <span>Dasar hukum keterbukaan informasi publik</span>
                        </div>
                    </div>

                    {{-- REGULATIONS TABLE --}}
                    <div class="ppid-regulation-table-wrapper ppid-regulation-reveal">
                        <table class="ppid-regulation-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi Peraturan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($regulations as $index => $regulation)
                                    <tr>
                                        <td class="ppid-regulation-number">
                                            <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                        </td>

                                        <td class="ppid-regulation-name">
                                            {{ $regulation['name'] }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">
                                            Belum ada data peraturan yang tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- INFORMATION NOTE --}}
                    <div class="ppid-regulation-note ppid-regulation-reveal">
                        <div class="ppid-regulation-note-icon">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>

                        <div>
                            <h3>Informasi Regulasi</h3>
                            <p>
                                Daftar di atas disajikan berdasarkan materi
                                informasi PPID yang tersedia. Untuk dokumen
                                atau salinan resmi masing-masing peraturan,
                                gunakan sumber dan dokumen resmi yang berwenang.
                            </p>
                        </div>
                    </div>

                </div>
            </main>

            {{-- SIDEBAR LINK TERKAIT --}}
            <aside class="ppid-regulation-related ppid-regulation-reveal">

                <div class="ppid-regulation-related-header">
                    <span class="ppid-regulation-related-eyebrow">
                        Pusat Informasi
                    </span>

                    <h3>Link Terkait</h3>

                    <p>
                        Jelajahi informasi dan layanan PPID lainnya.
                    </p>
                </div>

                <nav class="ppid-regulation-related-list" aria-label="Navigasi halaman PPID">

                    <a href="{{ url('/menu/ppid/tentang_ppid') }}"
                       class="ppid-regulation-related-link">
                        <span class="ppid-regulation-related-icon">
                            <i class="fa-solid fa-building"></i>
                        </span>
                        <span class="ppid-regulation-related-text">
                            Tentang PPID
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-regulation-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/kelengkapan_ppid') }}"
                       class="ppid-regulation-related-link">
                        <span class="ppid-regulation-related-icon">
                            <i class="fa-solid fa-file-circle-check"></i>
                        </span>
                        <span class="ppid-regulation-related-text">
                            Kelengkapan PPID
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-regulation-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/standar_pelayanan') }}"
                       class="ppid-regulation-related-link">
                        <span class="ppid-regulation-related-icon">
                            <i class="fa-solid fa-list-check"></i>
                        </span>
                        <span class="ppid-regulation-related-text">
                            Standar Pelayanan
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-regulation-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/ebulletin') }}"
                       class="ppid-regulation-related-link">
                        <span class="ppid-regulation-related-icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="ppid-regulation-related-text">
                            eBulletin
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-regulation-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/layanan') }}"
                       class="ppid-regulation-related-link">
                        <span class="ppid-regulation-related-icon">
                            <i class="fa-solid fa-headset"></i>
                        </span>
                        <span class="ppid-regulation-related-text">
                            Layanan Pusat Informasi
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-regulation-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/rancangan_peraturan') }}"
                       class="ppid-regulation-related-link active"
                       aria-current="page">
                        <span class="ppid-regulation-related-icon">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </span>
                        <span class="ppid-regulation-related-text">
                            Rancangan Peraturan
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-regulation-related-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/ppid/pos_pelayanan') }}"
                       class="ppid-regulation-related-link">
                        <span class="ppid-regulation-related-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="ppid-regulation-related-text">
                            Pos Pelayanan Informasi Publik
                        </span>
                        <i class="fa-solid fa-chevron-right ppid-regulation-related-arrow"></i>
                    </a>

                </nav>

                <div class="ppid-regulation-related-footer">
                    <i class="fa-solid fa-shield-halved"></i>
                    <p>
                        <strong>Informasi Publik</strong><br>
                        Gunakan dokumen resmi yang diterbitkan oleh
                        badan publik terkait.
                    </p>
                </div>

            </aside>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll(
        '.ppid-regulation-page .ppid-regulation-reveal'
    );

    if (!('IntersectionObserver' in window)) {
        elements.forEach(function (element) {
            element.classList.add('show');
        });
        return;
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -20px 0px'
    });

    elements.forEach(function (element) {
        observer.observe(element);
    });
});
</script>

@endsection