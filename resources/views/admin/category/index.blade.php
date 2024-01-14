@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">

    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
@endsection
@section('theme_js')
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
@endsection
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title"><a href="{{route('category.create')}}" class="btn btn-info"><i class="icon-plus3 mr-3 icon-xl"></i> Categoriya elave et</a></h5>

            </div>
            <div class="panel panel-flat  m-2">
                <div class="table-responsive">
                <table class="table table-hover border table-bordered " id="dataTable">
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
                                                <td> <a href="{{route('category.edit',$items->id)}}"><i
                                                            class="btn btn-info fa fa-edit"></i></a>
                                                    <a href="{{route('category.delete',$items->id)}}" onclick="return confirm('Silmeye eminsiz?')"><i
                                                            class="btn btn-danger fa fa-trash"></i></a></td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        let table = new DataTable('#dataTable');
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
