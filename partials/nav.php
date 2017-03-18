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
                                        <li class="<?= $active === 'index' ? 'active' : '' ?>">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="<?= $active === 'register' ? 'active' : '' ?>">
                                            <a href="#">Register</a>
                                        </li>
                                        <li>
                                            <a href="https://www.filestackapi.com/api/file/B6WdZyL0QmeFPmSc3l7E?cache=true" target="_blank">Schedule</a>
                                        </li>
                                        <li class="<?= $active === 'soon' ? 'active' : '' ?>">
                                            <a href="/soon.php">Book Hotel</a>
                                        </li>
                                        <li class="<?= $active === 'story' ? 'active' : '' ?>">
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
