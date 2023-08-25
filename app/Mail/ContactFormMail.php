<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $subject;
    public $phone;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param  string  $name
     * @param  string  $email
     * @param  string  $subject
     * @param  string  $phone
     * @param  string  $message
     * @return void
     */
    public function __construct($name, $email, $subject, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $name = $this->name;
        $email = $this->email;
        $phone = $this->phone;
        $messages = $this->message;
        $subject = $this->subject;
        return $this->from($this->email)
            ->subject('Nuevo mensaje de contacto de Digitaltei.')
            ->view('email.contact-form',compact('name','email','phone','messages','subject'));
    }
}
