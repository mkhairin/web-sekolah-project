<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User as UserModel;

/**
 * @extends Factory<Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => UserModel::where('role', 'student')->inRandomOrder()->value('id'),
            'nisn' => fake()->unique()->numerify('################'),
            'nis' => fake()->unique()->numerify('################'),
            'gender' => fake()->randomElement(['L', 'P']),
            'place_of_birth' => fake()->city(),
            'date_of_birth' => fake()->dateTimeBetween(
                '2000-01-01','today'
            )->format('Y-m-d'),
            'religion' => fake()->randomElement([
                'islam',
                'kristen',
                'katholik',
                'hindu',
                'buddha'
            ]),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'parent_name' => fake()->name(),
            'parent_phone_number' => fake()->phoneNumber(),
            'entry_year' => fake()->numberBetween(2020, 2026)
        ];
    }
}
