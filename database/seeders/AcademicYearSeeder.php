<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $academicYears = [
            [
                'name' => '2020/2021',
                'start_date' => '2020-09-01',
                'end_date' => '2021-08-31',
                'is_active' => true,
            ],
            [
                'name' => '2021/2022',
                'start_date' => '2021-09-01',
                'end_date' => '2022-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2022/2023',
                'start_date' => '2022-09-01',
                'end_date' => '2023-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2023/2024',
                'start_date' => '2023-09-01',
                'end_date' => '2024-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2024/2025',
                'start_date' => '2024-09-01',
                'end_date' => '2025-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2025/2026',
                'start_date' => '2025-09-01',
                'end_date' => '2026-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2026/2027',
                'start_date' => '2026-09-01',
                'end_date' => '2027-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2027/2028',
                'start_date' => '2027-09-01',
                'end_date' => '2028-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2028/2029',
                'start_date' => '2028-09-01',
                'end_date' => '2029-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2029/2030',
                'start_date' => '2029-09-01',
                'end_date' => '2030-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2030/2031',
                'start_date' => '2030-09-01',
                'end_date' => '2031-08-31',
                'is_active' => false,
            ],
            [
                'name' => '2031/2032',
                'start_date' => '2031-09-01',
                'end_date' => '2032-08-31',
                'is_active' => false,
            ]
        ];

       AcademicYear::insert($academicYears);
    }
}
