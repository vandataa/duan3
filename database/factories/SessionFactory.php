<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nameSession'=>fake()->name(),
            'session'=>fake()->randomNumber(1,100),
            'lession'=>fake()->randomNumber(1,100),
            'nameTeacher'=>fake()->unique()->name(),
        ];
    }
}
