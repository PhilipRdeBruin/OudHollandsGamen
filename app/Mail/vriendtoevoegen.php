<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class Vriendtoevoegen extends Mailable
{
    use Queueable, SerializesModels;
    private $gebruiker_id;
    private $vriend_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($gebruiker_id, $vriend_id)
    {
        $this->gebruiker_id = $gebruiker_id;
        $this->vriend_id = $vriend_id;    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('vriendtoevoegenmail', ['gebruiker_id' => $this->gebruiker_id, 'vriend_id' => $this->vriend_id]);
                
                
    }
}
