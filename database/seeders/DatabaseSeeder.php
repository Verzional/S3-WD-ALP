<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Event;
use App\Models\Schedule;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'SiKecil', 'description' => 'Kelas 1-3'],
            ['name' => 'Siaga', 'description' => 'Kelas 4-6'],
            ['name' => 'Penggalang', 'description' => 'Kelas 7-9'],
            ['name' => 'Penegak', 'description' => 'Kelas 10-12']
        ];

        $schedules = [
            ['name' => 'A', 'description' => 'Jam 08:00 - 10:00'],
            ['name' => 'B', 'description' => 'Jam 10:00 - 12:00'],
            ['name' => 'C', 'description' => 'Jam 13:00 - 14:30'],
            ['name' => 'D', 'description' => 'Jam 14:30 - 16:00']
        ];

        $events = [
            ['year' => 2021, 'description' => 'This is Bebras 2021', 'scheduleDescription' => 'Schedule'],
            ['year' => 2022, 'description' => 'This is Bebras 2022', 'scheduleDescription' => 'Schedule'],
            ['year' => 2023, 'description' => 'This is Bebras 2023', 'scheduleDescription' => 'Schedule'],
            ['year' => 2024, 'description' => 'This is Bebras 2024', 'scheduleDescription' => 'Schedule']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
