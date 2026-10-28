<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarAgen extends Model
{
    protected $table = 'daftar_agen';

    protected $fillable = [
        'nama',
    ];
}