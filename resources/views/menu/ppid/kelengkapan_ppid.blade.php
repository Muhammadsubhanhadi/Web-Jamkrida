
@extends('layouts.main')

@section('title', 'Kelengkapan PPID')

@section('content')

<style>
/* =========================================================
   KELENGKAPAN PPID - PREMIUM CORPORATE
   PT. JAMKRIDA NTB SYARIAH
========================================================= */

.ppid-complete-page {
    --ppid-green: #087a4b;
    --ppid-dark: #063d2a;
    --ppid-deep: #03281d;
    --ppid-gold: #d5a83a;
    --ppid-gold-light: #f2d47c;
    --ppid-text: #263a31;
    --ppid-muted: #718078;

    position: relative;
    padding: 70px 0 110px;
    background:
        radial-gradient(circle at 5% 10%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 95% 35%, rgba(213,168,58,.08), transparent 25%),
        #f7faf8;
    overflow: hidden;
}

.ppid-complete-page *,
.ppid-lightbox * {
    box-sizing: border-box;
}

.ppid-complete-page::before,
.ppid-complete-page::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}

.ppid-complete-page::before {
    width: 380px;
    height: 380px;
    top: 50px;
    left: -180px;
    background: rgba(8,122,75,.035);
}

.ppid-complete-page::after {
    width: 320px;
    height: 320px;
    right: -150px;
    bottom: 100px;
    background: rgba(213,168,58,.035);
}

.ppid-complete-container {
    position: relative;
    z-index: 2;
    width: min(1180px, 90%);
    margin: 0 auto;
}

/* =========================================================
   HERO
========================================================= */

.ppid-complete-hero {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    min-height: 270px;
    padding: 52px 55px;
    margin-bottom: 38px;
    background: linear-gradient(
        120deg,
        rgba(3,40,29,.98),
        rgba(6,61,42,.96) 58%,
        rgba(8,122,75,.92)
    );
    border: 1px solid rgba(255,255,255,.08);
    border-radius: 17px;
    box-shadow: 0 20px 45px rgba(3,40,29,.16);
}

.ppid-complete-hero::before,
.ppid-complete-hero::after {
    content: "";
    position: absolute;
    z-index: -1;
    border: 1px solid rgba(242,212,124,.16);
    border-radius: 50%;
    pointer-events: none;
}

.ppid-complete-hero::before {
    width: 330px;
    height: 330px;
    top: -150px;
    right: -120px;
}

.ppid-complete-hero::after {
    width: 210px;
    height: 210px;
    right: 80px;
    bottom: -145px;
    border-color: rgba(242,212,124,.10);
}

.ppid-complete-hero-content {
    position: relative;
    z-index: 2;
    max-width: 750px;
}

.ppid-complete-label {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 8px 15px;
    margin-bottom: 18px;
    color: var(--ppid-gold-light);
    background: rgba(213,168,58,.12);
    border: 1px solid rgba(242,212,124,.24);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.4px;
    text-transform: uppercase;
}

.ppid-complete-label i {
    font-size: 13px;
}

.ppid-complete-hero h1 {
    margin: 0 0 13px;
    color: #fff;
    font-size: clamp(32px,4vw,48px);
    line-height: 1.12;
    font-weight: 700;
    letter-spacing: -.8px;
}

.ppid-complete-hero h1 span {
    color: var(--ppid-gold-light);
}

.ppid-complete-hero p {
    max-width: 680px;
    margin: 0;
    color: rgba(255,255,255,.8);
    font-size: 15px;
    line-height: 1.8;
}

/* =========================================================
   MAIN GRID
========================================================= */

.ppid-complete-grid {
    display: grid;
    grid-template-columns: minmax(0,1fr) 295px;
    gap: 30px;
    align-items: start;
}

.ppid-complete-main {
    min-width: 0;
}

.ppid-complete-card {
    min-width: 0;
    padding: 32px;
    background: #fff;
    border: 1px solid rgba(3,40,29,.08);
    box-shadow: 0 12px 35px rgba(3,40,29,.07);
}

/* =========================================================
   SECTION HEADER
========================================================= */

.ppid-section-heading {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 25px;
}

