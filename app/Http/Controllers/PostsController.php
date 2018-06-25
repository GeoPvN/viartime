<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
	public function getpost()
	{
		$posts = Post::all();
		// dd($posts->user->name);
		return response()->json($posts);
	}

    public function store(Request $request)
    {
    	$this->validate($request, ['description'=>'required']);

    	$post = new Post();

    	$content = $post->create([
    	    'description'=>$request->description,
    	    'user_id'=>Auth::id(),
    	]);

    	$post = Post::where('id', $content->id)->first();

    	return $post->toJson(); 
    }
}
