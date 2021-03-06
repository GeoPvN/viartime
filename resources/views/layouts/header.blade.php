<div class="head-container">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="col-6">
                <a class="navbar-brand" href="{{ url('/') }}">
                <a href="{{asset('/home')}}"><img src="{{asset('img/logo.png')}}" alt="" class="home-logo"></a>

   <div class="head-buttons">
    <button type="button" class="filter-button" title="filter" ><i class="fas fa-filter"></i></button>
     <button type="button" class="new-post-button" title="add post"><i class="fas fa-file"></i></button>
     <button type="button" class="notification-button" title="add post"><i class="fas fa-circle"></i></button>
     <button type="button" class="messenger-button " data-toggle="collapse" data-target="#contact-box" title="add post"><i class="fas fa-comments"></i></button>
   </div>
               
 <input type="text" name="search" placeholder="Search..">

            </div><!--col end -->
            <div class="col-6 text-right">
                <div class="header-profile">
                    <div class="row">
                            <div class="col-3">
                                <a href="{{url('user/'. Auth::user()->ip)}}"><img src="http://127.0.0.1:8000/img/animated.gif" alt=""></a>
                                
                            </div>
                            <div class="col-9">
                                <span class="head-user-name"><a href="{{url('user/'. Auth::user()->ip)}}">{{ Auth::user()->name }}</a></span>
                                <span class="head-user-number"><a href="{{url('user/'. Auth::user()->ip)}}">{{ Auth::user()->ip}}</a></span>
                                <span class="point-rating"><a href="{{url('user/'. Auth::user()->ip)}}">4.5</a></span>
                            </div>
                    </div> <!-- row -->
                </div><!-- header profile -->


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
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
                               <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('user/'. Auth::user()->ip)}}">
                                        Profile
                                    </a>
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
            
                </div><!--col end -->
        </nav></div>