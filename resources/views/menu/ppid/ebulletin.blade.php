
@extends('layouts.main')

@section('title', 'eBulletin')

@section('content')

<style>
/* =========================================================
   E-BULLETIN — PT. JAMKRIDA NTB SYARIAH
========================================================= */

.ebulletin-page {
    --eb-green: #087a4b;
    --eb-dark: #063d2a;
    --eb-deep: #03281d;
    --eb-gold: #d5a83a;
    --eb-gold-light: #f2d47c;
    --eb-text: #173d30;
    --eb-muted: #75827b;

    position: relative;
    padding: 65px 0 110px;
    background:
        radial-gradient(circle at 5% 10%, rgba(8,122,75,.08), transparent 27%),
        radial-gradient(circle at 95% 20%, rgba(213,168,58,.09), transparent 25%),
        linear-gradient(180deg, #f8faf9 0%, #fff 45%, #f5f8f6 100%);
    overflow: hidden;
}

.ebulletin-page *,
.ebulletin-page *::before,
.ebulletin-page *::after {
    box-sizing: border-box;
}

.ebulletin-page::before,
.ebulletin-page::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}

.ebulletin-page::before {
    width: 430px;
    height: 430px;
    border: 1px solid rgba(8,122,75,.06);
    left: -230px;
    top: 250px;
}

.ebulletin-page::after {
    width: 320px;
    height: 320px;
    border: 1px solid rgba(213,168,58,.08);
    right: -170px;
    bottom: 200px;
}

.ebulletin-container {
    width: min(1180px, 92%);
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

/* HERO */

.ebulletin-hero {
    position: relative;
    padding: 48px;
    margin-bottom: 32px;
    background: linear-gradient(125deg, #03281d 0%, #063d2a 58%, #087a4b 100%);
    overflow: hidden;
    border: 1px solid rgba(213,168,58,.35);
    border-radius: 20px;
    box-shadow: 0 20px 55px rgba(3,40,29,.14);
}

.ebulletin-hero::before,
.ebulletin-hero::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(242,212,124,.16);
    border-radius: 50%;
    pointer-events: none;
}

.ebulletin-hero::before {
    width: 280px;
    height: 280px;
    right: -85px;
    top: -140px;
}

.ebulletin-hero::after {
    width: 165px;
    height: 165px;
    right: 115px;
    bottom: -115px;
}

.ebulletin-hero-content {
    position: relative;
    z-index: 2;
    max-width: 760px;
}

.ebulletin-hero-label {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 15px;
    color: var(--eb-gold-light);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.8px;
    text-transform: uppercase;
}

.ebulletin-hero-label i {
    font-size: 14px;
}

.ebulletin-hero h1 {
    margin: 0;
    color: #fff;
    font-size: clamp(34px, 5vw, 52px);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -.8px;
}

.ebulletin-hero h1 span {
    color: var(--eb-gold-light);
}

.ebulletin-hero p {
    margin: 16px 0 0;
    max-width: 720px;
    color: rgba(255,255,255,.8);
    font-size: 14px;
    line-height: 1.85;
}

/* LAYOUT UTAMA */

.ebulletin-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 285px;
    gap: 28px;
    align-items: start;
}

.ebulletin-main {
    min-width: 0;
    padding: 32px;
    background: rgba(255,255,255,.98);
    border: 1px solid #e3e9e6;
    border-radius: 20px;
    box-shadow: 0 16px 45px rgba(3,40,29,.06);
}

/* JUDUL BAGIAN */

.ebulletin-section-heading {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 30px;
    padding-bottom: 23px;
    border-bottom: 1px solid #e8eeea;
}

.ebulletin-heading-icon {
    width: 52px;
    height: 52px;
    min-width: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #087a4b, #063d2a);
    color: var(--eb-gold-light);
    font-size: 19px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(8,122,75,.16);
}

.ebulletin-section-heading h2 {
    margin: 0 0 5px;
    color: var(--eb-dark);
    font-size: 24px;
    font-weight: 800;
    line-height: 1.3;
}

.ebulletin-section-heading p {
    margin: 0;
    color: #7c8782;
    font-size: 12.5px;
    line-height: 1.7;
}

