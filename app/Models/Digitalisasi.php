<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Digitalisasi extends Model
{
    protected $table = 'digitalisasis';

    protected $fillable = [
        'jenis',
        'judul',
        'deskripsi',
        'gambar',
        'teks_tombol',
        'link_tombol',
        'tahapan',
        'tahun',
        'ikon',
        'urutan',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'urutan' => 'integer',
            'status' => 'boolean',
        ];
    }
}
