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
        <table class="table table-hover border table-bordered">
            <thead>
                <tr>
                    <th>Placeholder</th>
                    <th>Search button</th>
                    <th>Login</th>
                    <th>Or</th>
                    <th>Register</th>
                    <th>Shopping cart</th>
                    <th>Browse category</th>
                    <th>Free support</th>
                    <th>Home</th>
                    <th>Shop</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Information</th>
                    <th>Extras</th>
                    <th>Newsletter subscribe</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->placeholder}}</td>
                    <td>{{$items->search_button}}</td>
                    <td>{{$items->login}}</td>
                    <td>{{$items->or}}</td>
                    <td>{{$items->register}}</td>
                    <td>{{$items->shopping_cart}}</td>
                    <td>{{$items->browse_category}}</td>
                    <td>{{$items->free_support}}</td>
                    <td>{{$items->home}}</td>
                    <td>{{$items->shop}}</td>
                    <td>{{$items->contact}}</td>
                    <td>{{$items->address}}</td>
                    <td>{{$items->phone}}</td>
                    <td>{{$items->email}}</td>
                    <td>{{$items->information}}</td>
                    <td>{{$items->extras}}</td>
                    <td>{{$items->newsletter_subscribe}}</td>
                    <td> <a href="{{route('trans.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection
