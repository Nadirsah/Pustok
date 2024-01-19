<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class OrderCompleteController extends Controller
{
    public function index($order_number){

           $data=Checkout::where('order_number',$order_number)->first();
        return view('front.order-complete',compact('data'));
    }
}
