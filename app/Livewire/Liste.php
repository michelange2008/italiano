<?php

namespace App\Livewire;

use App\Models\Italiano;
use Livewire\Component;

class Liste extends Component
{
    public $parole;

    function mount()
    {
        $this->parole = Italiano::all();
    }

    public function render()
    {
        return view('livewire.liste');
    }
}
