
@extends('admin.layouts.app')

@section('content')

<style>
/* =====================================================
   EXECUTIVE COMPLAINT DETAIL — EMERALD LUXE
===================================================== */
.cp-detail {
    --emerald: #087a4b;
    --emerald-dark: #063d2a;
    --emerald-deep: #03281d;
    --gold: #d5a83a;
    --gold-soft: #f8f0d8;
    --ink: #24382d;
    --muted: #718077;
    --line: #e4eae5;
    --soft: #f6f9f6;

    color: var(--ink);
    font-family: inherit;
    font-size: 15px;
    line-height: 1.7;
}

.cp-detail *,
.cp-detail *::before,
.cp-detail *::after {
    box-sizing: border-box;
}

.cp-detail a {
    text-decoration: none;
}

/* PAGE HEADER */
.cp-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 18px;
    margin-bottom: 25px;
}

.cp-heading {
    display: flex;
    align-items: center;
    gap: 15px;
}

.cp-heading-mark {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 55px;
    height: 55px;
    flex: 0 0 55px;
    border-radius: 12px;
    background: linear-gradient(145deg, var(--emerald-dark), var(--emerald));
    color: white;
    box-shadow: 0 6px 15px rgba(6, 61, 42, .15);
    position: relative;
    overflow: hidden;
}

.cp-heading-mark::after {
    position: absolute;
    right: -12px;
    bottom: -17px;
    width: 42px;
    height: 42px;
    border: 1px solid rgba(255,255,255,.22);
    border-radius: 50%;
    content: "";
}

.cp-heading-mark i {
    font-size: 23px;
}

.cp-topbar h1 {
    margin: 0 0 4px;
    color: var(--emerald-dark);
    font-size: 27px;
    font-weight: 850;
    line-height: 1.3;
    letter-spacing: -.6px;
}

.cp-topbar p {
    margin: 0;
    color: var(--muted);
    font-size: 14px;
}

/* GENERAL PANEL */
.cp-panel {
    margin-bottom: 24px;
    overflow: hidden;
    border: 1px solid var(--line);
    border-radius: 10px;
    background: white;
    box-shadow: 0 6px 24px rgba(20, 55, 34, .045);
}

.cp-panel-heading {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 19px 24px;
    border-bottom: 1px solid var(--line);
    background: #fff;
}

.cp-panel-heading-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    flex: 0 0 38px;
    border-radius: 8px;
    background: #eaf5ed;
    color: var(--emerald);
    font-size: 17px;
}

.cp-panel-heading h2 {
    margin: 0;
    color: var(--emerald-dark);
    font-size: 17px;
    font-weight: 850;
}

.cp-panel-heading p {
    margin: 2px 0 0;
    color: var(--muted);
    font-size: 13px;
}

.cp-panel-body {
    padding: 25px;
}

/* TICKET HERO */
.cp-ticket-hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    position: relative;
    overflow: hidden;
    margin-bottom: 27px;
    padding: 27px 29px;
    border-radius: 9px;
    background: linear-gradient(115deg, #03281d 0%, #075439 65%, #087a4b 100%);
    color: white;
}

.cp-ticket-hero::before {
    position: absolute;
    top: -85px;
    right: 95px;
    width: 220px;
    height: 220px;
    border: 1px solid rgba(255,255,255,.09);
    border-radius: 50%;
    content: "";
}

.cp-ticket-hero::after {
    position: absolute;
    right: -40px;
    bottom: -110px;
    width: 240px;
    height: 240px;
    border: 1px solid rgba(213,168,58,.25);
    border-radius: 50%;
    content: "";
}

.cp-ticket-content,
.cp-ticket-emblem {
    position: relative;
    z-index: 1;
}

.cp-ticket-eyebrow {
    display: flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 9px;
    color: #e9d28e;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.4px;
    text-transform: uppercase;
}

.cp-ticket-number {
    color: #fff;
    font-size: clamp(21px, 2.2vw, 29px);
    font-weight: 850;
    line-height: 1.4;
    overflow-wrap: anywhere;
    letter-spacing: .3px;
}

.cp-ticket-caption {
    margin-top: 8px;
    color: rgba(255,255,255,.76);
    font-size: 13px;
}

