

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">


<link href="{{ URL::asset('css/register.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			
			</div>
			<div class="card-body">
                <form class="" method="post" action="/register" enctype="multipart/form-data">
						@csrf
                        <div class="input-group form-group">
                        <label for="name" class="cols-sm-2 control-label">Your Name</label>
                        <div class="cols-sm-10">
                                <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                                    </div>
                        </div>
                       </div>
                 
                       <div class="input-group form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope fa"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <label for="username" class="cols-sm-2 control-label">Username</label>
                        <div class="cols-sm-10">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-users fa" ></i></span>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                            </div>
                        </div>
                    </div>

                        <label for="phone" class="cols-sm-2 control-label">Phone</label>
                      <div class="input-group form-group">
                        <div class="cols-sm-10">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-users fa" ></i></span>
                                <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your phone"/>
                            </div>
                        </div>
                    </div>

                        <label for="address" class="cols-sm-2 control-label">Address</label>
                      <div class="input-group form-group">
                        <div class="cols-sm-10">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-users fa" ></i></span>
                                <input type="text" class="form-control" name="address" id="address"  placeholder="Enter your Address"/>
                            </div>
                        </div>
                    </div>
                    <label class="cols-sm-2 control-label" >Profile Picture </label>
                    <div class="input-group form-group" data-validate="Name is required">
                    <div class="cols-sm-10">    
                    <div class="input-group-prepend">           

                         <input type="file"  name="profile" id="img" required style="display:none;"/>
                        <label class="cols-sm-2 control-label" for="img">Click me to upload image</label>
                         </div>
                    </div>
                     </div>

                   
                     <label class="cols-sm-2 control-label">Picture </label>
                     <div class="input-group form-group" data-validate="Name is required">
                     <div class="cols-sm-10">   
                     <div class="input-group-prepend">        
                          <input type="file"  name="picture" id="picture" required style="display:none;" />
                           <label class="cols-sm-2 control-label" for="picture">Click me to upload image</label>
                    </div>
                    </div>
                      </div>


                    <div class="input-group form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock fa-lg" ></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock fa-lg" ></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Register" class="btn float-right login_btn">
                        <!--   <a href="/home">Register</a>-->
                        </div>
                 
                    
                </form>
			</div>
			
		</div>
	</div>
</div>
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery-2.2.3.min.js')}}"></script>
</body>
</html>