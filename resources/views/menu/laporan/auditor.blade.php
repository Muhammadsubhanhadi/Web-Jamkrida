
@extends('layouts.main')

@section('title', 'Auditor')

@section('content')

<style>
/* =====================================================
   AUDITOR PAGE
===================================================== */
.auditor-page {
    position: relative;
    padding: 70px 0 110px;
    background:
        radial-gradient(circle at 8% 10%, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 92% 35%, rgba(213,168,58,.08), transparent 25%),
        #f7faf8;
    min-height: 80vh;
}

.auditor-container {
    width: 85%;
    max-width: 1250px;
    margin: auto;
}

/* =====================================================
   HERO
===================================================== */
.auditor-hero {
    position: relative;
    overflow: hidden;
    padding: 48px 50px;
    background: linear-gradient(135deg, #03281d 0%, #063d2a 45%, #087a4b 100%);
    border-radius: 24px;
    box-shadow: 0 25px 60px rgba(3,40,29,.18);
    margin-bottom: 38px;
}

.auditor-hero::before {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    right: -100px;
    top: -140px;
    border: 1px solid rgba(242,212,124,.25);
    border-radius: 50%;
}

.auditor-hero::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    right: 80px;
    bottom: -130px;
    border: 1px solid rgba(255,255,255,.10);
    border-radius: 50%;
}

.auditor-hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 25px;
}

