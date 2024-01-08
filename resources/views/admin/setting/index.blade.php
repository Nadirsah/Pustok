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

                <h5 class="card-title"><a href="{{route('setting.create')}}" class="btn btn-info"><i
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
                    <th>Logo</th>
                    <th>Telefon support</th>
                    <th>Telefon 2</th>
                    <th>Adress</th>
                    <th>Email</th>
                    <th>Activ</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><img width="50" src="{{$data->file_path}}"></td>
                    <td>{{$data->phone_1}}</td>
                    <td>{{$data->phone_2}}</td>
                    <td>{{$data->adress}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->activ}}</td>
                    <td> <a href="{{route('setting.edit',$data->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
