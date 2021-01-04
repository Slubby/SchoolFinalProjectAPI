<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
    use App\Http\Controllers\Profile\CompanyController;
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

Route::prefix('auth')->name('user.')->group(function () {
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
});
