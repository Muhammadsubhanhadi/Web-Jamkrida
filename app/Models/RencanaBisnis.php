<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RencanaBisnis extends Model
{
    protected $table = 'rencana_bisnis';

    protected $fillable = [
        'tahun',
        'file',
    ];
}