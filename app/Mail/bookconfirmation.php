<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class bookconfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $fullname;
    public $date;
    public $time;
    /**
    
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname, $date, $time)
    {
        $this->fullname = $fullname;
        $this->date = $date;
        $this->time = $time;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */


    public function build()
    {
        $fullname = $this->fullname;
        $time = $this->fullname;
        $date = $this->date;
        return $this->markdown('mail.bookconfirmation', compact('fullname','date', 'time'));
      
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'mail.bookconfirmation',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
