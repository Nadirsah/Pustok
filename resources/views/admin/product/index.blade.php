@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
<link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection
@section('theme_js')
<script src="{{asset('admin')}}\global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\selects\select2.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\demo_pages\datatables_advanced.js"></script>
<script src="{{asset('admin')}}\global_assets\js\demo_pages\components_thumbnails.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\styling\switchery.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\styling\switch.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\demo_pages\form_checkboxes_radios.js"></script>
@endsection


@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <div class="panel panel-flat">
        <div class="table-responsive">
            <div class="card-header header-elements-inline">

                <h5 class="card-title"><a href="{{route('product.create')}}" class="btn btn-info"><i
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
                        <th>Tags</th>
                        <th>Vergi</th>
                        <th>Qiymet</th>
                        <th>Evvelki qiymet</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Title</th>
                        <th>Haqqinda</th>
                        <th>Tesfir</th>
                        <th>Activ</th>
                        <th>Xususi teklif</th>
                        <th>Sekil</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($item as $items)
                    <tr>
                        <td>{{$items->getCategory->name}}</td>
                        <td>{{$items->tags}}</td>
                        <td>{{$items->tax}}</td>
                        <td>{{$items->price}}</td>
                        <td>{{$items->old_price}}</td>
                        <td>{{$items->brand}}</td>
                        <td>{{$items->model}}</td>
                        <td>{!! $items->title!!}</td>
                        <td>{!! $items->about !!}</td>
                        <td>{!! Str::limit($items->description, 50) !!}</td>
                        <td>
                            <div class="checkbox checkbox-switchery">
                                <label>
                                    <input type="checkbox" name='activ' class="switchery activ" id="{{ $items->id }}"
                                        {{$items->activ==1 ? 'checked' :''}}>

                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="checkbox checkbox-switchery">
                                <label>
                                    <input type="checkbox" name='offer' class="switchery offer" id="{{ $items->id }}"
                                        {{$items->offer==1 ? 'checked' :''}}>

                                </label>
                            </div>
                        </td>
                        <td>

                            <a type="button" class="btn bg-blue btn-block" data-toggle="modal"
                                data-target="#modal-login{{$items->id}}">Sekil</a>

                        </td>
                        <td> <a href="{{route('product.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                            <a href="{{route('product.delete',$items->id)}}"
                                onclick="return confirm('Mehsulu silmeye eminsiz?')"><i
                                    class="btn btn-danger fa fa-trash"></i></a>
                        </td>
                    </tr>



                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Login form -->
    @foreach($item as $items)
    <div id="modal-login{{$items->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items->images as $image)
                            <tr>
                                <td>
                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                        </div>
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img width="50" src="{{$image->file_path}}" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                        <a href="#" class="btn bg-warning-300 btn-icon deleteimg"
                                                            data-id="{{ $image->id }}"><i class="icon-link"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Resimleri Listeleme -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- /login form -->

<script type="text/javascript">
$(".deleteimg").click(function() {
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
    var confirmDelete = confirm("Are you sure you want to delete this record?");
    if (!confirmDelete) {
        return false;
    }
    $.ajax({
        url: "delete_image/" + id,
        type: 'post',
        data: {
            "id": id,
            "_token": token,
        },
        success: function() {
            $('.modal').modal('hide');
            console.log("itcon Works");
            $(`.deleteRecord[data-id="${id}"]`).closest('tr').remove();
        }
    });

});
</script>
<script>
$(document).ready(function() {
    $(document).on('click', '.activ', function() {
        var id = $(this).attr("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
            }
        });
        $.ajax({
            url: "{{route('isdiscountproduct')}}", // Define your Laravel route
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

<script>
$(document).ready(function() {
    $(document).on('click', '.offer', function() {
        var id = $(this).attr("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
            }
        });
        $.ajax({
            url: "{{route('isoffer')}}", // Define your Laravel route
            type: 'POST',
            data: {
                "id": id,
                is_offer: $(this).is(':checked'),

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