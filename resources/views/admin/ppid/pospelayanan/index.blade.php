
@extends('admin.layouts.app')

@section('title', 'Pos Pelayanan Informasi Publik')

@section('content')
<style>
.pp-page{padding:10px 5px 30px}
.pp-header{display:flex;justify-content:space-between;align-items:center;gap:20px;margin-bottom:25px}
.pp-title{margin:0;color:#173b2d;font-size:28px;font-weight:700}
.pp-subtitle{margin:7px 0 0;color:#7a8983;font-size:14px}
.pp-add,.pp-edit,.pp-delete{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:10px 13px;border-radius:7px;text-decoration:none;font-size:13px;font-weight:600;transition:.2s}
.pp-add{background:#087a4b;color:#fff;padding:12px 18px;border-radius:8px;white-space:nowrap}
.pp-add:hover{background:#065d39;color:#fff;transform:translateY(-2px)}
.pp-alert{padding:13px 16px;margin-bottom:20px;background:#eaf7f0;border-left:4px solid #087a4b;color:#087a4b;border-radius:6px}
.pp-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px}
.pp-card{position:relative;overflow:hidden;display:flex;flex-direction:column;background:#fff;border:1px solid #e5ebe8;border-radius:12px;padding:22px;transition:.2s;min-width:0}
.pp-card:before{content:"";position:absolute;top:0;left:0;width:100%;height:3px;background:#087a4b}
.pp-card:hover{border-color:#9ac8b2;transform:translateY(-3px);box-shadow:0 10px 25px #0000000b}
.pp-top{display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:20px}
.pp-icon{width:48px;height:48px;flex-shrink:0;display:flex;align-items:center;justify-content:center;background:#eaf7f0;color:#087a4b;border-radius:9px;font-size:22px}
.pp-badge{padding:7px 10px;background:#f8f2df;color:#a27a21;border:1px solid #ead9a9;border-radius:6px;font-size:11px;font-weight:700}
.pp-type{display:block;margin-bottom:7px;color:#a27a21;font-size:10px;font-weight:700;letter-spacing:1.3px}
.pp-card h3{margin:0 0 9px;color:#173b2d;font-size:19px;line-height:1.5;overflow-wrap:anywhere}
.pp-desc{min-height:45px;margin:0;color:#7a8983;font-size:13px;line-height:1.8;overflow-wrap:anywhere;white-space:pre-line}
.pp-footer{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;margin-top:auto;padding-top:18px;border-top:1px solid #edf1ef}
.pp-file{display:flex;align-items:center;gap:7px;color:#7a8983;font-size:12px;font-weight:600}
.pp-file i{color:#c0392b;font-size:17px}
.pp-actions{display:flex;align-items:center;gap:7px}
.pp-edit{background:#eaf7f0;color:#087a4b;border:1px solid #d7ede2}
.pp-edit:hover{background:#087a4b;color:#fff}
.pp-delete{background:#fff0f0;color:#c0392b;border:1px solid #f1d4d1;cursor:pointer}
.pp-delete:hover{background:#c0392b;color:#fff}
.pp-empty{grid-column:1/-1;text-align:center;padding:55px 25px;background:#fff;border:1px dashed #d8e1dc;border-radius:12px}
.pp-empty i{font-size:38px;color:#087a4b;margin-bottom:15px}
.pp-empty h3{margin:0 0 7px;color:#173b2d;font-size:18px}
.pp-empty p{margin:0;color:#89968f;font-size:13px;line-height:1.7}
@media(max-width:900px){.pp-grid{grid-template-columns:1fr}}
@media(max-width:650px){.pp-header{align-items:flex-start;flex-direction:column}.pp-add{width:100%;box-sizing:border-box}.pp-title{font-size:24px}}
@media(max-width:450px){.pp-card{padding:18px}.pp-footer{align-items:flex-start;flex-direction:column}.pp-actions{width:100%}.pp-edit,.pp-delete{flex:1}}
</style>

<div class="pp-page">
    <div class="pp-header">
        <div>
            <h1 class="pp-title">Pos Pelayanan Informasi Publik</h1>
            <p class="pp-subtitle">Kelola dokumen dan informasi Pos Pelayanan Informasi Publik.</p>
        </div>
        <a href="{{ route('admin.pos-pelayanan.create') }}" class="pp-add">
            <i class="fa-solid fa-plus"></i> Tambah Dokumen
        </a>
    </div>

    @if(session('success'))
        <div class="pp-alert">
            <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="pp-alert" style="background:#fff1f0;color:#a93226;border-color:#c0392b">
            <i class="fa-solid fa-circle-exclamation"></i> {{ $errors->first() }}
        </div>
    @endif

    <div class="pp-grid">
        @forelse($posPelayanans as $posPelayanan)
            <article class="pp-card">
                <div class="pp-top">
                    <div class="pp-icon"><i class="fa-solid fa-building"></i></div>
                    <span class="pp-badge">DOKUMEN PPID</span>
                </div>

                <span class="pp-type">POS PELAYANAN INFORMASI PUBLIK</span>
                <h3>{{ $posPelayanan->judul }}</h3>
                <p class="pp-desc">
                    {{ $posPelayanan->deskripsi ?: 'Tidak ada deskripsi untuk dokumen ini.' }}
                </p>

                <div class="pp-footer">
                    <div class="pp-file">
                        <i class="fa-solid fa-file-pdf"></i> File PDF
                    </div>

                    <div class="pp-actions">
                        <a href="{{ route('admin.pos-pelayanan.edit', $posPelayanan->id) }}"
                           class="pp-edit">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>

                        <form action="{{ route('admin.pos-pelayanan.destroy', $posPelayanan->id) }}"
                              method="POST" style="margin:0"
                              onsubmit="return confirm('Yakin ingin menghapus dokumen ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="pp-delete">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </article>
        @empty
            <div class="pp-empty">
                <i class="fa-regular fa-folder-open"></i>
                <h3>Belum Ada Dokumen</h3>
                <p>Tambahkan dokumen Pos Pelayanan melalui tombol di atas.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
