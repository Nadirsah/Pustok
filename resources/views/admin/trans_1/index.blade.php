@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection



@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <div class="panel panel-flat">
    <div class="table-responsive">
            <table class="table table-hover border table-bordered">
                <thead>
                <tr>
                    <th>Enter your email</th>
                    <th>Subscribe</th>
                    <th>Stay connected</th>
                    <th>Us</th>
                    <th>About</th>
                    <th>Best seller</th>
                    <th>Special</th>
                    <th>Offer</th>
                    <th>Days</th>
                    <th>Hours</th>
                    <th>Mins</th>
                    <th>Secs</th>
                    <th>New</th>
                    <th>Customer</th>
                    <th>I am a</th>
                    <th>Full</th>
                    <th>Name</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $items)
                    <tr>
                        <td>{{$items->enter_your_email}}</td>
                        <td>{{$items->subscribe}}</td>
                        <td>{{$items->stay_connected}}</td>
                        <td>{{$items->us}}</td>
                        <td>{{$items->about}}</td>
                        <td>{{$items->best_seller}}</td>
                        <td>{{$items->special}}</td>
                        <td>{{$items->offer}}</td>
                        <td>{{$items->days}}</td>
                        <td>{{$items->hours}}</td>
                        <td>{{$items->mins}}</td>
                        <td>{{$items->secs}}</td>
                        <td>{{$items->new}}</td>
                        <td>{{$items->customer}}</td>
                        <td>{{$items->i_am_a}}</td>
                        <td>{{$items->full}}</td>
                        <td>{{$items->name}}</td>
                        <td> <a href="{{route('trans_1.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>

@endsection
