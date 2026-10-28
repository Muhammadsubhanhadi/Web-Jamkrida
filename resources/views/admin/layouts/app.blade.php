<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel')</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet"
          href="{{ asset('admin/css/admin.css') }}">

    @stack('styles')
</head>

<body>

    @php
        $adminNotifications = \App\Models\Notification::query()
            ->latest()
            ->take(6)
            ->get();

        $unreadNotificationCount = \App\Models\Notification::where(
            'is_read',
            false
        )->count();
    @endphp

    <!-- LOADING -->
    <div id="pageLoader">
        <div class="loader-ring"></div>
        <span>Loading...</span>
    </div>

    <!-- CURSOR -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <!-- MOBILE OVERLAY -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- SIDEBAR -->
                                                            <!-- ==========================================
                                                                SIDEBAR ADMIN
                                                            =========================================== -->

<aside class="sidebar" id="sidebar">

    <!-- SIDEBAR HEADER -->
    <div class="sidebar-header">

        <div class="brand">

            <div class="brand-logo">
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo Jamkrida"
                >
            </div>

            <div class="brand-text">
                <strong>JAMKRIDA</strong>
                <span>Admin Panel</span>
            </div>

        </div>

        <button
            class="sidebar-close"
            id="sidebarClose"
            type="button"
            aria-label="Tutup Sidebar"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>

    </div>


    <!-- SIDEBAR MENU -->
    <nav class="sidebar-menu">


        <!-- ==========================================
             DASHBOARD
        =========================================== -->

        <div class="sidebar-section">

            <div class="menu-label">
                <span>MAIN MENU</span>
            </div>


            <a
                href="{{ url('/admin/dashboard') }}"
                class="menu-item {{ request()->is('admin/dashboard*') || request()->is('admin') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-chart-pie"></i>
                </span>

                <span class="menu-text">
                    Dashboard
                </span>

            </a>

        </div>



        <!-- ==========================================
             MENU
        =========================================== -->

        <div class="sidebar-section">

            <div class="menu-label">
                <span>WEBSITE MANAGEMENT</span>
            </div>


            <a
                href="{{ url('/admin/menus') }}"
                class="menu-item {{ request()->is('admin/menus*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-bars-staggered"></i>
                </span>

                <span class="menu-text">
                    Menu
                </span>

            </a>

        </div>



        <!-- ==========================================
             PROFIL
        =========================================== -->

        <div
            class="menu-dropdown {{ request()->is('admin/profil*') ? 'open' : '' }}"
        >

            <button
                type="button"
                class="menu-dropdown-toggle"
                aria-expanded="{{ request()->is('admin/profil*') ? 'true' : 'false' }}"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-building"></i>
                </span>

                <span class="menu-text">
                    Profil
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

            </button>


            <div class="submenu">

                <a
                    href="#"
                    class="menu-subitem {{ request()->is('admin/profil/latar-belakang*') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-landmark"></i>
                    <span>Latar Belakang</span>
                </a>


                <a
                    href="#"
                    class="menu-subitem {{ request()->is('admin/profil/kepemilikan*') ? 'active' : '' }}"
                >
                    <i class="fa-regular fa-clock"></i>
                    <span>Kepemilikan</span>
                </a>


                <a
                    href="#"
                    class="menu-subitem {{ request()->is('admin/profil/visi-misi*') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-bullseye"></i>
                    <span>Visi & Misi</span>
                </a>


                <a
                    href="#"
                    class="menu-subitem {{ request()->is('admin/profil/struktur*') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-sitemap"></i>
                    <span>Struktur Organisasi</span>
                </a>

            </div>

        </div>



        <!-- ==========================================
             PRODUK
        =========================================== -->

        <div
            class="menu-dropdown {{ request()->is('admin/produk*') ? 'open' : '' }}"
        >

            <button
                type="button"
                class="menu-dropdown-toggle"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-handshake"></i>
                </span>

                <span class="menu-text">
                    Produk
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

            </button>


            <div class="submenu">

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-route"></i>
                    <span>Mekanisme Pinjaman</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-file-signature"></i>
                    <span>Penjaminan Pembiayaan Syariah</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-building-columns"></i>
                    <span>Penjaminan Kredit Surety Bond</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Penjaminan Bank Garansi</span>
                </a>

            </div>

        </div>



        <!-- ==========================================
             MANAJEMEN
        =========================================== -->

        <div class="menu-dropdown">

            <button
                type="button"
                class="menu-dropdown-toggle"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-users-gear"></i>
                </span>

                <span class="menu-text">
                    Manajemen
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

            </button>


            <div class="submenu">

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Dewan Komisaris</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-users"></i>
                    <span>Direksi</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-sitemap"></i>
                    <span>Struktur Organisasi</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-scale-balanced"></i>
                    <span>Tata Kelola Perusahaan</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-id-card"></i>
                    <span>Profil Manajemen</span>
                </a>

            </div>

        </div>



        <!-- ==========================================
             LAPORAN
        =========================================== -->

        <div
            class="menu-dropdown {{ request()->is('admin/reports*') ? 'open' : '' }}"
        >

            <button
                type="button"
                class="menu-dropdown-toggle"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-chart-column"></i>
                </span>

                <span class="menu-text">
                    Laporan
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

            </button>


            <div class="submenu">

                <a
                    href="{{ url('/admin/reports') }}"
                    class="menu-subitem {{ request()->is('admin/reports*') ? 'active' : '' }}"
                >
                    <i class="fa-regular fa-file-lines"></i>
                    <span>Annual Report</span>
                </a>

                <a
                    href="{{ route('admin.gcg') }}"
                    class="menu-subitem {{ request()->is('admin/gcg*') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Laporan GCG</span>
                </a>

                <a href="{{ url('/admin/audit') }}" class="menu-subitem">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Auditor</span>
                </a>

                <a href="{{ url('/admin/rencana-bisnis') }}" class="menu-subitem">
                    <i class="fa-solid fa-seedling"></i>
                    <span>Rencana Bisnis</span>
                </a>

                <a href="{{ url('/admin/keuangan-berkelanjutan') }}" class="menu-subitem">
                    <i class="fa-solid fa-folder-open"></i>
                    <span>Keuangan Berkelanjutan</span>
                </a>

                <a href="{{ url('/admin/daftar-agen') }}" class="menu-subitem">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Daftar Agen</span>
                </a>

            </div>

        </div>



        <!-- ==========================================
             PEDOMAN
        =========================================== -->

        <!-- <div class="menu-dropdown">

            <button
                type="button"
                class="menu-dropdown-toggle"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-book-open"></i>
                </span>

                <span class="menu-text">
                    Pedoman
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

            </button>


            <div class="submenu">

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-book"></i>
                    <span>Pedoman Perusahaan</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-shield"></i>
                    <span>Kebijakan</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>SOP</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-trophy"></i>
                    <span>Standar Pelayanan</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-scale-balanced"></i>
                    <span>Ketentuan Umum</span>
                </a>

            </div>

        </div> -->

        <!-- ==========================================
             PPID
        =========================================== -->

        <div class="menu-dropdown">

            <button
                type="button"
                class="menu-dropdown-toggle"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-circle-info"></i>
                </span>

                <span class="menu-text">
                    PPID
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

            </button>


            <div class="submenu">

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Tentang PPID</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-regular fa-file-lines"></i>
                    <span>Kelengkapan PPID</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-upload"></i>
                    <span>Standar Pelayanan</span>
                </a>

                <a
                    href="{{ route('admin.ebulletin') }}"
                    class="menu-subitem {{ request()->is('admin/ebulletin') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-newspaper"></i>
                    <span>eBulletin</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-list"></i>
                    <span>Layanan Pusat Informasi</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-list"></i>
                    <span>Rancangan Peraturan</span>
                </a>

                <a
                    href="{{ route('admin.pos-pelayanan') }}"
                    class="menu-subitem {{ request()->is('admin/pos-pelayanan') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-building-circle-check"></i>
                    <span>Pos Pelayanan Informasi Publik</span>
                </a>

            </div>

        </div>

        <!-- ==========================================
            KARIR
        =========================================== -->

        <div class="menu-dropdown {{ request()->is('admin/karir*') ? 'open' : '' }}">

            <button
                type="button"
                class="menu-dropdown-toggle"
                aria-expanded="{{ request()->is('admin/karir*') ? 'true' : 'false' }}"
            >
                <span class="menu-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </span>

                <span class="menu-text">
                    Karir
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
            </button>

            <div class="submenu">

                <a
                    href="{{ route('admin.karir.index') }}"
                    class="menu-subitem {{ request()->routeIs('admin.karir.index') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-list"></i>
                    <span>Daftar Lowongan</span>
                </a>

                <!-- <a
                    href="{{ route('admin.karir.create') }}"
                    class="menu-subitem {{ request()->routeIs('admin.karir.create') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-plus-circle"></i>
                    <span>Tambah Lowongan</span>
                </a> -->

            </div>

        </div>



        <!-- ==========================================
             PENGADUAN
        =========================================== -->

        <div class="menu-dropdown">

            <button
                type="button"
                class="menu-dropdown-toggle"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-headset"></i>
                </span>

                <span class="menu-text">
                    Pengaduan
                </span>

                <span class="menu-badge">
                    5
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

            </button>


            <div class="submenu">

                <a
                    href="{{ url('/admin/complains') }}"
                    class="menu-subitem {{ request()->is('admin/complains*') ? 'active' : '' }}"
                >
                    <i class="fa-solid fa-headset"></i>
                    <span>Form Pengaduan</span>
                </a>

                <!-- <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-road"></i>
                    <span>Prosedur Pengaduan</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Status Pengaduan</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>FAQ Pengaduan</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-solid fa-phone"></i>
                    <span>Kontak Pengaduan</span>
                </a> -->

            </div>


        <!-- ==========================================
             DIGITALISASI
        =========================================== -->

        <a
            href="{{ route('admin.digitalisasi.index') }}"
            class="menu-item {{ request()->is('admin/digitalisasi*') ? 'active' : '' }}"
        >
            <span class="menu-icon">
                <i class="fa-solid fa-laptop-code"></i>
            </span>

            <span class="menu-text">
                Digitalisasi
            </span>
        </a>


        <!-- user-->

        <a href="{{ route('admin.users.index') }}" class="menu-item">
            <i class="fa-solid fa-users"></i>
            <span>Pengguna</span>
        </a>

        </div>


        <!-- ==========================================
             SOSIAL MEDIA
        =========================================== -->

        <!-- <div class="menu-dropdown">

            <button
                type="button"
                class="menu-dropdown-toggle"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-share-nodes"></i>
                </span>

                <span class="menu-text">
                    Sosial Media
                </span>

                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

            </button>


            <div class="submenu">

                <a href="#" class="menu-subitem">
                    <i class="fa-brands fa-instagram"></i>
                    <span>Instagram</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-brands fa-facebook"></i>
                    <span>Facebook</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-brands fa-youtube"></i>
                    <span>YouTube</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-brands fa-linkedin"></i>
                    <span>LinkedIn</span>
                </a>

                <a href="#" class="menu-subitem">
                    <i class="fa-brands fa-tiktok"></i>
                    <span>TikTok</span>
                </a>

            </div>

        </div> -->

        <!-- ==========================================
             CONTENT
        =========================================== -->

        <div class="sidebar-section">

            <div class="menu-label">
                <span>CONTENT</span>
            </div>


            <!-- GALLERY -->

            <!-- <a
                href="{{ url('/admin/galleries') }}"
                class="menu-item {{ request()->is('admin/galleries*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    <i class="fa-regular fa-images"></i>
                </span>

                <span class="menu-text">
                    Gallery
                </span>

            </a> -->


            <!-- BERITA -->

            <!-- <a
                href="{{ url('/admin/news') }}"
                class="menu-item {{ request()->is('admin/news*') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    <i class="fa-regular fa-newspaper"></i>
                </span>

                <span class="menu-text">
                    Berita
                </span>

            </a> -->


            <!-- MITRA -->

            <a
                href="{{ url('/admin/mitra') }}"
                class="menu-item {{ request()->is('admin/mitra') ? 'active' : '' }}"
            >

                <span class="menu-icon">
                    <i class="fa-solid fa-handshake-angle"></i>
                </span>

                <span class="menu-text">
                    Mitra
                </span>

            </a>

        </div>



        <!-- ==========================================
             PENGATURAN
        =========================================== -->

        <div class="sidebar-section sidebar-system">

            <div class="menu-label">
                <span>SYSTEM</span>
            </div>


            <div class="menu-dropdown">

                <button
                    type="button"
                    class="menu-dropdown-toggle"
                >

                    <span class="menu-icon">
                        <i class="fa-solid fa-gear"></i>
                    </span>

                    <span class="menu-text">
                        Pengaturan
                    </span>

                    <i class="fa-solid fa-chevron-down dropdown-arrow"></i>

                </button>


                <div class="submenu">

                    <a href="#" class="menu-subitem">
                        <i class="fa-solid fa-sliders"></i>
                        <span>Pengaturan Umum</span>
                    </a>

                    <a href="#" class="menu-subitem">
                        <i class="fa-solid fa-user"></i>
                        <span>Profil Admin</span>
                    </a>

                    <a href="#" class="menu-subitem">
                        <i class="fa-solid fa-users"></i>
                        <span>Manajemen Pengguna</span>
                    </a>

                    <a href="#" class="menu-subitem">
                        <i class="fa-solid fa-user-shield"></i>
                        <span>Hak Akses & Role</span>
                    </a>

                    <a href="#" class="menu-subitem">
                        <i class="fa-solid fa-lock"></i>
                        <span>Keamanan</span>
                    </a>

                    <a href="#" class="menu-subitem">
                        <i class="fa-solid fa-bell"></i>
                        <span>Notifikasi</span>
                    </a>

                    <a href="#" class="menu-subitem">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <span>Log Aktivitas</span>
                    </a>

                    <a href="#" class="menu-subitem">
                        <i class="fa-solid fa-database"></i>
                        <span>Backup & Restore</span>
                    </a>

                </div>

            </div>

        </div>

    </nav>


    <!-- SIDEBAR BOTTOM -->
    <div class="sidebar-bottom">

        <!-- LOGOUT / KEMBALI KE LOGIN -->
        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf

            <button type="submit" class="logout-btn">
                <span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Keluar
                </span>
            </button>
        </form>

        <!-- DARK MODE -->

        <button
            class="dark-toggle"
            id="darkToggle"
            type="button"
        >

            <span>
                <i class="fa-solid fa-moon"></i>
                Dark Mode
            </span>

            <div class="toggle-switch">
                <div class="toggle-circle"></div>
            </div>

        </button>


        <!-- ADMIN PROFILE -->

        <div class="admin-profile">

            <div class="profile-avatar">
                A
            </div>

            <div class="profile-info">

                <strong>
                    Administrator
                </strong>

                <span>
                    Super Admin
                </span>

            </div>

            <button
                class="profile-more"
                type="button"
            >
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>

        </div>

    </div>

