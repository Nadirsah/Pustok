<div class="header-middle pt--10 pb--10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <a href="{{route('home')}}" class="site-brand">
                    <img src="{{$setting->file_path}}" alt="">
                </a>
            </div>
            <div class="col-lg-5">
                <div class="header-search-block">
                    <input type="text" placeholder="{{__('search_input.placeholder')}}">
                    <button>{{__('search_input.search_button')}}</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="main-navigation flex-lg-right">
                    <div class="cart-widget">
                        <div class="login-block">
                            @guest
                            <a href="{{ route('log-res') }}" class="font-weight-bold">{{__('reqistr.login')}}</a> <br>
                            <span>{{__('letter.or')}}</span> <a
                                href="{{ route('log-res') }}">{{__('reqistr.register')}}</a>
                            @else
                            <p><a href="{{route('my-account',Auth::user()->id)}}"><i class="icon-switch2"></i>
                                    {{ Auth::user()->name }}</a></p>
                            @endguest
                        </div>
                        <div class="cart-block">
                            <div class="cart-total">
                                @auth
                                <a href="{{route('showcart',Auth::user()->id)}}"><i class="icon-switch2"></i>
                                    <span class="text-number">
                                        {{$cart}}
                                    </span>
                                    <span class="text-item">
                                        {{__('cart.shopping_cart')}}
                                    </span>
                                    <span class="price">
                                        {{$totalPrice}} azn
                                    </span>
                                </a>
                                @endauth
                                @guest
                                <span class="text-number">
                                    0
                                </span>
                                <span class="text-item">
                                    {{__('cart.shopping_cart')}}
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