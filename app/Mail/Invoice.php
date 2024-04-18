<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invoice extends Mailable
{
    use Queueable, SerializesModels;

    protected $pdf;
    protected $fullname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf, $fullname)
    {
        $this->pdf = $pdf;
        $this->fullname = $fullname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('noreply@dedissel.nl')
            ->view('mail.invoice')
            ->with([
                'fullname' => $this->fullname
            ])
            ->attachData($this->pdf, 'factuur.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
