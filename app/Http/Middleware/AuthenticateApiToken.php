<?php

namespace App\Http\Middleware;

use App\Helpers\ValidatingApiToken;
use Closure;
use Illuminate\Http\Request;

class AuthenticateApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $isAuth = ValidatingApiToken::validate();
        
        return $isAuth ? $next($request) : redirect('login');
    }
}