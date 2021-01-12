<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Company\SupervisorController;
use App\Http\Controllers\Company\VacancyController;
use App\Http\Controllers\Profile\CompanyController;
    use App\Http\Controllers\Profile\TeacherController;
    use App\Http\Controllers\SchoolController;
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
    Route::post('register/{type}', [RegisterController::class, 'register'])->name('register');
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

    Route::prefix('c')->middleware('permission:company')->name('company.')->group(function () {

        Route::prefix('{company}')->group(function () {

            Route::prefix('supervisor')->name('supervisor.')->group(function () {
                Route::get('/', [SupervisorController::class, 'index'])->name('all')->middleware('can:supervisor,company');
                Route::post('create', [SupervisorController::class, 'store'])->name('create')->middleware('can:supervisor,company');

                Route::prefix('{supervisor}')->group(function () {
                    Route::patch('update', [SupervisorController::class, 'update'])->name('update')->middleware('can:update,supervisor');
                    Route::delete('delete', [SupervisorController::class, 'destroy'])->name('delete')->middleware('can:delete,supervisor');
                });
            });

            Route::prefix('vacancy')->name('supervisor.')->group(function () {
                Route::get('/', [VacancyController::class, 'index'])->name('all')->middleware('can:vacancy,company');
                Route::post('create', [VacancyController::class, 'store'])->name('create')->middleware('can:vacancy,company');

                Route::prefix('{vacancy}')->group(function () {
                    Route::put('edit', [VacancyController::class, 'edit'])->name('edit')->middleware('can:update,vacancy');
                    Route::patch('update', [VacancyController::class, 'update'])->name('update')->middleware('can:update,vacancy');
                    Route::delete('delete', [VacancyController::class, 'destroy'])->name('delete')->middleware('can:delete,vacancy');
                });
            });
        });
    });

    Route::prefix('t')->middleware('permission:teacher')->name('teacher.')->group(function () {

        Route::prefix('{teacher}')->group(function () {
            Route::put('verify', [TeacherController::class, 'verify'])->name('verify')->middleware('can:verify,teacher');
        });
    });

    Route::prefix('s')->middleware('permission:student')->name('student.')->group(function () {

        Route::prefix('advertisement')->name('advertisement.')->group(function () {

            Route::prefix('{vacancy}')->group(function () {
                Route::put('apply', [AdvertisementController::class, 'apply'])->name('apply');
            });
        });
    });
});

Route::name('open.')->group(function () {
    Route::get('school', [SchoolController::class, 'index'])->name('school');

    Route::prefix('advertisement')->name('advertisement.')->group(function () {
        Route::get('/', [AdvertisementController::class, 'index'])->name('all');
        Route::get('{vacancy}', [AdvertisementController::class, 'show'])->name('show');
    });
});
