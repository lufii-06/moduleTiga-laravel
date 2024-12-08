<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    protected $guarded = [];

    //opsional boleh dipake boleh tidak
    // public function article(){
    //     return $this->belongsTo(Article::class);
    // }
    // public function tag(){
    //     return $this->belongsTo(Tag::class);
    // }
}