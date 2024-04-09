<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->realText(),
            'image_path'=>fake()->imageUrl(),
            'due_date' =>fake()->dateTimeBetween('now','+1year'),
            'status'=> fake()->randomElement(['pending','in_progress','complete']),
            'created_by'=>1,
            'updated_by'=>1

        ];
    }
}
