<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Tag extends Model
{
    //
    public function articles()
    {
        return $this->belongsToMany('App\Article', 'tags_articles');
    }
}
