@extends('admin.layouts.app')

@section('title', $title)

@section('content')

<div class="mitra-form-page">

    <div class="page-header">

        <div>

            <h1>{{ $title }}</h1>

            <p>
                {{ $mitra->exists
                    ? 'Perbarui informasi mitra.'
                    : 'Tambahkan logo mitra baru.'
                }}
            </p>

        </div>

        <a
            href="{{ route('admin.mitra.index') }}"
            class="btn-back"
        >
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>

    </div>


    <div class="form-card">

        <form
            action="{{ $action }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            @if($method !== 'POST')
                @method($method)
            @endif


            <div class="form-grid">

                {{-- Nama Mitra --}}
                <div class="form-group">

                    <label>
                        Nama Mitra
                        <span>*</span>
                    </label>

                    <input
                        type="text"
                        name="nama_mitra"
                        value="{{ old('nama_mitra', $mitra->nama_mitra) }}"
                        placeholder="Contoh: Bank NTB Syariah"
                        required
                    >

                    @error('nama_mitra')
                        <small class="error">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                {{-- Urutan --}}
                <div class="form-group">

                    <label>
                        Urutan
                        <span>*</span>
                    </label>

                    <input
                        type="number"
                        name="urutan"
                        min="0"
                        value="{{ old('urutan', $mitra->urutan ?? 0) }}"
                        required
                    >

                    <small class="hint">
                        Menentukan posisi logo pada halaman Mitra.
                    </small>

                    @error('urutan')
                        <small class="error">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                {{-- Status --}}
                <div class="form-group">

                    <label>
                        Status
                        <span>*</span>
                    </label>

                    <select name="status" required>

                        <option
                            value="aktif"
                            {{ old('status', $mitra->status ?? 'aktif') === 'aktif' ? 'selected' : '' }}
                        >
                            Aktif
                        </option>

                        <option
                            value="nonaktif"
                            {{ old('status', $mitra->status) === 'nonaktif' ? 'selected' : '' }}
                        >
                            Nonaktif
                        </option>

                    </select>

                    @error('status')
                        <small class="error">
                            {{ $message }}
                        </small>
                    @enderror

                </div>


                {{-- Logo --}}
                <div class="form-group">

                    <label>
                        Logo Mitra
                        @if(!$mitra->exists)
                            <span>*</span>
                        @endif
                    </label>

                    <input
                        type="file"
                        name="logo"
                        accept=".jpg,.jpeg,.png,.webp,.svg"
                        onchange="previewLogo(event)"
                        {{ !$mitra->exists ? 'required' : '' }}
                    >

                    <small class="hint">
                        Format JPG, JPEG, PNG, WEBP, atau SVG. Maksimal 2 MB.
                    </small>

                    @error('logo')
                        <small class="error">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

            </div>


            {{-- Preview --}}
            <div class="preview-section">

                <h3>
                    <i class="fas fa-image"></i>
                    Preview Logo
                </h3>

                <div class="logo-preview-box">

                    @if($mitra->logo)

                        <img
                            id="logoPreview"
                            src="{{ asset('storage/' . $mitra->logo) }}"
                            alt="Preview Logo"
                        >

                    @else

                        <img
                            id="logoPreview"
                            src=""
                            alt="Preview Logo"
                            style="display:none;"
                        >

                        <div
                            id="previewPlaceholder"
                            class="preview-placeholder"
                        >
                            <i class="fas fa-image"></i>
                            <span>Preview logo akan tampil di sini</span>
                        </div>

                    @endif

                </div>

            </div>


            <div class="form-footer">

                <a
                    href="{{ route('admin.mitra.index') }}"
                    class="btn-cancel"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="btn-save"
                >
                    <i class="fas fa-save"></i>

                    {{ $mitra->exists
                        ? 'Simpan Perubahan'
                        : 'Simpan Mitra'
                    }}

                </button>

            </div>

        </form>

    </div>

</div>


<style>

.mitra-form-page {
    max-width: 1000px;
    margin: auto;
}

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.page-header h1 {
    margin: 0;
    font-size: 28px;
    font-weight: 700;
}

.page-header p {
    margin: 6px 0 0;
    color: #777;
}

.btn-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 17px;
    background: white;
    color: #087a4b;
    border: 1px solid #dce9e2;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
}

.btn-back:hover {
    background: #087a4b;
    color: white;
}

.form-card {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 5px 25px rgba(0,0,0,.06);
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
}

.form-group label span {
    color: #d33;
}

.form-group input,
.form-group select {
    width: 100%;
    box-sizing: border-box;
    padding: 12px 14px;
    border: 1px solid #ddd;
    border-radius: 7px;
    outline: none;
    font-family: inherit;
    background: white;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #087a4b;
    box-shadow: 0 0 0 3px rgba(8,122,75,.08);
}

.hint {
    margin-top: 7px;
    font-size: 12px;
    color: #888;
}

.error {
    margin-top: 7px;
    color: #d33;
    font-size: 12px;
}

.preview-section {
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid #eee;
}

.preview-section h3 {
    margin: 0 0 15px;
    font-size: 16px;
}

.preview-section h3 i {
    color: #087a4b;
    margin-right: 7px;
}

.logo-preview-box {
    width: 220px;
    height: 140px;
    border: 1px solid #e5e5e5;
    background: #fafafa;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    box-sizing: border-box;
}

.logo-preview-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.preview-placeholder {
    color: #aaa;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}

.preview-placeholder i {
    font-size: 30px;
}

.form-footer {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.btn-cancel,
.btn-save {
    padding: 11px 20px;
    border-radius: 7px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
}

.btn-cancel {
    background: #f1f1f1;
    color: #555;
}

.btn-save {
    background: #087a4b;
    color: white;
}

.btn-save:hover {
    background: #063d2a;
}

@media(max-width: 700px) {

    .page-header {
        align-items: flex-start;
        flex-direction: column;
        gap: 15px;
    }

    .btn-back {
        width: 100%;
        justify-content: center;
    }

    .form-card {
        padding: 20px;
    }

    .form-grid {
        grid-template-columns: 1fr;
    }

    .form-footer {
        flex-direction: column-reverse;
    }

    .btn-cancel,
    .btn-save {
        width: 100%;
        text-align: center;
    }

}

</style>


<script>

function previewLogo(event) {

    const file = event.target.files[0];

    const preview = document.getElementById('logoPreview');

    const placeholder = document.getElementById('previewPlaceholder');

    if (!file) {
        return;
    }

    const reader = new FileReader();

    reader.onload = function(e) {

        preview.src = e.target.result;
        preview.style.display = 'block';

        if (placeholder) {
            placeholder.style.display = 'none';
        }

    };

    reader.readAsDataURL(file);
}

</script>

@endsection