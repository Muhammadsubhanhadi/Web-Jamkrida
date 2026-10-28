@extends('admin.layouts.app')

@section('title', isset($keuanganBerkelanjutan) ? 'Edit Keuangan Berkelanjutan' : 'Tambah Keuangan Berkelanjutan')

@section('content')

<style>
    .form-wrapper {
        padding: 30px;
        max-width: 850px;
        margin: auto;
    }

    .form-card {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0,0,0,.07);
    }

    .form-header {
        margin-bottom: 25px;
    }

    .form-header h1 {
        margin: 0;
        color: #087a4b;
        font-size: 25px;
    }

    .form-header p {
        color: #777;
        margin-top: 7px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #ddd;
        border-radius: 7px;
        outline: none;
        font-size: 14px;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #087a4b;
        box-shadow: 0 0 0 3px rgba(8,122,75,.08);
    }

    .file-info {
        margin-top: 10px;
        padding: 12px;
        background: #f6faf8;
        border-left: 3px solid #087a4b;
        font-size: 13px;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 25px;
    }

    .btn {
        border: none;
        padding: 11px 18px;
        border-radius: 7px;
        cursor: pointer;
        text-decoration: none;
        font-weight: 600;
    }

    .btn-back {
        background: #eee;
        color: #555;
    }

    .btn-save {
        background: #087a4b;
        color: #fff;
    }

    .btn-save:hover {
        background: #063d2a;
    }

    .error-box {
        background: #fdecec;
        color: #b52b27;
        padding: 14px;
        border-radius: 7px;
        margin-bottom: 20px;
    }
</style>

<div class="form-wrapper">

    <div class="form-card">

        <div class="form-header">

            <h1>
                {{ isset($keuanganBerkelanjutan)
                    ? 'Edit Keuangan Berkelanjutan'
                    : 'Tambah Keuangan Berkelanjutan' }}
            </h1>

            <p>
                Kelola dokumen Keuangan Berkelanjutan perusahaan.
            </p>

        </div>

        @if($errors->any())

            <div class="error-box">

                <strong>Terjadi kesalahan:</strong>

                <ul style="margin-bottom:0;">

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif

        <form method="POST"
              action="{{ isset($keuanganBerkelanjutan)
                    ? route('admin.keuangan.berkelanjutan.update', $keuanganBerkelanjutan)
                    : route('admin.keuangan.berkelanjutan.store') }}"
              enctype="multipart/form-data">

            @csrf

            @if(isset($keuanganBerkelanjutan))
                @method('PUT')
            @endif

            <div class="form-group">

                <label for="tahun">
                    Tahun
                </label>

                <input type="number"
                       id="tahun"
                       name="tahun"
                       class="form-control"
                       value="{{ old('tahun', $keuanganBerkelanjutan->tahun ?? '') }}"
                       min="1900"
                       max="2100"
                       required>

            </div>

            <div class="form-group">

                <label for="file">
                    Dokumen PDF
                </label>

                <input type="file"
                       id="file"
                       name="file"
                       class="form-control"
                       accept=".pdf"
                       {{ isset($keuanganBerkelanjutan) ? '' : 'required' }}>

                <small style="display:block;margin-top:7px;color:#888;">
                    Format PDF, maksimal 10 MB.
                </small>

                @if(isset($keuanganBerkelanjutan) && $keuanganBerkelanjutan->file)

                    <div class="file-info">

                        <i class="fas fa-file-pdf"
                           style="color:#c0392b;"></i>

                        Dokumen saat ini tersedia.

                        <a href="{{ asset('storage/' . $keuanganBerkelanjutan->file) }}"
                           target="_blank">
                            Lihat dokumen
                        </a>

                    </div>

                @endif

            </div>

            <div class="form-actions">

                <a href="{{ route('admin.keuangan.berkelanjutan') }}"
                   class="btn btn-back">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-save">

                    <i class="fas fa-save"></i>

                    {{ isset($keuanganBerkelanjutan)
                        ? 'Simpan Perubahan'
                        : 'Simpan Data' }}

                </button>

            </div>

        </form>

    </div>

</div>

@endsection