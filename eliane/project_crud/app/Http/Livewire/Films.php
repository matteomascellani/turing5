<?php

namespace App\Http\Livewire;

use App\Models\Film;
use Livewire\Component;
use Livewire\Request;
use App\Http\Requests\FilmRequest;

class Films extends Component
{
    public $titolo;
    public $categoria;
    public $tipologia;
    public $anno;

    public function resetInputFields(){
        $this->titolo='';
        $this->categoria='';
        $this->tipologia='';
        $this->anno=0;
    }

    public function store(FilmRequest $request){

        $film=Film::create($request->input('film'));
        session()->flash('message','create film successful');
        $this->resetInputFields();
        $this->emit('filmadded');
    }

    public function render()
    {
        $items = Film::orderBy('titolo','ASC')->get();
        return view('livewire.films',compact('items'));
    }
}