.ppid-section-icon {
    flex: 0 0 48px;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ppid-gold-light);
    background: linear-gradient(135deg,var(--ppid-green),var(--ppid-dark));
    box-shadow: 0 8px 20px rgba(8,122,75,.16);
    font-size: 19px;
}

.ppid-section-heading h2 {
    margin: 0 0 5px;
    color: var(--ppid-dark);
    font-size: 27px;
    line-height: 1.2;
}

.ppid-section-heading p {
    margin: 0;
    color: #75817c;
    font-size: 13px;
    line-height: 1.6;
}

/* =========================================================
   INTRODUCTION
========================================================= */

.ppid-complete-intro {
    position: relative;
    padding: 20px 22px;
    margin-bottom: 32px;
    background: linear-gradient(
        135deg,
        rgba(8,122,75,.055),
        rgba(213,168,58,.055)
    );
    border-left: 4px solid var(--ppid-gold);
}

.ppid-complete-intro p {
    margin: 0;
    color: #53605a;
    font-size: 14px;
    line-height: 1.8;
}

/* =========================================================
   FACILITY SECTION
========================================================= */

.ppid-facility {
    margin-top: 38px;
}

.ppid-facility-header {
    display: flex;
    align-items: center;
    gap: 13px;
    padding-bottom: 13px;
    margin-bottom: 18px;
    border-bottom: 1px solid #e6ece8;
}

.ppid-facility-number {
    flex: 0 0 34px;
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ppid-gold-light);
    background: var(--ppid-dark);
    font-size: 13px;
    font-weight: 700;
}

.ppid-facility-header h3 {
    margin: 0;
    color: #10251c;
    font-size: 21px;
    font-weight: 650;
}

/* =========================================================
   IMAGE GALLERY
========================================================= */

.ppid-gallery {
    display: grid;
    grid-template-columns: repeat(2,minmax(0,1fr));
    gap: 18px;
}

.ppid-gallery.single {
    grid-template-columns: minmax(0,1fr);
}

.ppid-gallery-item {
    position: relative;
    min-width: 0;
    overflow: hidden;
    background: #eef3f0;
    border: 1px solid #e1e8e4;
    cursor: pointer;
    box-shadow: 0 8px 24px rgba(3,40,29,.08);
    transition: transform .35s ease, box-shadow .35s ease;
}

.ppid-gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 17px 32px rgba(3,40,29,.14);
}

.ppid-gallery-image {
    display: block;
    width: 100%;
    height: 350px;
    object-fit: cover;
    object-position: center;
    transition: transform .6s ease, filter .4s ease;
}

.ppid-gallery-item:hover .ppid-gallery-image {
    transform: scale(1.035);
    filter: brightness(.88);
}

.ppid-gallery-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 12px;
    padding: 18px;
    background: linear-gradient(
        to top,
        rgba(3,40,29,.82),
        rgba(3,40,29,.1) 48%,
        transparent 70%
    );
    opacity: 0;
    transition: opacity .35s ease;
}

.ppid-gallery-item:hover .ppid-gallery-overlay {
    opacity: 1;
}

.ppid-gallery-caption {
    min-width: 0;
    color: #fff;
}

.ppid-gallery-caption strong {
    display: block;
    margin-bottom: 3px;
    font-size: 14px;
}

.ppid-gallery-caption span {
    color: rgba(255,255,255,.8);
    font-size: 11px;
}

.ppid-gallery-open {
    flex: 0 0 40px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ppid-dark);
    background: #fff;
    box-shadow: 0 8px 18px rgba(0,0,0,.15);
    font-size: 14px;
}

/* =========================================================
   IMAGE INFORMATION
========================================================= */

.ppid-gallery-info {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-top: 14px;
    padding: 13px 15px;
    background: #f7faf8;
    border: 1px solid #e6ece8;
}

.ppid-gallery-info i {
    flex: 0 0 auto;
    margin-top: 3px;
    color: var(--ppid-green);
    font-size: 15px;
}

.ppid-gallery-info span {
    color: #68766f;
    font-size: 12px;
    line-height: 1.7;
}

