<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Teilnehmer;

class MailBestaetigung extends Mailable
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
        $subject = [
            "bitte bestätigen Sie ".$this->teilnehmer->email,
            $this->teilnehmer->email." muss noch bestätigt werden"
        ];

        return $this->subject($subject[random_int (0, 1)])
                    ->view('mail.bestaetigung');
    }
}
