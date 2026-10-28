
@extends('layouts.main')

@section('title', 'Mekanisme Kredit Surety Bond')

@section('content')

<style>
/* =====================================================
   SURETY BOND — JAMKRIDA NTB SYARIAH
===================================================== */
.surety-page {
    --green: #087a4b;
    --green-dark: #063d2a;
    --green-deep: #03281d;
    --gold: #d5a83a;
    --gold-light: #f2d47c;
    --text: #263b31;
    --muted: #68776f;
    --border: #e1ebe5;

    min-height: 100vh;
    padding: 55px 20px 90px;
    background:
        radial-gradient(circle at 8% 8%, rgba(8,122,75,.08), transparent 28%),
        radial-gradient(circle at 92% 15%, rgba(213,168,58,.10), transparent 28%),
        #f7faf8;
}

.surety-page *,
.surety-page *::before,
.surety-page *::after {
    box-sizing: border-box;
}

.surety-container {
    width: min(1250px, 100%);
    margin: auto;
}

.surety-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 285px;
    gap: 28px;
    align-items: start;
}

.surety-main {
    min-width: 0;
}

/* HERO */
.surety-header {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 48px 45px;
    margin-bottom: 32px;
    color: #fff;
    background: linear-gradient(135deg, var(--green-dark), var(--green) 65%, #0a8b57);
    border-radius: 18px;
    box-shadow: 0 18px 45px rgba(3,40,29,.15);
    animation: suretyFade .7s ease both;
}

.surety-header::before,
.surety-header::after {
    content: "";
    position: absolute;
    z-index: -1;
    border: 1px solid rgba(255,255,255,.13);
    border-radius: 50%;
    pointer-events: none;
}

.surety-header::before {
    width: 280px;
    height: 280px;
    right: -100px;
    top: -150px;
}

.surety-header::after {
    width: 190px;
    height: 190px;
    right: 70px;
    bottom: -130px;
    border-color: rgba(213,168,58,.35);
}

.surety-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    color: var(--gold-light);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.surety-label span {
    width: 30px;
    height: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(242,212,124,.7);
    border-radius: 50%;
    font-size: 11px;
}

.surety-header h1 {
    max-width: 850px;
    margin: 0;
    color: #fff;
    font-size: clamp(30px, 5vw, 46px);
    line-height: 1.15;
    letter-spacing: -.7px;
}

.surety-header p {
    max-width: 760px;
    margin: 17px 0 0;
    color: rgba(255,255,255,.88);
    font-size: 14px;
    line-height: 1.9;
}

.surety-gold-line {
    width: 75px;
    height: 3px;
    margin-top: 23px;
    background: var(--gold);
    border-radius: 4px;
}

/* INTRO */
.surety-intro {
    padding: 30px;
    margin-bottom: 32px;
    background: #fff;
    border: 1px solid rgba(8,122,75,.09);
    border-radius: 14px;
    box-shadow: 0 10px 30px rgba(0,0,0,.045);
    animation: fadeUp .7s ease both;
}

.surety-intro h2 {
    margin: 0 0 12px;
    color: var(--green-dark);
    font-size: 23px;
}

.surety-intro p {
    margin: 0;
    color: #56645e;
    font-size: 14px;
    line-height: 1.9;
}

/* SECTION HEADINGS */
.surety-section-heading {
    margin: 42px 0 22px;
}

.surety-section-heading small {
    display: block;
    margin-bottom: 7px;
    color: #b48816;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.4px;
    text-transform: uppercase;
}

.surety-section-heading h2 {
    margin: 0;
    color: #17221e;
    font-size: 28px;
    line-height: 1.35;
}

.surety-section-heading p {
    margin: 9px 0 0;
    color: var(--muted);
    font-size: 13px;
    line-height: 1.8;
}

/* TIMELINE */
.surety-timeline {
    position: relative;
    padding: 5px 0 5px 32px;
}

.surety-timeline::before {
    content: "";
    position: absolute;
    left: 10px;
    top: 15px;
    bottom: 15px;
    width: 2px;
    background: linear-gradient(to bottom, var(--green), var(--gold));
}

.surety-timeline-item {
    position: relative;
    margin-bottom: 17px;
    padding: 22px 24px;
    background: #fff;
    border: 1px solid rgba(8,122,75,.09);
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,.04);
    opacity: 0;
    transform: translateX(25px);
    transition: opacity .6s ease, transform .6s ease;
}

