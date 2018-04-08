<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Tag;

class Article extends Model
{

    protected $fillable = ['title','content','is_enabled', 'slug', '_token'];
  
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}

