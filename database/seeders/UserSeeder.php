<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use App\Models\Project;
use App\Models\Semester;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $academicYears = AcademicYear::limit(2)->get();
        $projects = Project::all();
        $units = Unit::all();


        User::factory()
            ->hasEvaluations(10)
            ->hasAttached($academicYears, [
                'amount' => fake()->numberBetween(1000, 10000),
                'paid_on' => fake()->dateTimeBetween('-1 year'),
            ], 'sessionalDues')
            ->hasAttached($projects->random(), [
                'joined_on' => fake()->dateTimeBetween('-1 year'),
                'left_on' => fake()->dateTimeBetween('+1 year', '+2 years'),
            ])
            ->hasAttached($units->random(), [
                'joined_on' => fake()->dateTimeBetween('-1 year'),
                'left_on' => fake()->dateTimeBetween('+1 year', '+2 years'),
            ])
            ->create([
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@enactus.com',
            ]);

        User::factory()
            ->hasEvaluations(10)
            ->hasAttached($academicYears, [
                'amount' => fake()->numberBetween(1000, 10000),
                'paid_on' => fake()->dateTimeBetween('-1 year'),
            ], 'sessionalDues')
            ->hasAttached($projects->random(), [
                'joined_on' => fake()->dateTimeBetween('-1 year'),
                'left_on' => fake()->dateTimeBetween('+1 year', '+2 years'),
            ])
            ->hasAttached($units->random(), [
                'joined_on' => fake()->dateTimeBetween('-1 year'),
                'left_on' => fake()->dateTimeBetween('+1 year', '+2 years'),
            ])
            ->count(10)
            ->create();
    }
}
