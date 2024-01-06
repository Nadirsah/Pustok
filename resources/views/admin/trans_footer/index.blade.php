@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_css')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
@endsection
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

            <h5 class="card-title"><a href="{{route('trans_footer.create')}}" class="btn btn-info"><i
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
                    <a class="deleteRecord" data-id="{{ $items->id }}" ><i class="btn btn-danger fa fa-trash"></i></a>
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
        url: "delete_trans_footer/"+id,
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
