<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScientificWork>
 */
class ScientificWorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'subarea_id' => 1,
            'title' => fake()->realText(20),
            'publish_date' => fake()->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'abstract' => fake()->realText(200),
            'keywords' => implode(' ', fake()->words(3)),
            'pdf_url' => fake()->url(),
            'user_id' => 1
        ];
    }
}