/* GRID PUBLIKASI */

.bulletin-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 25px;
}

/* KARTU PUBLIKASI */

.bulletin-card {
    position: relative;
    min-width: 0;
    background: #fff;
    border: 1px solid #e2e9e5;
    border-radius: 12px;
    overflow: hidden;
    transition: transform .35s ease, border-color .35s ease,
                box-shadow .35s ease;
}

.bulletin-card:hover {
    transform: translateY(-5px);
    border-color: rgba(8,122,75,.35);
    box-shadow: 0 20px 40px rgba(3,40,29,.11);
}

/* SAMPUL */

.bulletin-cover {
    position: relative;
    height: 315px;
    background: linear-gradient(145deg, #063d2a, #087a4b);
    overflow: hidden;
    border-radius: 11px 11px 0 0;
}

.bulletin-cover img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: contain;
    object-position: center;
    transition: transform .6s ease;
}

.bulletin-card:hover .bulletin-cover img {
    transform: scale(1.025);
}

.bulletin-cover-placeholder {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 14px;
    padding: 20px;
    color: var(--eb-gold-light);
    text-align: center;
    background:
        radial-gradient(circle at 50% 20%, rgba(242,212,124,.12), transparent 45%),
        linear-gradient(145deg, #063d2a, #087a4b);
}

.bulletin-cover-placeholder i {
    font-size: 48px;
}

.bulletin-cover-placeholder strong {
    font-size: 18px;
}

.bulletin-cover-placeholder span {
    color: rgba(255,255,255,.8);
    font-size: 12px;
}

.bulletin-cover::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0,0,0,.01),
        rgba(0,0,0,.02) 55%,
        rgba(0,0,0,.23)
    );
    pointer-events: none;
}

/* LABEL EDISI */

.bulletin-edition {
    position: absolute;
    z-index: 4;
    top: 15px;
    left: 15px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 48px;
    min-height: 30px;
    padding: 6px 12px;
    background: rgba(3,40,29,.94);
    border: 1px solid rgba(242,212,124,.35);
    border-left: 3px solid var(--eb-gold);
    border-radius: 6px;
    color: var(--eb-gold-light);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1px;
}

/* OVERLAY SAMPUL */

.bulletin-cover-overlay {
    position: absolute;
    inset: 0;
    z-index: 5;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    background: rgba(3,40,29,.56);
    transition: opacity .3s ease;
}

.bulletin-card:hover .bulletin-cover-overlay,
.bulletin-card:focus-within .bulletin-cover-overlay {
    opacity: 1;
}

.bulletin-view-cover {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 11px 18px;
    background: #fff;
    color: #063d2a !important;
    text-decoration: none !important;
    font-size: 12px;
    font-weight: 800;
    border-radius: 6px;
    transform: translateY(10px);
    transition: transform .3s ease;
}

.bulletin-card:hover .bulletin-view-cover,
.bulletin-card:focus-within .bulletin-view-cover {
    transform: translateY(0);
}

/* INFORMASI KARTU */

.bulletin-info {
    padding: 20px;
    background: #fff;
}

