<?php

namespace App\Livewire;

use App\Models\Conjugaison;
use App\Models\Temp;
use App\Models\Verbe;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Verbo extends Component
{
    public Collection $tempi;
    public String $tempo_sc;
    public array $coniugazione;
    public array $verbo_nuovo;

    function mount($id = "")
    {
        $this->tempi = Temp::all();
        $this->verbo_nuovo = config('verbi');
        $this->tempo_sc = "";
        if ($id != "") {
            $verbo = Verbe::find($id);
            $this->verbo_nuovo['italiano'] = $verbo->italiano;
            $this->verbo_nuovo['francese'] = $verbo->francese;
            $this->verbo_nuovo['irregolare'] = $verbo->irregolare;
        }
    }

    function salvare_verbo()
    {
        $nuovo = Verbe::updateOrCreate(
            ["italiano" => $this->verbo_nuovo['italiano']],
            [
                "francese" => $this->verbo_nuovo['francese'],
                "irregolare" => ($this->verbo_nuovo['irregolare']) ? 1 : 0,
            ]
            );

        foreach ($this->verbo_nuovo['coniugazione'] as $tempo => $con) {
            foreach ($con as $pp => $value) {
                if ($value != "") {
                    $temp = Temp::where('name', $tempo)->get();
                    $item = new Conjugaison();
                    $item->verbe_id = $nuovo->id;
                    $item->temp_id = $temp->id;
                    $item->subject = $pp;
                    $item->conjugated_form = $value;
                    $item->save();
                }
            }
        }


        $this->verbo_nuovo = config('verbi');
        // dd($nuovo);
    }

    public function render()
    {
        return view('livewire.verbo');
    }
}
