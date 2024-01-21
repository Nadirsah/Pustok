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
        <form action="{{route('trans_1.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-md-12">
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
                                                        <label>Enter your email</label>
                                                        <input type="text" class="form-control"
                                                               name="enter_your_email[{{$lang->name}}]" placeholder="Enter your email"
                                                               value="{{old('enter_your_email.'.$lang->name,$data->getTranslation('enter_your_email',$lang->name))}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Subscribe</label>
                                                        <input type="text" class="form-control"
                                                               name="subscribe[{{$lang->name}}]" placeholder="Subscribe"
                                                               value="{{old('subscribe.'.$lang->name,$data->getTranslation('subscribe',$lang->name))}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Stay connected</label>
                                                        <input type="text" class="form-control" name="stay_connected[{{$lang->name}}]"
                                                               placeholder="Stay connected" value="{{old('stay_connected.'.$lang->name,$data->getTranslation('stay_connected',$lang->name))}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Us</label>
                                                        <input type="text" class="form-control" name="us[{{$lang->name}}]"
                                                               placeholder="Us" value="{{old('us.'.$lang->name,$data->getTranslation('us',$lang->name))}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>About</label>
                                                        <input type="text" class="form-control" name="about[{{$lang->name}}]"
                                                               placeholder="About" value="{{old('about.'.$lang->name,$data->getTranslation('about',$lang->name))}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Best seller</label>
                                                        <input type="text" class="form-control"
                                                               name="best_seller[{{$lang->name}}]" placeholder="Best seller"
                                                               value="{{old('best_seller.'.$lang->name,$data->getTranslation('best_seller',$lang->name))}}">

                                                    </div>
                                                </div>
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label>Special</label>
                                                        <input type="text" class="form-control"
                                                               name="special[{{$lang->name}}]"
                                                               placeholder="Special "
                                                               value="{{old('special.'.$lang->name,$data->getTranslation('special',$lang->name))}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Offer</label>
                                                        <input type="text" class="form-control"
                                                               name="offer[{{$lang->name}}]" placeholder="Offer"
                                                               value="{{old('offer.'.$lang->name,$data->getTranslation('offer',$lang->name))}}">
                                                               </div>
                                                    <div class="form-group">
                                                        <label>Days</label>
                                                        <input type="text" class="form-control"
                                                               name="days[{{$lang->name}}]" placeholder="Days"
                                                               value="{{old('days.'.$lang->name,$data->getTranslation('days',$lang->name))}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hours</label>
                                                        <input type="text" class="form-control"
                                                               name="hours[{{$lang->name}}]" placeholder="Hours"
                                                               value="{{old('hours.'.$lang->name,$data->getTranslation('hours',$lang->name))}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mins</label>
                                                        <input type="text" class="form-control"
                                                               name="mins[{{$lang->name}}]" placeholder="Hours"
                                                               value="{{old('mins.'.$lang->name,$data->getTranslation('mins',$lang->name))}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Secs</label>
                                                        <input type="text" class="form-control"
                                                               name="secs[{{$lang->name}}]" placeholder="Secs"
                                                               value="{{old('secs.'.$lang->name,$data->getTranslation('secs',$lang->name))}}">

                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>New</label>
                                                        <input type="text" class="form-control"
                                                               name="new[{{$lang->name}}]" placeholder="New"
                                                               value="{{old('new.'.$lang->name,$data->getTranslation('new',$lang->name))}}">
                                                               </div>
                                                    <div class="form-group">
                                                        <label>Customer</label>
                                                        <input type="text" class="form-control"
                                                               name="customer[{{$lang->name}}]" placeholder="Customer"
                                                               value="{{old('customer.'.$lang->name,$data->getTranslation('customer',$lang->name))}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>I am a</label>
                                                        <input type="text" class="form-control"
                                                               name="i_am_a[{{$lang->name}}]" placeholder="I am a"
                                                               value="{{old('i_am_a.'.$lang->name,$data->getTranslation('i_am_a',$lang->name))}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Full</label>
                                                        <input type="text" class="form-control"
                                                               name="full[{{$lang->name}}]" placeholder="Full"
                                                               value="{{old('full.'.$lang->name,$data->getTranslation('full',$lang->name))}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control"
                                                               name="name[{{$lang->name}}]" placeholder="Name"
                                                               value="{{old('name.'.$lang->name,$data->getTranslation('name',$lang->name))}}">
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

