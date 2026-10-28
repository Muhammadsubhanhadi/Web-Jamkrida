@extends('layouts.main')

@section('title', 'Daftar Agen Aktif')

@section('content')

<style>
/* =====================================================
   DAFTAR AGEN AKTIF PREMIUM
===================================================== */

.agent-page {
    position: relative;
    padding: 70px 0 110px;
    background:
        radial-gradient(circle at 8% 10%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 92% 35%, rgba(213,168,58,.08), transparent 25%),
        #f7faf8;
    min-height: 80vh;
}

.agent-container {
    width: 85%;
    max-width: 1250px;
    margin: auto;
}

/* HERO */

.agent-hero {
    position: relative;
    overflow: hidden;
    padding: 48px 50px;
    background: linear-gradient(135deg, #03281d 0%, #063d2a 45%, #087a4b 100%);
    border-radius: 24px;
    box-shadow: 0 25px 60px rgba(3,40,29,.18);
    margin-bottom: 38px;
}

.agent-hero::before {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    right: -100px;
    top: -140px;
    border: 1px solid rgba(242,212,124,.25);
    border-radius: 50%;
}

.agent-hero::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    right: 80px;
    bottom: -130px;
    border: 1px solid rgba(255,255,255,.10);
    border-radius: 50%;
}

.agent-hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 25px;
}

