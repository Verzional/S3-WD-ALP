<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Event;
use App\Models\Schedule;
use App\Models\School;
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
        // $this->call([
        //     UserSeeder::class,
        //     EventSeeder::class,
        //     StudentSeeder::class,
        //     CategorySeeder::class,
        //     ScheduleSeeder::class,
        //     SchoolSeeder::class,
        //     CompanionSeeder::class,
        //     RegistrationSeeder::class
        // ]);

        /**
         * Use after the first call to seed the database
         */
        $this->call([
            UserSeeder::class,
            StudentSeeder::class,
            CompanionSeeder::class,
            RegistrationSeeder::class
        ]);
    }
}
