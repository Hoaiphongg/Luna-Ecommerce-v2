<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartIconComponet extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    
    public function render()
    {
        return view('livewire.cart-icon-componet');
    }
}