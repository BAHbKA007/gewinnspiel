<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Teilnehmer;

class MailGewinnBenachrichtigung extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $teilnehmer;

    public function __construct(Teilnehmer $teilnehmer)
    {
        $this->teilnehmer = $teilnehmer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Gastro Neustart Gewinnbenachrichtigung für ".$this->teilnehmer->firma)
                    ->view('mail.gewinnbenachrichtigung');
    }
}
