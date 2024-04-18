<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PasswordForget extends Mailable
{
    use Queueable, SerializesModels;

    public $password;
    public $fullname;

    /**
     * Create a new message instance.
     */
    public function __construct($password, $fullname)
    {
        $this->password = $password;
        $this->fullname = $fullname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@dedissel.nl')
            ->view('emails.forgotPassword');
    }
}
