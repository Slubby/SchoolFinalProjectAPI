<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolRequest;
use App\Http\Resources\SchoolCollection;
use App\Http\Resources\SchoolResource;
use App\Models\School;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SchoolController extends Controller
{
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
     * Display a listing of the resource.
     *
     * @return SchoolCollection
     */
    public function index(): SchoolCollection
    {
        $schools = School::all();

        return new SchoolCollection($schools);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SchoolRequest $request
     * @return SchoolResource|JsonResponse
     */
    public function store(SchoolRequest $request)
    {
        $validation = (object) $request->validated();

        if ($school = self::school($validation, new School())) {
            return (new SchoolResource($school))->additional(['message' => 'School name success fully created']);
        }

        return response()->json(['message' => 'Something went wrong while creating a school name'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SchoolRequest $request
     * @param School $school
     * @return SchoolResource|JsonResponse
     */
    public function update(SchoolRequest $request, School $school)
    {
        $validation = (object) $request->validated();

        if ($data = self::school($validation, $school)) {
            return (new SchoolResource($data))->additional(['message' => 'School name success fully updated']);
        }

        return response()->json(['message' => 'Something went wrong while updating the school name'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param School $school
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(School $school): JsonResponse
    {
        try {
            $school->delete();

            return response()->json(['message' => 'The School name is success fully deleted']);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while deleting the school name'], Response::HTTP_BAD_REQUEST);
    }
}