</aside>


    <!-- MAIN -->
    <main class="main-content" id="mainContent">


        <!-- NAVBAR -->
        <header class="topbar">

            <div class="topbar-left">

                <button class="mobile-menu" id="mobileMenu">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <button class="desktop-sidebar-toggle" id="sidebarToggle">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>

                <div class="breadcrumb">

                    <span>Admin</span>

                    <i class="fa-solid fa-chevron-right"></i>

                    <strong>
                        @yield('page', 'Dashboard')
                    </strong>

                </div>

            </div>


            <div class="topbar-right">

                <div class="search-box">

                    <i class="fa-solid fa-magnifying-glass"></i>

                    <input
                        type="text"
                        id="globalSearch"
                        placeholder="Cari sesuatu..."
                    >

                    <span class="search-shortcut">
                        CTRL K
                    </span>

                </div>



<div class="notification-wrapper" id="notificationWrapper" style="position:relative; z-index:99999;">
    <button
        type="button"
        class="top-icon notification-btn"
        id="notificationButton"
        aria-label="Notifikasi"
        aria-expanded="false"
        style="position:relative; cursor:pointer; pointer-events:auto;"
    >
        <i class="fa-regular fa-bell"></i>

        @if(isset($unreadNotificationCount) && $unreadNotificationCount > 0)
            <span class="notification-count">
                {{ $unreadNotificationCount > 99 ? '99+' : $unreadNotificationCount }}
            </span>
        @endif
    </button>

    <div
        id="notificationDropdown"
        class="notification-dropdown"
        style="display:none; position:absolute; top:calc(100% + 12px); right:0; z-index:99999; pointer-events:auto;"
    >
        <div class="notification-head">
            <strong>Notifikasi</strong>
        </div>

        <div class="notification-list">
            @forelse(($adminNotifications ?? collect()) as $notification)
                <a
                    href="{{ $notification->type === 'complaint' ? url('/admin/complains') : '#' }}"
                    class="notification-item"
                    style="display:flex; pointer-events:auto;"
                >
                    <span>
                        <strong>{{ $notification->title }}</strong>
                        <p>{{ $notification->message }}</p>
                        <small>{{ $notification->created_at?->diffForHumans() }}</small>
                    </span>
                </a>
            @empty
                <div class="notification-empty">
                    Belum ada notifikasi.
                </div>
            @endforelse
        </div>

        <a href="{{ url('/admin/complains') }}" class="notification-footer">
            Lihat semua pengaduan
        </a>
    </div>
