<?php

namespace App\Policies;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeacherPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Teacher $teacher
     * @return mixed
     */
    public function verify(User $user, Teacher $teacher): bool
    {
        return $user->profile->school_id === $teacher->school_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Teacher $teacher
     * @return mixed
     */
    public function update(User $user, Teacher $teacher)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Teacher $teacher
     * @return mixed
     */
    public function delete(User $user, Teacher $teacher)
    {
        //
    }
}
