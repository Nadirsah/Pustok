<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ActivController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_msj;
use Illuminate\Support\Facades\Auth;


class ContactController extends ActivController
{
    public function index(){
        return view ('front.contact');
    }

    public function store(Request $request){
        if(Auth::id()){
            $user_id=Auth::id();
            $request->validate([
            'name'=>'required|string|max:30',
            'email' => 'required|email|string|max:30',
            'phone' => 'required|numeric',
            'message' => 'required|string|max:255'
        ]);
            $data=new User_msj;
            $data->user_id=$user_id;
            $data->name=$request->name;
            $data->email=$request->email;
            $data->phone=$request->phone;
            $data->message=$request->message;
            $data->name=$request->name;
            $data->name=$request->name;
            $data->status=0;
    
            $data->save();
            return redirect('/');
    }
    else{
        return redirect()->route('log-res');
    }
}
}
