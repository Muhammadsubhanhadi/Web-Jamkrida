
@extends('layouts.main')

@section('title', 'Annual Report')

@section('content')

<style>
/* =====================================================
   ANNUAL REPORT - PREMIUM
===================================================== */

.annual-report-page {
    min-height: 100vh;
    background: linear-gradient(180deg, #f7fbf9 0%, #ffffff 45%, #f7faf8 100%);
    color: #10231c;
    padding: 55px 0 100px;
}

.annual-report-container {
    width: min(1250px, calc(100% - 40px));
    margin: auto;
}

/* PAGE HEADING */

.annual-report-heading {
    position: relative;
    margin-bottom: 32px;
    animation: headingReveal .8s ease both;
}

.annual-report-heading::before {
    content: "";
    display: block;
    width: 55px;
    height: 4px;
    margin-bottom: 14px;
    background: linear-gradient(90deg, #087a4b, #d5a83a);
    border-radius: 20px;
}

.annual-report-heading .eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 8px;
    color: #087a4b;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.annual-report-heading .eyebrow i {
    color: #d5a83a;
    font-size: 11px;
}

.annual-report-heading h1 {
    margin: 0;
    font-family: "Plus Jakarta Sans", "Poppins", sans-serif;
    font-size: 38px;
    line-height: 1.2;
    letter-spacing: -1px;
    color: #10231c;
}

.annual-report-heading h1 span {
    color: #087a4b;
}

.annual-report-heading p {
    max-width: 650px;
    margin-top: 10px;
    color: #718078;
    font-size: 12px;
    line-height: 1.8;
}

/* MAIN LAYOUT */

.annual-report-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 280px;
    gap: 28px;
    align-items: start;
}

/* REPORT PANEL */

.report-panel {
    position: relative;
    background: #ffffff;
    border: 1px solid #dce9e2;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 20px 55px rgba(3, 40, 29, .08);
    animation: panelReveal .9s ease .15s both;
}

/* PANEL TOP */

.report-panel-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    padding: 20px 24px;
    background: linear-gradient(135deg, #063d2a, #087a4b);
    position: relative;
    overflow: hidden;
}

.report-panel-top::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    right: -70px;
    top: -100px;
    border: 1px solid rgba(242, 212, 124, .25);
    border-radius: 50%;
}

.report-panel-title {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 13px;
}

.report-panel-icon {
    width: 43px;
    height: 43px;
    display: grid;
    place-items: center;
    flex-shrink: 0;
    background: rgba(255,255,255,.10);
    border: 1px solid rgba(255,255,255,.16);
    border-radius: 11px;
    color: #f2d47c;
    font-size: 17px;
}

.report-panel-title strong {
    display: block;
    color: #ffffff;
    font-family: "Plus Jakarta Sans", "Poppins", sans-serif;
    font-size: 14px;
    letter-spacing: .2px;
}

.report-panel-title span {
    display: block;
    margin-top: 3px;
    color: #c4ddd1;
    font-size: 9px;
}

.report-count {
    position: relative;
    z-index: 2;
    padding: 7px 11px;
    border: 1px solid rgba(255,255,255,.16);
    border-radius: 8px;
    background: rgba(255,255,255,.08);
    color: #f2d47c;
    font-size: 9px;
    font-weight: 800;
    white-space: nowrap;
}

/* TABLE */

.report-table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.report-table {
    width: 100%;
    min-width: 820px;
    border-collapse: collapse;
    font-size: 11px;
}

.report-table thead th {
    padding: 15px 17px;
    background: #f3f8f5;
    border-bottom: 1px solid #dce9e2;
    color: #587066;
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1.1px;
    text-transform: uppercase;
    text-align: left;
    white-space: nowrap;
}

.report-table thead th:first-child {
    width: 65px;
    text-align: center;
}

.report-table thead th:nth-child(2) {
    width: 110px;
    text-align: center;
}

.report-table thead th:nth-child(3) {
    width: 330px;
}

.report-table thead th:nth-child(4) {
    width: 260px;
}

.report-table thead th:last-child {
    width: 150px;
    text-align: center;
}

.report-table tbody tr {
    background: #ffffff;
    border-bottom: 1px solid #edf2ef;
    transition: background .25s ease, box-shadow .25s ease;
}

.report-table tbody tr:last-child {
    border-bottom: none;
}

