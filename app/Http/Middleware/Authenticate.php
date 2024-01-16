<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {  if ( !Auth::check() && (Auth::user()->user_Type !='admin')) {
        return $request->expectsJson() ? null : route('home');
        
       
    }else{
        return $request->redirecto($request) ;
    }
       
    }
}