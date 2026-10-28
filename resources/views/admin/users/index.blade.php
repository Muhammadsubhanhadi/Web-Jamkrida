@extends('admin.layouts.app')

@section('title', 'Manajemen Pengguna')

@section('content')

<style>
    .users-page {
        padding: 10px 0 30px;
        font-family: 'Poppins', sans-serif;
    }

    /* HEADER */
    .users-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 28px;
        gap: 20px;
    }

    .users-header-left {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .users-header-icon {
        width: 54px;
        height: 54px;
        background: linear-gradient(135deg, #087a4b, #0b5d3b);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        box-shadow: 0 8px 20px rgba(8, 122, 75, .18);
    }

    .users-header h1 {
        margin: 0;
        font-size: 25px;
        font-weight: 700;
        color: #14382b;
        letter-spacing: -.4px;
    }

    .users-header p {
        margin: 4px 0 0;
        color: #84918b;
        font-size: 13px;
    }

    .btn-add-user {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 12px 19px;
        background: #087a4b;
        color: #fff !important;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        box-shadow: 0 7px 18px rgba(8, 122, 75, .20);
        transition: .25s;
    }

    .btn-add-user:hover {
        background: #063d2a;
        transform: translateY(-2px);
    }

    /* STATISTIC */
    .user-stat-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        margin-bottom: 22px;
    }

    .user-stat {
        background: #fff;
        border: 1px solid #e9efeb;
        padding: 19px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 5px 18px rgba(25, 62, 45, .045);
    }

    .stat-label {
        color: #8a9791;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: .7px;
        font-weight: 600;
    }

    .stat-number {
        margin-top: 5px;
        color: #163d2e;
        font-size: 24px;
        font-weight: 700;
    }

    .stat-icon {
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eef8f3;
        color: #087a4b;
        font-size: 17px;
    }

    /* MAIN CARD */
    .users-card {
        background: #fff;
        border: 1px solid #e8efeb;
        box-shadow: 0 7px 25px rgba(20, 55, 40, .055);
    }

    .users-card-top {
        padding: 19px 22px;
        border-bottom: 1px solid #edf1ef;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    .users-card-title {
        font-size: 15px;
        font-weight: 700;
        color: #183d2f;
    }

    .users-card-subtitle {
        font-size: 11px;
        color: #96a09b;
        margin-top: 3px;
    }

    .user-search {
        position: relative;
        width: 245px;
    }

    .user-search i {
        position: absolute;
        left: 13px;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca8a2;
        font-size: 13px;
    }

    .user-search input {
        width: 100%;
        height: 38px;
        border: 1px solid #e1e9e5;
        padding: 0 13px 0 36px;
        font-family: inherit;
        font-size: 12px;
        outline: none;
        background: #fafcfb;
        box-sizing: border-box;
    }

    .user-search input:focus {
        border-color: #087a4b;
        background: #fff;
    }

    /* TABLE */
    .users-table-wrapper {
        overflow-x: auto;
    }

    .users-table {
        width: 100%;
        border-collapse: collapse;
    }

    .users-table thead th {
        background: #f8faf9;
        color: #8a9690;
        font-size: 10px;
        letter-spacing: .8px;
        text-transform: uppercase;
        font-weight: 700;
        padding: 14px 20px;
        text-align: left;
        border-bottom: 1px solid #e9efec;
    }

    .users-table tbody td {
        padding: 15px 20px;
        border-bottom: 1px solid #edf1ef;
        font-size: 12px;
        color: #53625b;
        vertical-align: middle;
    }

    .users-table tbody tr {
        transition: .2s;
    }

    .users-table tbody tr:hover {
        background: #fbfdfc;
    }

    .user-number {
        color: #a4aea9;
        font-size: 11px;
        font-weight: 600;
    }

    .user-profile {
        display: flex;
        align-items: center;
        gap: 11px;
    }

    .user-avatar {
        width: 38px;
        height: 38px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #087a4b, #d5a83a);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
    }

    .user-name {
        color: #193c2e;
        font-weight: 650;
        font-size: 12px;
    }

    .user-role {
        color: #9aa49f;
        font-size: 10px;
        margin-top: 2px;
    }

    .user-email {
        color: #66746d;
    }

    .status-active {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 10px;
        background: #edf8f2;
        color: #087a4b;
        font-size: 10px;
        font-weight: 700;
    }

    .status-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #18a766;
    }

    .user-date {
        color: #89958f;
        font-size: 11px;
    }

    .action-group {
        display: flex;
        gap: 6px;
    }

    .action-btn {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e4ebe7;
        background: #fff;
        text-decoration: none;
        cursor: pointer;
        transition: .2s;
    }

    .action-edit {
        color: #087a4b;
    }

    .action-edit:hover {
        background: #087a4b;
        color: #fff;
    }

    .action-delete {
        color: #c65a5a;
    }

    .action-delete:hover {
        background: #c65a5a;
        color: #fff;
    }

    .empty-users {
        text-align: center;
        padding: 55px 20px !important;
        color: #9aa49f !important;
    }

    .empty-users i {
        font-size: 32px;
        margin-bottom: 10px;
        color: #c8d3ce;
    }

    /* ALERT */
    .user-alert {
        padding: 12px 16px;
        margin-bottom: 18px;
        font-size: 12px;
        border-left: 3px solid;
    }

    .user-alert.success {
        background: #eef9f3;
        color: #087a4b;
        border-color: #087a4b;
    }

    .user-alert.error {
        background: #fff2f2;
        color: #b64d4d;
        border-color: #c65a5a;
    }

    /* RESPONSIVE */
    @media (max-width: 1000px) {
        .user-stat-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 700px) {
        .users-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .btn-add-user {
            width: 100%;
            justify-content: center;
        }

        .users-card-top {
            align-items: flex-start;
            flex-direction: column;
        }

        .user-search {
            width: 100%;
        }
    }

    @media (max-width: 520px) {
        .user-stat-grid {
            grid-template-columns: 1fr;
        }

        .users-header h1 {
            font-size: 21px;
        }
    }
