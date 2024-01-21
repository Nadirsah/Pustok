<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  @include('layouts.front.head')
</head>

<body>
<div class="site-wrapper" id="top">
    <div class="site-header header-4 mb--20 d-none d-lg-block">

        @include("layouts.front.header")

        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center">

                   @yield('home-sidebar')
                    @yield('sidebar')
                    <div class="col-lg-3">
                        <div class="header-phone ">
                            <div class="icon">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="text">
                                <p> {{$trans->free_support}} 24/7</p>
                                <p class="font-weight-bold number">+01-202-555-0181</p>
                            </div>
                        </div>
                    </div>
<div class="col-lg-1">
    @include("layouts.front.lang")
</div>

                    @include('layouts.front.menu')

                </div>
            </div>
        </div>
    </div>
    <div class="site-mobile-menu">
        <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
            <div class="container">
                <div class="row align-items-sm-end align-items-center">
                    <div class="col-md-4 col-7">
                        <a href="index.html" class="site-brand">
                            <img src="assets/image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-5 order-3 order-md-2">
                        <nav class="category-nav   ">
                            <div>
                                <a href="javascript:void(0)" class="category-trigger"><i
                                        class="fa fa-bars"></i>Browse
                                    categories</a>
                                <ul class="category-menu">
                                    <li class="cat-item has-children">
                                        <a href="#">Arts & Photography</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Binoculars & Scopes</a></li>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Film Photography</a></li>
                                            <li><a href="#">Lighting & Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                        <ul class="sub-menu">
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Business & Money</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Calendars</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Children's Books</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Comics</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                    <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item "><a href="#">Accessories</a></li>
                                    <li class="cat-item "><a href="#">Education</a></li>
                                    <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                    <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                            Categories</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3 col-5  order-md-3 text-right">
                        <div class="mobile-header-btns header-top-widget">
                            <ul class="header-links">
                                <li class="sin-link">
                                    <a href="cart.html" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                </li>
                                <li class="sin-link">
                                    <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                            class="ion-navicon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Off Canvas Navigation Start-->
        <aside class="off-canvas-wrapper">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>
            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu main-mobile-menu">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>

                            </li>

                            <li class="menu-item-has-children">
                                <a href="./shop-list.html">Shop</a>
                            </li>

                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <nav class="off-canvas-nav">
                    <ul class="mobile-menu menu-block-2">
                        <li class="menu-item-has-children">
                            <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="cart.html">USD $</a></li>
                                <li> <a href="checkout.html">EUR €</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>Eng</li>
                                <li>Ban</li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="">My Account</a></li>
                                <li><a href="">Order History</a></li>
                                <li><a href="">Transactions</a></li>
                                <li><a href="">Downloads</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="off-canvas-bottom">
                    <div class="contact-list mb--10">
                        <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                        <a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                    </div>
                    <div class="off-canvas-social">
                        <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!--Off Canvas Navigation End-->
    </div>
    <div class="sticky-init fixed-header common-sticky">
        <div class="container d-none d-lg-block">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <a href="index.html" class="site-brand">
                        <img src="assets/image/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right ">
                            <li class="menu-item has-children">
                                <a href="index.html">Home </a>

                            </li>
                            <!-- Shop -->
                            <li class="menu-item has-children mega-menu">
                                <a href="./shop-list.html">shop </a>

                            </li>


                            <li class="menu-item">
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
        Hero Area
    ===================================== -->
    @yield('slide')
    <!--=================================
        Home Features Section
    ===================================== -->

   @yield('content')
    <!--Footer===================================== -->
</div>
<!--=================================
  Brands Slider
===================================== -->
@include("layouts.front.brand")
<!--=================================
    Footer Area
===================================== -->
@include("layouts.front.footer")
<!-- Use Minified Plugins Version For Fast Page Load -->
@include("layouts.front.script")
</body>

</html>
