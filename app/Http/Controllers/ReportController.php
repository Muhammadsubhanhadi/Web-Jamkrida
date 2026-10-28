<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;

class ReportController extends Controller
{
    // Menampilkan daftar Annual Report
    public function index()
    {
        $reports = Report::where('type', 'Annual Report')
            ->orderBy('year', 'desc')
            ->get();

        return view(
            'admin.laporan.annual_report.index',
            compact('reports')
        );
    }

    // Menampilkan Annual Report di halaman public
    public function annual()
    {
        $annualReports = Report::where('type', 'Annual Report')
            ->orderBy('year', 'desc')
            ->get();

        return view(
            'menu.laporan.annual_report',
            compact('annualReports')
        );
    }

    // Menampilkan form tambah
    public function create()
    {
        return view('admin.laporan.annual_report.form');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'file' => 'required|mimes:pdf|max:10240',
            'description' => 'nullable|string',
        ]);

        // Upload PDF
        $filePath = $request->file('file')
            ->store('reports', 'public');

        // Simpan ke database
        Report::create([
            'type' => 'Annual Report',
            'title' => $request->title,
            'year' => $request->year,
            'file_url' => $filePath,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('admin.reports')
            ->with('success', 'Annual Report berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit(Report $report)
    {
        return view(
            'admin.laporan.annual_report.form',
            compact('report')
        );
    }

    // Menyimpan perubahan
    public function update(Request $request, Report $report)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'file' => 'nullable|mimes:pdf|max:10240',
            'description' => 'nullable|string',
        ]);

        $data = [
            'title' => $request->title,
            'year' => $request->year,
            'description' => $request->description,
        ];

        // Kalau memilih PDF baru
        if ($request->hasFile('file')) {

            $filePath = $request->file('file')
                ->store('reports', 'public');

            $data['file_url'] = $filePath;
        }

        $report->update($data);

        return redirect()
            ->route('admin.reports')
            ->with('success', 'Annual Report berhasil diperbarui.');
    }

    // Menghapus Annual Report
    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()
            ->route('admin.reports')
            ->with('success', 'Annual Report berhasil dihapus.');
    }
}