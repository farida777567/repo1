<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\App;




class DeclineMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $application;
    /** 
     *Create a new message instance. 
     *@param $application
     *@return void */
public function __construct($application){$this->application = $application;
}

    /** 
     *Build the message.
     *@return $this
     */
public function build()
{
    $message = "<p>Dear {$this->application->name},</p>
                <p>Unfortunately your application has been rejected! ;)</p>
                <p>Best wishes,<br>Farida</p>";

    return $this
                ->subject('Sorry Bad Luck')
                ->html($message);
}

}
