<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\userPractica>
 */
class userPracticaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->lastName(),
            'password' => fake()->password(),
            'email' => fake()->email(), // Corregido el campo a 'email'
            'cell' => fake()->phoneNumber(),
        ];
    }
}