@extends('layouts.front')
@section('css')
@endsection
@section('sidebar')
    @include('layouts.front.sidebar')
@endsection
@section('content')
    @include('layouts.front.activ-menu')
    <div class="page-section inner-page-sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i
                                        class="fas fa-tachometer-alt"></i>
                                    {{__('letter.dashboard')}}</a>
                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> {{__('letter.order')}}</a>
                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                    {{__('contakt.address')}}</a>
                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> {{__('account.account')}}
                                   </a>
                                <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> {{__('registr.logout')}}</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->
                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12 mt--30 mt-lg--0">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>{{__('letter.dashboard')}}</h3>
                                        <div class="welcome mb-20">
                                            <p>Hello, <strong>{{$data->name}} {{$data->surname}}</strong> (If Not <strong>Tuntuni
                                                    !</strong><a href="login-register.html" class="logout">
                                                    Logout</a>)</p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check &amp; view
                                            your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>{{__('letter.order')}}</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>{{__('letter.no')}}</th>
                                                    <th>{{__('letter.name')}}</th>
                                                    <th>{{__('letter.date')}}</th>
                                                    <th>{{__('cart.total')}}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mostarizing Oil</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>$45</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->

                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->

                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>{{__('cart.billing')}} {{__('contakt.address')}}</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>{{__('letter.edit')}}
                                            {{__('contakt.address')}}</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>{{__('account.account')}} {{__('cart.details')}}</h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12 col-12  mb--30">
                                                        <input id="first-name" placeholder="{{__('letter.name')}}" type="text">
                                                    </div>
                                                    <div class="col-12  mb--30">
                                                        <input id="email" placeholder="{{__('contakt.email')}}" type="email">
                                                    </div>
                                                    <div class="col-12  mb--30">
                                                        <h4>{{__('letter.password')}} {{__('letter.change')}}</h4>
                                                    </div>
                                                    <div class="col-12  mb--30">
                                                        <input id="current-pwd" placeholder="{{__('letter.current')}} {{__('letter.password')}}"
                                                               type="password">
                                                    </div>
                                                    <div class="col-12 col-12  mb--30">
                                                        <input id="new-pwd" placeholder="{{__('letter.new')}} {{__('letter.password')}}"
                                                               type="password">
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn--primary">{{__('registr.save_changes')}}</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection

