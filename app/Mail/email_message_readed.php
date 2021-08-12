<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class email_message_readed extends Mailable
{
    public $datetime_readed;
    public $recipient_email;

    public function __construct($recipient_email, $datetime_readed)
    {
        $this->datetime_readed = $datetime_readed;
        $this->recipient_email = $recipient_email;
    }

    public function build()
    {
        return $this->subject('One Time Message - Message readed '.$this->recipient_email)
                    ->view('emails.email_message_readed');
    }
}
