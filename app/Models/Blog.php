<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'description',
        'publication_date',
        'reading_time',
        'image_path',
        'is_featured',
    ];

    // Define the category relationship
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected $casts = [
        'publication_date' => 'date',
        'is_featured' => 'boolean',
    ];
}
