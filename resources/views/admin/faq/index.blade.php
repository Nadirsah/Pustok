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

                    <h5 class="card-title"><a href="{{route('faq.create')}}" class="btn btn-info"><i
                                class="icon-plus3 mr-3 icon-xl"></i>Elave et</a></h5>
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
                        <th>Basliq</th>
                        <th>Mezmun</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{!!$item->title!!}</td>
                            <td>{!!$item->description!!}</td>
                            <td> <a href="{{route('faq.edit',$item->id)}}"><i class="btn btn-info fa fa-edit"></i></a>
                                <a class="deleteFaq" data-id="{{ $item->id }}" ><i class="btn btn-danger fa fa-trash"></i></a>
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
        $(".deleteFaq").click(function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            var confirmDelete = confirm("Are you sure you want to delete this record?");
            if (!confirmDelete) {
                return false;
            }
            $.ajax({
                url: "delete_faq/" + id,
                type: 'post',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function() {
                    $('.modal').modal('hide');
                    console.log("itcon Works");
                    $(`.deleteFaq[data-id="${id}"]`).closest('tr').remove();
                }
            });

        });
    </script>


@endsection
