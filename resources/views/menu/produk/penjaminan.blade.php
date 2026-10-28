
@extends('layouts.main')

@section('title', 'Mekanisme Penjaminan')

@section('content')

<style>
/* =====================================================
   MEKANISME PENJAMINAN — JAMKRIDA NTB SYARIAH
===================================================== */
.mp-page {
    --mp-green: #087a4b;
    --mp-dark: #063d2a;
    --mp-deep: #03281d;
    --mp-gold: #d5a83a;
    --mp-text: #24372f;
    --mp-muted: #68776f;
    min-height: 100vh;
    padding: 48px 20px 80px;
    background:
        radial-gradient(circle at 5% 5%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 95% 12%, rgba(213,168,58,.09), transparent 25%),
        #f7faf8;
}
.mp-container {
    width: min(1250px, 100%);
    margin: auto;
}
.mp-content-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 285px;
    gap: 28px;
    align-items: start;
}
.mp-main { min-width: 0; }

/* HEADER */
.mp-header {
    position: relative;
    overflow: hidden;
    padding: 43px 40px;
    margin-bottom: 28px;
    color: #fff;
    background: linear-gradient(135deg, #063d2a, #087a4b 68%, #0b8d58);
    border-radius: 16px;
    box-shadow: 0 16px 38px rgba(3,40,29,.13);
}
.mp-header::before,
.mp-header::after {
    content: "";
    position: absolute;
    pointer-events: none;
    border: 1px solid rgba(255,255,255,.14);
    border-radius: 50%;
}
.mp-header::before {
    width: 260px;
    height: 260px;
    right: -80px;
    top: -135px;
}
.mp-header::after {
    width: 155px;
    height: 155px;
    right: 70px;
    bottom: -105px;
    border-color: rgba(213,168,58,.4);
}
.mp-eyebrow {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 13px;
    color: #f2d47c;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
}
.mp-eyebrow span {
    display: inline-grid;
    place-items: center;
    width: 29px;
    height: 29px;
    border: 1px solid rgba(242,212,124,.7);
    border-radius: 50%;
    font-size: 11px;
}
.mp-header h1 {
    position: relative;
    z-index: 1;
    margin: 0;
    max-width: 760px;
    font-size: clamp(28px, 4vw, 42px);
    line-height: 1.2;
    letter-spacing: -.5px;
}
.mp-gold-line {
    position: relative;
    z-index: 1;
    width: 68px;
    height: 3px;
    margin: 20px 0;
    background: var(--mp-gold);
    border-radius: 3px;
}
.mp-header p {
    position: relative;
    z-index: 1;
    max-width: 720px;
    margin: 0;
    color: rgba(255,255,255,.87);
    font-size: 14px;
    line-height: 1.85;
}

/* INTRO */
.mp-intro {
    padding: 25px 27px;
    margin-bottom: 28px;
    background: #fff;
    border: 1px solid #e5eee8;
    border-radius: 13px;
    box-shadow: 0 8px 26px rgba(3,40,29,.045);
}
.mp-intro h2 {
    margin: 0 0 10px;
    color: var(--mp-dark);
    font-size: 22px;
}
.mp-intro p {
    margin: 0;
    color: var(--mp-muted);
    font-size: 14px;
    line-height: 1.85;
}

/* IMAGE SECTION */
.mp-section-heading {
    margin: 34px 0 18px;
}
.mp-section-heading small {
    display: block;
    margin-bottom: 6px;
    color: #b48816;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.4px;
    text-transform: uppercase;
}
.mp-section-heading h2 {
    margin: 0;
    color: var(--mp-text);
    font-size: clamp(21px, 3vw, 27px);
    line-height: 1.35;
}
.mp-image-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
}
.mp-image-card {
    overflow: hidden;
    background: #fff;
    border: 1px solid #e2ebe5;
    border-radius: 13px;
    box-shadow: 0 8px 25px rgba(3,40,29,.05);
}
.mp-image-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 17px 20px;
    border-bottom: 1px solid #edf2ee;
}
.mp-image-number {
    flex: 0 0 34px;
    width: 34px;
    height: 34px;
    display: grid;
    place-items: center;
    color: var(--mp-green);
    background: #edf8f3;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 800;
}
.mp-image-card-header h3 {
    margin: 0;
    color: var(--mp-dark);
    font-size: 15px;
    line-height: 1.5;
}
.mp-image-wrap {
    padding: 16px;
    background: #fff;
}
.mp-image-button {
    display: block;
    width: 100%;
    padding: 0;
    border: 0;
    background: #f7faf8;
    cursor: zoom-in;
    border-radius: 8px;
}
.mp-image-button img {
    display: block;
    width: 100%;
    height: auto;
    max-height: none;
    object-fit: contain;
    border-radius: 8px;
    transition: transform .3s ease;
}
.mp-image-button:hover img {
    transform: scale(1.01);
}
.mp-image-hint {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    padding: 0 10px 15px;
    color: #7c8982;
    font-size: 11px;
}

/* SIDEBAR */
.mp-product-sidebar {
    position: sticky;
    top: 95px;
    overflow: hidden;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 16px;
    box-shadow: 0 16px 40px rgba(3,40,29,.075);
}
.mp-sidebar-header {
    position: relative;
    overflow: hidden;
    padding: 22px;
    color: #fff;
    background: linear-gradient(135deg, #063d2a, #087a4b);
}
.mp-sidebar-header::after {
    content: "";
    position: absolute;
    width: 125px;
    height: 125px;
    top: -65px;
    right: -40px;
    border: 1px solid rgba(242,212,124,.3);
    border-radius: 50%;
}
.mp-sidebar-header h2 {
    position: relative;
    z-index: 1;
    margin: 0;
    font-size: 17px;
    font-weight: 800;
}
.mp-sidebar-header p {
    position: relative;
    z-index: 1;
    margin: 6px 0 0;
    color: #d1e5da;
    font-size: 10px;
    line-height: 1.7;
}
.mp-sidebar-list {
    padding: 8px 16px;
}
.mp-sidebar-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    min-height: 62px;
    padding: 11px 8px;
    color: #40534a;
    text-decoration: none;
    border-bottom: 1px solid #edf2ef;
    transition: background .2s ease, color .2s ease, padding .2s ease;
}
.mp-sidebar-link:last-child { border-bottom: 0; }
.mp-sidebar-link:hover {
    color: var(--mp-green);
    padding-left: 12px;
}
.mp-sidebar-link.active {
    margin: 2px -4px;
    padding-left: 12px;
    padding-right: 10px;
    color: var(--mp-green);
    background: #edf8f3;
    border-radius: 9px;
    border-bottom-color: transparent;
}
.mp-sidebar-left {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
}
.mp-sidebar-icon {
    flex: 0 0 27px;
    width: 27px;
    text-align: center;
    color: var(--mp-green);
    font-size: 14px;
}
.mp-sidebar-text {
    font-size: 11px;
    font-weight: 650;
    line-height: 1.55;
}
.mp-sidebar-arrow {
    flex-shrink: 0;
    color: #aab7b0;
    font-size: 10px;
}
.mp-sidebar-link.active .mp-sidebar-arrow { color: var(--mp-gold); }
.mp-sidebar-footer {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    margin: 4px 16px 16px;
    padding: 11px;
    color: #74837b;
    background: #f6faf7;
    border: 1px solid #eaf1ec;
    border-radius: 8px;
    font-size: 9px;
    line-height: 1.65;
}
.mp-sidebar-footer i {
    margin-top: 2px;
    color: var(--mp-gold);
}

/* LIGHTBOX */
.mp-lightbox {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 25px;
    background: rgba(2,20,14,.92);
}
.mp-lightbox.open { display: flex; }
.mp-lightbox-content {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}
.mp-lightbox img {
    display: block;
    max-width: 95%;
    max-height: 90vh;
    width: auto;
    height: auto;
    object-fit: contain;
    border-radius: 5px;
    box-shadow: 0 15px 55px rgba(0,0,0,.3);
}
.mp-lightbox-close {
    position: absolute;
    top: 0;
    right: 0;
    display: grid;
    place-items: center;
    width: 42px;
    height: 42px;
    color: #fff;
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.3);
    border-radius: 50%;
    font-size: 24px;
    cursor: pointer;
}
.mp-lightbox-close:hover { background: var(--mp-green); }
body.mp-lightbox-open { overflow: hidden; }

