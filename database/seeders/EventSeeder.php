<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            ['year' => 2021, 'description' => 'This is Bebras 2021', 'scheduleDescription' => 'Schedule'],
            ['year' => 2022, 'description' => 'This is Bebras 2022', 'scheduleDescription' => 'Schedule'],
            ['year' => 2023, 'description' => 'This is Bebras 2023', 'scheduleDescription' => 'Schedule'],
            ['year' => 2024, 'description' => 'This is Bebras 2024', 'scheduleDescription' => 'Schedule']
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
