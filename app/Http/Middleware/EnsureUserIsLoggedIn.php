<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RegisterController;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->session()->exists('username')) {
            return $next($request);
        }
        return redirect()->route('flowers');
    }
}
