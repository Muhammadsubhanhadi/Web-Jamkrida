
@extends('admin.layouts.app')

@section('title', 'Manajemen Karir')

@section('content')
<style>
    .karir-page {
        --kg: #087a4b;
        --kg-dark: #063d2a;
        --gold: #d5a83a;
        color: #24352d;
    }

    .karir-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 16px;
        margin-bottom: 24px;
    }

    .karir-heading h1 {
        margin: 0 0 7px;
        font-size: 26px;
        font-weight: 750;
        color: var(--kg-dark);
    }

    .karir-heading p {
        margin: 0;
        color: #78847d;
        font-size: 13px;
    }

    .karir-add {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        background: var(--kg);
        color: #fff;
        padding: 12px 17px;
        border-radius: 7px;
        text-decoration: none;
        font-weight: 600;
        font-size: 13px;
        transition: .2s;
    }

    .karir-add:hover {
        background: var(--kg-dark);
        color: #fff;
        transform: translateY(-1px);
    }

    .karir-alert {
        padding: 13px 16px;
        border-radius: 7px;
        margin-bottom: 18px;
        background: #e8f7ee;
        color: #12643b;
        border: 1px solid #c9ead5;
        font-size: 13px;
    }

    .karir-panel {
        background: #fff;
        border: 1px solid #e7ece8;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(20, 50, 35, .045);
    }

    .karir-panel-header {
        padding: 20px 22px;
        border-bottom: 1px solid #edf0ed;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    .karir-panel-header h3 {
        margin: 0;
        font-size: 15px;
        font-weight: 700;
        color: var(--kg-dark);
    }

    .karir-count {
        background: #edf7f0;
        color: var(--kg);
        padding: 6px 10px;
        border-radius: 5px;
        font-size: 11px;
        font-weight: 700;
    }

    .karir-table-wrap {
        width: 100%;
        overflow-x: auto;
    }

    .karir-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 850px;
    }

    .karir-table th {
        padding: 14px 18px;
        background: #f8faf8;
        color: #77837b;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: .5px;
        text-align: left;
        white-space: nowrap;
    }

    .karir-table td {
        padding: 16px 18px;
        border-top: 1px solid #edf0ed;
        font-size: 12px;
        vertical-align: middle;
    }

    .karir-table tbody tr:hover {
        background: #fbfdfb;
    }

    .karir-job {
        font-weight: 700;
        color: #183c2a;
        font-size: 13px;
        margin-bottom: 5px;
    }

    .karir-sub {
        color: #849087;
        font-size: 11px;
    }

    .karir-status {
        display: inline-block;
        padding: 6px 9px;
        border-radius: 5px;
        font-size: 10px;
        font-weight: 700;
        white-space: nowrap;
    }

    .status-published {
        background: #e4f7eb;
        color: #167344;
    }

    .status-draft {
        background: #fff3d6;
        color: #986a08;
    }

    .status-closed {
        background: #fde8e7;
        color: #b83232;
    }

    .status-archived {
        background: #edf0f2;
        color: #65717a;
    }

    .karir-actions {
        display: flex;
        gap: 7px;
        align-items: center;
    }

    .karir-action {
        width: 32px;
        height: 32px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        text-decoration: none;
        border: 1px solid #e4eae5;
        background: white;
        cursor: pointer;
        font-size: 12px;
    }

    .karir-edit {
        color: #087a4b;
    }

    .karir-delete {
        color: #c43b3b;
    }

    .karir-empty {
        padding: 55px 20px !important;
        text-align: center;
        color: #849087;
    }

    .karir-empty i {
        font-size: 35px;
        color: #cbd8ce;
        margin-bottom: 12px;
    }

    .karir-empty strong {
        display: block;
        color: #304d3c;
        margin-bottom: 6px;
        font-size: 14px;
    }

    .karir-pagination {
        padding: 18px 22px;
    }

    @media (max-width: 600px) {
        .karir-heading h1 {
            font-size: 22px;
        }

        .karir-add {
            width: 100%;
            justify-content: center;
        }

        .karir-panel-header {
            padding: 16px;
        }
    }
</style>

<div class="karir-page">

    <div class="karir-heading">
        <div>
            <h1>Manajemen Karir</h1>
            <p>Kelola informasi dan pengumuman lowongan kerja Jamkrida NTB Syariah.</p>
        </div>

        <a href="{{ route('admin.karir.create') }}" class="karir-add">
            <i class="fa-solid fa-plus"></i>
            Tambah Lowongan
        </a>
    </div>

    @if(session('success'))
        <div class="karir-alert">
            <i class="fa-solid fa-circle-check"></i>
            {{ session('success') }}
        </div>
    @endif

    <div class="karir-panel">
        <div class="karir-panel-header">
            <h3>
                <i class="fa-solid fa-briefcase"></i>
                Daftar Lowongan
            </h3>

            <span class="karir-count">
                {{ $karir->total() }} DATA
            </span>
        </div>

        <div class="karir-table-wrap">
            <table class="karir-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Posisi Lowongan</th>
                        <!-- <th>Lokasi</th> -->
                        <th>Batas Lamaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($karir as $item)
                        <tr>
                            <td>
                                {{ $karir->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <div class="karir-job">
                                    {{ $item->title }}
                                </div>

                                <div class="karir-sub">
                                    {{ $item->department ?: 'Divisi belum ditentukan' }}
                                    · {{ $item->vacancy_count }} posisi
                                </div>
                            </td>

                            <!-- <td>
                                {{ $item->location ?: 'Belum ditentukan' }}
                            </td> -->

                            <td>
                                {{ $item->deadline
                                    ? $item->deadline->format('d/m/Y')
                                    : 'Tidak ditentukan' }}
                            </td>

                            <td>
                                <span class="karir-status status-{{ $item->status }}">
                                    @switch($item->status)
                                        @case('published')
                                            Dipublikasikan
                                            @break
                                        @case('draft')
                                            Draft
                                            @break
                                        <!-- @case('closed')
                                            Ditutup -->
                                            @break
                                        @default
                                            Diarsipkan
                                    @endswitch
                                </span>
                            </td>

                            <td>
                                <div class="karir-actions">
                                    <a href="{{ route('admin.karir.edit', $item) }}"
                                       class="karir-action karir-edit"
                                       title="Edit lowongan">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <form
                                        action="{{ route('admin.karir.destroy', $item) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus lowongan ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="karir-action karir-delete"
                                                title="Hapus lowongan">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="karir-empty">
                                <i class="fa-solid fa-briefcase"></i>
                                <strong>Belum ada lowongan karir</strong>
                                Silakan tambahkan lowongan pertama perusahaan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($karir->hasPages())
            <div class="karir-pagination">
                {{ $karir->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
