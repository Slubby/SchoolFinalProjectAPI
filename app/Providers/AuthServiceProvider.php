<?php

namespace App\Providers;

use App\Models\JobApplication;
use App\Models\Supervisor;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Vacancy;
use App\Policies\CompanyPolicy;
use App\Policies\Company\SupervisorPolicy;
use App\Policies\Company\VacancyPolicy;
use App\Policies\JobApplicationPolicy;
use App\Policies\TeacherPolicy;
use App\Policies\TypePolicy;
use App\Policies\UserPolicy;
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
        User::class => UserPolicy::class,
        Vacancy::class => VacancyPolicy::class,
        Teacher::class => TeacherPolicy::class,
        Supervisor::class => SupervisorPolicy::class,
        JobApplication::class => JobApplicationPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('type-register', [TypePolicy::class, 'register']);
        Gate::define('type-status-company', [TypePolicy::class, 'statusCompany']);
    }
}
