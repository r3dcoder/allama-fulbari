<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

    
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <!-- <title>Clever - Education &amp; Courses Template | Home</title> -->
    <title>@yield('title') {{ config('app.name', 'Herar Alo') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <meta name="_token" content="{{csrf_token()}}" />

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +44 7810 483 886</a>
                <a href="#"><span>Email:</span> info@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{ url('/') }}"><img src="" alt="হেরার আলো "></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{route('allPost')}}">জীবনী</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="#">আল্লামা আব্দুল মতিন চৌধুরী </a></li>
                                        <li><a href="#">হোসাইন আহমদ মাদানী রাঃ </a></li>
                                        <li><a href="{{route('allPost')}}">See All</a></li>
                                        <li><a href="single-course.html">Single Courses</a></li>
                                        <li><a href="instructors.html">Instructors</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Single Blog</a></li>
                                        <li><a href="regular-page.html">Regular Page</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li><a href="#">বয়ান </a></li> -->
                                <!-- <li><a href="#">মাদ্রাসা </a></li> -->
                                <li><a href="#">মাসাইল</a></li>
                                <li><a href="{{route('allQuestion')}}">প্রশ্ন-উত্তর</a></li>
                                <li><a href="#">Create Post</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('new_post')}}">Article </a></li>
                                        <li><a href="{{route('ask_question')}}">Ask a Question </a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="register-login-area">

                                <!-- <a href="#" class="btn">Register</a>
                                <a href="#" class="btn active">Login</a> -->


                        <!-- Authentication Links -->
                        @guest
                            
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                            @if (Route::has('register'))
                                
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                
                            @endif
                        @else
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('Profile') }}
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

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <section>
        @yield('content')
    </section>


    
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made  by <a href="#" target="_blank">Shaike Fulbari Foundation</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +44 300 303 0266</a>
                <a href="#"><span>Email:</span> info@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
<script type="text/javascript">
    $(document).ready(function(){


         $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

        $(".submitButton").click(function(e){

            e.preventDefault();
           // var answer = $("textarea[name=content]").val();
            // console.log(answer);
            //var id = $("input[name=id]").val();
         
            var id1 = e.target.dataset['id1'];
            console.log(id1);
            var answer = $("#"+id1).val();
            console.log(answer);

            //var id = $("input[name={id1}]").val();
            var id2 = e.target.parentNode.dataset['tt'];
            
            console.log(id2);


            $.ajax({

               type:'POST',

               url:"{{route('answer_submit')}}",
               data:{
                answer:answer,
                question_id: id2,
                key: id1
            },
               dataType: "json",

               success:function(data){

                       console.log(data);

                       

                       // console.log(user);
                      var node = document.createElement("HR");
                      document.getElementById("card-body-"+id1).appendChild(node);
                      
                      var node = document.createElement("H7");
                      var textnode = document.createTextNode(data.ans.answer);
                      node.appendChild(textnode);
                      document.getElementById("card-body-"+id1).appendChild(node);

                      var node = document.createElement("BR");
                      document.getElementById("card-body-"+id1).appendChild(node);

                      var node = document.createElement("H7");

                      var textnode = document.createTextNode("Replied by "+data.userName +" "+ data.date );
                      node.appendChild(textnode);
                      document.getElementById("card-body-"+id1).appendChild(node);

                     }, 

                    error:function(){
                    console.log("error");
                   }

            });

      

        });



});
   



</script>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    
    <script src="{{ asset('frontend/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('frontend/js/active.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>

        $('.summernote').summernote({tabsize: 2,
        height: 400});

  </script>

    <!-- <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ route('answer_submit') }}",
                  method: 'post',
                  data: {
                     name: jQuery('#content').val()
                     
                  },
                  success: function(result){
                     jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });
            });
      </script> -->
</body>



</html>