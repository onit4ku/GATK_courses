<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name, $email, $institution, $position, $gala, $dietary, $alhambra;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $institution, $position, $gala, $dietary, $alhambra)
    {
        $this->name = $name;
        $this->email = $email;
        $this->institution = $institution;
        $this->position = $position;
        $this->gala = $gala;
        $this->dietary = $dietary;
        $this->alhambra = $alhambra;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirmation of Submission - GATK2019')->view('emails.name');
    }
}
