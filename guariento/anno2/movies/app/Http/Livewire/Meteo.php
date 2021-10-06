<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;

class Meteo extends Component
{
    public $selection;
    public $numbers;
    //public $movie;

    public function mount()
    {
        $this->numbers = [1, 2, 3, 4, 5, 6, 7, 8];
    }

    public function render()
    {
        //$this->movie = Movie::with("directors")->find(1);
        //$this->movie->directors;
        return view('livewire.meteo');
    }

    public function selection()
    {
        if ($this->selection == 1) {
            $this->numbers = [1, 3, 5, 7];
        } else if ($this->selection == 2) {
            $this->numbers = [2, 4, 6, 8];
        } else {
            $this->numbers = [1, 2, 3, 4, 5, 6, 7, 8,];
        }
    }
}
