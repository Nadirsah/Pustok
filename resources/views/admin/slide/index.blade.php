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
@endsection


@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <div class="panel panel-flat">
        <div class="table-responsive">
            <div class="card-header header-elements-inline">

                <h5 class="card-title"><a href="{{route('slide.create')}}" class="btn btn-info"><i
                            class="icon-plus3 mr-3 icon-xl"></i> Slide elave et</a></h5>
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
                        <th>Title</th>
                        <th>Name</th>
                        <th>Sekil</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($item as $items)
                    <tr>
                        <td>{!!$items->title!!}</td>
                        <td>{!!$items->name!!}</td>
                        <td><img width="50" src="{{$items->file_path}}"></td>
                        <td> <a href="{{route('slide.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                            <a href="{{route('slide.delete',$items->id)}}"
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

</div>
<!-- /login form -->

<script type="text/javascript">
$(".deleteimg").click(function() {
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
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


@endsection
