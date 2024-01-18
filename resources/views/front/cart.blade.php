@extends('layouts.front')
@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@section('sidebar')
    @include('layouts.front.sidebar')
@endsection
@section('content')
    @include('layouts.front.activ-menu')
    <main class="cart-page-main-block inner-page-sec-padding-bottom">
        <div class="cart_area cart-area-padding  ">
            <div class="container">
                <div class="page-section-title">
                    <h1>Shopping Cart</h1>
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
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                  <!-- <th class="pro-quantity">Quantity</th> -->
                                        <th class="pro-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Product Row -->
                                    @foreach($data as $item)
                                    <tr>
                                        <td class="pro-remove"><a class="deleteCard" data-id="{{ $item->id }}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                        <td class="pro-thumbnail"><a href="#">

                                                        <img src="{{ $item->image_path }}" alt="">
                                                    </a></td>
                                        <td class="pro-title"><a href="#">{!!$item->title!!}</a></td>
                                        <td class="pro-price"><span>{{$item->price}} azn</span></td>
                                       <!-- <td class="pro-quantity">
<div class="pro-qty">
                                                <div class="count-input-block">
                                                    <input type="number" class="form-control text-center"
                                                          value="1">
                                                </div>
                                            </div>
                                        </td> -->
                                        <td class="pro-subtotal"><span>{{$item->price}} azn</span></td>
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
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
											<span class="author">
												Jpple
											</span>
                                        <h3><a href="product-details.html">Turn Your BOOK Into High Machine</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="{{asset('front')}}/assets/image/products/product-2.jpg" alt="">
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
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
											<span class="author">
												Wpple
											</span>
                                        <h3><a href="product-details.html">3 Ways Create Better BOOK With</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="{{asset('front')}}/assets/image/products/product-3.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="product-details.html" class="hover-image">
                                                    <img src="{{asset('front')}}/assets/image/products/product-2.jpg" alt="">
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
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
											<span class="author">
												Epple
											</span>
                                        <h3><a href="product-details.html">What You Can Learn From Bill Gates</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="{{asset('front')}}/assets/image/products/product-5.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="product-details.html" class="hover-image">
                                                    <img src="{{asset('front')}}/assets/image/products/product-4.jpg" alt="">
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
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
											<span class="author">
												Hpple
											</span>
                                        <h3><a href="product-details.html">Simple Things You To Save BOOK</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="{{asset('front')}}/assets/image/products/product-6.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="product-details.html" class="hover-image">
                                                    <img src="{{asset('front')}}/assets/image/products/product-4.jpg" alt="">
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
                                <h4><span>Cart Summary</span></h4>
                                <p>Sub Total <span class="text-primary">$1250.00</span></p>
                                <p>Shipping Cost <span class="text-primary">$00.00</span></p>
                                <h2>Grand Total <span class="text-primary">$1250.00</span></h2>
                            </div>
                            <div class="cart-summary-button">
                                <a href="{{route('checkout')}}" class="checkout-btn c-btn btn--primary">Checkout</a>
                                <button class="update-btn c-btn btn-outlined">Update Cart</button>
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
                url: "delete_card/" + id,
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



