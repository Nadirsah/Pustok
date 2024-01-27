@extends('layouts.front')
@section('css')
@endsection
@section('sidebar')
    @include('layouts.front.sidebar')
@endsection
@section('content')
    @include('layouts.front.activ-menu')
    {{ $whishlist }}
    <div class="cart_area inner-page-sec-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="./">
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">{{$trans2->image}}</th>
                                    <th class="pro-title">{{$trans2->product}}</th>
                                    <th class="pro-price">{{$trans2->price}}</th>
                                    <th class="pro-quantity">{{$trans2->quantity}}</th>
                                    <th class="pro-subtotal">{{$trans2->total}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                @foreach($whishlist as $product)
                                    <td class="pro-thumbnail"><a href="#"><img
                                                src="{{asset('front')}}/assets/image/products/product-1.jpg" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">{{ $product->title }}</a></td>
                                    <td class="pro-price"><span>$395.00</span></td>
                                    <td class="pro-price"><span>123</span></td>
                                    <td class="pro-subtotal"><span>$395.00</span></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection

