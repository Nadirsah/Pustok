<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ActivController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends ActivController
{
    public function index(){
        return view('front.shop');
    }
}
