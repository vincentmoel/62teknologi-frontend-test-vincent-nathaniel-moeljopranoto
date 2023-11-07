<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{

    private $baseUrl = "/businesses";

    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'location' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $parameter = '';

        if(request('price'))
        {
            foreach(request('price') as $price)
            {
                $parameter .= "&price=$price"; 
            }
        }

        if(request('radius'))
        {
            $parameter .= "&radius=".request('radius'); 
        }

        if(request('term'))
        {
            $parameter .= "&term=".request('term'); 
        }

        if(request('sort_by'))
        {
            $parameter .= "&sort_by=".request('sort_by'); 
        }

        if(request('open_now'))
        {
            $parameter .= "&open_now=".request('open_now'); 
        }

        if(request('offset'))
        {
            $parameter .= "&offset=".request('offset'); 
        }

        // dd($parameter);

        $response = Http::getWithToken($this->baseUrl."/search?location=".request('location').$parameter);

        return view('businesses.index',[
            'businesses' => $response->json('businesses')
        ]);
    }

    public function show($alias)
    {
        $business = Http::getWithToken($this->baseUrl."/$alias");
        $reviews = Http::getWithToken($this->baseUrl."/$alias/reviews");

        // dd($reviews->json());
        return view('businesses.show',[
            'business'  => $business->json(),
            'reviews'   => $reviews->json('reviews')
        ]);
    }
}
