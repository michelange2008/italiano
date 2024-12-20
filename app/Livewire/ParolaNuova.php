<?php

namespace App\Livewire;

use App\Models\Attribut;
use App\Models\Francais;
use App\Models\Italiano;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ParolaNuova extends Component
{
    public Collection $attributs;
    public Collection $tags;
    public Italiano $parola_nuova;
    public Array $nuova;
    protected $rules = [
        'nuova.name' => 'required|unique:App\Models\Italiano,name',
    ];
    protected $messages = [
        'nuova.name.unique' => "Questa parola è già nella lista"
    ];

    function mount()
    {
        $this->attributs = Attribut::all();
        $this->tags = Tag::orderBy("name")->get();
        $this->nuova = [
            "name" => request()->nome,
            "attribut_id" => "",
            "francais" => "",
            "tags" => [],
        ];  
    }

    function create()
    {
        $this->validate();
        $parola = new Italiano();
        $parola->name = strtolower(trim($this->nuova['name']));
        $parola->attribut_id = $this->nuova['attribut_id'];
        $parola->save();
        $francais = array_map('trim', explode(";", $this->nuova['francais']));
        foreach ($francais as $francai) {
            Francais::upsert([
                ['name' => $francai]
            ], uniqueBy: ["name"], update:['name']);
            $franc_table[] = Francais::where('name', $francai)->first()->id;
        }
        $parola->francais()->sync($franc_table);
        $parola->tags()->sync($this->nuova['tags']);
        $this->nuova = [
            "name" => "",
            "attribut_id" => "",
            "francais" => "",
            "tags" => [],
        ];
        session()->flash('message', 'Questa parola è stata aggiunta con successo');  
    }

    public function render()
    {
        return view('livewire.parola-nuova');
    }
}