.auditor-hero-icon {
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

.auditor-label {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #bde3d2;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
}

.auditor-label span {
    width: 25px;
    height: 2px;
    background: #d5a83a;
}

.auditor-hero h1 {
    margin: 8px 0;
    color: #fff;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 34px;
    font-weight: 700;
}

.auditor-hero h1 span {
    color: #f2d47c;
}

.auditor-hero p {
    max-width: 750px;
    margin: 0;
    color: #c9ded4;
    font-size: 13px;
    line-height: 1.8;
}

/* =====================================================
   MAIN LAYOUT
===================================================== */
.auditor-content {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 290px;
    gap: 28px;
    align-items: start;
    min-width: 0;
}

.auditor-content > * {
    min-width: 0;
}

/* =====================================================
   TABLE CARD
===================================================== */
.auditor-table-card {
    background: #fff;
    border: 1px solid #e2ebe6;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 45px rgba(18,53,39,.08);
    animation: auditorFadeUp .8s ease .15s both;
}

.auditor-table-heading {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 26px 30px;
    border-bottom: 1px solid #edf1ee;
}

.auditor-heading-icon {
    width: 45px;
    height: 45px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #edf8f2, #f8f1d9);
    border: 1px solid #dce9e2;
    border-radius: 11px;
    color: #087a4b;
    font-size: 18px;
}

.auditor-table-heading h2 {
    margin: 0;
    color: #18271f;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 20px;
    font-weight: 700;
}

.auditor-table-heading h2 span {
    color: #087a4b;
}

.auditor-table-heading p {
    margin: 6px 0 0;
    color: #7a8881;
    font-size: 11px;
    line-height: 1.7;
}

/* =====================================================
   TABLE
===================================================== */
.auditor-table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.auditor-table {
    width: 100%;
    min-width: 650px;
    border-collapse: collapse;
}

.auditor-table thead {
    background: linear-gradient(135deg, #063d2a, #087a4b);
}

.auditor-table th {
    padding: 17px 20px;
    color: #fff;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .7px;
    text-transform: uppercase;
    text-align: left;
    white-space: nowrap;
}

.auditor-table th:first-child,
.auditor-table td:first-child {
    width: 70px;
    text-align: center;
}

.auditor-table th:nth-child(3),
.auditor-table td:nth-child(3) {
    width: 110px;
    text-align: center;
}

.auditor-table th:nth-child(4) {
    width: 160px;
}

.auditor-table tbody tr {
    border-bottom: 1px solid #edf1ee;
    transition: background .25s ease;
}

.auditor-table tbody tr:last-child {
    border-bottom: none;
}

.auditor-table tbody tr:hover {
    background: #f5faf7;
}

.auditor-table td {
    padding: 18px 20px;
    color: #26352e;
    font-size: 12px;
    vertical-align: middle;
}

/* =====================================================
   NUMBER
===================================================== */
.auditor-number {
    width: 31px;
    height: 31px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf7f1;
    color: #087a4b;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 800;
    transition: .25s ease;
}

.auditor-table tr:hover .auditor-number {
    background: #087a4b;
    color: #fff;
    transform: translateY(-2px);
}

/* =====================================================
   AUDITOR NAME
===================================================== */
.auditor-name {
    display: flex;
    align-items: center;
    gap: 13px;
}

.auditor-icon {
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #edf8f2, #f7f0d7);
    border: 1px solid #e2ece6;
    color: #087a4b;
    border-radius: 10px;
    font-size: 15px;
    transition: .25s ease;
}

.auditor-table tr:hover .auditor-icon {
    transform: translateY(-2px);
    border-color: #d5a83a;
}

.auditor-name-text {
    color: #1c2d24;
    font-weight: 700;
    line-height: 1.6;
    overflow-wrap: anywhere;
}

/* =====================================================
   YEAR
===================================================== */
.auditor-year {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 65px;
    padding: 7px 12px;
    background: #fbf4dc;
    border: 1px solid #f1df9e;
    color: #80620d;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 800;
}

/* =====================================================
   PREDIKAT
===================================================== */
.auditor-predicate {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 8px 12px;
    background: #edf8f2;
    border: 1px solid #d7ecdf;
    color: #087a4b;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 700;
    line-height: 1.5;
}

.auditor-predicate.wdp {
    background: #fbf4dc;
    border-color: #f1df9e;
    color: #80620d;
}

.auditor-predicate i {
    font-size: 10px;
}

/* =====================================================
   EMPTY STATE
===================================================== */
.auditor-empty {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    padding: 55px 25px;
    text-align: center;
}

.auditor-empty-icon {
    width: 58px;
    height: 58px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf8f2;
    border: 1px solid #dce9e2;
    border-radius: 13px;
    color: #087a4b;
    font-size: 22px;
}

.auditor-empty strong {
    color: #34473d;
    font-size: 14px;
}

.auditor-empty span {
    max-width: 350px;
    color: #84908b;
    font-size: 11px;
    line-height: 1.7;
}

/* =====================================================
   SIDEBAR LINK TERKAIT — PREMIUM
===================================================== */
.auditor-sidebar {
    position: relative;
    background: #fff;
    border: 1px solid #dce9e2;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 14px 35px rgba(18,53,39,.07);
    animation: auditorFadeUp .8s ease .25s both;
}

.auditor-sidebar-header {
    position: relative;
    overflow: hidden;
    padding: 23px 22px 21px;
    background: linear-gradient(135deg, #03281d 0%, #064a32 55%, #087a4b 100%);
    border-bottom: 3px solid #d5a83a;
    color: #fff;
}

.auditor-sidebar-header::before {
    content: "";
    position: absolute;
    width: 115px;
    height: 115px;
    right: -42px;
    top: -55px;
    border: 1px solid rgba(242,212,124,.35);
    border-radius: 50%;
}

.auditor-sidebar-header::after {
    content: "";
    position: absolute;
    width: 75px;
    height: 75px;
    right: 20px;
    bottom: -52px;
    border: 1px solid rgba(255,255,255,.13);
    border-radius: 50%;
}

.auditor-sidebar-heading {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 12px;
}

.auditor-sidebar-heading-icon {
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

.auditor-sidebar-header h3 {
    margin: 0;
    color: #fff;
    font-size: 15px;
    font-weight: 800;
    letter-spacing: .2px;
}

.auditor-sidebar-header p {
    margin: 5px 0 0;
    color: #c3dfd1;
    font-size: 10px;
    line-height: 1.6;
}

.auditor-links {
    padding: 9px 12px 12px;
}

.auditor-link {
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

.auditor-link::before {
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

.auditor-link:hover {
    color: #087a4b;
    background: #f4faf6;
    border-color: #e2eee7;
    transform: translateX(2px);
}

.auditor-link:hover::before {
    opacity: 1;
}

.auditor-link.active {
    color: #076b43;
    background: linear-gradient(110deg, #edf8f2, #f8fbf8);
    border-color: #dcebe2;
    font-weight: 800;
}

.auditor-link.active::before {
    opacity: 1;
}

.auditor-link-left {
    display: flex;
    align-items: center;
    gap: 11px;
    min-width: 0;
}

.auditor-link-icon {
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

.auditor-link:hover .auditor-link-icon,
.auditor-link.active .auditor-link-icon {
    background: #087a4b;
    border-color: #087a4b;
    color: #fff;
}

.auditor-link-text {
    display: block;
    line-height: 1.5;
}

.auditor-link-arrow {
    flex-shrink: 0;
    color: #a4b2aa;
    font-size: 9px;
    transition: color .25s ease, transform .25s ease;
}

.auditor-link:hover .auditor-link-arrow,
.auditor-link.active .auditor-link-arrow {
    color: #c69a28;
    transform: translateX(3px);
}

.auditor-sidebar-footer {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin: 0 20px;
    padding: 13px 0 16px;
    border-top: 1px solid #edf2ee;
    color: #89978f;
    font-size: 9px;
    line-height: 1.6;
}

.auditor-sidebar-footer i {
    margin-top: 2px;
    color: #c69a28;
    font-size: 11px;
}

/* =====================================================
   ANIMATION
===================================================== */
.auditor-hero {
    animation: auditorFadeUp .7s ease both;
}

@keyframes auditorFadeUp {
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
    .auditor-container {
        width: 90%;
    }

    .auditor-content {
        grid-template-columns: minmax(0, 1fr) 265px;
        gap: 20px;
    }
}

@media (max-width: 950px) {
    .auditor-content {
        grid-template-columns: 1fr;
    }

    .auditor-sidebar {
        order: 2;
    }
}

@media (max-width: 700px) {
    .auditor-page {
        padding: 50px 0 80px;
    }

    .auditor-container {
        width: 92%;
    }

    .auditor-hero {
        padding: 35px 25px;
        border-radius: 17px;
    }

    .auditor-hero-content {
        align-items: flex-start;
        gap: 18px;
    }

    .auditor-hero-icon {
        width: 58px;
        height: 58px;
        font-size: 21px;
        border-radius: 13px;
    }

    .auditor-hero h1 {
        font-size: 26px;
    }

    .auditor-hero p {
        font-size: 11px;
    }

    .auditor-table-heading {
        padding: 22px 20px;
    }

    .auditor-table-heading h2 {
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    .auditor-hero-content {
        display: block;
    }

    .auditor-hero-icon {
        margin-bottom: 18px;
    }

    .auditor-hero h1 {
        font-size: 23px;
    }

    .auditor-table-heading {
        align-items: flex-start;
        gap: 11px;
    }

    .auditor-heading-icon {
        width: 39px;
        height: 39px;
        font-size: 15px;
    }

    .auditor-sidebar-header {
        padding: 20px 18px;
    }

    .auditor-links {
        padding: 8px 10px 10px;
    }
}

/* =====================================================
   TABLE SCROLLBAR
===================================================== */
.auditor-table-wrapper::-webkit-scrollbar {
    height: 6px;
}

.auditor-table-wrapper::-webkit-scrollbar-track {
    background: #eef3f0;
}

.auditor-table-wrapper::-webkit-scrollbar-thumb {
    background: #087a4b;
    border-radius: 10px;
}
</style>

<section class="auditor-page">
    <div class="auditor-container">

        {{-- HERO --}}
        <div class="auditor-hero">
            <div class="auditor-hero-content">

                <div class="auditor-hero-icon">
                    <i class="fa-solid fa-user-tie"></i>
                </div>

                <div>
                    <div class="auditor-label">
                        <span></span>
                        INFORMASI AUDITOR
                    </div>

                    <h1>
                        Auditor <span>Perusahaan</span>
                    </h1>

                    <p>
                        Informasi auditor dan hasil pemeriksaan
                        PT. Jamkrida NTB Syariah (Perseroda)
                        sebagai bagian dari transparansi dan tata kelola
                        perusahaan.
                    </p>
                </div>

            </div>
        </div>

        {{-- CONTENT --}}
        <div class="auditor-content">

            {{-- TABLE AUDITOR --}}
            <div class="auditor-table-card">

                <div class="auditor-table-heading">
                    <div class="auditor-heading-icon">
                        <i class="fa-solid fa-file-circle-check"></i>
                    </div>

                    <div>
                        <h2>Daftar <span>Auditor</span></h2>
                        <p>
                            Riwayat auditor dan predikat hasil pemeriksaan
                            perusahaan.
                        </p>
                    </div>
                </div>

                <div class="auditor-table-wrapper">
                    <table class="auditor-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Auditor</th>
                                <th>Tahun</th>
                                <th>Predikat</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($audits as $index => $audit)
                                <tr>
                                    <td>
                                        <div class="auditor-number">
                                            {{ $index + 1 }}
                                        </div>
                                    </td>

                                    <td>
                                        <div class="auditor-name">
                                            <div class="auditor-icon">
                                                <i class="fa-solid fa-user-tie"></i>
                                            </div>

                                            <div class="auditor-name-text">
                                                {{ $audit->nama_auditor }}
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="auditor-year">
                                            {{ $audit->tahun }}
                                        </span>
                                    </td>

                                    <td>
                                        @php
                                            $predikat = strtoupper(trim($audit->predikat ?? ''));
                                            $isWdp = str_contains($predikat, 'WDP');
                                        @endphp

                                        <span class="auditor-predicate {{ $isWdp ? 'wdp' : '' }}">
                                            <i class="fa-solid {{ $isWdp ? 'fa-circle-info' : 'fa-circle-check' }}"></i>
                                            {{ $audit->predikat }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <div class="auditor-empty">
                                            <div class="auditor-empty-icon">
                                                <i class="fa-solid fa-user-tie"></i>
                                            </div>

                                            <strong>Belum ada data auditor</strong>

                                            <span>
                                                Data auditor akan tampil setelah ditambahkan
                                                melalui halaman admin.
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

            {{-- LINK TERKAIT --}}
            <aside class="auditor-sidebar">

                <div class="auditor-sidebar-header">
                    <div class="auditor-sidebar-heading">
                        <div class="auditor-sidebar-heading-icon">
                            <i class="fa-solid fa-link"></i>
                        </div>

                        <div>
                            <h3>Link Terkait</h3>
                            <p>Informasi dan dokumen perusahaan lainnya</p>
                        </div>
                    </div>
                </div>

                <nav class="auditor-links" aria-label="Navigasi laporan perusahaan">

                    {{-- ANNUAL REPORT --}}
                    <a
                        href="{{ url('/menu/laporan/annual-report') }}"
                        class="auditor-link"
                    >
                        <span class="auditor-link-left">
                            <span class="auditor-link-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </span>
                            <span class="auditor-link-text">Annual Report</span>
                        </span>
                        <i class="fa-solid fa-chevron-right auditor-link-arrow"></i>
                    </a>

                    {{-- GCG --}}
                    <a
                        href="{{ url('/menu/laporan/gcg') }}"
                        class="auditor-link"
                    >
                        <span class="auditor-link-left">
                            <span class="auditor-link-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </span>
                            <span class="auditor-link-text">GCG</span>
                        </span>
                        <i class="fa-solid fa-chevron-right auditor-link-arrow"></i>
                    </a>

                    {{-- AUDITOR: ACTIVE --}}
                    <a
                        href="{{ url('/menu/laporan/auditor') }}"
                        class="auditor-link active"
                        aria-current="page"
                    >
                        <span class="auditor-link-left">
                            <span class="auditor-link-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </span>
                            <span class="auditor-link-text">Auditor</span>
                        </span>
                        <i class="fa-solid fa-chevron-right auditor-link-arrow"></i>
                    </a>

                    {{-- RENCANA BISNIS --}}
                    <a
                        href="{{ url('/menu/laporan/rencana_bisnis') }}"
                        class="auditor-link"
                    >
                        <span class="auditor-link-left">
                            <span class="auditor-link-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                            <span class="auditor-link-text">Rencana Bisnis</span>
                        </span>
                        <i class="fa-solid fa-chevron-right auditor-link-arrow"></i>
                    </a>

                    {{-- KEUANGAN BERKELANJUTAN --}}
                    <a
                        href="{{ url('/menu/laporan/keuangan_berkelanjutan') }}"
                        class="auditor-link"
                    >
                        <span class="auditor-link-left">
                            <span class="auditor-link-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </span>
                            <span class="auditor-link-text">Keuangan Berkelanjutan</span>
                        </span>
                        <i class="fa-solid fa-chevron-right auditor-link-arrow"></i>
                    </a>

                    {{-- DAFTAR AGEN --}}
                    <a
                        href="{{ url('/menu/laporan/daftar_agen') }}"
                        class="auditor-link"
                    >
                        <span class="auditor-link-left">
                            <span class="auditor-link-icon">
                                <i class="fa-solid fa-users"></i>
                            </span>
                            <span class="auditor-link-text">Daftar Agen Aktif</span>
                        </span>
                        <i class="fa-solid fa-chevron-right auditor-link-arrow"></i>
                    </a>

                </nav>

                <div class="auditor-sidebar-footer">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>
                        Informasi resmi PT. Jamkrida NTB Syariah (Perseroda).
                    </span>
                </div>

            </aside>

        </div>
    </div>
</section>

@endsection