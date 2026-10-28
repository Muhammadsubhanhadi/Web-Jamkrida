@extends('admin.layouts.app')

@section('title', 'Keuangan Berkelanjutan')

@section('content')

<style>
    .laporan-wrapper {
        padding: 30px;
    }

    .laporan-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .laporan-title h1 {
        margin: 0;
        font-size: 26px;
        font-weight: 700;
        color: #087a4b;
    }

    .laporan-title p {
        margin: 6px 0 0;
        color: #777;
        font-size: 14px;
    }

    .btn-tambah {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 18px;
        background: #087a4b;
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: .3s;
    }

    .btn-tambah:hover {
        background: #063d2a;
        transform: translateY(-2px);
    }

    .table-card {
        background: #fff;
        border-radius: 12px;
        padding: 22px;
        box-shadow: 0 8px 30px rgba(0,0,0,.07);
        overflow-x: auto;
    }

    .laporan-table {
        width: 100%;
        border-collapse: collapse;
    }

    .laporan-table th {
        background: #063d2a;
        color: #fff;
        padding: 15px;
        text-align: left;
        font-size: 13px;
    }

    .laporan-table td {
        padding: 15px;
        border-bottom: 1px solid #eee;
        font-size: 14px;
        color: #444;
    }

    .laporan-table tr:hover td {
        background: #f8fbf9;
    }

    .badge-tahun {
        display: inline-block;
        padding: 6px 12px;
        background: #f4e4ad;
        color: #063d2a;
        border-radius: 6px;
        font-weight: 700;
    }

    .action-group {
        display: flex;
        gap: 7px;
        flex-wrap: wrap;
    }

    .btn-action {
        border: none;
        padding: 8px 11px;
        border-radius: 6px;
        cursor: pointer;
        text-decoration: none;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .btn-view {
        background: #eef7f2;
        color: #087a4b;
    }

    .btn-edit {
        background: #fff5d9;
        color: #9a7410;
    }

    .btn-delete {
        background: #fdecec;
        color: #c0392b;
    }

    .btn-action:hover {
        opacity: .8;
    }

    .alert-success {
        padding: 14px 18px;
        background: #eaf8f0;
        color: #087a4b;
        border-left: 4px solid #087a4b;
        margin-bottom: 20px;
        border-radius: 7px;
    }

    @media(max-width: 768px) {
        .laporan-wrapper {
            padding: 18px;
        }

        .laporan-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .btn-tambah {
            width: 100%;
            justify-content: center;
        }

        .table-card {
            padding: 12px;
        }

        .laporan-table {
            min-width: 650px;
        }
    }
</style>

<div class="laporan-wrapper">

    <div class="laporan-header">

        <div class="laporan-title">
            <h1>Keuangan Berkelanjutan</h1>
            <p>
                Kelola dokumen Keuangan Berkelanjutan perusahaan.
            </p>
        </div>

        <a href="{{ route('admin.keuangan.berkelanjutan.create') }}"
           class="btn-tambah">

            <i class="fas fa-plus"></i>

            Tambah Keuangan Berkelanjutan

        </a>

    </div>

    @if(session('success'))

        <div class="alert-success">

            <i class="fas fa-check-circle"></i>

            {{ session('success') }}

        </div>

    @endif

    <div class="table-card">

        <table class="laporan-table">

            <thead>

                <tr>
                    <th width="70">No</th>
                    <th>Tahun</th>
                    <th>Dokumen</th>
                    <th width="250">Action</th>
                </tr>

            </thead>

            <tbody>

                @forelse($keuanganBerkelanjutan as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>

                            <span class="badge-tahun">
                                {{ $item->tahun }}
                            </span>

                        </td>

                        <td>

                            <i class="fas fa-file-pdf"
                               style="color:#c0392b;"></i>

                            Dokumen Keuangan Berkelanjutan

                        </td>

                        <td>

                            <div class="action-group">

                                @if($item->file)

                                    <a href="{{ asset('storage/' . $item->file) }}"
                                       target="_blank"
                                       class="btn-action btn-view">

                                        <i class="fas fa-eye"></i>
                                        Lihat

                                    </a>

                                @endif

                                <a href="{{ route('admin.keuangan.berkelanjutan.edit', $item) }}"
                                   class="btn-action btn-edit">

                                    <i class="fas fa-edit"></i>
                                    Edit

                                </a>

                                <form action="{{ route('admin.keuangan.berkelanjutan.destroy', $item) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus dokumen Keuangan Berkelanjutan tahun {{ $item->tahun }}?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn-action btn-delete">

                                        <i class="fas fa-trash"></i>
                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4"
                            style="text-align:center;padding:40px;color:#999;">

                            <i class="fas fa-folder-open"
                               style="font-size:35px;margin-bottom:10px;"></i>

                            <br>

                            Belum ada data Keuangan Berkelanjutan.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection