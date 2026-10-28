<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PosPelayanan extends Model
{
        protected $fillable = [
        'judul',
        'deskripsi',
        'file_pdf',
    ];
}
