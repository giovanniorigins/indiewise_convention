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
							<a href="https://www.eventbrite.com/e/grand-indiewise-convention-2018-ticket-packages-tickets-43579445294#tickets" target="_blank">Register</a>
						</li>
						<li>
							<a href="https://cdn.filestackcontent.com/C74MZCdORa21nuQd99eH?cache=true" target="_blank">Screenings</a>
						</li>
						<li>
							<a href="https://cdn.filestackcontent.com/vjLCgTjBRfCpX0Z9YZBm?cache=true" target="_blank">Programme 2017</a>
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

									<img src="http://i3.ytimg.com/vi/MwU4RM8epng/maxresdefault.jpg"
									     alt="Ocean"
									     class="rev-slidebg"
									     data-bgposition="center center"
									     data-bgfit="cover"
									     data-bgrepeat="no-repeat">

									<!-- BACKGROUND VIDEO LAYER -->
									<div class="rs-background-video-layer"
									     data-ytid="MwU4RM8epng"
									     data-volume="100"
									     data-forcerewind="on"
									     data-nextslideatend="true"
									     data-videoloop="loopandnoslidestop"
									     data-videoattributes="version=3&enablejsapi=1&html5=1&hd=1&wmode=opaque&showinfo=0&rel=0&
         origin=<?php echo $_SERVER['HTTP_HOST']; ?>"

									></div>

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
							<h2 class="text-center">Join Us for the <br><strong>Grand</strong> IndieWise <strong>Convention</strong></h2>
							<div class="separator"></div>
							<p class="large text-center">Join us August 9-12, 2018 in Sunny South Florida. <br>
								Registration Begins March 2018</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 text-center">
							<a href="https://www.facebook.com/pg/getindiewise/reviews" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Our Reviews</a>
						</div>
						<div class="col-md-4 text-center">
							<a href="https://www.filestackapi.com/api/file/Bwxx5XjRTYSdDOkKlb9V?cache=true" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Become a Sponsor</a>
						</div>
						<div class="col-md-4 text-center">
							<a href="https://facebook.com/getindiewise/photos" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Event Photos</a>
						</div>
						<div class="col-md-4 text-center">
							<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2T8RKYZ4P8L42" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Donate Today</a>
						</div>
						<div class="col-md-4 text-center">
							<a href="#" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Book Hotel</a>
						</div>
						<div class="col-md-4 text-center">
							<a href="#" target="_blank" class="btn btn-default-transparent btn-lg btn-hvr hvr-radial-out">Vendors</a>
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
			<!-- Celebrity Guests -->
			<!-- ================ -->
			<section class="pv-30 padding-bottom-clear hidden" >
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center"><strong>Celebrity Guests of Honor</strong></h2>
							<div class="separator"></div>
							<br>
						</div>
					</div>
				</div>
				<div class="space-bottom">
					<div class="row">
						<div class="col-sm-3"><!-- Luis Guzman -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/wmL373fWSOKU9oU5IZp0?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Luis Guzman</h3>
									<div class="separator"></div>
									<h5>Actor - Boogie Nights, Code Black, Carlito's Way, etc.</h5>
									<p></p>
										<a href="http://www.imdb.com/name/nm0350079/bio?ref_=nm_ov_bio_sm" target="_blank" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal c1 -->
							<div class="modal fade" id="BioModal-c1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Luis Guzman's Bio</h4>
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
						<div class="col-sm-3"><!-- Cemi Guzman -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/kft03EaJSBLJESF7RPgQ?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Cemi Guzman</h3>
									<div class="separator"></div>
									<h5>Producer - Hold On</h5>
									<p></p>
									<a href="http://www.imdb.com/name/nm6123069/bio" target="_blank" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal c2 -->
							<div class="modal fade" id="BioModal-c2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Cemi Guzman's Bio</h4>
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
						<div class="col-sm-3"><!-- Lea Black -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/ozk0p6vQS3CJW91bi2mC?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Lea Black</h3>
									<div class="separator"></div>
									<h5>Author, Philanthropist, Reality TV Star</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal-c3" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal c3 -->
							<div class="modal fade" id="BioModal-c3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Lea Black's Bio</h4>
										</div>
										<div class="modal-body">
											<p>
												Mother, wife, philanthropist, author, television personality, charity and political fundraiser and entrepreneur. On most days, you will find her juggling all of these duties on her near surgically-attached smart phone.
											</p>

											<p>
												A Texas native, she moved to Miami in the late 1980's and brought with her an unbridled passion and compassion, dynamism and focus, business acumen and civic responsibility, that together has left an indelible mark on Miami. As head of a home, a business and community leader, she believes woman can accomplish whatever they set their minds to and what they are passionate about. Lea has a prominent role on the current “Real Housewives of Miami” and has had numerous appearances on CNN HLN; EXTRA; The Today Show; WWHL; KTLA; NBC6 Miami; Bettheny – No Limits; and many other national news, entertainment and radio shows. She also blogs for the Huffington Post; OK Magazine; Haute Living Magazine; Palm Beach Woman; E Online; The World of Lea Black; LeaBlackInk; and has been a guest writer for various other websites and magazines.
											</p>

											<p>
												Outspoken and uncompromising in her beliefs, Lea divides her time between fulfilling her philanthropic missions centered around at-risk children and teens, and furthering her international business interests with her health, beauty, accessory and jewelry endeavors.
											</p>

											<p>
												Her charity work in Miami began twenty years ago when she founded THE BLACKS’ ANNUAL GALA, a yearly event unparalleled in both its success in raising money for its causes, and in its magnetism to attract A-list entertainers Aretha Franklin, Lil Wayne, Queen Latifah, Tony Bennett, Diane Warwick, Patti Labelle, Natalie Cole, Barry Gibb, Pit Bull, Pharrell Williams and Rick Ross, to name a few) who generously donated their performances. All of the Charity’s efforts, as well as all of the monies raised are used to provide at-risk youth with educational resources, vocational training, and creative and cultural outlets.
											</p>

											<p>
												Lea’s business focus for more than twenty years has at its core the health, beauty, and wellness of women everywhere. She has an unparalleled track record of success in developing and marketing beauty products.
												In 2010 she co-founded and co-launched Andre Walker Hair Products with Oprah’s stylist. Her Sudden Youth instant facelift kit was featured on Amazing Discovery’s as a top rated infomercial. She has recently added to the Sudden Youth, an array of skin care products featuring a daily face wash, everyday moisture, advanced anti-aging serum, skin revitalizing exfoliant and advanced anti-aging serum. Her previous beauty company had over 400 beauty products, including the highly successful fragrance “Jazz” which was sold to YSL. To share her beauty secrets with women everywhere, she authored the book “Beauty from Within”. In addition, Lea is also the author of the new novel, “Red Carpets & White Lies”, available in bookstores, Amazon and Barnes & Noble.com. A fictional story praised by pop culture trendsetters and award winning authors. Page Six article declares Lea Black “the next Jackie Collins”.
											</p>

											<p>
												Perhaps her most challenging, rewarding and important role is that of CEO of the Black Family household.

												Behind this ‘great woman’ are actually two great men: her intelligent and adventurous 15-year old son RJ, and her husband, famed civil and criminal defense attorney, Roy Black, who finds that on most days, it is far easier to get the last word in the courtroom than in the family’s living room.

												Lastly, but of no less importance, Lea is actively involved in politics. She has hosted fundraisers for President Obama, who personally called her to host his very first fundraiser in the State of Florida, as well as, VP Joe Biden, NY US Rep. Charlie Rangle, US Congressman John Conyers Jr., US Sen. Al Franken, US Sen. Claire McCaskill, US Sen. Harry Reid, Governor Charlie Crist, Nancy Pelosi when she was the Majority Leader in the U.S. House of Representatives and others.

												She bases out of Miami and Los Angeles, spending summers and holidays with her family at their home in the Hollywood Hills, Los Angeles.

												www.leablack.com

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
						<div class="col-sm-3"><!-- Khalilah Ali -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/HMAHpPpTbOpFj4iM0dig?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Khalilah Ali</h3>
									<div class="separator"></div>
									<h5>Former Wife of Boxing Legend Muhammad Ali</h5>
									<p></p>
									<a href="https://en.wikipedia.org/wiki/Khalilah_Ali" target="_blank" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal c4 -->
							<div class="modal fade" id="BioModal-c4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Khalilah Ali's Bio</h4>
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
				</div>
			</section>
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
						<div class="col-sm-3"><!-- Paul Morris -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/cuAADk0SfqpZqhVUIhEt?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Doug Schwab</h3>
									<div class="separator"></div>
									<h5>Maverick Entertainment Group</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal17" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Doug Schwab's Bio</h4>
										</div>
										<div class="modal-body">
											<p>Doug Schwab, President and Founder of Maverick, was born and raised in New Orleans, Louisiana. With over 38 years in the home entertainment industry, Schwab has established himself as a leader in independent film distribution and as a champion for independent filmmakers everywhere.</p>
											<p>Schwab has launched over 800 feature films since Maverick’s inception and now controls the largest library of African American themed feature length films in the world. He utilized the expertise and contacts he gained as a Blockbuster buyer to initially develop Maverick and now leads creation, promotion, and distribution efforts for various genres within the independent film category. Schwab and Maverick maintain an impeccable reputation within the industry and with filmmakers worldwide.</p>
											<p>Following Schwab’s vision, Maverick serves as a pipeline between independent filmmakers and movie fans everywhere. Unlike major movie studios, Maverick releases a consistent and constant supply of films consumers wish to view. Through relationships and output deals, Maverick can distribute its films across all media platforms so film lovers can watch Maverick movies when and where they choose.</p>
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
						<div class="col-sm-3"><!-- Edward Pollard-->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/4wJ5oVlaQRGTlhcHpsWB?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Edward Pollard</h3>
									<div class="separator"></div>
									<h5>360 Entertainment</h5>
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
											<h4 class="modal-title" id="myModalLabel">Edward Pollard's Bio</h4>
										</div>
										<div class="modal-body">
											<p>Edward Pollard is a computer engineer with over 20yrs experience in the field. His knowledge of Virtual Reality has made him a sought after resource in the world of film production due to the recent development of 360 video. Edward has worked on many 360 projects for both major brands and independent film makers. Edward has also applied his engineering background to develop new ways of capturing 360 content. As a strong proponent of 360 video production Edward strives to be an active resource in this ever evolving medium.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
											<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3"> <!-- Snoop Robinson -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/Me7gyEQcR3mIK4fwYbgn?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Snoop Robinson</h3>
									<div class="separator"></div>
									<h5>Actor | ​Director | Writer | Author</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal18" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Snoop Robinson's Bio</h4>
										</div>
										<div class="modal-body">
											<p>Snoop Robinson has pierced the veil of notoriety as a director and creator of short films with his most recent film “Her Eyez,” received the 2015 Excellence Award of Best Film of the Year. Snoop has proven his acumen in both comedic and dramatic roles which is giving him a great platform to work with other moguls in the industry. Snoop is currently at the helm of the entertainment industry with “Bold Evil Liar”, ” Snoop Robinson Sinful Confessions”, “Racial Conscience” and She’s Not Our Sister the stage play launched him the opportunity to showcase his films on The Gospel Music Channel. Additionally, SNOS was the top rated show in GMC network history at the time, which Snoop is constantly developing concepts, scripts and stage setting to bring multiple talents and vibrant work ethic to the entertainment industry</p>
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
						<div class="col-sm-3"><!-- Paul Morris -->
							<div class="image-box style-2 mb-20 bordered dark-bg text-center">
								<div class="overlay-container">
									<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/UBiWehQ9TGab7jrAUgAo?cache=true" data-fp-pixel-round="10" class="img-responsive" alt="">
									<!--<div class="overlay-to-top">
										<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
									</div>-->
								</div>
								<div class="body">
									<h3>Frederick Tabiyus Nah IV</h3>
									<div class="separator"></div>
									<h5>Phoenix 4 Productions</h5>
									<p></p>
									<a data-toggle="modal" data-target="#BioModal16" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">View Bio<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>

							<!-- Bio Modal 3 -->
							<div class="modal fade" id="BioModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Frederick Tabiyus Nah IV' Bio</h4>
										</div>
										<div class="modal-body">
											<p>Frederick Tabiyus Nah IV (Phoenix) is a director & artist who has emerged as a significant force within the entertainment industry. Frederick has been involved in over 70 stage/film productions, directed 20 productions, written 10 productions and choreographed 5 showcases. He has had the privilege to work with mentor/actor Greg Allan Williams, contemporary artist Brian Littrell (Backstreet Boys), "The Heart of Rochelle Foundation," Productions, & Divinity Church International.</p>
											<p>At the age of 14 Frederick started expanding his gifts through writing, dancing, choreographing, & other performing arts. Frederick received the Regional 7AAAAA Dramatics Arts Medal for his portrayal as Malcolm X. Along with other talents, Frederick performed at Disney Epcot. In 2007 Frederick also had the honor to perform at the Phillips Arena & was inducted into the International Thespian Honors Society. Following graduation in 2008, Frederick was seen in Kenny Leon's True Color's Theater Company Production of The Amen Corner at the Alliance Theater. He was part of the board of directors and a performance coach at CHOZEN Talent Development Agency & held the position as choreographer and director at Perimeter Dramatics Arts Academy where he worked on productions such as Disney Broadway Review, Aladdin & Mulan.</p>
											<p>Frederick served 8 years as the Director of Music for Divinity Church International. Some of this organization's accomplishments have included participation in Atlanta's 2008 D.I.F.F.A by Design AIDS Charity Benefit, the Consecration of Frederick's father, Bishop Frederick T. Nah, Jr., as well as, working alongside Brian Litrell from Backstreet Boys with the Divinity International Choir. In the summer of 2009, Frederick birthed out of Divinity, Phoenix 4 Productions as CEO/Director has written, directed, and produced 7 musical/dramatic Productions. Frederick Nah produced concerts Night of Jazz & Inspiration and the Annual Voices of Christmas. He has also participated in a few shows, including the CW's The Vampire Diaries, and Sid Roth's It's Supernatural. As an entrepreneur, Frederick opened up DYNAMIC "Cultural Arts & Community Center" to the public where he taught voice, acting, and performance.</p>
											<p>In 2012 Frederick gained national recognition and was selected to participate in Olivier Campergue's NCAA March Madness commercial ad campaign, "Brackets Everywhere,". The creative campaign that also included Big Boi from OutKast, Conan O'Brien, Kevin Hart, Jonah Hill, Channing Tatum, Anderson Cooper, Wolf Blitzer and HLN'S Robin Meade amongst others, ran across TBS, CBS, TNT and truTV, as well as CNN, HLN, Airport Network, CBS Outernet Partners, and across Turner Digital, which includes SI.com and NCAA.com.</p>
											<p>Following the success of creative storytelling, In 2013, along with Phoenix 4 Productions Fred partnered with Global Awareness Company One Billion Rising and was the key co-producer and Assistant Director to the highly acclaimed Music Video "Rise Up" directed by Chad Tennies. Frederick joined Trios De Media was selected and part of the Marketing/Advertisement team for the Tony Award winning Musical Production of FELA Produced by Will Smith, Jada Pinkett Smith, and Jay Z when it showcased at the Renowned Fox Theater. In 2014 Frederick & Phoenix 4 Productions won over 11 consecutive awards for short films "Musical Therapy", "Sanity", & "Tragically Beautiful" in Atlanta, GA & Los Angeles. Over the course of these projects Phoenix 4 expanded it' membership to over 50 people sectioned off into their divisions of Film, Music, Dance, Fitness, Post Production, & Writing. He was also selected for a Coca Cola AD.</p>
											<p>Frederick released his directorial debut for a feature film "BREATHE" in late 2014 early 2015. Recent critic review stated Breathe is "Powerful film of intersecting stories was moving, intellectual, thought provoking, and deserves a wider audience" (Dan's Movie Report)</p>
											<p>BREATHE was nominated for Best Independent Film at the Georgia World Congress Center & Received 3 nominations at the Mimi Wide Screen Film Festival. Phoenix 4 is scheduled to produce the Highly Anticipated Online Human Trafficking Film "DarkNet". A portion of the proceeds will go towards the movie's campaign "Be The Voice", which will send out rescue missions and shelter for sexual slaves. This year marks Frederick's first motion picture release of When Seasons Change scheduled to film this fall.</p>
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
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/LQNeoPAkQe2ZHSy5yf5p?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/7kfOZsglSYiF9Q6xV6wO?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/5TapWIpHSTKj1b48SQTD?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:crop,align:faces,width:400,height:300/VCViHPxQreVAx3HQsT41?cache=true" data-fp-pixel-round="10" class="img-responsive">
								<!--<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>-->
							</div>
						</div>
						<div class="image-box shadow text-center">
							<div class="overlay-container overlay-visible">
								<img data-fp-src="https://process.filestackapi.com/resize=fit:scale,align:faces,width:400,height:300/SLtqix8eRBO7eFAy6o0t?cache=true" data-fp-pixel-round="10" class="img-responsive">
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
			<section class="pv-30 padding-bottom-clear">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">Subscribe for Updates</h2>
							<div class="separator"></div>
							<!--<p class="large text-center">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>-->
							<br>
						</div>
					</div>
				</div>
				<div class="space-bottom">
					<div class="container">
						<!-- SendinBlue Signup Form HTML Code --><head>
							<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
							<meta name="viewport" content="width=device-width, initial-scale=1" />
						</head>
						<style>
							div#sib_embed_signup .needsfilled input {border-color: #B94A48 !important; color: #B94A48 !important;}
							div#sib_embed_signup .needsfilled {color: #B94A48 !important;}
							div#sib_embed_signup input[type="text"] {border: 1px solid #CCCCCC;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;}
							div#sib_embed_signup div.message_area {position: relative;padding: 10px 30px 10px 10px; margin: 0px 0px 10px 0px;font-size:14px; border-radius: 5px;-webkit-border-radius: 5px; -moz-border-radius: 5px;box-sizing: border-box;}
							div#sib_embed_signup div.message_area button.close {position: absolute;right: 8px;top: 8px;color: inherit;background: 0 0;border: 0;padding: 0px;-webkit-appearance: none;cursor: pointer;font-weight: bold;font-size: 14px;}
							.tipicon{cursor: pointer;padding: 3px 7px;font-size: 12px;font-weight: bold;line-height: 1.2;color: #fff;text-align: center;vertical-align: baseline;background-color: #999;border-radius: 10px;text-decoration: none;}
							.tooltip{display: inline;position: absolute;left: 97%;}
							.tooltip:hover:after{background: #333;background: rgba(0,0,0,.8);border-radius: 5px;color: #fff;content: attr(data-title);right: -2px;bottom: 26px;padding: 5px 15px;position: absolute;z-index: 98;width: 220px;}
							.tooltip_small:hover:after{padding: 5px 5px; width: 150px;}
							.tooltip:hover:before{border: solid;border-color: #333 transparent;border-width: 6px 6px 0 6px;bottom: 20px;content: "";left: 1px;position: absolute;z-index: 99;}
							.sib-dropdown-menu.flag-icon {display: none;height: 100px;overflow-x: hidden;min-width: 160px;font-size: 13px;list-style: none;padding-left:14px;border:1px solid rgba(0,0,0,.15);background: white;border-radius: 4px;margin-top:10px;}
							.sib-dropdown-menu.flag-icon li a{display: block;white-space: nowrap;text-decoration: none;color: rgba(0,0,0,0.87);box-shadow: none;}
							.sms_field .country-block{margin-right: 3px !important;float: left;width:56px;}
							.icon-arrow{display: inline-block;width:0px;height: 0px;margin-left:2px;margin-top:5px;border-top:4px dashed;border-right:4px solid transparent;border-left:4px solid transparent;vertical-align: text-top;}
							.sib-dropdown-toggle.country-flg{display: inline-block;font-size: 13px;}
							body {background-Image: url('');}
							body {background-color: #dcdcdc;}
							div#sib_embed_signup .sib-container {background: rgba(252,252,252,1);}
							div#sib_embed_signup .sib-container h1 {font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
							div#sib_embed_signup h1.title {font-size: 45px;}
							div#sib_embed_signup .sib-container .forms-builder-footer, div#sib_embed_signup .sib-container .description, div#sib_embed_signup .sib-container .fake-label, div#sib_embed_signup .sib-container .row, div#sib_embed_signup .sib-container #company-name{font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
							div#sib_embed_signup .forms-builder-footer,div#sib_embed_signup div.description,div#sib_embed_signup .fake-label,div#sib_embed_signup .row  {font-size: 17px;}
							div#sib_embed_signup .sib-container .button {font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
							div#sib_embed_signup .button{font-size: 14px;}
							div#sib_embed_signup input {font-size: 13px;}
							div#sib_embed_signup .sib-containter h1 {color: #232323;}
							div#sib_embed_signup .sib-container {color: #343434;}
							div#sib_embed_signup .sib-container .button{color: #ffffff;}
							div#sib_embed_signup .sib-container .button{background: #050505;}
							div#sib_embed_signup .forms-builder-wrapper{ max-width: 540px;}
							div#sib_embed_signup .sib-container{ padding: 40px 20px 20px;}
							div#sib_embed_signup .header{ padding: 0 20px;}
							div#sib_embed_signup h1.title{ lineHeight: 50px;}
							div#sib_embed_signup h3.company-name{ lineHeight: 35px;}
							div#sib_embed_signup div.description{ padding: 0 20px 15px;}
							div#sib_embed_signup div.row{ padding:10px 20px; }
							div#sib_embed_signup input[type=text]{ padding: 10px 4px;width:100% !important;box-sizing: border-box;}
						</style>
						<link rel="stylesheet" href="https://my.sendinblue.com/public/theme/version4/assets/styles/style.css" />
						<div id="sib_embed_signup" style="padding: 10px;">
							<div class="forms-builder-wrapper" style="position:relative;margin-left: auto;margin-right: auto;">
								<input type="hidden" id="sib_embed_signup_lang" value="en">
								<input type="hidden" id="sib_embed_invalid_email_message" value="That email address is not valid. Please try again.">
								<input type="hidden" name="primary_type" id="primary_type" value="email">
								<div id="sib_loading_gif_area" style="position: absolute;z-index: 9999;display: none;">
									<img src="https://my.sendinblue.com/public/theme/version4/assets/images/loader_sblue.gif" style="display: block;margin-left: auto;margin-right: auto;position: relative;top: 40%;">
								</div>
								<form class="description" id="theform" name="theform" action="https://my.sendinblue.com/users/subscribeembed/js_id/2kq42/id/1" onsubmit="return false;">
									<input type="hidden" name="js_id" id="js_id" value="2kq42"><input type="hidden" name="listid" id="listid" value="5"><input type="hidden" name="from_url" id="from_url" value="yes"><input type="hidden" name="hdn_email_txt" id="hdn_email_txt" value="">
									<div class="sib-container rounded">

										<input type="hidden" name="req_hid" id="req_hid" value="" style="font-size: 13px; font-family: &quot;Trebuchet MS&quot;, Verdana, Tahoma, Geneva, sans-serif;">
										<!--<div class="header" style="padding:0 20px;">
											<h1 class="title editable" data-editfield="newsletter_name"  style="font-weight: normal; text-align: left; font-size: 45px; margin-bottom: 2px; padding: 0px; margin-top: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(35, 35, 35); display: none;">My Newsletter</h1>
											<h3 id="company-name"  style="font-weight: normal; text-align: left; font-size: 25px; margin-bottom: 12px; padding: 0px; margin-top: 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); display: none;">By</h3>
										</div>-->
										<div class="description editable" data-editfield="newsletter_description"  style="padding: 0px 20px 15px; border-bottom: 1px solid rgb(204, 204, 204); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); font-size: 17px; display: block;">Subscribe to get future updates about the IndieWise Convention - We promise not to spam you!</div>
										<div class="view-messages" style=" margin:5px 0;"> </div>
										<!-- an email as primary -->
										<div class="primary-group email-group forms-builder-group ui-sortable" style="">
											<div class="row mandatory-email" style="padding: 10px 20px; position: relative; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); font-size: 17px;">
												<div class="lbl-tinyltr"  style="clear: both; float: none; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;">Enter your email address to subscribe. <red style="color:#ff0000;">*</red></div>
												<input type="text" name="email" id="email" value="" style="padding: 10px 4px; width: 90%; min-width: auto;">
												<div style="clear:both;"></div>
												<div class="hidden-btns">
													<a class="btn move" href="#"><i class="fa fa-arrows"></i></a><br>
													<!--<a class="btn btn-danger delete"  href="#"><i class="fa fa-trash-o fa-inverse"></i></a>-->
												</div>
											</div>

										</div>
										<div class="captcha forms-builder-group" style="display: none;"><div class="row" style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); font-size: 17px; padding: 10px 20px;"><div id="gcaptcha" style="transform: scale(1); margin-left: 0px;"></div></div></div>

										<!-- end of primary -->
										<div class="byline" style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(52, 52, 52); font-weight: bold; font-size: 16px; text-align: center; display: block;">
											<button class="button editable " type="submit" data-editfield="subscribe"  style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); background: rgb(5, 5, 5); display: inline-block; white-space: nowrap; min-height: 40px; margin: 0px 5px 0px 0px; padding: 0px 22px; text-decoration: none; text-transform: uppercase; text-align: center; font-weight: bold; font-style: normal; font-size: 14px; cursor: pointer; border: 0px; border-radius: 4px; vertical-align: top; height: auto; line-height: 150%;">Subscribe</button></div>
										<div style="clear:both;"></div>
									</div>
								</form>
							</div>
						</div>
						<script type="text/javascript">
                            var sib_prefix = 'sib';
                            var sib_dateformat = 'mm-dd-yyyy';
						</script>
						<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit&hl=en"></script>

						<script>
                            var verifyCallback = function(response) {
                                if(response.length > 0) {
                                    $(".captcha > div.row > div.message_area").remove();
                                }
                            };

                            var myCallBack = function() {
                                //Render the recaptcha1 on the element with ID "recaptcha1"
                                if($('.captcha > div.row > div#gcaptcha').length > 0) {
                                    var captcha = grecaptcha.render('gcaptcha', {
                                        'sitekey' : '6Lf7dRkUAAAAAJG9PNNLbqr5LJAbsw2HGD14ZIyS',
                                        'theme' : 'light',
                                        'callback' : verifyCallback,
                                    });
                                }
                            };
						</script>
						<script type='text/javascript' src='https://my.sendinblue.com/public/theme/version4/assets/js/src/subscribe-validate.js?v=1500542330'></script>
						<!-- End : SendinBlue Signup Form HTML Code -->
					</div>
				</div>
			</section>
			<!-- Sponsors Section END -->

			<!-- Newsletter Subscription -->
            <?php require('partials/sponsors.php'); ?>
			<!-- Newsletter Subscription END-->

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
