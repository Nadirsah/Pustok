<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TranslateHomeContent;
use App\Models\Lang;

class TransContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=TranslateHomeContent::all();
        return view('admin.trans_content.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs=Lang::all();
        return view('admin.trans_content.create',compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new TranslateHomeContent;
        $data->best_seller = $request->best_seller;
        $data->feature_products = $request->feature_products;
        $data->new_arrivals = $request->new_arrivals;
        $data->most_view_products = $request->most_view_products;
        $data->special_offer = $request->special_offer;
        $data->arts_photography = $request->arts_photography;
        $data->childrens_books = $request->childrens_books;
        $data->biographies = $request->biographies;
        $data->days = $request->days;
        $data->hours = $request->hours;
        $data->mins = $request->mins;
        $data->secs = $request->secs;
        $data->save();

        return redirect()->route('trans_content.index')->with('type','success')
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
