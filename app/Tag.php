<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = 'tags';

    public function posts()
    {
        return $this->belongsToMany('App\Post', 'tags_posts', 'tag_id','post_id');
    }
}
