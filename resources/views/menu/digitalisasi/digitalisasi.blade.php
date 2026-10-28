
@extends('layouts.main')

@section('title', 'Transformasi Digital Perusahaan - PT Jamkrida NTB Syariah')

@section('content')

<style>
    /* =====================================================
       1. WARNA DAN DASAR HALAMAN
    ===================================================== */
    .transformasi-page {
        --td-green: #087a4b;
        --td-dark: #063d2a;
        --td-deep: #03281d;
        --td-gold: #d5a83a;
        --td-light: #f3f8f5;

        color: #26382e;
        padding: 45px 0 65px;
        background:
            radial-gradient(circle at top left, rgba(8,122,75,.06), transparent 35%),
            #f7f9f7;
        font-family: inherit;
    }

    .transformasi-page *,
    .transformasi-page *::before,
    .transformasi-page *::after {
        box-sizing: border-box;
    }

    .transformasi-page .td-container {
        width: min(1180px, 92%);
        margin: 0 auto;
    }

    /* =====================================================
       2. BAGIAN HEADER
    ===================================================== */
    .transformasi-page .td-heading {
        position: relative;
        overflow: hidden;
        padding: 32px 35px;
        margin-bottom: 25px;
        border-radius: 10px;
        background: linear-gradient(115deg, var(--td-deep), var(--td-green));
        color: #fff;
        box-shadow: 0 10px 28px rgba(3,40,29,.12);
    }

    .transformasi-page .td-heading::after {
        content: "";
        position: absolute;
        right: -65px;
        top: -100px;
        width: 280px;
        height: 280px;
        border: 35px solid rgba(255,255,255,.06);
        border-radius: 50%;
        pointer-events: none;
    }

    .transformasi-page .td-eyebrow {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        color: var(--td-gold);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .transformasi-page .td-heading h1 {
        position: relative;
        z-index: 1;
        margin: 0 0 12px;
        color: #fff;
        font-size: clamp(24px, 4vw, 36px);
        font-weight: 800;
        line-height: 1.3;
    }

    .transformasi-page .td-heading p {
        position: relative;
        z-index: 1;
        max-width: 760px;
        margin: 0;
        color: rgba(255,255,255,.85);
        font-size: 14px;
        line-height: 1.9;
    }

    /* =====================================================
       3. KARTU UTAMA ROADMAP
    ===================================================== */
    .transformasi-page .td-card {
        overflow: hidden;
        margin-bottom: 25px;
        border: 1px solid #e4ebe6;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 5px 22px rgba(6,61,42,.045);
    }

    .transformasi-page .td-card-heading {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 18px 23px;
        border-bottom: 1px solid #e8eee9;
        background: linear-gradient(110deg, #fff, #f5faf6);
    }

    .transformasi-page .td-card-heading .td-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        flex-shrink: 0;
        border-radius: 8px;
        background: var(--td-green);
        color: #fff;
    }

    .transformasi-page .td-card-heading h2 {
        margin: 0;
        color: var(--td-dark);
        font-size: 17px;
        font-weight: 800;
    }

    .transformasi-page .td-card-heading p {
        margin: 4px 0 0;
        color: #77857b;
        font-size: 12px;
        line-height: 1.7;
    }

    /* =====================================================
       4. GAMBAR ROADMAP
       Rasio gambar dijaga agar tidak terpotong.
    ===================================================== */
    .transformasi-page .td-roadmap-area {
        padding: 25px;
        background: #fff;
    }

    .transformasi-page .td-roadmap-image {
        display: block;
        width: 100%;
        height: auto;
        max-height: 780px;
        margin: 0 auto;
        object-fit: contain;
        object-position: center;
        border-radius: 5px;
    }

    .transformasi-page .td-image-caption {
        margin: 12px 0 0;
        color: #7e8c82;
        font-size: 12px;
        font-style: italic;
        line-height: 1.7;
        text-align: center;
    }

    /* Tampilan apabila gambar belum diunggah */
    .transformasi-page .td-image-empty {
        display: flex;
        min-height: 280px;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 12px;
        padding: 30px;
        border: 2px dashed #d5e2d8;
        border-radius: 8px;
        background: #f8fbf9;
        color: #75877a;
        text-align: center;
    }

    .transformasi-page .td-image-empty i {
        color: var(--td-green);
        font-size: 42px;
    }

    .transformasi-page .td-image-empty strong {
        color: var(--td-dark);
        font-size: 15px;
    }

    .transformasi-page .td-image-empty p {
        margin: 0;
        font-size: 12px;
        line-height: 1.7;
    }

    /* =====================================================
       5. DESKRIPSI TRANSFORMASI DIGITAL
    ===================================================== */
    .transformasi-page .td-intro {
        padding: 24px;
        border: 1px solid #e5ece7;
        border-left: 4px solid var(--td-gold);
        border-radius: 8px;
        background: #fff;
    }

    .transformasi-page .td-intro h2 {
        margin: 0 0 10px;
        color: var(--td-green);
        font-size: 21px;
        font-weight: 800;
        line-height: 1.5;
    }

    .transformasi-page .td-intro p {
        margin: 0;
        color: #4c5d52;
        font-size: 13px;
        line-height: 1.9;
        text-align: justify;
    }

    /* =====================================================
       6. TIGA KOLOM TAHAPAN PROGRAM
    ===================================================== */
    .transformasi-page .td-stage-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
        margin-top: 24px;
    }

    .transformasi-page .td-stage {
        position: relative;
        overflow: hidden;
        padding: 22px 20px;
        border: 1px solid #e4ebe6;
        border-top: 4px solid var(--stage-color, var(--td-green));
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 5px 18px rgba(6,61,42,.04);
    }

    .transformasi-page .td-stage-header {
        display: flex;
        align-items: flex-start;
        gap: 11px;
        margin-bottom: 16px;
    }

    .transformasi-page .td-stage-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        flex-shrink: 0;
        border-radius: 8px;
        background: var(--stage-soft, #e7f5eb);
        color: var(--stage-color, var(--td-green));
        font-size: 15px;
    }

    .transformasi-page .td-stage h3 {
        margin: 0;
        color: var(--stage-color, var(--td-dark));
        font-size: 13px;
        font-weight: 800;
        line-height: 1.7;
    }

    .transformasi-page .td-stage ul {
        padding-left: 19px;
        margin: 0;
    }

    .transformasi-page .td-stage li {
        padding-left: 2px;
        margin-bottom: 9px;
        color: #4d5b51;
        font-size: 12px;
        line-height: 1.8;
        overflow-wrap: anywhere;
    }

    .transformasi-page .td-stage li:last-child {
        margin-bottom: 0;
    }

    /* Warna pembeda tahapan */
    .transformasi-page .td-stage.stage-done {
        --stage-color: #16834a;
        --stage-soft: #e6f6ec;
    }

    .transformasi-page .td-stage.stage-process {
        --stage-color: #1679c2;
        --stage-soft: #e8f3fc;
    }

    .transformasi-page .td-stage.stage-planned {
        --stage-color: #b58a16;
        --stage-soft: #fff6d9;
    }

    /* =====================================================
       7. KETERANGAN BAGIAN BAWAH
    ===================================================== */
    .transformasi-page .td-footer-note {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-top: 25px;
        padding: 17px 20px;
        border: 1px solid #e2ebe4;
        border-radius: 8px;
        background: #eef6f0;
    }

    .transformasi-page .td-footer-note i {
        margin-top: 3px;
        color: var(--td-green);
        font-size: 17px;
    }

    .transformasi-page .td-footer-note p {
        margin: 0;
        color: #4c6152;
        font-size: 12px;
        line-height: 1.8;
    }

    /* =====================================================
       8. RESPONSIF TABLET DAN HP
    ===================================================== */
    @media (max-width: 850px) {
        .transformasi-page .td-stage-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .transformasi-page .td-stage.stage-planned {
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 580px) {
        .transformasi-page {
            padding: 25px 0 40px;
        }

        .transformasi-page .td-container {
            width: 94%;
        }

        .transformasi-page .td-heading {
            padding: 24px 20px;
        }

        .transformasi-page .td-heading p {
            font-size: 12px;
        }

        .transformasi-page .td-card-heading {
            padding: 15px;
        }

        .transformasi-page .td-card-heading h2 {
            font-size: 15px;
        }

        .transformasi-page .td-roadmap-area {
            padding: 12px;
        }

        .transformasi-page .td-intro {
            padding: 18px;
        }

        .transformasi-page .td-intro h2 {
            font-size: 18px;
        }

        .transformasi-page .td-intro p {
            font-size: 12px;
        }

        .transformasi-page .td-stage-grid {
            grid-template-columns: 1fr;
            gap: 13px;
        }

        .transformasi-page .td-stage.stage-planned {
            grid-column: auto;
        }

        .transformasi-page .td-stage {
            padding: 18px;
        }
    }
</style>

<div class="transformasi-page">
    <div class="td-container">

        {{-- =================================================
             BAGIAN A: JUDUL UTAMA
        ================================================= --}}
        <header class="td-heading">
            <div class="td-eyebrow">
                <i class="fas fa-microchip"></i>
                Inovasi dan Pengembangan Perusahaan
            </div>

            <h1>Transformasi Digital Perusahaan</h1>

            <p>
                PT Jamkrida NTB Syariah terus mengembangkan proses bisnis
                dan layanan berbasis teknologi untuk mendukung pelayanan
                penjaminan yang lebih cepat, transparan, dan akuntabel.
            </p>
        </header>

        {{-- =================================================
             BAGIAN B: GAMBAR ROADMAP
             Gambar diambil dari data jumbotron yang dikirim controller.
             Hanya gambar ini yang nantinya dikelola melalui admin.
        ================================================= --}}
        <section class="td-card">

            <div class="td-card-heading">
                <div class="td-icon">
                    <i class="fas fa-route"></i>
                </div>

                <div>
                    <h2>Roadmap Transformasi Digital</h2>
                    <p>
                        Gambaran tahapan pengembangan digitalisasi perusahaan.
                    </p>
                </div>
            </div>

            <div class="td-roadmap-area">

                @if (isset($jumbotron) && !empty($jumbotron->gambar))

                    <img
                        src="{{ \Illuminate\Support\Str::startsWith($jumbotron->gambar, ['http://', 'https://']) ? $jumbotron->gambar : asset('storage/' . ltrim($jumbotron->gambar, '/')) }}"
                        alt="Roadmap Transformasi Digital PT Jamkrida NTB Syariah"
                        class="td-roadmap-image"
                        loading="eager"
                    >

                @else

                    <div class="td-image-empty">
                        <i class="fas fa-image"></i>

                        <strong>Gambar Roadmap Belum Tersedia</strong>

                        <p>
                            Silakan unggah gambar roadmap melalui halaman
                            administrasi Digitalisasi.
                        </p>
                    </div>

                @endif

                <p class="td-image-caption">
                    Roadmap Transformasi Digital PT Jamkrida NTB Syariah
                </p>

            </div>
        </section>

        {{-- =================================================
             BAGIAN C: DESKRIPSI TRANSFORMASI DIGITAL
             Teks ini tetap dan tidak termasuk CRUD.
        ================================================= --}}
        <section class="td-intro">
            <h2>Membangun Ekosistem Keuangan Syariah Modern</h2>

            <p>
                Di era akselerasi teknologi, <strong>PT Jamkrida NTB Syariah</strong>
                berkomitmen menghadirkan layanan yang lebih cepat, transparan,
                dan akuntabel melalui inisiatif transformasi digital menyeluruh.
                Pengembangan dilakukan secara bertahap dengan memperhatikan
                kebutuhan operasional, kualitas pelayanan, keamanan informasi,
                serta efektivitas proses bisnis perusahaan.
            </p>
        </section>

        {{-- =================================================
             BAGIAN D: TAHAPAN DIGITALISASI YANG SUDAH BERJALAN
        ================================================= --}}
        <section class="td-stage-grid">

            {{-- TAHAP 1 --}}
            <article class="td-stage stage-done">
                <div class="td-stage-header">
                    <div class="td-stage-icon">
                        <i class="fas fa-circle-check"></i>
                    </div>

                    <div>
                        <h3>1. Digitalisasi Sudah Berjalan</h3>
                    </div>
                </div>

                <ul>
                    <li>Penjaminan pembiayaan dan surety bond melalui website.</li>
                    <li>Layanan penjaminan via host-to-host ke sistem mitra.</li>
                    <li>Proses surat keluar dan masuk secara digital.</li>
                    <li>Proses operasional paperless atau arsip digital.</li>
                    <li>Absensi pegawai melalui aplikasi.</li>
                    <li>Sertifikat digital signature.</li>
                </ul>
            </article>

            {{-- TAHAP 2 --}}
            <article class="td-stage stage-process">
                <div class="td-stage-header">
                    <div class="td-stage-icon">
                        <i class="fas fa-arrows-rotate"></i>
                    </div>

                    <div>
                        <h3>2. Sedang Dalam Proses</h3>
                    </div>
                </div>

                <ul>
                    <li>Digitalisasi KPI dan capaian target rencana bisnis perusahaan.</li>
                    <li>Pengembangan AI underwriting dalam proses analisis penjaminan.</li>
                </ul>
            </article>

            {{-- TAHAP 3 --}}
            <article class="td-stage stage-planned">
                <div class="td-stage-header">
                    <div class="td-stage-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>

                    <div>
                        <h3>3. Akan Dijalankan</h3>
                    </div>
                </div>

                <ul>
                    <li>Dashboard monitoring terpadu untuk internal dan eksternal.</li>
                    <li>Register risk monitoring.</li>
                </ul>
            </article>

        </section>

        {{-- =================================================
             BAGIAN E: KETERANGAN PENUTUP
        ================================================= --}}
        <div class="td-footer-note">
            <i class="fas fa-circle-info"></i>

            <p>
                Transformasi digital dilaksanakan secara bertahap sesuai
                kebutuhan dan prioritas perusahaan. Informasi tahapan di
                halaman ini merupakan keterangan tetap dan tidak berubah
                ketika gambar roadmap diperbarui melalui halaman admin.
            </p>
        </div>

    </div>
</div>

@endsection