/* =========================================================
   LINK TERKAIT - SIDEBAR PREMIUM REFINED
   BAGIAN INI SAJA YANG DIPERBARUI
========================================================= */

.ppid-related {
    position: sticky;
    top: 100px;
    min-width: 0;
    overflow: hidden;
    isolation: isolate;
    background: #ffffff;
    border: 1px solid #e1e9e4;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(3,40,29,.07);
}

.ppid-related-header {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 22px 20px 19px;
    color: #ffffff;
    background: linear-gradient(125deg,#03281d 0%,#063d2a 55%,#087a4b 100%);
    border-bottom: 3px solid var(--ppid-gold);
}

.ppid-related-header::before,
.ppid-related-header::after {
    content: "";
    position: absolute;
    z-index: -1;
    border: 1px solid rgba(242,212,124,.15);
    border-radius: 50%;
    pointer-events: none;
}

.ppid-related-header::before {
    width: 125px;
    height: 125px;
    top: -70px;
    right: -35px;
}

.ppid-related-header::after {
    width: 75px;
    height: 75px;
    top: -35px;
    right: 20px;
    border-color: rgba(255,255,255,.12);
}

.ppid-related-header h3 {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0 0 7px;
    color: #ffffff;
    font-size: 17px;
    font-weight: 700;
    letter-spacing: 0;
}

.ppid-related-header h3::before {
    content: "\f0c1";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    flex: 0 0 32px;
    width: 32px;
    height: 32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--ppid-gold-light);
    background: rgba(213,168,58,.13);
    border: 1px solid rgba(242,212,124,.3);
    font-size: 13px;
}

.ppid-related-header p {
    position: relative;
    z-index: 1;
    margin: 0;
    padding-left: 42px;
    color: rgba(255,255,255,.78);
    font-size: 11px;
    line-height: 1.65;
}

.ppid-related-list {
    padding: 8px;
}

.ppid-related-link {
    position: relative;
    display: flex;
    align-items: center;
    gap: 11px;
    min-height: 55px;
    padding: 9px 10px;
    margin-bottom: 3px;
    color: #35483d;
    text-decoration: none;
    background: transparent;
    border: 1px solid transparent;
    border-radius: 5px;
    transition:
        background .22s ease,
        border-color .22s ease,
        color .22s ease;
}

.ppid-related-link:last-child {
    margin-bottom: 0;
}

.ppid-related-link:hover {
    color: var(--ppid-green);
    background: #f5f9f6;
    border-color: #e5eee8;
}

.ppid-related-link.active {
    color: var(--ppid-dark);
    background: #f0f7f2;
    border-color: #dcebe1;
}

.ppid-related-link.active::before {
    content: "";
    position: absolute;
    top: 9px;
    bottom: 9px;
    left: -1px;
    width: 3px;
    background: var(--ppid-gold);
}

.ppid-related-icon {
    flex: 0 0 34px;
    width: 34px;
    height: 34px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--ppid-green);
    background: #f0f6f2;
    border: 1px solid #e3ece6;
    border-radius: 5px;
    font-size: 13px;
    transition:
        color .22s ease,
        background .22s ease,
        border-color .22s ease;
}

.ppid-related-link:hover .ppid-related-icon {
    color: #ffffff;
    background: var(--ppid-green);
    border-color: var(--ppid-green);
}

.ppid-related-link.active .ppid-related-icon {
    color: #946d12;
    background: #fff7df;
    border-color: #f0dfac;
}

.ppid-related-text {
    flex: 1;
    min-width: 0;
    font-size: 12px;
    font-weight: 600;
    line-height: 1.5;
}

.ppid-related-arrow {
    flex: 0 0 auto;
    color: #a6b4aa;
    font-size: 10px;
    transition: color .22s ease;
}

.ppid-related-link:hover .ppid-related-arrow {
    color: var(--ppid-green);
}

.ppid-related-link.active .ppid-related-arrow {
    color: #b58a25;
}

/* =========================================================
   BOTTOM CTA
========================================================= */

.ppid-complete-note {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-top: 35px;
    padding: 18px 20px;
    color: #fff;
    background: var(--ppid-dark);
}

