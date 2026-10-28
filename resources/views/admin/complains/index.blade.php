
@extends('admin.layouts.app')

@section('content')

<style>
.complains-page {
    --cp-green: #087a4b;
    --cp-dark: #063d2a;
    --cp-gold: #d5a83a;
    color: #263a31;
}

.complains-page * {
    box-sizing: border-box;
}

.cp-heading {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 24px;
}

.cp-heading h1 {
    margin: 0 0 7px;
    color: var(--cp-dark);
    font-size: 25px;
    font-weight: 800;
}

.cp-heading p {
    margin: 0;
    color: #7b8981;
    font-size: 12px;
}

.cp-stats {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 16px;
    margin-bottom: 24px;
}

.cp-stat {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 20px;
    background: #fff;
    border: 1px solid #e3ebe6;
    box-shadow: 0 5px 18px rgba(0,40,25,.035);
}

.cp-stat-icon {
    display: grid;
    place-items: center;
    width: 43px;
    height: 43px;
    flex: 0 0 43px;
    background: #edf7f2;
    color: var(--cp-green);
    font-size: 17px;
}

.cp-stat small {
    display: block;
    margin-bottom: 6px;
    color: #7b8981;
    font-size: 11px;
}

.cp-stat strong {
    color: var(--cp-dark);
    font-size: 23px;
    font-weight: 800;
}

.cp-panel {
    overflow: hidden;
    background: #fff;
    border: 1px solid #e2eae5;
    box-shadow: 0 8px 28px rgba(0,40,25,.04);
}

.cp-panel-head {
    padding: 21px 23px;
    border-bottom: 1px solid #e8eeeb;
}

.cp-panel-head h2 {
    margin: 0 0 5px;
    color: var(--cp-dark);
    font-size: 16px;
    font-weight: 800;
}

.cp-panel-head p {
    margin: 0;
    color: #859189;
    font-size: 11px;
}

.cp-toolbar {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    padding: 18px 22px;
    border-bottom: 1px solid #edf1ef;
}

.cp-toolbar input,
.cp-toolbar select {
    min-height: 40px;
    min-width: 0;
    padding: 10px 12px;
    background: #fff;
    border: 1px solid #dce5df;
    border-radius: 2px;
    color: #35483e;
    font: inherit;
    font-size: 12px;
    outline: none;
}

.cp-toolbar input {
    flex: 1 1 240px;
}

.cp-toolbar select {
    flex: 0 1 180px;
}

.cp-toolbar input:focus,
.cp-toolbar select:focus {
    border-color: var(--cp-green);
}

.cp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 39px;
    padding: 10px 14px;
    border: 1px solid transparent;
    border-radius: 2px;
    font-size: 11px;
    font-weight: 800;
    text-decoration: none;
    cursor: pointer;
    transition: .2s;
}

.cp-btn-primary {
    background: var(--cp-green);
    color: #fff;
}

.cp-btn-primary:hover {
    background: var(--cp-dark);
    color: #fff;
}

.cp-btn-light {
    background: #fff;
    border-color: #dce5df;
    color: #526359;
}

.cp-btn-light:hover {
    border-color: var(--cp-green);
    color: var(--cp-green);
}

.cp-alert {
    margin: 18px 22px 0;
    padding: 13px 16px;
    background: #eaf7ef;
    border: 1px solid #b9e0c7;
    color: #17663a;
    font-size: 12px;
}

.cp-table-wrap {
    width: 100%;
    overflow-x: auto;
}

.cp-table {
    width: 100%;
    border-collapse: collapse;
    white-space: nowrap;
}

.cp-table th {
    padding: 14px 16px;
    background: #f7faf8;
    color: #65756b;
    text-align: left;
    font-size: 10px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .4px;
}

.cp-table td {
    padding: 15px 16px;
    border-top: 1px solid #edf1ef;
    color: #526158;
    font-size: 11px;
    vertical-align: middle;
}

.cp-table tbody tr:hover {
    background: #fbfdfb;
}

.cp-ticket {
    color: var(--cp-green);
    font-weight: 800;
}

.cp-subject {
    display: block;
    max-width: 230px;
    overflow: hidden;
    color: #35483e;
    font-weight: 700;
    text-overflow: ellipsis;
}

.cp-muted {
    display: block;
    margin-top: 5px;
    color: #8a978f;
    font-size: 10px;
}

.cp-status {
    display: inline-block;
    padding: 6px 9px;
    border: 1px solid transparent;
    font-size: 10px;
    font-weight: 800;
}

.cp-status-menunggu {
    background: #fff7df;
    border-color: #f1df9d;
    color: #8a6710;
}

.cp-status-diproses {
    background: #eaf3ff;
    border-color: #c8dcfb;
    color: #245d9c;
}

.cp-status-selesai {
    background: #e7f7ed;
    border-color: #bce5c9;
    color: #19713b;
}

.cp-status-ditolak {
    background: #fff0f0;
    border-color: #f0c4c4;
    color: #a12424;
}

.cp-empty {
    padding: 50px 20px !important;
    text-align: center;
    white-space: normal;
}

.cp-empty i {
    display: block;
    margin-bottom: 13px;
    color: #a7b7ad;
    font-size: 30px;
}

.cp-empty strong {
    display: block;
    margin-bottom: 6px;
    color: var(--cp-dark);
    font-size: 14px;
}

.cp-empty span {
    color: #859189;
    font-size: 11px;
}

