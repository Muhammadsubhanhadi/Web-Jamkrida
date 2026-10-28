@extends('admin.layouts.app')

@section('title', 'GCG')

@section('content')

<style>
    .gcg-admin-page {
        padding: 10px 5px 30px;
    }

    .gcg-admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .gcg-admin-title {
        margin: 0;
        color: #173b2d;
        font-size: 28px;
        font-weight: 700;
    }

    .gcg-admin-subtitle {
        margin: 7px 0 0;
        color: #7a8983;
        font-size: 14px;
    }

    .gcg-admin-add {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 12px 18px;
        background: #087a4b;
        color: #ffffff;
        text-decoration: none;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        transition: .25s ease;
        white-space: nowrap;
    }

    .gcg-admin-add:hover {
        background: #065d39;
        transform: translateY(-2px);
        color: #ffffff;
    }

    .gcg-admin-alert {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 13px 16px;
        margin-bottom: 22px;
        background: #eaf7f0;
        border-left: 4px solid #087a4b;
        color: #087a4b;
        font-size: 14px;
        border-radius: 6px;
    }

    .gcg-admin-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 18px;
    }

    .gcg-admin-card {
        position: relative;
        overflow: hidden;
        background: #ffffff;
        border: 1px solid #e5ebe8;
        border-radius: 12px;
        padding: 22px;
        transition: .25s ease;
    }

    .gcg-admin-card:hover {
        border-color: rgba(8, 122, 75, .35);
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, .07);
    }

    .gcg-admin-card::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 3px;
        background: #087a4b;
    }

    .gcg-admin-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
    }

    .gcg-admin-file-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eaf7f0;
        color: #087a4b;
        border-radius: 9px;
        font-size: 22px;
    }

    .gcg-admin-year {
        display: inline-flex;
        align-items: center;
        padding: 7px 12px;
        background: #f8f2df;
        color: #a27a21;
        border: 1px solid #ead9a9;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 700;
    }

    .gcg-admin-type {
        display: block;
        margin-bottom: 7px;
        color: #a27a21;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.5px;
    }

    .gcg-admin-card h3 {
        margin: 0 0 8px;
        color: #173b2d;
        font-size: 19px;
        font-weight: 700;
    }

    .gcg-admin-description {
        min-height: 45px;
        margin: 0;
        color: #7a8983;
        font-size: 13px;
        line-height: 1.7;
    }

    .gcg-admin-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        margin-top: 20px;
        padding-top: 17px;
        border-top: 1px solid #edf1ef;
    }

    .gcg-admin-pdf {
        display: flex;
        align-items: center;
        gap: 7px;
        color: #7a8983;
        font-size: 12px;
        font-weight: 600;
    }

    .gcg-admin-actions {
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .gcg-admin-edit,
    .gcg-admin-delete {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        min-height: 36px;
        padding: 8px 11px;
        border-radius: 7px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        transition: .2s ease;
    }

    .gcg-admin-edit {
        background: #eaf7f0;
        color: #087a4b;
        border: 1px solid #d7ede2;
    }

    .gcg-admin-edit:hover {
        background: #087a4b;
        color: #ffffff;
    }

    .gcg-admin-delete {
        background: #fff0f0;
        color: #c0392b;
        border: 1px solid #f1d4d1;
    }

    .gcg-admin-delete:hover {
        background: #c0392b;
        color: #ffffff;
    }

    .gcg-admin-empty {
        grid-column: 1 / -1;
        text-align: center;
        padding: 55px 25px;
        background: #ffffff;
        border: 1px dashed #d8e1dc;
        border-radius: 12px;
    }

    .gcg-admin-empty i {
        margin-bottom: 15px;
        color: #087a4b;
        font-size: 38px;
    }

    .gcg-admin-empty h3 {
        margin: 0 0 7px;
        color: #173b2d;
        font-size: 18px;
    }

    .gcg-admin-empty p {
        margin: 0;
        color: #89968f;
        font-size: 13px;
    }

    @media (max-width: 900px) {
        .gcg-admin-list {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 650px) {
        .gcg-admin-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .gcg-admin-add {
            width: 100%;
            justify-content: center;
        }

        .gcg-admin-title {
            font-size: 24px;
        }
    }

    @media (max-width: 450px) {
        .gcg-admin-card {
            padding: 18px;
        }

        .gcg-admin-footer {
            align-items: flex-start;
            flex-direction: column;
        }

        .gcg-admin-actions {
            width: 100%;
        }

        .gcg-admin-edit,
        .gcg-admin-delete {
            flex: 1;
        }
    }
</style>

<div class="gcg-admin-page">

    <div class="gcg-admin-header">

        <div>
            <h1 class="gcg-admin-title">
                GCG
            </h1>

            <p class="gcg-admin-subtitle">
                Kelola dokumen Good Corporate Governance perusahaan.
            </p>
        </div>

        <a href="{{ route('admin.gcg.create') }}"
           class="gcg-admin-add">

            <i class="fa-solid fa-plus"></i>

            Tambah GCG

        </a>

    </div>

    @if(session('success'))

        <div class="gcg-admin-alert">

            <i class="fa-solid fa-circle-check"></i>

            {{ session('success') }}

        </div>

    @endif

    <div class="gcg-admin-list">

        @forelse($gcgs as $gcg)

            <div class="gcg-admin-card">

                <div class="gcg-admin-card-top">

                    <div class="gcg-admin-file-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>

                    <span class="gcg-admin-year">
                        Tahun {{ $gcg->year }}
                    </span>

                </div>

                <span class="gcg-admin-type">
                    GOOD CORPORATE GOVERNANCE
                </span>

                <h3>
                    {{ $gcg->title }}
                </h3>

                <p class="gcg-admin-description">

                    @if($gcg->description)

                        {{ $gcg->description }}

                    @else

                        Tidak ada deskripsi untuk dokumen GCG ini.

                    @endif

                </p>

                <div class="gcg-admin-footer">

                    <div class="gcg-admin-pdf">
                        <i class="fa-regular fa-file-lines"></i>
                        PDF
                    </div>

                    <div class="gcg-admin-actions">

                        <a href="{{ route('admin.gcg.edit', $gcg->id) }}"
                           class="gcg-admin-edit">

                            <i class="fa-solid fa-pen"></i>

                            Edit

                        </a>

                        <form
                            action="{{ route('admin.gcg.destroy', $gcg->id) }}"
                            method="POST"
                            style="margin: 0;"
                            onsubmit="return confirm('Yakin ingin menghapus GCG ini?')"
                        >

                            @csrf

                            @method('DELETE')

                            <button type="submit"
                                    class="gcg-admin-delete">

                                <i class="fa-solid fa-trash"></i>

                                Hapus

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @empty

            <div class="gcg-admin-empty">

                <i class="fa-regular fa-file-lines"></i>

                <h3>
                    Belum Ada GCG
                </h3>

                <p>
                    Silakan tambahkan dokumen GCG melalui tombol
                    "Tambah GCG".
                </p>

            </div>

        @endforelse

    </div>

</div>

@endsection