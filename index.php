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
			<div class="header-container hidden-xs hidden-sm">


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
										<li><i class="fa fa-phone pr-5 pl-10"></i><a href="tel:3059995910" style="color: #FFF;">+1 (305) 999-5910</a></li>
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> <a href="mailto:convention@getindiewise.com" style="color: #FFF;">convention@getindiewise.com</a></li>
									</ul>
								</div>
								<!-- header-top-first end -->
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
					$active = 'index';
					require('partials/nav.php');
				?>
				<!-- header end -->
			</div>
			<!-- header-container end -->

			<!-- Offcanvas side start -->
			<div class="offcanvas-container hidden-md hidden-lg">
				<nav id="offcanvas" class="animated navmenu navmenu-default navmenu-fixed-right offcanvas offcanvas-right" role="navigation">
					<!-- logo -->
					<div class="logo">
						<a href="/"><img id="logo_img" src="https://getindiewise.com/assets/img/Logo_alt2_web_87x45.png" alt="IndieWise" style="max-height: 55px;"></a>
					</div>

					<div class="separator"></div>
					<ul class="social-links circle small clearfix margin-clear text-center animated-effect-1">
						<li class="twitter"><a target="_blank" href="https://twitter.com/getindiewise"><i class="fa fa-twitter"></i></a></li>
						<li class="googleplus"><a target="_blank" href="https://www.instagram.com/getindiewise/"><i class="fa fa-instagram"></i></a></li>
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/getindiewise"><i class="fa fa-facebook"></i></a></li>
					</ul>
					<div class="separator mt-10"></div>
					<ul class="nav navbar-nav text-center">
						<li class="<?= $active === 'index' ? 'active' : '' ?>">
							<a href="/">Home</a>
						</li>
						<li class="<?= $active === 'register' ? 'active' : '' ?>">
							<a href="https://www.eventbrite.com/e/grand-indiewise-convention-package-deals-single-event-passes-tickets-32982861627#tickets" target="_blank">Register</a>
						</li>
						<li>
							<a href="https://www.filestackapi.com/api/file/B6WdZyL0QmeFPmSc3l7E?cache=true" target="_blank">Schedule</a>
						</li>
						<li class="<?= $active === 'soon' ? 'active' : '' ?>">
							<a href="/soon.php" target="_blank">Book Hotel</a>
						</li>
						<li onclick="closeCanvas()">
							<a href="#">Our Story</a>
						</li>
						<li class="<?= $active === 'contact' ? 'active' : '' ?>">
							<a href="/contact.php">Contact Us</a>
						</li>
					</ul>
				</nav>
				<button type="button" class="offcanvas-toggle-right navbar-toggle" data-toggle="offcanvas" data-target="#offcanvas"></button>
			</div>
			<!-- offcanvas side end -->

			<!-- banner start -->
			<!-- Slider -->
			<!-- ================ -->
			<div class="banner clearfix">

				<!-- slideshow start -->
				<!-- ================ -->
				<div class="slideshow">

					<!-- slider revolution start -->
					<!-- ================ -->
					<div class="slider-revolution-5-container">
						<div id="slider-banner-fullscreen-hero" class="slider-banner-fullscreen-hero rev_slider" data-version="5.0">
							<ul class="slides">
								<!-- slide 1 start -->
								<!-- ================ -->
								<li class="text-center" data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="off">

									<!-- main image -->
									<img src="./images/HOTEL/Marco%20Polo%20Beach%20Resort%203.jpg" alt="slidebg1" data-bgposition="center bottom" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

									<!-- Transparent Background -->
									<div class="tp-caption dark-translucent-bg"
									     data-x="center"
									     data-y="center"
									     data-start="0"
									     data-transform_in="opacity:0;s:600;e:Power2.easeInOut;"
									     data-transform_out="opacity:0;s:600;s:300;"
									     data-width="5000"
									     data-height="5000">
									</div>

									<!-- LAYER NR. 1 -->
									<div class="tp-caption large_white"
									     data-x="center"
									     data-y="100"
									     data-start="0"
									     data-transform_idle="o:1;"
									     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
									     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
									     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
										<span class="logo-font">Grand <span class="text-default">IndieWise</span> Convention</span>
									</div>

									<!-- SUB-LAYER NR. 1-->
									<div class="tp-caption medium_white"
									     data-x="center"
									     data-y="145"
									     data-start="400"
									     data-transform_idle="o:1;"
									     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
									     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">August 24-27
									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption large_white tp-resizeme"
									     data-x="center"
									     data-y="160"
									     data-start="100"
									     data-transform_idle="o:1;"
									     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
									     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;">
										<div class="separator light"></div>
									</div>

									<!-- LAYER NR. 3 -->
									<div class="tp-caption large_white"
									     data-x="center"
									     data-y="190"
									     data-start="200"
									     data-transform_idle="o:1;"
									     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"
									     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
									     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
										<a href="https://www.eventbrite.com/e/grand-indiewise-convention-package-deals-single-event-passes-tickets-32982861627#tickets" target="_blank">
											<span class="text-rotator" data-rotator-animation-effect="fadeIn">
												<strong>Join The Fun</strong>
											</span>
										</a>
									</div>

									<!-- LAYER NR. 4 -->
									<div class="tp-caption large_white tp-resizeme"
									     data-x="center"
									     data-y="230"
									     data-start="300"
									     data-transform_idle="o:1;"
									     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;">
										<div class="separator light"></div>
									</div>

									<!-- LAYER NR. 5 -->
									<div class="tp-caption medium_white"
									     data-x="center"
									     data-y="270"
									     data-start="400"
									     data-transform_idle="o:1;"
									     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;"data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
									     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Registration is NOW OPEN
										<br><small style="font-size: 60%">Miami, Florida</small>
									</div>

									<!-- LAYER NR. 5 -->
									<div class="tp-caption"
									     data-x="center"
									     data-y="bottom"
									     data-voffset="100"
									     data-start="500"
									     data-transform_idle="o:1;"
									     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
									     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
									     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
										<a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
									</div>
								</li>
								<!-- slide 1 end -->

							</ul>
							<div class="tp-bannertimer"></div>
						</div>
					</div>
					<!-- slider revolution end -->

				</div>
				<!-- slideshow end -->

			</div>
			<!-- banner end -->

			<div id="page-start"></div>

			<!-- section start -->
			<!-- Registration - Call to Action -->
			<!-- ================ -->
			<section class="light-gray-bg pv-30 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">Join Us for the <br> 1st <strong>Grand</strong> IndieWise <strong>Convention</strong></h2>
							<div class="separator"></div>
							<p class="large text-center">Join us August 24-27 in Sunny South Florida. <br>
								Registration is NOW OPEN - be sure to catch the early bird price!</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 text-center">
							<a href="https://www.eventbrite.com/e/grand-indiewise-convention-package-deals-single-event-passes-tickets-32982861627#tickets" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Register</a>
						</div>
						<div class="col-md-3 text-center">
							<a href="https://www.filestackapi.com/api/file/0h4UOj96TBeTginUskZT?cache=true" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Become a Sponsor</a>
						</div>
						<div class="col-md-2 text-center">
							<a href="https://www.facebook.com/events/1580028138960728" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Learn More</a>
						</div>
						<div class="col-md-3 text-center">
							<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2T8RKYZ4P8L42" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Donate Today</a>
						</div>
						<div class="col-md-2 text-center">
							<a href="/soon.php" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Book Hotel</a>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->

			<!-- section start -->
			<!-- About -->
			<!-- ================ -->
			<!--<section class="pv-30 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">About <strong>IndieWise</strong></h2>
							<div class="separator"></div>
							<p class="large text-center">The purpose of IndieWise is to allow for an open forum of independent filmmakers and artists who seek feedback on their work from peers and wish to also participate in the feedback and judging of other projects or works.</p>
						</div>
						&lt;!&ndash;<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
								<h3>Clean Code &amp; Design</h3>
								<div class="separator clearfix"></div>
								<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
								<a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
								<span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
								<h3>Extremely Flexible</h3>
								<div class="separator clearfix"></div>
								<p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
								<a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
								<span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
								<h3>Latest Technologies</h3>
								<div class="separator clearfix"></div>
								<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
								<a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>&ndash;&gt;
					</div>
				</div>
			</section>-->
			<!-- section end -->

			<!-- section -->
			<!-- Speakers -->
			<!-- ================ -->
			<section class="pv-30 padding-bottom-clear">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center"><strong>Speakers</strong></h2>
							<div class="separator"></div>
							<!--<p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>-->
							<br>
						</div>
					</div>
				</div>
				<div class="space-bottom">
					<div class="row">
						<div class="col-sm-3"><!-- Jarrod Knowles -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/JhBOvk30QaKClS3DXhjA?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Jarrod Knowles</h3>
									<div class="separator"></div>
									<h5>Founder of IndieWise & WideScreen Festival</h5>
									<p></p>
										<a data-toggle="modal" data-target="#BioModal" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 1 -->
							<div class="modal fade" id="BioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Jarrod Knowles' Bio</h4>
										</div>
										<div class="modal-body">
											<p>Just a cool, short Bahamian dude with a tall ego...
												<br><br>

												#NuffSaid
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- Jamie Lee Smith -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/otvnRFSMQHSw9LWOhjEi?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Jamie Lee Smith</h3>
									<div class="separator"></div>
									<h5>Global Rockstar Productions</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal4" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 4 -->
							<div class="modal fade" id="BioModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Jamie Lee Smith's Bio</h4>
										</div>
										<div class="modal-body">
											<p>Jamie Lee Smith, a native of Colorado, holds degrees in both Political Science & International Relations. Jamie Lee began her career in the music industry.  Grateful for those opportunities, she would next utilize her experiences to transition into the development of a production company "Global Rockstar Productions" and found that she had a talent for film making.
												She has grown Global Rockstar Productions into a reputable part of the film making community with contributions to films such as Jumper, Battle Los Angeles, 51, Up in the Air, Death House, Montana Sky, Pirates of the Caribbean, Mirror Mirror, Blood Out, Things we do for Love, Jack Reacher.  Global Rockstar Productions has also been involved with such TV series as The Philanthropist, CSI, Real Housewives, various reality shows, Chicago Fire and NCIS: New Orleans.
											</p>
											<p>Most recently, Jamie Lee has expended into independent film making as An Executive Producer, Producer and Assistant director. Her first independent film, Seven Deadly Words, has been highly awarded, winning more accolades than any other faith-based film.  In 2015 she went onto make Losing Breen, 2016 Shadow of the Missing and is currently working on her forth independent film while still running Global Rockstar Productions.
												When not working on films, Jamie Lee travels the world speaking at conferences for women, entrepreneurs and young filmmakers.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- George E. Fernandez -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/bMPDo424T6CDCJLOnrdN?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>George E. Fernandez</h3>
									<div class="separator"></div>
									<h5>Magic City Distribution</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal2" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 2 -->
							<div class="modal fade" id="BioModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">George E. Fernandez's Bio</h4>
										</div>
										<div class="modal-body">
											<p>
												Fernandez has a BA in Communications from Excelsior College. He studied Film at the University of Miami, then earned an MIBA in International Business from Nova Southeastern University. He wrote the award-winning play, Vietnam Trilogy at the Veterans Theater in Los Angeles, California. The play became the basis for his first feature film, Cease Fire, with Don Johnson, and Lisa Blount and directed by future Emmy Award Winner David Nutter. He then wrote and produced Shallow Grave, followed by Point of Impact (Spanish Rose) starring Michael Pare, Barbara Carrera, and Michael Ironside. He has worked marketing and selling projects at Cannes, France; Milan, Italy; and the American Film Market (AFM) in Los Angeles. He also taught Film Production and Screenwriting at Florida State University School of Motion Pictures in Tallahassee, FL. He has also acted in several film projects including the lead in My Father, Mi Padre, dealing with Alzheimer’s. He has worked on several NBC/USA Pilots including The Arrangement. He has won the following: Key of the City, Miami, Florida; Filmmaker of the Year, University of Miami; Houston International Film Festival; Christianson Gold Lone Star Award-Best TV Pilot, Greater Ft. Lauderdale Film Festival; Penny Thought, Best of Florida, Docudrama; Entertainment Incubator Script Contest - 2nd Place; Governor of Florida, Screenwriting Award, Virgin Island Film Festival.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- William Grefe -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/D50easRY6WC5fjbWzOQi?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>William Grefe</h3>
									<div class="separator"></div>
									<h5>Legendary Writer & Director</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal3" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">William Grefe's Bio</h4>
										</div>
										<div class="modal-body">
											<p>
												William (“Bill”) Grefé is a true pioneer of Florida independent filmmaking and legendary cult movie director.  As a youth, he attended the University of Miami on a Dramatic scholarship, and then went on to act in Summer Stock in Woodstock, New York.  During the Korean War, he proudly served in the U.S. Navy.
											</p><p>
												He then turned his talents toward writing and filmmaking, writing and directing his first feature: The Checkered Flag filmed in Miami.  His second film, Racing Fever, again realized Bill as director/producer/screenwriter.
											</p><p>
												Throughout the ‘60s/’70s, Bill directed some of the best and most highly regarded cult and horror films of the fabled Grindhouse era, beginning with a trio of 1966 cult classics: Death Curse of Tartu, Sting of Death, and the former lost film The Devil’s Sisters.  Death Curse of Tartu is a favorite creature feature among monster movie enthusiasts.  The Devil’s Sisters, for decades regarded as a “lost film”, enjoyed a resurgence of interest and popularity as a film print was discovered in Germany in 2013.
											</p><p>
												Grefé rounded out the ‘60s with another threesome of counter-culture curiosities: The Hooked Generation, The Naked Zoo (starring Rita Hayworth), and The Psychedelic Priest.
											</p><p>
												As the ‘70s dawned, Grefé turned back to horror exploitation, most notably in the beloved nature-run-amok sub-genre, beginning with the 1972 hit Stanley, which remains his signature film.  Stanley is hailed as one of the great nature-run-amok features, hissing the slithery story of a disassociated Vietnam veteran who possesses a kinship with rattlesnakes, and who uses this bond to wreak havoc on his bipedal enemies.  In select theaters during time of initial release, Stanley out-grossed the Academy Award winner The Godfather.
											</p><p>
												In 1975, Grefé followed up Stanley’s success of with the psychological horror film Impulse, starring William Shatner, Harold “Odd Job” Sakata, Ruth Roman, and the lovely Jennifer Bishop (who would again star for Bill in his next feature Mako: Jaws of Death).  Impulse was filmed entirely in Tampa, Florida and showcases William “Captain Kirk” Shatner in what many fans believe to be his best non-Star Trek role as “Matt Stone”, a deranged, pinkie finger-chewing con man out to steal the stately inheritance of a distraught widow.
											</p><p>
												In the wake of the success of Jaws, Grefé let loose his cinematic Kraken Mako: Jaws of Death, a screenplay that he actually wrote before that blockbuster was released.  A triumphant return to the nature-run-amok genre that served him so well with Stanley, Sting of Death (a “Jellyfish Monster”) and Death Curse of Tartu (featuring attacks by nature’s creatures, including a snake, alligator and shark), Mako was yet another box-office and critical hit in Grefé’s burgeoning pantheon of films.  Bill’s last proper cult feature was the 1977 exploitationer Whiskey Mountain, which rode the popularity wave of southern road movies of the time, due to hits such as Smokey and the Bandit.
											</p><p>
												Post Whiskey Mountain, Bill produced and directed 20+ half hour films for Bacardi rum, and over 50 commercials.
											</p><p>
												In 1985, Bill crowned his illustrious career by producing the famed Cease Fire with Don Johnson, not just a commercial success, but a fulfilling work that honored all Vietnam War veterans.
											</p><p>
												In addition to Bill’s feature film omnibus, he also served as President and Head of Production of South Florida’s Ivan Tours Studios, famous at the time for the Flipper and Gentle Ben television shows.  He is also noted for having directed second unit on the 1974 James Bond picture Live and Let Die, filmed partially in Florida.  He has since been the recipient of numerous awards and honors for his contributions to Florida motion pictures and cinema in general, including: A Certificate of Appreciation from the Mayor of Dade County, awarded by the University of Miami Film Association, given a key to the city of North Miami, elected to the Miami Edison Hall of Fame, named by the Entertainment Revue as “The Man Who is Florida Films”, and had his features screened at countless honorary events and film festivals, including: the Ft. Lauderdale Film Festival, the Gasparilla International Film Festival (Tampa), and the New Beverly Cinema at the request of Quentin Tarantino.  Bill has also spoken before attendees of the Cannes Film Festival and at the France TV Festival in Nice.
											</p><p>
												Bill resides in sunny South Florida with his lovely wife Grace and his large and wonderful family.  He continues to be a very active filmmaker, having directed the short film Consider Us Even in 2014.  He regularly makes event appearances for his fans, is a goodwill ambassador for cult movie entertainment, and does filmmaking/distribution seminars and lectures.  All of William Grefé’s films are in worldwide distribution, and as his cinematic legend grows, so will the popularity of his motion pictures.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3"><!-- Jim Eimmerman -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/ethNMqQWTZCx9HQSPxau?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Jim Eimmerman</h3>
									<div class="separator"></div>
									<h5>Still Point Films</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal8" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Jim Eimmerman's Bio</h4>
										</div>
										<div class="modal-body">
											<p>James Eimmerman is a focused individual with a passion for filmmaking, theology, and
												education. He is driven with the motivation to conceive, produce and exhibit works
												that will entertain audiences through purposeful and universal cinematic storytelling.
												His short film series Force-Full Imagination has successfully screened at over 20 film
												festivals worldwide. It has also gained online distribution on Stan Lee’s World of Heroes
												and earned the recognition of Disney/Lucasfilm and starwars.com garnering the Spirit
												of Fandom Award at the Star Wars Fan Film Awards in 2015.</p>
											<p>Jim is also the founder of Still Point Films, a production company striving to entertain
												audiences through the eyes of the heart. Still Point Films currently specializes in pre
												and post-production, emphasizing story first to benefit all latter aspects of production.
												With multiple productions in the pipeline covering a variety of genres and themes, Still
												Point Films continues to move forward through timeless storytelling.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- Steven Chun -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/nC4USnhCSfyLyAmmCznq?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Steven Chun, pga</h3>
									<div class="separator"></div>
									<h5>Phusol Studios</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal5" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Steven Chun's Bio</h4>
										</div>
										<div class="modal-body">
											<p>Under his production company, Phusol Studios, Steven Daniel Chun develops, finances and finds distribution for narrative film, television, and digital content for any platform. Prior to his own company, Steven Chun was a Digital Producer in Los Angeles, marketing high profile properties for  studios Disney and Warner Bros. He produced digital marketing creatives for popular titles such as “Pirates: At the World’s End”, “Wall-E”, “Up”, “Snow White”, “300”, “Batman Begins”,  as well as major TV titles such as “Hannah Montana”, “OC”, “West Wing”, and “Friends”. He is currently a member of the Producers Guild of America.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- Devanny Pinn -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/7o6eOZ07QeCCQOj8RGbC?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Devanny Pinn</h3>
									<div class="separator"></div>
									<h5>Jaguar Motion Pictures</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal6" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Devanny Pinn's Bio</h4>
										</div>
										<div class="modal-body">
											<p>Devanny Pinn is an actress and producer hailing from Los Angeles, California who is best known for her work in independent horror cinema. A performer since the age of 3, Devanny grew up in New Jersey starring in musical and ballet productions. She began college with an Opera scholarship and shortly after landed her first lead role in feature film. She has been working consistently since, having been dubbed a “Scream Queen” by media and appears in over 50 horror films and counting. She has shared the screen with such genre vets as Linda Blair, Kane Hodder, Danny Trejo and Sid Haig and portrayed infamous characters such as Manson family member 'Susan Atkins' and murder suspect 'Casey Anthony'.
											</p>
											<p>Having found a love for film behind the camera as well, Devanny wanted to learn more about her business and began producing features. She became VP for an international sales agency and worked in acquisitions for a domestic distribution company. In 2011 she co-founded 'Micro Bay Features' and has produced 8 feature films which are completed and available on various Bluray, DVD and VOD platforms worldwide. Her productions have also received awards and nominations from festivals around the world including "The California Film Awards", "Canada Int Film Festival", "Snowdance", "European Independent Film Festival" and "Action on Film" as well as received support from major trades such as The Hollywood Reporter, Vanity Fair France and Rolling Stone Brazil.
											</p>
											<p>Devanny is excited about a transition into the action genre with her new production company Jaguar Motion Pictures. Their upcoming release "Crossbreed" features actress Vivica A. Fox as the first African American woman to ever portray the President of the United States in a film.
											</p>
											<p>Devanny intends to branch out into television production next year and continues to assist other filmmakers with development and distribution. She hopes to one day be a major studio executive.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- Aaron Johnson -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/tmYzJ6yPQNy2NqgMjRIC?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Aaron Johnson</h3>
									<div class="separator"></div>
									<h5>Motivational Speaker & Award Winning Filmmaker</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal7" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Aaron Johnson's Bio</h4>
										</div>
										<div class="modal-body">
											<p>Driven. Focused. Motivated. These words are synonymous with high achievers, but they are just the tip of the iceberg in describing Aaron Johnson. A child prodigy by the age of 9-years-old, his quest to build a media empire encompasses everything from shooting movies to editing them. Born and raised in Miami, FL, the city’s cultural diversities has laid the foundation for Aaron’s artistic proclivities and powerful creations. With a love for telling stories and a plethora of resources to pull from in South Beach, he finds spontaneous inspiration from his surroundings on a daily basis. Making films that impact the minds and emotions of his viewers, his influential style of moviemaking is a visual representation of the talents he has honed over the years. His first professional project, Lost, which he crafted at the age of the 13-years-old, opened to rave reviews in AMC Theatres during the Wide-Screen Film & Music Festival with over 500 people in attendance. A go-getter for sure, Aaron is serious when it comes to his career, dreams, and goals. With a growing fan base of loyal supporters, his vision is to leave a lasting legacy that changes the worlds of individuals through his ability to live out his passions by way of his gifts. Aaron believes that you are never too young to pursue your purpose. “You are the only person that can stop you from achieving that goal or that dream.” Johnson’s objectives extend beyond establishing himself as a media mogul. He understands the importance of giving back. Aaron plans to mentor filmmakers through a training program for youth that empowers them to follow their passions, just as he was able to follow his six years ago. Aaron has a heart for story telling and has parlayed that ability into a niche in the entertainment industry. With a work ethic that keeps him creating constantly, he is a rising star with no sigh of tiring in sight.</p>


										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-sm-3"> <!-- Rolando Vinas -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/tZyZwc73SCCIdc570yrl?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Rolando Viñas</h3>
									<div class="separator"></div>
									<h5>Gorilla Studios</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal9" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Rolando Viñas' Bio</h4>
										</div>
										<div class="modal-body">
											<p>
												Rolando Viñas is a Miami native with a background in screenwriting. He is the writer/producer of the Horror feature 'Investigation 13' and teaches the subject of screenwriting at Miami Dade College. He is currently adapting the novel REDEMPTION by Ian Prattis and set to produce it in Canada in 2018.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- Ellen Jacoby -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/B7kDWITYTYehA2dDgzba?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Ellen Jacoby, CSA</h3>
									<div class="separator"></div>
									<h5>Ellen Jacoby Casting International</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal10" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Ellen Jacoby's Bio</h4>
										</div>
										<div class="modal-body">
											<p>Ellen is a Miami native, having been raised in New Jersey and making her way full circle back to home base.  A former professional singer and dancer, she had the ability to travel the world as an international backgammon champion, before returning to her beloved hometown, in the 1980’s.

												With her committed 24/7 schedule, Ellen finds time to lecture; teach and coach acting courses; devote her time to various local charities, including Cystic Fibrosis and the YWCA; has worked with the local Police to provide alternative life style programs for youth with rap sheets; and often donates her time to give lectures to various schools throughout the state.  She was part of the initial local consortium to recognize how important the Caribbean, and the Bahamas, were to the local Florida production business, and subsequently has worked with the Bahamian government on numerous productions, that brought work to Florida residents and companies.

												There isn’t a movie-goer around the world whose image of South Beach isn’t the bikini-clad women, roller skaters and pretty people of “The Birdcage”, or the zany-ness of Jim Carrey’s “Ace Ventura” as he makes his way around South Florida, or the unusual charisma of “There’s Something About Mary” as it became an instant cult “classic”. . . or the vision of a space shuttle launch in “Contact” at Cape Canaveral. . .or  Harrier jets taking off from the 7 mile bridge in the Keys in “True Lies.”   And all of these were Ellen Jacoby-cast feature films…

												Having worked with a who’s who of Hollywood directors, including: Steven Soderbergh, Joel Schumacher, Sidney Pollack, The Farrelly Bros., Bob Zemekis, Ron Howard, Mike Nicols, Michael Bay, Randa Haines, Tom Shadyac, Martin Scorsese, Tim Burton, Garry Marshall, John Landis, James Cameron, Joe Roth, Mira Nair and Tony Scott, Ellen Jacoby is one name that Hollywood keeps at the tip of its tongues, and at the top of its address book.

												And Ellen Jacoby is the reason the business keeps returning.  Some of her other projects include “Entourage” the movie (set for 2015 release), “A Change Of Heart,” “Plastic,” “Chef,” “Rock Of Ages,” and  TV series “Burn Notice,” “Justified,” and CSI: Miami.”
											<p/><p>
												Ellen Jacoby was appointed to the First Film Advisory Board, by Governor Jeb Bush, and named “Woman of the Millennium” by Miami Metro Magazine, and a former Mayor of Miami Beach proclaimed October 23rd as Ellen Jacoby Day.

												She is the former Chair of the Infrastructure Committee of the GMCVB and is currently  the VP of the FFPC, Florida Film Production Coalition.  Ellen has traveled to Tallahassee to work with legislators regarding the Florida film incentives.

												Most recently, on EJCI’s 25th anniversary, Ellen was presented with the Key to the City of Miami Beach.  She also received a Lifetime Achievement Award from her alma mater Franklin College.

												As founder, and President, of Ellen Jacoby Casting International, a casting office with separate film, television, commercial and Hispanic divisions, Ellen has employed over 250,000 Florida actors, dancers, performers through the years…..

												There are those who have come and gone in this business, and Ellen Jacoby has not only survived, she has flourished.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- Gui Popp-->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/08ziXviSRjqpFCv61N33?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Gui Popp</h3>
									<div class="separator"></div>
									<h5>Paradise Key Media</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal11" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Gui Popp's Bio</h4>
										</div>
										<div class="modal-body">
											<p>It was in Sao Paulo Brazil where Gui Popp held his first camera. He was fascinated by all the actions of each button and lens rotation as he tried to manage the giant Beta Cam with his tiny 9 year old body. Over the years it was this technical finesse - along with the creative freedom of photography - that drove Gui's passion into a career where every day he is able to witness, capture, create and collaborate within the space around him. It is this natural ability to always see the beauty in life with a wide smile and distinguished laugh that got him to where he is. He attracts those around him to enjoy his craft with the same energy that facilitates the collaboration of his team's composition. Today he is helping lead this team into a future where creative opportunity will flourish with the tools of Virtual and Augment Reality, in preparation for the next venture that his passions lead. "Paradise is a state of mind and I am able to find mine while helping others' find theirs.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- Jared Jacobs -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/NUA3BDFORC2sLMVTnyju?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Jared Jacobs</h3>
									<div class="separator"></div>
									<h5>Paradise Key Media</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal12" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Jared Jacobs' Bio</h4>
										</div>
										<div class="modal-body">
											<p>Jared’s life can be summed up easily by his profession of choice; it’s virtually reality, which means... it’s not quite reality. He has been chasing dreams for so long he has completely lost sight of what most consider “reality." But that’s not to say he hasn’t matured or grown as most people in the other reality might conclude. Nay! He has found entire communities of adventurous, illustrious and progressive dream-seekers who have been creating and sharing their own realities within this common reality we all choose to accept and live in. Jared's enterprising outlook has lead him deep into the Dystopian realities of Megadeth with Universal Studios, carried him through natural paradise with Carnival Cruise Lines and FRS, and landed him at the nexus of nearly every local environmental organization in Miami. "There are many keys to finding one's paradise. I still think it should have a palm tree."</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3"> <!-- Hagen Rottke -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/zmgG69BySRSQpqZy34Gi?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Hagen Rottke</h3>
									<div class="separator"></div>
									<h5>Miami Aerial Inc.</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal13" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Hagen Rottke's Bio</h4>
										</div>
										<div class="modal-body">
											<p>
												Hagen’s childhood was spent between participating in competitive sports, building and flying model aircraft, and electronics. Growing-up in East-Germany there was always
											great demand for scarce building material and remote-control electronics so Hagen built his own planes and electronics from scratch with great success. He still remembers
											when he got his first commercially manufactured RC controller but it was no better than the ones he had build by himself!
											</p>
											<p>He obtained a master degree in engineering in 1999. He was influenced by the upcoming internet and decided to pursue web design optimization. During his university studies, he followed another childhood dream and earned his private pilot license.
											Later in life, Hagen crossed over again into the remote-controlled world as he discovered the new technology in electronics that had became available. His goal became to build big planes, as light as possible, and to get the most incredible flight maneuvers, which became possible with brush-less motors and lithium polymer batteries.
											</p>
											<p>Hagen found a German website with a flying platform using 4 or more propellers. He was intrigued, but the real impact was made a few months later when he saw an aerial video made with a UAS and that really gave him the bug. He spent long hours finding the set-up and tools needed to shoot photos and video.
											In 2012 he created a few aerial videos with his UAS which made an impact on the community. As the result, Hagen and Paul Morris founded Miami Aerial, LLC in 2013 in order to provide clients with images from new angles and locations that are impossible to get with a large helicopter.
											</p>
											<p>Flying in the “directive visual loop” with a “heads-up” display, that gives both through-the-lens as well as direct visual contact, requires intuitive awareness that comes from many years of flight training, practice, and hands on experience.
											</p>
											<p>With years of piloting, design, build, and maintenance of aerial systems, he sets the bar and keeps the Miami Aerial fleet flying with an outstanding degree of precision, safety, and reliability.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"><!-- Paul Morris -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/XpV9dYQISlJs2PBCt05w?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Paul Morris</h3>
									<div class="separator"></div>
									<h5>Miami Aerial Inc.</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal14" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Paul Morris' Bio</h4>
										</div>
										<div class="modal-body">
											<p>
											Paul Morris was born in England and grew up on Long Island, NY. His family relocated to south Florida in the early 1970s and he still makes Miami home base. A commercial photographer for more than 30 years, he specializes in aerial still and motion photography. He shoots for a wide client base capturing images for marketing and advertising in all forms of print and broadcast media.
											</p>
											<p>
											Paul partnered with Hagen Rottke in 2012 to bring additional services to his clients with the use of unmanned aerial systems (UAS) for a unique low-level aerial point of view. Now, he is working on expanding the use of these multifunctional aircraft to additional industries and businesses through Miami Aerial.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->

			<!-- section -->
			<!-- Gallery -->
			<!-- ================ -->
			<section class="pv-30 light-gray-bg padding-bottom-clear">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">Gallery</h2>
							<div class="separator"></div>
							<!--<p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>-->
							<br>
						</div>
					</div>
				</div>
				<div class="space-bottom">
					<div class="owl-carousel carousel">
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/VCViHPxQreVAx3HQsT41?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/mL3gqKWUSxCHOg69kPao?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->

							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/ZuVkImQ9ardcUpmEEeNw?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->

							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/aFiZYCuuRiGlAbILAbLw?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->

							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/kozPCh67SnSjPLDfnK2q?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->

							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/0avzd3OCRimURmlTrc6U?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->

							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/EZ5YD4PVR1iM7Tp9M68l?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->

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
		<!-- Jasny Bootstrap  -->
		<script type="text/javascript" src="plugins/jasny-bootstrap/js/jasny-bootstrap.js"></script>
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

		<script>
			'use strict';
            window.ourStoryClick = false;
            $('#offcanvas').on('hidden.bs.offcanvas', function (e) {
                if (window.ourStoryClick) {
                    $('#ourStory').modal('show');
                    window.ourStoryClick = false;
                }
            });

            function closeCanvas() {
			    window.ourStoryClick = true;
                $('#offcanvas').offcanvas('hide');
            }
		</script>

	</body>
</html>
