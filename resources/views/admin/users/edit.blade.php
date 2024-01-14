@extends('layouts.admin')
@section('title','Mehsul elave et')
@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <!-- Basic tabs -->
        <div id="messageDiv"></div>
        <form action="{{route('user.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="card">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label>Ad</label>
                                        <input type="text" class="form-control " name="name" value="{{$data->name}}"
                                               placeholder="Yazin...">
                                        <span
                                            class="text-danger">@error('name'){{'Ad sahəsi boş ola bilməz!'}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control " name="email" value="{{$data->email}}"
                                               placeholder="Yazin...">
                                        <span
                                            class="text-danger">@error('email'){{'Email sahəsi boş ola bilməz!'}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Parol</label>
                                        <input type="text" class="form-control " name="password" value="{{$data->password}}"
                                               placeholder="Yazin...">
                                        <span
                                            class="text-danger">@error('password'){{'Sifre support sahəsi boş ola bilməz!'}}@enderror</span>
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
