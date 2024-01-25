@extends('layouts.front')
@section('css')
@endsection
@section('sidebar')
    @include('layouts.front.sidebar')
@endsection
@section('content')
    @include('layouts.front.activ-menu')
    <main class="contact_area inner-page-sec-padding-bottom">
        <div class="container">

            <div class="row ">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="contact_adress">
                        <div class="ct_address">
                            <h3 class="ct_title">{{__('letter.information')}}</h3>

                        </div>
                        <div class="address_wrapper">
                            <div class="address">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>{{__('contakt.address')}}:</span> 1234 - Bandit Tringi lAliquam <br> Vitae. New York</p>
                                </div>
                            </div>
                            <div class="address">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>{{__('contakt.email')}}: </span> support@example.com </p>
                                </div>
                            </div>
                            <div class="address">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>{{__('contakt.phone')}}:</span> (800) 0123 456 789 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
                    <div class="contact_form">
                        <h3 class="ct_title">{{__('contakt.send_us_msg')}}</h3>
                        <form  action="{{route('msj_contact')}}" method="Post" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{__('letter.name')}} <span class="required">*</span></label>
                                        <input type="text" id="con_name" name="name" class="form-control" value="{{old('name')}}">
                                               <span class="text-danger">@error('name'){{'Ad sahəsi boş ola bilməz!'}}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{__('contakt.email')}}<span class="required">*</span></label>
                                        <input type="email" id="con_email" name="email" class="form-control" value="{{old('email')}}">
                                        <span class="text-danger">@error('email'){{'Email sahəsi boş ola bilməz!'}}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{__('contakt.phone')}}*</label>
                                        <input type="text" id="con_phone" name="phone" class="form-control" value="{{old('phone')}}">
                                        <span class="text-danger">@error('phone'){{'Telefon sahəsi boş ola bilməz!'}}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{__('letter.message')}}<span class="required">*</span></label>
                                        <textarea id="con_message" name="message"
                                                  class="form-control">{{old('message')}}</textarea>
                                                  <span class="text-danger">@error('message'){{'Mesaj sahəsi boş ola bilməz!'}}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-btn">
                                        <button type="submit"  id="submit" class="btn btn-black"
                                                >Gonder</button>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
@endsection