.bulletin-meta {
    display: flex;
    align-items: center;
    gap: 7px;
    margin-bottom: 9px;
    color: var(--eb-green);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.bulletin-meta i {
    font-size: 11px;
}

.bulletin-info h3 {
    margin: 0 0 9px;
    color: var(--eb-text);
    font-size: 16px;
    font-weight: 800;
    line-height: 1.5;
    overflow-wrap: anywhere;
}

.bulletin-info p {
    margin: 0 0 18px;
    color: #7f8985;
    font-size: 12px;
    line-height: 1.75;
    overflow-wrap: anywhere;
}

/* TOMBOL */

.bulletin-actions {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 9px;
}

.bulletin-btn {
    min-width: 0;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    padding: 11px 9px;
    text-decoration: none !important;
    font-size: 11px;
    font-weight: 750;
    text-align: center;
    border-radius: 6px;
    transition: background .25s ease, color .25s ease,
                border-color .25s ease, transform .25s ease;
}

.bulletin-btn:hover {
    transform: translateY(-2px);
}

.bulletin-btn.primary {
    background: var(--eb-green);
    color: #fff !important;
    border: 1px solid var(--eb-green);
}

.bulletin-btn.primary:hover {
    background: var(--eb-dark);
    border-color: var(--eb-dark);
}

.bulletin-btn.secondary {
    background: #f5f8f6;
    color: var(--eb-green) !important;
    border: 1px solid #dce6e1;
}

.bulletin-btn.secondary:hover {
    background: var(--eb-gold);
    border-color: var(--eb-gold);
    color: #fff !important;
}

.bulletin-btn i {
    font-size: 11px;
}

/* KEADAAN KOSONG */

.bulletin-empty {
    grid-column: 1 / -1;
    padding: 45px 25px;
    text-align: center;
    background: #f8faf9;
    border: 1px dashed #cbd9d1;
    border-radius: 10px;
}

.bulletin-empty-icon {
    width: 65px;
    height: 65px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 17px;
    background: #eaf4ee;
    color: var(--eb-green);
    font-size: 25px;
    border-radius: 8px;
}

.bulletin-empty h3 {
    margin: 0 0 8px;
    color: var(--eb-dark);
    font-size: 18px;
    font-weight: 800;
}

.bulletin-empty p {
    max-width: 430px;
    margin: 0 auto;
    color: #7c8782;
    font-size: 13px;
    line-height: 1.8;
}

/* CATATAN INFORMASI */

.ebulletin-note {
    display: flex;
    align-items: flex-start;
    gap: 13px;
    margin-top: 28px;
    padding: 18px 20px;
    background: #f3f8f5;
    border: 1px solid #dcebe1;
    border-left: 4px solid var(--eb-green);
    border-radius: 8px;
}

.ebulletin-note > i {
    margin-top: 3px;
    color: var(--eb-green);
    font-size: 18px;
}

.ebulletin-note p {
    margin: 0;
    color: #63736a;
    font-size: 12px;
    line-height: 1.8;
}

/* =========================================================
   SIDEBAR LINK TERKAIT — STANDAR PPID
========================================================= */

.ebulletin-page .ppid-sidebar {
    position: sticky;
    top: 100px;
    min-width: 0;
    overflow: hidden;
    isolation: isolate;
    background: #fff;
    border: 1px solid #e1e9e4;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(3,40,29,.07);
}

.ebulletin-page .ppid-sidebar-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
}

.ebulletin-page .ppid-sidebar-header {
    position: relative;
    padding: 22px 20px 19px;
    overflow: hidden;
    color: #fff;
    background: linear-gradient(
        125deg,
        #03281d 0%,
        #063d2a 55%,
        #087a4b 100%
    );
    border-bottom: 3px solid var(--eb-gold);
    border-radius: 0;
}

.ebulletin-page .ppid-sidebar-header::before,
.ebulletin-page .ppid-sidebar-header::after {
    content: "";
    position: absolute;
    z-index: -1;
    border: 1px solid rgba(242,212,124,.13);
    border-radius: 50%;
    pointer-events: none;
}

.ebulletin-page .ppid-sidebar-header::before {
    width: 145px;
    height: 145px;
    right: -55px;
    top: -78px;
}

.ebulletin-page .ppid-sidebar-header::after {
    width: 85px;
    height: 85px;
    right: 32px;
    bottom: -58px;
}

.ebulletin-page .ppid-sidebar-header-top {
    display: block;
}

.ebulletin-page .ppid-sidebar-header-icon {
    display: none;
}

.ebulletin-page .ppid-sidebar-header small {
    display: block;
    margin: 0 0 5px 42px;
    color: var(--eb-gold-light);
    font-size: 9px;
    font-weight: 750;
    letter-spacing: 1.1px;
    text-transform: uppercase;
}

.ebulletin-page .ppid-sidebar-header h3 {
    position: relative;
    margin: 0;
    padding-left: 42px;
    color: #fff;
    font-size: 19px;
    font-weight: 800;
    line-height: 1.4;
}

.ebulletin-page .ppid-sidebar-header h3::before {
    content: "\f0c1";
    position: absolute;
    left: 0;
    top: 0;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(242,212,124,.13);
    border: 1px solid rgba(242,212,124,.38);
    border-radius: 5px;
    color: var(--eb-gold-light);
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    font-size: 13px;
}

