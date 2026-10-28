@extends('admin.layouts.app')

@section('content')

<style>

.audit-page {
    padding: 10px 5px 40px;
}

.audit-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 25px;
}

.audit-label {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #d5a83a;
    margin-bottom: 6px;
}

.audit-header h1 {
    margin: 0;
    color: #063d2a;
    font-size: 30px;
    font-weight: 700;
}

.audit-header p {
    margin: 7px 0 0;
    color: #777;
    font-size: 14px;
}

.btn-back {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 11px 17px;
    background: #fff;
    color: #063d2a;
    border: 1px solid #dfe6e2;
    border-radius: 8px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    transition: .25s ease;
}

.btn-back:hover {
    background: #063d2a;
    color: #fff;
}

.audit-form-card {
    max-width: 900px;
    background: #fff;
    border: 1px solid #e8ecea;
    border-radius: 10px;
    box-shadow: 0 8px 30px rgba(0,0,0,.06);
    overflow: hidden;
}

.form-card-header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 22px 25px;
    background: #063d2a;
    color: #fff;
}

.form-icon {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(213,168,58,.15);
    color: #f2d47c;
    border: 1px solid rgba(213,168,58,.3);
    border-radius: 7px;
    font-size: 18px;
}

.form-card-header h3 {
    margin: 0 0 4px;
    font-size: 17px;
}

.form-card-header p {
    margin: 0;
    color: rgba(255,255,255,.65);
    font-size: 12px;
}

.form-body {
    padding: 30px 25px;
}

.form-group {
    margin-bottom: 22px;
}

.form-group:last-child {
    margin-bottom: 0;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #333;
    font-size: 13px;
    font-weight: 600;
}

.form-group label span {
    color: #c84c4c;
}

.input-wrapper {
    position: relative;
}

.input-wrapper > i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #087a4b;
    font-size: 14px;
    pointer-events: none;
}

.input-wrapper input {
    width: 100%;
    height: 48px;
    padding: 0 15px 0 44px;
    box-sizing: border-box;
    border: 1px solid #dfe6e2;
    border-radius: 7px;
    outline: none;
    background: #fff;
    color: #333;
    font-family: inherit;
    font-size: 13px;
    transition: .2s ease;
}

.input-wrapper input::placeholder {
    color: #aaa;
}

.input-wrapper input:focus {
    border-color: #087a4b;
    box-shadow: 0 0 0 3px rgba(8,122,75,.08);
}

.form-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 10px;
    padding: 18px 25px;
    background: #fafcfb;
    border-top: 1px solid #edf0ef;
}

.btn-cancel,
.btn-save {
    height: 42px;
    padding: 0 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border-radius: 7px;
    font-family: inherit;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: .25s ease;
}

.btn-cancel {
    background: #fff;
    color: #666;
    border: 1px solid #dfe3e1;
}

.btn-cancel:hover {
    background: #f3f4f4;
}

.btn-save {
    border: none;
    background: #087a4b;
    color: #fff;
}

.btn-save:hover {
    background: #063d2a;
    transform: translateY(-1px);
}

.alert-error {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 14px 16px;
    margin-bottom: 20px;
    background: #fff2f2;
    color: #b63f3f;
    border-left: 4px solid #c84c4c;
    border-radius: 6px;
    font-size: 13px;
}

.alert-error > i {
    margin-top: 2px;
}

.alert-error strong {
    display: block;
    margin-bottom: 5px;
}

.alert-error ul {
    margin: 0;
    padding-left: 18px;
}

.alert-error li {
    margin-bottom: 3px;
}

@media (max-width: 768px) {

    .audit-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .btn-back {
        width: 100%;
        justify-content: center;
    }

    .audit-form-card {
        width: 100%;
    }

    .form-body {
        padding: 22px 18px;
    }

    .form-footer {
        padding: 15px 18px;
    }

    .btn-cancel,
    .btn-save {
        flex: 1;
    }
}

</style>

<div class="audit-page">

    {{-- HEADER --}}
    <div class="audit-header">

        <div>
            <span class="audit-label">LAPORAN</span>

            {{-- Dinamis: Tambah / Edit --}}
            <h1>{{ $title }}</h1>

            <p>
                @if($method === 'PUT')
                    Perbarui data auditor yang tersimpan dalam sistem.
                @else
                    Tambahkan data auditor baru ke dalam sistem.
                @endif
            </p>
        </div>

        <a href="{{ route('admin.audit.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>

    </div>


    {{-- ERROR --}}
    @if ($errors->any())

        <div class="alert-error">

            <i class="fas fa-circle-exclamation"></i>

            <div>

                <strong>Periksa kembali data yang diisi.</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        </div>

    @endif


    {{-- FORM CARD --}}
    <div class="audit-form-card">

        <div class="form-card-header">

            <div class="form-icon">
                <i class="fas {{ $method === 'PUT' ? 'fa-pen-to-square' : 'fa-user-tie' }}"></i>
            </div>

            <div>

                <h3>
                    {{ $method === 'PUT' ? 'Edit Data Auditor' : 'Data Auditor' }}
                </h3>

                <p>
                    @if($method === 'PUT')
                        Perbarui informasi auditor dengan benar.
                    @else
                        Isi informasi auditor dengan lengkap.
                    @endif
                </p>

            </div>

        </div>


        {{-- FORM DINAMIS --}}
        <form action="{{ $action }}" method="POST">

            @csrf

            {{-- Kalau Edit, gunakan PUT --}}
            @if($method === 'PUT')
                @method('PUT')
            @endif


            <div class="form-body">

                {{-- NAMA AUDITOR --}}
                <div class="form-group">

                    <label for="nama_auditor">
                        Nama Auditor
                        <span>*</span>
                    </label>

                    <div class="input-wrapper">

                        <i class="fas fa-user-tie"></i>

                        <input
                            type="text"
                            id="nama_auditor"
                            name="nama_auditor"
                            value="{{ old('nama_auditor', $audit->nama_auditor) }}"
                            placeholder="Masukkan nama auditor"
                            required
                        >

                    </div>

                </div>


                {{-- TAHUN --}}
                <div class="form-group">

                    <label for="tahun">
                        Tahun
                        <span>*</span>
                    </label>

                    <div class="input-wrapper">

                        <i class="fas fa-calendar-days"></i>

                        <input
                            type="number"
                            id="tahun"
                            name="tahun"
                            value="{{ old('tahun', $audit->tahun) }}"
                            min="1900"
                            max="2100"
                            placeholder="Contoh: 2024"
                            required
                        >

                    </div>

                </div>


                {{-- PREDIKAT --}}
                <div class="form-group">

                    <label for="predikat">
                        Predikat
                        <span>*</span>
                    </label>

                    <div class="input-wrapper">

                        <i class="fas fa-award"></i>

                        <input
                            type="text"
                            id="predikat"
                            name="predikat"
                            value="{{ old('predikat', $audit->predikat) }}"
                            placeholder="Contoh: Wajar Tanpa Pengecualian (WTP)"
                            required
                        >

                    </div>

                </div>

            </div>


            {{-- FOOTER --}}
            <div class="form-footer">

                <a href="{{ route('admin.audit.index') }}" class="btn-cancel">
                    Batal
                </a>

                <button type="submit" class="btn-save">

                    <i class="fas {{ $method === 'PUT' ? 'fa-pen-to-square' : 'fa-save' }}"></i>

                    {{ $method === 'PUT' ? 'Update Auditor' : 'Simpan Auditor' }}

                </button>

            </div>

        </form>

    </div>

</div>

@endsection