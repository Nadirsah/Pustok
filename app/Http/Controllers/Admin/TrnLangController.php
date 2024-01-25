<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\TranslationLoader\LanguageLine;
use App\Models\Lang;

class TrnLangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data=LanguageLine::all();

        return view('admin.translate.index',compact('data',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $langs=Lang::all();
        return view('admin.translate.create',compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new LanguageLine;
        $data->group = $request->group;
        $data->key = $request->key;
        $data->text = $request->text;

        $data->save();

        return redirect()->route('translate.create')->with('type','success')
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
        $data=LanguageLine::findOrFail($id);
        $translations = $data->text;
        $langs=Lang::all();

        return view('admin.translate.edit',compact('data','translations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {$request->validate([
        'text.*' => 'required',
        'group' => 'required',
        'key' => 'required',
    ]);
        $data=LanguageLine::findOrFail($id);
        $data->group = $request->group;
        $data->key = $request->key;
        $data->text = $request->text;
        $data->save();

        return redirect()->route('translate.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
