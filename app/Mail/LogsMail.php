<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Logs;

class LogsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $logs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Logs $logs)
    {
        $this->logs = $logs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.email');
    }
}
