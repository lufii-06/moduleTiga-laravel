<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $guarded = [];


    //opsional boleh dipake boleh tidak
    // public function articles(){
    //     return $this->belongsTo(Article::class);
    // }
    // public function categories(){
    //     return $this->belongsTo(Category::class);
    // }
}