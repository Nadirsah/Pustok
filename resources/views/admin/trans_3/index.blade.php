@extends('layouts.admin')
@section('title','Mehsullar')@section('theme_css')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection
@push('theme_js')
<link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">

@endpush


@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <div class="panel panel-flat">
    <div class="table-responsive">
        <table class="table ">
            <thead>
                <tr>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip code</th>
                    <th>Condition</th>
                    <th>Place</th>
                    <th>Order</th>
                    <th>Thank</th>
                    <th>You</th>
                    <th>Message for order</th>
                    <th>Number</th>
                    <th>Total</th>
                    <th>Details</th>
                    <th>Description</th>
                    <th>Dashboard</th>
                    <th>Account</th>
                    <th>Details</th>
                    <th>Change</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->city}}</td>
                    <td>{{$items->state}}</td>
                    <td>{{$items->zip_code}}</td>
                    <td>{{$items->condition}}</td>
                    <td>{{$items->place}}</td>
                    <td>{{$items->order}}</td>
                    <td>{{$items->thank}}</td>
                    <td>{{$items->you}}</td>
                    <td>{{$items->message_for_order}}</td>
                    <td>{{$items->number}}</td>
                    <td>{{$items->total}}</td>
                    <td>{{$items->details}}</td>
                    <td>{{$items->description}}</td>
                    <td>{{$items->dashboard}}</td>
                    <td>{{$items->account}}</td>
                    <td>{{$items->details}}</td>
                    <td>{{$items->change}}</td>
                    <td> <a href="{{route('trans_3.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection
