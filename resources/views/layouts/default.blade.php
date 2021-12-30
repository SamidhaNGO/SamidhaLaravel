<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]> <html lang="en"> <![endif]-->
<head>
	<title>Samidha | @yield('title')</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
	<meta name="revisit-after" content="7 days">
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset("favicon.ico") }}">

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- Font Awesome -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="{{ asset("css/lib/bootstrap.min.css") }}" rel="stylesheet">
  <!-- Style -->
  <link href="{{ asset("css/style.css") }}" rel="stylesheet">

	<!-- CSS Header and Footer -->
  <link href="{{ asset("css/header-v8.css") }}" rel="stylesheet">
  <link href="{{ asset("css/footer-v1.css") }}" rel="stylesheet">
    @stack('stylesheets')
</head>

<body class="header-fixed header-fixed-space-v2">
  <div class="wrapper">
    <!--=== Header v8 ===-->
    <div class="header-v8 header-sticky">
    <!-- Topbar blog -->
      <div class="blog-topbar">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-xs-4 clearfix">
              <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">
                <li class="cd-log_reg home"></li>
              </ul>
            </div>
          </div><!--/end row-->
        </div><!--/end container-->
      </div>
      <div class="navbar mega-menu" role="navigation">
        <div class="container">
          <div class="res-container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
              <a href="{{ URL::to('/')}}">
                <img src="{{ asset("logo.png") }}" alt="Samidha">
              </a>
            </div>
          </div>
          <div class="collapse navbar-collapse navbar-responsive-collapse">
            <div class="res-container">
              <ul class="nav navbar-nav">
                <li class="dropdown {{ Request::is('/') ? 'active' : '' }}">
                  <a href="{{ URL::to('/')}}" class="dropdown-toggle">
                    Home
                  </a>
                </li>
                <li class="dropdown mega-menu-fullwidth {{ Request::is('about') ? 'active' : '' }}">
                  <a href="{{ Request::is('about') ? '#' : URL::to('/about')}}" class="dropdown-toggle">
                    About Samidha
                  </a>
                </li>
                <li class="dropdown mega-menu-fullwidth {{ Request::is('services') ? 'active' : '' }}">
                  <a href="{{ Request::is('services') ? '#': URL::to('/services')}}" class="dropdown-toggle" >
                    Our Services
                  </a>
                </li>
                <li class="dropdown mega-menu-fullwidth {{ Request::is('initiatives') ? 'active' : '' }}">
                  <a href="{{ Request::is('initiatives') ? '#': URL::to('/initiatives')}}" class="dropdown-toggle">
                    Our Initiatives
                  </a>
                </li>
                <li class="dropdown mega-menu-fullwidth {{ Request::is('samidhians') ? 'active' : '' }}">
                 <a href="{{ Request::is('samidhians') ? '#': URL::to('/samidhians')}}" class="dropdown-toggle" >
                    Samidhians
                  </a>
                </li>
                <li class="dropdown mega-menu-fullwidth {{ Request::is('contactus') ? 'active' : '' }}">
                  <a href="{{ Request::is('contactus') ? '#': URL::to('/contactus')}}" class="dropdown-toggle">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    @yield('main_container')
    <div class="footer-v1">
      <div class="footer">
        <div class="container">
          <div class="row">
            <!-- About -->
						<div class="square-box col-md-6  md-margin-bottom-40" >
								<div class="headline"><h2>What people say about us</h2></div>
								<div class="content">
									<div id="testimonials" class="carousel slide" data-ride="carousel">
										 <div class="carousel-inner">
											  <div class="item active">
														<blockquote>
												      <p>
																<i class="fa fa-quote-left fa-quote-css" aria-hidden="true"></i>
																During this Semester break, I wanted to do something. But I was not clear about that, so Sachin da and Aparna tai helped me a lot. In this process, I could figure out that my area of interest is in language. Samidha gave me an opportunity to explore my area of interest. It really helped me a lot. I learned a lot of new things. Thank you so much, Sachin da, Aparna Tai, Leena and Shilanand.
																<i class="fa fa-quote-right fa-quote-css" aria-hidden="true"></i></p>
