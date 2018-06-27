<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raiting extends Model
{
    protected $fillable = ['star', 'user_id', 'other_user_id'];

}
