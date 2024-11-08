<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:2000',
    ];

    public function submit()
    {
        $this->validate();

        // Send the email
        Mail::raw($this->message, function ($mail) {
            $mail->to('recipient@example.com') // Replace with your email
                 ->from($this->email, $this->name)
                 ->subject('New Contact Form Submission');
        });

        // Reset the form fields
        $this->reset(['name', 'email', 'message']);

        // Send a confirmation message to the user
        session()->flash('message', 'Your message has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
