
@extends('layouts.main')

@section('title', 'Formulir Pengaduan - PT Jamkrida NTB Syariah')

@section('content')

<style>
.form-pengaduan-page {
    --fp-green: #087a4b;
    --fp-dark: #063d2a;
    --fp-deep: #03281d;
    --fp-gold: #d5a83a;
    --fp-light-gold: #f2d47c;
    background:
        radial-gradient(circle at 0 0, rgba(8,122,75,.07), transparent 28%),
        radial-gradient(circle at 100% 30%, rgba(213,168,58,.07), transparent 25%),
        #f5f8f6;
    padding: 40px 0 80px;
    color: #20332b;
}

.form-pengaduan-page * {
    box-sizing: border-box;
}

.fp-container {
    width: min(1100px, calc(100% - 36px));
    margin: 0 auto;
}

/* HERO */

.fp-hero {
    position: relative;
    overflow: hidden;
    padding: 43px 45px;
    background: linear-gradient(115deg, #03281d, #005b3d 55%, #087a4b);
    box-shadow: 0 18px 40px rgba(0,61,43,.15);
    color: white;
}

.fp-hero::before,
.fp-hero::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(242,212,124,.23);
    border-radius: 50%;
    pointer-events: none;
}

.fp-hero::before {
    width: 310px;
    height: 310px;
    right: -100px;
    top: -180px;
}

.fp-hero::after {
    width: 190px;
    height: 190px;
    right: 100px;
    bottom: -150px;
}

.fp-hero-content {
    position: relative;
    z-index: 1;
    max-width: 760px;
}

.fp-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    color: var(--fp-light-gold);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.fp-eyebrow::before {
    content: "";
    width: 25px;
    height: 2px;
    background: var(--fp-gold);
}

.fp-hero h1 {
    margin: 0;
    color: #fff;
    font-size: clamp(29px, 4vw, 43px);
    font-weight: 800;
    line-height: 1.2;
}

.fp-hero h1 span {
    color: var(--fp-light-gold);
}

.fp-hero p {
    max-width: 680px;
    margin: 15px 0 0;
    color: rgba(255,255,255,.79);
    font-size: 13px;
    line-height: 1.9;
}

.fp-breadcrumb {
    display: flex;
    flex-wrap: wrap;
    gap: 9px;
    align-items: center;
    margin: 18px 0 28px;
    color: #7b8981;
    font-size: 11px;
}

.fp-breadcrumb a {
    color: var(--fp-green);
    text-decoration: none;
}

.fp-breadcrumb a:hover {
    text-decoration: underline;
}

/* GRID */

.fp-layout {
    display: block;
    width: 100%;
    grid-template-columns: minmax(0, 1fr) 260px;
    gap: 24px;
    align-items: start;
}

.fp-main {
    width: 100%;
    min-width: 0;
}

/* ALERT */

.fp-alert {
    padding: 16px 19px;
    margin-bottom: 20px;
    border: 1px solid;
    font-size: 12px;
    line-height: 1.8;
    overflow-wrap: anywhere;
}

.fp-alert-success {
    background: #eaf7ef;
    color: #17663a;
    border-color: #b9e0c7;
}

.fp-alert-error {
    background: #fff0f0;
    color: #a12424;
    border-color: #f0c4c4;
}

.fp-ticket {
    display: block;
    margin-top: 8px;
    color: var(--fp-dark);
    font-size: 19px;
    font-weight: 800;
}

/* CARD */

.fp-card {
    overflow: hidden;
    margin-bottom: 22px;
    background: #fff;
    border: 1px solid #e1e9e4;
    box-shadow: 0 12px 35px rgba(0,50,35,.06);
}

.fp-card-header {
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 23px 25px;
    border-bottom: 1px solid #e8eeeb;
}

