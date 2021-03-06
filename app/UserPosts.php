<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPosts extends Model
{
    protected $fillable = ['user_id', 'post_id', 'end_date'];
    protected $with = ['user','post'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }
}
