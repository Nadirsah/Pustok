@extends('layouts.front')
@section('css')
@endsection
@section('sidebar')
    @include('layouts.front.sidebar')
@endsection
@section('content')
    @include('layouts.front.activ-menu')
    <section class="order-complete inner-page-sec-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="order-complete-message text-center">
                        <h1>{{__('letter.thank')}} !</h1>
                        <p>{{__('cart.message_for_order')}}.</p>
                    </div>
                    <ul class="order-details-list">
                        <li>{{__('letter.order')}} {{__('letter.no')}}: <strong>{{$data->order_number}}</strong></li>
                        <li>{{__('letter.date')}}: <strong>{{$data->created_at}}</strong></li>
                        <li>{{__('cart.total')}}: <strong>{{$data->total}} azn</strong></li>

                    </ul>

                   
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection

