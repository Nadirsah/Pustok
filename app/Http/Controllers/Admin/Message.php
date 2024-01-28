<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_msj;

class Message extends Controller
{
    public function index(){
        $data=User_msj::all();
        return view('admin.message.index',compact('data'));
    }

    public function updateMessage(Request $request)
    {
        $id = $request->id;
        $isActive = $request->is_active == 'true' ? 1 : 0;

        // Update the database
        User_msj::where('id', $id)->update(['status' => $isActive]);

        return response()->json(['message' => 'Status updated successfully']);
    }
}