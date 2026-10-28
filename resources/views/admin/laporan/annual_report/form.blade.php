@extends('admin.layouts.app')

@section('title', isset($report) ? 'Edit Annual Report' : 'Tambah Annual Report')

@section('content')

<style>
    /* =====================================================
       ANNUAL REPORT FORM ADMIN
       CSS KHUSUS HALAMAN FORM
    ===================================================== */

    .annual-form-page {
        padding: 10px 5px 30px;
    }

    /* HEADER */
    .annual-form-header {
        margin-bottom: 25px;
    }

    .annual-form-title {
        margin: 0;
        color: #173b2d;
        font-size: 28px;
        font-weight: 700;
    }

    .annual-form-subtitle {
        margin: 7px 0 0;
        color: #7a8983;
        font-size: 14px;
    }

    /* FORM CARD */
    .annual-form-card {
        max-width: 850px;
        background: #ffffff;
        border: 1px solid #e5ebe8;
        border-radius: 12px;
        padding: 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, .04);
    }

    /* GARIS HIJAU */
    .annual-form-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: #087a4b;
    }

    /* FORM GROUP */
    .annual-form-group {
        margin-bottom: 22px;
    }

    .annual-form-label {
        display: block;
        margin-bottom: 8px;
        color: #173b2d;
        font-size: 14px;
        font-weight: 600;
    }

    .annual-form-label span {
        color: #c0392b;
    }

    /* INPUT */
    .annual-form-input,
    .annual-form-textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 12px 14px;
        background: #fbfdfc;
        border: 1px solid #dfe7e3;
        border-radius: 7px;
        outline: none;
        color: #173b2d;
        font-family: inherit;
        font-size: 14px;
        transition: .2s ease;
    }

    .annual-form-input {
        height: 45px;
    }

    .annual-form-textarea {
        min-height: 125px;
        resize: vertical;
        line-height: 1.6;
    }

    .annual-form-input:focus,
    .annual-form-textarea:focus {
        border-color: #087a4b;
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 122, 75, .08);
    }

    /* FILE */
    .annual-form-file {
        width: 100%;
        box-sizing: border-box;
        padding: 10px;
        background: #fbfdfc;
        border: 1px dashed #cbd9d2;
        border-radius: 7px;
        color: #6f7f78;
        font-size: 13px;
        cursor: pointer;
    }

    .annual-form-file:focus {
        outline: none;
        border-color: #087a4b;
    }

    /* PETUNJUK */
    .annual-form-help {
        display: block;
        margin-top: 7px;
        color: #89968f;
        font-size: 12px;
        line-height: 1.5;
    }

    /* FILE LAMA */
    .annual-form-current-file {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
        padding: 11px 13px;
        background: #eaf7f0;
        border-left: 3px solid #087a4b;
        color: #087a4b;
        font-size: 13px;
    }

    .annual-form-current-file i {
        font-size: 17px;
    }

    /* ERROR */
    .annual-form-errors {
        margin-bottom: 22px;
        padding: 13px 16px;
        background: #fff1f0;
        border-left: 4px solid #c0392b;
        color: #a93226;
        border-radius: 6px;
        font-size: 13px;
    }

    .annual-form-errors ul {
        margin: 7px 0 0;
        padding-left: 20px;
    }

    .annual-form-errors li {
        margin-bottom: 4px;
    }

    /* BUTTON AREA */
    .annual-form-actions {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 28px;
        padding-top: 22px;
        border-top: 1px solid #edf1ef;
    }

    /* SIMPAN / UPDATE */
    .annual-form-submit {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-width: 125px;
        padding: 11px 18px;
        background: #087a4b;
        color: #ffffff;
        border: 1px solid #087a4b;
        border-radius: 7px;
        cursor: pointer;
        font-family: inherit;
        font-size: 13px;
        font-weight: 600;
        transition: .2s ease;
    }

    .annual-form-submit:hover {
        background: #065d39;
        border-color: #065d39;
        transform: translateY(-2px);
    }

    /* KEMBALI */
    .annual-form-back {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-width: 100px;
        padding: 11px 18px;
        background: #f4f6f5;
        color: #53635c;
        border: 1px solid #dfe5e2;
        border-radius: 7px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        transition: .2s ease;
    }

    .annual-form-back:hover {
        background: #e8ecea;
        color: #173b2d;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 650px) {

        .annual-form-page {
            padding: 5px 0 25px;
        }

        .annual-form-title {
            font-size: 24px;
        }

        .annual-form-card {
            padding: 22px;
        }

        .annual-form-actions {
            flex-direction: column;
        }

        .annual-form-submit,
        .annual-form-back {
            width: 100%;
        }

    }


    @media (max-width: 400px) {

        .annual-form-card {
            padding: 18px;
        }

    }
</style>


<div class="annual-form-page">


    <!-- =================================================
         HEADER
    ================================================== -->

    <div class="annual-form-header">

        <h1 class="annual-form-title">

            {{ isset($report) ? 'Edit Annual Report' : 'Tambah Annual Report' }}

        </h1>

        <p class="annual-form-subtitle">

            {{ isset($report)
                ? 'Perbarui informasi dan dokumen Annual Report.'
                : 'Tambahkan dokumen Annual Report baru ke dalam sistem.'
            }}

        </p>

    </div>


    <!-- =================================================
         FORM CARD
    ================================================== -->

    <div class="annual-form-card">


        <!-- ERROR VALIDASI -->

        @if($errors->any())

            <div class="annual-form-errors">

                <strong>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    Terdapat kesalahan:
                </strong>

                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ isset($report)
                ? route('admin.reports.update', $report->id)
                : route('admin.reports.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            @if(isset($report))

                @method('PUT')

            @endif


            <!-- =================================================
                 JUDUL
            ================================================== -->

            <div class="annual-form-group">

                <label class="annual-form-label">

                    Judul Annual Report
                    <span>*</span>

                </label>

                <input
                    type="text"
                    name="title"
                    class="annual-form-input"
                    value="{{ old('title', $report->title ?? '') }}"
                    placeholder="Contoh: Annual Report 2025"
                    required
                >

            </div>


            <!-- =================================================
                 TAHUN
            ================================================== -->

            <div class="annual-form-group">

                <label class="annual-form-label">

                    Tahun
                    <span>*</span>

                </label>

                <input
                    type="text"
                    name="year"
                    class="annual-form-input"
                    value="{{ old('year', $report->year ?? '') }}"
                    placeholder="Contoh: 2025"
                    maxlength="4"
                    required
                >

                <small class="annual-form-help">
                    Masukkan tahun laporan, contoh: 2025.
                </small>

            </div>


            <!-- =================================================
                 FILE PDF
            ================================================== -->

            <div class="annual-form-group">

                <label class="annual-form-label">

                    File PDF
                    @if(!isset($report))
                        <span>*</span>
                    @endif

                </label>

                <input
                    type="file"
                    name="file"
                    class="annual-form-file"
                    accept=".pdf,application/pdf"
                    {{ !isset($report) ? 'required' : '' }}
                >

                <small class="annual-form-help">

                    Format file harus PDF dengan ukuran maksimal 10 MB.

                </small>


                @if(isset($report) && $report->file_url)

                    <div class="annual-form-current-file">

                        <i class="fa-solid fa-file-pdf"></i>

                        <div>

                            <strong>
                                File saat ini:
                            </strong>

                            {{ basename($report->file_url) }}

                        </div>

                    </div>

                @endif

            </div>


            <!-- =================================================
                 DESKRIPSI
            ================================================== -->

            <div class="annual-form-group">

                <label class="annual-form-label">

                    Deskripsi

                </label>

                <textarea
                    name="description"
                    class="annual-form-textarea"
                    rows="5"
                    placeholder="Masukkan deskripsi Annual Report..."
                >{{ old('description', $report->description ?? '') }}</textarea>

                <small class="annual-form-help">

                    Deskripsi akan ditampilkan pada halaman Public Annual Report.

                </small>

            </div>


            <!-- =================================================
                 BUTTON
            ================================================== -->

            <div class="annual-form-actions">


                <button
                    type="submit"
                    class="annual-form-submit"
                >

                    <i class="fa-solid fa-save"></i>

                    {{ isset($report) ? 'Update' : 'Simpan' }}

                </button>


                <a
                    href="{{ route('admin.reports') }}"
                    class="annual-form-back"
                >

                    <i class="fa-solid fa-arrow-left"></i>

                    Kembali

                </a>


            </div>


        </form>

    </div>

</div>

@endsection