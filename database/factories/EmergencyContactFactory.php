<?php

namespace Database\Factories;

use App\Enums\Relationship;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmergencyContact>
 */
class EmergencyContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->optional()->email,
            'phone_number' => $this->faker->phoneNumber,
            'relationship' => $this->faker->randomElement(Relationship::cases())->value,
        ];
    }
}
