<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            foreach (['Algebra', 'Programma', 'Inlis-dili', 'Rus-dili'] as $obj) {
                Course::create(['name' => $obj]);
            }
        }
    }
}