.ebulletin-page .ppid-sidebar-header > p {
    margin: 12px 0 0 42px;
    color: rgba(255,255,255,.76);
    font-size: 11px;
    line-height: 1.7;
}

.ebulletin-page .ppid-sidebar-links {
    display: flex;
    flex-direction: column;
    gap: 3px;
    padding: 8px;
}

.ebulletin-page .ppid-sidebar-link {
    position: relative;
    display: flex;
    align-items: center;
    gap: 11px;
    min-width: 0;
    min-height: 55px;
    margin-bottom: 3px;
    padding: 9px 10px;
    color: #35483d !important;
    text-decoration: none !important;
    background: transparent;
    border: 1px solid transparent;
    border-radius: 5px;
    transition: background .22s ease, color .22s ease,
                border-color .22s ease;
}

.ebulletin-page .ppid-sidebar-link:hover {
    color: var(--eb-green) !important;
    background: #f7faf8;
    border-color: #e7eee9;
    transform: none;
}

.ebulletin-page .ppid-sidebar-link.active {
    color: var(--eb-green) !important;
    background: #f0f7f2;
    border-color: #dcebe1;
    font-weight: 800;
}

.ebulletin-page .ppid-sidebar-link.active::before {
    content: "";
    position: absolute;
    left: -1px;
    top: 9px;
    bottom: 9px;
    width: 3px;
    background: var(--eb-gold);
    border-radius: 0 2px 2px 0;
}

.ebulletin-page .ppid-sidebar-link-icon {
    width: 34px;
    height: 34px;
    min-width: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--eb-green);
    background: #edf5ef;
    font-size: 13px;
    border-radius: 5px;
}

.ebulletin-page .ppid-sidebar-link.active .ppid-sidebar-link-icon {
    color: #946d12;
    background: #fff7df;
}

.ebulletin-page .ppid-sidebar-link-text {
    flex: 1;
    min-width: 0;
    color: inherit;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.5;
}

.ebulletin-page .ppid-sidebar-link-arrow {
    flex-shrink: 0;
    color: #a6b4aa;
    font-size: 10px;
    transition: transform .22s ease, color .22s ease;
}

.ebulletin-page .ppid-sidebar-link:hover .ppid-sidebar-link-arrow {
    color: var(--eb-green);
    transform: translateX(2px);
}

.ebulletin-page .ppid-sidebar-footer {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin: 0 8px 8px;
    padding: 12px;
    background: #f7f9f7;
    border: 1px solid #e7eee9;
    border-radius: 5px;
}

.ebulletin-page .ppid-sidebar-footer > i {
    flex-shrink: 0;
    margin-top: 2px;
    color: var(--eb-green);
    font-size: 14px;
}

.ebulletin-page .ppid-sidebar-footer p {
    margin: 0;
    color: #758279;
    font-size: 10px;
    line-height: 1.75;
}

/* ANIMASI */

.ebulletin-reveal {
    opacity: 0;
    transform: translateY(18px);
    transition: opacity .65s ease, transform .65s ease;
}

.ebulletin-reveal.show {
    opacity: 1;
    transform: translateY(0);
}

/* RESPONSIVE TABLET */

@media (max-width: 1050px) {
    .ebulletin-layout {
        grid-template-columns: minmax(0, 1fr) 260px;
        gap: 20px;
    }

    .ebulletin-main {
        padding: 25px;
    }

    .ebulletin-hero {
        padding: 40px;
    }

    .bulletin-cover {
        height: 280px;
    }

    .bulletin-grid {
        gap: 18px;
    }
}

