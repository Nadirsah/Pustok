<div class="header-middle pt--10 pb--10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <a href="index.html" class="site-brand">
                    <img src="{{asset('front')}}/assets/image/logo.png" alt="">
                </a>
            </div>
            <div class="col-lg-5">
                <div class="header-search-block">
                    <input type="text" placeholder="{{$transhome->placeholder}}">
                    <button>{{$transhome->search_button}}</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="main-navigation flex-lg-right">
                    <div class="cart-widget">
                        <div class="login-block">
                            @guest
                            <a href="{{ route('log-res') }}" class="font-weight-bold">{{$transhome->login}}</a> <br>
                            <span>{{$transhome->or}}</span> <a href="{{ route('log-res') }}">{{$transhome->register}}</a>
                            @else
                            <p>{{ Auth::user()->name }}</p>
                            <a href="{{route('logout')}}"><i class="icon-switch2"></i> Cixis</a>
                            @endguest
                        </div>
                        <div class="cart-block">
                            <div class="cart-total">
                                <span class="text-number">
                                    1
                                </span>
                                <span class="text-item">
                                {{$transhome->shopping_cart}}
                                </span>
                                <span class="price">
                                    £0.00
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                            <div class="cart-dropdown-block">
                                <div class=" single-cart-block ">
                                    <div class="cart-product">
                                        <a href="product-details.html" class="image">
                                            <img src="{{asset('front')}}/assets/image/products/cart-product-1.jpg"
                                                alt="">
                                        </a>
                                        <div class="content">
                                            <h3 class="title"><a href="product-details.html">Kodak PIXPRO
                                                    Astro Zoom AZ421 16 MP</a>
                                            </h3>
                                            <p class="price"><span class="qty">1 ×</span> £87.34</p>
                                            <button class="cross-btn"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" single-cart-block ">
                                    <div class="btn-block">
                                        <a href="{{route('cart')}}" class="btn">{{$transhome->view_cart}}<i
                                                class="fas fa-chevron-right"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>