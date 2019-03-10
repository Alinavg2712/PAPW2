<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Add Comic</title>
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
  <link href="{{ URL::asset('css/add.css')}}" rel="stylesheet">
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="indexx.html" class="scrollto"><span>B</span>amboozled</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="indexx.html">Home</a></li>
          <li><a href="friends.html">My Friends</a></li>
          <li><a href="comics.html">My List</a></li>
          <li><a href="search.html">Search</a></li>
          <li><a href="add.html">Add</a></li>
          <li class="menu-has-children"><a href="">Join</a>
            <ul>
              <li><a href="login.html">Sign in</a></li>
              <li><a href="register.html">Sign up</a></li>
            </ul>
          </li>
       
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
    
  </header><!-- #header -->

  
  <section id="hero" >
      
    <div class="hero-container">
      <hr>
      <br>
       
        
            <div class="container">
                <div class="row justify-content-center">
                    
                       
                        <div class="container-contact100">
                                <div class="wrap-contact100">
                                    <form class="contact100-form validate-form">
                                        <span class="contact100-form-title">
                                           Add new Comic
                                        </span>
                        
                        
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <label class="label-input100" for="name">Title</label>
                                            <input id="name" class="input100" type="text" name="name" placeholder="Enter title...">
                                            <span class="focus-input100"></span>
                                        </div> 
                                        <div class="wrap-input100 validate-input" data-validate = "Message is required">
                                                <label class="label-input100" for="message">Description</label>
                                                <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                                                <span class="focus-input100"></span>
                                            </div>
                                            <div class="wrap-input100">
                                                    <div class="label-input100">Category</div>
                                                    <div>
                                                        <select class="js-select2" name="service">
                                                            <option>Action</option>
                                                            <option>Fantasy</option>
                                                            
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                    <span class="focus-input100"></span>
                                                </div>
                                                
                                              
                                                <label class="label-input100" for="email">Video</label>
                                              <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                                <input type="file" class="input100" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <span class="focus-input100"></span>
                                        </div>
                                        <label class="label-input100" for="email">Picture 1</label>
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            
                                                <input type="file" class="input100" id="validatedCustomFile" required>
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                <span class="focus-input100"></span>
                                            </div>
                                            <label class="label-input100" for="email">Picture 2</label>
                                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                                                
                                                    <input type="file" class="input100" id="validatedCustomFile" required>
                                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <label class="label-input100" for="email">Picture 3</label>
                                                <div class="wrap-input100 validate-input" data-validate="Name is required">
                                                    
                                                        <input type="file" class="input100" id="validatedCustomFile" required>
                                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                        <span class="focus-input100"></span>
                                                    </div>
                                                    <label class="label-input100" for="email">Picture 4</label>
                                                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                                                        
                                                            <input type="file" class="input100" id="validatedCustomFile" required>
                                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                            <span class="focus-input100"></span>
                                                        </div>
                                      
                        
                                        <div class="container-contact100-form-btn">
                                            <button class="contact100-form-btn">
                                                Send
                                            </button>
                                        </div>
                        
                                     
                                    </form>
                        
                                    <div class="contact100-more flex-col-c-m" style="background-image: url('images/54.JPG');">
                                    
                                    </div>
                                </div>
                            </div>
                             
               
          </div>
        </div>
        </div>
      </section>
 


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
