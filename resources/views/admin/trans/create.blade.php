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
    <form action="{{route('trans.store')}}" method="POST" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12 ">
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Placeholder</label>
                                                <input type="text" class="form-control"
                                                    name="placeholder[{{$lang->name}}]" placeholder="Placeholder"
                                                    value="{{old('placeholder.'.$lang->name)}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label>Search button</label>
                                                <input type="text" class="form-control"
                                                    name="search_button[{{$lang->name}}]" placeholder="Search button"
                                                    value="{{old('search_button.'.$lang->name)}}">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label>Login</label>
                                                <input type="text" class="form-control" name="login[{{$lang->name}}]"
                                                    placeholder="Login" value="{{old('login.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Or</label>
                                                <input type="text" class="form-control" name="or[{{$lang->name}}]"
                                                    placeholder="Or" value="{{old('or.'.$lang->name)}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label>Register</label>
                                                <input type="text" class="form-control" name="register[{{$lang->name}}]"
                                                    placeholder="Register" value="{{old('register.'.$lang->name)}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label>Shopping cart</label>
                                                <input type="text" class="form-control"
                                                    name="shopping_cart[{{$lang->name}}]" placeholder="Shopping cart"
                                                    value="{{old('shopping_cart.'.$lang->name)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Browse category</label>
                                                <input type="text" class="form-control"
                                                    name="browse_category[{{$lang->name}}]"
                                                    placeholder="Browse category"
                                                    value="{{old('browse_category.'.$lang->name)}}">
                                              
                                            </div>
                                            <div class="form-group">
                                                <label>Free support</label>
                                                <input type="text" class="form-control"
                                                    name="free_support[{{$lang->name}}]" placeholder="Free support"
                                                    value="{{old('free_support.'.$lang->name)}}">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label>Home</label>
                                                <input type="text" class="form-control"
                                                    name="home[{{$lang->name}}]" placeholder="Home"
                                                    value="{{old('home.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Shop</label>
                                                <input type="text" class="form-control"
                                                    name="shop[{{$lang->name}}]" placeholder="Shop"
                                                    value="{{old('shop.'.$lang->name)}}">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input type="text" class="form-control"
                                                    name="contact[{{$lang->name}}]" placeholder="Contact"
                                                    value="{{old('contact.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address[{{$lang->name}}]"
                                                    placeholder="Address" value="{{old('address.'.$lang->name)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            
                                           
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone[{{$lang->name}}]"
                                                    placeholder="Phone" value="{{old('phone.'.$lang->name)}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email[{{$lang->name}}]"
                                                    placeholder="Email" value="{{old('email.'.$lang->name)}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label>Yer</label>
                                                <input type="text" class="form-control"
                                                    name="information[{{$lang->name}}]" placeholder="Yer"
                                                    value="{{old('information.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Extras</label>
                                                <input type="text" class="form-control"
                                                    name="extras[{{$lang->name}}]"
                                                    placeholder="Extras"
                                                    value="{{old('extras.'.$lang->name)}}">
                                              
                                            </div>
                                            <div class="form-group">
                                                <label>Newsletter subscribe</label>
                                                <input type="text" class="form-control"
                                                    name="newsletter_subscribe[{{$lang->name}}]" placeholder="Newsletter subscribe"
                                                    value="{{old('newsletter_subscribe.'.$lang->name)}}">
                                               
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