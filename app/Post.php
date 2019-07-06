<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }  

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_post', 'post_id', 'category_id');
    }
    
}
