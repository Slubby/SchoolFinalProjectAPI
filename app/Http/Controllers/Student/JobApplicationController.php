<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobApplicationCollection;
use App\Http\Resources\JobApplicationResource;
use App\Models\JobApplication;
use App\Models\Student;
use App\Models\Vacancy;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

/**
 * @group Job Application
 * @authenticated
 *
 * APIs for Job Applications
 */
class JobApplicationController extends Controller
{
    /**
     * job Applications
     *
     * @return JobApplicationCollection|JsonResponse
     */
    public function index()
    {
        try {
            $profile = Auth::user()->profile;

            if ($profile instanceof Student) {
                $applications = $profile->jobApplications()->get(['job_applications.id', 'company_id', 'type_id', 'title', 'description']);

                return new JobApplicationCollection($applications);
            }
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while getting your job applications'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Job Application apply
     *
     * @urlParam vacancy required The id of the vacancy.
     *
     * @param Vacancy $vacancy
     * @return JsonResponse
     */
    public function apply(Vacancy $vacancy): JsonResponse
    {
        try {
            if ($vacancy->is_closed) {
                return response()->json(['message' => "This vacancy is closed. you can't apply to this job application"], Response::HTTP_BAD_REQUEST);
            }

            $profile = Auth::user()->profile;

            if ($profile instanceof Student) {
                $applied = $vacancy->studentApplied($profile);

                if (!is_null($applied)) {
                    return response()->json(['message' => 'You are already applied to this job application'], Response::HTTP_BAD_REQUEST);
                }

                $vacancy->applied()->attach($profile->id);

                return response()->json(['message' => 'You successfully applied to this job application']);
            }
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while applying to this job application'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Job Application show
     *
     * @urlParam jobApplication required The id of the job application.
     *
     * @param JobApplication $jobApplication
     * @return JobApplicationResource|JsonResponse
     */
    public function show(JobApplication $jobApplication)
    {
        try {
            $profile = Auth::user()->profile;

            if ($profile instanceof Student) {
                $application = $profile->jobApplications()->wherePivot('id', $jobApplication->id)->firstOrFail();

                return new JobApplicationResource($application);
            }
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while getting your job applications'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Job Application cancel
     *
     * @urlParam jobApplication required The id of the job application.
     *
     * @param JobApplication $jobApplication
     * @return JsonResponse
     */
    public function cancel(JobApplication $jobApplication): JsonResponse
    {
        try {
            if ($jobApplication->status === 'cancelled') {
                return response()->json(['message' => 'You are already cancelled your job application'], Response::HTTP_BAD_REQUEST);
            }

            $jobApplication->status = 'cancelled';
            $jobApplication->save();

            return response()->json(['message' => 'You successfully cancel your job application']);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while cancelling your job application']);
    }
}
