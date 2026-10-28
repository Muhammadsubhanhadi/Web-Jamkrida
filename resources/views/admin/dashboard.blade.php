@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')
@section('page', 'Dashboard')

@section('content')

<div class="page-header">

    <div class="page-title">

        <h1>Dashboard 👋</h1>

        <p>
            Selamat datang kembali, Administrator.
            Kelola website Jamkrida dari sini.
        </p>

    </div>

    <button class="btn btn-primary"
            onclick="showToast('Dashboard berhasil diperbarui')">

        <i class="fa-solid fa-rotate"></i>

        Refresh Data

    </button>

</div>


<!-- STATISTICS -->

<div class="stats-grid">


    <div class="stat-card">

        <div class="stat-top">

            <div class="stat-icon">
                <i class="fa-solid fa-box-open"></i>
            </div>

            <span class="stat-change">
                +12%
            </span>

        </div>

        <h2>24</h2>

        <p>Total Produk</p>

    </div>


    <div class="stat-card">

        <div class="stat-top">

            <div class="stat-icon">
                <i class="fa-regular fa-newspaper"></i>
            </div>

            <span class="stat-change">
                +8%
            </span>

        </div>

        <h2>86</h2>

        <p>Total Berita</p>

    </div>


    <div class="stat-card">

        <div class="stat-top">

            <div class="stat-icon">
                <i class="fa-solid fa-handshake"></i>
            </div>

            <span class="stat-change">
                +5%
            </span>

        </div>

        <h2>31</h2>

        <p>Total Mitra</p>

    </div>


    <div class="stat-card">

        <div class="stat-top">

            <div class="stat-icon">
                <i class="fa-solid fa-headset"></i>
            </div>

            <span class="stat-change">
                +18%
            </span>

        </div>

        <h2>12</h2>

        <p>Pengaduan Baru</p>

    </div>


</div>


<!-- CONTENT -->

<div class="content-grid">


    <!-- CHART -->

    <div class="panel">

        <div class="panel-header">

            <h3>
                Statistik Konten
            </h3>

            <a href="#">
                Lihat detail
            </a>

        </div>


        <div class="chart">

            <div class="chart-bar"
                 style="height:40%"
                 title="Jan">
            </div>

            <div class="chart-bar"
                 style="height:55%"
                 title="Feb">
            </div>

            <div class="chart-bar"
                 style="height:45%"
                 title="Mar">
            </div>

            <div class="chart-bar"
                 style="height:70%"
                 title="Apr">
            </div>

            <div class="chart-bar"
                 style="height:60%"
                 title="Mei">
            </div>

            <div class="chart-bar"
                 style="height:85%"
                 title="Jun">
            </div>

            <div class="chart-bar"
                 style="height:72%"
                 title="Jul">
            </div>

            <div class="chart-bar"
                 style="height:92%"
                 title="Agu">
            </div>

            <div class="chart-bar"
                 style="height:80%"
                 title="Sep">
            </div>

        </div>

    </div>


    <!-- ACTIVITY -->

    <div class="panel">

        <div class="panel-header">

            <h3>
                Aktivitas Terbaru
            </h3>

            <a href="#">
                Semua
            </a>

        </div>


        <div class="activity-list">


            <div class="activity-item">

                <div class="stat-icon">
                    <i class="fa-solid fa-plus"></i>
                </div>

                <div>

                    <strong>
                        Produk baru ditambahkan
                    </strong>

                    <p>
                        5 menit lalu
                    </p>

                </div>

            </div>


            <div class="activity-item">

                <div class="stat-icon">
                    <i class="fa-regular fa-newspaper"></i>
                </div>

                <div>

                    <strong>
                        Berita diperbarui
                    </strong>

                    <p>
                        20 menit lalu
                    </p>

                </div>

            </div>


            <div class="activity-item">

                <div class="stat-icon">
                    <i class="fa-solid fa-images"></i>
                </div>

                <div>

                    <strong>
                        Slider diperbarui
                    </strong>

                    <p>
                        1 jam lalu
                    </p>

                </div>

            </div>


            <div class="activity-item">

                <div class="stat-icon">
                    <i class="fa-solid fa-headset"></i>
                </div>

                <div>

                    <strong>
                        Pengaduan baru masuk
                    </strong>

                    <p>
                        2 jam lalu
                    </p>

                </div>

            </div>


        </div>

    </div>

</div>


<br>


<!-- TABLE -->

<div class="panel">

    <div class="panel-header">

        <h3>
            Data Terbaru
        </h3>

        <a href="{{ url('/admin/news') }}">
            Kelola Berita
        </a>

    </div>


    <div class="table-wrapper">

        <table class="data-table">

            <thead>

                <tr>

                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>

            </thead>


            <tbody>

                <tr>

                    <td>
                        Informasi Jamkrida Terbaru
                    </td>

                    <td>
                        Perusahaan
                    </td>

                    <td>
                        12 Sep 2026
                    </td>

                    <td>
                        <span class="status status-active">
                            Published
                        </span>
                    </td>

                    <td>

                        <div class="table-actions">

                            <button
                                class="action-btn action-view"
                                title="Lihat">

                                <i class="fa-regular fa-eye"></i>

                            </button>


                            <button
                                class="action-btn action-edit"
                                title="Edit">

                                <i class="fa-solid fa-pen"></i>

                            </button>


                            <button
                                class="action-btn action-delete"
                                onclick="openDeleteModal(1)"
                                title="Hapus">

                                <i class="fa-solid fa-trash"></i>

                            </button>

                        </div>

                    </td>

                </tr>


                <tr>

                    <td>
                        Layanan Penjaminan Syariah
                    </td>

                    <td>
                        Produk
                    </td>

                    <td>
                        11 Sep 2026
                    </td>

                    <td>
                        <span class="status status-active">
                            Published
                        </span>
                    </td>

                    <td>

                        <div class="table-actions">

                            <button class="action-btn action-view">
                                <i class="fa-regular fa-eye"></i>
                            </button>

                            <button class="action-btn action-edit">
                                <i class="fa-solid fa-pen"></i>
                            </button>

                            <button
                                class="action-btn action-delete"
                                onclick="openDeleteModal(2)">

                                <i class="fa-solid fa-trash"></i>

                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection