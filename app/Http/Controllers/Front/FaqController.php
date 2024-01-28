<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Social;
use App\Models\FaqModel;

class FaqController extends Controller
{
    public function index(){
        $categories=Category::all();
        $social=Social::all();
        $data=FaqModel::all();

        return view ('front.faq',compact('categories','data','social'));
    }
}
