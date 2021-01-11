<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class TeacherUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::findOrNew(2);
        $user->email = 'teacher@test.com';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make('W@chtw00rd');
        $user->save();

        $teacher = Teacher::findOrNew(1);
        $teacher->school_id = 1;
        $teacher->first_name = 'Test';
        $teacher->last_name = 'Teacher';
        $teacher->short_name = 'TT';
        $teacher->verified = 1;
        $teacher->save();

        $teacher->user()->save($user);
    }
}
