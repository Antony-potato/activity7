<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('robotics_kits')->insert([
            ['name' => 'StarterKit'],
            ['name' => 'Educational Robotics Kit'],
            ['name' => 'Kit5']
        ]);
    }
}