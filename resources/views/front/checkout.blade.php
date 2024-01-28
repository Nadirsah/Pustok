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
                                    <h4 class="checkout-title">{{__('cart.billing')}} {{__('contakt.address')}}</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{__('letter.name')}}*</label>
                                            <input type="text" name="name" placeholder="{{__('letter.name')}}">
                                            <span class="text-danger">@error('name'){{ __('required.error') }}@enderror</span>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{__('letter.last')}}*</label>
                                            <input type="text" name="surname" placeholder="{{__('letter.last')}}">
                                            <span class="text-danger">@error('surname'){{ __('required.error') }}@enderror</span>
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>{{__('account.company')}}*</label>
                                            <input type="text" name="company" placeholder="{{__('account.company')}}">
                                            <span class="text-danger">@error('company'){{ __('required.error') }}@enderror</span>
                                        </div>
                                        <div class="col-12 col-12 mb--20">
                                            <label>{{__('account.country')}}*</label>
                                            <input type="text" name="country" placeholder="{{__('account.country')}}">
                                            <span class="text-danger">@error('country'){{ __('required.error') }}@enderror</span>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{__('contakt.email')}}*</label>
                                            <input type="email" name="email" placeholder="{{__('contakt.email')}}">
                                            <span class="text-danger">@error('email'){{ __('required.error') }}@enderror</span>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{__('contakt.phone')}}*</label>
                                            <input type="text" name="phone" placeholder="{{__('contakt.phone')}}">
                                            <span class="text-danger">@error('phone'){{ __('required.error') }}@enderror</span>
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>{{__('contakt.address')}}*</label>
                                            <input type="text" name="adress" placeholder="{{__('contakt.address')}}">
                                            <span class="text-danger">@error('adress'){{ __('required.error') }}@enderror</span>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{__('account.city')}}*</label>
                                            <input type="text" name="city" placeholder="{{__('account.city')}}">
                                            <span class="text-danger">@error('city'){{ __('required.error') }}@enderror</span>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>{{__('account.zip_code')}}*</label>
                                            <input type="text" name="zip_cod" placeholder="{{__('account.zip_code')}}">
                                            <span class="text-danger">@error('zip_cod'){{ __('required.error') }}@enderror</span>
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
                                            <h4>{{__('cart.grand')}} {{__('cart.total')}} <span>{{$totalPrice}} azn</span></h4>
                                            <div class="term-block">
                                                <input type="checkbox" name="status" value="1" id="accept_terms2">
                                                <label for="accept_terms2">{{__('checkout.rule')}}</label>
                                                <span class="text-danger">@error('status'){{ __('required.error') }}@enderror</span>
                                            </div>
                                            <button type="submit" class="place-order w-100">{{__('letter.order')}}</button>
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

