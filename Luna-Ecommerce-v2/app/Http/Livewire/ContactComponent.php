<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $content;
    
    public function sendMessage(){
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->content = $this->content;
        $contact->save();
        session()->flash('message','Thanks, Your message has been sent successfully!');
    }
    
    public function render()
    {
        return view('livewire.contact-component');
    }
}