<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('inorganicdrake@gmail.com')
                    ->markdown('emails.usermail')
                    ->subject($this->data['subject'])
                    ->with([
                        'subject' => $this->data['subject'], // Add this line
                        'fullname' => $this->data['fullname'],
                        'message' => $this->data['message'],
                        'date' => $this->data['date']
                    ]);
    }


}
