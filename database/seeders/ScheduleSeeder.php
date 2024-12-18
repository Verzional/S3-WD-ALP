<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            ['name' => 'A', 'description' => 'Jam 08:00 - 10:00'],
            ['name' => 'B', 'description' => 'Jam 10:00 - 12:00'],
            ['name' => 'C', 'description' => 'Jam 13:00 - 14:30'],
            ['name' => 'D', 'description' => 'Jam 14:30 - 16:00']
        ];

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }
    }
}
