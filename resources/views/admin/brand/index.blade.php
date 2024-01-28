@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
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
            <h5 class="card-title"><a href="{{route('brand.create')}}" class="btn btn-info"><i
                        class="icon-plus3 mr-3 icon-xl"></i> Mehsul elave et</a></h5>
        </div>



        <table class="table table-hover border table-bordered " id="dataTable">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td><img width="50" src="{{$item->file_path}}"></td>
                    <td> <a href="{{route('brand.edit',$item->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                        <a class="deleteRecord" data-id="{{ $item->id }}"><i class="btn btn-danger fa fa-trash"></i></a>

                        @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
let table = new DataTable('#dataTable');
</script>
<script type="text/javascript">
$(".deleteRecord").click(function() {
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");

    var confirmDelete = confirm("Are you sure you want to delete this record?");
    if (!confirmDelete) {
        return false;
    }
    var confirmDelete = confirm("Are you sure you want to delete this record?");
    if (!confirmDelete) {
        return false;
    }
    $.ajax({
        url: "delete_brand/" + id,
        type: 'post',
        data: {
            "id": id,
            "_token": token,
        },
        success: function() {
            $(`.deleteRecord[data-id="${id}"]`).closest('tr').remove();
        }
    });

});
</script>
@endsection