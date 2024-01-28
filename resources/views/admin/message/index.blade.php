@extends('layouts.admin')
@section('title','Mehsullar')
@section('theme_js')
<link href="{{asset('admin')}}\global_assets\css\icons\fontawesome\styles.min.css" rel="stylesheet" type="text/css">
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\styling\uniform.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\styling\switchery.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\plugins\forms\styling\switch.min.js"></script>
<script src="{{asset('admin')}}\global_assets\js\demo_pages\form_checkboxes_radios.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

@endsection


@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <div class="card">


        <table class="table table-hover border table-bordered " id="dataTable">
            <thead>
                <tr>
                    <th>Ad</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Metn</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $items)
                <tr>
                    <td>{{$items->name}}</td>
                    <td>{{$items->email}}</td>
                    <td>{{$items->phone}}</td>
                    <td>{{$items->message}}</td>
                    <td>
                        <div class="checkbox checkbox-switchery">
                            <label>
                                <input type="checkbox" name='activ' class="switchery" id="{{ $items->id }}"
                                    {{$items->status=='1' ? 'checked' :''}}>

                            </label>
                        </div>
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
$(".deleteRecord").click(function() {
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
    var confirmDelete = confirm("Are you sure you want to delete this record?");
    if (!confirmDelete) {
        return false;
    }
    $.ajax({
        url: "delete_social/" + id,
        type: 'post',
        data: {
            "id": id,
            "_token": token,
        },
        success: function() {
            console.log("itcon Works");
            $(`.deleteRecord[data-id="${id}"]`).closest('tr').remove();
        }
    });

});
</script>
<script>
$(document).ready(function() {
    $('.switchery').click(function() {
        var id = $(this).attr("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
            }
        });
        $.ajax({
            url: "{{route('offmessage')}}", // Define your Laravel route
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
@endsection