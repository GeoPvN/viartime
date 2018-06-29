<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\UserChat;
use Illuminate\Http\Request;

class UserChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $getcontents = UserChat::where('user_sender_id','=', Auth::id())->get();
        $users = User::where('id', '=', Auth::id())->get();
        $chatUser = User::where('id', '=',$id)->get();
        return view('chat', ['users'=>$users,'chatUser'=>$chatUser,'getcontents'=>$getcontents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userchat = new UserChat();

        $userchat->user_sender_id = $request->user_sender_id;
        $userchat->user_receiver_id = $request->user_receiver_id;
        $userchat->body = $request->body;
        $userchat->save();

        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserChat  $userChat
     * @return \Illuminate\Http\Response
     */
    public function show(UserChat $userChat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserChat  $userChat
     * @return \Illuminate\Http\Response
     */
    public function edit(UserChat $userChat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserChat  $userChat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserChat $userChat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserChat  $userChat
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserChat $userChat)
    {
        //
    }
}
