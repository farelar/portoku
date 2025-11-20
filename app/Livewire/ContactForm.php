<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // Process email sending here
        // Mail::to('your-email@example.com')->send(new ContactMail($this->all()));

        session()->flash('message', 'Pesan berhasil dikirim!');
        
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}