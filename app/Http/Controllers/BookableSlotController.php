<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\BookableSlot;
use App\Http\Requests\StoreBookableSlotRequest;
use App\Http\Requests\UpdateBookableSlotRequest;

class BookableSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $from = Carbon::now();
        $to = Carbon::now()->addDays(7);
        $dates = BookableSlot::whereDate('start_at', '>=', $from)
            ->whereDate('start_at', '<=', $to)
            ->orderBy('start_at')
            ->get();
        return response()->json($dates);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookableSlotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookableSlot $bookableSlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookableSlot $bookableSlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookableSlotRequest $request, BookableSlot $bookableSlot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookableSlot $bookableSlot)
    {
        //
    }
}
