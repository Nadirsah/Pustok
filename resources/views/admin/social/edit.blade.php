@extends('layouts.admin')
@section('title','Mehsul elave et')
@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <!-- Basic tabs -->
        <div id="messageDiv"></div>
        <form action="{{route('social.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="card">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control " name="name" value="{{$data->name}}"
                                               placeholder="Yazin...">
                                        <span
                                            class="text-danger">@error('name'){{'Name sahəsi boş ola bilməz!'}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Url</label>
                                        <input type="text" class="form-control " name="url" value="{{$data->url}}"
                                               placeholder="Yazin...">
                                        <span
                                            class="text-danger">@error('url'){{'Url support sahəsi boş ola bilməz!'}}@enderror</span>
                                    </div>



                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Göndər<i
                        class="icon-arrow-right14 position-center"></i></button>
            </div>

        </form>
        <!-- /basic tabs -->

    </div>
    <script>
@endsection
