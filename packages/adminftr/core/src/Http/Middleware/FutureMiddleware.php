<?php

namespace Adminftr\Core\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FutureMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
        return $next($request);
    }
}
