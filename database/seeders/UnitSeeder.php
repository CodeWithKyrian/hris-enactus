<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            [
                'name' => 'Social Media',
                'description' => 'Create compelling content, engage with the community, and showcase projects. Join us to become a storyteller, visual creator, and digital strategist.'
            ],
            [
                'name' => 'Research',
                'description' => 'Evaluate feasibility of projects, engage in research, analysis, market surveys, and community engagement. Solve problems and develop innovative strategies.'
            ],
            [
                'name' => 'Funding and Partnership',
                'description' => 'Secure funds and partnerships, develop financial strategies, draft budgets, and manage partnerships. Ensure proper documentation and business registration.'
            ],
            [
                'name' => 'Technical',
                'description' => 'Ensure quality designs and videos, maintaining Enactus standards. Capture team activities, manage technical aspects of websites and media platforms, and tell stories through digital documentation.'
            ],
            [
                'name' => 'Presentation',
                'description' => 'Build confident presenters for national competitions. Receive training to excel in presentations, learn effective communication, and engage audiences emotionally.'
            ],
        ];

        Unit::insert($units);
    }
}