.fp-card-icon {
    display: grid;
    place-items: center;
    width: 45px;
    height: 45px;
    flex: 0 0 45px;
    background: #edf7f2;
    border: 1px solid #dcece4;
    color: var(--fp-green);
    font-size: 17px;
}

.fp-card-header h2 {
    margin: 0 0 4px;
    color: var(--fp-dark);
    font-size: 16px;
    font-weight: 800;
}

.fp-card-header p {
    margin: 0;
    color: #87948c;
    font-size: 10px;
    line-height: 1.7;
}

.fp-card-body {
    padding: 26px;
}

.fp-section-title {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-bottom: 13px;
    margin: 0 0 21px;
    border-bottom: 1px solid #e8eeeb;
    color: var(--fp-dark);
    font-size: 14px;
    font-weight: 800;
}

.fp-section-title i {
    color: var(--fp-gold);
}

.fp-field-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 20px;
    margin-bottom: 28px;
}

.fp-field {
    min-width: 0;
}

.fp-field-full {
    grid-column: 1 / -1;
}

.fp-field label {
    display: block;
    margin-bottom: 8px;
    color: #35483e;
    font-size: 12px;
    font-weight: 700;
}

.fp-required {
    color: #cf3434;
}

.fp-control {
    display: block;
    width: 100%;
    min-width: 0;
    padding: 12px 13px;
    border: 1px solid #dce5df;
    border-radius: 2px;
    outline: none;
    background: #fcfdfc;
    color: #263a31;
    font-family: inherit;
    font-size: 12px;
    transition: border-color .2s, box-shadow .2s;
}

.fp-control:focus {
    border-color: var(--fp-green);
    box-shadow: 0 0 0 3px rgba(8,122,75,.08);
}

.fp-control::placeholder {
    color: #a0aaa4;
}

.fp-control.is-invalid {
    border-color: #cf3434;
}

.fp-field textarea.fp-control {
    min-height: 165px;
    resize: vertical;
    line-height: 1.85;
}

.fp-hint {
    margin-top: 7px;
    color: #7a8980;
    font-size: 10px;
    line-height: 1.7;
}

.fp-error {
    margin-top: 6px;
    color: #c62828;
    font-size: 11px;
    line-height: 1.6;
}

/* UPLOAD */

.fp-upload-box {
    padding: 17px;
    background: #f8fbf9;
    border: 1px dashed #bfd3c7;
}

.fp-upload-top {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.fp-upload-icon {
    display: grid;
    place-items: center;
    width: 43px;
    height: 43px;
    flex: 0 0 43px;
    background: #eaf6ef;
    color: var(--fp-green);
    font-size: 17px;
}

.fp-upload-input {
    display: block;
    width: 100%;
    min-width: 0;
    color: #526359;
    font-family: inherit;
    font-size: 11px;
}

.fp-file-name {
    margin-top: 8px;
    color: var(--fp-green);
    font-size: 11px;
    overflow-wrap: anywhere;
}

/* CONSENT */

.fp-privacy {
    display: flex;
    align-items: flex-start;
    gap: 11px;
    padding: 17px;
    margin-top: 8px;
    background: #fffaf0;
    border: 1px solid #f0e0b0;
}

.fp-privacy input {
    width: 16px;
    height: 16px;
    flex: 0 0 16px;
    margin-top: 3px;
    accent-color: var(--fp-green);
    cursor: pointer;
}

.fp-privacy label {
    color: #665a3a;
    font-size: 11px;
    line-height: 1.85;
    cursor: pointer;
}

/* BUTTONS */

.fp-actions {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 13px;
    margin-top: 25px;
}

.fp-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    min-height: 44px;
    padding: 12px 19px;
    border: 1px solid transparent;
    border-radius: 2px;
    font-family: inherit;
    font-size: 11px;
    font-weight: 800;
    text-decoration: none;
    cursor: pointer;
    transition: background .2s, color .2s, border-color .2s;
}

.fp-button-back {
    background: #fff;
    border-color: #dce5df;
    color: #506158;
}

