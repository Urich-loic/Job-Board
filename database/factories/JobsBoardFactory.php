<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsBoard>
 */
class JobsBoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'salary' => $this->faker->numberBetween(3_000, 150_000),
            'location' => $this->faker->city(),
            'category' => $this->faker->randomElement(\App\Models\JobsBoard::$category),
            'experience' => $this->faker->randomElement(\App\Models\JobsBoard::$experienceLevels),
        ];
    }
}
