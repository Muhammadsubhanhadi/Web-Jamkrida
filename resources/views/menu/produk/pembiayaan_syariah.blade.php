
@extends('layouts.main')

@section('title', 'Penjaminan Pembiayaan Syariah')

@section('content')

<style>
/* =====================================================
   PENJAMINAN PEMBIAYAAN SYARIAH
===================================================== */
.syariah-page {
    --sy-green: #087a4b;
    --sy-dark: #063d2a;
    --sy-deep: #03281d;
    --sy-gold: #d5a83a;
    --sy-text: #24372f;
    --sy-muted: #68776f;

    min-height: 100vh;
    padding: 48px 20px 80px;
    background:
        radial-gradient(circle at 5% 5%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 95% 12%, rgba(213,168,58,.09), transparent 25%),
        #f7faf8;
}

.syariah-container {
    width: min(1250px, 100%);
    margin: auto;
}

.syariah-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 285px;
    gap: 28px;
    align-items: start;
}

.syariah-main {
    min-width: 0;
}

/* HEADER */
.syariah-header {
    position: relative;
    overflow: hidden;
    padding: 43px 40px;
    margin-bottom: 28px;
    color: #fff;
    background: linear-gradient(135deg, #063d2a, #087a4b 68%, #0b8d58);
    border-radius: 16px;
    box-shadow: 0 16px 38px rgba(3,40,29,.13);
}

.syariah-header::before,
.syariah-header::after {
    content: "";
    position: absolute;
    pointer-events: none;
    border: 1px solid rgba(255,255,255,.14);
    border-radius: 50%;
}

.syariah-header::before {
    width: 260px;
    height: 260px;
    right: -80px;
    top: -135px;
}

.syariah-header::after {
    width: 155px;
    height: 155px;
    right: 70px;
    bottom: -105px;
    border-color: rgba(213,168,58,.4);
}

.syariah-eyebrow {
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

.syariah-eyebrow span {
    display: inline-grid;
    place-items: center;
    width: 29px;
    height: 29px;
    border: 1px solid rgba(242,212,124,.7);
    border-radius: 50%;
    font-size: 11px;
}

.syariah-header h1 {
    position: relative;
    z-index: 1;
    max-width: 760px;
    margin: 0;
    font-size: clamp(28px, 4vw, 42px);
    line-height: 1.2;
    letter-spacing: -.5px;
}

.syariah-gold-line {
    position: relative;
    z-index: 1;
    width: 68px;
    height: 3px;
    margin: 20px 0;
    background: var(--sy-gold);
    border-radius: 3px;
}

.syariah-header p {
    position: relative;
    z-index: 1;
    max-width: 720px;
    margin: 0;
    color: rgba(255,255,255,.87);
    font-size: 14px;
    line-height: 1.85;
}

/* INTRO */
.syariah-intro {
    padding: 25px 27px;
    margin-bottom: 30px;
    background: #fff;
    border: 1px solid #e5eee8;
    border-radius: 13px;
    box-shadow: 0 8px 26px rgba(3,40,29,.045);
}

.syariah-intro h2 {
    margin: 0 0 10px;
    color: var(--sy-dark);
    font-size: 22px;
}

.syariah-intro p {
    margin: 0;
    color: var(--sy-muted);
    font-size: 14px;
    line-height: 1.85;
}

/* SECTION TITLE */
.syariah-section-heading {
    margin: 34px 0 19px;
}

.syariah-section-heading small {
    display: block;
    margin-bottom: 6px;
    color: #b48816;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.4px;
    text-transform: uppercase;
}

.syariah-section-heading h2 {
    margin: 0;
    color: var(--sy-text);
    font-size: clamp(21px, 3vw, 27px);
    line-height: 1.4;
}

.syariah-section-heading p {
    margin: 9px 0 0;
    color: var(--sy-muted);
    font-size: 13px;
    line-height: 1.8;
}

/* PRODUCT CARDS */
.syariah-product-list {
    display: grid;
    gap: 19px;
}

.syariah-product-card {
    position: relative;
    overflow: hidden;
    padding: 25px;
    background: #fff;
    border: 1px solid #e1ebe4;
    border-radius: 13px;
    box-shadow: 0 8px 25px rgba(3,40,29,.045);
    opacity: 0;
    transform: translateY(22px);
    transition:
        opacity .55s ease,
        transform .55s ease,
        box-shadow .25s ease,
        border-color .25s ease;
}

.syariah-product-card.is-visible {
    opacity: 1;
    transform: translateY(0);
}

.syariah-product-card:hover {
    border-color: rgba(8,122,75,.28);
    box-shadow: 0 13px 32px rgba(3,40,29,.08);
}

.syariah-product-top {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 17px;
}

.syariah-product-icon {
    flex: 0 0 51px;
    width: 51px;
    height: 51px;
    display: grid;
    place-items: center;
    color: var(--sy-green);
    background: #edf8f3;
    border: 1px solid #d9eee2;
    border-radius: 11px;
    font-size: 20px;
}

.syariah-product-number {
    display: block;
    margin-bottom: 5px;
    color: #b48816;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.2px;
}

.syariah-product-card h3 {
    margin: 0;
    color: var(--sy-dark);
    font-size: 19px;
    line-height: 1.45;
}

.syariah-product-description {
    margin: 0 0 19px;
    color: var(--sy-muted);
    font-size: 13.5px;
    line-height: 1.85;
}

.syariah-subtitle {
    display: flex;
    align-items: center;
    gap: 9px;
    margin: 0 0 12px;
    color: var(--sy-dark);
    font-size: 13px;
    font-weight: 750;
}

.syariah-subtitle::before {
    content: "";
    width: 3px;
    height: 17px;
    flex: 0 0 3px;
    background: var(--sy-gold);
    border-radius: 2px;
}

.syariah-chip-list {
    display: flex;
    flex-wrap: wrap;
    gap: 9px;
}

.syariah-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 9px 12px;
    color: #365347;
    background: #f5faf7;
    border: 1px solid #e3eee7;
    border-radius: 7px;
    font-size: 12px;
    line-height: 1.5;
}

.syariah-chip i {
    color: var(--sy-green);
    font-size: 11px;
}

.syariah-card-footer {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid #edf2ee;
    color: #77847d;
    font-size: 11px;
    line-height: 1.7;
}

.syariah-card-footer i {
    margin-top: 3px;
    color: var(--sy-gold);
}

/* BOTTOM INFORMATION */
.syariah-info {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-top: 28px;
    padding: 23px;
    background: linear-gradient(120deg, rgba(8,122,75,.07), rgba(213,168,58,.09));
    border: 1px solid rgba(8,122,75,.12);
    border-radius: 12px;
}

.syariah-info-icon {
    flex: 0 0 38px;
    width: 38px;
    height: 38px;
    display: grid;
    place-items: center;
    color: #fff;
    background: var(--sy-green);
    border-radius: 9px;
}

.syariah-info h3 {
    margin: 0 0 6px;
    color: var(--sy-dark);
    font-size: 15px;
}

.syariah-info p {
    margin: 0;
    color: var(--sy-muted);
    font-size: 12px;
    line-height: 1.8;
}

/* SHARED PRODUCT SIDEBAR */
.syariah-product-sidebar {
    position: sticky;
    top: 95px;
    overflow: hidden;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 16px;
    box-shadow: 0 16px 40px rgba(3,40,29,.075);
}

.syariah-sidebar-header {
    position: relative;
    overflow: hidden;
    padding: 22px;
    color: #fff;
    background: linear-gradient(135deg, #063d2a, #087a4b);
}

.syariah-sidebar-header::after {
    content: "";
    position: absolute;
    width: 125px;
    height: 125px;
    top: -65px;
    right: -40px;
    border: 1px solid rgba(242,212,124,.3);
    border-radius: 50%;
}

.syariah-sidebar-header h2 {
    position: relative;
    z-index: 1;
    margin: 0;
    font-size: 17px;
    font-weight: 800;
}

.syariah-sidebar-header p {
    position: relative;
    z-index: 1;
    margin: 6px 0 0;
    color: #d1e5da;
    font-size: 10px;
    line-height: 1.7;
}

.syariah-sidebar-list {
    padding: 8px 16px;
}

.syariah-sidebar-link {
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

.syariah-sidebar-link:last-child {
    border-bottom: 0;
}

.syariah-sidebar-link:hover {
    color: var(--sy-green);
    padding-left: 12px;
}

.syariah-sidebar-link.active {
    margin: 2px -4px;
    padding-left: 12px;
    padding-right: 10px;
    color: var(--sy-green);
    background: #edf8f3;
    border-radius: 9px;
    border-bottom-color: transparent;
}

.syariah-sidebar-left {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
}

.syariah-sidebar-icon {
    flex: 0 0 27px;
    width: 27px;
    color: var(--sy-green);
    text-align: center;
    font-size: 14px;
}

.syariah-sidebar-text {
    font-size: 11px;
    font-weight: 650;
    line-height: 1.55;
}

.syariah-sidebar-arrow {
    flex-shrink: 0;
    color: #aab7b0;
    font-size: 10px;
}

.syariah-sidebar-link.active .syariah-sidebar-arrow {
    color: var(--sy-gold);
}

.syariah-sidebar-footer {
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

.syariah-sidebar-footer i {
    margin-top: 2px;
    color: var(--sy-gold);
}

/* RESPONSIVE */
@media (max-width: 950px) {
    .syariah-layout {
        grid-template-columns: 1fr;
    }

    .syariah-product-sidebar {
        position: static;
        order: 2;
    }

    .syariah-sidebar-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 5px 12px;
    }
}

@media (max-width: 600px) {
    .syariah-page {
        padding: 28px 13px 48px;
    }

    .syariah-header {
        padding: 30px 23px;
    }

    .syariah-header h1 {
        font-size: 28px;
    }

    .syariah-header p {
        font-size: 13px;
    }

    .syariah-intro {
        padding: 21px;
    }

    .syariah-product-card {
        padding: 19px;
    }

    .syariah-product-top {
        gap: 12px;
    }

    .syariah-product-icon {
        flex-basis: 43px;
        width: 43px;
        height: 43px;
        font-size: 17px;
    }

    .syariah-product-card h3 {
        font-size: 17px;
    }

    .syariah-sidebar-list {
        grid-template-columns: 1fr;
    }

    .syariah-chip {
        font-size: 11px;
    }

    .syariah-info {
        padding: 18px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .syariah-product-card {
        opacity: 1;
        transform: none;
        transition: none;
    }

    .syariah-sidebar-link {
        transition: none;
    }
}
</style>

<section class="syariah-page">
    <div class="syariah-container">
        <div class="syariah-layout">

            <!-- KONTEN UTAMA -->
            <main class="syariah-main">

                <header class="syariah-header">
                    <div class="syariah-eyebrow">
                        <span>02</span>
                        PRODUK & LAYANAN
                    </div>

                    <h1>Penjaminan Pembiayaan Syariah</h1>

                    <div class="syariah-gold-line"></div>

                    <p>
                        Layanan penjaminan yang mendukung penyaluran
                        pembiayaan berdasarkan prinsip syariah melalui
                        kerja sama dengan lembaga keuangan dan pihak
                        terkait sesuai ketentuan yang berlaku.
                    </p>
                </header>

                <section class="syariah-intro">
                    <h2>Mengenal Produk Penjaminan Syariah</h2>
                    <p>
                        Penjaminan pembiayaan syariah membantu mendukung
                        penyaluran pembiayaan kepada pihak terjamin dengan
                        memberikan penjaminan atas kewajiban sesuai
                        perjanjian dan ketentuan yang berlaku. Produk
                        penjaminan memiliki peruntukan berbeda sesuai
                        kebutuhan pembiayaan dan kegiatan usaha.
                    </p>
                </section>

                <div class="syariah-section-heading">
                    <small>Jenis Produk</small>
                    <h2>Produk Penjaminan Pembiayaan</h2>
                    <p>
                        Berikut kelompok produk penjaminan yang tersedia
                        pada halaman ini.
                    </p>
                </div>

                <div class="syariah-product-list">

                    <!-- PRODUK 01 -->
                    <article class="syariah-product-card">
                        <div class="syariah-product-top">
                            <div class="syariah-product-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>

                            <div>
                                <span class="syariah-product-number">PRODUK 01</span>
                                <h3>Penjaminan Pembiayaan Produktif</h3>
                            </div>
                        </div>

                        <p class="syariah-product-description">
                            Produk penjaminan untuk mendukung pembiayaan
                            yang digunakan bagi kegiatan usaha produktif,
                            pengembangan usaha, serta kebutuhan modal
                            sesuai perjanjian pembiayaan.
                        </p>

                        <h4 class="syariah-subtitle">Peruntukan Pembiayaan</h4>

                        <div class="syariah-chip-list">
                            <span class="syariah-chip">
                                <i class="fa-solid fa-briefcase"></i>
                                Modal Kerja
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-building"></i>
                                Investasi
                            </span>
                        </div>

                        <div class="syariah-card-footer">
                            <i class="fa-solid fa-circle-info"></i>
                            <span>
                                Persyaratan dan proses penjaminan mengikuti
                                ketentuan produk serta perjanjian dengan
                                lembaga keuangan terkait.
                            </span>
                        </div>
                    </article>

                    <!-- PRODUK 02 -->
                    <article class="syariah-product-card">
                        <div class="syariah-product-top">
                            <div class="syariah-product-icon">
                                <i class="fa-solid fa-people-group"></i>
                            </div>

                            <div>
                                <span class="syariah-product-number">PRODUK 02</span>
                                <h3>Penjaminan Pembiayaan Nonproduktif</h3>
                            </div>
                        </div>

                        <p class="syariah-product-description">
                            Kelompok penjaminan untuk jenis pembiayaan
                            nonproduktif sesuai produk dan ketentuan
                            yang berlaku. Peruntukannya disesuaikan
                            dengan tujuan pembiayaan yang diajukan.
                        </p>

                        <h4 class="syariah-subtitle">Kelompok Pembiayaan</h4>

                        <div class="syariah-chip-list">
                            <span class="syariah-chip">
                                <i class="fa-solid fa-users"></i>
                                KSG
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-house"></i>
                                KPR
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-wallet"></i>
                                Softloan (KTA)
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-landmark"></i>
                                Dewan
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-certificate"></i>
                                Sertifikasi
                            </span>
                        </div>

                        <div class="syariah-card-footer">
                            <i class="fa-solid fa-circle-info"></i>
                            <span>
                                Nama produk dan cakupan pembiayaan perlu
                                mengikuti nomenklatur resmi perusahaan
                                yang digunakan pada dokumen produk.
                            </span>
                        </div>
                    </article>

                    <!-- PRODUK 03 -->
                    <article class="syariah-product-card">
                        <div class="syariah-product-top">
                            <div class="syariah-product-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>

                            <div>
                                <span class="syariah-product-number">PRODUK 03</span>
                                <h3>Penjaminan Kontra Bank Garansi (KBG)</h3>
                            </div>
                        </div>

                        <p class="syariah-product-description">
                            Penjaminan yang berkaitan dengan penerbitan
                            bank garansi untuk mendukung pemenuhan
                            kewajiban pihak terjamin dalam pelaksanaan
                            pekerjaan atau proyek sesuai persyaratan
                            yang berlaku.
                        </p>

                        <h4 class="syariah-subtitle">Jenis Jaminan</h4>

                        <div class="syariah-chip-list">
                            <span class="syariah-chip">
                                <i class="fa-solid fa-file-signature"></i>
                                Bid Bond
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-money-bill-transfer"></i>
                                Uang Muka
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-helmet-safety"></i>
                                Pelaksanaan
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                                Pemeliharaan
                            </span>

                            <span class="syariah-chip">
                                <i class="fa-solid fa-file-invoice"></i>
                                Pembayaran atas SP2D
                            </span>
                        </div>

                        <div class="syariah-card-footer">
                            <i class="fa-solid fa-circle-info"></i>
                            <span>
                                Jenis jaminan, dokumen pendukung, dan
                                ketentuan penjaminan ditentukan berdasarkan
                                kebutuhan proyek serta perjanjian terkait.
                            </span>
                        </div>
                    </article>

                </div>

                <section class="syariah-info">
                    <div class="syariah-info-icon">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>

                    <div>
                        <h3>Informasi Persyaratan</h3>
                        <p>
                            Informasi pada halaman ini merupakan ringkasan
                            jenis produk. Untuk memastikan persyaratan,
                            prosedur, dan dokumen pengajuan yang tepat,
                            gunakan pedoman serta ketentuan resmi
                            PT. Jamkrida NTB Syariah (Perseroda).
                        </p>
                    </div>
                </section>

            </main>

            <!-- SIDEBAR PRODUK & LAYANAN -->
            <aside class="syariah-product-sidebar">

                <div class="syariah-sidebar-header">
                    <h2>Produk & Layanan</h2>
                    <p>
                        Pilihan produk penjaminan PT. Jamkrida NTB Syariah
                    </p>
                </div>

                <nav class="syariah-sidebar-list"
                     aria-label="Navigasi produk penjaminan">

                    <a href="{{ url('/menu/produk/penjaminan') }}"
                       class="syariah-sidebar-link">
                        <span class="syariah-sidebar-left">
                            <i class="fa-solid fa-handshake syariah-sidebar-icon"></i>
                            <span class="syariah-sidebar-text">
                                Mekanisme Penjaminan
                            </span>
                        </span>
                        <i class="fa-solid fa-chevron-right syariah-sidebar-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/produk/pembiayaan_syariah') }}"
                       class="syariah-sidebar-link active"
                       aria-current="page">
                        <span class="syariah-sidebar-left">
                            <i class="fa-solid fa-file-invoice-dollar syariah-sidebar-icon"></i>
                            <span class="syariah-sidebar-text">
                                Penjaminan Pembiayaan Syariah
                            </span>
                        </span>
                        <i class="fa-solid fa-chevron-right syariah-sidebar-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/produk/surety_bond') }}"
                       class="syariah-sidebar-link">
                        <span class="syariah-sidebar-left">
                            <i class="fa-solid fa-building-columns syariah-sidebar-icon"></i>
                            <span class="syariah-sidebar-text">
                                Penjaminan Kredit Surety Bond
                            </span>
                        </span>
                        <i class="fa-solid fa-chevron-right syariah-sidebar-arrow"></i>
                    </a>

                    <a href="{{ url('/menu/produk/bank_garansi') }}"
                       class="syariah-sidebar-link">
                        <span class="syariah-sidebar-left">
                            <i class="fa-solid fa-shield-halved syariah-sidebar-icon"></i>
                            <span class="syariah-sidebar-text">
                                Penjaminan Bank Garansi
                            </span>
                        </span>
                        <i class="fa-solid fa-chevron-right syariah-sidebar-arrow"></i>
                    </a>

                </nav>

                <div class="syariah-sidebar-footer">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Pilih produk untuk melihat informasi dan mekanisme
                        layanan selengkapnya.
                    </span>
                </div>

            </aside>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.syariah-product-card');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });

        cards.forEach(function (card, index) {
            card.style.transitionDelay = (index * 100) + 'ms';
            observer.observe(card);
        });
    } else {
        cards.forEach(function (card) {
            card.classList.add('is-visible');
        });
    }
});
</script>

@endsection