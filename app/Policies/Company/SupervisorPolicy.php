<?php

namespace App\Policies\Company;

use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SupervisorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Supervisor $supervisor
     * @return mixed
     */
    public function update(User $user, Supervisor $supervisor): bool
    {
        return $user->id === $supervisor->company_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Supervisor $supervisor
     * @return mixed
     */
    public function delete(User $user, Supervisor $supervisor): bool
    {
        return $user->id === $supervisor->company_id;
    }
}
