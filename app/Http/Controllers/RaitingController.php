<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Raiting;

class RaitingController extends Controller
{

    public function star(Request $request)
    {

    	$reiting = new Raiting();

    	$content = $reiting->create([
    	    'user_id'=>Auth::id(),
    	    'star'=>$request->star,
    	    'post_id'=>$request->post_id,
    	]);

    	$post = Raiting::where('id', $content->id)->first();

    	return $post->toJson(); 
    } 
}