.report-table tbody tr:hover {
    background: #fbfefc;
    box-shadow: inset 4px 0 0 #087a4b;
}

.report-table td {
    padding: 17px;
    vertical-align: middle;
    color: #34473f;
}

.report-table td:first-child {
    text-align: center;
}

/* NUMBER */

.report-number {
    width: 28px;
    height: 28px;
    display: inline-grid;
    place-items: center;
    border: 1px solid #d9e9e1;
    border-radius: 8px;
    background: #f5faf7;
    color: #087a4b;
    font-size: 9px;
    font-weight: 800;
    transition: .25s ease;
}

.report-table tbody tr:hover .report-number {
    background: #087a4b;
    color: #ffffff;
    border-color: #087a4b;
    transform: scale(1.05);
}

/* YEAR */

.report-year {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 55px;
    padding: 7px 10px;
    background: #edf8f3;
    border: 1px solid #d4ebe0;
    border-radius: 7px;
    color: #087a4b;
    font-size: 10px;
    font-weight: 800;
}

/* DOCUMENT */

.report-document {
    display: flex;
    align-items: center;
    gap: 12px;
}

.report-pdf {
    width: 42px;
    height: 42px;
    display: grid;
    place-items: center;
    flex-shrink: 0;
    border: 1px solid #f1d9c8;
    border-radius: 10px;
    background: #fff7f0;
    color: #d06d3c;
    font-size: 16px;
    transition: transform .25s ease, background .25s ease;
}

.report-table tbody tr:hover .report-pdf {
    transform: translateY(-2px);
    background: #fff1e5;
}

.report-document-info strong {
    display: block;
    color: #152a21;
    font-size: 11px;
    font-weight: 800;
    overflow-wrap: anywhere;
}

.report-document-info span {
    display: block;
    margin-top: 4px;
    color: #9aa69f;
    font-size: 8px;
    letter-spacing: .5px;
}

/* DESCRIPTION */

.report-description strong {
    display: block;
    color: #263b32;
    font-size: 10px;
    font-weight: 700;
}

.report-description span {
    display: block;
    margin-top: 4px;
    color: #89958f;
    font-size: 9px;
    line-height: 1.6;
}

/* DOWNLOAD */

.download-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    min-width: 105px;
    padding: 9px 13px;
    border: 1px solid #087a4b;
    border-radius: 8px;
    background: linear-gradient(135deg, #087a4b, #096b45);
    color: #ffffff !important;
    font-size: 9px;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 7px 18px rgba(8,122,75,.15);
    transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
}

.download-btn:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, #063d2a, #087a4b);
    box-shadow: 0 10px 24px rgba(8,122,75,.23);
    color: #ffffff !important;
}

.download-btn i {
    font-size: 9px;
}

/* EMPTY STATE */

.report-empty {
    padding: 55px 25px;
    text-align: center;
}

.report-empty-icon {
    width: 55px;
    height: 55px;
    display: grid;
    place-items: center;
    margin: 0 auto 15px;
    border-radius: 13px;
    background: #edf8f3;
    color: #087a4b;
    font-size: 20px;
}

.report-empty h3 {
    margin: 0;
    font-size: 15px;
}

.report-empty p {
    margin-top: 7px;
    color: #84918b;
    font-size: 10px;
}

/* FOOTER INFORMATION */

.report-footer-note {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 15px;
    color: #89958f;
    font-size: 9px;
    animation: fadeUp .8s ease .35s both;
}

.report-footer-note i {
    color: #d5a83a;
    flex-shrink: 0;
}

/* =====================================================
   SIDEBAR LINK TERKAIT - PREMIUM
===================================================== */

.annual-related {
    position: relative;
    background: #ffffff;
    border: 1px solid #dce9e2;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 16px 40px rgba(3, 40, 29, .07);
    animation: panelReveal .9s ease .25s both;
}

/* SIDEBAR HEADER */

