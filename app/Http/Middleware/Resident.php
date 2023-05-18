<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Resident
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect()->route('welcome');
        }

        if(auth()->user()->role == '3'){
            return $next($request);
        }

        if(auth()->user()->role == '1'){
            return redirect()->route('sub-admin');
        }

        if(auth()->user()->role == '2'){
            return redirect()->route('bhw');
        }

        if(auth()->user()->role == '0'){
            return redirect()->route('admin');
        }

        if(auth()->user()->role == '4'){
            return redirect()->route('company');
        }

        if(auth()->user()->role == '5'){
            return redirect()->route('for-approval');
        }
    }
}
