<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookableSlot>
 */
class BookableSlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $hourRange = range(8, 20);
        $start_at = Carbon::now()->addDays(rand(1, 30))->hour($hourRange[rand(0, count($hourRange) - 1)]);
        $end_at = $start_at->copy()->addMinutes(rand(30, 90));

        return [
            'start_at' => $start_at,
            'end_at' => $end_at,
            'capacity' => rand(1, 10),
        ];
    }
}
