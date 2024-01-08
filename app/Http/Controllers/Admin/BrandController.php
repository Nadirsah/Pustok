<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $items=Brand::all();
        return view('admin.brand.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        foreach ($request->file('img') as $key => $image) {
            $fileModel = new Brand;
            $filename = time() . '-' . $image->getClientOriginalName();
            $filePath = $image->storeAs('uploads', $filename, 'public');
            $fileModel->brand = time() . '-' . $image->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
        }

        return redirect()->route('brand.index')->with('type','success')
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
        $data=Brand::findOrFail($id);
        return view('admin.brand.edit',compact('data',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

            $fileModel=Brand::findOrFail($id);
            $file_path = $fileModel->file_path;
            $brand = $fileModel->brand;
            $userId = auth()->id();
            $disk = 'public';
        if ($request->hasFile('img') && $request->file('img')) {
            Storage::delete($file_path);
            $logo_extension = $request->file('img')->getClientOriginalExtension();
            $logo_filename = "{$userId}-logo-".time().'.'.$logo_extension;
            $brand = time() . '-' . $request->file('img')->getClientOriginalName();
            $file_path = $request->file('img')->storeAs('uploads', $logo_filename, 'public');

        }
        $fileModel->file_path = '/storage/' .$file_path;
        $fileModel->brand = $brand;
        $fileModel->update();

        return redirect()->route('brand.index')->with('type','success')
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

        Brand::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
