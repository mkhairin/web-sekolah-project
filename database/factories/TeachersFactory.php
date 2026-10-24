<?php

namespace Database\Factories;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User as UserModel;

/**
 * @extends Factory<Teachers>
 */
class TeachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => UserModel::where('role', 'teacher')->inRandomOrder()->value('id'),
            'nip' => fake()->unique()->numerify('################'),
            'gender' => fake()->randomElement(['L', 'P']),
            'place_of_birth' => fake()->city(),
            'date_of_birth' => fake()->date(),
            'phone_number' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'latest_education' => fake()->randomElement([
                'S1',
                'S2',
                'S3',
            ]),
            'join_date' => fake()->date(),
        ];
    }
}
