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
                <div class="home-news-icon">
                <i class="fas fa-link"></i>
             </div>
            <div class="home-up-box">
                <div class="up-title">
                    <div class="row">
                        <div class="col-lg-9"><h3><a href="#" class="home-news-title">{{$post->title}}</a></h3></div>
                        <div class="col-lg-3"><div class="up-save">
                    <p><a href="#"><i class="far fa-save"></i> save</a></p>
                    
                </div></div>
                    </div>
                    
                  
                </div>
                
            </div>
            <div class="home-content-box">
            {{$post->content}}
                            <p>description: {{$post->description}}</p>
            </div>
        
            <div class="news-down-watch">
            <span class="watch-number"><i class="far fa-eye"></i> 1345</span>
            <span class="user-watch-time"><i class="far fa-clock"></i> 1 Hour</span>
            <p class="watch-date"><i class="fas fa-calendar-alt"></i> {{$post->created_at}}</p>
        </div>
       
        <!-- <div class="front-post-description">
            <p>@{{item.description}}</p>
        </div>  -->
        <div class="row up-account">
                    <div class="col-lg-2 up-img"><a href="#"><img src="{{asset('img/animated.gif')}}" alt=""></a></div>
                   <div class="col-lg-7 up-person"><p><a href="#">{{$post->user->name}}</a></p><span><a href="#">{{$post->user->ip}}</a></span></div>
                   <div class="col-lg-3 see-full">
                   <div class="front-seefull">
            <a href="{{url('home')}}">Back</a>
        </div>
                   </div>
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