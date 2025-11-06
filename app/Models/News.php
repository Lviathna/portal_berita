<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $fillable = [
        'authors_id',
        'news_category_id',
        'title',
        'slug',
        'content',
        'thumbnail',
        'is_featured',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function newsCategory(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class);
    }
    public function banner()
    {
        return $this->hasOne(Banner::class);
    }
}