/* RESPONSIVE */
@media (max-width: 950px) {
    .mp-content-layout { grid-template-columns: 1fr; }
    .mp-product-sidebar {
        position: static;
        order: 2;
    }
    .mp-sidebar-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 5px 12px;
    }
    .mp-sidebar-link {
        border-bottom: 1px solid #edf2ef;
    }
}
@media (max-width: 600px) {
    .mp-page { padding: 28px 13px 48px; }
    .mp-header { padding: 30px 23px; }
    .mp-header h1 { font-size: 28px; }
    .mp-header p { font-size: 13px; }
    .mp-intro { padding: 21px; }
    .mp-intro h2 { font-size: 20px; }
    .mp-sidebar-list { grid-template-columns: 1fr; }
    .mp-image-wrap { padding: 10px; }
    .mp-image-card-header { padding: 14px; }
    .mp-lightbox { padding: 12px; }
    .mp-lightbox img { max-width: 100%; max-height: 85vh; }
}
@media (prefers-reduced-motion: reduce) {
    .mp-image-button img,
    .mp-sidebar-link { transition: none; }
}
</style>

<section class="mp-page">
    <div class="mp-container">
        <div class="mp-content-layout">

            <main class="mp-main">

                <header class="mp-header">
                    <div class="mp-eyebrow">
                        <span>01</span>
                        PRODUK & LAYANAN
                    </div>
                    <h1>Mekanisme Penjaminan</h1>
                    <div class="mp-gold-line"></div>
                    <p>
                        Kenali tahapan dan mekanisme layanan penjaminan
                        PT. Jamkrida NTB Syariah (Perseroda) sebagai bentuk
                        dukungan bagi pelaku usaha dan lembaga keuangan
                        di Nusa Tenggara Barat.
                    </p>
                </header>

                <section class="mp-intro">
                    <h2>Bagaimana Proses Penjaminan Berjalan?</h2>
                    <p>
                        Mekanisme penjaminan menjelaskan alur pengajuan,
                        pemeriksaan dokumen, analisis, hingga penerbitan
                        penjaminan. Setiap permohonan diproses sesuai
                        persyaratan dan ketentuan yang berlaku di perusahaan.
                        Silakan perhatikan infografis berikut untuk memahami
                        alur layanan penjaminan.
                    </p>
                </section>

                <div class="mp-section-heading">
                    <small>Informasi Layanan</small>
                    <h2>Alur dan Mekanisme Penjaminan</h2>
                </div>

                <div class="mp-image-grid">

                    <article class="mp-image-card">
                        <div class="mp-image-card-header">
                            <span class="mp-image-number">01</span>
                            <h3>Mekanisme Penjaminan</h3>
                        </div>
                        <div class="mp-image-wrap">
                            <button class="mp-image-button"
                                type="button"
                                data-image="{{ asset('images/mekanisme_penjaminan.jpeg') }}"
                                data-alt="Infografis Mekanisme Penjaminan"
                                aria-label="Perbesar infografis Mekanisme Penjaminan">
                                <img
                                    src="{{ asset('images/mekanisme_penjaminan.jpeg') }}"
                                    alt="Infografis Mekanisme Penjaminan"
                                    loading="lazy"
                                    onerror="this.closest('.mp-image-card').style.display='none'">
                            </button>
                        </div>
                        <div class="mp-image-hint">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            Klik gambar untuk memperbesar
                        </div>
                    </article>

                    <article class="mp-image-card">
                        <div class="mp-image-card-header">
                            <span class="mp-image-number">02</span>
                            <h3>Mekanisme Penjaminan Langsung</h3>
                        </div>
                        <div class="mp-image-wrap">
                            <button class="mp-image-button"
                                type="button"
                                data-image="{{ asset('images/penjaminan_langsung.jpeg') }}"
                                data-alt="Infografis Penjaminan Langsung"
                                aria-label="Perbesar infografis Penjaminan Langsung">
                                <img
                                    src="{{ asset('images/penjaminan_langsung.jpeg') }}"
                                    alt="Infografis Penjaminan Langsung"
                                    loading="lazy"
                                    onerror="this.closest('.mp-image-card').style.display='none'">
                            </button>
                        </div>
                        <div class="mp-image-hint">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            Klik gambar untuk memperbesar
                        </div>
                    </article>

                    <article class="mp-image-card">
                        <div class="mp-image-card-header">
                            <span class="mp-image-number">03</span>
                            <h3>Mekanisme Penjaminan Tidak Langsung</h3>
                        </div>
                        <div class="mp-image-wrap">
                            <button class="mp-image-button"
                                type="button"
                                data-image="{{ asset('images/penjaminan_tidak_langsung.jpeg') }}"
                                data-alt="Infografis Penjaminan Tidak Langsung"
                                aria-label="Perbesar infografis Penjaminan Tidak Langsung">
                                <img
                                    src="{{ asset('images/penjaminan_tidak_langsung.jpeg') }}"
                                    alt="Infografis Penjaminan Tidak Langsung"
                                    loading="lazy"
                                    onerror="this.closest('.mp-image-card').style.display='none'">
                            </button>
                        </div>
                        <div class="mp-image-hint">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            Klik gambar untuk memperbesar
                        </div>
                    </article>

                </div>
            </main>

            <aside class="mp-product-sidebar">
                <div class="mp-sidebar-header">
                    <h2>Produk & Layanan</h2>
                    <p>Pilihan produk penjaminan PT. Jamkrida NTB Syariah</p>
                </div>

                <nav class="mp-sidebar-list" aria-label="Navigasi produk">

                    <a href="{{ url('/menu/produk/penjaminan') }}"
                       class="mp-sidebar-link active"
                       aria-current="page">
                        <span class="mp-sidebar-left">
                            <i class="fa-solid fa-handshake mp-sidebar-icon"></i>
                            <span class="mp-sidebar-text">Mekanisme Penjaminan</span>
                        </span>
                        <i class="fa-solid fa-chevron-right mp-sidebar-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/produk/pembiayaan_syariah') }}"
                       class="mp-sidebar-link">
                        <span class="mp-sidebar-left">
                            <i class="fa-solid fa-file-invoice-dollar mp-sidebar-icon"></i>
                            <span class="mp-sidebar-text">Penjaminan Pembiayaan Syariah</span>
                        </span>
                        <i class="fa-solid fa-chevron-right mp-sidebar-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/produk/surety_bond') }}"
                       class="mp-sidebar-link">
                        <span class="mp-sidebar-left">
                            <i class="fa-solid fa-building-columns mp-sidebar-icon"></i>
                            <span class="mp-sidebar-text">Penjaminan Kredit Surety Bond</span>
                        </span>
                        <i class="fa-solid fa-chevron-right mp-sidebar-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/produk/bank_garansi') }}"
                       class="mp-sidebar-link">
                        <span class="mp-sidebar-left">
                            <i class="fa-solid fa-shield-halved mp-sidebar-icon"></i>
                            <span class="mp-sidebar-text">Penjaminan Bank Garansi</span>
                        </span>
                        <i class="fa-solid fa-chevron-right mp-sidebar-arrow"></i>
                    </a>

                </nav>

                <div class="mp-sidebar-footer">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Pilih produk untuk melihat informasi dan mekanisme layanan selengkapnya.</span>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- LIGHTBOX GAMBAR -->
