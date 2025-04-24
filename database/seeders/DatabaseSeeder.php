<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {





$this->call(CategorySeeder::class);
$this->call(CourseSeeder::class);


        Student::factory()->count(30)->create();



        Teacher::factory()->count(10)->create();


        User::factory()->count(10)->create();
    }
}
