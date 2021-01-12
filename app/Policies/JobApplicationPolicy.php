<?php

namespace App\Policies;

use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobApplicationPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param JobApplication $jobApplication
     * @return mixed
     */
    public function cancel(User $user, JobApplication $jobApplication): bool
    {
        return $user->profile->school_id === $jobApplication->student_id;
    }
}