</div>


                <button class="top-icon">

                    <i class="fa-regular fa-circle-question"></i>

                </button>


                <div class="top-profile">

                    <div class="profile-avatar small">
                        A
                    </div>

                    <div>
                        <strong>Administrator</strong>
                        <span>Super Admin</span>
                    </div>

                    <i class="fa-solid fa-chevron-down"></i>

                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <section class="page-content">

            @yield('content')

        </section>


    </main>


    <!-- TOAST -->
    <div class="toast-container" id="toastContainer"></div>


    <!-- DELETE MODAL -->
    <div class="modal-overlay" id="deleteModal">

        <div class="modal-box">

            <div class="modal-icon danger">
                <i class="fa-solid fa-trash"></i>
            </div>

            <h3>Hapus Data?</h3>

            <p>
                Data yang sudah dihapus tidak dapat dikembalikan.
            </p>

            <div class="modal-actions">

                <button class="btn btn-secondary" data-close-modal>
                    Batal
                </button>

                <button class="btn btn-danger" id="confirmDelete">
                    <i class="fa-solid fa-trash"></i>
                    Ya, Hapus
                </button>

            </div>

        </div>

    </div>


 
<script src="{{ asset('admin/js/admin.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('notificationButton');
    const dropdown = document.getElementById('notificationDropdown');
    const wrapper = document.getElementById('notificationWrapper');

    if (!button || !dropdown || !wrapper) {
        console.error('Elemen notifikasi tidak ditemukan.');
        return;
    }

    // Atur kondisi awal dropdown
    dropdown.style.display = 'none';

    button.addEventListener('click', function (event) {
    event.preventDefault();
    event.stopPropagation();

    dropdown.classList.toggle('show');

    button.setAttribute(
        'aria-expanded',
        dropdown.classList.contains('show') ? 'true' : 'false'
    );
});

    // Klik lonceng untuk membuka/menutup notifikasi
    button.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopPropagation();

        const isOpen = dropdown.style.display === 'block';

        dropdown.style.display = isOpen ? 'none' : 'block';
        button.setAttribute('aria-expanded', String(!isOpen));
    });

    // Klik isi dropdown tidak menutupnya
    dropdown.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    // Klik di luar dropdown untuk menutupnya
    document.addEventListener('click', function () {
        dropdown.style.display = 'none';
        button.setAttribute('aria-expanded', 'false');
    });

    // Tombol Escape untuk menutup dropdown
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            dropdown.style.display = 'none';
            button.setAttribute('aria-expanded', 'false');
        }
    });
});
</script>

@stack('scripts')
</body>
</html>