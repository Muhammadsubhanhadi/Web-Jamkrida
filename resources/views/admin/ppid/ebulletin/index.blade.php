
@extends('admin.layouts.app')

@section('title', 'eBulletin')

@section('content')
<style>
.eb-page{padding:10px 5px 30px}
.eb-header{display:flex;justify-content:space-between;align-items:center;gap:20px;margin-bottom:25px}
.eb-title{margin:0;color:#173b2d;font-size:28px;font-weight:700}
.eb-subtitle{margin:7px 0 0;color:#7a8983;font-size:14px}
.eb-add,.eb-edit,.eb-delete{display:inline-flex;align-items:center;justify-content:center;gap:8px;text-decoration:none;font-size:13px;font-weight:600;border-radius:7px;padding:10px 13px;transition:.2s}
.eb-add{background:#087a4b;color:#fff;padding:12px 18px;border-radius:8px;white-space:nowrap}
.eb-add:hover{background:#065d39;color:#fff;transform:translateY(-2px)}
.eb-alert{padding:13px 16px;margin-bottom:20px;background:#eaf7f0;border-left:4px solid #087a4b;color:#087a4b;border-radius:6px}
.eb-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px}
.eb-card{position:relative;overflow:hidden;background:#fff;border:1px solid #e5ebe8;border-radius:12px;padding:22px;transition:.2s;min-width:0}
.eb-card:before{content:"";position:absolute;top:0;left:0;width:100%;height:3px;background:#087a4b}
.eb-card:hover{border-color:#9ac8b2;transform:translateY(-3px);box-shadow:0 10px 25px #0000000b}
.eb-top{display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:18px}
.eb-icon{width:48px;height:48px;display:flex;align-items:center;justify-content:center;background:#eaf7f0;color:#087a4b;border-radius:9px;font-size:22px;flex-shrink:0}
.eb-badge{padding:7px 10px;background:#f8f2df;color:#a27a21;border:1px solid #ead9a9;border-radius:6px;font-size:11px;font-weight:700}
.eb-cover{width:100%;height:170px;object-fit:cover;border-radius:8px;margin-bottom:17px;background:#f4f7f5}
.eb-type{display:block;margin-bottom:7px;color:#a27a21;font-size:10px;font-weight:700;letter-spacing:1.5px}
.eb-card h3{margin:0 0 9px;color:#173b2d;font-size:19px;line-height:1.5;overflow-wrap:anywhere}
.eb-desc{min-height:44px;margin:0;color:#7a8983;font-size:13px;line-height:1.8;overflow-wrap:anywhere;white-space:pre-line}
.eb-footer{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;margin-top:20px;padding-top:17px;border-top:1px solid #edf1ef}
.eb-file{display:flex;align-items:center;gap:7px;color:#7a8983;font-size:12px;font-weight:600}
.eb-file i{color:#c0392b;font-size:17px}
.eb-actions{display:flex;align-items:center;gap:7px}
.eb-edit{background:#eaf7f0;color:#087a4b;border:1px solid #d7ede2}
.eb-edit:hover{background:#087a4b;color:#fff}
.eb-delete{background:#fff0f0;color:#c0392b;border:1px solid #f1d4d1;cursor:pointer}
.eb-delete:hover{background:#c0392b;color:#fff}
.eb-empty{grid-column:1/-1;text-align:center;padding:55px 25px;background:#fff;border:1px dashed #d8e1dc;border-radius:12px}
.eb-empty i{font-size:38px;color:#087a4b;margin-bottom:15px}
.eb-empty h3{margin:0 0 7px;color:#173b2d;font-size:18px}
.eb-empty p{margin:0;color:#89968f;font-size:13px}
@media(max-width:900px){.eb-grid{grid-template-columns:1fr}}
@media(max-width:650px){.eb-header{align-items:flex-start;flex-direction:column}.eb-add{width:100%;box-sizing:border-box}.eb-title{font-size:24px}}
@media(max-width:450px){.eb-card{padding:18px}.eb-footer{align-items:flex-start;flex-direction:column}.eb-actions{width:100%}.eb-edit,.eb-delete{flex:1}}
</style>

<div class="eb-page">
    <div class="eb-header">
        <div>
            <h1 class="eb-title">eBulletin</h1>
            <p class="eb-subtitle">Kelola publikasi dan dokumen eBulletin perusahaan.</p>
        </div>
        <a href="{{ route('admin.ebulletin.create') }}" class="eb-add">
            <i class="fa-solid fa-plus"></i> Tambah eBulletin
        </a>
    </div>

    @if(session('success'))
        <div class="eb-alert">
            <i class="fa-solid fa-circle-check"></i>
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="eb-alert" style="background:#fff1f0;color:#a93226;border-color:#c0392b">
            <i class="fa-solid fa-circle-exclamation"></i>
            {{ $errors->first() }}
        </div>
    @endif

    <div class="eb-grid">
        @forelse($eBulletins as $eBulletin)
            <article class="eb-card">
                <div class="eb-top">
                    <div class="eb-icon"><i class="fa-solid fa-newspaper"></i></div>
                    <span class="eb-badge">DOKUMEN EBULLETIN</span>
                </div>

                @if($eBulletin->cover)
                    <img class="eb-cover"
                         src="{{ asset('storage/'.$eBulletin->cover) }}"
                         alt="Cover {{ $eBulletin->judul }}">
                @endif

                <span class="eb-type">PUBLICATION / EBULLETIN</span>
                <h3>{{ $eBulletin->judul }}</h3>
                <p class="eb-desc">
                    {{ $eBulletin->deskripsi ?: 'Tidak ada deskripsi untuk publikasi ini.' }}
                </p>

                <div class="eb-footer">
                    <div class="eb-file">
                        <i class="fa-solid fa-file-pdf"></i> File PDF
                    </div>

                    <div class="eb-actions">
                        <a href="{{ route('admin.ebulletin.edit', $eBulletin->id) }}"
                           class="eb-edit">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>

                        <form action="{{ route('admin.ebulletin.destroy', $eBulletin->id) }}"
                              method="POST" style="margin:0"
                              onsubmit="return confirm('Yakin ingin menghapus eBulletin ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="eb-delete">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </article>
        @empty
            <div class="eb-empty">
                <i class="fa-regular fa-folder-open"></i>
                <h3>Belum Ada eBulletin</h3>
                <p>Tambahkan publikasi melalui tombol Tambah eBulletin.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
