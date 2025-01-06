<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Autumn', 'Winter', 'Spring', 'Summer'] as $obj) {
            Season::create(['name' => $obj]);
        }
    }
}
