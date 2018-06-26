<?php

namespace App\Http\Controllers;
use App\UserPosts;
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
    	$this->validate($request, ['description'=>'required', 'title'=>'required', 'content'=>'required']);

    	$post = new Post();

    	$content = $post->create([
            'description'=>$request->description,
            'title'=>$request->title,
    	    'content'=>$request->content,
    	    'user_id'=>Auth::id(),
    	]);

    	$post = Post::where('id', $content->id)->first();

    	return $post->toJson(); 
    }
    public function show($id)
    {
        if (!Auth::user()) {
            abort(404);
        }

        $user_posts = new UserPosts();

        $user_posts->post_id = $id;
        $user_posts->user_id = Auth::id();
        $user_posts->save();

        $post = Post::findOrFail($id);
        $countPost = UserPosts::where('post_id',$id)->count();

        return view('show', ['post'=>$post,'count'=>$countPost]);
    }
}
