<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserChat extends Model
{
    protected $fillable = ['user_sender_id', 'user_receiver_id', 'body'];

    public function user()
    {
        return $this->belongsToMany('App\User', 'user_sender_id');
    }
}
