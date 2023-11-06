<?php

namespace App\Http\Middleware;

use App\Helpers\ValidatingApiToken;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfHaveValidToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $isAuth = ValidatingApiToken::validate();

        // Valid Token
        if($isAuth) 
        {
            return redirect(RouteServiceProvider::HOME);
        }
        else
        {
            return $next($request);
        }
    }
}
