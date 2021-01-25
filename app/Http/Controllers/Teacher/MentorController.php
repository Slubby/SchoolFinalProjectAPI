<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Profile\StudentController;
use App\Http\Requests\Teacher\StudentChangeRequest;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\JobApplication;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


/**
 * @group Teacher
 * @authenticated
 *
 * APIs for Teacher
 */
class MentorController extends Controller
{
    /**
     * Teacher class students
     *
     * @return UserCollection|JsonResponse
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->profile instanceof Teacher) {
            $students = $user->students->map(function ($student) {
                return $student->user;
            });

            return new UserCollection($students);
        }

        return response()->json(['message' => 'Something went wrong while getting the students']);
    }

    /**
     * Teacher create student
     *
     * @param UserCreateRequest $request
     * @return UserResource|JsonResponse
     */
    public function store(UserCreateRequest $request)
    {
        $validation = (object) $request->validated();

        try {
            $user = new User();

            $user->email = $validation->email;
            $user->mobile = $validation->mobile;
            $user->password = Hash::make($validation->password);

            $user->save();

            $profile = StudentController::createOrUpdate($validation, new Student());

            $profile->user()->save($user);

            if (VerificationController::emailVerifyCode($user)) {
                return (new UserResource($user))->additional(['message' => "The student account is successfully created"]);
            }

            return response()->json(['message' => 'Something went wrong while sending the email'], Response::HTTP_BAD_REQUEST);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while creating a student account'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Teacher get student
     *
     * @urlParam user required The id of the student. Example: 1
     *
     * @param User $user
     * @return UserResource|JsonResponse
     */
    public function show(User $user)
    {
        $profile = Auth::user()->profile;

        if ($profile instanceof Teacher) {
            return new UserResource($user);
        }

        return response()->json(['message' => 'Something went wrong while getting the students']);
    }

    /**
     * Teacher completed job application
     *
     * @urlParam user required The id of the student. Example: 1
     * @urlParam jobApplication required The id of the job application. Example: 1
     *
     * @param User $user
     * @param JobApplication $jobApplication
     * @return JsonResponse
     */
    public function completed(User $user, JobApplication $jobApplication): JsonResponse
    {
        try {
            if ($jobApplication->status === 'accepted') {
                $jobApplication->status = 'completed';
                $jobApplication->save();

                return response()->json(['message' => 'The job application is successfully completed']);
            }

            return response()->json(['message' => "The Student wasn't accepted for this job application"], Response::HTTP_BAD_REQUEST);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while completing the student job application'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Teacher update student
     *
     * @urlParam user required The id of the student. Example: 1
     *
     * @param StudentChangeRequest $request
     * @param User $user
     * @return UserResource|JsonResponse
     */
    public function update(StudentChangeRequest $request, User $user)
    {
        $validation = (object) $request->validated();

        $profile = $user->profile;

        if ($profile instanceof Student) {
            StudentController::createOrUpdate($validation, $profile, true);

            return (new UserResource($user))->additional(['message' => 'The student is successfully updated']);
        }

        return response()->json(['message' => 'Something went wrong while updating a student'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Teacher delete Student
     *
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        try {
            $user->delete();

            return response()->json(['message' => 'The student is successfully deleted']);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while deleting the student'], Response::HTTP_BAD_REQUEST);
    }
}
