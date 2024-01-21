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
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div id="google-map"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row ">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="contact_adress">
                        <div class="ct_address">
                            <h3 class="ct_title">Location </h3>

                        </div>
                        <div class="address_wrapper">
                            <div class="address">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>{{$trans->address}}:</span> 1234 - Bandit Tringi lAliquam <br> Vitae. New York</p>
                                </div>
                            </div>
                            <div class="address">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>{{$trans->email}}: </span> support@example.com </p>
                                </div>
                            </div>
                            <div class="address">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>{{$trans->phone}}:</span> (800) 0123 456 789 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
                    <div class="contact_form">
                        <h3 class="ct_title">Send Us a Message</h3>
                        <form id="contact-form" action="php/mail.php" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{$trans1->name}} <span class="required">*</span></label>
                                        <input type="text" id="con_name" name="con_name" class="form-control"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{$trans->email}}<span class="required">*</span></label>
                                        <input type="email" id="con_email" name="con_email" class="form-control"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>{{$trans->phone}}*</label>
                                        <input type="text" id="con_phone" name="con_phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea id="con_message" name="con_message"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-btn">
                                        <button type="submit" value="submit" id="submit" class="btn btn-black"
                                                name="submit">send</button>
                                    </div>
                                    <div class="form__output"></div>
                                </div>
                            </div>
                        </form>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
@endsection
