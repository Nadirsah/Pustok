@extends('layouts.admin')
@section('title','Mehsul elave et')
@section('content')
<div class="content">

    <!-- Basic tabs -->
    <div id="messageDiv"></div>
    <form action="{{route('lang.store')}}" method="POST" class="row" enctype="multipart/form-data">
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
                                        class="text-danger">@error('name'){{'Dil sahəsi boş ola bilməz!'}}@enderror</span>
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

</script>


@endsection
