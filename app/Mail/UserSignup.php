<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\NormalUser;

class UserSignup extends Mailable
{
    use Queueable, SerializesModels;

    public $normaluser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(NormalUser $normaluser)
    {
        $this->normaluser=$normaluser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->normaluser->email,$this->normaluser->name)
        ->cc('abc@example.com')
        ->subject('Welcome to Natukair')
        ->markdown('emails.signup');
    }
}
