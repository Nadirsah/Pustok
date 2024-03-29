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

        <!-- Basic tabs -->
        <form action="{{route('slide.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
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
                                             <textarea rows="5" cols="5" class="form-control summernote"  name="title[{{$lang->name}}]" placeholder="Default textarea">
                                                {{old('title.'.$lang->name,$data->getTranslation('title',$lang->name))}}</textarea>
                                             <span class="text-danger">@error('title.'.$lang->name){{'Bu sahə boş ola bilməz!'}}@enderror</span>
                                         </div>
                                         <div class="form-group">
                                             <label >Name</label>
                                             <textarea rows="5" cols="5" class="form-control summernote"  name="name[{{$lang->name}}]" placeholder="Default textarea">
                                                {{old('name.'.$lang->name,$data->getTranslation('name',$lang->name))}}</textarea>
                                             <span class="text-danger">@error('name.'.$lang->name){{'Bu sahə boş ola bilməz!'}}@enderror</span>
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


