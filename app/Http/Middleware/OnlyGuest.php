<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OnlyGuest
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()) {
            return redirect('books');
        }

        return $next($request);
    }
}
