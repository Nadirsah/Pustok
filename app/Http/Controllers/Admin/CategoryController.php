<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $item=Category::all();
        return view('admin.category.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs=Lang::all();
        $data=Category::where('parent_id',0)->get();
        return view('admin.category.create',compact('langs','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {$request->validate([
        'name.*'=>'required',
        'parent_id' => 'sometimes|nullable|numeric'
    ]);
        $data=new Category;
        $data->name=$request->name;
        $data->slug = Str::slug($data->getTranslation('name', app()->getLocale()), '-');
        $data->parent_id=$request->parent_id;

        $data->save();
        return redirect()->route('category.index')->with('message','Melumatlar ugurla yuklendi!');

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
    {   $langs=Lang::all();
        $data=Category::findOrFail($id);
        $categories = Category::where('parent_id', 0)->where('id', '!=', $data->id)->orderby('name', 'asc')->get();
        return  view('admin.category.edit',compact('langs','data','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {$request->validate([
        'name.*'=>'required',
        'parent_id' => 'sometimes|nullable|numeric'
    ]);
            $data=Category::findOrFail($id);
            $data->name=$request->name;
            $data->slug = Str::slug($data->getTranslation('name', app()->getLocale()), '-');
            $data->parent_id=$request->parent_id;

            $data->save();
            return redirect()->route('category.index')->with('message','Melumatlar ugurla yuklendi!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('type','success')
            ->with('message','Melumatlar ugurla silindi!');
//        if ($category) {
//            // Eğer alt kategoriler varsa, onları da sil
//            $category->getCategory()->delete();
//
//            // Kategori silme işlemi
//            $category->delete();
//
//            return redirect()->route('category.index')->with('type','success')
//                ->with('message','Melumatlar ugurla silindi!');
//        } else {
//            return "Kategori bulunamadı";
//        }


    }
}
