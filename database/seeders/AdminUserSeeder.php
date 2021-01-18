<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::findOrNew(1);
        $user->email = 'admin@example.org';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make('W@chtw00rd');
        $user->save();

        $admin = Admin::findOrNew(1);
        $admin->first_name = 'Pascal';
        $admin->last_name = 'Huberts';
        $admin->save();

        $admin->user()->save($user);
    }
}
