@extends('layouts.app')

@section('content')




<!-- News -->
<div class="row home-page">
    <div class="col-3"><div class="home-left"></div></div>
    <div class="col-6"><div class="home-center">



        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <div>
                    <ul class="list-group">

                        <div class="home-up-box">
                            <div class="up-title">
                                <h3><a href="#" class="home-news-title">{{$post->title}}</a></h3>
                                <div class="row up-account">
                                    <div class="col-lg-2 up-img"><a href="#"><img src="{{asset('img/animated.gif')}}" alt=""></a></div>
                                    <div class="col-lg-10 up-person"><p><a href="#"></a></p><span><a href="#"> {{$post->ip}}</a></span></div>
                                </div>
                            </div>
                            <div class="up-save">
                                <p>save</p>
                                <p class="watch-time">{{$post->created_at}}</p>
                            </div>
                        </div>
                        <div class="home-content-box">
                            {{$post->content}}
                        </div>

                        <div class="news-down-watch">
                            <span><i class="far fa-eye"></i> 1345</span>
                        </div>

                        <div class="front-post-description">
                            <p>description: {{$post->description}}</p>
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
