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
        return $user->id === $jobApplication->student_id;
    }

    /**
     * @param User $user
     * @param JobApplication $jobApplication
     * @return mixed
     */
    public function status(User $user, JobApplication $jobApplication): bool
    {
        return $user->vacancies->contains($jobApplication->vacancy_id);
    }

    /**
     * @param User $user
     * @param JobApplication $jobApplication
     * @return mixed
     */
    public function completed(User $user, JobApplication $jobApplication): bool
    {
        return $user->students->contains($jobApplication->student->profile);
    }
}
