<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendReqisterFormCreator extends Mailable
{
    use Queueable, SerializesModels;
    public $token;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token,$name)
    {
        $this->token = $token;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.users.reqister_form_creator')->with(['token' => $this->token,'name' => $this->name]);
    }
}
