
@extends('admin.layouts.app')

@section('title', 'Tambah Program Digitalisasi')
@section('page', 'Digitalisasi')

@section('content')

<style>
    /* =====================================================
       1. PENGATURAN DASAR HALAMAN
    ===================================================== */
    .digitalisasi-form {
        --green: #087a4b;
        --dark: #063d2a;
        --gold: #d5a83a;

        color: #26392e;
        padding-bottom: 30px;
    }

    .digitalisasi-form * {
        box-sizing: border-box;
    }

    /* =====================================================
       2. JUDUL DAN KETERANGAN HALAMAN
    ===================================================== */
    .digitalisasi-form .form-heading {
        display: flex;
        align-items: center;
        gap: 13px;
        margin-bottom: 24px;
    }

    .digitalisasi-form .heading-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 46px;
        height: 46px;
        flex-shrink: 0;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--green), var(--dark));
        color: #fff;
        font-size: 20px;
    }

    .digitalisasi-form h2 {
        margin: 0 0 6px;
        color: var(--dark);
        font-size: 23px;
        font-weight: 800;
    }

    .digitalisasi-form .subtitle {
        margin: 0;
        color: #7a887e;
        font-size: 12px;
        line-height: 1.7;
    }

    /* =====================================================
       3. KARTU FORMULIR
    ===================================================== */
    .digitalisasi-form .form-card {
        overflow: hidden;
        border: 1px solid #e4ece6;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 5px 20px rgba(6, 61, 42, .05);
    }

    .digitalisasi-form .card-header {
        padding: 18px 22px;
        border-bottom: 1px solid #eaf0ec;
        background: linear-gradient(120deg, #fff, #f5faf6);
    }

    .digitalisasi-form .card-header h3 {
        margin: 0;
        color: var(--dark);
        font-size: 15px;
        font-weight: 800;
    }

    .digitalisasi-form .card-body {
        padding: 24px;
    }

    /* =====================================================
       4. SUSUNAN FIELD FORMULIR
    ===================================================== */
    .digitalisasi-form .form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
    }

    .digitalisasi-form .form-group {
        min-width: 0;
    }

    .digitalisasi-form .full {
        grid-column: 1 / -1;
    }

    .digitalisasi-form label {
        display: block;
        margin-bottom: 8px;
        color: #34483b;
        font-size: 12px;
        font-weight: 700;
    }

    .digitalisasi-form .required {
        color: #dc3545;
    }

    .digitalisasi-form .form-control {
        display: block;
        width: 100%;
        min-height: 43px;
        padding: 10px 12px;
        border: 1px solid #dce5df;
        border-radius: 7px;
        outline: none;
        background: #fff;
        color: #26392e;
        font-family: inherit;
        font-size: 13px;
        transition: border-color .2s, box-shadow .2s;
    }

    .digitalisasi-form textarea.form-control {
        min-height: 140px;
        resize: vertical;
        line-height: 1.7;
    }

    .digitalisasi-form .form-control:focus {
        border-color: var(--green);
        box-shadow: 0 0 0 3px rgba(8, 122, 75, .09);
    }

    .digitalisasi-form .help {
        display: block;
        margin-top: 6px;
        color: #829087;
        font-size: 11px;
        line-height: 1.6;
    }

    /* =====================================================
       5. PESAN VALIDASI
    ===================================================== */
    .digitalisasi-form .alert {
        padding: 13px 16px;
        margin-bottom: 20px;
        border: 1px solid #f1b8be;
        border-radius: 8px;
        background: #fff1f2;
        color: #a7212e;
        font-size: 12px;
    }

    .digitalisasi-form .alert ul {
        margin: 8px 0 0 18px;
        padding: 0;
        line-height: 1.8;
    }

    .digitalisasi-form .error-message {
        margin-top: 6px;
        color: #c62836;
        font-size: 11px;
    }

    /* =====================================================
       6. TOMBOL SIMPAN DAN KEMBALI
    ===================================================== */
    .digitalisasi-form .form-footer {
        display: flex;
        justify-content: flex-end;
        flex-wrap: wrap;
        gap: 10px;
        padding-top: 20px;
        margin-top: 24px;
        border-top: 1px solid #edf1ee;
    }

    .digitalisasi-form .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 40px;
        padding: 10px 16px;
        border: none;
        border-radius: 7px;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: transform .2s, background .2s;
    }

    .digitalisasi-form .btn:hover {
        transform: translateY(-1px);
    }

    .digitalisasi-form .btn-primary {
        background: linear-gradient(135deg, var(--green), var(--dark));
        color: #fff;
    }

    .digitalisasi-form .btn-primary:hover {
        background: var(--dark);
    }

    .digitalisasi-form .btn-secondary {
        background: #edf3ef;
        color: var(--dark);
    }

    .digitalisasi-form .btn-secondary:hover {
        background: #e0eae3;
    }

    /* =====================================================
       7. TAMPILAN RESPONSIF UNTUK HP
    ===================================================== */
    @media (max-width: 650px) {
        .digitalisasi-form .form-heading {
            align-items: flex-start;
        }

        .digitalisasi-form h2 {
            font-size: 20px;
        }

        .digitalisasi-form .form-grid {
            grid-template-columns: 1fr;
        }

        .digitalisasi-form .full {
            grid-column: auto;
        }

        .digitalisasi-form .card-body {
            padding: 17px;
        }

        .digitalisasi-form .form-footer {
            flex-direction: column-reverse;
        }

        .digitalisasi-form .form-footer .btn {
            width: 100%;
        }
    }
