<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Models\Teacher;
use App\Traits\ProfileValidation;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

/**
 * @group Teacher
 * @authenticated
 *
 * APIs for Teachers
 */
class TeacherController extends Controller
{
    use ProfileValidation;

    /**
     * @var array
     */
    private static array $default = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'short_name' => ['required'],
    ];

    /**
     * @var array
     */
    private static array $create = [
        'school' => ['required', 'integer', 'exists:schools,id'],
    ];

    /**
     * @param object $data
     * @param Teacher $teacher
     * @return Teacher|false
     */
    public static function createOrUpdate(object $data, Teacher $teacher)
    {
        try {
            if (!$teacher->exists) {
                $teacher->school_id = $data->school;
            }

            $teacher->first_name = $data->first_name;
            $teacher->middle_name = $data->middle_name ?? null;
            $teacher->last_name = $data->last_name;
            $teacher->short_name = $data->last_name;
            $teacher->save();

            return $teacher;
        } catch (Exception $e) {
            report($e);
        }

        return false;
    }

    /**
     * @param Teacher $teacher
     * @return Teacher
     */
    public static function user(Teacher $teacher): Teacher
    {
        $teacher->school;

        return $teacher;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * School students
     *
     * @return UserCollection|JsonResponse
     * @throws Exception
     */
    public function students()
    {
        try {
            $user = Auth::user();
            $profile = $user->profile;

            if ($profile instanceOf Teacher) {
                $students = $profile->school->students->map(function ($student) {
                    return $student->user;
                });

                return new UserCollection($students);
            }
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => "Something went wrong getting the students"], Response::HTTP_BAD_REQUEST);
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
     * Teacher verify
     *
     * @urlParam teacher required The id of the teacher. Example: 1
     *
     * @param Teacher $teacher
     * @return JsonResponse
     */
    public function verify(Teacher $teacher): JsonResponse
    {
        try {
            $teacher->verified = true;
            $teacher->save();

            return response()->json(['message' => "teacher \"{$teacher->fullName()}\" successfully verified"]);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while verifying the company'], Response::HTTP_BAD_REQUEST);
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
