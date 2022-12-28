<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('abdurasul2004.02@gmail.com', 'Denparviainen'),
            subject: 'Order',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */


    // public function build()
    // {
    //     return $this->from('mail.order', [
    //                      'name' => $this->data->name,
    //                      'email' => $this->data->email,
    //                      'message' => $this->data->message,
    //                  ]);
    // }


    public function content()
    {
        return new Content(
            view: 'mail.order',
            with: [
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'messages' => $this->data['messages'],
            ],
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
