<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data=Setting::first();
        return view('admin.setting.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Setting();
        $data->phone_1 = $request->phone_1;
        $data->phone_2 = $request->phone_2;
        $data->adress = $request->adress;
        $data->email = $request->email;
        $data->activ = $request->activ;
            $filename = time() . '-' . $request->file('logo')->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads', $filename, 'public');
            $data->logo = time() . '-' . $request->file('logo')->getClientOriginalName();
            $data->file_path = '/storage/' . $filePath;
            $data->save();
       

        return redirect()->route('setting.index')->with('type','success')
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
        $data=Setting::findOrFail($id);
       return view('admin.setting.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Setting::findOrFail($id);
        $data->phone_1 = $request->phone_1;
        $data->phone_2 = $request->phone_2;
        $data->adress = $request->adress;
        $data->email = $request->email;
        $data->activ = $request->activ;
            $filename = time() . '-' . $request->file('logo')->getClientOriginalName();
            $filePath = $request->file('logo')->storeAs('uploads', $filename, 'public');
            $data->logo = time() . '-' . $request->file('logo')->getClientOriginalName();
            $data->file_path = '/storage/' . $filePath;
            $data->save();
       

        return redirect()->route('setting.index')->with('type','success')
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