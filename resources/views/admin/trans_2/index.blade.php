@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection
@push('theme_js')

@endpush


@section('content')
<div class="content">
    @include('layouts.admin.alert')
   


    <div class="panel panel-flat">
    <div class="table-responsive">

        <table class="table table-hover border table-bordered">
            <thead>
                <tr>
                    <th>Password</th>
                    <th>Returning</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Quantity</th>
                    <th>Cart summary</th>
                    <th>Sub</th>
                    <th>Grand</th>
                    <th>Checkout</th>
                    <th>Billing</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Company</th>
                    <th>Country</th>
                    <th>No</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->password}}</td>
                    <td>{{$items->returning}}</td>
                    <td>{{$items->image}}</td>
                    <td>{{$items->product}}</td>
                    <td>{{$items->price}}</td>
                    <td>{{$items->total}}</td>
                    <td>{{$items->quantity}}</td>
                    <td>{{$items->cart_summary}}</td>
                    <td>{{$items->sub}}</td>
                    <td>{{$items->grand}}</td>
                    <td>{{$items->checkout}}</td>
                    <td>{{$items->billing}}</td>
                    <td>{{$items->first}}</td>
                    <td>{{$items->last}}</td>
                    <td>{{$items->company}}</td>
                    <td>{{$items->country}}</td>
                    <td>{{$items->no}}</td>
                    <td> <a href="{{route('trans_2.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection
