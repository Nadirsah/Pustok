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
        <div class="shop-toolbar mb--30">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-6">
                    <!-- Product View Mode -->
                    <div class="product-view-mode">
                        <a href="#" class="sorting-btn active" data-target="grid-four">
                            <span class="grid-four-icon active">
                                <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                            </span>
                        </a>

                    </div>
                </div>



            </div>
        </div>
        <div class="shop-toolbar d-none">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-6">
                    <!-- Product View Mode -->
                    <div class="product-view-mode">
                        <a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
                        <a href="#" class="sorting-btn" data-target="grid-four">
                            <span class="grid-four-icon active">
                                <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                            </span>
                        </a>
                        <a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                    <div class="sorting-selection">
                        <span>Sort By:</span>
                        <select class="form-control nice-select sort-select mr-0">
                            <option value="" selected="selected">Default Sorting</option>
                            <option value="">Sort
                                By:Name (A - Z)</option>
                            <option value="">Sort
                                By:Name (Z - A)</option>
                            <option value="">Sort
                                By:Price (Low &gt; High)</option>
                            <option value="">Sort
                                By:Price (High &gt; Low)</option>
                            <option value="">Sort
                                By:Rating (Highest)</option>
                            <option value="">Sort
                                By:Rating (Lowest)</option>
                            <option value="">Sort
                                By:Model (A - Z)</option>
                            <option value="">Sort
                                By:Model (Z - A)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-product-wrap with-pagination row space-db--30 shop-border grid-four">
            @foreach($data as $items)
            <div class="col-lg-4 col-sm-6">
                <div class="product-card">
                    <div class="product-grid-content">
                        <div class="product-header">
                            <a href="" class="author">
                                {{$items->tags}}
                            </a>
                            <h3><a href="{{route('product-detail',$items->id)}}">{!!$items->title!!}</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                @foreach($items->images as $image)
                                @if($image->is_main == 1)
                                <img src="{{ $image->file_path }}" alt="">
                                @endif
                                @endforeach
                                <div class="hover-contents">
                                    <a href="#" class="hover-image">

                                    </a>
                                    <div class="hover-btns">
                                        <form action="{{route('addcart',$items->id)}}" method="Post">
                                            @csrf
                                            <button type="submit" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </button>
                                        </form>
                                        <a href="#" data-toggle="modal" data-target="#quickModal{{$items->id}}"
                                            class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">{{$items->price}}-azn</span>
                                <del class="price-old">{{$items->old_price}}-azn</del>
                                <span class="price-discount">{{$items->tax}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>




        <!-- Modal -->
        @foreach($data as $product)
        <div class="modal fade modal-quick-view" id="quickModal{{$product->id}}" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
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
                                        <img src="{{$image->file_path}}" alt="" />
                                    </div>
                                    @endforeach

                                </div>
                                <!-- Product Details Slider Nav -->
                                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
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
              }'>
                                    @foreach($product->images as $image)
                                    <div class="single-slide">
                                        <img src="{{$image->file_path}}" alt="" />
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-lg-7 mt--30 mt-lg--30">
                                <div class="product-details-info pl-lg--30 ">
                                    <p class="tag-block">{{__('letter.tags')}}: <a href="#">{{$product->tags}}</a></p>
                                    <h3 class="product-title">{!! $product->title !!}</h3>
                                    <ul class="list-unstyled">
                                        <li>{{__('letter.tax')}}: <span class="list-value">
                                                {{($product->price)+($product->tax)}}</span></li>
                                        <li>{{__('letter.brand')}}: <a href="#" class="list-value font-weight-bold">
                                                {{$product->brand}}</a></li>
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
                                                <button type="submit" class="btn btn-outlined--primary"><span
                                                        class="plus-icon">+</span>{{__('cart.add_cart')}}</button>
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
    </div>
</main>
@endsection
@section('js')
@endsection