<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MarketingAdReminderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $date;
    public $time;
    public $type;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$date,$time,$type)
    {
        $this->name = $name;
        $this->date = $date;
        $this->time = $time;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.marketing_ad_reminder');
    }
}
