<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-association')->with([
            'name' => $this->contact['name'],
            'email' => $this->contact['email'],
            'phone' => $this->contact['phone'],
            'object' => $this->contact['object'],
            'message' => $this->contact['message'],
        ])->from($this->info['email'])
        ->subject('Contact');
    }
}
