<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $uuid;

    public function __construct($uuid)
    {
        $this->uuid = $uuid;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@dedissel.nl')
            ->view('emails.confirm');
    }
}
