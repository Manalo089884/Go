<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
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
        return $this->subject($this->details['subject'])
<<<<<<< HEAD
        ->from('godentalsph@gmail.com','Go Dental')
        ->markdown('customer.mail.contact-mail')
=======
        ->from($this->details['email'],$this->details['name'])
        ->markdown('template.ContactForm')
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        ->with([
                'name' => $this->details['name'],
                'subject' => $this->details['subject'],
                'message' => $this->details['message'],
                'email' => $this->details['email'],
                'phone' => $this->details['phone'],

            ]);
    }
}
