<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'review' => fake()->realText(60),
                'assessment' => fake()->numberBetween(1, 5),
                'recomend' => fake()->boolean(),
                'user_id' => fake()->numberBetween(1, 2),
                'scientific_work_id' => fake()->numberBetween(1, 20)
        ];
    }
}
