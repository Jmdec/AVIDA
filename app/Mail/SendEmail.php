<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
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
                    ->markdown('emails.sendemail')
                    ->subject($this->data['subject'])
                    ->with([
                        'subject' => $this->data['subject'], // Add this line
                        'fullname' => $this->data['fullname'],
                        'email' => $this->data['email'],
                        'phone' => $this->data['phone'],
                        'inquiry_type' => $this->data['inquiry_type'],
                        'message' => $this->data['message'],
                    ]);
    }


}
