<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @yield('style')
</head>

<body>

    <!-- header -->
    <header>
        <div id="search-bar">
            <div class="container">
                <div class="row">
                    <form  action="{{ route('blogs') }}" method="GET" name="search" class="col-xs-12">
                        <input type="text" name="search" placeholder="Type and Hit Enter"><i id="search-close"
                            class="fa fa-close"></i>
                    </form>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="container">
                <div class="row">
                    <div class="logo-wrap col-md-3 col-xs-6">
                        <a href="/">CharityAid</a>
                    </div>
                    <div class="menu-wrap col-md-8 ">
                        <ul class="menu">
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="/">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('appeals') ? 'active' : '' }}">
                                <a href="{{ route('appeals') }}">Appeals</a>
                            </li>

                            <li class="{{ request()->routeIs('our_works') ? 'active' : '' }}">
                                <a href="{{ route('our_works') }}">Our Works</a>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="{{ request()->routeIs('blogs') ? 'active' : '' }}">
                                <a href="{{ route('blogs') }}">Blog</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-xs-6">
                        <div id="search-toggle">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!--[ MOBILE-MENU-AREA START ]-->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="mobile-area">
                                <div class="mobile-menu">
                                    <nav id="mobile-nav">
                                        <ul>
                                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                                <a href="/">Home</a>
                                            </li>
                                            <li
                                                class="{{ request()->route('appeals') || request()->route('appeal_details') ? 'active' : '' }}">
                                                <a href="{{ route('appeals') }}">Appeals</a>
                                            </li>

                                            <li
                                                class="{{ request()->routeIs('our_works') || request()->routeIs('work_details') ? 'active' : '' }}">
                                                <a href="{{ route('our_works') }}">Our Works</a>
                                            </li>
                                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                                <a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li
                                                class="{{ request()->routeIs('blogs') || request()->routeIs('blog_details') ? 'active' : '' }}">
                                                <a href="{{ route('blogs') }}">Blogs</a>
                                            </li>
                                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                                <a href="{{ route('contact') }}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--[ MOBILE-MENU-AREA END  ]-->
        </nav>

    </header>


    @yield('content')

    <!-- Foter -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="about widget clearfix">
                        <div class="logo-wrap">
                            <a href="/">CharityAid</a>
                        </div>
                        <p>Committed to making a positive impact, we strive to create a brighter, more equitable world for all </p>
                        <div class="social-media-icons">
                            <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                            <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            <a href="#"><i class="fa fa-skype"></i><span>Skype</span></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="quick-links widget clearfix">
                        <h4 class="title">Quick Links</h4>
                        <div class="links">
                            <a href="{{ route('about') }}"><i class="fa fa-angle-double-right"></i>About Us</a>
                            <a href="{{ route('our_works') }}"><i class="fa fa-angle-double-right"></i>Our Work</a>
                            <a href="{{ route('contact') }}"><i class="fa fa-angle-double-right"></i>Contact Us</a>
                            <a href="{{ route('blogs') }}"><i class="fa fa-angle-double-right"></i>Blog</a>
                            <a href="{{ route('appeals') }}"><i class="fa fa-angle-double-right"></i>Appeals</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <div class="quick-links widget clearfix">
                        <h4 class="title">Quick Links</h4>
                        <div class="links">
                            <a href="{{ route('become_volunteer') }}"><i class="fa fa-angle-double-right"></i>Become
                                Volunteer</a>
                            <a href="{{ route('terms_and_conditions') }}"><i
                                    class="fa fa-angle-double-right"></i>Terms and Conditions</a>
                            <a href="{{ route('privacy_policy') }}"><i class="fa fa-angle-double-right"></i>Privacy
                                Policy</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <h5>Copyright ©2017 CharityAid. All Rights Reserved</h5>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/progress-bar-appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/owl-carousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/nivo-lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBEypW1XtGLWpikFPcityAok8rhJzzWRw "></script>
    <script type="text/javascript" src="{{ asset('assets/js/gmaps.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/js.js') }}"></script>
    @yield('script')


</body>
