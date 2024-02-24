<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="description" />
    <meta name="keywords" content="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="/front/img/favicon.ico" />
    <title>Helpo HTML Template</title>
    <!-- styles-->
    <link rel="stylesheet" href="/front/css/styles.min.css" />
    <!-- web-font loader-->
    <script>
        WebFontConfig = {

            google: {

                families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

            }

        }

        function font() {

            var wf = document.createElement('script')

            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
            wf.type = 'text/javascript'
            wf.async = 'true'

            var s = document.getElementsByTagName('script')[0]

            s.parentNode.insertBefore(wf, s)

        }

        font()
    </script>
</head>

<body>
    <div class="page-wrapper">
        <!-- mobile menu start-->
        <div class="mobile-nav">
            <div class="mobile-nav__inner">
                <div class="mobile-nav__item">
                    <nav class="menu-holder">
                        <ul class="mobile-menu">
                            <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
                            <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
                            <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
                            <li class="mobile-menu__item"><a class="mobile-menu__link" href="#">item</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- mobile menu end-->

        <!-- header start-->
        <header class="header header--front_2">
            <div class="container-fluid">
                <div class="row no-gutters justify-content-between">
                    <div class="col-auto d-flex align-items-center">
                        <div class="dropdown-trigger d-none d-sm-block">
                            <div class="dropdown-trigger__item"></div>
                        </div>
                        <div class="header-logo"><a class="header-logo__link" href="index.html"><img
                                    class="header-logo__img" src="/front/img/logo_mono.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <!-- main menu start-->
                        <nav>
                            <ul class="main-menu">
                                <li
                                    class="main-menu__item {{ request()->routeIs('home') ? 'main-menu__item--active' : '' }}">
                                    <a class="main-menu__link" href="{{ route('home') }}"><span>Home</span></a>
                                </li>
                                <li
                                    class="main-menu__item {{ request()->routeIs('appeals') ? 'main-menu__item--active' : '' }}">
                                    <a class="main-menu__link" href="{{ route('appeals') }}"><span>Appeals</span></a>
                                </li>
                                <li
                                    class="main-menu__item {{ request()->routeIs('our_works') ? 'main-menu__item--active' : '' }}">
                                    <a class="main-menu__link" href="{{ route('our_works') }}"><span>Our
                                            Works</span></a>
                                </li>
                                <li
                                    class="main-menu__item {{ request()->routeIs('about') ? 'main-menu__item--active' : '' }}">
                                    <a class="main-menu__link" href="{{ route('about') }}"><span>About Us</span></a>
                                </li>
                                <li
                                    class="main-menu__item {{ request()->routeIs('blogs') ? 'main-menu__item--active' : '' }}">
                                    <a class="main-menu__link" href="{{ route('blogs') }}"><span>Blog</span></a>
                                </li>
                                <li
                                    class="main-menu__item main-menu__item--has-child {{ request()->routeIs('become_volunteer') || request()->routeIs('volunteers') ? 'main-menu__item--active' : '' }}">
                                    <a class="main-menu__link" href="javascript:void(0);"><span>Volunteers</span></a>
                                    <!-- sub menu start-->
                                    <ul class="main-menu__sub-list ">
                                        <li><a href="{{ route('volunteers') }}"
                                                class=""><span>Our Volunteers</span></a></li>
                                        <li><a href="{{ route('become_volunteer') }}"> <span>Become
                                                    Volunteer</span></a></li>
                                    </ul>
                                    <!-- sub menu end-->
                                </li>
                                <li
                                    class="main-menu__item {{ request()->routeIs('contact') ? 'main-menu__item--active' : '' }}">
                                    <a class="main-menu__link" href="{{ route('contact') }}"><span>Contact</span></a>
                                </li>

                            </ul>
                        </nav>
                        <!-- main menu end-->
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <!-- lang select start-->

                        <!-- lang select end--><a class="button button--squared" href="#"><span>Donate</span></a>
                        <div class="dropdown-trigger d-block d-sm-none">
                            <div class="dropdown-trigger__item"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="footer footer--front_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-logo"><a class="footer-logo__link" href="index.html"><img
                                    class="footer-logo__img" src="/front/img/logo_white.png" alt="logo" /></a>
                        </div>
                        <div class="footer-contacts">
                            <p class="footer-contacts__address">Elliott Ave, Parkville VIC 3052, Melbourne Canada</p>
                            <p class="footer-contacts__phone">Phone: <a href="tel:+31859644725">+31 85 964 47 25</a>
                            </p>
                            <p class="footer-contacts__mail">Email: <a
                                    href="mailto:support@helpo.org">support@helpo.org</a></p>
                        </div>
                        <!-- footer socials start-->
                        <ul class="footer-socials">
                            <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                        class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- footer socials end-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 offset-xl-1">
                        <h6 class="footer__title">Menu & Links</h6>
                        <!-- footer nav start-->
                        <nav>
                            <ul class="footer-menu">
                                <li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link"
                                        href="index.html">Home Page</a></li>
                                <li class="footer-menu__item"><a class="footer-menu__link" href="#">Blog &
                                        News</a></li>
                                <li class="footer-menu__item"><a class="footer-menu__link" href="about.html">About
                                        Us</a></li>
                                <li class="footer-menu__item"><a class="footer-menu__link" href="#">Contact
                                        Us</a></li>
                                <li class="footer-menu__item"><a class="footer-menu__link" href="#">Pages</a>
                                </li>
                                <li class="footer-menu__item"><a class="footer-menu__link"
                                        href="#">Elements</a></li>
                                <li class="footer-menu__item"><a class="footer-menu__link"
                                        href="causes.html">Causes</a></li>
                                <li class="footer-menu__item"><a class="footer-menu__link"
                                        href="#">Documentation</a></li>
                            </ul>
                        </nav>
                        <!-- footer nav end-->
                    </div>
                    <div class="col-lg-4 col-xl-3 offset-xl-1">
                        <h6 class="footer__title">Newsletter</h6>
                        <div class="footer__form">
                            <input class="footer__form-input" type="email" placeholder="Enter your E-mail" />
                            <button class="footer__form-submit button button--primary"
                                type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="row align-items-baseline">
                    <div class="col-md-6">
                        <p class="footer-copyright">© 2020 Helpo Charity Template by Artureanec</p>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-privacy"><a class="footer-privacy__link" href="#">Privacy
                                Policy</a><span class="footer-privacy__divider">|</span><a
                                class="footer-privacy__link" href="#">Term and Condision</a></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer front_2 end-->
    </div>
    <!-- libs-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="/front/js/libs.min.js"></script>
    <!-- scripts-->
    <script src="/front/js/common.min.js"></script>

</body>

</html>
