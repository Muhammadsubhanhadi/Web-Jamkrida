
@extends('layouts.main')

@section('title', 'Rencana Bisnis')

@section('content')

<style>
/* =====================================================
   RENCANA BISNIS
===================================================== */

.renbis-page {
    position: relative;
    padding: 70px 0 110px;
    background:
        radial-gradient(circle at 8% 10%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 92% 35%, rgba(213,168,58,.08), transparent 25%),
        #f7faf8;
    min-height: 80vh;
}

.renbis-container {
    width: 85%;
    max-width: 1250px;
    margin: auto;
}

/* =====================================================
   HERO
===================================================== */

.renbis-hero {
    position: relative;
    overflow: hidden;
    padding: 48px 50px;
    background: linear-gradient(135deg, #03281d 0%, #063d2a 45%, #087a4b 100%);
    border-radius: 24px;
    box-shadow: 0 25px 60px rgba(3,40,29,.18);
    margin-bottom: 38px;
}

.renbis-hero::before {
    content: "";
    position: absolute;
    width: 280px;
    height: 280px;
    right: -90px;
    top: -120px;
    border: 1px solid rgba(242,212,124,.25);
    border-radius: 50%;
}

.renbis-hero::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    right: 80px;
    bottom: -130px;
    border: 1px solid rgba(255,255,255,.10);
    border-radius: 50%;
}

.renbis-hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 25px;
}

.renbis-hero-icon {
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

.renbis-label {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #bde3d2;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
}

.renbis-label span {
    width: 25px;
    height: 2px;
    background: #d5a83a;
}

.renbis-hero h1 {
    margin: 8px 0;
    color: #fff;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 34px;
    font-weight: 700;
}

.renbis-hero h1 span {
    color: #f2d47c;
}

.renbis-hero p {
    max-width: 720px;
    margin: 0;
    color: #c9ded4;
    font-size: 13px;
    line-height: 1.8;
}

/* =====================================================
   MAIN CONTENT
===================================================== */

.renbis-content {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 280px;
    gap: 28px;
    align-items: start;
}

/* =====================================================
   TABLE CARD
===================================================== */

.renbis-table-card {
    background: #fff;
    border: 1px solid #e2ebe6;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 45px rgba(18,53,39,.08);
    animation: renbisFadeUp .8s ease .15s both;
}

.renbis-table-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 28px 30px;
    border-bottom: 1px solid #edf1ee;
}

.renbis-table-heading h2 {
    margin: 0;
    color: #18271f;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 22px;
}

.renbis-table-heading h2 span {
    color: #087a4b;
}

.renbis-table-heading p {
    margin: 6px 0 0;
    color: #7a8881;
    font-size: 12px;
}

/* =====================================================
   TABLE
===================================================== */

.renbis-table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.renbis-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 650px;
}

