@extends('layouts.admin')
@section('title','Mehsul elave et')
@push('theme_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('theme_js')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js" integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <!-- Basic tabs -->
        <form action="{{route('category.store')}}" method="POST" class="row" enctype="multipart/form-data">
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
                                                    <input  class="form-control"  name="name[{{$lang->name}}]" value="{{old('name')}}" placeholder="Categoriya">
                                                    <span class="text-danger">@error('title.'.$lang->name){{'Title sahəsi boş ola bilməz!'}}@enderror</span>
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
                                @foreach($data as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
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
@endsection
