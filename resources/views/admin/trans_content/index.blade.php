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

                <h5 class="card-title"><a href="{{route('trans_content.create')}}" class="btn btn-info"><i
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
                    url: "delete_trans_content/"+id,
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