.renbis-table thead {
    background: linear-gradient(135deg, #063d2a, #087a4b);
}

.renbis-table th {
    padding: 17px 20px;
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .8px;
    text-transform: uppercase;
    text-align: left;
    white-space: nowrap;
}

.renbis-table th:first-child,
.renbis-table td:first-child {
    text-align: center;
    width: 65px;
}

.renbis-table th:nth-child(2) {
    width: 110px;
}

.renbis-table th:nth-child(5) {
    width: 130px;
}

.renbis-table tbody tr {
    border-bottom: 1px solid #edf1ee;
    transition: background .25s ease, transform .25s ease;
}

.renbis-table tbody tr:last-child {
    border-bottom: none;
}

.renbis-table tbody tr:hover {
    background: #f5faf7;
}

.renbis-table td {
    padding: 19px 20px;
    color: #26352e;
    font-size: 13px;
    vertical-align: middle;
}

/* =====================================================
   NUMBER
===================================================== */

.renbis-number {
    width: 31px;
    height: 31px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9px;
    background: #edf8f2;
    color: #087a4b;
    font-size: 11px;
    font-weight: 800;
    transition: .25s ease;
}

.renbis-table tr:hover .renbis-number {
    background: #087a4b;
    color: #fff;
    transform: translateY(-2px);
}

/* =====================================================
   YEAR
===================================================== */

.renbis-year {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 65px;
    padding: 7px 12px;
    border-radius: 8px;
    background: #fbf4dc;
    border: 1px solid #f1df9e;
    color: #80620d;
    font-size: 11px;
    font-weight: 800;
}

/* =====================================================
   DOCUMENT
===================================================== */

.renbis-document {
    display: flex;
    align-items: center;
    gap: 13px;
}

.renbis-pdf-icon {
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
    font-size: 17px;
    transition: .25s ease;
}

.renbis-table tr:hover .renbis-pdf-icon {
    transform: translateY(-2px);
}

.renbis-document-title {
    color: #1c2d24;
    font-size: 12px;
    font-weight: 700;
    line-height: 1.5;
}

.renbis-document-type {
    margin-top: 3px;
    color: #89958f;
    font-size: 9px;
    letter-spacing: .5px;
}

/* =====================================================
   DESCRIPTION
===================================================== */

.renbis-description {
    color: #6d7b74;
    font-size: 11px;
    line-height: 1.7;
}

/* =====================================================
   DOWNLOAD
===================================================== */

.renbis-download {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 15px;
    background: linear-gradient(135deg, #087a4b, #0a9259);
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 700;
    white-space: nowrap;
    box-shadow: 0 6px 15px rgba(8,122,75,.16);
    transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
}

.renbis-download:hover {
    background: #063d2a;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 9px 20px rgba(3,40,29,.20);
}

/* =====================================================
   EMPTY STATE
===================================================== */

.renbis-empty {
    padding: 65px 20px;
    text-align: center;
}

.renbis-empty-icon {
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

.renbis-empty h3 {
    margin: 0 0 7px;
    color: #27352e;
    font-size: 18px;
}

.renbis-empty p {
    margin: 0;
    color: #7c8983;
    font-size: 12px;
}

/* =====================================================
   LINK TERKAIT — SIDEBAR PREMIUM
===================================================== */

.renbis-sidebar {
    position: relative;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(18,53,39,.07);
    animation: renbisFadeUp .8s ease .25s both;
}

.renbis-sidebar-header {
    position: relative;
    overflow: hidden;
    padding: 22px 22px 20px;
    background: linear-gradient(135deg, #03281d 0%, #063d2a 48%, #087a4b 100%);
    border-bottom: 3px solid #d5a83a;
    color: #fff;
}

.renbis-sidebar-header::before {
    content: "";
    position: absolute;
    width: 125px;
    height: 125px;
    right: -42px;
    top: -57px;
    border: 1px solid rgba(242,212,124,.32);
    border-radius: 50%;
}

.renbis-sidebar-header::after {
    content: "";
    position: absolute;
    width: 75px;
    height: 75px;
    right: 25px;
    bottom: -52px;
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 50%;
}

.renbis-sidebar-header h3 {
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

.renbis-sidebar-header h3 i {
    color: #f2d47c;
    font-size: 14px;
}

.renbis-sidebar-header p {
    position: relative;
    z-index: 2;
    margin: 7px 0 0;
    color: #c9ded4;
    font-size: 10px;
    line-height: 1.6;
}

.renbis-links {
    padding: 10px 13px;
}

.renbis-link {
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

.renbis-link:last-child {
    margin-bottom: 0;
}

.renbis-link:hover {
    color: #087a4b;
    background: #f4f9f6;
    border-color: #e2eee7;
    transform: translateX(2px);
}

.renbis-link.active {
    color: #075b39;
    background: linear-gradient(100deg, #edf8f1, #f7faf7);
    border-color: #d8eadd;
    font-weight: 800;
}

.renbis-link.active::before {
    content: "";
    position: absolute;
    top: 7px;
    bottom: 7px;
    left: -1px;
    width: 3px;
    background: #d5a83a;
    border-radius: 0 3px 3px 0;
}

.renbis-link-left {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
}

.renbis-link-icon {
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

.renbis-link:hover .renbis-link-icon {
    color: #fff;
    background: #087a4b;
    border-color: #087a4b;
}

.renbis-link.active .renbis-link-icon {
    color: #80620d;
    background: #fbf4dc;
    border-color: #f1df9e;
}

.renbis-link-text {
    line-height: 1.5;
}

.renbis-link-arrow {
    flex-shrink: 0;
    color: #aab7b0;
    font-size: 9px;
    transition: color .25s ease, transform .25s ease;
}

.renbis-link:hover .renbis-link-arrow,
.renbis-link.active .renbis-link-arrow {
    color: #d5a83a;
    transform: translateX(2px);
}

/* =====================================================
   ANIMATION
===================================================== */

.renbis-hero {
    animation: renbisFadeUp .7s ease both;
}

@keyframes renbisFadeUp {
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
   TABLE SCROLLBAR
===================================================== */

.renbis-table-wrapper::-webkit-scrollbar {
    height: 6px;
}

.renbis-table-wrapper::-webkit-scrollbar-track {
    background: #eef3f0;
}

.renbis-table-wrapper::-webkit-scrollbar-thumb {
    background: #087a4b;
    border-radius: 10px;
}

/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 950px) {
    .renbis-content {
        grid-template-columns: 1fr;
    }

    .renbis-sidebar {
        order: 2;
    }
}

@media (max-width: 700px) {
    .renbis-page {
        padding: 50px 0 80px;
    }

    .renbis-container {
        width: 92%;
    }

    .renbis-hero {
        padding: 35px 25px;
        border-radius: 20px;
    }

    .renbis-hero-content {
        align-items: flex-start;
    }

    .renbis-hero-icon {
        width: 58px;
        height: 58px;
        font-size: 21px;
    }

    .renbis-hero h1 {
        font-size: 26px;
    }

    .renbis-hero p {
        font-size: 11px;
    }

    .renbis-table-heading {
        padding: 23px 20px;
    }

    .renbis-table-heading h2 {
        font-size: 19px;
    }

    .renbis-table-card,
    .renbis-sidebar {
        border-radius: 14px;
    }
}

@media (max-width: 480px) {
    .renbis-hero-content {
        display: block;
    }

    .renbis-hero-icon {
        margin-bottom: 18px;
    }

    .renbis-hero h1 {
        font-size: 23px;
    }

    .renbis-table-heading {
        display: block;
    }

    .renbis-table-heading p {
        margin-top: 7px;
    }
}
</style>

<section class="renbis-page">
    <div class="renbis-container">

        {{-- HERO --}}
        <div class="renbis-hero">
            <div class="renbis-hero-content">

                <div class="renbis-hero-icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <div>
                    <div class="renbis-label">
                        <span></span>
                        DOKUMEN PERENCANAAN
                    </div>

                    <h1>
                        Rencana <span>Bisnis</span>
                    </h1>

                    <p>
                        Informasi dan dokumen Rencana Bisnis
                        PT. Jamkrida NTB Syariah (Perseroda)
                        sebagai bagian dari perencanaan dan pengembangan
                        perusahaan secara berkelanjutan.
                    </p>
                </div>

            </div>
        </div>

        {{-- CONTENT --}}
        <div class="renbis-content">

            {{-- TABLE --}}
            <div class="renbis-table-card">

                <div class="renbis-table-heading">
                    <div>
                        <h2>Rencana <span>Bisnis</span></h2>
                        <p>Daftar dokumen rencana bisnis perusahaan</p>
                    </div>
                </div>

                <div class="renbis-table-wrapper">
                    <table class="renbis-table">

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
                            @forelse($rencanaBisnis as $item)
                                <tr>
                                    {{-- NO --}}
                                    <td>
                                        <div class="renbis-number">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>

                                    {{-- TAHUN --}}
                                    <td>
                                        <span class="renbis-year">
                                            {{ $item->tahun }}
                                        </span>
                                    </td>

                                    {{-- DOKUMEN --}}
                                    <td>
                                        <div class="renbis-document">
                                            <div class="renbis-pdf-icon">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </div>

                                            <div>
                                                <div class="renbis-document-title">
                                                    Rencana Bisnis Tahun {{ $item->tahun }}
                                                </div>

                                                <div class="renbis-document-type">
                                                    PDF DOCUMENT
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- KETERANGAN --}}
                                    <td>
                                        <div class="renbis-description">
                                            Dokumen Rencana Bisnis
                                            PT. Jamkrida NTB Syariah
                                            Tahun {{ $item->tahun }}.
                                        </div>
                                    </td>

                                    {{-- ACTION --}}
                                    <td>
                                        @if(!empty($item->file))
                                            <a
                                                href="{{ asset('storage/' . $item->file) }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="renbis-download"
                                            >
                                                <i class="fa-solid fa-download"></i>
                                                Download
                                            </a>
                                        @else
                                            <span style="color:#9aa69f;font-size:10px;">
                                                File belum tersedia
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <div class="renbis-empty">
                                            <div class="renbis-empty-icon">
                                                <i class="fa-solid fa-file-circle-xmark"></i>
                                            </div>

                                            <h3>Belum Ada Dokumen</h3>

                                            <p>
                                                Dokumen Rencana Bisnis belum tersedia.
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
            <aside class="renbis-sidebar">

                <div class="renbis-sidebar-header">
                    <h3>
                        <i class="fa-solid fa-link"></i>
                        Link Terkait
                    </h3>

                    <p>Informasi perusahaan lainnya</p>
                </div>

                <div class="renbis-links">

                    {{-- ANNUAL REPORT --}}
                    <a
                        href="{{ url('/menu/laporan/annual-report') }}"
                        class="renbis-link"
                    >
                        <div class="renbis-link-left">
                            <span class="renbis-link-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </span>
                            <span class="renbis-link-text">Annual Report</span>
                        </div>
                        <i class="fa-solid fa-chevron-right renbis-link-arrow"></i>
                    </a>

                    {{-- GCG --}}
                    <a
                        href="{{ url('/menu/laporan/gcg') }}"
                        class="renbis-link"
                    >
                        <div class="renbis-link-left">
                            <span class="renbis-link-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </span>
                            <span class="renbis-link-text">GCG</span>
                        </div>
                        <i class="fa-solid fa-chevron-right renbis-link-arrow"></i>
                    </a>

                    {{-- AUDITOR --}}
                    <a
                        href="{{ url('/menu/laporan/auditor') }}"
                        class="renbis-link"
                    >
                        <div class="renbis-link-left">
                            <span class="renbis-link-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </span>
                            <span class="renbis-link-text">Auditor</span>
                        </div>
                        <i class="fa-solid fa-chevron-right renbis-link-arrow"></i>
                    </a>

                    {{-- RENCANA BISNIS: ACTIVE --}}
                    <a
                        href="{{ url('/menu/laporan/rencana_bisnis') }}"
                        class="renbis-link active"
                        aria-current="page"
                    >
                        <div class="renbis-link-left">
                            <span class="renbis-link-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                            <span class="renbis-link-text">Rencana Bisnis</span>
                        </div>
                        <i class="fa-solid fa-chevron-right renbis-link-arrow"></i>
                    </a>

                    {{-- KEUANGAN BERKELANJUTAN --}}
                    <a
                        href="{{ url('/menu/laporan/keuangan_berkelanjutan') }}"
                        class="renbis-link"
                    >
                        <div class="renbis-link-left">
                            <span class="renbis-link-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </span>
                            <span class="renbis-link-text">Keuangan Berkelanjutan</span>
                        </div>
                        <i class="fa-solid fa-chevron-right renbis-link-arrow"></i>
                    </a>

                    {{-- DAFTAR AGEN --}}
                    <a
                        href="{{ url('/menu/laporan/daftar_agen') }}"
                        class="renbis-link"
                    >
                        <div class="renbis-link-left">
                            <span class="renbis-link-icon">
                                <i class="fa-solid fa-users"></i>
                            </span>
                            <span class="renbis-link-text">Daftar Agen Aktif</span>
                        </div>
                        <i class="fa-solid fa-chevron-right renbis-link-arrow"></i>
                    </a>

                </div>
            </aside>

        </div>
    </div>
</section>

@endsection