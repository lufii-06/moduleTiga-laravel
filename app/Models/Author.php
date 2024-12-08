<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];
    public function Articles()
    {
        return $this->hasMany(Article::class);
    }
}