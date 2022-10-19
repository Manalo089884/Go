<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerVerifyMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $details;
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
        ->from('godentalsph@gmail.com','Go Dental')
        ->markdown('customer.mail.verify-email')
        ->with([
                'name' => $this->details['name'],
                'email' => $this->details['email'],
                'subject' => $this->details['subject'],
                'body' => $this->details['body'],
                'actionLink' => $this->details['actionLink'],

            ]);
    }
}
