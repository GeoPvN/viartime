<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    











 <div class="front-page">


     <div class="front-header">
         <div class="row">
             <div class="col-6">
                <a href="#"><img src="img/logo.png" alt="" class="front-logo"></a>
             </div> 
            <div class="col-6">
                <div class="header-login">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <input type="email" placeholder="email" name="email">
                        <input type="password" placeholder="password" name="password">
                        <input type="submit" value="login" class="header-log-submit">
                    </form>
                </div>
            </div>
        </div>
     </div>

<div class="front-middle">
     <div class="row">
        <div class="col-lg-6">
            <div class="front-left">
            <img src="img/animated.gif" alt="">
            </div>
        </div>
         <div class="col-lg-6">
             <div class="front-right">
            <form action="{{ route('register') }}" method="post">
                 @csrf
         <input type="text" class="firstname" placeholder="Firstname" name="name">
         <input type="text" class="lastname" placeholder="Lastname" name="fname">
         <input type="email" placeholder="Email" name="email">
         <span>Birthday</span>
         <input type="date">
         <span class="gender">Gender</span>
         <input type="checkbox"><span>Male</span>
         <input type="checkbox"><span>Female</span>
         <input type="password" placeholder="password" name="password">
         <input type="password" placeholder="password" name="password_confirmation">
         <input type="submit" value="registration" class="front-submit">
            </form>
         </div>
        </div>
       </div>
    </div>


        <div class="front-footer">
                <div class="front-footer-box"><ul>
                    <li>lorem ipsum</li>
                    <li>lorem ipsum</li>
                    <li>lorem ipsum</li>
                </ul></div>

                <div class="front-footer-box"><ul>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                    </ul></div>

                    <div class="front-footer-box"><ul>
                            <li>lorem ipsum</li>
                            <li>lorem ipsum</li>
                            <li>lorem ipsum</li>
                        </ul></div>

                        <div class="front-footer-box"><ul>
                                <li>lorem ipsum</li>
                                <li>lorem ipsum</li>
                                <li>lorem ipsum</li>
                            </ul></div>

                            <div class="front-footer-box"><ul>
                                    <li>lorem ipsum</li>
                                    <li>lorem ipsum</li>
                                    <li>lorem ipsum</li>
                                </ul></div>
                
            </div>


    </div><!--front-page -->



 

      

















</body>

<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</footer>
</html>