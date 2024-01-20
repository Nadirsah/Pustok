<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Translate1;
use App\Models\Lang;

class Translate1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Translate1::all();
        return view('admin.trans_1.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs=Lang::all();
        return view('admin.trans_1.create',compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Translate1;
        $data->enter_your_email = $request->enter_your_email;
        $data->subscribe = $request->subscribe;
        $data->stay_connected = $request->stay_connected;
        $data->us = $request->us;
        $data->about = $request->about;
        $data->best_seller = $request->best_seller;
        $data->special = $request->special;
        $data->offer = $request->offer;
        $data->days = $request->days;
        $data->hours = $request->hours;
        $data->mins = $request->mins;
        $data->secs = $request->secs;
        $data->new = $request->new;
        $data->customer = $request->customer;
        $data->i_am_a = $request->i_am_a;
        $data->full = $request->full;
        $data->name = $request->name;
        $data->save();

        return redirect()->route('trans_1.index')->with('type','success')
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
        $data=Translate1::findOrFail($id);
        $langs=Lang::all();
        return view('admin.trans_1.edit',compact('data','langs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Translate1::findOrFail($id);
        $data->enter_your_email = $request->enter_your_email;
        $data->subscribe = $request->subscribe;
        $data->stay_connected = $request->stay_connected;
        $data->us = $request->us;
        $data->about = $request->about;
        $data->best_seller = $request->best_seller;
        $data->special = $request->special;
        $data->offer = $request->offer;
        $data->days = $request->days;
        $data->hours = $request->hours;
        $data->mins = $request->mins;
        $data->secs = $request->secs;
        $data->new = $request->new;
        $data->customer = $request->customer;
        $data->i_am_a = $request->i_am_a;
        $data->full = $request->full;
        $data->name = $request->name;
        $data->save();

        return redirect()->route('trans_1.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function delete($id){

        TranslateHomeContent::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
