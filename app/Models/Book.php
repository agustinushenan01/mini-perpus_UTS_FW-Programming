<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $fillable = ['category_id', 'title', 'author', 'published_year', 'stock'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
