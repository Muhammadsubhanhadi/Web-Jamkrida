
@extends('layouts.main')

@section('title', 'GCG')

@section('content')

<style>
/* =====================================================
   GCG PAGE
===================================================== */
.gcg-page {
    position: relative;
    padding: 70px 0 110px;
    background:
        radial-gradient(circle at 8% 8%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 92% 35%, rgba(213,168,58,.08), transparent 25%),
        #f7faf8;
    min-height: 80vh;
}

.gcg-container {
    width: 85%;
    max-width: 1250px;
    margin: auto;
}

/* =====================================================
   HERO
===================================================== */
.gcg-hero {
    position: relative;
    overflow: hidden;
    padding: 48px 50px;
    background: linear-gradient(135deg, #03281d 0%, #063d2a 48%, #087a4b 100%);
    border-radius: 24px;
    box-shadow: 0 25px 60px rgba(3,40,29,.18);
    margin-bottom: 38px;
}

.gcg-hero::before {
    content: "";
    position: absolute;
    width: 330px;
    height: 330px;
    right: -120px;
    top: -160px;
    border: 1px solid rgba(242,212,124,.25);
    border-radius: 50%;
}

.gcg-hero::after {
    content: "";
    position: absolute;
    width: 190px;
    height: 190px;
    right: 80px;
    bottom: -135px;
    border: 1px solid rgba(255,255,255,.10);
    border-radius: 50%;
}

.gcg-hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 25px;
}

.gcg-hero-icon {
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
}

.gcg-hero-label {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #bde3d2;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
}

.gcg-hero-label span {
    width: 25px;
    height: 2px;
    background: #d5a83a;
}

.gcg-hero h1 {
    margin: 8px 0;
    color: #fff;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 34px;
    font-weight: 700;
}

.gcg-hero h1 span {
    color: #f2d47c;
}

.gcg-hero p {
    max-width: 760px;
    margin: 0;
    color: #c9ded4;
    font-size: 13px;
    line-height: 1.8;
}

/* =====================================================
   MAIN LAYOUT
===================================================== */
.gcg-main-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 290px;
    gap: 28px;
    align-items: start;
    min-width: 0;
}

.gcg-main-layout > div {
    min-width: 0;
}

/* =====================================================
   TABLE CARD
===================================================== */
.gcg-panel {
    background: #fff;
    border: 1px solid #e2ebe6;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 45px rgba(18,53,39,.08);
}

.gcg-panel-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 26px 30px;
    border-bottom: 1px solid #edf1ee;
}

.gcg-panel-title {
    display: flex;
    align-items: center;
    gap: 14px;
}

.gcg-panel-icon {
    width: 45px;
    height: 45px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #edf8f2, #f8f1d9);
    color: #087a4b;
    border: 1px solid #dce9e2;
    border-radius: 12px;
    font-size: 18px;
}

.gcg-panel-title strong {
    display: block;
    color: #1c2d24;
    font-size: 17px;
}

.gcg-panel-title span {
    display: block;
    margin-top: 4px;
    color: #829089;
    font-size: 10px;
}

.gcg-count {
    flex-shrink: 0;
    padding: 8px 12px;
    background: #fbf4dc;
    border: 1px solid #f1df9e;
    color: #80620d;
    border-radius: 8px;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: .7px;
}

/* =====================================================
   TABLE
===================================================== */
.gcg-table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.gcg-table {
    width: 100%;
    min-width: 760px;
    border-collapse: collapse;
}

