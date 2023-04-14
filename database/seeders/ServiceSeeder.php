<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menHaircut = Service::factory()->create([
            'name' => 'Men Haircut',
            'description' => 'This haircut includes a shampoo, a haircut, and a blow dry.',
            'price' => 25,
            'duration' => 30,
        ]);
        $this->generateSchedulesForService($menHaircut);


        $womenHaircut = Service::factory()->create([
            'name' => 'Women Haircut',
            'description' => 'This haircut includes a shampoo, a haircut, blow dry, and the option of a style.',
            'price' => 30,
            'duration' => 60,
        ]);
        $this->generateSchedulesForService($womenHaircut);

        $hairColouring = Service::factory()->create([
            'name' => 'Hair Colouring',
            'description' => 'If you want to change your hair colour or add highlights, this is the service for you.',
            'price' => 50,
            'duration' => 90,
        ]);
        $this->generateSchedulesForService($hairColouring);
    }

    /**
     * Generate schedules for a service.
     *
     * @param \App\Models\Service $service
     */

    private function generateSchedulesForService(Service $service): void
    {
        $daysOfWeek = [0, 1, 2, 3, 4, 5, 6];

        if($service->name == 'Men Haircut') {
            $service->schedules()->createMany([
                [
                    'day_of_week' => $daysOfWeek[0],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[1],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[2],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[3],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[4],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[5],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[6],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
            ]);
        }

        if($service->name == 'Women Haircut') {
            $service->schedules()->createMany([
                [
                    'day_of_week' => $daysOfWeek[0],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[1],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[2],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[3],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[4],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[5],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[6],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
            ]);
        }

        if($service->name == 'Hair Colouring') {
            $service->schedules()->createMany([
                [
                    'day_of_week' => $daysOfWeek[0],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[1],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[2],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[3],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[4],
                    'start_at' => '08:00',
                    'end_at' => '20:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[5],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
                [
                    'day_of_week' => $daysOfWeek[6],
                    'start_at' => '10:00',
                    'end_at' => '22:00',
                ],
            ]);
        }
    }

}
