<?php

namespace Database\Seeders;

use App\Enums\Semester;
use App\Models\Meeting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meetings = [
            [
                'semester' => Semester::RAIN,
                'academic_year_id' => 1,
                'location' => 'Conference Room A',
                'minutes' => 'The meeting commenced with a warm welcome to all members. Discussions primarily focused on the upcoming community outreach projects. Each member presented their ideas, and a collaborative brainstorming session ensued. Tasks were assigned, and a timeline was established. The meeting concluded with enthusiasm for the projects ahead.',
                'start_time' => '14:00:00',
                'end_time' => '15:30:00',
                'held_on' => '2024-01-15',
            ],
            [
                'semester' => Semester::RAIN,
                'academic_year_id' => 1,
                'location' => 'AEC Lecture Hall',
                'minutes' => "Members gathered virtually to review the progress of ongoing initiatives. Detailed discussions took place regarding project milestones, challenges faced, and strategies for overcoming them. The team shared valuable insights, leading to a plan for future actions. The meeting ended on a positive note, ensuring everyone was aligned with the team's goals.",
                'start_time' => '10:30:00',
                'end_time' => '12:00:00',
                'held_on' => '2024-02-02',
            ],
            [
                'semester' => Semester::RAIN,
                'academic_year_id' => 1,
                'location' => 'Boardroom',
                'minutes' => "In the boardroom, a dynamic brainstorming session unfolded for new projects. Members passionately exchanged ideas, fostering creativity and innovation. The meeting resulted in the identification of promising projects and the formation of specialized teams to delve deeper into each concept.",
                'start_time' => '09:00:00',
                'end_time' => '11:00:00',
                'held_on' => '2024-03-10',
            ],
            [
                'semester' => Semester::RAIN,
                'academic_year_id' => 1,
                'location' => 'Online',
                'minutes' => "Convening online, members engaged in a comprehensive discussion on community outreach strategies. Data analysis, market trends, and community needs were explored. A collaborative effort resulted in the formulation of effective strategies to enhance the team's impact on the community.",
                'start_time' => '15:00:00',
                'end_time' => '16:30:00',
                'held_on' => '2024-04-05',
            ],
            [
                'semester' => Semester::RAIN,
                'academic_year_id' => 1,
                'location' => 'Auditorium',
                'minutes' => "The auditorium was the setting for a presentation of project proposals. Each member presented their meticulously crafted proposals, showcasing creativity and feasibility. Constructive feedback was provided, leading to refined project plans and a clear roadmap for implementation.",
                'start_time' => '13:30:00',
                'end_time' => '16:00:00',
                'held_on' => '2024-05-20',
            ],
            [
                'semester' => Semester::HARMATTAN,
                'academic_year_id' => 1,
                'location' => 'Zoom Meeting',
                'minutes' => "A Zoom meeting featured a session with a guest speaker on entrepreneurship. Engaging discussions unfolded as the speaker shared valuable insights and experiences. Members gained inspiration and practical knowledge, aligning with the team's mission to empower through entrepreneurship.",
                'start_time' => '11:00:00',
                'end_time' => '12:30:00',
                'held_on' => '2024-06-08',
            ],
            [
                'semester' => Semester::HARMATTAN,
                'academic_year_id' => 1,
                'location' => 'Conference Room B',
                'minutes' => "Evaluation of project implementation took center stage in the conference room. Each project's progress, challenges, and successes were meticulously examined. Recommendations for improvements were discussed, ensuring the team's commitment to delivering impactful projects.",
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
                'held_on' => '2024-07-12',
            ],
            [
                'semester' => Semester::HARMATTAN,
                'academic_year_id' => 1,
                'location' => 'Hybrid (In-person & Online)',
                'minutes' => "A hybrid meeting, combining in-person and online participation, centered around discussions on partnership opportunities. Members explored potential collaborations, negotiated terms, and strategized approaches to secure partnerships. The meeting concluded with optimism for future collaborations.",
                'start_time' => '14:30:00',
                'end_time' => '16:00:00',
                'held_on' => '2024-08-03',
            ],
            [
                'semester' => Semester::HARMATTAN,
                'academic_year_id' => 1,
                'location' => 'Meeting Room 3',
                'minutes' => "In Meeting Room 3, members engaged in planning upcoming community events. Detailed event logistics, outreach strategies, and participant engagement plans were deliberated. A well-coordinated effort resulted in a comprehensive plan to execute successful community events.",
                'start_time' => '09:30:00',
                'end_time' => '11:30:00',
                'held_on' => '2024-09-18',
            ],
            [
                'semester' => Semester::HARMATTAN,
                'academic_year_id' => 1,
                'location' => 'Online',
                'minutes' => "The final meeting, held online, focused on finalizing projects for the semester. Members presented project updates, addressed challenges, and shared success stories. A comprehensive review allowed the team to refine project details, ensuring successful project completion.",
                'start_time' => '16:00:00',
                'end_time' => '17:30:00',
                'held_on' => '2024-10-05',
            ],
        ];

        foreach ($meetings as $meeting) {
            Meeting::create($meeting);
        }
    }
}
