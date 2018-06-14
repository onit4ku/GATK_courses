<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCopy extends Mailable
{
    use Queueable, SerializesModels;
    public $name,  $email, $institution, $position, $gala ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $institution, $position, $gala)
    {
        $this->name = $name;
        $this->email = $email;
        $this->institution = $institution;
        $this->position = $position;
        $this->gala = $gala;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('cursogatk2018@clinbioinfosspa.es')->subject('Nuevo inscrito')->view('emails.copy');

    }
}
