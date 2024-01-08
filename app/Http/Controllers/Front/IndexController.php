<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ActivController;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\DataService;
use Illuminate\Http\Request;

class IndexController extends ActivController
{


    public function index(){

        return view('front.home.index');
    }
}
