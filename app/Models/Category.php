<?php

namespace App\Models;

use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    // public function articleCategories()
    // {
    //     // return $this->belongsToMany(ArticleCategory::class);
    //     return $this->belongsToMany(Article::class, 'article_category');
    // }

    public function articles(){
        return $this->belongsToMany(Article::class, 'article_categories');
    }
}