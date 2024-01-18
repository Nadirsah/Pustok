<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function showcart(Request $request,$id){

$data=Cart::where('user_id',$id)->join('products','carts.product_id','=','products.id')
    ->join('product_images', 'products.id', '=', 'product_images.product_id')
    ->select('carts.*', 'products.*', 'product_images.file_path as image_path')
    ->where('product_images.is_main', 1)
    ->get();
      return view('front.cart',compact('data'));
  }
  public function addcart(Request $request,$id){
      if(Auth::id()){
          $user_id=Auth::id();
          $productid=$id;

          $cart=new Cart;
          $cart->user_id=$user_id;
          $cart->product_id=$productid;
          $cart->save();
          return redirect()->route('showcart');
      }
      else{
          return redirect()->route('home');
      }
}


public function delete($id){
    $card = Card::find($id);

    if ($card) {
        $card->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    } else {
        return response()->json([
            'error' => 'Record not found!'
        ], 404);
    }
}
}
