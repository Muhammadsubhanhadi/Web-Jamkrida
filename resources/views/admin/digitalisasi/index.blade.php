
@extends('admin.layouts.app')

@section('title', 'Kelola Gambar Roadmap')
@section('page', 'Digitalisasi')

@section('content')

<style>
    /* =====================================================
       1. DASAR HALAMAN ADMIN
    ===================================================== */
    .roadmap-admin {
        --green: #087a4b;
        --dark: #063d2a;
        --gold: #d5a83a;
        color: #293b30;
    }

    .roadmap-admin * {
        box-sizing: border-box;
    }

    .roadmap-admin .page-heading {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 24px;
    }

    .roadmap-admin .heading-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--green), var(--dark));
        color: white;
        font-size: 20px;
    }

    .roadmap-admin h2 {
        margin: 0 0 6px;
        color: var(--dark);
        font-size: 23px;
        font-weight: 800;
    }

    .roadmap-admin .subtitle {
        margin: 0;
        color: #7b897f;
        font-size: 12px;
        line-height: 1.8;
    }

    /* =====================================================
       2. NOTIFIKASI
    ===================================================== */
    .roadmap-admin .alert {
        margin-bottom: 20px;
        padding: 13px 16px;
        border-radius: 8px;
        font-size: 12px;
        line-height: 1.8;
    }

    .roadmap-admin .alert-success {
        border: 1px solid #b8e2c6;
        background: #eefaf1;
        color: #176b36;
    }

    .roadmap-admin .alert-danger {
        border: 1px solid #f0bdc2;
        background: #fff1f2;
        color: #a7212e;
    }

    /* =====================================================
       3. KARTU PENGELOLAAN GAMBAR
    ===================================================== */
    .roadmap-admin .card {
        overflow: hidden;
        border: 1px solid #e4ece6;
        border-radius: 12px;
        background: white;
        box-shadow: 0 5px 20px rgba(6,61,42,.05);
    }

    .roadmap-admin .card-header {
        padding: 18px 22px;
        border-bottom: 1px solid #e8eee9;
        background: linear-gradient(120deg, white, #f5faf6);
    }

    .roadmap-admin .card-header h3 {
        margin: 0 0 5px;
        color: var(--dark);
        font-size: 15px;
        font-weight: 800;
    }

    .roadmap-admin .card-header p {
        margin: 0;
        color: #7b897f;
        font-size: 12px;
        line-height: 1.8;
    }

    .roadmap-admin .card-body {
        padding: 24px;
    }

    /* =====================================================
       4. PRATINJAU GAMBAR
    ===================================================== */
    .roadmap-admin .preview-label {
        display: block;
        margin-bottom: 10px;
        color: #34483b;
        font-size: 12px;
        font-weight: 800;
    }

    .roadmap-admin .preview-box {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 180px;
        margin-bottom: 24px;
        padding: 14px;
        border: 1px solid #e2eae4;
        border-radius: 9px;
        background: #f8fbf9;
    }

    .roadmap-admin .preview-box img {
        display: block;
        width: 100%;
        height: auto;
        max-height: 560px;
        object-fit: contain;
    }

    .roadmap-admin .empty-preview {
        padding: 35px 15px;
        color: #829087;
        text-align: center;
    }

    .roadmap-admin .empty-preview i {
        display: block;
        margin-bottom: 12px;
        color: #9eb5a4;
        font-size: 38px;
    }

    .roadmap-admin .empty-preview p {
        margin: 0;
        font-size: 12px;
    }

    /* =====================================================
       5. FORM UNGGAH GAMBAR
    ===================================================== */
    .roadmap-admin .form-group {
        margin-bottom: 18px;
    }

    .roadmap-admin label {
        display: block;
        margin-bottom: 8px;
        color: #34483b;
        font-size: 12px;
        font-weight: 800;
    }

    .roadmap-admin .form-control {
        display: block;
        width: 100%;
        min-height: 43px;
        padding: 10px 12px;
        border: 1px solid #dce5df;
        border-radius: 7px;
        background: #fff;
        color: #293b30;
        font-family: inherit;
        font-size: 12px;
    }

    .roadmap-admin .form-control:focus {
        border-color: var(--green);
        outline: 2px solid rgba(8,122,75,.1);
    }

    .roadmap-admin .help {
        display: block;
        margin-top: 7px;
        color: #829087;
        font-size: 11px;
        line-height: 1.8;
    }

    .roadmap-admin .error {
        margin-top: 6px;
        color: #c62836;
        font-size: 11px;
    }

    /* =====================================================
       6. TOMBOL SIMPAN
    ===================================================== */
    .roadmap-admin .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        padding-top: 20px;
        border-top: 1px solid #edf1ee;
    }

    .roadmap-admin .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 11px 17px;
        border: 0;
        border-radius: 7px;
        font-family: inherit;
        font-size: 12px;
        font-weight: 800;
        text-decoration: none;
        cursor: pointer;
        transition: .2s ease;
    }

    .roadmap-admin .btn-primary {
        background: linear-gradient(135deg, var(--green), var(--dark));
        color: white;
    }

    .roadmap-admin .btn-primary:hover {
        transform: translateY(-1px);
        background: var(--dark);
    }

    .roadmap-admin .btn-secondary {
        background: #edf3ef;
        color: var(--dark);
    }

    /* =====================================================
       7. RESPONSIF
    ===================================================== */
    @media (max-width: 600px) {
        .roadmap-admin h2 {
            font-size: 20px;
        }

        .roadmap-admin .card-body {
            padding: 16px;
        }

        .roadmap-admin .form-actions {
            flex-direction: column;
        }

        .roadmap-admin .form-actions .btn {
            width: 100%;
        }
    }
