@extends('admin.layouts.app')

@section('title', isset($daftarAgen) ? 'Edit Agen' : 'Tambah Agen')

@section('content')

<style>
    /* =========================================================
       FORM DAFTAR AGEN - ADMIN
    ========================================================= */

    .agen-form-page {
        padding: 30px;
        max-width: 850px;
        margin: 0 auto;
    }

    /* =========================================================
       TOP
    ========================================================= */

    .form-top {
        margin-bottom: 25px;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        color: #087a4b;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 15px;
        transition: .2s ease;
    }

    .back-link:hover {
        color: #063d2a;
        transform: translateX(-2px);
    }

    .form-heading {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .form-heading-icon {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(
            135deg,
            #087a4b,
            #063d2a
        );
        color: #fff;
        border-radius: 10px;
        font-size: 20px;
        box-shadow: 0 8px 20px rgba(8, 122, 75, .18);
    }

    .form-heading h1 {
        margin: 0;
        color: #063d2a;
        font-size: 25px;
        font-weight: 700;
    }

    .form-heading p {
        margin: 5px 0 0;
        color: #777;
        font-size: 14px;
    }

    /* =========================================================
       FORM CARD
    ========================================================= */

    .agen-form-card {
        background: #fff;
        border: 1px solid #edf0ed;
        box-shadow: 0 8px 30px rgba(0, 0, 0, .06);
        border-radius: 10px;
        overflow: hidden;
    }

    .form-card-header {
        padding: 18px 25px;
        background: #f8fbf9;
        border-bottom: 1px solid #edf0ed;
    }

    .form-card-header strong {
        display: flex;
        align-items: center;
        gap: 9px;
        color: #063d2a;
        font-size: 14px;
    }

    .form-card-header i {
        color: #d5a83a;
    }

    .form-card-body {
        padding: 28px 25px;
    }

    /* =========================================================
       ERROR
    ========================================================= */

    .error-alert {
        padding: 15px 17px;
        margin-bottom: 22px;
        background: #fff0ef;
        border-left: 4px solid #c0392b;
        color: #a93226;
        font-size: 14px;
    }

    .error-alert strong {
        display: block;
        margin-bottom: 7px;
    }

    .error-alert ul {
        margin: 0;
        padding-left: 20px;
    }

    .error-alert li {
        margin-bottom: 3px;
    }

    /* =========================================================
       FORM GROUP
    ========================================================= */

    .form-group {
        margin-bottom: 22px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-size: 14px;
        font-weight: 600;
    }

    .required {
        color: #c0392b;
        margin-left: 2px;
    }

    .input-wrapper {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #087a4b;
        font-size: 14px;
        pointer-events: none;
    }

    .form-input {
        width: 100%;
        height: 48px;
        padding: 0 15px 0 42px;
        box-sizing: border-box;
        border: 1px solid #dfe5e1;
        background: #fff;
        color: #333;
        font-family: inherit;
        font-size: 14px;
        outline: none;
        border-radius: 7px;
        transition: all .2s ease;
    }

    .form-input::placeholder {
        color: #aaa;
    }

    .form-input:focus {
        border-color: #087a4b;
        box-shadow: 0 0 0 3px rgba(8, 122, 75, .08);
    }

    .form-help {
        display: block;
        margin-top: 7px;
        color: #8a8a8a;
        font-size: 12px;
    }

    /* =========================================================
       BUTTONS
    ========================================================= */

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        padding-top: 8px;
        border-top: 1px solid #edf0ed;
    }

    .btn-form {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 43px;
        padding: 0 18px;
        border: none;
        border-radius: 7px;
        text-decoration: none;
        font-family: inherit;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all .2s ease;
    }

    .btn-cancel {
        background: #f0f1f1;
        color: #555;
    }

    .btn-cancel:hover {
        background: #e4e6e5;
        color: #333;
    }

    .btn-save {
        background: linear-gradient(
            135deg,
            #087a4b,
            #063d2a
        );
        color: #fff;
        box-shadow: 0 6px 16px rgba(8, 122, 75, .16);
    }

    .btn-save:hover {
        color: #fff;
        transform: translateY(-1px);
        box-shadow: 0 8px 20px rgba(8, 122, 75, .23);
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 768px) {

        .agen-form-page {
            padding: 18px;
        }

        .form-card-body {
            padding: 22px 18px;
        }

        .form-card-header {
            padding: 16px 18px;
        }
    }

    @media (max-width: 520px) {

        .form-heading-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
        }

        .form-heading h1 {
            font-size: 21px;
        }

        .form-heading p {
            font-size: 13px;
        }

        .form-actions {
            flex-direction: column-reverse;
        }

        .btn-form {
            width: 100%;
        }
    }
</style>


<div class="agen-form-page">

    {{-- TOP --}}
    <div class="form-top">

        <a
            href="{{ route('admin.daftar.agen') }}"
            class="back-link"
        >
            <i class="fas fa-arrow-left"></i>
            Kembali ke Daftar Agen
        </a>

        <div class="form-heading">

            <div class="form-heading-icon">

                <i class="fas fa-user-tie"></i>

            </div>

            <div>

                <h1>
                    {{ isset($daftarAgen)
                        ? 'Edit Agen'
                        : 'Tambah Agen' }}
                </h1>

                <p>
                    {{ isset($daftarAgen)
                        ? 'Perbarui informasi nama agen.'
                        : 'Tambahkan nama agen baru ke dalam daftar.' }}
                </p>

            </div>

        </div>

    </div>


    {{-- CARD --}}
    <div class="agen-form-card">

        <div class="form-card-header">

            <strong>

                <i class="fas fa-id-card"></i>

                Informasi Agen

            </strong>

        </div>


        <div class="form-card-body">

            {{-- VALIDATION ERROR --}}
            @if($errors->any())

                <div class="error-alert">

                    <strong>
                        <i class="fas fa-circle-exclamation"></i>
                        Terjadi kesalahan
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
                method="POST"
                action="{{ isset($daftarAgen)
                    ? route('admin.daftar.agen.update', $daftarAgen)
                    : route('admin.daftar.agen.store') }}"
            >

                @csrf

                @if(isset($daftarAgen))

                    @method('PUT')

                @endif


                {{-- NAMA AGEN --}}
                <div class="form-group">

                    <label
                        for="nama"
                        class="form-label"
                    >
                        Nama Agen
                        <span class="required">*</span>
                    </label>

                    <div class="input-wrapper">

                        <i class="fas fa-user input-icon"></i>

                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            class="form-input"
                            value="{{ old('nama', $daftarAgen->nama ?? '') }}"
                            placeholder="Masukkan nama agen"
                            maxlength="255"
                            required
                            autofocus
                        >

                    </div>

                    <span class="form-help">
                        Masukkan nama agen yang akan ditampilkan pada halaman Daftar Agen.
                    </span>

                </div>


                {{-- ACTION --}}
                <div class="form-actions">

                    <a
                        href="{{ route('admin.daftar.agen') }}"
                        class="btn-form btn-cancel"
                    >
                        <i class="fas fa-arrow-left"></i>
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn-form btn-save"
                    >

                        <i class="fas fa-save"></i>

                        {{ isset($daftarAgen)
                            ? 'Simpan Perubahan'
                            : 'Simpan Agen' }}

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection