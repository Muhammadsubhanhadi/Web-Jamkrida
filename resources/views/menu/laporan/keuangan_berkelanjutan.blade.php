
@extends('layouts.main')

@section('title', 'Keuangan Berkelanjutan')

@section('content')

<style>
/* =====================================================
   KEUANGAN BERKELANJUTAN PREMIUM
===================================================== */

.sustain-page {
    position: relative;
    padding: 70px 0 110px;
    background:
        radial-gradient(circle at 8% 10%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 92% 35%, rgba(213,168,58,.08), transparent 25%),
        #f7faf8;
    min-height: 80vh;
}

.sustain-container {
    width: 85%;
    max-width: 1250px;
    margin: auto;
}

/* =====================================================
   HERO
===================================================== */

.sustain-hero {
    position: relative;
    overflow: hidden;
    padding: 48px 50px;
    background: linear-gradient(135deg, #03281d 0%, #063d2a 45%, #087a4b 100%);
    border-radius: 24px;
    box-shadow: 0 25px 60px rgba(3,40,29,.18);
    margin-bottom: 38px;
    animation: sustainFadeUp .7s ease both;
}

.sustain-hero::before {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    right: -100px;
    top: -140px;
    border: 1px solid rgba(242,212,124,.25);
    border-radius: 50%;
}

.sustain-hero::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    right: 80px;
    bottom: -130px;
    border: 1px solid rgba(255,255,255,.10);
    border-radius: 50%;
}

.sustain-hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 25px;
}

.sustain-hero-icon {
    width: 72px;
    height: 72px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,.09);
    border: 1px solid rgba(242,212,124,.35);
    color: #f2d47c;
    font-size: 27px;
    border-radius: 18px;
    box-shadow: inset 0 0 20px rgba(255,255,255,.03);
}

.sustain-label {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #bde3d2;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
}

.sustain-label span {
    width: 25px;
    height: 2px;
    background: #d5a83a;
}

.sustain-hero h1 {
    margin: 8px 0;
    color: #fff;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 34px;
    font-weight: 700;
}

.sustain-hero h1 span {
    color: #f2d47c;
}

.sustain-hero p {
    max-width: 750px;
    margin: 0;
    color: #c9ded4;
    font-size: 13px;
    line-height: 1.8;
}

/* =====================================================
   CONTENT
===================================================== */

.sustain-content {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 280px;
    gap: 28px;
    align-items: start;
}

/* =====================================================
   TABLE CARD
===================================================== */

.sustain-table-card {
    background: #fff;
    border: 1px solid #e2ebe6;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 45px rgba(18,53,39,.08);
    animation: sustainFadeUp .8s ease .15s both;
}

.sustain-table-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 28px 30px;
    border-bottom: 1px solid #edf1ee;
}

.sustain-table-heading h2 {
    margin: 0;
    color: #18271f;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 22px;
}

.sustain-table-heading h2 span {
    color: #087a4b;
}

.sustain-table-heading p {
    margin: 6px 0 0;
    color: #7a8881;
    font-size: 12px;
}

/* =====================================================
   TABLE
===================================================== */

.sustain-table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.sustain-table {
    width: 100%;
    min-width: 680px;
    border-collapse: collapse;
}

