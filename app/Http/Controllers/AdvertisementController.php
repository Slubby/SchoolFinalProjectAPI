<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobApplicationCollection;
use App\Http\Resources\JobApplicationResource;
use App\Models\Student;
use App\Models\Vacancy;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

/**
 * @group Advertisement
 * @authenticated
 *
 * APIs for Companies
 */
class AdvertisementController extends Controller
{
    /**
     * Advertisements
     *
     * @return JobApplicationCollection|JsonResponse
     */
    public function index()
    {
        $advertisements = Vacancy::whereIsClosed(false)->get(['id', 'type_id', 'company_id', 'title', 'description']);

        if (Auth::check()) {
            $profile = Auth::user()->profile;

            if ($profile instanceof Student) {
                $advertisements = $advertisements->where('type_id', $profile->education_id);

                foreach ($advertisements as $advertisement) {
                    $applied = $advertisement->studentApplied($profile);

                    if (!is_null($applied)) {
                        $advertisement->setRelation('applied', $applied);
                    }
                }
            }
        }

        if (count($advertisements) === 0) {
            return response()->json(['message' => 'There are no vacancies found at this moment']);
        }

        return new JobApplicationCollection($advertisements);
    }

    /**
     * Advertisement show
     *
     * @urlParam vacancy required The id of the vacancy.
     *
     * @param Vacancy $vacancy
     * @return JobApplicationResource|JsonResponse
     */
    public function show(Vacancy $vacancy)
    {
        try {
            if (Auth::check()) {
                $profile = Auth::user()->profile;

                if ($profile instanceof Student) {
                    $applied = $vacancy->studentApplied($profile);

                    if (!is_null($applied)) {
                        $vacancy->setRelation('applied', $applied);
                    }
                }
            }

            return new JobApplicationResource($vacancy);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => ''], Response::HTTP_BAD_REQUEST);
    }
}
