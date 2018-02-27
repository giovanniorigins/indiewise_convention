<header class="header fixed clearfix">

    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <!-- header-first start -->
                <!-- ================ -->
                <div class="header-first clearfix">

                    <!-- logo -->
                    <div id="logo" class="logo">
                        <a href="/"><img id="logo_img" src="https://getindiewise.com/assets/img/Logo_alt2_web_87x45.png" alt="IndieWise" style="max-height: 55px;"></a>
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
                                        <li class="<?= $active === 'index' ? 'active' : '' ?>">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="<?= $active === 'register' ? 'active' : '' ?>">
                                            <a href="https://www.eventbrite.com/e/grand-indiewise-convention-2018-ticket-packages-tickets-43579445294#tickets" target="_blank">Register</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#comingSoon">Screenings 2018</a>
                                        </li>
                                        <li>
		                                    <a href="#" data-toggle="modal" data-target="#comingSoon">Programme 2018</a>
	                                    </li>
                                        <li data-toggle="modal" data-target="#ourStory">
                                            <a href="#">Our Story</a>
                                        </li>
                                        <li class="<?= $active === 'contact' ? 'active' : '' ?>">
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

<!-- Bio Modal 3 -->
<div class="modal fade" id="ourStory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Our Story</h4>
			</div>
			<div class="modal-body">
				<p>
					April 18, 2015 saw the birth of IndieWise. "There are so many creative minds, but certainly not enough outlets to facilitate and inspire them", according to Founder & Chairman, Jarrod A Knowles. This extraordinary platform, coded and crafted by CTO and Lead Developer, Jerez Bain, seeks to provide a unique outlet, where every filmmaker has a voice and the opportunity for expression and constructive criticism.
				</p><p>
					Realizing the demand for additional outlets of expression, and the facilitation of learning and networking for artists and filmmakers, and furthermore, knowing the joy creative minds experience when seeing their work delivered on the big screen, in front of a live audience, Knowles took it upon himself to launch what is known as the Grand IndieWise Convention. The mission of the Grand IndieWise Convention is to, "Empower the Artist"
				</p><p>
					The IndieWise Team is beyond proud to present its Grand Convention, August 9-12, 2018 in Miami, Florida, where around 200 films will be screened at the AMC Aventura Theatre, attracting 400+ Filmmakers and Industry Professionals from nearly 80 Countries. Prepare for the time of your life, as we experience 4 days of: Networking, a Mega Yacht Party, Workshops, Master Classes, Guest Speakers, Motivation, Pitch Sessions, Live Entertainment, Charity Fundraising, Blue Carpet Photo Ops, and a Pool & Beach Party!
				</p><p>
					We certainly hope you’re as excited as we are!
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
				<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
			</div>
		</div>
	</div>
</div>

<!-- Schedule Modal -->
<div class="modal fade" id="comingSoon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Coming Soon</h4>
			</div>
			<div class="modal-body">
				<p>This information is not available yet, please check again later. Thanks!</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
				<!--<button type="button" class="btn btn-sm btn-default">Save changes</button>-->
			</div>
		</div>
	</div>
</div>