.surety-timeline-item.show {
    opacity: 1;
    transform: translateX(0);
}

.surety-timeline-item::before {
    content: "";
    position: absolute;
    left: -29px;
    top: 27px;
    width: 14px;
    height: 14px;
    background: #fff;
    border: 4px solid var(--green);
    border-radius: 50%;
}

.surety-timeline-number {
    display: inline-block;
    margin-bottom: 7px;
    color: #b48816;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1px;
}

.surety-timeline-item h3 {
    margin: 0 0 7px;
    color: #17372b;
    font-size: 17px;
}

.surety-timeline-item p {
    margin: 0;
    color: #68756f;
    font-size: 13px;
    line-height: 1.8;
}

/* REQUIREMENTS */
.surety-requirements {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 15px;
}

.surety-requirement {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 20px;
    background: #fff;
    border: 1px solid rgba(8,122,75,.09);
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,.04);
    opacity: 0;
    transform: translateY(22px);
    transition: opacity .6s ease, transform .6s ease;
}

.surety-requirement.show {
    opacity: 1;
    transform: translateY(0);
}

.surety-check {
    flex: 0 0 34px;
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(8,122,75,.10);
    color: var(--green);
    border-radius: 9px;
    font-size: 14px;
    font-weight: 800;
}

.surety-requirement strong {
    display: block;
    margin-bottom: 5px;
    color: #17372b;
    font-size: 13px;
}

.surety-requirement span {
    display: block;
    color: #69766f;
    font-size: 12px;
    line-height: 1.8;
}

/* CLOSING CARD */
.surety-info {
    position: relative;
    overflow: hidden;
    margin-top: 38px;
    padding: 30px;
    background: linear-gradient(135deg, rgba(8,122,75,.08), rgba(213,168,58,.09));
    border: 1px solid rgba(8,122,75,.10);
    border-radius: 14px;
    text-align: center;
}

.surety-info-icon {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 13px;
    color: var(--green);
    background: #fff;
    border: 1px solid #e3eee7;
    border-radius: 12px;
    font-size: 19px;
}

.surety-info strong {
    display: block;
    margin-bottom: 7px;
    color: var(--green-dark);
    font-size: 17px;
}

.surety-info p {
    max-width: 750px;
    margin: auto;
    color: #63716b;
    font-size: 12px;
    line-height: 1.8;
}

/* =====================================================
   SIDEBAR PRODUK — SAMA DENGAN HALAMAN SEBELUMNYA
===================================================== */
.product-menu {
    position: sticky;
    top: 95px;
    min-width: 0;
    overflow: hidden;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 16px;
    box-shadow: 0 18px 45px rgba(3,40,29,.08);
    animation: productMenuReveal .8s ease .15s both;
}

.product-menu-header {
    position: relative;
    overflow: hidden;
    padding: 22px;
    color: #fff;
    background: linear-gradient(135deg, var(--green-dark), var(--green));
}

.product-menu-header::before {
    content: "";
    position: absolute;
    width: 130px;
    height: 130px;
    right: -45px;
    top: -60px;
    border: 1px solid rgba(242,212,124,.35);
    border-radius: 50%;
    pointer-events: none;
}

.product-menu-header::after {
    content: "";
    position: absolute;
    width: 75px;
    height: 75px;
    right: 28px;
    bottom: -48px;
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 50%;
    pointer-events: none;
}

.product-menu-header h3 {
    position: relative;
    z-index: 1;
    margin: 0;
    color: #fff;
    font-size: 17px;
    font-weight: 800;
}

