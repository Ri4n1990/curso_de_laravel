<?php

namespace App\Http\Middleware ;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Autenticacao{


public function handle(Request $request , Closure $next ):Response {
    
    if (Auth::attempt(['email' => 'rian@email.com', 'password' => '123456'])) {
            $request->session()->regenerate();
 
            return $next($request);
        }
 
        return back();

}

}