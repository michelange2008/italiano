<?php

namespace App\Livewire;

use App\Models\Attribut;
use App\Models\Italiano;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Psy\CodeCleaner\IssetPass;

class Parola extends Component
{
    public Italiano $parola;
    public Collection $attributs;
    public Collection $tags;
    public Array $francais;
    public Array $nuova;
    public Array $etichette = [];
    public int $attribut_id;

    function mount($id)
    {
        $this->parola = Italiano::find($id);
        $this->nuova = [
            "id" => $this->parola->id,
            "name" => $this->parola->name,
            "francais" => $this->parola->francais->pluck('name', 'id')->toArray(),
            "attribut_id" => $this->parola->attribut->id,
        ];
        $this->etichette = $this->parola->tags->pluck('id')->toArray();
        $this->tags = Tag::all();
        $this->attributs = Attribut::all();
    }

    function edit()
    {
        $this->parola->name = $this->nuova['name'];
        $this->parola->attribut_id = $this->nuova['attribut_id'];
        $this->parola->save();
        $this->parola->tags()->sync($this->etichette);
        redirect()->route('lista');

    }

    public function render()
    {
        return view('livewire.parola');
    }
}