.cp-ticket-emblem {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 66px;
    height: 66px;
    flex: 0 0 66px;
    border: 1px solid rgba(237,210,130,.6);
    border-radius: 50%;
    background: rgba(255,255,255,.06);
    color: #e9d28e;
    font-size: 27px;
}

/* SECTION LABEL */
.cp-section-heading {
    display: flex;
    align-items: center;
    gap: 11px;
    margin: 0 0 17px;
    color: var(--emerald-dark);
    font-size: 16px;
    font-weight: 850;
}

.cp-section-heading i {
    color: var(--gold);
    font-size: 17px;
}

/* INFORMATION CARDS */
.cp-info-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
}

.cp-info-item {
    min-width: 0;
    padding: 19px 20px;
    border: 1px solid #e6ece7;
    border-radius: 8px;
    background: #fff;
    transition: border-color .2s ease, box-shadow .2s ease;
}

.cp-info-item:hover {
    border-color: #c6decd;
    box-shadow: 0 4px 13px rgba(8,122,75,.04);
}

.cp-info-item.full {
    grid-column: 1 / -1;
}

.cp-info-label {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 8px;
    color: #758278;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: .65px;
    text-transform: uppercase;
}

.cp-info-label i {
    color: var(--emerald);
    font-size: 13px;
}

.cp-info-value {
    color: #263a30;
    font-size: 15px;
    font-weight: 550;
    line-height: 1.85;
    overflow-wrap: anywhere;
    white-space: pre-wrap;
}

.cp-info-value.emphasis {
    color: var(--emerald);
    font-size: 16px;
    font-weight: 800;
}

/* CHRONOLOGY */
.cp-story {
    padding: 22px 24px;
    border-left: 4px solid var(--gold);
    border-radius: 0 8px 8px 0;
    background: #f7f9f7;
    color: #34483a;
    font-size: 15px;
    line-height: 2;
    overflow-wrap: anywhere;
    white-space: pre-wrap;
}

/* ATTACHMENT */
.cp-file-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 22px;
    padding: 22px;
    border: 1px solid #d7e7db;
    border-radius: 9px;
    background: linear-gradient(120deg, #f1f8f2, #fff);
}

.cp-file-description {
    display: flex;
    align-items: center;
    gap: 15px;
    flex: 1 1 260px;
    min-width: 0;
}

.cp-file-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 54px;
    height: 54px;
    flex: 0 0 54px;
    border-radius: 10px;
    background: #e1f0e4;
    color: var(--emerald);
    font-size: 24px;
}

.cp-file-description strong {
    display: block;
    margin-bottom: 4px;
    color: var(--emerald-dark);
    font-size: 15px;
    font-weight: 850;
}

.cp-file-description p {
    margin: 0;
    color: #69786d;
    font-size: 13px;
    line-height: 1.7;
}

.cp-file-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.cp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    min-height: 45px;
    padding: 12px 18px;
    border: 1px solid transparent;
    border-radius: 5px;
    font-family: inherit;
    font-size: 14px;
    font-weight: 750;
    line-height: 1.4;
    cursor: pointer;
    transition: background .2s ease, border-color .2s ease,
                color .2s ease, transform .2s ease;
}

.cp-btn:hover {
    transform: translateY(-1px);
}

.cp-btn-green {
    background: var(--emerald);
    color: #fff !important;
}

.cp-btn-green:hover {
    background: var(--emerald-dark);
}

.cp-btn-outline {
    border-color: #d6e1d8;
    background: white;
    color: #405749 !important;
}

.cp-btn-outline:hover {
    border-color: var(--emerald);
    background: #f4faf5;
    color: var(--emerald) !important;
}

.cp-btn-danger {
    background: #b42323;
    color: #fff !important;
}

.cp-btn-danger:hover {
    background: #8d1919;
}

.cp-no-file {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 18px;
    border: 1px dashed #d6dfd8;
    border-radius: 7px;
    background: #fafcfb;
    color: #6b7a70;
    font-size: 14px;
}

/* STATUS PANEL */
.cp-status-intro {
    margin: 0 0 23px;
    color: #68786e;
    font-size: 14px;
    line-height: 1.8;
}

