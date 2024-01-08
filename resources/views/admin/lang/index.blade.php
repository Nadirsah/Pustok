@extends('layouts.admin')
@section('title','Mehsullar')
@push('theme_js')
<link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
<script src="{{asset('admin')}}\global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\selects\select2.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\demo_pages\datatables_advanced.js"></script>

@endpush


@section('content')
<div class="content">

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

        <table class="table datatable-show-all">
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

<script type="text/javascript">
$(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax(
    {
        url: "delete_lang/"+id,
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