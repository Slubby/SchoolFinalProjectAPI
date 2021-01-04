<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::findOrNew(1);
        $user->email = 'pmhuberts@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make('W@chtw00rd');
        $user->save();

        $admin = Admin::findOrNew(1);
        $admin->first_name = 'Pascal';
        $admin->last_name = 'Huberts';
        $admin->save();

        $admin->user()->save($user);

        $user = User::findOrNew(2);
        $user->email = 'pm.huberts@gmail.com';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make('W@chtw00rd');
        $user->save();

        $student = Student::findOrNew(2);
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
        $student->education = 'developer';
        $student->mentor_id = 1;
        $student->started_at = Carbon::now();
        $student->grade = 3;
        $student->save();

        $student->user()->save($user);
    }
}
