@extends('admin.layouts.app')

@section('title', 'Tambah Pengguna')

@section('content')

<style>
    .user-form-page {
        padding: 10px 0 40px;
        font-family: 'Poppins', sans-serif;
    }

    .form-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 28px;
    }

    .form-header-icon {
        width: 54px;
        height: 54px;
        background: linear-gradient(135deg, #087a4b, #063d2a);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        box-shadow: 0 8px 20px rgba(8, 122, 75, .18);
    }

    .form-header h1 {
        margin: 0;
        font-size: 25px;
        font-weight: 700;
        color: #14382b;
    }

    .form-header p {
        margin: 4px 0 0;
        font-size: 13px;
        color: #89958f;
    }

    .form-layout {
        display: grid;
        grid-template-columns: 1fr 310px;
        gap: 22px;
        align-items: start;
    }

    .form-card {
        background: #fff;
        border: 1px solid #e7eeea;
        box-shadow: 0 8px 28px rgba(20, 55, 40, .055);
    }

    .form-card-header {
        padding: 19px 23px;
        border-bottom: 1px solid #edf1ef;
    }

    .form-card-header h3 {
        margin: 0;
        font-size: 15px;
        color: #183d2f;
        font-weight: 700;
    }

    .form-card-header p {
        margin: 4px 0 0;
        color: #96a09b;
        font-size: 11px;
    }

    .form-body {
        padding: 24px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #31483d;
        font-size: 12px;
        font-weight: 600;
    }

    .required {
        color: #c65a5a;
    }

    .input-wrapper {
        position: relative;
    }

    .input-wrapper i {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #9aa69f;
        font-size: 13px;
    }

    .form-control {
        width: 100%;
        height: 44px;
        box-sizing: border-box;
        border: 1px solid #dfe8e3;
        background: #fbfcfb;
        padding: 0 14px 0 40px;
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        color: #30463b;
        outline: none;
        transition: .2s;
    }

    .form-control:focus {
        border-color: #087a4b;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(8, 122, 75, .07);
    }

    .password-note {
        margin-top: 7px;
        font-size: 10px;
        color: #9aa49f;
    }

    .form-actions {
        display: flex;
        gap: 9px;
        padding-top: 8px;
    }

    .btn-save {
        height: 42px;
        padding: 0 20px;
        border: none;
        background: #087a4b;
        color: #fff;
        font-family: inherit;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: .2s;
    }

    .btn-save:hover {
        background: #063d2a;
        transform: translateY(-1px);
    }

    .btn-back {
        height: 42px;
        padding: 0 18px;
        background: #f4f7f5;
        color: #53625b;
        text-decoration: none;
        font-size: 12px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: .2s;
    }

    .btn-back:hover {
        background: #e9efeb;
    }

    /* INFO CARD */

    .info-card {
        background: linear-gradient(145deg, #063d2a, #087a4b);
        color: #fff;
        padding: 25px;
        box-shadow: 0 10px 28px rgba(6, 61, 42, .15);
    }

    .info-icon {
        width: 45px;
        height: 45px;
        background: rgba(255,255,255,.12);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        color: #d5a83a;
        font-size: 18px;
    }

    .info-card h3 {
        margin: 0 0 9px;
        font-size: 16px;
        font-weight: 700;
    }

    .info-card > p {
        color: rgba(255,255,255,.68);
        font-size: 11px;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .info-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .info-list li {
        display: flex;
        gap: 10px;
        margin-bottom: 13px;
        color: rgba(255,255,255,.82);
        font-size: 11px;
        line-height: 1.5;
    }

    .info-list i {
        color: #d5a83a;
        margin-top: 2px;
    }

    .error-box {
        background: #fff3f3;
        border-left: 3px solid #c65a5a;
        padding: 13px 16px;
        margin-bottom: 20px;
        color: #a34c4c;
        font-size: 11px;
    }

    .error-box ul {
        margin: 6px 0 0;
        padding-left: 17px;
    }

    @media(max-width: 900px) {
        .form-layout {
            grid-template-columns: 1fr;
        }
    }

    @media(max-width: 600px) {
        .form-header h1 {
            font-size: 21px;
        }

        .form-body {
            padding: 18px;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn-save,
        .btn-back {
            justify-content: center;
            width: 100%;
        }
    }
</style>


<div class="user-form-page">

    {{-- HEADER --}}
    <div class="form-header">

        <div class="form-header-icon">
            <i class="fa-solid fa-user-plus"></i>
        </div>

        <div>
            <h1>Tambah Pengguna</h1>
            <p>Tambahkan akun baru untuk mengakses sistem administrasi.</p>
        </div>

    </div>


    <div class="form-layout">

        {{-- FORM --}}
        <div class="form-card">

            <div class="form-card-header">
                <h3>Informasi Pengguna</h3>
                <p>Lengkapi informasi akun pengguna di bawah ini.</p>
            </div>

            <div class="form-body">

                @if($errors->any())

                    <div class="error-box">

                        <strong>Terjadi kesalahan:</strong>

                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>

                @endif


                <form action="{{ route('admin.users.store') }}" method="POST">

                    @csrf

                    {{-- NAMA --}}
                    <div class="form-group">

                        <label>
                            Nama Lengkap
                            <span class="required">*</span>
                        </label>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-user"></i>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name') }}"
                                placeholder="Masukkan nama lengkap"
                                required
                            >

                        </div>

                    </div>


                    {{-- EMAIL --}}
                    <div class="form-group">

                        <label>
                            Email
                            <span class="required">*</span>
                        </label>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-envelope"></i>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email') }}"
                                placeholder="contoh@email.com"
                                required
                            >

                        </div>

                    </div>


                    {{-- PASSWORD --}}
                    <div class="form-group">

                        <label>
                            Password
                            <span class="required">*</span>
                        </label>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-lock"></i>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password"
                                required
                            >

                        </div>

                        <div class="password-note">
                            Password minimal 6 karakter.
                        </div>

                    </div>


                    {{-- KONFIRMASI --}}
                    <div class="form-group">

                        <label>
                            Konfirmasi Password
                            <span class="required">*</span>
                        </label>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-shield-halved"></i>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Ulangi password"
                                required
                            >

                        </div>

                    </div>


                    {{-- BUTTON --}}
                    <div class="form-actions">

                        <button type="submit" class="btn-save">
                            <i class="fa-solid fa-paper-plane"></i>
                            Simpan Pengguna
                        </button>

                        <a href="{{ route('admin.users.index') }}"
                           class="btn-back">
                            <i class="fa-solid fa-arrow-left"></i>
                            Kembali
                        </a>

                    </div>

                </form>

            </div>

        </div>


        {{-- INFO --}}
        <div class="info-card">

            <div class="info-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>

            <h3>Akses Sistem</h3>

            <p>
                Akun pengguna digunakan untuk mengakses
                halaman administrasi PT. Jamkrida NTB Syariah.
            </p>

            <ul class="info-list">

                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Pastikan nama pengguna ditulis dengan benar.
                </li>

                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Gunakan email yang aktif dan valid.
                </li>

                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Gunakan password yang aman.
                </li>

                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Jangan membagikan password kepada orang lain.
                </li>

            </ul>

        </div>

    </div>

</div>

@endsection