<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $students;
    public $selection;


    public function mount(){
          $this->students=["eliane","ly","max"];
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function choix(){
       if($this->selection==1){
        $this->students=["eliane"];
       }
       elseif($this->selection==2){
           $this->students=["ly"];

       }
       else{
           $this->students=["ly","eliane","max"];
       }
    }
}
