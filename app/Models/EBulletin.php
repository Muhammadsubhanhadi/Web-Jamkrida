<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EBulletin extends Model
{
     protected $fillable = [
        'judul',
        'deskripsi',
        'cover',
        'file_pdf',
    ];
}
