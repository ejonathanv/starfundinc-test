<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceSchedule;
use App\Http\Requests\StoreServiceScheduleRequest;
use App\Http\Requests\UpdateServiceScheduleRequest;

class ServiceScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        $schedules = $service->schedules;
        return response()->json($schedules);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Service $service)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceScheduleRequest $request, Service $service)
    {
        $schedule = $service->schedules()->where('day_of_week', $request->day_of_week)->first();
        if($schedule){
            $schedule->update($request->validated());
        }else{
            $schedule = $service->schedules()->create($request->validated());
        }
        $response = [
            'message' => 'Service schedule created successfully',
            'schedule' => $schedule
        ];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service, ServiceSchedule $schedule)
    {
        return response()->json($schedule);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceSchedule $schedule, Service $service)
    {
        return view('admin.services.schedules.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceScheduleRequest $request, ServiceSchedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceSchedule $schedule)
    {
        //
    }
}
