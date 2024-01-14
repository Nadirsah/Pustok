@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_js')
    <link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
    <script src="{{asset('admin')}}\global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
    <script src="{{asset('admin')}}\global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="{{asset('admin')}}\global_assets\js\demo_pages\datatables_advanced.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

@endsection


@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <div class="card">
            <div class="card-header header-elements-inline">

                <h5 class="card-title"><a href="{{route('social.create')}}" class="btn btn-info"><i
                            class="icon-plus3 mr-3 icon-xl"></i> Link elave et</a></h5>

            </div>

            <table class="table table-hover border table-bordered " id="dataTable">
                <thead>
                <tr>
                    <th>Ad</th>
                    <th>Url</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $items)
                    <tr>
                        <td>{{$items->name}}</td>
                        <td>{{$items->url}}</td>
                        <td> <a href="{{route('social.edit',$items->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                            <a class="deleteRecord" data-id="{{ $items->id }}" ><i class="btn btn-danger fa fa-trash"></i></a>
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
                    url: "delete_social/"+id,
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
