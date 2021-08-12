<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class email_confirm_message extends Mailable
{
    public $purl_code;

    public function __construct($purl_code)
    {
        $this->purl_code = $purl_code;
    }

    public function build()
    {
        return $this->subject('Message Confirmation')
                    ->view('emails.email_confirm_message');
    }
}
