<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function supervisor(User $user, Company $company): bool
    {
        return $user->profile->id === $company->id;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function vacancy(User $user, Company $company): bool
    {
        return $user->profile->id === $company->id;
    }
}
