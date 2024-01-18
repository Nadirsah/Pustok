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
    <div class="card">
        <table class="table table-hover border table-bordered">
            <thead>
                <tr>
                    <th>Shopping cart</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Cart summary</th>
                    <th>Sub total</th>
                    <th>Shipping cost</th>
                    <th>Grand total</th>
                    <th>Checkout</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->shopping_cart}}</td>
                    <td>{{$items->image}}</td>
                    <td>{{$items->product}}</td>
                    <td>{{$items->price}}</td>
                    <td>{{$items->total}}</td>
                    <td>{{$items->cart_summary}}</td>
                    <td>{{$items->sub_total}}</td>
                    <td>{{$items->shipping_cost}}</td>
                    <td>{{$items->grand_total}}</td>
                    <td>{{$items->checkout}}</td>
                    <td> <a href="{{route('trans_card.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
