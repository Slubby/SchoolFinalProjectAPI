<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Education::findOrNew(1);
        $school->name = 'Application & Media Developer';
        $school->save();

        $school = Education::findOrNew(2);
        $school->name = 'Game Developer';
        $school->save();
    }
}
