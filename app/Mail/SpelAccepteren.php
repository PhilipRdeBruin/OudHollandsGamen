<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SpelAccepteren extends Mailable
{
    use Queueable, SerializesModels;

    protected $actiefSpel;
    protected $speler;
    protected $pivotId;
    protected $hostGebr;
    protected $spelnaam;
    
    
    /**
    * Create a new message instance.
    *
    * @return void
    */
    public function __construct($actiefSpel, $speler, $pivotId, $hostGebr, $spelnaam)
    {
        
        $this->actiefSpel = $actiefSpel;
        $this->speler = $speler;
        $this->pivotId = $pivotId;
        $this->hostGebr = $hostGebr;
        $this->spelnaam = $spelnaam;
        
        
    }

    /**
    * Build the message.
    *
    * @return $this
    */
    public function build()
    {
        return $this->view('spelaccepterenmail', [
            'actiefSpel' => $this->actiefSpel,
            'speler' => $this->speler,
            'pivotId' => $this->pivotId,
            'hostGebr' => $this->hostGebr,
            'spelnaam' => $this->spelnaam
            
        ]);
    }
}