</style>

<div class="roadmap-admin">

    {{-- BAGIAN A: JUDUL HALAMAN --}}
    <div class="page-heading">
        <div class="heading-icon">
            <i class="fas fa-image"></i>
        </div>

        <div>
            <h2>Kelola Gambar Roadmap</h2>
            <p class="subtitle">
                Perbarui gambar Transformasi Digital yang ditampilkan
                pada halaman publik perusahaan.
            </p>
        </div>
    </div>

    {{-- BAGIAN B: PESAN BERHASIL DAN ERROR --}}
    @if (session('success'))
        <div class="alert alert-success">
            <i class="fas fa-circle-check"></i>
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            <i class="fas fa-circle-exclamation"></i>
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Gambar belum dapat disimpan:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- BAGIAN C: KARTU GAMBAR ROADMAP --}}
    <div class="card">

        <div class="card-header">
            <h3>
                <i class="fas fa-panorama"
                   style="color:#087a4b;margin-right:8px;"></i>
                Gambar Transformasi Digital
            </h3>

            <p>
                Bagian ini hanya mengubah gambar. Judul, deskripsi,
                dan tahapan pada halaman publik tetap.
            </p>
        </div>

        <div class="card-body">

            {{-- PRATINJAU GAMBAR YANG SEDANG DIGUNAKAN --}}
            <label class="preview-label">
                Gambar Roadmap Saat Ini
            </label>

            <div class="preview-box">
                @if (isset($jumbotron) && $jumbotron->gambar)
                    <img
                        src="{{ \Illuminate\Support\Str::startsWith($jumbotron->gambar, ['http://', 'https://']) ? $jumbotron->gambar : asset('storage/' . ltrim(preg_replace('#^storage/#', '', $jumbotron->gambar), '/')) }}"
                        alt="Roadmap Transformasi Digital"
                    >
                @else
                    <div class="empty-preview">
                        <i class="fas fa-image"></i>
                        <p>Belum ada gambar roadmap yang diunggah.</p>
                    </div>
                @endif
            </div>

            {{-- FORM KHUSUS MENGGANTI GAMBAR --}}
            <form
                action="{{ route('admin.digitalisasi.jumbotron.save') }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf

                <div class="form-group">
                    <label for="gambar">
                        Pilih Gambar Roadmap Baru
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        id="gambar"
                        class="form-control"
                        accept=".jpg,.jpeg,.png,.webp"
                        required
                    >

                    <small class="help">
                        Format yang diizinkan: JPG, JPEG, PNG, atau WEBP.
                        Maksimal ukuran file 10 MB.
                        Gambar akan menyesuaikan lebar halaman publik
                        tanpa dipotong.
                    </small>

                    @error('gambar')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                {{-- PRATINJAU FILE BARU SEBELUM DIUNGGAH --}}
                <div id="newPreviewContainer"
                     class="preview-box"
                     style="display:none;">
                    <img id="newPreviewImage" src="" alt="Pratinjau gambar baru">
                </div>

                {{-- TOMBOL SIMPAN --}}
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-cloud-arrow-up"></i>
                        Simpan Gambar Roadmap
                    </button>
                </div>
            </form>

        </div>
    </div>

</div>

{{-- BAGIAN D: PRATINJAU GAMBAR SEBELUM DIUNGGAH --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('gambar');
    const container = document.getElementById('newPreviewContainer');
    const preview = document.getElementById('newPreviewImage');

    if (!input || !container || !preview) {
        return;
    }

    input.addEventListener('change', function () {
        const file = this.files && this.files[0];

        if (!file) {
            preview.removeAttribute('src');
            container.style.display = 'none';
            return;
        }

        if (!file.type.startsWith('image/')) {
            alert('Silakan pilih file gambar yang valid.');
            this.value = '';
            container.style.display = 'none';
            return;
        }

        preview.src = URL.createObjectURL(file);
        container.style.display = 'flex';
    });
});
</script>

@endsection