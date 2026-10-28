<?php

namespace App\Http\Controllers;

use App\Models\FormPengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class AdminPengaduanController extends Controller
{
    /**
     * Nama tabel pengaduan.
     */
    private string $table = 'form_pengaduan';

    /**
     * Menentukan kolom nomor tiket yang tersedia.
     */
    private function ticketColumn(): string
    {
        if (Schema::hasColumn($this->table, 'ticket_number')) {
            return 'ticket_number';
        }

        if (Schema::hasColumn($this->table, 'nomor_tiket')) {
            return 'nomor_tiket';
        }

        return 'id';
    }

    /**
     * Menentukan kolom petugas yang tersedia.
     */
    private function assignmentColumn(): ?string
    {
        if (Schema::hasColumn($this->table, 'petugas')) {
            return 'petugas';
        }

        if (Schema::hasColumn($this->table, 'assigned_to')) {
            return 'assigned_to';
        }

        return null;
    }

    /**
     * Menampilkan daftar pengaduan.
     */
    public function index(Request $request)
    {
        $ticketColumn = $this->ticketColumn();

        $query = FormPengaduan::query();

        // Pencarian nama, subjek, dan nomor tiket.
        if ($request->filled('search')) {
            $search = trim($request->input('search'));

            $query->where(function ($q) use ($search, $ticketColumn) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%");

                if ($ticketColumn !== 'id') {
                    $q->orWhere(
                        $ticketColumn,
                        'like',
                        "%{$search}%"
                    );
                }
            });
        }

        // Filter status.
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $pengaduan = $query
            ->orderByDesc('created_at')
            ->paginate(10)
            ->withQueryString();

        $total = FormPengaduan::count();

        $menunggu = FormPengaduan::whereIn('status', [
            'Menunggu',
            'Baru Masuk',
        ])->count();

        $diproses = FormPengaduan::where('status', 'Diproses')
            ->count();

        $selesai = FormPengaduan::where('status', 'Selesai')
            ->count();

        return view('admin.complains.index', compact(
            'pengaduan',
            'total',
            'menunggu',
            'diproses',
            'selesai',
            'ticketColumn'
        ));
    }

    /**
     * Menampilkan detail pengaduan.
     */
    public function show(FormPengaduan $formPengaduan)
    {
        return view('admin.complains.show', [
            'pengaduan' => $formPengaduan,
            'ticketColumn' => $this->ticketColumn(),
            'assignmentColumn' => $this->assignmentColumn(),
        ]);
    }

    /**
     * Memperbarui status dan petugas pengaduan.
     */
    public function update(
        Request $request,
        FormPengaduan $formPengaduan
    ) {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:Menunggu,Baru Masuk,Diproses,Selesai,Ditolak',
            ],
            'petugas' => [
                'nullable',
                'string',
                'max:150',
            ],
        ]);

        $formPengaduan->status = $validated['status'];

        $assignmentColumn = $this->assignmentColumn();

        if ($assignmentColumn !== null) {
            $formPengaduan->{$assignmentColumn} =
                $validated['petugas'] ?? null;
        }

        $formPengaduan->save();

        return redirect()
            ->route('admin.complains.show', $formPengaduan)
            ->with('success', 'Pengaduan berhasil diperbarui.');
    }

    /**
     * Menampilkan lampiran di browser atau mengunduhnya.
     *
     * FormPengaduanController menyimpan file menggunakan:
     * store('pengaduan', 'local')
     *
     * Lokasi default disk local Laravel:
     * storage/app/private/pengaduan/
     *
     * Jika disk local di konfigurasi aplikasi diarahkan ke lokasi
     * lain, Storage akan mengikuti konfigurasi tersebut.
     */
    public function attachment(
        Request $request,
        FormPengaduan $formPengaduan
    ) {
        // Kolom yang benar berdasarkan controller formulir publik.
        $path = $formPengaduan->attachment_path;

        if (empty($path)) {
            abort(404, 'Pengaduan ini tidak memiliki lampiran.');
        }

        // Mencegah path di luar folder pengaduan.
        $normalizedPath = str_replace('\\', '/', $path);

        if (
            str_starts_with($normalizedPath, '/') ||
            preg_match('/(^|\/)\.\.(\/|$)/', $normalizedPath) ||
            !str_starts_with($normalizedPath, 'pengaduan/')
        ) {
            abort(404, 'Lokasi lampiran tidak valid.');
        }

        $disk = Storage::disk('local');

        if (!$disk->exists($normalizedPath)) {
            abort(404, 'File lampiran tidak ditemukan di penyimpanan.');
        }

        $filename = basename($normalizedPath);

        // Unduh file jika parameter ?download=1 digunakan.
        if ($request->boolean('download')) {
            return $disk->download($normalizedPath, $filename);
        }

        // Tampilkan file di browser.
        $mimeType = $disk->mimeType($normalizedPath)
            ?: 'application/octet-stream';

        // Jenis file yang diizinkan untuk ditampilkan.
        $allowedMimeTypes = [
            'application/pdf',
            'image/jpeg',
            'image/png',
        ];

        if (!in_array($mimeType, $allowedMimeTypes, true)) {
            abort(415, 'Jenis file tidak dapat ditampilkan di browser.');
        }

        return response(
            $disk->get($normalizedPath),
            200,
            [
                'Content-Type' => $mimeType,
                'Content-Disposition' =>
                    'inline; filename="' . $filename . '"',
                'X-Content-Type-Options' => 'nosniff',
                'Cache-Control' => 'private, no-store',
            ]
        );
    }

    /**
     * Menghapus pengaduan beserta file lampirannya.
     */
    public function destroy(FormPengaduan $formPengaduan)
    {
        $path = $formPengaduan->attachment_path;

        // Hapus lampiran hanya jika berada di folder pengaduan.
        if (!empty($path)) {
            $normalizedPath = str_replace('\\', '/', $path);

            $validPath =
                !str_starts_with($normalizedPath, '/') &&
                !preg_match('/(^|\/)\.\.(\/|$)/', $normalizedPath) &&
                str_starts_with($normalizedPath, 'pengaduan/');

            if ($validPath) {
                $disk = Storage::disk('local');

                if ($disk->exists($normalizedPath)) {
                    $disk->delete($normalizedPath);
                }
            }
        }

        // Hapus data pengaduan dari database.
        $formPengaduan->delete();

        return redirect()
            ->route('admin.complains.index')
            ->with('success', 'Pengaduan berhasil dihapus.');
    }
}