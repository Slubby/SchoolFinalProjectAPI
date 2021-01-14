<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Company
 * @authenticated
 *
 * APIs for Companies
 */
class CompanyController extends Controller
{
    /**
     * @param object $data
     * @param Company $company
     * @return Company|bool
     */
    public static function createOrUpdate(object $data, Company $company)
    {
        try {
            if (!$company->exists) {
                $company->number = $data->number;
                $company->name = $data->name;
            }

            $company->country = $data->country;
            $company->region = $data->region;
            $company->city = $data->city;
            $company->street = $data->street;
            $company->house_number = $data->house_number;
            $company->postal_code = $data->postal_code;
            $company->save();

            return $company;
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
     * @group Admin
     *
     * Company verify
     *
     * @urlParam company required The id of the company. Example: 1
     *
     * @param Company $company
     * @return JsonResponse
     */
    public function verify(Company $company): JsonResponse
    {
        try {
            $company->verified = true;
            $company->save();

            return response()->json(['message' => "Company \"{$company->name}\" successfully verified"]);
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
