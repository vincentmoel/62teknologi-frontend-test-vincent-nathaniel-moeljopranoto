<?php 
namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ValidatingApiToken{

    public static function validate()
    {
        if(!Session::has('token'))
        {
            return false;
        }

        $response = Http::withToken(Session::get('token'))->get(env('API_URL') . '/check-token');
        
        return $response->json('data.valid_token');
        
    }



}
