<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Translate2;
use App\Models\Lang;

class Translate2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Translate2::all();
        return view('admin.trans_2.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    $langs=Lang::all();
        return view('admin.trans_2.create',compact('langs'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Translate2;
        $data->password = $request->password;
        $data->returning = $request->returning;
        $data->image = $request->image;
        $data->product = $request->product;
        $data->price = $request->price;
        $data->total = $request->total;
        $data->quantity = $request->quantity;
        $data->cart_summary = $request->cart_summary;
        $data->sub = $request->sub;
        $data->grand = $request->grand;
        $data->checkout = $request->checkout;
        $data->billing = $request->billing;
        $data->first = $request->first;
        $data->last = $request->last;
        $data->company = $request->company;
        $data->country = $request->country;
        $data->no = $request->no;
        $data->save();

        return redirect()->route('trans_2.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Translate2::findOrFail($id);
        $langs=Lang::all();
       return view('admin.trans_2.edit',compact('data','langs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Translate2::findOrFail($id);
        $data->password = $request->password;
        $data->returning = $request->returning;
        $data->image = $request->image;
        $data->product = $request->product;
        $data->price = $request->price;
        $data->total = $request->total;
        $data->quantity = $request->quantity;
        $data->cart_summary = $request->cart_summary;
        $data->sub = $request->sub;
        $data->grand = $request->grand;
        $data->checkout = $request->checkout;
        $data->billing = $request->billing;
        $data->first = $request->first;
        $data->last = $request->last;
        $data->company = $request->company;
        $data->country = $request->country;
        $data->no = $request->no;
        $data->save();

        return redirect()->route('trans_2.index')->with('type','success')
            ->with('message','Melumatlar ugurla yenilendi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete($id){

        Translate2::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
