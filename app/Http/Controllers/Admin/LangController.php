<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lang;
use Illuminate\Http\Request;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    $langs=Lang::all();
        return view('admin.lang.index',compact('langs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $data=new Lang();
            $data->name=$request->name;
            $data->save();
            return response()->json(['status'=>1,'msg'=>'Elave olundu', 'redirect' => route('lang.index')]);
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
        $data=Lang::findOrFail($id);
        return view('admin.lang.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Lang::findOrFail($id);
        $data->name=$request->name;
        $data->save();
        return response()->json(['status'=>1,'msg'=>'Elave olundu', 'redirect' => route('lang.index')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
    public function delete($id){
   
        Lang::find($id)->delete($id);
      
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}