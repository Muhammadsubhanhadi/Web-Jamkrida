<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    protected $table = 'karir';

    protected $fillable = [
        'title',
        'slug',
        'department',
        'location',
        'employment_type',
        'vacancy_count',
        'description',
        'responsibilities',
        'qualifications',
        'required_documents',
        'banner',
        'announcement_pdf',
        'application_method',
        'application_email',
        'application_url',
        'application_instructions',
        'status',
        'published_at',
        'deadline',
    ];

    protected function casts(): array
    {
        return [
            'vacancy_count' => 'integer',
            'published_at' => 'date',
            'deadline' => 'date',
        ];
    }
}
