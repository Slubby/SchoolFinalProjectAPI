<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolRequest;
use App\Http\Resources\SchoolCollection;
use App\Http\Resources\SchoolResource;
use App\Http\Resources\UserCollection;
use App\Models\School;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * @group School
 *
 * APIs for School
 */
class SchoolController extends Controller
{
    /**
     * @param object $data
     * @param School $school
     * @return School|false
     */
    public static function school(object $data, School $school)
    {
        try {
            $school->name = $data->name;
            $school->save();

            return $school;
        } catch (Exception $e) {
            report($e);
        }

        return false;
    }

    /**
     * Schools
     *
     * @return SchoolCollection
     */
    public function index(): SchoolCollection
    {
        $schools = School::all();

        return new SchoolCollection($schools);
    }

    /**
     * @group Admin
     *
     * School create
     *
     * @authenticated
     *
     * @bodyParam name string required
     *
     * @param SchoolRequest $request
     * @return SchoolResource|JsonResponse
     */
    public function store(SchoolRequest $request)
    {
        $validation = (object) $request->validated();

        if ($school = self::school($validation, new School())) {
            return (new SchoolResource($school))->additional(['message' => "\"{$school->name}\" is successfully created"]);
        }

        return response()->json(['message' => 'Something went wrong while creating a school name'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * @group Admin
     *
     * School update
     *
     * @authenticated
     *
     * @urlParam school required The id of the school. Example: 1
     *
     * @bodyParam name string required
     *
     * @param SchoolRequest $request
     * @param School $school
     * @return SchoolResource|JsonResponse
     */
    public function update(SchoolRequest $request, School $school)
    {
        $validation = (object) $request->validated();

        if ($updateSchool = self::school($validation, $school)) {
            return (new SchoolResource($updateSchool))->additional(['message' => "\"{$school->name}\" is successfully updated"]);
        }

        return response()->json(['message' => "Something went wrong while updating \"{$school->name}\""], Response::HTTP_BAD_REQUEST);
    }

    /**
     * @group Admin
     *
     * School delete
     *
     * @authenticated
     *
     * @urlParam school required The id of the school. Example: 1
     *
     * @param School $school
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(School $school): JsonResponse
    {
        try {
            $name = $school->name;
            $school->delete();

            return response()->json(['message' => "\"{$name}\" is successfully deleted"]);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => "Something went wrong while deleting \"{$school->name}\""], Response::HTTP_BAD_REQUEST);
    }
}
