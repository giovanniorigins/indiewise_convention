<?php //require 'vendor/autoload.php'; ?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>IndieWise Convention</title>
		<!--<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">-->
		<meta name="author" content="Jerez Bain | IndieWise">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="./apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="./favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="./favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="./favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="./android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="./manifest.json">
		<link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="./mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="shortcut icon" href="./favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
		<link href="plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
		<link href="plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="plugins/hover/hover-min.css" rel="stylesheet">		
		
		<!-- The Project's core CSS file -->
		<!-- Use css/rtl_style.css for RTL version -->
		<link href="css/style.css" rel="stylesheet" >
		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<!-- Use css/rtl_typography-default.css for RTL version -->
		<link href="css/typography-default.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="css/skins/indiewise.css" rel="stylesheet">

		<!-- Google recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
		<script src="https://api.filestackapi.com/filestack.js"></script>
		<script src="https://static.filestackapi.com/v3/filestack-0.2.0.js"></script>
		<script>
            filepicker.setKey('APbjTx44SlSuCI6P58jwvz');
            /*var client = filestack.init('APbjTx44SlSuCI6P58jwvz');
            client.pick({
                accept: '*!/!*',
                maxFiles: 10,
            }).then(function(result) {
                console.log(JSON.stringify(result.filesUploaded))
            })*/
		</script>
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans front-page transparent-header  ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
				
				
				<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->
				<div class="header-top dark ">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-6 col-md-9">
								<!-- header-top-first start -->
								<!-- ================ -->
								<div class="header-top-first clearfix">
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="https://twitter.com/getindiewise"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="https://www.instagram.com/getindiewise/"><i class="fa fa-instagram"></i></a></li>
										<!--<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>-->
										<!--<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>-->
										<!--<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>-->
										<!--<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>-->
										<li class="facebook"><a target="_blank" href="https://www.facebook.com/getindiewise"><i class="fa fa-facebook"></i></a></li>
										<!--<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>-->
									</ul>
									<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
												<li class="twitter"><a target="_blank" href="https://www.twitter.com/getindiewise"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="https://www.instagram.com/getindiewise/"><i class="fa fa-instagram"></i></a></li>
												<!--<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>-->
												<!--<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>-->
												<!--<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>-->
												<!--<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>-->
												<li class="facebook"><a target="_blank" href="https://www.facebook.com/getindiewise"><i class="fa fa-facebook"></i></a></li>
												<!--<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>-->
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										<!--<li><i class="fa fa-map-marker pr-5 pl-10"></i>One Infinity Loop Av, Tk 123456</li>-->
										<!--<li><i class="fa fa-phone pr-5 pl-10"></i>+12 123 123 123</li>-->
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> <a href="mailto:convention@getindiewise.com" style="color: #FFF;">convention@getindiewise.com</a></li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
							<div class="col-xs-9 col-sm-6 col-md-3">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">

									<!-- header top dropdowns start -->
									<!-- ================ -->
									<!--<div class="header-top-dropdown text-right">
										<div class="btn-group">
											<a href="page-signup.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
										</div>
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login</button>
											<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
												<li>
													<form class="login-form margin-clear">
														<div class="form-group has-feedback">
															<label class="control-label">Username</label>
															<input type="text" class="form-control" placeholder="">
															<i class="fa fa-user form-control-feedback"></i>
														</div>
														<div class="form-group has-feedback">
															<label class="control-label">Password</label>
															<input type="password" class="form-control" placeholder="">
															<i class="fa fa-lock form-control-feedback"></i>
														</div>
														<button type="submit" class="btn btn-gray btn-sm">Log In</button>
														<span class="pl-5 pr-5">or</span>
														<button type="submit" class="btn btn-default btn-sm">Sing Up</button>
														<ul>
															<li><a href="#">Forgot your password?</a></li>
														</ul>
														<span class="text-center">Login with</span>
														<ul class="social-links circle small colored clearfix">
															<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
															<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
															<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</form>
												</li>
											</ul>
										</div>
									</div>-->
									<!--  header top dropdowns end -->
								</div>
								<!-- header-top-second end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-top end -->
				
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header fixed clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-3 ">
								<!-- header-first start -->
								<!-- ================ -->
								<div class="header-first clearfix">
									
									<!-- logo -->
									<div id="logo" class="logo">
										<a href="index.php"><img id="logo_img" src="https://getindiewise.com/assets/img/Logo_alt2_web_87x45.png" alt="IndieWise" style="max-height: 55px;"></a>
									</div>
								</div>
								<!-- header-first end -->

							</div>
							<div class="col-md-9">
					
								<!-- header-second start -->
								<!-- ================ -->
								<div class="header-second clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav ">

													<!-- mega-menu start -->
													<li>
														<a href="/">Home</a>
													</li>
													<li>
														<a href="#">Register</a>
													</li>
													<li>
														<a href="/schedule.php">Schedule</a>
													</li>
													<li>
														<a href="#">Book Hotel</a>
													</li>
													<li>
														<a href="#">Our Story</a>
													</li>
													<li class="active">
														<a href="/contact.php">Contact Us</a>
													</li>
												</ul>
												<!-- main-menu end -->
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
								</div>
								<!-- header-second end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->

			<div id="page-start"></div>

			<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">
							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Contact Us</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							<p>It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
							<div class="alert alert-success hidden" id="MessageSent">
								We have received your message, we will contact you very soon.
							</div>
							<div class="alert alert-danger hidden" id="MessageNotSent">
								Oops! Something went wrong, please verify that you are not a robot or refresh the page and try again.
							</div>
							<div class="contact-form" >
								<form id="contact-form-with-recaptcha" class="margin-clear" role="form" method="post" action="https://getindiewise.com/api/contact">
									<div class="form-group has-feedback">
										<label for="name">Name*</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="email">Email*</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="">
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="subject">Subject*</label>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="">
										<i class="fa fa-navicon form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="message">Message*</label>
										<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="g-recaptcha" data-sitekey="6Lf7dRkUAAAAAJG9PNNLbqr5LJAbsw2HGD14ZIyS"></div>
									<input type="email" hidden value="convention@getindiewise.com">
									<input type="submit" value="Submit" class="submit-button btn btn-default">
								</form>
							</div>
						</div>
						<script>
							function contactSubmit() {
								debugger;
                            }
						</script>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							<!--<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Find Us</h3>
									<div class="separator-2"></div>
									<ul class="list">
										<li><i class="fa fa-home pr-10"></i>795 Folsom Ave, Suite 600<br><span class="pl-20">San Francisco, CA 94107</span></li>
										<li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> (123) 456-7890</li>
										<li><i class="fa fa-mobile pr-10 pl-5"></i><abbr title="Phone">M:</abbr> (123) 456-7890</li>
										<li><i class="fa fa-envelope pr-10"></i><a href="mailto:info@idea.com">info@theproject.com</a></li>
									</ul>
									<a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Show Map <i class="fa fa-plus"></i></a>
								</div>
							</div>-->
							<div class="sidebar">
								<div class="block clearfix">
									<h2 class="title">Follow Us</h2>
									<div class="separator-2"></div>
									<ul class="social-links circle small margin-clear clearfix animated-effect-1">
										<li class="twitter"><a target="_blank" href="https://twitter.com/getindiewise"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="https://www.instagram.com/getindiewise/"><i class="fa fa-instagram"></i></a></li>
										<li class="facebook"><a target="_blank" href="https://www.facebook.com/getindiewise"><i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<section class="pv-30 light-gray-bg padding-bottom-clear">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">Sponsors</h2>
							<div class="separator"></div>
							<!--<p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>-->
							<br>
						</div>
					</div>
				</div>
				<div class="space-bottom">
					<div class="container">
						<div class="clients-container">
							<div class="clients">
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
									<a href="http://tabletops.io"><img src="https://cdn.filepicker.io/api/file/DESwwGUBQiSQy8lRUWku?cache=true" alt="Tabletops"></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
									<a href="https://filmfreeway.com/festival/widescreenfestival"><img src="https://cdn.filepicker.io/api/file/0LVOS06iQ2e8tnZWyuM9?cache=true" alt="Widescreen Festival"></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
									<a href="https://getindiewise.com"><img src="https://getindiewise.com/assets/img/Logo_alt2_web_87x45.png" alt="IndieWise"></a>
								</div>
								<!--<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
									<a href="#"><img src="images/client-4.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
									<a href="#"><img src="images/client-5.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
									<a href="#"><img src="images/client-6.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
									<a href="#"><img src="images/client-7.png" alt=""></a>
								</div>
								<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
									<a href="#"><img src="images/client-8.png" alt=""></a>
								</div>-->
							</div>
						</div>
					</div>
				</div>
			</section>

				<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<footer id="footer" class="clearfix ">

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="subfooter-inner">
							<div class="row">
								<div class="col-md-12">
									<p class="text-center">Copyright © 2017 Wise Events, LLC. All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>
		<script type="text/javascript" src="plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
		<script type="text/javascript" src="plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>
		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>
		<!-- Morphext -->
		<script type="text/javascript" src="plugins/morphext/morphext.min.js"></script>
		<!-- Background Video -->
		<script src="plugins/vide/jquery.vide.js"></script>
		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owlcarousel2/owl.carousel.min.js"></script>
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="plugins/SmoothScroll.js"></script>
		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>
		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
