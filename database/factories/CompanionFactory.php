<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companion>
 */
class CompanionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'status' => $this->faker->randomElement(['Guru', 'Orang Tua', 'Wali']),
            'contact' => $this->faker->phoneNumber,
            'currentlyActive' => $this->faker->boolean(),
            'school_id' => School::inRandomOrder()->first()->id
        ];
    }
}
