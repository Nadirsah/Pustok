<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function index($id){
        $user_id=Auth::id();
        $data=Checkout::where('user_id',$id)->first();
        $order=Cart::where('user_id',$user_id)->where('status','=',1)->with('get_products')->get();
        $address=Checkout::where('user_id',$user_id)->first();
        return view('front.my-account',compact('data','order','address'));
    }
}