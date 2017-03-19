<?php //require 'vendor/autoload.php'; ?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="en">
	<!--<![endif]-->

    <?php require ('partials/head.php'); ?>

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
                <?php
                $active = 'contact';
                require('partials/nav.php');
                ?>				<!-- header end -->
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
								<form id="contact-form-with-recaptcha" class="margin-clear" role="form">
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
									<input type="email" name="to" id="to" hidden value="convention@getindiewise.com">
									<input type="submit" value="Submit" class="submit-button btn btn-default">
								</form>
							</div>
						</div>
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

			<!-- Sponsors Section -->
            <?php require('partials/sponsors.php'); ?>
			<!-- Sponsors Section END -->

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
		<!-- Bootstrap Notify javascript -->
		<script type="text/javascript" src="plugins/bootstrap-notify/bootstrap-notify.js"></script>
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="plugins/SmoothScroll.js"></script>
		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>
		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

		<script type="text/javascript">
            /*$(document).ready(function () {
                // Form Validation and Submit
                //-----------------------------------------------
                var thisForm = $("#contact-form-with-recaptcha");
                thisForm.validate({
                    /!*rules: {
//                        name: 'required'
                    },*!/
                    submitHandler: function(form) {
                        $.post('https://getindiewise.com/api/contact', thisForm.serialize(), function (data) {
                            $.notify({
                                // options
                                message: 'Great! Message Sent'
                            },{
                                // settings
                                type: 'success',
                                delay: 8000,
                                offset : {
                                    y: 100,
                                    x: 20
                                }
                            });
                        });
                    }
                });
            })*/
		</script>

	</body>
</html>
