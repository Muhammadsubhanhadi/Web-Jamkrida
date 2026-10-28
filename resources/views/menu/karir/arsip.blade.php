
@extends('layouts.main')

@section('title', 'Arsip Lowongan - PT Jamkrida NTB Syariah')

@section('content')

<style>
    .archive-page {
        --archive-green: #087a4b;
        --archive-dark: #063d2a;
        --archive-deep: #03281d;
        --archive-gold: #d5a83a;
        --archive-gold-light: #f2d47c;
        --archive-bg: #f4f8f5;
        --archive-text: #23352d;
        --archive-muted: #718078;

        font-family: 'Poppins', sans-serif;
        color: var(--archive-text);
        background: var(--archive-bg);
        min-height: 70vh;
        padding-bottom: 75px;
    }

    .archive-page *,
    .archive-page *::before,
    .archive-page *::after {
        box-sizing: border-box;
    }

    .archive-hero {
        position: relative;
        overflow: hidden;
        padding: 75px 20px 82px;
        background:
            radial-gradient(
                circle at 90% 15%,
                rgba(213, 168, 58, .19),
                transparent 27%
            ),
            linear-gradient(
                125deg,
                var(--archive-deep),
                var(--archive-dark) 58%,
                #087a4b
            );
        color: #fff;
    }

    .archive-hero::before {
        content: "";
        position: absolute;
        width: 320px;
        height: 320px;
        right: -100px;
        bottom: -205px;
        border: 1px solid rgba(242, 212, 124, .3);
        border-radius: 50%;
        box-shadow:
            0 0 0 30px rgba(242, 212, 124, .035),
            0 0 0 65px rgba(242, 212, 124, .025);
        pointer-events: none;
    }

    .archive-hero-inner {
        position: relative;
        z-index: 1;
        width: min(1140px, 100%);
        margin: 0 auto;
    }

    .archive-breadcrumb {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        margin-bottom: 24px;
        color: rgba(255, 255, 255, .72);
        font-size: 12px;
        letter-spacing: .3px;
    }

    .archive-breadcrumb a {
        color: var(--archive-gold-light);
        text-decoration: none;
        transition: color .2s ease;
    }

    .archive-breadcrumb a:hover {
        color: #fff;
    }

    .archive-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 13px;
        border: 1px solid rgba(242, 212, 124, .35);
        border-radius: 4px;
        background: rgba(255, 255, 255, .06);
        color: var(--archive-gold-light);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .archive-eyebrow::before {
        content: "";
        width: 7px;
        height: 7px;
        background: var(--archive-gold);
        border-radius: 50%;
    }

    .archive-hero h1 {
        max-width: 760px;
        margin: 22px 0 16px;
        color: #fff;
        font-size: clamp(32px, 4.5vw, 49px);
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -.9px;
    }

    .archive-hero h1 span {
        color: var(--archive-gold-light);
    }

    .archive-hero p {
        max-width: 650px;
        margin: 0;
        color: rgba(255, 255, 255, .78);
        font-size: 14px;
        line-height: 1.9;
    }

    .archive-hero-line {
        width: 74px;
        height: 4px;
        margin-top: 27px;
        background: linear-gradient(
            90deg,
            var(--archive-gold),
            var(--archive-gold-light)
        );
    }

    .archive-container {
        width: min(1140px, calc(100% - 40px));
        margin: -25px auto 0;
        position: relative;
        z-index: 2;
    }

    .archive-toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        padding: 23px 25px;
        background: #fff;
        border: 1px solid #e6ede8;
        border-top: 3px solid var(--archive-gold);
        box-shadow: 0 12px 32px rgba(3, 40, 29, .07);
    }

    .archive-toolbar-info {
        flex: 1 1 220px;
    }

    .archive-toolbar-info h2 {
        margin: 0 0 6px;
        color: var(--archive-dark);
        font-size: 17px;
        font-weight: 800;
    }

    .archive-toolbar-info p {
        margin: 0;
        color: var(--archive-muted);
        font-size: 12px;
        line-height: 1.7;
    }

    .archive-count {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-top: 10px;
        padding: 6px 10px;
        border: 1px solid #e3eee7;
        background: #f2f8f4;
        color: var(--archive-green);
        font-size: 11px;
        font-weight: 700;
    }

    .archive-search {
        display: flex;
        flex: 1 1 380px;
        max-width: 470px;
        gap: 8px;
    }

    .archive-search input {
        width: 100%;
        min-width: 0;
        height: 45px;
        padding: 0 14px;
        outline: none;
        border: 1px solid #dce6df;
        border-radius: 3px;
        background: #fbfdfb;
        color: var(--archive-dark);
        font-family: inherit;
        font-size: 12px;
        transition: border-color .2s, box-shadow .2s;
    }

    .archive-search input:focus {
        border-color: var(--archive-green);
        box-shadow: 0 0 0 3px rgba(8, 122, 75, .09);
    }

    .archive-search button {
        flex-shrink: 0;
        min-width: 90px;
        height: 45px;
        padding: 0 16px;
        border: 1px solid var(--archive-green);
        border-radius: 3px;
        background: var(--archive-green);
        color: #fff;
        font-family: inherit;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: background .2s, border-color .2s;
    }

    .archive-search button:hover {
        background: var(--archive-dark);
        border-color: var(--archive-dark);
    }

    .archive-search-clear {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0 12px;
        border: 1px solid #dce6df;
        border-radius: 3px;
        color: var(--archive-dark);
        background: #fff;
        text-decoration: none;
        font-size: 12px;
    }

    .archive-search-clear:hover {
        border-color: var(--archive-gold);
        color: var(--archive-green);
    }

    .archive-results-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
        margin: 34px 0 20px;
    }

    .archive-results-heading h2 {
        margin: 0;
        color: var(--archive-dark);
        font-size: 22px;
        font-weight: 800;
    }

    .archive-results-heading p {
        margin: 6px 0 0;
        color: var(--archive-muted);
        font-size: 12px;
    }

    .archive-results-heading::after {
        content: "";
        display: block;
        width: 52px;
        height: 3px;
        background: var(--archive-gold);
    }

    .archive-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        align-items: stretch;
        gap: 24px;
    }

    .archive-card {
        display: flex;
        flex-direction: column;
        min-width: 0;
        overflow: hidden;
        background: #fff;
        border: 1px solid #e5ece7;
        box-shadow: 0 5px 18px rgba(3, 40, 29, .035);
        transition:
            transform .25s ease,
            box-shadow .25s ease,
            border-color .25s ease;
    }

    .archive-card:hover {
        transform: translateY(-5px);
        border-color: rgba(213, 168, 58, .75);
        box-shadow: 0 15px 32px rgba(3, 40, 29, .10);
    }

    .archive-card-visual {
        position: relative;
        height: 175px;
        overflow: hidden;
        background:
            radial-gradient(
                circle at 85% 15%,
                rgba(242, 212, 124, .20),
                transparent 35%
            ),
            linear-gradient(
                135deg,
                var(--archive-deep),
                var(--archive-green)
            );
    }

    .archive-card-visual img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        transition: transform .4s ease;
    }

    .archive-card:hover .archive-card-visual img {
        transform: scale(1.04);
    }

    .archive-card-visual-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 11px;
        height: 100%;
        color: var(--archive-gold-light);
    }

    .archive-card-visual-placeholder span {
        font-size: 36px;
        line-height: 1;
    }

    .archive-card-visual-placeholder small {
        color: rgba(255, 255, 255, .82);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .archive-status {
        position: absolute;
        top: 13px;
        left: 13px;
        padding: 7px 10px;
        background: rgba(3, 40, 29, .92);
        border-left: 3px solid var(--archive-gold);
        color: #fff;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: .35px;
    }

    .archive-card-body {
        display: flex;
        flex: 1;
        flex-direction: column;
        padding: 21px 20px 19px;
    }

    .archive-department {
        margin-bottom: 10px;
        color: var(--archive-green);
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .archive-card-title {
        margin: 0 0 13px;
        color: var(--archive-dark);
        font-size: 17px;
        font-weight: 800;
        line-height: 1.5;
        overflow-wrap: anywhere;
    }

    .archive-description {
        margin: 0 0 19px;
        color: var(--archive-muted);
        font-size: 12px;
        line-height: 1.85;
        overflow-wrap: anywhere;
    }

    .archive-meta {
        display: grid;
        gap: 11px;
        padding: 15px 0;
        margin-top: auto;
        border-top: 1px solid #edf1ee;
        border-bottom: 1px solid #edf1ee;
    }

    .archive-meta-row {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        color: #53645a;
        font-size: 11px;
        line-height: 1.65;
        overflow-wrap: anywhere;
    }

    .archive-meta-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 23px;
        height: 23px;
        background: #f0f7f2;
        color: var(--archive-green);
        font-size: 12px;
    }

    .archive-card-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 9px;
        padding-top: 17px;
    }

    .archive-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 39px;
        padding: 10px 12px;
        border: 1px solid var(--archive-green);
        background: var(--archive-green);
        color: #fff !important;
        font-size: 11px;
        font-weight: 700;
        line-height: 1.4;
        text-align: center;
        text-decoration: none !important;
        transition: background .2s, border-color .2s;
    }

    .archive-btn:hover {
        background: var(--archive-dark);
        border-color: var(--archive-dark);
    }

    .archive-btn-secondary {
        background: #fff;
        border-color: #dce6df;
        color: var(--archive-dark) !important;
    }

    .archive-btn-secondary:hover {
        background: #f1f7f3;
        border-color: var(--archive-green);
    }

    .archive-empty {
        padding: 55px 20px;
        background: #fff;
        border: 1px solid #e5ece7;
        text-align: center;
    }

    .archive-empty-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 72px;
        height: 72px;
        margin: 0 auto 20px;
        border: 1px solid #e0ece3;
        background: #f3f8f4;
        color: var(--archive-green);
        font-size: 30px;
    }

    .archive-empty h3 {
        margin: 0 0 10px;
        color: var(--archive-dark);
        font-size: 20px;
        font-weight: 800;
    }

    .archive-empty p {
        max-width: 440px;
        margin: 0 auto 22px;
        color: var(--archive-muted);
        font-size: 13px;
        line-height: 1.8;
    }

    .archive-pagination {
        display: flex;
        justify-content: center;
        margin-top: 35px;
        overflow-x: auto;
    }

    .archive-pagination nav {
        max-width: 100%;
    }

    .archive-pagination nav svg {
        width: 18px;
        height: 18px;
    }

    .archive-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 18px;
        margin-top: 45px;
        padding: 25px 27px;
        background: linear-gradient(
            120deg,
            var(--archive-deep),
            var(--archive-dark)
        );
        border-left: 4px solid var(--archive-gold);
    }

    .archive-bottom h3 {
        margin: 0 0 7px;
        color: #fff;
        font-size: 16px;
        font-weight: 800;
    }

    .archive-bottom p {
        margin: 0;
        color: rgba(255, 255, 255, .72);
        font-size: 12px;
        line-height: 1.8;
    }

    .archive-back-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 12px 17px;
        border: 1px solid var(--archive-gold);
        background: var(--archive-gold);
        color: var(--archive-deep) !important;
        font-size: 12px;
        font-weight: 800;
        text-decoration: none !important;
        transition: background .2s, color .2s;
    }

    .archive-back-btn:hover {
        background: var(--archive-gold-light);
    }

    @media (max-width: 1000px) {
        .archive-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .archive-toolbar {
            align-items: flex-start;
        }

        .archive-search {
            max-width: none;
        }
    }

    @media (max-width: 600px) {
        .archive-hero {
            padding: 52px 20px 65px;
        }

        .archive-hero h1 {
            font-size: 32px;
        }

        .archive-hero p {
            font-size: 12px;
        }

        .archive-container {
            width: calc(100% - 28px);
        }

        .archive-toolbar {
            padding: 20px 16px;
            gap: 17px;
        }

        .archive-search {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 7px;
        }

        .archive-search input {
            font-size: 11px;
            padding: 0 10px;
        }

        .archive-search button {
            min-width: 70px;
            padding: 0 11px;
            font-size: 11px;
        }

        .archive-search-clear {
            grid-column: 1 / -1;
            min-height: 36px;
        }

        .archive-grid {
            grid-template-columns: minmax(0, 1fr);
            gap: 17px;
        }

        .archive-card-visual {
            height: 190px;
        }

        .archive-results-heading h2 {
            font-size: 19px;
        }

        .archive-bottom {
            align-items: flex-start;
            flex-direction: column;
            padding: 22px 18px;
        }

        .archive-back-btn {
            width: 100%;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .archive-page *,
        .archive-page *::before,
        .archive-page *::after {
            scroll-behavior: auto !important;
            transition: none !important;
        }
    }
</style>

<div class="archive-page">

    {{-- HERO --}}
    <section class="archive-hero">
        <div class="archive-hero-inner">

            <div class="archive-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <span>/</span>
                <a href="{{ route('karir') }}">Karir</a>
                <span>/</span>
                <span>Arsip Lowongan</span>
            </div>

            <span class="archive-eyebrow">
                Informasi Rekrutmen
            </span>

            <h1>
                Arsip <span>Lowongan Kerja</span>
            </h1>

            <p>
                Temukan kembali informasi rekrutmen PT Jamkrida NTB Syariah
                (Perseroda) yang telah berakhir atau diarsipkan. Halaman ini
                disediakan sebagai referensi informasi lowongan terdahulu.
            </p>

            <div class="archive-hero-line"></div>

        </div>
    </section>

    {{-- KONTEN --}}
    <main class="archive-container">

        {{-- PENCARIAN --}}
        <section class="archive-toolbar">

            <div class="archive-toolbar-info">
                <h2>Riwayat Rekrutmen</h2>

                <p>
                    Cari lowongan berdasarkan nama posisi, departemen,
                    atau lokasi penempatan.
                </p>

                <span class="archive-count">
                    {{ $lowonganArsip->total() }} lowongan ditemukan
                </span>
            </div>

            <form
                action="{{ route('karir.arsip') }}"
                method="GET"
                class="archive-search"
            >
                <input
                    type="search"
                    name="q"
                    value="{{ request('q') }}"
                    placeholder="Cari posisi atau departemen..."
                    aria-label="Cari arsip lowongan"
                >

                <button type="submit">
                    Cari
                </button>

                @if(request()->filled('q'))
                    <a
                        href="{{ route('karir.arsip') }}"
                        class="archive-search-clear"
                    >
                        Reset pencarian
                    </a>
                @endif
            </form>

        </section>

        {{-- JUDUL DAFTAR --}}
        <div class="archive-results-heading">
            <div>
                <h2>Daftar Lowongan Terdahulu</h2>
                <p>
                    Informasi lowongan yang masa pendaftarannya telah berakhir
                    atau yang telah diarsipkan.
                </p>
            </div>
        </div>

        {{-- KARTU LOWONGAN --}}
        @if($lowonganArsip->count() > 0)

            <div class="archive-grid">

                @foreach($lowonganArsip as $lowongan)

                    @php
                        $deadlineLewat = $lowongan->deadline
                            && \Carbon\Carbon::parse($lowongan->deadline)->toDateString()
                                < now()->toDateString();

                        if ($lowongan->status === 'archived') {
                            $statusArsip = 'Diarsipkan';
                        } elseif ($lowongan->status === 'closed') {
                            $statusArsip = 'Lowongan Ditutup';
                        } else {
                            $statusArsip = $deadlineLewat
                                ? 'Pendaftaran Berakhir'
                                : 'Arsip Lowongan';
                        }

                        $deskripsiArsip = trim(strip_tags(
                            $lowongan->description ?? ''
                        ));
                    @endphp

                    <article class="archive-card">

                        {{-- GAMBAR / BANNER --}}
                        <div class="archive-card-visual">

                            @if($lowongan->banner)
                                <img
                                    src="{{ asset('storage/' . ltrim($lowongan->banner, '/')) }}"
                                    alt="Banner {{ $lowongan->title }}"
                                    loading="lazy"
                                >
                            @else
                                <div class="archive-card-visual-placeholder">
                                    <span aria-hidden="true">✦</span>
                                    <small>PT Jamkrida NTB Syariah</small>
                                </div>
                            @endif

                            <span class="archive-status">
                                {{ $statusArsip }}
                            </span>

                        </div>

                        <div class="archive-card-body">

                            <div class="archive-department">
                                {{ $lowongan->department ?: 'Informasi Karir' }}
                            </div>

                            <h3 class="archive-card-title">
                                {{ $lowongan->title }}
                            </h3>

                            <p class="archive-description">
                                @if($deskripsiArsip !== '')
                                    {{ \Illuminate\Support\Str::limit($deskripsiArsip, 145) }}
                                @else
                                    Informasi rekrutmen terdahulu PT Jamkrida
                                    NTB Syariah (Perseroda).
                                @endif
                            </p>

                            <div class="archive-meta">

                                <div class="archive-meta-row">
                                    <span class="archive-meta-icon" aria-hidden="true">⌖</span>
                                    <span>
                                        {{ $lowongan->location ?: 'Lokasi tidak dicantumkan' }}
                                    </span>
                                </div>

                                <div class="archive-meta-row">
                                    <span class="archive-meta-icon" aria-hidden="true">▤</span>
                                    <span>
                                        {{ $lowongan->employment_type ?: 'Jenis pekerjaan tidak dicantumkan' }}
                                    </span>
                                </div>

                                <div class="archive-meta-row">
                                    <span class="archive-meta-icon" aria-hidden="true">♙</span>
                                    <span>
                                        Kebutuhan:
                                        {{ $lowongan->vacancy_count ?? '-' }}
                                        orang
                                    </span>
                                </div>

                                <div class="archive-meta-row">
                                    <span class="archive-meta-icon" aria-hidden="true">◷</span>
                                    <span>
                                        Batas pendaftaran:
                                        @if($lowongan->deadline)
                                            {{ \Carbon\Carbon::parse($lowongan->deadline)->format('d/m/Y') }}
                                        @else
                                            Tidak dicantumkan
                                        @endif
                                    </span>
                                </div>

                            </div>

                            <div class="archive-card-actions">

                                @if($lowongan->announcement_pdf)
                                    <a
                                        href="{{ asset('storage/' . ltrim($lowongan->announcement_pdf, '/')) }}"
                                        class="archive-btn"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        <span aria-hidden="true">↗</span>
                                        Lihat Pengumuman
                                    </a>
                                @endif
                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

            {{-- PAGINATION --}}
            @if($lowonganArsip->hasPages())
                <div class="archive-pagination">
                    {{ $lowonganArsip->links() }}
                </div>
            @endif

        @else

            {{-- KONDISI KOSONG --}}
            <section class="archive-empty">

                <div class="archive-empty-icon" aria-hidden="true">
                    ⌕
                </div>

                @if(request()->filled('q'))
                    <h3>Lowongan Tidak Ditemukan</h3>

                    <p>
                        Belum ada arsip lowongan yang cocok dengan kata kunci
                        "{{ request('q') }}". Coba gunakan kata kunci lain.
                    </p>

                    <a
                        href="{{ route('karir.arsip') }}"
                        class="archive-btn"
                    >
                        Tampilkan Semua Arsip
                    </a>
                @else
                    <h3>Belum Ada Arsip Lowongan</h3>

                    <p>
                        Saat ini belum ada lowongan terdahulu yang tersedia
                        untuk ditampilkan. Silakan kembali lagi nanti atau
                        lihat lowongan yang masih aktif.
                    </p>

                    <a
                        href="{{ route('karir') }}"
                        class="archive-btn"
                    >
                        Lihat Lowongan Aktif
                    </a>
                @endif

            </section>

        @endif

        {{-- CTA BAWAH --}}
        <section class="archive-bottom">

            <div>
                <h3>Sedang Mencari Kesempatan Karir?</h3>

                <p>
                    Kunjungi halaman karir untuk melihat informasi
                    rekrutmen yang masih tersedia.
                </p>
            </div>

            <a
                href="{{ route('karir') }}"
                class="archive-back-btn"
            >
                <span aria-hidden="true">←</span>
                Kembali ke Halaman Karir
            </a>

        </section>

    </main>

</div>

@endsection