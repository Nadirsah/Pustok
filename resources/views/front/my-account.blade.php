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
                                    {{$trans3->dashboard}}</a>
                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> {{$trans3->order}}</a>
                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                    {{$trans->address}}</a>
                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> {{$trans3->account}}
                                    {{$trans2->details}}</a>
                                <a href="login-register.html"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->
                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12 mt--30 mt-lg--0">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>{{$trans3->dashboard}}</h3>
                                        <div class="welcome mb-20">
                                            <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni
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
                                        <h3>{{$trans3->order}}</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>{{$trans2->no}}</th>
                                                    <th>{{$trans1->name}}</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>{{$trans2->total}}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mostarizing Oil</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Pending</td>
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
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
                                            Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12  mb--30">
                                                        <input id="first-name" placeholder="First Name" type="text">
                                                    </div>
                                                    <div class="col-lg-6 col-12  mb--30">
                                                        <input id="last-name" placeholder="Last Name" type="text">
                                                    </div>
                                                    <div class="col-12  mb--30">
                                                        <input id="display-name" placeholder="Display Name"
                                                               type="text">
                                                    </div>
                                                    <div class="col-12  mb--30">
                                                        <input id="email" placeholder="Email Address" type="email">
                                                    </div>
                                                    <div class="col-12  mb--30">
                                                        <h4>Password change</h4>
                                                    </div>
                                                    <div class="col-12  mb--30">
                                                        <input id="current-pwd" placeholder="Current Password"
                                                               type="password">
                                                    </div>
                                                    <div class="col-lg-6 col-12  mb--30">
                                                        <input id="new-pwd" placeholder="New Password"
                                                               type="password">
                                                    </div>
                                                    <div class="col-lg-6 col-12  mb--30">
                                                        <input id="confirm-pwd" placeholder="Confirm Password"
                                                               type="password">
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn--primary">Save Changes</button>
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

