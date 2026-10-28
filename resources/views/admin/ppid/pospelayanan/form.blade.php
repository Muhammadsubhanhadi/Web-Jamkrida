
@extends('admin.layouts.app')

@section('title', isset($posPelayanan) ? 'Edit Pos Pelayanan' : 'Tambah Pos Pelayanan')

@section('content')
<style>
.ppf-page{padding:10px 5px 30px}
.ppf-header{margin-bottom:25px}
.ppf-title{margin:0;color:#173b2d;font-size:28px;font-weight:700}
.ppf-subtitle{margin:7px 0 0;color:#7a8983;font-size:14px}
.ppf-card{position:relative;overflow:hidden;max-width:850px;background:#fff;border:1px solid #e5ebe8;border-radius:12px;padding:30px;box-shadow:0 5px 20px #00000008}
.ppf-card:before{content:"";position:absolute;top:0;left:0;width:100%;height:3px;background:#087a4b}
.ppf-group{margin-bottom:22px}
.ppf-label{display:block;margin-bottom:8px;color:#173b2d;font-size:14px;font-weight:600}
.ppf-label span{color:#c0392b}
.ppf-input,.ppf-textarea{width:100%;box-sizing:border-box;padding:12px 14px;background:#fbfdfc;border:1px solid #dfe7e3;border-radius:7px;outline:none;color:#173b2d;font-family:inherit;font-size:14px;transition:.2s}
.ppf-input{height:45px}
.ppf-textarea{min-height:125px;resize:vertical;line-height:1.6}
.ppf-input:focus,.ppf-textarea:focus{border-color:#087a4b;background:#fff;box-shadow:0 0 0 3px #087a4b12}
.ppf-file{width:100%;box-sizing:border-box;padding:10px;background:#fbfdfc;border:1px dashed #cbd9d2;border-radius:7px;color:#6f7f78;font-size:13px}
.ppf-help{display:block;margin-top:7px;color:#89968f;font-size:12px;line-height:1.5}
.ppf-current{display:flex;align-items:center;gap:10px;margin-top:10px;padding:11px 13px;background:#eaf7f0;border-left:3px solid #087a4b;color:#087a4b;font-size:13px;overflow-wrap:anywhere}
.ppf-errors{margin-bottom:22px;padding:13px 16px;background:#fff1f0;border-left:4px solid #c0392b;color:#a93226;border-radius:6px;font-size:13px}
.ppf-errors ul{margin:7px 0 0;padding-left:20px}
.ppf-actions{display:flex;gap:10px;margin-top:28px;padding-top:22px;border-top:1px solid #edf1ef}
.ppf-submit,.ppf-back{display:inline-flex;align-items:center;justify-content:center;gap:8px;min-width:115px;padding:11px 18px;border-radius:7px;font-size:13px;font-weight:600;text-decoration:none;cursor:pointer;transition:.2s}
.ppf-submit{background:#087a4b;color:#fff;border:1px solid #087a4b}
.ppf-submit:hover{background:#065d39}
.ppf-back{background:#f4f6f5;color:#53635c;border:1px solid #dfe5e2}
.ppf-back:hover{background:#e8ecea;color:#173b2d}
@media(max-width:650px){.ppf-title{font-size:24px}.ppf-card{padding:22px}.ppf-actions{flex-direction:column}.ppf-submit,.ppf-back{width:100%;box-sizing:border-box}}
@media(max-width:400px){.ppf-card{padding:18px}}
</style>

<div class="ppf-page">
    <div class="ppf-header">
        <h1 class="ppf-title">
            {{ isset($posPelayanan) ? 'Edit Pos Pelayanan' : 'Tambah Pos Pelayanan' }}
        </h1>
        <p class="ppf-subtitle">
            {{ isset($posPelayanan) ? 'Perbarui informasi dan dokumen Pos Pelayanan.' : 'Tambahkan dokumen Pos Pelayanan Informasi Publik.' }}
        </p>
    </div>

    <div class="ppf-card">
        @if($errors->any())
            <div class="ppf-errors">
                <strong><i class="fa-solid fa-circle-exclamation"></i> Terdapat kesalahan:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($posPelayanan) ? route('admin.pos-pelayanan.update', $posPelayanan->id) : route('admin.pos-pelayanan.store') }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($posPelayanan))
                @method('PUT')
            @endif

            <div class="ppf-group">
                <label class="ppf-label">Judul Dokumen <span>*</span></label>
                <input type="text" name="judul" class="ppf-input"
                       value="{{ old('judul', $posPelayanan->judul ?? '') }}"
                       placeholder="Masukkan judul dokumen" required>
            </div>

            <div class="ppf-group">
                <label class="ppf-label">Deskripsi</label>
                <textarea name="deskripsi" class="ppf-textarea"
                          placeholder="Masukkan deskripsi dokumen...">{{ old('deskripsi', $posPelayanan->deskripsi ?? '') }}</textarea>
                <small class="ppf-help">Deskripsi singkat dokumen Pos Pelayanan Informasi Publik.</small>
            </div>

            <div class="ppf-group">
                <label class="ppf-label">
                    File PDF @if(!isset($posPelayanan))<span>*</span>@endif
                </label>
                <input type="file" name="file_pdf" class="ppf-file"
                       accept=".pdf,application/pdf"
                       {{ !isset($posPelayanan) ? 'required' : '' }}>
                <small class="ppf-help">Format PDF, maksimal 10 MB.</small>

                @if(isset($posPelayanan) && $posPelayanan->file_pdf)
                    <div class="ppf-current">
                        <i class="fa-solid fa-file-pdf"></i>
                        <span>File saat ini: {{ basename($posPelayanan->file_pdf) }}</span>
                    </div>
                @endif
            </div>

            <div class="ppf-actions">
                <button type="submit" class="ppf-submit">
                    <i class="fa-solid fa-save"></i>
                    {{ isset($posPelayanan) ? 'Update' : 'Simpan' }}
                </button>
                <a href="{{ route('admin.pos-pelayanan') }}" class="ppf-back">
                    <i class="fa-solid fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
