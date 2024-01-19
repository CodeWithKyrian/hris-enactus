<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AcademicYearSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(ProjectSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(MeetingSeeder::class);
    }
}
