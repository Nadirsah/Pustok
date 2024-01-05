@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection
@section('theme_js')
    <script src="{{asset('admin')}}\global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
    <script src="{{asset('admin')}}\global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="{{asset('admin')}}\global_assets\js\demo_pages\datatables_advanced.js"></script>
@endsection


@section('content')
    <div class="content">

        <div class="card">
            <div class="card-header header-elements-inline">

                <h5 class="card-title"><a href="{{route('brand.create')}}" class="btn btn-info"><i class="icon-plus3 mr-3 icon-xl"></i> Mehsul elave et</a></h5>
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
                    <th>Brand</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td><img width="50" src="{{$item->file_path}}"></td>
                        <td> <a href="{{route('brand.edit',$item->id)}}"><i
                                    class="btn btn-info fa fa-edit"></i></a>
                                    <a class="deleteRecord" data-id="{{ $item->id }}" ><i class="btn btn-danger fa fa-trash"></i></a>

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
        url: "delete_brand/"+id,
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

