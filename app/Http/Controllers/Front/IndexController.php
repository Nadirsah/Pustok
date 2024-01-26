<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ActivController;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Cart;
use App\Models\SlideModel;
use App\Services\DataService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends ActivController
{


    public function index(){
        $slide=SlideModel::all();
        $products=Product::with('images')->get();
        $best_product=Cart::where('quantity','>',2)->with('get_products')->get();
        return view('front.home.index',compact('products','best_product','slide'));
    }

    public function redirects(){

        $usertype=Auth::user()->user_Type;
        if($usertype=='admin')
        {
            return redirect()->route('dashboard');
        }
        else{
            return redirect('/');
        }
    }
}
