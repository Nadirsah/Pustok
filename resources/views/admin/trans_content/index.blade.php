@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection



@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <div class="card">
            <table class="table table-hover border table-bordered">
                <thead>
                <tr>
                    <th>Best seller</th>
                    <th>Feature products</th>
                    <th>New arrivals</th>
                    <th>Mostview products</th>
                    <th>Special offer</th>
                    <th>Arts photography </th>
                    <th>Childrens books </th>
                    <th>Biographies</th>
                    <th>Days</th>
                    <th>Hours</th>
                    <th>Hours</th>
                    <th>Secs</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $items)
                    <tr>
                        <td>{{$items->best_seller}}</td>
                        <td>{{$items->feature_products}}</td>
                        <td>{{$items->new_arrivals}}</td>
                        <td>{{$items->most_view_products}}</td>
                        <td>{{$items->special_offer}}</td>
                        <td>{{$items->arts_photography}}</td>
                        <td>{{$items->childrens_books}}</td>
                        <td>{{$items->biographies}}</td>
                        <td>{{$items->days}}</td>
                        <td>{{$items->hours}}</td>
                        <td>{{$items->mins}}</td>
                        <td>{{$items->secs}}</td>
                        <td> <a href="{{route('trans_content.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
