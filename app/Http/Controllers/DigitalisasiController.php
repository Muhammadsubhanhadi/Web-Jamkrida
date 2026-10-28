<?php

namespace App\Http\Controllers;

use App\Models\Digitalisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DigitalisasiController extends Controller
{
    /**
     * =====================================================
     * 1. HALAMAN PUBLIK DIGITALISASI
     * Menampilkan gambar roadmap dan konten publik.
     * =====================================================
     */
    public function publicIndex()
    {
        // Mengambil konfigurasi jumbotron digitalisasi.
        $jumbotron = Digitalisasi::where('jenis', 'jumbotron')
            ->latest('id')
            ->first();

        // Mengambil program jika masih dibutuhkan oleh halaman lain.
        $programs = Digitalisasi::where('jenis', 'program')
            ->orderBy('urutan')
            ->orderBy('id')
            ->get();

        // Menampilkan halaman publik yang telah dibuat.
        return view('menu.digitalisasi.digitalisasi', compact(
            'jumbotron',
            'programs'
        ));
    }

    /**
     * =====================================================
     * 2. HALAMAN ADMIN DIGITALISASI
     * Menampilkan konfigurasi gambar dan daftar program.
     * =====================================================
     */
    public function index()
    {
        $jumbotron = Digitalisasi::where('jenis', 'jumbotron')
            ->latest('id')
            ->first();

        $programs = Digitalisasi::where('jenis', 'program')
            ->orderBy('urutan')
            ->orderBy('id')
            ->get();

        return view('admin.digitalisasi.index', compact(
            'jumbotron',
            'programs'
        ));
    }

    /**
     * =====================================================
     * 3. SIMPAN / GANTI GAMBAR ROADMAP
     * Hanya gambar yang dapat diperbarui melalui bagian ini.
     * Judul dan deskripsi tidak diwajibkan untuk diubah.
     * =====================================================
     */
    public function saveJumbotron(Request $request)
    {
        // Validasi gambar saja.
        $request->validate([
            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],
        ], [
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus JPG, JPEG, PNG, atau WEBP.',
            'gambar.max' => 'Ukuran gambar maksimal 10 MB.',
        ]);

        // Ambil konfigurasi jumbotron yang sudah tersimpan.
        $jumbotron = Digitalisasi::where('jenis', 'jumbotron')
            ->latest('id')
            ->first();

        // Buat data awal jika belum ada konfigurasi jumbotron.
        if (!$jumbotron) {
            $jumbotron = new Digitalisasi();
            $jumbotron->jenis = 'jumbotron';
            $jumbotron->judul = 'Transformasi Digital Perusahaan';
            $jumbotron->deskripsi = null;
            $jumbotron->status = true;
        }

        // Jika admin memilih gambar baru, simpan gambar tersebut.
        if ($request->hasFile('gambar')) {
            $gambarLama = $jumbotron->gambar;

            $pathBaru = $request->file('gambar')->store(
                'digitalisasi',
                'public'
            );

            $jumbotron->gambar = $pathBaru;

            // Hapus gambar lama setelah gambar baru berhasil disimpan.
            if ($gambarLama && !filter_var($gambarLama, FILTER_VALIDATE_URL)) {
                $pathLama = ltrim($gambarLama, '/');

                // Mendukung format path lama "storage/digitalisasi/..."
                if (str_starts_with($pathLama, 'storage/')) {
                    $pathLama = substr($pathLama, strlen('storage/'));
                }

                if (Storage::disk('public')->exists($pathLama)) {
                    Storage::disk('public')->delete($pathLama);
                }
            }
        }

        // Simpan hanya konfigurasi gambar tanpa mengganti konten lainnya.
        $jumbotron->save();

        return redirect()
            ->route('admin.digitalisasi.index')
            ->with('success', 'Gambar roadmap berhasil diperbarui.');
    }

    /**
     * =====================================================
     * 4. HALAMAN TAMBAH PROGRAM
     * Dipertahankan agar route lama tidak langsung rusak.
     * =====================================================
     */
    public function create()
    {
        return view('admin.digitalisasi.create');
    }

    /**
     * =====================================================
     * 5. SIMPAN PROGRAM
     * Metode ini dipertahankan untuk kompatibilitas route lama.
     * =====================================================
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'tahapan' => [
                'required',
                'in:Sudah Berjalan,Sedang Dalam Proses,Direncanakan',
            ],
            'tahun' => ['nullable', 'string', 'max:20'],
        ]);

        $program = new Digitalisasi();
        $program->jenis = 'program';
        $program->judul = $validated['judul'];
        $program->deskripsi = $validated['deskripsi'] ?? null;
        $program->tahapan = $validated['tahapan'];
        $program->tahun = $validated['tahun'] ?? null;
        $program->status = true;
        $program->urutan = (
            Digitalisasi::where('jenis', 'program')->max('urutan') ?? 0
        ) + 1;

        $program->save();

        return redirect()
            ->route('admin.digitalisasi.index')
            ->with('success', 'Program berhasil ditambahkan.');
    }

    /**
     * =====================================================
     * 6. HALAMAN EDIT PROGRAM
     * =====================================================
     */
    public function edit(Digitalisasi $digitalisasi)
    {
        if ($digitalisasi->jenis !== 'program') {
            abort(404);
        }

        return view('admin.digitalisasi.edit', compact('digitalisasi'));
    }

    /**
     * =====================================================
     * 7. PERBARUI PROGRAM
     * =====================================================
     */
    public function update(Request $request, Digitalisasi $digitalisasi)
    {
        if ($digitalisasi->jenis !== 'program') {
            abort(404);
        }

        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'tahapan' => [
                'required',
                'in:Sudah Berjalan,Sedang Dalam Proses,Direncanakan',
            ],
            'tahun' => ['nullable', 'string', 'max:20'],
        ]);

        $digitalisasi->judul = $validated['judul'];
        $digitalisasi->deskripsi = $validated['deskripsi'] ?? null;
        $digitalisasi->tahapan = $validated['tahapan'];
        $digitalisasi->tahun = $validated['tahun'] ?? null;

        $digitalisasi->save();

        return redirect()
            ->route('admin.digitalisasi.index')
            ->with('success', 'Program berhasil diperbarui.');
    }

    /**
     * =====================================================
     * 8. HAPUS PROGRAM
     * =====================================================
     */
    public function destroy(Digitalisasi $digitalisasi)
    {
        if ($digitalisasi->jenis !== 'program') {
            abort(404);
        }

        $digitalisasi->delete();

        return redirect()
            ->route('admin.digitalisasi.index')
            ->with('success', 'Program berhasil dihapus.');
    }
}