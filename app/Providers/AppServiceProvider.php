<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Http::macro('getWithToken', function ($url) {
            return Http::withToken(Session::get('token'))->get(env('API_URL') . $url)->throw();
        });

        Http::macro('postWithToken', function ($url, array $data) {
            return Http::withToken(Session::get('token'))->post(env('API_URL') . $url, $data)->throw();
        });

        Http::macro('putWithToken', function ($url, array $data) {
            return Http::withToken(Session::get('token'))->put(env('API_URL') . $url, $data)->throw();
        });
        
        Http::macro('deleteWithToken', function ($url) {
            return Http::withToken(Session::get('token'))->delete(env('API_URL') . $url)->throw();
        });
    }
}