<div class="mp-lightbox" id="mpLightbox"
     role="dialog" aria-modal="true" aria-label="Pratinjau gambar">
    <div class="mp-lightbox-content">
        <button class="mp-lightbox-close" id="mpLightboxClose"
                type="button" aria-label="Tutup gambar">&times;</button>
        <img id="mpLightboxImage" src="" alt="">
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const lightbox = document.getElementById('mpLightbox');
    const lightboxImage = document.getElementById('mpLightboxImage');
    const closeButton = document.getElementById('mpLightboxClose');
    let previousFocus = null;

    document.querySelectorAll('.mp-image-button').forEach(function (button) {
        button.addEventListener('click', function () {
            const imageUrl = this.dataset.image;
            if (!imageUrl) return;

            previousFocus = this;
            lightboxImage.src = imageUrl;
            lightboxImage.alt = this.dataset.alt || 'Pratinjau gambar';
            lightbox.classList.add('open');
            document.body.classList.add('mp-lightbox-open');
            closeButton.focus();
        });
    });

    function closeLightbox() {
        lightbox.classList.remove('open');
        document.body.classList.remove('mp-lightbox-open');
        lightboxImage.src = '';
        if (previousFocus) previousFocus.focus();
    }

    closeButton.addEventListener('click', closeLightbox);

    lightbox.addEventListener('click', function (event) {
        if (event.target === lightbox) closeLightbox();
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && lightbox.classList.contains('open')) {
            closeLightbox();
        }
    });
});
</script>

@endsection
