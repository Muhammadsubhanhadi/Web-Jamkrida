@extends('admin.layouts.app')

@section('title', 'Annual Report')

@section('content')

<style>
    /* =====================================================
       ANNUAL REPORT ADMIN
       CSS KHUSUS HALAMAN INI
    ===================================================== */

    .annual-admin-page {
        padding: 10px 5px 30px;
    }

    /* HEADER */
    .annual-admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .annual-admin-title {
        margin: 0;
        color: #173b2d;
        font-size: 28px;
        font-weight: 700;
    }

    .annual-admin-subtitle {
        margin: 7px 0 0;
        color: #7a8983;
        font-size: 14px;
    }

    /* BUTTON TAMBAH */
    .annual-admin-add {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 12px 18px;
        background: #087a4b;
        color: #ffffff;
        text-decoration: none;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        transition: .25s ease;
        white-space: nowrap;
    }

    .annual-admin-add:hover {
        background: #065d39;
        transform: translateY(-2px);
        color: #ffffff;
    }

    /* ALERT */
    .annual-admin-alert {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 13px 16px;
        margin-bottom: 22px;
        background: #eaf7f0;
        border-left: 4px solid #087a4b;
        color: #087a4b;
        font-size: 14px;
        border-radius: 6px;
    }

    /* AREA CARD */
    .annual-admin-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 18px;
    }

    /* CARD */
    .annual-admin-card {
        position: relative;
        overflow: hidden;
        background: #ffffff;
        border: 1px solid #e5ebe8;
        border-radius: 12px;
        padding: 22px;
        transition: .25s ease;
    }

    .annual-admin-card:hover {
        border-color: rgba(8, 122, 75, .35);
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, .07);
    }

    /* GARIS HIJAU ATAS */
    .annual-admin-card::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 3px;
        background: #087a4b;
    }

    /* BAGIAN ATAS CARD */
    .annual-admin-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
    }

    /* ICON PDF */
    .annual-admin-file-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eaf7f0;
        color: #087a4b;
        border-radius: 9px;
        font-size: 22px;
    }

    /* TAHUN */
    .annual-admin-year {
        display: inline-flex;
        align-items: center;
        padding: 7px 12px;
        background: #f8f2df;
        color: #a27a21;
        border: 1px solid #ead9a9;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 700;
    }

    /* CONTENT */
    .annual-admin-type {
        display: block;
        margin-bottom: 7px;
        color: #a27a21;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.5px;
    }

    .annual-admin-card h3 {
        margin: 0 0 8px;
        color: #173b2d;
        font-size: 19px;
        font-weight: 700;
    }

    .annual-admin-description {
        min-height: 45px;
        margin: 0;
        color: #7a8983;
        font-size: 13px;
        line-height: 1.7;
    }

    /* FOOTER CARD */
    .annual-admin-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        margin-top: 20px;
        padding-top: 17px;
        border-top: 1px solid #edf1ef;
    }

    .annual-admin-pdf {
        display: flex;
        align-items: center;
        gap: 7px;
        color: #7a8983;
        font-size: 12px;
        font-weight: 600;
    }

    /* ACTION */
    .annual-admin-actions {
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .annual-admin-edit,
    .annual-admin-delete {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        min-height: 36px;
        padding: 8px 11px;
        border-radius: 7px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        transition: .2s ease;
    }

    .annual-admin-edit {
        background: #eaf7f0;
        color: #087a4b;
        border: 1px solid #d7ede2;
    }

    .annual-admin-edit:hover {
        background: #087a4b;
        color: #ffffff;
    }

    .annual-admin-delete {
        background: #fff0f0;
        color: #c0392b;
        border: 1px solid #f1d4d1;
    }

    .annual-admin-delete:hover {
        background: #c0392b;
        color: #ffffff;
    }

    /* EMPTY */
    .annual-admin-empty {
        grid-column: 1 / -1;
        text-align: center;
        padding: 55px 25px;
        background: #ffffff;
        border: 1px dashed #d8e1dc;
        border-radius: 12px;
    }

    .annual-admin-empty i {
        margin-bottom: 15px;
        color: #087a4b;
        font-size: 38px;
    }

    .annual-admin-empty h3 {
        margin: 0 0 7px;
        color: #173b2d;
        font-size: 18px;
    }

    .annual-admin-empty p {
        margin: 0;
        color: #89968f;
        font-size: 13px;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 900px) {

        .annual-admin-list {
            grid-template-columns: 1fr;
        }

    }


    @media (max-width: 650px) {

        .annual-admin-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .annual-admin-add {
            width: 100%;
            justify-content: center;
        }

        .annual-admin-title {
            font-size: 24px;
        }

    }


    @media (max-width: 450px) {

        .annual-admin-card {
            padding: 18px;
        }

        .annual-admin-footer {
            align-items: flex-start;
            flex-direction: column;
        }

        .annual-admin-actions {
            width: 100%;
        }

        .annual-admin-edit,
        .annual-admin-delete {
            flex: 1;
        }

    }
</style>


<div class="annual-admin-page">


    <!-- =================================================
         HEADER
    ================================================== -->

    <div class="annual-admin-header">

        <div>

            <h1 class="annual-admin-title">
                Annual Report
            </h1>

            <p class="annual-admin-subtitle">
                Kelola dokumen laporan tahunan perusahaan.
            </p>

        </div>


        <a href="{{ route('admin.reports.create') }}"
           class="annual-admin-add">

            <i class="fa-solid fa-plus"></i>

            Tambah Annual Report

        </a>

    </div>


    <!-- =================================================
         PESAN SUKSES
    ================================================== -->

    @if(session('success'))

        <div class="annual-admin-alert">

            <i class="fa-solid fa-circle-check"></i>

            {{ session('success') }}

        </div>

    @endif


    <!-- =================================================
         DAFTAR ANNUAL REPORT
    ================================================== -->

    <div class="annual-admin-list">


        @forelse($reports as $report)


            <!-- =================================================
                 CARD ANNUAL REPORT
            ================================================== -->

            <div class="annual-admin-card">


                <!-- BAGIAN ATAS -->

                <div class="annual-admin-card-top">

                    <div class="annual-admin-file-icon">

                        <i class="fa-solid fa-file-pdf"></i>

                    </div>


                    <span class="annual-admin-year">

                        Tahun {{ $report->year }}

                    </span>

                </div>


                <!-- INFORMASI -->

                <span class="annual-admin-type">
                    ANNUAL REPORT
                </span>


                <h3>
                    {{ $report->title }}
                </h3>


                <p class="annual-admin-description">

                    @if($report->description)

                        {{ $report->description }}

                    @else

                        Tidak ada deskripsi untuk laporan ini.

                    @endif

                </p>


                <!-- FOOTER -->

                <div class="annual-admin-footer">


                    <div class="annual-admin-pdf">

                        <i class="fa-regular fa-file-lines"></i>

                        PDF

                    </div>


                    <div class="annual-admin-actions">


                        <!-- EDIT -->

                        <a href="{{ route('admin.reports.edit', $report->id) }}"
                           class="annual-admin-edit">

                            <i class="fa-solid fa-pen"></i>

                            Edit

                        </a>


                        <!-- HAPUS -->

                        <form
                            action="{{ route('admin.reports.destroy', $report->id) }}"
                            method="POST"
                            style="margin: 0;"
                            onsubmit="return confirm('Yakin ingin menghapus Annual Report ini?')"
                        >

                            @csrf

                            @method('DELETE')

                            <button type="submit"
                                    class="annual-admin-delete">

                                <i class="fa-solid fa-trash"></i>

                                Hapus

                            </button>

                        </form>


                    </div>

                </div>

            </div>


        @empty


            <!-- =================================================
                 JIKA BELUM ADA DATA
            ================================================== -->

            <div class="annual-admin-empty">

                <i class="fa-regular fa-file-lines"></i>

                <h3>
                    Belum Ada Annual Report
                </h3>

                <p>
                    Silakan tambahkan Annual Report melalui tombol
                    "Tambah Annual Report".
                </p>

            </div>


        @endforelse


    </div>


</div>

@endsection