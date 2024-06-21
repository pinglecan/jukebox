<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->company,
            "duration" => fake()->numberBetween(30,330),
            "artist" => fake()->name,
            "genre_id"=> fake()->numberBetween(1,100),
        ];
    }
}
