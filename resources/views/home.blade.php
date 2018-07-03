@extends('main')
@section('content')


<div id="app">
    <div class="post-toogle">

                         
                         
                         
     
    <button type="button" class="btn btn-info filter-button" >Filter</button>
     <button type="button" class="btn btn-info new-post-button" >Add New Post</button>
       
     
     <div id="filter" class="collapse">

     <select class="mdb-select colorful-select dropdown-primary" multiple searchable="Search here..">
     <option value="" disabled selected>Choose your category</option>
    <option value="1">Sport</option>
    <option value="2">Art</option>
    <option value="3">Politic</option>
    <option value="4">Movie</option>
    <option value="5">Education</option>
    </select>
    <label></label>
    <button class="btn-save btn btn-primary btn-sm filter-save-button">Save</button>


     </div>



  <div id="demo" class="collapse">
    <div class="card">
      <div class="card-header">Dashboard</div>


        <div class="card">



          <div class="card-body" >

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
              <textarea rows="5" cols="5" class="form-control" v-model="description" ></textarea>
              <br>

              <br>
              <button :disabled="!description||!title||!content" class="btn btn-primary add-post-button" @click.prevent="postContent">Add Post</button>
            </form>
          </div>



        </div>
    </div>
  </div>

    <!-- News -->

    <div class="row home-page">

     
        
        <div class="col-9"><div class="home-center">




                <div class="row justify-content-center">   
                    <div class="col-md-12" >
                        



     <!-- პოსტი---- -->
     <div class="row">
         <div class="col-lg-4">

    <div id="container">
        @foreach($posts as $post)
            <span style="height: 350px; display: block; overflow: hidden;">
                <h3>COMMENTS</h3>
                @foreach($post->comments->take(3) as $p)

                    <div class="comment">
                        <div class="row">
                            <div class="col-3">
                                <img src="http://127.0.0.1:8000/img/animated.gif" class="photo">
                            </div>
                            <div class="col-9">
                                <div class="comment-text">
                                    <p class="name">{{$p->user->name}}<span class="time">{{$p->created_at}}</span> </p>
                                    <p>{{$p->body}} </p>
                                </div>
                            </div><!--row -->
                        </div>
                    </div> <!-- .comment -->
                @endforeach
            </span>

            @endforeach


      </div> <!-- #container -->

         </div>
         <div class="col-lg-8">
         <ul class="list-group" v-for="item in posts" :key="item.key" >
                    <!-- <div class="home-news-icon">
                    <i class="fas fa-link"></i>
                 </div> -->
                <div class="home-up-box">
                    <div class="up-title">
                        <div class="row">
                            <div class="col-lg-9"><h3><a v-bind:href="'/post/'+ item.id" class="home-news-title">@{{item.title}}</a></h3>
                        <p class="watch-date" title="date"><i class="fas fa-calendar-alt"></i> @{{item.created_at}}</p></div>
                            <div class="col-lg-3"><div class="up-save">
                        <p><a href="#" v-on:click="savePost(item)"> <span v-if="item.saved == 0"> <i class="far fa-save"><span> Save </span></i></span><span v-else><i class="fas fa-tags"><span> Saved </span></i></span></a></p>
                        
                    </div></div>
                        </div>
                        
                      
                    </div>
                    
                </div>
                <div class="home-content-box">
               <p> @{{item.content}}</p>
                </div>
            
                <div class="news-down-watch">
                <span class="watch-number" title="views"><i class="far fa-eye"> @{{item.viwe}}</i></span>
                <span class="user-watch-time" title="watching hours"><i class="far fa-clock"></i> 1 Hour</span>
                
                <span class="user-comments" title="comments"><i class="fas fa-comments"> ( 15 )</i></span>
                


                   
                   
            </div>
           
            <!-- <div class="front-post-description">
                <p>@{{item.description}}</p>
            </div>  -->
            <div class="row up-account">
                        <div class="col-lg-2 up-img"><a href="#"><img src="img/animated.gif" alt=""></a>
                        <div class="star-rating">


    <fieldset class="rating">
      <input type="radio" id="star5" name="rating" value="5" />
      <label for="star5" title="5 stars" @click="five(item)"></label>
      <input type="radio" id="star4" name="rating" value="4" />
      <label for="star4" title="4 stars" @click="four(item)"></label>
      <input type="radio" id="star3" name="rating" value="3" />
      <label for="star3" title="3 stars" @click="three(item)"></label>
      <input type="radio" id="star2" name="rating" value="2" />
      <label for="star2" title="2 stars" @click="two(item)"></label>
      <input type="radio" id="star1" name="rating" value="1" />
      <label for="star1" title="1 star" @click="one(item)"></label>
       
    </fieldset>
    <div class="rating-point"> @{{ item.star }}</div>
    </div>

                    
                    </div><!--ფოტო-->
                       <div class="col-lg-7 up-person"><p><a v-bind:href="'/user/'+ item.ip">@{{item.user_name}}</a></p><span><a href="{{url('user/'. Auth::user()->ip)}}"> {{ Auth::user()->ip}}</a></span></div>
                       <div class="col-lg-3 see-full">
                       <div class="front-seefull">
                <a v-bind:href="'/post/'+ item.id">Read More</a>
            </div>
                       </div>
                    </div>
                </ul>
            
      <!-- </პოსტი> -->
         </div>
     </div>
                
                       
                       

                       </div>
    </div>
                    </div>  <!--home-center -->
                </div>  <!-- center col -->

                    <div class="col-3">
                    <div class=" home-right">
                        <main class="collapse container" id="contact-box">
                          <div class="content">
                            <h2 class="title">Contacts</h2>
                            <ul class="list" id="list">
                              @foreach($users as $user)
                              <li class="list-item"><span>{{$user->name}}   </span></li>
                              @endforeach

                            </ul>
                          </div>
                         
                    </main>
                    <div class="privat-box">
                              <select class="selectpicker" data-width="fit">
                                <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                                <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                              </select>
                            <ul>
                              <li><a href="#"> Terms   </a></li>
                              <li><a href="#"> Privacy </a></li>
                              <li><a href="#"> Hari    </a></li>
                              <li><a href="#"> Harale  </a></li>
                            </ul>
                            <p>&copy; ViarTime 2018</p>
                          </div>





