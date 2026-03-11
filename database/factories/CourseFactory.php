<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'cover_image' => fake()->imageUrl(),
            'content' => fake()->text(200),
            'robotics_kit_id' => fake()->numberBetween(1, 3) // Asigna uno de los 3 kits al azar
        ];
    }
}