<?php

namespace App\Policies;

use App\Exceptions\TypeNotFoundException;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class TypePolicy
{
    use HandlesAuthorization;

    /**
     * @param User|null $user
     * @param string $type
     * @return Response
     * @throws TypeNotFoundException
     */
    public function register(?User $user, string $type): Response
    {
        if (in_array($type, ['company', 'teacher'])) {
            return $this->allow();
        }

        throw new TypeNotFoundException("The type must be company or teacher");
    }

    /**
     * @param User|null $user
     * @param string $type
     * @return Response
     * @throws TypeNotFoundException
     */
    public function statusCompany(?User $user, string $type): Response
    {
        if (in_array($type, ['denied', 'approved'])) {
            return $this->allow();
        }

        throw new TypeNotFoundException("The type must be denied or approved");
    }
}
