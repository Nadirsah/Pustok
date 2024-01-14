@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection
@section('theme_js')
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

@endsection


@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <div class="card">
        <div class="card-header header-elements-inline">

            <h5 class="card-title"><a href="{{route('lang.create')}}" class="btn btn-info"><i
                        class="icon-plus3 mr-3 icon-xl"></i> Mehsul elave et</a></h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <table class="table table-hover border table-bordered " id="dataTable">
            <thead>
                <tr>
                    <th>Dil</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($langs as $lang)
                <tr>
                    <td>{{$lang->name}}</td>
                    <td> <a href="{{route('lang.edit',$lang->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                    <a class="deleteRecord" data-id="{{ $lang->id }}" ><i class="btn btn-danger fa fa-trash"></i></a>
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
<script type="text/javascript">
$(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax(
    {
        url: "/admin/delete_lang/"+id,
        type: 'post',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            console.log("itcon Works");
            $(`.deleteRecord[data-id="${id}"]`).closest('tr').remove();
        }
    });

});
</script>
@endsection
