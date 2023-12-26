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
        <form action="{{route('product.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
            @method("PUT")
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

                                                    <textarea rows="5" cols="5" class="form-control summernote"  name="title[{{$lang->name}}]" placeholder="Default textarea">{{old('title.'.$lang->name,$data->getTranslation('title',$lang->name))}}</textarea>
                                                    <span class="text-danger">@error('title.'.$lang->name){{'Title sahəsi boş ola bilməz!'}}@enderror</span>
                                                </div>
                                                <div class="form-group">
                                                    <label >Haqqinda</label>
                                                    <textarea rows="5" cols="5" class="form-control summernote"  name="about[{{$lang->name}}]" placeholder="Default textarea">{{old('about.'.$lang->name,$data->getTranslation('about',$lang->name))}}</textarea>
                                                    <span class="text-danger">@error('about.'.$lang->name){{'Haqqinda sahəsi boş ola bilməz!'}}@enderror</span>
                                                </div>
                                                <div class="form-group">
                                                    <label >Tesfir</label>
                                                    <textarea rows="5" cols="5" class="form-control summernote"  name="description[{{$lang->name}}]" placeholder="Default textarea">{{old('description.'.$lang->name,$data->getTranslation('description',$lang->name))}}</textarea>
                                                    <span class="text-danger">@error('description.'.$lang->name){{'Tesfir sahəsi boş ola bilməz!'}}@enderror</span>

                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Categoriya</label>
                            <select name="subcategory" class="form-control">
                                <option value="1">Categoriya</option>
                            </select>
                            <span class="text-danger">@error('subcategory'){{'Categoriya sahəsi boş ola bilməz!'}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            <input type="text" class="form-control " name="tags" value="{{old('tags',$data->tags)}}">
                            <span class="text-danger">@error('tags'){{'Tags sahəsi boş ola bilməz!'}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label >Vergi</label>
                            <input type="number" class="form-control" name="tax" value="{{old('tax',$data->tax)}}">
                            <span class="text-danger">@error('tax'){{'Vergi sahəsi boş ola bilməz!'}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label >Qiymet</label>
                            <input type="number" class="form-control" name="price" value="{{old('price',$data->price)}}">
                            <span class="text-danger">@error('price'){{'Qiymet sahəsi boş ola bilməz!'}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label >Evvelki qiymet</label>
                            <input type="number" class="form-control" name="old_price" value="{{old('old_price',$data->old_price)}}">
                            <span class="text-danger">@error('old_price'){{'Evvelki qiymet sahəsi boş ola bilməz!'}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label >Brand</label>
                            <input type="text" class="form-control " name="brand" value="{{old('brand',$data->brand)}}">
                            <span class="text-danger">@error('brand'){{'Brand sahəsi boş ola bilməz!'}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label >Model</label>
                            <input type="text" class="form-control " name="model" value="{{old('model',$data->model)}}">
                            <span class="text-danger">@error('model'){{'Model sahəsi boş ola bilməz!'}}@enderror</span>
                        </div>
                        <div class="uploader hover form-group">
                            <span class="text-danger">@error('img'){{'Sekil sahəsi boş ola bilməz!'}}@enderror</span>
                            <input type="file" name="img[]" multiple class="file-styled" value="{{old('img[]')}}">
                            <span class="filename" style="user-select: none;">File secilmeyib</span>
                            <span class="action btn btn-default" style="user-select: none;">Choose File</span>

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



