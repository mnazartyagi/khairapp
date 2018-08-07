<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendToHospital extends Mailable
{
    use Queueable, SerializesModels;

    public $data,$tomail,$documents;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$tomail,$documents)
    {
        $this->data=$data;
        $this->tomail=$tomail;
        $this->documents=$documents;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message=$this->to($this->tomail)
        ->subject('Patient Details for treatment Plan')
        ->markdown('emails.sendtohospital');

        foreach ($this->documents as $document) {
            $message->attach('storage/'.$document->filename,[
                'as' => $document->file,
            ]);
        }

        return $message;
    }
}
