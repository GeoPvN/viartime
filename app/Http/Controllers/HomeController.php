<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Post;
use App\UserSavedPosts;
use App\Raiting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        $posts = Post::all()->sortByDesc('id');
//        dd(1);


        return view('home', ['users'=>$users, 'posts'=>$posts]);
    }
    public function show($ip)
    {
        $user = User::where('ip', $ip)->first();
        if ($user==null) {
            abort(404);
        }
        $posts = Post::where('user_id', $user->id)->orderBy('id', 'desc')->get();

        $savePosts = UserSavedPosts::where('user_saved_posts.user_id', $user->id)
                ->leftJoin('posts', 'user_saved_posts.post_id', 'posts.id')
                ->join('users', 'user_saved_posts.user_id', 'users.id')
                ->orderBy('user_saved_posts.post_id', 'desc')
                ->get();

        $raiting = Raiting::where('other_user_id', $user->id)->get();

        $raiting = intval($raiting->sum('star')/count($raiting));

        

        return view('profile', ['posts'=>$posts, 'savePosts'=>$savePosts, 'raiting'=>$raiting]);

    }
}
