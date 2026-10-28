<?php

namespace App\Http\Controllers;

use App\Models\RencanaBisnis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RencanaBisnisController extends Controller
{
    /**
     * ADMIN - Daftar Rencana Bisnis
     */
    public function index()
    {
        $rencanaBisnis = RencanaBisnis::orderBy('tahun', 'desc')->get();

        return view(
            'admin.laporan.rencana_bisnis.index',
            compact('rencanaBisnis')
        );
    }

    /**
     * PUBLIC - Halaman Rencana Bisnis
     */
    public function publicIndex()
    {
        $rencanaBisnis = RencanaBisnis::orderBy('tahun', 'desc')->get();

        return view(
            'menu.laporan.rencana_bisnis',
            compact('rencanaBisnis')
        );
    }

    /**
     * FORM TAMBAH
     */
    public function create()
    {
        return view('admin.laporan.rencana_bisnis.form');
    }

    /**
     * SIMPAN DATA
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|digits:4',
            'file' => 'required|mimes:pdf|max:10240',
        ], [
            'tahun.required' => 'Tahun wajib diisi.',
            'tahun.digits' => 'Tahun harus terdiri dari 4 angka.',
            'file.required' => 'File PDF wajib diupload.',
            'file.mimes' => 'File harus berformat PDF.',
            'file.max' => 'Ukuran file maksimal 10 MB.',
        ]);

        $filePath = $request->file('file')
            ->store('rencana_bisnis', 'public');

        RencanaBisnis::create([
            'tahun' => $request->tahun,
            'file' => $filePath,
        ]);

        return redirect()
            ->route('admin.rencana.bisnis')
            ->with('success', 'Rencana Bisnis berhasil ditambahkan.');
    }

    /**
     * FORM EDIT
     */
    public function edit(RencanaBisnis $rencanaBisnis)
    {
        return view(
            'admin.laporan.rencana_bisnis.form',
            compact('rencanaBisnis')
        );
    }

    /**
     * UPDATE DATA
     */
    public function update(
        Request $request,
        RencanaBisnis $rencanaBisnis
    ) {
        $request->validate([
            'tahun' => 'required|digits:4',
            'file' => 'nullable|mimes:pdf|max:10240',
        ], [
            'tahun.required' => 'Tahun wajib diisi.',
            'tahun.digits' => 'Tahun harus terdiri dari 4 angka.',
            'file.mimes' => 'File harus berformat PDF.',
            'file.max' => 'Ukuran file maksimal 10 MB.',
        ]);

        $data = [
            'tahun' => $request->tahun,
        ];

        /**
         * Jika upload PDF baru
         */
        if ($request->hasFile('file')) {

            // Hapus file lama
            if (
                $rencanaBisnis->file &&
                Storage::disk('public')->exists($rencanaBisnis->file)
            ) {
                Storage::disk('public')->delete($rencanaBisnis->file);
            }

            // Simpan file baru
            $data['file'] = $request->file('file')
                ->store('rencana_bisnis', 'public');
        }

        $rencanaBisnis->update($data);

        return redirect()
            ->route('admin.rencana.bisnis')
            ->with('success', 'Rencana Bisnis berhasil diperbarui.');
    }

    /**
     * HAPUS DATA
     */
    public function destroy(RencanaBisnis $rencanaBisnis)
    {
        if (
            $rencanaBisnis->file &&
            Storage::disk('public')->exists($rencanaBisnis->file)
        ) {
            Storage::disk('public')->delete($rencanaBisnis->file);
        }

        $rencanaBisnis->delete();

        return redirect()
            ->route('admin.rencana.bisnis')
            ->with('success', 'Rencana Bisnis berhasil dihapus.');
    }
}