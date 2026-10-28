<?php

namespace App\Http\Controllers;

use App\Models\PosPelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PosPelayananController extends Controller
{
    // Halaman publik
    public function publicIndex()
    {
        $posPelayanans = PosPelayanan::latest()->get();

        return view(
            'menu..ppid.pos_pelayanan',
            compact('posPelayanans')
        );
    }

    // Daftar data admin
    public function index()
    {
        $posPelayanans = PosPelayanan::latest()->get();

        return view(
            'admin.ppid.pospelayanan.index',
            compact('posPelayanans')
        );
    }

    // Form tambah
    public function create()
    {
        return view('admin.ppid.pospelayanan.form');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file_pdf' => 'required|mimes:pdf|max:10240',
        ]);

        $validated['file_pdf'] = $request
            ->file('file_pdf')
            ->store('pos-pelayanan/pdfs', 'public');

        PosPelayanan::create($validated);

        return redirect()
            ->route('admin.pos-pelayanan')
            ->with('success', 'Dokumen berhasil ditambahkan.');
    }

    // Form edit
    public function edit(PosPelayanan $posPelayanan)
    {
        return view(
            'admin.ppid.pospelayanan.form',
            compact('posPelayanan')
        );
    }

    // Update data
    public function update(
        Request $request,
        PosPelayanan $posPelayanan
    ) {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file_pdf' => 'nullable|mimes:pdf|max:10240',
        ]);

        // Ganti PDF jika ada file baru
        if ($request->hasFile('file_pdf')) {
            if ($posPelayanan->file_pdf) {
                Storage::disk('public')->delete(
                    $posPelayanan->file_pdf
                );
            }

            $validated['file_pdf'] = $request
                ->file('file_pdf')
                ->store('pos-pelayanan/pdfs', 'public');
        }

        $posPelayanan->update($validated);

        return redirect()
            ->route('admin.pos-pelayanan')
            ->with('success', 'Dokumen berhasil diperbarui.');
    }

    // Hapus data
    public function destroy(PosPelayanan $posPelayanan)
    {
        if ($posPelayanan->file_pdf) {
            Storage::disk('public')->delete(
                $posPelayanan->file_pdf
            );
        }

        $posPelayanan->delete();

        return redirect()
            ->route('admin.pos-pelayanan')
            ->with('success', 'Dokumen berhasil dihapus.');
    }
}