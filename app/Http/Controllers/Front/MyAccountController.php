<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;

class MyAccountController extends Controller
{
    public function index($id){
        $data=Checkout::where('user_id',$id)->first();
        return view('front.my-account',compact('data'));
    }
}
