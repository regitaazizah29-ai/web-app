<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!session('logged_in')) {
            return redirect('/');
        }

        return $next($request);
    }
}