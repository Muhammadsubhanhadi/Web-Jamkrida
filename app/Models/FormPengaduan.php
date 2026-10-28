<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormPengaduan extends Model
{
    protected $table = 'form_pengaduan';

    protected $guarded = ['id'];

    protected $fillable = [
        'ticket_number',
        'name',
        'contact',
        'email',
        'category',
        'subject',
        'chronology',
        'attachment_path',
        'privacy_consent',
        'status',
        'assigned_to',
        'admin_notes',
        'resolution',
        'resolved_at',
    ];

    protected function casts(): array
    {
        return [
            'privacy_consent' => 'boolean',
            'resolved_at' => 'datetime',
        ];
    }
}
