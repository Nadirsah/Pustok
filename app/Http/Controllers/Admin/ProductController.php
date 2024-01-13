<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    $item=Product::with('images')->get();
        return view('admin.product.index',compact('item',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $langs=Lang::all();
        $categories=Category::where('parent_id','!=',0)->get();
        return view('admin.product.create',compact('langs','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = new Product();
        $data->tags = $request->tags;
        $data->title = $request->title;
        $data->slug = Str::slug($data->getTranslation('title', app()->getLocale()), '-');
        $data->tax = $request->tax;
        $data->price = $request->price;
        $data->old_price = $request->old_price;
        $data->brand = $request->brand;
        $data->model = $request->model;
        $data->about = $request->about;
        $data->description = $request->description;
        $data->catgory_id = $request->subcategory;

        $data->save();


        foreach ($request->file('img') as $key => $image) {
            $fileModel = new ProductImage;
            $filename = time() . '-' . $image->getClientOriginalName();
            $filePath = $image->storeAs('uploads', $filename, 'public');
            $fileModel->image = time() . '-' . $image->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->is_main = $key === 0 ? 1 : 0;
            $fileModel->product_id =$data->id;
            $fileModel->save();
        }

        return redirect()->route('product.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   $data=Product::findOrFail($id);
        $langs=Lang::all();
        $images=ProductImage::where('product_id','=',$id)->get();
        $categories=Category::where('parent_id','!=',0)->get();
       return view('admin.product.edit',compact('data','langs','images','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {    $request->validate([
        'title.*' => 'required',
        'about.*' => 'required',
        'tags' => 'required',
        'tax' => 'required|integer',
        'price' => 'required|integer',
        'old_price' => 'required|integer',
        'brand' => 'required',
        'model' => 'required',
        'description.*' => 'required',
        'subcategory' => 'required',

    ]);
        $data = Product::findOrFail($id);
        $data->tags = $request->tags;
        $data->title = $request->title;
        $data->slug = Str::slug($data->getTranslation('title', app()->getLocale()), '-');
        $data->tax = $request->tax;
        $data->price = $request->price;
        $data->old_price = $request->old_price;
        $data->brand = $request->brand;
        $data->model = $request->model;
        $data->about = $request->about;
        $data->description = $request->description;
        $data->catgory_id = $request->subcategory;
        $data->save();
        foreach ($request->file('img') as $key => $image) {
            $fileModel = new ProductImage;
            $filename = time() . '-' . $image->getClientOriginalName();
            $filePath = $image->storeAs('uploads', $filename, 'public');
            $fileModel->image = time() . '-' . $image->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->is_main = $key === 0 ? 1 : 0;
            $fileModel->product_id =$data->id;
            $fileModel->save();
        }
        return redirect()->route('product.index')->with('type','success')
            ->with('message','Melumatlar ugurla yenilendi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
    public function delete($id)
    {
        $data = Product::findOrFail($id);

        foreach($data->images as $image){
            if(file_exists(public_path($image->file_path))){
                unlink(public_path($image->file_path));
            }
            $image->delete();
        }
         $data->delete();
        return redirect()->route('product.index')->with('message','File has been delete')->with('type','success');
    }

    public function deleteimg($id){

        ProductImage::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
