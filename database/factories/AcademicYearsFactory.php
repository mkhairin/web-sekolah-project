<?php

namespace Database\Factories;

use App\Models\AcademicYears;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AcademicYears>
 */
class AcademicYearsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Menentukan tahun ajaran
        $year = fake()->numberBetween(2023, 2028);

        // Menentukan semester
        $semester = fake()->randomElement([
            'Ganjil',
            'Genap',
        ]);

        // Menentukan tanggal mulai dan berakhir
        if ($semester === 'Ganjil') {
            $startDate = "{$year}-07-01";
            $endDate = ($year + 1) . "-12-31";
        } else {
            $startDate = ($year + 1) . "-01-01";
            $endDate = ($year + 1) . "-06-30";
        }

        return [
            'name' => "{$year}/" . ($year + 1) . " {$semester}",
            'is_active' => $this->faker()->boolean(),
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}
