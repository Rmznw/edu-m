<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{

    public function definition(): array
    {
        return [

            'name' => fake()->name,
            'lastname' => fake()->lastName,
            'age' => fake()->numberBetween(15,20),
            'address' => fake()->streetAddress(3),
            'phone_number' => fake()->phoneNumber(),
        ];
    }
}
