@extends('layouts.admin')
@section('title','Mehsul elave et')
@section('theme_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"
          integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('theme_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"
            integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
    <div class="content">
        @include('layouts.admin.alert')
        <!-- Basic tabs -->
        <form action="{{route('faq.store')}}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                            @foreach($langs as $key=>$lang)
                                <li class="nav-item {{$key===0 ? 'active':''}}"> <a href="#{{$lang->name}}"
                                                                                    class="nav-link rounded-top " data-toggle="tab">{{$lang->name}}</a></li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($langs as $key=>$lang)
                                <div class="tab-pane fade{{$key===0?'show active':''}}" id="{{$lang->name}}">
                                    <div class="card">
                                        <div class="card-body">
                                            <fieldset class="content-group">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label>Basliq</label>
                                                        <textarea rows="5" cols="5" class="form-control summernote"  name="title[{{$lang->name}}]" placeholder="Default textarea">{{old('title.'.$lang->name)}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mezmun</label>
                                                        <textarea rows="5" cols="5" class="form-control summernote"  name="description[{{$lang->name}}]" placeholder="Default textarea">{{old('description.'.$lang->name)}}</textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Göndər<i
                        class="icon-arrow-right14 position-right"></i></button>
            </div>
    </div>




    </form>
    <!-- /basic tabs -->

    </div>
    <script>
        $('.summernote').summernote();
    </script>
@endsection
