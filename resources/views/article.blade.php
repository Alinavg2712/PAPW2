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
              <li class="menu-active"><a href="/home">Home</a></li>
              <li><a href="/friends">My Friends</a></li>
              <li><a href="/comics">My List</a></li>
              <li><a href="/search">Search</a></li>
              <li><a href="/add">Add</a></li>
              <li class="menu-has-children"><a href="">Join</a>
                <ul>
                  <li><a href="/login">Sign in</a></li>
                  <li><a href="/register">Sign up</a></li>
                </ul>
              </li>
              <li class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="http://via.placeholder.com/160x160" class="user-image" alt="User Image" >
                        <strong>Nombre</strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-danger btn-block">Cerrar Sesion</a>
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
                        <div class="col-md-5 col-lg-3">
                        <div class="about-content">
                
                            <h1><span>{{$th->nombre}}</span> </h1>
                            <p>{{$th->description}}
                            </p>
                            <input type="hidden" id="Idf" name="Idf" value="{{$th->id}}">
                            <input type="hidden" id="Idu" name="Idu" value="{{Auth::user()->id}}">
                        </div>
                    
                    
                                            <div class="rating-block">
                                                <h4>Average user rating</h4>
                                                <h2 class="bold padding-bottom-7">{{$th->likes}} <small>/ 5</small></h2>
                                                <button type="button" class="star" aria-label="Left Align">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                </button>
                                                <button type="button" class="star" aria-label="Left Align">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                </button>
                                                <button type="button" class="star" aria-label="Left Align">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                </button>
                                                <button type="button" class="star" aria-label="Left Align">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                </button>
                                                <button type="button" class="star" aria-label="Left Align">
                                                <span class="fa fa-star" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                            <div class="form-group">
                                                    <input type="submit" name="Add" value="Add" class="btn float-right login_btn">
                                                
                                                </div>
                            </div>
                </form>
          </div>
        </div>
      </section>
    </div>
  </section><!-- #hero -->


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
                    </div>
                    <div class="media-body response-text-right">
                        <p>{{$comm->description}}</p>
                        
                     
                          
                    </div>
                    <div class="clearfix"> </div>
                </div>
                @endforeach  
              
            </div>	
            <div class="coment-form">
                <h4>Leave your comment</h4>
                <form class="" method="post" action="/commentA">
                @csrf
                <input type="hidden" id="Idcomic" name="Idcomic" value="{{$th->id}}">
                <input type="hidden" id="Idus" name="Idus" value="{{Auth::user()->id}}">
                    <textarea name="comm" required="">Your Comment...</textarea>
                    <input type="submit" name="Sub" value="Submit Comment" >
                </form>
    


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
