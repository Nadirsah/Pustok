<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.front.head')
</head>
<body>
<div class="site-wrapper" id="top">
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
                                        class="fa fa-bars"></i>{{__('category.browse_category')}}</a>
                                <ul class="category-menu">
                                    @foreach($categories->where('parent_id', 0) as $category)

                                        <li class="cat-item has-children">
                                            <a href="#">{{$category->name}}</a>
                                            @if($category->children->isNotEmpty())
                                                <ul class="sub-menu">
                                                    @foreach($category->children as $child)
                                                        <li><a href="#">{{$child->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach

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

                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu main-mobile-menu">
                            <li class="menu-item-has-children">
                                <a href="{{route('home')}}">{{__("menu.home")}} </a>

                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{route('shop')}}">{{__('menu.shop')}}</a>
                            </li>

                            <a href="{{route('contact')}}">{{__('menu.contact')}}</a>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <nav class="off-canvas-nav">
                    <ul class="mobile-menu menu-block-2">
                        <li class="menu-item-has-children">
                            <a href="#">{{ app()->getLocale() }}<i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                @foreach (LaravelLocalization::getSupportedLocales() as $lang=>$properties)
                                    <li><a class="alang"
                                           href="{{LaravelLocalization::getLocalizedURL($lang)}}">{{$lang}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">{{__('account.account')}} <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="">{{__('account.account')}}</a></li>
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
                        @foreach($social as $data)
                            <a href="{{$data->url}}" class="single-icon"><i
                                    class="fa-brands fa-{{$data->name}}"></i></a>
                        @endforeach
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
                                <a href="{{route('home')}}">{{__("menu.home")}} </a>

                            </li>
                            <!-- Shop -->
                            <li class="menu-item has-children mega-menu">
                                <a href="{{route('shop')}}">{{__('menu.shop')}}</a>

                            </li>


                            <li class="menu-item">
                                <a href="{{route('contact')}}">{{__('menu.contact')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.front.activ-menu')

    <!-- faq Page Start -->
    <div class="faq-area inner-page-sec-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <h1>GENERAL QUESTION</h1>
                    </div>
                </div>
            </div>
            <div class="row mbn-30">

                <div class="col-lg-6 col-12">
                    @foreach($data as $datas)
                    <div class="accordion" id="gq-faqs-1">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><button class="collapsed" data-toggle="collapse" data-target="#gq-faq-1">
                                        {{$datas->title}}</button></h5>
                            </div>
                            <div id="gq-faq-1" class="collapse show" data-parent="#gq-faqs-1">
                                <div class="card-body">
                                    <p>{!! $datas->description !!}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- faq Page End -->
</div>

@include("layouts.front.brand")
<!--=================================
    Footer Area
===================================== -->
@include("layouts.front.footer")
<!-- Use Minified Plugins Version For Fast Page Load -->
@include("layouts.front.script")
</body>

</html>
