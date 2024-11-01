<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Contacts extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $details;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'details' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        Contact::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'details' => $this->details,
        ]);

        // Reset input fields
        $this->reset();

        // Optionally, you can show a success message or redirect
        session()->flash('message', 'Your message has been sent successfully!');
    }
    
    public function render()
    {
        return view('livewire.contacts')->title('E-commerce | Contact us');
    }
}

