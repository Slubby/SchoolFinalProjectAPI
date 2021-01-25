<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Traits\ProfileValidation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    use ProfileValidation;

    /**
     * @var array
     */
    private static array $default = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'gender' => ['required', 'in:male,female,other'],
        'birthday' => ['required', 'date'],
        'country' => ['required'],
        'region' => ['required'],
        'city' => ['required'],
        'street' => ['required'],
        'house_number' => ['required'],
        'postal_code' => ['required'],
    ];

    /**
     * @var array
     */
    private static array $create = [
        'school' => ['required', 'integer', 'exists:schools,id'],
        'education' => ['required', 'integer', 'exists:educations,id'],
        'mentor' => ['required', 'integer', 'existsProfile:App\Models\Teacher'],
        'started' => ['required', 'date'],
        'grade' => ['required', 'integer'],
    ];

    /**
     * @param object $data
     * @param Student $student
     * @param bool $mentor
     * @return Student|false
     */
    public static function createOrUpdate(object $data, Student $student, bool $mentor = false)
    {
        try {
            if (!$student->exists || $mentor) {
                $student->school_id = $data->school;
                $student->number = $data->number;
                $student->education_id = $data->education;
                $student->mentor_id = $data->mentor;
                $student->started_at = $data->started;
                $student->grade = $data->grade;
            }

            $student->first_name = $data->first_name;
            $student->middle_name = $data->middle_name;
            $student->last_name = $data->last_name;
            $student->gender = $data->gender;
            $student->birthday = $data->birthday;
            $student->country = $data->country;
            $student->region = $data->region;
            $student->city = $data->city;
            $student->street = $data->street;
            $student->house_number = $data->house_number;
            $student->postal_code = $data->postal_code;
            $student->save();

            return $student;
        } catch (Exception $e) {
            report($e);
        }

        return false;
    }

    /**
     * @param Student $student
     * @return Student
     */
    public static function user(Student $student): Student
    {
        $student->mentor;
        $student->school;

        return $student;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
