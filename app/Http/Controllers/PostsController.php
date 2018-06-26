<?php

namespace App\Http\Controllers;
use App\UserPosts;
use App\UserSavedPosts;
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

    public function save(Request $request)
    {
        if (!Auth::user()) {
            abort(404);
        }

        $user_saved_posts = new UserSavedPosts();

        $check_saved_posts = UserSavedPosts::where('post_id',$request->post_id)->where('post_id',Auth::id())->count();
        $saved = 0;
        if($check_saved_posts > 0){
            UserSavedPosts::where('post_id',$request->post_id)->where('post_id',Auth::id())->delete();
        }else{
            $user_saved_posts->post_id = $request->post_id;
            $user_saved_posts->user_id = Auth::id();
            $user_saved_posts->save();
            $saved = 1;
        }


        return response()->json($saved);
    }
}
