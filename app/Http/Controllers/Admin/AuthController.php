<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $option=$request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        $option['is_active']=1;
        if(Auth::attempt($option)){
            $request->session()->regenerate();

            if (Auth::user()->user_Type=='admin') {
            return redirect()->intended('admin/dashboard');
        } else {
            return redirect()->intended('/'); // Redirect regular users to the home page or any other default page
        }
        }
        return back()->withErrors([
            'email'=>'Melumatlar duzgun doldurulmayib'
        ])->onlyInput('email');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
