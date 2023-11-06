<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospitalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HospitalController extends Controller
{

    private $baseUrl = "/hospitals";

    public function index()
    {
        $response = Http::getWithToken($this->baseUrl);

        return view('hospitals.index',[
            'hospitals' => $response->json('data.hospitals')
        ]);
    }

    public function create()
    {
        
        return view('hospitals.create');
    }

    public function store(Request $request)
    {
        $response = Http::postWithToken($this->baseUrl, [
            "name"      => $request->name,
            "address"   => $request->address,
        ]);

        return redirect('/hospitals')->with([
            "success"   => 'Success Add Hospital'
        ]);

    }

    public function edit($hospitalId)
    {
        $response = Http::getWithToken("$this->baseUrl/$hospitalId");


        return view('hospitals.edit',[
            'hospital'  => $response->json('data.hospital')
        ]);
    }
    
    public function update(Request $request, $hospitalId)
    {
        $response = Http::putWithToken("$this->baseUrl/$hospitalId", [
            "name"      => $request->name,
            "address"   => $request->address,
        ]);

        return redirect('/hospitals')->with([
            "success"   => 'Success Update Hospital'
        ]);
    }

    public function destroy($hospitalId)
    {
        $response = Http::deleteWithToken("$this->baseUrl/$hospitalId");

        return redirect('/hospitals')->with([
            "success"   => 'Success Delete Hospital'
        ]);
    }

}
