<?php

namespace App\Livewire;

use App\Models\Italiano;
use Livewire\Component;

class Parola extends Component
{
    public Italiano $parola;

    function mount($id)
    {
        $this->parola = Italiano::find($id);    
    }

    public function render()
    {
        return view('livewire.parola');
    }
}
