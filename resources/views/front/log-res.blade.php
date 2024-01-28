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
<main class="page-section inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
                <!-- Login Form s-->
                <form action="{{route('guest.store')}}" method="POST" class="row" enctype="multipart/form-data">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">{{__('letter.new')}} {{__('letter.customer')}}</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                <label for="email">{{__('letter.full')}} {{__('letter.name')}}</label>
                                <input class="mb-0 form-control" type="text" name="name"
                                    placeholder="{{__('letter.name')}}">
                                <span class="text-danger">@error('name'){{ __('required.error') }}@enderror</span>
                            </div>
                            <div class="col-12 mb--20">
                                <label for="email">{{__('contakt.email')}}</label>
                                <input class="mb-0 form-control" type="email" name="email"
                                    placeholder="{{__('contakt.email')}}..">
                                <span class="text-danger">@error('email'){{ __('required.error') }}@enderror</span>
                            </div>
                            <div class="col-12 mb--20">
                                <label for="password">{{__('letter.password')}}</label>
                                <input class="mb-0 form-control" type="password" name="password"
                                    placeholder="{{__('letter.password')}}">
                                <span class="text-danger">@error('password'){{ __('required.error') }}@enderror</span>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outlined">{{__('reqistr.register')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="{{route('auth')}}" method="POST">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">{{__('letter.returning')}} {{__('letter.customer')}}</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                <label for="email">{{__('contakt.email')}}...</label>
                                <input class="mb-0 form-control" type="email" name="email"
                                    placeholder="{{__('contakt.email')}}...">
                                <span class="text-danger">@error('email'){{ __('required.error') }}@enderror</span>
                            </div>
                            <div class="col-12 mb--20">
                                <label for="password">{{__('letter.password')}}</label>
                                <input class="mb-0 form-control" type="password" name="password"
                                    placeholder="{{__('letter.password')}}">
                                <span class="text-danger">@error('password'){{ __('required.error') }}@enderror</span>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outlined">{{__('reqistr.login')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
</script>
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