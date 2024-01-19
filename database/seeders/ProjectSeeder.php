<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Run Am',
                'description' => 'A project to deliver food to all who need it using eco-friendly means - bicycles.',
            ],
            [
                'name' => 'Solconomy',
                'description' => 'A project to provide a solar-powered alternative to the current electricity grid for market women in FUTO.',
            ],
        ];

        Project::insert($projects);
    }
}
