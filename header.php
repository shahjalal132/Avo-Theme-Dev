<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

    <!-- Metas -->
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <meta name="keywords" content="HTML5 Template Avo onepage themeforest" >
    <meta name="description" content="Avo - Onepage Multi-Purpose HTML5 Template" >
    <meta name="author" content="">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>



    <!-- ==================== Start Loading ==================== -->

    <!-- <div id="preloader">
    </div> -->

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-light.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.html">Main Home</a>
                            <a class="dropdown-item" href="index2.html">Creative Studio</a>
                            <a class="dropdown-item" href="index3.html">Business Startup</a>
                            <a class="dropdown-item" href="index4.html">One Page</a>
                            <a class="dropdown-item" href="index5.html">Freelancer</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Showcases</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="showcase.html">Full Screen</a>
                            <a class="dropdown-item" href="showcase2.html">Creative Carousel</a>
                            <a class="dropdown-item" href="showcase3.html">Radius Carousel</a>
                            <a class="dropdown-item" href="showcase4.html">Columns Carousel</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Portfolio</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="works.html">Mouse Info</a>
                            <a class="dropdown-item" href="works2.html">Masonry 3 Columns</a>
                            <a class="dropdown-item" href="works3.html">Masonry 2 Columns</a>
                            <a class="dropdown-item" href="works4.html">Pinterest List</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="search">
                    <span class="icon pe-7s-search cursor-pointer"></span>
                    <div class="search-form text-center custom-font">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                        <span class="close pe-7s-close cursor-pointer"></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Slider ==================== -->

    <header class="freelancer sub-bg valign bg-img parallaxie" data-background="<?php echo get_template_directory_uri(); ?>/img/slid/freelancer.jpg"
        data-overlay-dark="4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cont">
                        <h6>Hello, I'm</h6>
                        <h1>Alex Smith</h1>
                        <h4>UI & UX Designer</h4>
                        <div class="social-icon">
                            <a href="#0" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-pinterest"></i>
                            </a>
                            <a href="#0" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- ==================== End Slider ==================== -->