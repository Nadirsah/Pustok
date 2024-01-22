@extends('layouts.front')
@section('css')
@endsection
@section('sidebar')
    @include('layouts.front.sidebar')
@endsection
@section('content')
    @include('layouts.front.activ-menu')
    <main class="inner-page-sec-padding-bottom">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-5 mb--30">
                    <!-- Product Details Slider Big Image-->
                    <div
                        class="product-details-slider sb-slick-slider arrow-type-two"
                        data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'
                    >
                        @foreach($data->images as $image)
                        <div class="single-slide">
                            <img
                                src="{{$image->file_path}}"
                                alt=""
                            />
                        </div>
@endforeach
                    </div>
                    <!-- Product Details Slider Nav -->
                    <div
                        class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                        data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'
                    >
                        @foreach($data->images as $image)
                        <div class="single-slide">
                            <img
                                src="{{$image->file_path}}"
                                alt=""
                            />
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-details-info pl-lg--30">
                        <p class="tag-block">
                            Tags: <a href="#">{{$data->tags}}</a>
                        </p>
                        <h3 class="product-title">
                        {!!$data->title!!}
                        </h3>
                        <ul class="list-unstyled">
                            <li>Ex Tax: <span class="list-value"> {{($data->price)+($data->tax)}}</span></li>
                            <li>
                                Brands:
                                <a href="#" class="list-value font-weight-bold"> {{$data->brand}}</a>
                            </li>
                            <li>Reward Points: <span class="list-value"> 200</span></li>
                            <li>
                                Availability: <span class="list-value"> In Stock</span>
                            </li>
                        </ul>
                        <div class="price-block">
                            <span class="price-new">{{$data->price}} azn</span>
                            <del class="price-old">{{$data->old_price}} azn</del>
                        </div>
                        <article class="product-details-article">
                            <h4 class="sr-only">Product Summery</h4>
                            <p>

                            </p>
                        </article>
                        <div class="add-to-cart-row">
                            <div class="add-cart-btn">
                                <form action="{{route('addcart',$data->id)}}" method="Post">
                                    @csrf
                                <button type="submit" class="btn btn-outlined--primary"
                                ><span class="plus-icon">+</span>Add to Cart</button
                                >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sb-custom-tab review-tab section-padding">
                <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            id="tab1"
                            data-toggle="tab"
                            href="#tab-1"
                            role="tab"
                            aria-controls="tab-1"
                            aria-selected="true"
                        >
                           {{$trans3->description}}
                        </a>
                    </li>

                </ul>
                <div class="tab-content space-db--20" id="myTabContent">
                    <div
                        class="tab-pane fade show active"
                        id="tab-1"
                        role="tabpanel"
                        aria-labelledby="tab1"
                    >
                        <article class="review-article">
                            <h1 class="sr-only">Tab Article</h1>
                            <p>
                            {!!$data->about!!}
                            </p>
                        </article>
                    </div>

                </div>
            </div>

        </div>
        <!--=================================
RELATED PRODUCTS BOOKS
===================================== -->

        <!-- Modal -->

    </main>
@endsection
@section('js')
@endsection

