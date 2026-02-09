<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAccessGranted
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->session()->get('access_granted')) {
            return redirect('/');
        }

        return $next($request);
    }
}
