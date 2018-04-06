<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Article extends Model
{

    protected $fillable = ['title','content','is_enabled', 'slug', '_token'];
  
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
