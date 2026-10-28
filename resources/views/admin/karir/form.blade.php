
@extends('admin.layouts.app')

@section('title', isset($karir) ? 'Edit Lowongan Karir' : 'Tambah Lowongan Karir')

@section('content')
<style>
    .kf-page {
        --kf-green: #087a4b;
        --kf-dark: #063d2a;
        --kf-gold: #d5a83a;
        color: #24372d;
    }

    .kf-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
        margin-bottom: 24px;
    }

    .kf-heading h1 {
        margin: 0 0 7px;
        font-size: 25px;
        font-weight: 750;
        color: var(--kf-dark);
    }

    .kf-heading p {
        margin: 0;
        font-size: 13px;
        color: #78847d;
    }

    .kf-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 15px;
        border: 1px solid #e1e9e3;
        background: #fff;
        border-radius: 6px;
        text-decoration: none;
        color: #365444;
        font-size: 12px;
        font-weight: 600;
    }

    .kf-card {
        background: #fff;
        border: 1px solid #e6ece7;
        border-radius: 9px;
        margin-bottom: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(20, 50, 35, .035);
    }

    .kf-card-head {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 18px 22px;
        border-bottom: 1px solid #edf1ed;
        background: #fcfdfc;
    }

    .kf-card-icon {
        width: 38px;
        height: 38px;
        border-radius: 7px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--kf-green);
        background: #eaf6ee;
        font-size: 15px;
        flex-shrink: 0;
    }

    .kf-card-head h3 {
        margin: 0 0 4px;
        font-size: 14px;
        color: var(--kf-dark);
        font-weight: 700;
    }

    .kf-card-head p {
        margin: 0;
        color: #849087;
        font-size: 11px;
    }

    .kf-card-body {
        padding: 23px;
    }

    .kf-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
    }

    .kf-field {
        min-width: 0;
    }

    .kf-full {
        grid-column: 1 / -1;
    }

    .kf-field label {
        display: block;
        margin-bottom: 8px;
        font-size: 12px;
        font-weight: 650;
        color: #354c3e;
    }

    .kf-required {
        color: #d63e3e;
    }

    .kf-field input,
    .kf-field select,
    .kf-field textarea {
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #dfe7e1;
        background: #fff;
        color: #263c30;
        border-radius: 5px;
        padding: 11px 12px;
        font-family: inherit;
        font-size: 12px;
        outline: none;
        transition: border-color .2s, box-shadow .2s;
    }

    .kf-field input:focus,
    .kf-field select:focus,
    .kf-field textarea:focus {
        border-color: var(--kf-green);
        box-shadow: 0 0 0 3px rgba(8, 122, 75, .08);
    }

    .kf-field textarea {
        min-height: 115px;
        resize: vertical;
        line-height: 1.7;
    }

    .kf-hint {
        margin-top: 7px;
        color: #8a968e;
        font-size: 10px;
        line-height: 1.6;
    }

    .kf-error {
        display: block;
        margin-top: 6px;
        color: #c62828;
        font-size: 11px;
    }

    .kf-file-current {
        display: block;
        margin-top: 10px;
        padding: 10px 12px;
        border: 1px solid #e4eee6;
        background: #f7fbf8;
        color: #087a4b;
        border-radius: 5px;
        font-size: 11px;
        overflow-wrap: anywhere;
    }

    .kf-file-current a {
        color: inherit;
        font-weight: 650;
    }

    .kf-banner-preview {
        width: 100%;
        max-width: 360px;
        max-height: 190px;
        object-fit: cover;
        display: block;
        border-radius: 5px;
        border: 1px solid #e5eae6;
        margin-top: 12px;
    }

    .kf-note {
        display: flex;
        gap: 10px;
        padding: 14px 16px;
        background: #fff9e9;
        border: 1px solid #f0e2b8;
        border-left: 3px solid var(--kf-gold);
        border-radius: 5px;
        color: #6c5723;
        font-size: 11px;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .kf-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        flex-wrap: wrap;
        padding: 18px 0 28px;
    }

    .kf-btn {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
        padding: 12px 19px;
        border: 0;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        font-family: inherit;
        font-size: 12px;
        font-weight: 650;
    }

    .kf-btn-cancel {
        color: #4d5e53;
        background: #edf1ee;
    }

    .kf-btn-save {
        color: #fff;
        background: var(--kf-green);
    }

    .kf-btn-save:hover {
        background: var(--kf-dark);
    }

    @media (max-width: 650px) {
        .kf-grid {
            grid-template-columns: 1fr;
        }

        .kf-full {
            grid-column: auto;
        }

        .kf-card-body {
            padding: 17px;
        }

        .kf-card-head {
            padding: 16px;
        }

        .kf-heading h1 {
            font-size: 22px;
        }

        .kf-back {
            width: 100%;
            justify-content: center;
            box-sizing: border-box;
        }

        .kf-actions .kf-btn {
            flex: 1;
        }
    }
</style>

@php
    $isEdit = isset($karir);
@endphp

