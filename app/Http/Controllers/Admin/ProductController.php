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
    {try {
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

        try {
            if ($request->hasFile('img')) {
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
    }
}catch (\Exception $e) {
        $data->delete();
        throw new \Exception('Image upload failed: ' . $e->getMessage());
    }
        return redirect()->route('product.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
        } catch (\Exception $e) {
            return redirect()->route('product.index')->with('type', 'error')
                ->with('message', 'Yuklenme de xeta bas verdi: ' . $e->getMessage());
        }

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
    {   try {
        $request->validate([
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
        'img'=>'max:2048',

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

        try {
            if ($request->hasFile('img')) {
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
    }
}catch (\Exception $e) {
        $data->delete();
        throw new \Exception('Image upload failed: ' . $e->getMessage());
    }
        return redirect()->route('product.index')->with('type','success')
            ->with('message','Melumatlar ugurla yenilendi!');
        } catch (\Exception $e) {
            return redirect()->route('product.index')->with('type', 'error')
                ->with('message', 'Error occurred during update: ' . $e->getMessage());
        }
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
        return redirect()->route('product.index')->with('message','Melumatlar ugurla silindi')->with('type','success');
    }

    public function deleteimg($id){

        ProductImage::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function updateProduct(Request $request)
    {
        $id = $request->id;
        $isActive = $request->is_active == 'true' ? 1 : 0;

        // Update the database
        Product::where('id', $id)->update(['activ' => $isActive]);

        return response()->json(['message' => 'Status updated successfully']);
    }

    public function updateOffer(Request $request)
    {
        $id = $request->id;
        $isActive = $request->is_offer == 'true' ? 1 : 0;

        // Update the database
        Product::where('id', $id)->update(['offer' => $isActive]);

        return response()->json(['message' => 'Status updated successfully']);
    }
}