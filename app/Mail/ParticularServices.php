<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ParticularServices extends Mailable
{
    use Queueable, SerializesModels;

    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.particular-services')->with([
            'name' => $this->info['name'],
            'email' => $this->info['email'],
            'phone' => $this->info['phone'],
            'services' => $this->info['services'],
            'message' => $this->info['message'],
        ])->from($this->info['email'])
        ->subject('Nouvelle demande de service particulier');
    }
}
