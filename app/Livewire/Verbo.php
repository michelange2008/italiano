<?php

namespace App\Livewire;

use App\Models\Temp;
use Livewire\Component;

class Verbo extends Component
{
    public $tempi;

    function mount($id = "")
    {
       $this->tempi = Temp::all(); 
    }

    public function render()
    {
        return view('livewire.verbo');
    }
}