.cp-status-field {
    max-width: 520px;
}

.cp-status-field label {
    display: block;
    margin-bottom: 9px;
    color: var(--emerald-dark);
    font-size: 14px;
    font-weight: 800;
}

.cp-status-field select {
    display: block;
    width: 100%;
    min-height: 50px;
    padding: 12px 15px;
    border: 1px solid #d6e2d8;
    border-radius: 6px;
    background: #fff;
    color: #263a30;
    font-family: inherit;
    font-size: 15px;
    outline: none;
    transition: border-color .2s ease, box-shadow .2s ease;
}

.cp-status-field select:focus {
    border-color: var(--emerald);
    box-shadow: 0 0 0 3px rgba(8,122,75,.09);
}

/* ALERTS */
.cp-alert {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 16px 19px;
    margin-bottom: 21px;
    border: 1px solid #b9e0c7;
    border-radius: 7px;
    background: #eaf7ef;
    color: #17663a;
    font-size: 14px;
    line-height: 1.8;
}

.cp-alert.error {
    border-color: #f0c4c4;
    background: #fff0f0;
    color: #a12424;
}

/* DELETE ZONE */
.cp-danger-panel {
    border-color: #f0dddd;
}

.cp-danger-panel .cp-panel-heading {
    background: #fffafa;
    border-bottom-color: #f1e2e2;
}

.cp-danger-panel .cp-panel-heading-icon {
    background: #fff0f0;
    color: #a12424;
}

.cp-danger-panel .cp-panel-heading h2 {
    color: #a12424;
}

.cp-danger-copy {
    margin: 0;
    color: #627168;
    font-size: 14px;
    line-height: 1.9;
}

.cp-delete-form {
    margin: 22px 0 0;
}

.cp-error {
    margin-top: 7px;
    color: #b42323;
    font-size: 13px;
}

/* RESPONSIVE */
@media (max-width: 850px) {
    .cp-panel-body {
        padding: 20px;
    }

    .cp-file-box {
        align-items: flex-start;
    }
}

@media (max-width: 600px) {
    .cp-topbar {
        align-items: stretch;
    }

    .cp-topbar h1 {
        font-size: 23px;
    }

    .cp-topbar p {
        font-size: 13px;
    }

    .cp-topbar > a {
        width: 100%;
    }

    .cp-heading-mark {
        width: 46px;
        height: 46px;
        flex-basis: 46px;
    }

    .cp-panel-body {
        padding: 15px;
    }

    .cp-panel-heading {
        padding: 15px;
    }

    .cp-panel-heading h2 {
        font-size: 16px;
    }

    .cp-info-grid {
        grid-template-columns: minmax(0, 1fr);
        gap: 11px;
    }

    .cp-info-item.full {
        grid-column: auto;
    }

    .cp-info-item {
        padding: 15px;
    }

    .cp-ticket-hero {
        padding: 21px 18px;
    }

    .cp-ticket-emblem {
        width: 48px;
        height: 48px;
        flex-basis: 48px;
        font-size: 20px;
    }

    .cp-ticket-number {
        font-size: 20px;
    }

    .cp-file-box {
        padding: 15px;
    }

    .cp-file-actions {
        width: 100%;
    }

    .cp-file-actions .cp-btn {
        flex: 1 1 100%;
    }

    .cp-story {
        padding: 16px;
    }

    .cp-detail-actions {
        flex-direction: column;
        align-items: stretch;
    }

    .cp-detail-actions > *,
    .cp-detail-actions .cp-btn {
        width: 100%;
    }
}
</style>

<div class="cp-detail">

    {{-- PAGE HEADER --}}
    <header class="cp-topbar">
        <div class="cp-heading">
            <div class="cp-heading-mark">
                <i class="fa-solid fa-file-circle-exclamation"></i>
            </div>

            <div>
                <h1>Detail Pengaduan</h1>
                <p>Informasi laporan, bukti pendukung, dan tindak lanjut pengaduan.</p>
            </div>
        </div>

        <a href="{{ route('admin.complains.index') }}"
           class="cp-btn cp-btn-outline">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Daftar
        </a>
    </header>

    {{-- NOTIFICATIONS --}}
    @if(session('success'))
        <div class="cp-alert">
            <i class="fa-solid fa-circle-check"></i>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    @if(session('error'))
        <div class="cp-alert error">
            <i class="fa-solid fa-circle-exclamation"></i>
            <div>{{ session('error') }}</div>
        </div>
    @endif

    @if($errors->any())
        <div class="cp-alert error">
            <i class="fa-solid fa-circle-exclamation"></i>
            <div>
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- REPORT DETAILS --}}
    <section class="cp-panel">

        <div class="cp-panel-heading">
            <div class="cp-panel-heading-icon">
                <i class="fa-solid fa-clipboard-list"></i>
            </div>
            <div>
                <h2>Informasi Laporan</h2>
                <p>Identitas dan rincian pengaduan yang diterima.</p>
            </div>
        </div>

        <div class="cp-panel-body">

            {{-- TICKET HERO --}}
            <div class="cp-ticket-hero">
                <div class="cp-ticket-content">
                    <div class="cp-ticket-eyebrow">
                        <i class="fa-solid fa-ticket"></i>
                        Nomor Tiket Pengaduan
                    </div>

                    <div class="cp-ticket-number">
                        {{ $pengaduan->{$ticketColumn} ?? 'Belum tersedia' }}
                    </div>

                    <div class="cp-ticket-caption">
                        Simpan nomor tiket ini sebagai referensi laporan.
                    </div>
                </div>

                <div class="cp-ticket-emblem">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
            </div>

            {{-- REPORTER --}}
            <h3 class="cp-section-heading">
                <i class="fa-solid fa-user-circle"></i>
                Informasi Pelapor
            </h3>

            <div class="cp-info-grid">

                <div class="cp-info-item">
                    <span class="cp-info-label">
                        <i class="fa-solid fa-user"></i>
                        Nama Pelapor
                    </span>
                    <div class="cp-info-value">
                        {{ $pengaduan->name ?: '-' }}
                    </div>
                </div>

                <div class="cp-info-item">
                    <span class="cp-info-label">
                        <i class="fa-regular fa-calendar"></i>
                        Tanggal Pengaduan
                    </span>
                    <div class="cp-info-value">
                        {{ $pengaduan->created_at?->format('d F Y, H:i') ?? '-' }}
                    </div>
                </div>

                <div class="cp-info-item">
                    <span class="cp-info-label">
                        <i class="fa-solid fa-phone"></i>
                        Nomor Kontak
                    </span>
                    <div class="cp-info-value">
                        {{ $pengaduan->contact ?: '-' }}
                    </div>
                </div>

                <div class="cp-info-item">
                    <span class="cp-info-label">
                        <i class="fa-solid fa-envelope"></i>
                        Email
                    </span>
                    <div class="cp-info-value">
                        {{ $pengaduan->email ?: '-' }}
                    </div>
                </div>

                <div class="cp-info-item full">
                    <span class="cp-info-label">
                        <i class="fa-solid fa-layer-group"></i>
                        Kategori Pengaduan
                    </span>
                    <div class="cp-info-value emphasis">
                        {{ $pengaduan->category ?: '-' }}
                    </div>
                </div>

                <div class="cp-info-item full">
                    <span class="cp-info-label">
                        <i class="fa-solid fa-heading"></i>
                        Subjek Pengaduan
                    </span>
                    <div class="cp-info-value emphasis">
                        {{ $pengaduan->subject ?: '-' }}
                    </div>
                </div>

                {{-- CHRONOLOGY --}}
                <div class="cp-info-item full">
                    <span class="cp-info-label">
                        <i class="fa-solid fa-align-left"></i>
                        Kronologi Kejadian
                    </span>
                    <div class="cp-story">{{ $pengaduan->chronology ?: '-' }}</div>
                </div>

                {{-- PRIVATE ATTACHMENT --}}
                <div class="cp-info-item full">
                    <span class="cp-info-label">
                        <i class="fa-solid fa-paperclip"></i>
                        Lampiran Bukti
                    </span>

                    @if($pengaduan->attachment_path)
                        <div class="cp-file-box">

                            <div class="cp-file-description">
                                <div class="cp-file-icon">
                                    <i class="fa-solid fa-file-shield"></i>
                                </div>

                                <div>
                                    <strong>Lampiran pengaduan tersedia</strong>
                                    <p>
                                        Bukti pendukung tersimpan secara privat dan
                                        diakses melalui halaman admin.
                                    </p>
                                </div>
                            </div>

                            <div class="cp-file-actions">
                                <a
                                    href="{{ route('admin.complains.attachment', ['formPengaduan' => $pengaduan->getKey()]) }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="cp-btn cp-btn-green"
                                >
                                    <i class="fa-solid fa-eye"></i>
                                    Lihat File
                                </a>

                                <a
                                    href="{{ route('admin.complains.attachment', ['formPengaduan' => $pengaduan->getKey(), 'download' => 1]) }}"
                                    class="cp-btn cp-btn-outline"
                                >
                                    <i class="fa-solid fa-download"></i>
                                    Unduh File
                                </a>
                            </div>

                        </div>
                    @else
                        <div class="cp-no-file">
                            <i class="fa-solid fa-folder-open"></i>
                            Tidak ada file yang dilampirkan.
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>

    {{-- STATUS UPDATE: NO ASSIGNED STAFF FIELD --}}
    <section class="cp-panel">

        <div class="cp-panel-heading">
            <div class="cp-panel-heading-icon">
                <i class="fa-solid fa-list-check"></i>
            </div>
            <div>
                <h2>Tindak Lanjut Pengaduan</h2>
                <p>Perbarui status sesuai perkembangan penanganan laporan.</p>
            </div>
        </div>

        <div class="cp-panel-body">

            <p class="cp-status-intro">
                Pastikan status mencerminkan kondisi terbaru pengaduan.
                Perubahan akan disimpan setelah tombol simpan ditekan.
            </p>

            <form
                action="{{ route('admin.complains.update', $pengaduan) }}"
                method="POST"
            >
                @csrf
                @method('PATCH')

                <div class="cp-status-field">
                    <label for="status">
                        <i class="fa-solid fa-circle-dot"></i>
                        Status Pengaduan
                    </label>

                    <select name="status" id="status" required>
                        @foreach(['Baru Masuk', 'Menunggu', 'Diproses', 'Selesai', 'Ditolak'] as $status)
                            <option
                                value="{{ $status }}"
                                @selected(old('status', $pengaduan->status) === $status)
                            >
                                {{ $status }}
                            </option>
                        @endforeach
                    </select>

                    @error('status')
                        <div class="cp-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="cp-detail-actions" style="display:flex;flex-wrap:wrap;gap:10px;margin-top:24px;">
                    <button type="submit" class="cp-btn cp-btn-green">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan Perubahan
                    </button>

                    <a
                        href="{{ route('admin.complains.index') }}"
                        class="cp-btn cp-btn-outline"
                    >
                        <i class="fa-solid fa-arrow-left"></i>
                        Kembali ke Daftar
                    </a>
                </div>
            </form>

        </div>
    </section>

    {{-- DELETE ZONE --}}
    <section class="cp-panel cp-danger-panel">

        <div class="cp-panel-heading">
            <div class="cp-panel-heading-icon">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <div>
                <h2>Zona Penghapusan</h2>
                <p>Area tindakan permanen terhadap data pengaduan.</p>
            </div>
        </div>

        <div class="cp-panel-body">

            <p class="cp-danger-copy">
                Menghapus pengaduan akan menghilangkan data laporan dari sistem
                dan menghapus lampiran terkait jika tersedia. Tindakan ini
                bersifat permanen dan tidak dapat dibatalkan.
            </p>

            <form
                action="{{ route('admin.complains.destroy', $pengaduan) }}"
                method="POST"
                class="cp-delete-form"
                onsubmit="return confirm('Yakin ingin menghapus pengaduan ini? Data dan lampirannya akan dihapus permanen.');"
            >
                @csrf
                @method('DELETE')

                <button type="submit" class="cp-btn cp-btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    Hapus Pengaduan
                </button>
            </form>

        </div>
    </section>

</div>

@endsection