.product-menu-header p {
    position: relative;
    z-index: 1;
    margin: 5px 0 0;
    color: #c4ddd1;
    font-size: 10px;
    line-height: 1.7;
}

.product-menu-list {
    padding: 8px 18px;
}

.product-menu-link {
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

.product-menu-link:last-child {
    border-bottom: none;
}

.product-menu-link:hover {
    padding-left: 10px;
    color: var(--green);
}

.product-menu-link.active {
    margin: 0 -5px;
    padding-left: 10px;
    padding-right: 10px;
    color: var(--green);
    background: #edf8f3;
    border-radius: 9px;
}

.product-menu-left {
    display: flex;
    align-items: center;
    gap: 11px;
    min-width: 0;
}

.product-menu-icon {
    flex-shrink: 0;
    width: 27px;
    color: var(--green);
    text-align: center;
    font-size: 14px;
}

.product-menu-text {
    font-size: 10.5px;
    font-weight: 650;
    line-height: 1.6;
}

.product-menu-arrow {
    flex-shrink: 0;
    color: #aab7b0;
    font-size: 9px;
    transition: transform .25s ease, color .25s ease;
}

.product-menu-link:hover .product-menu-arrow {
    color: var(--gold);
    transform: translateX(3px);
}

.product-menu-link.active .product-menu-arrow {
    color: var(--gold);
}

.product-menu-footer {
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

.product-menu-footer i {
    margin-top: 2px;
    color: var(--gold);
    font-size: 12px;
}

/* ANIMATION */
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes suretyFade {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes productMenuReveal {
    from { opacity: 0; transform: translateX(20px); }
    to { opacity: 1; transform: translateX(0); }
}

/* TABLET */
@media (max-width: 950px) {
    .surety-layout {
        grid-template-columns: minmax(0, 1fr);
    }

    .product-menu {
        position: relative;
        top: auto;
        order: 2;
    }
}

/* MOBILE */
@media (max-width: 768px) {
    .surety-page {
        padding: 30px 15px 60px;
    }

    .surety-header {
        padding: 35px 25px;
        border-radius: 14px;
    }

    .surety-header h1 {
        font-size: 32px;
    }

    .surety-header p {
        font-size: 13px;
    }

    .surety-intro {
        padding: 23px;
    }

    .surety-requirements {
        grid-template-columns: 1fr;
    }

    .surety-timeline {
        padding-left: 28px;
    }

    .surety-timeline-item {
        padding: 20px;
    }

    .surety-section-heading h2 {
        font-size: 24px;
    }

    .product-menu {
        border-radius: 14px;
    }
}

@media (max-width: 480px) {
    .surety-page {
        padding: 20px 12px 45px;
    }

    .surety-header {
        padding: 30px 20px;
    }

    .surety-header h1 {
        font-size: 27px;
    }

    .surety-header p {
        font-size: 12.5px;
    }

    .surety-intro {
        padding: 20px;
    }

    .surety-intro h2 {
        font-size: 20px;
    }

    .surety-intro p {
        font-size: 13px;
    }

    .surety-timeline {
        padding-left: 24px;
    }

    .surety-timeline-item::before {
        left: -22px;
    }

    .surety-timeline-item h3 {
        font-size: 15px;
    }

    .surety-requirement {
        padding: 17px;
    }

    .product-menu-header {
        padding: 19px 20px;
    }

    .product-menu-list {
        padding: 7px 16px;
    }

    .product-menu-link {
        min-height: 59px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .surety-header,
    .surety-intro,
    .product-menu,
    .surety-timeline-item,
    .surety-requirement {
        animation: none !important;
        transition: none !important;
        transform: none !important;
    }

    .surety-timeline-item,
    .surety-requirement {
        opacity: 1 !important;
    }
}
</style>

<section class="surety-page">
    <div class="surety-container">
        <div class="surety-layout">

            {{-- KONTEN UTAMA --}}
            <main class="surety-main">

                <header class="surety-header">
                    <div class="surety-label">
                        <span>03</span>
                        PRODUK
                    </div>

                    <h1>Mekanisme Kredit Surety Bond</h1>

                    <div class="surety-gold-line"></div>

                    <p>
                        Penjaminan bagi pengusaha jasa konstruksi dan
                        pengadaan barang atau jasa untuk mendukung
                        pelaksanaan proyek yang dibiayai melalui APBD
                        Provinsi maupun APBD Kabupaten/Kota di
                        Nusa Tenggara Barat.
                    </p>
                </header>

                {{-- PENJELASAN --}}
                <section class="surety-intro">
                    <h2>Penjaminan Surety Bond</h2>
                    <p>
                        Penjaminan Surety Bond merupakan penjaminan
                        kredit yang diberikan kepada pengusaha jasa
                        konstruksi serta pengadaan barang dan jasa yang
                        mengerjakan proyek-proyek yang dibiayai oleh
                        APBD I NTB maupun APBD II Kabupaten/Kota.
                    </p>
                </section>

                {{-- MEKANISME --}}
                <div class="surety-section-heading">
                    <small>Alur Penjaminan</small>
                    <h2>Mekanisme Surety Bond</h2>
                    <p>
                        Berikut tahapan umum proses pengajuan penjaminan
                        Surety Bond.
                    </p>
                </div>

                <div class="surety-timeline">
                    <article class="surety-timeline-item">
                        <span class="surety-timeline-number">TAHAP 01</span>
                        <h3>Pengajuan Penjaminan</h3>
                        <p>
                            Pengusaha atau kontraktor mengajukan
                            permohonan penjaminan Surety Bond sesuai
                            dengan kebutuhan proyek yang akan dilaksanakan.
                        </p>
                    </article>

                    <article class="surety-timeline-item">
                        <span class="surety-timeline-number">TAHAP 02</span>
                        <h3>Verifikasi Persyaratan</h3>
                        <p>
                            Dokumen dan persyaratan penjaminan diperiksa
                            untuk memastikan kesesuaian dengan ketentuan
                            yang berlaku.
                        </p>
                    </article>

                    <article class="surety-timeline-item">
                        <span class="surety-timeline-number">TAHAP 03</span>
                        <h3>Analisis Penjaminan</h3>
                        <p>
                            Dilakukan penilaian terhadap proyek,
                            kontraktor, serta dokumen pendukung sebagai
                            bagian dari proses analisis penjaminan.
                        </p>
                    </article>

                    <article class="surety-timeline-item">
                        <span class="surety-timeline-number">TAHAP 04</span>
                        <h3>Keputusan Penjaminan</h3>
                        <p>
                            Setelah proses analisis selesai, dilakukan
                            keputusan atas permohonan penjaminan sesuai
                            dengan ketentuan perusahaan.
                        </p>
                    </article>

                    <article class="surety-timeline-item">
                        <span class="surety-timeline-number">TAHAP 05</span>
                        <h3>Penerbitan Surety Bond</h3>
                        <p>
                            Surety Bond diterbitkan setelah persyaratan
                            penjaminan terpenuhi dan proses administrasi
                            diselesaikan.
                        </p>
                    </article>
                </div>

                {{-- PERSYARATAN --}}
                <div class="surety-section-heading">
                    <small>Persyaratan</small>
                    <h2>Syarat Penjaminan</h2>
                    <p>
                        Beberapa persyaratan yang tercantum dalam
                        informasi produk Surety Bond.
                    </p>
                </div>

                <div class="surety-requirements">
                    <article class="surety-requirement">
                        <div class="surety-check">✓</div>
                        <div>
                            <strong>Dana Proyek</strong>
                            <span>Dana proyek berada di Bank NTB.</span>
                        </div>
                    </article>

                    <article class="surety-requirement">
                        <div class="surety-check">✓</div>
                        <div>
                            <strong>Domisili Kontraktor</strong>
                            <span>
                                Kontraktor berdomisili di wilayah
                                Nusa Tenggara Barat.
                            </span>
                        </div>
                    </article>

                    <article class="surety-requirement">
                        <div class="surety-check">✓</div>
                        <div>
                            <strong>Lokasi Proyek</strong>
                            <span>
                                Lokasi proyek berada di wilayah
                                Nusa Tenggara Barat.
                            </span>
                        </div>
                    </article>

                    <article class="surety-requirement">
                        <div class="surety-check">✓</div>
                        <div>
                            <strong>SPK / Kontrak</strong>
                            <span>
                                Tersedia Surat Perintah Kerja (SPK)
                                atau dokumen kontrak proyek.
                            </span>
                        </div>
                    </article>

                    <article class="surety-requirement">
                        <div class="surety-check">✓</div>
                        <div>
                            <strong>Hak Subrogasi</strong>
                            <span>
                                Memenuhi ketentuan terkait hak
                                subrogasi dalam proses penjaminan.
                            </span>
                        </div>
                    </article>
                </div>

                {{-- PENUTUP --}}
                <section class="surety-info">
                    <div class="surety-info-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <strong>
                        Penjaminan untuk Proyek yang Lebih Terpercaya
                    </strong>

                    <p>
                        Surety Bond memberikan dukungan penjaminan bagi
                        pelaksanaan proyek konstruksi serta pengadaan
                        barang dan jasa sesuai dengan ketentuan yang
                        berlaku. Untuk persyaratan terbaru, silakan
                        mengacu pada ketentuan resmi perusahaan.
                    </p>
                </section>

            </main>

            {{-- SIDEBAR PRODUK --}}
            <aside class="product-menu">
                <div class="product-menu-header">
                    <h3>Produk &amp; Layanan</h3>
                    <p>
                        Pilihan produk penjaminan PT. Jamkrida NTB Syariah
                    </p>
                </div>

                <nav class="product-menu-list" aria-label="Menu Produk">
                    <a
                        href="{{ url('/menu/produk/penjaminan') }}"
                        class="product-menu-link"
                    >
                        <span class="product-menu-left">
                            <i class="fa-solid fa-handshake product-menu-icon"></i>
                            <span class="product-menu-text">
                                Mekanisme Penjaminan
                            </span>
                        </span>
                        <i class="fa-solid fa-chevron-right product-menu-arrow"></i>
                    </a>

                    <a
                        href="{{ url('/menu/produk/pembiayaan_syariah') }}"
                        class="product-menu-link"
                    >
                        <span class="product-menu-left">
                            <i class="fa-solid fa-file-invoice-dollar product-menu-icon"></i>
                            <span class="product-menu-text">
                                Penjaminan Pembiayaan Syariah
                            </span>
                        </span>
                        <i class="fa-solid fa-chevron-right product-menu-arrow"></i>
                    </a>

                    <a
                        href="{{ url('/menu/produk/surety_bond') }}"
                        class="product-menu-link active"
                        aria-current="page"
                    >
                        <span class="product-menu-left">
                            <i class="fa-solid fa-building-columns product-menu-icon"></i>
                            <span class="product-menu-text">
                                Penjaminan Kredit Surety Bond
                            </span>
                        </span>
                        <i class="fa-solid fa-chevron-right product-menu-arrow"></i>
                    </a>

                    <a
                        href="{{ url('/menu/produk/bank_garansi') }}"
                        class="product-menu-link"
                    >
                        <span class="product-menu-left">
                            <i class="fa-solid fa-shield-halved product-menu-icon"></i>
                            <span class="product-menu-text">
                                Penjaminan Bank Garansi
                            </span>
                        </span>
                        <i class="fa-solid fa-chevron-right product-menu-arrow"></i>
                    </a>
                </nav>

                <div class="product-menu-footer">
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
    const animatedItems = document.querySelectorAll(
        '.surety-timeline-item, .surety-requirement'
    );

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, currentObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    currentObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });

        animatedItems.forEach((item, index) => {
            item.style.transitionDelay = `${(index % 5) * 0.07}s`;
            observer.observe(item);
        });
    } else {
        animatedItems.forEach((item) => item.classList.add('show'));
    }
});
</script>

@endsection