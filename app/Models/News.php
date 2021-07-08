<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'category_id',
        'short_description',
        'description'
    ];

    public function categorie()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }
}