<footer>Prachi Dhurwey
MA Education, Azim Premji University, Bangalore
BCom, Nagpur University
 <cite title="Source Title">23 June, 2017</cite></footer>
														</blockquote>
												</div>
												<div class="item">
											 		 <blockquote>
											 			 <p>
											 				 <i class="fa fa-quote-left fa-quote-css" aria-hidden="true"></i>
											 				 My area of interest is Language and Mathematics. During this Semester break, I was willing to do something related to Maths and Socialization. Samidha gave me opportunity to explore and helped in getting more clarity about this. I really feel that I have learned lot of things during this Internship. Thanks to all Samidha members.
											 				 <i class="fa fa-quote-right fa-quote-css" aria-hidden="true"></i></p>
											 			 <footer>Tina Katakwar,
MA Education, Azim Premji University, Bangalore
MCom, Nagpur University
 <cite title="Source Title">21 June, 2017</cite></footer>
											 		 </blockquote>
											  </div>
										 </div>
										 <br>
										 <!-- Indicators -->
										 <ol class="carousel-indicators">
											 <li data-target="#testimonials" data-slide-to="0" class="active"></li>
											  <li data-target="#testimonials" data-slide-to="1"></li>
												<!-- <li data-target="#testimonials" data-slide-to="2"></li> -->
											</ol>
								  </div>
								</div>
						</div><!--/col-md-3-->
            <!-- End About -->

          <!-- Link List -->
          <div class="col-md-3 md-margin-bottom-40 square-box">
          <div class="headline"><h2>Useful Links</h2></div>
          <ul class="list-unstyled link-list">
	          <li><a href="{{ URL::to('/about')}}">About us <i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{ URL::to('/services')}}">Our Services <i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{ URL::to('/initiatives')}}">Our Initiatives <i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{ URL::to('/samidhians')}}" > Samidhians <i class="fa fa-angle-right"></i></a></li>
	          <li><a href="{{ URL::to('/contactus')}}">Contact us <i class="fa fa-angle-right"></i></a></li>
          </ul>
          </div> <br><!--/col-md-3-->

		  <div class="square-box col-md-3  md-margin-bottom-40" style="margin-right: -15px;top: -20px;">
          <div class="headline"><h2>Contact Us</h2></div>
					<address class="md-margin-bottom-40">
						Samidha Bahuddeshiya Sanstha <br />
						C/o Sachin Mohan Mohite,<br />
						C602, Chandralok Nagari, Opp Muktai Garden<br />
						Dhayari, Pune 411 041.<br />
						Phone: (+91) 93727 44039 <br />
						Maharashtra, India.
					</address>
          </div><!--/col-md-3-->
          <!-- End Address -->
          </div>
        </div>
      </div><!--/footer-->

    <div class="copyright">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <p>
    2017 &copy; All Rights Reserved.
    <!--<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>-->
    </p>
    </div>

    <!-- Social Links -->
    <div class="col-md-6">
    <ul class="footer-socials list-inline">
    <li>
    <a href="https://www.facebook.com/SamidhaNGO/" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
    <i class="fa fa-facebook"></i>
    </a>
    </li>
    </ul>
    </div>
    <!-- End Social Links -->
    </div>
    </div>
    </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div>
    <!-- jQuery -->
    <script src="{{ asset("js/lib/jquery.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("js/lib/bootstrap.min.js") }}"></script>
		<!-- Font Awesome -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{ asset("js/lib/back-to-top.js") }}"></script>

    <!-- JS Page Level -->
    <script type="text/javascript" src="{{ asset("/js/app.js") }}"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
    App.init();
    });
    </script>

    <!--[if lt IE 9]>
    <script src="{{ asset("js/lib/respond.js") }}"></script>
    <script src="{{ asset("js/lib/html5shiv.js") }}"></script>
    <script src="{{ asset("js/lib/placeholder-IE-fixes.js") }}"></script>
    <![endif]-->
    @stack('scripts')
    </body>
    </html>
