@extends('layouts.app')

@section('content')




<!-- News -->
<div class="row home-page">
    <div class="col-3"><div class="home-left"></div></div>
    <div class="col-6"><div class="home-center">



        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Title" v-model="title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Content" v-model="content">
                        </div>
                        <form class="form-group">
                            <textarea rows="5" cols="5" class="form-control wordlimit" v-model="description"  id="comment_body" name="body" title="Enter testimony here"  onkeyup="checkWordLen(this);"></textarea>
                            <br>
                            <span id="charlimit"><strong class="words-left">5 words left</strong></span>
                            <br>
                            <button :disabled="!description||!title||!content" class="btn btn-primary" @click.prevent="postContent">Add Post</button>
                        </form>
                    </div>
                </div>
                <div>






                    <ul class="list-group" v-for="item in posts" :key="item.key">

                        <div class="home-up-box">
                            <div class="up-title">
                                <h3><a href="#" class="home-news-title">@{{item.title.slice(0, 10)}}</a></h3>
                                <div class="row up-account">
                                    <div class="col-lg-2 up-img"><a href="#"><img src="img/animated.gif" alt=""></a></div>
                                    <div class="col-lg-10 up-person"><p><a href="#">@{{item.user.name}}</a></p><span><a href="#"> @{{item.user.ip}}</a></span></div>
                                </div>
                            </div>
                            <div class="up-save">
                                <p>save</p>
                                <p class="watch-time">@{{item.created_at}}</p>
                            </div>
                        </div>
                        <div class="home-content-box">
                            @{{item.content}}
                        </div>

                        <div class="news-down-watch">
                            <span><i class="far fa-eye"></i> 1345</span>
                        </div>

                        <div class="front-post-description">
                            <p>description: @{{item.description}}</p>
                        </div> 
                        <div class="front-seefull">
                            <a v-bind:href="'/post/'+ item.id"><span>Read More</span></a>
                        </div>

                    </ul>

                </div>
            </div>
                <div class="col-3"><div class="home-right"></div></div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
