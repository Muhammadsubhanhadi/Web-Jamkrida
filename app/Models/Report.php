<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected $fillable = [
        'type',
        'title',
        'year',
        'file_url',
        'auditor_name',
        'predicate',
        'description',
    ];
}