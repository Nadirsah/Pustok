<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($id){
         $data=Product::findOrFail($id);
        return view('front.product-detail',compact('data'));
    }
}
