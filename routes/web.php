<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\GCGController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\RencanaBisnisController;
use App\Http\Controllers\KeuanganBerkelanjutanController;
use App\Http\Controllers\DaftarAgenController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\EBulletinController;
use App\Http\Controllers\PosPelayananController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\FormPengaduanController;
use App\Http\Controllers\AdminPengaduanController;
use App\Http\Controllers\DigitalisasiController;
use App\Models\Mitra;



// =========================
// HALAMAN PUBLIK
// =========================

Route::get('/', function () {

    $mitras = Mitra::where('status', 'aktif')
        ->orderBy('urutan', 'asc')
        ->orderBy('id', 'asc')
        ->get();

    return view('home', compact('mitras'));
});


// =========================
// ADMIN
// =========================



// Dashboard
    Route::get('/admin', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


// Slider
    Route::get('/admin/sliders', function () {
        return view('admin.sliders.index');
    });


// Halaman
    Route::get('/admin/pages', function () {
        return view('admin.pages.index');
    });


// Produk
    Route::get('/admin/products', function () {
        return view('admin.products.index');
    });


// Berita
    // Route::get('/admin/news', function () {
    //     return view('admin.news.index');
    // });


// Galeri
    Route::get('/admin/galleries', function () {
        return view('admin.galleries.index');
    });


// Laporan



// =========================
// MITRA
// =========================

Route::prefix('admin/mitra')
    ->group(function () {

        // Daftar Mitra
        Route::get('/', [
            MitraController::class,
            'index'
        ])->name('admin.mitra.index');

        // Form Tambah Mitra
        Route::get('/create', [
            MitraController::class,
            'create'
        ])->name('admin.mitra.create');

        // Simpan Mitra
        Route::post('/', [
            MitraController::class,
            'store'
        ])->name('admin.mitra.store');

        // Form Edit Mitra
        Route::get('/{mitra}/edit', [
            MitraController::class,
            'edit'
        ])->name('admin.mitra.edit');

        // Update Mitra
        Route::put('/{mitra}', [
            MitraController::class,
            'update'
        ])->name('admin.mitra.update');

        // Hapus Mitra
        Route::delete('/{mitra}', [
            MitraController::class,
            'destroy'
        ])->name('admin.mitra.destroy');
    });


// Menu
    Route::get('/admin/menus', function () {
        return view('admin.menus.index');
    });


// Pengaduan
    Route::get('/admin/complains', function () {
        return view('admin.complains.index');
    });



// =======================================================================================================================================================================
// MENUUUUUUUUUUUUUUUUUUUUUU
// =======================================================================================================================================================================

// =========================
// PROFIL
// =========================

        // =========================
        // TENTANG
        // =========================

            Route::get('/menu/profil/tentang', function () {
                return view('menu..profil.tentang');
            });

        // =========================
        // KEPEMILIKAN
        // =========================

            Route::get('/menu/profil/kepemilikan', function () {
                return view('menu..profil.kepemilikan');
            });

        // =========================
        // VISI - MISI
        // =========================

            Route::get('/menu/profil/visi_misi', function () {
                return view('menu..profil.visi_misi');
            });

        // =========================
        // STRUKTUR
        // =========================

            Route::get('/menu/profil/struktur', function () {
                return view('menu..profil.struktur');
            });

// =========================
// PRODUK
// =========================

        // =========================
        // MEKANISME PENJAMINAN
        // =========================

            Route::get('/menu/produk/penjaminan', function () {
                return view('menu..produk.penjaminan');
            });

        // =========================
        // PEMBIAYAAN SYARIAH
        // =========================

            Route::get('/menu/produk/pembiayaan_syariah', function () {
                return view('menu..produk.pembiayaan_syariah');
            });

        // =========================
        // SURETY BOND
        // =========================

            Route::get('/menu/produk/surety_bond', function () {
                return view('menu..produk.surety_bond');
            });

        // =========================
        // BANK GARANSI
        // =========================

            Route::get('/menu/produk/bank_garansi', function () {
                return view('menu..produk.bank_garansi');
            });


// =========================
// MANAJEMEN
// =========================

// =========================
// LAPORAN
// =========================

        // ===============================
        // ANNUAL REPORT
        // ===============================

            Route::get('/menu/laporan/annual-report',
                [ReportController::class, 'annual']
            )->name('annual-report');

                // Halaman daftar Annual Report
                Route::get('/admin/reports', [ReportController::class, 'index'])
                    ->name('admin.reports');

                    // Form tambah
                Route::get('/admin/reports/create', [ReportController::class, 'create'])
                    ->name('admin.reports.create');

                    // Simpan data
                Route::post('/admin/reports', [ReportController::class, 'store'])
                    ->name('admin.reports.store');

                    // Form edit
                Route::get('/admin/reports/{report}/edit', [ReportController::class, 'edit'])
                    ->name('admin.reports.edit');

                    // Update
                Route::put('/admin/reports/{report}', [ReportController::class, 'update'])
                    ->name('admin.reports.update');

                    // Hapus
                Route::delete('/admin/reports/{report}', [ReportController::class, 'destroy'])
                    ->name('admin.reports.destroy');
    
        // ===============================
        // GCG
        // ===============================

            Route::get('/menu/laporan/gcg',
                [GcgController::class, 'gcg']
            )->name('gcg');

            Route::prefix('admin/gcg')
                ->group(function () {

                    // Halaman daftar GCG
                    Route::get('/', [GcgController::class, 'index'])
                        ->name('admin.gcg');

                    // Form tambah
                    Route::get('/create', [GcgController::class, 'create'])
                        ->name('admin.gcg.create');

                    // Simpan data
                    Route::post('/', [GcgController::class, 'store'])
                        ->name('admin.gcg.store');

                    // Form edit
                    Route::get('/{report}/edit', [GcgController::class, 'edit'])
                        ->name('admin.gcg.edit');

                    // Update
                    Route::put('/{report}', [GcgController::class, 'update'])
                        ->name('admin.gcg.update');

                    // Hapus
                    Route::delete('/{report}', [GcgController::class, 'destroy'])
                        ->name('admin.gcg.destroy');
                });

        // ===============================
        // AUDITOR
        // ===============================

            Route::get('/menu/laporan/auditor', [AuditController::class, 'auditor'])
                ->name('auditor');

            Route::get('/admin/audit-test', function () {
                return 'AUDIT ROUTE BERHASIL';
            })->name('admin.audit.test');

                // Daftar Audit
                Route::get('/admin/audit', [AuditController::class, 'index'])
                    ->name('admin.audit.index');

                // Form Tambah Audit
                Route::get('/admin/audit/create', [AuditController::class, 'create'])
                    ->name('admin.audit.create');

                // Simpan Audit
                Route::post('/admin/audit', [AuditController::class, 'store'])
                    ->name('admin.audit.store');

                // Detail Audit
                Route::get('/admin/audit/{audit}', [AuditController::class, 'show'])
                    ->name('admin.audit.show');

                // Form Edit Audit
                Route::get('/admin/audit/{audit}/edit', [AuditController::class, 'edit'])
                    ->name('admin.audit.edit');

                // Update Audit
                Route::put('/admin/audit/{audit}', [AuditController::class, 'update'])
                    ->name('admin.audit.update');

                // Hapus Audit
                Route::delete('/admin/audit/{audit}', [AuditController::class, 'destroy'])
                    ->name('admin.audit.destroy');

        // ===============================
        // RENCANA BISNIS
        // ===============================

            Route::get(
                '/menu/laporan/rencana_bisnis',
                [RencanaBisnisController::class, 'publicIndex']
            )->name('rencana.bisnis');

            Route::prefix('admin/rencana-bisnis')
                ->group(function () {

                    Route::get('/', [
                        RencanaBisnisController::class,
                        'index'
                    ])->name('admin.rencana.bisnis');

                    Route::get('/create', [
                        RencanaBisnisController::class,
                        'create'
                    ])->name('admin.rencana.bisnis.create');

                    Route::post('/', [
                        RencanaBisnisController::class,
                        'store'
                    ])->name('admin.rencana.bisnis.store');

                    Route::get('/{rencanaBisnis}/edit', [
                        RencanaBisnisController::class,
                        'edit'
                    ])->name('admin.rencana.bisnis.edit');

                    Route::put('/{rencanaBisnis}', [
                        RencanaBisnisController::class,
                        'update'
                    ])->name('admin.rencana.bisnis.update');

                    Route::delete('/{rencanaBisnis}', [
                        RencanaBisnisController::class,
                        'destroy'
                    ])->name('admin.rencana.bisnis.destroy');
                });

        // ===============================
        // KEUANGAN BERKELANJUTAN
        // ===============================

            Route::get(
                '/menu/laporan/keuangan_berkelanjutan',
                [KeuanganBerkelanjutanController::class, 'publicIndex']
            )->name('keuangan.berkelanjutan');

            Route::prefix('admin/keuangan-berkelanjutan')
                ->group(function () {

                    Route::get('/', [
                        KeuanganBerkelanjutanController::class,
                        'index'
                    ])->name('admin.keuangan.berkelanjutan');

                    Route::get('/create', [
                        KeuanganBerkelanjutanController::class,
                        'create'
                    ])->name('admin.keuangan.berkelanjutan.create');

                    Route::post('/', [
                        KeuanganBerkelanjutanController::class,
                        'store'
                    ])->name('admin.keuangan.berkelanjutan.store');

                    Route::get('/{keuanganBerkelanjutan}/edit', [
                        KeuanganBerkelanjutanController::class,
                        'edit'
                    ])->name('admin.keuangan.berkelanjutan.edit');

                    Route::put('/{keuanganBerkelanjutan}', [
                        KeuanganBerkelanjutanController::class,
                        'update'
                    ])->name('admin.keuangan.berkelanjutan.update');

                    Route::delete('/{keuanganBerkelanjutan}', [
                        KeuanganBerkelanjutanController::class,
                        'destroy'
                    ])->name('admin.keuangan.berkelanjutan.destroy');
                });


        // ===============================
        // DAFTAR AGEN
        // =============================== 

            Route::get(
                '/menu/laporan/daftar_agen',
                [DaftarAgenController::class, 'publicIndex']
            )->name('daftar.agen');

            Route::prefix('admin/daftar-agen')
                ->group(function () {

                    Route::get('/', [
                        DaftarAgenController::class,
                        'index'
                    ])->name('admin.daftar.agen');

                    Route::get('/create', [
                        DaftarAgenController::class,
                        'create'
                    ])->name('admin.daftar.agen.create');

                    Route::post('/', [
                        DaftarAgenController::class,
                        'store'
                    ])->name('admin.daftar.agen.store');

                    Route::get('/{daftarAgen}/edit', [
                        DaftarAgenController::class,
                        'edit'
                    ])->name('admin.daftar.agen.edit');

                    Route::put('/{daftarAgen}', [
                        DaftarAgenController::class,
                        'update'
                    ])->name('admin.daftar.agen.update');

                    Route::delete('/{daftarAgen}', [
                        DaftarAgenController::class,
                        'destroy'
                    ])->name('admin.daftar.agen.destroy');
                });


// =========================
// PPID
// =========================

        // ===============================
        // TENTANG PPID
        // =============================== 

            Route::get('/menu/ppid/tentang_ppid', function () {
                return view('menu..ppid.tentang_ppid');
            });

        // ===============================
        // KELENGKAPAN PPID
        // =============================== 

            Route::get('/menu/ppid/kelengkapan_ppid', function () {
                return view('menu..ppid.kelengkapan_ppid');
            });

        // ===============================
        // STANDAR PELAYANAN
        // =============================== 

            Route::get('/menu/ppid/standar_pelayanan', function () {
                return view('menu..ppid.standar_pelayanan');
            });


        // ===============================
        // EBULLETIN
        // ===============================

        Route::get(
            '/menu/ppid/ebulletin',
            [EBulletinController::class, 'publicIndex']
        )->name('ppid.ebulletin');

        Route::prefix('admin/ebulletin')
            ->group(function () {

                Route::get('/', [
                    EBulletinController::class,
                    'index'
                ])->name('admin.ebulletin');

                Route::get('/create', [
                    EBulletinController::class,
                    'create'
                ])->name('admin.ebulletin.create');

                Route::post('/', [
                    EBulletinController::class,
                    'store'
                ])->name('admin.ebulletin.store');

                Route::get('/{ebulletin}/edit', [
                    EBulletinController::class,
                    'edit'
                ])->name('admin.ebulletin.edit');

                Route::put('/{ebulletin}', [
                    EBulletinController::class,
                    'update'
                ])->name('admin.ebulletin.update');

                Route::delete('/{ebulletin}', [
                    EBulletinController::class,
                    'destroy'
                ])->name('admin.ebulletin.destroy');
            });


        // ===============================
        // LAYANAN PUSAT INFORMASI
        // =============================== 

            Route::get('/menu/ppid/layanan', function () {
                return view('menu..ppid.layanan');
            });

        // ===============================
        // RANCANGAN PERATURAN
        // =============================== 

            Route::get('/menu/ppid/rancangan_peraturan', function () {
                return view('menu..ppid.rancangan_peraturan');
            });


        // ===============================
        // POS PELAYANAN INFORMASI PUBLIK
        // ===============================

        Route::get(
            '/menu/ppid/pos_pelayanan',
            [PosPelayananController::class, 'publicIndex']
        )->name('ppid.pos-pelayanan');

        Route::prefix('admin/pos-pelayanan')
            ->group(function () {

                Route::get('/', [
                    PosPelayananController::class,
                    'index'
                ])->name('admin.pos-pelayanan');

                Route::get('/create', [
                    PosPelayananController::class,
                    'create'
                ])->name('admin.pos-pelayanan.create');

                Route::post('/', [
                    PosPelayananController::class,
                    'store'
                ])->name('admin.pos-pelayanan.store');

                Route::get('/{posPelayanan}/edit', [
                    PosPelayananController::class,
                    'edit'
                ])->name('admin.pos-pelayanan.edit');

                Route::put('/{posPelayanan}', [
                    PosPelayananController::class,
                    'update'
                ])->name('admin.pos-pelayanan.update');

                Route::delete('/{posPelayanan}', [
                    PosPelayananController::class,
                    'destroy'
                ])->name('admin.pos-pelayanan.destroy');
            });



// =========================
// PENGADUAN
// =========================

    // =========================
    // WBS
    // =========================

        Route::get('/menu/pengaduan/whistle_blowing', function () {
            return view('menu..pengaduan.whistle_blowing');
        });

    // =========================
    // FORM PENGADUAN
    // =========================

        Route::get('/menu/pengaduan/form',[FormPengaduanController::class, 'create']
        )->name('pengaduan.form');

        Route::post('/menu/pengaduan/form',[FormPengaduanController::class, 'store']
        )->name('pengaduan.store');

    // =========================
    // FORM PENGADUAN ADMIN
    // =========================

        Route::prefix('admin')->group(function () {
        Route::get('/complains', [
            AdminPengaduanController::class,
            'index'
        ])->name('admin.complains.index');

        Route::get('/complains/{formPengaduan}', [
            AdminPengaduanController::class,
            'show'
        ])->name('admin.complains.show');

        Route::patch('/complains/{formPengaduan}', [
            AdminPengaduanController::class,
            'update'
        ])->name('admin.complains.update');
        
        Route::get(
            '/admin/complains/{formPengaduan}/attachment',
            [AdminPengaduanController::class, 'attachment']
        )->name('admin.complains.attachment');

        Route::delete(
            '/admin/complains/{formPengaduan}',
            [AdminPengaduanController::class, 'destroy']
        )->name('admin.complains.destroy');

    });
    
 // =========================
 // DIGITALISASI 
 // =========================

    Route::get(
        '/menu/digitalisasi/digitalisasi',
        [DigitalisasiController::class, 'publicIndex']
    )->name('digitalisasi');

        // =========================
        // ADMIN DIGITALISASI 
        // =========================

            Route::prefix('admin/digitalisasi')->name('admin.digitalisasi.')->group(function () {
            Route::get('/', [DigitalisasiController::class, 'index'])
                ->name('index');

            Route::post('/jumbotron', [DigitalisasiController::class, 'saveJumbotron'])
                ->name('jumbotron.save');

            Route::get('/create', [DigitalisasiController::class, 'create'])
                ->name('create');

            Route::post('/', [DigitalisasiController::class, 'store'])
                ->name('store');

            Route::get('/{digitalisasi}/edit', [DigitalisasiController::class, 'edit'])
                ->name('edit');

            Route::put('/{digitalisasi}', [DigitalisasiController::class, 'update'])
                ->name('update');

            Route::delete('/{digitalisasi}', [DigitalisasiController::class, 'destroy'])
                ->name('destroy');
            });

 // =========================
 // KARIR 
 // =========================

    Route::get(
        '/menu/karir/karir',
        [KarirController::class, 'publicIndex']
    )->name('karir');

    // untuk halaman arsip lowongan karir

    Route::get(
        '/menu/karir/arsip',
        [KarirController::class, 'publicArchive']
    )->name('karir.arsip');

    // =========================
    // ADMIN KARIR
    // =========================

        Route::resource('/admin/karir', KarirController::class)
            ->names('admin.karir');

// =========================
// SOSIAL MEDIA
// =========================

// =========================
// USER
// =========================

    Route::resource('/admin/users', UserController::class)
    ->names('admin.users');

// =========================
// LOGIN
// =========================

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');

// =========================
// LOGOUT
// =========================

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

