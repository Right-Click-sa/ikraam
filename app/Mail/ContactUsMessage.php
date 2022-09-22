<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactUs;

class ContactUsMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The message instance.
     *
     * @var ContactUs
     */
    public $contactUs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactUs $contactUs)
     {
         $this->contactUs = $contactUs;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('frontend.mail.contactUsMessage');
    }
}
