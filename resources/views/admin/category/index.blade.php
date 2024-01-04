@extends('layouts.admin')
@section('title','Mehsullar')
@push('theme_css')
<link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endpush
@push('theme_js')
<script src="{{asset('admin')}}\global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\selects\select2.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\demo_pages\datatables_advanced.js"></script>
@endpush


@section('content')
<div class="content">

    <div class="card">
        <div class="card-header header-elements-inline">

            <h5 class="card-title"><a href="{{route('category.create')}}" class="btn btn-info"><i
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
                    <th>Categoriya</th>
                    <th>Parent Category</th>

                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($item as $items)
                <tr>
                    <td>{{$items->name}}</td>
                    <td>@if($items->parent )
                        {{$items->parent->name}}
                        @else
                        -----
                        @endif
                    </td>
                    <td> <a href="{{route('category.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                        <a href="{{route('delete',$items->id)}}"><i class="btn btn-danger fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection