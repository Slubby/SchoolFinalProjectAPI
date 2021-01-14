<?php

namespace App\Policies\Company;

use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Auth\Access\HandlesAuthorization;

class VacancyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Vacancy $vacancy
     * @return mixed
     */
    public function view(User $user, Vacancy $vacancy): bool
    {
        return $user->profile->id === $vacancy->company_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Vacancy $vacancy
     * @return mixed
     */
    public function update(User $user, Vacancy $vacancy): bool
    {
        return $user->profile->id === $vacancy->company_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Vacancy $vacancy
     * @return mixed
     */
    public function delete(User $user, Vacancy $vacancy): bool
    {
        return $user->profile->id === $vacancy->company_id;
    }
}
