@extends('layouts.admin')
@section('title','Mehsullar')
@push('theme_js')
<link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
<script src="{{asset('admin')}}\global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\selects\select2.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\demo_pages\datatables_advanced.js"></script>
@endpush


@section('content')
<div class="content">

    <div class="card">
        <div class="card-header header-elements-inline">

            <h5 class="card-title"><a href="{{route('trans_home.create')}}" class="btn btn-info"><i
                        class="icon-plus3 mr-3 icon-xl"></i> Mehsul elave et</a></h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>



        <table class="table datatable-show-all">
            <thead>
                <tr>
                    <th>Placeholder</th>
                    <th>Search button</th>
                    <th>Login</th>
                    <th>or</th>
                    <th>Register</th>
                    <th>Shopping cart</th>
                    <th>Browse category</th>
                    <th>Free support</th>
                    <th>View cart</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->placeholder}}</td>
                    <td>{{$items->search_button}}</td>
                    <td>{{$items->login}}</td>
                    <td>{{$items->veya}}</td>
                    <td>{{$items->register}}</td>
                    <td>{{$items->shopping_cart}}</td>
                    <td>{{$items->browse_category}}</td>
                    <td>{{$items->free_support}}</td>
                    <td>{{$items->view_cart}}</td>
                    <td> <a href="{{route('trans_home.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

