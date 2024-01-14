@extends('layouts.admin')
@section('title','Mehsul elave et')
@section('theme_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('theme_js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js" integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
    <div class="content">

        <!-- Basic tabs -->
        <form action="{{route('category.update',$data->id)}}" method="Post" class="row" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                            @foreach($langs as $key=>$lang)
                                <li class="nav-item {{$key===0 ? 'active':''}}"> <a href="#{{$lang->name}}" class="nav-link rounded-top " data-toggle="tab">{{$lang->name}}</a></li>
                            @endforeach
                        </ul>

                        <div class="tab-content">
                            @foreach($langs as $key=>$lang)
                                <div class="tab-pane fade{{$key===0?'show active':''}}" id="{{$lang->name}}">
                                    <div class="card">
                                        <div class="card-body">
                                            <fieldset class="content-group">
                                                <div class="form-group">
                                                    <label >Title</label>
                                                    <input  class="form-control"  name="name[{{$lang->name}}]" value="{{old('name.'.$lang->name,$data->getTranslation('name',$lang->name))}}" placeholder="Categoriya">
                                                    <span class="text-danger">@error('name.'.$lang->name){{'Title sahəsi boş ola bilməz!'}}@enderror</span>
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Categoriya</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">Categoriya secin</option>
                                @foreach($categories as $item)
                                    <option @if($data->parent_id==$item->id) selected @endif value="{{$item->id}}" >{{$item->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">@error('subcategory'){{'Categoriya sahəsi boş ola bilməz!'}}@enderror</span>
                        </div>
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
    @if(Session::has('message'))
    <script>
        swal('Message', "{{Session::get('message')}}", 'success', {
            button: true,
            button: 'OK',
            timer: 6000,
            dangerMode: true,
        });
    </script>
    @endif
@endsection
