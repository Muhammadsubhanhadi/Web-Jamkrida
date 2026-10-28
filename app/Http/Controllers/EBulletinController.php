<?php

namespace App\Http\Controllers;

use App\Models\EBulletin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EBulletinController extends Controller
{
    // Halaman publik
    public function publicIndex()
    {
        $eBulletins = EBulletin::latest()->get();

        return view('menu..ppid.ebulletin', compact('eBulletins'));
    }

    // Daftar eBulletin di admin
    public function index()
    {
        $eBulletins = EBulletin::latest()->get();

        return view('admin.ppid.ebulletin.index', compact('eBulletins'));
    }

    // Form tambah eBulletin
    public function create()
    {
        return view('admin.ppid.ebulletin.form');
    }

    // Simpan eBulletin baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'file_pdf' => 'required|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('cover')) {
            $validated['cover'] = $request->file('cover')
                ->store('ebulletin/covers', 'public');
        }

        $validated['file_pdf'] = $request->file('file_pdf')
            ->store('ebulletin/pdfs', 'public');

        EBulletin::create($validated);

        return redirect()
            ->route('admin.ebulletin')
            ->with('success', 'eBulletin berhasil ditambahkan.');
    }

    // Form edit eBulletin
    public function edit(EBulletin $ebulletin)
    {
        return view(
            'admin.ppid.ebulletin.form',
            ['eBulletin' => $ebulletin]
        );
    }

    // Update eBulletin
    public function update(Request $request, EBulletin $ebulletin)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'file_pdf' => 'nullable|mimes:pdf|max:10240',
        ]);

        // Ganti cover jika ada file baru
        if ($request->hasFile('cover')) {
            if ($ebulletin->cover) {
                Storage::disk('public')->delete($ebulletin->cover);
            }

            $validated['cover'] = $request->file('cover')
                ->store('ebulletin/covers', 'public');
        }

        // Ganti PDF jika ada file baru
        if ($request->hasFile('file_pdf')) {
            if ($ebulletin->file_pdf) {
                Storage::disk('public')->delete($ebulletin->file_pdf);
            }

            $validated['file_pdf'] = $request->file('file_pdf')
                ->store('ebulletin/pdfs', 'public');
        }

        $ebulletin->update($validated);

        return redirect()
            ->route('admin.ebulletin')
            ->with('success', 'eBulletin berhasil diperbarui.');
    }

    // Hapus eBulletin
    public function destroy(EBulletin $ebulletin)
    {
        if ($ebulletin->cover) {
            Storage::disk('public')->delete($ebulletin->cover);
        }

        if ($ebulletin->file_pdf) {
            Storage::disk('public')->delete($ebulletin->file_pdf);
        }

        $ebulletin->delete();

        return redirect()
            ->route('admin.ebulletin')
            ->with('success', 'eBulletin berhasil dihapus.');
    }
}