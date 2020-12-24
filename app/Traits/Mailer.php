<?php


namespace App\Traits;

use Exception;

trait Mailer
{
    /**
     * @throws Exception
     */
    public function setMail(): void
    {
        $mailer = config("mailer.accounts.{$this->data->mailer}", false);

        if ($mailer) {
            $name = $mailer['name'] ?? env('MAIL_FROM_NAME');
            $this->from($mailer['username'], $name);
            $this->onQueue('mail');
        } else {
            throw new Exception('Mail name not in config file mailer');
        }
    }
}
