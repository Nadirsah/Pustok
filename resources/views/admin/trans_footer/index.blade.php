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
    <div class="card">




        <table class="table table-hover border table-bordered">
            <thead>
                <tr>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>INFORMATION</th>
                    <th>EXTRAS</th>
                    <th>Newsletter subscribe</th>
                    <th>Enter your email</th>
                    <th>Subscribe</th>
                    <th>Stay connected</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->address}}</td>
                    <td>{{$items->phone}}</td>
                    <td>{{$items->email}}</td>
                    <td>{{$items->information}}</td>
                    <td>{{$items->extras}}</td>
                    <td>{{$items->newsletter_subscribe}}</td>
                    <td>{{$items->enter_your_email}}</td>
                    <td>{{$items->subscribe}}</td>
                    <td>{{$items->stay_connected}}</td>
                    <td> <a href="{{route('trans_footer.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
