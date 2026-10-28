@extends('admin.layouts.app')

@section('title', 'Mitra')

@section('content')

<div class="page-header">
    <div>
        <h1>Mitra</h1>
        <p>Kelola logo dan daftar mitra perusahaan.</p>
    </div>

    <a href="{{ route('admin.mitra.create') }}" class="btn-add">
        <i class="fas fa-plus"></i>
        Tambah Mitra
    </a>
</div>

@if(session('success'))
    <div class="alert-success">
        <i class="fas fa-check-circle"></i>
        {{ session('success') }}
    </div>
@endif

<div class="mitra-card">

    <div class="table-wrapper">

        <table class="mitra-table">

            <thead>
                <tr>
                    <th width="70">No</th>
                    <th width="120">Logo</th>
                    <th>Nama Mitra</th>
                    <th width="100">Urutan</th>
                    <th width="130">Status</th>
                    <th width="180">Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse($mitras as $mitra)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>

                            <div class="logo-preview">

                                <img
                                    src="{{ asset('storage/' . $mitra->logo) }}"
                                    alt="{{ $mitra->nama_mitra }}"
                                >

                            </div>

                        </td>

                        <td>
                            <strong>{{ $mitra->nama_mitra }}</strong>
                        </td>

                        <td>
                            <span class="order-badge">
                                {{ $mitra->urutan }}
                            </span>
                        </td>

                        <td>

                            @if($mitra->status === 'aktif')

                                <span class="status aktif">
                                    <i class="fas fa-circle"></i>
                                    Aktif
                                </span>

                            @else

                                <span class="status nonaktif">
                                    <i class="fas fa-circle"></i>
                                    Nonaktif
                                </span>

                            @endif

                        </td>

                        <td>

                            <div class="action-buttons">

                                <a
                                    href="{{ route('admin.mitra.edit', $mitra->id) }}"
                                    class="btn-edit"
                                >
                                    <i class="fas fa-pen"></i>
                                    Edit
                                </a>

                                <form
                                    action="{{ route('admin.mitra.destroy', $mitra->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus mitra ini?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn-delete"
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

                        <td colspan="6" class="empty-data">

                            <div class="empty-icon">
                                <i class="fas fa-handshake"></i>
                            </div>

                            <h3>Belum Ada Mitra</h3>

                            <p>
                                Silakan tambahkan mitra terlebih dahulu.
                            </p>

                            <a
                                href="{{ route('admin.mitra.create') }}"
                                class="btn-add"
                            >
                                <i class="fas fa-plus"></i>
                                Tambah Mitra
                            </a>

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>


<style>

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin-bottom: 25px;
}

.page-header h1 {
    margin: 0;
    font-size: 28px;
    font-weight: 700;
}

.page-header p {
    margin: 6px 0 0;
    color: #777;
}

.btn-add {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #087a4b;
    color: white;
    text-decoration: none;
    padding: 11px 18px;
    border-radius: 8px;
    font-weight: 600;
    transition: .25s;
}

.btn-add:hover {
    background: #063d2a;
    color: white;
    transform: translateY(-2px);
}

.alert-success {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #eaf8f1;
    color: #087a4b;
    border: 1px solid #c8ead9;
    padding: 14px 18px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.mitra-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 25px rgba(0,0,0,.06);
    overflow: hidden;
}

.table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.mitra-table {
    width: 100%;
    border-collapse: collapse;
}

.mitra-table thead {
    background: #063d2a;
    color: white;
}

.mitra-table th {
    padding: 15px;
    text-align: left;
    font-size: 13px;
    font-weight: 600;
}

.mitra-table td {
    padding: 15px;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
}

.mitra-table tbody tr {
    transition: .2s;
}

.mitra-table tbody tr:hover {
    background: #f8fcfa;
}

.logo-preview {
    width: 75px;
    height: 55px;
    background: #fff;
    border: 1px solid #eee;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 7px;
    border-radius: 7px;
}

.logo-preview img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.order-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    height: 30px;
    padding: 0 8px;
    background: #f5f1e3;
    color: #8b6a15;
    border-radius: 6px;
    font-weight: 600;
}

.status {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-size: 13px;
    font-weight: 600;
}

.status i {
    font-size: 7px;
}

.status.aktif {
    color: #087a4b;
}

.status.nonaktif {
    color: #999;
}

.action-buttons {
    display: flex;
    gap: 7px;
    flex-wrap: wrap;
}

.action-buttons form {
    margin: 0;
}

.btn-edit,
.btn-delete {
    border: none;
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.btn-edit {
    background: #eef7f2;
    color: #087a4b;
}

.btn-edit:hover {
    background: #087a4b;
    color: white;
}

.btn-delete {
    background: #fff0f0;
    color: #d33;
}

.btn-delete:hover {
    background: #d33;
    color: white;
}

.empty-data {
    text-align: center !important;
    padding: 70px 20px !important;
}

.empty-icon {
    width: 65px;
    height: 65px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eef7f2;
    color: #087a4b;
    border-radius: 50%;
    font-size: 25px;
}

.empty-data h3 {
    margin: 15px 0 5px;
}

.empty-data p {
    color: #888;
    margin-bottom: 20px;
}

@media(max-width: 768px) {

    .page-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .btn-add {
        width: 100%;
        justify-content: center;
    }

    .mitra-card {
        border-radius: 8px;
    }

}

</style>

@endsection