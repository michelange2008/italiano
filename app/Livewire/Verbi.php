<?php

namespace App\Livewire;

use App\Models\Verbe;
use Livewire\Component;

class Verbi extends Component
{
    public $lista_di_verbi;
    public $verbo_a_vedere;

    function mount()
    {
        $this->lista_di_verbi = Verbe::orderBy('italiano')->get();
    }

    function vedere_verbo($id)
    {
        $this->verbo_a_vedere = Verbe::find($id);
    }

    public function render()
    {
        return view('livewire.verbi');
    }
}
