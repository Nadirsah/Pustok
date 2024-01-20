<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Translate;
use App\Models\Lang;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data=Translate::all();
        return view('admin.trans.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {$langs=Lang::all();
        return view('admin.trans.create',compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Translate;
        $data->placeholder = $request->placeholder;
        $data->search_button = $request->search_button;
        $data->login = $request->login;
        $data->or = $request->or;
        $data->register = $request->register;
        $data->shopping_cart = $request->shopping_cart;
        $data->browse_category = $request->browse_category;
        $data->free_support = $request->free_support;
        $data->home = $request->home;
        $data->shop = $request->shop;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->information = $request->information;
        $data->extras = $request->extras;
        $data->newsletter_subscribe = $request->newsletter_subscribe;
        $data->save();

        return redirect()->route('trans.index')->with('type','success')
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
        $data=Translate::findOrFail($id);
        $langs=Lang::all();
       return view('admin.trans.edit',compact('data','langs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Translate::findOrFail($id);
        $data->placeholder = $request->placeholder;
        $data->search_button = $request->search_button;
        $data->login = $request->login;
        $data->or = $request->or;
        $data->register = $request->register;
        $data->shopping_cart = $request->shopping_cart;
        $data->browse_category = $request->browse_category;
        $data->free_support = $request->free_support;
        $data->home = $request->home;
        $data->shop = $request->shop;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->information = $request->information;
        $data->extras = $request->extras;
        $data->newsletter_subscribe = $request->newsletter_subscribe;
        $data->save();

        return redirect()->route('trans.index')->with('type','success')
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

        Translate1::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
