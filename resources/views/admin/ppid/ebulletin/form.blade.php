
@extends('admin.layouts.app')

@section('title', isset($eBulletin) ? 'Edit eBulletin' : 'Tambah eBulletin')

@section('content')
<style>
.ebf-page{padding:10px 5px 30px}
.ebf-header{margin-bottom:25px}
.ebf-title{margin:0;color:#173b2d;font-size:28px;font-weight:700}
.ebf-subtitle{margin:7px 0 0;color:#7a8983;font-size:14px}
.ebf-card{position:relative;overflow:hidden;max-width:850px;background:#fff;border:1px solid #e5ebe8;border-radius:12px;padding:30px;box-shadow:0 5px 20px #00000008}
.ebf-card:before{content:"";position:absolute;top:0;left:0;width:100%;height:3px;background:#087a4b}
.ebf-group{margin-bottom:22px}
.ebf-label{display:block;margin-bottom:8px;color:#173b2d;font-size:14px;font-weight:600}
.ebf-label span{color:#c0392b}
.ebf-input,.ebf-textarea{width:100%;box-sizing:border-box;padding:12px 14px;background:#fbfdfc;border:1px solid #dfe7e3;border-radius:7px;outline:none;color:#173b2d;font:14px inherit;transition:.2s}
.ebf-input{height:45px}
.ebf-textarea{min-height:120px;resize:vertical;line-height:1.6}
.ebf-input:focus,.ebf-textarea:focus{border-color:#087a4b;background:#fff;box-shadow:0 0 0 3px #087a4b12}
.ebf-file{width:100%;box-sizing:border-box;padding:10px;background:#fbfdfc;border:1px dashed #cbd9d2;border-radius:7px;color:#6f7f78;font-size:13px}
.ebf-help{display:block;margin-top:7px;color:#89968f;font-size:12px;line-height:1.5}
.ebf-current{display:flex;align-items:center;gap:10px;margin-top:10px;padding:11px 13px;background:#eaf7f0;border-left:3px solid #087a4b;color:#087a4b;font-size:13px;overflow-wrap:anywhere}
.ebf-preview{display:block;max-width:220px;max-height:180px;object-fit:cover;border-radius:7px;margin-top:12px}
.ebf-errors{margin-bottom:22px;padding:13px 16px;background:#fff1f0;border-left:4px solid #c0392b;color:#a93226;border-radius:6px;font-size:13px}
.ebf-errors ul{margin:7px 0 0;padding-left:20px}
.ebf-actions{display:flex;gap:10px;margin-top:28px;padding-top:22px;border-top:1px solid #edf1ef}
.ebf-submit,.ebf-back{display:inline-flex;align-items:center;justify-content:center;gap:8px;min-width:115px;padding:11px 18px;border-radius:7px;font-size:13px;font-weight:600;text-decoration:none;cursor:pointer;transition:.2s}
.ebf-submit{background:#087a4b;color:#fff;border:1px solid #087a4b}
.ebf-submit:hover{background:#065d39}
.ebf-back{background:#f4f6f5;color:#53635c;border:1px solid #dfe5e2}
.ebf-back:hover{background:#e8ecea;color:#173b2d}
@media(max-width:650px){.ebf-title{font-size:24px}.ebf-card{padding:22px}.ebf-actions{flex-direction:column}.ebf-submit,.ebf-back{width:100%;box-sizing:border-box}}
@media(max-width:400px){.ebf-card{padding:18px}}
</style>

<div class="ebf-page">
    <div class="ebf-header">
        <h1 class="ebf-title">
            {{ isset($eBulletin) ? 'Edit eBulletin' : 'Tambah eBulletin' }}
        </h1>
        <p class="ebf-subtitle">
            {{ isset($eBulletin) ? 'Perbarui informasi publikasi eBulletin.' : 'Tambahkan publikasi eBulletin baru.' }}
        </p>
    </div>

    <div class="ebf-card">
        @if($errors->any())
            <div class="ebf-errors">
                <strong><i class="fa-solid fa-circle-exclamation"></i> Terdapat kesalahan:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($eBulletin) ? route('admin.ebulletin.update', $eBulletin->id) : route('admin.ebulletin.store') }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($eBulletin))
                @method('PUT')
            @endif

            <div class="ebf-group">
                <label class="ebf-label">Judul eBulletin <span>*</span></label>
                <input type="text" name="judul" class="ebf-input"
                       value="{{ old('judul', $eBulletin->judul ?? '') }}"
                       placeholder="Contoh: eBulletin Edisi Oktober" required>
            </div>

            <div class="ebf-group">
                <label class="ebf-label">Deskripsi</label>
                <textarea name="deskripsi" class="ebf-textarea"
                          placeholder="Masukkan deskripsi eBulletin...">{{ old('deskripsi', $eBulletin->deskripsi ?? '') }}</textarea>
                <small class="ebf-help">Deskripsi singkat publikasi eBulletin.</small>
            </div>

            <div class="ebf-group">
                <label class="ebf-label">Cover {{ !isset($eBulletin) ? '(opsional)' : '(opsional)' }}</label>
                <input type="file" name="cover" class="ebf-file" accept="image/*">
                <small class="ebf-help">Format gambar, maksimal 2 MB.</small>

                @if(isset($eBulletin) && $eBulletin->cover)
                    <div class="ebf-current">
                        <i class="fa-solid fa-image"></i>
                        <span>Cover saat ini: {{ basename($eBulletin->cover) }}</span>
                    </div>
                    <img src="{{ asset('storage/'.$eBulletin->cover) }}"
                         alt="Cover saat ini" class="ebf-preview">
                @endif
            </div>

            <div class="ebf-group">
                <label class="ebf-label">
                    File PDF @if(!isset($eBulletin))<span>*</span>@endif
                </label>
                <input type="file" name="file_pdf" class="ebf-file"
                       accept=".pdf,application/pdf"
                       {{ !isset($eBulletin) ? 'required' : '' }}>
                <small class="ebf-help">Format PDF, maksimal 10 MB.</small>

                @if(isset($eBulletin) && $eBulletin->file_pdf)
                    <div class="ebf-current">
                        <i class="fa-solid fa-file-pdf"></i>
                        <span>File saat ini: {{ basename($eBulletin->file_pdf) }}</span>
                    </div>
                @endif
            </div>

            <div class="ebf-actions">
                <button type="submit" class="ebf-submit">
                    <i class="fa-solid fa-save"></i>
                    {{ isset($eBulletin) ? 'Update' : 'Simpan' }}
                </button>
                <a href="{{ route('admin.ebulletin') }}" class="ebf-back">
                    <i class="fa-solid fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
