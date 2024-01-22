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
    <form action="{{route('trans_3.store')}}" method="POST" class="row" enctype="multipart/form-data">
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
                                                <label>City</label>
                                                <input type="text" class="form-control"
                                                    name="city[{{$lang->name}}]" placeholder="City"
                                                    value="{{old('city.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control" name="state[{{$lang->name}}]"
                                                    placeholder="state" value="{{old('state.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Zip code</label>
                                                <input type="text" class="form-control" name="zip_code[{{$lang->name}}]"
                                                    placeholder="Zip code" value="{{old('zip_code.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Condition</label>
                                                <input type="text" class="form-control" name="condition[{{$lang->name}}]"
                                                    placeholder="Condition" value="{{old('condition.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Place</label>
                                                <input type="text" class="form-control"
                                                    name="place[{{$lang->name}}]" placeholder="Place"
                                                    value="{{old('place.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Order</label>
                                                <input type="text" class="form-control"
                                                    name="order[{{$lang->name}}]" placeholder="Order"
                                                    value="{{old('order.'.$lang->name)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Thank</label>
                                                <input type="text" class="form-control"
                                                    name="thank[{{$lang->name}}]" placeholder="Thank"
                                                    value="{{old('thank.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>You</label>
                                                <input type="text" class="form-control"
                                                    name="you[{{$lang->name}}]" placeholder="You"
                                                    value="{{old('you.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Message for order</label>
                                                <input type="text" class="form-control" name="message_for_order[{{$lang->name}}]"
                                                    placeholder="Message for order" value="{{old('message_for_order.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Number</label>
                                                <input type="text" class="form-control"
                                                    name="number[{{$lang->name}}]" placeholder="Number"
                                                    value="{{old('number.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Total</label>
                                                <input type="text" class="form-control" name="total[{{$lang->name}}]"
                                                    placeholder="Total" value="{{old('total.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Details</label>
                                                <input type="text" class="form-control" name="details[{{$lang->name}}]"
                                                    placeholder="Details" value="{{old('details.'.$lang->name)}}">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Account</label>
                                                <input type="text" class="form-control"
                                                    name="account[{{$lang->name}}]" placeholder="Account"
                                                    value="{{old('account.'.$lang->name)}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Change</label>
                                                <input type="text" class="form-control"
                                                    name="change[{{$lang->name}}]" placeholder="Change"
                                                    value="{{old('change.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="description[{{$lang->name}}]"
                                                    placeholder="Description" value="{{old('description.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Dashboard</label>
                                                <input type="text" class="form-control" name="dashboard[{{$lang->name}}]"
                                                    placeholder="Dashboard" value="{{old('dashboard.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Sen msg</label>
                                                <input type="text" class="form-control" name="send_us_msg[{{$lang->name}}]"
                                                    placeholder="Sen msg" value="{{old('send_us_msg.'.$lang->name)}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Text</label>
                                                <input type="text" class="form-control" name="text[{{$lang->name}}]"
                                                    placeholder="Text" value="{{old('text.'.$lang->name)}}">
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