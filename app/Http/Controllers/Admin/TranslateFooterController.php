<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TranslateHomeFooter;
use App\Models\Lang;

class TranslateFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=TranslateHomeFooter::all();
        return view('admin.trans_footer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    $langs=Lang::all();
        return view('admin.trans_footer.create',compact('langs'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new TranslateHomeFooter;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->information = $request->information;
        $data->extras = $request->extras;
        $data->newsletter_subscribe = $request->newsletter_subscribe;
        $data->enter_your_email = $request->enter_your_email;
        $data->subscribe = $request->subscribe;
        $data->stay_connected = $request->stay_connected;
        $data->save();

        return redirect()->route('trans_footer.index')->with('type','success')
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
        $data=TranslateHomeFooter::findOrFail($id);
        $langs=Lang::all();
       return view('admin.trans_footer.edit',compact('data','langs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=TranslateHomeFooter::findOrFail($id);
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->information = $request->information;
        $data->extras = $request->extras;
        $data->newsletter_subscribe = $request->newsletter_subscribe;
        $data->enter_your_email = $request->enter_your_email;
        $data->subscribe = $request->subscribe;
        $data->stay_connected = $request->stay_connected;
        $data->save();

        return redirect()->route('trans_footer.index')->with('type','success')
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
   
        TranslateHomeFooter::find($id)->delete($id);
      
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