.fp-button-back:hover {
    border-color: var(--fp-green);
    color: var(--fp-green);
}

.fp-button-submit {
    background: var(--fp-green);
    color: #fff;
}

.fp-button-submit:hover {
    background: var(--fp-dark);
}

.fp-button-submit:disabled {
    opacity: .65;
    cursor: wait;
}

/* SIDEBAR */

.fp-sidebar {
    position: sticky;
    top: 100px;
    min-width: 0;
}

.fp-related {
    overflow: hidden;
    background: #fff;
    border: 1px solid #e1e8e4;
    box-shadow: 0 12px 32px rgba(0,50,35,.07);
}

.fp-related-header {
    position: relative;
    overflow: hidden;
    padding: 20px 18px;
    background: linear-gradient(135deg, #00633f, #087a4b);
    color: #fff;
}

.fp-related-header::after {
    content: "";
    position: absolute;
    width: 100px;
    height: 100px;
    right: -45px;
    top: -55px;
    border: 1px solid rgba(242,212,124,.25);
    border-radius: 50%;
}

.fp-related-header h3 {
    position: relative;
    z-index: 1;
    margin: 0;
    font-size: 14px;
}

.fp-related-header p {
    position: relative;
    z-index: 1;
    margin: 5px 0 0;
    color: rgba(255,255,255,.72);
    font-size: 10px;
}

.fp-related-list {
    padding: 6px 0;
}

.fp-related-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 13px 14px;
    border-bottom: 1px solid #edf1ef;
    color: #526158;
    font-size: 10px;
    font-weight: 700;
    text-decoration: none;
    transition: .2s;
}

.fp-related-item:last-child {
    border-bottom: 0;
}

.fp-related-item:hover,
.fp-related-item.active {
    background: #f4faf6;
    color: var(--fp-green);
}

.fp-related-item.active {
    border-left: 3px solid var(--fp-gold);
}

.fp-related-icon {
    display: grid;
    place-items: center;
    width: 30px;
    height: 30px;
    flex: 0 0 30px;
    background: #edf7f2;
    color: var(--fp-green);
}

.fp-related-item > span:nth-child(2) {
    flex: 1;
    line-height: 1.6;
}

.fp-related-item > i:last-child {
    color: #a1aca7;
    font-size: 9px;
}

.fp-side-info {
    margin-top: 17px;
    padding: 20px;
    background: var(--fp-dark);
    color: #fff;
}

.fp-side-info > i {
    color: var(--fp-light-gold);
    font-size: 21px;
}

.fp-side-info h4 {
    margin: 12px 0 7px;
    font-size: 13px;
}

.fp-side-info p {
    margin: 0;
    color: rgba(255,255,255,.72);
    font-size: 10px;
    line-height: 1.9;
}

/* SECURITY */

.fp-security {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-top: 19px;
    padding: 17px 19px;
    background: #063d2a;
    color: rgba(255,255,255,.82);
    font-size: 11px;
    line-height: 1.85;
}

.fp-security > i {
    margin-top: 3px;
    color: var(--fp-light-gold);
}

.fp-security strong {
    color: #fff;
}

/* RESPONSIVE */

@media (max-width: 900px) {
    .fp-layout {
        grid-template-columns: minmax(0, 1fr);
    }

    .fp-sidebar {
        position: static;
    }
}

@media (max-width: 600px) {
    .form-pengaduan-page {
        padding: 25px 0 50px;
    }

    .fp-container {
        width: calc(100% - 24px);
    }

    .fp-hero {
        padding: 30px 23px;
    }

    .fp-hero h1 {
        font-size: 30px;
    }

    .fp-hero p {
        font-size: 12px;
    }

    .fp-card-header {
        padding: 18px;
    }

    .fp-card-body {
        padding: 19px;
    }

    .fp-field-grid {
        grid-template-columns: minmax(0, 1fr);
        gap: 17px;
    }

    .fp-field-full {
        grid-column: auto;
    }

    .fp-actions {
        align-items: stretch;
        flex-direction: column-reverse;
    }

    .fp-button {
        width: 100%;
    }

    .fp-upload-top {
        flex-direction: column;
    }
}
</style>

