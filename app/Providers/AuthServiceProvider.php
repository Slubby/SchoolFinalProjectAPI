<?php

namespace App\Providers;

use App\Models\Supervisor;
use App\Models\Teacher;
use App\Models\Vacancy;
use App\Policies\CompanyPolicy;
use App\Policies\Company\SupervisorPolicy;
use App\Policies\Company\VacancyPolicy;
use App\Policies\TeacherPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\Component;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Component::class => CompanyPolicy::class,
        Supervisor::class => SupervisorPolicy::class,
        Vacancy::class => VacancyPolicy::class,
        Teacher::class => TeacherPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
