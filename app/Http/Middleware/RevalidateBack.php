<?php

namespace App\Http\Middleware;

use App\Helpers\RolesParser;
use App\Helpers\ValidatingApiToken;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class RevalidateBack
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

        // Valid Token
        if($isAuth) 
        {
            $response = Http::withToken(Session::get('token'))->get(env("API_URL") . "/get-auth-user");


            session([
                'user'  => $response->json(),
            ]);
        }

        $response = $next($request);
        return $response->header('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }
}
