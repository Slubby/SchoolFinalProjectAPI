<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class CompanyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::findOrNew(4);
        $user->email = 'company@test.com';
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make('W@chtw00rd');
        $user->save();

        $company = Company::findOrNew(1);
        $company->number = 1234;
        $company->name = 'WeDevelop4You';
        $company->country = 'NL';
        $company->region = 'GR';
        $company->city = 'Hoogezand';
        $company->street = 'Boomgaard';
        $company->house_number = '81';
        $company->postal_code = '9603HL';
        $company->verified = 1;
        $company->save();

        $company->user()->save($user);
    }
}
