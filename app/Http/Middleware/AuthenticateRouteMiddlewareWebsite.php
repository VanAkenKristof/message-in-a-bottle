<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateRouteMiddlewareWebsite
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
        if (env('PHOTOBOOTH')) {
            return redirect(route('photobooth.step1'));
        }

        return $next($request);
    }
}
