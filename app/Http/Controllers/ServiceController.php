<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return response()->json($services);
    }

    public function show(Service $service){
        $service->load('schedules');
        return response()->json($service);
    }

    public function create(){
        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request){
        $service = Service::create($request->validated());
        $response = [
            'message' => 'Service created successfully',
            'service' => $service
        ];
        return response()->json($response);
    }

    public function destroy(Service $service){
        $service->delete();
        $response = [
            'message' => 'Service deleted successfully',
            'service' => $service
        ];
        return response()->json($response);
    }

}
