<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Comment extends Model
{
    protected $fillable = ['title','content','_token'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
