@extends('layouts.admin')
@section('title','Mehsul elave et')
@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <!-- Basic tabs -->
    <div id="messageDiv"></div>
    <form id="myForm" method="POST" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Dil</label>
                                    <input type="text" class="form-control " name="name" value="{{old('name')}}"
                                        placeholder="Yazin...">
                                    <span
                                        class="text-danger">@error('tags'){{'Tags sahəsi boş ola bilməz!'}}@enderror</span>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Gonder <i
                                            class="icon-arrow-right14 position-right"></i></button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </form>
    <!-- /basic tabs -->

</div>
<script>
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault(); // Formun otomatik olarak submit olmasını engelle
        var formData = $(this).serialize(); // Form verilerini al
        $.ajax({
            url: "{{route('lang.store')}}",
            type: 'POST',
            data: formData,
            beforeSend: function() {
                $(document).find('span.error-text').text('');
            },
            success: function(data) {
                // AJAX yanıtını işleyin
                if (data.status == 0) {
                    $.each(data.error, function(prefix, val) {
                        $('span.' + prefix + '_error').text(val[0]);
                    });
                } else {
                    $('#myForm')[0].reset();
                    $('#messageDiv').html('<div class="alert alert-success">İşlem başarıyla tamamlandı.</div>');
                }
            },
            error: function(xhr) {
                // Hata durumunda işlemler
                console.log(xhr.responseText);
            }
        });
    });
});
</script>


@endsection