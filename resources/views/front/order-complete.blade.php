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
                        <h1>{{$trans3->thank}} !</h1>
                        <p>{{$trans3->message_for_order}}.</p>
                    </div>
                    <ul class="order-details-list">
                        <li>{{$trans3->order}} {{$trans2->no}}: <strong>{{$data->order_number}}</strong></li>
                        <li>Date: <strong>{{$data->created_at}}</strong></li>
                        <li>{{$trans2->total}}: <strong>{{$data->total}}</strong></li>

                    </ul>

                    <h3 class="order-table-title">{{$trans3->order}} {{$trans3->details}}</h3>
                    <div class="table-responsive">
                        <table class="table order-details-table">
                            <thead>
                            <tr>
                                <th>{{$trans2->product}}</th>
                                <th>{{$trans2->total}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="single-product.html">Vans Off The Wall T-Shirt In</a> <strong>× 1</strong></td>
                                <td><span>$59.00</span></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{$trans2->total}}:</th>
                                <td><span>$117.00</span></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection

