<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from wowtheme7.com/tf/kiante/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 03:40:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kiante - News Magazine Modern Html Template</title>

    <!-- favicon -->
    <link rel="icon" href="demo-landing/img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/assets/css/responsive.css">

</head>
<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="https://wowtheme7.com/tf/kiante/home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->
    <div class="body-overlay" id="body-overlay"></div>

    <header id="theme-header-one" class="header-style-one">
		<div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6">
                        <div class="header-weather"><i class="fa fa-weather"></i>   38°C</div>
                        <div class="header-date">August 6, 2022</div>
                    </div>
                    <div class="col-md-6 col-sm-6 text-end">
                        <div class="htop_social">
                            <a href="#" class="social-list__link"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- navbar start -->
    <div class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <a class="main-logo" href="home.html"><img src="{{ asset('frontend_assets') }}/assets/img/logo.png" alt="img"></a>
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="home.html"><img src="{{ asset('frontend_assets') }}/assets/img/logo.png" alt="img"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#miralax_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="miralax_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class=" current-menu-item">
                            <a href="#">Home</a>
                        </li>
                        <li><a href="blog-category.html">Business</a></li>
                        <li><a href="blog-category.html">Politics</a></li>
                        <li><a href="blog-category.html">Tech</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    @yield('content')

    <div class="container">
        <div class="subscribe-area" style="background-image: url({{ asset('frontend_assets') }}/assets/img/ad/Subscribe-Box.png);">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title p-0">
                        <h2>Subscribe To Kiante</h2>
                        <p>Signup for our Newsletter and stay informed</p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="subscribe-inner">
                        <input type="text" placeholder="Enter Email address">
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area start -->
    <footer class="footer-area pd-top-80">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="widget widget_about">
                            <div class="logo">
                                Kiante
                            </div>
                            <p class="text-white">The stars will never align, and the traffic lights of life will never all be green at the same time.The stars will never align.</p>
                            <ul>
                                <li><span>Email</span> : info@example.com</li>
                                <li><span>Phone</span> : 00249 123 333 719</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <h5 class="widget-title">Quick Links</h5>
                        <div class="widget widget_link">
                            <ul>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Motivation</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <h5 class="widget-title">Entertainment</h5>
                        <div class="widget widget_link">
                            <ul>
                                <li><a href="#">Hollywood
                                </a></li>
                                <li><a href="#">Music
                                </a></li>
                                <li><a href="#">Videos
                                </a></li>
                                <li><a href="#">TV News
                                </a></li>
                                <li><a href="#">Celebrity News
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <h5 class="widget-title">Overview</h5>
                        <div class="widget widget_link">
                            <ul>
                                <li><a href="#">Business
                                </a></li>
                                <li><a href="#">About
                                </a></li>
                                <li><a href="#">Contact
                                </a></li>
                                <li><a href="#">Blog
                                </a></li>
                                <li><a href="#">Marketing
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <p>Copyright © Kiante 2022. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-long-arrow-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="{{ asset('frontend_assets') }}/assets/js/vendor.js"></script>
    <script src="{{ asset('frontend_assets') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- main js  -->
    <script src="{{ asset('frontend_assets') }}/assets/js/main.js"></script>
</body>

<!-- Mirrored from wowtheme7.com/tf/kiante/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 03:40:50 GMT -->
</html>
