<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        {
            // Check if the user is authenticated and is an admin
            if (Auth::check() && Auth::user()->user_Type == 'admin') {
                return $next($request);
            }
    
            // If not admin, redirect to the home page
            return redirect()->route('home');
        }
    }
}