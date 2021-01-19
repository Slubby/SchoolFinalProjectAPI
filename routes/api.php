<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Company\AppliedController;
use App\Http\Controllers\Company\SupervisorController;
use App\Http\Controllers\Company\VacancyController;
use App\Http\Controllers\Profile\CompanyController;
use App\Http\Controllers\Profile\TeacherController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\Student\JobApplicationController;
use App\Http\Controllers\Teacher\MentorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->name('account.')->group(function () {
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('register/{type}', [RegisterController::class, 'register'])->name('register')->middleware('can:type-register,type');
    Route::get('refresh', [AuthController::class, 'refresh'])->name('refresh.token');
    Route::post('verify/account/{verification_code}', [VerificationController::class, 'check'])->name('verify.token');
    Route::get('recovery/account', [ForgotPasswordController::class , 'reset'])->name('password.reset');
    Route::post('password/reset/account/{verification_code}', [ResetPasswordController::class, 'check'])->name('password.reset.token');
});

Route::middleware('auth:api')->name('user.')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('user', [AuthController::class, 'user'])->name('information');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::patch('update', [AuthController::class, 'changeProfile'])->name('update');
        Route::patch('change/password', [AuthController::class, 'changePassword'])->name('change.password');
    });

    // Admin
    Route::middleware('permission:admin')->name('admin.')->group(function () {
        Route::prefix('school')->name('school.')->group(function () {
            Route::post('create', [SchoolController::class, 'store'])->name('create');

            Route::prefix('{school}')->group(function () {
                Route::patch('update', [SchoolController::class, 'update'])->name('update');
            });
        });

        Route::prefix('company')->name('company.')->group(function () {

            Route::prefix('{company}')->group(function () {
                Route::put('verify', [CompanyController::class, 'verify'])->name('verify');
            });
        });
    });

    // Company
    Route::prefix('c')->middleware('permission:company')->name('company.')->group(function () {

        Route::prefix('supervisor')->name('supervisor.')->group(function () {
            Route::get('/', [SupervisorController::class, 'index'])->name('all');
            Route::post('create', [SupervisorController::class, 'store'])->name('create');

            Route::prefix('{supervisor}')->group(function () {
                Route::patch('update', [SupervisorController::class, 'update'])->name('update')->middleware('can:update,supervisor');
                Route::delete('delete', [SupervisorController::class, 'destroy'])->name('delete')->middleware('can:delete,supervisor');
            });
        });

        Route::prefix('vacancy')->name('vacancy.')->group(function () {
            Route::get('/', [VacancyController::class, 'index'])->name('all');
            Route::post('create', [VacancyController::class, 'store'])->name('create');

            Route::prefix('{vacancy}')->group(function () {
                Route::get('show', [VacancyController::class, 'show'])->name('show')->middleware('can:view,vacancy');
                Route::put('edit', [VacancyController::class, 'edit'])->name('edit')->middleware('can:update,vacancy');
                Route::patch('update', [VacancyController::class, 'update'])->name('update')->middleware('can:update,vacancy');
                Route::delete('delete', [VacancyController::class, 'destroy'])->name('delete')->middleware('can:delete,vacancy');

                Route::prefix('applied/{jobApplication}')->name('applied')->middleware('can:view,vacancy')->group(function () {
                    route::put('status/{type}', [AppliedController::class, 'edit'])->name('change.status')->middleware(['can:status,jobApplication', 'can:type-status-company,type']);
                });
            });
        });
    });

    // Teacher
    Route::prefix('t')->middleware('permission:teacher')->name('teacher.')->group(function () {
        Route::get('students', [TeacherController::class, 'students'])->name('students');

        Route::prefix('mentor/class')->name('mentor.class.')->group(function () {
            Route::get('/', [MentorController::class, 'index'])->name('all');

            Route::prefix('{user}')->group(function () {

            });
        });

        Route::prefix('{teacher}')->group(function () {
            Route::put('verify', [TeacherController::class, 'verify'])->name('verify')->middleware('can:verify,teacher');
        });
    });

    // Student
    Route::prefix('s')->middleware('permission:student')->name('student.')->group(function () {

        Route::prefix('job/application')->name('job.application.')->group(function () {
            Route::get('/', [JobApplicationController::class , 'index'])->name('all');

            Route::prefix('{vacancy}')->group(function () {
                Route::put('apply', [JobApplicationController::class, 'apply'])->name('apply');
            });

            Route::prefix('{jobApplication}')->group(function () {
                Route::get('show', [JobApplicationController::class, 'show'])->name('show');
                Route::put('cancel', [JobApplicationController::class, 'cancel'])->name('cancel')->middleware('can:cancel,jobApplication');
            });
        });
    });
});

Route::name('open.')->group(function () {
    Route::get('school', [SchoolController::class, 'index'])->name('school');

    Route::prefix('advertisement')->name('advertisement.')->group(function () {
        Route::get('/', [AdvertisementController::class, 'index'])->name('all');
        Route::get('{vacancy}/show', [AdvertisementController::class, 'show'])->name('show');
    });
});
