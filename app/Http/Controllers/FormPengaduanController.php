<?php

namespace App\Http\Controllers;

use App\Models\FormPengaduan;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FormPengaduanController extends Controller
{
    /**
     * Menampilkan halaman formulir pengaduan.
     */
    public function create()
    {
        return view('menu.pengaduan.form_pengaduan');
    }

    /**
     * Menyimpan pengaduan sekaligus membuat notifikasi admin.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'contact' => ['required', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:150'],
            'category' => ['required', 'string', 'max:100'],
            'subject' => ['required', 'string', 'max:200'],
            'chronology' => ['required', 'string', 'max:10000'],
            'attachment' => [
                'nullable',
                'file',
                'mimes:pdf,jpg,jpeg,png',
                'max:5120',
            ],
            'privacy_consent' => ['accepted'],
        ], [
            'name.required' => 'Nama pelapor wajib diisi.',
            'contact.required' => 'Nomor kontak wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'category.required' => 'Kategori pengaduan wajib dipilih.',
            'subject.required' => 'Subjek pengaduan wajib diisi.',
            'chronology.required' => 'Kronologi pengaduan wajib diisi.',
            'attachment.mimes' =>
                'Lampiran hanya boleh berupa PDF, JPG, JPEG, atau PNG.',
            'attachment.max' => 'Ukuran lampiran maksimal 5 MB.',
            'privacy_consent.accepted' =>
                'Persetujuan pemrosesan data wajib dicentang.',
        ]);

        $ticketNumber = 'ADU-' . now()->format('Ymd')
            . '-' . strtoupper(Str::random(6));

        $attachmentPath = null;

        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')
                ->store('pengaduan', 'local');
        }

        $pengaduan = DB::transaction(function () use (
            $validated,
            $ticketNumber,
            $attachmentPath
        ) {
            // Simpan pengaduan seperti sebelumnya.
            $pengaduan = FormPengaduan::create([
                'ticket_number' => $ticketNumber,
                'name' => $validated['name'],
                'contact' => $validated['contact'],
                'email' => $validated['email'] ?? null,
                'category' => $validated['category'],
                'subject' => $validated['subject'],
                'chronology' => $validated['chronology'],
                'attachment_path' => $attachmentPath,
                'privacy_consent' => true,
                'status' => 'Baru Masuk',
            ]);

            // Buat notifikasi untuk dashboard admin.
            Notification::create([
                'title' => 'Pengaduan Baru Masuk',
                'message' => 'Tiket ' . $pengaduan->ticket_number
                    . ' - ' . $pengaduan->subject,
                'type' => 'complaint',
                'complaint_id' => $pengaduan->id,
                'is_read' => false,
            ]);

            return $pengaduan;
        });

        return redirect()
            ->route('pengaduan.form')
            ->with('success', 'Pengaduan berhasil dikirim.')
            ->with('ticket_number', $pengaduan->ticket_number);
    }
}