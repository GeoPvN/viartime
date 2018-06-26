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
}
