@extends('layouts.front')
@section('css')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endsection
@section('sidebar')
    @include('layouts.front.sidebar')
@endsection
@section('content')
    @include('layouts.front.activ-menu')
    <main class="cart-page-main-block inner-page-sec-padding-bottom">
        <div class="cart_area cart-area-padding  ">
            <div class="container">
                <div class="page-section-title">
                    <h1>{{$trans->shopping_cart}}</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="#" class="">
                            <!-- Cart Table -->
                            <div class="cart-table table-responsive mb--40">
                                <table class="table">
                                    <!-- Head Row -->
                                    <thead>
                                    <tr>
                                        <th class="pro-remove"></th>
                                        <th class="pro-thumbnail">{{$trans2->image}}</th>
                                        <th class="pro-title">{{$trans2->product}}</th>
                                        <th class="pro-price">{{$trans2->price}}</th>
                                        <th class="pro-quantity">{{$trans2->quantity}}</th>
                                        <th class="pro-subtotal">{{$trans2->total}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Product Row -->
                                    @foreach($data as $item)
                                    <tr>
                                        <td class="pro-remove"><a class="deleteCard" data-id="{{ $item->id }}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                        <td class="pro-thumbnail"><a href="#">
                                                @foreach($item->get_products->images as $image)
                                                    @if($image->is_main == 1)
                                                        <img src="{{ $image->file_path }}" alt="">
                                                    @endif
                                                @endforeach
                                                    </a></td>
                                        <td class="pro-title"><a href="#">{!!$item->get_products->title!!}</a></td>
                                        <td class="pro-price"><span>{{$item->get_products->price}} azn</span></td>
                                        <td class="pro-price"><span>{{$item->quantity}}</span></td>
                                        <td class="pro-subtotal"><span>{{($item->get_products->price)*($item->quantity)}} azn</span></td>
                                    </tr>
                                    @endforeach
                                    <!-- Product Row -->


                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb--30 mb-lg--0">
                        <!-- slide Block 5 / Normal Slider -->
                        <div class="cart-block-title">
                            <h2>YOU MAY BE INTERESTED IN…</h2>
                        </div>
                        <div class="product-slider sb-slick-slider" data-slick-setting='{
							          "autoplay": true,
							          "autoplaySpeed": 8000,
							          "slidesToShow": 2
									  }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
											<span class="author">
												Lpple
											</span>
                                        <h3><a href="product-details.html">Revolutionize Your BOOK With These
                                                Easy-peasy Tips</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="{{asset('front')}}/assets/image/products/product-10.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="product-details.html" class="hover-image">
                                                    <img src="{{asset('front')}}/assets/image/products/product-1.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="cart.html" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="wishlist.html" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="compare.html" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Cart Summary -->
                    <div class="col-lg-6 col-12 d-flex">
                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4><span>{{$trans2->cart_summary}}</span></h4>
                                <p>{{$trans2->sub}} {{$trans2->total}} <span class="text-primary">$1250.00</span></p>
                                <h2>{{$trans2->grand}} {{$trans2->total}} <span class="text-primary">{{$totalPrice}} azn</span></h2>
                            </div>
                            <div class="cart-summary-button">
                                <a href="{{route('checkout')}}" class="checkout-btn c-btn btn--primary">{{$trans2->checkout}}</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">
$(".deleteCard").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax(
            {
                url: "{{ url('delete_card') }}/" + id,
                type: 'post',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function () {
                    $(`.deleteRecord[data-id="${id}"]`).closest('tr').remove();
                }
            });
});
</script>
@endsection



