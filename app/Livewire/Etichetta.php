<?php

namespace App\Livewire;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Etichetta extends Component
{
    public Collection $tags;
    public int $edit = 0;
    public Tag $tag_edit;
    public string $name;
    public string $nuova = "";

    function mount()
    {
        $this->maj();
    }

    function editer($id)
    {
        $this->edit = $id;    
    }

    function delete($id)
    {
        Tag::destroy($id);    
         
    }

    function update($id)
    {
        $tag = Tag::find($id);
        $tag->name = $this->name;
        $tag->save();
        $this->maj();
        $this->edit = 0;
    }

    function create()
    {
        $tag = new Tag();
        $tag->name = strtolower(trim($this->nuova));
        $tag->save();
        $this->nuova = "";
        $this->maj();
    }

    function maj()
    {
        $this->tags = Tag::orderBy("name")->get();    
    }

    public function render()
    {
        return view('livewire.etichetta');
    }
}
