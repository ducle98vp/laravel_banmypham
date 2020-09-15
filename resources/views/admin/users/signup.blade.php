<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | Lavoro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
		
		<!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="{{'css/owl.theme.css'}}">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('fonts/font-icon.css')}}">
        
 		<!-- animate CSS
		============================================ -->         
         <link rel="stylesheet" href="{{asset('css/animate.css')}}">
		
		<!-- mobile menu CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
        
 		<!-- normalize CSS
		============================================ -->        
         <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('style.css')}}">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- breadcrumbs area start -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="index.html">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Login</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- account-details Area Start -->
		<div class="customer-login-area">
			<div class="container">
				<div class="row">
                    <div class="col-md-6 col-xs-12">
						<div class="customer-register my-account">
						<form method="post" class="register" id="register" action="{{Route('users.postSignup')}}">
								{{ csrf_field() }}
								<div class="form-fields">
									<h2>Register</h2>
									<p class="form-row form-row-wide">
										<label for="reg_password">Full Name <span class="required">*</span></label>
										<input type="text" class="input-text" name="username" id="username">
										@error('username')
										<p style="color: red">{{$message}}</p>
										@enderror

									</p>
									<p class="form-row form-row-wide">
										<label for="reg_email">Email address <span class="required">*</span></label>
										<input type="email" class="input-text" name="email" id="email" value="">
										@error('email')
										<p style="color: red">{{$message}}</p>
										@enderror
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_password">Password <span class="required">*</span></label>
										<input type="password" class="input-text" name="password" id="password">
										@error('password')
										<p style="color: red">{{$message}}</p>
										@enderror
                                    </p>
                                    <p class="form-row form-row-wide">
										<label for="reg_password">Nhập lại Password <span class="required">*</span></label>
										<input type="password" class="input-text" name="password_confirm" id="reg_password">
										@error('password_confirm')
										<p style="color: red">{{$message}}</p>
										@enderror
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_password">Phone Number <span class="required">*</span></label>
										<input type="text" class="input-text" name="phone" id="phone">
										@error('phone')
										<p style="color: red">{{$message}}</p>
										@enderror
									</p>
									<div style="left: -999em; position: absolute;">
										<label for="trap">Anti-spam</label>
										<input type="text" name="email_2" id="trap" tabindex="-1">
									</div>
								</div>
								<div class="form-action">
									<div class="actions-log">
										<input type="submit" class="button" name="register" value="Register">
									</div>
								</div>
							</form>
                        </div>
                    </div>
					
				</div>
			</div>
		</div>
		<!-- account-details Area end -->
		<!-- FOOTER START -->
		
		<!-- FOOTER END -->
		
        <!-- JS -->
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
         <script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
        
 		<!-- bootstrap js
		============================================ -->         
         <script src="{{asset('js/bootstrap.min.js')}}"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
           <script src="{{asset('js/owl.carousel.min.js')}}"></script>
		
		<!-- price-slider js
		============================================ --> 
        <script src="{{asset('js/price-slider.js')}}"></script>
		
		<!-- elevateZoom js 
		============================================ -->
        <script src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
		
		<!-- jquery.bxslider.min.js
		============================================ -->       
        <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
		
		<!-- mobile menu js
		============================================ -->  
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
        
   		<!-- wow js
		============================================ -->   
           <script src="{{asset('js/wow.js')}}"></script>
		
		<!-- gmap js
		============================================ -->       
        <script src="{{asset('js/gmap.js')}}"></script>
        
   		<!-- plugins js
		============================================ -->         
           <script src="{{asset('js/plugins.js')}}"></script>
        
   		<!-- main js
		============================================ -->           
		   <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>