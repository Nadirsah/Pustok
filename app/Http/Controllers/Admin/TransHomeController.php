<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TranslateHome;
use App\Models\Lang;
use Illuminate\Http\Request;

class TransHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data=TranslateHome::all();
        return view('admin.trans_home.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {$langs=Lang::all();
        return view('admin.trans_home.create',compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new TranslateHome;
        $data->placeholder = $request->placeholder;
        $data->search_button = $request->search_button;
        $data->login = $request->login;
        $data->or = $request->or;
        $data->register = $request->register;
        $data->shopping_cart = $request->shopping_cart;
        $data->browse_category = $request->browse_category;
        $data->free_support = $request->free_support;
        $data->view_cart = $request->view_cart;
        $data->save();

        return redirect()->route('trans_home.index')->with('type','success')
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
        $data=TranslateHome::findOrFail($id);
        $langs=Lang::all();
       return view('admin.trans_home.edit',compact('data','langs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $data=TranslateHome::findOrFail($id);
        $data->placeholder = $request->placeholder;
        $data->search_button = $request->search_button;
        $data->login = $request->login;
        $data->or = $request->or;
        $data->register = $request->register;
        $data->shopping_cart = $request->shopping_cart;
        $data->browse_category = $request->browse_category;
        $data->free_support = $request->free_support;
        $data->view_cart = $request->view_cart;
        $data->save();

        return redirect()->route('trans_home.index')->with('type','success')
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
   
        TranslateHome::find($id)->delete($id);
      
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}