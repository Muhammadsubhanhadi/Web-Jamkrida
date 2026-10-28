<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'title',
        'message',
        'type',
        'complaint_id',
        'is_read',
    ];

    protected function casts(): array
    {
        return [
            'is_read' => 'boolean',
        ];
    }

    public function pengaduan()
    {
        return $this->belongsTo(
            FormPengaduan::class,
            'complaint_id',
            'id'
        );
    }
}
