<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Llamamos a los seeders básicos primero
        $this->call([
            RoboticsKitSeeder::class,
            UserSeeder::class,
        ]);

        // Generamos los 100 cursos usando el Factory
        Course::factory(100)->create();
    }
}