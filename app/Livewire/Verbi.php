<?php

namespace App\Livewire;

use App\Models\Conjugaison;
use App\Models\Verbe;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Verbi extends Component
{
    public $lista_di_verbi;
    public array $verbo_a_vedere;
    public array $verbo_coniugato;

    function mount()
    {
        $this->lista_di_verbi = Verbe::orderBy('italiano')->get();
    }

    function vedere_verbo($id)
    {
        $this->verbo_a_vedere['italiano'] = Verbe::find($id)->italiano;
        $coniugazione = DB::table('conjugaisons')->join('temps', 'conjugaisons.temp_id', 'temps.id')
                            ->select('temps.name as temps' , 'subject', 'conjugated_form')
                            ->where('verbe_id', $id)
                            ->get()->toArray();
        foreach ($coniugazione as $item) {
        $this->verbo_a_vedere['coniugazione'][$item->temps][$item->subject] = $item->conjugated_form;;
        }

    }

    function addCon($parola)
    {
        $verbo = Verbe::where('italiano', $parola)->first();
        return redirect()->route('verbo.edit', ['id' => $verbo->id]);
    }

    public function render()
    {
        return view('livewire.verbi');
    }
}
