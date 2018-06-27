<?php

namespace App\Http\Controllers;
use App\UserPosts;
use App\UserSavedPosts;
use Illuminate\Http\Request;
use App\Post;
use Auth;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
	public function getpost()
	{
		//$posts = Post::all();
		// dd($posts->user->name);
        $posts = DB::table('posts')
            ->leftJoin('users', 'users.id', '=', 'posts.user_id')
            ->leftJoin('user_posts', 'posts.id', '=', 'user_posts.post_id')
            ->leftJoin('user_saved_posts', function($join)
            {
                $join->on('user_saved_posts.post_id', '=', 'posts.id');
                //$join->on('user_saved_posts.user_id', '=', '$r');
            })
            ->leftJoin('raitings', 'posts.user_id', '=', 'raitings.other_user_id')
            ->select(DB::raw('posts.*, users.name as user_name, (select ROUND(sum(r.star) / COUNT(*),2) from raitings as r where r.other_user_id = `posts`.user_id) as star, count(user_posts.id) as viwe, count(user_saved_posts.id) as saved'))
            ->groupBy('posts.id')
            ->get();

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

        $check_saved_posts = UserSavedPosts::where('post_id',$request->post_id)->where('user_id',Auth::id())->count();
        $saved = 0;
        if($check_saved_posts > 0){
            UserSavedPosts::where('post_id',$request->post_id)->where('user_id',Auth::id())->delete();
        }else{
            $user_saved_posts->post_id = $request->post_id;
            $user_saved_posts->user_id = Auth::id();
            $user_saved_posts->save();
            $saved = 1;
        }


        return response()->json($saved);
    }
}
