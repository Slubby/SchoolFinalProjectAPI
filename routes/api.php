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

    Route::prefix('company')->middleware('permission:company')->name('company.')->group(function () {

        Route::prefix('{company}')->group(function () {

            Route::prefix('supervisor')->name('supervisor.')->group(function () {
                Route::get('/', [SupervisorController::class, 'index'])->name('all');
                Route::post('create', [SupervisorController::class, 'store'])->name('create');

                Route::prefix('{supervisor}')->group(function () {
                    Route::patch('update', [SupervisorController::class, 'update'])->name('update');
                    Route::delete('delete', [SupervisorController::class, 'destroy'])->name('delete');
                });
            });

            Route::prefix('vacancy')->name('supervisor.')->group(function () {
                Route::get('/', [VacancyController::class, 'index'])->name('all');
                Route::post('create', [VacancyController::class, 'store'])->name('create');

                Route::prefix('{vacancy}')->group(function () {
                    Route::put('edit', [VacancyController::class, 'edit'])->name('edit');
                    Route::patch('update', [VacancyController::class, 'update'])->name('update');
                    Route::delete('delete', [VacancyController::class, 'destroy'])->name('delete');
                });
            });
        });
    });

    Route::prefix('teacher')->middleware('permission:teacher')->name('teacher.')->group(function () {

        Route::prefix('{teacher}')->group(function () {
            Route::put('verify', [TeacherController::class, 'verify'])->name('verify');
        });
    });
});

Route::name('open.')->group(function () {
    Route::get('advertisement', [AdvertisementController::class, 'index'])->name('advertisement');
    Route::get('school', [SchoolController::class, 'index'])->name('school');
});
