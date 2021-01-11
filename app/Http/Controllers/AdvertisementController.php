<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdvertisementCollection;
use App\Models\Student;
use App\Models\Vacancy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        $advertisements = Vacancy::whereIsClosed(false)->get();

        if (Auth::check()) {
            if (Auth::user()->profile instanceof Student) {
                $advertisements = $advertisements->where('type_id', Auth::user()->profile->education_id);
            }
        }

        if (count($advertisements) === 0) {
            return response()->json(['message' => 'There are no vacancies found at this moment']);
        }


        return new AdvertisementCollection($advertisements);
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