.ppid-complete-note-icon {
    flex: 0 0 43px;
    width: 43px;
    height: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ppid-gold-light);
    background: rgba(242,212,124,.13);
}

.ppid-complete-note-text {
    min-width: 0;
}

.ppid-complete-note-text strong {
    display: block;
    margin-bottom: 3px;
    font-size: 13px;
}

.ppid-complete-note-text span {
    display: block;
    color: rgba(255,255,255,.75);
    font-size: 11px;
    line-height: 1.7;
}

/* =========================================================
   LIGHTBOX
========================================================= */

.ppid-lightbox {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px;
    background: rgba(1,18,13,.93);
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transition: opacity .3s ease, visibility .3s ease;
}

.ppid-lightbox.show {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}

.ppid-lightbox-content {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: fit-content;
    max-width: 100%;
    max-height: 90vh;
    transform: scale(.96);
    transition: transform .3s ease;
}

.ppid-lightbox.show .ppid-lightbox-content {
    transform: scale(1);
}

.ppid-lightbox-image {
    display: block;
    width: auto;
    height: auto;
    max-width: min(100%,1100px);
    max-height: 82vh;
    object-fit: contain;
    box-shadow: 0 25px 70px rgba(0,0,0,.45);
}

.ppid-lightbox-close {
    position: absolute;
    top: -46px;
    right: 0;
    z-index: 2;
    width: 38px;
    height: 38px;
    border: 1px solid rgba(255,255,255,.18);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    background: rgba(255,255,255,.12);
    cursor: pointer;
    font-size: 17px;
    transition: background .25s ease, color .25s ease;
}

.ppid-lightbox-close:hover {
    color: var(--ppid-dark);
    background: var(--ppid-gold);
}

/* =========================================================
   SCROLL REVEAL
========================================================= */

.ppid-reveal {
    opacity: 0;
    transform: translateY(22px);
    transition: opacity .65s ease, transform .65s ease;
}

.ppid-reveal.show {
    opacity: 1;
    transform: translateY(0);
}

/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1050px) {
    .ppid-complete-container {
        width: 92%;
    }

    .ppid-complete-grid {
        grid-template-columns: minmax(0,1fr) 270px;
        gap: 22px;
    }

    .ppid-complete-hero {
        padding: 45px 40px;
    }

    .ppid-complete-card {
        padding: 27px;
    }

    .ppid-gallery-image {
        height: 300px;
    }
}

/* =========================================================
   TABLET PORTRAIT
========================================================= */

