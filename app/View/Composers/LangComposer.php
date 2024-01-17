<?php

namespace App\View\Composers;

//use App\Repositories\UserRepository;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Product;
use App\Models\TranslateHome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
class LangComposer
{
public function compose(View $view):void
{   $user_id=Auth::id();
    $product_id=Cart::where('user_id',$user_id)->pluck('product_id')->toArray();
    $transhome=TranslateHome::first();
    $lang=Lang::get();
    $categories=Category::with('children')->get();
    $cart=Cart::where('user_id',$user_id)->count();
    if (!empty($product_id)) {
    $cartsum=Product::whereIn('id',$product_id)->sum('price');
    } else {
        $cartsum = 0;
    }
    $view->with('categories', $categories);
    $view->with('lang', $lang);
    $view->with('transhome', $transhome);
    $view->with('cart', $cart);
    $view->with('cartsum', $cartsum);
}
}