.annual-related-header {
    position: relative;
    overflow: hidden;
    padding: 23px 22px 21px;
    background: linear-gradient(125deg, #03281d 0%, #063d2a 48%, #087a4b 100%);
    border-bottom: 3px solid #d5a83a;
    color: #ffffff;
}

.annual-related-header::before {
    content: "";
    position: absolute;
    width: 115px;
    height: 115px;
    right: -40px;
    top: -60px;
    border: 1px solid rgba(242, 212, 124, .32);
    border-radius: 50%;
}

.annual-related-header::after {
    content: "";
    position: absolute;
    width: 75px;
    height: 75px;
    right: 15px;
    bottom: -52px;
    border: 1px solid rgba(255, 255, 255, .12);
    border-radius: 50%;
}

.annual-related-header h3 {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
    color: #ffffff;
    font-family: "Plus Jakarta Sans", "Poppins", sans-serif;
    font-size: 15px;
    font-weight: 800;
    letter-spacing: .2px;
}

.annual-related-header h3::before {
    content: "";
    width: 4px;
    height: 19px;
    flex-shrink: 0;
    background: #f2d47c;
    border-radius: 2px;
}

.annual-related-header p {
    position: relative;
    z-index: 2;
    margin: 8px 0 0 14px;
    color: #c4ddd1;
    font-size: 10px;
    line-height: 1.6;
}

/* SIDEBAR LIST */

.annual-related-list {
    display: flex;
    flex-direction: column;
    gap: 5px;
    padding: 14px 12px;
}

/* SIDEBAR LINK */

.annual-related-link {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    min-height: 54px;
    padding: 10px 12px;
    border: 1px solid transparent;
    border-radius: 8px;
    background: #ffffff;
    color: #52665c;
    text-decoration: none;
    font-size: 11px;
    font-weight: 600;
    transition: background .25s ease, border-color .25s ease, color .25s ease, transform .25s ease, box-shadow .25s ease;
}

.annual-related-link::before {
    content: "";
    position: absolute;
    top: 10px;
    bottom: 10px;
    left: -1px;
    width: 3px;
    background: #d5a83a;
    border-radius: 0 3px 3px 0;
    opacity: 0;
    transition: opacity .25s ease;
}

.annual-related-left {
    display: flex;
    align-items: center;
    gap: 11px;
    min-width: 0;
}

.annual-related-left span {
    line-height: 1.5;
}

.annual-related-left i {
    display: grid;
    place-items: center;
    width: 34px;
    height: 34px;
    flex-shrink: 0;
    border: 1px solid #e1eee7;
    border-radius: 7px;
    background: #f3f8f5;
    color: #087a4b;
    font-size: 13px;
    transition: background .25s ease, color .25s ease, border-color .25s ease;
}

.annual-related-arrow {
    flex-shrink: 0;
    color: #aab7b0;
    font-size: 9px;
    transition: color .25s ease, transform .25s ease;
}

/* SIDEBAR HOVER */

.annual-related-link:hover {
    padding-left: 15px;
    border-color: #dcebe2;
    background: #f5faf7;
    color: #087a4b;
    transform: translateX(2px);
}

.annual-related-link:hover::before {
    opacity: 1;
}

.annual-related-link:hover .annual-related-left i {
    border-color: #087a4b;
    background: #087a4b;
    color: #ffffff;
}

.annual-related-link:hover .annual-related-arrow {
    color: #d5a83a;
    transform: translateX(3px);
}

/* ACTIVE PAGE */

.annual-related-link.active {
    border-color: #cce5d8;
    background: linear-gradient(100deg, #eaf6ef, #f7fbf8);
    color: #063d2a;
    font-weight: 800;
    box-shadow: inset 0 0 0 1px rgba(8, 122, 75, .025);
}

.annual-related-link.active::before {
    opacity: 1;
}

.annual-related-link.active .annual-related-left i {
    border-color: #087a4b;
    background: #087a4b;
    color: #f2d47c;
}

.annual-related-link.active .annual-related-arrow {
    color: #d5a83a;
}

/* ANIMATION */

@keyframes headingReveal {
    from {
        opacity: 0;
        transform: translateY(18px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes panelReveal {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* TABLET */

@media (max-width: 950px) {
    .annual-report-layout {
        grid-template-columns: 1fr;
    }

    .annual-related {
        order: 2;
        width: 100%;
    }

    .annual-related-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 7px;
    }
}

/* RESPONSIVE */

@media (max-width: 900px) {
    .annual-report-page {
        padding-top: 45px;
    }

    .annual-report-container {
        width: min(calc(100% - 30px), 760px);
    }

    .annual-report-heading h1 {
        font-size: 34px;
    }
}

@media (max-width: 600px) {
    .annual-report-page {
        padding: 35px 0 75px;
    }

    .annual-report-container {
        width: calc(100% - 24px);
    }

    .annual-report-heading {
        margin-bottom: 24px;
    }

    .annual-report-heading::before {
        width: 42px;
        height: 3px;
    }

    .annual-report-heading .eyebrow {
        font-size: 8px;
        letter-spacing: 1.5px;
    }

    .annual-report-heading h1 {
        font-size: 29px;
        letter-spacing: -.7px;
    }

    .annual-report-heading p {
        font-size: 10px;
    }

    .report-panel {
        border-radius: 14px;
    }

    .report-panel-top {
        padding: 16px;
    }

    .report-panel-icon {
        width: 38px;
        height: 38px;
    }

    .report-panel-title strong {
        font-size: 11px;
    }

    .report-panel-title span {
        font-size: 8px;
    }

    .report-count {
        font-size: 8px;
        padding: 6px 8px;
    }

    .report-table {
        min-width: 760px;
    }

    .report-table thead th {
        padding: 13px 12px;
    }

    .report-table td {
        padding: 14px 12px;
    }

    .report-footer-note {
        font-size: 8px;
    }

    .annual-related-header {
        padding: 19px 18px;
    }

    .annual-related-list {
        grid-template-columns: 1fr;
        padding: 10px;
        gap: 4px;
    }

    .annual-related-link {
        min-height: 50px;
        padding: 8px 10px;
        font-size: 11px;
    }

    .annual-related-left i {
        width: 32px;
        height: 32px;
    }
}

@media (max-width: 380px) {
    .annual-report-heading h1 {
        font-size: 26px;
    }

    .report-panel-top {
        align-items: flex-start;
    }

    .report-count {
        display: none;
    }
}

/* TABLE SCROLLBAR */

.report-table-wrapper::-webkit-scrollbar {
    height: 6px;
}

.report-table-wrapper::-webkit-scrollbar-track {
    background: #eef3f0;
}

.report-table-wrapper::-webkit-scrollbar-thumb {
    background: #087a4b;
    border-radius: 10px;
}
</style>

<main class="annual-report-page">
    <div class="annual-report-container">

        <!-- PAGE HEADER -->

        <div class="annual-report-heading">
            <div class="eyebrow">
                <i class="fa-solid fa-chart-pie"></i>
                DOKUMEN PERUSAHAAN
            </div>

            <h1>
                Annual <span>Report</span>
            </h1>

            <p>
                Kumpulan laporan tahunan PT. Jamkrida NTB Syariah
                sebagai informasi mengenai perkembangan, kinerja,
                dan tata kelola perusahaan.
            </p>
        </div>

        <!-- MAIN CONTENT + SIDEBAR -->

        <div class="annual-report-layout">

            <!-- LEFT CONTENT -->

            <div>
                <div class="report-panel">

                    <!-- PANEL HEADER -->

                    <div class="report-panel-top">
                        <div class="report-panel-title">
                            <div class="report-panel-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </div>

                            <div>
                                <strong>Daftar Annual Report</strong>
                                <span>Laporan tahunan PT. Jamkrida NTB Syariah</span>
                            </div>
                        </div>

                        <div class="report-count">
                            {{ $annualReports->count() }} DOKUMEN
                        </div>
                    </div>

                    <!-- TABLE -->

                    @if($annualReports->count() > 0)

                        <div class="report-table-wrapper">
                            <table class="report-table">
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
                                    @foreach($annualReports as $index => $report)
                                        <tr>
                                            <!-- NO -->
                                            <td>
                                                <span class="report-number">
                                                    {{ $index + 1 }}
                                                </span>
                                            </td>

                                            <!-- TAHUN -->
                                            <td>
                                                <span class="report-year">
                                                    {{ $report->year }}
                                                </span>
                                            </td>

                                            <!-- DOKUMEN -->
                                            <td>
                                                <div class="report-document">
                                                    <div class="report-pdf">
                                                        <i class="fa-solid fa-file-pdf"></i>
                                                    </div>

                                                    <div class="report-document-info">
                                                        <strong>{{ $report->title }}</strong>
                                                        <span>PDF DOCUMENT</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- KETERANGAN -->
                                            <td>
                                                <div class="report-description">
                                                    <strong>{{ $report->year }}</strong>

                                                    @if($report->description)
                                                        <span>{{ $report->description }}</span>
                                                    @else
                                                        <span>Annual Report {{ $report->year }}</span>
                                                    @endif
                                                </div>
                                            </td>

                                            <!-- ACTION -->
                                            <td>
                                                @if($report->file_url)
                                                    <a
                                                        href="{{ asset('storage/' . $report->file_url) }}"
                                                        target="_blank"
                                                        class="download-btn"
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

                        <!-- EMPTY STATE -->

                        <div class="report-empty">
                            <div class="report-empty-icon">
                                <i class="fa-regular fa-folder-open"></i>
                            </div>

                            <h3>Belum Ada Annual Report</h3>

                            <p>
                                Dokumen Annual Report perusahaan akan
                                ditampilkan di halaman ini.
                            </p>
                        </div>

                    @endif
                </div>

                <!-- INFORMATION -->

                <div class="report-footer-note">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>
                        Gunakan tombol Download untuk mengunduh dokumen
                        Annual Report dalam format PDF.
                    </span>
                </div>
            </div>

            <!-- SIDEBAR LINK TERKAIT -->

            <aside class="annual-related">

                <div class="annual-related-header">
                    <h3>Link Terkait</h3>
                    <p>Informasi dan dokumen perusahaan lainnya</p>
                </div>

                <div class="annual-related-list">

                    <!-- ANNUAL REPORT: ACTIVE -->

                    <a
                        href="{{ url('/menu/laporan/annual-report') }}"
                        class="annual-related-link active"
                        aria-current="page"
                    >
                        <div class="annual-related-left">
                            <i class="fa-solid fa-file-lines"></i>
                            <span>Annual Report</span>
                        </div>

                        <i class="fa-solid fa-chevron-right annual-related-arrow"></i>
                    </a>

                    <!-- GCG -->

                    <a
                        href="{{ url('/menu/laporan/gcg') }}"
                        class="annual-related-link"
                    >
                        <div class="annual-related-left">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>GCG</span>
                        </div>

                        <i class="fa-solid fa-chevron-right annual-related-arrow"></i>
                    </a>

                    <!-- AUDITOR -->

                    <a
                        href="{{ url('/menu/laporan/auditor') }}"
                        class="annual-related-link"
                    >
                        <div class="annual-related-left">
                            <i class="fa-solid fa-user-tie"></i>
                            <span>Auditor</span>
                        </div>

                        <i class="fa-solid fa-chevron-right annual-related-arrow"></i>
                    </a>

                    <!-- RENCANA BISNIS -->

                    <a
                        href="{{ url('/menu/laporan/rencana_bisnis') }}"
                        class="annual-related-link"
                    >
                        <div class="annual-related-left">
                            <i class="fa-solid fa-chart-line"></i>
                            <span>Rencana Bisnis</span>
                        </div>

                        <i class="fa-solid fa-chevron-right annual-related-arrow"></i>
                    </a>

                    <!-- KEUANGAN BERKELANJUTAN -->

                    <a
                        href="{{ url('/menu/laporan/keuangan_berkelanjutan') }}"
                        class="annual-related-link"
                    >
                        <div class="annual-related-left">
                            <i class="fa-solid fa-leaf"></i>
                            <span>Keuangan Berkelanjutan</span>
                        </div>

                        <i class="fa-solid fa-chevron-right annual-related-arrow"></i>
                    </a>

                    <!-- DAFTAR AGEN -->

                    <a
                        href="{{ url('/menu/laporan/daftar_agen') }}"
                        class="annual-related-link"
                    >
                        <div class="annual-related-left">
                            <i class="fa-solid fa-users"></i>
                            <span>Daftar Agen Aktif</span>
                        </div>

                        <i class="fa-solid fa-chevron-right annual-related-arrow"></i>
                    </a>

                </div>
            </aside>

        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const rows = document.querySelectorAll('.report-table tbody tr');

    rows.forEach((row, index) => {
        row.style.opacity = '0';
        row.style.transform = 'translateY(8px)';

        setTimeout(() => {
            row.style.transition = 'opacity .45s ease, transform .45s ease';
            row.style.opacity = '1';
            row.style.transform = 'translateY(0)';
        }, 100 + (index * 70));
    });
});
</script>

@endsection