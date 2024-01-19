<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcademicInfo>
 */
class AcademicInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school' => $this->faker->randomElement(["SEET", "SAAT", "SOPS", "SOHT", "SCIT"]),
            'course' => $this->faker->randomElement(["EEE", "MEE", "CSC", "MCE", "ABE", "PHE", "SLT", "BCH", "MCB", "PHY", "CHM", "BIO", "STA", "MTH"]),
            'year' => $this->faker->year,
        ];
    }
}
