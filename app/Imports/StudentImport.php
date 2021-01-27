<?php

namespace App\Imports;

use App\Http\Controllers\Profile\StudentController;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use App\Traits\Import;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Row;

class StudentImport implements OnEachRow, WithHeadingRow, WithValidation
{
    use Importable, Import;

    /**
     * @param string $name
     * @return Teacher|null
     */
    private static function getMentor(string $name): ?Teacher
    {
        $teachers = Teacher::all();
        $mentorName = strtolower($name);

        foreach ($teachers as $teacher) {
            $teacher->setAttribute('full_name', strtolower($teacher->fullName()));
        }

        return $teachers->where('full_name', $mentorName)->first();
    }

    /**
     * @param Row $row
     */
    public function onRow(Row $row)
    {
        $collection = (object) $row->toCollection()->all();

        $gender = self::getGender($collection->geslacht);
        $birthday = self::setDateFormat($collection->geboortedatum);
        $location = self::getLocation($collection->pc_wpl);
        $address = self::getAddress($collection->adres);
        $mentor = self::getMentor($collection->mentoren);
        $startedAt = self::setDateFormat($collection->begindatum);

        $user = new User();
        $user->email = $collection->email;
        $user->password = Hash::make('test');
        $user->save();

        $profile = new Student();
        $profile->number = $collection->nummer;
        $profile->first_name = $collection->roepnaam;
        $profile->middle_name = $collection->voorvoegsel;
        $profile->last_name = $collection->achternaam;
        $profile->gender = $gender;
        $profile->birthday = $birthday;
        $profile->country = $location->country;
        $profile->region = $location->region;
        $profile->city = $location->city;
        $profile->street = $address->street;
        $profile->house_number = $address->number;
        $profile->postal_code = $location->postalCode;
        $profile->school_id = Auth::user()->profile->school_id;
        $profile->education_id = 1;
        $profile->mentor_id = $mentor->user->id;
        $profile->started_at = $startedAt;
        $profile->grade = $collection->leerjaar;
        $profile->save();
        $profile->user()->save($user);
    }

    public function rules(): array
    {
        $custom = [
            'mentoren' => ['required', function($attribute, $value, $onFailure) {
                if (is_null(self::getMentor($value))) {
                    $onFailure('The Mentoren doesn\'t exist');
                }
            }]
        ];

        return array_merge(StudentController::$import, $custom);
    }
}
