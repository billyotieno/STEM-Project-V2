<!doctype html>
<html lang="en-US">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caplora Academy</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Caplora Academy - Nurturing Creativity">
    <meta name="author">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Poppins:300,400,500,600" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/reset.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/ion-icons/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl-slider/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/slideshow/slideshow.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/lightbox/lity.min.css">
    <!-- Theme CSS -->
    <link id="theme" rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme5.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/caplora.css">
    <script src="<?php echo base_url() ?>assets/vendor/modernizr.js"></script>
</head>

<body>
    <!-- Scroll up -->
    <div class="scrollup">
        <i class="ion-ios-arrow-up"></i>
    </div>
    <!-- Main Container -->
    <div class="web-in">
        <!-- Search Modal -->
        <div id="search-modal">
            <img src="<?php echo base_url() ?>assets/img/exit.svg" class="exit" alt="">
            <form class="search-form" action="#">
                <label>What are you looking for?</label>
                <input type="text" placeholder="Your search term here...">
                <span>Press <b class="primary">enter</b> to confirm search term</span>
            </form>
        </div>

        <!-- Start Project Modal -->
        <div id="modal-bg">
            <img src="<?php echo base_url(); ?>assets/img/exit.svg" class="exit" alt="">
            <div class="holder">
                <div class="placer">
                    <div id="modal" class="center">
                        <div class="title">
                            <h5>Join our program</h5>
                            <span class="promo-heading">Let's make your kids creative</span>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 w-section mh"><i class="ion-ios-star-outline"></i>
                                <h3>Our Service</h3>
                                <p>We provide a curriculum that nurtures creativity.
                                </p>
                            </div>
                            <div class="col-sm-6 w-section mh"><i class="ion-ios-glasses-outline"></i>
                                <h3>Our Promise</h3>
                                <p>We promise to raise a generation of makers and creatives.
                                </p>
                            </div>
                            <div class="col-sm-6 w-section mh"><i class="ion-ios-filing-outline"></i>
                                <h3>Your Investment</h3>
                                <p>Providing an opportunity for your child to create and develop interest in science, technology, engineering, arts and mathematics.
                                </p>
                            </div>
                            <div class="col-sm-6 w-section mh"><i class="ion-ios-person-outline"></i>
                                <h3>Focus on making</h3>
                                <p>Our focus is equipping young ones with ability to design and create.
                                </p>
                            </div>
                        </div>
                        <hr>
                        <a href="#" class="btn"><span>Give us a call</span></a>
                        <a href="#" class="btn"><span>Contact Page</span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav id="light" class="transparent start-light regular">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-ui n_">
                            <div>
                                <a href="#" class="btn hidden-xs start-project"><span>Join our program</span></a>
                                <a href="#" class="search">
                                    <img class="white-icon" src="<?php echo base_url() ?>assets/img/search.svg" alt="">
                                    <img class="dark-icon" src="<?php echo base_url() ?>assets/img/search-dark.svg" alt="">
                                </a>
                                <div id="menu-icon"><span></span></div>
                            </div>
                        </div>
                        <div class="logo-holder n_">
                            <div id="malogo">
                                <a href="<?php echo site_url(''); ?>">
                                    <img class="logo" src="<?php echo base_url() ?>assets/img/caplora_white.png" alt="">
                                    <img class="logo alt" src="<?php echo base_url() ?>assets/img/caplora.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="nav-content n_">
                            <ul class="light-dropdown">
                                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('caplora/aboutus'); ?>">About Us</a></li>
                                <li><a href="#">Our Programs</a>
                                    <ul class="dropdown mob-show-1">
                                        <li class="nav-col">
                                            <ul data-mh="pages">
                                                <li class="sub-nav-header"><a href="#">Our Programs</a>
                                                    <ul class="mob-show-2">
                                                        <li><a href="<?php echo site_url('caplora/techmakers'); ?>">TechMakers</a></li>
                                                        <li><a href="<?php echo site_url('caplora/speechcontest'); ?>">Speech Contests</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('caplora/events'); ?>">Events</a></li>
                                <li><a href="<?php echo site_url(); ?>">Gallery</a></li>
                                <li><a href="<?php echo site_url('caplora/ourblogs'); ?>">Blog</a></li>
                                <li><a href="<?php echo site_url('caplora/contactus'); ?>">Contact</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End of navigation -->