<div class="msger-box">


<section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
    <img src="http://127.0.0.1:8000/img/animated.gif" alt=""> <span>Mark Zuckenberg</span> <span class="point-rating">4.5</span>
      <i class="fas fa-window-close messclose"></i>
    </div>
    <div class="msger-header-options">
    <!-- <ul>
            <li><input type="button" value="_" role="minimize" /></li>
            <li><input type="button" value="X" role="close" /></li>
        </ul> -->
    </div>
  </header>
  <main class="msger-chat" >
    <div class="msg left-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">BOT</div>
          <div class="msg-info-time">12:45</div>
        </div>

        <div class="msg-text">
          Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
        </div>
      </div>
    </div>

    <div class="msg right-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">Iuri</div>
          <div class="msg-info-time">12:46</div>
        </div>

        <div class="msg-text">
          You can change your name in JS section!
        </div>
      </div>
    </div>
  </main>

  <form class="msger-inputarea">
    <input type="text" class="msger-input" placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn">Send</button>
  </form>
  

</section>
</div>


                </div></div>
                </div> <!-- full row-->

</div>



@endsection
@section('script')

<script type="text/javascript">
  const app = new Vue({
      el:"#app",
      data:{
          posts:{},
          description:'',
          title:'',
          content:'',
     saved:'Save',
     star:0,
          comments: {},
          commentBox:'',
          postId:'',
      },
      mounted(){
       this.getPosts();
      },
      methods:{
       getPosts(){
         axios.get('getpost')
         .then((response)=>{
           console.log(response.data.reverse())
           this.posts = response.data.reverse()

         })
         .catch(function(error){
           console.log(error);
         });
       },      
       postContent(){
         axios.post('home', {
           description: this.description,
           title:this.title,
           content:this.content,
         })
         .then((response)=>{
           this.posts.unshift(response.data);
           this.description='';
           this.title='';
           this.content='';
         })
         .catch(function(error){
           console.log(error);
         })
       },
       one(data){
         axios.post('star', {
           star: 1,
           other_user_id:data.user_id,
         })
         .then((response)=>{
           console.log(response.data.star);
                  this.star = response.data.star;
         })
         .catch(function(error){
           console.log(error);
         })
       },
       two(data){
         axios.post('star', {
           star: 2,
           other_user_id:data.user_id,
         })
         .then((response)=>{
                  console.log(response.data.star);
                  this.star = response.data.star;
            
         })
         .catch(function(error){
           console.log(error);
         })
       },
       three(data){
         axios.post('star', {
           star: 3,
           other_user_id:data.user_id,
         })
         .then((response)=>{
                  console.log(response.data.star);
                  this.star = response.data.star;
            
         })
         .catch(function(error){
           console.log(error);
         })
       },
       four(data){
         axios.post('star', {
           star: 4,
           other_user_id:data.user_id,
         })
         .then((response)=>{
                  console.log(response.data.star);
                  this.star = response.data.star;
            
         })
         .catch(function(error){
           console.log(error);
         })
       },
       five(data){
         axios.post('star', {
           star: 5,
           other_user_id:data.user_id,
         })
         .then((response)=>{
                  console.log(response.data.star);
                  this.star = response.data.star;
            
         })
         .catch(function(error){
           console.log(error);
         })
       },
          savePost(data){
              axios.post('savepost', {
                  post_id:data.id,
              })
                  .then((response)=>{
                      console.log(response.data)
           if(response.data == 1){
                          this.seved = 'Saved';
           }else{
                          this.seved = 'Save';
           }
                  })
                  .catch(function(error){
                      console.log(error);
                  })
          },


      }
  });
</script>
@endsection