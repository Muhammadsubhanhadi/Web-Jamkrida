<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class KarirController extends Controller
{
    /**
     * Halaman karir publik: menampilkan lowongan yang masih aktif.
     */
    public function publicIndex()
    {
        $today = now()->toDateString();

        // Lowongan yang sudah dipublikasikan dan masih berlaku.
        $lowonganAktif = Karir::where('status', 'published')
            ->where(function ($query) use ($today) {
                $query->whereNull('published_at')
                    ->orWhereDate('published_at', '<=', $today);
            })
            ->where(function ($query) use ($today) {
                $query->whereNull('deadline')
                    ->orWhereDate('deadline', '>=', $today);
            })
            ->latest()
            ->get();

        // Tetap menyediakan data lowongan yang ditutup untuk
        // kompatibilitas dengan halaman Karir yang sudah ada.
        $lowonganDitutup = Karir::where(function ($query) use ($today) {
            $query->whereIn('status', ['closed', 'archived'])
                ->orWhere(function ($subQuery) use ($today) {
                    $subQuery->where('status', 'published')
                        ->whereNotNull('deadline')
                        ->whereDate('deadline', '<', $today);
                });
        })
            ->where(function ($query) use ($today) {
                $query->whereNull('published_at')
                    ->orWhereDate('published_at', '<=', $today);
            })
            ->latest()
            ->get();

        return view('menu.karir.karir', compact(
            'lowonganAktif',
            'lowonganDitutup'
        ));
    }

    /**
     * Halaman arsip lowongan publik.
     */
    public function publicArchive(Request $request)
    {
        $today = now()->toDateString();

        $query = Karir::where(function ($query) use ($today) {
            // Lowongan yang secara manual sudah ditutup atau diarsipkan.
            $query->whereIn('status', ['closed', 'archived'])

                // Lowongan published yang sudah melewati deadline.
                ->orWhere(function ($subQuery) use ($today) {
                    $subQuery->where('status', 'published')
                        ->whereNotNull('deadline')
                        ->whereDate('deadline', '<', $today);
                });
        })
            ->where(function ($query) use ($today) {
                // Jangan tampilkan lowongan yang tanggal publikasinya
                // masih berada di masa depan.
                $query->whereNull('published_at')
                    ->orWhereDate('published_at', '<=', $today);
            });

        // Pencarian berdasarkan judul, departemen, atau lokasi.
        if ($request->filled('q')) {
            $keyword = trim($request->input('q'));

            $query->where(function ($searchQuery) use ($keyword) {
                $searchQuery->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('department', 'like', '%' . $keyword . '%')
                    ->orWhere('location', 'like', '%' . $keyword . '%');
            });
        }

        $lowonganArsip = $query
            ->latest()
            ->paginate(9)
            ->withQueryString();

        return view('menu.karir.arsip', compact('lowonganArsip'));
    }

    /**
     * Daftar lowongan di halaman admin.
     */
    public function index()
    {
        $karir = Karir::latest()->paginate(10);

        return view('admin.karir.index', compact('karir'));
    }

    /**
     * Form tambah lowongan.
     */
    public function create()
    {
        return view('admin.karir.form');
    }

    /**
     * Simpan lowongan baru.
     */
    public function store(Request $request)
    {
        $data = $this->validateKarir($request);

        $data['slug'] = $this->buatSlug($data['title']);

        if ($request->hasFile('banner')) {
            $data['banner'] = $request->file('banner')
                ->store('karir/banner', 'public');
        }

        if ($request->hasFile('announcement_pdf')) {
            $data['announcement_pdf'] = $request
                ->file('announcement_pdf')
                ->store('karir/pengumuman', 'public');
        }

        Karir::create($data);

        return redirect()
            ->route('admin.karir.index')
            ->with('success', 'Lowongan karir berhasil ditambahkan.');
    }

    /**
     * Form edit lowongan.
     */
    public function edit(Karir $karir)
    {
        return view('admin.karir.form', compact('karir'));
    }

    /**
     * Perbarui lowongan.
     */
    public function update(Request $request, Karir $karir)
    {
        $data = $this->validateKarir($request);

        $data['slug'] = $this->buatSlug(
            $data['title'],
            $karir->id
        );

        if ($request->hasFile('banner')) {
            if ($karir->banner) {
                Storage::disk('public')->delete($karir->banner);
            }

            $data['banner'] = $request->file('banner')
                ->store('karir/banner', 'public');
        }

        if ($request->hasFile('announcement_pdf')) {
            if ($karir->announcement_pdf) {
                Storage::disk('public')->delete(
                    $karir->announcement_pdf
                );
            }

            $data['announcement_pdf'] = $request
                ->file('announcement_pdf')
                ->store('karir/pengumuman', 'public');
        }

        $karir->update($data);

        return redirect()
            ->route('admin.karir.index')
            ->with('success', 'Lowongan karir berhasil diperbarui.');
    }

    /**
     * Hapus lowongan.
     */
    public function destroy(Karir $karir)
    {
        if ($karir->banner) {
            Storage::disk('public')->delete($karir->banner);
        }

        if ($karir->announcement_pdf) {
            Storage::disk('public')->delete(
                $karir->announcement_pdf
            );
        }

        $karir->delete();

        return redirect()
            ->route('admin.karir.index')
            ->with('success', 'Lowongan karir berhasil dihapus.');
    }

    /**
     * Validasi data lowongan.
     */
    private function validateKarir(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'department' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'employment_type' => ['nullable', 'string', 'max:100'],
            'vacancy_count' => ['required', 'integer', 'min:1'],
            'description' => ['nullable', 'string'],
            'responsibilities' => ['nullable', 'string'],
            'qualifications' => ['nullable', 'string'],
            'required_documents' => ['nullable', 'string'],
            'banner' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],
            'announcement_pdf' => [
                'nullable',
                'file',
                'mimes:pdf',
                'max:5120',
            ],
            'application_method' => [
                'required',
                Rule::in(['external']),
            ],
            'application_email' => [
                'nullable',
                'email',
                'max:255',
            ],
            'application_url' => ['nullable', 'url', 'max:2000'],
            'application_instructions' => ['nullable', 'string'],
            'status' => [
                'required',
                Rule::in(['draft', 'published', 'closed', 'archived']),
            ],
            'published_at' => ['nullable', 'date'],
            'deadline' => ['nullable', 'date'],
        ]);
    }

    /**
     * Buat slug unik dari judul.
     */
    private function buatSlug(string $title, ?int $ignoreId = null): string
    {
        $slugDasar = Str::slug($title);
        $slug = $slugDasar;
        $nomor = 1;

        while (
            Karir::where('slug', $slug)
                ->when(
                    $ignoreId,
                    fn ($query) => $query->where('id', '!=', $ignoreId)
                )
                ->exists()
        ) {
            $slug = $slugDasar . '-' . $nomor++;
        }

        return $slug;
    }
}