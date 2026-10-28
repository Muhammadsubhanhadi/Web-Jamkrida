@extends('admin.layouts.app')

@section('content')

<style>

.audit-page {
    padding: 10px 5px 40px;
}

.audit-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 25px;
}

.audit-label {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #d5a83a;
    margin-bottom: 6px;
}

.audit-header h1 {
    margin: 0;
    font-size: 30px;
    font-weight: 700;
    color: #063d2a;
}

.audit-header p {
    margin: 7px 0 0;
    color: #777;
    font-size: 14px;
}

.btn-add {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 12px 18px;
    background: #087a4b;
    color: #fff !important;
    text-decoration: none;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 600;
    transition: .25s ease;
    border: none;
    cursor: pointer;
}

.btn-add:hover {
    background: #063d2a;
    transform: translateY(-2px);
}

.alert-success {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 13px 16px;
    margin-bottom: 20px;
    background: #eaf8f1;
    color: #087a4b;
    border-left: 4px solid #087a4b;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
}

.audit-card {
    background: #fff;
    border: 1px solid #e9eceb;
    box-shadow: 0 8px 30px rgba(0,0,0,.06);
    border-radius: 10px;
    overflow: hidden;
}

.card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 22px 25px;
    border-bottom: 1px solid #edf0ef;
}

.card-top h3 {
    margin: 0 0 5px;
    color: #063d2a;
    font-size: 18px;
}

.card-top span {
    font-size: 12px;
    color: #888;
}

.total-data {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 15px;
    background: #f7faf8;
    border: 1px solid #e5ece8;
    border-radius: 7px;
}

.total-data > i {
    color: #d5a83a;
    font-size: 22px;
}

.total-data small {
    display: block;
    color: #888;
    font-size: 10px;
}

.total-data strong {
    display: block;
    color: #063d2a;
    font-size: 17px;
}

.table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.audit-table {
    width: 100%;
    border-collapse: collapse;
}

.audit-table th {
    padding: 14px 18px;
    background: #063d2a;
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .5px;
    text-align: left;
    white-space: nowrap;
}

.audit-table td {
    padding: 15px 18px;
    border-bottom: 1px solid #edf0ef;
    color: #444;
    font-size: 13px;
    vertical-align: middle;
}

.audit-table tbody tr {
    transition: .2s ease;
}

.audit-table tbody tr:hover {
    background: #fafcfb;
}

.number {
    color: #999 !important;
    font-weight: 600;
}

.auditor-name {
    display: flex;
    align-items: center;
    gap: 12px;
}

.auditor-icon {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf8f3;
    color: #087a4b;
    border-radius: 6px;
    flex-shrink: 0;
}

.auditor-name strong {
    color: #333;
    font-size: 13px;
}

.year-badge {
    display: inline-block;
    padding: 5px 10px;
    background: #f7f2e5;
    color: #9b761c;
    border-radius: 5px;
    font-size: 12px;
    font-weight: 700;
}

.predicate {
    color: #087a4b;
    font-weight: 600;
}

.action-buttons {
    display: flex;
    align-items: center;
    gap: 6px;
}

.action-buttons form {
    margin: 0;
}

.btn-action {
    width: 34px;
    height: 34px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    border-radius: 6px;
    text-decoration: none;
    cursor: pointer;
    transition: .2s ease;
}

.btn-view {
    background: #eef5f8;
    color: #397286;
}

.btn-edit {
    background: #f8f3e6;
    color: #a17b22;
}

.btn-delete {
    background: #fceeee;
    color: #c64c4c;
}

.btn-action:hover {
    transform: translateY(-2px);
}

.empty-data {
    text-align: center !important;
    padding: 60px 20px !important;
}

.empty-data i {
    font-size: 40px;
    color: #d5a83a;
    margin-bottom: 15px;
}

.empty-data h4 {
    margin: 0 0 6px;
    color: #063d2a;
    font-size: 16px;
}

.empty-data p {
    margin: 0 0 18px;
    color: #999;
    font-size: 13px;
}

@media (max-width: 768px) {

    .audit-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .btn-add {
        width: 100%;
        justify-content: center;
    }

    .card-top {
        align-items: flex-start;
        flex-direction: column;
        gap: 15px;
    }

    .total-data {
        width: 100%;
        box-sizing: border-box;
    }

    .audit-table {
        min-width: 850px;
    }
}

</style>

<div class="audit-page">

    <div class="audit-header">
        <div>
            <span class="audit-label">LAPORAN</span>
            <h1>Auditor</h1>
            <p>Kelola data auditor dan hasil audit perusahaan.</p>
        </div>

        <a href="{{ route('admin.audit.create') }}" class="btn-add">
            <i class="fas fa-plus"></i>
            Tambah Auditor
        </a>
    </div>

    @if(session('success'))
        <div class="alert-success">
            <i class="fas fa-circle-check"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="audit-card">

        <div class="card-top">
            <div>
                <h3>Daftar Auditor</h3>
                <span>Data auditor yang tersimpan dalam sistem</span>
            </div>

            <div class="total-data">
                <i class="fas fa-user-tie"></i>
                <div>
                    <small>Total Auditor</small>
                    <strong>{{ $audits->count() }}</strong>
                </div>
            </div>
        </div>

        <div class="table-wrapper">
            <table class="audit-table">
                <thead>
                    <tr>
                        <th width="70">NO</th>
                        <th>NAMA AUDITOR</th>
                        <th width="130">TAHUN</th>
                        <th>PREDIKAT</th>
                        <th width="180">AKSI</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($audits as $audit)

                        <tr>
                            <td class="number">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <div class="auditor-name">
                                    <div class="auditor-icon">
                                        <i class="fas fa-user-tie"></i>
                                    </div>

                                    <strong>
                                        {{ $audit->nama_auditor }}
                                    </strong>
                                </div>
                            </td>

                            <td>
                                <span class="year-badge">
                                    {{ $audit->tahun }}
                                </span>
                            </td>

                            <td>
                                <span class="predicate">
                                    {{ $audit->predikat }}
                                </span>
                            </td>

                            <td>
                                <div class="action-buttons">

                                    <!-- <a href="{{ route('admin.audit.show', $audit->id) }}"
                                       class="btn-action btn-view"
                                       title="Lihat">
                                        <i class="fas fa-eye"></i>
                                    </a> -->

                                    <a href="{{ route('admin.audit.edit', $audit->id) }}"
                                       class="btn-action btn-edit"
                                       title="Edit">
                                        <i class="fas fa-pen"></i>
                                    </a>

                                    <form action="{{ route('admin.audit.destroy', $audit->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus data auditor ini?');">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn-action btn-delete"
                                                title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>

                                </div>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="empty-data">
                                <div>
                                    <i class="fas fa-folder-open"></i>
                                    <h4>Belum Ada Data Auditor</h4>
                                    <p>Silakan tambahkan data auditor terlebih dahulu.</p>

                                    <a href="{{ route('admin.audit.create') }}"
                                       class="btn-add">
                                        <i class="fas fa-plus"></i>
                                        Tambah Auditor
                                    </a>
                                </div>
                            </td>
                        </tr>

                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

</div>


@endsection