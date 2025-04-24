<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    public function definition(): array
    {

        $categories = ['IT', 'Design', 'Analytic', 'Marketing'];

        return [


            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'category' => fake()->randomElement($categories),


        ];
    }
}