</style>


<div class="users-page">

    {{-- HEADER --}}
    <div class="users-header">

        <div class="users-header-left">

            <div class="users-header-icon">
                <i class="fa-solid fa-users"></i>
            </div>

            <div>
                <h1>Manajemen Pengguna</h1>
                <p>Kelola akun dan akses pengguna dashboard administrasi.</p>
            </div>

        </div>

        <a href="{{ route('admin.users.create') }}" class="btn-add-user">
            <i class="fa-solid fa-plus"></i>
            Tambah Pengguna
        </a>

    </div>


    {{-- ALERT --}}
    @if(session('success'))
        <div class="user-alert success">
            <i class="fa-solid fa-circle-check"></i>
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="user-alert error">
            <i class="fa-solid fa-circle-exclamation"></i>
            {{ session('error') }}
        </div>
    @endif


    {{-- STATISTIK --}}
    <div class="user-stat-grid">

        <div class="user-stat">
            <div>
                <div class="stat-label">Total Pengguna</div>
                <div class="stat-number">{{ $users->count() }}</div>
            </div>

            <div class="stat-icon">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>

        <div class="user-stat">
            <div>
                <div class="stat-label">Pengguna Aktif</div>
                <div class="stat-number">{{ $users->count() }}</div>
            </div>

            <div class="stat-icon">
                <i class="fa-solid fa-user-check"></i>
            </div>
        </div>

        <div class="user-stat">
            <div>
                <div class="stat-label">Administrator</div>
                <div class="stat-number">{{ $users->count() }}</div>
            </div>

            <div class="stat-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
        </div>

        <div class="user-stat">
            <div>
                <div class="stat-label">Akun Terdaftar</div>
                <div class="stat-number">{{ $users->count() }}</div>
            </div>

            <div class="stat-icon">
                <i class="fa-solid fa-user-plus"></i>
            </div>
        </div>

    </div>


    {{-- TABLE --}}
    <div class="users-card">

        <div class="users-card-top">

            <div>
                <div class="users-card-title">
                    Daftar Pengguna
                </div>

                <div class="users-card-subtitle">
                    Daftar akun yang memiliki akses ke sistem administrasi.
                </div>
            </div>

            <div class="user-search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="userSearch" placeholder="Cari pengguna...">
            </div>

        </div>


        <div class="users-table-wrapper">

            <table class="users-table" id="usersTable">

                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Pengguna</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Terdaftar</th>
                        <th width="100">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($users as $user)

                    <tr>

                        <td>
                            <span class="user-number">
                                {{ sprintf('%02d', $loop->iteration) }}
                            </span>
                        </td>

                        <td>

                            <div class="user-profile">

                                <div class="user-avatar">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>

                                <div>
                                    <div class="user-name">
                                        {{ $user->name }}
                                    </div>

                                    <div class="user-role">
                                        Administrator
                                    </div>
                                </div>

                            </div>

                        </td>

                        <td>
                            <span class="user-email">
                                {{ $user->email }}
                            </span>
                        </td>

                        <td>
                            <span class="status-active">
                                <span class="status-dot"></span>
                                AKTIF
                            </span>
                        </td>

                        <td>
                            <span class="user-date">
                                {{ $user->created_at->format('d M Y') }}
                            </span>
                        </td>

                        <td>

                            <div class="action-group">

                                <a href="{{ route('admin.users.edit', $user) }}"
                                   class="action-btn action-edit"
                                   title="Edit">

                                    <i class="fa-solid fa-pen"></i>

                                </a>

                                <form action="{{ route('admin.users.destroy', $user) }}"
                                      method="POST"
                                      style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="action-btn action-delete"
                                            title="Hapus"
                                            onclick="return confirm('Yakin ingin menghapus pengguna {{ $user->name }}?')">

                                        <i class="fa-solid fa-trash"></i>

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="6" class="empty-users">

                            <i class="fa-solid fa-users-slash"></i>

                            <div>
                                Belum ada pengguna.
                            </div>

                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


<script>
document.getElementById('userSearch').addEventListener('keyup', function () {

    let keyword = this.value.toLowerCase();
    let rows = document.querySelectorAll('#usersTable tbody tr');

    rows.forEach(function (row) {

        let text = row.innerText.toLowerCase();

        row.style.display = text.includes(keyword) ? '' : 'none';

    });

});
</script>

@endsection