<div class="form-pengaduan-page">
    <div class="fp-container">

        <section class="fp-hero">
            <div class="fp-hero-content">
                <div class="fp-eyebrow">Whistle-Blowing System</div>

                <h1>Formulir <span>Pengaduan</span></h1>

                <p>
                    Sampaikan laporan mengenai dugaan pelanggaran sebagai bagian
                    dari komitmen PT. Jamkrida NTB Syariah dalam menjaga integritas,
                    transparansi, dan tata kelola perusahaan yang baik.
                </p>
            </div>
        </section>

        <nav class="fp-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Beranda</a>
            <i class="fa-solid fa-chevron-right"></i>
            <a href="{{ url('/menu/pengaduan/whistle_blowing') }}">WBS</a>
            <i class="fa-solid fa-chevron-right"></i>
            <span>Formulir Pengaduan</span>
        </nav>

        <div class="fp-layout">

            <main class="fp-main">

                @if (session('success'))
                    <div class="fp-alert fp-alert-success" role="status">
                        <strong>
                            <i class="fa-solid fa-circle-check"></i>
                            {{ session('success') }}
                        </strong>

                        @if (session('ticket_number'))
                            <span class="fp-ticket">
                                Nomor Tiket: {{ session('ticket_number') }}
                            </span>
                            <p>Simpan nomor tiket ini untuk referensi laporan Anda.</p>
                        @endif
                    </div>
                @endif

                @if ($errors->any())
                    <div class="fp-alert fp-alert-error" role="alert">
                        <strong>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            Mohon periksa kembali formulir Anda.
                        </strong>
                        <ul style="margin:8px 0 0;padding-left:20px">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form
                    action="{{ route('pengaduan.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    id="formPengaduan"
                >
                    @csrf

                    <section class="fp-card">
                        <div class="fp-card-header">
                            <div class="fp-card-icon">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                            <div>
                                <h2>Identitas Pelapor</h2>
                                <p>Isi informasi yang diperlukan untuk komunikasi dan verifikasi.</p>
                            </div>
                        </div>

                        <div class="fp-card-body">
                            <h3 class="fp-section-title">
                                <i class="fa-solid fa-id-card"></i>
                                Informasi Pribadi
                            </h3>

                            <div class="fp-field-grid">
                                <div class="fp-field">
                                    <label for="name">
                                        Nama Pelapor <span class="fp-required">*</span>
                                    </label>
                                    <input
                                        class="fp-control @error('name') is-invalid @enderror"
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        maxlength="150"
                                        autocomplete="name"
                                        placeholder="Masukkan nama lengkap"
                                        required
                                    >
                                    @error('name')
                                        <div class="fp-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="fp-field">
                                    <label for="contact">
                                        Nomor Kontak <span class="fp-required">*</span>
                                    </label>
                                    <input
                                        class="fp-control @error('contact') is-invalid @enderror"
                                        type="tel"
                                        id="contact"
                                        name="contact"
                                        value="{{ old('contact') }}"
                                        maxlength="30"
                                        autocomplete="tel"
                                        placeholder="Contoh: 081234567890"
                                        required
                                    >
                                    @error('contact')
                                        <div class="fp-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="fp-field fp-field-full">
                                    <label for="email">Alamat Email (Opsional)</label>
                                    <input
                                        class="fp-control @error('email') is-invalid @enderror"
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        maxlength="150"
                                        autocomplete="email"
                                        placeholder="nama@email.com"
                                    >
                                    @error('email')
                                        <div class="fp-error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <h3 class="fp-section-title">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                                Informasi Pengaduan
                            </h3>

                            <div class="fp-field-grid">
                                <div class="fp-field">
                                    <label for="category">
                                        Kategori Pengaduan <span class="fp-required">*</span>
                                    </label>
                                    <select
                                        class="fp-control @error('category') is-invalid @enderror"
                                        id="category"
                                        name="category"
                                        required
                                    >
                                        <option value="">Pilih kategori pengaduan</option>
                                        <option value="Dugaan Korupsi" @selected(old('category') === 'Dugaan Korupsi')>Dugaan Korupsi</option>
                                        <option value="Pelanggaran Kode Etik" @selected(old('category') === 'Pelanggaran Kode Etik')>Pelanggaran Kode Etik</option>
                                        <option value="Penyalahgunaan Wewenang" @selected(old('category') === 'Penyalahgunaan Wewenang')>Penyalahgunaan Wewenang</option>
                                        <option value="Benturan Kepentingan" @selected(old('category') === 'Benturan Kepentingan')>Benturan Kepentingan</option>
                                        <option value="Kecurangan atau Fraud" @selected(old('category') === 'Kecurangan atau Fraud')>Kecurangan atau Fraud</option>
                                        <option value="Pelanggaran Prosedur" @selected(old('category') === 'Pelanggaran Prosedur')>Pelanggaran Prosedur</option>
                                        <option value="Lainnya" @selected(old('category') === 'Lainnya')>Lainnya</option>
                                    </select>
                                    @error('category')
                                        <div class="fp-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="fp-field">
                                    <label for="subject">
                                        Subjek Pengaduan <span class="fp-required">*</span>
                                    </label>
                                    <input
                                        class="fp-control @error('subject') is-invalid @enderror"
                                        type="text"
                                        id="subject"
                                        name="subject"
                                        value="{{ old('subject') }}"
                                        maxlength="200"
                                        placeholder="Ringkasan singkat pengaduan"
                                        required
                                    >
                                    @error('subject')
                                        <div class="fp-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="fp-field fp-field-full">
                                    <label for="chronology">
                                        Kronologi Kejadian <span class="fp-required">*</span>
                                    </label>
                                    <textarea
                                        class="fp-control @error('chronology') is-invalid @enderror"
                                        id="chronology"
                                        name="chronology"
                                        maxlength="10000"
                                        placeholder="Jelaskan kejadian, waktu, lokasi, pihak yang terlibat jika diketahui, serta informasi pendukung lainnya..."
                                        required
                                    >{{ old('chronology') }}</textarea>
                                    <div class="fp-hint">
                                        Maksimal 10.000 karakter. Sampaikan informasi secara jelas berdasarkan fakta yang diketahui.
                                    </div>
                                    @error('chronology')
                                        <div class="fp-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="fp-field fp-field-full">
                                    <label for="attachment">Lampiran Bukti (Opsional)</label>

                                    <div class="fp-upload-box">
                                        <div class="fp-upload-top">
                                            <div class="fp-upload-icon">
                                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                            </div>

                                            <div style="flex:1;min-width:0">
                                                <input
                                                    class="fp-upload-input @error('attachment') is-invalid @enderror"
                                                    type="file"
                                                    id="attachment"
                                                    name="attachment"
                                                    accept=".pdf,.jpg,.jpeg,.png"
                                                >

                                                <div class="fp-hint">
                                                    Format PDF, JPG, JPEG, atau PNG. Ukuran maksimal 5 MB.
                                                </div>

                                                <div class="fp-file-name" id="fpFileName" aria-live="polite"></div>
                                            </div>
                                        </div>
                                    </div>

                                    @error('attachment')
                                        <div class="fp-error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="fp-privacy">
                                <input
                                    type="checkbox"
                                    id="privacy_consent"
                                    name="privacy_consent"
                                    value="1"
                                    required
                                    @checked(old('privacy_consent'))
                                >

                                <label for="privacy_consent">
                                    Saya menyatakan bahwa informasi yang disampaikan
                                    berdasarkan pengetahuan saya dan menyetujui pemrosesan
                                    data untuk keperluan verifikasi serta tindak lanjut
                                    pengaduan sesuai kebijakan privasi yang berlaku.
                                    <span class="fp-required">*</span>
                                </label>
                            </div>

                            @error('privacy_consent')
                                <div class="fp-error">{{ $message }}</div>
                            @enderror

                            <div class="fp-actions">
                                <a
                                    href="{{ url('/menu/pengaduan/whistle_blowing') }}"
                                    class="fp-button fp-button-back"
                                >
                                    <i class="fa-solid fa-arrow-left"></i>
                                    Kembali ke WBS
                                </a>

                                <button
                                    type="submit"
                                    class="fp-button fp-button-submit"
                                    id="fpSubmit"
                                >
                                    <i class="fa-solid fa-paper-plane"></i>
                                    Kirim Pengaduan
                                </button>
                            </div>
                        </div>
                    </section>
                </form>

                <div class="fp-security">
                    <i class="fa-solid fa-shield-halved"></i>
                    <div>
                        <strong>Jaga Kerahasiaan Informasi</strong><br>
                        Sampaikan informasi yang relevan dan hindari mengunggah
                        kata sandi atau data pribadi sensitif yang tidak diperlukan.
                    </div>
                </div>

            </main>

