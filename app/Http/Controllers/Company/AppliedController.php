<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JobApplication;
use App\Models\Vacancy;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Company
 * @authenticated
 *
 * APIs for Companies
 */
class AppliedController extends Controller
{
    /**
     * Applied change status
     *
     * @urlParam  company required The id of the company. Example: 1
     * @urlParam  vacancy required The id of the vacancy. Example: 1
     * @urlParam  job application required the id of the job application. Example: 1
     * @urlParam  type required The type of the status. Example: approved
     *
     * @param Company $company
     * @param Vacancy $vacancy
     * @param JobApplication $jobApplication
     * @param string $type
     * @return JsonResponse
     */
    public function edit(Company $company, Vacancy $vacancy, JobApplication $jobApplication, string $type): JsonResponse
    {
        try {
            if (!in_array($jobApplication->status, ['cancelled', 'completed'])) {
                return response()->json(['message' => "You can't change the status of this job application"], Response::HTTP_BAD_REQUEST);
            }

            $jobApplication->status = $type;
            $jobApplication->save();

            return response()->json(['message' => 'The status has been changed for this application']);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while changing the status of the job application'], Response::HTTP_BAD_REQUEST);
    }
}
