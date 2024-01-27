<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ActivController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Social;

class ShopController extends ActivController
{
    public function index(){
        $products=Product::where('activ','=',1)->with('images')->paginate(8);
        $social=Social::all();
        return view('front.shop',compact('products','social'));
    }
}
