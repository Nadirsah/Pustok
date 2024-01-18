<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{
  public function showcart(Request $request,$id){

     $data=Cart::where('user_id',$id)->get();

      return view('front.cart',compact('data',));
  }
  public function addcart(Request $request,$id){
      if(Auth::id()){
          $user_id=Auth::id();
          $productid=$id;

          $cart=new Cart;
          $cart->user_id=$user_id;
          $cart->product_id=$productid;
          $cart->save();
          return redirect()->route('home');
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


public function checkout(Request $request){

      $data=new Checkout;
      $data->name=$request->name;
      $data->surname=$request->surname;
      $data->company=$request->company;
      $data->country=$request->country;
      $data->email=$request->email;
      $data->phone=$request->phone;
      $data->adress=$request->adress;
      $data->city=$request->city;
      $data->zip_cod=$request->zip_cod;
      $data->status=$request->status;
      $data->order_number=rand(1,100);
      $data->save();



      return redirect()->route('home');
}
}
