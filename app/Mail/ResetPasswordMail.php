<?php

namespace App\Mail;

use App\Traits\Mailer;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels, Mailer;

    private object $data;

    /**
     * Create a new message instance.
     *
     * @param object $Data
     * @throws Exception
     */
    public function __construct(object $Data)
    {
        $this->data = $Data;
        $this->setMail();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): ResetPasswordMail
    {
        return $this->subject($this->data->subject)->markdown('mail.password.reset', [
                'url' => route('account.password.reset.token', ['verification_code' => $this->data->code]),
            ]);
    }
}
