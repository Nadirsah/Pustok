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
                    <h1>{{__('cart.shopping_cart')}}</h1>
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
                                        <th class="pro-thumbnail">{{__('letter.image')}}</th>
                                        <th class="pro-title">{{__('letter.product')}}</th>
                                        <th class="pro-price">{{__('product.price')}}</th>
                                        <th class="pro-quantity">{{__('product.quantity')}}</th>
                                        <th class="pro-subtotal">{{__('cart.total')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Product Row -->
                                    @foreach($data as $item)
                                    <tr>
                                        <td class="pro-remove"><a  class="deleteCard" data-id="{{ $item->id }}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                        <td class="pro-thumbnail"><a href="#">
                                                @foreach($item->get_products->images as $image)
                                                    @if($image->is_main == 1)
                                                        <img src="{{ $image->file_path }}" alt="">
                                                    @endif
                                                @endforeach
                                                    </a></td>
                                        <td class="pro-title"><a href="{{route('product-detail',$item->get_products->id)}}">{!!$item->get_products->title!!}</a></td>
                                        <td class="pro-price"><span>{{$item->get_products->price}} azn</span></td>
                                        <td class="pro-price"><span>{{$item->quantity}}</span></td>
                                        <td class="pro-subtotal"><span id="total">{{($item->get_products->price)*($item->quantity)}} azn</span></td>
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
                            <h2>{{__('product.special')}} {{__('letter.offer')}}</h2>
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
												{!! $offer->tags !!}
											</span>
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
                                                <a href="product-details.html" class="hover-image">
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
                    <!-- Cart Summary -->
                    <div class="col-lg-6 col-12 d-flex">
                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4><span>{{__('cart.cart_summary')}}</span></h4>
                                <p>{{__('cart.sub')}} {{__('cart.total')}} <span class="text-primary" id="totalcart"></span></p>
                                <h2>{{__('cart.grand')}} {{__('cart.total')}} <span class="text-primary">{{$totalPrice}} azn</span></h2>
                            </div>
                            <div class="cart-summary-button">
                                @if($totalPrice!==0)
                                <a href="{{route('checkout')}}" class="checkout-btn c-btn btn--primary">{{__('cart.checkout')}}</a>
                                @else

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            var totalValue = $("#total").text();
            $("#totalcart").text(totalValue);
        });
    </script>
    <script type="text/javascript">
$(".deleteCard").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");

    var confirmDelete = confirm("Are you sure you want to delete this record?");
    if (!confirmDelete) {
        return false;
    }

    $.ajax(
            {
                url: "{{ url('delete_card') }}/" + id,
                type: 'post',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function () {
                    $(`.deleteCard[data-id="${id}"]`).closest('tr').remove();
                }
            });
});
</script>

@endsection



