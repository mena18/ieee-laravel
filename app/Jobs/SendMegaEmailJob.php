<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\MegaEventsMail;
use Illuminate\Support\Facades\Mail;

class SendMegaEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
     public $mail, $name, $code, $title;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail, $name, $code, $title)
    {
        $this->mail = $mail;
        $this->name = $name;
        $this->code = $code;
        $this->title = $title;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->mail)->send(new MegaEventsMail($this->name, $this->code, $this->title));
    }
}
