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
        $token = "Ubf1-f0uqsJUnssqPMGo-tiFeZTT85oFmKfznlPmjDtX8s83jYMoAb-ApuD63wgq6LDZNsUXG6gurZIVYaj2jzxJmmLdCdXbDqIHU_b6KiCEVi8v-YB0OSsW6MWaY3Yx";
        Http::macro('getWithToken', function ($url) use ($token){
            return Http::withToken($token)->get(env('API_URL') . $url)->throw();
        });

        Http::macro('postWithToken', function ($url, array $data) use ($token){
            return Http::withToken($token)->post(env('API_URL') . $url, $data)->throw();
        });

        Http::macro('putWithToken', function ($url, array $data) use ($token){
            return Http::withToken($token)->put(env('API_URL') . $url, $data)->throw();
        });
        
        Http::macro('deleteWithToken', function ($url) use ($token){
            return Http::withToken($token)->delete(env('API_URL') . $url)->throw();
        });
    }
}
