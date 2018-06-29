<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Post;

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
        return view('home', ['users'=>$users]);
    }
    public function show($ip)
    {
        $user = User::where('ip', $ip)->first();
        if ($user==null) {
            abort(404);
        }
        $posts = Post::where('user_id', $user->id)->get();

        return view('profile', ['posts'=>$posts]);

    }
}
