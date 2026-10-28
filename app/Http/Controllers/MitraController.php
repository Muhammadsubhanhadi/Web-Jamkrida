<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    /**
     * Menampilkan daftar mitra
     */
    public function index()
    {
        $mitras = Mitra::orderBy('urutan', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.mitra.index', compact('mitras'));
    }


    /**
     * Form tambah mitra
     */
    public function create()
    {
        return view('admin.mitra.form', [
            'mitra' => new Mitra(),
            'title' => 'Tambah Mitra',
            'action' => route('admin.mitra.store'),
            'method' => 'POST',
        ]);
    }


    /**
     * Menyimpan mitra baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mitra' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'status' => 'required|in:aktif,nonaktif',
            'urutan' => 'required|integer|min:0',
        ], [
            'nama_mitra.required' => 'Nama mitra wajib diisi.',
            'logo.required' => 'Logo mitra wajib diupload.',
            'logo.image' => 'File harus berupa gambar.',
            'logo.mimes' => 'Logo harus berupa JPG, JPEG, PNG, WEBP, atau SVG.',
            'logo.max' => 'Ukuran logo maksimal 2 MB.',
            'status.required' => 'Status wajib dipilih.',
            'urutan.required' => 'Urutan wajib diisi.',
        ]);

        // Upload logo
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request
                ->file('logo')
                ->store('mitra', 'public');
        }

        Mitra::create($validated);

        return redirect()
            ->route('admin.mitra.index')
            ->with('success', 'Mitra berhasil ditambahkan.');
    }


    /**
     * Form edit mitra
     */
    public function edit(Mitra $mitra)
    {
        return view('admin.mitra.form', [
            'mitra' => $mitra,
            'title' => 'Edit Mitra',
            'action' => route('admin.mitra.update', $mitra->id),
            'method' => 'PUT',
        ]);
    }


    /**
     * Update mitra
     */
    public function update(Request $request, Mitra $mitra)
    {
        $validated = $request->validate([
            'nama_mitra' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'status' => 'required|in:aktif,nonaktif',
            'urutan' => 'required|integer|min:0',
        ], [
            'nama_mitra.required' => 'Nama mitra wajib diisi.',
            'logo.image' => 'File harus berupa gambar.',
            'logo.mimes' => 'Logo harus berupa JPG, JPEG, PNG, WEBP, atau SVG.',
            'logo.max' => 'Ukuran logo maksimal 2 MB.',
        ]);

        // Jika upload logo baru
        if ($request->hasFile('logo')) {

            // Hapus logo lama
            if ($mitra->logo) {
                Storage::disk('public')->delete($mitra->logo);
            }

            // Simpan logo baru
            $validated['logo'] = $request
                ->file('logo')
                ->store('mitra', 'public');

        } else {

            // Jangan mengubah logo lama
            unset($validated['logo']);
        }

        $mitra->update($validated);

        return redirect()
            ->route('admin.mitra.index')
            ->with('success', 'Mitra berhasil diperbarui.');
    }


    /**
     * Hapus mitra
     */
    public function destroy(Mitra $mitra)
    {
        // Hapus file logo
        if ($mitra->logo) {
            Storage::disk('public')->delete($mitra->logo);
        }

        // Hapus data
        $mitra->delete();

        return redirect()
            ->route('admin.mitra.index')
            ->with('success', 'Mitra berhasil dihapus.');
    }
}