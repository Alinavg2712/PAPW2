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
  <link href="{{ URL::asset('css/profile.css')}}" rel="stylesheet">





 
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
                <div class="container">
                                        <div class="span3 well">
                                                        <center>
                                                                        <img src="images/37.jpg" alt="Hero Imgs" height="422" width="1292">
                                                                            
                                                                 <div class="body">
                                                                            
                                                                            <section class="left-col user-info">
                                                                                                <img src="images/36.jpg" name="aboutme"  width="140" height="140" class="img-circle">
                                                                                              <br>
                                                                                              <hr>
                                                                                              
                                         <form class="" method="post" action="/addfriend" >
					                   	@csrf
                                      <div class="form-group row">
                                        <label for="username" class="col-4 col-form-label">User Name*</label> 
                                        <div class="col-8">
                                            <strong>{{$th->slug}}</strong>  </div>
                                          <div class="col-8">
                                          <input type="hidden"  name="id"value="{{$th->id}}">
                                          </div></div>
                                        <div class="form-group row">
                                          <label for="name" class="col-4 col-form-label">First Name</label> 
                                          <div class="col-8">
                                          <strong>{{$th->name}}</strong>
                                          </div> </div>
                                        <div class="form-group row">
                                          <label for="email" class="col-4 col-form-label">Email*</label> 
                                          <div class="col-8">
                                          <strong>{{$th->email}}</strong>
                                          </div> </div>
                                        <div class="form-group row">
                                          <label for="website" class="col-4 col-form-label">Address</label> 
                                          <div class="col-8">
                                          <strong>{{$th->address}}</strong>
                                          </div>  </div>
                                        <div class="form-group row">
                                          <label for="publicinfo" class="col-4 col-form-label">Phone</label> 
                                          <div class="col-8">
                                          <strong>{{$th->phone}}</strong>
                                            </div> </div>
                                        <div class="form-group row">
                                          <div class="offset-4 col-8">
                                          <input type="submit" value="Follow" class="btn float-right login_btn">
                                          </div>
                                        </div>
                                      </form>
                                                                                                <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                    <div class="description text-center">
                                                                                            <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 ml-auto mr-auto">
                                                                                                <div class="profile-tabs">
                                                                                                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                                                                                    <li class="nav-item">
                                                                                                        <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                                                                                        <i class="material-icons">camera</i>
                                                                                                        Studio
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="nav-item">
                                                                                                        <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                                                                                        <i class="material-icons">palette</i>
                                                                                                            Work
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
  				<div class="row">
  					<div class="col-md-3 ml-auto">
  					    <img src="images/10.jpg" class="rounded">
  						<img src="images/5.jpg" class="rounded">
  					</div>
  					<div class="col-md-3 mr-auto">
  						<img src="images/7.jpg" class="rounded">
  						<img src="images/32.jpg" class="rounded">
  					</div>
  				</div>
  			</div>
            <div class="tab-pane text-center gallery" id="works">
      			<div class="row">
      				<div class="col-md-3 ml-auto">
                      <img src="images/13.jpg" class="rounded">
  					  <img src="images/11.jpg" class="rounded">
  										</div>
      				<div class="col-md-3 mr-auto">
                      <img src="images/49.jpg" class="rounded">
                      <img src="images/51.jpg" class="rounded">
      				</div>
      			</div>
  			</div>
          
          </div>
                                                                        
                                                                        </section>
                                                                </div>
                                                        </center>
                                    </div>
                        </div>
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
