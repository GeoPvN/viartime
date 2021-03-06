@extends('main')
@section('content')
<div class="row home-page" id="app">
	<div class="col-3">
		<div class="home-left">


					<div class="user-profile-sidebar text-center">
						<div class="row">
								<div class="col-6">
									<a href="{{url('user/'. Auth::user()->ip)}}"><img src="http://127.0.0.1:8000/img/animated.gif" alt=""></a>
								</div>
								<div class="col-6 text-left">
									<span><a href="{{url('user/'. Auth::user()->ip)}}"><i class="fas fa-user"> {{ Auth::user()->name }}</i></a></span>
									<span><a href="{{url('user/'. Auth::user()->ip)}}"><i class="fas fa-id-card"> {{ Auth::user()->ip}}</i></a></span>
									<span><a href="{{url('user/'. Auth::user()->ip)}}"><i class="fas fa-star"> {{$raiting}} </i></a></span>
								</div>
						</div> <!-- row -->
					</div><!-- user profile sidebar -->


				<div class="sidebar-birthday text-center">
					<h4>Birthday Date</h4>
					<span><b>17/25/18</b></span>
				</div>


				<div class="sidebar-interesdet">
					<div class="interested-title text-center"><h4>Interested</h4></div>
					<ul>
						<li><i class="far fa-heart"> Sport   </i></li>
						<li><i class="far fa-heart"> Art     </i></li>
						<li><i class="far fa-heart"> Drink   </i></li>
						<li><i class="far fa-heart"> Hiking  </i></li>
						<li><i class="far fa-heart"> Fishing </i></li>
						<li><i class="far fa-heart"> Sport   </i></li>
						<li><i class="far fa-heart"> Art     </i></li>
						<li><i class="far fa-heart"> Drink   </i></li>
					</ul>
				</div>

				<div class="sidebar-about">
					<div class="sidebar-about-title text-center"><h4>About</h4></div>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium architecto necessitatibus qui esse. Maiores expedita mollitia natus eum quia. Rerum nobis libero perspiciatis in natus praesentium nostrum aliquid quaerat quam!</p>
				</div>


				<div class="sidebar-gallery ">
					<div class="sidebar-gallery-title text-center"><h4>Gallery</h4></div>
					<div class="row text-center">
						<div class="col-4"><img src="https://www.w3schools.com/css/img_5terre.jpg" data-toggle="modal" data-target=".sidebar-image-modal"></div>
						<div class="col-4"><img src="https://www.w3schools.com/css/img_forest.jpg" data-toggle="modal" data-target=".sidebar-image-modal"></div>
						<div class="col-4"><img src="https://www.w3schools.com/css/img_mountains.jpg" data-toggle="modal" data-target=".sidebar-image-modal"></div>
					</div>
				</div>


       <!-- image modal  -->
			<div class="modal fade sidebar-image-modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<img src="https://www.w3schools.com/css/img_5terre.jpg">
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
					</div>
				</div>
			</div>
		<!-- /image modal  -->

		
			


		</div><!-- home left -->
	</div>
	<div class="col-6">
		<div class="home-center">


			<div id="exTab1">

					<ul  class="nav nav-pills">
						<li class="active"><a  href="#1a" data-toggle="tab"><button type="button" class="btn btn-primary">Posts</button></a></li>
						<li><a href="#2a" data-toggle="tab"><button type="button" class="btn btn-primary">Saved Posts</button></a></li>	
					</ul>

		
			<div class="tab-content clearfix">

		
				
			  	<div class="tab-pane active" id="1a"><!-- tab 1 -->
		       
			  <!-- პოსტები -->
			  @foreach($posts as $post)
							<ul class="list-group">
								<div class="home-news-icon"></div>
								<div class="home-up-box">
									<div class="up-title">
										<div class="row">
											<div class="col-lg-9">
												<h3><a href="{{url('post/'. $post->id)}}" class="home-news-title">{{$post->title}}</a></h3>
											</div>
											<div class="col-lg-3">
												<div class="up-save">
													<p><a href="#"><i class="far fa-save"></i> save</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="home-content-box"> {{$post->content}} <p>description: {{$post->description}}</p> </div>
								<div class="news-down-watch">
									<span class="user-watch-time"><i class="far fa-clock"></i> 1 Hour</span>
									<p class="watch-date"><i class="fas fa-calendar-alt"></i> {{$post->created_at}}</p>
								</div>
								<!-- <div class="front-post-description"><p>@{{item.description}}</p> </div>  -->
								 <div class="row up-account">
								 	<div class="col-lg-2 up-img">
								 		<a href="#"><img src="{{asset('img/animated.gif')}}" alt=""></a>
								 	</div>
								 	<div class="col-lg-7 up-person">
								 		<p><a href="#">{{$post->user->name}}</a></p>
								 		<span><a href="#">{{$post->user->ip}}</a></span>
								 	</div>
								 	<div class="col-lg-3 see-full">
								 		<div class="front-seefull">
								 			<a href="{{url('home')}}">Back</a>
								 		</div>
								 	</div>
								 </div>
								</ul>

			  
			  @endforeach
			  <!-- პოსტები -->
				</div> <!-- /tab 1 -->
				<div class="tab-pane" id="2a"> <!-- tab 2 -->
		  <div class="text-center">Saved Posts</div>
		  <!-- შენახული პოსტები -->
		  @foreach($savePosts as $post)
							<ul class="list-group">
								<div class="home-news-icon"></div>
								<div class="home-up-box">
									<div class="up-title">
										<div class="row">
											<div class="col-lg-9">
												<h3><a href="{{url('post/'. $post->post_id)}}" class="home-news-title">{{$post->title}}</a></h3>
											</div>
											<div class="col-lg-3">
												<div class="up-save">
													<p><a href="#"><i class="far fa-save"></i> save</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="home-content-box"> {{$post->content}} <p>description: {{$post->description}}</p> </div>
								<div class="news-down-watch">
									<span class="user-watch-time"><i class="far fa-clock"></i> 1 Hour</span>
									<p class="watch-date"><i class="fas fa-calendar-alt"></i> {{$post->created_at}}</p>
								</div>
								<!-- <div class="front-post-description"><p>@{{item.description}}</p> </div>  -->
								 <div class="row up-account">
								 	<div class="col-lg-2 up-img">
								 		<a href="#"><img src="{{asset('img/animated.gif')}}" alt=""></a>
								 	</div>
								 	<div class="col-lg-7 up-person">
								 		<p><a href="#">{{$post->name}}</a></p>
								 		<span><a href="#">{{$post->ip}}</a></span>
								 	</div>
								 	<div class="col-lg-3 see-full">
								 		<div class="front-seefull">
								 			<a href="{{url('home')}}">Back</a>
								 		</div>
								 	</div>
								 </div>
								</ul>

			  
			  @endforeach
			  <!--შენახული პოსტები -->
				</div> <!-- /tab 2 -->
			</div> <!-- /tab content -->
  </div> <!-- /extab 1 -->



		</div> <!-- home center -->
	</div> <!-- col-6 -->
				

				<div class="col-3">
					<div class="home-right"></div>
				</div>
			</div>

	
@endsection