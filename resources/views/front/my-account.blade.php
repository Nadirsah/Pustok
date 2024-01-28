@extends('layouts.front')
@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                            <a href="#dashboad" class="active" data-toggle="tab"><i class="fas fa-tachometer-alt"></i>
                                {{__('letter.dashboard')}}</a>
                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                {{__('letter.order')}}</a>
                            <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                {{__('contakt.address')}}</a>
                            <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i>
                                {{__('account.account')}}
                            </a>
                            <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>
                                {{__('registr.logout')}}</a>
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
                                        <p>{{__('letter.salam')}}, <strong>{{$data->name}} {{$data->surname}}</strong>
                                        </p>
                                    </div>

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
                                                @foreach($order as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{!!$item->get_products->title!!}</td>
                                                    <td>{{$item->get_products->created_at->format('Y-m-d')}}</td>
                                                    <td>{{$item->get_products->price}}</td>
                                                </tr>
                                                @endforeach
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
                                        <p><strong>{{$address->name}} {{$address->surname}}</strong></p>
                                        <p>{{$address->adress}} {{$address->city}} <br>
                                            {{$address->country}}, {{$address->zip_cod}}</p>
                                        <p>{{__('contakt.phone')}}: {{$address->phone}}</p>
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
                                        <form action="{{route('guest.update',$address->user_id)}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-12  mb--30">
                                                    <input name="name" placeholder="{{__('letter.name')}}" type="text">
                                                    <span
                                                        class="text-danger">@error('name'){{ __('required.error') }}@enderror</span>
                                                </div>
                                                <div class="col-12  mb--30">
                                                    <input name="email" placeholder="{{__('contakt.email')}}"
                                                        type="email">
                                                    <span
                                                        class="text-danger">@error('email'){{ __('required.error') }}@enderror</span>
                                                </div>
                                                <div class="col-12 col-12  mb--30">
                                                    <input name="password" placeholder="{{__('letter.password')}}"
                                                        type="password">
                                                    <span
                                                        class="text-danger">@error('password'){{ __('required.error') }}@enderror</span>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn--primary">{{__('registr.save_changes')}}</button>
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

@if(Session::has('message'))
<script>
swal('Message', "{{Session::get('message')}}", 'success', {
    button: true,
    button: 'OK',
    timer: 6000,
    dangerMode: true,
});
</script>
@endif
@endsection
@section('js')
@endsection