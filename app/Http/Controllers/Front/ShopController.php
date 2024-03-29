<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ActivController;
use App\Http\Controllers\Controller;
use App\Models\Category;
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

    public function kat_shop($id){

        $data=Product::where('catgory_id','=',$id)->where('activ','=',1)->get();
        $social=Social::all();
        return view('front.kat_shop',compact('data','social'));
    }
}
