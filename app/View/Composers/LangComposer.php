<?php

namespace App\View\Composers;

//use App\Repositories\UserRepository;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
class LangComposer
{
public function compose(View $view):void
{   $user_id=Auth::id();
    $cartItems =Cart::where('user_id',$user_id)->where('status', 0)->get();
    $totalPrice = 0;
    foreach ($cartItems as $cartItem) {
        $product = Product::find($cartItem->product_id);
        if ($product) {
            $totalPrice += $product->price * $cartItem->quantity;
        }
    }


    $lang=Lang::get();
    $categories=Category::with('children')->get();
    $cart=Cart::where('user_id',$user_id )->where('status', 0)->sum('quantity');
    $view->with('categories', $categories);
    $view->with('lang', $lang);
    $view->with('cart', $cart);
    $view->with('totalPrice', $totalPrice);
}
}
