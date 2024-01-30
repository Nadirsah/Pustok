<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lang;
use App\Models\SlideModel;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Facades\Storage;


class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item=SlideModel::all();
        return view('admin.slide.index',compact('item',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs=Lang::all();
        return view('admin.slide.create',compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = new SlideModel();
        $data->title = $request->title;
        $data->name = $request->name;
       
        foreach ($request->file('img') as $key => $image) {
            $filename = time() . '-' . $image->getClientOriginalName();
            $filePath = $image->storeAs('uploads', $filename, 'public');
            $data->img = time() . '-' . $image->getClientOriginalName();
            $data->file_path = '/storage/' . $filePath;
        }
        $data->save();

        return redirect()->route('slide.index')->with('type','success')
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
       
            $data=SlideModel::findOrFail($id);
            $langs=Lang::all();
           return view('admin.slide.edit',compact('data','langs'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=SlideModel::findOrFail($id);
        $data->title = $request->title;
        $data->name = $request->name;
       
        if ($request->hasFile('img') && $request->file('img')) {
            Storage::delete($file_path);
            $filename = time() . '-' . $request->hasFile('img')->getClientOriginalName();
            $filePath =$request->hasFile('img')->storeAs('uploads', $filename, 'public');
            $data->image = time() . '-' . $request->hasFile('img')->getClientOriginalName();
            $data->file_path = '/storage/' . $filePath;
        }
        $data->save();

        return redirect()->route('slide.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function delete($id){

        SlideModel::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}