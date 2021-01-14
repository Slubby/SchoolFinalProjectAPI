<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\SupervisorRequest;
use App\Http\Resources\Company\SupervisorCollection;
use App\Http\Resources\Company\SupervisorResource;
use App\Models\Company;
use App\Models\Supervisor;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * @group Company
 * @authenticated
 *
 * APIs for Companies
 */
class SupervisorController extends Controller
{
    /**
     * @param object $data
     * @param Supervisor $supervisor
     * @param Company|null $company
     * @return Supervisor|false
     */
    public function createOrUpdate(object $data, Supervisor $supervisor, Company $company = null)
    {
        try {
            if (!$supervisor->exists) {
                $supervisor->company_id = $company->id;
            }

            $supervisor->first_name = $data->first_name;
            $supervisor->middle_name = $data->middle_name ?? null;
            $supervisor->last_name = $data->last_name;
            $supervisor->save();

            return $supervisor;
        } catch (Exception $e) {
            report($e);
        }

        return false;
    }

    /**
     * Supervisors
     *
     * @urlParam  company required The id of the company. Example: 1
     *
     * @param Company $company
     * @return SupervisorCollection
     */
    public function index(Company $company): SupervisorCollection
    {
        $supervisors = $company->supervisors()->get();

        return new SupervisorCollection($supervisors);
    }

    /**
     * Supervisor create
     *
     * @urlParam company required The id of the company. Example: 1
     *
     * @bodyParam  first_name string required
     * @bodyParam  middle_name string
     * @bodyParam  last_name string required
     *
     * @param SupervisorRequest $request
     * @param Company $company
     * @return SupervisorResource|JsonResponse
     */
    public function store(SupervisorRequest $request, Company $company)
    {
        $validation = (object) $request->validated();

        if ($supervisor = self::createOrUpdate($validation, new Supervisor(), $company)) {
            return (new SupervisorResource($supervisor))->additional(['message' => "Supervisor \"{$supervisor->fullName()}\" is successfully created"]);
        }

        return response()->json(['message' => 'Something went wrong while creating a supervisor'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Supervisor update
     *
     * @urlParam  company required The id of the company. Example: 1
     * @urlParam  supervisor required The id of the supervisor. Example: 1
     *
     * @bodyParam  first_name string required
     * @bodyParam  middle_name string
     * @bodyParam  last_name string required
     *
     * @param SupervisorRequest $request
     * @param Company $company
     * @param Supervisor $supervisor
     * @return SupervisorResource|JsonResponse
     */
    public function update(SupervisorRequest $request, Company $company, Supervisor $supervisor)
    {
        $validation = (object) $request->validated();

        if ($updatedSupervisor = self::createOrUpdate($validation, $supervisor)) {
            return (new SupervisorResource($updatedSupervisor))->additional(['message' => "Supervisor \"{$updatedSupervisor->fullName()}\" was successfully updated"]);
        }

        return response()->json(['message' => "Something went wrong while updating supervisor \"{$supervisor->fullName()}\""], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Supervisor delete
     *
     * @urlParam  company required The id of the company. Example: 1
     * @urlParam  supervisor required The id of the supervisor. Example: 1
     *
     * @param Company $company
     * @param Supervisor $supervisor
     * @return JsonResponse
     */
    public function destroy(Company $company, Supervisor $supervisor): JsonResponse
    {
        try {
            $fullName = $supervisor->fullName();
            $supervisor->delete();

            return response()->json(['message' => "Supervisor \"{$fullName}\" is successfully deleted"]);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => "Something went wrong while deleting supervisor \"{$supervisor->fullName()}\""], Response::HTTP_BAD_REQUEST);
    }
}
