<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    public function postInformation(){

        return $this->hasOne('App\PostInformation');

    }
    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'tags_posts', 'post_id','tag_id');
    }
}
