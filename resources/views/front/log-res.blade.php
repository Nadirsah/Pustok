@extends('layouts.front')
@section('css')
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
                <form action="#">
                    <div class="login-form">
                        <h4 class="login-title">{{$trans1->new}} {{$trans1->customer}}</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                <label for="email">{{$trans1->full}} {{$trans1->name}}</label>
                                <input class="mb-0 form-control" type="text" id="name"
                                    placeholder="{{$trans1->name}}">
                            </div>
                            <div class="col-12 mb--20">
                                <label for="email">{{$trans->email}}</label>
                                <input class="mb-0 form-control" type="email" id="email"
                                    placeholder="{{$trans->email}}..">
                            </div>
                            <div class="col-12 mb--20">
                                <label for="password">{{$trans2->password}}</label>
                                <input class="mb-0 form-control" type="password" id="password"
                                    placeholder="{{$trans2->password}}">
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="btn btn-outlined">{{$trans->register}}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="{{route('auth')}}" method="POST">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">{{$trans2->returning}} {{$trans1->customer}}</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                <label for="email">{{$trans->email}}...</label>
                                <input class="mb-0 form-control" type="email" name="email"
                                    placeholder="{{$trans->email}}...">
                            </div>
                            <div class="col-12 mb--20">
                                <label for="password">{{$trans2->password}}</label>
                                <input class="mb-0 form-control" type="password" name="password"
                                    placeholder="{{$trans2->password}}">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outlined">{{$trans1->login}}</button>
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
