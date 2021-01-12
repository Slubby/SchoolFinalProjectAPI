<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdvertisementCollection;
use App\Http\Resources\AdvertisementResource;
use App\Models\Student;
use App\Models\Vacancy;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * @group Advertisement
 *
 * APIs for Companies
 */
class AdvertisementController extends Controller
{
    /**
     * Advertisements
     *
     * @return AdvertisementCollection|JsonResponse
     */
    public function index()
    {
        $advertisements = Vacancy::whereIsClosed(false)->get(['id', 'title', 'description', 'type_id']);

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

        return new AdvertisementCollection($advertisements);
    }

    /**
     * Display the specified resource.
     *
     * @param Vacancy $vacancy
     * @return AdvertisementResource|JsonResponse
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

            return new AdvertisementResource($vacancy);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => ''], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Vacancy $vacancy
     * @return JsonResponse
     */
    public function apply(Vacancy $vacancy): JsonResponse
    {
        try {
            if ($vacancy->is_closed) {
                return response()->json(['message' => "This vacancy is closed. you can't apply to this vacancy"], Response::HTTP_BAD_REQUEST);
            }

            $profile = Auth::user()->profile;

            if ($profile instanceof Student) {
                $applied = $vacancy->studentApplied($profile);

                if ($applied) {
                    return response()->json(['message' => 'You are already applied to this vacancy'], Response::HTTP_BAD_REQUEST);
                }

                $vacancy->applied()->attach($profile->id);

                return response()->json(['message' => 'You successfully applied to this vacancy']);
            }
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while applying to this vacancy'], Response::HTTP_BAD_REQUEST);
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
