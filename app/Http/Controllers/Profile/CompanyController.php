<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * @param object $data
     * @return Company|bool
     */
    public static function create(object $data)
    {
        try {
            $company = new Company();

            $company->number = $data->number;
            $company->name = $data->name;
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
