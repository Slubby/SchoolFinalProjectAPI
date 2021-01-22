<?php

namespace App\Mail;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use WeDevelop4You\LaravelMultipleMailers\Mailer;

class ResetPasswordMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels, Mailer;

    private object $data;

    /**
     * Create a new message instance.
     *
     * @param object $data
     * @throws Exception
     */
    public function __construct(object $data)
    {
        $this->data = $data;
        $this->setMailerWithQueue($data->mailer);
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