.cp-pagination {
    padding: 18px 22px;
    border-top: 1px solid #edf1ef;
}

.cp-pagination nav p {
    font-size: 11px;
}

.cp-pagination nav a,
.cp-pagination nav span {
    font-size: 11px;
}

@media (max-width: 1050px) {
    .cp-stats {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 600px) {
    .cp-heading h1 {
        font-size: 21px;
    }

    .cp-stats {
        gap: 10px;
    }

    .cp-stat {
        gap: 10px;
        padding: 13px;
    }

    .cp-stat-icon {
        width: 36px;
        height: 36px;
        flex-basis: 36px;
    }

    .cp-stat strong {
        font-size: 19px;
    }

    .cp-toolbar {
        align-items: stretch;
        padding: 14px;
    }

    .cp-toolbar input,
    .cp-toolbar select,
    .cp-toolbar button {
        flex: 1 1 100%;
        width: 100%;
    }
}
</style>

<div class="complains-page">

    <div class="cp-heading">
        <div>
            <h1>Pengaduan</h1>
            <p>Kelola dan pantau laporan pengaduan yang masuk ke perusahaan.</p>
        </div>
    </div>

    <div class="cp-stats">
        <div class="cp-stat">
            <div class="cp-stat-icon"><i class="fa-solid fa-inbox"></i></div>
            <div>
                <small>Total Pengaduan</small>
                <strong>{{ $total }}</strong>
            </div>
        </div>

        <div class="cp-stat">
            <div class="cp-stat-icon"><i class="fa-solid fa-clock"></i></div>
            <div>
                <small>Menunggu</small>
                <strong>{{ $menunggu }}</strong>
            </div>
        </div>

        <div class="cp-stat">
            <div class="cp-stat-icon"><i class="fa-solid fa-spinner"></i></div>
            <div>
                <small>Diproses</small>
                <strong>{{ $diproses }}</strong>
            </div>
        </div>

        <div class="cp-stat">
            <div class="cp-stat-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div>
                <small>Selesai</small>
                <strong>{{ $selesai }}</strong>
            </div>
        </div>
    </div>

    <section class="cp-panel">
        <div class="cp-panel-head">
            <h2>Daftar Laporan Masuk</h2>
            <p>Data pengaduan dari formulir publik.</p>
        </div>

        @if (session('success'))
            <div class="cp-alert">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.complains.index') }}"
              method="GET"
              class="cp-toolbar">

            <input
                type="search"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari nomor tiket, nama, atau subjek..."
                aria-label="Cari pengaduan"
            >

            <select name="status" aria-label="Filter status">
                <option value="">Semua Status</option>
                <option value="Menunggu" @selected(request('status') === 'Menunggu')>
                    Menunggu
                </option>
                <option value="Diproses" @selected(request('status') === 'Diproses')>
                    Diproses
                </option>
                <option value="Selesai" @selected(request('status') === 'Selesai')>
                    Selesai
                </option>
                <option value="Ditolak" @selected(request('status') === 'Ditolak')>
                    Ditolak
                </option>
            </select>

            <button type="submit" class="cp-btn cp-btn-primary">
                <i class="fa-solid fa-magnifying-glass"></i>
                Cari
            </button>

            <a href="{{ route('admin.complains.index') }}"
               class="cp-btn cp-btn-light">
                <i class="fa-solid fa-rotate-left"></i>
                Reset
            </a>
        </form>

        <div class="cp-table-wrap">
            <table class="cp-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nomor Tiket</th>
                        <th>Pelapor</th>
                        <th>Pengaduan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($pengaduan as $item)
                        @php
                            $statusClass = match ($item->status) {
                                'Menunggu' => 'cp-status-menunggu',
                                'Diproses' => 'cp-status-diproses',
                                'Selesai' => 'cp-status-selesai',
                                'Ditolak' => 'cp-status-ditolak',
                                default => 'cp-status-menunggu',
                            };
                        @endphp

                        <tr>
                            <td>
                                {{ $pengaduan->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <span class="cp-ticket">
                                    {{ $item->{$ticketColumn} ?? 'Belum tersedia' }}
                                </span>
                            </td>

                            <td>
                                <strong>{{ $item->name }}</strong>
                                <span class="cp-muted">{{ $item->contact }}</span>
                            </td>

                            <td>
                                <span class="cp-subject" title="{{ $item->subject }}">
                                    {{ $item->subject }}
                                </span>
                                <span class="cp-muted">{{ $item->category }}</span>
                            </td>

                            <td>
                                {{ $item->created_at?->format('d/m/Y') ?? '-' }}
                                <span class="cp-muted">
                                    {{ $item->created_at?->format('H:i') ?? '' }}
                                </span>
                            </td>

                            <td>
                                <span class="cp-status {{ $statusClass }}">
                                    {{ $item->status ?: 'Menunggu' }}
                                </span>
                            </td>

                            <td>
                                <a href="{{ route('admin.complains.show', $item) }}"
                                   class="cp-btn cp-btn-primary">
                                    <i class="fa-solid fa-eye"></i>
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="cp-empty">
                                <i class="fa-regular fa-folder-open"></i>
                                <strong>Belum ada pengaduan</strong>
                                <span>
                                    Laporan yang dikirim melalui formulir publik akan muncul di sini.
                                </span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($pengaduan->hasPages())
            <div class="cp-pagination">
                {{ $pengaduan->links() }}
            </div>
        @endif
    </section>
</div>

@endsection