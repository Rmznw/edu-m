<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{

    public function definition(): array
    {
        return [


            'name' => fake()->name,
            'lastname' => fake()->lastName,
            'age' => fake()->numberBetween(20, 40),
            'address' => fake()->streetAddress(),
            'phone_number' => fake()->phoneNumber(),


        ];
    }
}
