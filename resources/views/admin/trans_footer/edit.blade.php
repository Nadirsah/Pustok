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
    <form action="{{route('trans_footer.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
        @method('PUT')
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
                                                <label>Address</label>
                                                <input type="text" class="form-control"
                                                    name="address[{{$lang->name}}]" placeholder="Address"
                                                    value="{{old('address.'.$lang->name,$data->getTranslation('address',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('address.'.$lang->name){{'Address sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control"
                                                    name="phone[{{$lang->name}}]" placeholder="Phone"
                                                    value="{{old('phone.'.$lang->name,$data->getTranslation('phone',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('phone.'.$lang->name){{'Phone sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email[{{$lang->name}}]"
                                                    placeholder="Email" value="{{old('email.'.$lang->name,$data->getTranslation('email',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('email.'.$lang->name){{'Email sahəsi boş ola bilməz!'}}@enderror</span>

                                            </div>
                                            <div class="form-group">
                                                <label>INFORMATION</label>
                                                <input type="text" class="form-control" name="information[{{$lang->name}}]"
                                                    placeholder="INFORMATION" value="{{old('information.'.$lang->name,$data->getTranslation('information',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('information.'.$lang->name){{'INFORMATION sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>

                                            <div class="form-group">
                                                <label>EXTRAS</label>
                                                <input type="text" class="form-control" name="extras[{{$lang->name}}]"
                                                    placeholder="EXTRAS" value="{{old('extras.'.$lang->name,$data->getTranslation('extras',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('extras.'.$lang->name){{'EXTRAS sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Newsletter subscribe</label>
                                                <input type="text" class="form-control"
                                                    name="newsletter_subscribe[{{$lang->name}}]" placeholder="Newsletter subscribe"
                                                    value="{{old('newsletter_subscribe.'.$lang->name,$data->getTranslation('newsletter_subscribe',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('newsletter_subscribe.'.$lang->name){{'Newsletter subscribe sahəsi boş ola bilməz!'}}@enderror</span>

                                            </div>
                                            <div class="form-group">
                                                <label>Enter your email</label>
                                                <input type="text" class="form-control"
                                                    name="enter_your_email[{{$lang->name}}]"
                                                    placeholder="Enter your email"
                                                    value="{{old('enter_your_email.'.$lang->name,$data->getTranslation('enter_your_email',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('enter_your_email.'.$lang->name){{'Enter your email sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Subscribe</label>
                                                <input type="text" class="form-control"
                                                    name="subscribe[{{$lang->name}}]" placeholder="Subscribe"
                                                    value="{{old('subscribe.'.$lang->name,$data->getTranslation('subscribe',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('subscribe.'.$lang->name){{'Subscribe sahəsi boş ola bilməz!'}}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Stay connected</label>
                                                <input type="text" class="form-control"
                                                    name="stay_connected[{{$lang->name}}]" placeholder="Stay connected"
                                                    value="{{old('stay_connected.'.$lang->name,$data->getTranslation('stay_connected',$lang->name))}}">
                                                <span
                                                    class="text-danger">@error('stay_connected.'.$lang->name){{'Stay connected sahəsi boş ola bilməz!'}}@enderror</span>

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