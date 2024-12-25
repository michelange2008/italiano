<?php

namespace App\Livewire;

use App\Models\Verbe;
use Livewire\Component;

class Verbi extends Component
{
    public $lista_di_verbi;

    function mount()
    {
        $this->lista_di_verbi = Verbe::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.verbi');
    }
}