.gcg-table thead {
    background: linear-gradient(135deg, #063d2a, #087a4b);
}

.gcg-table th {
    padding: 17px 18px;
    color: #fff;
    font-size: 10px;
    font-weight: 700;
    text-align: left;
    text-transform: uppercase;
    letter-spacing: .7px;
    white-space: nowrap;
}

.gcg-table th:first-child,
.gcg-table td:first-child {
    width: 65px;
    text-align: center;
}

.gcg-table th:nth-child(2),
.gcg-table td:nth-child(2) {
    width: 90px;
    text-align: center;
}

.gcg-table th:nth-child(5),
.gcg-table td:nth-child(5) {
    width: 130px;
    text-align: center;
}

.gcg-table tbody tr {
    border-bottom: 1px solid #edf1ee;
    transition: background .25s ease;
}

.gcg-table tbody tr:last-child {
    border-bottom: none;
}

.gcg-table tbody tr:hover {
    background: #f6faf8;
}

.gcg-table td {
    padding: 17px 18px;
    color: #33443c;
    font-size: 12px;
    vertical-align: middle;
}

/* =====================================================
   NUMBER
===================================================== */
.gcg-number {
    width: 31px;
    height: 31px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf8f2;
    color: #087a4b;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 800;
    transition: .25s ease;
}

.gcg-table tr:hover .gcg-number {
    background: #087a4b;
    color: #fff;
    transform: translateY(-2px);
}

/* =====================================================
   YEAR
===================================================== */
.gcg-year {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 60px;
    padding: 7px 11px;
    background: #fbf4dc;
    border: 1px solid #f1df9e;
    color: #80620d;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 800;
}

/* =====================================================
   DOCUMENT
===================================================== */
.gcg-document {
    display: flex;
    align-items: center;
    gap: 12px;
}

.gcg-pdf {
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff1f1;
    border: 1px solid #f2d9d9;
    color: #d34a4a;
    border-radius: 10px;
    font-size: 16px;
    transition: .25s ease;
}

.gcg-table tr:hover .gcg-pdf {
    transform: translateY(-2px);
}

.gcg-document-info strong {
    display: block;
    max-width: 220px;
    color: #1e3027;
    font-size: 12px;
    line-height: 1.5;
    overflow-wrap: anywhere;
}

.gcg-document-info span {
    display: block;
    margin-top: 3px;
    color: #9aa69f;
    font-size: 8px;
    letter-spacing: .7px;
}

/* =====================================================
   DESCRIPTION
===================================================== */
.gcg-description strong {
    display: block;
    color: #087a4b;
    font-size: 11px;
}

.gcg-description span {
    display: block;
    margin-top: 4px;
    max-width: 240px;
    color: #78857f;
    font-size: 10px;
    line-height: 1.6;
    overflow-wrap: anywhere;
}

/* =====================================================
   DOWNLOAD
===================================================== */
.gcg-download {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    padding: 9px 13px;
    background: linear-gradient(135deg, #087a4b, #0a9259);
    color: #fff;
    text-decoration: none;
    border-radius: 7px;
    font-size: 10px;
    font-weight: 700;
    white-space: nowrap;
    box-shadow: 0 6px 15px rgba(8,122,75,.16);
    transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
}

.gcg-download:hover {
    background: #063d2a;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 9px 20px rgba(3,40,29,.20);
}

/* =====================================================
   EMPTY STATE
===================================================== */
.gcg-empty {
    padding: 65px 25px;
    text-align: center;
}

.gcg-empty-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf8f2;
    color: #087a4b;
    border-radius: 14px;
    font-size: 23px;
}

.gcg-empty h3 {
    margin: 0 0 7px;
    color: #25362e;
    font-size: 18px;
}

.gcg-empty p {
    margin: 0;
    color: #84908b;
    font-size: 11px;
}

/* =====================================================
   NOTE
===================================================== */
.gcg-note {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-top: 15px;
    padding: 13px 16px;
    background: #f2f8f5;
    border: 1px solid #deebe4;
    color: #718079;
    border-radius: 9px;
    font-size: 9px;
    line-height: 1.7;
}

.gcg-note i {
    margin-top: 2px;
    color: #087a4b;
    font-size: 12px;
}

/* =====================================================
   LINK TERKAIT — DESAIN PREMIUM
===================================================== */
.gcg-related {
    position: relative;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 14px 35px rgba(18,53,39,.07);
    animation: gcgFadeUp .8s ease .25s both;
}

.gcg-related-header {
    position: relative;
    overflow: hidden;
    padding: 23px 22px 21px;
    background: linear-gradient(135deg, #03281d 0%, #064a32 55%, #087a4b 100%);
    border-bottom: 3px solid #d5a83a;
    color: #fff;
}

.gcg-related-header::before {
    content: "";
    position: absolute;
    width: 115px;
    height: 115px;
    right: -42px;
    top: -55px;
    border: 1px solid rgba(242,212,124,.35);
    border-radius: 50%;
}

.gcg-related-header::after {
    content: "";
    position: absolute;
    width: 75px;
    height: 75px;
    right: 20px;
    bottom: -52px;
    border: 1px solid rgba(255,255,255,.13);
    border-radius: 50%;
}

.gcg-related-heading {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 12px;
}

.gcg-related-heading-icon {
    width: 39px;
    height: 39px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,.09);
    border: 1px solid rgba(242,212,124,.35);
    border-radius: 9px;
    color: #f2d47c;
    font-size: 15px;
}

.gcg-related-header h3 {
    margin: 0;
    color: #fff;
    font-size: 15px;
    font-weight: 800;
    letter-spacing: .2px;
}

.gcg-related-header p {
    margin: 5px 0 0;
    color: #c3dfd1;
    font-size: 10px;
    line-height: 1.6;
}

.gcg-related-list {
    padding: 9px 12px 12px;
}

.gcg-related-link {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin: 3px 0;
    padding: 12px 11px;
    color: #405249;
    text-decoration: none;
    border: 1px solid transparent;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 600;
    transition: background .25s ease, border-color .25s ease, color .25s ease, transform .25s ease;
}

.gcg-related-link::before {
    content: "";
    position: absolute;
    left: -1px;
    top: 8px;
    bottom: 8px;
    width: 3px;
    background: #d5a83a;
    border-radius: 0 3px 3px 0;
    opacity: 0;
    transition: opacity .25s ease;
}

.gcg-related-link:hover {
    color: #087a4b;
    background: #f4faf6;
    border-color: #e2eee7;
    transform: translateX(2px);
}

.gcg-related-link:hover::before {
    opacity: 1;
}

.gcg-related-link.active {
    color: #076b43;
    background: linear-gradient(110deg, #edf8f2, #f8fbf8);
    border-color: #dcebe2;
    font-weight: 800;
}

.gcg-related-link.active::before {
    opacity: 1;
}

.gcg-related-left {
    display: flex;
    align-items: center;
    gap: 11px;
    min-width: 0;
}

.gcg-related-icon {
    width: 33px;
    height: 33px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f0f6f2;
    border: 1px solid #e4eee8;
    border-radius: 8px;
    color: #087a4b;
    font-size: 12px;
    transition: background .25s ease, color .25s ease, border-color .25s ease;
}

.gcg-related-link:hover .gcg-related-icon,
.gcg-related-link.active .gcg-related-icon {
    background: #087a4b;
    border-color: #087a4b;
    color: #fff;
}

.gcg-related-text {
    display: block;
    line-height: 1.5;
}

.gcg-related-arrow {
    flex-shrink: 0;
    color: #a4b2aa;
    font-size: 9px;
    transition: color .25s ease, transform .25s ease;
}

.gcg-related-link:hover .gcg-related-arrow,
.gcg-related-link.active .gcg-related-arrow {
    color: #c69a28;
    transform: translateX(3px);
}

.gcg-related-footer {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0 20px;
    padding: 13px 0 16px;
    border-top: 1px solid #edf2ee;
    color: #89978f;
    font-size: 9px;
    line-height: 1.6;
}

.gcg-related-footer i {
    color: #c69a28;
    font-size: 11px;
}

/* =====================================================
   ANIMATION
===================================================== */
.gcg-hero {
    animation: gcgFadeUp .7s ease both;
}

.gcg-panel {
    animation: gcgFadeUp .8s ease .15s both;
}

@keyframes gcgFadeUp {
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
   RESPONSIVE
===================================================== */
@media (max-width: 1100px) {
    .gcg-container {
        width: 90%;
    }

    .gcg-main-layout {
        grid-template-columns: minmax(0, 1fr) 265px;
        gap: 20px;
    }
}

@media (max-width: 950px) {
    .gcg-main-layout {
        grid-template-columns: 1fr;
    }

    .gcg-related {
        order: 2;
    }
}

@media (max-width: 700px) {
    .gcg-page {
        padding: 50px 0 80px;
    }

    .gcg-container {
        width: 92%;
    }

    .gcg-hero {
        padding: 35px 25px;
        border-radius: 17px;
    }

    .gcg-hero-content {
        align-items: flex-start;
        gap: 18px;
    }

    .gcg-hero-icon {
        width: 58px;
        height: 58px;
        font-size: 21px;
        border-radius: 13px;
    }

    .gcg-hero h1 {
        font-size: 26px;
    }

    .gcg-hero p {
        font-size: 11px;
    }

    .gcg-panel-top {
        padding: 22px 20px;
    }

    .gcg-panel-title strong {
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .gcg-hero-content {
        display: block;
    }

    .gcg-hero-icon {
        margin-bottom: 18px;
    }

    .gcg-hero h1 {
        font-size: 23px;
    }

    .gcg-panel-top {
        display: block;
    }

    .gcg-count {
        display: inline-block;
        margin-top: 12px;
    }

    .gcg-related-header {
        padding: 20px 18px;
    }

    .gcg-related-list {
        padding: 8px 10px 10px;
    }
}

/* =====================================================
   TABLE SCROLLBAR
===================================================== */
.gcg-table-wrapper::-webkit-scrollbar {
    height: 6px;
}

.gcg-table-wrapper::-webkit-scrollbar-track {
    background: #eef3f0;
}

.gcg-table-wrapper::-webkit-scrollbar-thumb {
    background: #087a4b;
    border-radius: 10px;
}
</style>

<section class="gcg-page">
    <div class="gcg-container">

        {{-- HERO --}}
        <div class="gcg-hero">
            <div class="gcg-hero-content">
                <div class="gcg-hero-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>
                    <div class="gcg-hero-label">
                        <span></span>
                        DOKUMEN PERUSAHAAN
                    </div>

                    <h1>
                        Good Corporate
                        <span>Governance</span>
                    </h1>

                    <p>
                        Kumpulan dokumen Good Corporate Governance
                        PT. Jamkrida NTB Syariah (Perseroda) sebagai
                        bentuk transparansi dan penerapan tata kelola
                        perusahaan yang baik.
                    </p>
                </div>
            </div>
        </div>

        {{-- MAIN CONTENT --}}
        <div class="gcg-main-layout">

            {{-- GCG TABLE --}}
            <div>
                <div class="gcg-panel">

                    <div class="gcg-panel-top">
                        <div class="gcg-panel-title">
                            <div class="gcg-panel-icon">
                                <i class="fa-solid fa-file-shield"></i>
                            </div>

                            <div>
                                <strong>Daftar Dokumen GCG</strong>
                                <span>
                                    Good Corporate Governance
                                    PT. Jamkrida NTB Syariah
                                </span>
                            </div>
                        </div>

                        <div class="gcg-count">
                            {{ $gcgs->count() }} DOKUMEN
                        </div>
                    </div>

                    @if($gcgs->count() > 0)
                        <div class="gcg-table-wrapper">
                            <table class="gcg-table">
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
                                    @foreach($gcgs as $index => $gcg)
                                        <tr>
                                            <td>
                                                <span class="gcg-number">
                                                    {{ $index + 1 }}
                                                </span>
                                            </td>

                                            <td>
                                                <span class="gcg-year">
                                                    {{ $gcg->year }}
                                                </span>
                                            </td>

                                            <td>
                                                <div class="gcg-document">
                                                    <div class="gcg-pdf">
                                                        <i class="fa-solid fa-file-pdf"></i>
                                                    </div>

                                                    <div class="gcg-document-info">
                                                        <strong>{{ $gcg->title }}</strong>
                                                        <span>PDF DOCUMENT</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="gcg-description">
                                                    <strong>{{ $gcg->year }}</strong>

                                                    @if($gcg->description)
                                                        <span>{{ $gcg->description }}</span>
                                                    @else
                                                        <span>
                                                            Dokumen Good Corporate
                                                            Governance {{ $gcg->year }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>

                                            <td>
                                                @if($gcg->file_url)
                                                    <a
                                                        href="{{ asset('storage/' . $gcg->file_url) }}"
                                                        target="_blank"
                                                        rel="noopener noreferrer"
                                                        class="gcg-download"
                                                    >
                                                        <i class="fa-solid fa-download"></i>
                                                        Download
                                                    </a>
                                                @else
                                                    <span style="color:#9aa69f;font-size:9px;">
                                                        File belum tersedia
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="gcg-empty">
                            <div class="gcg-empty-icon">
                                <i class="fa-regular fa-folder-open"></i>
                            </div>

                            <h3>Belum Ada Dokumen GCG</h3>

                            <p>
                                Dokumen Good Corporate Governance
                                belum tersedia.
                            </p>
                        </div>
                    @endif
                </div>

                {{-- NOTE --}}
                <div class="gcg-note">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Gunakan tombol Download untuk mengunduh
                        dokumen Good Corporate Governance dalam
                        format PDF.
                    </span>
                </div>
            </div>

            {{-- LINK TERKAIT --}}
            <aside class="gcg-related">

                <div class="gcg-related-header">
                    <div class="gcg-related-heading">
                        <div class="gcg-related-heading-icon">
                            <i class="fa-solid fa-link"></i>
                        </div>

                        <div>
                            <h3>Link Terkait</h3>
                            <p>Informasi dan dokumen perusahaan lainnya</p>
                        </div>
                    </div>
                </div>

                <nav class="gcg-related-list" aria-label="Navigasi laporan perusahaan">

                    {{-- ANNUAL REPORT --}}
                    <a
                        href="{{ url('/menu/laporan/annual-report') }}"
                        class="gcg-related-link"
                    >
                        <span class="gcg-related-left">
                            <span class="gcg-related-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </span>
                            <span class="gcg-related-text">Annual Report</span>
                        </span>
                        <i class="fa-solid fa-chevron-right gcg-related-arrow"></i>
                    </a>

                    {{-- GCG: ACTIVE --}}
                    <a
                        href="{{ url('/menu/laporan/gcg') }}"
                        class="gcg-related-link active"
                        aria-current="page"
                    >
                        <span class="gcg-related-left">
                            <span class="gcg-related-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </span>
                            <span class="gcg-related-text">GCG</span>
                        </span>
                        <i class="fa-solid fa-chevron-right gcg-related-arrow"></i>
                    </a>

                    {{-- AUDITOR --}}
                    <a
                        href="{{ url('/menu/laporan/auditor') }}"
                        class="gcg-related-link"
                    >
                        <span class="gcg-related-left">
                            <span class="gcg-related-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </span>
                            <span class="gcg-related-text">Auditor</span>
                        </span>
                        <i class="fa-solid fa-chevron-right gcg-related-arrow"></i>
                    </a>

                    {{-- RENCANA BISNIS --}}
                    <a
                        href="{{ url('/menu/laporan/rencana_bisnis') }}"
                        class="gcg-related-link"
                    >
                        <span class="gcg-related-left">
                            <span class="gcg-related-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                            <span class="gcg-related-text">Rencana Bisnis</span>
                        </span>
                        <i class="fa-solid fa-chevron-right gcg-related-arrow"></i>
                    </a>

                    {{-- KEUANGAN BERKELANJUTAN --}}
                    <a
                        href="{{ url('/menu/laporan/keuangan_berkelanjutan') }}"
                        class="gcg-related-link"
                    >
                        <span class="gcg-related-left">
                            <span class="gcg-related-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </span>
                            <span class="gcg-related-text">Keuangan Berkelanjutan</span>
                        </span>
                        <i class="fa-solid fa-chevron-right gcg-related-arrow"></i>
                    </a>

                    {{-- DAFTAR AGEN --}}
                    <a
                        href="{{ url('/menu/laporan/daftar_agen') }}"
                        class="gcg-related-link"
                    >
                        <span class="gcg-related-left">
                            <span class="gcg-related-icon">
                                <i class="fa-solid fa-users"></i>
                            </span>
                            <span class="gcg-related-text">Daftar Agen Aktif</span>
                        </span>
                        <i class="fa-solid fa-chevron-right gcg-related-arrow"></i>
                    </a>

                </nav>

                <div class="gcg-related-footer">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Informasi resmi PT. Jamkrida NTB Syariah (Perseroda).</span>
                </div>

            </aside>
        </div>
    </div>
</section>

@endsection