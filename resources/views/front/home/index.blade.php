@extends('layouts.front')
@section('css')
@endsection
@section('home-sidebar')
@include('front.home.home-sidebar')
@endsection
@section('slide')
<section class="hero-area hero-slider-4 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="sb-slick-slider" data-slick-setting='{
                                                                    "autoplay": true,
                                                                    "autoplaySpeed": 8000,
                                                                    "slidesToShow": 1,
                                                                    "dots":true
                                                                    }'>
                    @foreach($slide as $item)
                    <div class="single-slide bg-image bg-overlay--white" data-bg="{{$item->file_path}}">
                        <div class="home-content text-left pl--30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <span class="title-small">{!!$item->title!!}</span>
                                    <h1>{!!$item->name!!}</h1>
                                    <a href="shop-grid.html" class="btn btn-outlined--pink">
                                        {{__('letter.slide')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('content')
<!--=================================
        Home Category Gallery
    ===================================== -->

<section class="mt-4 section-margin">
    <h2 class="sr-only">Category Gallery Section</h2>
    <div class="container">
        <div class="category-gallery-block">
            <a href="#" class="single-block hr-large">
                <img src="{{asset('front/')}}/assets/image/others/cat-gal-large.png" alt="">
            </a>
            <div class="single-block inner-block-wrapper">
                <a href="#" class="single-image mid-image">
                    <img src="{{asset('front/')}}/assets/image/others/cat-gal-mid.png" alt="">
                </a>
                <a href="#" class="single-image small-image">
                    <img src="{{asset('front/')}}/assets/image/others/cat-gal-small.png" alt="">
                </a>
                <a href="#" class="single-image small-image">
                    <img src="{{asset('front/')}}/assets/image/others/cat-gal-small-2.jpg" alt="">
                </a>
                <a href="#" class="single-image mid-image">
                    <img src="{{asset('front/')}}/assets/image/others/cat-gal-mid-2.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!--=================================
        Home Two Column Section
    ===================================== -->
<section class="section-margin">
    <h1 class="sr-only">Promotion Section</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="home-left-side text-center text-lg-left">
                    <div class="single-block">
                        <h3 class="home-sidebar-title">
                            {{__('product.best_seller')}}
                        </h3>
                        <div class="product-slider product-list-slider multiple-row sb-slick-slider home-4-left-sidebar"
                            data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":1,
                                            "rows":4,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2, "rows":2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 2, "rows":2} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                            @foreach($best_product as $data)
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        @foreach($data->get_products->images as $image)
                                        @if($image->is_main == 1)
                                        <img src="{{ $image->file_path }}" alt="">
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                {{$data->get_products->tags}}
                                            </a>
                                            <h3><a
                                                    href="{{route('product-detail',$data->get_products->id)}}">{!!$data->get_products->title!!}</a>
                                            </h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">{{$data->get_products->price}}</span>
                                            <del class="price-old">{{$data->get_products->old_price}} azn</del>
                                            <span class="price-discount">{{$data->get_products->tax}}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="single-block text-center">
                        <h3 class="home-sidebar-title style-2">
                            {{__('product.special')}} {{__('letter.offer')}}
                        </h3>
                        <div class="product-slider countdown-single with-countdown sb-slick-slider product-border-reset"
                            data-slick-setting='{
                                                "autoplay": true,
                                                "autoplaySpeed": 8000,
                                                "slidesToShow": 1,
                                                "dots":true
                                            }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            {!! $offer->tags !!}
                                        </a>
                                        <h3><a href="{{route('product-detail',$offer->id)}}">{!! $offer->title !!}</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            @if($offer->images->isNotEmpty())
                                                @foreach($offer->images as $image)
                                                    <img src="{{ $image->file_path }}" alt="">
                                                @endforeach
                                            @else
                                                <p>No images available for this offer.</p>
                                            @endif
                                            <div class="hover-contents">
                                                <a href="" class="hover-image">

                                                    @if($offer->images->isNotEmpty())
                                                        @foreach($offer->images as $image)
                                                            <img src="{{ $image->file_path }}" alt="">
                                                        @endforeach
                                                    @else
                                                        <p>No images available for this offer.</p>
                                                    @endif

                                                </a>
                                                <div class="hover-btns">
                                                    <form action="{{route('addcart',$offer->id)}}" method="Post">
                                                        @csrf
                                                    <button type="submit" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">{{$offer->price}} azn</span>
                                            <del class="price-old">{{$offer->old_price}} azn</del>
                                            <span class="price-discount">{{$offer->tax}}%</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-block">

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="home-right-side">
                    <div class="single-block">
                        <div class="sb-custom-tab text-lg-left text-center">
                            <div class="tab-content space-db--30" id="myTabContent">
                                <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                                    <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                        data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 3,
                        "rows":2,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                                        @foreach($products as $product)
                                        <form action="{{route('addcart',$product->id)}}" method="Post">
                                            @csrf
                                            <div class="single-slide">
                                                <div class="product-card">
                                                    <div class="product-header">
                                                        <a href="" class="author">
                                                            {{$product->tags}}
                                                        </a>
                                                        <h3><a
                                                                href="{{route('product-detail',$product->id)}}">{!!$product->title!!}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="card-image">
                                                            @foreach($product->images as $image)
                                                            @if($image->is_main == 1)
                                                            <img src="{{ $image->file_path }}" alt="">
                                                            @endif
                                                            @endforeach

                                                            <div class="hover-contents">
                                                                <a href="" class="hover-image">
                                                                    <img src="" alt="">
                                                                </a>
                                                                <div class="hover-btns">
                                                                    <button type="submit" class="single-btn">
                                                                        <i class="fas fa-shopping-basket"></i>
                                                                    </button>
                                                                    <a href="#" data-toggle="modal"
                                                                       data-target="#quickModal{{$product->id}}" class="single-btn">
                                                                        <i class="fas fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-block">
                                                            <span class="price">{{$product->price}}-azn</span>
                                                            <del class="price-old">{{$product->old_price}}-azn</del>
                                                            <span class="price-discount">{{$product->tax}}%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-block">
                        <div class="home-right-block bg-white">
                            <div class="sb-custom-tab text-lg-left text-center">
                                <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                                    @foreach($category as $key=>$item)
                                    <li class="nav-item {{$key===0 ? 'active':''}}">
                                        <a class="nav-link " id="shop-tab{{$key}}" data-toggle="tab"
                                            href="#{{$item->name}}" role="tab" aria-controls="shop2"
                                            aria-selected="true">
                                            {{$item->name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach($category as $key => $item)
                                    <div class="tab-pane fade{{$key === 0 ? ' show active' : ''}}" id="{{$item->name}}"
                                        role="tabpanel" aria-labelledby="shop-tab{{$key}}">
                                        <div class="product-slider product-list-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                            data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 2,
                                                        "rows":4,
                                                        "dots":true
                                                    }' data-slick-responsive='[
                                                        {"breakpoint":992, "settings": {"slidesToShow": 2,"rows": 3} },

                                                        {"breakpoint":768, "settings": {"slidesToShow": 1} }
                                                    ]'>
                                            @foreach($item->products as $product)
                                            <div class="single-slide">
                                                <div class="product-card card-style-list">
                                                    <div class="card-image">

                                                    </div>
                                                    <div class="product-card--body">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                {!!$product->brand!!}
                                                            </a>
                                                            <h3><a href="">5 Ways To Get
                                                                    Through To Your BOOK</a></h3>
                                                        </div>
                                                        <div class="price-block">
                                                            <span class="price">£51.20</span>
                                                            <del class="price-old">£51.20</del>
                                                            <span class="price-discount">20%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
@foreach($products as $product)
<div class="modal fade modal-quick-view" id="quickModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="quickModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="product-details-modal">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- Product Details Slider Big Image-->
                        <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                            @foreach($product->images as $image)
                                <div class="single-slide">
                                    <img
                                        src="{{$image->file_path}}"
                                        alt=""
                                    />
                                </div>
                            @endforeach

                        </div>
                        <!-- Product Details Slider Nav -->
                        <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                            @foreach($product->images as $image)
                                <div class="single-slide">
                                    <img
                                        src="{{$image->file_path}}"
                                        alt=""
                                    />
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-7 mt--30 mt-lg--30">
                        <div class="product-details-info pl-lg--30 ">
                            <p class="tag-block">{{__('letter.tags')}}: <a href="#">{{$product->tags}}</a></p>
                            <h3 class="product-title">{!! $product->title !!}</h3>
                            <ul class="list-unstyled">
                                <li>{{__('letter.tax')}}: <span class="list-value"> {{($product->price)+($product->tax)}}</span></li>
                                <li>{{__('letter.brand')}}: <a href="#" class="list-value font-weight-bold"> {{$product->brand}}</a></li>
                                <li>{{__('letter.point')}}: <span class="list-value"> 200</span></li>
                                <li>{{__('letter.stock')}}: <span class="list-value">
                                        @if($product->quantity!==0)
                                            {{__('letter.yes')}}
                                        @else($product->quantity==0)
                                            {{__('letter.not')}}
                                        @endif</span></li>
                            </ul>
                            <div class="price-block">
                                <span class="price-new">{{$product->price}} azn</span>
                                <del class="price-old">{{$product->old_price}} azn</del>
                            </div>

                            <article class="product-details-article">
                                <h4 class="sr-only">Product Summery</h4>
                                <p>{!! $product->about !!}</p>
                            </article>
                            <div class="add-to-cart-row">

                                <div class="add-cart-btn">
                                    <form action="{{route('addcart',$product->id)}}" method="Post">
                                        @csrf
                                        <button type="submit" class="btn btn-outlined--primary"
                                        ><span class="plus-icon">+</span>{{__('cart.add_cart')}}</button
                                        >
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="widget-social-share">
                    <span class="widget-label">{{__('letter.share')}}:</span>
                    <div class="modal-social-share">
                        @foreach($social as $data)
                        <a href="{{$data->url}}" class="single-icon"><i class="fab fa-{{$data->name}}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach


@endsection
@section('js')
@endsection


