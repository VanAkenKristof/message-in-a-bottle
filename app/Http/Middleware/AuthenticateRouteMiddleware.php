<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateRouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!env('PHOTOBOOTH')) {
            return redirect(route('website.home'));
        }

        return $next($request);
    }
}
