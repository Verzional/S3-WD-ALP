<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Companion;
use App\Models\Event;
use App\Models\Schedule;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'level' => function (array $attributes) {
                return School::find($attributes['school_id'])->level;
            },
            'grade'=> function (array $attributes){
                $level = $attributes['level'];
                if ($level == 'SD') {
                    return $this->faker->numberBetween(3, 6);
                } else if ($level == 'SMP') {
                    return $this->faker->numberBetween(7,9);
                }else if ($level == 'SMA') {
                    return $this->faker->numberBetween(10, 12);
                }
            },
            'language'=> $this->faker->randomElement(['Indonesian','English']),
            'score'=> $this->faker->randomFloat(2, 0, 100),
            'rankPercentage'=> $this->faker->randomFloat(2, 0, 100),
            'event_id'=> Event::inRandomOrder()->first()->id,
            'student_id'=> Student::factory(),
            'school_id'=> School::inRandomOrder()->first()->id,
            'companion_id'=>Companion::factory(),
            'category_id' => Category::inRandomOrder()->first()->id, 
            'schedule_id' => Schedule::inRandomOrder()->first()->id,


        ];
    }
}
