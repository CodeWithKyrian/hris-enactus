<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'punctuality' => $this->faker->numberBetween(1, 5),
            'attendance' => $this->faker->numberBetween(1, 5),
            'teamwork' => $this->faker->numberBetween(1, 5),
            'communication' => $this->faker->numberBetween(1, 5),
            'professionalism' => $this->faker->numberBetween(1, 5),
            'initiative' => $this->faker->numberBetween(1, 5),
            'productivity' => $this->faker->numberBetween(1, 5),
            'project_engagement' => $this->faker->numberBetween(1, 5),
            'unit_engagement' => $this->faker->numberBetween(1, 5),
            'overall' => $this->faker->numberBetween(1, 45),
            'comments' => $this->faker->optional()->paragraph(),
            'evaluated_on' => $this->faker->date(),
        ];
    }
}