<div class="kf-page">

    <div class="kf-heading">
        <div>
            <h1>{{ $isEdit ? 'Edit Lowongan Karir' : 'Tambah Lowongan Karir' }}</h1>
            <p>
                {{ $isEdit
                    ? 'Perbarui informasi lowongan pekerjaan perusahaan.'
                    : 'Lengkapi informasi untuk membuat pengumuman lowongan pekerjaan.' }}
            </p>
        </div>

        <a href="{{ route('admin.karir.index') }}" class="kf-back">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Daftar
        </a>
    </div>

    @if ($errors->any())
        <div class="kf-note" style="background:#fff0f0;border-color:#f1cccc;color:#a52828;">
            <i class="fa-solid fa-circle-exclamation"></i>
            <div>
                <strong>Periksa kembali data yang diisi.</strong>
                Ada beberapa kolom yang belum sesuai ketentuan.
            </div>
        </div>
    @endif

    <div class="kf-note">
        <i class="fa-solid fa-circle-info"></i>
        <div>
            <strong>Informasi penting:</strong>
            Lowongan dengan status Draft tidak dimaksudkan untuk ditampilkan ke publik.
            Periksa kembali informasi dan batas lamaran sebelum memublikasikan pengumuman.
        </div>
    </div>

    <form
        action="{{ $isEdit ? route('admin.karir.update', $karir) : route('admin.karir.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        @if ($isEdit)
            @method('PUT')
        @endif

        {{-- INFORMASI UTAMA --}}
        <div class="kf-card">
            <div class="kf-card-head">
                <div class="kf-card-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <div>
                    <h3>Informasi Lowongan</h3>
                    <p>Identitas dan detail posisi pekerjaan.</p>
                </div>
            </div>

            <div class="kf-card-body">
                <div class="kf-grid">

                    <div class="kf-field kf-full">
                        <label>Nama Posisi <span class="kf-required">*</span></label>
                        <input type="text" name="title"
                            value="{{ old('title', $karir->title ?? '') }}"
                            placeholder="Contoh: Staf Administrasi"
                            required>
                        @error('title') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field">
                        <label>Divisi / Departemen</label>
                        <input type="text" name="department"
                            value="{{ old('department', $karir->department ?? '') }}"
                            placeholder="Contoh: Administrasi">
                        @error('department') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <!-- <div class="kf-field">
                        <label>Lokasi Penempatan</label>
                        <input type="text" name="location"
                            value="{{ old('location', $karir->location ?? '') }}"
                            placeholder="Contoh: Mataram, NTB">
                        @error('location') <span class="kf-error">{{ $message }}</span> @enderror
                    </div> -->

                    <div class="kf-field">
                        <label>Tipe Pekerjaan</label>
                        <select name="employment_type">
                            <option value="">Pilih tipe pekerjaan</option>
                            @foreach (['Full-time', 'Part-time', 'Kontrak', 'Magang'] as $type)
                                <option value="{{ $type }}"
                                    @selected(old('employment_type', $karir->employment_type ?? '') === $type)>
                                    {{ $type }}
                                </option>
                            @endforeach
                        </select>
                        @error('employment_type') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field">
                        <label>Jumlah Posisi <span class="kf-required">*</span></label>
                        <input type="number" name="vacancy_count" min="1"
                            value="{{ old('vacancy_count', $karir->vacancy_count ?? 1) }}"
                            required>
                        @error('vacancy_count') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field">
                        <label>Tanggal Publikasi</label>
                        <input type="date" name="published_at"
                            value="{{ old('published_at', isset($karir) && $karir->published_at ? $karir->published_at->format('Y-m-d') : '') }}">
                        @error('published_at') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field">
                        <label>Batas Akhir Lamaran</label>
                        <input type="date" name="deadline"
                            value="{{ old('deadline', isset($karir) && $karir->deadline ? $karir->deadline->format('Y-m-d') : '') }}">
                        @error('deadline') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field">
                        <label>Status Lowongan <span class="kf-required">*</span></label>
                        <select name="status" required>
                            @foreach ([
                                'draft' => 'Draft',
                                'published' => 'Dipublikasikan',
                                'archived' => 'Diarsipkan',
                            ] as $value => $label)
                                <option value="{{ $value }}"
                                    @selected(old('status', $karir->status ?? 'draft') === $value)>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                        @error('status') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                </div>
            </div>
        </div>

        {{-- GAMBAR DAN PENGUMUMAN --}}
        <div class="kf-card">
            <div class="kf-card-head">
                <div class="kf-card-icon">
                    <i class="fa-solid fa-images"></i>
                </div>
                <div>
                    <h3>Banner dan Dokumen</h3>
                    <p>Gambar utama serta berkas pengumuman resmi.</p>
                </div>
            </div>

            <div class="kf-card-body">
                <div class="kf-grid">

                    <div class="kf-field">
                        <label>Banner Lowongan</label>
                        <input type="file" name="banner" accept=".jpg,.jpeg,.png,.webp,image/*">
                        <div class="kf-hint">Format JPG, JPEG, PNG atau WEBP. Maksimal 4 MB.</div>

                        @if ($isEdit && $karir->banner)
                            <div class="kf-file-current">
                                Banner saat ini
                                <img
                                    src="{{ asset('storage/' . $karir->banner) }}"
                                    alt="Banner lowongan"
                                    class="kf-banner-preview">
                            </div>
                        @endif

                        @error('banner') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field">
                        <label>PDF Pengumuman Resmi</label>
                        <input type="file" name="announcement_pdf" accept=".pdf,application/pdf">
                        <div class="kf-hint">Format PDF, maksimal 5 MB. Tidak wajib diisi.</div>

                        @if ($isEdit && $karir->announcement_pdf)
                            <div class="kf-file-current">
                                <i class="fa-solid fa-file-pdf"></i>
                                <a href="{{ asset('storage/' . $karir->announcement_pdf) }}"
                                   target="_blank" rel="noopener">
                                    Lihat PDF yang tersimpan
                                </a>
                            </div>
                        @endif

                        @error('announcement_pdf') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                </div>
            </div>
        </div>

        {{-- DESKRIPSI --}}
        <!-- <div class="kf-card">
            <div class="kf-card-head">
                <div class="kf-card-icon">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <div>
                    <h3>Deskripsi Pekerjaan</h3>
                    <p>Jelaskan posisi, tanggung jawab, dan kualifikasi kandidat.</p>
                </div>
            </div>

            <div class="kf-card-body">
                <div class="kf-grid">

                    <div class="kf-field kf-full">
                        <label>Deskripsi Lowongan</label>
                        <textarea name="description"
                            placeholder="Jelaskan gambaran umum posisi dan tujuan pekerjaan...">{{ old('description', $karir->description ?? '') }}</textarea>
                        @error('description') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field kf-full">
                        <label>Tanggung Jawab Pekerjaan</label>
                        <textarea name="responsibilities"
                            placeholder="Tuliskan tanggung jawab pekerjaan, satu poin per baris...">{{ old('responsibilities', $karir->responsibilities ?? '') }}</textarea>
                        @error('responsibilities') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field kf-full">
                        <label>Kualifikasi / Persyaratan</label>
                        <textarea name="qualifications"
                            placeholder="Tuliskan pendidikan, pengalaman, keterampilan, dan persyaratan lain...">{{ old('qualifications', $karir->qualifications ?? '') }}</textarea>
                        @error('qualifications') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field kf-full">
                        <label>Dokumen yang Wajib Disiapkan</label>
                        <textarea name="required_documents"
                            placeholder="Contoh: CV, surat lamaran, ijazah, transkrip nilai...">{{ old('required_documents', $karir->required_documents ?? '') }}</textarea>
                        @error('required_documents') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                </div>
            </div>
        </div> -->

        {{-- CARA MELAMAR --}}
        <div class="kf-card">
            <div class="kf-card-head">
                <div class="kf-card-icon">
                    <i class="fa-solid fa-paper-plane"></i>
                </div>
                <div>
                    <h3>Informasi Lamaran</h3>
                    <p>Petunjuk bagi calon pelamar untuk mengirimkan berkas.</p>
                </div>
            </div>

            <div class="kf-card-body">
                <div class="kf-grid">

                    <div class="kf-field">
                        <label>Metode Lamaran</label>
                        <select name="application_method">
                            <option value="external"
                                @selected(old('application_method', $karir->application_method ?? 'external') === 'external')>
                                Email / Tautan Eksternal
                            </option>
                        </select>
                        <div class="kf-hint">Metode ini mengikuti validasi controller yang sudah dibuat.</div>
                        @error('application_method') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="kf-field">
                        <label>Email Tujuan</label>
                        <input type="email" name="application_email"
                            value="{{ old('application_email', $karir->application_email ?? '') }}"
                            placeholder="Contoh: rekrutmen@perusahaan.co.id">
                        @error('application_email') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                    <!-- <div class="kf-field kf-full">
                        <label>Tautan Pendaftaran</label>
                        <input type="url" name="application_url"
                            value="{{ old('application_url', $karir->application_url ?? '') }}"
                            placeholder="https://...">
                        @error('application_url') <span class="kf-error">{{ $message }}</span> @enderror
                    </div> -->

                    <div class="kf-field kf-full">
                        <label>Persyaratan Pelamar</label>
                        <textarea name="application_instructions"
                            placeholder="Jelaskan cara melamar, format subjek email, nama berkas, dan informasi penting lainnya...">{{ old('application_instructions', $karir->application_instructions ?? '') }}</textarea>
                        @error('application_instructions') <span class="kf-error">{{ $message }}</span> @enderror
                    </div>

                </div>
            </div>
        </div>

        <div class="kf-actions">
            <a href="{{ route('admin.karir.index') }}" class="kf-btn kf-btn-cancel">
                Batal
            </a>

            <button type="submit" class="kf-btn kf-btn-save">
                <i class="fa-solid fa-floppy-disk"></i>
                {{ $isEdit ? 'Simpan Perubahan' : 'Simpan Lowongan' }}
            </button>
        </div>

    </form>
</div>
@endsection
