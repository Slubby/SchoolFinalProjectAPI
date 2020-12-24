<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     * @throws Exception
     */
    public function boot()
    {
        $mailers = config("mailer.accounts", []);

        foreach ($mailers as $name => $mailer) {
            $providerName = $mailer['provider'] ?? 'default';
            $provider = config("mailer.provider.{$providerName}", false);

            if ($provider) {
                $newMailer = array_merge($provider, [
                    'username' => $mailer['username'],
                    'password' => $mailer['password'],
                ]);

                config(["mail.mailers.{$name}" => $newMailer]);
            } else {
                throw new Exception('The provider is not set in the config file mailer');
            }
        }
    }
}
