<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Translate3;
use App\Models\Lang;

class Translate3Controller extends Controller
{
    public function index()
    {
        $data=Translate3::all();
        return view('admin.trans_3.index',compact('data'));
    }

    public function create()
    {
        $langs=Lang::all();
        return view('admin.trans_3.create',compact('langs'));
    }

    public function store(Request $request)
    {
        $data=new Translate3;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zip_code = $request->zip_code;
        $data->condition = $request->condition;
        $data->place = $request->place;
        $data->order = $request->order;
        $data->thank = $request->thank;
        $data->you = $request->you;
        $data->message_for_order = $request->message_for_order;
        $data->number = $request->number;
        $data->total = $request->total;
        $data->details = $request->details;
        $data->description = $request->description;
        $data->dashboard = $request->dashboard;
        $data->account = $request->account;
        $data->change = $request->change;
        $data->send_us_msg = $request->send_us_msg;
        $data->text = $request->text;
        $data->save();

        return redirect()->route('trans_3.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
    }

    public function edit(string $id)
    {
        $data=Translate3::findOrFail($id);
        $langs=Lang::all();
        return view('admin.trans_3.edit',compact('data','langs'));
    }

    public function update(Request $request, string $id)
    {
        $data=Translate3::findOrFail($id);
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zip_code = $request->zip_code;
        $data->condition = $request->condition;
        $data->place = $request->place;
        $data->order = $request->order;
        $data->thank = $request->thank;
        $data->you = $request->you;
        $data->message_for_order = $request->message_for_order;
        $data->number = $request->number;
        $data->total = $request->total;
        $data->details = $request->details;
        $data->description = $request->description;
        $data->dashboard = $request->dashboard;
        $data->account = $request->account;
        $data->change = $request->change;
        $data->send_us_msg = $request->send_us_msg;
        $data->text = $request->text;
        $data->update();

        return redirect()->route('trans_3.index')->with('type','success')
            ->with('message','Melumatlar ugurla yuklendi!');
    }
}
