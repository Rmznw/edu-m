<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class CourseFactory extends Factory
{




    public function definition(): array
    {

        $courses = ['IT', 'Design', 'Analytic', 'Marketing'];



        return [

            'name' => fake()->randomElement($courses),
            'syllabus' => fake()->sentence(),
            'duration' => fake()->date(3),


        ];
    }
}
