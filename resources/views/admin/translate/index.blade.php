@extends('layouts.admin')
@section('title','Mehsullar')@section('theme_css')
<link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection
@section('theme_js')
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\selects\select2.min.js"></script>

@endsection


@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title"><a href="{{route('translate.create')}}" class="btn btn-info"><i
                        class="icon-plus3 mr-3 icon-xl"></i> Mehsul elave et</a></h5>
        </div>

        <table class="table table-hover border table-bordered " id="dataTable"">
                <thead>
                    <tr>
                        <th>Group</th>
                        <th>Key</th>
                        <th>Text</th>
                        <th class=" text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->group}}</td>
                    <td>{{$items->key}}</td>
                    <td>{$items->text}</td>
                    <td> <a href="{{route('translate.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
let table = new DataTable('#dataTable');
</script>

@endsection