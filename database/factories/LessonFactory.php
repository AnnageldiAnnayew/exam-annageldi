<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'season_id' =>Season::inRandomOrder()->first()->id,
            'location_id' =>Location::inRandomOrder()->first()->id,
            'course_id' =>Course::inRandomOrder()->first()->id,
            'teacher_id' => null,
        ];
    }
}
