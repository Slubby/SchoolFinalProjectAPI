<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class StudentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::findOrNew(3);
        $user->email = 'student@@example.org';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make('W@chtw00rd');
        $user->save();

        $student = Student::findOrNew(1);
        $student->number = 123456;
        $student->first_name = 'Pascal';
        $student->last_name = 'Huberts';
        $student->gender = 'male';
        $student->birthday = '2001-09-29';
        $student->country = 'NL';
        $student->region = 'GR';
        $student->city = 'Hoogezand';
        $student->street = 'Boomgaard';
        $student->house_number = '81';
        $student->postal_code = '9603HL';
        $student->school_id = 1;
        $student->education_id = 1;
        $student->mentor_id = 1;
        $student->started_at = Carbon::now();
        $student->grade = 3;
        $student->save();

        $student->user()->save($user);
    }
}
