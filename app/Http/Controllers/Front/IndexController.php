<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ActivController;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\DataService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends ActivController
{


    public function index(){

        return view('front.home.index');
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