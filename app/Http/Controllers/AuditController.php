<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    /**
     * Menampilkan semua data audit
     */
    public function index()
    {
        $audits = Audit::orderBy('tahun', 'desc')->get();

        return view('admin.laporan.audit.index', compact('audits'));
    }

    /**
     * Form tambah audit
     */
    public function create()
    {
        return view('admin.laporan.audit.form', [
            'audit' => new Audit(),
            'title' => 'Tambah Auditor',
            'action' => route('admin.audit.store'),
            'method' => 'POST',
        ]);
    }

    /**
     * Menyimpan audit baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_auditor' => 'required|string|max:255',
            'tahun' => 'required|integer|min:1900|max:2100',
            'predikat' => 'required|string|max:255',
        ], [
            'nama_auditor.required' => 'Nama auditor wajib diisi.',
            'tahun.required' => 'Tahun wajib diisi.',
            'tahun.integer' => 'Tahun harus berupa angka.',
            'predikat.required' => 'Predikat wajib diisi.',
        ]);

        Audit::create($validated);

        return redirect()
            ->route('admin.audit.index')
            ->with('success', 'Data auditor berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail audit
     */
    public function show(Audit $audit)
    {
        return view('admin.laporan.audit.show', compact('audit'));
    }

    /**
     * Form edit audit
     */
    public function edit(Audit $audit)
    {
        return view('admin.laporan.audit.form', [
            'audit' => $audit,
            'title' => 'Edit Auditor',
            'action' => route('admin.audit.update', $audit->id),
            'method' => 'PUT',
        ]);
    }

    /**
     * Update audit
     */
    public function update(Request $request, Audit $audit)
    {
        $validated = $request->validate([
            'nama_auditor' => 'required|string|max:255',
            'tahun' => 'required|integer|min:1900|max:2100',
            'predikat' => 'required|string|max:255',
        ], [
            'nama_auditor.required' => 'Nama auditor wajib diisi.',
            'tahun.required' => 'Tahun wajib diisi.',
            'tahun.integer' => 'Tahun harus berupa angka.',
            'predikat.required' => 'Predikat wajib diisi.',
        ]);

        $audit->update($validated);

        return redirect()
            ->route('admin.audit.index')
            ->with('success', 'Data auditor berhasil diperbarui.');
    }

    /**
     * Hapus audit
     */
    public function destroy(Audit $audit)
    {
        $audit->delete();

        return redirect()
            ->route('admin.audit.index')
            ->with('success', 'Data auditor berhasil dihapus.');
    }

    public function auditor()
{
    $audits = Audit::orderBy('tahun', 'desc')->get();

    return view('menu.laporan.auditor', compact('audits'));
}
}