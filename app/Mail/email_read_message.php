<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class email_read_message extends Mailable
{
    public $purl_code;

    public function __construct($purl_code)
    {
        $this->purl_code = $purl_code;
    }

    public function build()
    {
        return $this->subject('You have a One Time Message')
                    ->view('emails.email_read_message');
    }
}
