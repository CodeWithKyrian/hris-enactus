<?php

namespace Database\Seeders;

use App\Models\EnactusRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnactusRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'President',
                'description' => 'The President is the head of the Enactus team. He/She is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',

            ],
            [
                'name' => 'Vice President',
                'description' => 'The Vice President is the second in command of the Enactus team. He/She is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',

            ],
            [
                'name' => 'Secretary',
                'description' => 'The Secretary is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',

            ],
            [
                'name' => 'Treasurer',
                'description' => 'The Treasurer is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',

            ],
            [
                'name' => 'Project Manager',
                'description' => 'The Project Manager is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',

            ],
            [
                'name' => 'Human Resource Manager',
                'description' => 'The Human Resource Manager is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',
            ],
            [
                'name' => 'Project Head',
                'description' => 'The Project Head is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',

            ],
            [
                'name' => 'Finance Officer',
                'description' => 'The Finance Officer is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',
            ],
            [
                'name' => 'Marketing Head',
                'description' => 'The Marketing Head is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',
            ],
            [
                'name' => 'Social Media Head',
                'description' => 'The Social Media Head is responsible for the overall functioning of the team and is the face of the team in the college. He/She is responsible for the smooth functioning of the team and is the final authority in all matters. He/She is responsible for the overall performance of the team in all competitions and is responsible for the overall growth of the team.',
            ]
        ];

        EnactusRole::insert($roles);
    }
}
