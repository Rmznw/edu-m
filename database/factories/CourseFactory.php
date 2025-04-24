<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            $courses = ['IT','Design','Analytic','Marketing'];

        return [

            'name' =>fake()->randomElement($courses),
            'syllabus' =>fake()->sentence(),
            'duration' => fake()->date(3),
        ];
    }
}
