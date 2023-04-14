<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\BookableSlot;
use App\Models\BookingPeople;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookableSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookableSlot::factory()->count(100)->create()->each(function($bookableSlot){
            Booking::factory()->count(10)->create([
                'bookable_slot_id' => $bookableSlot->id,
            ])->each(function($booking){
                BookingPeople::factory()->count(rand(1, 5))->create([
                    'booking_id' => $booking->id,
                ]);
            });
        });
    }
}
