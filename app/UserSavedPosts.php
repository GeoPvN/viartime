<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSavedPosts extends Model
{
    protected $fillable = ['user_id', 'post_id'];
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
