<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ManageContacts extends Component
{
    public $contacts;
    public $currentUrl;

    public function mount()
    {
        $this->contacts = Contact::all();
        $this->currentUrl = request()->segment(2);
    }

    public function delete($contactId)
{
    $contact = Contact::find($contactId);
    if ($contact) {
        $contact->delete();
        // Refresh the contacts list
        $this->contacts = Contact::all();
        session()->flash('message', 'Contact deleted successfully.');
    } else {
        session()->flash('error', 'Contact not found.');
    }
}

    public function render()
    {   
        return view('livewire.manage-contacts')->layout('admin-layout')->title('E-commerce | Manage Contact');
    }
}
