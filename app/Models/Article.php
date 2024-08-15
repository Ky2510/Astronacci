<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'image_url',
        'status',
        'tags',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
