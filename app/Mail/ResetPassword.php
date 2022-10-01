<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Go Dental Reset Password")
        ->markdown('admin.mail.email-forgot')
        ->from('godentalnoreply@gmail.com', "Go Dental")
        ->with([
            'email' => $this->details['email'],
            'action_link' => $this->details['action_link']
        ]);


    }
}
