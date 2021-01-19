<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('existsProfile', function($attribute, $value, $parameters, $validator) {
            return User::whereProfileType($parameters[0])->whereId($value)->exists();
        }, 'The selected :attribute is invalid.');
    }
}
