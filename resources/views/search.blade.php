<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Search</title>
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
  <link href="{{ URL::asset('css/style_search.css')}}" rel="stylesheet">
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
            <li class="menu-active"><a href="/home">Home</a></li>
             <li><a href="/search">Search</a></li>
              @auth
             
              <li><a href="/friends/{{Auth::user()->id}}">My Friends</a></li>
              <li><a href="/comics/{{Auth::user()->id}}">My List</a></li>
             
              @if(Auth::user()->roles->first()->pivot->role_id == 1)
                    <li><a href="/add">Add</a></li>
                   
              @endif
              
              
            
                      <li class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/img/{{Auth::user()->pic1}}" class="user-image" alt="User Image" >
                                   
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
                                                <a href="/login" class="btn btn-danger btn-block">Sign out</a>
                                                
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </li>
                                </li>
                                
                              </ul>
                            </div>
                          </nav><!-- #nav-menu-container -->
                          
                          @else
                       
                         
                            <p>
                          <a href="/login" class="btn btn-danger btn-block">Sign in</a>
                          <a href="/register" class="btn btn-danger btn-block">Sign up</a>
                         
                          </div>
                          @endauth
      </header><!-- #header -->

<!--==========================
Hero Section
============================-->
<!-- #hero -->

<!--==========================
Get Started Section
============================-->


  
  <section id="hero" >
      
    <div class="hero-container">

    <form class="" method="post" action="/searchS" >
			 	@csrf
            <div class="container">
                    <div class="row justify-content-center">
                          <div class="searchbar">
                                  <input class="search_input" type="text" name="bar" placeholder="Search...">
                                  <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
                                </div>
                    </div>
                  </div>
                                   <input type="radio" name="gender" value="1"> User
                                  <input type="radio" name="gender" value="2"> Comic
                                 
    </form>
         <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
        <div class="container">
            
          <div class="row justify-content-center">
               
        
                        
                            <div id="catlist">
                            @if($ch == 1)
                              @if($details == null)
                                           <dl>
                                              <dt><td>No Details found. Try to search again !</td></dt>   
                                          </dl>
                              @else
                                 @foreach($details as $user)
                                          <dl>
                                              <dt><img src="../img/{{$user->pic1}}" alt="Product image" width="68" height="93" /><a href="/profile/{{$user->id}}"><td>{{$user->name}}</td></a></dt>   
                                          </dl>
                                
                                  @endforeach   
                              @endif    
                            @elseif($ch == 2)
                                @if(empty($fu))
                                              <dl>
                                                  <dt><td>No Details found. Try to search again !</td></dt>   
                                              </dl>
                                  @else
                                
                                      @foreach($details as $cmc)
                                              <dl>
                                                  <dt><img src="../img/{{$cmc->pic1}}" alt="Product image" width="68" height="93" /> <a href="/article/{{$cmc->id}}"  > <td>{{$cmc->nombre}}</td></a></dt>   
                                              </dl>
                                    
                                      @endforeach
                                  @endif
                              @elseif($ch == 0)
                                @if(empty($fu))
                                              <dl>
                                                  <dt><td>Please select a category.</td></dt>   
                                              </dl>
                                 
                                  @endif
                            @endif
                           
                          </div>
                  
                    
                      
                       
                        
    
          </div>
        </div>
      </section>
    </div>
  </section><!-- #hero -->


    <!--==========================
    Article Section
  ============================-->

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
