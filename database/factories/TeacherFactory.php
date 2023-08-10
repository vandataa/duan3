<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image'=>fake()->image(),
            'nameTeacher'=>fake()->unique()->name(),
            'skill'=>fake()->name(),
            'facebook'=>fake()->name(),
            'twiter'=>fake()->name(),
            'phone'=>fake()->phoneNumber(),
            'skyer'=>fake()->name(),


        ];
    }
}
