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
    public function definition()
    {
        return [
            'name'           =>      fake()->text(11),
            'price'          =>      fake()->randomFloat(2, 100, 1000),
            'image'          =>      fake()->imageUrl
        ];
    }
}