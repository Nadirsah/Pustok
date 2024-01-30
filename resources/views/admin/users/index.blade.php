@extends('layouts.admin')
@section('title','Admin panel')
@section('theme_css')
<link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection
@section('theme_js')
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\styling\uniform.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\styling\switchery.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\styling\switch.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\demo_pages\form_checkboxes_radios.js"></script>

@endsection


@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <div class="card">
        <div class="card-header header-elements-inline">

            <h5 class="card-title"><a href="{{route('user.create')}}" class="btn btn-info"><i
                        class="icon-plus3 mr-3 icon-xl"></i> Mehsul elave et</a></h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <table class="table table-hover border table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>Ad</th>
                    <th>Email</th>
                    <th>Activ</th>
                    <th>Imtiyaz</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->name}}</td>
                    <td>{{$items->email}}</td>
                    <td>
                        <div class="checkbox checkbox-switchery">
                            <label>
                                <input type="checkbox" name='activ' class="switchery" id="{{ $items->id }}"
                                    {{$items->is_active=='1' ? 'checked' :''}}>
                                Checked switch
                            </label>
                        </div>
                    </td>
                    <td>@if($items->user_Type=='admin')
                        Admin
                        @else($items->user_Type=='user')
                        Istifadeci
                        @endif</td>
                    <td> <a href="{{route('user.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>

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
<script>
$(document).ready(function() {
    $('.switchery').click(function() {
        var id = $(this).attr("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
            }
        });
        $.ajax({
            url: "{{route('isdiscount')}}", // Define your Laravel route
            type: 'POST',
            data: {
                "id": id,
                is_active: $(this).is(':checked'),

            },
            success: function(data) {
                console.log('Status updated successfully');
            },
            error: function(error) {
                console.error('Error updating status:', error);
            }
        });
    });
});
</script>
@endsection