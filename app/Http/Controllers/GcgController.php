<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GcgController extends Controller
{
    public function index()
    {
        $gcgs = Report::where('type', 'GCG')
            ->orderBy('year', 'desc')
            ->get();

        return view(
            'admin.laporan.gcg.index',
            compact('gcgs')
        );
    }

    public function gcg()
    {
        $gcgs = Report::where('type', 'GCG')
            ->orderBy('year', 'desc')
            ->get();

        return view(
            'menu.laporan.gcg',
            compact('gcgs')
        );
    }

    public function create()
    {
        return view('admin.laporan.gcg.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'file' => 'required|mimes:pdf|max:10240',
            'description' => 'nullable|string',
        ]);

        $filePath = $request->file('file')
            ->store('reports', 'public');

        Report::create([
            'type' => 'GCG',
            'title' => $request->title,
            'year' => $request->year,
            'file_url' => $filePath,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('admin.gcg')
            ->with('success', 'GCG berhasil ditambahkan.');
    }

    public function edit(Report $report)
    {
        abort_if($report->type !== 'GCG', 404);

        return view(
            'admin.laporan.gcg.form',
            compact('report')
        );
    }

    public function update(Request $request, Report $report)
    {
        abort_if($report->type !== 'GCG', 404);

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

        if ($request->hasFile('file')) {

            if ($report->file_url) {
                Storage::disk('public')->delete($report->file_url);
            }

            $filePath = $request->file('file')
                ->store('reports', 'public');

            $data['file_url'] = $filePath;
        }

        $report->update($data);

        return redirect()
            ->route('admin.gcg')
            ->with('success', 'GCG berhasil diperbarui.');
    }

    public function destroy(Report $report)
    {
        abort_if($report->type !== 'GCG', 404);

        if ($report->file_url) {
            Storage::disk('public')->delete($report->file_url);
        }

        $report->delete();

        return redirect()
            ->route('admin.gcg')
            ->with('success', 'GCG berhasil dihapus.');
    }
}