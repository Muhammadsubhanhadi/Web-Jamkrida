<?php

namespace App\Http\Controllers;

use App\Models\KeuanganBerkelanjutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeuanganBerkelanjutanController extends Controller
{
    /**
     * ADMIN - Daftar Keuangan Berkelanjutan
     */
    public function index()
    {
        $keuanganBerkelanjutan = KeuanganBerkelanjutan::orderBy(
            'tahun',
            'desc'
        )->get();

        return view(
            'admin.laporan.keuangan_berkelanjutan.index',
            compact('keuanganBerkelanjutan')
        );
    }

    /**
     * PUBLIC - Halaman Keuangan Berkelanjutan
     */
    public function publicIndex()
    {
        $keuanganBerkelanjutan = KeuanganBerkelanjutan::orderBy(
            'tahun',
            'desc'
        )->get();

        return view(
            'menu.laporan.keuangan_berkelanjutan',
            compact('keuanganBerkelanjutan')
        );
    }

    /**
     * FORM TAMBAH
     */
    public function create()
    {
        return view(
            'admin.laporan.keuangan_berkelanjutan.form'
        );
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
            ->store('keuangan_berkelanjutan', 'public');

        KeuanganBerkelanjutan::create([
            'tahun' => $request->tahun,
            'file' => $filePath,
        ]);

        return redirect()
            ->route('admin.keuangan.berkelanjutan')
            ->with(
                'success',
                'Keuangan Berkelanjutan berhasil ditambahkan.'
            );
    }

    /**
     * FORM EDIT
     */
    public function edit(KeuanganBerkelanjutan $keuanganBerkelanjutan)
    {
        return view(
            'admin.laporan.keuangan_berkelanjutan.form',
            compact('keuanganBerkelanjutan')
        );
    }

    /**
     * UPDATE DATA
     */
    public function update(
        Request $request,
        KeuanganBerkelanjutan $keuanganBerkelanjutan
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

        /*
        |--------------------------------------------------------------------------
        | Jika upload file PDF baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('file')) {

            // Hapus file lama
            if (
                $keuanganBerkelanjutan->file &&
                Storage::disk('public')->exists(
                    $keuanganBerkelanjutan->file
                )
            ) {
                Storage::disk('public')->delete(
                    $keuanganBerkelanjutan->file
                );
            }

            // Simpan file baru
            $data['file'] = $request->file('file')
                ->store('keuangan_berkelanjutan', 'public');
        }

        $keuanganBerkelanjutan->update($data);

        return redirect()
            ->route('admin.keuangan.berkelanjutan')
            ->with(
                'success',
                'Keuangan Berkelanjutan berhasil diperbarui.'
            );
    }

    /**
     * HAPUS DATA
     */
    public function destroy(
        KeuanganBerkelanjutan $keuanganBerkelanjutan
    ) {
        // Hapus file PDF
        if (
            $keuanganBerkelanjutan->file &&
            Storage::disk('public')->exists(
                $keuanganBerkelanjutan->file
            )
        ) {
            Storage::disk('public')->delete(
                $keuanganBerkelanjutan->file
            );
        }

        // Hapus data
        $keuanganBerkelanjutan->delete();

        return redirect()
            ->route('admin.keuangan.berkelanjutan')
            ->with(
                'success',
                'Keuangan Berkelanjutan berhasil dihapus.'
            );
    }
}