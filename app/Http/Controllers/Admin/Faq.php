<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lang;
use App\Models\FaqModel;

class Faq extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=FaqModel::all();
        return view('admin.faq.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs=Lang::all();
        return view('admin.faq.create',compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {$request->validate([
        'name.*'=>'required|string',
        'description.*' => 'required|string'
    ]);
        $data=new FaqModel;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('faq.index')->with('type','success')
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
        $data=FaqModel::findOrFail($id);
        $langs=Lang::all();
        return view('admin.faq.edit',compact('data','langs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {$request->validate([
        'name.*'=>'required|string',
        'description.*' => 'required|string'
    ]);
        $data=FaqModel::findOrFail($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('faq.index')->with('type','success')
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

        FaqModel::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