.sustain-table thead {
    background: linear-gradient(135deg, #063d2a, #087a4b);
}

.sustain-table th {
    padding: 17px 20px;
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .8px;
    text-transform: uppercase;
    text-align: left;
    white-space: nowrap;
}

.sustain-table th:first-child,
.sustain-table td:first-child {
    width: 65px;
    text-align: center;
}

.sustain-table th:nth-child(2) {
    width: 110px;
}

.sustain-table th:nth-child(5) {
    width: 130px;
}

.sustain-table tbody tr {
    border-bottom: 1px solid #edf1ee;
    transition: background .25s ease;
}

.sustain-table tbody tr:last-child {
    border-bottom: none;
}

.sustain-table tbody tr:hover {
    background: #f5faf7;
}

.sustain-table td {
    padding: 19px 20px;
    color: #26352e;
    font-size: 13px;
    vertical-align: middle;
}

/* =====================================================
   NUMBER
===================================================== */

.sustain-number {
    width: 31px;
    height: 31px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9px;
    background: #edf8f2;
    color: #087a4b;
    font-size: 12px;
    font-weight: 700;
    transition: .25s ease;
}

.sustain-table tr:hover .sustain-number {
    background: #087a4b;
    color: #fff;
    transform: translateY(-2px);
}

/* =====================================================
   YEAR
===================================================== */

.sustain-year {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 65px;
    padding: 7px 12px;
    border-radius: 8px;
    background: #fbf4dc;
    border: 1px solid #f1df9e;
    color: #80620d;
    font-size: 12px;
    font-weight: 700;
}

/* =====================================================
   DOCUMENT
===================================================== */

.sustain-document {
    display: flex;
    align-items: center;
    gap: 13px;
}

.sustain-pdf-icon {
    width: 42px;
    height: 42px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff1f1;
    color: #d34a4a;
    border: 1px solid #f2d9d9;
    border-radius: 11px;
    font-size: 18px;
    transition: .25s ease;
}

.sustain-table tr:hover .sustain-pdf-icon {
    transform: translateY(-2px);
}

.sustain-document-title {
    color: #1c2d24;
    font-weight: 700;
    line-height: 1.5;
}

.sustain-document-type {
    margin-top: 3px;
    color: #89958f;
    font-size: 10px;
    letter-spacing: .4px;
}

/* =====================================================
   DESCRIPTION
===================================================== */

.sustain-description {
    color: #6d7b74;
    font-size: 12px;
    line-height: 1.7;
}

/* =====================================================
   DOWNLOAD
===================================================== */

.sustain-download {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 15px;
    background: linear-gradient(135deg, #087a4b, #0a9259);
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 700;
    white-space: nowrap;
    box-shadow: 0 6px 15px rgba(8,122,75,.16);
    transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
}

.sustain-download:hover {
    color: #fff;
    background: #063d2a;
    transform: translateY(-2px);
    box-shadow: 0 9px 20px rgba(3,40,29,.20);
}

.sustain-file-unavailable {
    color: #9aa69f;
    font-size: 10px;
}

/* =====================================================
   EMPTY STATE
===================================================== */

.sustain-empty {
    padding: 60px 20px;
    text-align: center;
}

.sustain-empty-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf8f2;
    color: #087a4b;
    border-radius: 15px;
    font-size: 25px;
}

.sustain-empty h3 {
    margin: 0 0 7px;
    color: #27352e;
    font-size: 17px;
}

.sustain-empty p {
    margin: 0;
    color: #89958f;
    font-size: 11px;
}

/* =====================================================
   SIDEBAR PREMIUM
===================================================== */

.sustain-sidebar {
    position: relative;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(18,53,39,.07);
    animation: sustainFadeUp .8s ease .25s both;
}

/* HEADER SIDEBAR */

.sustain-sidebar-header {
    position: relative;
    overflow: hidden;
    padding: 22px 22px 20px;
    background: linear-gradient(135deg, #03281d 0%, #063d2a 48%, #087a4b 100%);
    border-bottom: 3px solid #d5a83a;
    color: #fff;
}

.sustain-sidebar-header::before {
    content: "";
    position: absolute;
    width: 125px;
    height: 125px;
    right: -42px;
    top: -57px;
    border: 1px solid rgba(242,212,124,.32);
    border-radius: 50%;
}

.sustain-sidebar-header::after {
    content: "";
    position: absolute;
    width: 75px;
    height: 75px;
    right: 25px;
    bottom: -52px;
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 50%;
}

.sustain-sidebar-header h3 {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 9px;
    margin: 0;
    color: #fff;
    font-size: 15px;
    font-weight: 800;
    letter-spacing: .2px;
}

.sustain-sidebar-header h3 i {
    color: #f2d47c;
    font-size: 14px;
}

.sustain-sidebar-header p {
    position: relative;
    z-index: 2;
    margin: 7px 0 0;
    color: #c9ded4;
    font-size: 10px;
    line-height: 1.6;
}

/* SIDEBAR LINKS */

.sustain-links {
    padding: 10px 13px;
}

.sustain-link {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin: 3px 0;
    padding: 11px 10px;
    color: #34473f;
    text-decoration: none;
    font-size: 11px;
    font-weight: 600;
    border: 1px solid transparent;
    border-radius: 8px;
    transition: background .25s ease, color .25s ease, border-color .25s ease, transform .25s ease;
}

.sustain-link:hover {
    color: #087a4b;
    background: #f4f9f6;
    border-color: #e2eee7;
    transform: translateX(2px);
}

.sustain-link.active {
    color: #075b39;
    background: linear-gradient(100deg, #edf8f1, #f7faf7);
    border-color: #d8eadd;
    font-weight: 800;
}

.sustain-link.active::before {
    content: "";
    position: absolute;
    top: 7px;
    bottom: 7px;
    left: -1px;
    width: 3px;
    background: #d5a83a;
    border-radius: 0 3px 3px 0;
}

.sustain-link-left {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
}

.sustain-link-icon {
    width: 34px;
    height: 34px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #087a4b;
    background: #edf7f1;
    border: 1px solid #e0eee5;
    border-radius: 8px;
    font-size: 12px;
    transition: background .25s ease, color .25s ease, border-color .25s ease;
}

.sustain-link:hover .sustain-link-icon {
    color: #fff;
    background: #087a4b;
    border-color: #087a4b;
}

.sustain-link.active .sustain-link-icon {
    color: #80620d;
    background: #fbf4dc;
    border-color: #f1df9e;
}

.sustain-link-text {
    line-height: 1.5;
}

.sustain-link-arrow {
    flex-shrink: 0;
    color: #aab7b0;
    font-size: 9px;
    transition: color .25s ease, transform .25s ease;
}

.sustain-link:hover .sustain-link-arrow,
.sustain-link.active .sustain-link-arrow {
    color: #d5a83a;
    transform: translateX(2px);
}

/* =====================================================
   ANIMATION
===================================================== */

@keyframes sustainFadeUp {
    from {
        opacity: 0;
        transform: translateY(18px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* =====================================================
   SCROLLBAR
===================================================== */

.sustain-table-wrapper::-webkit-scrollbar {
    height: 6px;
}

.sustain-table-wrapper::-webkit-scrollbar-track {
    background: #eef3f0;
}

.sustain-table-wrapper::-webkit-scrollbar-thumb {
    background: #087a4b;
    border-radius: 10px;
}

/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 950px) {
    .sustain-content {
        grid-template-columns: 1fr;
    }

    .sustain-sidebar {
        order: 2;
    }
}

@media (max-width: 700px) {
    .sustain-page {
        padding: 50px 0 80px;
    }

    .sustain-container {
        width: 92%;
    }

    .sustain-hero {
        padding: 35px 25px;
        border-radius: 20px;
    }

    .sustain-hero-content {
        align-items: flex-start;
    }

    .sustain-hero-icon {
        width: 58px;
        height: 58px;
        font-size: 21px;
    }

    .sustain-hero h1 {
        font-size: 26px;
    }

    .sustain-hero p {
        font-size: 11px;
    }

    .sustain-table-heading {
        padding: 23px 20px;
    }

    .sustain-table-heading h2 {
        font-size: 19px;
    }

    .sustain-table-card,
    .sustain-sidebar {
        border-radius: 14px;
    }
}

@media (max-width: 480px) {
    .sustain-hero-content {
        display: block;
    }

    .sustain-hero-icon {
        margin-bottom: 18px;
    }

    .sustain-hero h1 {
        font-size: 23px;
    }

    .sustain-table-heading {
        display: block;
    }
}
</style>

<section class="sustain-page">
    <div class="sustain-container">

        {{-- HERO --}}
        <div class="sustain-hero">
            <div class="sustain-hero-content">

                <div class="sustain-hero-icon">
                    <i class="fa-solid fa-leaf"></i>
                </div>

                <div>
                    <div class="sustain-label">
                        <span></span>
                        DOKUMEN KEBERLANJUTAN
                    </div>

                    <h1>
                        Keuangan <span>Berkelanjutan</span>
                    </h1>

                    <p>
                        Informasi dan dokumen Keuangan Berkelanjutan
                        PT. Jamkrida NTB Syariah (Perseroda) sebagai bagian
                        dari komitmen perusahaan terhadap penerapan prinsip
                        keberlanjutan dalam kegiatan usaha.
                    </p>
                </div>

            </div>
        </div>

        {{-- CONTENT --}}
        <div class="sustain-content">

            {{-- TABLE --}}
            <div class="sustain-table-card">

                <div class="sustain-table-heading">
                    <div>
                        <h2>Keuangan <span>Berkelanjutan</span></h2>
                        <p>Daftar dokumen keuangan berkelanjutan perusahaan</p>
                    </div>
                </div>

                <div class="sustain-table-wrapper">
                    <table class="sustain-table">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Dokumen</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($keuanganBerkelanjutan as $item)
                                <tr>
                                    {{-- NO --}}
                                    <td>
                                        <div class="sustain-number">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>

                                    {{-- TAHUN --}}
                                    <td>
                                        <span class="sustain-year">
                                            {{ $item->tahun }}
                                        </span>
                                    </td>

                                    {{-- DOKUMEN --}}
                                    <td>
                                        <div class="sustain-document">
                                            <div class="sustain-pdf-icon">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </div>

                                            <div>
                                                <div class="sustain-document-title">
                                                    Keuangan Berkelanjutan Tahun {{ $item->tahun }}
                                                </div>

                                                <div class="sustain-document-type">
                                                    PDF DOCUMENT
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- KETERANGAN --}}
                                    <td>
                                        <div class="sustain-description">
                                            Dokumen Keuangan Berkelanjutan
                                            PT. Jamkrida NTB Syariah Tahun {{ $item->tahun }}.
                                        </div>
                                    </td>

                                    {{-- DOWNLOAD --}}
                                    <td>
                                        @if(!empty($item->file))
                                            <a
                                                href="{{ asset('storage/' . $item->file) }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="sustain-download"
                                            >
                                                <i class="fa-solid fa-download"></i>
                                                Download
                                            </a>
                                        @else
                                            <span class="sustain-file-unavailable">
                                                File belum tersedia
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <div class="sustain-empty">
                                            <div class="sustain-empty-icon">
                                                <i class="fa-solid fa-file-circle-xmark"></i>
                                            </div>

                                            <h3>Belum Ada Dokumen</h3>

                                            <p>
                                                Dokumen Keuangan Berkelanjutan belum tersedia.
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>

            {{-- SIDEBAR LINK TERKAIT --}}
            <aside class="sustain-sidebar">

                <div class="sustain-sidebar-header">
                    <h3>
                        <i class="fa-solid fa-link"></i>
                        Link Terkait
                    </h3>

                    <p>Informasi perusahaan lainnya</p>
                </div>

                <div class="sustain-links">

                    {{-- ANNUAL REPORT --}}
                    <a
                        href="{{ url('/menu/laporan/annual-report') }}"
                        class="sustain-link"
                    >
                        <div class="sustain-link-left">
                            <span class="sustain-link-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </span>
                            <span class="sustain-link-text">Annual Report</span>
                        </div>
                        <i class="fa-solid fa-chevron-right sustain-link-arrow"></i>
                    </a>

                    {{-- GCG --}}
                    <a
                        href="{{ url('/menu/laporan/gcg') }}"
                        class="sustain-link"
                    >
                        <div class="sustain-link-left">
                            <span class="sustain-link-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </span>
                            <span class="sustain-link-text">GCG</span>
                        </div>
                        <i class="fa-solid fa-chevron-right sustain-link-arrow"></i>
                    </a>

                    {{-- AUDITOR --}}
                    <a
                        href="{{ url('/menu/laporan/auditor') }}"
                        class="sustain-link"
                    >
                        <div class="sustain-link-left">
                            <span class="sustain-link-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </span>
                            <span class="sustain-link-text">Auditor</span>
                        </div>
                        <i class="fa-solid fa-chevron-right sustain-link-arrow"></i>
                    </a>

                    {{-- RENCANA BISNIS --}}
                    <a
                        href="{{ url('/menu/laporan/rencana_bisnis') }}"
                        class="sustain-link"
                    >
                        <div class="sustain-link-left">
                            <span class="sustain-link-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                            <span class="sustain-link-text">Rencana Bisnis</span>
                        </div>
                        <i class="fa-solid fa-chevron-right sustain-link-arrow"></i>
                    </a>

                    {{-- KEUANGAN BERKELANJUTAN: ACTIVE --}}
                    <a
                        href="{{ url('/menu/laporan/keuangan_berkelanjutan') }}"
                        class="sustain-link active"
                        aria-current="page"
                    >
                        <div class="sustain-link-left">
                            <span class="sustain-link-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </span>
                            <span class="sustain-link-text">Keuangan Berkelanjutan</span>
                        </div>
                        <i class="fa-solid fa-chevron-right sustain-link-arrow"></i>
                    </a>

                    {{-- DAFTAR AGEN --}}
                    <a
                        href="{{ url('/menu/laporan/daftar_agen') }}"
                        class="sustain-link"
                    >
                        <div class="sustain-link-left">
                            <span class="sustain-link-icon">
                                <i class="fa-solid fa-users"></i>
                            </span>
                            <span class="sustain-link-text">Daftar Agen Aktif</span>
                        </div>
                        <i class="fa-solid fa-chevron-right sustain-link-arrow"></i>
                    </a>

                </div>
            </aside>

        </div>
    </div>
</section>

@endsection