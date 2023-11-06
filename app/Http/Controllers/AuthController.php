<?php

namespace App\Http\Controllers;

use App\Helpers\RolesParser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $response = Http::postWithToken("/login", [
            'email' => $request->email,
            'password' => $request->password
        ]);

        session([
            'user'  => $response->json('data.user'),
            'token' => $response->json('data.token')
        ]);

        if($response->status() == 200)
        {
            return redirect('dashboard')->with($response->json());
        }

    }

    

    public function logout()
    {
        Http::withToken(Session::get('token'))->post(env("API_URL") . "/logout");
        Session::forget('token');
        return redirect('login');
    }
}
