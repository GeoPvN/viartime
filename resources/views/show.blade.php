<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                
                    <a class="navbar-brand" href="{{ url('/') }}">
                    <a href="#"><img src="img/logo.png" alt="" class="home-logo"></a>
                   
                   







                    

                    <input type="text" name="search" placeholder="Search..">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                
            </nav>

    <div class="row home-page" id="app">
        <div class="col-3"><div class="home-left"></div></div>
        <div class="col-6"><div class="home-center">

            <div class="row justify-content-center">
                <div class="col-md-12">
                    
                    <div>



                    





                        <ul class="list-group">
                    <div class="home-news-icon">
                 
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
                <span class="watch-number"><i class="far fa-eye"></i> {{$count}}</span>
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


                    

        <div class="add-comments-box">
                    <div class="comment-section-title text-center"><h3>Comments</h3></div>
                   {{-- <div v-html="postId">{{$post->id}}</div> --}}
    <textarea v-model="commentBox" class="form-control" id="" cols="1" rows="5" style="margin-top: 1rem;"></textarea>
                <div class="text-center">
                    <button class="btn btn-primary pull-right"  @click="postComment()">Add Comment</button>
                </div>
        </div>

                <div class="post-comment-section">       
                    <div class="comment" v-for="comment in comments">
                        <div class="row">
                                <div class="col-2">
                                    <img src="https://scontent.ftbs5-1.fna.fbcdn.net/v/t31.0-8/24879691_1723230304375482_7123055198539894009_o.jpg?_nc_cat=0&oh=840e42e8ea0f40a67b1561e9b189edd3&oe=5BA154AD" class="photo">
                                </div>
                                <div class="col-10">
                                    <div class="comment-text">
                                        <p class="name post-com-name">@{{comment.user.name}} <span class="time post-com-time">2 hours ago</span> </p>
                                        <p class="post-com-body">@{{comment.body}}</p>
                                    </div>
                                </div>
                        </div><!--row -->
                     </div> <!-- .comment -->
                </div>

                        
                  
                   
                </div>
                    <div class="col-3"><div class="home-right"></div></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        const app = new Vue({
            el:'#app',
            data:{
                comments: {},
                commentBox:'',
                token:'{{ csrf_token() }}',
                post:{!! $post->toJson() !!},
                user:{!! Auth::check() ? Auth::user()->toJson() : 'null' !!}    
            },
            mounted(){
                this.getComments();
                this.listen();
            },
            methods:{
                getComments(){
                    axios.get('/api/post/'+this.post.id+'/comments')
                    .then((response)=>{
                        this.comments = response.data
                    })
                    .catch(function(error){
                        console.log(error);
                    });
                },
                postComment() {
                  axios.post('/post/'+this.post.id+'/comment', {
                    _token: this.token,
                    body: this.commentBox
                  })
                  .then((response) => {
                    this.comments.unshift(response.data);
                    this.commentBox = '';
                  })
                  .catch((error) => {
                    console.log(error);
                  })
                }, 
                listen(){
                  Echo.channel('post.'+this.post.id)
                    .listen('NewComment', (comment)=>{
                      this.comments.unshift(comment);
                    })
                }
            }
        });
    </script>

    
</body>
</html>