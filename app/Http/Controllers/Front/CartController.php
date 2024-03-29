<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{
  public function showcart(Request $request,$id){
      $offer=Product::where('offer','=',1)->with('images')->first();
     $data=Cart::where('user_id',$id)->where('status',0)->get();

      return view('front.cart',compact('data','offer'));
  }
  public function addcart(Request $request,$id){
      if(Auth::id()){
          $user_id=Auth::id();
          $productid=$id;

          $cartItem = Cart::where('user_id', $user_id)
              ->where('product_id', $productid)
              ->where('status', 0)
              ->first();

          if ($cartItem) {
              $cartItem->quantity += 1;
              $cartItem->save();
          } else {

              Cart::create([
                  'user_id' => $user_id,
                  'product_id' => $productid,
                  'quantity' => 1,
              ]);
      }
          return redirect()->route('home');
      }
      else{
          return redirect()->route('home');
      }
}


public function delete($id){
    Cart::find($id)->delete($id);

    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
}


   public function checkout(Request $request)
   {   $request->validate([
       'name'=>'required|string|max:30',
       'surname'=>'required|string|max:30',
       'company'=>'required|string|max:30',
       'country'=>'required|string|max:30',
       'adress'=>'required|string|max:30',
       'city'=>'required|string|max:30',
       'email' => 'required|email|string|max:30',
       'phone' => 'required|numeric',
       'zip_cod' => 'required|numeric',
       'status' => 'required'
   ]);

       $user_id=Auth::id();
       $cartItems =Cart::where('user_id',$user_id)->where('status', 0)->get();
       $totalPrice = 0;
       foreach ($cartItems as $cartItem) {
           $product = Product::find($cartItem->product_id);
           if ($product) {
               $totalPrice += $product->price * $cartItem->quantity;
           }
       }
      $data=new Checkout;
      $data->user_id=$user_id;
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
      $data->total=$totalPrice;
      $data->save();

       if(Auth::id()){
           $user_id=Auth::id();
           Cart::where('user_id',$user_id)->update(['status' => 1]);

       }
      return redirect()->route('order-complete', ['order_number' => $data->order_number]);
}
}