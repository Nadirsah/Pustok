@extends('layouts.admin')
@section('title','Mehsul elave et')
@section('theme_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('theme_js')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js" integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <!-- Basic tabs -->
        <form action="{{route('brand.store')}}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="uploader hover form-group">

                            <input type="file" name="img[]" multiple class="file-styled" value="{{old('img[]')}}">
                            <span class="filename" style="user-select: none;">File secilmeyib</span>
                            <span class="action btn btn-default" style="user-select: none;">Choose File</span>
                        </div>
                        <span class="text-danger">@error('img'){{'Sekil sahəsi boş ola bilməz!'}}@enderror</span>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Gonder <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /basic tabs -->

    </div>
    <script>
        $('.summernote').summernote();
    </script>
@endsection



