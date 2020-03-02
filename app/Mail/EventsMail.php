<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventsMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name, $event_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $event_name)
    {
        $this->name = $name;
        $this->event_name = $event_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("IEEE Event")->view('emails.events')
                    ->with([
                        'name' => $this->name,
                        'event_name'=> $this->event_name
                    ]);
    }
}
