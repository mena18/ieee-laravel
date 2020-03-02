<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MegaEventsMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name, $serial, $event_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $serial, $event_name)
    {
        $this->name = $name;
        $this->serial = $serial;
        $this->event_name = $event_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("IEEE Event")->view('emails.megaevents')
            ->with([
                'name' => $this->name,
                'serial' => $this->serial,
                'event_name'=> $this->event_name
            ]);
    }
}
