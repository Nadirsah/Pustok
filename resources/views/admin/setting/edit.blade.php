@extends('layouts.admin')
@section('title','Mehsul elave et')
@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <!-- Basic tabs -->
        <div id="messageDiv"></div>
        <form action="{{route('setting.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Logo</label>
                                            <input type="file" class="form-control " name="logo" value="{{$data->logo}}"
                                                   placeholder="Yazin...">
                                            <span
                                                class="text-danger">@error('logo'){{'Logo sahəsi boş ola bilməz!'}}@enderror</span>
                                            <div>Logo: <img width="100" src="{{$data->file_path}}"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon support</label>
                                            <input type="text" class="form-control " name="phone_1" value="{{$data->phone_1}}"
                                                   placeholder="Yazin...">
                                            <span
                                                class="text-danger">@error('phone_1'){{'Telefon support sahəsi boş ola bilməz!'}}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon 2</label>
                                            <input type="text" class="form-control " name="phone_2" value="{{$data->phone_2}}"
                                                   placeholder="Yazin...">
                                            <span
                                                class="text-danger">@error('phone_2'){{'Telefon 2 sahəsi boş ola bilməz!'}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Adress</label>
                                            <input type="text" class="form-control " name="adress" value="{{$data->adress}}"
                                                   placeholder="Yazin...">
                                            <span
                                                class="text-danger">@error('adress'){{'Adress sahəsi boş ola bilməz!'}}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control " name="email" value="{{$data->email}}"
                                                   placeholder="Yazin...">
                                            <span
                                                class="text-danger">@error('email'){{'Email sahəsi boş ola bilməz!'}}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Activ</label>
                                            <input type="text" class="form-control " name="activ" value="{{$data->activ}}"
                                                   placeholder="Yazin...">
                                            <span
                                                class="text-danger">@error('activ'){{'Activ sahəsi boş ola bilməz!'}}@enderror</span>
                                        </div>
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
