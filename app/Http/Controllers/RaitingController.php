<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Raiting;

class RaitingController extends Controller
{

    public function star(Request $request)
    {
    	
    	if (Auth::id()!=$request->other_user_id) {

    		$content = Raiting::where('user_id', Auth::id())->where('other_user_id', $request->other_user_id)->first();

	    	if ($content!=null) {
	    		$content->star=$request->star;
	    		$content->save();

	    	}else{

		    	$reiting = new Raiting();    	

		    	$content = $reiting->create([
		    	    'user_id'=>Auth::id(),
		    	    'star'=>$request->star,
		    	    'other_user_id'=>$request->other_user_id,
		    	]);
	    	}


	    	$post = Raiting::where('id', $content->id)->first();

	    	return $post->toJson(); 

    	}

    } 
}
