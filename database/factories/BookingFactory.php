<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Service;
use App\Models\BookableSlot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status = ['pending', 'confirmed', 'cancelled'][rand(0, 2)];

        return [
            'user_id' => User::factory(),
            'bookable_slot_id' => BookableSlot::factory(),
            'status' => $status,
        ];
    }
}
