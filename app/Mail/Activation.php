<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

//class Activation extends Mailable implements ShouldQueue
class Activation extends Mailable
{
//    use Queueable, SerializesModels;
    use  SerializesModels;

    public $user;
    public $code;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $activation_code
     */
    public function __construct($user,$code)
    {
        $this->code = $code;
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.activation');
    }
}
