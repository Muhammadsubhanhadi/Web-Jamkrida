<?php

namespace App\Http\Controllers;

use App\Models\DaftarAgen;
use Illuminate\Http\Request;

class DaftarAgenController extends Controller
{
    /**
     * ADMIN - Daftar Agen
     */
    public function index()
    {
        $daftarAgen = DaftarAgen::orderBy('nama', 'asc')->get();

        return view(
            'admin.laporan.daftar_agen.index',
            compact('daftarAgen')
        );
    }

    /**
     * PUBLIC - Daftar Agen
     */
    public function publicIndex()
    {
        $daftarAgen = DaftarAgen::orderBy('nama', 'asc')->get();

        return view(
            'menu.laporan.daftar_agen',
            compact('daftarAgen')
        );
    }

    /**
     * FORM TAMBAH
     */
    public function create()
    {
        return view(
            'admin.laporan.daftar_agen.form'
        );
    }

    /**
     * SIMPAN
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ], [
            'nama.required' => 'Nama agen wajib diisi.',
            'nama.max' => 'Nama agen maksimal 255 karakter.',
        ]);

        DaftarAgen::create([
            'nama' => $request->nama,
        ]);

        return redirect()
            ->route('admin.daftar.agen')
            ->with(
                'success',
                'Daftar Agen berhasil ditambahkan.'
            );
    }

    /**
     * FORM EDIT
     */
    public function edit(DaftarAgen $daftarAgen)
    {
        return view(
            'admin.laporan.daftar_agen.form',
            compact('daftarAgen')
        );
    }

    /**
     * UPDATE
     */
    public function update(
        Request $request,
        DaftarAgen $daftarAgen
    ) {
        $request->validate([
            'nama' => 'required|string|max:255',
        ], [
            'nama.required' => 'Nama agen wajib diisi.',
            'nama.max' => 'Nama agen maksimal 255 karakter.',
        ]);

        $daftarAgen->update([
            'nama' => $request->nama,
        ]);

        return redirect()
            ->route('admin.daftar.agen')
            ->with(
                'success',
                'Daftar Agen berhasil diperbarui.'
            );
    }

    /**
     * HAPUS
     */
    public function destroy(DaftarAgen $daftarAgen)
    {
        $daftarAgen->delete();

        return redirect()
            ->route('admin.daftar.agen')
            ->with(
                'success',
                'Daftar Agen berhasil dihapus.'
            );
    }
}