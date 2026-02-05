<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from housa-html-demo.vercel.app/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Oct 2025 12:24:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/fav-logo1.png') }}" type="image/x-icon">
    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- mon propre style css -->
    @yield('style')
</head>

<body class="body1 b-bg1">
    <!--===== PRELOADER STARTS =======-->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('assets/img/logo/preloader.png') }}" alt="housa"></div>
        </div>
    </div>
    <!--===== PRELOADER ENDS =======-->
    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <!--===== PROGRESS ENDS=======-->
    <!--=====HEADER START=======-->
    @auth
        <header class="homepage1-body">
            <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="vl-logo">
                                <a href="{{ route('house.index') }}"><img src="{{ asset('assets/img/logo/logo1.png') }}"
                                        alt="housa"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 d-none d-lg-block">
                            <div class="vl-main-menu text-center">
                                <nav class="vl-mobile-menu-active">
                                    <ul>
                                        <li><a href="{{ route('house.index') }}"> <strong>Home </strong><span><i
                                                        class="fa-solid d-lg-inline d-none"></i></span></a>
                                        </li>
                                        <li><a href="{{ route('house.property') }}"> <strong>Properties </strong><span><i
                                                        class="fa-solid d-lg-inline d-none"></i></span></a>
                                        </li>
                                        <li><a href="{{ route('contact.index') }}"> <strong>Contact </strong><span><i
                                                        class="fa-solid d-lg-inline d-none"></i></span></a>
                                        </li>
                                        <li><a href="{{ route('house.about') }}"> <strong>About </strong><span><i
                                                        class="fa-solid d-lg-inline d-none"></i></span></a>
                                        </li>
                                        <li><a href="#"> <strong>Dashboard </strong><span><i
                                                        class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('admin.dashboard') }}">Dashboard </a></li>
                                                <li><a href="{{ route('house.visit') }}">My Visits </a></li>
                                                <li><a href="{{ route('house.rent') }}">My Rents </a></li>
                                                <li><a href="{{ route('house.wallet') }}">Wallet </a></li>
                                                <li><a href="{{ route('house.profil') }}">User Profil </a></li>
                                                <li><a href="{{ route('house.message') }}">Message </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> <strong>Blogs </strong><span><i
                                                        class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('house.blog') }}">Blog Default</a></li>
                                                <li><a href="{{ route('house.blog-grid') }}">Blog Grid</a></li>
                                                <li><a href="{{ route('house.blog-detail') }}">Blog Post Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="vl-hero-btn d-none d-lg-block text-end">
                                <div class="btn-area1 dashboard">
                                    <a href="{{ route('property.create') }}" class="vl-btn1">
                                        Add Listing
                                        <span class="arrow1">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                        <span class="arrow2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                    <button class="hamburger_menu"><i class="fa-solid fa-user"></i></button>
                                </div>
                            </div>
                            <div class="vl-header-action-item d-block d-lg-none">
                                <button type="button" class="vl-offcanvas-toggle">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====HEADER END =======-->
        <!--===== MOBILE HEADER STARTS =======-->
        <div class="homepage1-body">
            <div class="vl-offcanvas">
                <div class="vl-offcanvas-wrapper">
                    <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                        <div class="vl-offcanvas-logo">
                            <a href="{{ route('house.index') }}"><img src="{{ asset('assets/img/logo/logo1.png') }}"
                                    alt="housa"></a>
                        </div>
                        <div class="vl-offcanvas-close">
                            <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                    <div class="vl-offcanvas-menu d-lg-none mb-40">
                        <nav></nav>
                    </div>
                    <div class="space20"></div>
                    <div class="vl-offcanvas-info">
                        <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
                        <div class="space20"></div>
                        <span><a href="#"> <i class="fa-regular fa-envelope"></i> +237 682 885 515</a></span>
                        <span><a href="#"><i class="fa-solid fa-phone"></i> kuatenael62@gmail.com</a></span>
                        <span><a href="#"><i class="fa-solid fa-location-dot"></i> Douala,Cameroun</a></span>
                    </div>
                    <div class="space20"></div>
                    <div class="vl-offcanvas-social">
                        <h3 class="vl-offcanvas-sm-title">Follow Us</h3>
                        <div class="space20"></div>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="vl-offcanvas-overlay"></div>
        </div>
        <!--===== MOBILE HEADER STARTS =======-->
        <!--===== SIDEBAR STARTS=======-->
        <div class="header-site-icon">
            <div class="slide-bar slide-bar1">
                <div class="sidebar-info">
                    <div class="sidebar-logo">
                        <div class="close-mobile-menu">
                            <a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z">
                                    </path>
                                </svg></a>
                        </div>
                    </div>
                    <h3>Profile</h3>
                    <div class="space10"></div>
                    <div class="personal-info">
                        <div class="img1">
                            <img src="{{ asset('assets/img/all-images/others/others-img7.png') }}" alt="housa">
                        </div>
                        <div class="content">
                            <a href="{{ route('house.profil') }}">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                            <div class="space20"></div>
                            <span>{{ Auth::user()->rule }} </span>
                        </div>
                    </div>
                    <div class="boxarea">
                        <a href="{{ route('admin.dashboard') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M14 21C13.4477 21 13 20.5523 13 20V12C13 11.4477 13.4477 11 14 11H20C20.5523 11 21 11.4477 21 12V20C21 20.5523 20.5523 21 20 21H14ZM4 13C3.44772 13 3 12.5523 3 12V4C3 3.44772 3.44772 3 4 3H10C10.5523 3 11 3.44772 11 4V12C11 12.5523 10.5523 13 10 13H4ZM9 11V5H5V11H9ZM4 21C3.44772 21 3 20.5523 3 20V16C3 15.4477 3.44772 15 4 15H10C10.5523 15 11 15.4477 11 16V20C11 20.5523 10.5523 21 10 21H4ZM5 19H9V17H5V19ZM15 19H19V13H15V19ZM13 4C13 3.44772 13.4477 3 14 3H20C20.5523 3 21 3.44772 21 4V8C21 8.55228 20.5523 9 20 9H14C13.4477 9 13 8.55228 13 8V4ZM15 5V7H19V5H15Z">
                                    </path>
                                </svg></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </div>
                    <div class="boxarea">
                        <a href="{{ route('house.profil') }}">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z">
                                    </path>
                                </svg></span>
                            <span class="text">User Profile</span>
                        </a>
                    </div>
                    <div class="boxarea">
                        <a href="{{ route('house.visit') }}">
                            <span class="icon"><svg width="64" height="64" viewBox="0 0 64 64"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-width="2">
                                    <path
                                        d="M32 16C18 16 6 32 6 32s12 16 26 16 26-16 26-16S46 16 32 16zm0 22a6 6 0 1 1 0-12 6 6 0 0 1 0 12z" />
                                </svg></span>
                            <span class="text">Visit </span>
                        </a>
                    </div>
                    <div class="boxarea">
                        <a href="{{ route('house.rent') }}">
                            <span class="icon"><svg width="64" height="64" viewBox="0 0 64 64"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="#ED8438"
                                    stroke-width="2">
                                    <path
                                        d="M16 56V8h32v48H16zm8-8h8v8h-8v-8zm0-12h8v8h-8v-8zm0-12h8v8h-8v-8zm12 12h8v8h-8v-8zm0-12h8v8h-8v-8z" />
                                </svg></span>
                            <span class="text">My Rents</span>
                        </a>
                    </div>
                    <div class="boxarea">
                        <a href="{{ route('house.wallet') }}">
                            <span class="icon"><svg width="64" height="64" viewBox="0 0 64 64"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="#ED8438"
                                    stroke-width="2">
                                    <path d="M8 18h44a4 4 0 0 1 4 4v8h-8a4 4 0 0 0 0 8h8v8a4 4 0 0 1-4 4H8V18z" />
                                </svg></span>
                            <span class="text">My Finances</span>
                        </a>
                    </div>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                    <div class="boxarea">
                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z">
                                    </path>
                                </svg></span>
                            <span class="text">User Logout</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="body-overlay"></div>
        </div>
        <!--===== SIDEBAR ENDS STARTS=======-->

        @yield('content')

        <!--===== FOOTER AREA STARTS =======-->
        <div class="footer-cta-bg-area container-home1">
            <div class="cta1-section-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="heading1 text-center">
                                <h2 class="text-anime-style-3">Let’s Make Your Property Dreams a Reality</h2>
                                <div class="space16"></div>
                                <p data-aos="fade-up" data-aos-duration="900">Don’t wait to start your real estate
                                    journey. Whether you’re buying, selling, or renting, our expert <br
                                        class="d-lg-block d-none"> team is here to guide you every step of the way. Let’s
                                    turn your vision into reality with <br class="d-lg-block d-none"> personalized service
                                    and a seamless experience.</p>
                                <div class="space32"></div>
                                <div class="btn-area1" data-aos="fade-up" data-aos-duration="1000">
                                    <a href="{{ route('contact.index') }}" class="vl-btn1">Start Your Search Today <span
                                            class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span
                                            class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vl-footer1-section-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-time-area">
                                <img src="{{ asset('assets/img/logo/logo1.png') }}" alt="housa">
                                <div class="space24"></div>
                                <p>We are committed to making your real estate journey seamless and stress-free. Whether
                                    you’re buying, selling, or renting every step the way.</p>
                                <div class="space32"></div>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="space30 d-md-none d-block"></div>
                            <div class="footer-widget-area foot-padding1">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li><a href="{{ route('house.index') }}">Home</a></li>
                                    <li><a href="{{ route('house.about') }}">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="{{ route('house.property') }}">Properties</a></li>
                                    <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg col-md-4">
                            <div class="space30 d-lg-none d-block"></div>
                            <div class="footer-widget-area foot-padding2">
                                <h3>Near Place</h3>
                                <ul>
                                    <li><a href="#">Bonaberie </a></li>
                                    <li><a href="#">Japoma </a></li>
                                    <li><a href="#">PK 24</a></li>
                                    <li><a href="#">Village</a></li>
                                    <li><a href="#">Logbessou</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg col-md-4">
                            <div class="space30 d-lg-none d-block"></div>
                            <div class="footer-widget-area">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li><a href="tel:+11234567890"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M14.05 6C15.0268 6.19057 15.9244 6.66826 16.6281 7.37194C17.3318 8.07561 17.8095 8.97326 18 9.95M14.05 2C16.0793 2.22544 17.9716 3.13417 19.4163 4.57701C20.8609 6.01984 21.7721 7.91101 22 9.94M18.5 21C9.93959 21 3 14.0604 3 5.5C3 5.11378 3.01413 4.73086 3.04189 4.35173C3.07375 3.91662 3.08968 3.69907 3.2037 3.50103C3.29814 3.33701 3.4655 3.18146 3.63598 3.09925C3.84181 3 4.08188 3 4.56201 3H7.37932C7.78308 3 7.98496 3 8.15802 3.06645C8.31089 3.12515 8.44701 3.22049 8.55442 3.3441C8.67601 3.48403 8.745 3.67376 8.88299 4.05321L10.0491 7.26005C10.2096 7.70153 10.2899 7.92227 10.2763 8.1317C10.2643 8.31637 10.2012 8.49408 10.0942 8.64506C9.97286 8.81628 9.77145 8.93713 9.36863 9.17882L8 10C9.2019 12.6489 11.3501 14.7999 14 16L14.8212 14.6314C15.0629 14.2285 15.1837 14.0271 15.3549 13.9058C15.5059 13.7988 15.6836 13.7357 15.8683 13.7237C16.0777 13.7101 16.2985 13.7904 16.74 13.9509L19.9468 15.117C20.3262 15.255 20.516 15.324 20.6559 15.4456C20.7795 15.553 20.8749 15.6891 20.9335 15.842C21 16.015 21 16.2169 21 16.6207V19.438C21 19.9181 21 20.1582 20.9007 20.364C20.8185 20.5345 20.663 20.7019 20.499 20.7963C20.3009 20.9103 20.0834 20.9262 19.6483 20.9581C19.2691 20.9859 18.8862 21 18.5 21Z"
                                                    stroke="#31353D" stroke-width="1.6" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg> +237 682 885 515</a></li>
                                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                                    stroke="#31353D" stroke-width="1.6" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                                    stroke="#31353D" stroke-width="1.6" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg> Douala, Cameroun</a></li>
                                    <li><a href="mailto:Housa@gmailcom"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M4 18L9 12M20 18L15 12M3 8L10.225 12.8166C10.8665 13.2443 11.1872 13.4582 11.5339 13.5412C11.8403 13.6147 12.1597 13.6147 12.4661 13.5412C12.8128 13.4582 13.1335 13.2443 13.775 12.8166L21 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z"
                                                    stroke="#31353D" stroke-width="1.6" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg> kuatenael62@gmailcom</a></li>
                                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_6058_73821)">
                                                    <path
                                                        d="M10 19C15.0741 19 19.1875 14.8866 19.1875 9.8125C19.1875 4.73838 15.0741 0.625 10 0.625C4.92588 0.625 0.8125 4.73838 0.8125 9.8125C0.8125 14.8866 4.92588 19 10 19Z"
                                                        stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.78641 18.7322C6.54344 16.9094 5.71289 13.597 5.71289 9.81335C5.71289 6.02973 6.54344 2.71733 7.78641 0.894531"
                                                        stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M0.8125 9.8125H19.1875" stroke="#1B1B1B" stroke-width="1.2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.22656 14.7109H17.7726" stroke="#1B1B1B" stroke-width="1.2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M2.22656 4.91406H17.7726" stroke="#1B1B1B" stroke-width="1.2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M12.2148 0.894531C13.4578 2.71733 14.2884 6.02973 14.2884 9.81335C14.2884 13.597 13.4578 16.9094 12.2148 18.7322"
                                                        stroke="#1B1B1B" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_6058_73821">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg> KNHousa.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg col-md-4">
                            <div class="space30 d-lg-none d-block"></div>
                            <div class="footer-widget-area">
                                <h3>We Are Here</h3>
                                <div class="space28"></div>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="space24"></div>
                    <div class="col-lg-12">
                        <div class="copyright-area">
                            <p>© 2025 Housa, Inc. All Rights Reserved.</p>
                            <ul>
                                <li><a href="privacy-policy.html">Privacy Policy</a><span> | </span></li>
                                <li><a href="privacy-policy.html">Terms Of Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== FOOTER AREA ENDS =======-->
    @endauth
    <div class="space32"></div>
    @include('partials.toast')
    <!--===== JS SCRIPT LINK =======-->
    <script src="{{ asset('assets/js/plugins/jquery-3-7-1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/textSplite-custom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-slider.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/mobilemenu.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/owlcarousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- mon fichier script -->
    @yield('script')
</body>


<!-- Mirrored from housa-html-demo.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Oct 2025 12:23:12 GMT -->

</html>
