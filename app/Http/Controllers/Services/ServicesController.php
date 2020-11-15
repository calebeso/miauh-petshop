<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service; 

class ServicesController extends Controller
{
    public function index()
    {
        return Service::all();
    }

    public function show(Service $service)
    {
        return $service;
    }

    public function store(Request $request)
    {
       $service = Service::create($request->all());
       return response()->json($service, 201);

    }


    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        return response()->json($service, 200);
    }

    public function delete(Service $service)
    {
        $service->delete();

        return response()->json(null, 204);
    }
}
