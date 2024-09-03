<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UploadDeclinedNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $upload;

    /**
     * Create a new message instance.
     *
     * @param $upload
     * @return void
     */
    public function __construct($upload,$message)
    {
        $this->upload = $upload;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('inorganicdrake@gmail.com')
                    ->markdown('emails.approved')
                    ->subject('Property Inquiries')
                    ->with([
                        'message' => $this->message,
                    ]);
    }
}
