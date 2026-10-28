@extends('admin.layouts.app')

@section('title', 'Daftar Agen')

@section('content')

<style>
    /* =========================================================
       DAFTAR AGEN - ADMIN
    ========================================================= */

    .agen-page {
        padding: 30px;
    }

    .agen-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .agen-heading {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .agen-heading-icon {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(
            135deg,
            #087a4b,
            #063d2a
        );
        color: #fff;
        font-size: 21px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(8, 122, 75, .18);
    }

    .agen-heading h1 {
        margin: 0;
        color: #063d2a;
        font-size: 26px;
        font-weight: 700;
    }

    .agen-heading p {
        margin: 5px 0 0;
        color: #7a7a7a;
        font-size: 14px;
    }

    /* =========================================================
       BUTTON TAMBAH
    ========================================================= */

    .btn-add-agen {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 12px 18px;
        background: linear-gradient(
            135deg,
            #087a4b,
            #063d2a
        );
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        border-radius: 7px;
        box-shadow: 0 7px 18px rgba(8, 122, 75, .18);
        transition: all .25s ease;
    }

    .btn-add-agen:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(8, 122, 75, .25);
    }

    /* =========================================================
       ALERT
    ========================================================= */

    .success-alert {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 14px 17px;
        margin-bottom: 20px;
        background: #edf9f2;
        border-left: 4px solid #087a4b;
        color: #087a4b;
        font-size: 14px;
    }

    /* =========================================================
       TABLE CARD
    ========================================================= */

    .agen-card {
        background: #fff;
        border: 1px solid #edf0ed;
        box-shadow: 0 8px 30px rgba(0, 0, 0, .06);
        border-radius: 10px;
        overflow: hidden;
    }

    .agen-card-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 22px;
        border-bottom: 1px solid #edf0ed;
    }

    .agen-card-title {
        display: flex;
        align-items: center;
        gap: 9px;
        color: #063d2a;
        font-size: 15px;
        font-weight: 700;
    }

    .agen-card-title i {
        color: #d5a83a;
    }

    .agen-count {
        font-size: 13px;
        color: #777;
    }

    .agen-count strong {
        color: #087a4b;
    }

    /* =========================================================
       TABLE
    ========================================================= */

    .table-wrapper {
        overflow-x: auto;
    }

    .agen-table {
        width: 100%;
        border-collapse: collapse;
    }

    .agen-table thead th {
        padding: 15px 20px;
        background: #063d2a;
        color: #fff;
        text-align: left;
        font-size: 13px;
        font-weight: 600;
        white-space: nowrap;
    }

    .agen-table thead th:first-child {
        text-align: center;
        width: 80px;
    }

    .agen-table thead th:last-child {
        width: 190px;
        text-align: center;
    }

    .agen-table tbody td {
        padding: 16px 20px;
        border-bottom: 1px solid #edf0ed;
        color: #444;
        font-size: 14px;
        vertical-align: middle;
    }

    .agen-table tbody tr {
        transition: background .2s ease;
    }

    .agen-table tbody tr:hover {
        background: #f8fcfa;
    }

    .agen-table tbody tr:last-child td {
        border-bottom: none;
    }

    .number-cell {
        text-align: center;
        color: #087a4b !important;
        font-weight: 700;
    }

    .agent-name {
        display: flex;
        align-items: center;
        gap: 11px;
        font-weight: 600;
        color: #333 !important;
    }

    .agent-avatar {
        width: 36px;
        height: 36px;
        min-width: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #edf8f2;
        color: #087a4b;
        border: 1px solid #d9eee2;
        border-radius: 7px;
        font-size: 14px;
    }

    /* =========================================================
       ACTION
    ========================================================= */

    .action-buttons {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 7px;
    }

    .btn-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        padding: 8px 11px;
        border: none;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: all .2s ease;
    }

    .btn-edit {
        background: #fff7df;
        color: #9a7410;
    }

    .btn-edit:hover {
        background: #f5e7b9;
        color: #80600b;
    }

    .btn-delete {
        background: #fff0ef;
        color: #c0392b;
    }

    .btn-delete:hover {
        background: #f9d9d6;
        color: #a93226;
    }

    /* =========================================================
       EMPTY
    ========================================================= */

    .empty-state {
        text-align: center;
        padding: 60px 20px !important;
        color: #999 !important;
    }

    .empty-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f2f7f4;
        color: #087a4b;
        border-radius: 10px;
        font-size: 25px;
    }

    .empty-state strong {
        display: block;
        color: #555;
        font-size: 15px;
        margin-bottom: 5px;
    }

    .empty-state span {
        font-size: 13px;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 768px) {

        .agen-page {
            padding: 18px;
        }

        .agen-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .agen-heading {
            width: 100%;
        }

        .btn-add-agen {
            width: 100%;
            justify-content: center;
        }

        .agen-card-top {
            padding: 16px;
        }

        .agen-table {
            min-width: 650px;
        }
    }

    @media (max-width: 480px) {

        .agen-heading h1 {
            font-size: 21px;
        }

        .agen-heading p {
            font-size: 13px;
        }

        .agen-heading-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
        }
    }
</style>


<div class="agen-page">

    {{-- HEADER --}}
    <div class="agen-header">

        <div class="agen-heading">

            <div class="agen-heading-icon">
                <i class="fas fa-user-tie"></i>
            </div>

            <div>
                <h1>Daftar Agen</h1>

                <p>
                    Kelola daftar agen perusahaan.
                </p>
            </div>

        </div>

        <a
            href="{{ route('admin.daftar.agen.create') }}"
            class="btn-add-agen"
        >
            <i class="fas fa-plus"></i>
            Tambah Agen
        </a>

    </div>


    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))

        <div class="success-alert">

            <i class="fas fa-circle-check"></i>

            <span>
                {{ session('success') }}
            </span>

        </div>

    @endif


    {{-- CARD TABLE --}}
    <div class="agen-card">

        <div class="agen-card-top">

            <div class="agen-card-title">

                <i class="fas fa-users"></i>

                Data Agen

            </div>

            <div class="agen-count">

                Total:
                <strong>{{ $daftarAgen->count() }}</strong>
                Agen

            </div>

        </div>


        <div class="table-wrapper">

            <table class="agen-table">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Nama Agen</th>

                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($daftarAgen as $agen)

                        <tr>

                            <td class="number-cell">
                                {{ $loop->iteration }}
                            </td>

                            <td>

                                <div class="agent-name">

                                    <div class="agent-avatar">
                                        <i class="fas fa-user"></i>
                                    </div>

                                    {{ $agen->nama }}

                                </div>

                            </td>

                            <td>

                                <div class="action-buttons">

                                    {{-- EDIT --}}
                                    <a
                                        href="{{ route('admin.daftar.agen.edit', $agen) }}"
                                        class="btn-action btn-edit"
                                        title="Edit Agen"
                                    >
                                        <i class="fas fa-pen"></i>
                                        Edit
                                    </a>


                                    {{-- DELETE --}}
                                    <form
                                        action="{{ route('admin.daftar.agen.destroy', $agen) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus agen {{ $agen->nama }}?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-action btn-delete"
                                            title="Hapus Agen"
                                        >
                                            <i class="fas fa-trash"></i>
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="3"
                                class="empty-state"
                            >

                                <div class="empty-icon">
                                    <i class="fas fa-users"></i>
                                </div>

                                <strong>
                                    Belum Ada Data Agen
                                </strong>

                                <span>
                                    Silakan tambahkan agen melalui tombol
                                    "Tambah Agen".
                                </span>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection