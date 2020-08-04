<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Winkel - Your Ecommerce </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" src="{{asset('front-end/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" src="{{asset('front-end/css/animate.css')}}">

    <link rel="stylesheet" src="{{asset('front-end/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" src="{{asset('front-end/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" src="{{asset('front-end/css/magnific-popup.css')}}">

    <link rel="stylesheet" src="{{asset('front-end/css/aos.css')}}">

    <link rel="stylesheet" src="{{asset('front-end/css/ionicons.min.css')}}">

    <link rel="stylesheet" src="{{asset('front-end/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" src="{{asset('front-end/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" src="{{asset('front-end/css/flaticon.css')}}">
    <link rel="stylesheet" src="{{asset('front-end/css/icomoon.css')}}">
    <link rel="stylesheet" src="{{asset('front-end/css/style.css')}}">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" src="{{asset('front-end/index.blade.php')}}">Winkel</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a src="{{asset('front-end/index.blade.php')}}" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown active">

<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">

              	<a class="dropdown-item" src="{{asset('front-end/shop.blade.php')}}">Shop</a>
                <a class="dropdown-item" src="{{asset('front-end/product-single.blade.php')}}">Single Product</a>
                <a class="dropdown-item" src="{{asset('front-end/cart.blade.php')}}">Cart</a>
                <a class="dropdown-item" src="{{asset('front-end/checkout.blade.php')}}">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a src="{{asset('front-end/about.blade.php')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a src="{{asset('front-end/blog.blade.php')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item active"><a src="{{asset('front-end/contact.blade.php')}}" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a src="{{asset('front-end/cart.blade.php')}}" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
