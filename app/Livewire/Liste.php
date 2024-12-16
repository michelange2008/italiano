<?php

namespace App\Livewire;

use App\Models\Attribut;
use App\Models\Francais;
use App\Models\Italiano;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class Liste extends Component
{
    public $parole;
    public $ricerca= "";
    public $attributs_id = [];
    public $francais_id = [];
    public $tags_id = [];
    public $tutti_button = false;
    public $sort = "alpha";

    function mount()
    {
        $this->parole = Italiano::orderBy('name')->get();    
    }

    function updated()
    {
        $this->attributs_id = Attribut::where('name', 'like', "%".$this->ricerca."%")->pluck('id')->toArray();
        $this->francais_id = Francais::where('name', 'like', "%".$this->ricerca."%")->pluck('id')->toArray();
        $ids = DB::table('francais_italiano')->whereIn('francais_id', $this->francais_id)->pluck('italiano_id')->toArray();
        $this->parole = Italiano::where('name', 'like', "%".$this->ricerca."%")
                        ->orWhereIn('attribut_id', $this->attributs_id )
                        ->orWhereIn('id', $ids )
                        ->orderBy("name")
                        ->get();
        $this->tutti_button = false;
    }

    function tag($id)
    {
        $tag = Tag::find($id);
        $this->tutti_button = true;
        $this->parole = $tag->italianos->sortBy("name");
    }

    function tutti()
    {
        $this->sort = "alpha";
        $this->tutti_button = false;
        $this->parole = Italiano::orderBy("name")->get();    
    }

    function recenti()
    {
        $this->sort = "date";
        $this->parole = Italiano::orderBy("created_at", 'desc')->get();
    }
    
    function delete($id)
    {
        Italiano::destroy($id);
        $this->maj();
    }

    function maj()
    {
        $this->parole = Italiano::orderBy('name')->get();    
    }

    public function render()
    {
        return view('livewire.liste');
    }
}
