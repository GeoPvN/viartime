@extends('layouts.app')

@section('content')

    


<!-- News -->
                <div class="row home-page">
        <div class="col-3"><div class="home-left"></div></div>
        <div class="col-6"><div class="home-center">



            <div class="row justify-content-center">
            
        <div class="col-md-12" >
            <div class="post-toogle">

  <p>Click on the button to Add New Post.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Add New Post</button>
  <div id="demo" class="collapse">
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
        <textarea rows="5" cols="5" class="form-control" v-model="description"  ></textarea>
                        <br>
                        
                        <br>
                        <button :disabled="!description||!title||!content" class="btn btn-primary" @click.prevent="postContent">Add Post</button>
                    </form>
                </div>
            </div>
  </div>
</div>
        
            
            <div>






            <ul class="list-group" v-for="item in posts" :key="item.key">
                <div class="home-news-icon">
                <i class="fas fa-link"></i>
             </div>
            <div class="home-up-box">
                <div class="up-title">
                    <div class="row">
                        <div class="col-lg-9"><h3><a href="#" class="home-news-title">@{{item.title}}</a></h3></div>
                        <div class="col-lg-3"><div class="up-save">
                    <p><a href="#"><i class="far fa-save"></i> save</a></p>
                    
                </div></div>
                    </div>
                    
                  
                </div>
                
            </div>
            <div class="home-content-box">
            @{{item.content}}
            </div>
        
            <div class="news-down-watch">
            <span class="watch-number"><i class="far fa-eye"></i> 1345</span>
            <span class="user-watch-time"><i class="far fa-clock"></i> 1 Hour</span>
            <p class="watch-date"><i class="fas fa-calendar-alt"></i> @{{item.created_at}}</p>
        </div>
       
        <!-- <div class="front-post-description">
            <p>@{{item.description}}</p>
        </div>  -->
        <div class="row up-account">
                    <div class="col-lg-2 up-img"><a href="#"><img src="img/animated.gif" alt=""></a></div>
                   <div class="col-lg-7 up-person"><p><a href="#">@{{item.user.name}}</a></p><span><a href="#"> 0123456</a></span></div>
                   <div class="col-lg-3 see-full">
                   <div class="front-seefull">
            <a href="#"><span>Read More</span></a>
        </div>
                   </div>
                </div>
        

    </ul>

        </div></div>
        <div class="col-3"><div class="home-right"></div></div>
    </div>




                
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

    <script src="{{ asset('js/main.js') }}" defer></script>

@endsection