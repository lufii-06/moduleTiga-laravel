<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
    public function author(){
        return $this->belongsTo(Author::class);
    }

    // public function articleCategories(){
    //     return $this->belongsToMany(ArticleCategory::class);
    // }
    public function categories(){
        return $this->belongsToMany(Category::class,'article_categories');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'article_tags');
    }

}