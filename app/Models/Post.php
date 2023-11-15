<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class Post extends Model
{
    use Commentable;
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'name',
        'slug',
        'short_desc',
        'published',
        'published_at',
        'description',
        'published_at',
        'tags',
        'category_id',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