@media (max-width: 850px) {
    .ppid-complete-page {
        padding: 50px 0 80px;
    }

    .ppid-complete-grid {
        grid-template-columns: minmax(0,1fr);
        gap: 25px;
    }

    .ppid-complete-main {
        order: 1;
    }

    .ppid-related {
        position: relative;
        top: auto;
        order: 2;
    }

    .ppid-related-list {
        display: grid;
        grid-template-columns: repeat(2,minmax(0,1fr));
        gap: 4px;
    }

    .ppid-related-link {
        min-width: 0;
        margin-bottom: 0;
    }
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {
    .ppid-complete-page {
        padding: 35px 0 65px;
    }

    .ppid-complete-container {
        width: 92%;
    }

    .ppid-complete-hero {
        min-height: auto;
        padding: 34px 25px;
        margin-bottom: 25px;
        border-radius: 13px;
    }

    .ppid-complete-label {
        gap: 7px;
        padding: 7px 11px;
        font-size: 10px;
        letter-spacing: .8px;
    }

    .ppid-complete-hero h1 {
        font-size: 30px;
    }

    .ppid-complete-hero p {
        font-size: 13px;
        line-height: 1.7;
    }

    .ppid-complete-card {
        padding: 21px;
    }

    .ppid-section-heading {
        gap: 12px;
    }

    .ppid-section-icon {
        flex-basis: 42px;
        width: 42px;
        height: 42px;
        font-size: 16px;
    }

    .ppid-section-heading h2 {
        font-size: 22px;
    }

    .ppid-section-heading p {
        font-size: 12px;
    }

    .ppid-complete-intro {
        padding: 16px;
    }

    .ppid-complete-intro p {
        font-size: 13px;
    }

    .ppid-gallery {
        grid-template-columns: minmax(0,1fr);
        gap: 15px;
    }

    .ppid-gallery-image {
        height: 260px;
    }

    .ppid-gallery-overlay {
        padding: 14px;
        opacity: 1;
    }

    .ppid-gallery-open {
        flex-basis: 35px;
        width: 35px;
        height: 35px;
    }

    .ppid-facility {
        margin-top: 30px;
    }

    .ppid-facility-header h3 {
        font-size: 18px;
    }

    .ppid-related-list {
        display: block;
    }

    .ppid-related-link {
        min-height: 53px;
        margin-bottom: 3px;
    }

    .ppid-related-header {
        padding: 19px 17px;
    }

    .ppid-complete-note {
        align-items: flex-start;
        padding: 16px;
    }

    .ppid-lightbox {
        padding: 18px;
    }

    .ppid-lightbox-image {
        max-width: 100%;
        max-height: 75vh;
    }

    .ppid-lightbox-close {
        top: -45px;
    }
}

/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {
    .ppid-complete-container {
        width: 94%;
    }

    .ppid-complete-hero {
        padding: 28px 20px;
    }

    .ppid-complete-hero h1 {
        font-size: 27px;
    }

    .ppid-complete-card {
        padding: 17px;
    }

    .ppid-section-heading h2 {
        font-size: 20px;
    }

    .ppid-gallery-image {
        height: 225px;
    }

    .ppid-related-header {
        padding: 17px;
    }

    .ppid-related-text {
        font-size: 12px;
    }
}

/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {
    .ppid-reveal,
    .ppid-gallery-item,
    .ppid-gallery-image,
    .ppid-related-link,
    .ppid-related-icon,
    .ppid-related-arrow,
    .ppid-lightbox,
    .ppid-lightbox-content {
        transition: none !important;
    }

    .ppid-reveal {
        opacity: 1;
        transform: none;
    }
}
</style>

<div class="ppid-complete-page">
    <div class="ppid-complete-container">

        {{-- HERO --}}
        <section class="ppid-complete-hero ppid-reveal">
            <div class="ppid-complete-hero-content">
                <div class="ppid-complete-label">
                    <i class="fa-solid fa-building-circle-check"></i>
                    PPID PT. Jamkrida NTB Syariah
                </div>

                <h1>Kelengkapan <span>PPID</span></h1>

                <p>
                    Fasilitas pendukung pelayanan informasi publik yang
                    disiapkan untuk memberikan pengalaman pelayanan yang
                    nyaman, ramah, dan mudah diakses oleh masyarakat.
                </p>
            </div>
        </section>

        {{-- MAIN GRID --}}
        <div class="ppid-complete-grid">

            {{-- CONTENT --}}
            <main class="ppid-complete-main">
                <div class="ppid-complete-card ppid-reveal">

                    <div class="ppid-section-heading">
                        <div class="ppid-section-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <div>
                            <h2>Kelengkapan PPID</h2>
                            <p>Sarana dan fasilitas pelayanan informasi publik</p>
                        </div>
                    </div>

                    <div class="ppid-complete-intro">
                        <p>
                            Untuk mendukung penyelenggaraan pelayanan informasi
                            publik, PPID menyediakan berbagai fasilitas yang
                            menunjang kenyamanan masyarakat dalam memperoleh
                            informasi.
                        </p>
                    </div>

                    {{-- RUANG TUNGGU --}}
                    <section class="ppid-facility ppid-reveal">
                        <div class="ppid-facility-header">
                            <div class="ppid-facility-number">01</div>
                            <h3>Ruang Tunggu Yang Nyaman</h3>
                        </div>

                        <div class="ppid-gallery single">
                            <div
                                class="ppid-gallery-item"
                                onclick="openPpidLightbox(this)"
                                role="button"
                                tabindex="0"
                                aria-label="Lihat gambar Ruang Tunggu PPID"
                                onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openPpidLightbox(this)}"
                            >
                                <img
                                    src="{{ asset('images/ruang_tunggu3.png') }}"
                                    alt="Ruang Tunggu PPID"
                                    class="ppid-gallery-image"
                                    loading="lazy"
                                >

                                <div class="ppid-gallery-overlay">
                                    <div class="ppid-gallery-caption">
                                        <strong>Ruang Tunggu PPID</strong>
                                        <span>Fasilitas pelayanan informasi</span>
                                    </div>

                                    <div class="ppid-gallery-open">
                                        <i class="fa-solid fa-expand"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ppid-gallery-info">
                            <i class="fa-solid fa-circle-info"></i>
                            <span>
                                Ruang tunggu disediakan untuk memberikan
                                kenyamanan kepada masyarakat selama proses
                                pelayanan informasi publik.
                            </span>
                        </div>
                    </section>

                    {{-- PELAYANAN RAMAH --}}
                    <section class="ppid-facility ppid-reveal">
                        <div class="ppid-facility-header">
                            <div class="ppid-facility-number">02</div>
                            <h3>Pelayanan yang Ramah</h3>
                        </div>

                        <div class="ppid-gallery">

                            <div
                                class="ppid-gallery-item"
                                onclick="openPpidLightbox(this)"
                                role="button"
                                tabindex="0"
                                aria-label="Lihat gambar Meja Layanan PPID"
                                onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openPpidLightbox(this)}"
                            >
                                <img
                                    src="{{ asset('images/meja_layanan2.jpeg') }}"
                                    alt="Meja Layanan PPID"
                                    class="ppid-gallery-image"
                                    loading="lazy"
                                >

                                <div class="ppid-gallery-overlay">
                                    <div class="ppid-gallery-caption">
                                        <strong>Meja Layanan</strong>
                                        <span>Pelayanan informasi publik</span>
                                    </div>

                                    <div class="ppid-gallery-open">
                                        <i class="fa-solid fa-expand"></i>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="ppid-gallery-item"
                                onclick="openPpidLightbox(this)"
                                role="button"
                                tabindex="0"
                                aria-label="Lihat gambar Fasilitas Meja Layanan PPID"
                                onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openPpidLightbox(this)}"
                            >
                                <img
                                    src="{{ asset('images/meja_layanan.PNG') }}"
                                    alt="Fasilitas Meja Layanan PPID"
                                    class="ppid-gallery-image"
                                    loading="lazy"
                                >

                                <div class="ppid-gallery-overlay">
                                    <div class="ppid-gallery-caption">
                                        <strong>Fasilitas Pelayanan</strong>
                                        <span>Sarana layanan informasi</span>
                                    </div>

                                    <div class="ppid-gallery-open">
                                        <i class="fa-solid fa-expand"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="ppid-gallery-info">
                            <i class="fa-solid fa-handshake"></i>
                            <span>
                                Fasilitas meja layanan mendukung proses
                                penerimaan dan pelayanan permohonan informasi
                                publik secara langsung.
                            </span>
                        </div>
                    </section>

                    {{-- BOTTOM INFORMATION --}}
                    <div class="ppid-complete-note ppid-reveal">
                        <div class="ppid-complete-note-icon">
                            <i class="fa-solid fa-info"></i>
                        </div>

                        <div class="ppid-complete-note-text">
                            <strong>Pelayanan Informasi Publik</strong>
                            <span>
                                Fasilitas PPID disiapkan sebagai bagian dari
                                dukungan terhadap pelayanan informasi publik
                                yang mudah, nyaman, dan dapat diakses masyarakat.
                            </span>
                        </div>
                    </div>

                </div>
            </main>

            {{-- LINK TERKAIT --}}
            <aside
                class="ppid-related ppid-reveal"
                aria-label="Navigasi informasi PPID"
            >
                <div class="ppid-related-header">
                    <h3>Link Terkait</h3>
                    <p>Jelajahi informasi dan layanan PPID lainnya</p>
                </div>

                <nav class="ppid-related-list" aria-label="Menu PPID">

                    <a
                        href="{{ url('/menu/ppid/tentang_ppid') }}"
                        class="ppid-related-link"
                    >
                        <span class="ppid-related-icon">
                            <i class="fa-solid fa-circle-info"></i>
                        </span>
                        <span class="ppid-related-text">Tentang PPID</span>
                        <span class="ppid-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a
                        href="{{ url('/menu/ppid/kelengkapan_ppid') }}"
                        class="ppid-related-link active"
                        aria-current="page"
                    >
                        <span class="ppid-related-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </span>
                        <span class="ppid-related-text">Kelengkapan PPID</span>
                        <span class="ppid-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a
                        href="{{ url('/menu/ppid/standar_pelayanan') }}"
                        class="ppid-related-link"
                    >
                        <span class="ppid-related-icon">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </span>
                        <span class="ppid-related-text">Standar Pelayanan</span>
                        <span class="ppid-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a
                        href="{{ url('/menu/ppid/ebulletin') }}"
                        class="ppid-related-link"
                    >
                        <span class="ppid-related-icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="ppid-related-text">eBulletin</span>
                        <span class="ppid-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a
                        href="{{ url('/menu/ppid/layanan') }}"
                        class="ppid-related-link"
                    >
                        <span class="ppid-related-icon">
                            <i class="fa-solid fa-headset"></i>
                        </span>
                        <span class="ppid-related-text">Layanan Pusat Informasi</span>
                        <span class="ppid-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a
                        href="{{ url('/menu/ppid/rancangan_peraturan') }}"
                        class="ppid-related-link"
                    >
                        <span class="ppid-related-icon">
                            <i class="fa-solid fa-file-contract"></i>
                        </span>
                        <span class="ppid-related-text">Rancangan Peraturan</span>
                        <span class="ppid-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                    <a
                        href="{{ url('/menu/ppid/pos_pelayanan') }}"
                        class="ppid-related-link"
                    >
                        <span class="ppid-related-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="ppid-related-text">Pos Pelayanan Informasi Publik</span>
                        <span class="ppid-related-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>

                </nav>
            </aside>

        </div>
    </div>