.agent-hero-icon {
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

.agent-label {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #bde3d2;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
}

.agent-label span {
    width: 25px;
    height: 2px;
    background: #d5a83a;
}

.agent-hero h1 {
    margin: 8px 0;
    color: #fff;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 34px;
    font-weight: 700;
}

.agent-hero h1 span {
    color: #f2d47c;
}

.agent-hero p {
    max-width: 750px;
    margin: 0;
    color: #c9ded4;
    font-size: 13px;
    line-height: 1.8;
}

/* CONTENT */

.agent-content {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 280px;
    gap: 28px;
    align-items: start;
}

/* TABLE CARD */

.agent-table-card {
    background: #fff;
    border: 1px solid #e5ece8;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 45px rgba(18,53,39,.08);
}

.agent-table-heading {
    padding: 28px 30px;
    border-bottom: 1px solid #edf1ee;
}

.agent-table-heading h2 {
    margin: 0;
    color: #18271f;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 22px;
}

.agent-table-heading h2 span {
    color: #087a4b;
}

.agent-table-heading p {
    margin: 6px 0 0;
    color: #7a8881;
    font-size: 12px;
}

/* TABLE */

.agent-table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.agent-table {
    width: 100%;
    min-width: 550px;
    border-collapse: collapse;
}

.agent-table thead {
    background: linear-gradient(135deg, #063d2a, #087a4b);
}

.agent-table th {
    padding: 17px 24px;
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .8px;
    text-transform: uppercase;
    text-align: left;
    white-space: nowrap;
}

.agent-table th:first-child,
.agent-table td:first-child {
    width: 85px;
    text-align: center;
}

.agent-table tbody tr {
    border-bottom: 1px solid #edf1ee;
    transition: background .25s ease;
}

.agent-table tbody tr:last-child {
    border-bottom: none;
}

.agent-table tbody tr:hover {
    background: #f5faf7;
}

.agent-table td {
    padding: 19px 24px;
    color: #26352e;
    font-size: 13px;
    vertical-align: middle;
}

/* NUMBER */

.agent-number {
    width: 32px;
    height: 32px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf7f1;
    color: #087a4b;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 700;
    transition: .25s ease;
}

.agent-table tr:hover .agent-number {
    background: #087a4b;
    color: #fff;
    transform: translateY(-2px);
}

/* AGENT NAME */

.agent-name {
    display: flex;
    align-items: center;
    gap: 14px;
}

.agent-avatar {
    width: 42px;
    height: 42px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #edf8f2, #f7f0d7);
    color: #087a4b;
    border: 1px solid #e2ece6;
    border-radius: 12px;
    font-size: 16px;
    transition: .25s ease;
}

.agent-table tr:hover .agent-avatar {
    transform: translateY(-2px);
    border-color: #d5a83a;
}

.agent-name-main {
    color: #1c2d24;
    font-size: 13px;
    font-weight: 700;
    overflow-wrap: anywhere;
}

.agent-name-status {
    margin-top: 3px;
    color: #89958f;
    font-size: 10px;
}

/* ACTIVE BADGE */

.agent-status {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 7px 11px;
    background: #edf8f2;
    border: 1px solid #d7ecdf;
    color: #087a4b;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 700;
    white-space: nowrap;
}

.agent-status-dot {
    width: 6px;
    height: 6px;
    background: #087a4b;
    border-radius: 50%;
    box-shadow: 0 0 0 4px rgba(8,122,75,.10);
}

/* EMPTY STATE */

.agent-empty {
    padding: 55px 20px;
    text-align: center;
}

.agent-empty-icon {
    color: #087a4b;
    font-size: 32px;
    margin-bottom: 12px;
}

.agent-empty h3 {
    margin: 0 0 6px;
    color: #26352e;
    font-size: 14px;
    font-weight: 700;
}

.agent-empty p {
    margin: 0;
    color: #89958f;
    font-size: 11px;
}

/* =====================================================
   LINK TERKAIT — PREMIUM SIDEBAR
===================================================== */

.agent-sidebar {
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(18,53,39,.07);
}

.agent-sidebar-header {
    position: relative;
    overflow: hidden;
    padding: 22px 21px 20px;
    background: linear-gradient(120deg, #03281d 0%, #064a32 55%, #087a4b 100%);
    border-bottom: 3px solid #d5a83a;
    color: #fff;
}

.agent-sidebar-header::before,
.agent-sidebar-header::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(242,212,124,.20);
    border-radius: 50%;
    pointer-events: none;
}

.agent-sidebar-header::before {
    width: 145px;
    height: 145px;
    right: -55px;
    top: -80px;
}

.agent-sidebar-header::after {
    width: 95px;
    height: 95px;
    right: -28px;
    top: -55px;
}

.agent-sidebar-heading {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 12px;
}

.agent-sidebar-heading-icon {
    width: 39px;
    height: 39px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f2d47c;
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(242,212,124,.45);
    border-radius: 10px;
    font-size: 15px;
}

.agent-sidebar-header h3 {
    margin: 0;
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: .2px;
}

.agent-sidebar-header p {
    margin: 5px 0 0;
    color: #c4e4d4;
    font-size: 10px;
    line-height: 1.5;
}

.agent-links {
    padding: 10px;
}

.agent-link {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 9px;
    padding: 10px 10px;
    margin-bottom: 4px;
    color: #34433c;
    text-decoration: none;
    font-size: 11.5px;
    font-weight: 600;
    border: 1px solid transparent;
    border-radius: 9px;
    transition: background .22s ease, color .22s ease, border-color .22s ease, transform .22s ease;
}

.agent-link:last-child {
    margin-bottom: 0;
}

.agent-link:hover {
    color: #087a4b;
    background: #f2f8f4;
    border-color: #e1eee6;
    transform: translateX(2px);
}

.agent-link-left {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
}

.agent-link-icon {
    width: 33px;
    height: 33px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #087a4b;
    background: #edf7f1;
    border: 1px solid #e0eee5;
    border-radius: 8px;
    font-size: 12px;
    transition: background .22s ease, color .22s ease;
}

.agent-link-text {
    line-height: 1.45;
}

.agent-link > i {
    flex-shrink: 0;
    color: #aeb9b3;
    font-size: 10px;
    transition: transform .22s ease, color .22s ease;
}

.agent-link:hover > i {
    color: #087a4b;
    transform: translateX(2px);
}

/* Active page */
.agent-link.active {
    color: #075d3a;
    background: linear-gradient(110deg, #eaf6ee, #f5faf6);
    border-color: #d5e9dc;
    box-shadow: inset 3px 0 0 #d5a83a;
}

.agent-link.active .agent-link-icon {
    color: #fff;
    background: linear-gradient(135deg, #087a4b, #064a32);
    border-color: #087a4b;
}

.agent-link.active > i {
    color: #087a4b;
}

.agent-sidebar-footer {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    margin: 0 18px;
    padding: 15px 2px 17px;
    border-top: 1px solid #edf2ee;
    color: #7a8981;
    font-size: 10px;
    line-height: 1.7;
}

.agent-sidebar-footer i {
    margin-top: 2px;
    color: #c29a2e;
    font-size: 12px;
}

/* RESPONSIVE */

@media (max-width: 950px) {
    .agent-content {
        grid-template-columns: 1fr;
    }

    .agent-sidebar {
        order: 2;
    }
}

@media (max-width: 700px) {
    .agent-page {
        padding: 50px 0 80px;
    }

    .agent-container {
        width: 92%;
    }

    .agent-hero {
        padding: 35px 25px;
        border-radius: 20px;
    }

    .agent-hero-content {
        align-items: flex-start;
    }

    .agent-hero-icon {
        width: 58px;
        height: 58px;
        font-size: 21px;
    }

    .agent-hero h1 {
        font-size: 26px;
    }

    .agent-hero p {
        font-size: 11px;
    }

    .agent-table-heading {
        padding: 23px 20px;
    }

    .agent-table-heading h2 {
        font-size: 19px;
    }

    .agent-table td,
    .agent-table th {
        padding-left: 18px;
        padding-right: 18px;
    }
}

@media (max-width: 480px) {
    .agent-hero-content {
        display: block;
    }

    .agent-hero-icon {
        margin-bottom: 18px;
    }

    .agent-hero h1 {
        font-size: 23px;
    }

    .agent-sidebar-header {
        padding: 19px 17px;
    }

    .agent-links {
        padding: 8px;
    }
}
</style>

<section class="agent-page">

    <div class="agent-container">

        {{-- HERO --}}
        <div class="agent-hero">
            <div class="agent-hero-content">

                <div class="agent-hero-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <div>
                    <div class="agent-label">
                        <span></span>
                        INFORMASI AGEN
                    </div>

                    <h1>
                        Daftar Agen <span>Aktif</span>
                    </h1>

                    <p>
                        Informasi daftar agen aktif
                        PT. Jamkrida NTB Syariah (Perseroda)
                        yang menjadi bagian dari jaringan pelayanan
                        dan kemitraan perusahaan.
                    </p>
                </div>

            </div>
        </div>

        {{-- CONTENT --}}
        <div class="agent-content">

            {{-- TABLE --}}
            <div class="agent-table-card">

                <div class="agent-table-heading">
                    <h2>
                        Daftar Agen <span>Aktif</span>
                    </h2>

                    <p>
                        Daftar agen yang tercatat sebagai agen aktif perusahaan
                    </p>
                </div>

                <div class="agent-table-wrapper">
                    <table class="agent-table">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Agen</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($daftarAgen as $agen)
                                <tr>
                                    {{-- NO --}}
                                    <td>
                                        <div class="agent-number">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>

                                    {{-- NAMA AGEN --}}
                                    <td>
                                        <div class="agent-name">
                                            <div class="agent-avatar">
                                                <i class="fa-solid fa-user"></i>
                                            </div>

                                            <div>
                                                <div class="agent-name-main">
                                                    {{ $agen->nama }}
                                                </div>

                                                <div class="agent-name-status">
                                                    Agen PT. Jamkrida NTB Syariah
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- STATUS --}}
                                    <td>
                                        <span class="agent-status">
                                            <span class="agent-status-dot"></span>
                                            Aktif
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">
                                        <div class="agent-empty">
                                            <div class="agent-empty-icon">
                                                <i class="fa-solid fa-users-slash"></i>
                                            </div>

                                            <h3>Belum Ada Agen</h3>

                                            <p>
                                                Data agen aktif belum tersedia.
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>

            {{-- LINK TERKAIT --}}
            <aside class="agent-sidebar">

                <div class="agent-sidebar-header">
                    <div class="agent-sidebar-heading">
                        <div class="agent-sidebar-heading-icon">
                            <i class="fa-solid fa-link"></i>
                        </div>

                        <div>
                            <h3>Link Terkait</h3>
                            <p>Informasi perusahaan lainnya</p>
                        </div>
                    </div>
                </div>

                <nav class="agent-links" aria-label="Navigasi laporan perusahaan">

                    {{-- ANNUAL REPORT --}}
                    <a
                        href="{{ url('/menu/laporan/annual-report') }}"
                        class="agent-link"
                    >
                        <span class="agent-link-left">
                            <span class="agent-link-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </span>
                            <span class="agent-link-text">Annual Report</span>
                        </span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>

                    {{-- GCG --}}
                    <a
                        href="{{ url('/menu/laporan/gcg') }}"
                        class="agent-link"
                    >
                        <span class="agent-link-left">
                            <span class="agent-link-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </span>
                            <span class="agent-link-text">GCG</span>
                        </span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>

                    {{-- AUDITOR --}}
                    <a
                        href="{{ url('/menu/laporan/auditor') }}"
                        class="agent-link"
                    >
                        <span class="agent-link-left">
                            <span class="agent-link-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </span>
                            <span class="agent-link-text">Auditor</span>
                        </span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>

                    {{-- RENCANA BISNIS --}}
                    <a
                        href="{{ url('/menu/laporan/rencana_bisnis') }}"
                        class="agent-link"
                    >
                        <span class="agent-link-left">
                            <span class="agent-link-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                            <span class="agent-link-text">Rencana Bisnis</span>
                        </span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>

                    {{-- KEUANGAN BERKELANJUTAN --}}
                    <a
                        href="{{ url('/menu/laporan/keuangan_berkelanjutan') }}"
                        class="agent-link"
                    >
                        <span class="agent-link-left">
                            <span class="agent-link-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </span>
                            <span class="agent-link-text">Keuangan Berkelanjutan</span>
                        </span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>

                    {{-- DAFTAR AGEN: HALAMAN AKTIF --}}
                    <a
                        href="{{ url('/menu/laporan/daftar_agen') }}"
                        class="agent-link active"
                        aria-current="page"
                    >
                        <span class="agent-link-left">
                            <span class="agent-link-icon">
                                <i class="fa-solid fa-users"></i>
                            </span>
                            <span class="agent-link-text">Daftar Agen Aktif</span>
                        </span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>

                </nav>

                <div class="agent-sidebar-footer">
                    <i class="fa-solid fa-building-columns"></i>
                    <span>
                        PT. Jamkrida NTB Syariah (Perseroda)<br>
                        Informasi dan dokumen perusahaan.
                    </span>
                </div>

            </aside>

        </div>

    </div>

</section>

@endsection