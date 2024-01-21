@extends('layouts.front')
@section('css')
@endsection
@section('sidebar')
    @include('layouts.front.sidebar')
@endsection
@section('content')
    @include('layouts.front.activ-menu')
    <main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Form s-->
                    <form action="{{route('card.checkout')}}" method="post" class="checkout-form">
                        @csrf
                        <div class="row row-40">

                            <div class="col-lg-7 mb--20">
                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">{{$trans2->billing}} {{$trans->address}}</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{$trans1->name}}*</label>
                                            <input type="text" name="name" placeholder="{{$trans1->name}}">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{$trans2->last}}*</label>
                                            <input type="text" name="surname" placeholder="{{$trans2->last}}">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>{{$trans2->company}}*</label>
                                            <input type="text" name="company" placeholder="{{$trans2->company}}">
                                        </div>
                                        <div class="col-12 col-12 mb--20">
                                            <label>{{$trans2->country}}*</label>
                                            <input type="text" name="country" placeholder="{{$trans2->country}}">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{$trans->email}}*</label>
                                            <input type="email" name="email" placeholder="{{$trans->email}}">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{$trans->phone}}*</label>
                                            <input type="text" name="phone" placeholder="{{$trans->phone}}">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>{{$trans->address}}*</label>
                                            <input type="text" name="adress" placeholder="{{$trans->address}}">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{$trans3->city}}*</label>
                                            <input type="text" name="city" placeholder="{{$trans3->city}}">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{$trans3->zip_code}}*</label>
                                            <input type="text" name="zip_cod" placeholder="{{$trans3->zip_code}}">
                                        </div>

                                        <div class="col-12 mb--20 ">

                                        </div>
                                    </div>
                                </div>
                                <!-- Shipping Address -->

                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <!-- Cart Total -->
                                    <div class="col-12">
                                        <div class="checkout-cart-total">
                                            <h4>{{$trans2->grand}} {{$trans3->total}} <span>$104.00</span></h4>
                                            <div class="term-block">
                                                <input type="checkbox" name="status" value="1" id="accept_terms2">
                                                <label for="accept_terms2">I’ve read and accept the terms &
                                                    conditions</label>
                                            </div>
                                            <button type="submit" class="place-order w-100">{{$trans3->order}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
@endsection