<!-- sidebar -->

            <!-- <aside class="fp-sidebar">
                <div class="fp-related">
                    <div class="fp-related-header">
                        <h3>Link Terkait</h3>
                        <p>Informasi layanan pengaduan</p>
                    </div>

                    <div class="fp-related-list">
                        <a
                            href="{{ url('/menu/pengaduan/whistle_blowing') }}"
                            class="fp-related-item"
                        >
                            <span class="fp-related-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </span>
                            <span>Whistle-Blowing System</span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>

                        <a
                            href="{{ route('pengaduan.form') }}"
                            class="fp-related-item active"
                            aria-current="page"
                        >
                            <span class="fp-related-icon">
                                <i class="fa-solid fa-file-pen"></i>
                            </span>
                            <span>Formulir Pengaduan</span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="fp-side-info">
                    <i class="fa-solid fa-shield-heart"></i>
                    <h4>Jaga Integritas</h4>
                    <p>
                        Bersama membangun lingkungan perusahaan yang transparan,
                        berintegritas, dan bertanggung jawab.
                    </p>
                </div>
            </aside> -->

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formPengaduan');
    const attachment = document.getElementById('attachment');
    const fileName = document.getElementById('fpFileName');
    const submitButton = document.getElementById('fpSubmit');

    if (attachment && fileName) {
        attachment.addEventListener('change', function () {
            const file = this.files && this.files[0];

            fileName.textContent = '';

            if (!file) return;

            const allowedTypes = [
                'application/pdf',
                'image/jpeg',
                'image/png'
            ];

            if (!allowedTypes.includes(file.type)) {
                alert('Format file harus PDF, JPG, JPEG, atau PNG.');
                this.value = '';
                return;
            }

            if (file.size > 5 * 1024 * 1024) {
                alert('Ukuran lampiran maksimal 5 MB.');
                this.value = '';
                return;
            }

            fileName.textContent = 'File dipilih: ' + file.name;
        });
    }

    if (form && submitButton) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                form.reportValidity();
                return;
            }

            if (attachment && attachment.files.length > 0) {
                const file = attachment.files[0];

                if (file.size > 5 * 1024 * 1024) {
                    event.preventDefault();
                    alert('Ukuran lampiran maksimal 5 MB.');
                    return;
                }
            }

            submitButton.disabled = true;
            submitButton.innerHTML =
                '<i class="fa-solid fa-spinner fa-spin"></i> Mengirim...';
        });
    }
});
</script>

@endsection