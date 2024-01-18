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
                                    <h4 class="checkout-title">Billing Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>First Name*</label>
                                            <input type="text" name="name" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Last Name*</label>
                                            <input type="text" name="surname" placeholder="Last Name">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Company Name</label>
                                            <input type="text" name="company" placeholder="Company Name">
                                        </div>
                                        <div class="col-12 col-12 mb--20">
                                            <label>Country*</label>
                                            <input type="text" name="country" placeholder="Country">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Email Address*</label>
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Phone no*</label>
                                            <input type="text" name="phone" placeholder="Phone number">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Address*</label>
                                            <input type="text" name="adress" placeholder="Address line 1">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Town/City*</label>
                                            <input type="text" name="city" placeholder="Town/City">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Zip Code*</label>
                                            <input type="text" name="zip_cod" placeholder="Zip Code">
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
                                            <h2 class="checkout-title">YOUR ORDER</h2>
                                            <h4>Product <span>Total</span></h4>
                                            <ul>
                                                <li><span class="left">Cillum dolore tortor nisl X 01</span> <span
                                                        class="right">$25.00</span></li>
                                                <li><span class="left">Auctor gravida pellentesque X 02 </span><span
                                                        class="right">$50.00</span></li>
                                                <li><span class="left">Condimentum posuere consectetur X 01</span>
                                                    <span class="right">$29.00</span></li>
                                                <li><span class="left">Habitasse dictumst elementum X 01</span>
                                                    <span class="right">$10.00</span></li>
                                            </ul>
                                            <p>Sub Total <span>$104.00</span></p>
                                            <p>Shipping Fee <span>$00.00</span></p>
                                            <h4>Grand Total <span>$104.00</span></h4>
                                            <div class="method-notice mt--25">
                                                <article>
                                                    <h3 class="d-none sr-only">blog-article</h3>
                                                    Sorry, it seems that there are no available payment methods for
                                                    your state. Please contact us if you
                                                    require
                                                    assistance
                                                    or wish to make alternate arrangements.
                                                </article>
                                            </div>
                                            <div class="term-block">
                                                <input type="checkbox" name="status" value="1" id="accept_terms2">
                                                <label for="accept_terms2">I’ve read and accept the terms &
                                                    conditions</label>
                                            </div>
                                            <button type="submit" class="place-order w-100">Place order</button>
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

