@extends('admin.layouts.app')

@section('title', isset($report) ? 'Edit GCG' : 'Tambah GCG')

@section('content')

<style>
    .gcg-form-page {
        padding: 10px 5px 30px;
    }

    .gcg-form-header {
        margin-bottom: 25px;
    }

    .gcg-form-title {
        margin: 0;
        color: #173b2d;
        font-size: 28px;
        font-weight: 700;
    }

    .gcg-form-subtitle {
        margin: 7px 0 0;
        color: #7a8983;
        font-size: 14px;
    }

    .gcg-form-card {
        max-width: 850px;
        background: #ffffff;
        border: 1px solid #e5ebe8;
        border-radius: 12px;
        padding: 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, .04);
    }

    .gcg-form-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: #087a4b;
    }

    .gcg-form-group {
        margin-bottom: 22px;
    }

    .gcg-form-label {
        display: block;
        margin-bottom: 8px;
        color: #173b2d;
        font-size: 14px;
        font-weight: 600;
    }

    .gcg-form-label span {
        color: #c0392b;
    }

    .gcg-form-input,
    .gcg-form-textarea {
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

    .gcg-form-input {
        height: 45px;
    }

    .gcg-form-textarea {
        min-height: 125px;
        resize: vertical;
        line-height: 1.6;
    }

    .gcg-form-input:focus,
    .gcg-form-textarea:focus {
        border-color: #087a4b;
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(8, 122, 75, .08);
    }

    .gcg-form-file {
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

    .gcg-form-file:focus {
        outline: none;
        border-color: #087a4b;
    }

    .gcg-form-help {
        display: block;
        margin-top: 7px;
        color: #89968f;
        font-size: 12px;
        line-height: 1.5;
    }

    .gcg-form-current-file {
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

    .gcg-form-current-file i {
        font-size: 17px;
    }

    .gcg-form-errors {
        margin-bottom: 22px;
        padding: 13px 16px;
        background: #fff1f0;
        border-left: 4px solid #c0392b;
        color: #a93226;
        border-radius: 6px;
        font-size: 13px;
    }

    .gcg-form-errors ul {
        margin: 7px 0 0;
        padding-left: 20px;
    }

    .gcg-form-errors li {
        margin-bottom: 4px;
    }

    .gcg-form-actions {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 28px;
        padding-top: 22px;
        border-top: 1px solid #edf1ef;
    }

    .gcg-form-submit {
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

    .gcg-form-submit:hover {
        background: #065d39;
        border-color: #065d39;
        transform: translateY(-2px);
    }

    .gcg-form-back {
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

    .gcg-form-back:hover {
        background: #e8ecea;
        color: #173b2d;
    }

    @media (max-width: 650px) {

        .gcg-form-page {
            padding: 5px 0 25px;
        }

        .gcg-form-title {
            font-size: 24px;
        }

        .gcg-form-card {
            padding: 22px;
        }

        .gcg-form-actions {
            flex-direction: column;
        }

        .gcg-form-submit,
        .gcg-form-back {
            width: 100%;
        }
    }

    @media (max-width: 400px) {

        .gcg-form-card {
            padding: 18px;
        }
    }
</style>


<div class="gcg-form-page">

    <div class="gcg-form-header">

        <h1 class="gcg-form-title">

            {{ isset($report) ? 'Edit GCG' : 'Tambah GCG' }}

        </h1>

        <p class="gcg-form-subtitle">

            {{ isset($report)
                ? 'Perbarui informasi dan dokumen GCG.'
                : 'Tambahkan dokumen Good Corporate Governance baru ke dalam sistem.'
            }}

        </p>

    </div>


    <div class="gcg-form-card">

        @if($errors->any())

            <div class="gcg-form-errors">

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
                ? route('admin.gcg.update', $report->id)
                : route('admin.gcg.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            @if(isset($report))

                @method('PUT')

            @endif


            <!-- JUDUL -->

            <div class="gcg-form-group">

                <label class="gcg-form-label">

                    Judul GCG
                    <span>*</span>

                </label>

                <input
                    type="text"
                    name="title"
                    class="gcg-form-input"
                    value="{{ old('title', $report->title ?? '') }}"
                    placeholder="Contoh: Good Corporate Governance 2025"
                    required
                >

            </div>


            <!-- TAHUN -->

            <div class="gcg-form-group">

                <label class="gcg-form-label">

                    Tahun
                    <span>*</span>

                </label>

                <input
                    type="text"
                    name="year"
                    class="gcg-form-input"
                    value="{{ old('year', $report->year ?? '') }}"
                    placeholder="Contoh: 2025"
                    maxlength="4"
                    required
                >

                <small class="gcg-form-help">
                    Masukkan tahun dokumen GCG, contoh: 2025.
                </small>

            </div>


            <!-- PDF -->

            <div class="gcg-form-group">

                <label class="gcg-form-label">

                    File PDF

                    @if(!isset($report))
                        <span>*</span>
                    @endif

                </label>

                <input
                    type="file"
                    name="file"
                    class="gcg-form-file"
                    accept=".pdf,application/pdf"
                    {{ !isset($report) ? 'required' : '' }}
                >

                <small class="gcg-form-help">
                    Format file harus PDF dengan ukuran maksimal 10 MB.
                </small>


                @if(isset($report) && $report->file_url)

                    <div class="gcg-form-current-file">

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


            <!-- DESKRIPSI -->

            <div class="gcg-form-group">

                <label class="gcg-form-label">
                    Deskripsi
                </label>

                <textarea
                    name="description"
                    class="gcg-form-textarea"
                    rows="5"
                    placeholder="Masukkan deskripsi GCG..."
                >{{ old('description', $report->description ?? '') }}</textarea>

                <small class="gcg-form-help">
                    Deskripsi akan ditampilkan pada halaman Public GCG.
                </small>

            </div>


            <!-- BUTTON -->

            <div class="gcg-form-actions">

                <button
                    type="submit"
                    class="gcg-form-submit"
                >

                    <i class="fa-solid fa-save"></i>

                    {{ isset($report) ? 'Update' : 'Simpan' }}

                </button>


                <a
                    href="{{ route('admin.gcg') }}"
                    class="gcg-form-back"
                >

                    <i class="fa-solid fa-arrow-left"></i>

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection