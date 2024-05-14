<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'teacher_id'=>Teacher::factory(),
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'age'=>fake()->numberBetween(10,60)
        ];
    }
    
}
