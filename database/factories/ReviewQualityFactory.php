<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReviewQuality>
 */
class ReviewQualityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assessment' => fake()->numberBetween(1, 5),
            'user_id' => fake()->numberBetween(1, 2),
            'review_id' => fake()->numberBetween(1, 20)
        ];
    }
}
