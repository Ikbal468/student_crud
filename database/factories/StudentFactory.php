<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition()
    {
        return [
            'student_code' => $this->faker->unique()->numerify('STU#####'),
            'name' => $this->faker->name(),
            'course' => $this->faker->randomElement(['BSE', 'BIT', 'BCS', 'BBA']),
            'remarks' => $this->faker->sentence(),
        ];
    }
}
