<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeuanganBerkelanjutan extends Model
{
    protected $table = 'keuangan_berkelanjutan';

    protected $fillable = [
        'tahun',
        'file',
    ];
}