<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CitasConfirmaMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /*
     * Envía el mensaje
     *
     * @return $this
     */
    public function build(): static
    {
        return $this->subject('Correo de la veterinaria El cachorro')
            ->view('emails.enviar');
    }
}
