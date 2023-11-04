<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdService extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'short_desc',
        'published',
        'published_at',
        'description',
    ];
}
