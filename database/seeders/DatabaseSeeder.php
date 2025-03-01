<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SchoolSeeder::class,
            EducationSeeder::class,
            AdminUserSeeder::class,
            TeacherUserSeeder::class,
            StudentUserSeeder::class,
            CompanyUserSeeder::class,
            VacancySeeder::class,
        ]);
    }
}
