<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Raiting;

class RaitingController extends Controller
{

    public function star(Request $request)
    {
    	$content = Raiting::where('user_id', Auth::id())->where('post_id', $request->post_id)->first();

    	if ($content!=null) {
    		$content->star=$request->star;
    		$content->save();

    	}else{
    		
	    	$reiting = new Raiting();    	

	    	$content = $reiting->create([
	    	    'user_id'=>Auth::id(),
	    	    'star'=>$request->star,
	    	    'post_id'=>$request->post_id,
	    	]);
    	}


    	$post = Raiting::where('id', $content->id)->first();

    	return $post->toJson(); 
    } 
}
