<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobOfferRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $filename;
    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename, $info)
    {
        $this->filename = $filename;
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('emails.job-offers')
            ->with([
                'name' => $this->info['name'],
                'email' => $this->info['email'],
                'phone' => $this->info['phone'],
                'jobs' => $this->info['jobs'],
                'message' => $this->info['message'],
            ])
            ->subject('Nouvelle demande d\'emploi')
            ->from($this->info['email']);

        for ($i = 0; $i < count($this->filename); $i++) {
            $email->attach($this->filename[$i]);
        }

        return $email;
    }
}