</div>

{{-- LIGHTBOX --}}
<div
    class="ppid-lightbox"
    id="ppidLightbox"
    role="dialog"
    aria-modal="true"
    aria-label="Pratinjau gambar fasilitas PPID"
    aria-hidden="true"
    onclick="closePpidLightbox(event)"
>
    <div class="ppid-lightbox-content">
        <button
            type="button"
            class="ppid-lightbox-close"
            onclick="closePpidLightbox(event)"
            aria-label="Tutup gambar"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>

        <img
            src=""
            alt="Preview fasilitas PPID"
            class="ppid-lightbox-image"
            id="ppidLightboxImage"
        >
    </div>
</div>

<script>
/* =========================================================
   PPID LIGHTBOX
========================================================= */

(function () {
    const lightbox = document.getElementById('ppidLightbox');
    const lightboxImage = document.getElementById('ppidLightboxImage');

    if (!lightbox || !lightboxImage) return;

    let previousFocus = null;

    window.openPpidLightbox = function (element) {
        const image = element.querySelector('img');

        if (!image) return;

        previousFocus = document.activeElement;

        lightboxImage.src = image.currentSrc || image.src;
        lightboxImage.alt = image.alt || 'Preview fasilitas PPID';

        lightbox.classList.add('show');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';

        const closeButton = lightbox.querySelector('.ppid-lightbox-close');

        if (closeButton) closeButton.focus();
    };

    window.closePpidLightbox = function (event) {
        if (event) {
            if (event.type === 'click') {
                if (event.target === lightbox) {
                    // Klik area gelap menutup lightbox.
                } else if (
                    !event.target.closest('.ppid-lightbox-close')
                ) {
                    return;
                }
            }
        }

        lightbox.classList.remove('show');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        lightboxImage.removeAttribute('src');

        if (previousFocus && typeof previousFocus.focus === 'function') {
            previousFocus.focus();
        }
    };

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && lightbox.classList.contains('show')) {
            window.closePpidLightbox();
        }
    });
})();

/* =========================================================
   SCROLL REVEAL
========================================================= */

document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.ppid-reveal');

    if (!('IntersectionObserver' in window)) {
        elements.forEach(function (element) {
            element.classList.add('show');
        });
        return;
    }

    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.08
        }
    );

    elements.forEach(function (element) {
        observer.observe(element);
    });
});
</script>

@endsection