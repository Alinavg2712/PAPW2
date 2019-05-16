<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Comic</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">








  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">

  <!-- Libraries CSS Files -->
  <link href="{{ URL::asset('css/owl.carousel.min.css')}}"  rel="stylesheet">
<link href="{{ URL::asset('css/owl.theme.default.min.css')}}"  rel="stylesheet">
<link href="{{ URL::asset('css/font-awesome.min.css')}}"   rel="stylesheet">
<link href="{{ URL::asset('css/animate.min.css')}}"  rel="stylesheet">
<link href="{{ URL::asset('css/modal-video.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('css/vacio.css')}}" rel="stylesheet">





 
</head>

<body>
<header id="header" class="header header-hide">
<div class="container">
    
    <div id="logo" class="pull-left">
      <h1><a href="/home" class="scrollto"><span>B</span>amboozled</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        @auth
        <li class="menu-active"><a href="/home">Home</a></li>
        <li><a href="/friends/{{Auth::user()->id}}">My Friends</a></li>
        <li><a href="/comics/{{Auth::user()->id}}">My List</a></li>
       
        <li><a href="/search">Search</a></li>
        @if(Auth::user()->roles->first()->pivot->role_id == 1)
              <li><a href="/add">Add</a></li>
             
        @endif
        
        
      
                <li class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                      <a  class="dropdown-toggle" data-toggle="dropdown">
                      <img src="{{Auth::user()->pic1}}" class="user-image" alt="User Image" >
                          <strong>{{Auth::user()->name}}</strong>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="divider"></li>
                          <li>
                              <div class="navbar-login navbar-login-session">
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <p>
                                          <a href="/profile/{{Auth::user()->id}}" class="btn btn-info btn-block">My Profile</a>
                                          @endauth
                                          <a href="/login" class="btn btn-danger btn-block">Sign in</a>
                                          <a href="/register" class="btn btn-danger btn-block">Sign up</a>
                                      
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </li>
              </li>
            
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>

</header><!-- #header -->

<!--==========================
Hero Section
============================-->


<!--==========================
Get Started Section
============================-->
<section id="get-started" class="padd-section text-center wow fadeInUp">


<div class="container">
<div class="row">



</div>
</div>
      </header><!-- #header -->

  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
 
     
         <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
        <div class="container">
          <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
          
              <img src="../img/{{$th->pic1}}" alt="About">
            </div>
            <form class="" method="post" action="/articleA" >
			 	@csrf
                        <div >
                        <div class="about-content">
                
                            <h1><span>{{$th->nombre}}</span> </h1>
                            <p>{{$th->description}}
                            </p>
                            <input type="hidden" id="Idf" name="Idf" value="{{$th->id}}">
                            @auth
                            <input type="hidden" id="Idu" name="Idu" value="{{Auth::user()->id}}">
                            @endauth
                        </div>
                    
                    
                                            <div class="rating-block">
                                                <h4>User rating</h4>
                                                <h2 class="bold padding-bottom-7">{{$th->likes}} </h2>
                                               
                                            </div>
                                            <div class="form-group">
                                                    <input type="submit" name="Add" value="Add" class="btn float-right login_btn">
  @auth
 @if(Auth::User()->roles->first()->pivot->role_id == 1)
    <a href="/edit/{{$th->id}}" class="btn float-right login_btn" >Edit</a>
     <!--  <input type="text" id="Idf" name="Idf" value="{{Auth::User()->roles->first()->pivot->role_id}}">-->
  @endif
   @endauth
                                                
                                                </div>
                            </div>
                </form>
                <form class="" method="post" action="/articleL" >
			 	@csrf
         <input type="hidden" id="Idf" name="Idf" value="{{$th->id}}">    
         <input type="hidden" id="val" name="val" value="{{$th->likes}}">    
                    
         @if ($gh > 0)
                                                    <input type="submit" name="Like" value="Dislike" class="btn float-right login_btn">
                               @else                    
                                                    <input type="submit" name="Like" value="Likes" class="btn float-right login_btn">
                              @endif
                 </form>
          </div>
        </div>
      </section>
    </div>
    </section><!-- #hero -->
  <div id="tab" >
              <ul id="pic" class="preview-thumbnail nav nav-tabs">

                <li class="active">
                 
                  <img src="../img/{{$th->pic2}}" id="pic" alt="About">
                  </a>
                </li>
                <li>
                 
                  <img src="../img/{{$th->pic3}}" id="pic" alt="About">
                  </a>
                </li>
                <li>
                  
                  <img src="../img/{{$th->pic4}}" id="pic"alt="About">
                  </a>
                </li>
           

              </ul>

            </div>
          
            <div class="col-md-6 mb-4" id="video">

              <div class="card" style="display: block; margin-left: auto;margin-right:auto">
                <div class="card-block p-3">
                  <!--Title-->
                  <h3 class="text-center font-up font-bold indigo-text py-2 mb-3">
                    <strong>Review</strong>
                  </h3>
                  
                  <video controls>
                      <source src="../img/{{$th->video}}" type="video/mp4">
                  </video>
               <!--   <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/D42TyMtDmFQ" allowfullscreen></iframe>
                  </div>-->
                </div>
              </div>
            </div>

    <!--==========================
    Article Section
  ============================-->
  <hr>
<section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
    <!--banner-section-->
    <div class="row justify-content-center">
      
      
   
                    <div class="response">
                <h4>Responses</h4>
                @foreach($ch as $comm)
                <div class="media response-info">
                    <div class="media-left response-text-left">
                        <a href="#">
                            <img class="media-object" src="{{$comm->users->pic1}}" alt=""/>
                        </a>
                        <h5><p >{{$comm->users->name}}</p></h5>
                        <p>{{$comm->description}}</p>
                        <p>{{$comm->created_at}}</p>
                    </div>
                    <div class="media-body response-text-right">
                      
                        
                     
                          
                    </div>
                    <div class="clearfix"> </div>
                </div>
                @endforeach  
              
            </div>	
            <div class="coment-form">
            @auth
                <h4>Leave your comment</h4>
                <form class="" method="post" action="/commentA">
                @csrf
                <input type="hidden" id="Idcomic" name="Idcomic" value="{{$th->id}}">
                <input type="hidden" id="Idus" name="Idus" value="{{Auth::user()->id}}">
                    <textarea name="comm" required="">Your Comment...</textarea>
                    <input type="submit" name="Sub" value="Submit Comment" >
                </form>
            @endauth


</div>	
</div>
</div>
</section>
  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
      <div class="container">
        <div class="row">
  
          <div class="col-md-12 col-lg-4">
            <div class="footer-logo">
  
              <a class="navbar-brand" href="#">Bamboozled</a>
              <p>A convenient way to check everything the comic world has to offer. </p>
  
            </div>
          </div>
        </div>
      </div>
  
      <div class="copyrights">
        <div class="container">
          <p>&copy; Copyrights Bamboozled. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
  
    </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />-->
  <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/move-top.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/easing.js')}}"></script>
  <script src="{{ URL::asset('js/jquery-migrate.min.js')}}"></script>
  <script src="{{ URL::asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('js/hoverIntent.js')}}"></script>
  <script src="{{ URL::asset('js/superfish.min.js')}}"></script>
  <script src="{{ URL::asset('js/easing.min.js')}}"></script>
  <script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ URL::asset('js/wow.min.js')}}"></script>
  <script src="{{ URL::asset('js/modal-video.js')}}"></script>


  <!-- Contact Form JavaScript File -->
 
  <!-- Template Main Javascript File -->
  <script src="{{ URL::asset('js/main2.js')}}"></script>

</body>
</html>
