<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            foreach (['A1', 'A2', 'A3', 'A4'] as $obj) {
                Location::create(['name' => $obj]);
            }
        }
    }
}
