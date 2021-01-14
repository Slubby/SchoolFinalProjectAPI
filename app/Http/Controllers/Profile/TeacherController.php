<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Teacher
 * @authenticated
 *
 * APIs for Teachers
 */
class TeacherController extends Controller
{
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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