@media (max-width: 850px) {
    .ebulletin-layout {
        grid-template-columns: 1fr;
    }

    .ebulletin-main {
        order: 1;
    }

    .ebulletin-page .ppid-sidebar {
        position: static;
        top: auto;
        order: 2;
        width: 100%;
    }

    .ebulletin-page .ppid-sidebar-links {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

/* RESPONSIVE HP */

@media (max-width: 650px) {
    .ebulletin-page {
        padding: 35px 0 65px;
    }

    .ebulletin-container {
        width: 92%;
    }

    .ebulletin-hero {
        padding: 30px 24px;
        margin-bottom: 22px;
        border-radius: 12px;
    }

    .ebulletin-hero h1 {
        font-size: 36px;
    }

    .ebulletin-hero p {
        font-size: 13px;
    }

    .ebulletin-main {
        padding: 22px 17px;
        border-radius: 12px;
    }

    .ebulletin-section-heading {
        gap: 12px;
        margin-bottom: 22px;
        padding-bottom: 18px;
    }

    .ebulletin-heading-icon {
        width: 45px;
        height: 45px;
        min-width: 45px;
        font-size: 16px;
    }

    .ebulletin-section-heading h2 {
        font-size: 20px;
    }

    .ebulletin-section-heading p {
        font-size: 11.5px;
    }

    .bulletin-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .bulletin-card {
        border-radius: 10px;
    }

    .bulletin-cover {
        height: 330px;
    }

    .bulletin-info {
        padding: 18px;
    }

    .bulletin-info h3 {
        font-size: 15px;
    }

    .bulletin-actions {
        gap: 8px;
    }

    .bulletin-btn {
        padding: 11px 7px;
        font-size: 10.5px;
    }

    .ebulletin-note {
        padding: 15px;
    }

    .ebulletin-page .ppid-sidebar-header {
        padding: 19px 17px;
    }

    .ebulletin-page .ppid-sidebar-links {
        padding: 8px;
        gap: 3px;
    }

    .ebulletin-page .ppid-sidebar-link {
        gap: 8px;
        padding: 9px 8px;
    }

    .ebulletin-page .ppid-sidebar-link-icon {
        width: 30px;
        height: 30px;
        min-width: 30px;
        font-size: 12px;
    }

    .ebulletin-page .ppid-sidebar-link-text {
        font-size: 11px;
    }
}

@media (max-width: 430px) {
    .ebulletin-hero {
        padding: 26px 19px;
    }

    .ebulletin-hero h1 {
        font-size: 32px;
    }

    .ebulletin-main {
        padding: 19px 13px;
    }

    .bulletin-cover {
        height: 285px;
    }

    .bulletin-info {
        padding: 15px;
    }

    .ebulletin-page .ppid-sidebar-links {
        grid-template-columns: 1fr;
    }

    .ebulletin-page .ppid-sidebar-link {
        padding: 10px;
    }

    .ebulletin-page .ppid-sidebar-link-text {
        font-size: 12px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .ebulletin-page *,
    .ebulletin-page *::before,
    .ebulletin-page *::after {
        animation-duration: .01ms !important;
        transition-duration: .01ms !important;
        scroll-behavior: auto !important;
    }

    .ebulletin-reveal {
        opacity: 1;
        transform: none;
    }
}
</style>

<section class="ebulletin-page">

    <div class="ebulletin-container">

        {{-- HERO --}}
        <section class="ebulletin-hero ebulletin-reveal">
            <div class="ebulletin-hero-content">

                <div class="ebulletin-hero-label">
                    <i class="fa-solid fa-newspaper"></i>
                    PPID
                    <span aria-hidden="true">•</span>
                    Publikasi Digital
                </div>

                <h1>e<span>Bulletin</span></h1>

                <p>
                    Kumpulan publikasi digital PT. Jamkrida NTB Syariah
                    sebagai sarana informasi, dokumentasi, dan keterbukaan
                    informasi publik.
                </p>

            </div>
        </section>

        <div class="ebulletin-layout">

            {{-- KONTEN UTAMA --}}
            <main class="ebulletin-main ebulletin-reveal">

                <div class="ebulletin-section-heading">

                    <div class="ebulletin-heading-icon">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>

                    <div>
                        <h2>Koleksi eBulletin</h2>
                        <p>
                            Jelajahi publikasi digital PT. Jamkrida NTB Syariah.
                        </p>
                    </div>

                </div>

                <div class="bulletin-grid">

                    @forelse ($eBulletins as $index => $bulletin)

                        @php
                            $coverUrl = $bulletin->cover
                                ? asset('storage/' . $bulletin->cover)
                                : null;

                            $pdfUrl = $bulletin->file_pdf
                                ? asset('storage/' . $bulletin->file_pdf)
                                : null;
                        @endphp

                        <article class="bulletin-card ebulletin-reveal">

                            <div class="bulletin-cover">

                                <span class="bulletin-edition">
                                    EDISI {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                @if ($coverUrl)

                                    <img
                                        src="{{ $coverUrl }}"
                                        alt="Sampul {{ $bulletin->judul }}"
                                        loading="lazy"
                                    >

                                @else

                                    <div class="bulletin-cover-placeholder">
                                        <i class="fa-solid fa-newspaper"></i>
                                        <strong>eBulletin</strong>
                                        <span>PT. Jamkrida NTB Syariah</span>
                                    </div>

                                @endif

                                @if ($pdfUrl)

                                    <div class="bulletin-cover-overlay">
                                        <a
                                            href="{{ $pdfUrl }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="bulletin-view-cover"
                                            aria-label="Lihat eBulletin {{ $bulletin->judul }}"
                                        >
                                            <i class="fa-solid fa-eye"></i>
                                            Lihat eBulletin
                                        </a>
                                    </div>

                                @endif

                            </div>

                            <div class="bulletin-info">

                                <div class="bulletin-meta">
                                    <i class="fa-solid fa-book"></i>
                                    Publikasi Digital
                                </div>

                                <h3>{{ $bulletin->judul }}</h3>

                                <p>
                                    {{ $bulletin->deskripsi ?: 'Publikasi digital PT. Jamkrida NTB Syariah.' }}
                                </p>

                                <div class="bulletin-actions">

                                    @if ($pdfUrl)

                                        <a
                                            href="{{ $pdfUrl }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="bulletin-btn primary"
                                        >
                                            <i class="fa-solid fa-book-open"></i>
                                            Baca
                                        </a>

                                        <a
                                            href="{{ $pdfUrl }}"
                                            download
                                            class="bulletin-btn secondary"
                                        >
                                            <i class="fa-solid fa-download"></i>
                                            Download
                                        </a>

                                    @else

                                        <span
                                            class="bulletin-btn primary"
                                            style="opacity:.55;cursor:not-allowed;"
                                        >
                                            <i class="fa-solid fa-file-circle-exclamation"></i>
                                            PDF Belum Tersedia
                                        </span>

                                        <span
                                            class="bulletin-btn secondary"
                                            style="opacity:.55;cursor:not-allowed;"
                                        >
                                            <i class="fa-solid fa-download"></i>
                                            Download
                                        </span>

                                    @endif

                                </div>

                            </div>

                        </article>

                    @empty

                        <div class="bulletin-empty">

                            <div class="bulletin-empty-icon">
                                <i class="fa-regular fa-newspaper"></i>
                            </div>

                            <h3>Belum Ada Publikasi</h3>

                            <p>
                                Publikasi eBulletin akan ditampilkan di sini
                                setelah ditambahkan melalui halaman admin.
                            </p>

                        </div>

                    @endforelse

                </div>

                {{-- CATATAN INFORMASI --}}
                <div class="ebulletin-note">

                    <i class="fa-solid fa-circle-info"></i>

                    <p>
                        Seluruh publikasi eBulletin dapat diakses secara
                        digital. Pilih <strong>Baca</strong> untuk membuka
                        dokumen atau <strong>Download</strong> untuk mengunduh
                        dokumen publikasi yang tersedia.
                    </p>

                </div>

            </main>

            {{-- SIDEBAR PPID --}}
            <aside class="ppid-sidebar ebulletin-reveal">

                <div class="ppid-sidebar-card">

                    <div class="ppid-sidebar-header">

                        <div class="ppid-sidebar-header-top">

                            <div class="ppid-sidebar-header-icon">
                                <i class="fa-solid fa-link"></i>
                            </div>

                            <div>
                                <small>Informasi Publik</small>
                                <h3>Link Terkait</h3>
                            </div>

                        </div>

                        <p>
                            Jelajahi informasi dan layanan PPID lainnya.
                        </p>

                    </div>

                    <nav
                        class="ppid-sidebar-links"
                        aria-label="Navigasi informasi PPID"
                    >

                        {{-- Tentang PPID --}}
                        <a
                            href="{{ url('/menu/ppid/tentang_ppid') }}"
                            class="ppid-sidebar-link"
                        >
                            <span class="ppid-sidebar-link-icon">
                                <i class="fa-solid fa-circle-info"></i>
                            </span>
                            <span class="ppid-sidebar-link-text">Tentang PPID</span>
                            <i class="fa-solid fa-chevron-right ppid-sidebar-link-arrow"></i>
                        </a>

                        {{-- Kelengkapan PPID --}}
                        <a
                            href="{{ url('/menu/ppid/kelengkapan_ppid') }}"
                            class="ppid-sidebar-link"
                        >
                            <span class="ppid-sidebar-link-icon">
                                <i class="fa-solid fa-building"></i>
                            </span>
                            <span class="ppid-sidebar-link-text">Kelengkapan PPID</span>
                            <i class="fa-solid fa-chevron-right ppid-sidebar-link-arrow"></i>
                        </a>

                        {{-- Standar Pelayanan --}}
                        <a
                            href="{{ url('/menu/ppid/standar_pelayanan') }}"
                            class="ppid-sidebar-link"
                        >
                            <span class="ppid-sidebar-link-icon">
                                <i class="fa-solid fa-clipboard-check"></i>
                            </span>
                            <span class="ppid-sidebar-link-text">Standar Pelayanan</span>
                            <i class="fa-solid fa-chevron-right ppid-sidebar-link-arrow"></i>
                        </a>

                        {{-- eBulletin aktif --}}
                        <a
                            href="{{ url('/menu/ppid/ebulletin') }}"
                            class="ppid-sidebar-link active"
                            aria-current="page"
                        >
                            <span class="ppid-sidebar-link-icon">
                                <i class="fa-solid fa-newspaper"></i>
                            </span>
                            <span class="ppid-sidebar-link-text">eBulletin</span>
                            <i class="fa-solid fa-chevron-right ppid-sidebar-link-arrow"></i>
                        </a>

                        {{-- Layanan Pusat Informasi --}}
                        <a
                            href="{{ url('/menu/ppid/layanan') }}"
                            class="ppid-sidebar-link"
                        >
                            <span class="ppid-sidebar-link-icon">
                                <i class="fa-solid fa-headset"></i>
                            </span>
                            <span class="ppid-sidebar-link-text">Layanan Pusat Informasi</span>
                            <i class="fa-solid fa-chevron-right ppid-sidebar-link-arrow"></i>
                        </a>

                        {{-- Rancangan Peraturan --}}
                        <a
                            href="{{ url('/menu/ppid/rancangan_peraturan') }}"
                            class="ppid-sidebar-link"
                        >
                            <span class="ppid-sidebar-link-icon">
                                <i class="fa-solid fa-file-contract"></i>
                            </span>
                            <span class="ppid-sidebar-link-text">Rancangan Peraturan</span>
                            <i class="fa-solid fa-chevron-right ppid-sidebar-link-arrow"></i>
                        </a>

                        {{-- Pos Pelayanan Informasi Publik --}}
                        <a
                            href="{{ url('/menu/ppid/pos_pelayanan') }}"
                            class="ppid-sidebar-link"
                        >
                            <span class="ppid-sidebar-link-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span class="ppid-sidebar-link-text">Pos Pelayanan Informasi Publik</span>
                            <i class="fa-solid fa-chevron-right ppid-sidebar-link-arrow"></i>
                        </a>

                    </nav>

                    <div class="ppid-sidebar-footer">
                        <i class="fa-solid fa-shield-halved"></i>
                        <p>
                            Informasi publik disajikan sebagai bagian dari
                            komitmen keterbukaan informasi PT. Jamkrida NTB Syariah.
                        </p>
                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const revealElements = document.querySelectorAll('.ebulletin-reveal');

    if (!('IntersectionObserver' in window)) {
        revealElements.forEach(function (element) {
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
        threshold: 0.08
    });

    revealElements.forEach(function (element) {
        observer.observe(element);
    });

});
</script>

@endsection
