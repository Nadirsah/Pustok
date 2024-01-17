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
                                @auth
                                    <a href="{{route('showcart',Auth::user()->id)}}">
                                <span class="text-number">
                                   {{$cart}}
                                </span>
                                <span class="text-item">
                                {{$transhome->shopping_cart}}
                                </span>
                                <span class="price">
                                    {{$cartsum}} azn
                                </span>
                                    </a>
                                @endauth
                                    @guest
                                        <span class="text-number">
                                   0
                                </span>
                                        <span class="text-item">
                                {{$transhome->shopping_cart}}
                                </span>
                                        <span class="price">
                                    0.00 azn
                                </span>
                                    @endguest
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
