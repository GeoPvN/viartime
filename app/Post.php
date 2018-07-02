<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['description', 'user_id', 'title', 'content'];
	protected $with = ['user'];
    
  
	public function user()
	{
	  return $this->belongsTo('App\User');
	}
	public function comments()
	{
	  return $this->hasMany('App\Comment');
	}
	public function UserSavedPosts()
	{
	  return $this->belongsTo('App\UserSavedPosts');
	}
}
