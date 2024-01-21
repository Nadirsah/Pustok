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
    <form action="{{route('trans_3.update',$data->id)}}" method="POST" class="row" enctype="multipart/form-data">
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
                                                <label>City</label>
                                                <input type="text" class="form-control"
                                                    name="city[{{$lang->name}}]" placeholder="City"
                                                    value="{{old('city.'.$lang->name,$data->getTranslation('city',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control" name="state[{{$lang->name}}]"
                                                    placeholder="state" value="{{old('state.'.$lang->name,$data->getTranslation('state',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Zip code</label>
                                                <input type="text" class="form-control" name="zip_code[{{$lang->name}}]"
                                                    placeholder="Zip code" value="{{old('zip_code.'.$lang->name,$data->getTranslation('zip_code',$lang->name))}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Condition</label>
                                                <input type="text" class="form-control" name="condition[{{$lang->name}}]"
                                                    placeholder="Condition" value="{{old('condition.'.$lang->name,$data->getTranslation('condition',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Place</label>
                                                <input type="text" class="form-control"
                                                    name="place[{{$lang->name}}]" placeholder="Place"
                                                    value="{{old('place.'.$lang->name,$data->getTranslation('place',$lang->name))}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Order</label>
                                                <input type="text" class="form-control"
                                                    name="order[{{$lang->name}}]" placeholder="Order"
                                                    value="{{old('order.'.$lang->name,$data->getTranslation('order',$lang->name))}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Thank</label>
                                                <input type="text" class="form-control"
                                                    name="thank[{{$lang->name}}]" placeholder="Thank"
                                                    value="{{old('thank.'.$lang->name,$data->getTranslation('thank',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>You</label>
                                                <input type="text" class="form-control"
                                                    name="you[{{$lang->name}}]" placeholder="You"
                                                    value="{{old('you.'.$lang->name,$data->getTranslation('you',$lang->name))}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Message for order</label>
                                                <input type="text" class="form-control" name="message_for_order[{{$lang->name}}]"
                                                    placeholder="Message for order" value="{{old('message_for_order.'.$lang->name,$data->getTranslation('message_for_order',$lang->name))}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Number</label>
                                                <input type="text" class="form-control"
                                                    name="number[{{$lang->name}}]" placeholder="Number"
                                                    value="{{old('number.'.$lang->name,$data->getTranslation('number',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Total</label>
                                                <input type="text" class="form-control" name="total[{{$lang->name}}]"
                                                    placeholder="Total" value="{{old('total.'.$lang->name,$data->getTranslation('total',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Details</label>
                                                <input type="text" class="form-control" name="details[{{$lang->name}}]"
                                                    placeholder="Details" value="{{old('details.'.$lang->name,$data->getTranslation('details',$lang->name))}}">

                                            </div>
                                         </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="description[{{$lang->name}}]"
                                                    placeholder="Description" value="{{old('description.'.$lang->name,$data->getTranslation('description',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Dashboard</label>
                                                <input type="text" class="form-control" name="dashboard[{{$lang->name}}]"
                                                    placeholder="Dashboard" value="{{old('dashboard.'.$lang->name,$data->getTranslation('dashboard',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Account</label>
                                                <input type="text" class="form-control"
                                                    name="account[{{$lang->name}}]" placeholder="Account"
                                                    value="{{old('account.'.$lang->name,$data->getTranslation('account',$lang->name))}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Change</label>
                                                <input type="text" class="form-control"
                                                    name="change[{{$lang->name}}]" placeholder="Change"
                                                    value="{{old('change.'.$lang->name,$data->getTranslation('change',$lang->name))}}">
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