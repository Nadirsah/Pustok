@extends('layouts.admin')
@section('title','Mehsul elave et')
@push('theme_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"
    integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('theme_js')


<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"
    integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@section('content')
<div class="content">
    @include('layouts.admin.alert')
    <!-- Basic tabs -->
    <form action="{{route('trans_home.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
        @method("PUT")
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
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Placeholder</label>
                                                <input type="text" class="form-control"
                                                    name="placeholder[{{$lang->name}}]" placeholder="Placeholder"
                                                    value="{{old('placeholder.'.$lang->name,$data->getTranslation('placeholder',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('placeholder.'.$lang->name){{'Placeholder sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Search button</label>
                                                <input type="text" class="form-control"
                                                    name="search_button[{{$lang->name}}]" placeholder="Search button"
                                                    value="{{old('search_button.'.$lang->name,$data->getTranslation('search_button',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('search_button.'.$lang->name){{'Search button sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Login</label>
                                                <input type="text" class="form-control" name="login[{{$lang->name}}]"
                                                    placeholder="Login" value="{{old('login.'.$lang->name,$data->getTranslation('login',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('login.'.$lang->name){{'Login sahəsi boş ola bilməz!'}}@enderror</span>

                                            </div>
                                            <div class="form-group">
                                                <label>Or</label>
                                                <input type="text" class="form-control" name="or[{{$lang->name}}]"
                                                    placeholder="Or" value="{{old('or.'.$lang->name,$data->getTranslation('or',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('or.'.$lang->name){{'Or sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>

                                            <div class="form-group">
                                                <label>Register</label>
                                                <input type="text" class="form-control" name="register[{{$lang->name}}]"
                                                    placeholder="Register" value="{{old('register.'.$lang->name,$data->getTranslation('register',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('register.'.$lang->name){{'Register sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Shopping cart</label>
                                                <input type="text" class="form-control"
                                                    name="shopping_cart[{{$lang->name}}]" placeholder="Shopping cart"
                                                    value="{{old('shopping_cart.'.$lang->name,$data->getTranslation('shopping_cart',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('shopping_cart.'.$lang->name){{'Shopping cart sahəsi boş ola bilməz!'}}@enderror</span>

                                            </div>
                                            <div class="form-group">
                                                <label>Browse category</label>
                                                <input type="text" class="form-control"
                                                    name="browse_category[{{$lang->name}}]"
                                                    placeholder="Browse category"
                                                    value="{{old('browse_category.'.$lang->name,$data->getTranslation('browse_category',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('browse_category.'.$lang->name){{'Browse category sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Free support</label>
                                                <input type="text" class="form-control"
                                                    name="free_support[{{$lang->name}}]" placeholder="Free support"
                                                    value="{{old('free_support.'.$lang->name,$data->getTranslation('free_support',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('free_support.'.$lang->name){{'Free support sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>View cart</label>
                                                <input type="text" class="form-control"
                                                    name="view_cart[{{$lang->name}}]" placeholder="View cart"
                                                    value="{{old('view_cart.'.$lang->name,$data->getTranslation('view_cart',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('view_cart.'.$lang->name){{'View cart sahəsi boş ola bilməz!'}}@enderror</span>

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