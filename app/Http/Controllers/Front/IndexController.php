<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ActivController;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Cart;
use App\Services\DataService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends ActivController
{


    public function index(){
        $products=Product::with('images')->get();
        $best_product=Cart::where('quantity','>',2)->with('get_products')->get();
        return view('front.home.index',compact('products','best_product'));
    }

    public function redirects(){

        $usertype=Auth::user()->user_Type;
        if($usertype=='admin')
        {
            return view('admin.index');
        }
        else{
            return view('front.home.index');
        }
    }
}
