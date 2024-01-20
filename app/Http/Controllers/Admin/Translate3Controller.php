<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Translate3;
use App\Models\Lang;

class Translate3Controller extends Controller
{
    public function index()
    {
        $data=Translate3::all();
        return view('admin.trans_3.index',compact('data'));
    }

    public function create()
    {
        $langs=Lang::all();
        return view('admin.trans_3.create',compact('langs'));
    }

    public function store(Request $request)
    {
        $data=new Translate3;
        $data->shopping_cart = $request->shopping_cart;
        $data->image = $request->image;
        $data->product = $request->product;
        $data->price = $request->price;
        $data->total = $request->total;
        $data->cart_summary = $request->cart_summary;
        $data->sub_total = $request->sub_total;
        $data->shipping_cost = $request->shipping_cost;
        $data->grand_total = $request->grand_total;
        $data->checkout = $request->checkout;
        $data->save();

        return redirect()->route('trans_3.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
    }

    public function edit(string $id)
    {
        $data=Translate3::findOrFail($id);
        $langs=Lang::all();
        return view('admin.trans_3.edit',compact('data','langs'));
    }

    public function update(Request $request, string $id)
    {
        $data=Translate3::findOrFail($id);
        $data->shopping_cart = $request->shopping_cart;
        $data->image = $request->image;
        $data->product = $request->product;
        $data->price = $request->price;
        $data->total = $request->total;
        $data->cart_summary = $request->cart_summary;
        $data->sub_total = $request->sub_total;
        $data->shipping_cost = $request->shipping_cost;
        $data->grand_total = $request->grand_total;
        $data->checkout = $request->checkout;
        $data->update();

        return redirect()->route('trans_3.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
    }
}
