<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\BookableSlot;
use App\Models\BookingPeople;
use App\Http\Requests\StoreBookingPeopleRequest;
use App\Http\Requests\UpdateBookingPeopleRequest;

class BookingPeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(BookableSlot $slot)
    {
        $services = Service::all();
        return view('users.bookings.people.create', compact('services', 'slot'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingPeopleRequest $request, BookableSlot $slot)
    {
        $user = auth()->user();

        $booking = Booking::firstOrCreate([
            'user_id' => $user->id,
            'bookable_slot_id' => $slot->id,
        ]);
        
        $people = BookingPeople::create([
            'booking_id' => $booking->id,
            'service_id' => $request->service_id,
            'name' => $request->name,
        ]);

        $response = [
            'message' => 'Booking people created successfully',
            'people' => $people
        ];

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(BookingPeople $bookingPeople)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookingPeople $bookingPeople)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingPeopleRequest $request, BookingPeople $bookingPeople)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookingPeople $bookingPeople)
    {
        //
    }
}
