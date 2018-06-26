<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPosts extends Model
{
    protected $fillable = ['user_id', 'post_id', 'end_date'];
    protected $with = ['user'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
