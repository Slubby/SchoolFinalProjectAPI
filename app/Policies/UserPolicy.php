<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewStudent(user $user, User $student)
    {
        return $user->id = $student->profile->mentor_id;
    }
}
