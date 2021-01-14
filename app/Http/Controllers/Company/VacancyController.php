<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\VacancyRequest;
use App\Http\Resources\Company\VacancyCollection;
use App\Http\Resources\Company\VacancyResource;
use App\Models\Company;
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
class VacancyController extends Controller
{
    /**
     * @param object $data
     * @param Vacancy $vacancy
     * @param Company|null $company
     * @return Vacancy|false
     */
    public static function createOrUpdate(object $data, Vacancy $vacancy, Company $company = null)
    {
        try {
            if (!$vacancy->exists) {
                $vacancy->company_id = $company->id;
            }

            $vacancy->type_id = $data->type;
            $vacancy->title = $data->title;
            $vacancy->description = $data->description;
            $vacancy->about_us = $data->about_us;
            $vacancy->requirements = $data->requirements;
            $vacancy->total = $data->total;
            $vacancy->save();

            return $vacancy;
        } catch (Exception $e) {
            report($e);
        }

        return false;
    }

    /**
     * Vacancies
     *
     * @urlParam  company required The id of the company. Example: 1
     *
     * @param Company $company
     * @return VacancyCollection
     */
    public function index(Company $company): VacancyCollection
    {
        $vacancies = $company->vacancies()->get();

        return new VacancyCollection($vacancies);
    }

    /**
     * Vacancy create
     *
     * @urlParam  company required The id of the company. Example: 1
     *
     * @bodyParam  type integer required
     * @bodyParam  title string required
     * @bodyParam  description string required
     * @bodyParam  about_us string
     * @bodyParam  requirements array
     * @bodyParam  total integer
     *
     * @param VacancyRequest $request
     * @param Company $company
     * @return VacancyResource|JsonResponse
     */
    public function store(VacancyRequest $request, Company $company)
    {
        $validation = (object) $request->validated();

        if ($vacancy = self::createOrUpdate($validation, new Vacancy(), $company)) {
            return (new VacancyResource($vacancy))->additional(['message' => "The \"{$vacancy->title}\" vacancy is successfully created"]);
        }

        return response()->json(['message' => 'Something went wrong while creating the vacancy'], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Vacancy show
     *
     * @urlParam  company required The id of the company. Example: 1
     * @urlParam  vacancy required The id of the vacancy. Example: 1
     *
     * @param Company $company
     * @param Vacancy $vacancy
     * @return VacancyResource|JsonResponse
     */
    public function show(Company $company, Vacancy $vacancy)
    {
        try {
            $applied = $vacancy->applied;

            foreach ($applied as $item) {
                $item->user;
            }

            return new VacancyResource($vacancy);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => 'Something went wrong while getting the Vacancy']. Response::HTTP_BAD_REQUEST);
    }

    /**
     * Vacancy edit status
     *
     * @urlParam  company required The id of the company. Example: 1
     * @urlParam  vacancy required The id of the vacancy. Example: 1
     *
     * @param Company $company
     * @param Vacancy $vacancy
     * @return VacancyResource|JsonResponse
     */
    public function edit(Company $company, Vacancy $vacancy)
    {
        $status = $vacancy->is_closed ? 'opening' : 'closing';

        try {
            $vacancy->is_closed = !$vacancy->is_closed;
            $vacancy->save();

            return (new VacancyResource($vacancy))->additional(['message' => "The \"{$vacancy->title}\" vacancy is now {$status}"]);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => "Something went wrong while {$status} the \"{$vacancy->title}\" vacancy"], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Vacancy update
     *
     * @urlParam  company required The id of the company. Example: 1
     * @urlParam  vacancy required The id of the vacancy. Example: 1
     *
     * @bodyParam  type integer required
     * @bodyParam  title string required
     * @bodyParam  description string required
     * @bodyParam  about_us string
     * @bodyParam  requirements array
     * @bodyParam  total integer
     *
     * @param VacancyRequest $request
     * @param Company $company
     * @param Vacancy $vacancy
     * @return VacancyResource|JsonResponse
     */
    public function update(VacancyRequest $request, Company $company, Vacancy $vacancy)
    {
        $validation = (object) $request->validated();

        if ($updatedVacancy = self::createOrUpdate($validation, $vacancy)) {
            return (new VacancyResource($vacancy))->additional(['message' => "The \"{$updatedVacancy->title}\" vacancy is successfully updated"]);
        }

        return response()->json(['message' => "Something went wrong while updating the \"{$vacancy->title}\" vacancy"], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Vacancy delete
     *
     * @urlParam  company required The id of the company. Example: 1
     * @urlParam  vacancy required The id of the vacancy. Example: 1
     *
     * @param Company $company
     * @param Vacancy $vacancy
     * @return JsonResponse
     */
    public function destroy(Company $company, Vacancy $vacancy): JsonResponse
    {
        try {
            $title = $vacancy->title;
            $vacancy->delete();

            return response()->json(['message' => "The \"{$title}\" vacancy is successfully deleted"]);
        } catch (Exception $e) {
            report($e);
        }

        return response()->json(['message' => "Something went wrong while deleting the \"{$vacancy->title}\" vacancy"], Response::HTTP_BAD_REQUEST);
    }
}