</style>

<div class="digitalisasi-form">

    {{-- ==================================================
         BAGIAN A: JUDUL DAN KETERANGAN HALAMAN
    ================================================== --}}
    <div class="form-heading">
        <div class="heading-icon">
            <i class="fas fa-laptop-code"></i>
        </div>

        <div>
            <h2>Tambah Program Digitalisasi</h2>

            <p class="subtitle">
                Tambahkan informasi program digitalisasi yang akan
                ditampilkan dan dikelola melalui dashboard admin.
            </p>
        </div>
    </div>

    {{-- ==================================================
         BAGIAN B: MENAMPILKAN PESAN VALIDASI
    ================================================== --}}
    @if ($errors->any())
        <div class="alert">
            <strong>
                <i class="fas fa-triangle-exclamation"></i>
                Periksa kembali formulir:
            </strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- ==================================================
         BAGIAN C: FORM TAMBAH PROGRAM
    ================================================== --}}
    <div class="form-card">

        <div class="card-header">
            <h3>
                <i class="fas fa-pen-to-square"
                   style="color:#087a4b; margin-right:8px;"></i>
                Informasi Program
            </h3>
        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.digitalisasi.store') }}"
                method="POST"
            >
                @csrf

                <div class="form-grid">

                    {{-- FIELD 1: NAMA PROGRAM --}}
                    <div class="form-group full">
                        <label for="judul">
                            Nama Program <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="judul"
                            id="judul"
                            class="form-control"
                            value="{{ old('judul') }}"
                            placeholder="Contoh: Digitalisasi Layanan Penjaminan"
                            maxlength="255"
                            required
                        >

                        <small class="help">
                            Masukkan nama program digitalisasi yang jelas
                            dan mudah dipahami.
                        </small>

                        @error('judul')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- FIELD 2: DESKRIPSI PROGRAM --}}
                    <div class="form-group full">
                        <label for="deskripsi">
                            Deskripsi Program
                        </label>

                        <textarea
                            name="deskripsi"
                            id="deskripsi"
                            class="form-control"
                            placeholder="Jelaskan tujuan, manfaat, atau informasi program..."
                        >{{ old('deskripsi') }}</textarea>

                        <small class="help">
                            Jelaskan informasi program. Field ini opsional,
                            sehingga boleh dikosongkan.
                        </small>

                        @error('deskripsi')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- FIELD 3: TAHAPAN PROGRAM --}}
                    <div class="form-group">
                        <label for="tahapan">
                            Tahapan Program <span class="required">*</span>
                        </label>

                        <select
                            name="tahapan"
                            id="tahapan"
                            class="form-control"
                            required
                        >
                            <option value="">-- Pilih Tahapan --</option>

                            <option
                                value="Sudah Berjalan"
                                {{ old('tahapan') === 'Sudah Berjalan' ? 'selected' : '' }}
                            >
                                Sudah Berjalan
                            </option>

                            <option
                                value="Sedang Dalam Proses"
                                {{ old('tahapan') === 'Sedang Dalam Proses' ? 'selected' : '' }}
                            >
                                Sedang Dalam Proses
                            </option>

                            <option
                                value="Direncanakan"
                                {{ old('tahapan') === 'Direncanakan' ? 'selected' : '' }}
                            >
                                Direncanakan
                            </option>
                        </select>

                        <small class="help">
                            Pilih status tahapan terkini dari program.
                        </small>

                        @error('tahapan')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- FIELD 4: TAHUN PROGRAM --}}
                    <div class="form-group">
                        <label for="tahun">
                            Tahun Program
                        </label>

                        <input
                            type="text"
                            name="tahun"
                            id="tahun"
                            class="form-control"
                            value="{{ old('tahun') }}"
                            placeholder="Contoh: 2026"
                            maxlength="20"
                        >

                        <small class="help">
                            Isi tahun pelaksanaan program jika diperlukan.
                            Field ini opsional.
                        </small>

                        @error('tahun')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                {{-- ==========================================
                     BAGIAN D: TOMBOL AKSI FORMULIR
                ========================================== --}}
                <div class="form-footer">

                    <a
                        href="{{ route('admin.digitalisasi.index') }}"
                        class="btn btn-secondary"
                    >
                        <i class="fas fa-arrow-left"></i>
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        <i class="fas fa-floppy-disk"></i>
                        Simpan Program
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection