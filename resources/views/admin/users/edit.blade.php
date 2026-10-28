@extends('admin.layouts.app')

@section('title', 'Edit Pengguna')

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
        display: flex;
        justify-content: space-between;
        align-items: center;
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

    .edit-badge {
        padding: 6px 10px;
        background: #eef8f3;
        color: #087a4b;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: .5px;
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
    }

    /* PROFILE SIDE */

    .profile-card {
        background: #fff;
        border: 1px solid #e7eeea;
        box-shadow: 0 8px 28px rgba(20, 55, 40, .055);
        padding: 25px;
        text-align: center;
    }

    .profile-avatar {
        width: 72px;
        height: 72px;
        margin: 0 auto 15px;
        background: linear-gradient(135deg, #087a4b, #d5a83a);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: 700;
    }

    .profile-card h3 {
        margin: 0;
        color: #183d2f;
        font-size: 16px;
    }

    .profile-card p {
        margin: 5px 0 16px;
        color: #96a09b;
        font-size: 11px;
    }

    .profile-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        background: #edf8f2;
        color: #087a4b;
        font-size: 9px;
        font-weight: 700;
    }

    .profile-status span {
        width: 6px;
        height: 6px;
        background: #18a766;
        border-radius: 50%;
    }

    .security-box {
        margin-top: 18px;
        padding-top: 18px;
        border-top: 1px solid #edf1ef;
        text-align: left;
    }

    .security-box-title {
        font-size: 10px;
        font-weight: 700;
        color: #53625b;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .security-box p {
        font-size: 10px;
        line-height: 1.6;
        color: #9aa49f;
        margin: 0;
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
            <i class="fa-solid fa-user-pen"></i>
        </div>

        <div>
            <h1>Edit Pengguna</h1>
            <p>Perbarui informasi akun pengguna sistem.</p>
        </div>

    </div>


    <div class="form-layout">

        {{-- FORM --}}
        <div class="form-card">

            <div class="form-card-header">

                <div>
                    <h3>Informasi Pengguna</h3>
                    <p>Perbarui data akun yang dipilih.</p>
                </div>

                <span class="edit-badge">
                    EDIT USER
                </span>

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


                <form action="{{ route('admin.users.update', $user) }}" method="POST">

                    @csrf
                    @method('PUT')


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
                                value="{{ old('name', $user->name) }}"
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
                                value="{{ old('email', $user->email) }}"
                                required
                            >

                        </div>

                    </div>


                    {{-- PASSWORD --}}
                    <div class="form-group">

                        <label>Password Baru</label>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-lock"></i>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Kosongkan jika tidak ingin mengubah"
                            >

                        </div>

                        <div class="password-note">
                            Biarkan kosong jika password tidak ingin diubah.
                        </div>

                    </div>


                    {{-- KONFIRMASI --}}
                    <div class="form-group">

                        <label>Konfirmasi Password Baru</label>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-shield-halved"></i>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Ulangi password baru"
                            >

                        </div>

                    </div>


                    {{-- BUTTON --}}
                    <div class="form-actions">

                        <button type="submit" class="btn-save">
                            <i class="fa-solid fa-floppy-disk"></i>
                            Simpan Perubahan
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


        {{-- PROFILE --}}
        <div class="profile-card">

            <div class="profile-avatar">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>

            <h3>{{ $user->name }}</h3>

            <p>{{ $user->email }}</p>

            <span class="profile-status">
                <span></span>
                AKUN AKTIF
            </span>

            <div class="security-box">

                <div class="security-box-title">
                    <i class="fa-solid fa-shield-halved"></i>
                    Keamanan Akun
                </div>

                <p>
                    Pastikan informasi akun selalu diperbarui
                    dan gunakan password yang kuat untuk menjaga
                    keamanan akses sistem.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection